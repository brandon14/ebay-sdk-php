# trollandtoad/ebay-buy-marketing-beta-v1

The Marketing API retrieves eBay products based on a metric, such as Best Selling, as well as products that were also bought and also viewed.


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
      "url": "https://github.com/trollandtoad/ebay-buy-marketing-beta-v1.git"
    }
  ],
  "require": {
    "trollandtoad/ebay-buy-marketing-beta-v1": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/trollandtoad/ebay-buy-marketing-beta-v1/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Buy\MarketingBeta\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Buy\MarketingBeta\V1\Api\MerchandisedProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$category_id = 'category_id_example'; // string | This query parameter limits the products returned to a specific eBay category.  <br /> <br />The list of eBay category IDs is not published and category IDs are not all the same across all the eBay maketplace. You can use the following techniques to find a category by site: <ul> <li>Use the <a href=\"https://pages.ebay.com/sellerinformation/news/categorychanges.html\" target=\"_blank\">Category Changes page</a>.</li> <li>Use the Taxonomy API. For details see <a href=\"/api-docs/buy/buy-categories.html\">Get Categories for Buy APIs</a>. </li>  <li>Use the Browse API and submit the following method to get the <b> dominantCategoryId</b> for an item. <br /><code>/buy/browse/v1/item_summary/search?q=<em>keyword</em>&fieldgroups=ASPECT_REFINEMENTS  </code></li></ul>  <b> Maximum: </b> 1 <br /> <b> Required: </b> 1
$metric_name = 'metric_name_example'; // string | This value filters the result set by the specified metric. Only products in this metric are returned. Currently, the only metric supported is <code> BEST_SELLING</code>. <br /><br /><b> Default: </b>BEST_SELLING <br /> <b> Maximum: </b> 1 <br /> <b> Required: </b> 1
$aspect_filter = 'aspect_filter_example'; // string | The aspect name/value pairs used to further refine product results. <br /><br /> For example: <br />&nbsp;&nbsp;&nbsp;<code>/buy/marketing/v1_beta/merchandised_product?category_id=31388&metric_name=BEST_SELLING&aspect_filter=Brand:Canon</code>  <br /><br />You can use the Browse API <b>search</b> method with the <code>fieldgroups=ASPECT_REFINEMENTS</code> field to return the aspects of a product. For implementation help, refer to eBay API documentation at https://developer.ebay.com/api-docs/buy/marketing/types/gct:MarketingAspectFilter
$limit = 'limit_example'; // string | This value specifies the maximum number of products to return in a result set. <br /> <br /><span class=\"tablenote\"> <b>Note:</b> Maximum value means the method will return up <em>to</em> that many products per set, but it can be less than this value. If the number of products found is less than this value, the method will return all of the products matching the criteria.</span>  <br /><br /><b> Default:</b> 8<br /><b> Maximum: </b>100

try {
    $result = $apiInstance->getMerchandisedProducts($category_id, $metric_name, $aspect_filter, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchandisedProductApi->getMerchandisedProducts: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.ebay.com/buy/marketing/v1_beta*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*MerchandisedProductApi* | [**getMerchandisedProducts**](docs/Api/MerchandisedProductApi.md#getmerchandisedproducts) | **GET** /merchandised_product | 

## Models

- [Amount](docs/Model/Amount.md)
- [BestSellingProductResponse](docs/Model/BestSellingProductResponse.md)
- [Error](docs/Model/Error.md)
- [ErrorParameter](docs/Model/ErrorParameter.md)
- [Image](docs/Model/Image.md)
- [MarketPriceDetail](docs/Model/MarketPriceDetail.md)
- [MerchandisedProduct](docs/Model/MerchandisedProduct.md)
- [RatingAspect](docs/Model/RatingAspect.md)
- [RatingAspectDistribution](docs/Model/RatingAspectDistribution.md)

## Authorization

### api_auth

- **Type**: `OAuth`
- **Flow**: `application`
- **Authorization URL**: ``
- **Scopes**: 
    - **https://api.ebay.com/oauth/api_scope/buy.marketing**: Retrieve eBay product and listing data for use in marketing merchandise to buyers

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `v1_beta.2.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
