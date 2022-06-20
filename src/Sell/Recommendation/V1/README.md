# trollandtoad/ebay-sell-recommendation-v1

The <b>Recommendation API</b> returns information that sellers can use to optimize the configuration of their listings on eBay. <br><br>Currently, the API contains a single method, <b>findListingRecommendations</b>. This method provides information that sellers can use to configure Promoted Listings ad campaigns to maximize the visibility of their items in the eBay marketplace.


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
      "url": "https://github.com/trollandtoad/ebay-sell-recommendation-v1.git"
    }
  ],
  "require": {
    "trollandtoad/ebay-sell-recommendation-v1": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/trollandtoad/ebay-sell-recommendation-v1/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Recommendation\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Recommendation\V1\Api\ListingRecommendationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_ebay_c_marketplace_id = 'x_ebay_c_marketplace_id_example'; // string | Use this header to specify the eBay marketplace where you list the items for which you want to get recommendations.
$filter = 'filter_example'; // string | Provide a list of key-value pairs to specify the criteria you want to use to filter the response. In the list, separate each filter key from its associated value with a colon (&quot;:&quot;). Currently, the only supported filter value is recommendationTypes and it supports only the (&quot;AD&quot;) type. Follow the recommendationTypes specifier with the filter type(s) enclosed in curly braces (&quot;{ }&quot;), and separate multiple types with commas. Example: filter=recommendationTypes:{AD} Default: recommendationTypes:{AD}
$limit = 'limit_example'; // string | Use this query parameter to set the maximum number of ads to return on a page from the paginated response. Default: 10 Maximum: 500
$offset = 'offset_example'; // string | Specifies the number of ads to skip in the result set before returning the first ad in the paginated response. Combine offset with the limit query parameter to control the items returned in the response. For example, if you supply an offset of 0 and a limit of 10, the first page of the response contains the first 10 items from the complete list of items retrieved by the call. If offset is 10 and limit is 20, the first page of the response contains items 11-30 from the complete result set. Default: 0
$find_listing_recommendation_request = new \TNT\Ebay\Sell\Recommendation\V1\Model\FindListingRecommendationRequest(); // \TNT\Ebay\Sell\Recommendation\V1\Model\FindListingRecommendationRequest

try {
    $result = $apiInstance->findListingRecommendations($x_ebay_c_marketplace_id, $filter, $limit, $offset, $find_listing_recommendation_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListingRecommendationApi->findListingRecommendations: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.ebay.com/sell/recommendation/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ListingRecommendationApi* | [**findListingRecommendations**](docs/Api/ListingRecommendationApi.md#findlistingrecommendations) | **POST** /find | 

## Models

- [Ad](docs/Model/Ad.md)
- [BidPercentages](docs/Model/BidPercentages.md)
- [Error](docs/Model/Error.md)
- [ErrorParameter](docs/Model/ErrorParameter.md)
- [FindListingRecommendationRequest](docs/Model/FindListingRecommendationRequest.md)
- [ListingRecommendation](docs/Model/ListingRecommendation.md)
- [MarketingRecommendation](docs/Model/MarketingRecommendation.md)
- [PagedListingRecommendationCollection](docs/Model/PagedListingRecommendationCollection.md)

## Authorization

### api_auth

- **Type**: `OAuth`
- **Flow**: `accessCode`
- **Authorization URL**: `https://auth.ebay.com/oauth2/authorize`
- **Scopes**: 
    - **https://api.ebay.com/oauth/api_scope/sell.inventory**: View and manage your inventory and offers

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.1.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
