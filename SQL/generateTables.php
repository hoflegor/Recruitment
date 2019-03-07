<?php

require_once 'conn.php';
require_once 'debug.php';


//Sprawdzanie czy zapytanie wysłano metodą 'post'
if ($_SERVER['REQUEST_METHOD'] === 'POST') {


//Generowanie tabeli 'users'
    if (isset ($_POST['createUsers']) === true) {

        $sth = "CREATE TABLE users(
              id INT PRIMARY KEY AUTO_INCREMENT,
              name VARCHAR(255) NOT NULL UNIQUE ,
              added DATETIME DEFAULT NOW()
)";

        // wykonanie query bez prepare (SQL_injection) ponieważ użytkownik nie podaje żadnych danych,
//tabela jest generowana automatycznie po otrzymaniu 'post'
        try {
            $conn->query($sth);
            //zamykanie połączenia po wykonaniu zapytania
            $sth = null;
            $conn = null;

            echo "<br><strong>Utworzono Tabelę 'users'!!</strong>";
        } catch (PDOException $e) {
            echo "<br><strong>Błąd podczas próby utworzenia tabeli 'users'!!</strong><br>";
            echo $e->getMessage();
        }
    } //Generowanie tabeli 'fruits'. Analogicznie do tabelii 'users'
    elseif (isset ($_POST['createFruits']) === true) {

        $sth = "CREATE TABLE fruits(
              id INT PRIMARY KEY AUTO_INCREMENT,
              name VARCHAR(255) NOT NULL
)";

        try {
            $conn->query($sth);
            $sth = null;
            $conn = null;
            echo "<br><strong>Utworzono Tabelę 'fruits'!!</strong>";
        } catch (PDOException $e) {
            echo "<br><strong>Błąd podczas próby utworzenia tabeli 'fruits'!!</strong><br>";
            echo $e->getMessage();
        }
    } elseif (isset($_POST['createUF'])) {

        $sth = "CREATE TABLE users_fruits(
              uf_id INT AUTO_INCREMENT,
              users_id INT NOT NULL,
              fruits_id INT NOT NULL,
              PRIMARY KEY (uf_id),
              FOREIGN KEY (users_id) REFERENCES users(id),
              FOREIGN KEY (fruits_id) REFERENCES fruits(id)
              ON DELETE CASCADE
              )";

        try {
            $conn->query($sth);
            $sth = null;
            $conn = null;
            echo "<br><strong>Utworzono Tabelę 'users_fruits'!!</strong>";
        } catch (PDOException $e) {
            echo "<br><strong>Błąd podczas próby utworzenia tabeli 'users_fruits':</strong><br>";
            echo $e->getMessage();
        }
    }
} else {
    echo "<br><strong>Dane nie zostały przesłane odpowiednią metodą!!</strong><br>";
}

include 'backToIndx.html';
