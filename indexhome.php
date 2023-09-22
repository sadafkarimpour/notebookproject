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

 <!--   <script>
function sendRequest()
	{
		var xmlHttp;
		if(window.XMLHttpRequest)
		{
			xmlHttp = new XMLHttpRequest();
		}
		else
		{
			xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		
		xmlHttp.onreadystatechange = function(){
		
			if(xmlHttp.readyState == 4  & xmlHttp.status==200)
			{
        document.getElementById("sign1").innerHTML = xmlHttp.responseText;
			}
		}
		
		xmlHttp.open("POST", "<?=$path?>signup.php", true);
		xmlHttp.send();
	}
</script>

-->
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
  #lbg2{
    background-color: white;
    border-radius: 10px;
    width: 550px;
    height: 380px;
    text-align:center;
    box-shadow: 2px 3px 5px orchid;
    display: inline-block;
    align-items: center;
    justify-content: center;
    position: fixed;
    top:200px; left:450px;

  }
  #lbg2 .modul{
    position: relative;
   
  }
  #lp3{
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
      margin-top: 30px;
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
    #closelog{
      color:DarkSlateBlue ;
      position: absolute;
      display: flex;
      left:450px;
      top: 10px;
      font-size: 20px;
      cursor: pointer;
      align-items: center;
      justify-content: center;
    }
   
/*sign up style*/

        main{
      display: flex;
    justify-content: center;
    align-items: center;
 
    }
  #sbg2{
    background-color: white;
    border-radius: 10px;
    width: 600px;
    height: 620px;
    align-items: center;
    text-align:center;
    display: inline-block;
    box-shadow: 2px 3px 5px orchid;
    align-items: center;
    justify-content: center;
    position: fixed;
    top:100px; left:450px;
  
  }
  #sp3{
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
  
    #closesign{
      color:DarkSlateBlue ;
      position: absolute;
      display: flex;
      left:550px;
      top: 10px;
      font-size: 20px;
      cursor: pointer;
      align-items: center;
      justify-content: center;
    }

  
   

  </style>


 
<div>
<div class="alert alert-success alert-dismissible" id="success" style="display:none;margin-top:50px">
	  <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
	</div>
	<div class="alert alert-danger alert-dismissible" id="error" style="display:none;margin-top:50px">
	  <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
	</div>
  <main  id="bg1" >
    <div id="d1" >
    <div id="p11">
         <p>Welcome to MY NOOT</p>
    </div>
    <div id="p2">
         <p>Carry a notebook and write down things to do, and write out thoughts and stuff like that.</p>
    </div>
    <div id="b1">
         <button type="button" class="btn-log text-white h4 p-3"  id="loginbut">LOGIN</button>
         <button type="button" class="btn-log text-white h4 p-3" id="signbut" >SIGN UP</button>
         

    </div>
    
<!--Sign up ajax div

<div id="sign1">

</div>-->
    </div>
  </main>

<!--Login form-->

<form  action="loginscript.php" method="POST"  autocomplete="off" id="logform" >
  <main id="mainlog" >
      <div id="lbg2" >
        <div >
        <div id="lp4"  >
          <p  id="lp3">
            Login
          </p>
        </div>
        <div>

         <i  class="fa fa-window-close " id="closelog" ></i>
    
        </div>
        </div>

        <div >
        <div  id="le1" >
          <input type="email" name="data[email]" placeholder="Email" id="le2" autocomplete="off">
        </div>
        <div  id="lpa1" >
          <input type="password" name="data[passwordd]" placeholder="Password"  id="lpa2" autocomplete="off">
        </div>
        <div  id="lb1" >
          <button type="submit"  name="login" id="lb2" class="btn-lg" value="Login">Login</button>
        </div>
        </div>


        <div >
        <div style='display:flex;justify-content: center;align-items:center;margin-top:30px'>
        <h3 style='color:DarkSlateBlue;font-size:15px;padding:5px'>You are not registered?</h3>
        <p class='link' style='color:DarkSlateBlue;font-size:15px;padding:5px;margin-top:7px'>Click here to <a href="<?=$path?>signup.php" style='color:blue' >Sign Up</a></p>  
        </div>
        </div>


      </div>
      </main>
