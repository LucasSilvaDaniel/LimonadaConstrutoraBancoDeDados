<?php
$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "limonadaconstrutora";

$mysqli = new mysqli($servername, $username, $password, $dbname);

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
echo "Conectado ao banco de dados";
?>
