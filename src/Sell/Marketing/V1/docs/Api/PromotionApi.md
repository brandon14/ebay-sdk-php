# TNT\Ebay\Sell\Marketing\V1\PromotionApi

All URIs are relative to https://api.ebay.com/sell/marketing/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getListingSet()**](PromotionApi.md#getListingSet) | **GET** /promotion/{promotion_id}/get_listing_set | 
[**getPromotions()**](PromotionApi.md#getPromotions) | **GET** /promotion | 
[**pausePromotion()**](PromotionApi.md#pausePromotion) | **POST** /promotion/{promotion_id}/pause | 
[**resumePromotion()**](PromotionApi.md#resumePromotion) | **POST** /promotion/{promotion_id}/resume | 


## `getListingSet()`

```php
getListingSet($promotion_id, $limit, $offset, $q, $sort, $status): \TNT\Ebay\Sell\Marketing\V1\Model\ItemsPagedCollection
```



This method returns the set of listings associated with the <b>promotion_id</b> specified in the path parameter. Call <a href=\"/api-docs/sell/marketing/resources/promotion/methods/getPromotions\">getPromotions</a> to retrieve the IDs of a seller's promotions.  <p>The listing details are returned in a paginated set and you can control and results returned using the following query parameters: <b>limit</b>, <b>offset</b>, <b>q</b>, <b>sort</b>, and <b>status</b>.</p>  <ul><li><b>Maximum associated listings returned:</b> 200</li>  <li><b>Default number of listings returned:</b> 200</li></ul>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Marketing\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Marketing\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Marketing\V1\Api\PromotionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$promotion_id = 'promotion_id_example'; // string | This path parameter takes a concatenation of the ID of the promotion you want to get plus the marketplace ID on which the promotion is hosted. Concatenate the two values by separating them with an \"at sign\" (<b>@</b>).  <br><br>The ID of the promotion (<b>promotionId</b>) is a unique eBay-assigned value that's generated when the promotion is created. The Marketplace ID is the ENUM value of eBay marketplace where the promotion is hosted. <br><br><b>Example:</b> <code>1********5@EBAY_US</code>
$limit = 'limit_example'; // string | Specifies the maximum number of promotions returned on a page from the result set. <br><br><b>Default:</b> 200<br><b>Maximum:</b> 200
$offset = 'offset_example'; // string | Specifies the number of promotions to skip in the result set before returning the first promotion in the paginated response.  <p>Combine <b>offset</b> with the <b>limit</b> query parameter to control the items returned in the response. For example, if you supply an <b>offset</b> of <code>0</code> and a <b>limit</b> of <code>10</code>, the first page of the response contains the first 10 items from the complete list of items retrieved by the call. If <b>offset</b> is <code>10</code> and <b>limit</b> is <code>20</code>, the first page of the response contains items 11-30 from the complete result set.</p> <p><b>Default:</b> 0</p>
$q = 'q_example'; // string | Reserved for future use.
$sort = 'sort_example'; // string | Specifies the order in which to sort the associated listings in the response. If you precede the supplied value with a dash, the response is sorted in reverse order.  <br><br><b>Example:</b> <br>&nbsp;&nbsp;&nbsp;<code>sort=PRICE</code> - Sorts the associated listings by their current price in ascending order <br>&nbsp;&nbsp;&nbsp;<code>sort=-TITLE</code> - Sorts the associated listings by their title in descending alphabetical order (Z-Az-a)  <br><br><b>Valid values</b>:<ul class=\"compact\"><li>AVAILABLE</li> <li>PRICE</li> <li>TITLE</li></ul> For implementation help, refer to eBay API documentation at https://developer.ebay.com/api-docs/sell/marketing/types/csb:SortField
$status = 'status_example'; // string | This query parameter applies only to markdown promotions. It filters the response based on the indicated status of the promotion. Currently, the only supported value for this parameter is <code>MARKED_DOWN</code>, which indicates active markdown promotions. For implementation help, refer to eBay API documentation at https://developer.ebay.com/api-docs/sell/marketing/types/sme:ItemMarkdownStatusEnum

try {
    $result = $apiInstance->getListingSet($promotion_id, $limit, $offset, $q, $sort, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionApi->getListingSet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **promotion_id** | **string**| This path parameter takes a concatenation of the ID of the promotion you want to get plus the marketplace ID on which the promotion is hosted. Concatenate the two values by separating them with an \&quot;at sign\&quot; (&lt;b&gt;@&lt;/b&gt;).  &lt;br&gt;&lt;br&gt;The ID of the promotion (&lt;b&gt;promotionId&lt;/b&gt;) is a unique eBay-assigned value that&#39;s generated when the promotion is created. The Marketplace ID is the ENUM value of eBay marketplace where the promotion is hosted. &lt;br&gt;&lt;br&gt;&lt;b&gt;Example:&lt;/b&gt; &lt;code&gt;1********5@EBAY_US&lt;/code&gt; |
 **limit** | **string**| Specifies the maximum number of promotions returned on a page from the result set. &lt;br&gt;&lt;br&gt;&lt;b&gt;Default:&lt;/b&gt; 200&lt;br&gt;&lt;b&gt;Maximum:&lt;/b&gt; 200 | [optional]
 **offset** | **string**| Specifies the number of promotions to skip in the result set before returning the first promotion in the paginated response.  &lt;p&gt;Combine &lt;b&gt;offset&lt;/b&gt; with the &lt;b&gt;limit&lt;/b&gt; query parameter to control the items returned in the response. For example, if you supply an &lt;b&gt;offset&lt;/b&gt; of &lt;code&gt;0&lt;/code&gt; and a &lt;b&gt;limit&lt;/b&gt; of &lt;code&gt;10&lt;/code&gt;, the first page of the response contains the first 10 items from the complete list of items retrieved by the call. If &lt;b&gt;offset&lt;/b&gt; is &lt;code&gt;10&lt;/code&gt; and &lt;b&gt;limit&lt;/b&gt; is &lt;code&gt;20&lt;/code&gt;, the first page of the response contains items 11-30 from the complete result set.&lt;/p&gt; &lt;p&gt;&lt;b&gt;Default:&lt;/b&gt; 0&lt;/p&gt; | [optional]
 **q** | **string**| Reserved for future use. | [optional]
 **sort** | **string**| Specifies the order in which to sort the associated listings in the response. If you precede the supplied value with a dash, the response is sorted in reverse order.  &lt;br&gt;&lt;br&gt;&lt;b&gt;Example:&lt;/b&gt; &lt;br&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&lt;code&gt;sort&#x3D;PRICE&lt;/code&gt; - Sorts the associated listings by their current price in ascending order &lt;br&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&lt;code&gt;sort&#x3D;-TITLE&lt;/code&gt; - Sorts the associated listings by their title in descending alphabetical order (Z-Az-a)  &lt;br&gt;&lt;br&gt;&lt;b&gt;Valid values&lt;/b&gt;:&lt;ul class&#x3D;\&quot;compact\&quot;&gt;&lt;li&gt;AVAILABLE&lt;/li&gt; &lt;li&gt;PRICE&lt;/li&gt; &lt;li&gt;TITLE&lt;/li&gt;&lt;/ul&gt; For implementation help, refer to eBay API documentation at https://developer.ebay.com/api-docs/sell/marketing/types/csb:SortField | [optional]
 **status** | **string**| This query parameter applies only to markdown promotions. It filters the response based on the indicated status of the promotion. Currently, the only supported value for this parameter is &lt;code&gt;MARKED_DOWN&lt;/code&gt;, which indicates active markdown promotions. For implementation help, refer to eBay API documentation at https://developer.ebay.com/api-docs/sell/marketing/types/sme:ItemMarkdownStatusEnum | [optional]

### Return type

[**\TNT\Ebay\Sell\Marketing\V1\Model\ItemsPagedCollection**](../Model/ItemsPagedCollection.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPromotions()`

```php
getPromotions($marketplace_id, $limit, $offset, $promotion_status, $promotion_type, $q, $sort): \TNT\Ebay\Sell\Marketing\V1\Model\PromotionsPagedCollection
```



This method returns a list of a seller's undeleted promotions. <p>The call returns up to 200 currently-available promotions on the specified marketplace. While the response body does not include the promotion's <b>discountRules</b> or <b>inventoryCriterion</b> containers, it does include the <b>promotionHref</b> (which you can use to retrieve the complete details of the promotion).</p>  <p>Use query parameters to sort and filter the results by the number of promotions to return, the promotion state or type, and the eBay marketplace. You can also supply keywords to limit the response to the promotions that contain that keywords in the title of the promotion.</p> <p><b>Maximum returned:</b> 200</p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Marketing\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Marketing\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Marketing\V1\Api\PromotionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$marketplace_id = 'marketplace_id_example'; // string | The eBay marketplace ID of the site where the promotion is hosted.  <p><b>Valid values:</b></p>  <ul><li><code>EBAY_AU</code> = Australia</li> <li><code>EBAY_DE</code> = Germany</li> <li><code>EBAY_ES</code> = Spain</li> <li><code>EBAY_FR</code> = France</li> <li><code>EBAY_GB</code> = Great Britain</li> <li><code>EBAY_IT</code> = Italy</li> <li><code>EBAY_US</code> = United States</li></ul>
$limit = 'limit_example'; // string | Specifies the maximum number of promotions returned on a page from the result set.  <br><br><b>Default:</b> 200 <br><b>Maximum:</b> 200
$offset = 'offset_example'; // string | Specifies the number of promotions to skip in the result set before returning the first promotion in the paginated response.  <p>Combine <b>offset</b> with the <b>limit</b> query parameter to control the items returned in the response. For example, if you supply an <b>offset</b> of <code>0</code> and a <b>limit</b> of <code>10</code>, the first page of the response contains the first 10 items from the complete list of items retrieved by the call. If <b>offset</b> is <code>10</code> and <b>limit</b> is <code>20</code>, the first page of the response contains items 11-30 from the complete result set.</p> <p><b>Default:</b> 0</p>
$promotion_status = 'promotion_status_example'; // string | Specifies the promotion state by which you want to filter the results. The response contains only those promotions that match the state you specify.  <br><br><b>Valid values:</b> <ul><li><code>DRAFT</code></li> <li><code>SCHEDULED</code></li> <li><code>RUNNING</code></li> <li><code>PAUSED</code></li> <li><code>ENDED</code></li></ul><b>Maximum number of input values:</b> 1
$promotion_type = 'promotion_type_example'; // string | Filters the returned promotions based on their campaign promotion type. Specify one of the following values to indicate the promotion type you want returned: <ul><li><code>CODED_COUPON</code> &ndash; A coupon code promotion set with <b>createItemPromotion</b>.</li> <li><code>MARKDOWN_SALE</code> &ndash; A markdown promotion set with <b>createItemPriceMarkdownPromotion</b>.</li> <li><code>ORDER_DISCOUNT</code> &ndash; A threshold promotion set with <b>createItemPromotion</b>.</li> <li><code>VOLUME_DISCOUNT</code> &ndash; A volume pricing promotion set with <b>createItemPromotion</b>.</li></ul>
$q = 'q_example'; // string | A string consisting of one or more <i>keywords</i>. eBay filters the response by returning only the promotions that contain the supplied keywords in the promotion title.  <br><br><b>Example:</b> \"iPhone\" or \"Harry Potter.\"  <br><br>Commas that separate keywords are ignored. For example, a keyword string of \"iPhone, iPad\" equals \"iPhone iPad\", and each results in a response that contains promotions with both \"iPhone\" and \"iPad\" in the title.
$sort = 'sort_example'; // string | Specifies the order for how to sort the response. If you precede the supplied value with a dash, the response is sorted in reverse order.  <br><br><b>Example:</b> <br>&nbsp;&nbsp;&nbsp;<code>sort=END_DATE</code> &nbsp; Sorts the promotions in the response by their end dates in ascending order <br>&nbsp;&nbsp;&nbsp;<code>sort=-PROMOTION_NAME</code> &nbsp; Sorts the promotions by their promotion name in descending alphabetical order (Z-Az-a)  <br><br><b>Valid values</b>:<ul><li><code>START_DATE</code></li> <li><code>END_DATE</code></li> <li><code>PROMOTION_NAME</code></li></ul> For implementation help, refer to eBay API documentation at https://developer.ebay.com/api-docs/sell/marketing/types/csb:SortField

try {
    $result = $apiInstance->getPromotions($marketplace_id, $limit, $offset, $promotion_status, $promotion_type, $q, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionApi->getPromotions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplace_id** | **string**| The eBay marketplace ID of the site where the promotion is hosted.  &lt;p&gt;&lt;b&gt;Valid values:&lt;/b&gt;&lt;/p&gt;  &lt;ul&gt;&lt;li&gt;&lt;code&gt;EBAY_AU&lt;/code&gt; &#x3D; Australia&lt;/li&gt; &lt;li&gt;&lt;code&gt;EBAY_DE&lt;/code&gt; &#x3D; Germany&lt;/li&gt; &lt;li&gt;&lt;code&gt;EBAY_ES&lt;/code&gt; &#x3D; Spain&lt;/li&gt; &lt;li&gt;&lt;code&gt;EBAY_FR&lt;/code&gt; &#x3D; France&lt;/li&gt; &lt;li&gt;&lt;code&gt;EBAY_GB&lt;/code&gt; &#x3D; Great Britain&lt;/li&gt; &lt;li&gt;&lt;code&gt;EBAY_IT&lt;/code&gt; &#x3D; Italy&lt;/li&gt; &lt;li&gt;&lt;code&gt;EBAY_US&lt;/code&gt; &#x3D; United States&lt;/li&gt;&lt;/ul&gt; |
 **limit** | **string**| Specifies the maximum number of promotions returned on a page from the result set.  &lt;br&gt;&lt;br&gt;&lt;b&gt;Default:&lt;/b&gt; 200 &lt;br&gt;&lt;b&gt;Maximum:&lt;/b&gt; 200 | [optional]
 **offset** | **string**| Specifies the number of promotions to skip in the result set before returning the first promotion in the paginated response.  &lt;p&gt;Combine &lt;b&gt;offset&lt;/b&gt; with the &lt;b&gt;limit&lt;/b&gt; query parameter to control the items returned in the response. For example, if you supply an &lt;b&gt;offset&lt;/b&gt; of &lt;code&gt;0&lt;/code&gt; and a &lt;b&gt;limit&lt;/b&gt; of &lt;code&gt;10&lt;/code&gt;, the first page of the response contains the first 10 items from the complete list of items retrieved by the call. If &lt;b&gt;offset&lt;/b&gt; is &lt;code&gt;10&lt;/code&gt; and &lt;b&gt;limit&lt;/b&gt; is &lt;code&gt;20&lt;/code&gt;, the first page of the response contains items 11-30 from the complete result set.&lt;/p&gt; &lt;p&gt;&lt;b&gt;Default:&lt;/b&gt; 0&lt;/p&gt; | [optional]
 **promotion_status** | **string**| Specifies the promotion state by which you want to filter the results. The response contains only those promotions that match the state you specify.  &lt;br&gt;&lt;br&gt;&lt;b&gt;Valid values:&lt;/b&gt; &lt;ul&gt;&lt;li&gt;&lt;code&gt;DRAFT&lt;/code&gt;&lt;/li&gt; &lt;li&gt;&lt;code&gt;SCHEDULED&lt;/code&gt;&lt;/li&gt; &lt;li&gt;&lt;code&gt;RUNNING&lt;/code&gt;&lt;/li&gt; &lt;li&gt;&lt;code&gt;PAUSED&lt;/code&gt;&lt;/li&gt; &lt;li&gt;&lt;code&gt;ENDED&lt;/code&gt;&lt;/li&gt;&lt;/ul&gt;&lt;b&gt;Maximum number of input values:&lt;/b&gt; 1 | [optional]
 **promotion_type** | **string**| Filters the returned promotions based on their campaign promotion type. Specify one of the following values to indicate the promotion type you want returned: &lt;ul&gt;&lt;li&gt;&lt;code&gt;CODED_COUPON&lt;/code&gt; &amp;ndash; A coupon code promotion set with &lt;b&gt;createItemPromotion&lt;/b&gt;.&lt;/li&gt; &lt;li&gt;&lt;code&gt;MARKDOWN_SALE&lt;/code&gt; &amp;ndash; A markdown promotion set with &lt;b&gt;createItemPriceMarkdownPromotion&lt;/b&gt;.&lt;/li&gt; &lt;li&gt;&lt;code&gt;ORDER_DISCOUNT&lt;/code&gt; &amp;ndash; A threshold promotion set with &lt;b&gt;createItemPromotion&lt;/b&gt;.&lt;/li&gt; &lt;li&gt;&lt;code&gt;VOLUME_DISCOUNT&lt;/code&gt; &amp;ndash; A volume pricing promotion set with &lt;b&gt;createItemPromotion&lt;/b&gt;.&lt;/li&gt;&lt;/ul&gt; | [optional]
 **q** | **string**| A string consisting of one or more &lt;i&gt;keywords&lt;/i&gt;. eBay filters the response by returning only the promotions that contain the supplied keywords in the promotion title.  &lt;br&gt;&lt;br&gt;&lt;b&gt;Example:&lt;/b&gt; \&quot;iPhone\&quot; or \&quot;Harry Potter.\&quot;  &lt;br&gt;&lt;br&gt;Commas that separate keywords are ignored. For example, a keyword string of \&quot;iPhone, iPad\&quot; equals \&quot;iPhone iPad\&quot;, and each results in a response that contains promotions with both \&quot;iPhone\&quot; and \&quot;iPad\&quot; in the title. | [optional]
 **sort** | **string**| Specifies the order for how to sort the response. If you precede the supplied value with a dash, the response is sorted in reverse order.  &lt;br&gt;&lt;br&gt;&lt;b&gt;Example:&lt;/b&gt; &lt;br&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&lt;code&gt;sort&#x3D;END_DATE&lt;/code&gt; &amp;nbsp; Sorts the promotions in the response by their end dates in ascending order &lt;br&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&lt;code&gt;sort&#x3D;-PROMOTION_NAME&lt;/code&gt; &amp;nbsp; Sorts the promotions by their promotion name in descending alphabetical order (Z-Az-a)  &lt;br&gt;&lt;br&gt;&lt;b&gt;Valid values&lt;/b&gt;:&lt;ul&gt;&lt;li&gt;&lt;code&gt;START_DATE&lt;/code&gt;&lt;/li&gt; &lt;li&gt;&lt;code&gt;END_DATE&lt;/code&gt;&lt;/li&gt; &lt;li&gt;&lt;code&gt;PROMOTION_NAME&lt;/code&gt;&lt;/li&gt;&lt;/ul&gt; For implementation help, refer to eBay API documentation at https://developer.ebay.com/api-docs/sell/marketing/types/csb:SortField | [optional]

### Return type

[**\TNT\Ebay\Sell\Marketing\V1\Model\PromotionsPagedCollection**](../Model/PromotionsPagedCollection.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pausePromotion()`

```php
pausePromotion($promotion_id)
```



This method pauses a currently-active (RUNNING) threshold promotion and changes the state of the promotion from <code>RUNNING</code> to <code>PAUSED</code>. Pausing a promotion makes the promotion temporarily unavailable to buyers and any currently-incomplete transactions will not receive the promotional offer until the promotion is resumed. Also, promotion teasers are not displayed when a promotion is paused.  <br><br>Pass the ID of the promotion you want to pause using the <b>promotion_id</b> path parameter. Call <a href=\"/api-docs/sell/marketing/resources/promotion/methods/getPromotions\">getPromotions</a> to retrieve the IDs of the seller's promotions. <br><br><b>Note:</b> You can only pause threshold promotions (you cannot pause markdown promotions).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Marketing\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Marketing\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Marketing\V1\Api\PromotionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$promotion_id = 'promotion_id_example'; // string | This path parameter takes a concatenation of the ID of the promotion you want to pause plus the marketplace ID on which the promotion is hosted. Concatenate the two values by separating them with an \"at sign\" (<b>@</b>).  <br><br>The ID of the promotion (<b>promotionId</b>) is a unique eBay-assigned value that's generated when the promotion is created. The Marketplace ID is the ENUM value of eBay marketplace where the promotion is hosted. <br><br><b>Example:</b> <code>1********5@EBAY_US</code>

try {
    $apiInstance->pausePromotion($promotion_id);
} catch (Exception $e) {
    echo 'Exception when calling PromotionApi->pausePromotion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **promotion_id** | **string**| This path parameter takes a concatenation of the ID of the promotion you want to pause plus the marketplace ID on which the promotion is hosted. Concatenate the two values by separating them with an \&quot;at sign\&quot; (&lt;b&gt;@&lt;/b&gt;).  &lt;br&gt;&lt;br&gt;The ID of the promotion (&lt;b&gt;promotionId&lt;/b&gt;) is a unique eBay-assigned value that&#39;s generated when the promotion is created. The Marketplace ID is the ENUM value of eBay marketplace where the promotion is hosted. &lt;br&gt;&lt;br&gt;&lt;b&gt;Example:&lt;/b&gt; &lt;code&gt;1********5@EBAY_US&lt;/code&gt; |

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

## `resumePromotion()`

```php
resumePromotion($promotion_id)
```



This method restarts a threshold promotion that was previously paused and changes the state of the promotion from <code>PAUSED</code> to <code>RUNNING</code>. Only promotions that have been previously paused can be resumed. Resuming a promotion reinstates the promotional teasers and any transactions that were in motion before the promotion was paused will again be eligible for the promotion.  <br><br>Pass the ID of the promotion you want to resume using the <b>promotion_id</b> path parameter. Call <a href=\"/api-docs/sell/marketing/resources/promotion/methods/getPromotions\">getPromotions</a> to retrieve the IDs of the seller's promotions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Marketing\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Marketing\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Marketing\V1\Api\PromotionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$promotion_id = 'promotion_id_example'; // string | This path parameter takes a concatenation of the ID of the promotion you want to resume plus the marketplace ID on which the promotion is hosted. Concatenate the two values by separating them with an \"at sign\" (<b>@</b>).  <br><br>The ID of the promotion (<b>promotionId</b>) is a unique eBay-assigned value that's generated when the promotion is created. The Marketplace ID is the ENUM value of eBay marketplace where the promotion is hosted. <br><br><b>Example:</b> <code>1********5@EBAY_US</code>

try {
    $apiInstance->resumePromotion($promotion_id);
} catch (Exception $e) {
    echo 'Exception when calling PromotionApi->resumePromotion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **promotion_id** | **string**| This path parameter takes a concatenation of the ID of the promotion you want to resume plus the marketplace ID on which the promotion is hosted. Concatenate the two values by separating them with an \&quot;at sign\&quot; (&lt;b&gt;@&lt;/b&gt;).  &lt;br&gt;&lt;br&gt;The ID of the promotion (&lt;b&gt;promotionId&lt;/b&gt;) is a unique eBay-assigned value that&#39;s generated when the promotion is created. The Marketplace ID is the ENUM value of eBay marketplace where the promotion is hosted. &lt;br&gt;&lt;br&gt;&lt;b&gt;Example:&lt;/b&gt; &lt;code&gt;1********5@EBAY_US&lt;/code&gt; |

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
