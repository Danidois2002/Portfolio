<?php
$host = 'localhost';
$user = 'root';
$pass = '#Danidois2002';
$dbname = 'portfolio_db';

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_errno) {
    die("Erreur de connexion : (" . $conn->connect_errno . ") " . $conn->connect_error);
}

$conn->set_charset("utf8");
?>