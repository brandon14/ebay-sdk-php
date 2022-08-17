# TNT\Ebay\Sell\ListingBeta\V1\ItemDraftApi

All URIs are relative to https://api.ebay.com/sell/listing/v1_beta.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createItemDraft()**](ItemDraftApi.md#createItemDraft) | **POST** /item_draft/ | 


## `createItemDraft()`

```php
createItemDraft($x_ebay_c_marketplace_id, $content_language, $item_draft): \TNT\Ebay\Sell\ListingBeta\V1\Model\ItemDraftResponse
```



This call gives Partners the ability to create an eBay draft of a item for their seller using information from their site. <br /><br />This lets the Partner increase the exposure of items on their site and leverage the eBay user listing experience seamlessly. This experience provides guidance on pricing, aspects, etc. and recommendations that help create a listing that is complete and improves the exposure of the listing in search results. <br /><br />After the listing draft is created, the seller logs into their eBay account and uses the listing experience to finish the listing and publish the item on eBay.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\ListingBeta\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\ListingBeta\V1\Api\ItemDraftApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_ebay_c_marketplace_id = 'x_ebay_c_marketplace_id_example'; // string | Use this header to specify an eBay marketplace ID. For a list of supported sites, see <a href=\"/api-docs/sell/listing/overview.html#API\">API Restrictions</a> in the Listing API overview.
$content_language = 'content_language_example'; // string | Use this header to specify the natural language of the seller. For details, see Content-Language in <a href=\"/api-docs/static/rest-request-components.html#headers\">HTTP request headers</a>. <br /><br /><b> Required: </b>For EBAY_CA in French. <br /><br />(Content-Language = <code>fr-CA</code>)
$item_draft = new \TNT\Ebay\Sell\ListingBeta\V1\Model\ItemDraft(); // \TNT\Ebay\Sell\ListingBeta\V1\Model\ItemDraft

try {
    $result = $apiInstance->createItemDraft($x_ebay_c_marketplace_id, $content_language, $item_draft);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemDraftApi->createItemDraft: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_ebay_c_marketplace_id** | **string**| Use this header to specify an eBay marketplace ID. For a list of supported sites, see &lt;a href&#x3D;\&quot;/api-docs/sell/listing/overview.html#API\&quot;&gt;API Restrictions&lt;/a&gt; in the Listing API overview. |
 **content_language** | **string**| Use this header to specify the natural language of the seller. For details, see Content-Language in &lt;a href&#x3D;\&quot;/api-docs/static/rest-request-components.html#headers\&quot;&gt;HTTP request headers&lt;/a&gt;. &lt;br /&gt;&lt;br /&gt;&lt;b&gt; Required: &lt;/b&gt;For EBAY_CA in French. &lt;br /&gt;&lt;br /&gt;(Content-Language &#x3D; &lt;code&gt;fr-CA&lt;/code&gt;) | [optional]
 **item_draft** | [**\TNT\Ebay\Sell\ListingBeta\V1\Model\ItemDraft**](../Model/ItemDraft.md)|  | [optional]

### Return type

[**\TNT\Ebay\Sell\ListingBeta\V1\Model\ItemDraftResponse**](../Model/ItemDraftResponse.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
