<?php
require_once 'conn.php';
include "debug.php";
//var_dump($_POST);

$userId = $_POST['users'];
$fruitId = $_POST['fruits'];


$queryUF = "INSERT INTO users_fruits (users_id, fruits_id) VALUES ($userId, $fruitId)";

try{

$conn->exec($queryUF);
    $queryUF=null;
}
catch (PDOException $e){
    echo ($e->getMessage());
    exit;
}

/*---*/

$qUsrName = "SELECT name FROM users WHERE id=$userId";

try{
$userObj= $conn->query($qUsrName)->fetchAll();
$qUsrName=null;
}
catch (PDOException $e){
    echo ($e->getMessage());
    exit;
}

foreach ($userObj as $val){
    $usr=$val['name'];
}
/*----*/
$qFrtName = "SELECT name FROM fruits WHERE id=$fruitId";

try{
    $frtObj= $conn->query($qFrtName)->fetchAll();
$qFrtName = null;

}
catch (PDOException $e){
    echo ($e->getMessage());
    exit;
}

foreach ($frtObj as $val){
    $frt=$val['name'];
}

echo "<h2>Do użytkownika: '$usr' dodano owoc: '$frt' </h2>";

require_once 'backToIndx.html';

