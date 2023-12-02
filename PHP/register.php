<!DOCTYPE html>
<html lang="en">
<head>
   
</head>
<body>
    <h1>STUDENT REGISTRATION!!</h1>

    <table border="1">
        <tr><th colspan="2">Registration Form</th></th></tr>
        <tr>
            <th>Name:</th>
            <td><input type="text" name="name"></td>
        </tr>

        <tr>
            <th>Age:</th>
             <td><input type="number" name="age"></td>
            
        </tr>
        <tr>
            <th>Password:</th>
            <td><input type="password" name="pass"></td>
        </tr>
        <tr>
            <th>KTU ID:</th>
            <td><input type="text" name="ktu"></td>
        </tr>
        <tr>
            <th>Roll Number:</th>
            <td><input type="number" name="roll"></td>

        </tr>
        <tr>
            <th>Phone Number:</th>
            <td><input type="text" name="phone"></td>
        </tr>
        
</table><br>
<input type="button" value="submit">
<input type="reset" value="reset">
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

$n=$_POST['name'];
$a=$_POST['age'];
$p=$_POST['pass'];
$k=$_POST['ktu'];
$r=$_POST['roll'];
$ph=$_POST['phone'];

$sq="INSERT INTO PORTAL( name ,age, password, ktu_id,roll_number,phone_number) VALUES ('$n',$a,'$p','$k','$r','$ph')";
$p=mysqli_query($con,$sq);
if($p)
{
 	echo "<script> alert('succesfully inserted 1 row');
	 </script>";
}
else
{ echo"<script> alert('error');
    </script>";
}
?>