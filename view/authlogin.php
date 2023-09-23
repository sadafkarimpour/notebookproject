<?php require_once "header.php";
    require_once "database.php" ?>

<center>


<div class='alert alert-success alert-dismissible' id='success' style='display:none;margin-top:50px'>
	  <a href='#' class='close' data-dismiss='alert' aria-label='close'>×</a>
	</div>
	<div class='alert alert-danger alert-dismissible' id='error' style='display:none;margin-top:50px'>
	  <a href='#' class='close' data-dismiss='alert' aria-label='close'>×</a>
	</div>
<form  method='POST' action='' autocomplete='off' id='signform'>
    <main>
        <div class=' w-50  bg-dark text-white rounded' style='margin-top:100px;height:300px;padding-top:20px;'>
            <div class='container'>
                <div class=' w-50 '>
                    <p  class='col-lg-12 col-md-6 col-sm-1 p-1 m-3'>
                    Login
                    </p>
                </div>
            </div>
    
            <div  class='row  w-50 m-3'>
                <input class='col-lg-12 col-md-6 col-sm-1 p-1 w-70 h-50 ' id='emaillog'  type='email' name='data[email]' placeholder='Email'  autocomplete='off'>
            </div>
    
            <div  class='row  w-50 m-3'>
                <input class='col-lg-12 col-md-6 col-sm-1 p-1 w-70 h-50' id='passworddlog'  type='password' name='data[passwordd]' placeholder='Password'   autocomplete='off'>
            </div>
    
            <div  class='row  w-50 m-3'>
                <button class='col-lg-12 col-md-6 col-sm-1 p-1  btn btn-primary text-white'  type='button'  name='login' id='loginbut' onclick='Login();' >Login</button>
            </div>
    
            <div class='container '>
                <div  class='row d-inline-flex w-50 h-50'>
                    <div class='col-lg-6 col-md-3 col-sm-1 ' >
                        <h6 >Not registered??</h6>
                    </div>
                    <div class='col-lg-6 col-md-3 col-sm-1 ' >
                        <p >Click here to <a href='<?php echo PATH ?>authRegister.php'>Login</a></p>  
                    </div>
                </div>
            </div>
 
        </div>
    </main>
</form>
</center>
<script>

function Login(){
$('#loginbut').on('click',function(){
      var email=$("#emaillog").val();
      var passwordd=$("#passworddlog").val();
      if(email!="" && passwordd!=""){
        let url = "<?php echo PATH ?>auth.php?action=dologin";
        $.ajax({
          url:url,
          type:"POST",
          data:{
            email:email,
            paswordd:passwordd,
          },
          cache:false,
          success: function(dataResult){
					var dataResult = JSON.parse(dataResult);
					if(dataResult.statusCode==200){
						location.href = "note.php";						
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

};
</script>

<?php require_once "footer.php"; ?>