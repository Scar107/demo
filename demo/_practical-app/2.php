<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

		<aside class="col-xs-4">

	<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


		<article class="main-content col-xs-8">
		

<?php/* 

    Step 1: Make 2 variables called number1 and number2 and set 1 to value 10 and the other 20:

    Step 2: Add the two variables and display the sum with echo:


     Step3: Make 2 Arrays with the same values, one regular and the other associative

		 
			 */		?>
			 
<?php
            
  $number1 = 10;
  $number2 = 20;
  $number3 = $number1+$number2;
        echo $number3; 
        echo '<br>';
        echo '<br>'; 
        echo '<br>';    
$name = array('Apophis','Figjam','Maximus');            
$ascName = array("First" => 'Apophis', "Middle" => 'Figjam',"Last" =>'Maximus'); 
        print_r($name);
            echo '<br>';
        print_r($ascName); 
            echo '<br>';echo '<br>';
            echo $ascName['Middle'] ;   
            
            
            ?>
			 

	

		</article><!--MAIN CONTENT-->

<?php include "includes/footer.php"; ?>