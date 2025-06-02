<?php
// whois-proxy.php

header('Content-Type: application/json');

$apiKey = 'crie uma api key em: https://www.api-ninjas.com/api/whois';

if (!isset($_GET['domain']) || empty($_GET['domain'])) {
    http_response_code(400);
    echo json_encode(['error' => 'Parâmetro domain é obrigatório']);
    exit;
}

$domain = urlencode($_GET['domain']);
$url = "https://api.api-ninjas.com/v1/whois?domain=$domain";

$opts = [
    "http" => [
        "method" => "GET",
        "header" => "X-Api-Key: $apiKey\r\n"
    ]
];

$context = stream_context_create($opts);
$result = @file_get_contents($url, false, $context);

if ($result === FALSE) {
    http_response_code(500);
    echo json_encode(['error' => 'Erro ao buscar dados WHOIS']);
    exit;
}

echo $result;
