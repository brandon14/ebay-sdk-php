# brandon14/ebay-buy-browse-v1

<p>The Browse API has the following resources:</p>   <ul> <li><b> item_summary: </b> Lets shoppers search for specific items by keyword, GTIN, category, charity, product, or item aspects and refine the results by using filters, such as aspects, compatibility, and fields values.</li>  <li><b> search_by_image: </b><a href=\"https://developer.ebay.com/api-docs/static/versioning.html#experimental \" target=\"_blank\"><img src=\"/cms/img/docs/experimental-icon.svg\" class=\"legend-icon experimental-icon\" alt=\"Experimental Release\" title=\"Experimental Release\" />&nbsp;(Experimental)</a> Lets shoppers search for specific items by image. You can refine the results by using URI parameters and filters.</li>   <li><b> item: </b> <ul><li>Lets you retrieve the details of a specific item or all the items in an item group, which is an item with variations such as color and size and check if a product is compatible with the specified item, such as if a specific car is compatible with a specific part.</li> <li>Provides a bridge between the eBay legacy APIs, such as <b> Finding</b>, and the RESTful APIs, which use different formats for the item IDs.</li>  </ul> </li>  <li> <b> shopping_cart: </b> <a href=\"https://developer.ebay.com/api-docs/static/versioning.html#experimental \" target=\"_blank\"><img src=\"/cms/img/docs/experimental-icon.svg\" class=\"legend-icon experimental-icon\" alt=\"Experimental Release\" title=\"Experimental Release\" />&nbsp;(Experimental)</a> <a href=\"https://developer.ebay.com/api-docs/static/versioning.html#limited \" target=\"_blank\"> <img src=\"/cms/img/docs/partners-api.svg\" class=\"legend-icon partners-icon\" title=\"Limited Release\"  alt=\"Limited Release\" />(Limited Release)</a> Provides the ability for eBay members to see the contents of their eBay cart, and add, remove, and change the quantity of items in their eBay cart.&nbsp;&nbsp;<b> Note: </b> This resource is not available in the eBay API Explorer.</li></ul>       <p>The <b> item_summary</b>, <b> search_by_image</b>, and <b> item</b> resource calls require an <a href=\"/api-docs/static/oauth-client-credentials-grant.html\">Application access token</a>. The <b> shopping_cart</b> resource calls require a <a href=\"/api-docs/static/oauth-authorization-code-grant.html\">User access token</a>.</p>


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
      "url": "https://github.com/brandon14/ebay-buy-browse-v1.git"
    }
  ],
  "require": {
    "brandon14/ebay-buy-browse-v1": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/brandon14/ebay-buy-browse-v1/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Buy\Browse\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Buy\Browse\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Buy\Browse\V1\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_id = 'item_id_example'; // string | The eBay RESTful identifier of an item (such as a part you want to check). This ID is returned by the <b> Browse</b> and <b> Feed</b> API methods.  <br /><br /> <b> RESTful Item ID Format: </b><code>v1</code>|<code><i>#</i></code>|<code><i>#</i></code> <br />For example: <code>v1|2**********2|0</code> or <code>v1|1**********2|4**********2</code> <br /><br />For more information about item ID for RESTful APIs, see the <a href=\"/api-docs/buy/static/api-browse.html#Legacy\">Legacy API compatibility</a> section of the <i>Buy APIs Overview</i>.
$x_ebay_c_marketplace_id = 'x_ebay_c_marketplace_id_example'; // string | The ID of the eBay marketplace you want to use. <b> Note: </b> This value is case sensitive.<br /><br />For example: <br />&nbsp;&nbsp;<code>X-EBAY-C-MARKETPLACE-ID = EBAY_US</code>  <br /><br /> For a list of supported sites see, <a href=\"/api-docs/buy/browse/overview.html#API\">API Restrictions</a>.
$compatibility_payload = new \TNT\Ebay\Buy\Browse\V1\Model\CompatibilityPayload(); // \TNT\Ebay\Buy\Browse\V1\Model\CompatibilityPayload

try {
    $result = $apiInstance->checkCompatibility($item_id, $x_ebay_c_marketplace_id, $compatibility_payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->checkCompatibility: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.ebay.com/buy/browse/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ItemApi* | [**checkCompatibility**](docs/Api/ItemApi.md#checkcompatibility) | **POST** /item/{item_id}/check_compatibility | 
*ItemApi* | [**getItem**](docs/Api/ItemApi.md#getitem) | **GET** /item/{item_id} | 
*ItemApi* | [**getItemByLegacyId**](docs/Api/ItemApi.md#getitembylegacyid) | **GET** /item/get_item_by_legacy_id | 
*ItemApi* | [**getItems**](docs/Api/ItemApi.md#getitems) | **GET** /item/ | 
*ItemApi* | [**getItemsByItemGroup**](docs/Api/ItemApi.md#getitemsbyitemgroup) | **GET** /item/get_items_by_item_group | 
*ItemSummaryApi* | [**search**](docs/Api/ItemSummaryApi.md#search) | **GET** /item_summary/search | 
*SearchByImageApi* | [**searchByImage**](docs/Api/SearchByImageApi.md#searchbyimage) | **POST** /item_summary/search_by_image | 
*ShoppingCartApi* | [**addItem**](docs/Api/ShoppingCartApi.md#additem) | **POST** /shopping_cart/add_item | 
*ShoppingCartApi* | [**getShoppingCart**](docs/Api/ShoppingCartApi.md#getshoppingcart) | **GET** /shopping_cart/ | 
*ShoppingCartApi* | [**removeItem**](docs/Api/ShoppingCartApi.md#removeitem) | **POST** /shopping_cart/remove_item | 
*ShoppingCartApi* | [**updateQuantity**](docs/Api/ShoppingCartApi.md#updatequantity) | **POST** /shopping_cart/update_quantity | 

## Models

- [AddCartItemInput](docs/Model/AddCartItemInput.md)
- [AdditionalProductIdentity](docs/Model/AdditionalProductIdentity.md)
- [AddonService](docs/Model/AddonService.md)
- [Address](docs/Model/Address.md)
- [Amount](docs/Model/Amount.md)
- [Aspect](docs/Model/Aspect.md)
- [AspectDistribution](docs/Model/AspectDistribution.md)
- [AspectGroup](docs/Model/AspectGroup.md)
- [AspectValueDistribution](docs/Model/AspectValueDistribution.md)
- [AttributeNameValue](docs/Model/AttributeNameValue.md)
- [AuthenticityGuaranteeProgram](docs/Model/AuthenticityGuaranteeProgram.md)
- [AuthenticityVerificationProgram](docs/Model/AuthenticityVerificationProgram.md)
- [AutoCorrections](docs/Model/AutoCorrections.md)
- [AvailableCoupon](docs/Model/AvailableCoupon.md)
- [BuyingOptionDistribution](docs/Model/BuyingOptionDistribution.md)
- [CartItem](docs/Model/CartItem.md)
- [Category](docs/Model/Category.md)
- [CategoryDistribution](docs/Model/CategoryDistribution.md)
- [CommonDescriptions](docs/Model/CommonDescriptions.md)
- [CompatibilityPayload](docs/Model/CompatibilityPayload.md)
- [CompatibilityProperty](docs/Model/CompatibilityProperty.md)
- [CompatibilityResponse](docs/Model/CompatibilityResponse.md)
- [ConditionDistribution](docs/Model/ConditionDistribution.md)
- [ConvertedAmount](docs/Model/ConvertedAmount.md)
- [CoreItem](docs/Model/CoreItem.md)
- [CouponConstraint](docs/Model/CouponConstraint.md)
- [Error](docs/Model/Error.md)
- [ErrorParameter](docs/Model/ErrorParameter.md)
- [EstimatedAvailability](docs/Model/EstimatedAvailability.md)
- [Image](docs/Model/Image.md)
- [Item](docs/Model/Item.md)
- [ItemGroup](docs/Model/ItemGroup.md)
- [ItemGroupSummary](docs/Model/ItemGroupSummary.md)
- [ItemLocationImpl](docs/Model/ItemLocationImpl.md)
- [ItemReturnTerms](docs/Model/ItemReturnTerms.md)
- [ItemSummary](docs/Model/ItemSummary.md)
- [Items](docs/Model/Items.md)
- [LegalAddress](docs/Model/LegalAddress.md)
- [MarketingPrice](docs/Model/MarketingPrice.md)
- [PaymentMethod](docs/Model/PaymentMethod.md)
- [PaymentMethodBrand](docs/Model/PaymentMethodBrand.md)
- [PickupOptionSummary](docs/Model/PickupOptionSummary.md)
- [Price](docs/Model/Price.md)
- [Product](docs/Model/Product.md)
- [ProductIdentity](docs/Model/ProductIdentity.md)
- [RatingHistogram](docs/Model/RatingHistogram.md)
- [Refinement](docs/Model/Refinement.md)
- [Region](docs/Model/Region.md)
- [RemoteShopcartResponse](docs/Model/RemoteShopcartResponse.md)
- [RemoveCartItemInput](docs/Model/RemoveCartItemInput.md)
- [ReviewRating](docs/Model/ReviewRating.md)
- [SearchByImageRequest](docs/Model/SearchByImageRequest.md)
- [SearchPagedCollection](docs/Model/SearchPagedCollection.md)
- [Seller](docs/Model/Seller.md)
- [SellerCustomPolicy](docs/Model/SellerCustomPolicy.md)
- [SellerDetail](docs/Model/SellerDetail.md)
- [SellerLegalInfo](docs/Model/SellerLegalInfo.md)
- [ShipToLocation](docs/Model/ShipToLocation.md)
- [ShipToLocations](docs/Model/ShipToLocations.md)
- [ShipToRegion](docs/Model/ShipToRegion.md)
- [ShippingOption](docs/Model/ShippingOption.md)
- [ShippingOptionSummary](docs/Model/ShippingOptionSummary.md)
- [TargetLocation](docs/Model/TargetLocation.md)
- [TaxJurisdiction](docs/Model/TaxJurisdiction.md)
- [Taxes](docs/Model/Taxes.md)
- [TimeDuration](docs/Model/TimeDuration.md)
- [TypedNameValue](docs/Model/TypedNameValue.md)
- [UpdateCartItemInput](docs/Model/UpdateCartItemInput.md)
- [VatDetail](docs/Model/VatDetail.md)

## Authorization

### api_auth

- **Type**: `OAuth`
- **Flow**: `application`
- **Authorization URL**: ``
- **Scopes**: 
    - **https://api.ebay.com/oauth/api_scope/buy.item.bulk**: Retrieve eBay items in bulk.
    - **https://api.ebay.com/oauth/api_scope**: View public data from eBay


### api_auth

- **Type**: `OAuth`
- **Flow**: `accessCode`
- **Authorization URL**: `https://auth.ebay.com/oauth2/authorize`
- **Scopes**: 
    - **https://api.ebay.com/oauth/api_scope/buy.shopping.cart**: This scope would allow signed in user to access shopping carts

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `v1.16.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
