<?php

require_once 'conn.php';

echo'
<form action="addFrtsToUsr.php" method="post">
    <label>
    <ul>
        <li>Wybierz użytkownika z listy:
        <select name="users">';

$usersQuery = $conn->query('SELECT id, name FROM users');
$users = $usersQuery->fetchAll();
$usersQuery=null;

foreach ($users as $user){
    $id= $user['id'];
    $name = $user['name'];
    echo '<option value="' . $id .'">' . "$name </option>";
}

echo '
</select>
</label>
<br>
<label>
    <li>Wybierz owoc dla użytkownika:
    <select name="fruits">';

$fruitsQuery = $conn->query('SELECT id, name FROM fruits');
$fruits = $fruitsQuery->fetchAll();

$fruitsQuery=null;
$conn=null;


foreach ($fruits as $fruit){
    $id= $fruit['id'];
    $name = $fruit['name'];
    echo '<option value="' . $id .'">' . "$name </option>";
}
echo '
</select>
</ul>
</label>
<input type="submit" value="Dodaj owoc do użytkownika">
</form>
<hr>
';
