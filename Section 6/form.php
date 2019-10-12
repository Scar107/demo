<?php

if(isset($_POST['submit'])){
    
    $name = array("Edwin", "Farrah","Adrian","Jazzy","FIGJAM","Nico","Emma","Suriah","Bobby","TJ","Jill");
    
    $min = 2;
    $max = 11;    
    
 $username = $_POST['username'];       
 $password = $_POST['password']; 
    
    if(strlen($username) < $min  ){
       echo "Username has to be longer then 2 characters."."<br>";         
        
    }
    if(strlen($username) > $max  ){
       echo "Username can not be longer then 11 characters."."<br>"; 
    }
    if(!in_array($username,$name)){
        echo "You are not worthy!";
    } else {
        echo "You are worthy!";
    }
    //echo $username;
    //echo $password;
    
   // echo "The Password entered as " . $password. "<br>";
    //echo "Username entered as ". $username . "<br>";
    
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
 <form action="validating_forms.php" method="post">
     
     <input type="text" name='username' placeholder="Enter Username">
     <br>
     <input type="password" name="password" placeholder="Enter Password">
     <br>
     <input type="submit" name ="submit">
    
     
     
 </form>
    
    
    
    
</body>
</html>