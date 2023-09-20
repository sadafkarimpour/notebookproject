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
   
 <!-- <script src="<?=$path?>Scripts/popper.min.js" crossorigin="anonymous"></script>-->
 <script src="<?=$path?>bootnew/Scripts/jquery-3.0.0.js" crossorigin="anonymous"></script>
 <!--<script src="<?=$path?>Scripts/jquery-3.0.0.js" crossorigin="anonymous"></script>-->
    <script src="<?=$path?>bootnew/Scripts/jquery-3.0.0.min.js" crossorigin="anonymous"></script>
    <script src="<?=$path?>Scripts/bootstrap.min.js" crossorigin="anonymous"></script>
    <script src="<?=$path?>Scripts/bootstrap.js" crossorigin="anonymous"></script>
  
   <!-- <script src="<?=$path?>Scripts/mdb.min.js" crossorigin="anonymous"></script>-->
<link rel="stylesheet" href="<?=$path?>font-awesome-4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="<?=$path?>font-awesome-4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="<?=$path?>Content/mdb.min.css">
    <link rel="stylesheet" href="<?=$path?>Content/mdb.css">
    <link rel="stylesheet" href="<?=$path?>Content/bootstrap.min.css">
    <link rel="stylesheet" href="<?=$path?>Content/bootstrap.css">

</head>
<body>
    <button onclick=" sendRequest();" class="btn btn-primary">sign up</button>
<br/><br/>
<p id="s1"></p>
<p id="s2"></p>
<p id="s3"></p>
<p id="s4"></p>

    <script>
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
			if(xmlHttp.readyState == 1 )
			{
				document.getElementById("s1").innerHTML = 'ارتباط بین سرور و کلاینت برقرار شده است';
			}
			else if(xmlHttp.readyState == 2  & xmlHttp.status==200)
			{
				document.getElementById("s2").innerHTML = 'درخواست توسط سرور دریافت شده است';
			}
			else if(xmlHttp.readyState == 3  & xmlHttp.status==200)
			{
				document.getElementById("s3").innerHTML = 'درخواست در حال پردازش می باشد';
			}
			else if(xmlHttp.readyState == 4  & xmlHttp.status==200)
			{
				document.getElementById("s4").innerHTML = xmlHttp.responseText;
			}
		}
		
		xmlHttp.open("GET", "<?=$path?>signup.php", true);
		xmlHttp.send();
	}
</script>





	

</body>
</html>