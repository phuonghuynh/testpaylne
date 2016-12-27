# Payline Client

[![Circle CI](https://circleci.com/gh/Payline/payline-php.svg?style=svg)](https://circleci.com/gh/Payline/payline-php)

## Requirements

PHP 5.4 and later.

## Issues

Please use appropriately tagged github [issues](https://github.com/Payline/payline-php/issues) to request features or report bugs.

## Composer

You can install the bindings via [Composer](http://getcomposer.org/). Run the following command:

```bash
composer require Payline/payline-php
```

To use the bindings, use Composer's [autoload](https://getcomposer.org/doc/00-intro.md#autoloading):

```php
require_once('vendor/autoload.php');
```

## Getting Started

```php
require(__DIR__ . '/src/Payline/Settings.php');
Payline\Settings::configure(
  'https://api-staging.finix.io/',
  'USkmuYs3Sb2kcryiicgHbxGE',
  '54fde51b-6031-4118-acf0-72f4374e8972'
);

require(__DIR__ . '/src/Payline/Bootstrap.php');
\Payline\Bootstrap::init();
```

See the `tests/` for more details.

## Hacking

```bash
git clone https://github.com/Payline/payline-php.git
cd payline-php
composer install --prefer-source --no-interaction
```

### Running tests

`./vendor/bin/phpunit`

See `circle.yml` for more details.

### Debugging

- Install [MITM Proxy](https://mitmproxy.org/)
- `sudo mitmdump  -P https://api-staging.finix.io/ -a -vv -p 80`
- Run the tests, see the request / response


