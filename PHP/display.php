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
$n=$_POST['Name'];
$rno=$_POST['rollno'];
$s="select Rollno,Name from SCHOOL where Name='$n'";
$q=mysqli_query($con,$s);

if(mysqli_num_rows($q))
{
	echo "<table border=1><tr>
	<th>rollno</th><th>name</th></tr>";
	while($row=mysqli_fetch_assoc($q))
	{
	echo "<tr>";
	echo "<td>".$row["Rollno"]."</td>";
	echo "<td>".$row["Name"]."</td>";
	
	echo "</tr>";
	}
}
?>
