<?php
require_once 'C:\xampp\htdocs\GRC\config\db.php';

$host = DB_HOST;
$user = DB_USER;
$pass = DB_PASS;
$dbname = DB_NAME;

$dbh;
$error; 

$dsn = 'mysql:host=' . $host . ';dbname=' . $dbname;
$options = array (
    PDO::ATTR_PERSISTENT => true,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION 
);

try {
    $dbh = new PDO ($dsn, $user, $pass, $options);
}	
catch ( PDOException $e ) {
    $error = $e->getMessage();
}
