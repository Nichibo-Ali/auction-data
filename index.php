<?php

use Aws\S3\S3Client;
use Aws\S3\Exception\S3Exception;
use Aws\Common\Aws;
use Aws\Rds\RdsClient;
use Aws\Credentials\CredentialProvider;


require_once 'vendor\autoload.php';
require_once 'vehicleInformationChecks.php';


ini_set('max_execution_time', 1620); //27 minutes





/*=================================================================*/
#-------------------------------------------------------------------
#         START of the Script.
#		Must caoll loadAuctionFiltersFile() first before calling main_process
#
#==================================================================#
/*+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/


/*must call this method  first */
$global_Auction_Filter_Array = loadAuctionFiltersFile();
main_process();
echo "done";




// delete all the files in bucket
function deleteAllFilesInBucket()
{
	return;

	// $s3= getS3Client();
	// $bucket = getBucketName();
	// 	// Use the high-level iterators (returns ALL of your objects).
	// $objects = $s3->getIterator('ListObjects', array(
	// 	'Bucket' => $bucket,
	// 	'Prefix' => 'auctionFiles/',  //uncomment this if you want use
	// 	// 'Prefix'=>'auctionFiles_back_up/',
	// 	'Delimiter'=>'/'));
	// foreach ($objects as $keyInformation)
	// {
	// 	$key = $keyInformation['Key'];
	// 	if (preg_match("/\/$/", $key))
	// 	{
	// 	 	echo "<hr><br>ignore s3 folder $key</br>";
	// 	 	continue;
	// 	}
	// 	else
	// 	{
	// 		var_dump($s3->deleteObject( array('Bucket'=>$bucket, 'Key'=>$key)));
	// 	}

	// }

}



function loadAuctionFiltersFile()
{
	// Get an object.
	$result = getS3Client()->getObject(array(
	    'Bucket' => getBucketName(),
	    'Key'    => "auction_filters.php"
	));

	//get the content of the file/key and convert it to string
	$data = (string) $result['Body'];
	return json_decode($data,true);
}

function getAuctionHall_Info($resource, $hallName)
{
	$info = $resource[$hallName];
	return $info;
}

function getBucketName()
{
	$bucket= "nichibo-auction-imports";
	return $bucket;
}


function main_process()
{

	/*Warning must call this function before going any further*/
	global $global_Auction_Filter_Array;
	if($global_Auction_Filter_Array==null)
		$global_Auction_Filter_Array = loadAuctionFiltersFile();

	/*connect to bucket and get all the fines in bucket */
	$bucket= getBucketName();
	$s3= getS3Client();
	$s3->registerStreamWrapper();

	// Use the high-level iterators (returns ALL of your objects).
	$objects = $s3->getIterator('ListObjects', array(
		'Bucket' => $bucket,
		'Prefix' => 'auctionFiles/',
		'Delimiter'=>'/'));

	/*cycle throught the files one at a time*/
	foreach ($objects as $keyInformation)
	{
		/*get file name*/
		$key = $keyInformation['Key'];
		if (preg_match("/\/$/", $key))
		{
		 	echo "<hr><br>ignore s3 folder $key</br>";
		 	continue;
		}
		OpenStreamAndReadStreamContent($bucket,$key);
	}
}

function checkFileName($f)
{
	$fileName = strtolower($f);

	if(strpos($fileName, 'update')!==false)
		return "update";
	if(strpos($fileName, 'result')!==false)
		return "result";
	return "new";
}

//This is the table name of The RDS.
function getRDSTable()
{
	return 'auction_data';
}


/*connect to amazon Database TODO: move the credentials to external Config file or other method*/
function getRDSConnection()
{

	$config = require_once('dbconf.php');

	$host     =	$config['host'];
	$username = $config['username'];
	$password = $config['password'];
	$DBName   = $config['dbname'];

	//======================Connect to db========================
	// Create connection
	$conn = new mysqli($host, $username, $password,$DBName);
	// Check connection
	if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);
		// echo "Connected successfully<br>";
	return $conn;
}

function getS3Client()
{
	/*Todo: move the credentials to external config file or another method all together*/
	$provider = CredentialProvider::ini('project2','C:\Users\Ali\Desktop\credentials.ini');
	$provider = CredentialProvider::memoize($provider);

	return	$s3 = S3Client::factory(array(
		'credentials'=> $provider,
	    'version'=>'2006-03-01',
	    'region'=>'ap-southeast-2',
	   // 'debug'   => true
	));
}

