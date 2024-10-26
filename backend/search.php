<?php
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $from = $_POST['from'];
    $to = $_POST['to'];

    $sql = "SELECT * FROM routes WHERE route_from = :from AND route_to = :to";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['from' => $from, 'to' => $to]);
    $routes = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($routes);
}
?>
