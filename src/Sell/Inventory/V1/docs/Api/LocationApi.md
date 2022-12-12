# TNT\Ebay\Sell\Inventory\V1\LocationApi

All URIs are relative to https://api.ebay.com/sell/inventory/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createInventoryLocation()**](LocationApi.md#createInventoryLocation) | **POST** /location/{merchantLocationKey} | 
[**deleteInventoryLocation()**](LocationApi.md#deleteInventoryLocation) | **DELETE** /location/{merchantLocationKey} | 
[**disableInventoryLocation()**](LocationApi.md#disableInventoryLocation) | **POST** /location/{merchantLocationKey}/disable | 
[**enableInventoryLocation()**](LocationApi.md#enableInventoryLocation) | **POST** /location/{merchantLocationKey}/enable | 
[**getInventoryLocation()**](LocationApi.md#getInventoryLocation) | **GET** /location/{merchantLocationKey} | 
[**getInventoryLocations()**](LocationApi.md#getInventoryLocations) | **GET** /location | 
[**updateInventoryLocation()**](LocationApi.md#updateInventoryLocation) | **POST** /location/{merchantLocationKey}/update_location_details | 


## `createInventoryLocation()`

```php
createInventoryLocation($merchant_location_key, $inventory_location_full)
```



<p>Use this call to create a new inventory location. In order to create and publish an offer (and create an eBay listing), a seller must have at least one inventory location, as every offer must be associated with a location.</p><p>Upon first creating an inventory location, only a seller-defined location identifier and a physical location is required, and once set, these values can not be changed. The unique identifier value (<i>merchantLocationKey</i>) is passed in at the end of the call URI. This <i>merchantLocationKey</i> value will be used in other Inventory Location calls to identify the inventory location to perform an action against.</p><p>At this time, location types are either warehouse or store. Warehouse locations are used for traditional shipping, and store locations are generally used by US merchants selling products through the In-Store Pickup program, or used by UK, Australian, and German merchants selling products through the Click and Collect program. A full address is required for store inventory locations. However, for warehouse inventory locations, a full street address is not needed, but the city, state/province, and country of the location must be provided. </p><p>Note that all inventory locations are \"enabled\" by default when they are created, and you must specifically disable them (by passing in a value of <code>DISABLED</code> in the <strong>merchantLocationStatus</strong> field) if you want them to be set to the disabled state. The seller's inventory cannot be loaded to inventory locations in the disabled state.</p> <p>In addition to the <code>authorization</code> header, which is required for all eBay REST API calls, the following table includes another request header that is mandatory for the <strong>createInventoryLocation</strong> call, and two other request headers that are optional:</p><br/> <table> <tr> <th>Header</th> <th>Description</th> <th>Required?</th> <th>Applicable Values</th> </tr> <tr> <td><code>Accept</code></td> <td>Describes the response encoding, as required by the caller. Currently, the interfaces require payloads formatted in JSON, and JSON is the default.</td> <td>No</td> <td><code>application/json</code></td> </tr> <tr> <td><code>Content-Language</code></td> <td>Use this header to control the language that is used for any returned errors or warnings in the call response.</td> <td>No</td> <td><code>en-US</code></td> </tr> <tr> <td><code>Content-Type</code></td> <td>The MIME type of the body of the request. Must be JSON.</td> <td>Yes</td> <td><code>application/json</code></td> </tr> </table></p><br/><p>Unless one or more errors and/or warnings occur with the call, there is no response payload for this call. A successful call will return an HTTP status value of <i>204 No Content</i>.</p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Inventory\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Inventory\V1\Api\LocationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_location_key = 'merchant_location_key_example'; // string | A unique, merchant-defined key (ID) for an inventory location. This unique identifier, or key, is used in other Inventory API calls to identify an inventory location. <br/><br/><b>Max length</b>: 36
$inventory_location_full = new \TNT\Ebay\Sell\Inventory\V1\Model\InventoryLocationFull(); // \TNT\Ebay\Sell\Inventory\V1\Model\InventoryLocationFull | Inventory Location details

try {
    $apiInstance->createInventoryLocation($merchant_location_key, $inventory_location_full);
} catch (Exception $e) {
    echo 'Exception when calling LocationApi->createInventoryLocation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_location_key** | **string**| A unique, merchant-defined key (ID) for an inventory location. This unique identifier, or key, is used in other Inventory API calls to identify an inventory location. &lt;br/&gt;&lt;br/&gt;&lt;b&gt;Max length&lt;/b&gt;: 36 |
 **inventory_location_full** | [**\TNT\Ebay\Sell\Inventory\V1\Model\InventoryLocationFull**](../Model/InventoryLocationFull.md)| Inventory Location details |

### Return type

void (empty response body)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteInventoryLocation()`

```php
deleteInventoryLocation($merchant_location_key)
```



<p>This call deletes the inventory location that is specified in the <code>merchantLocationKey</code> path parameter. Note that deleting a location will not affect any active eBay listings associated with the deleted location, but the seller will not be able modify the offers associated with the inventory location once it is deleted.</p><p>The <code>authorization</code> HTTP header is the only required request header for this call. </p><p>Unless one or more errors and/or warnings occur with the call, there is no response payload for this call. A successful call will return an HTTP status value of <i>200 OK</i>.</p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Inventory\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Inventory\V1\Api\LocationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_location_key = 'merchant_location_key_example'; // string | A unique merchant-defined key (ID) for an inventory location. This value is passed in at the end of the call URI to indicate the inventory location to be deleted. <br/><br/><b>Max length</b>: 36

try {
    $apiInstance->deleteInventoryLocation($merchant_location_key);
} catch (Exception $e) {
    echo 'Exception when calling LocationApi->deleteInventoryLocation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_location_key** | **string**| A unique merchant-defined key (ID) for an inventory location. This value is passed in at the end of the call URI to indicate the inventory location to be deleted. &lt;br/&gt;&lt;br/&gt;&lt;b&gt;Max length&lt;/b&gt;: 36 |

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

## `disableInventoryLocation()`

```php
disableInventoryLocation($merchant_location_key): object
```



<p>This call disables the inventory location that is specified in the <code>merchantLocationKey</code> path parameter. Sellers can not load/modify inventory to disabled inventory locations. Note that disabling an inventory location will not affect any active eBay listings associated with the disabled location, but the seller will not be able modify the offers associated with a disabled inventory location.</p><p>The <code>authorization</code> HTTP header is the only required request header for this call.</p><p>A successful call will return an HTTP status value of <i>200 OK</i>.</p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Inventory\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Inventory\V1\Api\LocationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_location_key = 'merchant_location_key_example'; // string | A unique merchant-defined key (ID) for an inventory location. This value is passed in through the call URI to disable the specified inventory location. <br/><br/><b>Max length</b>: 36

try {
    $result = $apiInstance->disableInventoryLocation($merchant_location_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationApi->disableInventoryLocation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_location_key** | **string**| A unique merchant-defined key (ID) for an inventory location. This value is passed in through the call URI to disable the specified inventory location. &lt;br/&gt;&lt;br/&gt;&lt;b&gt;Max length&lt;/b&gt;: 36 |

### Return type

**object**

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `enableInventoryLocation()`

```php
enableInventoryLocation($merchant_location_key): object
```



<p>This call enables a disabled inventory location that is specified in the <code>merchantLocationKey</code> path parameter. Once a disabled inventory location is enabled, sellers can start loading/modifying inventory to that inventory location. </p><p>The <code>authorization</code> HTTP header is the only required request header for this call.</p><p>A successful call will return an HTTP status value of <i>200 OK</i>.</p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Inventory\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Inventory\V1\Api\LocationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_location_key = 'merchant_location_key_example'; // string | A unique merchant-defined key (ID) for an inventory location. This value is passed in through the call URI to specify the disabled inventory location to enable. <br/><br/><b>Max length</b>: 36

try {
    $result = $apiInstance->enableInventoryLocation($merchant_location_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationApi->enableInventoryLocation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_location_key** | **string**| A unique merchant-defined key (ID) for an inventory location. This value is passed in through the call URI to specify the disabled inventory location to enable. &lt;br/&gt;&lt;br/&gt;&lt;b&gt;Max length&lt;/b&gt;: 36 |

### Return type

**object**

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInventoryLocation()`

```php
getInventoryLocation($merchant_location_key): \TNT\Ebay\Sell\Inventory\V1\Model\InventoryLocationResponse
```



This call retrieves all defined details of the inventory location that is specified by the <b>merchantLocationKey</b> path parameter. <p>The <code>authorization</code> HTTP header is the only required request header for this call. </p><p>A successful call will return an HTTP status value of <i>200 OK</i>.</p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Inventory\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Inventory\V1\Api\LocationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_location_key = 'merchant_location_key_example'; // string | A unique merchant-defined key (ID) for an inventory location. This value is passed in at the end of the call URI to specify the inventory location to retrieve. <br/><br/><b>Max length</b>: 36

try {
    $result = $apiInstance->getInventoryLocation($merchant_location_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationApi->getInventoryLocation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_location_key** | **string**| A unique merchant-defined key (ID) for an inventory location. This value is passed in at the end of the call URI to specify the inventory location to retrieve. &lt;br/&gt;&lt;br/&gt;&lt;b&gt;Max length&lt;/b&gt;: 36 |

### Return type

[**\TNT\Ebay\Sell\Inventory\V1\Model\InventoryLocationResponse**](../Model/InventoryLocationResponse.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInventoryLocations()`

```php
getInventoryLocations($limit, $offset): \TNT\Ebay\Sell\Inventory\V1\Model\LocationResponse
```



This call retrieves all defined details for every inventory location associated with the seller's account. There are no required parameters for this call and no request payload. However, there are two optional query parameters, <strong>limit</strong> and <strong>offset</strong>. The <strong>limit</strong> query parameter sets the maximum number of inventory locations returned on one page of data, and the <strong>offset</strong> query parameter specifies the page of data to return. These query parameters are discussed more in the <strong>URI parameters</strong> table below. <p>The <code>authorization</code> HTTP header is the only required request header for this call. </p><p>A successful call will return an HTTP status value of <i>200 OK</i>.</p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Inventory\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Inventory\V1\Api\LocationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 'limit_example'; // string | The value passed in this query parameter sets the maximum number of records to return per page of data. Although this field is a string, the value passed in this field should be a positive integer value. If this query parameter is not set, up to 100 records will be returned on each page of results. <br/><br/> <strong>Min</strong>: 1
$offset = 'offset_example'; // string | Specifies the number of locations to skip in the result set before returning the first location in the paginated response.  <p>Combine <b>offset</b> with the <b>limit</b> query parameter to control the items returned in the response. For example, if you supply an <b>offset</b> of <code>0</code> and a <b>limit</b> of <code>10</code>, the first page of the response contains the first 10 items from the complete list of items retrieved by the call. If <b>offset</b> is <code>10</code> and <b>limit</b> is <code>20</code>, the first page of the response contains items 11-30 from the complete result set.</p> <p><b>Default:</b> 0</p>

try {
    $result = $apiInstance->getInventoryLocations($limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationApi->getInventoryLocations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **string**| The value passed in this query parameter sets the maximum number of records to return per page of data. Although this field is a string, the value passed in this field should be a positive integer value. If this query parameter is not set, up to 100 records will be returned on each page of results. &lt;br/&gt;&lt;br/&gt; &lt;strong&gt;Min&lt;/strong&gt;: 1 | [optional]
 **offset** | **string**| Specifies the number of locations to skip in the result set before returning the first location in the paginated response.  &lt;p&gt;Combine &lt;b&gt;offset&lt;/b&gt; with the &lt;b&gt;limit&lt;/b&gt; query parameter to control the items returned in the response. For example, if you supply an &lt;b&gt;offset&lt;/b&gt; of &lt;code&gt;0&lt;/code&gt; and a &lt;b&gt;limit&lt;/b&gt; of &lt;code&gt;10&lt;/code&gt;, the first page of the response contains the first 10 items from the complete list of items retrieved by the call. If &lt;b&gt;offset&lt;/b&gt; is &lt;code&gt;10&lt;/code&gt; and &lt;b&gt;limit&lt;/b&gt; is &lt;code&gt;20&lt;/code&gt;, the first page of the response contains items 11-30 from the complete result set.&lt;/p&gt; &lt;p&gt;&lt;b&gt;Default:&lt;/b&gt; 0&lt;/p&gt; | [optional]

### Return type

[**\TNT\Ebay\Sell\Inventory\V1\Model\LocationResponse**](../Model/LocationResponse.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateInventoryLocation()`

```php
updateInventoryLocation($merchant_location_key, $inventory_location)
```



<p>Use this call to update non-physical location details for an existing inventory location. Specify the inventory location you want to update using the <b>merchantLocationKey</b> path parameter. <br/><br/>You can update the following text-based fields: <strong>name</strong>, <strong>phone</strong>, <strong>locationWebUrl</strong>, <strong>locationInstructions</strong> and <strong>locationAdditionalInformation</strong>. Whatever text is passed in for these fields in an <strong>updateInventoryLocation</strong> call will replace the current text strings defined for these fields. For store inventory locations, the operating hours and/or the special hours can also be updated. <br/><br/> The merchant location key, the physical location of the store, and its geo-location coordinates can not be updated with an <strong>updateInventoryLocation</strong> call </p><p>In addition to the <code>authorization</code> header, which is required for all eBay REST API calls, the following table includes another request header that is mandatory for the <strong>updateInventoryLocation</strong> call, and two other request headers that are optional:</p><br/> <table> <tr> <th>Header</th> <th>Description</th> <th>Required?</th> <th>Applicable Values</th> </tr> <tr> <td><code>Accept</code></td> <td>Describes the response encoding, as required by the caller. Currently, the interfaces require payloads formatted in JSON, and JSON is the default.</td> <td>No</td> <td><code>application/json</code></td> </tr> <tr> <td><code>Content-Language</code></td> <td>Use this header to control the language that is used for any returned errors or warnings in the call response.</td> <td>No</td> <td><code>en-US</code></td> </tr> <tr> <td><code>Content-Type</code></td> <td>The MIME type of the body of the request. Must be JSON.</td> <td>Yes</td> <td><code>application/json</code></td> </tr> </table><br/><p>Unless one or more errors and/or warnings occurs with the call, there is no response payload for this call. A successful call will return an HTTP status value of <i>204 No Content</i>.</p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Inventory\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Inventory\V1\Api\LocationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_location_key = 'merchant_location_key_example'; // string | A unique merchant-defined key (ID) for an inventory location. This value is passed in the call URI to indicate the inventory location to be updated. <br/><br/><b>Max length</b>: 36
$inventory_location = new \TNT\Ebay\Sell\Inventory\V1\Model\InventoryLocation(); // \TNT\Ebay\Sell\Inventory\V1\Model\InventoryLocation | The inventory location details to be updated (other than the address and geo co-ordinates).

try {
    $apiInstance->updateInventoryLocation($merchant_location_key, $inventory_location);
} catch (Exception $e) {
    echo 'Exception when calling LocationApi->updateInventoryLocation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_location_key** | **string**| A unique merchant-defined key (ID) for an inventory location. This value is passed in the call URI to indicate the inventory location to be updated. &lt;br/&gt;&lt;br/&gt;&lt;b&gt;Max length&lt;/b&gt;: 36 |
 **inventory_location** | [**\TNT\Ebay\Sell\Inventory\V1\Model\InventoryLocation**](../Model/InventoryLocation.md)| The inventory location details to be updated (other than the address and geo co-ordinates). |

### Return type

void (empty response body)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
