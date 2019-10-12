<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>If Statements</title>
</head>
<body>
 <?php
    
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
    
    
    
    ?>
    
    
    
    
    
</body>
</html>