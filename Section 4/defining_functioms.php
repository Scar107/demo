<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
 <?php
    
    //using a funtion to call multiple funtions
function init(){
    exswitch();
    calculate();
    say_Something();
}  
function exswitch(){ 
    $num = 99;
    
    switch($num){
        
    case 34:
    echo "it is 34<br>";
    break;
    case 107:
    echo "it is 107<br>";
    break;
    case 99:
    echo "it is 99<br>";
    break;
            
    default :
    echo "no match found";
    break;
        
   
    }
    
    
    
}
function calculate(){
    
    echo 57 + 50 . "<br>";
    
}    
    
function say_Something(){
    
  echo "Hello Figjam!!! Keep it up!!";  
    
    
    
}    
    
init();    
    
    ?>
    
    
    
    
</body>
</html>