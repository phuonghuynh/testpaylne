<?php

require(__DIR__ . '/tests/testpayline/Fixtures.php');

use \testpayline\Tests\Fixtures;
use \Payline\Settings;
use \Payline\Bootstrap;

$processing_url = getenv("PROCESSING_URL");
if ($processing_url == null) {
    $processing_url =  "https://api-test.payline.io";
}

Fixtures::$apiUrl = $processing_url;

Settings::configure([
    "root_url" => Fixtures::$apiUrl
]);

Bootstrap::init();
