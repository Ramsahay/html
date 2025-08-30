<?php
declare(strict_types=1);

header('Content-Type: application/json');

$method = $_SERVER['REQUEST_METHOD'] ?? 'GET';
$requestUri = $_SERVER['REQUEST_URI'] ?? '/';
$path = parse_url($requestUri, PHP_URL_PATH) ?: '/';

if ($method === 'GET' && $path === '/api/health') {
    $uptimeSeconds = null;
    $procUptimePath = '/proc/uptime';
    if (is_readable($procUptimePath)) {
        $raw = @file_get_contents($procUptimePath);
        if ($raw !== false) {
            $parts = explode(' ', trim($raw));
            if (isset($parts[0])) {
                $uptimeSeconds = (int) floor((float) $parts[0]);
            }
        }
    }

    $response = [
        'status' => 'ok',
        'phpVersion' => PHP_VERSION,
    ];
    if ($uptimeSeconds !== null) {
        $response['uptimeSeconds'] = $uptimeSeconds;
    }

    echo json_encode($response);
    exit;
}

http_response_code(404);
echo json_encode([
    'error' => 'Not Found',
    'method' => $method,
    'path' => $path,
]);