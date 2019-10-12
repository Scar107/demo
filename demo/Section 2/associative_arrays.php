<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>associative_arrays</title>
</head>
<body>
    <?php
    
    
  $number = array(10,20,30,40,50,60,) ;
    
  //echo $number[9] . "<br>";
   print_r($number); 
    
    echo '<br>';
    echo '<br>';
  // Associative Array  
  $names = array("First" => 'Apophis',"Middle" => 'Figjam' , "Last" => 'Maximus' ); 
    echo '<br>';
    
    //echo $names[0] . "<br>";
    echo "print_r function<br>"; print_r($names);
   echo '<br>';
    
    echo '<br>' . 'echo function = ' . ' '.$names['First']." ".$names['Middle']." " . $names['Last'];    
    ?>
    
    
</body>
</html>