/*move file from auctionFiles/ to auctionFiles_back_up folder*/
function backUpFile($bucket,$key)
{
	$s3 = getS3Client();
	$backUpfile = 'back_up_'.substr($key, strpos($key, "/") + 1);
	$s3->copyObject(array(
		'Bucket'     => $bucket,
		'Key'        => "auctionFiles_back_up/{$backUpfile}",
		'CopySource' => "{$bucket}/{$key}",
	));
}

/*delete the key/file from s3*/
function deleteFileFromS3($bucket, $key)
{	/*Bucket and key must start with caps*/
	$s3Client = getS3Client();
	return $s3Client->deleteObject(array('Bucket'=>$bucket,'Key'=>$key));
}

/*=========================================================================================================================
#

	//processs record and make sure it goes through all the Nichibo checks.
	the below part of the code is
	the most important
#
 #++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++#
#///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////#
 */
/*return 0 or 1/true.  */
function isAuctionAttended($location,$exhibitNo)
{
	global $global_Auction_Filter_Array;

	/*WARNING if the file is not load, the the array would not be initailized and all vehicles would be set attented*/
	/*get filters information from the auction filters array*/
	if(!isset($global_Auction_Filter_Array[$location]))
		return true; /*auction place does not exist in this arrays */
	$auctionInfo= $global_Auction_Filter_Array[$location];

	if(isset($auctionInfo['All']) && $auctionInfo['All']==true)
		return 0;
	if($exhibitNo>=$auctionInfo['start'] && $exhibitNo<=$auctionInfo['end'] )
		return true;
	return 0;
}


/*return the values to insert table  e.g (a, b, c, d)*/
function getInsertQueryValuesForRecord( $recordArray)
{

	$nihonId 		= $recordArray['ID'];
	$AuctionPlace 	= $recordArray['AuctionPlace'];
	$ExhibitNo 		= $recordArray['ExhibitNo'];
	$auctionNo 		= $recordArray['AuctionNo'];
	$AuctionDate  	= $recordArray['AuctionDate'];
	$Year 			= $recordArray['Year'];
	$Make 	 		= $recordArray['Make'];
	$Model  		= $recordArray['Model'];
	$Variant 		= $recordArray['Variant'];
	$Chassis 		= $recordArray['Chassis'];
	$Engine  		= $recordArray['Engine'];
	$KM 			= $recordArray['KM'];
	$Colour  		= $recordArray['Colour'];
	$EquipmentAC	= $recordArray['EquipmentAC'];
	$Equipment 		= $recordArray['Equipment'];
	$TM 			= $recordArray['TM']; /*shift or aka transmission*/
	$Fuel 			= $recordArray['Fuel'];
	$Grade			= $recordArray['Grading'];
	$StartPrice 	= $recordArray['StartPrice'];

	$origin_AuctionSheet    = $recordArray['AuctionSheet'];
	$origin_ImageFront   	= $recordArray['ImageFront'];
	$origin_ImageBack 	   	= $recordArray['ImageBack'];
	$origin_ImageInterior   = $recordArray['ImageInterior'];

	/*used to store downloaded image url*/
	$current_AuctionSheet   	= $origin_AuctionSheet;
	$current_ImageFront    		= $origin_ImageFront;
	$current_ImageBack 	   		= $origin_ImageBack;
	$current_ImageInterior  	= $origin_ImageInterior;

	$Other2 				= $recordArray['Other2'];
	$Other3  				= $recordArray['Other3'];
	$nzcomply				= $recordArray['nzcomply'];
	$attended				= $recordArray['attended'];

	unset($recordArray);

	/* list(a,b,c) = $recordArray;  */
	$insertValues ="('$nihonId','$AuctionPlace','$ExhibitNo','$auctionNo', '$AuctionDate','$Year', '$Make','$Model','$Variant','$Chassis','$Engine', '$TM',$KM,'$Colour', '$Equipment',
		'$EquipmentAC','$Fuel','$Grade', $StartPrice,Null,'$origin_ImageFront','$current_ImageFront', '$origin_ImageBack', '$current_ImageBack', '$origin_ImageInterior','$current_ImageInterior', '$origin_AuctionSheet','$current_AuctionSheet', '$Other2','$Other3', $attended,$nzcomply)";
	return $insertValues;
}

