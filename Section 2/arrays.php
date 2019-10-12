<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Arrays</title>
</head>
<body>
<?php
echo "<h1> Arrays</h1><br>";
 $name = 'Figjam';   
 $oldArray = array(15,27, 'fuck you', 'gfac',99,69,107,200,73); // older way, used for more specific causes/needs 
    
 /*echo $oldArray; // Notice: Array to string conversion in C:\xampp\htdocs\demo\arrays.php on line 12 Array  */    
     
 $stringList = [];
$numberList = [4,6,8,10]; // newer way to do arrays
    
print_r($oldArray);
 echo "<br>" ;
    echo "<br>" ; 
echo $oldArray[6];
    
      
    
    
    ?>
    
    
    
</body>
</html>