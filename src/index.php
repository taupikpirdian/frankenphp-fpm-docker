<?php
$uri = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

if ($method == 'GET' && $uri == '/api/check') {
    // Find two lines that together with the x-axis form a container, such that the container contains the most water.
    $arrayHigh = [1, 8, 6, 2, 5, 4, 8, 3, 7];

    $left = 0;
    $right = count($arrayHigh) - 1;
    $maxAmountWater = 0;

    while ($left < $right) {
        // Calculate width
        $width = $right - $left;
        // Calculate volume based on minimum height
        $volume = min($arrayHigh[$left], $arrayHigh[$right]) * $width;
        // Update max if volume is greater
        $maxAmountWater = max($maxAmountWater, $volume);
        // Move pointer based on height
        if ($arrayHigh[$left] < $arrayHigh[$right]) {
            $left++;
        } else {
            $right--;
        }
    }

    // Response in JSON format
    header('Content-Type: application/json');
    echo json_encode([
        'status' => 'success',
        'data' => $maxAmountWater
    ], JSON_PRETTY_PRINT);
} else {
    // Default 404 response
    http_response_code(404);
    header('Content-Type: application/json');
    echo json_encode([
        'error' => "We cannot find what you're looking for."
    ], JSON_PRETTY_PRINT);
}