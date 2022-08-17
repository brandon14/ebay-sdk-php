# brandon14/ebay-developer-analytics-beta-v1

The <b>Analytics API</b> retrieves call-limit data and the quotas that are set for the RESTful APIs and their associated resources.  <br><br>Responses from calls made to <b>getRateLimits</b> and <b>getUerRateLimits</b> include a list of the applicable resources and the \"call limit\", or quota, that is set for each resource. In addition to quota information, the response also includes the number of remaining calls available before the limit is reached, the time remaining before the quota resets, and the length of the \"time window\" to which the quota applies.  <br><br>The <b>getRateLimits</b> and <b>getUserRateLimits</b> methods retrieve call-limit information for either an application or user, respectively, and each method must be called with an appropriate OAuth token. That is, <b>getRateLimites</b> requires an access token generated with a client credentials grant and <b>getUserRateLimites</b> requires requires an access token generated with an authorization code grant. For more information, see <a href=\"/api-docs/static/oauth-tokens.html\">OAuth tokens</a>.  <br><br>Users can analyze the response data to see whether or not a limit might be reached, and from that determine if any action needs to be taken (such as programmatically throttling their request rate). For more on call limits, see <a href=\"https://developer.ebay.com/support/app-check\" target=\"_blank\">Compatible Application Check</a>.


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
      "url": "https://github.com/brandon14/ebay-developer-analytics-beta-v1.git"
    }
  ],
  "require": {
    "brandon14/ebay-developer-analytics-beta-v1": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/brandon14/ebay-developer-analytics-beta-v1/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Developer\AnalyticsBeta\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Developer\AnalyticsBeta\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Developer\AnalyticsBeta\V1\Api\RateLimitApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$api_context = 'api_context_example'; // string | This optional query parameter filters the result to include only the specified API context. Acceptable values for the parameter are buy, sell, commerce, and developer.
$api_name = 'api_name_example'; // string | This optional query parameter filters the result to include only the APIs specified. Example values are browse for the Buy APIs context, inventory for the Sell APIs context, and taxonomy for the Commerce APIs context.

try {
    $result = $apiInstance->getRateLimits($api_context, $api_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RateLimitApi->getRateLimits: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.ebay.com/developer/analytics/v1_beta*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*RateLimitApi* | [**getRateLimits**](docs/Api/RateLimitApi.md#getratelimits) | **GET** /rate_limit/ | 
*UserRateLimitApi* | [**getUserRateLimits**](docs/Api/UserRateLimitApi.md#getuserratelimits) | **GET** /user_rate_limit/ | 

## Models

- [Error](docs/Model/Error.md)
- [ErrorParameter](docs/Model/ErrorParameter.md)
- [InlineResponse500](docs/Model/InlineResponse500.md)
- [Rate](docs/Model/Rate.md)
- [RateLimit](docs/Model/RateLimit.md)
- [RateLimitsResponse](docs/Model/RateLimitsResponse.md)
- [Resource](docs/Model/Resource.md)

## Authorization

### api_auth

- **Type**: `OAuth`
- **Flow**: `application`
- **Authorization URL**: ``
- **Scopes**: 
    - **https://api.ebay.com/oauth/api_scope**: View public data from eBay


### api_auth

- **Type**: `OAuth`
- **Flow**: `accessCode`
- **Authorization URL**: `https://auth.ebay.com/oauth2/authorize`
- **Scopes**: 
    - **https://api.ebay.com/oauth/api_scope/commerce.catalog.readonly**: This scope would allow signed in user to read catalog data.
    - **https://api.ebay.com/oauth/api_scope/sell.marketing.readonly**: View your eBay marketing activities, such as ad campaigns and listing promotions
    - **https://api.ebay.com/oauth/api_scope/sell.inventory**: View and manage your inventory and offers
    - **https://api.ebay.com/oauth/api_scope/sell.marketing**: View and manage your eBay marketing activities, such as ad campaigns and listing promotions
    - **https://api.ebay.com/oauth/api_scope/sell.inventory.readonly**: View your inventory and offers
    - **https://api.ebay.com/oauth/api_scope/sell.marketplace.insights.readonly**: This scope would allow signed in users read only access to marketplace insights.

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `v1_beta.0.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
