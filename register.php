<?php 


if (isset($_POST['class']) && isset($_POST['function'])) {
  $className = $_POST['class'];
  $functionName = $_POST['function'];
  $fname= $_POST['fname'];
  $lname= $_POST['lname'];
  $username= $_POST['username'];
  $email= $_POST['email'];
  $passwordd= $_POST['passwordd'];
  // Include the necessary file containing your class definition
  require_once 'models/usermodal.php';

  // Create an instance of your class
  $classInstance = new $className();
  $result = $classInstance->$functionName($fname, $lname, $username, $email, $passwordd);
  
  // Prepare the response as a JSON object
  $response = array("statusCode" => $result);
  
  // Return the response as a JSON string
  echo json_encode($response);

}

require_once "database.php";

$path = "http://localhost/newphpproject/notebook2project/";


$tbl="CREATE TABLE IF NOT EXISTS `signupnote` (
    `id` int(255) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `fname` varchar(255) NOT NULL,
    `lname` varchar(255) NOT NULL,
    `username` varchar(255) NOT NULL,
    `phone_number` varchar(255) NOT NULL,
    `email` varchar(255) NOT NULL,
    `passwordd` varchar(255) NOT NULL)";
  
  if(mysqli_query($connect,$tbl)){
   
  }
  else{
    echo "table not created";
  }
  mysqli_close($connect);


require "header.php";

echo "
<center>

<div class='alert alert-success alert-dismissible' id='success' style='display:none;margin-top:50px'>
	  <a href='#' class='close' data-dismiss='alert' aria-label='close'>×</a>
	</div>
	<div class='alert alert-danger alert-dismissible' id='error' style='display:none;margin-top:50px'>
	  <a href='#' class='close' data-dismiss='alert' aria-label='close'>×</a>
	</div>

<form  method='POST' action='' autocomplete='off' id='signform'>
<main>
  <div class=' w-50  bg-dark text-white rounded' style='margin-top:100px;height:500px;padding-top:20px;'>
  <div class='container'>
    <div class=' w-50 '>
      <p  class='col-lg-12 col-md-6 col-sm-1 p-1 m-3'>
        Sign Up
      </p>
    </div>
  </div>
    <div  class='row w-50 m-3'>
      <input class='col-lg-12 col-md-6 col-sm-1  p-1 w-70 h-50 ' id='fname' type='text' name='data[fname]' placeholder='First Name'  autocomplete='off'>
    </div>
    <div  class='row  w-50 m-3'>
      <input class='col-lg-12 col-md-6 col-sm-1 p-1 w-70 h-50' id='lname' type='text' name='data[lname]' placeholder='Last Name'  autocomplete='off'>
    </div>
    <div  class='row w-50 m-3'>
      <input class='col-lg-12 col-md-6 col-sm-1 p-1 w-70 h-50' id='username'  type='text' name='data[username]' placeholder='Username'  autocomplete='off'>
    </div>
    <div  class='row  w-50 m-3'>
      <input class='col-lg-12 col-md-6 col-sm-1 p-1 w-70 h-50' id='phone-number'  type='text' name='data[phone-number]'' placeholder='Phone Number'  autocomplete='off'>
    </div>
    <div  class='row  w-50 m-3'>
      <input class='col-lg-12 col-md-6 col-sm-1 p-1 w-70 h-50 ' id='email'  type='email' name='data[email]' placeholder='Email'  autocomplete='off'>
    </div>
    <div  class='row  w-50 m-3'>
      <input class='col-lg-12 col-md-6 col-sm-1 p-1 w-70 h-50' id='passwordd'  type='password' name='data[passwordd]' placeholder='Password'   autocomplete='off'>
    </div>
    <div  class='row  w-50 m-3'>
      <button class='col-lg-12 col-md-6 col-sm-1 p-1  btn btn-primary text-white'  type='button'  name='signup' id='signupbut' onclick='signup();' >Sign Up</button>
    </div>
    <div class='container '>
    <div  class='row d-inline-flex w-50 h-50'>
    <div class='col-lg-6 col-md-3 col-sm-1 ' >
    <h6 >Already signed up?</h6>
    </div>
    <div class='col-lg-6 col-md-3 col-sm-1 ' >
    <p >Click here to <a href='$path/login.php'>Login</a></p>  
    </div>
    </div>
    </div>
 
  </div>
</main>
</form>
</center>

<script>
$(document).ready(function(){
  $('#signupbut').on('click',function(){
        $('#signupbut').attr('disabled','disables');
        var fname=$('#fname').val();
        var lname=$('#lname').val();
        var username=$('#username').val();
        var phone_number=$('#phone_number').val();
        var email=$('#se2').val();
        var passwordd=$('#spa2').val();
        if(fname!='' && lname!='' && username!='' && phone_number!='' && email!='' && passwordd!=''){
          $.ajax({
            url:'register.php',
            type:'POST',
            data:{
            class:'UserModal',
            function:'insert',
            fname:fname,
            lname:lname,
            username:username,
            phone_number:phone_number,
            email:email,
            passwordd:passwordd,
             
            },
            cache: false,
            success: function(dataResult){
            var data = JSON.parse(dataResult);
            if(data.statusCode==200){
                $('#signupbut').removeAttr('disabled');
                $('#signform').find('input:text').val('');
                $('#success').show();
                $('#success').html('Registration successful !'); 

            }
            else if(data.statusCode==201){
              $('#error').show();
              $('#error').html('Email already exists!')

            }
            }
  
          });
        }
        else{
              alert('Please fill all the field !');
          }
   
      
        });
      });

</script>

"
;


require_once "footer.php";


?>