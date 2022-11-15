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
$slowo1 = "World!";
$slowo2 = "Dolly";
$slowo3 = "Hello World! LALLA LALLALA LALLA";
echo str_replace($slowo1, $slowo2, $slowo3);
?>
