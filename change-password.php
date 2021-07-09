<?php
include("conn.php");
$id=$_SESSION['id'];
extract($_POST);
if(isset($_POST['changePass']))
{
if($t1=="" || $t2=="" || $t3=="")
{
	 $mg="<span style='color:red;'>Field is empty !</span>"; 	 
}
if($t2!=$t3)
{
	 $mg="<span style='color:red;'>Password do not match !</span>"; 	 
}
else
{
    $q="select password from reg where name='$id'";
	$query=mysqli_query($conn,$q);
	$arr=mysqli_fetch_array($query) or die("Error: " . mysqli_error($conn));
	if($t1==$arr['password'])
	{
        $q="update reg set password='$t2' where name='$id'";
	    mysqli_query($conn,$q);
		$mg="<span style='color:green;'>Password successfully changed !!</span>";
		header('location:home.php');
	}
	else
	{
		$mg="<span style='color:red;'> Old password is incorrect!</span>";
	}
}

}
?> 

 <form method="post" name="m">
  	<h3><u>Change Password</u></h3>
    <label>Enter your old password:</label>
    <input type="password" class="form-control" name="t1">
    <label>Enter your new password:</label>
    <input type="password" class="form-control" name="t2" >
    <label>Re-Enter your new password:</label>
    <input type="password" class="form-control" name="t3">
    <input type="submit" class="btn btn-success" value="Change Password" name="changePass"><br/>
  <?php 
  if(isset($mg))
  {
  echo $mg;
 	}
  ?>
</form>
