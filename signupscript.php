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

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$username=$_POST['username'];
$phonenum=$_POST['phone-number'];
$email=$_POST['email'];
$passwordd=$_POST['passwordd'];
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


  

?>