/*read the data on in the given stream, make sure to handle all error exceptions*/
function OpenStreamAndReadStreamContent($bucket,$key)
{
	// // Open a stream in read-only mode
	if (!($stream = fopen("s3://{$bucket}/{$key}", 'r'))) {
	    die('Could not open stream for reading');
	}
	$mode = checkFileName($key);
	echo "<br><h1>fileName = $key</h1><br><br>";
	if($mode=='result')
	{
		process_results($key,$stream);
				/*back up file*/
		backUpFile($bucket,$key);
		/*delete file*/
		deleteFileFromS3($bucket,$key);
		return;/*dont go any further*/
		exit();
	}

	$insertCount =0;
	$startTime = microtime(true);

	$finalArray =[];
	while (!feof($stream))
	{
		/*gets 4bytes or as soon as \n is encountered, whichever comes first*/
		$singleRecord = stream_get_line($stream, 4096, "\n");
		$result = processSingleRecord($singleRecord);
		if($result!==false)
			$finalArray[] = $result;
		$insertCount++;
	}

	$endOfProcessing=microtime(true)-$startTime;

	$trackQueryTime = microtime(true);
	// // Be sure to close the stream resource when you're done with it

	$dbConn = getRDSConnection();
	$tableName = getRDSTable();
	fclose($stream);

	if(strtolower($mode)=='update')
		bulkDelete($finalArray,$dbConn,$tableName);
	$endOfDeleteTime =microtime(true)-$trackQueryTime;

	/*insert file data into db*/
	$isInserted = bulkDataInsert($finalArray,$dbConn,$tableName);
	/*we can the back_up file and remove it from the curernt Directory */
	if($isInserted)
	{
		/*back up file*/
		backUpFile($bucket,$key);
		/*delete file*/
		deleteFileFromS3($bucket,$key);
	}
	else
	{
		//possible duplicates could be what caused the error. May be best to run bulkdelete with the current array
		bulkDelete($finalArray,$dbConn,$tableName);
		$attemptTwo = bulkDataInsert($finalArray,$dbConn,$tableName);
		// MAJOR ERROR. SEND NOTIFICATION TO ADMIN
		$attemptTwo = false;
		if($attemptTwo==false)
		{
			$fileName = "Error.txt";
			$fh= fopen($fileName,'a');
			$errorStatement = "\n\n===========Error Occured===========\n\nDate: ". date('d/m/Y')."\n\nSome or all data could not be inserted into $tableName for this this file: $key.\n\n\n";
			fwrite($fh, $errorStatement);
			fflush($fh);
			fclose($fh);
		}
	}

	$endOfInsertTime =microtime(true)-$trackQueryTime;
	/*close db connection*/
	$dbConn->close();

	echo "<hr><br>=========================================<br>";
	echo "<br> data processing time: $startTime vs $endOfProcessing <br>";
	echo "<br> data deletion : start = $trackQueryTime vs $endOfDeleteTime <br>";
	echo "<br> data insertions : start = $endOfDeleteTime vs $endOfInsertTime <br>";
	echo "<h1>Total inserts should be $insertCount</h1><hr>";

}


function bulkDelete($fullDataArray,$dbConn,$tableName)
{
	$nihonIDListString = "";
	foreach ($fullDataArray as $index => $singleRecord)
	{
		$nihonId = $singleRecord['ID'];
		$nihonIDListString.=$nihonId.', ';
	}
	/*cannot remove string in the middle. watch out for the space after the last comma*/
	$nihonIDListString =rtrim($nihonIDListString,', ');
	return $dbConn->query("delete from $tableName where Nihonid in ($nihonIDListString)");
}


/*insert the whole */
function bulkDataInsert($fullDataArray, $dbConn, $tableName)
{
	$bulkInsertStatement = "";

	$insertKeys = "insert into $tableName (
		`Nihonid`,`auctionPlace`,`ExhibitNo`,`auctionNo`,`auctionDate`,`year`,`make`,`model`,`variant`,`chassis`,`engine`,`shift`,`km`,`colour`,`equipment`, `equipmentAC`,`fuel`,`grade`,`start`,`soldPrice`,
		`origin_imageFront`,`current_imageFront`,
		`origin_imageback`,`current_imageback`,
		`origin_imageInterior`,`current_imageInterior`,
		`origin_auctionSheet`,`current_auctionSheet`,
		`other2`,`other3`,`attended`,`nzcomply`)";

			/*value building format*/
		// '$origin_ImageFront','$current_ImageFront',
		// '$origin_ImageBack', '$current_ImageBack',
		// '$origin_ImageInterior','$current_ImageInterior',
		// '$origin_AuctionSheet','$current_AuctionSheet',



	foreach ($fullDataArray as $index => $singleRecord)
	{
		$bulkInsertStatement.=getInsertQueryValuesForRecord($singleRecord).',';
	}

	$bulkInsertStatement =rtrim($bulkInsertStatement,',');

	$finalInsert = "$insertKeys values $bulkInsertStatement";

	echo "<hr><br><br>";
	$queryResult = $dbConn->query($finalInsert);

	var_dump($queryResult);
	return $queryResult;

}
/*sometime exploding by the e ||| doesn't work, so we try it without */
function ExplodeRecord($line)
{
	/*try exploding using encoding, if encoding doesn't work, explode without encoding*/
	$resultArray =Explode_RecordCheck($line, true);
	if($resultArray===false)
	{
		$resultArray =Explode_RecordCheck($line, false);
	}
	return $resultArray;
}

