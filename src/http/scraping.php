<?php

require_once '../../vendor/autoload.php';

$client = new GuzzleHttp\Client();
try {
    $response = $client->request(
        'GET',
        'https://www.bloomberg.com/quote/SPX:IND',
        [
            'headers' => [
                'user-agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.104 Safari/537.36',
                'accept' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
                'accept-encoding' => 'gzip, deflate, br',
                'accept-language' => 'ko-KR,ko;q=0.9,en-US;q=0.8,en;q=0.7',
                'cache-control' => 'no-cache'
            ]
        ]
    );
} catch (\GuzzleHttp\Exception\GuzzleException $e) {
    die('Exception');
}

if ($response->getStatusCode() == 200) {
    $html = strval($response->getBody());

    $crawler = new Symfony\Component\DomCrawler\Crawler($html);
    $crawler = $crawler->filter('.priceText__1853e8a5');

    foreach ($crawler as $domElement) {
        var_dump($domElement->nodeName);
        var_dump($domElement->nodeValue);
    }
}