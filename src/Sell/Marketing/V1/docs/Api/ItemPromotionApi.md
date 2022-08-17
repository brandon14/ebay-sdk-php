# TNT\Ebay\Sell\Marketing\V1\ItemPromotionApi

All URIs are relative to https://api.ebay.com/sell/marketing/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createItemPromotion()**](ItemPromotionApi.md#createItemPromotion) | **POST** /item_promotion | 
[**deleteItemPromotion()**](ItemPromotionApi.md#deleteItemPromotion) | **DELETE** /item_promotion/{promotion_id} | 
[**getItemPromotion()**](ItemPromotionApi.md#getItemPromotion) | **GET** /item_promotion/{promotion_id} | 
[**updateItemPromotion()**](ItemPromotionApi.md#updateItemPromotion) | **PUT** /item_promotion/{promotion_id} | 


## `createItemPromotion()`

```php
createItemPromotion($item_promotion): \TNT\Ebay\Sell\Marketing\V1\Model\BaseResponse
```



This method creates an <b>item promotion</b>, where the buyer receives a discount when they meet the buying criteria that's set for the promotion. Known here as \"threshold promotions\", these promotions trigger when a threshold is met.  <p>eBay highlights promoted items by placing teasers for the promoted items throughout the online buyer flows.</p>  <p><i>Discounts</i> are specified as either a monetary amount or a percentage off the standard sales price of a listing, letting you offer deals such as \"Buy 1 Get 1\" and \"Buy $50, get 20% off\".</p> <p><i>Volume pricing</i> promotions increase the value of the discount as the buyer increases the quantity they purchase.</p> <p><i>Coded Coupons</i> provide unique codes that a buyer can use during checkout to receive a discount. The seller can specify the number of times a buyer can use the coupon and the maximum amount across all purchases that can be discounted using the coupon. The coupon code can also be made public (appearing on the seller's Offer page, search pages, the item listing, and the checkout page) or private (only on the seller's Offer page, but the seller can include the code in email and social media).</p> <p class=\"tablenote\"><b>Note</b>: Coded Coupons are currently available in the US, UK, DE, FR, IT, ES, and AU marketplaces.</p><p>There are two ways to add items to a threshold promotion:</p>  <ul><li><b>Key-based promotions</b> select items using either the listing IDs or inventory reference IDs of the items you want to promote. Note that if you use inventory reference IDs, you must specify both the <b>inventoryReferenceId</b> and the associated <b>inventoryReferenceType</b> of the item(s) you want to include the promotion.</li> <li><b>Rule-based promotions</b> select items using a list of eBay category IDs or seller Store category IDs. Rules can further constrain items in a promotion by minimum and maximum prices, brands, and item conditions.</li></ul>  <p>You must create a new promotion in either a <code>DRAFT</code> or <code>SCHEDULED</code> state. Use the DRAFT state when you are initially creating a promotion and you want to be sure it's correctly configured before scheduling it to run. When you create a promotion, the promotion ID is returned in the <b>Location</b> response header. Use this ID to reference the promotion in subsequent requests.</p>  <p class=\"tablenote\"><b>Tip:</b> Refer to the <a href=\"/api-docs/sell/static/marketing/promotions-manager.html\">Selling Integration Guide</a> for details and examples showing how to create and manage threshold promotions using the Promotions Manager.</p>  <p>For information on the eBay marketplaces that support item promotions, see <a href=\"/api-docs/sell/marketing/static/overview.html#PM-requirements\">Promotions Manager requirements and restrictions</a>.</p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Marketing\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Marketing\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Marketing\V1\Api\ItemPromotionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_promotion = new \TNT\Ebay\Sell\Marketing\V1\Model\ItemPromotion(); // \TNT\Ebay\Sell\Marketing\V1\Model\ItemPromotion | This type defines the fields that describe an item promotion.

try {
    $result = $apiInstance->createItemPromotion($item_promotion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemPromotionApi->createItemPromotion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_promotion** | [**\TNT\Ebay\Sell\Marketing\V1\Model\ItemPromotion**](../Model/ItemPromotion.md)| This type defines the fields that describe an item promotion. | [optional]

### Return type

[**\TNT\Ebay\Sell\Marketing\V1\Model\BaseResponse**](../Model/BaseResponse.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteItemPromotion()`

```php
deleteItemPromotion($promotion_id)
```



This method deletes the threshold promotion specified by the <b>promotion_id</b> path parameter. Call <a href=\"/api-docs/sell/marketing/resources/promotion/methods/getPromotions\">getPromotions</a> to retrieve the IDs of a seller's promotions.  <br><br>You can delete any promotion with the exception of those that are currently active (RUNNING). To end a running threshold promotion, call <a href=\"/api-docs/sell/marketing/resources/item_promotion/methods/updateItemPromotion\">updateItemPromotion</a> and adjust the <b>endDate</b> field as appropriate.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Marketing\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Marketing\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Marketing\V1\Api\ItemPromotionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$promotion_id = 'promotion_id_example'; // string | This path parameter takes a concatenation of the ID of the promotion you want to delete plus the marketplace ID on which the promotion is hosted. Concatenate the two values by separating them with an \"at sign\" (<b>@</b>).  <br><br>The ID of the promotion (<b>promotionId</b>) is a unique eBay-assigned value that's generated when the promotion is created. The Marketplace ID is the ENUM value of eBay marketplace where the promotion is hosted. <br><br><b>Example:</b> <code>1********5@EBAY_US</code>

try {
    $apiInstance->deleteItemPromotion($promotion_id);
} catch (Exception $e) {
    echo 'Exception when calling ItemPromotionApi->deleteItemPromotion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **promotion_id** | **string**| This path parameter takes a concatenation of the ID of the promotion you want to delete plus the marketplace ID on which the promotion is hosted. Concatenate the two values by separating them with an \&quot;at sign\&quot; (&lt;b&gt;@&lt;/b&gt;).  &lt;br&gt;&lt;br&gt;The ID of the promotion (&lt;b&gt;promotionId&lt;/b&gt;) is a unique eBay-assigned value that&#39;s generated when the promotion is created. The Marketplace ID is the ENUM value of eBay marketplace where the promotion is hosted. &lt;br&gt;&lt;br&gt;&lt;b&gt;Example:&lt;/b&gt; &lt;code&gt;1********5@EBAY_US&lt;/code&gt; |

### Return type

void (empty response body)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getItemPromotion()`

```php
getItemPromotion($promotion_id): \TNT\Ebay\Sell\Marketing\V1\Model\ItemPromotionResponse
```



This method returns the complete details of the threshold promotion specified by the <b>promotion_id</b> path parameter. Call <a href=\"/api-docs/sell/marketing/resources/promotion/methods/getPromotions\">getPromotions</a> to retrieve the IDs of a seller's promotions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Marketing\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Marketing\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Marketing\V1\Api\ItemPromotionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$promotion_id = 'promotion_id_example'; // string | This path parameter takes a concatenation of the ID of the promotion you want to retrieve plus the marketplace ID on which the promotion is hosted. Concatenate the two values by separating them with an \"at sign\" (<b>@</b>).  <br><br>The ID of the promotion (<b>promotionId</b>) is a unique eBay-assigned value that's generated when the promotion is created. The Marketplace ID is the ENUM value of eBay marketplace where the promotion is hosted. <br><br><b>Example:</b> <code>1********5@EBAY_US</code>

try {
    $result = $apiInstance->getItemPromotion($promotion_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemPromotionApi->getItemPromotion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **promotion_id** | **string**| This path parameter takes a concatenation of the ID of the promotion you want to retrieve plus the marketplace ID on which the promotion is hosted. Concatenate the two values by separating them with an \&quot;at sign\&quot; (&lt;b&gt;@&lt;/b&gt;).  &lt;br&gt;&lt;br&gt;The ID of the promotion (&lt;b&gt;promotionId&lt;/b&gt;) is a unique eBay-assigned value that&#39;s generated when the promotion is created. The Marketplace ID is the ENUM value of eBay marketplace where the promotion is hosted. &lt;br&gt;&lt;br&gt;&lt;b&gt;Example:&lt;/b&gt; &lt;code&gt;1********5@EBAY_US&lt;/code&gt; |

### Return type

[**\TNT\Ebay\Sell\Marketing\V1\Model\ItemPromotionResponse**](../Model/ItemPromotionResponse.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateItemPromotion()`

```php
updateItemPromotion($promotion_id, $item_promotion): \TNT\Ebay\Sell\Marketing\V1\Model\BaseResponse
```



This method updates the specified threshold promotion with the new configuration that you supply in the request. Indicate the promotion you want to update using the <b>promotion_id</b> path parameter.  <p>Call <a href=\"/api-docs/sell/marketing/resources/promotion/methods/getPromotions\">getPromotions</a> to retrieve the IDs of a seller's promotions.</p>  <p>When updating a promotion, supply all the fields that you used to configure the original promotion (and not just the fields you are updating). eBay replaces the specified promotion with the values you supply in the update request and if you don't pass a field that currently has a value, the update request will fail.</p>  <p>The parameters you are allowed to update with this request depend on the status of the promotion you're updating:  <ul><li>DRAFT or SCHEDULED promotions: You can update any of the parameters in these promotions that have not yet started to run, including the <b>discountRules</b>.</li> <li>RUNNING or PAUSED promotions: You can change the <b>endDate</b> and the item's inventory but you cannot change the promotional discount or the promotion's start date.</li> <li>ENDED promotions: Nothing can be changed.</li></ul> <p class=\"tablenote\"><b>Tip:</b> When updating a <code>RUNNING</code> or <code>PAUSED</code> promotion, set the <b>status</b> field to <code>SCHEDULED</code> for the update request. When the promotion is updated, the previous status (either <code>RUNNING</code> or <code>PAUSED</code>) is retained.</p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Marketing\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Marketing\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Marketing\V1\Api\ItemPromotionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$promotion_id = 'promotion_id_example'; // string | This path parameter takes a concatenation of the ID of the promotion you want to update plus the marketplace ID on which the promotion is hosted. Concatenate the two values by separating them with an \"at sign\" (<b>@</b>).  <br><br>The ID of the promotion (<b>promotionId</b>) is a unique eBay-assigned value that's generated when the promotion is created. The Marketplace ID is the ENUM value of eBay marketplace where the promotion is hosted. <br><br><b>Example:</b> <code>1********5@EBAY_US</code>
$item_promotion = new \TNT\Ebay\Sell\Marketing\V1\Model\ItemPromotion(); // \TNT\Ebay\Sell\Marketing\V1\Model\ItemPromotion | This type defines the fields that describe an item promotion.

try {
    $result = $apiInstance->updateItemPromotion($promotion_id, $item_promotion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemPromotionApi->updateItemPromotion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **promotion_id** | **string**| This path parameter takes a concatenation of the ID of the promotion you want to update plus the marketplace ID on which the promotion is hosted. Concatenate the two values by separating them with an \&quot;at sign\&quot; (&lt;b&gt;@&lt;/b&gt;).  &lt;br&gt;&lt;br&gt;The ID of the promotion (&lt;b&gt;promotionId&lt;/b&gt;) is a unique eBay-assigned value that&#39;s generated when the promotion is created. The Marketplace ID is the ENUM value of eBay marketplace where the promotion is hosted. &lt;br&gt;&lt;br&gt;&lt;b&gt;Example:&lt;/b&gt; &lt;code&gt;1********5@EBAY_US&lt;/code&gt; |
 **item_promotion** | [**\TNT\Ebay\Sell\Marketing\V1\Model\ItemPromotion**](../Model/ItemPromotion.md)| This type defines the fields that describe an item promotion. | [optional]

### Return type

[**\TNT\Ebay\Sell\Marketing\V1\Model\BaseResponse**](../Model/BaseResponse.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
