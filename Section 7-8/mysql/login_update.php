<?php//CRUD = C: Create R: Read U: Update D: Delete?>
   

<?php 
    include "db.php";
    include "functions.php";
    include "included/header.php";


  UpdateTable();
 
 ?>
 <div class="contaier">

  <div class="col-sm-6">
  <h1 class="text-center"> Update </h1>
   <form action="login_update.php" method="post">
    <label for="username">Username</label>
    <div class="form-group">
     <input type="text" name="username" class="form-control">
    </div>

    <label for="password">Password</label>
    <div class="form-group">
     <input type="password" name="password" class="form-control">
    </div>
    <div class="form-group">

     <select name="id" id="">

      <?php

                 
showAllData();
                 
                 
                 
 ?>

      <!--  <<option value="">1</option>-->

     </select>

    </div>

    <input class="btn btn-primary" type="submit" name="submit" value="UPDATE">
   </form>
   
   <?php
   
  include "included/footer.php";
   
   ?>
