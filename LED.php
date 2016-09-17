<?php

include 'LEDBoard/ledLetters.php';

function LED1($message,$color)
{
     for ($i = 0; $i < strlen($message); $i++)
        {
            drawLetter($message[$i],$color);
           
        }
  
}
  
function randomColor($message){
    
    for($i=0;$i < strlen($message);$i++){
        $randCol=rand(1,10);
        
        if($randCol==1){
           $color="#FAEBD7"; 
        }
        else if($randCol==2)
        {
            $color="#000000"; 
        }
        else if($randCol==3)
        {
            $color="#7FFF00"; 
        }
        else if($randCol==4)
        {
            $color="#DC143C"; 
        }
        else if($randNum==5)
        {
            $color="#00CED1"; 
        }
        else if($randCol==6)
        {
            $color="#FFA500"; 
        }
        else if($randCol==7)
        {
            $color="#FFD700"; 
        }
        else if($randCol==8)
        {
            $color="#ADFF2F"; 
        }
        else if($randCol==9)
        {
            $color="#00FF00"; 
        }
        else if($randCol==10)
        {
            $color="#800000"; 
        }

        drawLetter($message[$i],$color);
    }
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title> Ediberto Cruz: Lab 2 - LED Board </title>
        <link rel="stylesheet" href="css/lab2.css" type="text/css" />
    </head>

    <body>
        
        <main>
        <h1> LED Board </h1>
       
      
        <?=LED1("Yoyo","rainbow")?>
        <br />
        
        <?=randomColor("Crus")?>
        <br />
        
        <?=LED1("Joy","red")?>
    
    
        
        </main>
    </body>
</html>