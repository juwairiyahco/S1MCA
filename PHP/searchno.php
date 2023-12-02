<html>
<body>
<form action="" method="POST">

ROLLNO:<input type="text" name="Rollno"><br>

<input type="submit" name="submit" value="search">
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

$rno=$_POST['rollno'];
$s="select * from SCHOOL where Name='$n'";
$q=mysqli_query($con,$s);

if(mysqli_num_rows($q))
{
	
	while($row=mysqli_fetch_assoc($q))
	{
	echo "<form>";
	echo "<
	echo "<td>".$row["Rollno"]."</td>";
	echo "<td>".$row["Name"]."</td>";
	
	echo "</tr>";
	}
}
?>
