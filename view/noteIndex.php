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


    <div class=" w-70 bg-dark text-white rounded" style='margin-top:50px;height:800px;padding-top:20px'>
    <div class='container w-50 ' style="margin-left:300px ; text-align: center;">
    <h1 class="w-100 col-lg-12 col-md-6 col-sm-1 p-1 m-3 bg-primary">
        <?php
        echo $usid."یادداشت های";
        ?>
    </h1>
    </div>
    <div class='container'>
    <div class='row'>
<div class="col-lg-5 col-md-3 col-sm-1 w-50 " >
       <img  src="<?php echo PATH."hand-holding-pen-concept-illustration.jpg/3255309.jpg"?>" alt="" class="w-100 " style="height: ;200px">
    </div>
  
    <div  class="col-lg-7 col-md-5 col-sm-3 w-50 h-50 text-white">
    <div class="container" >
    <div class="row w-70 h-70" >
        <table>
            <tr >
                <div class="col-lg-2 col-md-2 col-sm-1 p-2 m-2" >
                <th style="border:1px solid white ; color:white" >شماره</th>
                </div>
               
                <div class="col-lg-2 col-md-2 col-sm-1 p-2 m-2 text-white" style="border:1px solid white ;">
                <th  style="border:1px solid white ; color:white">تاریخ</th>

                </div>
                <div class="col-lg-2 col-md-2 col-sm-1 p-2 m-2 text-white" style="border:1px solid white ;">
                <th style="border:1px solid white ; color:white">عنوان</th>

                </div >

                <div class="col-lg-2 col-md-2 col-sm-1 p-2 m-2 text-white" style="border:1px solid white ;">
                <th style="border:1px solid white ; color:white" >متن</th>

                </div>
                <div class="col-lg-2 col-md-2 col-sm-1 p-2 m-2 text-white" style="border:1px solid white ;">
                <th style="border:1px solid white ; color:white">حذف / ویرایش</th>

                </div>
                </tr>
            <?php 

         
            
            $num_page=5;
            if(isset($_GET['page'])){
                $page=$_GET['page'];
            }
            else{
                $page=1;
            }

            // $notes = NoteModel::find($usid, $page, $num_page);

            // foreach($notes as $note){

            // }
            
            $start_form=($page-1)*$num_page;
            $sql= "SELECT * FROM `addnote` WHERE `user_id`=$usid   LIMIT " .  $start_form . ',' .  $num_page ;  
            $sql_result=mysqli_query($connect,$sql);
            if (mysqli_num_rows($sql_result)>0){
                while ($row=mysqli_fetch_assoc($sql_result)) {
                echo "<tr><div class='col-lg-2 col-md-2 col-sm-1 p-2 m-2'><td>". $row["id"]  . "</td></div><td><div class='col-lg-2 col-md-2 col-sm-1 p-2 m-2'>". $row["datee"] . "</div></td><td><div class='col-lg-2 col-md-2 col-sm-1 p-2 m-2'>". $row["title"]  . "</div></td><td id='scroller'><div class='col-lg-2 col-md-2 col-sm-1 p-2 m-2'>".$row["note"] . 
                "</div></td><td>
                <div class='btn-group'>
             
                <button class='btn btn-light-blue' id='editbut' onclick='editbut(<?php echo ?id=".$row['id']."?>)'>ویرایش</button>
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
    </div>
    </div>
     </div>
     <div  class='w-50 h-50 m-3' >
        <button class='w-25 col-lg-6 col-md-3 col-sm-1 p-1  btn btn-primary text-white'  type='button'  name='addnew' id='addnew' onclick='addnew();' >Add New</button>
    </div>
</form>

<!-- add form -->
<form action="" method="POST" id="addform">
    <div  class=' w-50  bg-dark text-white rounded' style='margin-top:100px;height:300px;padding-top:20px;'>
<div class="container ">
<div class="row">
<input id="title" type="text" placeholder="عنوان یادداشت" name="data[title]">
</div>
</div>
<div class="container ">
<div class="row">
<input id="note" type="text" placeholder="متن یادداشت" name="data[note]">
</div>
</div>
<div class="container ">
<div class="row">
    <button class="col-lg-6" type="button" name="save" id="save">Save</button>
    <button class="col-lg-6" type="button" name="return" id="return">Return</button>
</div>
</div>
</div>
</form>

<script>
    $(document).ready(function(){
       $("#addform").hide();
       $("#msgform").hide();
       $("#addnew").on('click',function(){
        ("#addform").show();
        $("#save").on('click',function(){
                $('#save').attr('disabled','disables');
                var title=$('#title').val();
                var note=$('#note').val();
             

                if(!title || !note){
                    alert('Please fill all the field !');
                    return;
                }

                let url = "<?php echo PATH ?>note.php?action=insert";

                $.ajax({
                    url:url,
                    type:'POST',
                    data:{
                        title:title,
                        note:note,
                    
                    },
                    success: function(dataResult){
                        var data = JSON.parse(dataResult);
                        if(data.statusCode==200){
                            $('#save').removeAttr('disabled');
                            $('#addform').find('input:text').val('');
                            $('#success').show();
                            $('#success').html('note addition successfuly done!'); 
                        }
                        else if(data.statusCode==201){
                        $('#error').show();
                        $('#error').html('sth wronge!')
                        }
                    }
                });
                });
        
       });

    });

</script>


<?php
require_once 'footer.php';?>