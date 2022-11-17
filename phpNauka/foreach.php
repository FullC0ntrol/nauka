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
			background-color: gray;
			font-family: 'Gill Sans MT';
			text-align: center;
			font-size: 36px;
		}
	</style>

	<h1>Tablice - pętle</h1>
	<?php
		$tab = array('Ania', 'Bartek', 'Adam', 'Maciej', 'Ola');
		echo "Pętla for<br><br>";
		for ($i=0; $i < count($tab); $i++) { 
			echo $tab[$i] . '<br>';
		}
		echo "<br><br>Pętla foreach<br><br>";
		foreach($tab as $key => $item){
			echo "$key - $item <br>";
		}
    ?>
</body>
</html>