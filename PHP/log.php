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

$username=$_POST['user'];
$password=$_POST['pass'];

$sql="SELECT * FROM `LOGIN` WHERE username='$username' and password='$password'";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result))
{
while($row=mysqli_fetch_array($result, MYSQLI_ASSOC)){
$count= mysqli_num_rows($result);


{
  echo "<h1> succesfull </h1>";
   }
else
{
 echo"<h1> Password incorrect !!</h1>";
}
}}
?>
