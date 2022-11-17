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

	<h1>Tablice</h1>
	<?php
		$tab = array('Ania', 'Bartek', 'Adam');
		$tab[3] = 'Maciej';
		$tab[2] = 'Wiesław';
		echo $tab[0] . '<br>';
		echo $tab[1] . '<br>';
		echo $tab[2] . '<br>';
		echo $tab[3] . '<br>';

		$tab2[0] = 5;
		echo $tab2[0]. '<br>';

		$tab3 = array('red' => 'czerwony', 'green' => 'zielony', 'blue' => 'niebieski');
		echo $tab3['red']. '<br>';
		echo $tab3['green']. '<br>';
		echo $tab3['blue']. '<br>';

		$tab4['language']['programming'] = 'php';
		echo $tab4['language']['programming']. '<br>';

    ?>
</body>
</html>