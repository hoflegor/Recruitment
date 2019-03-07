<?php

spl_autoload_register(
    function ($class_name) {
        include "./src/classes/".$class_name.'.php';
    }
);

require_once './src/debug.php';

echo "<h2>START of debug() :<hr></h2>";



$objects = [$myCabbage = new Cabbage(), $myPotato = new Potato(), $myApple = new Apple()];

echo "<h4><u>debug Obj :</u></h4>";

debug($objects);

echo '<h4><u>debug getType() :</u></h4>';

foreach ($objects as $object) {
    debug($object->getType());
}

echo "<h4><u>debug ::make :</u></h4>";


debug(Orange::make());

echo '<h4><u>debug ::checkObject($object) :</u></h4>';

foreach ($objects as $object) {

    debug(AbstractPlant::checkObject($object));

}

echo "<h2><hr>END of debug()</h2>";
