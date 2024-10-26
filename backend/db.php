<?php
$host = 'localhost';
$db = 'redbus_clone';
$user = 'root'; // default username for localhost
$password = ''; // default password for localhost

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Could not connect to the database $db :" . $e->getMessage());
}
?>
