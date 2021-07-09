<?php
include("result1.php");
?>
<? echo $test;?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>SCORE CARD</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
   <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="../home.php">StudyHub</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#"></a></li>
       
          
      <ul class="nav navbar-nav navbar-right">
       
        <li><a href="../logout.php">Logout&nbsp;<span class="glyphicon glyphicon-log-in"></span></a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="container">
<br/><br/><br/>
  <div class="row">
  <div class="col-sm-12" style="background-color:green;">
  <h1 class="text-center">SCORE CARD</h1>
     </div> 
  </div>
  <div class="row">
  <div class="col-sm-4">
     </div> 
	 <div class="col-sm-4">
	 <br/><br/><br/>
	 <table class="table">
    <thead>
      <tr>
        <th rowspan="2"><h2 style="color:grey;"><b><u>TOTAL SCORE </u>:</b><?php echo $correct;?> / 25</h2></th>
        
      </tr>
    </thead>
    <tbody>   
      <tr class="alert alert-info">
        <td>Attamp Questions :</td>
        <td>
		<?php
		$to=25-$skip;
		echo $to;
		?>
		</td>
      </tr>	
	  <tr class="alert alert-warning">
        <td>Skip Questions:</td>
        <td>
		<?php
		echo $skip;
		?>
		</td>
      </tr>	
      <tr class="success">
        <td>Correct Answer :</td>
        <td><?php echo $correct;?></td>
      </tr>
	  <tr class="danger">
        <td>wrong Answer :</td>
        <td><?php echo $wrong; ?></td>
      </tr>
    </tbody>
  </table>
  <span><a href="../home.php"><u>Click here try again...</u></a></span>
     </div> 
	 <div class="col-sm-4">
     </div> 
  </div><br/><br/><br/>
  <div class="col-sm-12" style="background-color:green;">
  <h1 class="text-center"></h1>
     </div> 
  </div>
</div> 
</div>

</body>
</html>