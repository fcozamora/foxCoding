<?php
require_once "../Configs/config.php";

/*Function to extract the role description
where users.id_authorizations = authorizations.id */
function userIdAuth($id_authorization) {
    global $conn;
    $query="SELECT description FROM authorizations WHERE id = $id_authorization";
    $result = $conn->query($query)->fetch_row();
    return $result;
}

?>