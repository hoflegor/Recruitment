<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TC - SQL</title>
</head>
<body>
<!---->
<h2><ins>Tworzenie Tabel</ins></h2>
<form action="generateTables.php" method="post">
    <label><strong>1.</strong> Kliknij by utworzyć tabelę 'users'...
        <input type="submit" value="Klik!!" name="createUsers">
    </label>
</form>
<hr>
<form action="generateTables.php" method="post">
    <label><strong>2.</strong> Kliknij by utworzyć tabelę 'fruits'...
        <input type="submit" value="Klik!!" name="createFruits">
    </label>
</form>
<!---->
<hr>
<h2><ins>Zasilanie danymi tabel 'users' oraz 'fruits'</ins></h2>
<form action="insert.php" method=get>
    <label>
        <strong>3a.</strong> Wpisz nazwę nowego użytkownika:
        <br>
        <br>
        <input type="text" name="value">
    </label>
    <br>
    <input hidden name="table" value="1">
    <br>
    <input type="submit" value="Dodaj użytkownika do tabeli 'user'">
</form>
<hr>
<!---->
<form action="insert.php" method=get>
    <label>
        <strong>3b.</strong>Wpisz nazwę owocu:
        <br>
        <br>
        <input type="text" name="value">
    </label>
    <br>
    <input hidden name="table" value="2">
    <br>
    <input type="submit" value="Dodaj owoc do tabeli 'fruits'">
</form>
<hr>
<!---->
<h2><ins>Tworzenie tabeli 'users_fruits'</ins></h2>
<form action="generateTables.php" method="post">
    <label><strong>4. </strong>Kliknij by utworzyć tabelę 'users_fruits'...
        <input type="submit" value="Klik!!" name="createUF">
    </label>
</form>
<hr>
<!---->
<h2><ins>Zasilanie danymi tabeli 'users_fruits'</ins></h2>
<p><strong>5. </strong>Zasilanie bazy</p>
<?php
require 'forms.php';
?>
<h2><ins>Tabela users_fruits</ins></h2>
<form action="showAll.php" method="post">
    <label><strong>6. </strong>Kliknij by zobaczyć tabelę users_fruits
   <input type="submit" value="Klik!!" name="showAll">
    </label>
</form>
<br>
</body>
</html>