<?php        
if(isset($_POST['submit'])){
echo $_POST['name'];
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Super Global POST</title>
    
</head>

<body>

<form action="post.php" method="post">
    
    <input type="text" name="name">
    
    <input type="submit">
    
    
</form>

<?php        ?>
   

    </body>

</html>
