# brandon14/ebay-developer-client-registration-v1

<span class=\"tablenote\"><b>Note:</b> The Client Registration API is not intended for use by developers who have previously registered for a Developer Account on the eBay platform.</span><br/>The Client Registration API provides Dynamic Client Registration for regulated Third Party Providers (TPPs) who are, or will be, engaged in financial transactions on behalf of individuals domiciled in the EU/UK. This is required by the EU's Second Payment Services Directive (PSD2) which requires all regulated Account Servicing Payment Service Providers (ASPSPs) to provide secure APIs to access account and payment services on behalf of account holders.<br/><br/>A successful registration response returns a <b>HTTP 201 Created</b> status code with a JSON payload [RFC7519] that includes registration information.


## Installation & Usage

### Requirements

PHP 7.3 and later.
Should also work with PHP 8.0 but has not been tested.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/brandon14/ebay-developer-client-registration-v1.git"
    }
  ],
  "require": {
    "brandon14/ebay-developer-client-registration-v1": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/brandon14/ebay-developer-client-registration-v1/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new TNT\Ebay\Developer\ClientRegistration\V1\Api\RegisterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$client_settings = new \TNT\Ebay\Developer\ClientRegistration\V1\Model\ClientSettings(); // \TNT\Ebay\Developer\ClientRegistration\V1\Model\ClientSettings | This container stores information about the third party provider's financial application that is being registered.

try {
    $result = $apiInstance->registerClient($client_settings);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegisterApi->registerClient: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://tppz.ebay.com/developer/registration/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*RegisterApi* | [**registerClient**](docs/Api/RegisterApi.md#registerclient) | **POST** /client/register | 

## Models

- [ClientDetails](docs/Model/ClientDetails.md)
- [ClientSettings](docs/Model/ClientSettings.md)
- [Error](docs/Model/Error.md)
- [ErrorParameter](docs/Model/ErrorParameter.md)

## Authorization

### api_auth

- **Type**: `OAuth`
- **Flow**: `application`
- **Authorization URL**: ``
- **Scopes**: 
    - **https://api.ebay.com/oauth/api_scope**: View public data from eBay

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `v1.0.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`