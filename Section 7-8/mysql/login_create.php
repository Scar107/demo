<?php $title = "Create an Account"; //CRUD = C: Create R: Read U: Update D: Delete ?>
   

<?php 
    include "db.php";
    include "functions.php";
    include "included/header.php";

createRows();

?>





        <div class="con">

        <div class="col-sm-6">
           <h1 class="text-center">Create</h1>
            <form action="login_create.php" method="post">
                <label for="username">Username</label>
                <div class="form-group">
                    <input type="text" name="username" class="form-control">
                </div>

                <label for="password">Password</label>
                <div class="form-group">
                    <input type="password" name="password" class="form-control">
                </div>
                <input class="btn btn-primary" type="submit" name="submit" value="CREATE">
            </form>
        </div>
 <?php
                            
        
        include "included/footer.php";
        
        
        ?>