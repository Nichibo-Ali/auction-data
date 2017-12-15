<?php

function UpdateVehicleInformation($Make, $Model, $Variant){


		if($Make=='European Ford'){	$Make='Ford'; }

		if(strlen($Variant) > 120){	$Variant = "";	}
		if($Make=='BMW' && $Model=='BMW'){
			$Model=$Variant;
		}


		if(preg_match('/^3 Series|^4 Series|5 Series|6 Series|7 Series|8 Series/',$Model)){

			$Make = "BMW";
			$Model = $Variant;
			$Variant = "";

			if(preg_match('/^318I/',$Model)){ $Model=str_replace("318I","",$Model); $Variant = "$Model $Variant";	$Model = "318I"; }
			if(preg_match('/^320I/',$Model)){ $Model=str_replace("320I","",$Model); $Variant = "$Model $Variant";	$Model = "320I"; }
			if(preg_match('/^323I/',$Model)){ $Model=str_replace("323I","",$Model); $Variant = "$Model $Variant";	$Model = "323I"; }
			if(preg_match('/^325I/',$Model)){ $Model=str_replace("325I","",$Model); $Variant = "$Model $Variant";	$Model = "325I"; }
			if(preg_match('/^330I/',$Model)){ $Model=str_replace("330I","",$Model); $Variant = "$Model $Variant";	$Model = "330I"; }
			if(preg_match('/^520I/',$Model)){ $Model=str_replace("520I","",$Model); $Variant = "$Model $Variant";	$Model = "520I"; }
			if(preg_match('/^525I/',$Model)){ $Model=str_replace("525I","",$Model); $Variant = "$Model $Variant";	$Model = "525I"; }
			if(preg_match('/^530I/',$Model)){ $Model=str_replace("530I","",$Model); $Variant = "$Model $Variant";	$Model = "530I"; }
			if(preg_match('/^540I/',$Model)){ $Model=str_replace("540I","",$Model); $Variant = "$Model $Variant";	$Model = "540I"; }
			if(preg_match('/^620I/',$Model)){ $Model=str_replace("620I","",$Model); $Variant = "$Model $Variant";	$Model = "620I"; }
			if(preg_match('/^630I/',$Model)){ $Model=str_replace("630I","",$Model); $Variant = "$Model $Variant";	$Model = "630I"; }
			if(preg_match('/^640I/',$Model)){ $Model=str_replace("640I","",$Model); $Variant = "$Model $Variant";	$Model = "640I"; }
			if(preg_match('/^650I/',$Model)){ $Model=str_replace("650I","",$Model); $Variant = "$Model $Variant";	$Model = "650I"; }
			if(preg_match('/^720I/',$Model)){ $Model=str_replace("720I","",$Model); $Variant = "$Model $Variant";	$Model = "720I"; }
			if(preg_match('/^730I/',$Model)){ $Model=str_replace("730I","",$Model); $Variant = "$Model $Variant";	$Model = "730I"; }
			if(preg_match('/^740I/',$Model)){ $Model=str_replace("740I","",$Model); $Variant = "$Model $Variant";	$Model = "740I"; }
			if(preg_match('/^750I/',$Model)){ $Model=str_replace("750I","",$Model); $Variant = "$Model $Variant";	$Model = "750I"; }
			if(preg_match('/^318/',$Model)){ $Model=str_replace("318","",$Model); $Variant = "$Model $Variant";	$Model = "318"; }
			if(preg_match('/^320/',$Model)){ $Model=str_replace("320","",$Model); $Variant = "$Model $Variant";	$Model = "320"; }
			if(preg_match('/^323/',$Model)){ $Model=str_replace("323","",$Model); $Variant = "$Model $Variant";	$Model = "323"; }
			if(preg_match('/^325/',$Model)){ $Model=str_replace("325","",$Model); $Variant = "$Model $Variant";	$Model = "325"; }
			if(preg_match('/^330/',$Model)){ $Model=str_replace("330","",$Model); $Variant = "$Model $Variant";	$Model = "330"; }
			if(preg_match('/^520/',$Model)){ $Model=str_replace("520","",$Model); $Variant = "$Model $Variant";	$Model = "520"; }
			if(preg_match('/^525/',$Model)){ $Model=str_replace("525","",$Model); $Variant = "$Model $Variant";	$Model = "525"; }
			if(preg_match('/^530/',$Model)){ $Model=str_replace("530","",$Model); $Variant = "$Model $Variant";	$Model = "530"; }
			if(preg_match('/^540/',$Model)){ $Model=str_replace("540","",$Model); $Variant = "$Model $Variant";	$Model = "540"; }
			if(preg_match('/^620/',$Model)){ $Model=str_replace("620","",$Model); $Variant = "$Model $Variant";	$Model = "620"; }
			if(preg_match('/^630/',$Model)){ $Model=str_replace("630","",$Model); $Variant = "$Model $Variant";	$Model = "630"; }
			if(preg_match('/^640/',$Model)){ $Model=str_replace("640","",$Model); $Variant = "$Model $Variant";	$Model = "640"; }
			if(preg_match('/^650/',$Model)){ $Model=str_replace("650","",$Model); $Variant = "$Model $Variant";	$Model = "650"; }
			if(preg_match('/^720/',$Model)){ $Model=str_replace("720","",$Model); $Variant = "$Model $Variant";	$Model = "720"; }
			if(preg_match('/^730/',$Model)){ $Model=str_replace("730","",$Model); $Variant = "$Model $Variant";	$Model = "730"; }
			if(preg_match('/^740/',$Model)){ $Model=str_replace("740","",$Model); $Variant = "$Model $Variant";	$Model = "740"; }
			if(preg_match('/^750/',$Model)){ $Model=str_replace("750","",$Model); $Variant = "$Model $Variant";	$Model = "750"; }
			if(preg_match('/^X3/',$Model)){ $Model=str_replace("X3","",$Model); $Variant = "$Model $Variant";	$Model = "X3"; }
			if(preg_match('/^X5/',$Model)){ $Model=str_replace("X5","",$Model); $Variant = "$Model $Variant";	$Model = "X5"; }
			if(preg_match('/^M3/',$Model)){ $Model=str_replace("M3","",$Model); $Variant = "$Model $Variant";	$Model = "M3"; }
			if(preg_match('/^M5/',$Model)){ $Model=str_replace("M5","",$Model); $Variant = "$Model $Variant";	$Model = "M5"; }
			if(preg_match('/^Z3/',$Model)){ $Model=str_replace("Z3","",$Model); $Variant = "$Model $Variant";	$Model = "Z3"; }
			if(preg_match('/^Z4/',$Model)){ $Model=str_replace("Z4","",$Model); $Variant = "$Model $Variant";	$Model = "Z4"; }



		}




	# foreign / other check
	if(preg_match('/^foreign \/ other/i',$Make)){


		if(preg_match('/^E-Class|^S-Class|V-Class|C-Class|B-Class|M-Class|A-Class|Cls-Class|G-Class|^CL$|G-Class/i',$Model)){


			$Make = "Mercedes Benz";
			$Model = "$Variant";
			$Variant = "";


			if(preg_match('/^A170/',$Model)){ $Model=str_replace("A170","",$Model); $Variant = "$Model $Variant"; $Model = "A170";}
			if(preg_match('/^A190/',$Model)){ $Model=str_replace("A190","",$Model); $Variant = "$Model $Variant"; $Model = "A190";}
			if(preg_match('/^C180/',$Model)){ $Model=str_replace("C180","",$Model); $Variant = "$Model $Variant"; $Model = "C180";}
			if(preg_match('/^C200/',$Model)){ $Model=str_replace("C200","",$Model); $Variant = "$Model $Variant"; $Model = "C200";}
			if(preg_match('/^C220/',$Model)){ $Model=str_replace("C220","",$Model); $Variant = "$Model $Variant"; $Model = "C220";}
			if(preg_match('/^C230/',$Model)){ $Model=str_replace("C230","",$Model); $Variant = "$Model $Variant"; $Model = "C230";}
			if(preg_match('/^C240/',$Model)){ $Model=str_replace("C240","",$Model); $Variant = "$Model $Variant"; $Model = "C240";}
			if(preg_match('/^C280/',$Model)){ $Model=str_replace("C280","",$Model); $Variant = "$Model $Variant"; $Model = "C280";}
			if(preg_match('/^C320/',$Model)){ $Model=str_replace("C320","",$Model); $Variant = "$Model $Variant"; $Model = "C320";}
			if(preg_match('/^CLK200/',$Model)){ $Model=str_replace("CLK200","",$Model); $Variant = "$Model $Variant"; $Model = "CLK200";}
			if(preg_match('/^CLK240/',$Model)){ $Model=str_replace("CLK240","",$Model); $Variant = "$Model $Variant"; $Model = "CLK240";}
			if(preg_match('/^CLK320/',$Model)){ $Model=str_replace("CLK320","",$Model); $Variant = "$Model $Variant"; $Model = "CLK320";}
			if(preg_match('/^CLK430/',$Model)){ $Model=str_replace("CLK430","",$Model); $Variant = "$Model $Variant"; $Model = "CLK430";}
			if(preg_match('/^E200/',$Model)){ $Model=str_replace("E200","",$Model); $Variant = "$Model $Variant"; $Model = "E200";}
			if(preg_match('/^E220/',$Model)){ $Model=str_replace("E220","",$Model); $Variant = "$Model $Variant"; $Model = "E220";}
			if(preg_match('/^E240/',$Model)){ $Model=str_replace("E240","",$Model); $Variant = "$Model $Variant"; $Model = "E240";}
			if(preg_match('/^E280/',$Model)){ $Model=str_replace("E280","",$Model); $Variant = "$Model $Variant"; $Model = "E280";}
			if(preg_match('/^E320/',$Model)){ $Model=str_replace("E320","",$Model); $Variant = "$Model $Variant"; $Model = "E320";}
			if(preg_match('/^E350/',$Model)){ $Model=str_replace("E350","",$Model); $Variant = "$Model $Variant"; $Model = "E350";}
			if(preg_match('/^E400/',$Model)){ $Model=str_replace("E400","",$Model); $Variant = "$Model $Variant"; $Model = "E400";}
			if(preg_match('/^E420/',$Model)){ $Model=str_replace("E420","",$Model); $Variant = "$Model $Variant"; $Model = "E420";}
			if(preg_match('/^E430/',$Model)){ $Model=str_replace("E430","",$Model); $Variant = "$Model $Variant"; $Model = "E430";}
			if(preg_match('/^E500/',$Model)){ $Model=str_replace("E500","",$Model); $Variant = "$Model $Variant"; $Model = "E500";}
			if(preg_match('/^ML320/',$Model)){ $Model=str_replace("ML320","",$Model); $Variant = "$Model $Variant"; $Model = "ML320";}
			if(preg_match('/^ML350/',$Model)){ $Model=str_replace("ML350","",$Model); $Variant = "$Model $Variant"; $Model = "ML350";}
			if(preg_match('/^ML4300/',$Model)){ $Model=str_replace("ML430","",$Model); $Variant = "$Model $Variant"; $Model = "ML430";}
			if(preg_match('/^S350/',$Model)){ $Model=str_replace("S350","",$Model); $Variant = "$Model $Variant"; $Model = "S350";}
			if(preg_match('/^S500/',$Model)){ $Model=str_replace("S500","",$Model); $Variant = "$Model $Variant"; $Model = "S500";}
			if(preg_match('/^S600/',$Model)){ $Model=str_replace("S600","",$Model); $Variant = "$Model $Variant"; $Model = "S600";}
			if(preg_match('/^SLK230/',$Model)){ $Model=str_replace("SLK230","",$Model); $Variant = "$Model $Variant"; $Model = "SLK230";}
			if(preg_match('/^SLK350/',$Model)){ $Model=str_replace("SLK350","",$Model); $Variant = "$Model $Variant"; $Model = "SLK350";}




		}





		if(preg_match('/^911$|^911 |^Boxster/i',$Model)){

			$Make = "Porsche";

		}





		if(preg_match('/^Jeep/i',$Model)){

			$Make = "Jeep";

		}


		if(preg_match('/^Mcc Smart Coupe|^Smart$|^Smart /i',$Model)){

			$Make = "MCC Smart";

		}





		if(preg_match('/^X3$|^X3 |^X5$|^X5 |^Mini$|^Mini |^M3$|^M3 /i',$Model)){

			$Make = "BMW";

		}


		if(preg_match('/^206$|^206 |^306$|^306 |^307$|^307 |^406|^607|^407/i',$Model)){

			$Make = "Peugeot";


			if(preg_match('/^206/i',$Model)){$Variant = "$Model"; $Model = "206"; $Variant=str_replace($Model,$Model.' ',$Variant);}
			if(preg_match('/^306/i',$Model)){$Variant = "$Model"; $Model = "306"; $Variant=str_replace($Model,$Model.' ',$Variant);}
			if(preg_match('/^307/i',$Model)){$Variant = "$Model"; $Model = "307"; $Variant=str_replace($Model,$Model.' ',$Variant);}
			if(preg_match('/^406/i',$Model)){$Variant = "$Model"; $Model = "406"; $Variant=str_replace($Model,$Model.' ',$Variant);}
			if(preg_match('/^607/i',$Model)){$Variant = "$Model"; $Model = "607"; $$Variant=str_replace($Model,$Model.' ',$Variant);}
			if(preg_match('/^TT/i',$Model)){$Variant = "$Model"; $Model = "TT"; $Variant=str_replace($Model,$Model.' ',$Variant);}



		}


		if(preg_match('/^Land Rover|^Freelander|^Range Rover/i',$Model)){

			$Make = "Land Rover";

		}


		if(preg_match('/^V70$|^V70 |^850$|^850 |^V40$|^V40 |^V50$|^V50 |^XC90$|^XC90 |^XC70$|^XC70 |^C70$|^C70 |^C30$|^C30 |^S40$|^S40 |^S60$|^S60 |^S80$|^S80 /i',$Model)){

			$Make = "Volvo";

			if(preg_match('/^V70/',$Model)){ $Model=str_replace("V70","",$Model); $Variant = "$Model $Variant";	$Model = "V70"; }
			if(preg_match('/^850/',$Model)){ $Model=str_replace("850","",$Model); $Variant = "$Model $Variant";	$Model = "850"; }
			if(preg_match('/^V40/',$Model)){ $Model=str_replace("V40","",$Model); $Variant = "$Model $Variant";	$Model = "V40"; }
			if(preg_match('/^V50/',$Model)){ $Model=str_replace("V50","",$Model); $Variant = "$Model $Variant";	$Model = "V50"; }
			if(preg_match('/^XC90/',$Model)){ $Model=str_replace("XC90","",$Model); $Variant = "$Model $Variant";	$Model = "XC90"; }
			if(preg_match('/^XC70/',$Model)){ $Model=str_replace("XC70","",$Model); $Variant = "$Model $Variant";	$Model = "XC70"; }
			if(preg_match('/^C70/',$Model)){ $Model=str_replace("C70","",$Model); $Variant = "$Model $Variant";	$Model = "C70"; }
			if(preg_match('/^C30/',$Model)){ $Model=str_replace("C30","",$Model); $Variant = "$Model $Variant";	$Model = "C30"; }
			if(preg_match('/^S40/',$Model)){ $Model=str_replace("S40","",$Model); $Variant = "$Model $Variant";	$Model = "S40"; }
			if(preg_match('/^S60/',$Model)){ $Model=str_replace("S60","",$Model); $Variant = "$Model $Variant";	$Model = "S60"; }
			if(preg_match('/^S80/',$Model)){ $Model=str_replace("S80","",$Model); $Variant = "$Model $Variant";	$Model = "S80"; }



		}




		if(preg_match('/^Bora|^Beetle|^Golf|^Cross Golf|^Cross Polo|^New Bettle|^Passat|^Polo|^Rupo|^Touareg|^Lupo|^SCIROCCO/i',$Model)){

			$Make = "Volkswagen";

			if(preg_match('/^Bora/',$Model)){ $Model=str_replace("Bora","",$Model); $Variant = "$Model $Variant"; $Model = "Bora";}
			if(preg_match('/^Beetle/',$Model)){ $Model=str_replace("Beetle","",$Model); $Variant = "$Model $Variant"; $Model = "Beetle";}
			if(preg_match('/^Golf/',$Model)){ $Model=str_replace("Golf","",$Model); $Variant = "$Model $Variant"; $Model = "Golf";}
			if(preg_match('/^Cross Golf/',$Model)){ $Model=str_replace("Cross Golf","",$Model); $Variant = "$Model $Variant"; $Model = "Cross Golf";}
			if(preg_match('/^New Bettle/',$Model)){ $Model=str_replace("New Bettle","",$Model); $Variant = "$Model $Variant"; $Model = "New Bettle";}
			if(preg_match('/^Passat/',$Model)){ $Model=str_replace("Passat","",$Model); $Variant = "$Model $Variant"; $Model = "Passat";}
			if(preg_match('/^Polo/',$Model)){ $Model=str_replace("Polo","",$Model); $Variant = "$Model $Variant"; $Model = "Polo";}
			if(preg_match('/^Rupo/',$Model)){ $Model=str_replace("Rupo","",$Model); $Variant = "$Model $Variant"; $Model = "Rupo";}
			if(preg_match('/^Touareg/',$Model)){ $Model=str_replace("Touareg","",$Model); $Variant = "$Model $Variant"; $Model = "Touareg";}
			if(preg_match('/^Lupo/',$Model)){ $Model=str_replace("Lupo","",$Model); $Variant = "$Model $Variant"; $Model = "Lupo";}




		}


		if(preg_match('/^Focus|^Mustang|^Explorer|^Escape/i',$Model)){

			$Make = "Ford";


			if(preg_match('/^Focus/',$Model)){ $Model=str_replace("Focus","",$Model); $Variant = "$Model $Variant";	$Model = "Focus"; }
			if(preg_match('/^Mustang/',$Model)){ $Model=str_replace("Mustang","",$Model); $Variant = "$Model $Variant";	$Model = "Mustang"; }
			if(preg_match('/^Explorer/',$Model)){ $Model=str_replace("Explorer","",$Model); $Variant = "$Model $Variant";	$Model = "Explorer"; }
			if(preg_match('/^Escape/',$Model)){ $Model=str_replace("Escape","",$Model); $Variant = "$Model $Variant";	$Model = "Escape"; }

		}

		if(preg_match('/^TT$|^TT |^A3|^A4|^A5|^A6|^A7|^A8/i',$Model)){

			$Make = "Audi";


			if(preg_match('/^TT/',$Model)){ $Model=str_replace("TT","",$Model); $Variant = "$Model $Variant";	$Model = "TT"; }
			if(preg_match('/^A3/',$Model)){ $Model=str_replace("A3","",$Model); $Variant = "$Model $Variant";	$Model = "A3"; }
			if(preg_match('/^A4/',$Model)){ $Model=str_replace("A4","",$Model); $Variant = "$Model $Variant";	$Model = "A4"; }
			if(preg_match('/^A5/',$Model)){ $Model=str_replace("A5","",$Model); $Variant = "$Model $Variant";	$Model = "A5"; }
			if(preg_match('/^A6/',$Model)){ $Model=str_replace("A6","",$Model); $Variant = "$Model $Variant";	$Model = "A6"; }
			if(preg_match('/^A7/',$Model)){ $Model=str_replace("A7","",$Model); $Variant = "$Model $Variant";	$Model = "A7"; }
			if(preg_match('/^A8/',$Model)){ $Model=str_replace("A8","",$Model); $Variant = "$Model $Variant";	$Model = "A8"; }

		}
		if(preg_match('/^145|^147|^156|^GTV/i',$Model)){

			$Make = "AlfaRomeo";

		}
		if(preg_match('/^Astra|^Omega|^Vectra|^Vita|^Zafira/i',$Model)){

			$Make = "Opel";

		}


		if(preg_match('/^Chrysler/i',$Model)){

			$Make = "Chrysler";

		}


		if(preg_match('/^Xj$|^XJ /i',$Model)){

			$Make = "Jaguar";

		}



	}
	#End of foreign / other check




	if(preg_match('/^Mercedes-benz /i',$Model)){


		if(preg_match('/^A170/',$Variant)){$Variant = str_replace("A170","",$Variant); $Model = "A170";	}
		if(preg_match('/^A190/',$Variant)){$Variant = str_replace("A190","",$Variant); $Model = "A190";	}
		if(preg_match('/^C180/',$Variant)){$Variant = str_replace("C180","",$Variant); $Model = "C180";	}
		if(preg_match('/^C200/',$Variant)){$Variant = str_replace("C200","",$Variant); $Model = "C200";	}
		if(preg_match('/^C220/',$Variant)){$Variant = str_replace("C220","",$Variant); $Model = "C220";	}
		if(preg_match('/^C230/',$Variant)){$Variant = str_replace("C230","",$Variant); $Model = "C230";	}
		if(preg_match('/^C240/',$Variant)){$Variant = str_replace("C240","",$Variant); $Model = "C240";	}
		if(preg_match('/^C280/',$Variant)){$Variant = str_replace("C280","",$Variant); $Model = "C280";	}
		if(preg_match('/^C320/',$Variant)){$Variant = str_replace("C320","",$Variant); $Model = "C320";	}
		if(preg_match('/^CLK200/',$Variant)){$Variant = str_replace("CLK200","",$Variant); $Model = "CLK200";	}
		if(preg_match('/^CLK240/',$Variant)){$Variant = str_replace("CLK240","",$Variant); $Model = "CLK240";	}
		if(preg_match('/^CLK320/',$Variant)){$Variant = str_replace("CLK320","",$Variant); $Model = "CLK320";	}
		if(preg_match('/^CLK430/',$Variant)){$Variant = str_replace("CLK430","",$Variant); $Model = "CLK430";	}
		if(preg_match('/^E200/',$Variant)){$Variant = str_replace("E200","",$Variant); $Model = "E200";	}
		if(preg_match('/^E220/',$Variant)){$Variant = str_replace("E220","",$Variant); $Model = "E220";	}
		if(preg_match('/^E240/',$Variant)){$Variant = str_replace("E240","",$Variant); $Model = "E240";	}
		if(preg_match('/^E280/',$Variant)){$Variant = str_replace("E280","",$Variant); $Model = "E280";	}
		if(preg_match('/^E320/',$Variant)){$Variant = str_replace("E320","",$Variant); $Model = "E320";	}
		if(preg_match('/^E350/',$Variant)){$Variant = str_replace("E350","",$Variant); $Model = "E350";	}
		if(preg_match('/^E400/',$Variant)){$Variant = str_replace("E400","",$Variant); $Model = "E400";	}
		if(preg_match('/^E420/',$Variant)){$Variant = str_replace("E420","",$Variant); $Model = "E420";	}
		if(preg_match('/^E430/',$Variant)){$Variant = str_replace("E430","",$Variant); $Model = "E430";	}
		if(preg_match('/^E500/',$Variant)){$Variant = str_replace("E500","",$Variant); $Model = "E500";	}
		if(preg_match('/^ML320/',$Variant)){$Variant = str_replace("ML320","",$Variant); $Model = "ML320";	}
		if(preg_match('/^ML350/',$Variant)){$Variant = str_replace("ML350","",$Variant); $Model = "ML350";	}
		if(preg_match('/^ML4300/',$Variant)){$Variant = str_replace("ML4300","",$Variant); $Model = "ML4300";	}
		if(preg_match('/^S350/',$Variant)){$Variant = str_replace("S350","",$Variant); $Model = "S350";	}
		if(preg_match('/^S500/',$Variant)){$Variant = str_replace("S500","",$Variant); $Model = "S500";	}
		if(preg_match('/^S600/',$Variant)){$Variant = str_replace("S600","",$Variant); $Model = "S600";	}
		if(preg_match('/^SLK230/',$Variant)){$Variant = str_replace("SLK230","",$Variant); $Model = "SLK230";	}
		if(preg_match('/^SLK350/',$Variant)){$Variant = str_replace("SLK350","",$Variant); $Model = "SLK350";	}


		if(preg_match('/^A160L/',$Variant)){$Variant = str_replace("A160L","",$Variant); $Model = "A160L";	}
		if(preg_match('/^A160/',$Variant)){$Variant = str_replace("A160","",$Variant); $Model = "A160";	}
		if(preg_match('/^B170/',$Variant)){$Variant = str_replace("B170","",$Variant); $Model = "B170";	}
		if(preg_match('/^B200/',$Variant)){$Variant = str_replace("B200","",$Variant); $Model = "B200";	}
		if(preg_match('/^Clk/i',$Variant)){$Variant = str_replace("Clk","",$Variant); $Model = "CLK";	}
		if(preg_match('/^Cls/i',$Variant)){$Variant = str_replace("Cls","",$Variant); $Model = "CLS";	}
		if(preg_match('/^E300/',$Variant)){$Variant = str_replace("E300","",$Variant); $Model = "E300";	}
		if(preg_match('/^G500L/',$Variant)){$Variant = str_replace("G500L","",$Variant); $Model = "G500L";	}
		if(preg_match('/^S430/',$Variant)){$Variant = str_replace("S430","",$Variant); $Model = "S430";	}
		if(preg_match('/^SLK/i',$Variant)){$Variant = str_replace("SLK","",$Variant); $Model = "SLK";	}
		if(preg_match('/^V230/',$Variant)){$Variant = str_replace("V230","",$Variant); $Model = "V230";	}
		if(preg_match('/^V280/',$Variant)){$Variant = str_replace("V280","",$Variant); $Model = "V280";	}




	}



	if(preg_match('/^Bmw/i',$Model)){


		if(preg_match('/^318I/i',$Variant)){$Variant = str_replace("318I","",$Variant); $Model = "318I";	}
		if(preg_match('/^320I/i',$Variant)){$Variant = str_replace("320I","",$Variant); $Model = "320I";	}
		if(preg_match('/^323I/i',$Variant)){$Variant = str_replace("323I","",$Variant); $Model = "323I";	}
		if(preg_match('/^325I/i',$Variant)){$Variant = str_replace("325I","",$Variant); $Model = "325I";	}
		if(preg_match('/^330I/i',$Variant)){$Variant = str_replace("330I","",$Variant); $Model = "330I";	}
		if(preg_match('/^520I/i',$Variant)){$Variant = str_replace("520I","",$Variant); $Model = "520I";	}
		if(preg_match('/^525I/i',$Variant)){$Variant = str_replace("525I","",$Variant); $Model = "525I";	}
		if(preg_match('/^528I/i',$Variant)){$Variant = str_replace("528I","",$Variant); $Model = "528I";	}
		if(preg_match('/^530I/i',$Variant)){$Variant = str_replace("530I","",$Variant); $Model = "530I";	}
		if(preg_match('/^540I/i',$Variant)){$Variant = str_replace("540I","",$Variant); $Model = "540I";	}
		if(preg_match('/^545I/i',$Variant)){$Variant = str_replace("545I","",$Variant); $Model = "545I";	}
		if(preg_match('/^620I/i',$Variant)){$Variant = str_replace("620I","",$Variant); $Model = "620I";	}
		if(preg_match('/^630I/i',$Variant)){$Variant = str_replace("630I","",$Variant); $Model = "630I";	}
		if(preg_match('/^640I/i',$Variant)){$Variant = str_replace("640I","",$Variant); $Model = "640I";	}
		if(preg_match('/^650I/i',$Variant)){$Variant = str_replace("650I","",$Variant); $Model = "650I";	}
		if(preg_match('/^720I/i',$Variant)){$Variant = str_replace("720I","",$Variant); $Model = "720I";	}
		if(preg_match('/^730I/i',$Variant)){$Variant = str_replace("730I","",$Variant); $Model = "730I";	}
		if(preg_match('/^740I/i',$Variant)){$Variant = str_replace("740I","",$Variant); $Model = "740I";	}
		if(preg_match('/^750I/i',$Variant)){$Variant = str_replace("750I","",$Variant); $Model = "750I";	}
		if(preg_match('/^318/',$Variant)){$Variant = str_replace("318","",$Variant); $Model = "318";	}
		if(preg_match('/^320/',$Variant)){$Variant = str_replace("320","",$Variant); $Model = "320";	}
		if(preg_match('/^323/',$Variant)){$Variant = str_replace("323","",$Variant); $Model = "323";	}
		if(preg_match('/^325/',$Variant)){$Variant = str_replace("325","",$Variant); $Model = "325";	}
		if(preg_match('/^330/',$Variant)){$Variant = str_replace("330","",$Variant); $Model = "330";	}
		if(preg_match('/^520/',$Variant)){$Variant = str_replace("520","",$Variant); $Model = "520";	}
		if(preg_match('/^523/',$Variant)){$Variant = str_replace("523","",$Variant); $Model = "523";	}
		if(preg_match('/^525/',$Variant)){$Variant = str_replace("525","",$Variant); $Model = "525";	}
		if(preg_match('/^530/',$Variant)){$Variant = str_replace("530","",$Variant); $Model = "530";	}
		if(preg_match('/^540/',$Variant)){$Variant = str_replace("540","",$Variant); $Model = "540";	}
		if(preg_match('/^620/',$Variant)){$Variant = str_replace("620","",$Variant); $Model = "620";	}
		if(preg_match('/^630/',$Variant)){$Variant = str_replace("630","",$Variant); $Model = "630";	}
		if(preg_match('/^640/',$Variant)){$Variant = str_replace("640","",$Variant); $Model = "640";	}
		if(preg_match('/^650/',$Variant)){$Variant = str_replace("650","",$Variant); $Model = "650";	}
		if(preg_match('/^720/',$Variant)){$Variant = str_replace("720","",$Variant); $Model = "720";	}
		if(preg_match('/^730/',$Variant)){$Variant = str_replace("730","",$Variant); $Model = "730";	}
		if(preg_match('/^740/',$Variant)){$Variant = str_replace("740","",$Variant); $Model = "740";	}
		if(preg_match('/^750/',$Variant)){$Variant = str_replace("750","",$Variant); $Model = "750";	}
		if(preg_match('/^X3/',$Variant)){$Variant = str_replace("X3","",$Variant); $Model = "X3";	}
		if(preg_match('/^X5/',$Variant)){$Variant = str_replace("X5","",$Variant); $Model = "X5";	}
		if(preg_match('/^M3/',$Variant)){$Variant = str_replace("M3","",$Variant); $Model = "M3";	}
		if(preg_match('/^M4/',$Variant)){$Variant = str_replace("M4","",$Variant); $Model = "M4";	}
		if(preg_match('/^M5/',$Variant)){$Variant = str_replace("M5","",$Variant); $Model = "M5";	}
		if(preg_match('/^Z3/',$Variant)){$Variant = str_replace("Z3","",$Variant); $Model = "Z3";	}
		if(preg_match('/^Z4/',$Variant)){$Variant = str_replace("Z4","",$Variant); $Model = "Z4";	}


		if(preg_match('/^745I/',$Variant)){$Variant = str_replace("745I","",$Variant); $Model = "745I";	}
		if(preg_match('/^745/',$Variant)){$Variant = str_replace("745","",$Variant); $Model = "745";	}
		if(preg_match('/^735/',$Variant)){$Variant = str_replace("735","",$Variant); $Model = "735";	}
		if(preg_match('/^645CI/',$Variant)){$Variant = str_replace("645CI","",$Variant); $Model = "645CI";	}
		if(preg_match('/^528I/',$Variant)){$Variant = str_replace("528I","",$Variant); $Model = "528I";	}
		if(preg_match('/^335I/',$Variant)){$Variant = str_replace("335I","",$Variant); $Model = "335I";	}
		if(preg_match('/^116I/',$Variant)){$Variant = str_replace("116I","",$Variant); $Model = "116I";	}
		if(preg_match('/^116/',$Variant)){$Variant = str_replace("116","",$Variant); $Model = "116";	}
		if(preg_match('/^118i/',$Variant)){$Variant = str_replace("118i","",$Variant); $Model = "118i";	}
		if(preg_match('/^118/',$Variant)){$Variant = str_replace("118","",$Variant); $Model = "118";	}
		if(preg_match('/^120i/',$Variant)){$Variant = str_replace("120i","",$Variant); $Model = "120i";	}
		if(preg_match('/^120/',$Variant)){$Variant = str_replace("120","",$Variant); $Model = "120";	}
		if(preg_match('/^Mini/',$Variant)){$Variant = str_replace("Mini","",$Variant); $Model = "Mini";	}


		$Model = str_replace('Bmw','',$Model);
		if($Model==''){ $Model='Bmw'; }

	}

	if(preg_match('/^Audi/i',$Model)){


		if(preg_match('/^A3/',$Variant)){$Variant = str_replace("A3","",$Variant); $Model = "A3";	}
		if(preg_match('/^A4/',$Variant)){$Variant = str_replace("A4","",$Variant); $Model = "A4";	}
		if(preg_match('/^A5/',$Variant)){$Variant = str_replace("A5","",$Variant); $Model = "A5";	}
		if(preg_match('/^A6/',$Variant)){$Variant = str_replace("A6","",$Variant); $Model = "A6";	}
		if(preg_match('/^A7/',$Variant)){$Variant = str_replace("A7","",$Variant); $Model = "A7";	}
		if(preg_match('/^A8/',$Variant)){$Variant = str_replace("A8","",$Variant); $Model = "A8";	}
		if(preg_match('/^TT/',$Variant)){$Variant = str_replace("TT","",$Variant); $Model = "TT";	}

		$Model =str_replace("Audi","",$Model);

	}


	if(preg_match('/^Alfa Romeo|AlfaRomeo/i',$Model)){


		if(preg_match('/^145/',$Variant)){$Variant = str_replace("145","",$Variant); $Model = "145";	}
		if(preg_match('/^147/',$Variant)){$Variant = str_replace("147","",$Variant); $Model = "147";	}
		if(preg_match('/^156/',$Variant)){$Variant = str_replace("156","",$Variant); $Model = "156";	}
		if(preg_match('/^Gtv/',$Variant)){$Variant = str_replace("Gtv","",$Variant); $Model = "Gtv";	}


		$Model =str_replace("Alfa Romeo","",$Model);
		$Model =str_replace("AlfaRomeo","",$Model);

	}


	if(preg_match('/^Opel/i',$Model)){

		if(preg_match('/^Astra/',$Variant)){$Variant = str_replace("Astra","",$Variant); $Model = "Astra";	}
		if(preg_match('/^Omega/',$Variant)){$Variant = str_replace("Omega","",$Variant); $Model = "Omega";	}
		if(preg_match('/^Vectra/',$Variant)){$Variant = str_replace("Vectra","",$Variant); $Model = "Vectra";	}
		if(preg_match('/^Vita/',$Variant)){$Variant = str_replace("Vita","",$Variant); $Model = "Vita";	}
		if(preg_match('/^Zafira/',$Variant)){$Variant = str_replace("Zafira","",$Variant); $Model = "Zafira";	}

		$Model =str_replace("Opel","",$Model);


	}


	if(preg_match('/^Peugeot/i',$Model)){


		if(preg_match('/^206/',$Variant)){$Variant = str_replace("206","",$Variant); $Model = "206";	}
		if(preg_match('/^306/',$Variant)){$Variant = str_replace("306","",$Variant); $Model = "306";	}
		if(preg_match('/^307/',$Variant)){$Variant = str_replace("307","",$Variant); $Model = "307";	}
		if(preg_match('/^406/',$Variant)){$Variant = str_replace("406","",$Variant); $Model = "406";	}
		if(preg_match('/^607/',$Variant)){$Variant = str_replace("607","",$Variant); $Model = "607";	}
		if(preg_match('/^407/',$Variant)){$Variant = str_replace("407","",$Variant); $Model = "407";	}

		$Model = str_replace("Peugeot","",$Model);

	}

	if(preg_match('/^Volvo/i',$Model)){

		if(preg_match('/^850/',$Variant)){$Variant = str_replace("850","",$Variant); $Model = "850";	}
		if(preg_match('/^V40/',$Variant)){$Variant = str_replace("V40","",$Variant); $Model = "V40";	}
		if(preg_match('/^V50/',$Variant)){$Variant = str_replace("V50","",$Variant); $Model = "V50";	}
		if(preg_match('/^V70/',$Variant)){$Variant = str_replace("V70","",$Variant); $Model = "V70";	}
		if(preg_match('/^XC90/i',$Variant)){$Variant = str_replace("XC90","",$Variant); $Model = "XC90";	}
		if(preg_match('/^XC70/i',$Variant)){$Variant = str_replace("XC70","",$Variant); $Model = "XC70";	}
		if(preg_match('/^C70/',$Variant)){$Variant = str_replace("C70","",$Variant); $Model = "C70";	}
		if(preg_match('/^C30/',$Variant)){$Variant = str_replace("C30","",$Variant); $Model = "C30";	}
		if(preg_match('/^S40/',$Variant)){$Variant = str_replace("S40","",$Variant); $Model = "S40";	}
		if(preg_match('/^S60/',$Variant)){$Variant = str_replace("S60","",$Variant); $Model = "S60";	}
		if(preg_match('/^S80/',$Variant)){$Variant = str_replace("S80","",$Variant); $Model = "S80";	}

		$Model = str_replace("Volvo","",$Model);

	}

	if(preg_match('/^Vw$|^VW |^Volkswagen/i',$Model)){

		if(preg_match('/^Bettle/',$Variant)){$Variant = str_replace("Bettle","",$Variant); $Model = "Bettle";	}
		if(preg_match('/^Bora/',$Variant)){$Variant = str_replace("Bora","",$Variant); $Model = "Bora";	}
		if(preg_match('/^Cross Polo/',$Variant)){$Variant = str_replace("Cross Polo","",$Variant); $Model = "Cross Polo";	}
		if(preg_match('/^Golf/',$Variant)){$Variant = str_replace("Golf","",$Variant); $Model = "Golf";	}
		if(preg_match('/^New Bettle/',$Variant)){$Variant = str_replace("New Bettle","",$Variant); $Model = "New Bettle";	}
		if(preg_match('/^Passat/',$Variant)){$Variant = str_replace("Passat","",$Variant); $Model = "Passat";	}
		if(preg_match('/^Polo/',$Variant)){$Variant = str_replace("Polo","",$Variant); $Model = "Polo";	}
		if(preg_match('/^Rupo/',$Variant)){$Variant = str_replace("Rupo","",$Variant); $Model = "Rupo";	}
		if(preg_match('/^Touareg/',$Variant)){$Variant = str_replace("Touareg","",$Variant); $Model = "Touareg";	}
		if(preg_match('/^Lupo/',$Variant)){$Variant = str_replace("Lupo","",$Variant); $Model = "Lupo";	}


		$Model = str_replace("Vw","",$Model);

	}


	if($Make == "Daihatsu"){


		if(preg_match('/^Atrai/',$Model)){ $Model=str_replace("Atrai","",$Model); $Variant = "$Model $Variant"; $Model = "Atrai";	}
		if(preg_match('/^Bego/',$Model)){ $Model=str_replace("Bego","",$Model); $Variant = "$Model $Variant"; $Model = "Bego";	}
		if(preg_match('/^Boon/',$Model)){ $Model=str_replace("Boon","",$Model); $Variant = "$Model $Variant"; $Model = "Boon";	}
		if(preg_match('/^Copen/',$Model)){ $Model=str_replace("Copen","",$Model); $Variant = "$Model $Variant"; $Model = "Copen";	}
		if(preg_match('/^Delta/',$Model)){ $Model=str_replace("Delta","",$Model); $Variant = "$Model $Variant"; $Model = "Delta";	}
		if(preg_match('/^Esse/',$Model)){ $Model=str_replace("Esse","",$Model); $Variant = "$Model $Variant"; $Model = "Esse";	}
		if(preg_match('/^Hijet/',$Model)){ $Model=str_replace("Hijet","",$Model); $Variant = "$Model $Variant"; $Model = "Hijet";	}
		if(preg_match('/^Max/',$Model)){ $Model=str_replace("Max","",$Model); $Variant = "$Model $Variant"; $Model = "Max";	}
		if(preg_match('/^Midjet/',$Model)){ $Model=str_replace("Midjet","",$Model); $Variant = "$Model $Variant"; $Model = "Midjet";	}
		if(preg_match('/^Mira/',$Model)){ $Model=str_replace("Mira","",$Model); $Variant = "$Model $Variant"; $Model = "Mira";	}
		if(preg_match('/^Move/',$Model)){ $Model=str_replace("Move","",$Model); $Variant = "$Model $Variant"; $Model = "Move";	}
		if(preg_match('/^Naked/',$Model)){ $Model=str_replace("Naked","",$Model); $Variant = "$Model $Variant"; $Model = "Naked";	}
		if(preg_match('/^Opti/',$Model)){ $Model=str_replace("Opti","",$Model); $Variant = "$Model $Variant"; $Model = "Opti";	}
		if(preg_match('/^Pyzar/',$Model)){ $Model=str_replace("Pyzar","",$Model); $Variant = "$Model $Variant"; $Model = "Pyzar";	}
		if(preg_match('/^Sonica/',$Model)){ $Model=str_replace("Sonica","",$Model); $Variant = "$Model $Variant"; $Model = "Sonica";	}
		if(preg_match('/^Storia/',$Model)){ $Model=str_replace("Storia","",$Model); $Variant = "$Model $Variant"; $Model = "Storia";	}
		if(preg_match('/^Tanto/',$Model)){ $Model=str_replace("Tanto","",$Model); $Variant = "$Model $Variant"; $Model = "Tanto";	}
		if(preg_match('/^Terios/',$Model)){ $Model=str_replace("Terios","",$Model); $Variant = "$Model $Variant"; $Model = "Terios";	}
		if(preg_match('/^Yvr/',$Model)){ $Model=str_replace("Yvr","",$Model); $Variant = "$Model $Variant"; $Model = "YVR";	}


	}


	if($Make == "Toyota"){

		if(preg_match('/^Alion/',$Model)){ $Model=str_replace("Alion","",$Model); $Variant = "$Model $Variant"; $Model = "Alion";	}
		if(preg_match('/^Allex/',$Model)){ $Model=str_replace("Allex","",$Model); $Variant = "$Model $Variant"; $Model = "Allex";	}
		if(preg_match('/^Allion/',$Model)){ $Model=str_replace("Allion","",$Model); $Variant = "$Model $Variant"; $Model = "Allion";	}
		if(preg_match('/^Alpard/',$Model)){ $Model=str_replace("Alpard","",$Model); $Variant = "$Model $Variant"; $Model = "Alphard";	}
		if(preg_match('/^Alphard/',$Model)){ $Model=str_replace("Alphard","",$Model); $Variant = "$Model $Variant"; $Model = "Alphard";	}
		if(preg_match('/^Altezza/',$Model)){ $Model=str_replace("Altezza","",$Model); $Variant = "$Model $Variant"; $Model = "Altezza";	}
		if(preg_match('/^Aristo/',$Model)){ $Model=str_replace("Aristo","",$Model); $Variant = "$Model $Variant"; $Model = "Aristo";	}
		if(preg_match('/^Auris/',$Model)){ $Model=str_replace("Auris","",$Model); $Variant = "$Model $Variant"; $Model = "Auris";	}
		if(preg_match('/^Avalon/',$Model)){ $Model=str_replace("Avalon","",$Model); $Variant = "$Model $Variant"; $Model = "Avalon";	}
		if(preg_match('/^Avensis/',$Model)){ $Model=str_replace("Avensis","",$Model); $Variant = "$Model $Variant"; $Model = "Avensis";	}
		if(preg_match('/^Avevsis/',$Model)){ $Model=str_replace("Avevsis","",$Model); $Variant = "$Model $Variant"; $Model = "Avensis";	}
		if(preg_match('/^Bb/',$Model)){ $Model=str_replace("Bb","",$Model); $Variant = "$Model $Variant"; $Model = "Bb";	}
		if(preg_match('/^Belta/',$Model)){ $Model=str_replace("Belta","",$Model); $Variant = "$Model $Variant"; $Model = "Belta";	}
		if(preg_match('/^Blade/',$Model)){ $Model=str_replace("Blade","",$Model); $Variant = "$Model $Variant"; $Model = "Blade";	}
		if(preg_match('/^Brevis/',$Model)){ $Model=str_replace("Brevis","",$Model); $Variant = "$Model $Variant"; $Model = "Brevis";	}
		if(preg_match('/^Caldina/',$Model)){ $Model=str_replace("Caldina","",$Model); $Variant = "$Model $Variant"; $Model = "Caldina";	}
		if(preg_match('/^Corona/',$Model)){ $Model=str_replace("Corona","",$Model); $Variant = "$Model $Variant"; $Model = "Corona";	}
		if(preg_match('/^Camry/',$Model)){ $Model=str_replace("Camry","",$Model); $Variant = "$Model $Variant"; $Model = "Camry";	}
		if(preg_match('/^Carina/',$Model)){ $Model=str_replace("Carina","",$Model); $Variant = "$Model $Variant"; $Model = "Carina";	}
		if(preg_match('/^Cavalier/',$Model)){ $Model=str_replace("Cavalier","",$Model); $Variant = "$Model $Variant"; $Model = "Cavalier";	}
		if(preg_match('/^Celica/',$Model)){ $Model=str_replace("Celica","",$Model); $Variant = "$Model $Variant"; $Model = "Celica";	}
		if(preg_match('/^Celsior/',$Model)){ $Model=str_replace("Celsior","",$Model); $Variant = "$Model $Variant"; $Model = "Celsior";	}
		if(preg_match('/^Century/',$Model)){ $Model=str_replace("Century","",$Model); $Variant = "$Model $Variant"; $Model = "Century";	}
		if(preg_match('/^Chaser/',$Model)){ $Model=str_replace("Chaser","",$Model); $Variant = "$Model $Variant"; $Model = "Chaser";	}
		if(preg_match('/^Coaster/',$Model)){ $Model=str_replace("Coaster","",$Model); $Variant = "$Model $Variant"; $Model = "Coaster";	}
		if(preg_match('/^Comfort/',$Model)){ $Model=str_replace("Comfort","",$Model); $Variant = "$Model $Variant"; $Model = "Comfort";	}
		if(preg_match('/^Corolla/',$Model)){ $Model=str_replace("Corolla","",$Model); $Variant = "$Model $Variant"; $Model = "Corolla";	}
		if(preg_match('/^Cresta/',$Model)){ $Model=str_replace("Cresta","",$Model); $Variant = "$Model $Variant"; $Model = "Cresta";	}
		if(preg_match('/^Crown/',$Model)){ $Model=str_replace("Crown","",$Model); $Variant = "$Model $Variant"; $Model = "Crown";	}
		if(preg_match('/^Duet/',$Model)){ $Model=str_replace("Duet","",$Model); $Variant = "$Model $Variant"; $Model = "Duet";	}
		if(preg_match('/^Dyna/',$Model)){ $Model=str_replace("Dyna","",$Model); $Variant = "$Model $Variant"; $Model = "Dyna";	}
		if(preg_match('/^Estima/',$Model)){ $Model=str_replace("Estima","",$Model); $Variant = "$Model $Variant"; $Model = "Estima";	}
		if(preg_match('/^Funcargo/',$Model)){ $Model=str_replace("Funcargo","",$Model); $Variant = "$Model $Variant"; $Model = "Funcargo";	}
		if(preg_match('/^Gaia/',$Model)){ $Model=str_replace("Gaia","",$Model); $Variant = "$Model $Variant"; $Model = "Gaia";	}
		if(preg_match('/^Grand Hiace/',$Model)){ $Model=str_replace("Grand Hiace","",$Model); $Variant = "$Model $Variant"; $Model = "Grand Hiace";	}
		if(preg_match('/^Harrier/',$Model)){ $Model=str_replace("Harrier","",$Model); $Variant = "$Model $Variant"; $Model = "Harrier";	}
		if(preg_match('/^Hiace/',$Model)){ $Model=str_replace("Hiace","",$Model); $Variant = "$Model $Variant"; $Model = "Hiace";	}
		if(preg_match('/^Hilux/',$Model)){ $Model=str_replace("Hilux","",$Model); $Variant = "$Model $Variant"; $Model = "Hilux";	}
		if(preg_match('/^Hino/',$Model)){ $Model=str_replace("Hino","",$Model); $Variant = "$Model $Variant"; $Model = "Hino";	}
		if(preg_match('/^Ipsum/',$Model)){ $Model=str_replace("Ipsum","",$Model); $Variant = "$Model $Variant"; $Model = "Ipsum";	}
		if(preg_match('/^Isis/',$Model)){ $Model=str_replace("Isis","",$Model); $Variant = "$Model $Variant"; $Model = "Isis";	}
		if(preg_match('/^Ist/',$Model)){ $Model=str_replace("Ist","",$Model); $Variant = "$Model $Variant"; $Model = "Ist";	}
		if(preg_match('/^Kluger/',$Model)){ $Model=str_replace("Kluger","",$Model); $Variant = "$Model $Variant"; $Model = "Kluger";	}
		if(preg_match('/^Land Cruiser/',$Model)){ $Model=str_replace("Land Cruiser","",$Model); $Variant = "$Model $Variant"; $Model = "Land Cruiser";	}
		if(preg_match('/^Landcruiser/',$Model)){ $Model=str_replace("Landcruiser","",$Model); $Variant = "$Model $Variant"; $Model = "Land Cruiser";	}
		if(preg_match('/^Lexus/',$Model)){ $Model=str_replace("Lexus","",$Model); $Variant = "$Model $Variant"; $Model = "Lexus";	}
		if(preg_match('/^Liteace/',$Model)){ $Model=str_replace("Liteace","",$Model); $Variant = "$Model $Variant"; $Model = "Liteace";	}
		if(preg_match('/^Lite-Ace/i',$Model)){ $Model=str_replace("Lite-Ace","",$Model); $Variant = "$Model $Variant"; $Model = "Liteace";	}
		if(preg_match('/^Mark Ii/',$Model)){ $Model=str_replace("Mark Ii","",$Model); $Variant = "$Model $Variant"; $Model = "Mark Ii";	}
		if(preg_match('/^Mark X/',$Model)){ $Model=str_replace("Mark X","",$Model); $Variant = "$Model $Variant"; $Model = "MarkX";	}
		if(preg_match('/^Mark-2/',$Model)){ $Model=str_replace("Mark-2","",$Model); $Variant = "$Model $Variant"; $Model = "Mark2";	}
		if(preg_match('/^Mark 2/',$Model)){ $Model=str_replace("Mark 2","",$Model); $Variant = "$Model $Variant"; $Model = "Mark2";	}
		if(preg_match('/^Mark2/',$Model)){ $Model=str_replace("Mark2","",$Model); $Variant = "$Model $Variant"; $Model = "Mark2";	}
		if(preg_match('/^Markii/',$Model)){ $Model=str_replace("Markii","",$Model); $Variant = "$Model $Variant"; $Model = "Mark2";	}
		if(preg_match('/^Markx/',$Model)){ $Model=str_replace("Markx","",$Model); $Variant = "$Model $Variant"; $Model = "MarkX";	}
		if(preg_match('/^Mr-s/',$Model)){ $Model=str_replace("Mr-s","",$Model); $Variant = "$Model $Variant"; $Model = "Mr-s";	}
		if(preg_match('/^Mr2/',$Model)){ $Model=str_replace("Mr2","",$Model); $Variant = "$Model $Variant"; $Model = "Mr2";	}
		if(preg_match('/^Nadia/',$Model)){ $Model=str_replace("Nadia","",$Model); $Variant = "$Model $Variant"; $Model = "Nadia";	}
		if(preg_match('/^Noah/',$Model)){ $Model=str_replace("Noah","",$Model); $Variant = "$Model $Variant"; $Model = "Noah";	}
		if(preg_match('/^Opa/',$Model)){ $Model=str_replace("Opa","",$Model); $Variant = "$Model $Variant"; $Model = "Opa";	}
		if(preg_match('/^Passo/',$Model)){ $Model=str_replace("Passo","",$Model); $Variant = "$Model $Variant"; $Model = "Passo";	}
		if(preg_match('/^Platz/',$Model)){ $Model=str_replace("Platz","",$Model); $Variant = "$Model $Variant"; $Model = "Platz";	}
		if(preg_match('/^Porte/',$Model)){ $Model=str_replace("Porte","",$Model); $Variant = "$Model $Variant"; $Model = "Porte";	}
		if(preg_match('/^Premio/',$Model)){ $Model=str_replace("Premio","",$Model); $Variant = "$Model $Variant"; $Model = "Premio";	}
		if(preg_match('/^Prius/',$Model)){ $Model=str_replace("Prius","",$Model); $Variant = "$Model $Variant"; $Model = "Prius";	}
		if(preg_match('/^Probox/',$Model)){ $Model=str_replace("Probox","",$Model); $Variant = "$Model $Variant"; $Model = "Probox";	}
		if(preg_match('/^Progres/',$Model)){ $Model=str_replace("Progres","",$Model); $Variant = "$Model $Variant"; $Model = "Progres";	}
		if(preg_match('/^Pronard/',$Model)){ $Model=str_replace("Pronard","",$Model); $Variant = "$Model $Variant"; $Model = "Pronard";	}
		if(preg_match('/^Ractis/',$Model)){ $Model=str_replace("Ractis","",$Model); $Variant = "$Model $Variant"; $Model = "Ractis";	}
		if(preg_match('/^Raum/',$Model)){ $Model=str_replace("Raum","",$Model); $Variant = "$Model $Variant"; $Model = "Raum";	}
		if(preg_match('/^Rav4/',$Model)){ $Model=str_replace("Rav4","",$Model); $Variant = "$Model $Variant"; $Model = "Rav4";	}
		if(preg_match('/^Rush/',$Model)){ $Model=str_replace("Rush","",$Model); $Variant = "$Model $Variant"; $Model = "Rush";	}
		if(preg_match('/^Sienta/',$Model)){ $Model=str_replace("Sienta","",$Model); $Variant = "$Model $Variant"; $Model = "Sienta";	}
		if(preg_match('/^Soarer/',$Model)){ $Model=str_replace("Soarer","",$Model); $Variant = "$Model $Variant"; $Model = "Soarer";	}
		if(preg_match('/^Sprinter/',$Model)){ $Model=str_replace("Sprinter","",$Model); $Variant = "$Model $Variant"; $Model = "Sprinter";	}
		if(preg_match('/^Starlet/',$Model)){ $Model=str_replace("Starlet","",$Model); $Variant = "$Model $Variant"; $Model = "Starlet";	}
		if(preg_match('/^Succeed/',$Model)){ $Model=str_replace("Succeed","",$Model); $Variant = "$Model $Variant"; $Model = "Succeed";	}
		if(preg_match('/^Touring Hiace/',$Model)){ $Model=str_replace("Touring Hiace","",$Model); $Variant = "$Model $Variant"; $Model = "Touring Hiace";	}
		if(preg_match('/^Townace/',$Model)){ $Model=str_replace("Townace","",$Model); $Variant = "$Model $Variant"; $Model = "Townace";	}
		if(preg_match('/^Town Ace/i',$Model)){ $Model=str_replace("Town Ace","",$Model); $Variant = "$Model $Variant"; $Model = "Townace";	}
		if(preg_match('/^Toyoace/',$Model)){ $Model=str_replace("Toyoace","",$Model); $Variant = "$Model $Variant"; $Model = "Toyoace";	}
		if(preg_match('/^Vellfire/',$Model)){ $Model=str_replace("Vellfire","",$Model); $Variant = "$Model $Variant"; $Model = "Vellfire";	}
		if(preg_match('/^Verossa/',$Model)){ $Model=str_replace("Verossa","",$Model); $Variant = "$Model $Variant"; $Model = "Verossa";	}
		if(preg_match('/^Vista/',$Model)){ $Model=str_replace("Vista","",$Model); $Variant = "$Model $Variant"; $Model = "Vista";	}
		if(preg_match('/^Vitz/',$Model)){ $Model=str_replace("Vitz","",$Model); $Variant = "$Model $Variant"; $Model = "Vitz";	}
		if(preg_match('/^Voxy/',$Model)){ $Model=str_replace("Voxy","",$Model); $Variant = "$Model $Variant"; $Model = "Voxy";	}
		if(preg_match('/^Will/',$Model)){ $Model=str_replace("Will","",$Model); $Variant = "$Model $Variant"; $Model = "Will";	}
		if(preg_match('/^Windom/',$Model)){ $Model=str_replace("Windom","",$Model); $Variant = "$Model $Variant"; $Model = "Windom";	}
		if(preg_match('/^Wish/',$Model)){ $Model=str_replace("Wish","",$Model); $Variant = "$Model $Variant"; $Model = "Wish";	}
		if(preg_match('/^Toyota Harrier/',$Model)){ $Model=str_replace("Toyota Harrier","",$Model); $Variant = "$Model $Variant"; $Model = "Harrier";	}

	}
	# End of Toyota







	if($Make == "Nissan"){


		if(preg_match('/^Ad$|^Ad /',$Model)){ $Model=str_replace("Ad","",$Model); $Variant = "$Model $Variant"; $Model = "Ad";	}
		if(preg_match('/^Atlas/',$Model)){ $Model=str_replace("Atlas","",$Model); $Variant = "$Model $Variant"; $Model = "Atlas";	}
		if(preg_match('/^Avenir/',$Model)){ $Model=str_replace("Avenir","",$Model); $Variant = "$Model $Variant"; $Model = "Avenir";	}
		if(preg_match('/^Bassara/',$Model)){ $Model=str_replace("Bassara","",$Model); $Variant = "$Model $Variant"; $Model = "Bassara";	}
		if(preg_match('/^Bluebird/',$Model)){ $Model=str_replace("Bluebird","",$Model); $Variant = "$Model $Variant"; $Model = "Bluebird";	}
		if(preg_match('/^Caravan/',$Model)){ $Model=str_replace("Caravan","",$Model); $Variant = "$Model $Variant"; $Model = "Caravan";	}
		if(preg_match('/^Cedric/',$Model)){ $Model=str_replace("Cedric","",$Model); $Variant = "$Model $Variant"; $Model = "Cedric";	}
		if(preg_match('/^Cefiro/',$Model)){ $Model=str_replace("Cefiro","",$Model); $Variant = "$Model $Variant"; $Model = "Cefiro";	}
		if(preg_match('/^Cima/',$Model)){ $Model=str_replace("Cima","",$Model); $Variant = "$Model $Variant"; $Model = "Cima";	}
		if(preg_match('/^Civilian/',$Model)){ $Model=str_replace("Civilian","",$Model); $Variant = "$Model $Variant"; $Model = "Civilian";	}
		if(preg_match('/^Clipper/',$Model)){ $Model=str_replace("Clipper","",$Model); $Variant = "$Model $Variant"; $Model = "Clipper";	}
		if(preg_match('/^Cube/',$Model)){ $Model=str_replace("Cube","",$Model); $Variant = "$Model $Variant"; $Model = "Cube";	}
		if(preg_match('/^Dualis/',$Model)){ $Model=str_replace("Dualis","",$Model); $Variant = "$Model $Variant"; $Model = "Dualis";	}
		if(preg_match('/^Elgrand/',$Model)){ $Model=str_replace("Elgrand","",$Model); $Variant = "$Model $Variant"; $Model = "Elgrand";	}
		if(preg_match('/^Expert/',$Model)){ $Model=str_replace("Expert","",$Model); $Variant = "$Model $Variant"; $Model = "Expert";	}
		if(preg_match('/^Fairlady Z/',$Model)){ $Model=str_replace("Fairlady Z","",$Model); $Variant = "$Model $Variant"; $Model = "FairladyZ";	}
		if(preg_match('/^Fairlady-z/',$Model)){ $Model=str_replace("Fairlady-z","",$Model); $Variant = "$Model $Variant"; $Model = "FairladyZ";	}
		if(preg_match('/^Fairladyz/',$Model)){ $Model=str_replace("Fairladyz","",$Model); $Variant = "$Model $Variant"; $Model = "FairladyZ";	}
		if(preg_match('/^FairladyZ/',$Model)){ $Model=str_replace("FairladyZ","",$Model); $Variant = "$Model $Variant"; $Model = "FairladyZ";	}
		if(preg_match('/^Fuga/',$Model)){ $Model=str_replace("Fuga","",$Model); $Variant = "$Model $Variant"; $Model = "Fuga";	}
		if(preg_match('/^Gloria/',$Model)){ $Model=str_replace("Gloria","",$Model); $Variant = "$Model $Variant"; $Model = "Gloria";	}
		if(preg_match('/^Gt-r/',$Model)){ $Model=str_replace("Gt-r","",$Model); $Variant = "$Model $Variant"; $Model = "GT-R";	}
		if(preg_match('/^Lafesta/',$Model)){ $Model=str_replace("Lafesta","",$Model); $Variant = "$Model $Variant"; $Model = "Lafesta";	}
		if(preg_match('/^Laurel/',$Model)){ $Model=str_replace("Laurel","",$Model); $Variant = "$Model $Variant"; $Model = "Laurel";	}
		if(preg_match('/^Liberty/',$Model)){ $Model=str_replace("Liberty","",$Model); $Variant = "$Model $Variant"; $Model = "Liberty";	}
		if(preg_match('/^March/',$Model)){ $Model=str_replace("March","",$Model); $Variant = "$Model $Variant"; $Model = "March";	}
		if(preg_match('/^Mistral/',$Model)){ $Model=str_replace("Mistral","",$Model); $Variant = "$Model $Variant"; $Model = "Mistral";	}
		if(preg_match('/^Moco/',$Model)){ $Model=str_replace("Moco","",$Model); $Variant = "$Model $Variant"; $Model = "Moco";	}
		if(preg_match('/^Murano/',$Model)){ $Model=str_replace("Murano","",$Model); $Variant = "$Model $Variant"; $Model = "Murano";	}
		if(preg_match('/^Note/',$Model)){ $Model=str_replace("Note","",$Model); $Variant = "$Model $Variant"; $Model = "Note";	}
		if(preg_match('/^Otti/',$Model)){ $Model=str_replace("Otti","",$Model); $Variant = "$Model $Variant"; $Model = "Otti";	}
		if(preg_match('/^Presage/',$Model)){ $Model=str_replace("Presage","",$Model); $Variant = "$Model $Variant"; $Model = "Presage";	}
		if(preg_match('/^President/',$Model)){ $Model=str_replace("President","",$Model); $Variant = "$Model $Variant"; $Model = "President";	}
		if(preg_match('/^Primera/',$Model)){ $Model=str_replace("Primera","",$Model); $Variant = "$Model $Variant"; $Model = "Primera";	}
		if(preg_match('/^R-nessa/',$Model)){ $Model=str_replace("R-nessa","",$Model); $Variant = "$Model $Variant"; $Model = "R-nessa";	}
		if(preg_match('/^Safari/',$Model)){ $Model=str_replace("Safari","",$Model); $Variant = "$Model $Variant"; $Model = "Safari";	}
		if(preg_match('/^Serena/',$Model)){ $Model=str_replace("Serena","",$Model); $Variant = "$Model $Variant"; $Model = "Serena";	}
		if(preg_match('/^Skyline/',$Model)){ $Model=str_replace("Skyline","",$Model); $Variant = "$Model $Variant"; $Model = "Skyline";	}
		if(preg_match('/^Stagea/',$Model)){ $Model=str_replace("Stagea","",$Model); $Variant = "$Model $Variant"; $Model = "Stagea";	}
		if(preg_match('/^Sunny/',$Model)){ $Model=str_replace("Sunny","",$Model); $Variant = "$Model $Variant"; $Model = "Sunny";	}
		if(preg_match('/^Teana/',$Model)){ $Model=str_replace("Teana","",$Model); $Variant = "$Model $Variant"; $Model = "Teana";	}
		if(preg_match('/^Tida/',$Model)){ $Model=str_replace("Tida","",$Model); $Variant = "$Model $Variant"; $Model = "Tiida";	}
		if(preg_match('/^Tiida/',$Model)){ $Model=str_replace("Tiida","",$Model); $Variant = "$Model $Variant"; $Model = "Tiida";	}
		if(preg_match('/^Vanette/',$Model)){ $Model=str_replace("Vanette","",$Model); $Variant = "$Model $Variant"; $Model = "Vanette";	}
		if(preg_match('/^Wingroad/',$Model)){ $Model=str_replace("Wingroad","",$Model); $Variant = "$Model $Variant"; $Model = "Wingroad";	}
		if(preg_match('/^X-trail/',$Model)){ $Model=str_replace("X-trail","",$Model); $Variant = "$Model $Variant"; $Model = "X-trail";	}


	}




	if($Make == "Honda"){

		if(preg_match('/^Cross Road/',$Model)){ $Model=str_replace("Cross Road","",$Model); $Variant = "$Model $Variant"; $Model = "Cross Road";	}
		if(preg_match('/^Accord/',$Model)){ $Model=str_replace("Accord","",$Model); $Variant = "$Model $Variant"; $Model = "Accord";	}
		if(preg_match('/^Acty/',$Model)){ $Model=str_replace("Acty","",$Model); $Variant = "$Model $Variant"; $Model = "Acty";	}
		if(preg_match('/^Airwave/',$Model)){ $Model=str_replace("Airwave","",$Model); $Variant = "$Model $Variant"; $Model = "Airwave";	}
		if(preg_match('/^Airweve/',$Model)){ $Model=str_replace("Airweve","",$Model); $Variant = "$Model $Variant"; $Model = "Airweve";	}
		if(preg_match('/^Civic/',$Model)){ $Model=str_replace("Civic","",$Model); $Variant = "$Model $Variant"; $Model = "Civic";	}
		if(preg_match('/^Cr-v/',$Model)){ $Model=str_replace("Cr-v","",$Model); $Variant = "$Model $Variant"; $Model = "CR-V";	}
		if(preg_match('/^Edix/',$Model)){ $Model=str_replace("Edix","",$Model); $Variant = "$Model $Variant"; $Model = "Edix";	}
		if(preg_match('/^Elysion/',$Model)){ $Model=str_replace("Elysion","",$Model); $Variant = "$Model $Variant"; $Model = "Elysion";	}
		if(preg_match('/^Fit/',$Model)){ $Model=str_replace("Fit","",$Model); $Variant = "$Model $Variant"; $Model = "Fit";	}
		if(preg_match('/^Freed/',$Model)){ $Model=str_replace("Freed","",$Model); $Variant = "$Model $Variant"; $Model = "Freed";	}
		if(preg_match('/^Hr-v/',$Model)){ $Model=str_replace("Hr-v","",$Model); $Variant = "$Model $Variant"; $Model = "HR-V";	}
		if(preg_match('/^Inspire/',$Model)){ $Model=str_replace("Inspire","",$Model); $Variant = "$Model $Variant"; $Model = "Inspire";	}
		if(preg_match('/^Integra/',$Model)){ $Model=str_replace("Integra","",$Model); $Variant = "$Model $Variant"; $Model = "Integra";	}
		if(preg_match('/^Lagreat/',$Model)){ $Model=str_replace("Lagreat","",$Model); $Variant = "$Model $Variant"; $Model = "Lagreat";	}
		if(preg_match('/^Legend/',$Model)){ $Model=str_replace("Legend","",$Model); $Variant = "$Model $Variant"; $Model = "Legend";	}
		if(preg_match('/^Life/',$Model)){ $Model=str_replace("Life","",$Model); $Variant = "$Model $Variant"; $Model = "Life";	}
		if(preg_match('/^Mdx/',$Model)){ $Model=str_replace("Mdx","",$Model); $Variant = "$Model $Variant"; $Model = "MDX";	}
		if(preg_match('/^Mobilio/',$Model)){ $Model=str_replace("Mobilio","",$Model); $Variant = "$Model $Variant"; $Model = "Mobilio";	}
		if(preg_match('/^Nsx/',$Model)){ $Model=str_replace("Nsx","",$Model); $Variant = "$Model $Variant"; $Model = "NSX";	}
		if(preg_match('/^Odyssey/',$Model)){ $Model=str_replace("Odyssey","",$Model); $Variant = "$Model $Variant"; $Model = "Odyssey";	}
		if(preg_match('/^Partner/',$Model)){ $Model=str_replace("Partner","",$Model); $Variant = "$Model $Variant"; $Model = "Partner";	}
		if(preg_match('/^Pertner/',$Model)){ $Model=str_replace("Pertner","",$Model); $Variant = "$Model $Variant"; $Model = "Pertner";	}
		if(preg_match('/^S2000/',$Model)){ $Model=str_replace("S2000","",$Model); $Variant = "$Model $Variant"; $Model = "S2000";	}
		if(preg_match('/^Saber/',$Model)){ $Model=str_replace("Saber","",$Model); $Variant = "$Model $Variant"; $Model = "Saber";	}
		if(preg_match('/^Spike/',$Model)){ $Model=str_replace("Spike","",$Model); $Variant = "$Model $Variant"; $Model = "Spike";	}
		if(preg_match('/^Stepwagon/',$Model)){ $Model=str_replace("Stepwagon","",$Model); $Variant = "$Model $Variant"; $Model = "Stepwagon";	}
		if(preg_match('/^Stepwgn/',$Model)){ $Model=str_replace("Stepwgn","",$Model); $Variant = "$Model $Variant"; $Model = "Stepwagon";	}
		if(preg_match('/^Step Wgn/',$Model)){ $Model=str_replace("Step Wgn","",$Model); $Variant = "$Model $Variant"; $Model = "Stepwagon";	}
		if(preg_match('/^StepWGN/',$Model)){ $Model=str_replace("StepWGN","",$Model); $Variant = "$Model $Variant"; $Model = "Stepwagon";	}
		if(preg_match('/^Stream/',$Model)){ $Model=str_replace("Stream","",$Model); $Variant = "$Model $Variant"; $Model = "Stream";	}
		if(preg_match('/^That\'s/',$Model)){ $Model=str_replace("That\'s","",$Model); $Variant = "$Model $Variant"; $Model = "Thats";	}
		if(preg_match('/^Thats/',$Model)){ $Model=str_replace("Thats","",$Model); $Variant = "$Model $Variant"; $Model = "Thats";	}
		if(preg_match('/^Torneo/',$Model)){ $Model=str_replace("Torneo","",$Model); $Variant = "$Model $Variant"; $Model = "Torneo";	}
		if(preg_match('/^Vamos/',$Model)){ $Model=str_replace("Vamos","",$Model); $Variant = "$Model $Variant"; $Model = "Vamos";	}
		if(preg_match('/^Zest/',$Model)){ $Model=str_replace("Zest","",$Model); $Variant = "$Model $Variant"; $Model = "Zest";	}


	}

	if($Make == "Suzuki"){

		if(preg_match('/^Aerio/',$Model)){ $Model=str_replace("Aerio","",$Model); $Variant = "$Model $Variant"; $Model = "Aerio";	}
		if(preg_match('/^Alto/',$Model)){ $Model=str_replace("Alto","",$Model); $Variant = "$Model $Variant"; $Model = "Alto";	}
		if(preg_match('/^Carry/',$Model)){ $Model=str_replace("Carry","",$Model); $Variant = "$Model $Variant"; $Model = "Carry";	}
		if(preg_match('/^Cervo/',$Model)){ $Model=str_replace("Cervo","",$Model); $Variant = "$Model $Variant"; $Model = "Cervo";	}
		if(preg_match('/^Chevrolet/',$Model)){ $Model=str_replace("Chevrolet","",$Model); $Variant = "$Model $Variant"; $Model = "Chevrolet";	}
		if(preg_match('/^Cultus/',$Model)){ $Model=str_replace("Cultus","",$Model); $Variant = "$Model $Variant"; $Model = "Cultus";	}
		if(preg_match('/^Escudo/',$Model)){ $Model=str_replace("Escudo","",$Model); $Variant = "$Model $Variant"; $Model = "Escudo";	}
		if(preg_match('/^Every/',$Model)){ $Model=str_replace("Every","",$Model); $Variant = "$Model $Variant"; $Model = "Every";	}
		if(preg_match('/^Jimny/',$Model)){ $Model=str_replace("Jimny","",$Model); $Variant = "$Model $Variant"; $Model = "Jimny";	}
		if(preg_match('/^Kei/',$Model)){ $Model=str_replace("Kei","",$Model); $Variant = "$Model $Variant"; $Model = "Kei";	}
		if(preg_match('/^Landy/',$Model)){ $Model=str_replace("Landy","",$Model); $Variant = "$Model $Variant"; $Model = "Landy";	}
		if(preg_match('/^Mr Wagon/',$Model)){ $Model=str_replace("Mr Wagon","",$Model); $Variant = "$Model $Variant"; $Model = "Mr Wagon";	}
		if(preg_match('/^Mr-wagon/i',$Model)){ $Model=str_replace("Mr-Wagon","",$Model); $Variant = "$Model $Variant"; $Model = "Mr Wagon";	}
		if(preg_match('/^Palette/',$Model)){ $Model=str_replace("Palette","",$Model); $Variant = "$Model $Variant"; $Model = "Palette";	}
		if(preg_match('/^Solio/',$Model)){ $Model=str_replace("Solio","",$Model); $Variant = "$Model $Variant"; $Model = "Solio";	}
		if(preg_match('/^Swift/',$Model)){ $Model=str_replace("Swift","",$Model); $Variant = "$Model $Variant"; $Model = "Swift";	}
		if(preg_match('/^Sx4/',$Model)){ $Model=str_replace("Sx4","",$Model); $Variant = "$Model $Variant"; $Model = "SX4";	}
		if(preg_match('/^Twin/',$Model)){ $Model=str_replace("Twin","",$Model); $Variant = "$Model $Variant"; $Model = "Twin";	}
		if(preg_match('/^Wagon R/',$Model)){ $Model=str_replace("Wagon R","",$Model); $Variant = "$Model $Variant"; $Model = "Wagon-R";	}
		if(preg_match('/^Wagon-r/',$Model)){ $Model=str_replace("Wagon-r","",$Model); $Variant = "$Model $Variant"; $Model = "Wagon-R";	}

	}

	if($Make == "Isuzu"){


		if(preg_match('/^Bighorn/',$Model)){ $Model=str_replace("Bighorn","",$Model); $Variant = "$Model $Variant"; $Model = "Bighorn";	}
		if(preg_match('/^Elf/',$Model)){ $Model=str_replace("Elf","",$Model); $Variant = "$Model $Variant"; $Model = "Elf";	}
		if(preg_match('/^Forward/',$Model)){ $Model=str_replace("Forward","",$Model); $Variant = "$Model $Variant"; $Model = "Forward";	}
		if(preg_match('/^Giga/',$Model)){ $Model=str_replace("Giga","",$Model); $Variant = "$Model $Variant"; $Model = "Giga";	}
		if(preg_match('/^Juston/',$Model)){ $Model=str_replace("Juston","",$Model); $Variant = "$Model $Variant"; $Model = "Juston";	}
		if(preg_match('/^Wizard/',$Model)){ $Model=str_replace("Wizard","",$Model); $Variant = "$Model $Variant"; $Model = "Wizard";	}


	}



	if($Make == "Mazda"){


		if(preg_match('/^Atenza/',$Model)){ $Model=str_replace("Atenza","",$Model); $Variant = "$Model $Variant"; $Model = "Atenza";	}
		if(preg_match('/^Axela/',$Model)){ $Model=str_replace("Axela","",$Model); $Variant = "$Model $Variant"; $Model = "Axela";	}
		if(preg_match('/^Az/',$Model)){ $Model=str_replace("Az","",$Model); $Variant = "$Model $Variant"; $Model = "Az";	}
		if(preg_match('/^Biante/',$Model)){ $Model=str_replace("Biante","",$Model); $Variant = "$Model $Variant"; $Model = "Biante";	}
		if(preg_match('/^Bongo/',$Model)){ $Model=str_replace("Bongo","",$Model); $Variant = "$Model $Variant"; $Model = "Bongo";	}
		if(preg_match('/^Carol/',$Model)){ $Model=str_replace("Carol","",$Model); $Variant = "$Model $Variant"; $Model = "Carol";	}
		if(preg_match('/^Cx-7/',$Model)){ $Model=str_replace("Cx-7","",$Model); $Variant = "$Model $Variant"; $Model = "CX-7";	}
		if(preg_match('/^Demio/',$Model)){ $Model=str_replace("Demio","",$Model); $Variant = "$Model $Variant"; $Model = "Demio";	}
		if(preg_match('/^Eunos/',$Model)){ $Model=str_replace("Eunos","",$Model); $Variant = "$Model $Variant"; $Model = "Eunos";	}
		if(preg_match('/^Familia/',$Model)){ $Model=str_replace("Familia","",$Model); $Variant = "$Model $Variant"; $Model = "Familia";	}
		if(preg_match('/^Freda/',$Model)){ $Model=str_replace("Freda","",$Model); $Variant = "$Model $Variant"; $Model = "Freda";	}
		if(preg_match('/^Laputa/',$Model)){ $Model=str_replace("Laputa","",$Model); $Variant = "$Model $Variant"; $Model = "Laputa";	}
		if(preg_match('/^Millenia/',$Model)){ $Model=str_replace("Millenia","",$Model); $Variant = "$Model $Variant"; $Model = "Millenia";	}
		if(preg_match('/^Mpv/',$Model)){ $Model=str_replace("Mpv","",$Model); $Variant = "$Model $Variant"; $Model = "Mpv";	}
		if(preg_match('/^Premacy/',$Model)){ $Model=str_replace("Premacy","",$Model); $Variant = "$Model $Variant"; $Model = "Premacy";	}
		if(preg_match('/^Rx-8/',$Model)){ $Model=str_replace("Rx-8","",$Model); $Variant = "$Model $Variant"; $Model = "RX-8";	}
		if(preg_match('/^Scram/',$Model)){ $Model=str_replace("Scram","",$Model); $Variant = "$Model $Variant"; $Model = "Scram";	}
		if(preg_match('/^Scrum/',$Model)){ $Model=str_replace("Scrum","",$Model); $Variant = "$Model $Variant"; $Model = "Scrum";	}
		if(preg_match('/^Spiano/',$Model)){ $Model=str_replace("Spiano","",$Model); $Variant = "$Model $Variant"; $Model = "Spiano";	}
		if(preg_match('/^Titan/',$Model)){ $Model=str_replace("Titan","",$Model); $Variant = "$Model $Variant"; $Model = "Titan";	}
		if(preg_match('/^Tribute/',$Model)){ $Model=str_replace("Tribute","",$Model); $Variant = "$Model $Variant"; $Model = "Tribute";	}
		if(preg_match('/^Verisa/',$Model)){ $Model=str_replace("Verisa","",$Model); $Variant = "$Model $Variant"; $Model = "Verisa";	}
		if(preg_match('/^Roadster/',$Model)){ $Model=str_replace("Roadster","",$Model); $Variant = "$Model $Variant"; $Model = "Roadster";	}


	}


	if($Make == "Subaru"){

		if(preg_match('/^Dias/',$Model)){ $Model=str_replace("Dias","",$Model); $Variant = "$Model $Variant"; $Model = "Dias";	}
		if(preg_match('/^Forester/',$Model)){ $Model=str_replace("Forester","",$Model); $Variant = "$Model $Variant"; $Model = "Forester";	}
		if(preg_match('/^Impreza/',$Model)){ $Model=str_replace("Impreza","",$Model); $Variant = "$Model $Variant"; $Model = "Impreza";	}
		if(preg_match('/^Legacy/',$Model)){ $Model=str_replace("Legacy","",$Model); $Variant = "$Model $Variant"; $Model = "Legacy";	}
		if(preg_match('/^Pleo/',$Model)){ $Model=str_replace("Pleo","",$Model); $Variant = "$Model $Variant"; $Model = "Pleo";	}
		if(preg_match('/^R1/',$Model)){ $Model=str_replace("R1","",$Model); $Variant = "$Model $Variant"; $Model = "R1";	}
		if(preg_match('/^R2/',$Model)){ $Model=str_replace("R2","",$Model); $Variant = "$Model $Variant"; $Model = "R2";	}
		if(preg_match('/^Sambar/',$Model)){ $Model=str_replace("Sambar","",$Model); $Variant = "$Model $Variant"; $Model = "Sambar";	}
		if(preg_match('/^Samber/',$Model)){ $Model=str_replace("Sambar","",$Model); $Variant = "$Model $Variant"; $Model = "Sambar";	}
		if(preg_match('/^Stella/',$Model)){ $Model=str_replace("Stella","",$Model); $Variant = "$Model $Variant"; $Model = "Stella";	}
		if(preg_match('/^Teviq/',$Model)){ $Model=str_replace("Teviq","",$Model); $Variant = "$Model $Variant"; $Model = "Teviq";	}
		if(preg_match('/^Vivio/',$Model)){ $Model=str_replace("Vivio","",$Model); $Variant = "$Model $Variant"; $Model = "Vivio";	}


	}


	if($Make == "Mitsubishi"){

		if(preg_match('/^Airtrek/',$Model)){ $Model=str_replace("Airtrek","",$Model); $Variant = "$Model $Variant"; $Model = "Airtrek";	}
		if(preg_match('/^Aspire/',$Model)){ $Model=str_replace("Aspire","",$Model); $Variant = "$Model $Variant"; $Model = "Aspire";	}
		if(preg_match('/^Bravo/',$Model)){ $Model=str_replace("Bravo","",$Model); $Variant = "$Model $Variant"; $Model = "Bravo";	}
		if(preg_match('/^Canter/',$Model)){ $Model=str_replace("Canter","",$Model); $Variant = "$Model $Variant"; $Model = "Canter";	}
		if(preg_match('/^Challenger/',$Model)){ $Model=str_replace("Challenger","",$Model); $Variant = "$Model $Variant"; $Model = "Challenger";	}
		if(preg_match('/^Chariot/',$Model)){ $Model=str_replace("Chariot","",$Model); $Variant = "$Model $Variant"; $Model = "Chariot";	}
		if(preg_match('/^Colt/',$Model)){ $Model=str_replace("Colt","",$Model); $Variant = "$Model $Variant"; $Model = "Colt";	}
		if(preg_match('/^Delica/',$Model)){ $Model=str_replace("Delica","",$Model); $Variant = "$Model $Variant"; $Model = "Delica";	}
		if(preg_match('/^Diamante/',$Model)){ $Model=str_replace("Diamante","",$Model); $Variant = "$Model $Variant"; $Model = "Diamante";	}
		if(preg_match('/^Dion/',$Model)){ $Model=str_replace("Dion","",$Model); $Variant = "$Model $Variant"; $Model = "Dion";	}
		if(preg_match('/^Ek/',$Model)){ $Model=str_replace("Ek","",$Model); $Variant = "$Model $Variant"; $Model = "Ek";	}
		if(preg_match('/^Fighter/',$Model)){ $Model=str_replace("Fighter","",$Model); $Variant = "$Model $Variant"; $Model = "Fighter";	}
		if(preg_match('/^Galant/',$Model)){ $Model=str_replace("Galant","",$Model); $Variant = "$Model $Variant"; $Model = "Galant";	}
		if(preg_match('/^Grandis/',$Model)){ $Model=str_replace("Grandis","",$Model); $Variant = "$Model $Variant"; $Model = "Grandis";	}
		if(preg_match('/^I |^I$/',$Model)){ $Model=str_replace("I ","",$Model); $Variant = "$Model $Variant"; $Model = "I ";	}
		if(preg_match('/^Legnum/',$Model)){ $Model=str_replace("Legnum","",$Model); $Variant = "$Model $Variant"; $Model = "Legnum";	}
		if(preg_match('/^Libelo/',$Model)){ $Model=str_replace("Libelo","",$Model); $Variant = "$Model $Variant"; $Model = "Libelo";	}
		if(preg_match('/^Minica/',$Model)){ $Model=str_replace("Minica","",$Model); $Variant = "$Model $Variant"; $Model = "Minica";	}
		if(preg_match('/^Minicab/',$Model)){ $Model=str_replace("Minicab","",$Model); $Variant = "$Model $Variant"; $Model = "Minicab";	}
		if(preg_match('/^Minika/',$Model)){ $Model=str_replace("Minika","",$Model); $Variant = "$Model $Variant"; $Model = "Minika";	}
		if(preg_match('/^Outlander/',$Model)){ $Model=str_replace("Outlander","",$Model); $Variant = "$Model $Variant"; $Model = "Outlander";	}
		if(preg_match('/^Pajero/',$Model)){ $Model=str_replace("Pajero","",$Model); $Variant = "$Model $Variant"; $Model = "Pajero";	}
		if(preg_match('/^Proudia/',$Model)){ $Model=str_replace("Proudia","",$Model); $Variant = "$Model $Variant"; $Model = "Proudia";	}
		if(preg_match('/^Toppo/',$Model)){ $Model=str_replace("Toppo","",$Model); $Variant = "$Model $Variant"; $Model = "Toppo";	}
		if(preg_match('/^Town Box/',$Model)){ $Model=str_replace("Town Box","",$Model); $Variant = "$Model $Variant"; $Model = "Town Box";	}
		if(preg_match('/^Townbox/',$Model)){ $Model=str_replace("Townbox","",$Model); $Variant = "$Model $Variant"; $Model = "Town Box";	}


	}


	if(preg_match('/^VW$/i',$Make)){$Make = "Volkswagen";}
	if(preg_match('/^Mercedes-Benz$/i',$Make)){$Make = "Mercedes Benz";}

	$Make=trim($Make);
	$Model=trim($Model);

	return array($Make, $Model, $Variant);
}#-#UpdateVehicleInformation{}



