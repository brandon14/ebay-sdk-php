# brandon14/ebay-buy-offer-beta-v1

<span class=\"tablenote\"><b>Note:</b> This is a <a href=\"https://developer.ebay.com/api-docs/static/versioning.html#limited\" target=\"_blank\"> <img src=\"/cms/img/docs/partners-api.svg\" class=\"legend-icon partners-icon\" title=\"Limited Release\"  alt=\"Limited Release\" />(Limited Release)</a> API available only to select developers approved by business units.</span><br /><br />The Buy Offer API enables Partners to place proxy bids for a buyer and retrieve the auctions where the buyer is bidding.  By placing a proxy bid, the buyer is agreeing to purchase the item if they win the auction. </p> 


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
      "url": "https://github.com/brandon14/ebay-buy-offer-beta-v1.git"
    }
  ],
  "require": {
    "brandon14/ebay-buy-offer-beta-v1": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/brandon14/ebay-buy-offer-beta-v1/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Buy\OfferBeta\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Buy\OfferBeta\V1\Api\BiddingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_id = 'item_id_example'; // string | The eBay RESTful identifier of an item that you want the buyer's bidding information. This ID is returned by the Browse and Feed API methods. RESTful Item ID example: v1|2**********2|0 For more information about item ID for RESTful APIs, see the Legacy API compatibility section of the Buy APIs Overview. Restriction: The buyer must have placed a bid for this item.
$x_ebay_c_marketplace_id = 'x_ebay_c_marketplace_id_example'; // string | The ID of the eBay marketplace where the buyer is based. Note: This value is case sensitive. For example: &nbsp;&nbsp;X-EBAY-C-MARKETPLACE-ID = EBAY_US For a list of supported sites see, API Restrictions.

try {
    $result = $apiInstance->getBidding($item_id, $x_ebay_c_marketplace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BiddingApi->getBidding: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.ebay.com/buy/offer/v1_beta*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*BiddingApi* | [**getBidding**](docs/Api/BiddingApi.md#getbidding) | **GET** /bidding/{item_id} | 
*BiddingApi* | [**placeProxyBid**](docs/Api/BiddingApi.md#placeproxybid) | **POST** /bidding/{item_id}/place_proxy_bid | 

## Models

- [Amount](docs/Model/Amount.md)
- [Bidding](docs/Model/Bidding.md)
- [Error](docs/Model/Error.md)
- [ErrorParameter](docs/Model/ErrorParameter.md)
- [PlaceProxyBidRequest](docs/Model/PlaceProxyBidRequest.md)
- [PlaceProxyBidResponse](docs/Model/PlaceProxyBidResponse.md)
- [ProxyBid](docs/Model/ProxyBid.md)
- [UserConsent](docs/Model/UserConsent.md)

## Authorization

### api_auth

- **Type**: `OAuth`
- **Flow**: `accessCode`
- **Authorization URL**: `https://auth.ebay.com/oauth2/authorize`
- **Scopes**: 
    - **https://api.ebay.com/oauth/api_scope/buy.offer.auction**: View and manage bidding activities for auctions

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `v1_beta.0.1`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
