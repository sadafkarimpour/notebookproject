<?php 
$path='http://localhost/phpproject-code/notebook1project/';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script>
        //appends an "active" class to .popup and .popup-content when the "Open" button is clicked
$(".open").on("click", function() {
  $(".popup-overlay, .popup-content").addClass("active");
});

//removes the "active" class to .popup and .popup-content when the "Close" button is clicked 
$(".close, .popup-overlay").on("click", function() {
  $(".popup-overlay, .popup-content").removeClass("active");
});
    </script>
</head>
<body>




<style>


html {
  font-family: "Helvetica Neue", sans-serif;
  width: 100%;
  color: #666666;
  text-align: center;
}

.popup-overlay {
  /*Hides pop-up when there is no "active" class*/
  visibility: hidden;
  position: absolute;
  background: #ffffff;
  border: 3px solid #666666;
  width: 50%;
  height: 50%;
  left: 25%;
}

.popup-overlay.active {
  /*displays pop-up when "active" class is present*/
  visibility: visible;
  text-align: center;
}

.popup-content {
  /*Hides pop-up content when there is no "active" class */
  visibility: hidden;
}

.popup-content.active {
  /*Shows pop-up content when "active" class is present */
  visibility: visible;
}

button {
  display: inline-block;
  vertical-align: middle;
  border-radius: 30px;
  margin: .20rem;
  font-size: 1rem;
  color: #666666;
  background: #ffffff;
  border: 1px solid #666666;
}

button:hover {
  border: 1px solid #666666;
  background: #666666;
  color: #ffffff;
}
</style>
    <!--Creates the popup body-->
    <div class="popup-overlay">
<!--Creates the popup content-->
 <div class="popup-content">
    <h2>Pop-Up</h2>
    <p> This is an example pop-up that you can make using jQuery.</p>
   <!--popup's close button-->
    <button class="close">Close</button>    
</div>
</div>

<h2>jQuery Pop-Up Example</h2>
<button class="open">Open</button>

</body>
</html>