</form>

<!--sign up form-->

<form  action="signupscript.php" method="POST"   autocomplete="off"  id="signform" >
    <main>
      <div id="sbg2">
        <div id="sp4">
          <p  id="sp3">
            Sign Up
          </p>
        </div>
        <div>

<i  class="fa fa-window-close " id="closesign" ></i>

</div>
        <div  id="sf1">
          <input type="text" name="data[fname]" placeholder="First Name" id="sf2" autocomplete="off">

        </div>
        <div  id="sl1">
          <input type="text" name="data[lname]" placeholder="Last Name" id="sl2" autocomplete="off">
        </div>
        <div  id="su1">
          <input type="text" name="data[username]" placeholder="Username" id="su2" autocomplete="off">
        </div>
        <div  id="spn1">

          <input type="text" name="data[phone-number]" placeholder="Phone Number" id="spn2" autocomplete="off">
        
          
        </div>
        <div  id="se1">
          <input type="email" name="data[email]" placeholder="Email" id="se2" autocomplete="off">
        </div>
        <div  id="spa1">
          <input type="password" name="data[passwordd]" placeholder="Password"  id="spa2" autocomplete="off">
        </div>
        <div  id="sb1">
          <button type="button" id="sb2" class="btn-lg" name="signup" >Sign Up</button>
        </div>
        <div  style='display: flex;justify-content: center;align-items: center'>
        <h3 style='color:DarkSlateBlue;font-size:15px;padding:5px;'>Already signed up?</h3>
        <p class='link' style='color:DarkSlateBlue;font-size:15px;padding:5px;margin-top:10px'>Click here to <a href="<?=$path?>login.php" style='color:blue'>Login</a></p>  
        </div>
     
      </div>
    </main>
</form>
</div>
</body>

<script>
$(document).ready(function() {
    $("#logform").hide();
    $("#signform").hide();

    $('#loginbut').on('click',function(){
      $("#logform").show();
      $("#signform").hide();
      $('#closelog').on('click',function(){
        $("#logform").hide();
        $("#signform").hide();
      });
    });
    
    $('#signbut').on('click',function(){
      $("#signform").show();
      $("#logform").hide();
      $('#closesign').on('click',function(){
        $("#logform").hide();
        $("#signform").hide();
      });
    });

    $('#sb2').on('click',function(){
      $('#sb2').attr('disabled','disables');
      var fname=$("#sf2").val();
      var lname=$("#sl2").val();
      var username=$("#su2").val();
      var phone_number=$("#spn2").val();
      var email=$("#se2").val();
      var passwordd=$("#spa2").val();
      if(fname!="" && lname!="" && username!="" && phone_number!="" && email!="" && passwordd!=""){
        $.ajax({
          url:"<?=$path?>signupscript.php",
          type:"POST",
          data:{
            fname: fname,
            lname:lname,
            username:username,
            phone_number:phone_number,
            email:email,
            passwordd:passwordd,
          },
          cache: false,
				  success: function(dataResult){
					var dataResult = JSON.parse(dataResult);
					if(dataResult.statusCode==200){
            $('#sb2').removeAttr("disabled");
					$('#signform').find('input:text').val('');
						$("#success").show();
						$('#success').html('Registration successful !'); 

            }
            else if(dataresult.statusCode==201){
              $("#error").show();
              $("#error").html("Email already exists!")

            }
          }

        });
      }
      else{
			alert('Please fill all the field !');
		}
    });
    
   
    

    $('#lb2').on('click',function(){
      var email=$("#le2").val();
      var passwordd=$("#lpa2").val();
      if(email!="" && passwordd!=""){
        $.ajax({
          url:"<?=$path?>loginscript.php",
          type:"POST",
          data:{
            email:email,
            paswordd:password,
          },
          cache:false,
          success: function(dataResult){
					var dataResult = JSON.parse(dataResult);
					if(dataResult.statusCode==200){
						location.href = "noteindex.php";						
					}
					else if(dataResult.statusCode==201){
						$("#error").show();
						$('#error').html('Invalid EmailId or Password !');
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
<footer>
</html>
</footer>
