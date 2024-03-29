# skriptfabrik/php-api-client

[![Packagist Version](https://img.shields.io/packagist/v/skriptfabrik/php-api-client)](https://packagist.org/packages/skriptfabrik/php-api-client)
[![Packagist Downloads](https://img.shields.io/packagist/dt/skriptfabrik/php-api-client)](https://packagist.org/packages/skriptfabrik/php-api-client)

    skriptfabrik API Client for PHP

## Author

skriptfabrik <[info@skriptfabrik.com](mailto:info@skriptfabrik.com)>

For more information, please visit [https://www.skriptfabrik.com/api](https://www.skriptfabrik.com/api).

## Installation

### Requirements

- [PHP](https://www.php.net/) (>= 8.0)
- [Guzzle](https://github.com/guzzle/guzzle) (>= 7.5.0)
- [Guzzle PSR-7](https://github.com/guzzle/psr7) (>= 2.4.3)

### Composer

[Install Composer](https://getcomposer.org/doc/00-intro.md)

```bash
composer require skriptfabrik/php-api-client:2.1.0
```

## Usage

Please follow the [installation instructions](#installation) and then add one of the following variants to your project:

### With default configuration

```php
<?php

declare(strict_types=1);

$api = new Skriptfabrik\ApiClient\Api\AdminApi();

try {
    $result = $api->getAdminEntryPoint();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception on fetching admin entry point: ', $e->getMessage(), PHP_EOL;
}
```

### With custom configuration

```php
<?php

declare(strict_types=1);

$config = Skriptfabrik\ApiClient\Configuration::getDefaultConfiguration();
$config->setDebug(true);

$api = new Skriptfabrik\ApiClient\Api\AdminApi(
    // If you want to use a custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $api->getAdminEntryPoint();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception on fetching admin entry point: ', $e->getMessage(), PHP_EOL;
}
```

### With authentication service that manages your access tokens

```php
<?php

declare(strict_types=1);

require_once(__DIR__ . '/vendor/autoload.php');

class AuthService
{
    protected Skriptfabrik\ApiClient\Api\AuthorizationApi $api;

    public function __construct(Skriptfabrik\ApiClient\Api\AuthorizationApi $api)
    {
        $this->api = $api;
    }

    /**
     * @throws Skriptfabrik\ApiClient\ApiException
     */
    public function createAccessToken(string $username, string $password): string
    {
        $request = new Skriptfabrik\ApiClient\Model\CreateAccessTokenRequest([
            'username' => $username,
            'password' => $password,
        ]);

        return $this->api->createAccessToken($request)->getToken();
    }
}
```

```php
<?php

declare(strict_types=1);

$auth = new AuthService(
    new Skriptfabrik\ApiClient\Api\AuthorizationApi()
);

try {
    $accessToken = $auth->createAccessToken('user@skriptfabrik.com', 's3Cur3_Pa$$w0rd');
} catch (Exception $e) {
    echo 'Authorization failed: ', $e->getMessage(), PHP_EOL;
    exit;
}

$config = Skriptfabrik\ApiClient\Configuration::getDefaultConfiguration();
$config->setAccessToken($accessToken);

$api = new Skriptfabrik\ApiClient\Api\UserApi(null, $config);

try {
    $result = $api->getUserCollection();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception on fetching admin entry point: ', $e->getMessage(), PHP_EOL;
}
```

## Credits

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `2.1.0+e417cb8`
- Package version: `2.1.0`
- Build date: `2023-03-03T13:15:45.425443Z[Etc/UTC]`
