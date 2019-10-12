<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php  

    /*Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP*/
    $num1 = 4;
    $num2 = 3;
    if ($num1 == $num2){
    
    echo "Both numbers are of equal value!";    
} elseif($num1 > $num2){
        
        echo "I love PHP!!<br>";
    }


	/*Step 2: Make a forloop  that displays 10 numbers*/
for($num = 0; $num <= 10;$num++){
     
     echo $num . "<br>" ;
     
 }   

	/*Step 3 : Make a switch Statement that test againts one condition with 5 cases*/

 $num5 = 0;
    
    switch($num5){
        
    case 34:
    echo "it is " . $num5;
    break;
    case 45:
    echo "it is " . $num5;
    break;
    case 69:
    echo "it is " . $num5;
    break;
    case 99:
    echo "it is " . $num5;
    break;
    case 107:
    echo "it is " . $num5;
    break;        
    default :
    echo "Number entered: " . $num5 . " No match file. ";
    break;
        
   
    }

	
?>






</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php"; ?>