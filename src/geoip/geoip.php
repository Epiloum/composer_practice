<?php

require_once '../../vendor/autoload.php';

$reader = new GeoIp2\Database\Reader('GeoLite2-City.mmdb');
$record = $reader->city('133.237.16.234');

print($record->country->isoCode . "\n");
print($record->country->name . "\n");