function Explode_RecordCheck($line,$applyEncoding)
{
	if($applyEncoding)
		$line =  mb_convert_encoding($line, "UTF-8", "Unicode");
	$recordArray = explode("|||", $line);

	/*
		array must be equal be or greater than 25. otherwise the order of information will be unclear.
		if >=25, we know what each index represents.
	*/
	if($recordArray==null)
		return false;
	if(count($recordArray)<25)
		return false;
	return $recordArray;
}


/*	check each record as per nichibo checks (see Nihoncars script.php) */
function processSingleRecord($line)
{
	$recordArray = ExplodeRecord($line);
	if($recordArray===false)
		return false;
	$cleanDataArray = cleanRecord($recordArray);
	return $cleanDataArray;
}


function cleanRecord($recordArray)
{

	$nihondID=preg_replace("/[^0-9]/", "",trim($recordArray[0])); /*nihonId*/
	$AuctionPlace=str_replace("|","",str_replace("'","''",trim($recordArray[1])));
	$AuctionPlace=UpdateAuctionHalls($AuctionPlace);
	$AuctionDate=str_replace("|","",str_replace("'","''",trim($recordArray[2])));;
	$AuctionNo=str_replace("|","",str_replace("'","''",trim($recordArray[3])));
	$Make=str_replace("|","",str_replace("'","''",trim($recordArray[4])));
	$Model=str_replace("|","",str_replace("'","''",trim($recordArray[5])));
	$ExhibitNo=str_replace("|","",str_replace("'","''",trim($recordArray[6])));
	$Year=str_replace("|","",str_replace("'","''",trim($recordArray[7])));
	$Variant=str_replace("|","",str_replace("'","''",trim($recordArray[8])));
	$Chassis=str_replace("|","",str_replace("'","''",trim($recordArray[9])));
	$Engine=str_replace("|","",str_replace("'","''",trim($recordArray[10])));
	$KM=preg_replace("/[^0-9]/", "",trim($recordArray[11]));
	$Colour=str_replace("|","",str_replace("'","''",trim($recordArray[12])));
	$EquipmentAC=str_replace("|","",str_replace("'","''",trim($recordArray[13])));
	$Equipment=str_replace("|","",str_replace("'","''",trim($recordArray[14])));
	$TM=str_replace("|","",str_replace("'","''",trim($recordArray[15])));
	$Fuel=str_replace("|","",str_replace("'","''",trim($recordArray[16])));
	$Grading=str_replace("|","",str_replace("'","''",trim($recordArray[17])));
	$StartPrice=preg_replace("/[^0-9]/", "",trim($recordArray[18]));
	$AuctionSheet=str_replace("|","",str_replace("'","''",trim($recordArray[19])));
	$ImageFront=str_replace("|","",str_replace("'","''",trim($recordArray[20])));
	$ImageBack=str_replace("|","",str_replace("'","''",trim($recordArray[21])));
	$ImageInterior=str_replace("|","",str_replace("'","''",trim($recordArray[22])));

	$Other2=preg_replace('/[^a-zA-Z0-9:.\s]/i','',str_replace("|","",str_replace("'","''",trim($recordArray[23]))));
	$Other3=(isset($recordArray[24])?preg_replace('/[^a-zA-Z0-9:.\s]/i','',str_replace("|","",str_replace("'","''",trim($recordArray[24])))):"");

	$EquipmentAC = strtolower($EquipmentAC);
	$Colour = ucfirst($Colour);
	$AuctionPlace = str_replace("|","",str_replace("'","''",trim($recordArray[1])));/*could be needed*/

	if($Grading < 0)
	{
		$Grading = "0";
	}
	$Grading=floatval($Grading);

	if($KM=='')
	{
		$KM=0;
	}
	if($KM >= 1)
	{
		$KM = intval($KM) * 1000;
	}

	if($StartPrice==''||$StartPrice>=9999)
	{
		$StartPrice=0;
	}
	if($StartPrice >= 1)
	{
		$StartPrice = intval($StartPrice) * 1000;
	}

	/*========================to be refactored=====================================*/

	list($Make, $Model, $Variant)=UpdateVehicleInformation($Make, $Model, $Variant);


	$nzcomply = FilterNZ($Year, $Make, $Model, $Variant, $Chassis, $KM);
	if($nzcomply==true || $Year<=(date("Y")-20) )
		$nzcomply = 1;
	else
		$nzcomply = 0;

	// $AuctionPlace = UpdateAuctionHalls($AuctionPlace);

	$attended = isAuctionAttended($AuctionPlace, $ExhibitNo);

	$cleanDataArray =
	[
		'ID' => $nihondID,
		'AuctionPlace' => $AuctionPlace ,
		'ExhibitNo' => $ExhibitNo,
		'AuctionDate' => $AuctionDate,
		'AuctionNo' => $AuctionNo,
		'Year' => $Year,
		'Make' => $Make,
		'Model' => $Model,
		'Variant' =>$Variant,
		'Chassis' =>$Chassis,
		'Engine' =>$Engine,
		'KM' => $KM,
		'Colour' =>$Colour,
		'EquipmentAC' => $EquipmentAC,
		'Equipment' =>$Equipment,
		'TM' => $TM,
		'Fuel' => $Fuel,
		'Grading' =>$Grading,
		'StartPrice' =>$StartPrice,

		'AuctionSheet' => $AuctionSheet,
		'ImageFront' =>$ImageFront,
		'ImageBack' => $ImageBack,
		'ImageInterior' => $ImageInterior,

		'Other2'=>$Other2,
		'Other3'=>$Other3,
		'attended'=>$attended,
		'nzcomply'=>$nzcomply,
	];

	/*this isn't really needed becuase the DB will trancate this anyway but its put in here for peace of mind*/
	$maxLength =	array(
		'AuctionPlace' 	=>	40,
		'Make' 		 	=>	50,
		'Model' 		=>	50,
		'Variant' 		=>  50,
		'Chassis'       =>  20,
		'TM' 			=>  5,			 /*transmission/shift*/
		'colour' 		=>  20,
		'Equipment' 	=>  50,
		'EquipmentAC' 	=>	50,
		'ImageFront' 	=>	50,
		'ImageBack' 	=>	50,
		'AuctionSheet' 	=>	50,
		'ImageInterior' =>	50,
		'Other2' 		=>	50,
		'Other3'		=>	50
	);


	/*
		modify the value so it each key points to the new substring value
		basically woks like a pointer in c. change the value the address (&val) points to
					++++update CleanDataArray values
	*/

	foreach($cleanDataArray as $key => &$val)
	{
		if(isset($maxLength[$key]))
			$val = trim(substr($val,0, $maxLength[$key]));
	}

	unset($maxLength);
	return $cleanDataArray;
}



