<?php

require_once 'header.php';

require_once 'database.php';

$usid=$_SESSION["id"];


?>
<form action="" method="POST">

<div class='alert alert-success alert-dismissible' id='success' style='display:none;margin-top:50px'>
	  <a href='#' class='close' data-dismiss='alert' aria-label='close'>×</a>
	</div>
	<div class='alert alert-danger alert-dismissible' id='error' style='display:none;margin-top:50px'>
	  <a href='#' class='close' data-dismiss='alert' aria-label='close'>×</a>
	</div>


    <div class="  bg-dark text-white rounded" style='width:1200px;margin-top:70px;height:650px;padding-top:20px;margin-left:175px'>
    <div class='container-fluid' style="  text-align: center">
    <h2 class="w-100 col-lg-12 col-md-6 col-sm-1 p-1  bg-primary">
        <?php
        echo $usid."یادداشت های";
        ?>
    </h2>
    </div>
    <div class='container-fluid' style=" text-align: center;">
    <div class='row'>
<div class="col-lg-3 col-md-3 col-sm-1 "  style="width:500px ; height: 600px;">
       <img  src="<?php echo PATH."hand-holding-pen-concept-illustration.jpg/3255309.jpg"?>" alt="" class="w-100 " style="height: 555px;">
    </div>
  
    <div  class="col-lg-8 col-md-5 col-sm-3 h-50 text-white" style="margin-top: -30px;width:700px ;">
    <div class="container" >
    <div class="row w-70 h-70" >
        <table>
            <tr >
                <div class="col-lg-2 col-md-2 col-sm-1 p-2 m-2" >
                <th style="border:1px solid white ; color:white" >شماره</th>
                </div>
               
                <div class="col-lg-2 col-md-2 col-sm-1 p-2 m-2 text-white" >
                <th  style="border:1px solid white ; color:white">تاریخ</th>

                </div>
                <div class="col-lg-2 col-md-2 col-sm-1 p-2 m-2 text-white">
                <th style="border:1px solid white ; color:white">عنوان</th>

                </div >

                <div class="col-lg-2 col-md-2 col-sm-1 p-2 m-2 text-white" >
                <th style="border:1px solid white ; color:white" >متن</th>

                </div>
                <div class="col-lg-2 col-md-2 col-sm-1 p-2 m-2 text-white" >
                <th style="border:1px solid white ; color:white;">حذف / ویرایش</th>

                </div>
                </tr>
            <?php 

         
global $servername;
global $username;
global $password;
global $db_name;

$connect = mysqli_connect($servername, $username, $password, $db_name);
if (!$connect) {
    die ("Connection Error!".mysqli_connect_error());
}

            $num_page=4;
            if(isset($_GET['page'])){
                $page=$_GET['page'];
            }
            else{
                $page=1;
            }

            //  $notes = NoteModel::find($usid, $page, $num_page);

            //  foreach($notes as $note){

          
            
            $start_form=($page-1)*$num_page;
            $sql= "SELECT * FROM `addnote` WHERE `user_id`=$usid   LIMIT " .  $start_form . ',' .  $num_page ;  
            $sql_result=mysqli_query($connect,$sql);
            if (mysqli_num_rows($sql_result)>0){
                while ($row=mysqli_fetch_assoc($sql_result)) {
                echo "<tr style='border:1px solid white ; color:white;text-align:center;'>
                <div class='col-lg-2 col-md-2 col-sm-1 p-1 m-2  ' ><td style='border:1px solid white ; color:white;text-align:center;'>". $row["id"]  . "</td></div>
                <td style='border:1px solid white ; color:white'><div class='col-lg-2 col-md-2 col-sm-1 p-1 m-2 text-justify text-center'>". $row["datee"] . "</div></td>
                <td style='border:1px solid white ; color:white'><div class='col-lg-2 col-md-2 col-sm-1 p-1 m-2'>". $row["title"]  . "</div></td>
                <td style='border:1px solid white ; color:white'><div class='col-lg-2 col-md-2 col-sm-1 p-1 m-2'>".$row["note"] . 
                "</div></td><td>
                <div class='btn-group'>
             
                <button class='btn btn-primary' id='editbut' onclick='editbut(<?php echo ".$row["id"]."?>)'>ویرایش</button>
                <a class='btn btn-danger' href='' onclick='deletebut(<?php echo ".$row["id"]."?>)'>حذف</a>
                
                </div>
                " 

                ."</td></tr>";
            }
                echo "</table>";
           
           
        
        }
        else{
            echo "nothing";
        }
 
        
            ?>
            
            
        </table>
        <?php 
            
            
            $sql="SELECT * from `addnote` WHERE   `user_id`=$usid  " ;
            $sql_result=mysqli_query($connect,$sql);
            $total=mysqli_num_rows($sql_result);
            $total_pages=ceil($total/$num_page);

            for($page=1;$page<=$total_pages;$page++){
                echo '<a href ="noteindex.php?page=' . $page . '" class="col-lg-1 mt-5 border border-primary rounded bg-primary text-white" style="margin-right:5px">' . $page . ' </a>';
            }
        
        ?>

          
</div>
    </div>
    </div>
    </div>
    </div>
     </div>
     <div  class='w-50 h-50 mt-2' >
        <button    class='w-25 col-lg-6 col-md-3 col-sm-1 p-1  btn btn-primary text-white'  style="margin-left:220px ;" type='button'  name='addnew' id='addnew' onclick="addnote();">Add New</button>
    </div>
</form>


<script>
function addnote(){
    $.ajax({
          url:"<?php echo PATH?>note.php?action=addnote",
          type:"GET",
          success: function(r) 
  {
    location.href = "note.php?action=addnote";
   
  },
  


    });
};

function editbut(id){
    $.ajax({
          url:"<?php echo PATH?>note.php?action=edit",
          type:"POST",
          data:{
            id:id,
          },
  success: function(dataResult){
            var data = JSON.parse(dataResult);
            if(data.statusCode==200){
                location.href = "noteedit.php?id="+id;
               
            }
            else if(data.statusCode==201){
              $('#error').show();
              $('#error').html('sth went wronge')
            }
        }
  


    });

};
function deletebut(id){
    $.ajax({
          url:"<?php echo PATH?>note.php?action=delete",
          type:"POST",
          data:{
            id:id,
          },
  success: function(dataResult){
            var data = JSON.parse(dataResult);
            if(data.statusCode==200){
                $('#success').show();
                $('#success').html('deleted!'); 
               
            }
            else if(data.statusCode==201){
              $('#error').show();
              $('#error').html('sth went wronge')
            }
        }
  


    });

};

</script>


<?php
require_once 'footer.php';?>