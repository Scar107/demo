<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

		<?php Navigation();?>
			
		
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php  

/*  Step1: Define a function and make it return a calculation of 2 numbers*/
    
 function addNum($num1,$num2){
     
    $sum = $num1 + $num2; 
     echo $sum."<br>";
 }   
   addNum(50,57);
    
    

	/*Step 2: Make a function that passes parameters and call it using parameter values*/

function addNums($num1, $num2){
    $sum = $num1 + $num2;
    return $sum;
    
}  
    $result = addNums(50,57);
    echo $result."<br>";
 

	
?>





</article><!--MAIN CONTENT-->


<?php include "includes/footer.php"; ?>