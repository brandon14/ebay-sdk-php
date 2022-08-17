# TNT\Ebay\Sell\Account\V1\AdvertisingEligibilityApi

All URIs are relative to https://api.ebay.com/sell/account/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAdvertisingEligibility()**](AdvertisingEligibilityApi.md#getAdvertisingEligibility) | **GET** /advertising_eligibility | 


## `getAdvertisingEligibility()`

```php
getAdvertisingEligibility($x_ebay_c_marketplace_id, $program_types): \TNT\Ebay\Sell\Account\V1\Model\SellerEligibilityMultiProgramResponse
```



This method allows developers to check the seller eligibility status for eBay advertising programs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Account\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Account\V1\Api\AdvertisingEligibilityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_ebay_c_marketplace_id = 'x_ebay_c_marketplace_id_example'; // string | The unique identifier of the eBay marketplace for which the seller eligibility status shall be checked.<br /><br /><span class=\"tablenote\"><b>Note:</b> This value is case-sensitive.</span>
$program_types = 'program_types_example'; // string | A comma-separated list of eBay advertising programs.<br /><br /><span class=\"tablenote\"><b>Tip:</b> See the <a href=\"/api-docs/sell/account/types/plser:AdvertisingProgramEnum\"> AdvertisingProgramEnum</a> type for possible values.</span><br /><br />If no programs are specified, the results will be returned for all programs.

try {
    $result = $apiInstance->getAdvertisingEligibility($x_ebay_c_marketplace_id, $program_types);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisingEligibilityApi->getAdvertisingEligibility: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_ebay_c_marketplace_id** | **string**| The unique identifier of the eBay marketplace for which the seller eligibility status shall be checked.&lt;br /&gt;&lt;br /&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; This value is case-sensitive.&lt;/span&gt; |
 **program_types** | **string**| A comma-separated list of eBay advertising programs.&lt;br /&gt;&lt;br /&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Tip:&lt;/b&gt; See the &lt;a href&#x3D;\&quot;/api-docs/sell/account/types/plser:AdvertisingProgramEnum\&quot;&gt; AdvertisingProgramEnum&lt;/a&gt; type for possible values.&lt;/span&gt;&lt;br /&gt;&lt;br /&gt;If no programs are specified, the results will be returned for all programs. | [optional]

### Return type

[**\TNT\Ebay\Sell\Account\V1\Model\SellerEligibilityMultiProgramResponse**](../Model/SellerEligibilityMultiProgramResponse.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
