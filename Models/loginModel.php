<?php
require_once "../Configs/config.php";
$conn = mysqli_connect($host, $user, $password, $db_name);
if (!$conn) {
	echo "Connection failed!";
}

function userIdAuth($id_authorization) {
    global $conn;
    $query="SELECT description FROM authorizations WHERE id = $id_authorization";
    $result = $conn->query($query)->fetch_row();
    return $result[0];
}

function usersTable(){
    global $conn;
    $query="SELECT users.id, users.name, users.email, users.id_authorization, authorizations.description
    FROM authorizations INNER JOIN  users ON users.id_authorization = authorizations.id";
    $result = $conn->query($query);
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