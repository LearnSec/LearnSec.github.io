<?php

$db_host = "108.18.193.234";
$db_name = "db";
$db_user = "admin";
$db_pass = "password";


$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
