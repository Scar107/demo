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