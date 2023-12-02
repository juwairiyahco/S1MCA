<?php
	$n=$_POST["name"];
	$a=$_POST["password"];
	$a=$_POST["age"];
	$s=$_POST["sec"];
	$b=$_POST["sec_a"];
	$e=$_POST["email"];
	$g=$_POST["phonea"];
	$ny=$_POST["phoneb"];
	?>
<html>
<body>

		<table border="3">
		<tr>
		<td>name</td>
		<td><?=$n?></td>
		</tr>
		<tr>
		<td>age</td>
		<td><?=$a?></td>
		</tr>
		<tr>
		<td>sec</td>
		<td><?=$s?></td>
		</tr>
		<tr>
		<td>best_friend</td>
		<td><?=$b?></td>
		</tr>
		<tr>
		<td>home phone</td>
		<td><?=$g?></td>
		</tr>
		<tr>
		<td>office phone</td>
		<td><?=$ny?></td>
		</tr>
		</table>
</body>
</html>
		

