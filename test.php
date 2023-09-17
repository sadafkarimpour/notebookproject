<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php 
$path='http://localhost/phpproject-code/notebook1project/';
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>


</head>
<style>
    .container{
        display: flex;
        background-color: green;
        position: relative;
        justify-content: center;
        align-items: center;
        transition: 0.5px;
    }
    p{
        position: relative;
        color:white
    }
    img{
        position: relative;
        width: 500px;
        height: 600px;
        display: block;
    }
    a{
      position: relative;
      display: inline-block;
      transition: 1s;
      color:white;

    }
  
    .container#blur .active {
        filter:blur(20px);
        pointer-events: none;
        user-select: none
    }
    #pop{
        position: fixed;
        top: 30%;
        right: 40%;
        background-color: red;
        width: 300px;
        height: 200px;
        display: inline-block;
        justify-content: center;
        align-items: center;
        color:black;
       visibility: hidden;
        

    }
    .container#pop .active {
        visibility: visible;
    
    }
   
</style>
<body>
    <div class="container">
    <div class="di" id="blur">
     
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur iusto inventore adipisci facere, animi, delectus possimus culpa pariatur voluptates voluptatibus, earum repellat eveniet eaque perferendis nihil sed veniam hic impedit.</p>
            <img src="<?=$path?>photos/woman-s-hand-presenting-futuristic-technology-digital-remix.jpg" alt="">
            <a href="#" onclick="toggle()">login</a>
     
    </div>
    <div  id="pop">
        
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur iusto inventore adipisci facere, animi, delectus possimus culpa pariatur voluptates voluptatibus, earum repellat eveniet eaque perferendis nihil sed veniam hic impedit.</p>
           
      
    </div>
    </div>
    <script type="text/javascript">
  function toggle(){
      var blur=document.getElementById('blur');
      blur.classList.toggle('active');
      var pop=document.getElementById('pop');
      pop.classList.toggle('active');
  }

</script>
</body>
</html>