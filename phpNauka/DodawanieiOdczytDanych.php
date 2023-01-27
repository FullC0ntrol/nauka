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
			background-color: lightslategrey;
			font-family: 'Impact';
			text-align: center;
			font-size: 36px;
		}
		button{
			margin: 10px;
			background-color: #008CBA;
			border: none;
		}
	</style>
<div class="container">
	<h2>Formularz:</h2>
	<form action="DodawanieiOdczytDanych.php" method="post">
		<input type="text" name="imie" placeholder="Twoje imie..." required><br>
		<input type="text" name="nazwisko" placeholder="Twoje nazwisko..." required><br>
		<button type="submit">Dodaj do bazy danych</button>
	</form>
</div>
<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$db = 'myDB';
$conn = mysqli_connect($servername, $username, $password, $db);
$fistname = $_POST['imie'];
$lastname = $_POST['nazwisko'];
$sql = "INSERT INTO myguests(id, firstname, lastname) VALUES ('', '$fistname', '$lastname')";
$sql2 = "SELECT id, firstname, lastname FROM myguests";
$result = $conn->query($sql);
$result2 = $conn->query($sql2);

if($result2->num_rows>0){
	foreach($result2 as $row){
		echo "id:" . $row['id'] . ". name: " . $row['firstname'] . " , nazwisko: " . $row['lastname'] . "<br>";
	}
}
?>	
</body>
</html>