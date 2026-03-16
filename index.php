<?php

header('Content-Type: application/json');

$response = [
    "status" => "success",
    "message" => "Docker API working"
];

echo json_encode($response);



?>