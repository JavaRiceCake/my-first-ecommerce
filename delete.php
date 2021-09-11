<?php
require('connection.php');
if (isset($_POST['btnDelete'])) {
    $id = $_POST['deleteId'];


    $queryDelete = "DELETE FROM tditems WHERE id = '$id'";
    $sqlDelete = $connection->query($queryDelete);
}
