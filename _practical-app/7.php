<?php include "functions.php" ?>


<?php
		
$connection = mysqli_connect('localhost', 'root', '', 'mylist');
	if(!$connection){
		
		die("You are not connected to the Database") . mysqli_error($connection);
	}
		
$query = "SELECT * FROM reports ";		
		
$result = mysqli_query($connection, $query);
if(!$result){
	
	die("QUERY FAILED!");
}
		?>



<?php include "includes/header.php" ?>
    

	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


	<article class="main-content col-xs-8">
	
	<?php
		
		while($record = mysqli_fetch_assoc($result)) {
			
		print_r($record);
		
		}
		
		?>
	
	
	
	
	<?php  

	/*  Step 1 - Create a database in PHPmyadmin

		Step 2 - Create a table like the one from the lecture

		Step 3 - Insert some Data

		Step 4 - Connect to Database and read data

*/
	
	?>





</article><!--MAIN CONTENT-->

<?php include "includes/footer.php" ?>
