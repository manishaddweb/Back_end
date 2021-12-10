
<!DOCTYPE html>
<html>
	<head>
		<title>Form</title>
	</head>
	<body>
		<form method="post">
		<table>
		<tr>
		<td>Enter Your Base</td>
		<td><input type="text" name="base" required/></td>
		</tr>
		<tr>
		<td>Enter Your Height</td>
		<td><input type="text" name="height" required/></td>
		</tr>
		<tr>
		<td colspan="2" align="center">
			<input type="submit" value="Answer" name="calculate"/>
		</tr>
		</form>
	</body>
</html>

<?php 
extract($_REQUEST);
if(isset($calculate))
{
echo "area with base $base and height $height= " . ($base * $height) / 2;
}
?>