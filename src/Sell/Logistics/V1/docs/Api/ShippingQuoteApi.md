# TNT\Ebay\Sell\Logistics\V1\ShippingQuoteApi

All URIs are relative to https://api.ebay.com/sell/logistics/v1_beta.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createShippingQuote()**](ShippingQuoteApi.md#createShippingQuote) | **POST** /shipping_quote | 
[**getShippingQuote()**](ShippingQuoteApi.md#getShippingQuote) | **GET** /shipping_quote/{shippingQuoteId} | 


## `createShippingQuote()`

```php
createShippingQuote($x_ebay_c_marketplace_id, $shipping_quote_request): \TNT\Ebay\Sell\Logistics\V1\Model\ShippingQuote
```



The <b>createShippingQuote</b> method returns a <i>shipping quote </i> that contains a list of live \"rates.\"  <br><br>Each rate represents an offer made by a shipping carrier for a specific service and each offer has a live quote for the base service cost. Rates have a time window in which they are \"live,\" and rates expire when their purchase window ends. If offered by the carrier, rates can include shipping options (and their associated prices), and users can add any offered shipping option to the base service should they desire.  Also, depending on the services required, rates can also include pickup and delivery windows.  <br><br>Each rate is for a single package and is based on the following information: <ul><li>The shipping origin</li> <li>The shipping destination</li> <li>The package size (weight and dimensions)</li></ul>  Rates are identified by a unique eBay-assigned <b>rateId</b> and rates are based on price points, pickup and delivery time frames, and other user requirements. Because each rate offered must be compliant with the eBay shipping program, all rates reflect eBay-negotiated prices.  <br><br>The various rates returned in a shipping quote offer the user a choice from which they can choose a shipping service that best fits their needs. Select the rate for your shipment and using the associated <b>rateId</b>, call <b>createFromShippingQuote</b> to create a shipment and generate a shipping label that you can use to ship the package.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Logistics\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Logistics\V1\Api\ShippingQuoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_ebay_c_marketplace_id = 'x_ebay_c_marketplace_id_example'; // string | This header parameter specifies the eBay marketplace for the shipping quote that is being created. For a list of valid values, refer to the section <a href=\"/api-docs/static/rest-request-components.html#marketpl\" target=\"_blank\">Marketplace ID Values</a> in the <b>Using eBay RESTful APIs</b> guide.
$shipping_quote_request = new \TNT\Ebay\Sell\Logistics\V1\Model\ShippingQuoteRequest(); // \TNT\Ebay\Sell\Logistics\V1\Model\ShippingQuoteRequest | The request object for <b>createShippingQuote</b>.

try {
    $result = $apiInstance->createShippingQuote($x_ebay_c_marketplace_id, $shipping_quote_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingQuoteApi->createShippingQuote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_ebay_c_marketplace_id** | **string**| This header parameter specifies the eBay marketplace for the shipping quote that is being created. For a list of valid values, refer to the section &lt;a href&#x3D;\&quot;/api-docs/static/rest-request-components.html#marketpl\&quot; target&#x3D;\&quot;_blank\&quot;&gt;Marketplace ID Values&lt;/a&gt; in the &lt;b&gt;Using eBay RESTful APIs&lt;/b&gt; guide. |
 **shipping_quote_request** | [**\TNT\Ebay\Sell\Logistics\V1\Model\ShippingQuoteRequest**](../Model/ShippingQuoteRequest.md)| The request object for &lt;b&gt;createShippingQuote&lt;/b&gt;. |

### Return type

[**\TNT\Ebay\Sell\Logistics\V1\Model\ShippingQuote**](../Model/ShippingQuote.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getShippingQuote()`

```php
getShippingQuote($shipping_quote_id): \TNT\Ebay\Sell\Logistics\V1\Model\ShippingQuote
```



This method retrieves the complete details of the shipping quote associated with the specified <b>shippingQuoteId</b> value.  <br><br>A \"shipping quote\" pertains to a single specific package and contains a set of shipping \"rates\" that quote the cost to ship the package by different shipping carriers and services. The quotes are based on the package's origin, destination, and size.  <br><br>Call <b>createShippingQuote</b> to create a <b>shippingQuoteId</b>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Logistics\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Logistics\V1\Api\ShippingQuoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shipping_quote_id = 'shipping_quote_id_example'; // string | This path parameter specifies the unique eBay-assigned ID of the shipping quote you want to retrieve. The <b>shippingQuoteId</b> value is generated and returned by a call to <b>createShippingQuote</b>.

try {
    $result = $apiInstance->getShippingQuote($shipping_quote_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingQuoteApi->getShippingQuote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipping_quote_id** | **string**| This path parameter specifies the unique eBay-assigned ID of the shipping quote you want to retrieve. The &lt;b&gt;shippingQuoteId&lt;/b&gt; value is generated and returned by a call to &lt;b&gt;createShippingQuote&lt;/b&gt;. |

### Return type

[**\TNT\Ebay\Sell\Logistics\V1\Model\ShippingQuote**](../Model/ShippingQuote.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
