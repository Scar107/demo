<?php

include "db.php";

function createRows(){
    
if(isset($_POST['submit'])){
global $connection;
$username = $_POST['username'];
$password = $_POST['password'];
      
    $username = mysqli_real_escape_string($connection,$username);
    $password = mysqli_real_escape_string($connection,$password);
    $hashFormat = "$2y$10$";  
    //$2y$ is the recomended encrytion type. 10$ represents the amount of times the encryption runs, before producing an encrypted password. 
    //Current government encryption level $6$rounds=5000$
    //https://www.php.net/manual/en/function.crypt.php 
    
    $salt = "ktalgstoisgodswillaccordingtoman"; //salt is an optional salt string to base the hashing on.(HASH KEY) If not provided, the behaviour is defined by the algorithm implementation and can lead to unexpected results, & or a weak password. The longer the HASH KEY, the better the encryption.


    $hashF_and_salt = $hashFormat . $salt;
    $password = crypt($password,  $hashF_and_salt);
    
        $query = "INSERT INTO users(username, password)";
        $query .= "VALUES ('$username', '$password')";
    
        $result = mysqli_query($connection, $query);
    
        if(!$result) {
        
        die('Query FAILED' . msqli_error());
        
        } else {
        
        echo "Record Created";
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
}

function readRows(){
    
    $connection = mysqli_connect('localhost', 'root', '', 'loginapp');
    
    if($connection){
     echo "We are connected.";
        } else {
        die("Connection failed");
    }
    
    $query = "SELECT * FROM users";
    
    
    $result = mysqli_query($connection, $query);
    
    
    if(!$result) {
        
        die('Query FAILED' . msqli_error());
        
    }
    
    while($row = mysqli_fetch_assoc($result)){
       
       ?>

<pre>
       <?php
       
       print_r($row);
       ?>
         </pre>

<?php
       
   }
}

function UpdateTable(){
if(isset($_POST['submit'])){    
global $connection;
$username = $_POST['username'];
$password = $_POST['password'];
$id = $_POST['id'];
    
    $username = mysqli_real_escape_string($connection,$username);
    $password = mysqli_real_escape_string($connection,$password);
    $hashFormat = "$2y$10$";  
    //$2y$ is the recomended encrytion type. 
    //10$ represents the amount of times the encryption runs, before producing an encrypted password. 
    //Current government encryption level $6$rounds=5000$
    //https://www.php.net/manual/en/function.crypt.php will help with future encryption needs.
    
    $salt = "ktalgstoisgodswillaccordingtoman"; //salt is an optional salt string to base the hashing on.(HASH KEY) If not provided, the behaviour is defined by the algorithm implementation and can lead to unexpected results, & or a weak password. The longer the HASH KEY, the better the encryption.


    $hashF_and_salt = $hashFormat . $salt;
    $password = crypt($password,  $hashF_and_salt);
    
$query = "UPDATE users SET ";
$query .= "username = '$username' , ";
$query .= "password = '$password' "; 
$query .= "WHERE id = $id "; 
    
    $result = mysqli_query($connection, $query);
        if(!$result){
            die("QUERY FAILED" . mysqli_error($connection));
             
        }else {
        
        echo "Record Updated";
    }
        
}
}

function deleteRow(){
if(isset($_POST['submit'])){  
 
   
global $connection;
$username = $_POST['username'];
$password = $_POST['password'];
$id = $_POST['id'];
    
$query = "DELETE FROM users "; //everything in "" is SQL not PHP
$query .= "WHERE id = $id "; 
    
    $result = mysqli_query($connection, $query);
        if(!$result){
            die("QUERY FAILED" . mysqli_error($connection));
             
        }else {
        
        echo "Record Removed";
    }
   }      
    
}

function showAllData(){
    global $connection;
    $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query);
    if(!$result) {
        die('Query FAILED' . msqli_error());
}


while($row = mysqli_fetch_assoc($result)){
    $id = $row['id'];
    echo "<option value='$id'>$id</option>";
}
}

?>
