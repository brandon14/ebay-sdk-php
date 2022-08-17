# TNT\Ebay\Buy\Order\V2\GuestPurchaseOrderApi

All URIs are relative to https://apix.ebay.com/buy/order/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getGuestPurchaseOrder()**](GuestPurchaseOrderApi.md#getGuestPurchaseOrder) | **GET** /guest_purchase_order/{purchaseOrderId} | 


## `getGuestPurchaseOrder()`

```php
getGuestPurchaseOrder($purchase_order_id): \TNT\Ebay\Buy\Order\V2\Model\GuestPurchaseOrderV2
```



<span class=\"tablenote\"><b>Note:</b> The Order API (v2) currently only supports the guest payment/checkout flow. If you need to support member payment/checkout flow, use the <a href=\"/api-docs/buy/order_v1/resources/methods\">v1_beta version</a> of the Order API.</span><br /><br /><a href=\"https://developer.ebay.com/api-docs/static/versioning.html#limited\" target=\"_blank\"><img src=\"/cms/img/docs/partners-api.svg\" class=\"legend-icon partners-icon\"  alt=\"Limited Release\" title=\"Limited Release\" />(Limited Release)</a> This method is only available to select developers approved by business units.<br /><br />This method retrieves the details about a specific guest purchase order. It returns the line items, including purchase  order status, dates created and modified, item quantity and listing data, payment and shipping information, and prices, taxes, discounts and credits.<br /><br />The <b>purchaseOrderId</b> is passed in as a URI parameter and is required.<br /><br /><span class=\"tablenote\"><b>Note:</b> The <b>purchaseOrderId</b> value is returned in the call-back URL that is sent through the new eBay pay widget. For more information about eBay managed payments and the new Order API payment flow, see <a href=\"/api-docs/buy/static/api-order.html\">Order API</a> in the Buying Integration Guide.</span><br /><br />You can use this method to not only get the details of a purchase order, but to check the value of the <a href=\"#response.purchaseOrderPaymentStatus\">purchaseOrderPaymentStatus</a> field to determine if the order has been paid for. If the order has been paid for, this field will return <code>PAID</code>.<br /><br />For a list of supported sites and other restrictions, see <a href=\"/api-docs/buy/order/overview.html#API\">API Restrictions</a> in the Order API overview.<br /><br />The URLs for this method are:<ul><li><b>Production URL:</b> <code>https://api.ebay.com/buy/order/v2/guest_purchase_order/{purchaseOrderId}</code></li><li><b>Sandbox URL:</b> <code>https://api.sandbox.ebay.com/buy/order/v2/guest_purchase_order/{purchaseOrderId}</code></li></ul>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Buy\Order\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Buy\Order\V2\Api\GuestPurchaseOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$purchase_order_id = 'purchase_order_id_example'; // string | The unique identifier of a purchase order made by a guest buyer, for which details are to be retrieved.<br /><br /><span class=\"tablenote\"><b>Note:</b> This value is returned in the response URL that is sent through the new eBay pay widget. For more information about eBay managed payments and the new Order API payment flow, see <a href=\"/api-docs/buy/static/api-order.html\">Order API</a> in the Buying Integration Guide.</span>

try {
    $result = $apiInstance->getGuestPurchaseOrder($purchase_order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GuestPurchaseOrderApi->getGuestPurchaseOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **purchase_order_id** | **string**| The unique identifier of a purchase order made by a guest buyer, for which details are to be retrieved.&lt;br /&gt;&lt;br /&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; This value is returned in the response URL that is sent through the new eBay pay widget. For more information about eBay managed payments and the new Order API payment flow, see &lt;a href&#x3D;\&quot;/api-docs/buy/static/api-order.html\&quot;&gt;Order API&lt;/a&gt; in the Buying Integration Guide.&lt;/span&gt; |

### Return type

[**\TNT\Ebay\Buy\Order\V2\Model\GuestPurchaseOrderV2**](../Model/GuestPurchaseOrderV2.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
