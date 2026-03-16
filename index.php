<?php

header('Content-Type: application/json');

$host = "mysql";
$db = "demo_db";
$user = "demo_user";
$pass = "demo_pass";

try {

    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

    echo json_encode([
        "status" => "success",
        "message" => "Database connected successfully"
    ]);

} catch (PDOException $e) {

    echo json_encode([
        "status" => "error",
        "message" => $e->getMessage()
    ]);
}