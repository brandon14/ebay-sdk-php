# TNT\Ebay\Commerce\CatalogBeta\V1\ProductApi

All URIs are relative to https://api.ebay.com/commerce/catalog/v1_beta.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getProduct()**](ProductApi.md#getProduct) | **GET** /product/{epid} | 


## `getProduct()`

```php
getProduct($epid, $x_ebay_c_marketplace_id): \TNT\Ebay\Commerce\CatalogBeta\V1\Model\Product
```



This method retrieves details of the catalog product identified by the eBay product identifier (ePID) specified in the request. These details include the product's title and description, aspects and their values, associated images, applicable category IDs, and any recognized identifiers that apply to the product. <br /><br /> For a new listing, you can use the <b>search</b> method to identify candidate products on which to base the listing, then use the <b>getProduct</b> method to present the full details of those candidate products to the seller to make a a final selection.

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
$epid = 'epid_example'; // string | The ePID of the product being requested. This value can be discovered by issuing the <b>search</b> method and examining the value of the <b>productSummaries.epid</b> field for the desired returned product summary.
$x_ebay_c_marketplace_id = 'x_ebay_c_marketplace_id_example'; // string | This method also uses the <code>X-EBAY-C-MARKETPLACE-ID</code> header to identify the seller's eBay marketplace. It is required for all marketplaces except EBAY_US, which is the default. <b>Note:</b> This method is limited to <code>EBAY_US</code>, <code>EBAY_AU</code>, <code>EBAY_CA</code>, and <code>EBAY_GB</code> values.

try {
    $result = $apiInstance->getProduct($epid, $x_ebay_c_marketplace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->getProduct: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **epid** | **string**| The ePID of the product being requested. This value can be discovered by issuing the &lt;b&gt;search&lt;/b&gt; method and examining the value of the &lt;b&gt;productSummaries.epid&lt;/b&gt; field for the desired returned product summary. |
 **x_ebay_c_marketplace_id** | **string**| This method also uses the &lt;code&gt;X-EBAY-C-MARKETPLACE-ID&lt;/code&gt; header to identify the seller&#39;s eBay marketplace. It is required for all marketplaces except EBAY_US, which is the default. &lt;b&gt;Note:&lt;/b&gt; This method is limited to &lt;code&gt;EBAY_US&lt;/code&gt;, &lt;code&gt;EBAY_AU&lt;/code&gt;, &lt;code&gt;EBAY_CA&lt;/code&gt;, and &lt;code&gt;EBAY_GB&lt;/code&gt; values. | [optional]

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
