# TNT\Ebay\Buy\Order\V2\GuestCheckoutSessionApi

All URIs are relative to https://apix.ebay.com/buy/order/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**applyGuestCoupon()**](GuestCheckoutSessionApi.md#applyGuestCoupon) | **POST** /guest_checkout_session/{checkoutSessionId}/apply_coupon | 
[**getGuestCheckoutSession()**](GuestCheckoutSessionApi.md#getGuestCheckoutSession) | **GET** /guest_checkout_session/{checkoutSessionId} | 
[**initiateGuestCheckoutSession()**](GuestCheckoutSessionApi.md#initiateGuestCheckoutSession) | **POST** /guest_checkout_session/initiate | 
[**removeGuestCoupon()**](GuestCheckoutSessionApi.md#removeGuestCoupon) | **POST** /guest_checkout_session/{checkoutSessionId}/remove_coupon | 
[**updateGuestQuantity()**](GuestCheckoutSessionApi.md#updateGuestQuantity) | **POST** /guest_checkout_session/{checkoutSessionId}/update_quantity | 
[**updateGuestShippingAddress()**](GuestCheckoutSessionApi.md#updateGuestShippingAddress) | **POST** /guest_checkout_session/{checkoutSessionId}/update_shipping_address | 
[**updateGuestShippingOption()**](GuestCheckoutSessionApi.md#updateGuestShippingOption) | **POST** /guest_checkout_session/{checkoutSessionId}/update_shipping_option | 


## `applyGuestCoupon()`

```php
applyGuestCoupon($checkout_session_id, $x_ebay_c_marketplace_id, $coupon_request): \TNT\Ebay\Buy\Order\V2\Model\GuestCheckoutSessionResponseV2
```



<span class=\"tablenote\"><b>Note:</b> The Order API (v2) currently only supports the guest payment/checkout flow. If you need to support member payment/checkout flow, use the <a href=\"/api-docs/buy/order_v1/resources/methods\">v1_beta version</a> of the Order API.</span><br /><br /><a href=\"https://developer.ebay.com/api-docs/static/versioning.html#limited\" target=\"_blank\"><img src=\"/cms/img/docs/partners-api.svg\" class=\"legend-icon partners-icon\"  alt=\"Limited Release\" title=\"Limited Release\" />(Limited Release)</a> This method is only available to select developers approved by business units.<br /><br />This method adds a coupon to an eBay guest checkout session and applies it to all the eligible items in the order.<br /><br />The <b>checkoutSessionId</b> is passed in as a URI parameter and is required. The redemption code of the coupon is in the payload and is also required.<br /><br />For a list of supported sites and other restrictions, see <a href=\"/api-docs/buy/order/overview.html#API\">API Restrictions</a> in the Order API overview.<br /><br />The URLs for this method are:<ul><li><b>Production URL:</b> <code>https://apix.ebay.com/buy/order/v2/guest_checkout_session/{checkoutSessionId}/apply_coupon</code></li><li><b>Sandbox URL:</b> <code>https://apix.sandbox.ebay.com/buy/order/v2/guest_checkout_session/{checkoutSessionId}/apply_coupon</code></li></ul>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Buy\Order\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Buy\Order\V2\Api\GuestCheckoutSessionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$checkout_session_id = 'checkout_session_id_example'; // string | The eBay-assigned session ID, for a specific eBay marketplace, that is returned by the <b> initiateGuestCheckoutSession</b> method.<br /><br /><span class=\"tablenote\"><b>Note:</b> When using this ID, the X-EBAY-C-MARKETPLACE-ID value and developer App ID must be the same as that used when this guest checkout session was created. See <a href=\"/api-docs/buy/order/overview.html#checkout-restriction\">Checkout session restrictions</a> in the Buy Integration Guide for details.</span>
$x_ebay_c_marketplace_id = 'x_ebay_c_marketplace_id_example'; // string | A header that identifies the user's business context and is specified using a marketplace ID value.<br /><br /><span class=\"tablenote\"><b>Note:</b> This header does <i>not</i> indicate a language preference or consumer location.</span><br /><br />See <a href=\"/api-docs/static/rest-request-components.html#marketpl\" target=\"_blank\">Marketplace ID values</a> for a list of supported values.
$coupon_request = new \TNT\Ebay\Buy\Order\V2\Model\CouponRequest(); // \TNT\Ebay\Buy\Order\V2\Model\CouponRequest | The container for the fields used to apply a coupon to a guest checkout session.

try {
    $result = $apiInstance->applyGuestCoupon($checkout_session_id, $x_ebay_c_marketplace_id, $coupon_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GuestCheckoutSessionApi->applyGuestCoupon: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **checkout_session_id** | **string**| The eBay-assigned session ID, for a specific eBay marketplace, that is returned by the &lt;b&gt; initiateGuestCheckoutSession&lt;/b&gt; method.&lt;br /&gt;&lt;br /&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; When using this ID, the X-EBAY-C-MARKETPLACE-ID value and developer App ID must be the same as that used when this guest checkout session was created. See &lt;a href&#x3D;\&quot;/api-docs/buy/order/overview.html#checkout-restriction\&quot;&gt;Checkout session restrictions&lt;/a&gt; in the Buy Integration Guide for details.&lt;/span&gt; |
 **x_ebay_c_marketplace_id** | **string**| A header that identifies the user&#39;s business context and is specified using a marketplace ID value.&lt;br /&gt;&lt;br /&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; This header does &lt;i&gt;not&lt;/i&gt; indicate a language preference or consumer location.&lt;/span&gt;&lt;br /&gt;&lt;br /&gt;See &lt;a href&#x3D;\&quot;/api-docs/static/rest-request-components.html#marketpl\&quot; target&#x3D;\&quot;_blank\&quot;&gt;Marketplace ID values&lt;/a&gt; for a list of supported values. |
 **coupon_request** | [**\TNT\Ebay\Buy\Order\V2\Model\CouponRequest**](../Model/CouponRequest.md)| The container for the fields used to apply a coupon to a guest checkout session. | [optional]

### Return type

[**\TNT\Ebay\Buy\Order\V2\Model\GuestCheckoutSessionResponseV2**](../Model/GuestCheckoutSessionResponseV2.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGuestCheckoutSession()`

```php
getGuestCheckoutSession($checkout_session_id, $x_ebay_c_marketplace_id): \TNT\Ebay\Buy\Order\V2\Model\GuestCheckoutSessionResponseV2
```



<span class=\"tablenote\"><b>Note:</b> The Order API (v2) currently only supports the guest payment/checkout flow. If you need to support member payment/checkout flow, use the <a href=\"/api-docs/buy/order_v1/resources/methods\">v1_beta version</a> of the Order API.</span><br /><br /><a href=\"https://developer.ebay.com/api-docs/static/versioning.html#limited\" target=\"_blank\"><img src=\"/cms/img/docs/partners-api.svg\" class=\"legend-icon partners-icon\"  alt=\"Limited Release\" title=\"Limited Release\" />(Limited Release)</a> This method is only available to select developers approved by business units.<br /><br />This method returns the details of the specified guest checkout session. The <b>checkoutSessionId</b> is passed in as a URI parameter and is required. This method has no request payload.<br /><br />For a list of supported sites and other restrictions, see <a href=\"/api-docs/buy/order/overview.html#API\">API Restrictions</a> in the Order API overview.<br /><br />The URLs for this method are:<ul><li><b>Production URL:</b> <code>https://apix.ebay.com/buy/order/v2/guest_checkout_session/{checkoutSessionId}</code></li><li><b>Sandbox URL:</b> <code>https://apix.sandbox.ebay.com/buy/order/v2/guest_checkout_session/{checkoutSessionId}</code></li></ul>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Buy\Order\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Buy\Order\V2\Api\GuestCheckoutSessionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$checkout_session_id = 'checkout_session_id_example'; // string | The eBay-assigned session ID, for a specific eBay marketplace, that is returned by the <b> initiateGuestCheckoutSession</b> method.<br /><br /><span class=\"tablenote\"><b>Note:</b> When using this ID, the X-EBAY-C-MARKETPLACE-ID value and developer App ID must be the same as that used when this guest checkout session was created. See <a href=\"/api-docs/buy/order/overview.html#checkout-restriction\">Checkout session restrictions</a> in the Buy Integration Guide for details.</span>
$x_ebay_c_marketplace_id = 'x_ebay_c_marketplace_id_example'; // string | A header that identifies the user's business context and is specified using a marketplace ID value.<br /><br /><span class=\"tablenote\"><b>Note:</b> This header does <i>not</i> indicate a language preference or consumer location.</span><br /><br />See <a href=\"/api-docs/static/rest-request-components.html#marketpl\" target=\"_blank\">Marketplace ID values</a> for a list of supported values.

try {
    $result = $apiInstance->getGuestCheckoutSession($checkout_session_id, $x_ebay_c_marketplace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GuestCheckoutSessionApi->getGuestCheckoutSession: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **checkout_session_id** | **string**| The eBay-assigned session ID, for a specific eBay marketplace, that is returned by the &lt;b&gt; initiateGuestCheckoutSession&lt;/b&gt; method.&lt;br /&gt;&lt;br /&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; When using this ID, the X-EBAY-C-MARKETPLACE-ID value and developer App ID must be the same as that used when this guest checkout session was created. See &lt;a href&#x3D;\&quot;/api-docs/buy/order/overview.html#checkout-restriction\&quot;&gt;Checkout session restrictions&lt;/a&gt; in the Buy Integration Guide for details.&lt;/span&gt; |
 **x_ebay_c_marketplace_id** | **string**| A header that identifies the user&#39;s business context and is specified using a marketplace ID value.&lt;br /&gt;&lt;br /&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; This header does &lt;i&gt;not&lt;/i&gt; indicate a language preference or consumer location.&lt;/span&gt;&lt;br /&gt;&lt;br /&gt;See &lt;a href&#x3D;\&quot;/api-docs/static/rest-request-components.html#marketpl\&quot; target&#x3D;\&quot;_blank\&quot;&gt;Marketplace ID values&lt;/a&gt; for a list of supported values. |

### Return type

[**\TNT\Ebay\Buy\Order\V2\Model\GuestCheckoutSessionResponseV2**](../Model/GuestCheckoutSessionResponseV2.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `initiateGuestCheckoutSession()`

```php
initiateGuestCheckoutSession($x_ebay_c_marketplace_id, $x_ebay_c_enduserctx, $create_guest_checkout_session_request_v2): \TNT\Ebay\Buy\Order\V2\Model\GuestCheckoutSessionResponseV2
```



<span class=\"tablenote\"><b>Note:</b> The Order API (v2) currently only supports the guest payment/checkout flow. If you need to support member payment/checkout flow, use the <a href=\"/api-docs/buy/order_v1/resources/methods\">v1_beta version</a> of the Order API.</span><br /><br /><a href=\"https://developer.ebay.com/api-docs/static/versioning.html#limited\" target=\"_blank\"><img src=\"/cms/img/docs/partners-api.svg\" class=\"legend-icon partners-icon\"  alt=\"Limited Release\" title=\"Limited Release\" />(Limited Release)</a> This method is only available to select developers approved by business units.<br /><br />This method creates an eBay guest checkout session, which is the first step in performing a checkout. The method returns a <b>checkoutSessionId</b> that you use as a URI parameter in subsequent guest checkout methods.<br /><br />Also see <a href=\"/api-docs/buy/static/ref-buy-negative-testing.html\">Negative Testing Using Stubs</a> for information on how to emulate error conditions for this  method using stubs.<br /><br /><span class=\"tablenote\"><font color=\"006600\"><b>TIP:</b></font> To test the entire checkout flow, you might need a \"test\" credit card. You can generate a credit card number from <a href=\"http://www.getcreditcardnumbers.com\" target=\"_blank\">http://www.getcreditcardnumbers.com</a>.</span><br /><br />For a list of supported sites and other restrictions, see <a href=\"/api-docs/buy/order/overview.html#API\">API Restrictions</a> in the Order API overview.<br /><br />The URLs for this method are:<ul><li><b>Production URL:</b> <code>https://apix.ebay.com/buy/order/v2/guest_checkout_session/initiate</code></li><li><b>Sandbox URL:</b> <code>https://apix.sandbox.ebay.com/buy/order/v2/guest_checkout_session/initiate</code></li></ul>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Buy\Order\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Buy\Order\V2\Api\GuestCheckoutSessionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_ebay_c_marketplace_id = 'x_ebay_c_marketplace_id_example'; // string | A header that identifies the user's business context and is specified using a marketplace ID value.<br /><br /><span class=\"tablenote\"><b>Note:</b> This header does <i>not</i> indicate a language preference or consumer location.</span><br /><br />See <a href=\"/api-docs/static/rest-request-components.html#marketpl\" target=\"_blank\">Marketplace ID values</a> for a list of supported values.
$x_ebay_c_enduserctx = 'x_ebay_c_enduserctx_example'; // string | A header that is used to specify the <b>affiliateCampaignId</b>, and optionally the <b>affiliateReferenceId</b>, to enable revenue sharing when the buyer purchases items.<br /><br /><span class=\"tablenote\"><font color=\"006600\"><b>TIP:</b></font> See <a href=\"/api-docs/buy/static/api-browse.html#Headers\" target=\"_blank\">Request headers</a> in the Buying Integration Guide for more information.</span>
$create_guest_checkout_session_request_v2 = new \TNT\Ebay\Buy\Order\V2\Model\CreateGuestCheckoutSessionRequestV2(); // \TNT\Ebay\Buy\Order\V2\Model\CreateGuestCheckoutSessionRequestV2 | The container for the fields used by the <b>initiateGuestCheckoutSession</b> method.

try {
    $result = $apiInstance->initiateGuestCheckoutSession($x_ebay_c_marketplace_id, $x_ebay_c_enduserctx, $create_guest_checkout_session_request_v2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GuestCheckoutSessionApi->initiateGuestCheckoutSession: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_ebay_c_marketplace_id** | **string**| A header that identifies the user&#39;s business context and is specified using a marketplace ID value.&lt;br /&gt;&lt;br /&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; This header does &lt;i&gt;not&lt;/i&gt; indicate a language preference or consumer location.&lt;/span&gt;&lt;br /&gt;&lt;br /&gt;See &lt;a href&#x3D;\&quot;/api-docs/static/rest-request-components.html#marketpl\&quot; target&#x3D;\&quot;_blank\&quot;&gt;Marketplace ID values&lt;/a&gt; for a list of supported values. |
 **x_ebay_c_enduserctx** | **string**| A header that is used to specify the &lt;b&gt;affiliateCampaignId&lt;/b&gt;, and optionally the &lt;b&gt;affiliateReferenceId&lt;/b&gt;, to enable revenue sharing when the buyer purchases items.&lt;br /&gt;&lt;br /&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;font color&#x3D;\&quot;006600\&quot;&gt;&lt;b&gt;TIP:&lt;/b&gt;&lt;/font&gt; See &lt;a href&#x3D;\&quot;/api-docs/buy/static/api-browse.html#Headers\&quot; target&#x3D;\&quot;_blank\&quot;&gt;Request headers&lt;/a&gt; in the Buying Integration Guide for more information.&lt;/span&gt; | [optional]
 **create_guest_checkout_session_request_v2** | [**\TNT\Ebay\Buy\Order\V2\Model\CreateGuestCheckoutSessionRequestV2**](../Model/CreateGuestCheckoutSessionRequestV2.md)| The container for the fields used by the &lt;b&gt;initiateGuestCheckoutSession&lt;/b&gt; method. | [optional]

### Return type

[**\TNT\Ebay\Buy\Order\V2\Model\GuestCheckoutSessionResponseV2**](../Model/GuestCheckoutSessionResponseV2.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeGuestCoupon()`

```php
removeGuestCoupon($checkout_session_id, $x_ebay_c_marketplace_id, $coupon_request): \TNT\Ebay\Buy\Order\V2\Model\GuestCheckoutSessionResponseV2
```



<span class=\"tablenote\"><b>Note:</b> The Order API (v2) currently only supports the guest payment/checkout flow. If you need to support member payment/checkout flow, use the <a href=\"/api-docs/buy/order_v1/resources/methods\">v1_beta version</a> of the Order API.</span><br /><br /><a href=\"https://developer.ebay.com/api-docs/static/versioning.html#limited\" target=\"_blank\"><img src=\"/cms/img/docs/partners-api.svg\" class=\"legend-icon partners-icon\"  alt=\"Limited Release\" title=\"Limited Release\" />(Limited Release)</a> This method is only available to select developers approved by business units.<br /><br />This method removes a coupon from an eBay guest checkout session. The <b>checkoutSessionId</b> is passed in as a URI parameter and is required. The redemption code of the coupon is specified in the payload and is also required.<br /><br />For a list of supported sites and other restrictions, see <a href=\"/api-docs/buy/order/overview.html#API\">API Restrictions</a> in the Order API overview.<br /><br />The URLs for this method are:<ul><li><b>Production URL:</b> <code>https://apix.ebay.com/buy/order/v2/guest_checkout_session/{checkoutSessionId}/remove_coupon</code></li><li><b>Sandbox URL:</b> <code>https://apix.sandbox.ebay.com/buy/order/v2/guest_checkout_session/{checkoutSessionId}/remove_coupon</code></li></ul>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Buy\Order\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Buy\Order\V2\Api\GuestCheckoutSessionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$checkout_session_id = 'checkout_session_id_example'; // string | The eBay-assigned session ID, for a specific eBay marketplace, that is returned by the <b> initiateGuestCheckoutSession</b> method.<br /><br /><span class=\"tablenote\"><b>Note:</b> When using this ID, the X-EBAY-C-MARKETPLACE-ID value and developer App ID must be the same as that used when this guest checkout session was created. See <a href=\"/api-docs/buy/order/overview.html#checkout-restriction\">Checkout session restrictions</a> in the Buy Integration Guide for details.</span>
$x_ebay_c_marketplace_id = 'x_ebay_c_marketplace_id_example'; // string | A header that identifies the user's business context and is specified using a marketplace ID value.<br /><br /><span class=\"tablenote\"><b>Note:</b> This header does <i>not</i> indicate a language preference or consumer location.</span><br /><br />See <a href=\"/api-docs/static/rest-request-components.html#marketpl\" target=\"_blank\">Marketplace ID values</a> for a list of supported values.
$coupon_request = new \TNT\Ebay\Buy\Order\V2\Model\CouponRequest(); // \TNT\Ebay\Buy\Order\V2\Model\CouponRequest | The container for the fields used by the <b>removeGuestCoupon</b> method.

try {
    $result = $apiInstance->removeGuestCoupon($checkout_session_id, $x_ebay_c_marketplace_id, $coupon_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GuestCheckoutSessionApi->removeGuestCoupon: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **checkout_session_id** | **string**| The eBay-assigned session ID, for a specific eBay marketplace, that is returned by the &lt;b&gt; initiateGuestCheckoutSession&lt;/b&gt; method.&lt;br /&gt;&lt;br /&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; When using this ID, the X-EBAY-C-MARKETPLACE-ID value and developer App ID must be the same as that used when this guest checkout session was created. See &lt;a href&#x3D;\&quot;/api-docs/buy/order/overview.html#checkout-restriction\&quot;&gt;Checkout session restrictions&lt;/a&gt; in the Buy Integration Guide for details.&lt;/span&gt; |
 **x_ebay_c_marketplace_id** | **string**| A header that identifies the user&#39;s business context and is specified using a marketplace ID value.&lt;br /&gt;&lt;br /&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; This header does &lt;i&gt;not&lt;/i&gt; indicate a language preference or consumer location.&lt;/span&gt;&lt;br /&gt;&lt;br /&gt;See &lt;a href&#x3D;\&quot;/api-docs/static/rest-request-components.html#marketpl\&quot; target&#x3D;\&quot;_blank\&quot;&gt;Marketplace ID values&lt;/a&gt; for a list of supported values. |
 **coupon_request** | [**\TNT\Ebay\Buy\Order\V2\Model\CouponRequest**](../Model/CouponRequest.md)| The container for the fields used by the &lt;b&gt;removeGuestCoupon&lt;/b&gt; method. | [optional]

### Return type

[**\TNT\Ebay\Buy\Order\V2\Model\GuestCheckoutSessionResponseV2**](../Model/GuestCheckoutSessionResponseV2.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateGuestQuantity()`

```php
updateGuestQuantity($checkout_session_id, $x_ebay_c_marketplace_id, $update_quantity): \TNT\Ebay\Buy\Order\V2\Model\GuestCheckoutSessionResponseV2
```



<span class=\"tablenote\"><b>Note:</b> The Order API (v2) currently only supports the guest payment/checkout flow. If you need to support member payment/checkout flow, use the <a href=\"/api-docs/buy/order_v1/resources/methods\">v1_beta version</a> of the Order API.</span><br /><br /><a href=\"https://developer.ebay.com/api-docs/static/versioning.html#limited\" target=\"_blank\"><img src=\"/cms/img/docs/partners-api.svg\" class=\"legend-icon partners-icon\"  alt=\"Limited Release\" title=\"Limited Release\" />(Limited Release)</a> This method is only available to select developers approved by business units.<br /><br />This method changes the quantity of the specified line item in an eBay guest checkout session.<br /><br />For a list of supported sites and other restrictions, see <a href=\"/api-docs/buy/order/overview.html#API\">API Restrictions</a> in the Order API overview.<br /><br />The URLs for this method are:<ul><li><b>Production URL:</b> <code>https://apix.ebay.com/buy/order/v2/guest_checkout_session/{checkoutSessionId}/update_quantity</code></li><li><b>Sandbox URL:</b> <code>https://apix.sandbox.ebay.com/buy/order/v2/guest_checkout_session/{checkoutSessionId}/update_quantity</code></li></ul>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Buy\Order\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Buy\Order\V2\Api\GuestCheckoutSessionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$checkout_session_id = 'checkout_session_id_example'; // string | The eBay-assigned session ID, for a specific eBay marketplace, that is returned by the <b> initiateGuestCheckoutSession</b> method.<br /><br /><span class=\"tablenote\"><b>Note:</b> When using this ID, the X-EBAY-C-MARKETPLACE-ID value and developer App ID must be the same as that used when this guest checkout session was created. See <a href=\"/api-docs/buy/order/overview.html#checkout-restriction\">Checkout session restrictions</a> in the Buy Integration Guide for details.</span>
$x_ebay_c_marketplace_id = 'x_ebay_c_marketplace_id_example'; // string | A header that identifies the user's business context and is specified using a marketplace ID value.<br /><br /><span class=\"tablenote\"><b>Note:</b> This header does <i>not</i> indicate a language preference or consumer location.</span><br /><br />See <a href=\"/api-docs/static/rest-request-components.html#marketpl\" target=\"_blank\">Marketplace ID values</a> for a list of supported values.
$update_quantity = new \TNT\Ebay\Buy\Order\V2\Model\UpdateQuantity(); // \TNT\Ebay\Buy\Order\V2\Model\UpdateQuantity | The container for the fields used by the <b>updateGuestQuantity</b> method.

try {
    $result = $apiInstance->updateGuestQuantity($checkout_session_id, $x_ebay_c_marketplace_id, $update_quantity);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GuestCheckoutSessionApi->updateGuestQuantity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **checkout_session_id** | **string**| The eBay-assigned session ID, for a specific eBay marketplace, that is returned by the &lt;b&gt; initiateGuestCheckoutSession&lt;/b&gt; method.&lt;br /&gt;&lt;br /&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; When using this ID, the X-EBAY-C-MARKETPLACE-ID value and developer App ID must be the same as that used when this guest checkout session was created. See &lt;a href&#x3D;\&quot;/api-docs/buy/order/overview.html#checkout-restriction\&quot;&gt;Checkout session restrictions&lt;/a&gt; in the Buy Integration Guide for details.&lt;/span&gt; |
 **x_ebay_c_marketplace_id** | **string**| A header that identifies the user&#39;s business context and is specified using a marketplace ID value.&lt;br /&gt;&lt;br /&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; This header does &lt;i&gt;not&lt;/i&gt; indicate a language preference or consumer location.&lt;/span&gt;&lt;br /&gt;&lt;br /&gt;See &lt;a href&#x3D;\&quot;/api-docs/static/rest-request-components.html#marketpl\&quot; target&#x3D;\&quot;_blank\&quot;&gt;Marketplace ID values&lt;/a&gt; for a list of supported values. |
 **update_quantity** | [**\TNT\Ebay\Buy\Order\V2\Model\UpdateQuantity**](../Model/UpdateQuantity.md)| The container for the fields used by the &lt;b&gt;updateGuestQuantity&lt;/b&gt; method. | [optional]

### Return type

[**\TNT\Ebay\Buy\Order\V2\Model\GuestCheckoutSessionResponseV2**](../Model/GuestCheckoutSessionResponseV2.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateGuestShippingAddress()`

```php
updateGuestShippingAddress($checkout_session_id, $x_ebay_c_marketplace_id, $shipping_address_impl): \TNT\Ebay\Buy\Order\V2\Model\GuestCheckoutSessionResponseV2
```



<span class=\"tablenote\"><b>Note:</b> The Order API (v2) currently only supports the guest payment/checkout flow. If you need to support member payment/checkout flow, use the <a href=\"/api-docs/buy/order_v1/resources/methods\">v1_beta version</a> of the Order API.</span><br /><br /><a href=\"https://developer.ebay.com/api-docs/static/versioning.html#limited\" target=\"_blank\"><img src=\"/cms/img/docs/partners-api.svg\" class=\"legend-icon partners-icon\"  alt=\"Limited Release\" title=\"Limited Release\" />(Limited Release)</a> This method is only available to select developers approved by business units.<br /><br />This method changes the shipping address for the order in an eBay guest checkout session. All the line items in an order must be shipped to the same address, but the shipping method can be specific to the line item.<br /><br /><span class=\"tablenote\"><b>Note:</b> If the address submitted cannot be validated, a warning message will be returned. This does not prevent the method from executing, but you may want to verify the address.</span><br /><br />For a list of supported sites and other restrictions, see <a href=\"/api-docs/buy/order/overview.html#API\">API Restrictions</a> in the Order API overview.<br /><br />The URLs for this method are:<ul><li><b>Production URL:</b> <code>https://apix.ebay.com/buy/order/v2/guest_checkout_session/{checkoutSessionId}/update_shipping_address</code></li><li><b>Sandbox URL:</b> <code>https://apix.sandbox.ebay.com/buy/order/v2/guest_checkout_session/{checkoutSessionId}/update_shipping_address</code></li></ul>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Buy\Order\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Buy\Order\V2\Api\GuestCheckoutSessionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$checkout_session_id = 'checkout_session_id_example'; // string | The eBay-assigned session ID, for a specific eBay marketplace, that is returned by the <b> initiateGuestCheckoutSession</b> method.<br /><br /><span class=\"tablenote\"><b>Note:</b> When using this ID, the X-EBAY-C-MARKETPLACE-ID value and developer App ID must be the same as that used when this guest checkout session was created. See <a href=\"/api-docs/buy/order/overview.html#checkout-restriction\">Checkout session restrictions</a> in the Buy Integration Guide for details.</span>
$x_ebay_c_marketplace_id = 'x_ebay_c_marketplace_id_example'; // string | A header that identifies the user's business context and is specified using a marketplace ID value.<br /><br /><span class=\"tablenote\"><b>Note:</b> This header does <i>not</i> indicate a language preference or consumer location.</span><br /><br />See <a href=\"/api-docs/static/rest-request-components.html#marketpl\" target=\"_blank\">Marketplace ID values</a> for a list of supported values.
$shipping_address_impl = new \TNT\Ebay\Buy\Order\V2\Model\ShippingAddressImpl(); // \TNT\Ebay\Buy\Order\V2\Model\ShippingAddressImpl | The container for the fields used by the <b>updateGuestShippingAddress</b> method.

try {
    $result = $apiInstance->updateGuestShippingAddress($checkout_session_id, $x_ebay_c_marketplace_id, $shipping_address_impl);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GuestCheckoutSessionApi->updateGuestShippingAddress: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **checkout_session_id** | **string**| The eBay-assigned session ID, for a specific eBay marketplace, that is returned by the &lt;b&gt; initiateGuestCheckoutSession&lt;/b&gt; method.&lt;br /&gt;&lt;br /&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; When using this ID, the X-EBAY-C-MARKETPLACE-ID value and developer App ID must be the same as that used when this guest checkout session was created. See &lt;a href&#x3D;\&quot;/api-docs/buy/order/overview.html#checkout-restriction\&quot;&gt;Checkout session restrictions&lt;/a&gt; in the Buy Integration Guide for details.&lt;/span&gt; |
 **x_ebay_c_marketplace_id** | **string**| A header that identifies the user&#39;s business context and is specified using a marketplace ID value.&lt;br /&gt;&lt;br /&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; This header does &lt;i&gt;not&lt;/i&gt; indicate a language preference or consumer location.&lt;/span&gt;&lt;br /&gt;&lt;br /&gt;See &lt;a href&#x3D;\&quot;/api-docs/static/rest-request-components.html#marketpl\&quot; target&#x3D;\&quot;_blank\&quot;&gt;Marketplace ID values&lt;/a&gt; for a list of supported values. |
 **shipping_address_impl** | [**\TNT\Ebay\Buy\Order\V2\Model\ShippingAddressImpl**](../Model/ShippingAddressImpl.md)| The container for the fields used by the &lt;b&gt;updateGuestShippingAddress&lt;/b&gt; method. | [optional]

### Return type

[**\TNT\Ebay\Buy\Order\V2\Model\GuestCheckoutSessionResponseV2**](../Model/GuestCheckoutSessionResponseV2.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateGuestShippingOption()`

```php
updateGuestShippingOption($checkout_session_id, $x_ebay_c_marketplace_id, $update_shipping_option): \TNT\Ebay\Buy\Order\V2\Model\GuestCheckoutSessionResponseV2
```



<span class=\"tablenote\"><b>Note:</b> The Order API (v2) currently only supports the guest payment/checkout flow. If you need to support member payment/checkout flow, use the <a href=\"/api-docs/buy/order_v1/resources/methods\">v1_beta version</a> of the Order API.</span><br /><br /><a href=\"https://developer.ebay.com/api-docs/static/versioning.html#limited\" target=\"_blank\"><img src=\"/cms/img/docs/partners-api.svg\" class=\"legend-icon partners-icon\"  alt=\"Limited Release\" title=\"Limited Release\" />(Limited Release)</a> This method is only available to select developers approved by business units.<br /><br />This method changes the shipping method for the specified line item in an eBay guest checkout session. The shipping option can be set for each line item. This gives the shopper the ability choose the cost of shipping for each line item.<br /><br />For a list of supported sites and other restrictions, see <a href=\"/api-docs/buy/order/overview.html#API\">API Restrictions</a> in the Order API overview.<br /><br />The URLs for this method are:<ul><li><b>Production URL: </b> <code>https://apix.ebay.com/buy/order/v2/guest_checkout_session/{checkoutSessionId}/update_shipping_option</code></li><li><b>Sandbox URL:</b> <code>https://apix.sandbox.ebay.com/buy/order/v2/guest_checkout_session/{checkoutSessionId}/update_shipping_option</code></li> </ul>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Buy\Order\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Buy\Order\V2\Api\GuestCheckoutSessionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$checkout_session_id = 'checkout_session_id_example'; // string | The eBay-assigned session ID, for a specific eBay marketplace, that is returned by the <b> initiateGuestCheckoutSession</b> method.<br /><br /><span class=\"tablenote\"><b>Note:</b> When using this ID, the X-EBAY-C-MARKETPLACE-ID value and developer App ID must be the same as that used when this guest checkout session was created. See <a href=\"/api-docs/buy/order/overview.html#checkout-restriction\">Checkout session restrictions</a> in the Buy Integration Guide for details.</span>
$x_ebay_c_marketplace_id = 'x_ebay_c_marketplace_id_example'; // string | A header that identifies the user's business context and is specified using a marketplace ID value.<br /><br /><span class=\"tablenote\"><b>Note:</b> This header does <i>not</i> indicate a language preference or consumer location.</span><br /><br />See <a href=\"/api-docs/static/rest-request-components.html#marketpl\" target=\"_blank\">Marketplace ID values</a> for a list of supported values.
$update_shipping_option = new \TNT\Ebay\Buy\Order\V2\Model\UpdateShippingOption(); // \TNT\Ebay\Buy\Order\V2\Model\UpdateShippingOption | The container for the fields used by the <b>updateGuestShippingOption</b> method.

try {
    $result = $apiInstance->updateGuestShippingOption($checkout_session_id, $x_ebay_c_marketplace_id, $update_shipping_option);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GuestCheckoutSessionApi->updateGuestShippingOption: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **checkout_session_id** | **string**| The eBay-assigned session ID, for a specific eBay marketplace, that is returned by the &lt;b&gt; initiateGuestCheckoutSession&lt;/b&gt; method.&lt;br /&gt;&lt;br /&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; When using this ID, the X-EBAY-C-MARKETPLACE-ID value and developer App ID must be the same as that used when this guest checkout session was created. See &lt;a href&#x3D;\&quot;/api-docs/buy/order/overview.html#checkout-restriction\&quot;&gt;Checkout session restrictions&lt;/a&gt; in the Buy Integration Guide for details.&lt;/span&gt; |
 **x_ebay_c_marketplace_id** | **string**| A header that identifies the user&#39;s business context and is specified using a marketplace ID value.&lt;br /&gt;&lt;br /&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; This header does &lt;i&gt;not&lt;/i&gt; indicate a language preference or consumer location.&lt;/span&gt;&lt;br /&gt;&lt;br /&gt;See &lt;a href&#x3D;\&quot;/api-docs/static/rest-request-components.html#marketpl\&quot; target&#x3D;\&quot;_blank\&quot;&gt;Marketplace ID values&lt;/a&gt; for a list of supported values. |
 **update_shipping_option** | [**\TNT\Ebay\Buy\Order\V2\Model\UpdateShippingOption**](../Model/UpdateShippingOption.md)| The container for the fields used by the &lt;b&gt;updateGuestShippingOption&lt;/b&gt; method. | [optional]

### Return type

[**\TNT\Ebay\Buy\Order\V2\Model\GuestCheckoutSessionResponseV2**](../Model/GuestCheckoutSessionResponseV2.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
