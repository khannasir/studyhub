<?php
include("conn.php");
extract($_POST);
if(isset($_POST['submit']))
{
	if($t1=="" || $t2=="" || $t3=="" || $t4=="" || $t5=="" || $t6=="" || $t7=="" || $t8=="")
	{
		$msg="<span style='color:red;'>Field is empty !!!</span>";
	}
	else
	{
		if($t7!=$t8)
		{
			$msg="<span style='color:red;'>Password Do Not Match !!!</span>";
		}
		else
		{
	     $q="insert into reg(name,email,dob,contact,gender,qualification,password) values ('$t1','$t2','$t3','$t4','$t5','$t6','$t7')";
	     $query=mysqli_query($conn,$q);
	     if($query)
	     {

	     //send email after successfull registration.
	     	// $to_mail = $t2;
	     	// $subject = "Welcome STUDY HUB";
	     	// $msg = "Congratulation, You are successfully resgisterd on Study Hub";
	     	// $headers = "From: nasirkhan1934@gmail.com";

	     	// $sendmail = mail($to_mail,$subject,$msg,$headers);
	     	// if($sendmail)
	     	// {
	     	// 	echo "<script>alert('Mail Send Successfully !!')</script>";
	     	// }
	     	
	     header("location:login.php");
	     }
	     else
	     {
	     	echo "<script>alert('Data Could Not Insert');</script>";
	     	header("location:Register.php");
	     }
		}
	}
}

?>
<?php include('header.php');?>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- Top Background Image Wrapper -->
<div style="background-color:white;"> 
  <article id="pageintro" class="hoc clear"> 
      <!-- ################################################################################################ -->
    
	
	<h2 class="heading" style="color: #000000">Register</h2>
    <div class="txtwrap">
    <form id="registerform" method="post">
	  <table style="color:black; text-align:right; border: 1px solid; ">
	  <tr><td>USERNAME<span style='color:red;'>*</span></td><td><input type="text" name="t1"></td></tr>
	  <tr><td>E-mail ID<span style='color:red;'>*</span></td><td><input type="text" name="t2"></td></tr>
	  <tr><td>Date Of Birth<span style='color:red;'>*</span></td><td><input type="date" name="t3"></td></tr>
	  <tr><td>CONTACT NO.<span style='color:red;'>*</span></td><td><input type="text" name="t4"></td></tr>
	  <tr><td>GENDER<span style='color:red;'>*</span></td><td style="text-align:left;"><input type="radio" name="t5" value="Male">Male<input type="radio" name="t5" value="Female">Female</td></tr>
	  <tr><td>Qualification<span style='color:red;'>*</span></td><td><input type="text" name="t6"></td></tr>
	  <tr><td>PASSWORD<span style='color:red;'>*</span></td><td><input type="password" name="t7"></td></tr>
	  <tr><td>RE-PASSWORD<span style='color:red;'>*</span></td><td><input type="password" name="t8"></td></tr>
	  <tr><td></td><td><input type="submit" name="submit" value="Submit"/></td></tr>
	  </table>
	  <span><?php echo $msg; ?></span>
	  </form>
    </div>
  </article>
  <!-- ################################################################################################ -->
</div>

<?php include('footer.php');?>