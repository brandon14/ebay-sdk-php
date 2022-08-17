# TNT\Ebay\Commerce\Notification\V1\DestinationApi

All URIs are relative to https://api.ebay.com/commerce/notification/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createDestination()**](DestinationApi.md#createDestination) | **POST** /destination | 
[**deleteDestination()**](DestinationApi.md#deleteDestination) | **DELETE** /destination/{destination_id} | 
[**getDestination()**](DestinationApi.md#getDestination) | **GET** /destination/{destination_id} | 
[**getDestinations()**](DestinationApi.md#getDestinations) | **GET** /destination | 
[**updateDestination()**](DestinationApi.md#updateDestination) | **PUT** /destination/{destination_id} | 


## `createDestination()`

```php
createDestination($destination_request): object
```



This method allows applications to create a destination. A destination is an endpoint that receives HTTP push notifications.<br /><br />A single destination for all topics is valid, as is individual destinations for each topic.<br /><br />To update a destination, use the <strong>updateDestination</strong> call.<br /><br />The destination created will need to be referenced while creating or updating a subscription to a topic.<br/><br/><span class=\"tablenote\"><b>Note:</b> The destination should be created and ready to respond with the expected <b>challengeResponse</b> for the endpoint to be registered successfully. Refer to the <a href=\"/api-docs/commerce/notification/overview.html\">Notification API overview</a> for more information.</span>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Commerce\Notification\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Commerce\Notification\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Commerce\Notification\V1\Api\DestinationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$destination_request = new \TNT\Ebay\Commerce\Notification\V1\Model\DestinationRequest(); // \TNT\Ebay\Commerce\Notification\V1\Model\DestinationRequest | The create destination request.

try {
    $result = $apiInstance->createDestination($destination_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DestinationApi->createDestination: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **destination_request** | [**\TNT\Ebay\Commerce\Notification\V1\Model\DestinationRequest**](../Model/DestinationRequest.md)| The create destination request. | [optional]

### Return type

**object**

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteDestination()`

```php
deleteDestination($destination_id)
```



This method provides applications a way to delete a destination.<br /><br />The same destination ID can be used by many destinations.<br /><br />Trying to delete an active destination results in an error. You can disable a subscription, and when the destination is no longer in use, you can delete it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Commerce\Notification\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Commerce\Notification\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Commerce\Notification\V1\Api\DestinationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$destination_id = 'destination_id_example'; // string | The unique identifier for the destination.

try {
    $apiInstance->deleteDestination($destination_id);
} catch (Exception $e) {
    echo 'Exception when calling DestinationApi->deleteDestination: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **destination_id** | **string**| The unique identifier for the destination. |

### Return type

void (empty response body)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDestination()`

```php
getDestination($destination_id): \TNT\Ebay\Commerce\Notification\V1\Model\Destination
```



This method allows applications to fetch the details for a destination. The details include the destination name, status, and configuration, including the endpoint and verification token.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Commerce\Notification\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Commerce\Notification\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Commerce\Notification\V1\Api\DestinationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$destination_id = 'destination_id_example'; // string | The unique identifier for the destination.

try {
    $result = $apiInstance->getDestination($destination_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DestinationApi->getDestination: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **destination_id** | **string**| The unique identifier for the destination. |

### Return type

[**\TNT\Ebay\Commerce\Notification\V1\Model\Destination**](../Model/Destination.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDestinations()`

```php
getDestinations($limit, $continuation_token): \TNT\Ebay\Commerce\Notification\V1\Model\DestinationSearchResponse
```



This method allows applications to retrieve a paginated collection of destination resources and related details. The details include the destination names, statuses, and configurations, including the endpoints and verification tokens.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Commerce\Notification\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Commerce\Notification\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Commerce\Notification\V1\Api\DestinationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 'limit_example'; // string | The number of items, from the result set, returned in a single page. Range is from 10-100. If this parameter is omitted, the default value is used.<br/><br/><b>Default:</b> 20<br/><br/><b>Maximum:</b> 100 items per page
$continuation_token = 'continuation_token_example'; // string | The continuation token for the next set of results.

try {
    $result = $apiInstance->getDestinations($limit, $continuation_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DestinationApi->getDestinations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **string**| The number of items, from the result set, returned in a single page. Range is from 10-100. If this parameter is omitted, the default value is used.&lt;br/&gt;&lt;br/&gt;&lt;b&gt;Default:&lt;/b&gt; 20&lt;br/&gt;&lt;br/&gt;&lt;b&gt;Maximum:&lt;/b&gt; 100 items per page | [optional]
 **continuation_token** | **string**| The continuation token for the next set of results. | [optional]

### Return type

[**\TNT\Ebay\Commerce\Notification\V1\Model\DestinationSearchResponse**](../Model/DestinationSearchResponse.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateDestination()`

```php
updateDestination($destination_id, $destination_request)
```



This method allows applications to update a destination.<br/><br/><span class=\"tablenote\"><b>Note:</b> The destination should be created and ready to respond with the expected <b>challengeResponse</b> for the endpoint to be registered successfully. Refer to the <a href=\"/api-docs/commerce/notification/overview.html\">Notification API overview</a> for more information.</span>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Commerce\Notification\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Commerce\Notification\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Commerce\Notification\V1\Api\DestinationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$destination_id = 'destination_id_example'; // string | The unique identifier for the destination.
$destination_request = new \TNT\Ebay\Commerce\Notification\V1\Model\DestinationRequest(); // \TNT\Ebay\Commerce\Notification\V1\Model\DestinationRequest | The create subscription request.

try {
    $apiInstance->updateDestination($destination_id, $destination_request);
} catch (Exception $e) {
    echo 'Exception when calling DestinationApi->updateDestination: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **destination_id** | **string**| The unique identifier for the destination. |
 **destination_request** | [**\TNT\Ebay\Commerce\Notification\V1\Model\DestinationRequest**](../Model/DestinationRequest.md)| The create subscription request. | [optional]

### Return type

void (empty response body)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
