<?php 
$path='http://localhost/phpproject-code/notebook1project/';
?>
<?php 
include 'database.php';

$connect=mysqli_connect($servername, $username, $password, $db_name);
if (!$connect) {
    die ("Connection Error!".mysqli_connect_error());
}

$tbl="CREATE TABLE IF NOT EXISTS `signupnote` (
  `id` int(255) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `passwordd` varchar(255) NOT NULL)";

if(mysqli_query($connect,$tbl)){
  echo "table created";
}
else{
  echo "table not created";
}
mysqli_close($connect);


?>

<?php 
include 'database.php';

$connect=mysqli_connect($servername, $username, $password, $db_name);
if (!$connect) {
    die ("Connection Error!".mysqli_connect_error());
}

if(isset($_POST['signup'])){
  $data=$_POST['data'];
  if(empty($data['fname'])||empty($data['lname'])||empty($data['username'])||empty($data['phone-number'])||empty($data['email'])||empty($data['passwordd'])){
    echo "
    <div class='form'  style='padding-top:50px;margin-bottom:-70px;display: flex;justify-content: center;align-items: center;'>
    <h3 style='color:white;font-size:15px;padding:5px'>Required fields are missing.</h3>
    </div>
";
  }
  else{
    $fname=$data['fname'];
    $lname=$data['lname'];
    $username=$data['username'];
    $phonenum=$data['phone-number'];
    $email=$data['email'];
    $passwordd=$data['passwordd'];
    $que=mysqli_query($connect,"SELECT * FROM `signupnote` WHERE email='$email'");
    if(mysqli_num_rows($que)>0){
      echo "
      <div class='form'  style='padding-top:50px;margin-bottom:-70px;display: flex;justify-content: center;align-items: center;'>
      <h3 style='color:white;font-size:15px;padding:5px;'>Email id already exist.</h3><br/>
      <p class='link' style='color:white;font-size:15px;padding:5px;margin-top:10px'>Click here to <a href='$path/login.php' style='color:blue;'>Login</a></p>
      </div>
      ";
      
    }
    elseif(!preg_match('/^[0-9]{11}+$/', $phonenum) ){
      echo "
      <div class='form'  style='padding-top:50px;margin-bottom:-70px;display: flex;justify-content: center;align-items: center;'>
      <h3 style='color:white;font-size:15px;padding:5px;'>Phone number is not Valid.</h3><br/>
      <p class='link' style='color:white;font-size:15px;padding:5px;margin-top:10px'>Click here to <a href='$path/signup.php' style='color:blue;'>Sign Up</a></p>
      </div>
      ";
    }
    
    else{
      $sql="INSERT INTO `signupnote` ( `fname`, `lname`, `username`, `phone_number`, `email`, `passwordd`) VALUES ('$fname','$lname','$username','$phonenum','$email','$passwordd')";
      $result=mysqli_query($connect,$sql);
      if($result){
        echo "
            <div class='form' style='padding-top:50px;margin-bottom:-70px;display: flex;justify-content: center;align-items: center;'>
            <h3 style='color:white;font-size:15px;padding:5px;'>You are registered successfuly.</h3><br/>
            </div>
        ";
        header('location:login.php');
      }
      else{
    
        echo "
        <div class='form'  style='padding-top:50px;margin-bottom:-70px;display: flex;justify-content: center;align-items: center;'>
        <h3 style='color:white;font-size:15px;padding:5px;'>Required fields are missing.</h3><br/>
        <p class='link' style='color:white;font-size:15px;padding:5px;margin-top:10px'>Click here to <a href='$path/signup.php' style='color:blue'>Sign Up</a></p>  
        </div>
    ";
    
    
      } 
    }


  }

  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <?php include 'head.php' ?>
</head>
<body>
  <header>
    <?php include 'menu.php';?>
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
    height: 620px;
    align-items: center;
    text-align:center;
    display: inline-block;
    margin-top: 70px;
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
            Sign Up
          </p>
        </div>
        <div  id="f1">
          <input type="text" name="data[fname]" placeholder="First Name" id="f2" autocomplete="off">

        </div>
        <div  id="l1">
          <input type="text" name="data[lname]" placeholder="Last Name" id="l2" autocomplete="off">
        </div>
        <div  id="u1">
          <input type="text" name="data[username]" placeholder="Username" id="u2" autocomplete="off">
        </div>
        <div  id="pn1">

          <input type="text" name="data[phone-number]" placeholder="Phone Number" id="pn2" autocomplete="off">
        
          
        </div>
        <div  id="e1">
          <input type="email" name="data[email]" placeholder="Email" id="e2" autocomplete="off">
        </div>
        <div  id="pa1">
          <input type="password" name="data[passwordd]" placeholder="Password"  id="pa2" autocomplete="off">
        </div>
        <div  id="b1">
          <button type="submit" id="b2" class="btn-lg" name="signup">Sign Up</button>
        </div>
        <div  style='display: flex;justify-content: center;align-items: center'>
        <h3 style='color:DarkSlateBlue;font-size:15px;padding:5px;'>Already signed up?</h3>
        <p class='link' style='color:DarkSlateBlue;font-size:15px;padding:5px;margin-top:10px'>Click here to <a href="<?=$path?>login.php" style='color:blue'>Login</a></p>  
        </div>
      </div>
    </main>
</form>
</body>
</html>