<?php
error_reporting();
include("conn.php");
$id=$_SESSION['id'];

if(isset($_POST['edit']))
{
  $p1=$_POST['t1'];
  $p2=$_POST['t2'];
  $p3=$_POST['t3'];

 $q="update reg set name='$p1', dob='$p2', qualification='$p3', where name='$id'";
 $qu=mysqli_query($conn,$q);
 $mg="<span style='color:green;'>Profile Update !!!</span>"; 
 header('location:home.php');
}
else
{
 
}

?> 
 
 
 <body>
 <form method="post" name="m">
  
    <label>NAME:</label>
    <input type="text" class="form-control" name="t1">
    <label>Date Of Birth:</label>
    <input type="date" class="form-control" name="t2">
    <label>Qulification:</label>
    <input type="text" class="form-control" name="t3">
    <input type="submit" class="btn btn-success" value="Update" name="edit"><br/>
  <?php 
  if(isset($mg))
  {
  echo $mg;
  }
  ?>
</form>
</body>