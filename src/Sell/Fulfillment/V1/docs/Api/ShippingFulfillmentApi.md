# TNT\Ebay\Sell\Fulfillment\V1\ShippingFulfillmentApi

All URIs are relative to https://api.ebay.com/sell/fulfillment/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createShippingFulfillment()**](ShippingFulfillmentApi.md#createShippingFulfillment) | **POST** /order/{orderId}/shipping_fulfillment | 
[**getShippingFulfillment()**](ShippingFulfillmentApi.md#getShippingFulfillment) | **GET** /order/{orderId}/shipping_fulfillment/{fulfillmentId} | 
[**getShippingFulfillments()**](ShippingFulfillmentApi.md#getShippingFulfillments) | **GET** /order/{orderId}/shipping_fulfillment | 


## `createShippingFulfillment()`

```php
createShippingFulfillment($order_id, $shipping_fulfillment_details): object
```



When you group an order's line items into one or more packages, each package requires a corresponding plan for handling, addressing, and shipping; this is a <i>shipping fulfillment</i>. For each package, execute this call once to generate a shipping fulfillment associated with that package. <br /><br /> <span class=\"tablenote\"><strong>Note:</strong> A single line item in an order can consist of multiple units of a purchased item, and one unit can consist of multiple parts or components. Although these components might be provided by the manufacturer in separate packaging, the seller must include all components of a given line item in the same package.</span> <br /><br />Before using this call for a given package, you must determine which line items are in the package. If the package has been shipped, you should provide the date of shipment in the request. If not provided, it will default to the current date and time.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Fulfillment\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Fulfillment\V1\Api\ShippingFulfillmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string | The unique identifier of the order. Order ID values are shown in My eBay/Seller Hub, and are also returned by the <b>getOrders</b> method in the <b>orders.orderId</b> field. <br/><br/><span class=\"tablenote\"><strong>Note:</strong> A new order ID format was introduced to all eBay APIs (legacy and REST) in June 2019. In REST APIs that return Order IDs, including the Fulfillment API, all order IDs are returned in the new format, but the <strong>createShippingFulfillment</strong> method will accept both the legacy and new format order ID. The new format is a non-parsable string, globally unique across all eBay marketplaces, and consistent for both single line item and multiple line item orders. These order identifiers will be automatically generated after buyer payment, and unlike in the past, instead of just being known and exposed to the seller, these unique order identifiers will also be known and used/referenced by the buyer and eBay customer support. </span>
$shipping_fulfillment_details = new \TNT\Ebay\Sell\Fulfillment\V1\Model\ShippingFulfillmentDetails(); // \TNT\Ebay\Sell\Fulfillment\V1\Model\ShippingFulfillmentDetails | fulfillment payload

try {
    $result = $apiInstance->createShippingFulfillment($order_id, $shipping_fulfillment_details);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingFulfillmentApi->createShippingFulfillment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| The unique identifier of the order. Order ID values are shown in My eBay/Seller Hub, and are also returned by the &lt;b&gt;getOrders&lt;/b&gt; method in the &lt;b&gt;orders.orderId&lt;/b&gt; field. &lt;br/&gt;&lt;br/&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;strong&gt;Note:&lt;/strong&gt; A new order ID format was introduced to all eBay APIs (legacy and REST) in June 2019. In REST APIs that return Order IDs, including the Fulfillment API, all order IDs are returned in the new format, but the &lt;strong&gt;createShippingFulfillment&lt;/strong&gt; method will accept both the legacy and new format order ID. The new format is a non-parsable string, globally unique across all eBay marketplaces, and consistent for both single line item and multiple line item orders. These order identifiers will be automatically generated after buyer payment, and unlike in the past, instead of just being known and exposed to the seller, these unique order identifiers will also be known and used/referenced by the buyer and eBay customer support. &lt;/span&gt; |
 **shipping_fulfillment_details** | [**\TNT\Ebay\Sell\Fulfillment\V1\Model\ShippingFulfillmentDetails**](../Model/ShippingFulfillmentDetails.md)| fulfillment payload |

### Return type

**object**

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getShippingFulfillment()`

```php
getShippingFulfillment($fulfillment_id, $order_id): \TNT\Ebay\Sell\Fulfillment\V1\Model\ShippingFulfillment
```



Use this call to retrieve the contents of a fulfillment based on its unique identifier, <b>fulfillmentId</b> (combined with the associated order's <b>orderId</b>). The <b>fulfillmentId</b> value was originally generated by the <b>createShippingFulfillment</b> call, and is returned by the <b>getShippingFulfillments</b> call in the <b>members.fulfillmentId</b> field.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Fulfillment\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Fulfillment\V1\Api\ShippingFulfillmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fulfillment_id = 'fulfillment_id_example'; // string | The unique identifier of the fulfillment. This eBay-generated value was created by the <b>Create Shipping Fulfillment</b> call, and returned by the <b>getShippingFulfillments</b> call in the <b>fulfillments.fulfillmentId</b> field; for example, <code>9405509699937003457459</code>.
$order_id = 'order_id_example'; // string | The unique identifier of the order. Order ID values are shown in My eBay/Seller Hub, and are also returned by the <b>getOrders</b> method in the <b>orders.orderId</b> field. <br/><br/><span class=\"tablenote\"><strong>Note:</strong> A new order ID format was introduced to all eBay APIs (legacy and REST) in June 2019. In REST APIs that return Order IDs, including the Fulfillment API, all order IDs are returned in the new format, but the <strong>getShippingFulfillment</strong> method will accept both the legacy and new format order ID. The new format is a non-parsable string, globally unique across all eBay marketplaces, and consistent for both single line item and multiple line item orders. These order identifiers will be automatically generated after buyer payment, and unlike in the past, instead of just being known and exposed to the seller, these unique order identifiers will also be known and used/referenced by the buyer and eBay customer support. </span>

try {
    $result = $apiInstance->getShippingFulfillment($fulfillment_id, $order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingFulfillmentApi->getShippingFulfillment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fulfillment_id** | **string**| The unique identifier of the fulfillment. This eBay-generated value was created by the &lt;b&gt;Create Shipping Fulfillment&lt;/b&gt; call, and returned by the &lt;b&gt;getShippingFulfillments&lt;/b&gt; call in the &lt;b&gt;fulfillments.fulfillmentId&lt;/b&gt; field; for example, &lt;code&gt;9405509699937003457459&lt;/code&gt;. |
 **order_id** | **string**| The unique identifier of the order. Order ID values are shown in My eBay/Seller Hub, and are also returned by the &lt;b&gt;getOrders&lt;/b&gt; method in the &lt;b&gt;orders.orderId&lt;/b&gt; field. &lt;br/&gt;&lt;br/&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;strong&gt;Note:&lt;/strong&gt; A new order ID format was introduced to all eBay APIs (legacy and REST) in June 2019. In REST APIs that return Order IDs, including the Fulfillment API, all order IDs are returned in the new format, but the &lt;strong&gt;getShippingFulfillment&lt;/strong&gt; method will accept both the legacy and new format order ID. The new format is a non-parsable string, globally unique across all eBay marketplaces, and consistent for both single line item and multiple line item orders. These order identifiers will be automatically generated after buyer payment, and unlike in the past, instead of just being known and exposed to the seller, these unique order identifiers will also be known and used/referenced by the buyer and eBay customer support. &lt;/span&gt; |

### Return type

[**\TNT\Ebay\Sell\Fulfillment\V1\Model\ShippingFulfillment**](../Model/ShippingFulfillment.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getShippingFulfillments()`

```php
getShippingFulfillments($order_id): \TNT\Ebay\Sell\Fulfillment\V1\Model\ShippingFulfillmentPagedCollection
```



Use this call to retrieve the contents of all fulfillments currently defined for a specified order based on the order's unique identifier, <b>orderId</b>. This value is returned in the <b>getOrders</b> call's <b>members.orderId</b> field when you search for orders by creation date or shipment status.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Fulfillment\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Fulfillment\V1\Api\ShippingFulfillmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string | The unique identifier of the order. Order ID values are shown in My eBay/Seller Hub, and are also returned by the <b>getOrders</b> method in the <b>orders.orderId</b> field. <br/><br/><span class=\"tablenote\"><strong>Note:</strong> A new order ID format was introduced to all eBay APIs (legacy and REST) in June 2019. In REST APIs that return Order IDs, including the Fulfillment API, all order IDs are returned in the new format, but the <strong>getShippingFulfillments</strong> method will accept both the legacy and new format order ID. The new format is a non-parsable string, globally unique across all eBay marketplaces, and consistent for both single line item and multiple line item orders. These order identifiers will be automatically generated after buyer payment, and unlike in the past, instead of just being known and exposed to the seller, these unique order identifiers will also be known and used/referenced by the buyer and eBay customer support. </span>

try {
    $result = $apiInstance->getShippingFulfillments($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingFulfillmentApi->getShippingFulfillments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| The unique identifier of the order. Order ID values are shown in My eBay/Seller Hub, and are also returned by the &lt;b&gt;getOrders&lt;/b&gt; method in the &lt;b&gt;orders.orderId&lt;/b&gt; field. &lt;br/&gt;&lt;br/&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;strong&gt;Note:&lt;/strong&gt; A new order ID format was introduced to all eBay APIs (legacy and REST) in June 2019. In REST APIs that return Order IDs, including the Fulfillment API, all order IDs are returned in the new format, but the &lt;strong&gt;getShippingFulfillments&lt;/strong&gt; method will accept both the legacy and new format order ID. The new format is a non-parsable string, globally unique across all eBay marketplaces, and consistent for both single line item and multiple line item orders. These order identifiers will be automatically generated after buyer payment, and unlike in the past, instead of just being known and exposed to the seller, these unique order identifiers will also be known and used/referenced by the buyer and eBay customer support. &lt;/span&gt; |

### Return type

[**\TNT\Ebay\Sell\Fulfillment\V1\Model\ShippingFulfillmentPagedCollection**](../Model/ShippingFulfillmentPagedCollection.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
