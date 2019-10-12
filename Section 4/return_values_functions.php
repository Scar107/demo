<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Return Values for Functions</title>
</head>
<body>
    
 <?php
    
 /*&function love(){
     
     echo "I Love Sabrina Jones<br><br>";
     echo 50 + 57;
     
 }   love();*/
function addNums($num1, $num2){
    $sum = $num1 + $num2;
    return $sum;
    
}  
    $result = addNums(50,57);
    echo $result."<br>";
   $result = addNums(100, $result); 
    echo $result."<br>";
    $result = addNums(100,$result); 
    echo $result."<br>";
    
    
?>
    
    
    
    
</body>
</html>