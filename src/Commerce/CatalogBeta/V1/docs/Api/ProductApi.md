# TNT\Ebay\Commerce\CatalogBeta\V1\ProductApi

All URIs are relative to https://api.ebay.com/commerce/catalog/v1_beta.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getProduct()**](ProductApi.md#getProduct) | **GET** /product/{epid} | 


## `getProduct()`

```php
getProduct($epid): \TNT\Ebay\Commerce\CatalogBeta\V1\Model\Product
```



This call retrieves details of the catalog product identified by the eBay product identifier (ePID) specified in the request. These details include the product's title and description, aspects and their values, associated images, applicable category IDs, and any recognized identifiers that apply to the product. For a new listing, you can use the search call to identify candidate products on which to base the listing, then use the getProduct call to present the full details of those candidate products to the seller to make a a final selection.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Commerce\CatalogBeta\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Commerce\CatalogBeta\V1\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$epid = 'epid_example'; // string | The ePID of the product being requested. This value can be discovered by issuing the search call and examining the value of the productSummaries.epid field for the desired returned product summary.

try {
    $result = $apiInstance->getProduct($epid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->getProduct: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **epid** | **string**| The ePID of the product being requested. This value can be discovered by issuing the search call and examining the value of the productSummaries.epid field for the desired returned product summary. |

### Return type

[**\TNT\Ebay\Commerce\CatalogBeta\V1\Model\Product**](../Model/Product.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
