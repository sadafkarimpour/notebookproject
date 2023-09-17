<?php 
$path='http://localhost/phpproject-code/notebook1project/';
?>
<?php

session_start();
 $usid=$_SESSION["id"];

?>

<?php 

include 'database.php';

$connect=mysqli_connect($servername,$username,$password,$db_name);
if (!$connect) {
    die ("Connection Error!".mysqli_connect_error());
}

$tbl2="CREATE TABLE IF NOT EXISTS `addnote` (
    `id` int(255) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `datee` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP(),
    `title` varchar(255) NOT NULL,
    `note` varchar(255) NOT NULL,
    `user_id` int(255) REFERENCES signupnote(id)
   )";

if(mysqli_query($connect,$tbl2)){
echo "table created";
}
else{
echo "table not created";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notebook</title>
    <?php include 'head.php' ?>


</head>
<body>
<header>
    <?php  include 'menu2.php'; ?>
  
  </header>
    <style>
         body{
        background-color: cornflowerblue;
       }
        form{
            background-color: white;
            width: 80%;
            height:660px;
            border-radius: 10px;
            align-content: center;
            text-align: center;
            margin: auto;
            padding: 10px;
            margin-top:50px;
            justify-content: center;
            margin-left: 150px;
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
       #bars{
        color: cornflowerblue;
        font-size: 30px;
       
        transition: all .2s ease-in-out; 
       }
       #bars:hover{
        transform: scale(1.1); 
        color: darkslateblue;
       }
       #plus{
      
        color: cornflowerblue;
        font-size: 30px;
        transition: all .2s ease-in-out; 
       }
       #plus:hover{
        transform: scale(1.1); 
        color: darkslateblue;
       }
    
       #main{
        width: 100%;
        height: 520px;
    

       }
     table{
      
        width: 100%;
        height: 520px;
        margin-bottom: 18px;
        height: fit-content;
        justify-content: center;
        align-items: center;
        text-align: center;
     }
     th{
       height: 45px;
       background-color:cornflowerblue;
       border: 1px solid black ;
     }
     td{
        border: 1px solid cornflowerblue;
     }
     #pag{
        border: 3px solid cornflowerblue;
        padding:4px;
        margin:5px;
        margin-top: 10px;
        font-size: 17px;
        transition: all .2s ease-in-out; 
        color: darkslateblue;
       }
     #pag:hover{
        background-color:darkslateblue;
        color: white;
        text-decoration: none;
        transform: scale(1.1); 
     }
     #pag:active{
        background-color: cornflowerblue;
        color: white;
        text-decoration: none;
     }
     #photo{
        width: 100%;
        height: 500px;
       
     }
     img{
        width: 100%;
        height: 500px;
     }
     #top{
        display: inline-block;
        justify-content: center;
        align-items: center;
     }
     #topmain{
        width:100%;
        display: inline-flex;
        justify-content: center;
        align-items: center;
        
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

 
   #scroller{
    display: block;
    overflow-y: scroll;
    padding: 5px;
    height: 95px;
    
    
   }

    </style>
 
    <div>
        <main>
            <form action="" method="POST">
                <div class="col-12" id="top">
                    
                <h1 id="notes">
                    <?php
                    echo $usid."یادداشت های";
                    ?>
                </h1>
                </div>
                <div id="topmain">
            <div class="col-5" id="photo">
                   <img  src="<?=$path?>hand-holding-pen-concept-illustration.jpg/3255309.jpg" alt="">
                </div>
              
                <div  class="col-7">
                <div class="main" id="main">
                    <table>
                        <tr id="tr2">
                            <th class="col-1">شماره</th>
                            <th class="col-2">تاریخ</th>
                            <th class="col-2">عنوان</th>
                            <th class="col-4" >متن</th>
                            <th class="col-3">حذف / ویرایش</th>
                            </tr>
                        <?php 

                        include 'database.php';

                        $connect=mysqli_connect($servername,$username,$password,$db_name);
                        if (!$connect) {
                            die ("Connection Error!".mysqli_connect_error());
                        }
                      
                    
                        
                        $num_page=5;
                        if(isset($_GET['page'])){
                            $page=$_GET['page'];
                        }
                        else{
                            $page=1;
                        }
                        
                        $start_form=($page-1)*$num_page;
                        $sql= "SELECT * FROM `addnote` WHERE `user_id`=$usid   LIMIT " .  $start_form . ',' .  $num_page ;  
                        $sql_result=mysqli_query($connect,$sql);
                        if (mysqli_num_rows($sql_result)>0){
                            while ($row=mysqli_fetch_assoc($sql_result)) {
                            echo "<tr><td>". $row["id"]  . "</td><td>". $row["datee"] . "</td><td>". $row["title"]  . "</td><td id='scroller'>".$row["note"] . 
                            "</td><td>
                            <div class='btn-group'>
                           
                            <a class='btn btn-light-blue' href='./edit.php?id=".$row['id']."'>ویرایش</a>
                            <a class='btn btn-danger' href='./delete.php?id=".$row['id']."'>حذف</a>
                            
                            </div>
                            " 

                            ."</td></tr>";
                            }
                            echo "</table>";
                        }
                        else{
                            echo "nothing";
                        }
                        mysqli_close($connect);

                    
                        ?>
                        
                        
                    </table>
                    <?php 
                        
                        include 'database.php';
                    
                        $connect=mysqli_connect($servername,$username,$password,$db_name);
                        if (!$connect) {
                            die ("Connection Error!".mysqli_connect_error());
                        }
                      
                        $sql="SELECT * from `addnote` " ;
                        $sql_result=mysqli_query($connect,$sql);
                        $total=mysqli_num_rows($sql_result);
                        $total_pages=ceil($total/$num_page);

                        for($page=1;$page<=$total_pages;$page++){
                            echo '<a href ="noteindex.php?page=' . $page . '" id="pag">' . $page . ' </a>';
                        }
                    
                    ?>

                </div>
                </div>
                 </div>
            </form>
        </main>
    </div>
</body>
</html>