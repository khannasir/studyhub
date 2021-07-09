<?php
session_start();
$id=$_SESSION['id'];
if($id=="")
{
	header('location:login.php');
}

?>
<?php

	
$targetDate = time() + (25*60); //Change the 30 to however many minutes you want to countdown
$actualDate = time();
$secondsDiff = $targetDate - $actualDate;
$remainingDay	 = floor($secondsDiff/60/60/24);
$remainingHour	= floor(($secondsDiff-($remainingDay*60*60*24))/60/60);
$remainingMinutes = floor(($secondsDiff-($remainingDay*60*60*24)-($remainingHour*60*60))/60);
$remainingSeconds = floor(($secondsDiff-($remainingDay*60*60*24)-($remainingHour*60*60))-($remainingMinutes*60));

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>SSC ONLINE EXAM</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <script type="text/javascript">
  var minutes = <?php echo $remainingMinutes; ?>  
  var seconds = <?php echo $remainingSeconds; ?> 

function setCountDown ()
{
  seconds--;
  if (seconds < 0){
	  minutes--;
	  seconds = 59
  }
   // if (minutes < 0){
	 //  hours--;
	 //  minutes = 59
  // }
  // if (hours < 0){
	 //  days--;
	 //  hours = 2
  // }

  document.getElementById("remain").innerHTML = minutes+":"+seconds+"";
  SD=window.setTimeout( "setCountDown()", 1000 );
  if (minutes == '00' && seconds == '00') 
    { 
      seconds = "00"; 
      window.clearTimeout(SD);
   		window.alert("Time is up. Click OK to go to Home Page."); // change timeout message as required
		  window.location = "../home.php" // Add your redirect url
 	} 

}

</script>
  
  
</head>
<body onload="setCountDown();">


   <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">StudyHub</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="../home.php">Home</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Take Online Exam <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">SSC</a></li>
            <li><a href="#">BANK PO</a></li>
            <li><a href="#">BANK CELERK</a></li>
          </ul>
        </li>
        <li><a href="#">Result</a></li>
        <li><a href="#">Change Password</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span><?php echo $id; ?> </a></li>
        <li><a href="../logout.php"><span class="glyphicon glyphicon-log-in"></span>Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="container-fluid">
  <div class="row" class="center-block" style="background-color:white;">
 
	 <div class="col-sm-12"class="center-block" >
  <h1 class="text-center" ><u><b>SSC CGL ONLINE PRACTICE EXAM 2018</b></u></h1>
     </div>
	 
</div>
  
 
  
  <div class="row" >
  
  
  
 <div id="remain" style="color:red;font-size:50px;"><?php echo "$remainingMinutes minutes, $remainingSeconds seconds";?></h1></div>

  <div class="col-sm-4">
  
  <span><h1 class="text-center"><u><b>SELECT QUESTIONS</b></u></h1></span><br/>
  <ul class="pagination">
    <li><a href="#1">01</a></li>
    <li><a href="#2">02</a></li>
    <li><a href="#3">03</a></li>
    <li><a href="#4">04</a></li>
    <li><a href="#5">05</a></li>
	<li><a href="#6">06</a></li>
    <li><a href="#7">07</a></li>
    <li><a href="#8">08</a></li>
    <li><a href="#9">09</a></li>
    <li><a href="#10">10</a></li>
    <li><a href="#11">11</a></li>
    <li><a href="#12">12</a></li>
    <li><a href="#13">13</a></li>
    <li><a href="#14">14</a></li>
    <li><a href="#15">15</a></li>
	<li><a href="#16">16</a></li>
    <li><a href="#17">17</a></li>
    <li><a href="#18">18</a></li>
    <li><a href="#19">19</a></li>
    <li><a href="#20">20</a></li>
    <li><a href="#21">21</a></li>
    <li><a href="#22">22</a></li>
    <li><a href="#23">23</a></li>
    <li><a href="#24">24</a></li>
    <li><a href="#25">25</a></li>
  </ul>
  <!-- </ul>
  </ul>
  </ul> -->
  
    </div>

	 <div class="col-sm-8">
	 <div class="container-fluid">
  <h1><b>QUESTIONS</b></h1>
  <hr color="black" size="20px"/>

  <form method="post" action="result.php">
      <?php
      
    	 switch($_GET['con'])
    	 {
    		case '1' : include("1.php");
    		          break;
        case '4' : include("4.php");
                  break;   
        case '5' : include("5.php");
                  break;

    	 }
    	 ?>
    	<input type="hidden" name="te" value="ST-01"> 
    	
      
      <center><button type="submit" class="btn btn-success" name="n">SUBMIT TEST</button></center>
	</form> 
  
  </div>
</div> 
</div>
 </div>



 <script>
   $("#btn").click(function () {
   event.preventDefault();
});
 </script>

 <?php include('../footer.php');?>
</body>
</html>