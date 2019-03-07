<?php
require_once 'conn.php';
require_once 'buildQuery.php';
include 'debug.php';

//print_r($_GET);

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    echo "<hr>";


    if (isset($_GET['table']) && !empty(trim($_GET['value']))) {
        $name = trim($_GET['value']);
        $table = $_GET['table'];

        //Prepared statements. Ochrona przed SQL injections, ponieważ dane pochodzą od użytkownika

//Tabele i kolumny nie mogą być zastąpione parametrami, dlatego używam funkcji buildQuery, tak by nazwa tabeli generowała się na podstawie danych z get

        $tableSql = buildQuery($table);
        try {
            $sth = $conn->prepare("INSERT INTO $tableSql (name) VALUES (?)");
            $sth->execute([$name]);

            $sth = null;
            $conn = null;

            switch ($table) {
                case (1):
                    echo "<br><strong>Dodano użytkownika: <ins>$name</ins>!!</strong>";
                    break;
                case (2):
                    echo "<br><strong>Dodano owoc: <ins>$name</ins>!!</strong>";
                    break;
                default:
                    echo '<br><strong>Brak bazy danych!!</strong>';


            }
        } catch (PDOException $e) {
            echo '<br><strong><ins>Błąd podczas zasilania tabeli:</ins></strong><br>';
            echo $e->getMessage();
        }
    } else {
        echo "<br><strong>Nie wprowadzono danych!!</strong><br>";
    }

} else {
    echo "<br><strong>Dane nie zostały przesłane odpowiednią metodą!!</strong><br>";
}

include 'backToIndx.html';