function UpdateAuctionHalls($AuctionPlace){


			// $AuctionPlace = preg_replace('/CAA Chubu/i',"CAA Nagoya",$AuctionPlace);
			$AuctionPlace = preg_replace('/USS Ryuutsu/i', "RAA",$AuctionPlace);
			$AuctionPlace = preg_replace('/USS Kyushu/i', "USS KyushuG",$AuctionPlace);
			$AuctionPlace = preg_replace('/USS Gunma/i', "USS Gumma",$AuctionPlace);
			// $AuctionPlace = preg_replace('/CAA Chuubu/i', "CAA Nagoya",$AuctionPlace);
			$AuctionPlace = preg_replace('/CAA Chuubu/i', "CAA Chubu",$AuctionPlace);
			$AuctionPlace = preg_replace('/TAA Minami Kyushu/i',"TAA MinamiKyushu",$AuctionPlace);
			$AuctionPlace = preg_replace('/Bay Auc/i', "Bay-Auc",$AuctionPlace);
			$AuctionPlace = preg_replace('/USSR Aichi-Nagoya/i', "USS R-Nagoya",$AuctionPlace);
			$AuctionPlace = preg_replace('/JAA Tsukuba/i', "CAT",$AuctionPlace);
			$AuctionPlace = preg_replace('/Arai Sendai/i', "AAAI Sendai",$AuctionPlace);
			$AuctionPlace = preg_replace('/Bay Auc/i', "Bay-Auc",$AuctionPlace);
			$AuctionPlace = preg_replace('/Arai Bayside/i', "AAAI Bayside",$AuctionPlace);
			$AuctionPlace = preg_replace('/Arai Oyama/i', "AAAI Oyama",$AuctionPlace);
			$AuctionPlace = preg_replace('/^Arai VT$/i', "AAAI Oyama VT",$AuctionPlace);
			$AuctionPlace = preg_replace('/USS NishiTokyo/i', "USS Saitama",$AuctionPlace);
			$AuctionPlace = preg_replace('/Tender/i', "Nyuusatsu",$AuctionPlace);
			$AuctionPlace = preg_replace('/NYUUSATSU/i', "Nyuusatsu",$AuctionPlace);
			$AuctionPlace = preg_replace('/NYUSATSU/i', "Nyuusatsu",$AuctionPlace);
			$AuctionPlace = preg_replace('/NYUSATS/i', "Nyuusatsu",$AuctionPlace);
			$AuctionPlace = preg_replace('/Nyuusats/i', "Nyuusatsu",$AuctionPlace);
			$AuctionPlace = preg_replace('/ORIX Atsugi Tender/i', "ORIX Atsugi Nyuusatsu",$AuctionPlace);
			$AuctionPlace = preg_replace('/ORIX Sendai Tender/i', "ORIX Sendai Nyuusatsu",$AuctionPlace);
			$AuctionPlace = preg_replace('/SMAP TOKYO Tender/i', "SMAP TOKYO Nyuusatsu",$AuctionPlace);
			$AuctionPlace = preg_replace('/LUM TOKYO Tender/i', "LUM TOKYO Nyuusatsu",$AuctionPlace);
			$AuctionPlace = preg_replace('/ORIX ATSUGI Tender/i', "ORIX ATSUGI Nyuusatsu",$AuctionPlace);

			$AuctionPlace=preg_replace('/[^a-z0-9 ]/i','',$AuctionPlace);

			$AuctionPlace = preg_replace('/BayAuc/i', "Bay-Auc",$AuctionPlace);
			$AuctionPlace = preg_replace('/USS RNagoya/i', "USS R-Nagoya",$AuctionPlace);
			$AuctionPlace = preg_replace('/USS RTokyo/i', "USS R-Tokyo",$AuctionPlace);


		return $AuctionPlace;
	}#-#UpdateAuctionHalls{}





