<html>
<body>
<h1><marquee behavior="slide" direction="right" scroll amount="50">WELCOME!!</marquee></h1>
<h3>REGISTER HERE </H3>
<form action="" method="POST">
Enter your Name<br><input type="text" name="user"><br>
Enter your Age<br><input type="number" name="age"><br>
Enter your email id<br><input type="text" name="email"><br>
Enter your Password<br><input type="password" name="pass"><br>
Re-enter the Password<br><input type="password" name="pass"><br><br>
<button type="submit"> REGISTER </button>


</body>
</html>
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

$n=$_POST['user'];
$a=$_POST['age'];
$e=$_POST['email'];
$p=$_POST['pass'];




$sq="INSERT INTO `LOGIN`(`username`, `age`, `email`, `password`) VALUES ('$n',$a,'$e','$p')";
$p=mysqli_query($con,$sq);
if($p)
{
 	echo "<script> alert('succesfully inserted 1 row');
	 </script>";
}
else echo"<script> alert('error');
	 </script>";
?>
