<?php
include("conn.php");
session_start();
$id=$_SESSION['id'];
if($id=="")
{
	header('location:login.php');
}


?>
<?php
$q="select name,email,dob,gender,contact,qualification from reg where name='$id'";
$qu=mysqli_query($conn,$q)or die("Error: " . mysqli_error($conn));//for error;


?>

<!--Include Header File-->

<?php include('header-home.php');?>


<form name="f1" method="post" enctype="multipart/form-data">

<div class="container">
  <H1>DashBoard</H1>
  <hr style="color:red;">
  

  <div class="row">
  <div class="col-sm-2" style="background-color:black;">
  <div class="media">
  <div class="media-left">
  <img class="img-thumbnail" src="upimg/<?php echo "$id.jpg"; ?>" style="width:170px;height:200px;margin: 5px 0;" border="white"/>
	<div class="form-group">

 <?php
if(isset($_POST['u2']))
   {
   move_uploaded_file($_FILES['att']['tmp_name'],"upimg/$id.jpg");
	$msg="Successfully Photo Uploaded !";   
   }
   else
   {
	  
   }

?>
    <input type="file" name="att" id="fileToUpload" style="margin: 5px 0;">
    <input type="submit" value="Upload Image" name="u2">

</div>
</div>
</div>
    <a href="#"><h4 style="color:white;">UP_Coming Exam</h4></a>
	  <a href="#"><h4 style="color:white;">Latest Job Notification</h4></a>
	  <a href="#"><h4 style="color:white;">Latest Result</h4></a>
	  <a href="#"><h4 style="color:white;">G.k</h4></a>
	  <a href="#"><h4 style="color:white;">Video</h4></a>
	  <a href="#"><h4 style="color:white;">Feedback</h4></a>
	  <a href="home.php?con=up"><button type="button" class="btn btn-success" value="UPDATE PROFILE">UPDATE PROFILE</button></a><br/><p></p>
    </div>

  <div class="col-sm-10">
  <?php
		
		if($arr=mysqli_fetch_array($qu))
    {				
         extract($arr);
       
						?>
  <table class="table">
    <thead>
      <tr>
        <th><h4><u>USER PROFILE</u></h4></th>
      </tr>
    </thead>
    <tbody>
	  <tr class="active">
        <td><b>Name :</b>&nbsp;<?php echo $arr['name'];?></td>
      </tr>
	  <tr class="active">
        <td><b>Date Of Birth :</b>&nbsp;<?php echo $arr['dob'];?></td>
      </tr>
	  <tr class="active">
        <td><b>Email Id:</b>&nbsp;<?php echo $arr['email'];?></td>
      </tr>
	  <tr class="active">
        <td><b>Contact No: </b>&nbsp;<?php echo $arr['contact'];?></td>
      </tr>
	  <tr class="active">
        <td><b>Qualification:</b>&nbsp;<?php echo $arr['qualification'];?></td>
      </tr>
    </tbody>
  </table>

    
    <?php 
      }
    ?>

    <?php 
    if(isset($_GET['con']))
    {
      switch ($_GET['con']) {
        case 'rs': include('result.php');
          break;
        case 'up': include('update.php');
          break;
        case 'ch':include('change-password.php');
          break;
      }
    }
    ?>
    </div><br/>

    
     <?php
        if(isset($msg))
        {
          echo "<span style='color:green;'>".$msg."</span>";
        }
      ?>
  </div>
  
  </div>
     
  
</form>
<?php include('footer.php');?>