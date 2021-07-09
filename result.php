 <body>
 <form method="post" name="m">
  
   <center><h1 style="color:green;"><u>RESULTS</u></h1></center>
<?php
$id=$_SESSION['id'];
if($id=="")
{
	header('location:login.php');
}
include("conn.php");
$q="SELECT ts,atampp,skip,correct,wrong,total FROM result where name='$id'";
$query=mysqli_query($conn,$q);
$row=mysqli_fetch_array($query);
echo "<table class='table'>
<tr><th>Test No.</th><th style='color:blue;'>Question Attamp</th><th style='color:brown;'>Skip Question</th><th style='color:green;'>Correct</th><th style='color:red;'>wrong</th><th>Total Marks</th></tr>";
while($row=mysqli_fetch_array($query))
{
echo "<tr>";
echo "<td>".$row['ts']."</td>";
echo "<td>".$row['atampp']."</td>";
echo "<td>".$row['skip']."</td>";
echo "<td>".$row['correct']."</td>";
echo "<td>".$row['wrong']."</td>";
echo "<td>".$row['total']."/25</td>";
echo "</tr>";
}
echo "</table>";


?>
   
   
</form>
</body>