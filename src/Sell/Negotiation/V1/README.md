# trollandtoad/ebay-sell-negotiation-v1

The <b>Negotiations API</b> gives sellers the ability to proactively send discount offers to buyers who have shown an \"interest\" in their listings.  <br><br>By sending buyers discount offers on listings where they have shown an interest, sellers can increase the velocity of their sales.  <br><br>There are various ways for a buyer to show <i>interest </i> in a listing. For example, if a buyer adds the listing to their <b>Watch</b> list, or if they add the listing to their shopping cart and later abandon the cart, they are deemed to have shown an interest in the listing.  <br><br>In the offers that sellers send, they can discount their listings by either a percentage off the listing price, or they can set a new discounted price that is lower than the original listing price.  <br><br>For details about how seller offers work, see <a href=\"/api-docs/sell/static/marketing/offers-to-buyers.html\" title=\"Selling Integration Guide\">Sending offers to buyers</a>.


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
      "url": "https://github.com/trollandtoad/ebay-sell-negotiation-v1.git"
    }
  ],
  "require": {
    "trollandtoad/ebay-sell-negotiation-v1": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/trollandtoad/ebay-sell-negotiation-v1/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Negotiation\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Negotiation\V1\Api\OfferApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_ebay_c_marketplace_id = 'x_ebay_c_marketplace_id_example'; // string | The eBay marketplace on which you want to search for eligible listings. For a complete list of supported marketplaces, see Negotiation API requirements and restrictions.
$limit = 'limit_example'; // string | This query parameter specifies the maximum number of items to return from the result set on a page in the paginated response. Minimum: 1 &nbsp; &nbsp;Maximum: 200 Default: 10
$offset = 'offset_example'; // string | This query parameter specifies the number of results to skip in the result set before returning the first result in the paginated response. Combine offset with the limit query parameter to control the items returned in the response. For example, if you supply an offset of 0 and a limit of 10, the first page of the response contains the first 10 results from the complete list of items retrieved by the call. If offset is 10 and limit is 20, the first page of the response contains items 11-30 from the complete result set. Default: 0

try {
    $result = $apiInstance->findEligibleItems($x_ebay_c_marketplace_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferApi->findEligibleItems: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.ebay.com/sell/negotiation/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*OfferApi* | [**findEligibleItems**](docs/Api/OfferApi.md#findeligibleitems) | **GET** /find_eligible_items | 
*OfferApi* | [**sendOfferToInterestedBuyers**](docs/Api/OfferApi.md#sendoffertointerestedbuyers) | **POST** /send_offer_to_interested_buyers | 

## Models

- [Amount](docs/Model/Amount.md)
- [CreateOffersRequest](docs/Model/CreateOffersRequest.md)
- [EligibleItem](docs/Model/EligibleItem.md)
- [Error](docs/Model/Error.md)
- [ErrorParameter](docs/Model/ErrorParameter.md)
- [Offer](docs/Model/Offer.md)
- [OfferedItem](docs/Model/OfferedItem.md)
- [PagedEligibleItemCollection](docs/Model/PagedEligibleItemCollection.md)
- [SendOfferToInterestedBuyersCollectionResponse](docs/Model/SendOfferToInterestedBuyersCollectionResponse.md)
- [TimeDuration](docs/Model/TimeDuration.md)
- [User](docs/Model/User.md)

## Authorization

### api_auth

- **Type**: `OAuth`
- **Flow**: `accessCode`
- **Authorization URL**: `https://auth.ebay.com/oauth2/authorize`
- **Scopes**: 
    - **https://api.ebay.com/oauth/api_scope/sell.inventory**: View and manage your inventory and offers
    - **https://api.ebay.com/oauth/api_scope/sell.inventory.readonly**: View your inventory and offers

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `v1.1.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
