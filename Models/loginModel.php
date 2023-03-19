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

?>