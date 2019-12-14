<!DOCTYPE html>

<html>
<head>
<meta charset="UTF-8">
<title>Andyland</title></head>
<body>
<form>
	<input type="text" name="num1" placeholder="number 1">
	<input type="text" name="num2" placeholder="number 2">
	<select name="Operator">
		<option>None</option>
		<option>Add</option>
		<option>Subtract</option>
		<option>Multiply</option>
		<option>Divide</option>
	</select>
	<br>
	<button type="submit" name="submit" value="submit">calculate</button>
	
</form>
<p>the answer is:</p>
<br>


<?php

	if (isset($_GET['submit'])) {
	$result1 = $_GET['num1'];
	$result2 = $_GET['num2'];
	$operator = $_GET['operator'];
	switch ($operator) {
		case "None":
			echo "You need to select a method!";
		break;
		case "Add":
			echo $result1 + $result2;
		break;
		case "subtract":
			echo $result1 - $result2;
		break;
		case "multiply":
			echo $result1 * $result2;
		break;
		case "divide":
			echo $result1 / $result2;
		break;
	}
		}
?>

</<body>

</html>
