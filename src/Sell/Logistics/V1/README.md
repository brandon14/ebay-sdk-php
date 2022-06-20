# trollandtoad/ebay-sell-logistics-v1

<span class=\"tablenote\"><b>Note:</b> This is a <a href=\"https://developer.ebay.com/api-docs/static/versioning.html#limited\" target=\"_blank\"> <img src=\"/cms/img/docs/partners-api.svg\" class=\"legend-icon partners-icon\" title=\"Limited Release\"  alt=\"Limited Release\" />(Limited Release)</a> API available only to select developers approved by business units.</span><br /><br />The <b>Logistics API</b> resources offer the following capabilities: <ul><li><b>shipping_quote</b> &ndash; Consolidates into a list a set of live shipping rates, or quotes, from which you can select a rate to ship a package.</li> <li><b>shipment</b> &ndash; Creates a \"shipment\" for the selected shipping rate.</li></ul> Call <b>createShippingQuote</b> to get a list of live shipping rates. The rates returned are all valid for a specific time window and all quoted prices are at eBay-negotiated rates. <br><br>Select one of the live rates and using its associated <b>rateId</b>, create a \"shipment\" for the package by calling <b>createFromShippingQuote</b>. Creating a shipment completes an agreement, and the cost of the base service and any added shipping options are summed into the returned <b>totalShippingCost</b> value. This action also generates a shipping label that you can use to ship the package.  The total cost of the shipment is incurred when the package is shipped using the supplied shipping label.  <p class=\"tablenote\"><b>Important!</b> Sellers must set up a payment method via their eBay account before they can use the methods in this API to create a shipment and the associated shipping label.</p>


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
      "url": "https://github.com/trollandtoad/ebay-sell-logistics-v1.git"
    }
  ],
  "require": {
    "trollandtoad/ebay-sell-logistics-v1": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/trollandtoad/ebay-sell-logistics-v1/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Logistics\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Logistics\V1\Api\ShipmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shipment_id = 'shipment_id_example'; // string | This path parameter specifies the unique eBay-assigned ID of the shipment to be canceled. The shipmentId value is generated and returned by a call to createFromShippingQuote.

try {
    $result = $apiInstance->cancelShipment($shipment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentApi->cancelShipment: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.ebay.com/sell/logistics/v1_beta*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ShipmentApi* | [**cancelShipment**](docs/Api/ShipmentApi.md#cancelshipment) | **POST** /shipment/{shipmentId}/cancel | 
*ShipmentApi* | [**createFromShippingQuote**](docs/Api/ShipmentApi.md#createfromshippingquote) | **POST** /shipment/create_from_shipping_quote | 
*ShipmentApi* | [**downloadLabelFile**](docs/Api/ShipmentApi.md#downloadlabelfile) | **GET** /shipment/{shipmentId}/download_label_file | 
*ShipmentApi* | [**getShipment**](docs/Api/ShipmentApi.md#getshipment) | **GET** /shipment/{shipmentId} | 
*ShippingQuoteApi* | [**createShippingQuote**](docs/Api/ShippingQuoteApi.md#createshippingquote) | **POST** /shipping_quote | 
*ShippingQuoteApi* | [**getShippingQuote**](docs/Api/ShippingQuoteApi.md#getshippingquote) | **GET** /shipping_quote/{shippingQuoteId} | 

## Models

- [AdditionalOption](docs/Model/AdditionalOption.md)
- [Amount](docs/Model/Amount.md)
- [Contact](docs/Model/Contact.md)
- [ContactAddress](docs/Model/ContactAddress.md)
- [CreateShipmentFromQuoteRequest](docs/Model/CreateShipmentFromQuoteRequest.md)
- [Dimensions](docs/Model/Dimensions.md)
- [Error](docs/Model/Error.md)
- [ErrorParameter](docs/Model/ErrorParameter.md)
- [Order](docs/Model/Order.md)
- [PackageSpecification](docs/Model/PackageSpecification.md)
- [PhoneNumber](docs/Model/PhoneNumber.md)
- [PickupSlot](docs/Model/PickupSlot.md)
- [PurchasedRate](docs/Model/PurchasedRate.md)
- [Rate](docs/Model/Rate.md)
- [Shipment](docs/Model/Shipment.md)
- [ShipmentCancellation](docs/Model/ShipmentCancellation.md)
- [ShippingQuote](docs/Model/ShippingQuote.md)
- [ShippingQuoteRequest](docs/Model/ShippingQuoteRequest.md)
- [Weight](docs/Model/Weight.md)

## Authorization

### api_auth

- **Type**: `OAuth`
- **Flow**: `accessCode`
- **Authorization URL**: `https://auth.ebay.com/oauth2/authorize`
- **Scopes**: 
    - **https://api.ebay.com/oauth/api_scope/sell.logistics**: This scope would allow signed in user to access Logistics information.

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
