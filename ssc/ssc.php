<?php
session_start();
$id=$_SESSION['id'];
if($id=="")
{
	header('location:/login.php');
}


?>

<!--Include Header-Home File-->  
<?php include('../header-home.php')?>


<div class="container">
<h2><u>SSC UPCOMING EXAM</u></h2>
<div class="container">        
  <a href="ssconline.php?con=1"><img src="11.jpg" class="img-rounded" alt="ssc1" width="304" height="236"></a> 
  <a href="#"><img src="11.jpg" class="img-rounded" alt="ssc1" width="304" height="236"></a>
  <a href="#"><img src="11.jpg" class="img-rounded" alt="ssc1" width="304" height="236"></a>
  <a href="#"><img src="11.jpg" class="img-rounded" alt="ssc1" width="304" height="236"></a>
</div>

</div>