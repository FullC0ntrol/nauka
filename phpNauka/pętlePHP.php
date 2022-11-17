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
			font-family: sans-serif;
			text-align: center;
			font-size: 36px;
		}

		th,
		td {
			border: 1px solid black
		}

		table {
			display: flex;
			text-align: center;
			justify-content: center;
		}
	</style>

	<h1>Pętle while/doWhile/for , break,continue,goto</h1>
	<form action="" method="get">
		<input type="text" name="num">
		<input type="submit" value="OK">
	</form>

	<?php
    if (isset($_GET['num']) and is_numeric($_GET['num'])) {
	    $a = $_GET['num'];
	    echo "<br>a =  $a";
	    echo '<table><tr><th>WHILE</th><th>DO WHILE</th><th>FOR</th></tr>';
	    echo '<tr>';
	    echo '<td>';

	    //WHILE
    	$i = $a;
	    while ($i > 0) {
		    echo "$i <br>";
		    if ($i == 5)
			    break;
		    $i--;
	    }

	    echo '</td>';
	    echo '<td>';

	    //DO WHILE
    	$i = $a;
	    do {
		    if ($i % 2 == 1) {
			    goto lab1;
		    }
		    echo "$i - parzysta <br>";
		    $i--;
		    continue;
		    lab1:
		    echo "$i - nieparzysta <br>";
		    $i--;
	    } while ($i > 0);

	    echo '</td>';
	    echo '<td>';
	    //FOR
    	for ($i = $a; $i > 0; $i--) {
		    if ($i % 2 == 1)
			    continue;
		    echo "$i <br>";
	    }
	    echo '</td>';
	    echo '</tr>';
	    echo '</table>';

    } else {
	    for ($i = 0; $i < 5; $i++) {
		    echo 'Nie podano liczby. nr - ' . $i + 1 . '<br>';
	    }

    }
    ?>

</body>

</html>