# trollandtoad/ebay-commerce-taxonomy-v1

Use the Taxonomy API to discover the most appropriate eBay categories under which sellers can offer inventory items for sale, and the most likely categories under which buyers can browse or search for items to purchase. In addition, the Taxonomy API provides metadata about the required and recommended category aspects to include in listings, and also has two operations to retrieve parts compatibility information.


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
      "url": "https://github.com/trollandtoad/ebay-commerce-taxonomy-v1.git"
    }
  ],
  "require": {
    "trollandtoad/ebay-commerce-taxonomy-v1": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/trollandtoad/ebay-commerce-taxonomy-v1/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Commerce\Taxonomy\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Commerce\Taxonomy\V1\Api\CategoryTreeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$category_tree_id = 'category_tree_id_example'; // string | The unique identifier of the eBay category tree being requested.

try {
    $result = $apiInstance->fetchItemAspects($category_tree_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoryTreeApi->fetchItemAspects: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.ebay.com/commerce/taxonomy/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*CategoryTreeApi* | [**fetchItemAspects**](docs/Api/CategoryTreeApi.md#fetchitemaspects) | **GET** /category_tree/{category_tree_id}/fetch_item_aspects | Get Aspects for All Leaf Categories in a Marketplace
*CategoryTreeApi* | [**getCategorySubtree**](docs/Api/CategoryTreeApi.md#getcategorysubtree) | **GET** /category_tree/{category_tree_id}/get_category_subtree | Get a Category Subtree
*CategoryTreeApi* | [**getCategorySuggestions**](docs/Api/CategoryTreeApi.md#getcategorysuggestions) | **GET** /category_tree/{category_tree_id}/get_category_suggestions | Get Suggested Categories
*CategoryTreeApi* | [**getCategoryTree**](docs/Api/CategoryTreeApi.md#getcategorytree) | **GET** /category_tree/{category_tree_id} | Get a Category Tree
*CategoryTreeApi* | [**getCompatibilityProperties**](docs/Api/CategoryTreeApi.md#getcompatibilityproperties) | **GET** /category_tree/{category_tree_id}/get_compatibility_properties | Get Compatibility Properties
*CategoryTreeApi* | [**getCompatibilityPropertyValues**](docs/Api/CategoryTreeApi.md#getcompatibilitypropertyvalues) | **GET** /category_tree/{category_tree_id}/get_compatibility_property_values | Get Compatibility Property Values
*CategoryTreeApi* | [**getDefaultCategoryTreeId**](docs/Api/CategoryTreeApi.md#getdefaultcategorytreeid) | **GET** /get_default_category_tree_id | Get a Default Category Tree ID
*CategoryTreeApi* | [**getItemAspectsForCategory**](docs/Api/CategoryTreeApi.md#getitemaspectsforcategory) | **GET** /category_tree/{category_tree_id}/get_item_aspects_for_category | 

## Models

- [AncestorReference](docs/Model/AncestorReference.md)
- [Aspect](docs/Model/Aspect.md)
- [AspectConstraint](docs/Model/AspectConstraint.md)
- [AspectMetadata](docs/Model/AspectMetadata.md)
- [AspectValue](docs/Model/AspectValue.md)
- [BaseCategoryTree](docs/Model/BaseCategoryTree.md)
- [Category](docs/Model/Category.md)
- [CategoryAspect](docs/Model/CategoryAspect.md)
- [CategorySubtree](docs/Model/CategorySubtree.md)
- [CategorySuggestion](docs/Model/CategorySuggestion.md)
- [CategorySuggestionResponse](docs/Model/CategorySuggestionResponse.md)
- [CategoryTree](docs/Model/CategoryTree.md)
- [CategoryTreeNode](docs/Model/CategoryTreeNode.md)
- [CompatibilityProperty](docs/Model/CompatibilityProperty.md)
- [CompatibilityPropertyValue](docs/Model/CompatibilityPropertyValue.md)
- [Error](docs/Model/Error.md)
- [ErrorParameter](docs/Model/ErrorParameter.md)
- [GetCategoriesAspectResponse](docs/Model/GetCategoriesAspectResponse.md)
- [GetCompatibilityMetadataResponse](docs/Model/GetCompatibilityMetadataResponse.md)
- [GetCompatibilityPropertyValuesResponse](docs/Model/GetCompatibilityPropertyValuesResponse.md)
- [RelevanceIndicator](docs/Model/RelevanceIndicator.md)
- [ValueConstraint](docs/Model/ValueConstraint.md)

## Authorization

### api_auth

- **Type**: `OAuth`
- **Flow**: `application`
- **Authorization URL**: ``
- **Scopes**: 
    - **https://api.ebay.com/oauth/api_scope**: View public data from eBay
    - **https://api.ebay.com/oauth/api_scope/metadata.insights**: View metadata insights such as aspect relevance.

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
