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
    <style>
         body{
        background-color: #233551;
    }
        a{
            text-decoration: none;
            color:white;
            transition: all .2s ease-in-out; 
        }
        a:hover{
            transform: scale(1.1); 
            text-decoration: none;
            color:lavender;
        }
        .container{
            width: 100%;
            height: 60px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .row{

            display: flex;
            align-items: center;
            
        }
        #menu{
            background-color: DarkSlateBlue;
            width: 100%;
        }
        #p1{
            display: flex;
            align-items: center;
            justify-content: center;
            height: 70px;
            
        }
        #img1{
            width: 280px;
            height: 280px;
            margin-bottom:230px;
        }
        #img2{
            width: 125px;
            height: 125px;
            margin-bottom:70px;
        }
      
    </style>
    <div id="menu" class="container col-lg-12 col-mg-12 col-sm-12 fixed-top">
        <div  class="row col-lg-12 col-mg-12 col-sm-12 " >
            <div class="col-lg-1 col-mg-1 col-sm-1"><a href="<?=$path?>noteindex.php">Home</a></div>
            <div class="col-lg-1 col-mg-1 col-sm-1"><a href="<?=$path?>noteindex.php">Notes</a></div>
            <div class="col-lg-1 col-mg-1 col-sm-1"><a href="<?=$path?>noteaddnew.php">New Note</a></div>
            <div class="col-lg-1 col-mg-1 col-sm-1"><a href="<?=$path?>logout.php">Logout</a></div>
            <div class="col-lg-5 col-mg-3 col-sm-1" id="p1"><img src="<?=$path?>photos/2-nb.png" alt="" id="img1"></div>
            <div  class="col-lg-2 col-mg-2 col-sm-1" id="p1"><img src="<?=$path?>photos/1-nb.png" alt=""  id="img2"></div>
        </div>
    </div>
</body>
</html>