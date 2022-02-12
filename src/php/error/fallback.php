<?php

header('Content-Type: application/json');

$response = [];

if ($error) {
    $response['error'] = $error;
}

echo json_encode($response);
