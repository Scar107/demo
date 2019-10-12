<?php print_r($_GET);  ?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Super Global GET</title>
    <link rel="stylesheet" href="css1.css">
</head>

<body>

<?php  
      $id = 10;  
      $button = "CLICK HERE";
   ?>

<a href = " get.php?id=<?php echo $id;?> "><?php echo $button; ?></a>
       
      <script type="javascript" src="javascript1.js" />



    </body>

</html>
