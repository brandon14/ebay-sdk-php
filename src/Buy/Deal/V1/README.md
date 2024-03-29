# brandon14/ebay-buy-deal-v1

<span class=\"tablenote\"><b>Note:</b> This is a <a href=\"https://developer.ebay.com/api-docs/static/versioning.html#limited\" target=\"_blank\"> <img src=\"/cms/img/docs/partners-api.svg\" class=\"legend-icon partners-icon\" title=\"Limited Release\"  alt=\"Limited Release\" />(Limited Release)</a> API available only to select developers approved by business units.</span><br /><br />This API allows third-party developers to search for and retrieve details about eBay deals and events, as well as the items associated with those deals and events.


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
      "url": "https://github.com/brandon14/ebay-buy-deal-v1.git"
    }
  ],
  "require": {
    "brandon14/ebay-buy-deal-v1": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/brandon14/ebay-buy-deal-v1/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Buy\Deal\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Buy\Deal\V1\Api\DealItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_ebay_c_marketplace_id = 'x_ebay_c_marketplace_id_example'; // string | A header used to specify the eBay marketplace ID.
$category_ids = 'category_ids_example'; // string | The unique identifier of the eBay category for the search.
$commissionable = 'commissionable_example'; // string | A filter for commissionable deals. Restriction: This filter is currently only supported for the US marketplace.
$delivery_country = 'delivery_country_example'; // string | A filter for items that can be shipped to the specified country.
$limit = 'limit_example'; // string | The maximum number of items, from the current result set, returned on a single page.
$offset = 'offset_example'; // string | The number of items that will be skipped in the result set. This is used with the limit field to control the pagination of the output. For example, if the offset is set to 0 and the limit is set to 10, the method will retrieve items 1 through 10 from the list of items returned. If the offset is set to 10 and the limit is set to 10, the method will retrieve items 11 through 20 from the list of items returned. Default: 0

try {
    $result = $apiInstance->getDealItems($x_ebay_c_marketplace_id, $category_ids, $commissionable, $delivery_country, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DealItemApi->getDealItems: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.ebay.com/buy/deal/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*DealItemApi* | [**getDealItems**](docs/Api/DealItemApi.md#getdealitems) | **GET** /deal_item | 
*EventApi* | [**getEvent**](docs/Api/EventApi.md#getevent) | **GET** /event/{event_id} | 
*EventApi* | [**getEvents**](docs/Api/EventApi.md#getevents) | **GET** /event | 
*EventItemApi* | [**getEventItems**](docs/Api/EventItemApi.md#geteventitems) | **GET** /event_item | 

## Models

- [Amount](docs/Model/Amount.md)
- [Coupon](docs/Model/Coupon.md)
- [DealItem](docs/Model/DealItem.md)
- [DealItemSearchResponse](docs/Model/DealItemSearchResponse.md)
- [Error](docs/Model/Error.md)
- [ErrorParameter](docs/Model/ErrorParameter.md)
- [Event](docs/Model/Event.md)
- [EventItem](docs/Model/EventItem.md)
- [EventItemSearchResponse](docs/Model/EventItemSearchResponse.md)
- [EventSearchResponse](docs/Model/EventSearchResponse.md)
- [Image](docs/Model/Image.md)
- [MarketingPrice](docs/Model/MarketingPrice.md)
- [ShippingOption](docs/Model/ShippingOption.md)
- [Terms](docs/Model/Terms.md)

## Authorization

### api_auth

- **Type**: `OAuth`
- **Flow**: `application`
- **Authorization URL**: ``
- **Scopes**: 
    - **https://api.ebay.com/oauth/api_scope/buy.deal**: View eBay sale events and deals.

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `v1.3.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
