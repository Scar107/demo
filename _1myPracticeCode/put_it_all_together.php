<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Putting it all together</title>
</head>

<body>
    <h2>Variables & Variables in a function</h2>
    <pre>
<?php
$whoAmI = 'FIGJAM';
$myFavNum = 107;
$favColor = "FF36FB49 Green";     
function variables(){    
$whoAmI = 'FIGJAM';
$myFavNum = 107;
$favColor = "FF36FB49 Green";
echo $whoAmI . "<br>";
echo $myFavNum . "<br>";
echo $favColor . "<br>";
}
variables();    
?> 
<h2>Arrays using a function</h2>
      
<?php    
function favorites(){
    
        //Variables
$whoAmI = 'FIGJAM';
$myFavNum = 107;
$favColor = "FF36FB49 Green";
    
    //Arrays //Single line comment
    /*multi-line 
    comment*/
$favTVShows = array('Stargate SG1', 'Stargate Atlantis', 'Stargate Universe', 'Firefly', 'Tera Nova', 'Battlestar Galactica', 'Franklyn & Bash'); 

    
    
$favMovies = array('Serinity', 'Harley Davidson & the Marlbro Man', 'All MCU Movies', 'Waterworld', 'The Post Man', 'The Martian', 'Continuium', 'Ark of Truth');
    
$whatAreMyFavs = ['Nickname' => $whoAmI, 'Favorite Number' => $myFavNum, 'My Favorite Color' => $favColor, 'My Favorite TV Shows' => $favTVShows, 'My Favorite Movies' => $favMovies];
   
    
    ?> 
    <<pre>
       <?php
       echo 'What are my favorite TV Shows'."<br>";
       print_r($favTVShows);
       ?>
         </pre>
    <<pre>
        <?php
       echo 'What are my favorite Movies'."<br>";
       print_r($favMovies);
       ?>
    </pre>
    <<pre>
        <?php
       echo " What are al of my favorites". "<br>";
       print_r($whatAreMyFavs);
       ?>
        </pre>

        <?php

echo '<br>' . 'echo function = <br>' . ' '.$whatAreMyFavs['Nickname']."<br> ".$whatAreMyFavs['Favorite Number']."<br> " . $whatAreMyFavs['My Favorite Color']."<br> ";
    
    
}

favorites();
?>
        <h2>Comparison Opreators</h2>
        <pre>
        equal ==
        identical ===
        Compare > < >= <= <>
        not eual !=
        not identical !==
</pre>
        <h2>Logical Operators</h2>
        <pre>
       And && 
       Or ||
       Not!
</pre>
        </pre>
        <h2>Comments</h2>
        <pre>
    //Single line comment
    /*multi-line 
    comment*/ 
<?php
if (4 == 4 && 5 < 4 ) {
    echo "It is True";
}   else {
    echo "It is not true";
    }

?>
   </pre>
        <h2>If Statements in a Function</h2>
        <pre>
<?php

function ifStatement(){
//if(If something here executes as true){Then everything in here executes} 
    $num1 = 105;
    $num2 = 17;
    $num3 = $num1 + $num2;
 if  ($num1 > $num2){     
    echo $num1 . "  is greater then". " " . $num2;
      echo "<br><br> The sum of both numbers is " . $num3;   
}elseif($num1 == $num2) {
     echo "Both numbers are of equal value.<br><br>" . " First Number " . $num1 . "<br><br> Second Number " . $num2;
       echo "<br><br> The sum of both numbers is " . $num3;
 }else  {
     echo $num2 ." is not greater then". $num1;
       echo "<br><br> The sum of both numbers is " . $num3;
 }
}
ifStatement();


?>
 <h2>If Statements in a Function</h2>
   
<?php

function forLoop(){
for($num = 0; $num < 10;$num++){
    echo $num . "<br>" ;
}  
}
forLoop();
?>
   
   
    
</body>
</html>
