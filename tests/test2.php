<?php 
$path='http://localhost/phpproject-code/notebook1project/';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

 <!-- <script src="<?=$path?>Scripts/popper.min.js" crossorigin="anonymous"></script>-->
 <script src="<?=$path?>bootnew/Scripts/jquery-3.0.0.js" crossorigin="anonymous"></script>
    <script src="<?=$path?>bootnew/Scripts/jquery-3.0.0.min.js" crossorigin="anonymous"></script>
    <script src="<?=$path?>Scripts/bootstrap.min.js" crossorigin="anonymous"></script>
    <script src="<?=$path?>Scripts/bootstrap.js" crossorigin="anonymous"></script>
    <script src="<?=$path?>Scripts/mbd.min.js" crossorigin="anonymous"></script>
   <!-- <script src="<?=$path?>Scripts/mdb.min.js" crossorigin="anonymous"></script>-->
<link rel="stylesheet" href="<?=$path?>font-awesome-4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="<?=$path?>font-awesome-4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="<?=$path?>Content/mdb.min.css">
    <link rel="stylesheet" href="<?=$path?>Content/mdb.css">
    <link rel="stylesheet" href="<?=$path?>Content/bootstrap.min.css">
    <link rel="stylesheet" href="<?=$path?>Content/bootstrap.css">
  
  

</head>
<body>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

</body>
</html>


<!--login test bootstrap modal-->


<form  method="POST" action="loginscript.php" autocomplete="off" class="modal fade " id="modallog" tabindex="-1" role="dialog" aria-labelledby="modallogged" aria-hidden="true">
  <main id="mainlog" class="dialog" role="document">
      <div id="bg2" class="modal-content col-lg-12" >
        <div  class="modal-header col-lg-12" >
        <div id="p4"  class="modal-title col-lg-12 m-0 p-0" id="modallogged">
          <p  id="p3">
            Login
          </p>
        </div>
        <div>

         <i  class="fa fa-window-close  col-lg-12" data-dismiss="modal" aria-label="Close" ></i>
    
        </div>
        </div>

        <div class="modal-body w-100 col-lg-12">
        <div  id="e1" class="col-lg-12 w-100">
          <input type="email" name="data[email]" placeholder="Email" id="e2" autocomplete="off">
        </div>
        <div  id="pa1" class="col-lg-12 w-100">
          <input type="password" name="data[passwordd]" placeholder="Password"  id="pa2" autocomplete="off">
        </div>
        <div  id="b1" class="col-lg-12 w-100">
          <button type="submit"  name="login" id="b2" class="btn-lg" value="Login">Login</button>
        </div>
        </div>


        <div class="modal-footer col-lg-12">
        <div class="col-lg-12"  style='display:flex;justify-content: center;align-items:center;margin-top:-60px'>
        <h3 class="col-lg-6"  style='color:DarkSlateBlue;font-size:15px;padding:5px'>You are not registered?</h3>
        <p class='link col-lg-6' style='color:DarkSlateBlue;font-size:15px;padding:5px;margin-top:7px'>Click here to <a href="<?=$path?>signup.php" style='color:blue'>Sign Up</a></p>  
        </div>
        </div>


      </div>
      </main>
</form>