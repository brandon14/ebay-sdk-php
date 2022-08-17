# TNT\Ebay\Sell\Inventory\V1\ListingApi

All URIs are relative to https://api.ebay.com/sell/inventory/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**bulkMigrateListing()**](ListingApi.md#bulkMigrateListing) | **POST** /bulk_migrate_listing | 


## `bulkMigrateListing()`

```php
bulkMigrateListing($bulk_migrate_listing): \TNT\Ebay\Sell\Inventory\V1\Model\BulkMigrateListingResponse
```



This call is used to convert existing eBay Listings to the corresponding Inventory API objects. If an eBay listing is successfully migrated to the Inventory API model, new Inventory Location, Inventory Item, and Offer objects are created. For a multiple-variation listing that is successfully migrated, in addition to the three new Inventory API objects just mentioned, an Inventory Item Group object will also be created. If the eBay listing is a motor vehicle part or accessory listing with a compatible vehicle list (<strong>ItemCompatibilityList</strong> container in Trading API's Add/Revise/Relist/Verify calls), a Product Compatibility object will be created.<br/><br/><h3>Migration Requirements</h3><br/>To be eligible for migration, the active eBay listings must meet the following requirements:<ul><li>Listing type is Fixed-Price<p><span class=\"tablenote\"><strong>Note:</strong> Auction listings are supported by the Inventory API, but the <b>bulkMigrateListing</b> method cannot be used to migrate auction listings.</span></p></li><li>The item(s) in the listings must have seller-defined SKU values associated with them, and in the case of a multiple-variation listing, each product variation must also have its own SKU value</li><li>Business Polices (Payment, Return Policy, and Shipping) must be used on the listing, as legacy payment, return policy, and shipping fields will not be accepted. With the Payment Policy associated with a listing, the immediate payment requirement must be enabled.</li><li>The postal/zip code (<strong>PostalCode</strong> field in Trading's <strong>ItemType</strong>) or city (<strong>Location</strong> field in Trading's <strong>ItemType</strong>) must be set in the listing; the country is also needed, but this value is required in Trading API, so it will always be set for every listing</li></ul><br /><h3>Unsupported Listing Features</h3><br/>The following features are not yet available to be set or modified through the Inventory API, but they will remain on the active eBay listing, even after a successful migration to the Inventory model. The downside to this is that the seller will be completely blocked (in APIs or My eBay) from revising these features/settings once the migration takes place:<ul><li>Any listing-level Buyer Requirements</li><li>Listing enhancements like a bold listing title or Gallery Plus</li></ul><br /><h3>Making the Call</h3><br/>In the request payload of the <strong>bulkMigrateListings</strong> call, the seller will pass in an array of one to five eBay listing IDs (aka Item IDs). To save time and hassle, that seller should do a pre-check on each listing to make sure those listings meet the requirements to be migrated to the new Inventory model. There are no path or query parameters for this call.<br/><br/><h3>Call Response</h3><br/>If an eBay listing is migrated successfully to the new Inventory model, the following will occur:<ul><li>An Inventory Item object will be created for the item(s) in the listing, and this object will be accessible through the Inventory API</li><li>An Offer object will be created for the listing, and this object will be accessible through the Inventory API</li><li>An Inventory Location object will be created and associated with the Offer object, as an Inventory Location must be associated with a published Offer</li></ul>The response payload of the Bulk Migrate Listings call will show the results of each listing migration. These results include an HTTP status code to indicate the success or failure of each listing migration, the SKU value associated with each item, and if the migration is successful, an Offer ID value. The SKU value will be used in the Inventory API to manage the Inventory Item object, and the Offer ID value will be used in the Inventory API to manage the Offer object. Errors and/or warnings containers will be returned for each listing where an error and/or warning occurred with the attempted migration.<br/><br/>If a multiple-variation listing is successfully migrated, along with the Offer and Inventory Location objects, an Inventory Item object will be created for each product variation within the listing, and an Inventory Item Group object will also be created, grouping those variations together in the Inventory API platform. For a motor vehicle part or accessory listing that has a specified list of compatible vehicles, in addition to the Inventory Item, Inventory Location, and Offer objects that are created, a Product Compatibility object will also be created in the Inventory API platform.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Inventory\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Inventory\V1\Api\ListingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bulk_migrate_listing = new \TNT\Ebay\Sell\Inventory\V1\Model\BulkMigrateListing(); // \TNT\Ebay\Sell\Inventory\V1\Model\BulkMigrateListing | Details of the listings that needs to be migrated into Inventory

try {
    $result = $apiInstance->bulkMigrateListing($bulk_migrate_listing);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListingApi->bulkMigrateListing: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bulk_migrate_listing** | [**\TNT\Ebay\Sell\Inventory\V1\Model\BulkMigrateListing**](../Model/BulkMigrateListing.md)| Details of the listings that needs to be migrated into Inventory |

### Return type

[**\TNT\Ebay\Sell\Inventory\V1\Model\BulkMigrateListingResponse**](../Model/BulkMigrateListingResponse.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
