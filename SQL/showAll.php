<?php
require_once 'conn.php';

$queryShowAll = "SELECT u.name AS userName, f.name AS fruitName FROM users u 
                JOIN users_fruits uf ON u.id = uf.users_id
                JOIN fruits f ON uf.fruits_id = f.id ORDER BY u.name";

try{
    $result=$conn->query($queryShowAll);
    $queryShowAll=null;

}
catch (PDOException $e){
    echo ($e->getMessage());
    exit;
}

echo "
<table>
    <tr>
        <th>Użytkownik</th>
        <th>Owoc</th>
    </tr>

";

while ($row = $result->fetch(PDO::FETCH_ASSOC))
{
    $frt = $row['fruitName'];
    $usr = $row['userName'];

    echo "<tr>
            <td>$usr</td>
            <td>$frt</td>
         </tr>";

}

echo '</table>';

include_once 'backToIndx.html';