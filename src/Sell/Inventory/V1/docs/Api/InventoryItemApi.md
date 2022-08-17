# TNT\Ebay\Sell\Inventory\V1\InventoryItemApi

All URIs are relative to https://api.ebay.com/sell/inventory/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**bulkCreateOrReplaceInventoryItem()**](InventoryItemApi.md#bulkCreateOrReplaceInventoryItem) | **POST** /bulk_create_or_replace_inventory_item | 
[**bulkGetInventoryItem()**](InventoryItemApi.md#bulkGetInventoryItem) | **POST** /bulk_get_inventory_item | 
[**bulkUpdatePriceQuantity()**](InventoryItemApi.md#bulkUpdatePriceQuantity) | **POST** /bulk_update_price_quantity | 
[**createOrReplaceInventoryItem()**](InventoryItemApi.md#createOrReplaceInventoryItem) | **PUT** /inventory_item/{sku} | 
[**deleteInventoryItem()**](InventoryItemApi.md#deleteInventoryItem) | **DELETE** /inventory_item/{sku} | 
[**getInventoryItem()**](InventoryItemApi.md#getInventoryItem) | **GET** /inventory_item/{sku} | 
[**getInventoryItems()**](InventoryItemApi.md#getInventoryItems) | **GET** /inventory_item | 


## `bulkCreateOrReplaceInventoryItem()`

```php
bulkCreateOrReplaceInventoryItem($bulk_inventory_item): \TNT\Ebay\Sell\Inventory\V1\Model\BulkInventoryItemResponse
```



<span class=\"tablenote\"><strong>Note:</strong> Please note that any eBay listing created using the Inventory API cannot be revised or relisted using the Trading API calls.</span><br /><br /><span class=\"tablenote\"><strong>Note:</strong> Each listing can be revised up to 250 times in one calendar day. If this revision threshold is reached, the seller will be blocked from revising the item until the next calendar day.</span><br/><br/>This call can be used to create and/or update up to 25 new inventory item records. It is up to sellers whether they want to create a complete inventory item records right from the start, or sellers can provide only some information with the initial <strong>bulkCreateOrReplaceInventoryItem</strong> call, and then make one or more additional <strong>bulkCreateOrReplaceInventoryItem</strong> calls to complete all required fields for the inventory item records and prepare for publishing. Upon first creating inventory item records, only the SKU values are required. <br/><br/> In the case of updating existing inventory item records, the <strong>bulkCreateOrReplaceInventoryItem</strong> call will do a complete replacement of the existing inventory item records, so all fields that are currently defined for the inventory item record are required in that update action, regardless of whether their values changed. So, when replacing/updating an inventory item record, it is advised that the seller run a 'Get' call to retrieve the full details of the inventory item records and see all of its current values/settings before attempting to update the records. Any changes that are made to inventory item records that are part of one or more active eBay listings, a successful call will automatically update these active listings. <br/><br/> The key information that is set with the <strong>bulkCreateOrReplaceInventoryItem</strong> call include: <ul> <li>Seller-defined SKU value for the product. Each seller product, including products within an item inventory group, must have their own SKU value. </li> <li>Condition of the item</li> <li>Product details, including any product identifier(s), such as a UPC, ISBN, EAN, or Brand/Manufacturer Part Number pair, a product description, a product title, product/item aspects, and links to images. eBay will use any supplied eBay Product ID (ePID) or a GTIN (UPC, ISBN, or EAN) and attempt to match those identifiers to a product in the eBay Catalog, and if a product match is found, the product details for the inventory item will automatically be populated.</li> <li>Quantity of the inventory item that is available for purchase</li> <li>Package weight and dimensions, which is required if the seller will be offering calculated shipping options. The package weight will also be required if the seller will be providing flat-rate shipping services, but charging a weight surcharge.</li> </ul> <p>In addition to the <code>authorization</code> header, which is required for all eBay REST API calls, the <strong>bulkCreateOrReplaceInventoryItem</strong> call also requires the <code>Content-Language</code> header, that sets the natural language that will be used in the field values of the request payload. For US English, the code value passed in this header should be <code>en-US</code>. To view other supported <code>Content-Language</code> values, and to read more about all supported HTTP headers for eBay REST API calls, see the <a href=\"/api-docs/static/rest-request-components.html#HTTP\">HTTP request headers</a> topic in the <strong>Using eBay RESTful APIs</strong> document.</p><p>For those who prefer to create or update a single inventory item record, the <strong>createOrReplaceInventoryItem</strong> method can be used.</p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Inventory\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Inventory\V1\Api\InventoryItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bulk_inventory_item = new \TNT\Ebay\Sell\Inventory\V1\Model\BulkInventoryItem(); // \TNT\Ebay\Sell\Inventory\V1\Model\BulkInventoryItem | Details of the inventories with sku and locale

try {
    $result = $apiInstance->bulkCreateOrReplaceInventoryItem($bulk_inventory_item);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryItemApi->bulkCreateOrReplaceInventoryItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bulk_inventory_item** | [**\TNT\Ebay\Sell\Inventory\V1\Model\BulkInventoryItem**](../Model/BulkInventoryItem.md)| Details of the inventories with sku and locale |

### Return type

[**\TNT\Ebay\Sell\Inventory\V1\Model\BulkInventoryItemResponse**](../Model/BulkInventoryItemResponse.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bulkGetInventoryItem()`

```php
bulkGetInventoryItem($bulk_get_inventory_item): \TNT\Ebay\Sell\Inventory\V1\Model\BulkGetInventoryItemResponse
```



This call retrieves up to 25 inventory item records. The SKU value of each inventory item record to retrieve is specified in the request payload. <br/><br/>The <code>authorization</code> header is the only required HTTP header for this call, and it is required for all Inventory API calls. See the <strong>HTTP request headers</strong> section for more information.<br/><br/>For those who prefer to retrieve only one inventory item record by SKU value, , the <strong>getInventoryItem</strong> method can be used. To retrieve all inventory item records defined on the seller's account, the <strong>getInventoryItems</strong> method can be used (with pagination control if desired).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Inventory\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Inventory\V1\Api\InventoryItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bulk_get_inventory_item = new \TNT\Ebay\Sell\Inventory\V1\Model\BulkGetInventoryItem(); // \TNT\Ebay\Sell\Inventory\V1\Model\BulkGetInventoryItem | Details of the inventories with sku and locale

try {
    $result = $apiInstance->bulkGetInventoryItem($bulk_get_inventory_item);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryItemApi->bulkGetInventoryItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bulk_get_inventory_item** | [**\TNT\Ebay\Sell\Inventory\V1\Model\BulkGetInventoryItem**](../Model/BulkGetInventoryItem.md)| Details of the inventories with sku and locale |

### Return type

[**\TNT\Ebay\Sell\Inventory\V1\Model\BulkGetInventoryItemResponse**](../Model/BulkGetInventoryItemResponse.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bulkUpdatePriceQuantity()`

```php
bulkUpdatePriceQuantity($bulk_price_quantity): \TNT\Ebay\Sell\Inventory\V1\Model\BulkPriceQuantityResponse
```



This call is used by the seller to update the total ship-to-home quantity of one inventory item, and/or to update the price and/or quantity of one or more offers associated with one inventory item. Up to 25 offers associated with an inventory item may be updated with one <strong>bulkUpdatePriceQuantity</strong> call. Only one SKU (one product) can be updated per call.<br /><br /><span class=\"tablenote\"><strong>Note:</strong> Each listing can be revised up to 250 times in one calendar day. If this revision threshold is reached, the seller will be blocked from revising the item until the next calendar day.</span><br /><br />The <strong>getOffers</strong> call can be used to retrieve all offers associated with a SKU. The seller will just pass in the correct SKU value through the <strong>sku</strong> query parameter. To update an offer, the <strong>offerId</strong> value is required, and this value is returned in the <strong>getOffers</strong> call response. It is also useful to know which offers are unpublished and which ones are published. To get this status, look for the <strong>status</strong> value in the <strong>getOffers</strong> call response. Offers in the published state are live eBay listings, and these listings will be revised with a successful <strong>bulkUpdatePriceQuantity</strong> call.<br /><br />An issue will occur if duplicate <strong>offerId</strong> values are passed through the same <strong>offers</strong> container, or if one or more of the specified offers are associated with different products/SKUs.<br /><br /><span class=\"tablenote\"><strong>Note:</strong> For multiple-variation listings, it is recommended that the <strong>bulkUpdatePriceQuantity</strong> call be used to update price and quantity information for each SKU within that multiple-variation listing instead of using <strong>createOrReplaceInventoryItem</strong> calls to update the price and quantity for each SKU. Just remember that only one SKU (one product variation) can be updated per call.</span><p>The <code>authorization</code> header is the only required HTTP header for this call. See the <strong>HTTP request headers</strong> section for more information.</p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Inventory\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Inventory\V1\Api\InventoryItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bulk_price_quantity = new \TNT\Ebay\Sell\Inventory\V1\Model\BulkPriceQuantity(); // \TNT\Ebay\Sell\Inventory\V1\Model\BulkPriceQuantity | Price and allocation details for the given SKU and Marketplace

try {
    $result = $apiInstance->bulkUpdatePriceQuantity($bulk_price_quantity);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryItemApi->bulkUpdatePriceQuantity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bulk_price_quantity** | [**\TNT\Ebay\Sell\Inventory\V1\Model\BulkPriceQuantity**](../Model/BulkPriceQuantity.md)| Price and allocation details for the given SKU and Marketplace |

### Return type

[**\TNT\Ebay\Sell\Inventory\V1\Model\BulkPriceQuantityResponse**](../Model/BulkPriceQuantityResponse.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createOrReplaceInventoryItem()`

```php
createOrReplaceInventoryItem($content_language, $sku, $inventory_item): \TNT\Ebay\Sell\Inventory\V1\Model\BaseResponse
```



<span class=\"tablenote\"><strong>Note:</strong> Please note that any eBay listing created using the Inventory API cannot be revised or relisted using the Trading API calls.</span><br /><br /><span class=\"tablenote\"><strong>Note:</strong> Each listing can be revised up to 250 times in one calendar day. If this revision threshold is reached, the seller will be blocked from revising the item until the next calendar day.</span><br/><br/>This call creates a new inventory item record or replaces an existing inventory item record. It is up to sellers whether they want to create a complete inventory item record right from the start, or sellers can provide only some information with the initial <strong>createOrReplaceInventoryItem</strong> call, and then make one or more additional <strong>createOrReplaceInventoryItem</strong> calls to complete all required fields for  the inventory item record and prepare it for publishing. Upon first creating an inventory item record, only the SKU value in the call path is required. <br/><br/> In the case of replacing an existing inventory item record, the <strong>createOrReplaceInventoryItem</strong> call will do a complete replacement of the existing inventory item record, so all fields that are currently defined for the inventory item record are required in that update action, regardless of whether their values changed. So, when replacing/updating an inventory item record, it is advised that the seller run a <strong>getInventoryItem</strong> call to retrieve the full inventory item record and see all of its current values/settings before attempting to update the record. And if changes are made to an inventory item that is part of one or more active eBay listings, a successful call will automatically update these eBay listings. <br/><br/> The key information that is set with the <strong>createOrReplaceInventoryItem</strong> call include: <ul> <li>Seller-defined SKU value for the product. Each seller product, including products within an item inventory group, must have their own SKU value. This SKU value is passed in at the end of the call URI</li> <li>Condition of the item</li> <li>Product details, including any product identifier(s), such as a UPC, ISBN, EAN, or Brand/Manufacturer Part Number pair, a product description, a product title, product/item aspects, and links to images. eBay will use any supplied eBay Product ID (ePID) or a GTIN (UPC, ISBN, or EAN) and attempt to match those identifiers to a product in the eBay Catalog, and if a product match is found, the product details for the inventory item will automatically be populated.</li> <li>Quantity of the inventory item that is available for purchase</li> <li>Package weight and dimensions, which is required if the seller will be offering calculated shipping options. The package weight will also be required if the seller will be providing flat-rate shipping services, but charging a weight surcharge.</li> </ul> <p>In addition to the <code>authorization</code> header, which is required for all eBay REST API calls, the <strong>createOrReplaceInventoryItem</strong> call also requires the <code>Content-Language</code> header, that sets the natural language that will be used in the field values of the request payload. For US English, the code value passed in this header should be <code>en-US</code>. To view other supported <code>Content-Language</code> values, and to read more about all supported HTTP headers for eBay REST API calls, see the <a href=\"/api-docs/static/rest-request-components.html#HTTP\">HTTP request headers</a> topic in the <strong>Using eBay RESTful APIs</strong> document.</p><p>For those who prefer to create or update numerous inventory item records with one call (up to 25 at a time), the <strong>bulkCreateOrReplaceInventoryItem</strong> method can be used.</p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Inventory\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Inventory\V1\Api\InventoryItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_language = 'content_language_example'; // string | This request header sets the natural language that will be provided in the field values of the request payload.
$sku = 'sku_example'; // string | The seller-defined SKU value for the inventory item is required whether the seller is creating a new inventory item, or updating an existing inventory item. This SKU value is passed in at the end of the call URI. SKU values must be unique across the seller's inventory. <br/><br/> <strong>Max length</strong>: 50.
$inventory_item = new \TNT\Ebay\Sell\Inventory\V1\Model\InventoryItem(); // \TNT\Ebay\Sell\Inventory\V1\Model\InventoryItem | Details of the inventory item record.

try {
    $result = $apiInstance->createOrReplaceInventoryItem($content_language, $sku, $inventory_item);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryItemApi->createOrReplaceInventoryItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_language** | **string**| This request header sets the natural language that will be provided in the field values of the request payload. |
 **sku** | **string**| The seller-defined SKU value for the inventory item is required whether the seller is creating a new inventory item, or updating an existing inventory item. This SKU value is passed in at the end of the call URI. SKU values must be unique across the seller&#39;s inventory. &lt;br/&gt;&lt;br/&gt; &lt;strong&gt;Max length&lt;/strong&gt;: 50. |
 **inventory_item** | [**\TNT\Ebay\Sell\Inventory\V1\Model\InventoryItem**](../Model/InventoryItem.md)| Details of the inventory item record. |

### Return type

[**\TNT\Ebay\Sell\Inventory\V1\Model\BaseResponse**](../Model/BaseResponse.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteInventoryItem()`

```php
deleteInventoryItem($sku)
```



This call is used to delete an inventory item record associated with a specified SKU. A successful call will not only delete that inventory item record, but will also have the following effects:<ul><li>Delete any and all unpublished offers associated with that SKU;</li><li>Delete any and all single-variation eBay listings associated with that SKU;</li><li>Automatically remove that SKU from a multiple-variation listing and remove that SKU from any and all inventory item groups in which that SKU was a member.</li></ul><p>The <code>authorization</code> header is the only required HTTP header for this call. See the <strong>HTTP request headers</strong> section for more information.</p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Inventory\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Inventory\V1\Api\InventoryItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sku = 'sku_example'; // string | This is the seller-defined SKU value of the product whose inventory item record you wish to delete.<br/><br/><strong>Max length</strong>: 50.

try {
    $apiInstance->deleteInventoryItem($sku);
} catch (Exception $e) {
    echo 'Exception when calling InventoryItemApi->deleteInventoryItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**| This is the seller-defined SKU value of the product whose inventory item record you wish to delete.&lt;br/&gt;&lt;br/&gt;&lt;strong&gt;Max length&lt;/strong&gt;: 50. |

### Return type

void (empty response body)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInventoryItem()`

```php
getInventoryItem($sku): \TNT\Ebay\Sell\Inventory\V1\Model\InventoryItemWithSkuLocaleGroupid
```



This call retrieves the inventory item record for a given SKU. The SKU value is passed in at the end of the call URI. There is no request payload for this call.<br/><br/>The <code>authorization</code> header is the only required HTTP header for this call, and it is required for all Inventory API calls. See the <strong>HTTP request headers</strong> section for more information.<br/><br/>For those who prefer to retrieve numerous inventory item records by SKU value with one call (up to 25 at a time), the <strong>bulkGetInventoryItem</strong> method can be used. To retrieve all inventory item records defined on the seller's account, the <strong>getInventoryItems</strong> method can be used (with pagination control if desired).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Inventory\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Inventory\V1\Api\InventoryItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sku = 'sku_example'; // string | This is the seller-defined SKU value of the product whose inventory item record you wish to retrieve.<br/><br/><strong>Max length</strong>: 50.

try {
    $result = $apiInstance->getInventoryItem($sku);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryItemApi->getInventoryItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**| This is the seller-defined SKU value of the product whose inventory item record you wish to retrieve.&lt;br/&gt;&lt;br/&gt;&lt;strong&gt;Max length&lt;/strong&gt;: 50. |

### Return type

[**\TNT\Ebay\Sell\Inventory\V1\Model\InventoryItemWithSkuLocaleGroupid**](../Model/InventoryItemWithSkuLocaleGroupid.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInventoryItems()`

```php
getInventoryItems($limit, $offset): \TNT\Ebay\Sell\Inventory\V1\Model\InventoryItems
```



This call retrieves all inventory item records defined for the seller's account. The <strong>limit</strong> query parameter allows the seller to control how many records are returned per page, and the <strong>offset</strong> query parameter is used to retrieve a specific page of records. The seller can make multiple calls to scan through multiple pages of records. There is no request payload for this call.<br/><br/>The <code>authorization</code> header is the only required HTTP header for this call, and it is required for all Inventory API calls. See the <strong>HTTP request headers</strong> section for more information.<br/><br/>For those who prefer to retrieve numerous inventory item records by SKU value with one call (up to 25 at a time), the <strong>bulkGetInventoryItem</strong> method can be used.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Inventory\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Inventory\V1\Api\InventoryItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 'limit_example'; // string | The value passed in this query parameter sets the maximum number of records to return per page of data. Although this field is a string, the value passed in this field should be an integer  from <code>1</code> to <code>100</code>. If this query parameter is not set, up to 100 records will be returned on each page of results.<br/><br/><strong>Min</strong>: 1, <strong>Max</strong>: 100
$offset = 'offset_example'; // string | The value passed in this query parameter sets the page number to retrieve. The first page of records has a value of <code>0</code>, the second page of records has a value of <code>1</code>, and so on. If this query parameter is not set, its value defaults to <code>0</code>, and the first page of records is returned.

try {
    $result = $apiInstance->getInventoryItems($limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryItemApi->getInventoryItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **string**| The value passed in this query parameter sets the maximum number of records to return per page of data. Although this field is a string, the value passed in this field should be an integer  from &lt;code&gt;1&lt;/code&gt; to &lt;code&gt;100&lt;/code&gt;. If this query parameter is not set, up to 100 records will be returned on each page of results.&lt;br/&gt;&lt;br/&gt;&lt;strong&gt;Min&lt;/strong&gt;: 1, &lt;strong&gt;Max&lt;/strong&gt;: 100 | [optional]
 **offset** | **string**| The value passed in this query parameter sets the page number to retrieve. The first page of records has a value of &lt;code&gt;0&lt;/code&gt;, the second page of records has a value of &lt;code&gt;1&lt;/code&gt;, and so on. If this query parameter is not set, its value defaults to &lt;code&gt;0&lt;/code&gt;, and the first page of records is returned. | [optional]

### Return type

[**\TNT\Ebay\Sell\Inventory\V1\Model\InventoryItems**](../Model/InventoryItems.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
