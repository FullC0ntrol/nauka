<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP</title>
</head>
<body>
	<style>
		*{font-family: sans-serif;text-align: center;font-size: 36px;}
	</style>
	
	<h1>Instrukcje warunkowe</h1>
	<form action="" method="get">
		<input type="text" name="num">
		<input type="submit" value="OK">
	</form>

	<?php
	// $var = 'Hello';
	// define('CONSTANT', 'World');
	// echo "$var " . CONSTANT;
	if(isset($_GET['num']) and is_numeric($_GET['num'])) {
		$a = $_GET['num'];
		echo "<br>Liczba = $a";
		if(($a % 2) == 0) {
			echo "<br>Liczba jest parzysta";
		}
		else{
			echo "<br>Liczba jest nieparzysta";
		}
		echo $a % 3 == 0 ? "<br> Liczba jest podzielna przez 3." : 
		"<br>Liczba nie jest podzielna przez 3.";
	}
	else
		echo '<br>Nie podano liczby!';
	?>

</body>
</html>