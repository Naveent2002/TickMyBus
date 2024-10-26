<?php
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    try {
        $sql = "INSERT INTO users (name, email, password) VALUES (:name, :email, :password)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['name' => $name, 'email' => $email, 'password' => $password]);

        echo "Registration successful!";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>
