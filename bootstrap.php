<?php

//require(__DIR__ . '/vendor/payline-data/payline-php/Settings.php');
//require(__DIR__ . '/tests/testpayline/Fixtures.php');
//require(__DIR__ . '/vendor/payline-data/payline-php/Bootstrap.php');

use \testpayline\Tests\Fixtures;
use \Payline\Settings;
use \Payline\Bootstrap;

Settings::configure([
    "root_url" => Fixtures::$apiUrl
]);

Bootstrap::init();
