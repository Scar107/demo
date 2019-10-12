<?php
include "db.php";
//CRUD
//C: Create
//R: Read
//U: Update
//D: Delete

if(isset($_POST['submit'])){    
$username = $_POST['username'];
$password = $_POST['password'];
    
   $connection = mysqli_connect('localhost', 'root', '', 'loginapp'); 
    
    if($connection){
        
        echo "You are a valid member.";
        
    } else {
        
        die("There is no record on file. Try again! ");
    }
    
    
    
//    if($username && $password ){
//        
//    echo $username . "<br>";
//    echo $password . "<br>";
//        
//    }else {
//        echo "You are not a valid user. Please check your info and try again.";
//    }
    
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Login W/Out Verification </title>
 <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">   
    
</head>
<body>
 <div class="con">
     
     <div class="col-sm-6">
        <form action="login.php" method="post"> 
            <label for="username">Username</label>
             <div class="form-group">           
             <input type="text" name="username"class="form-control">
             </div>
             
             <label for="password">Password</label>
             <div class="form-group">           
             <input type="password" name="password" class="form-control">
             </div>
             <input class = "btn btn-primary" type="submit" name="submit" value="Submit">
         </form>
     </div>
 </div>   
 <?php
    
  
    
    
    
?>
    
    
    
    
</body>
</html>