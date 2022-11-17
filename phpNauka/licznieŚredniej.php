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
		* {
			color: aliceblue;
			background-color: darkslategrey;
			font-family: 'Gill Sans MT';
			text-align: center;
			font-size: 36px;
		}
	</style>

	<h1>Średnia ocen</h1>
	<form action="" method="get">
		<input type="text" name="num">
		<input type="submit" value="OK">
	</form>
	<?php
    if (isset($_GET['num']) and !empty($_GET['num'])) {
		$a = $_GET['num'];
		$tab = explode(",", $a);
		$sum = 0;
		$i = 0;


		foreach($tab as $item){
			if(is_numeric($item) and $item >= 1 and $item <= 6){
				$sum += $item;
				$i++;
			}
		}
		if($i > 0){
			echo "Średnia ocen wyniosi ". round(($sum / $i), 2);
		}
		else{
			echo "nie podano ocen";
		}
    } else{
		echo '<br>Nie podano ocen!';
    }
    ?>
</body>

</html>