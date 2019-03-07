<?php

echo "
<style>
table, th, td {
    border: 1px solid black;
}
</style>
";

$host= 'localhost';
$user = 'root';
$pass= '';
$db = 'recruiment_tc';



try{
    $conn = new
    PDO(
        "mysql:host={$host};dbname={$db};charset=utf8", $user, $pass,
        [
        PDO::ATTR_EMULATE_PREPARES => false,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]
    );

}
catch (PDOException $e){
    echo '<br><strong><ins>Błąd połączenia z bazą danych!!</ins></strong><br>';
    exit($e->getMessage());
}

