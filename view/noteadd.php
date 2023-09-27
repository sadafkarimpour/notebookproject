<?php 
    require_once "database.php";
    require_once "header.php";
    ?>

<!-- add form -->

<div class=' alert alert-success alert-dismissible ' id='success' style='display:none;margin-top:50px'>
    <div >
	  <a href='#' class='close' data-dismiss='alert' aria-label='close'>×</a>
	</div>
	<div class='alert alert-danger alert-dismissible' id='error' style='display:none;margin-top:50px'>
	  <a href='#' class='close' data-dismiss='alert' aria-label='close'>×</a>
	</div>
</div>

<form action="" method="POST" id="addform">
    <div  class=' w-50  bg-dark text-white rounded' style='margin-top:160px;height:300px;padding-top:35px;margin-left:400px'>
<div class="container-fluid " style="margin-left: 180px;">
<div class="row">
<input id="title" type="text" placeholder="عنوان یادداشت" name="data[title]" class="w-50 p-2 m-3 " >
</div>
</div>
<div class="container-fluid " style="margin-left: 180px;">
<div class="row">
<input id="note" type="text" placeholder="متن یادداشت" name="data[note]"  class="w-50 p-2 m-3 ">
</div>
</div>
<div class="container-fluid" style="margin-left: 180px;">
<div class="row">
    <button class="btn btn-primary col-lg-6  w-25 p-2 m-1" type="button" name="save" id="save" onclick="savebut();" >Save</button>
    <button class="btn btn-outline-primary col-lg-6 w-25 p-2 m-1 " type="button" name="return" id="return" onclick="returnbut" >Return</button>
</div>
</div>
</div>
</form>

<script>
function savebut(){
    $('#save').attr('disabled','disables');
    var title=$('#title').val();
    var note=$('#note').val();
    if(!title || !note ){
        alert('Please fill all the field !');
        return;
    }
    let url = "<?php echo PATH?>note.php?action=insert";
    $.ajax({
        url:url,
        type:'POST',
        data:{
            title:title,
            note:note,  
        },
       // dataType:'json',
        success: function(dataResult){
            var data = JSON.parse(dataResult);
            if(data.statusCode==200){
                $('#save').removeAttr('disabled');
                $('#addform').find('input:text').val('');
                $('#success').show();
                $('#success').html('note added successfuly!'); 
                location.href = "note.php?action=index";
            }
            else if(data.statusCode==201){
              $('#error').show();
              $('#error').html('sth went wronge')
            }
        }
    });
}
</script>


<?php require_once "footer.php"; ?>