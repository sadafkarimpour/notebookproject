<?php require_once "database.php" ?>


<div class="container-fluid fixed-top p-3 mb-2 ml-3  bg-primary  align-middle text-center">
  <div class="row ">
            <div class="col-lg-2 col-md-2 col-sm-1  align-middle text-center">
                <a href="<?php echo $path."index.php"?>" class="text-white  align-middle text-center">Home</a>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-1  align-middle text-center ">
                <a href="<?php echo $path."note.php"?>" class="text-white  align-middle text-center">Notes</a>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-1  align-middle text-center"> 
                <a href="<?php echo $path."login.php"?>" class="text-white  align-middle text-center">Login</a>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-1  align-middle text-center">
                <a href="<?php echo $path."logout.php"?>" class="text-white  align-middle text-center">Logout</a>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-1  align-middle text-center">
                <a href="<?php echo $path."register.php"?>" class="text-white  align-middle text-center">Register</a>
            </div>
  </div>
</div>