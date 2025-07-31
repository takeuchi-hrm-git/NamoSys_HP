<?php
header("Content-Type: application/json");

$response = [
    "status" => "success",
    "message" => "Hello from API!"
];

echo json_encode($response);