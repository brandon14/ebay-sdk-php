# TNT\Ebay\Sell\Inventory\V1\ProductCompatibilityApi

All URIs are relative to https://api.ebay.com/sell/inventory/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createOrReplaceProductCompatibility()**](ProductCompatibilityApi.md#createOrReplaceProductCompatibility) | **PUT** /inventory_item/{sku}/product_compatibility | 
[**deleteProductCompatibility()**](ProductCompatibilityApi.md#deleteProductCompatibility) | **DELETE** /inventory_item/{sku}/product_compatibility | 
[**getProductCompatibility()**](ProductCompatibilityApi.md#getProductCompatibility) | **GET** /inventory_item/{sku}/product_compatibility | 


## `createOrReplaceProductCompatibility()`

```php
createOrReplaceProductCompatibility($content_language, $sku, $compatibility): \TNT\Ebay\Sell\Inventory\V1\Model\BaseResponse
```



This call is used by the seller to create or replace a list of products that are compatible with the inventory item. The inventory item is identified with a SKU value in the URI. Product compatibility is currently only applicable to motor vehicle parts and accessory categories, but more categories may be supported in the future.<br /><br /><p>In addition to the <code>authorization</code> header, which is required for all eBay REST API calls, the <strong>createOrReplaceProductCompatibility</strong> call also requires the <code>Content-Language</code> header, that sets the natural language that will be used in the field values of the request payload. For US English, the code value passed in this header should be <code>en-US</code>. To view other supported <code>Content-Language</code> values, and to read more about all supported HTTP headers for eBay REST API calls, see the <a href=\"/api-docs/static/rest-request-components.html#HTTP\">HTTP request headers</a> topic in the <strong>Using eBay RESTful APIs</strong> document.</p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Inventory\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Inventory\V1\Api\ProductCompatibilityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_language = 'content_language_example'; // string | This request header sets the natural language that will be provided in the field values of the request payload.
$sku = 'sku_example'; // string | A SKU (stock keeping unit) is an unique identifier defined by a seller for a product
$compatibility = new \TNT\Ebay\Sell\Inventory\V1\Model\Compatibility(); // \TNT\Ebay\Sell\Inventory\V1\Model\Compatibility | Details of the compatibility

try {
    $result = $apiInstance->createOrReplaceProductCompatibility($content_language, $sku, $compatibility);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductCompatibilityApi->createOrReplaceProductCompatibility: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_language** | **string**| This request header sets the natural language that will be provided in the field values of the request payload. |
 **sku** | **string**| A SKU (stock keeping unit) is an unique identifier defined by a seller for a product |
 **compatibility** | [**\TNT\Ebay\Sell\Inventory\V1\Model\Compatibility**](../Model/Compatibility.md)| Details of the compatibility |

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

## `deleteProductCompatibility()`

```php
deleteProductCompatibility($sku)
```



This call is used by the seller to delete the list of products that are compatible with the inventory item that is associated with the compatible product list. The inventory item is identified with a SKU value in the URI. Product compatibility is currently only applicable to motor vehicle parts and accessory categories, but more categories may be supported in the future.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Inventory\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Inventory\V1\Api\ProductCompatibilityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sku = 'sku_example'; // string | A SKU (stock keeping unit) is an unique identifier defined by a seller for a product

try {
    $apiInstance->deleteProductCompatibility($sku);
} catch (Exception $e) {
    echo 'Exception when calling ProductCompatibilityApi->deleteProductCompatibility: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**| A SKU (stock keeping unit) is an unique identifier defined by a seller for a product |

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

## `getProductCompatibility()`

```php
getProductCompatibility($sku): \TNT\Ebay\Sell\Inventory\V1\Model\Compatibility
```



This call is used by the seller to retrieve the list of products that are compatible with the inventory item. The SKU value for the inventory item is passed into the call URI, and a successful call with return the compatible vehicle list associated with this inventory item. Product compatibility is currently only applicable to motor vehicle parts and accessory categories, but more categories may be supported in the future.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Inventory\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Inventory\V1\Api\ProductCompatibilityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sku = 'sku_example'; // string | A SKU (stock keeping unit) is an unique identifier defined by a seller for a product

try {
    $result = $apiInstance->getProductCompatibility($sku);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductCompatibilityApi->getProductCompatibility: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**| A SKU (stock keeping unit) is an unique identifier defined by a seller for a product |

### Return type

[**\TNT\Ebay\Sell\Inventory\V1\Model\Compatibility**](../Model/Compatibility.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
