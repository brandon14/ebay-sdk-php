# TNT\Ebay\Sell\Account\V1\OnboardingApi

All URIs are relative to https://api.ebay.com/sell/account/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getPaymentsProgramOnboarding()**](OnboardingApi.md#getPaymentsProgramOnboarding) | **GET** /payments_program/{marketplace_id}/{payments_program_type}/onboarding | 


## `getPaymentsProgramOnboarding()`

```php
getPaymentsProgramOnboarding($marketplace_id, $payments_program_type): \TNT\Ebay\Sell\Account\V1\Model\PaymentsProgramOnboardingResponse
```



<span class=\"tablenote\"><b>Note:</b> This method is no longer applicable, as all seller accounts globally have been enabled for the new eBay payment and checkout flow.</span><br/><br/>This method retrieves a seller's onboarding status for a payments program for a specified marketplace. The overall onboarding status of the seller and the status of each onboarding step is returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Account\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Account\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Account\V1\Api\OnboardingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$marketplace_id = 'marketplace_id_example'; // string | The eBay marketplace ID associated with the onboarding status to retrieve.
$payments_program_type = 'payments_program_type_example'; // string | The type of payments program whose status is returned by the method.

try {
    $result = $apiInstance->getPaymentsProgramOnboarding($marketplace_id, $payments_program_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OnboardingApi->getPaymentsProgramOnboarding: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplace_id** | **string**| The eBay marketplace ID associated with the onboarding status to retrieve. |
 **payments_program_type** | **string**| The type of payments program whose status is returned by the method. |

### Return type

[**\TNT\Ebay\Sell\Account\V1\Model\PaymentsProgramOnboardingResponse**](../Model/PaymentsProgramOnboardingResponse.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
