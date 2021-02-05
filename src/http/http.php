<?php

require_once '../../vendor/autoload.php';

$client = new GuzzleHttp\Client();
$response = $client->request('GET', 'https://bloomberg.com/asia');

echo $response->getStatusCode() . "\n";
echo $response->getBody();
