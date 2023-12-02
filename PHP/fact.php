<html>
<body>
<form method = "POST">
enter a number:<input type="number" name="num"><br>
<input type="submit" value="factorial">

<?php
if($_POST) {
	$numb=$_POST['num'];
$fact = 1;
for($i=1;$i<=$numb;$i++)
{
	$fact = $fact*$i;
}
echo $fact;
}
?>
</body>
</html>


