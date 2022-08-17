# TNT\Ebay\Commerce\Notification\V1\ConfigApi

All URIs are relative to https://api.ebay.com/commerce/notification/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getConfig()**](ConfigApi.md#getConfig) | **GET** /config | 
[**updateConfig()**](ConfigApi.md#updateConfig) | **PUT** /config | 


## `getConfig()`

```php
getConfig(): \TNT\Ebay\Commerce\Notification\V1\Model\Config
```



This method allows applications to retrieve a previously created configuration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Commerce\Notification\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Commerce\Notification\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Commerce\Notification\V1\Api\ConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getConfig();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigApi->getConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\TNT\Ebay\Commerce\Notification\V1\Model\Config**](../Model/Config.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateConfig()`

```php
updateConfig($config)
```



This method allows applications to create a new configuration or update an existing configuration. This app-level configuration allows developers to set up alerts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Commerce\Notification\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Commerce\Notification\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Commerce\Notification\V1\Api\ConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$config = new \TNT\Ebay\Commerce\Notification\V1\Model\Config(); // \TNT\Ebay\Commerce\Notification\V1\Model\Config | The configurations for this application.

try {
    $apiInstance->updateConfig($config);
} catch (Exception $e) {
    echo 'Exception when calling ConfigApi->updateConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **config** | [**\TNT\Ebay\Commerce\Notification\V1\Model\Config**](../Model/Config.md)| The configurations for this application. | [optional]

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
