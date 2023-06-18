<?php

$server =  "localhost";
$username = "root";
$password = "";
$database = "projeto_paper";

$db = new mysqli($server, $username, $password, $database);


if ($db->connect_error) {
    die("Error ao se conectar com a base de dados" . $db->connect_error);
}
