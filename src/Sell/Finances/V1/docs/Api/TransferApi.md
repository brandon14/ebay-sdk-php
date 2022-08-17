# TNT\Ebay\Sell\Finances\V1\TransferApi

All URIs are relative to https://apiz.ebay.com/sell/finances/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getTransfer()**](TransferApi.md#getTransfer) | **GET** /transfer/{transfer_Id} | 


## `getTransfer()`

```php
getTransfer($transfer_id): \TNT\Ebay\Sell\Finances\V1\Model\Transfer
```



This method retrieves detailed information regarding a <code>TRANSFER</code> transaction type. A <code>TRANSFER</code> is a  monetary transaction type that involves a seller transferring money to eBay for reimbursement of one or more charges. For example, when a seller reimburses eBay for a buyer refund.<br><br>If an ID is passed into the URI that is an identifier for another transaction type, this call will return an http status code of <code>404 Not found</code>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Finances\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Finances\V1\Api\TransferApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transfer_id = 'transfer_id_example'; // string | The unique identifier of the <code>TRANSFER</code> transaction type you wish to retrieve.

try {
    $result = $apiInstance->getTransfer($transfer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransferApi->getTransfer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transfer_id** | **string**| The unique identifier of the &lt;code&gt;TRANSFER&lt;/code&gt; transaction type you wish to retrieve. |

### Return type

[**\TNT\Ebay\Sell\Finances\V1\Model\Transfer**](../Model/Transfer.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
