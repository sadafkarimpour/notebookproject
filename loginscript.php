
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
