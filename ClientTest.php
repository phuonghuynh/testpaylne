<?php

require __DIR__ . '/vendor/autoload.php';

use \Payline\Settings;
use \Payline\Bootstrap;

Settings::configure([
    "root_url" => "https://api-test.payline.io",
    "username" => 'US4CoseCAaB5RjTYrnwfDrZa',
    "password" => '4ca5aef5-f077-4277-a785-00f2cab07c21'
]);

Bootstrap::init();