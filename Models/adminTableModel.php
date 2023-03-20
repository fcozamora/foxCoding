<?php
include("../Configs/config.php");
function usersTable(){
    global $conn;
    $sql="SELECT users.id, users.name, users.email, users.id_authorization, authorizations.description, authorizations.id
    FROM authorizations INNER JOIN  users ON users.id_authorization = authorizations.id";
    $result = $conn->query($sql);
    foreach ($result as $row) {
        echo "<tr>";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['name']."</td>";
        echo "<td>".$row['email']."</td>";
        echo "<td>".$row['description']."</td>";
        echo "</tr>";
    }
}

?>