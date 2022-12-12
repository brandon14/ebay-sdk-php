# TNT\Ebay\Sell\Account\V1\PaymentsProgramApi

All URIs are relative to https://api.ebay.com/sell/account/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getPaymentsProgram()**](PaymentsProgramApi.md#getPaymentsProgram) | **GET** /payments_program/{marketplace_id}/{payments_program_type} | 


## `getPaymentsProgram()`

```php
getPaymentsProgram($marketplace_id, $payments_program_type): \TNT\Ebay\Sell\Account\V1\Model\PaymentsProgramResponse
```



<span class=\"tablenote\"><b>Note:</b> This method is no longer applicable, as all seller accounts globally have been enabled for the new eBay payment and checkout flow.</span><br/><br/>This method returns whether or not the user is opted-in to the specified payments program. Sellers opt-in to payments programs by marketplace and you use the <b>marketplace_id</b> path parameter to specify the marketplace of the status flag you want returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Account\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Account\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Account\V1\Api\PaymentsProgramApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$marketplace_id = 'marketplace_id_example'; // string | This path parameter specifies the eBay marketplace of the payments program for which you want to retrieve the seller's status.
$payments_program_type = 'payments_program_type_example'; // string | This path parameter specifies the payments program whose status is returned by the call.

try {
    $result = $apiInstance->getPaymentsProgram($marketplace_id, $payments_program_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsProgramApi->getPaymentsProgram: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplace_id** | **string**| This path parameter specifies the eBay marketplace of the payments program for which you want to retrieve the seller&#39;s status. |
 **payments_program_type** | **string**| This path parameter specifies the payments program whose status is returned by the call. |

### Return type

[**\TNT\Ebay\Sell\Account\V1\Model\PaymentsProgramResponse**](../Model/PaymentsProgramResponse.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
