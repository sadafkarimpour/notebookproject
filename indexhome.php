<?php 
include 'database.php';
?>
<?php 
$path='http://localhost/phpproject-code/notebook1project/';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site1</title>
    <?php include 'head.php' ?>



</head>

<body>

<menu>
    <?php include 'menu.php'?>
  </menu>
  

  <style>
    body{
      background-image:url("<?=$path?>photos/woman-s-hand-presenting-futuristic-technology-digital-remix.jpg") ;
      background-repeat: no-repeat;
      background-size: cover;
      width: 100%;
      height: 100%;
      
    }

    #bg1{
      width: 100%;
      height: 739px;
      backdrop-filter: blur(8px);
      display: flex;
      justify-content: center;
      align-items: center;
      display: inline-block;
      text-align:center;
   

    }

    #d1{
      margin-top: 300px;
    }
    #p11{
     
      color:#233551;
      font-size: 55px;
      font-weight: 400;
      background-color: orchid;
    }
    #p2{
      color:orchid;
      font-size: 30px;
    }
    #b1{
      font-size: 60px;
      margin-bottom: 50px;
    }

    button{
      background-color:DarkSlateBlue;
      border: none;
      width: 150px;
      border: 1px solid orchid;
      box-shadow: 2px 2px 3px orchid;
      border-radius: 10px;
      transition: all .7s ease-in-out; 
     
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
           
    }
    button:hover{
      transform: scale(1.1); 
      background-color:orchid;
      border: 1px solid DarkSlateBlue;
      box-shadow: 2px 2px 3px DarkSlateBlue;
    } 
    button:active{
      background-color:DarkSlateBlue;
      border: none;
      border: 1px solid orchid;
      box-shadow: 2px 2px 3px orchid;
    } 


    /*login style*/

    #mainlog{
      display: flex;
    justify-content: center;
    align-items: center;
  
    }
  #bg2{
    background-color: white;
    border-radius: 10px;
    width: 550px;
    height: 450px;
    text-align:center;
    box-shadow: 2px 3px 5px orchid;
    display: inline-block;
    align-items: center;
    justify-content: center;
    position: fixed;
    top:200px; left:450px;

  }
  #bg2 .modul{
    position: relative;
   
  }
  #p3{
    font-size: 40px;
    font-weight: 600px;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    color: orchid;
    margin-top: 15px;
  }
  input{
    width: 60%;
    height: 35px;
    margin: 15px;
    border:none;
    border-bottom: 2px solid orchid;
    background-color: none;

  }
  input::placeholder{
    color:  gray;
    font-size: 18px;
  }
  button{
      background-color:DarkSlateBlue;
      border: none;
      width: 140px;
      font-size: 50px;
      border: 1px solid orchid;
      box-shadow: 2px 2px 3px orchid;
      border-radius: 10px;
      transition: all .7s ease-in-out; 
      margin-top: 15px;
      color: white;
    }
    button:hover{
      transform: scale(1.1); 
      background-color:orchid;
      border: 1px solid DarkSlateBlue;
      box-shadow: 2px 2px 3px DarkSlateBlue;
      
    } 
    button:active{
      background-color:DarkSlateBlue;
      border: none;
      border: 1px solid orchid;
      box-shadow: 2px 2px 3px orchid;
    } 
    .fa{
      color:DarkSlateBlue ;
      position: absolute;
      display: flex;
      left:250px;
      font-size: 20px;
      cursor: pointer;
      align-items: center;
      justify-content: center;
    }
 
    /*sign up style*/

  </style>

  <main  id="bg1" >
    <div id="d1" >
    <div id="p11">
         <p>Welcome to MY NOOT</p>
    </div>
    <div id="p2">
         <p>Carry a notebook and write down things to do, and write out thoughts and stuff like that.</p>
    </div>
    <div id="b1">
         <button type="button" class="btn-log text-white h4 p-3" data-toggle="modal" data-target="#modallog">LOGIN</button>
         <button type="button" class="btn-log text-white h4 p-3" >SIGN UP</button>
    </div>
    </div>
  </main>

<!--Login PopUp-->

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



<!--Sign up popUp-->


</body>

<footer>
</html>
</footer>