function FilterNZ($Year, $Make, $Model, $Variant, $Chassis, $KM){
		$failedAt= "";
		$ok=true;
		if(($Year >= 1900)&&($Year <= 2003)){
			$ok=false;
			$failedAt = "failed at $Year";
		}
		$t=1;

		# Blocked for 2009
		if(($ok)&&(preg_match('/CAPA|ORTHIA|PRELUDE|SMX|S\-MX|LOGO|DOMANI|RX7|RX\-7|CAPELLA|LIBERO|CARISMA|DINGO|TERRANO|PULSAR|RNESSA|SILVIA|SUPRA|CARIB|GRANVIA|GRACIA/i',$Model))){ #REGIUS re-introduced 2/12/2013, Mirage re-introduced 26/2/2015, RVR reintroduced 4/6/2015
			$ok=false;
			$failedAt ="/CAPA|ORTHIA|PRELUDE|SMX|S\-MX|LOGO|DOMANI|RX7|RX\-7|CAPELLA|LIBERO|CARISMA|DINGO|TERRANO|PULSAR|RNESSA|SILVIA|SUPRA|CARIB|GRANVIA|GRACIA/";

		}

		// if(!$ok){ echo "TEST ".$t." ".$Year." ".$Make." ".$Model." ".$Variant." ".$Chassis." ".$KM; }

		# Blocked for 2009
		if(($ok)&&(preg_match('/^KCH40G$|^ST215$|^ST210G$|^ST215G$|^ST215W$|^EL51$|^EL55$|^CXR10G$|^KCH10W$|^KCH16W$|^LH178V$|^KZH106W$|^RCH441W$|^KCH41W$|^LH162V$|^RCH47W$|^KZJ95W$|^RZJ95W$|^RZJ90W$|^HDJ101K$|^KZJ90W$|^SX411G$|^SX410W$|^CB20$|^CD20$|^DD28$|^DD25$|^P35W$|^SK56VM$|^SK22MM$|^SK22TM$|^V78W$|^V21W$|^V45$|^K74T$|^LRMD22$|^VU30$|^RR50$|^LH172V$|^CR50G$|^EP91$|^KZN185W$$/i',$Chassis))){ #REGIUS re-introduced 2/12/2013
			$ok=false;
			$failedAt = "CH40G$|^ST215$|^ST210G$|^ST215G$|^ST215W$|^EL51$|^EL55$|^CXR10G$|^KCH10W$|^KCH16W$|^LH178V$|^KZH106W$|^RCH441W$|^KCH41W$|^LH162V$|^RCH47W$|^KZJ95W$|";
		}




		if(($ok)&&(preg_match('/^163113|^UBS69G|^UBS69GW$|UBS69GW$|^UCS69GW$|^DRD35J45$|^NRR35K3$|^E-DW3WF$|^CF7$|^CF6$|^RD1$|^GA3$|^EL3$|^EL4$|^CF4$|^LJL$|^BVEY11$|^UVL6R$|^UF66W$|^LVLW$|^LVSW$|^LVEW$|^FK71HJ$|^F31A$|^F36A$|^PD8W$|^PD6W$|^PE8W$|^P25W$|^SK22WM$|^K97WG$|^K96W$|^VEW10$|^JVNU30$|^HU14$|^SU14$|^KRE24$|^VTE24$|^FEGE24$|^VWGE24$|^CWMGE24$|^VWMGE24$|^FGDY33$|^HY35$|^PAY31$|^ALE50$|^ATWE50$|^ALWE50$|^MY33$|^PAY31$|^Y31$|^HY33$|^W30$|^NW30$|^HC35$|^GC35$|^PM11$|^PNM11$|^WNU30$|^HP11$|^FHP11$|^WHP11$|^RFNB14$|^RKNB14$|^RHNB14$|^WYY61$|^KBC23$|^KBNC23$|^LP42D$|^XN12A$/i',$Chassis))){
			$ok=false;
			$failedAt = "163113|^UBS69G|^UBS69GW$|UBS69GW$|^UCS69GW$|^DRD35J45";
		}


		# ROVER
		if(($ok)&&(preg_match('/^RD18K$/i',$Chassis))){
			$ok=false;
			$failedAt = "RD18K";
		}


		# JAGUAR
		if(($ok)&&(preg_match('/^JLF8$/i',$Chassis))){
			$ok=false;
			$failedAt = "JLF8$/i";
		}

		// if(!$ok){ echo "TEST ".$t." ".$Year." ".$Make." ".$Model." ".$Variant." ".$Chassis." ".$KM; }

		# BMW
		if(($ok)&&(preg_match('/^CG19$|^BE19$|^CH19$|^CB25$|^BK28$|^M3C$|^EF44$|^3E4J$|^8F21$|^AE43$|^AF3$|^RD3$|^PD3$/i',$Chassis))){
			$ok=false;
			$failedAt = "^CG19$|^BE19$|^CH19$|^CB25$|^BK28$|^M3C$|^EF44$|^3E4J$|^8F";
		}


		# MERCEDES
		if(($ok)&&(preg_match('/^170A23R$|^C280$|^C43$|^E55$/i',$Chassis))){
			$ok=false;
			$failedAt = "170A23R$|^C280$|^C43$|^E55$/";

		}


		# VW
		if(($ok)&&(preg_match('/^6NAH5$|^6NAEE$|^1HADZ$|^1HAGG$/i',$Chassis))){
			$failedAt = "6NAH5$|^6NAEE$|^1HADZ$|^1HAGG$/";
			$ok=false;
		}

		# RENAULT
		if(($ok)&&(preg_match('/^AF3RJ$/i',$Chassis))){
			$ok=false;
			$failedAt = "^AF3RJ$/i";
		}


		# TOYOTA
		if(($ok)&&(preg_match('/^KCH40$|^LH162$|^HDJ101$|^KZJ95$|^KCH10$|^LH172$|^KZN185$|^KZH110$|^LH182$/i',$Chassis))){
			$ok=false;
			$failedAt = "KCH40$|^LH162$|^HDJ101$|^KZJ95$|^KCH10$|^LH172$|^KZN185$|^KZH110$";
		}


		# NISSAN
		if(($ok)&&(preg_match('/^SR4F23$|^VWE24$|^CWMGE25$|^VWE25$|^RW40$|^AVE50$|^ATE50$|^AVWE50$|^PR50$|^TR50$/i',$Chassis))){
			$ok=false;
			$failedAt = "SR4F23$|^VWE24$|^CWMGE25$|^VWE25$|^RW40$|^AVE50$";
		}



		# MITSUBISHI
		if(($ok)&&(preg_match('/^BE63CE$/i',$Chassis))){
			$ok=false;
			$failedAt = "BE63CE$/i";
		}



		# ISUZU
		if(($ok)&&(preg_match('/^NHR69E$|^NKR81ED$|UES73W$|^CJ2$|^CJ3$|^JFEGE24$|^JAVE50$|^JAVWE50$|^JALE50$|^JALWE50$|^UES73EW$|^UES73FW$|^UGS25DW$|^UBS73DW$|^UBS73GW$|^UBS69DW$|^UBS69GW$|^UBS25DW$/i',$Chassis))){
			$failedAt = "NHR69E$|^NKR81ED$|UES73W$|^CJ2$|^CJ3$|^JFEGE24$";
			$ok=false;
		}


		# LANDROVER
		if(($ok)&&(preg_match('/^LJR$|^LD31$/i',$Chassis))){
			$ok=false;
			$failedAt = "LJR$|^LD31$/i";
		}

		if($KM > 1000000){$ok=false;
			$failedAt = "Km is greater than $KM";
		}
		return $ok;

	}
	function FilterGlobal($KM)
	{
		$ok=true;
		if($KM > 1000000){$ok=false; }
		return $ok;
	}