function process_results($filename,$stream)
{
	$dbConn = getRDSConnection();
	$query_start_results="INSERT INTO auctionresults_temp(NihonId,AuctionPlace,AuctionNo,ExhibitNo,AuctionDate,SoldPrice,SoldStatus,Other) VALUES ";

	$bulkInsertStatement = "";
	while(($buffer = fgets($stream, 4096)) !==false)
	{
		$buffer = mb_convert_encoding($buffer, "UTF-8", "Unicode");
		$file_data=explode("|||",$buffer);

		if(count($file_data)>5)
		{
			$ID=preg_replace('/[^0-9]/','',$file_data[0]);
			$AuctionPlace=substr(trim($file_data[1]),0,50);
			$AuctionPlace=UpdateAuctionHalls($AuctionPlace);
			$AuctionDate=substr(trim($file_data[2]),0,10);
			$AuctionNo=preg_replace('/[^0-9]/','',$file_data[3]);
			$ExhibitNo=preg_replace('/[^0-9]/','',$file_data[4]);
			$SoldPrice=preg_replace('/[^0-9]/','',$file_data[5]);
			$SoldPrice=$SoldPrice*1000;
			$SoldStatus=substr(trim($file_data[6]),0,20);
			$Other=(isset($file_data[7]))?substr(trim($file_data[7]),0,50):'';
			$Other =str_replace('+++', '', $Other);
			$bulkInsertStatement.="('$ID','$AuctionPlace',$AuctionNo,'$ExhibitNo','$AuctionDate', '$SoldPrice','$SoldStatus', '$Other'),";
		}
	}
	$bulkInsertStatement = rtrim($bulkInsertStatement,',');

	$finalInsertStatement = $query_start_results.' '.$bulkInsertStatement;
	/*==============insert================*/
	$queryResult= $dbConn->query($finalInsertStatement);

	/*close connections*/
	fclose($stream);
	$dbConn->close();

}