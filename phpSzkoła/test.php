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
<br>
$slowo1 = "World!";
$slowo2 = "Dolly";
$slowo3 = "Hello World! LALLA LALLALA LALLA";
echo str_replace($slowo1, $slowo2, $slowo3);

//takietam
<h1>Nauka PHP</p>
    //Tablice indeksowane
    $cars = array('Volvo', 'BMW', 'Toyota');
    $fruits = array('Apple'=>"35", 'Banana'=>"37", 'orange'=>"4");
    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    echo "Peter is " . $age['Peter'] . " years old. </br></br>";
    echo "We have " . $fruits["Apple"] . " Apple</br>";
    echo "We have " . $fruits["Banana"] . " Banana</br>";
    echo "We have " . $fruits["orange"] . " orange</br></br>";
    $carAge = array(
                array("Volvo", 22),
                array("Suzuki", 30)
    );
    echo $carAge[0][1];
?>
