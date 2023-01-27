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

<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$db = 'world';
$conn = mysqli_connect($servername, $username, $password, $db);
$sql = "SELECT * FROM country";

$result = $conn -> query($sql);
$i = 1;
foreach($result as $row){
	echo "nr." . $i . "  " . $row['Code'] . " - " . $row['Name'] . "  -  " . $row['Continent'] . "<br>";
	$i++;
}
$conn -> close();
?>	
</body>
</html>