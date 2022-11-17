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
	
	<h1>Pętla Switcha</h1>
	<form action="" method="get">
		<input type="text" name="num">
		<input type="submit" value="OK">
	</form>

	<?php
	if(isset($_GET['num']) and is_numeric($_GET['num'])) {
		$day = $_GET['num'];
		echo "<br>Dzień =  $day, ";
		switch($day){
			case 1:
				echo 'Poniedziałek';
				break;
			case 2:
				echo 'Wtorek';
				break;
			case 3:
				echo 'Środa';
				break;
			case 4:
				echo 'Czwartek';
				break;
			case 5:
				echo 'Piątek';
				break;
			default:
				echo 'Nie ma takiego dnia';
			}
		
	}
	else
		echo 'Podaj liczbę dnia od Poniedziałeku do Piąteku';
	?>

</body>
</html>