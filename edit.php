<?php 
include 'database.php';

$connect=mysqli_connect($servername,$username,$password,$db_name);
if (!$connect) {
    die ("Connection Error!".mysqli_connect_error());
}
$id=$_GET['id'];
$query=mysqli_query($connect,"select * from `addnote` where id='$id' ");
$row=mysqli_fetch_array($query);

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
    <title>Edit Page</title>
    <?php include 'head.php' ?>
</head>
<body>
<header>
    <?php include 'menu2.php'?>
  </header>
    <style>
    body{
        background-color: cornflowerblue;
       }
        form{
            background-color: white;
            width: 70%;
            height:620px;
            border-radius: 10px;
            align-content: center;
            text-align: center;
            margin: auto;
            padding: 10px;
            margin-top:80px;
            display: inline-block;
            justify-content: center;
            margin-left: 250px;
        
        }
        #h1{
        color: cornflowerblue;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        font-size: 22px;
        margin:10px 100px;
        transition: all .2s ease-in-out; 
       }
       #h1:hover{
        transform: scale(1.1); 
        color: darkslateblue;
       }
       #topmenu{
        width:100%;
        display: inline-flex;
        justify-content: center;
        align-items: center;
       }
       #topmain{
        width:100%;
        display: inline-flex;
        justify-content: center;
        align-items: center;
       }
       #main{
        width: 100%;
        border: 1px solid cornflowerblue;
        height: 500px;
        padding-bottom:10px;
        display: inline-block;
        justify-content: center;
       }
   
       #date{
        display: inline-flex;
        justify-content: center;
        margin-top: 20px;
        border: none;
        margin-bottom: 10px;
        width: 100%;
       }
       #date1{
        padding: 10px 30px;
        border:none;
        border: 1px solid cornflowerblue;
        width: 100%;
        margin-left: 30px;
       }
       #p1{
        color: cornflowerblue;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        font-size: 18px;
        margin:10px 50px;
        width: 100%;
        margin-left: 10px;
        margin-right: 20px;
      
       }
       #title{
        width:87%;
        height: 50px;
        border: none;
        border: 2px solid cornflowerblue ;
        margin: 20px;
        margin-bottom: 0px ;
        text-align: right;
       }
       #title::placeholder{
        text-align: right;
       }
       #note{
        
        width:87%;
        height: 360px;
        border: none;
        border: 2px solid cornflowerblue ;
        margin:0px 20px;
        padding-bottom: 250px;
        text-align: right;
       
        
       }
       #note::placeholder{
        text-align: right;
        
       }
       #save{
        width: 150px;
        color:cornflowerblue ;
        border: 2px solid cornflowerblue ;
        font-size: 17px;
       }
       #save:hover{
        background-color: cornflowerblue;
        color:darkblue;
       }
       #h4{
        color: cornflowerblue;
        border: none;
        border-bottom: 1px solid cornflowerblue;
        border-radius: 10px;
        padding-bottom: 10px;
       }
       #photo{
        width: 100%;
        height: 500px;
        padding-top: 30px;
     }
     img{
        width: 100%;
        height: 500px;
     }
     #notes{
        color: white;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        font-size: 25px;
        background-color:cornflowerblue ;
      
        width: 100%;
        padding: 10px;
        align-content: center;
        justify-content: center;
        align-items: center;


     }
  

    #button{
        display: inline-flex
    }
    
    #button a{
        color:white;
    }
   
    </style>
    <div>
        <main>
            <form  method="POST" action="update.php?id=<?php echo $id; ?>">
            <div id="topmenu">
            <h1 id="notes">ویرایش</h1>
            </div>
            <div id="topmain">
            <div class="col-6" id="photo">
            
                   <img  src="<?=$path?>hand-holding-pen-concept-illustration.jpg/6665864.jpg" alt="">
                </div>
   
                <div  class="col-6">
                  
           <div id="main">
               <div >
                    <input id="title" type="text" placeholder="عنوان یادداشت" name="data[title]" value="<?php echo $row['title']; ?>">
               </div>
               <div >
                    <input id="note" type="text" placeholder="متن یادداشت" name="data[note]" value="<?php echo $row['note']; ?>">
               </div>
              
               <div id="button">
                <button id="save" class="btn btn-light-blue" type="submit" name="change">تغییر</button>
              
                <button id="save" class="btn btn-light-blue" type="submit" name="back" ><a  href="<?=$path?>noteindex.php">انصراف</a></button>
               </div>
               </div>
            </div>
            </div>
            </form>
        </main>
    </div>
</body>
</html>