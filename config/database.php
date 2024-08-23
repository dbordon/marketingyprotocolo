
<?php

$server   = "localhost";
$username = "";
$password = "";
$database = "";


$mysqli = new mysqli($server, $username, $password, $database);


if ($mysqli->connect_error) {
    die('error'.$mysqli->connect_error);
}
?>
