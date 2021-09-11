<?php
date_default_timezone_set('Asia/Manila');
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'dbproduct';

$connection = mysqli_connect($host, $user, $password, $database);
if (mysqli_connect_error()) {
    echo mysqli_connect_error();
}
$queryitemView = "SELECT * FROM tditems";
$sqlitemView = $connection->query($queryitemView);
