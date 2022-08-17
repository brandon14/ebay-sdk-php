# TNT\Ebay\Sell\Logistics\V1\ShipmentApi

All URIs are relative to https://api.ebay.com/sell/logistics/v1_beta.

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelShipment()**](ShipmentApi.md#cancelShipment) | **POST** /shipment/{shipmentId}/cancel | 
[**createFromShippingQuote()**](ShipmentApi.md#createFromShippingQuote) | **POST** /shipment/create_from_shipping_quote | 
[**downloadLabelFile()**](ShipmentApi.md#downloadLabelFile) | **GET** /shipment/{shipmentId}/download_label_file | 
[**getShipment()**](ShipmentApi.md#getShipment) | **GET** /shipment/{shipmentId} | 


## `cancelShipment()`

```php
cancelShipment($shipment_id): \TNT\Ebay\Sell\Logistics\V1\Model\Shipment
```



This method cancels the shipment associated with the specified shipment ID and the associated shipping label is deleted. When you cancel a shipment, the <b>totalShippingCost</b> of the canceled shipment is refunded to the account established by the user's billing agreement.  <br><br>Note that you cannot cancel a shipment if you have used the associated shipping label.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Logistics\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Logistics\V1\Api\ShipmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shipment_id = 'shipment_id_example'; // string | This path parameter specifies the unique eBay-assigned ID of the shipment to be canceled. The <b>shipmentId</b> value is generated and returned by a call to <b>createFromShippingQuote</b>.

try {
    $result = $apiInstance->cancelShipment($shipment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentApi->cancelShipment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipment_id** | **string**| This path parameter specifies the unique eBay-assigned ID of the shipment to be canceled. The &lt;b&gt;shipmentId&lt;/b&gt; value is generated and returned by a call to &lt;b&gt;createFromShippingQuote&lt;/b&gt;. |

### Return type

[**\TNT\Ebay\Sell\Logistics\V1\Model\Shipment**](../Model/Shipment.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createFromShippingQuote()`

```php
createFromShippingQuote($create_shipment_from_quote_request): \TNT\Ebay\Sell\Logistics\V1\Model\Shipment
```



This method creates a \"shipment\" based on the <b>shippingQuoteId</b> and <b>rateId</b> values supplied in the request. The rate identified by the <b>rateId</b> value specifies the carrier and service for the package shipment, and the rate ID must be contained in the shipping quote identified by the <b>shippingQuoteId</b> value. Call <b>createShippingQuote</b> to retrieve a set of live shipping rates.  <br><br>When you create a shipment, eBay generates a shipping label that you can download and use to ship your package.  <br><br>In a <b>createFromShippingQuote</b> request, sellers can include a list of shipping options they want to add to the base service quoted in the selected rate. The list of available shipping options is specific to each quoted rate and if available, the options are listed in the rate container of the of the shipping quote.  <br><br>In addition to a configurable return-to location and other details about the shipment, the response to this method includes:  <ul><li>The shipping carrier and service to be used for the package shipment</li> <li>A list of selected shipping options, if any</li> <li>The shipment tracking number</li> <li>The total shipping cost (the sum cost of the base shipping service and any added options)</li></ul> When you create a shipment, your billing agreement account is charged the sum of the <b>baseShippingCost</b> and the total cost of any additional shipping options you might have selected. Use the URL returned in <b>labelDownloadUrl</b> field, or call <b>downloadLabelFile</b> with the <b>shipmentId</b> value from the response, to download a shipping label for your package. <p class=\"tablenote\"><b>Important!</b> Sellers must set up their payment method with eBay before they can use this method to create a shipment and the associated shipping label.</p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Logistics\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Logistics\V1\Api\ShipmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_shipment_from_quote_request = new \TNT\Ebay\Sell\Logistics\V1\Model\CreateShipmentFromQuoteRequest(); // \TNT\Ebay\Sell\Logistics\V1\Model\CreateShipmentFromQuoteRequest | The create shipment from quote request.

try {
    $result = $apiInstance->createFromShippingQuote($create_shipment_from_quote_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentApi->createFromShippingQuote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_shipment_from_quote_request** | [**\TNT\Ebay\Sell\Logistics\V1\Model\CreateShipmentFromQuoteRequest**](../Model/CreateShipmentFromQuoteRequest.md)| The create shipment from quote request. |

### Return type

[**\TNT\Ebay\Sell\Logistics\V1\Model\Shipment**](../Model/Shipment.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `downloadLabelFile()`

```php
downloadLabelFile($shipment_id): string[]
```



This method returns the shipping label file that was generated for the <b>shipmentId</b> value specified in the request. Call <b>createFromShippingQuote</b> to generate a shipment ID.  <br><br>Use the <code>Accept</code> HTTP header to specify the format of the returned file. The default file format is a PDF file. <!-- Are other options available? -->

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Logistics\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Logistics\V1\Api\ShipmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shipment_id = 'shipment_id_example'; // string | This path parameter specifies the unique eBay-assigned ID of the shipment associated with the shipping label you want to download. The <b>shipmentId</b> value is generated and returned by a call to <b>createFromShippingQuote</b>.

try {
    $result = $apiInstance->downloadLabelFile($shipment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentApi->downloadLabelFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipment_id** | **string**| This path parameter specifies the unique eBay-assigned ID of the shipment associated with the shipping label you want to download. The &lt;b&gt;shipmentId&lt;/b&gt; value is generated and returned by a call to &lt;b&gt;createFromShippingQuote&lt;/b&gt;. |

### Return type

**string[]**

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/pdf`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getShipment()`

```php
getShipment($shipment_id): \TNT\Ebay\Sell\Logistics\V1\Model\Shipment
```



This method retrieves the shipment details for the specified shipment ID. Call <b>createFromShippingQuote</b> to generate a shipment ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Logistics\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Logistics\V1\Api\ShipmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shipment_id = 'shipment_id_example'; // string | This path parameter specifies the unique eBay-assigned ID of the shipment you want to retrieve. The <b>shipmentId</b> value is generated and returned by a call to <b>createFromShippingQuote</b>.

try {
    $result = $apiInstance->getShipment($shipment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentApi->getShipment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipment_id** | **string**| This path parameter specifies the unique eBay-assigned ID of the shipment you want to retrieve. The &lt;b&gt;shipmentId&lt;/b&gt; value is generated and returned by a call to &lt;b&gt;createFromShippingQuote&lt;/b&gt;. |

### Return type

[**\TNT\Ebay\Sell\Logistics\V1\Model\Shipment**](../Model/Shipment.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
