# TNT\Ebay\Sell\Account\V1\SubscriptionApi

All URIs are relative to https://api.ebay.com/sell/account/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getSubscription()**](SubscriptionApi.md#getSubscription) | **GET** /subscription | 


## `getSubscription()`

```php
getSubscription($limit, $continuation_token): \TNT\Ebay\Sell\Account\V1\Model\SubscriptionResponse
```



This method retrieves a list of subscriptions associated with the seller account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Account\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Account\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Account\V1\Api\SubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 'limit_example'; // string | This field is for future use.
$continuation_token = 'continuation_token_example'; // string | This field is for future use.

try {
    $result = $apiInstance->getSubscription($limit, $continuation_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->getSubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **string**| This field is for future use. | [optional]
 **continuation_token** | **string**| This field is for future use. | [optional]

### Return type

[**\TNT\Ebay\Sell\Account\V1\Model\SubscriptionResponse**](../Model/SubscriptionResponse.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
