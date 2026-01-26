<?php
header('Content-Type: application/json');

$rawInput = file_get_contents('php://input');


$log = [
    'date'   => date('Y-m-d H:i:s'),
    'ip'     => $_SERVER['REMOTE_ADDR'] ?? 'unknown',
    'method' => $_SERVER['REQUEST_METHOD'],
    'input'  => $rawInput
];


$logLine = json_encode($log, JSON_UNESCAPED_UNICODE) . PHP_EOL;


file_put_contents('log.txt', $logLine, FILE_APPEND);
?>
<?php
header('Content-Type: application/json');

$logFile = 'log.txt';

if (!file_exists($logFile)) {
    echo json_encode([
        "status" => "error",
        "message" => "Fichier de log introuvable"
    ]);
    exit;
}


$logs = file_get_contents($logFile);

echo json_encode([
    "status" => "success",
    "logs" => $logs
], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
