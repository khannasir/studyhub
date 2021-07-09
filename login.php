<?php
include("conn.php");
extract($_POST);
if(isset($_POST['submit']))
{
	$q="select name,password from reg where name='$t1'";
	$query=mysqli_query($conn, $q);
	$arr=mysqli_fetch_array($query);// only pass query value not connetions
	if($t1==$arr['name'] && $t2==$arr['password'])
	{
		session_start();
		$_SESSION['id']=$t1;
		header("location:home.php");
	}
	else
	{
		$msg="<span style='color:red;'>USERNAME OR PASSWORD IS INCORRECT</span>";
	}
	if($t1=="" || $t2=="")
	{
		$msg="<span style='color:red;'>Enter your Username and Password !</span>";
	}
	if($t1=="")
	{
		$msg="<span style='color:red;'>Enter your Username !</span>";
	}
    if($t2=="")
	{
		$msg="<span style='color:red;'>Enter your Password !</span>";
	}
	
	
}



?>

<?php include('header.php');?>

   <!-- ################################################################################################ -->
  <!-- Top Background Image Wrapper -->
  <div style="background-color:white;">
  <article id="pageintro" class="hoc clear"> 
      <!-- ################################################################################################ -->
    
	
	<h2 class="heading" style="color:#000000">Login</h2>
    <div class="txtwrap">
      <form name="login" method="post">
	  <table style="color:black; text-align:right; border: 1px solid; ">
	  <tr><td>USERNAME</td><td><input type="text" name="t1" ></td></tr>
	  <tr><td>PASSWORD</td><td><input type="password" name="t2"></td></tr>
	  <tr><td style="text-align:right;"></td><td><input type="submit" name="submit" value="Login"/></td></tr>
	  </table>
	  <span><?php echo $msg; ?></span>
	  </form>
    </div>
  </article>
  <!-- ################################################################################################ -->
</div>

<?php include('footer.php');?>