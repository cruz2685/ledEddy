<?php
function drawLetter($letter, $color) {
	$letter = strtoupper($letter);
	echo "<table border = 15>";
	for ($i = 0; $i < 8; $i++) {//Controls rows
		echo "<tr>";
		
		for ($j = 0; $j < 8; $j++) {//Controls columns
            $colorToDisplay = "white";
		    $letterToDisplay = "";
			switch($letter) {
				case "A" :
					if ($i < 2 || $j < 2 || $j == 4) {
						$colorToDisplay = $color;
						$letterToDisplay = $letter;
					}
					break;
				case "B" :
					if ($i==0 || $j==0 ||  $j==1 || $i==7 || $j == 7 || $i == 3 || $i == 4) {
						$colorToDisplay = $color;
						$letterToDisplay = $letter;
					}
					break;
				case "C" :
					if($i < 2 || $i > 5 || $j < 2)
					{
						$colorToDisplay = $color;
						$letterToDisplay = $letter;
					}					
					break;
				case "D" :
					if (!($i > 6 && $j > 6) && !($i == 0 && $j > 6) && ($i < 2 || $i > 5 || $j < 2 || $j > 5)) {
						$colorToDisplay = $color;
						$letterToDisplay = $letter;
					}
					break;
				case "E" :
					if ($i < 1 || $j < 1 || $i > 6 || $i < 4 && $i > 2) {
						$colorToDisplay = $color;
						$letterToDisplay = $letter;
					}					
					break;
				case "F" :
					if ($i < 2 || $j < 2 || $j > 7 || $i == 3 || $i == 4) {
						$colorToDisplay = $color;
						$letterToDisplay = $letter;
					}	
					break;
				case "G" :
					if ($j < 2 || ($j > 5 && $i > 3)|| $i < 2 || ($j > 3 && $i < 5 && $i > 2) || $i > 5 || ($j > 6 && $i > 5)) {
						$colorToDisplay = $color;
						$letterToDisplay = $letter;
					}
					break;
				case "H" :
					if ($i == 3 || $i == 4 || $j == 0 || $j == 1 || $j == 6 || $j == 7) {
						$colorToDisplay = $color;
						$letterToDisplay = $letter;
					}
					break;
				case "I" :
					if ($i==1 or $i==7 or $j==3 or $j==4) {
						$colorToDisplay = $color;
						$letterToDisplay = $letter;
					}
					break;
				case "J" :
					if ($i < 2 || $j == 3||$j==4 || $i==7 && $j < 4|| $i==6 && $j < 4) {
						$colorToDisplay = $color;
						$letterToDisplay = $letter;
					}					
					break;
				case "K" :
					if  ($j== 0 || $j==1 || $j==2 && $i == 3 || $j==2 && $i == 4 || $j==3 && $i == 4 || $j==3 && $i ==3  || $j==5 && $i == 2  || $j==4 && $i == 2  || $j==5 && $i == 1  || $j==6 && $i == 1 ||  $j==7 && $i == 0 ||  $j==6 && $i == 0
					|| $j==4 && $i == 5 || $j==5 & $i == 5 || $j==6 & $i == 6 || $j==5 & $i == 6 || $j==7 & $i == 7 || $j==6 & $i == 7) {
						$colorToDisplay = $color;
						$letterToDisplay = $letter;
					}
					break;
				case "L" :
					if ($j < 2 || $i > 5) {
						$colorToDisplay = $color;
						$letterToDisplay = $letter;
					}
					break;
				case "M" :
					if (!($i == 0 && $j == 3) && !($i == 0 && $j == 4) && !($i > 2 && $j > 1) 
					&& !($i == 2 && $j == 2) && !($i == 2 && $j == 5) || ($i > 2 && $j > 5) 
					|| ($i == 3 && $j == 3) || ($i == 3 && $j == 4)) {
						$colorToDisplay = $color;
						$letterToDisplay = $letter;
					}
					break;
				case "N" :
					if ($j<1||$j>6||$i==1&&$j<2||$i==2&&$j==2||$i==3&&$j==3||$i==4&&$j==4||$i==5&&$j==5||$i==6&&$j==6) {
						$colorToDisplay = $color;
						$letterToDisplay = $letter;
					}
					break;
				case "O" :
					if (($i < 2 || $i > 5 || $j < 2 || $j > 5)) {
						$colorToDisplay = $color;
						$letterToDisplay = $letter;
					}
					break;
				case "P" :
					if ($i < 2 || $j < 2 || $i==4 || ($i < 5 && $j >= 6) ) {
						$colorToDisplay = $color;
						$letterToDisplay = $letter;
					}					
					break;
				case "Q" :
					if(($i == 1 || $i == 6) && $j >1 && $j < 6)
					{
						$colorToDisplay = $color;
						$letterToDisplay = $letter;
					}elseif(($i == 0 || $i == 7) && $j >2 && $j < 5)
					{
						$colorToDisplay = $color;
						$letterToDisplay = $letter;
					}elseif($i == 2 && ($j == 1 || $j == 6))
					{
						$colorToDisplay = $color;
						$letterToDisplay = $letter;
					}elseif($i>2 && $i < 4 && ($j < 2 || $j > 5))
					{
						$colorToDisplay = $color;
						$letterToDisplay = $letter;
					}elseif($i>3 && $i < 5 && ($j < 2 || $j > 5))
					{
						$colorToDisplay = $color;
						$letterToDisplay = $letter;
					}elseif($i ==  5 && ($j == 1 || $j == 6))
					{
						$colorToDisplay = $color;
						$letterToDisplay = $letter;
					}elseif($i == 4 && $j == 4)
					{
						$colorToDisplay = $color;
						$letterToDisplay = $letter;
					}elseif($i == 5 && $j == 5)
					{
						$colorToDisplay = $color;
						$letterToDisplay = $letter;
					}elseif($i == 6 && $j == 6)
					{
						$colorToDisplay = $color;
						$letterToDisplay = $letter;
					}elseif($i == 7 && $j == 7)
					{
						$colorToDisplay = $color;
						$letterToDisplay = $letter;
					}
					break;
				case "R" :
					if ($i == 0 || $j == 0 || $i == 3|| ($j == 7 && $i < 4) || ($i == $j && $i > 3)) {
						$colorToDisplay = $color;
						$letterToDisplay = $letter;
					}
					break;
				case "S" :
					if ($i == 0 || $i == 1 && $j == 0 || $i == 2 && $j == 0 || $i == 3 || $i == 4 && $j == 7 || $i == 6 && $j == 7 || $i == 5 && $j == 7 || $i == 7) {
						$colorToDisplay = $color;
						$letterToDisplay = $letter;
					}
					break;
				case "T" :
					if ($i < 2 || $i == 1 || $j == 4 || $j == 3) {
						$colorToDisplay = $color;
						$letterToDisplay = $letter;
					}
					break;
				case "U" :
					if ($i > 5 || $j < 2 || $j > 5) {
						$colorToDisplay = $color;
						$letterToDisplay = $letter;
					}
					break;
				case "V" :
					if (1) {
						$colorToDisplay = $color;
						$letterToDisplay = $letter;
					}					
					break;
				case "W" :
					if ((($i == 4 && ($j == 4 ||  $j == 3)) || ($i < 3 && ($j == 0 || $j == 7)) || (($j == 1 || $j == 6) && ($i >= 3 && $i < 5)) ||(($j == 2 || $j == 5) && ($i >= 5))))
					{	
						$colorToDisplay = $color;
						$letterToDisplay = $letter;
					}
					break;
				case "X" :
					if (($i == 0&& $j== 0)|| ($i == 1&& $j== 1)||($i == 2&& $j== 2)||($i == 3&& $j== 3)||($i == 4&& $j== 4)||($i == 5&& $j== 5)||($i == 6&& $j== 6)||($i == 7&& $j== 7)||($i == 8&& $j== 8)||($i == 0&& $j== 7)||($i == 1&& $j== 6)||($i == 2&& $j== 5)||($i == 3&& $j== 4)||($i == 4&& $j== 3)||($i == 5&& $j== 2)||($i == 6&& $j== 1)||($i == 7&& $j== 0))
					{ 
						$colorToDisplay = $color;
						$letterToDisplay = $letter;
					}
					
					break;
				case "Y" :
					if ($j==3 && $i > 2 || $j ==4 && $i > 2 || $j == 2 && $i == 3 || $j == 1 && $i == 2 ||$j == 0 && $i == 1
					||$j == 0 && $i == 0 ||$j == 1 && $i == 1 || $j == 2 && $i == 2	|| $j == 1 && $i == 1 || $j == 5 && $i == 3 ||
					$j == 5 && $i == 2 || $j == 1 && $i == 1 || $j == 6 && $i == 2 || $j == 6  && $i == 1 || $j == 7 && $i == 1
					|| $j == 7 && $i == 0) {
						$colorToDisplay = $color;
						$letterToDisplay = $letter;
					}
					break;
				case "Z" :
					if (1) {
						$colorToDisplay = $color;
						$letterToDisplay = $letter;
					}
					break;					
				case "!" :
					if ($j != 0 && $j != 1 && $j != 2 && $j != 5 && $j != 6 && $j != 7 && $i != 7 && $i != 4 && $i != 5) {
						$colorToDisplay = $color;
						$letterToDisplay = $letter;
					}
					break;
				case "?" :
					if (1) {
						$colorToDisplay = $color;
						$letterToDisplay = $letter;
					}					
					break;
				case "1" :
					if (($j == 3 || $j == 4 || $i == 7) || ($j == 2 && $i == 1) || ($j == 1 && $i == 1)) {
						$colorToDisplay = $color;
						$letterToDisplay = $letter;
					}
					break;
				case "2" :
					if (1) {
						$colorToDisplay = $color;
						$letterToDisplay = $letter; 
					}					
					break;
				case "3" :
					if (1) {
						$colorToDisplay = $color;
						$letterToDisplay = $letter;
					}
					break;
				case "4" :
					if (($i < 4 && $j < 2) || $i == 4 || $i == 3 || $j == 6 || $j == 7) {
						$colorToDisplay = $color;
						$letterToDisplay = $letter;
					}
					break;
				case "5" :
					if (1) {
						$colorToDisplay = $color;
						$letterToDisplay = $letter;
					}		
					break;
				case "6" :
					if (1) {
						$colorToDisplay = $color;
						$letterToDisplay = $letter;
					}
					break;
				case "7" :
					if ($i == 0 || $j == 8 - $i) {
					}	
					break;
				case "8" :
					if (1) {
						$colorToDisplay = $color;
						$letterToDisplay = $letter;
					}
					break;
				case "9" :
					if ($i == 0 || ($j == 0 && $i < 4) || $i == 3 || $j == 7) {
						$colorToDisplay = $color;
						$letterToDisplay = $letter;
					}
					break;					
			}  //endSwitch
			
			if ($colorToDisplay == "rainbow") {
				
			   $colorToDisplay = "rgb(" . rand(0,255) . ", " . rand(0,255) . ", " . rand(0,255) .")";	
				
			}
			
			echo "<td style = 'background-color:$colorToDisplay'>";
			echo $letterToDisplay;
			echo "</td>";
			
		} //endFor columns
		echo "</tr>";
	} //endFor rows
	echo "</table>";
}
?>