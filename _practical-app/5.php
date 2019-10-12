<?php include "functions.php"; ?>
<?php include "includes/header.php";?>
	<section class="content">

		<aside class="col-xs-4">
		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php 


/*  Step1: Use a pre-built math function here and echo it*/
    
    
echo rand(1,1000). "<br>";

	/*Step 2:  Use a pre-built string function here and echo it*/
  
    echo strtoupper($string = "What's up FIGJAM") . "<br>";

	/*Step 3:  Use a pre-built Array function here and echo it*/
$list = [343,33,323,23,54,232,453];    
 echo max($list)."<br>";
 
$values = ['fufuiefu',343,"ffj",98484794,$string];
    
$found = in_array($string,$values);
    
    if($found){ 
        
    echo "WOW we did it togethor!!";   
    } else { 
        echo "we messed up, we could not find it!";
    }
	
?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>