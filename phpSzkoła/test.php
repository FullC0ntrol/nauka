<h1>Nauka PHP</p>
<?php
$text = "World!";
echo "<p style=font-size:20px>Hello $text</p>";
$bool = TRUE;
$float = 0.555;
$int = 15;
echo gettype($bool) . "<br>";
echo gettype($float) . "<br>";
echo gettype($int) . "<br>";
echo gettype($text);
?>
