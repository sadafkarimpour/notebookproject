
<?php 
$path='http://localhost/notebook1project/';
?>

<?php 
session_start();
include 'database.php';

$connect=mysqli_connect($servername, $username, $password, $db_name);
if (!$connect) {
    die ("Connection Error!".mysqli_connect_error());
}

if(isset($_POST['login'])){
    $data=$_POST['data'];
    $email=$data['email'];
    $passwordd=$data['passwordd'];
    $sqlche= "SELECT * From `signupnote` WHERE email='$email' and passwordd='$passwordd'";
    $check=mysqli_query($connect,$sqlche);
    if(mysqli_num_rows($check)===1){
        $row=mysqli_fetch_assoc($check);
        if($row['email']=$email and $row['passwordd']=$passwordd){
          echo "
          <div class='form'  style='padding-top:100px;margin-bottom:-100px;display: flex;justify-content: center;align-items: center;'>
          <h3 style='color:white;font-size:15px;padding:5px;'>Logged in.</h3><br/>
          </div>
          ";
          $_SESSION["id"]=$row["id"];
         
          header('location:noteindex.php');
          
        }
       else{
       
        echo "
        <div class='form'  style='padding-top:100px;margin-bottom:-100px;display: flex;justify-content: center;align-items: center;'>
        <h3 style='color:white;font-size:15px;padding:5px;'>Invalid Email ID/Password</h3><br/>
        </div>
        ";
       }
      
    }
    else
    {
       
    echo "
    <div class='form'  style='padding-top:100px;margin-bottom:-100px;display: flex;justify-content: center;align-items: center;'>
    <h3 style='color:white;font-size:15px;padding:5px;'>Invalid Email ID/Password</h3><br/>
    </div>
    ";
    }


}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <?php include 'head.php' ?>
</head>
<body>

<header>
<?php 
include 'menu.php'
?>
</header>
  <style>
        main{
      display: flex;
    justify-content: center;
    align-items: center;
 
    }
  #bg2{
    background-color: white;
    border-radius: 10px;
    width: 600px;
    height: 400px;
    align-items: center;
    text-align:center;
    display: inline-block;
    margin-top: 180px;
    padding-top: 50px;
    box-shadow: 2px 3px 5px orchid;
  }
  #p3{
    font-size: 40px;
    font-weight: 600px;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    color: orchid;
    margin-top: 20px;
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
      margin-top: 25px;
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

    #a1{
      color:black;
    }
  </style>
  <form  method="POST" action="" autocomplete="off">
    <main>
      <div id="bg2">
        <div id="p4">
          <p  id="p3">
            Login
          </p>
        </div>
        <div  id="e1">
          <input type="email" name="data[email]" placeholder="Email" id="e2" autocomplete="off">
        </div>
        <div  id="pa1">
          <input type="password" name="data[passwordd]" placeholder="Password"  id="pa2" autocomplete="off">
        </div>
        <div  id="b1">
          <button type="submit"  name="login" id="b2" class="btn-lg" value="Login">Login</button>
        </div>
        
        <div  style='display: flex;justify-content: center;align-items: center'>
        <h3 style='color:DarkSlateBlue;font-size:15px;padding:5px;'>You are not registered?</h3>
        <p class='link' style='color:DarkSlateBlue;font-size:15px;padding:5px;margin-top:10px'>Click here to <a href="<?=$path?>signup.php" style='color:blue'>Sign Up</a></p>  
        </div>
      </div>
    </main>
</form>
</body>
</html>