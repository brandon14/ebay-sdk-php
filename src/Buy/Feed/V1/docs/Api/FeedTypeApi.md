# TNT\Ebay\Buy\Feed\V1\FeedTypeApi

All URIs are relative to https://api.ebay.com/buy/feed/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getFeedType()**](FeedTypeApi.md#getFeedType) | **GET** /feed_type/{feed_type_id} | 
[**getFeedTypes()**](FeedTypeApi.md#getFeedTypes) | **GET** /feed_type | 


## `getFeedType()`

```php
getFeedType($feed_type_id): \TNT\Ebay\Buy\Feed\V1\Model\FeedType
```



Use the <b>getFeedType</b> method to obtain the details about a particular feed type to determine its applicability to your needs.<br /><br />With the response, you can compare the eBay marketplaces and categories with the eBay marketplaces and categories that your application is enabled to access. By making these comparisons, you can avoid attempting to download feed files that you do not have access to.<br /><br /><span class=\"tablenote\"><span style=\"color:#004680\"><strong>Note:</strong></span> For a list of supported sites and other restrictions, see <a href=\"/api-docs/buy/feed/overview.html#API\">API Restrictions</a>.</span>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Buy\Feed\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Buy\Feed\V1\Api\FeedTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$feed_type_id = 'feed_type_id_example'; // string | The unique identifier for the feed type to be used as a search filter.<br /><br />Use the <b>getFeedTypes</b> method to identify the available feed types.<br /><br /><span class=\"tablenote\"><span style=\"color:#004680\"><strong>Note:</strong></span> Refer to <a href=\"/api-docs/buy/feed/v1/static/overview.html#feed-types\" target=\"_blank\">Supported feed types</a> to learn more about the feed types supported by the Feed API.</span>

try {
    $result = $apiInstance->getFeedType($feed_type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeedTypeApi->getFeedType: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **feed_type_id** | **string**| The unique identifier for the feed type to be used as a search filter.&lt;br /&gt;&lt;br /&gt;Use the &lt;b&gt;getFeedTypes&lt;/b&gt; method to identify the available feed types.&lt;br /&gt;&lt;br /&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;span style&#x3D;\&quot;color:#004680\&quot;&gt;&lt;strong&gt;Note:&lt;/strong&gt;&lt;/span&gt; Refer to &lt;a href&#x3D;\&quot;/api-docs/buy/feed/v1/static/overview.html#feed-types\&quot; target&#x3D;\&quot;_blank\&quot;&gt;Supported feed types&lt;/a&gt; to learn more about the feed types supported by the Feed API.&lt;/span&gt; |

### Return type

[**\TNT\Ebay\Buy\Feed\V1\Model\FeedType**](../Model/FeedType.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFeedTypes()`

```php
getFeedTypes($continuation_token, $feed_scope, $limit, $marketplace_ids): \TNT\Ebay\Buy\Feed\V1\Model\FeedTypeSearchResponse
```



<p>Use the <b>getFeedTypes</b> method to obtain the details about one or more feed types that are available to be downloaded. If no query parameters are used, all possible feed types are returned.</p>You can filter your search by adding <b>feed_scope</b> and/or <b>marketplace_ids</b> parameters to the URI.</p><p>For instance, a call using <code>GET https://api.ebay.com/buy/feed/v1/feed_type</code> will return all available feed files. A call using <code> GET https://api.ebay.com/buy/feed/v1/feed_type?feed_scope=DAILY&marketplace_ids=EBAY_US</code> will limit the returned list to daily feed files available from the  US marketplace.</p><h3><b>Restrictions </b></h3><p>For a list of supported sites and other restrictions, see <a href=\"/api-docs/buy/feed/v1/overview.html#API\">API Restrictions</a>.</p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Buy\Feed\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Buy\Feed\V1\Api\FeedTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$continuation_token = 'continuation_token_example'; // string | The server returns this token to the web client when the responses received require multiple pages to display. The web client sends this token back to the server to get the next page of results.
$feed_scope = 'feed_scope_example'; // string | Specifies the frequency with which the feed file is made available (<code>HOURLY</code>, <code>DAILY</code>, <code>WEEKLY</code>).<br /><br />Currently only <code>DAILY</code> is supported.
$limit = 'limit_example'; // string | The number of records to show in the current response.<br /><br /><b>Default:</b> 20<br /><b>Minimum:</b> 20<br /><b>Maximum:</b> 100
$marketplace_ids = 'marketplace_ids_example'; // string | Use this parameter to limit marketplaces you want to see. To search for multiple marketplaces at once, list them in the URI separated by commas.<br /><br /><b>Example:</b> <code>GET https://api.ebay.com/buy/feed/v1/feedtype?marketplaceids=EBAY_FR,EBAY_AU</code>.<br /><br />See <a href=\"/api-docs/buy/feed/v1/overview.html#API\">API Restrictions</a> for information on supported sites.

try {
    $result = $apiInstance->getFeedTypes($continuation_token, $feed_scope, $limit, $marketplace_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeedTypeApi->getFeedTypes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **continuation_token** | **string**| The server returns this token to the web client when the responses received require multiple pages to display. The web client sends this token back to the server to get the next page of results. | [optional]
 **feed_scope** | **string**| Specifies the frequency with which the feed file is made available (&lt;code&gt;HOURLY&lt;/code&gt;, &lt;code&gt;DAILY&lt;/code&gt;, &lt;code&gt;WEEKLY&lt;/code&gt;).&lt;br /&gt;&lt;br /&gt;Currently only &lt;code&gt;DAILY&lt;/code&gt; is supported. | [optional]
 **limit** | **string**| The number of records to show in the current response.&lt;br /&gt;&lt;br /&gt;&lt;b&gt;Default:&lt;/b&gt; 20&lt;br /&gt;&lt;b&gt;Minimum:&lt;/b&gt; 20&lt;br /&gt;&lt;b&gt;Maximum:&lt;/b&gt; 100 | [optional]
 **marketplace_ids** | **string**| Use this parameter to limit marketplaces you want to see. To search for multiple marketplaces at once, list them in the URI separated by commas.&lt;br /&gt;&lt;br /&gt;&lt;b&gt;Example:&lt;/b&gt; &lt;code&gt;GET https://api.ebay.com/buy/feed/v1/feedtype?marketplaceids&#x3D;EBAY_FR,EBAY_AU&lt;/code&gt;.&lt;br /&gt;&lt;br /&gt;See &lt;a href&#x3D;\&quot;/api-docs/buy/feed/v1/overview.html#API\&quot;&gt;API Restrictions&lt;/a&gt; for information on supported sites. | [optional]

### Return type

[**\TNT\Ebay\Buy\Feed\V1\Model\FeedTypeSearchResponse**](../Model/FeedTypeSearchResponse.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
