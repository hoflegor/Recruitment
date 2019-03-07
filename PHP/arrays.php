<?php

spl_autoload_register(
    function ($class_name) {
        include "./src/classes/".$class_name.'.php';
    }
);

require_once './src/debug.php';

// Tworzenie tablicy użytkowników

$users = array('John', 'Mike', 'Tom', 'Anna', 'Mary', 'Jane');

// Tworzenie tablicy owoców i warzyw

$plants = [];
$plants[]=new Apple();
$plants[]=new Potato();
$plants[]=new Cabbage();
$plants[]=new Orange();

// Dopisanie losowaej wartości do użytkowników

for ($i = 0; $i < count($users); $i++) {

    $newArray[$users[$i]] = $plants[rand(0, count($plants) - 1)];

}

// Alfabetyczne sortowanie uzyskanej tablicy

ksort($newArray);

// Usuwanie użytkowników z przypisanym owocem jabłko

foreach ($newArray as $key => $val) {
    if ($val->getType() === "Apple") {
        unset($newArray[$key]);
    }
}

// Wyświetlanie listy pozostałych użytkowników w tablicy wraz z owocami jakie posiadają

echo "<ul>";

foreach ($newArray as $key => $val) {

    $item=$val->getType();

    echo "<br><li>Użytkownik <strong><ins>$key</ins></strong> posiada: <strong><ins>$item</ins></strong></li>";
}

echo "</ul>";




