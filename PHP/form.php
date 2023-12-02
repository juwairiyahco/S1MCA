
<html>
<head>
	<title>form submission</title></head>
<body><center>
	<marquee width=100% direction="right" scrollamount="20"><h1 style="color:red"> WELCOME TO FRESHER'S WORLD!! </h1></marquee>
	<table bgcolor="skyblue" border=solid width="600px" height="100">
	<form action="red.php" method="POST" >
	
		<tr rowspan="2">
			<th colspan="2"><h2><center> Registration Form </center></h2></th>
		</tr>
	<tr>
		<td>Name</td>
		<td><input type="textarea" name="name"></input></td>
	</tr>
	<tr>
		<td>Age</td>
		<td>
<select name="age">

<option> select age</option>
<?php
	for($i=18;$i<41;$i++)
	{
		echo "<option value=".$i.">".$i."<option>";
		
	}
?>

</select></td>
<tr>
<td>Password</td>
<td><input type="password" name=password></td>
</tr>
<tr>
<td>Re-enter the password</td>
<td><input type="password"></td>
</tr>
<tr >
<td rowspan="3" >Select your security question</td>
<td><input type="radio" name="sec" value="your bestfriend">your bestfriend?</td>
</tr>
<tr>

<td><input type="radio" name="sec"value="your school">your school?</td>
</tr>
<tr>

<td><input type="radio" name="sec"value="your pet name">your pet name?</td>
</tr>
</td>
</tr>
<tr><td>Answer of security question</td>
<td><input type="text" name=sec_a ></td></tr>
</tr>
<tr><td>E-mail</td>
<td><input type="text" name=email></td></tr>
<tr >
<td>languages known</td>
<td><input type="checkbox">English <input type="checkbox">Malayalam <input type="checkbox">Hindi</td>
</tr>
<tr>
<tr>
<td>phone number</td>
<td><table> 
<tr><th>home</th><th>office</th></tr>
<tr><td><input type="tel" name="phonea"></td><td><input type="tel" name="phoneb"></td></tr>
</table>
<tr>
<td>Upload CV</td>
<td><input type="file"></td>
</tr>
<tr><th><input type="reset"></th><th><input type="submit"></th></tr>
</center>

</table>
</html>

