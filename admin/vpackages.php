<?php
include ('../config.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/style.css">
<title>Packages</title>
</head>
<body>

    

<div id="navbar">
  <a class="active" href="index.php">Home</a>
 
    
</div>
<br>

 
 

<div class="products" id="products">
<center><h2><u>OUR TREATMENTS</u></h5></center>
<div class="row">
  <?php
  $s=mysqli_query($con,"SELECT `p_name`, `p_image`, `days`,`p_amount` FROM `tbl_packages`");
  while($r=mysqli_fetch_array($s))
  {
    echo"<div class='column'>";
    echo"<div class='card'>";
    echo"<img src='../images/".$r ['p_image']."' width=250 height=100>";
      					
    echo"<h3>".$r["p_name"]."</h3>";
    echo"<p>".$r['p_amount']."</p>";
    echo"<p>".$r['days']."</p>";
    echo"</div></div>";
  }
  ?>
  
</div>
</div>


 

 

<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>

</body>
</html>

