<?php
$con=mysqli_connect('localhost','root','cetmca','STUDENT');
if($con)
{
	echo "connection succesfull";
}
else
{
	echo "connection failed";
}
$rno=$_POST['rollno'];
$n=$_POST['Name'];
$m=$_POST['Mark'];
$sq="insert into SCHOOL values('$rno','$n','$m')";
$p=mysqli_query($con,$sq);
if($p)
{
 	echo "<script> alert('succesfully inserted 1 row');
	 </script>";
}
?>
