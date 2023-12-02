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

$sq="insert into SCHOOL values(30,'raju',55)";
$p=mysqli_query($con,$sq);
if($p)
{
 	echo "<script> alert('succesfully inserted 1 row');
	 </script>";
}
?>
