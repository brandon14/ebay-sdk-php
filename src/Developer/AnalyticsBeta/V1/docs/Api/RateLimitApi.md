# TNT\Ebay\Developer\AnalyticsBeta\V1\RateLimitApi

All URIs are relative to https://api.ebay.com/developer/analytics/v1_beta.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getRateLimits()**](RateLimitApi.md#getRateLimits) | **GET** /rate_limit/ | 


## `getRateLimits()`

```php
getRateLimits($api_context, $api_name): \TNT\Ebay\Developer\AnalyticsBeta\V1\Model\RateLimitsResponse
```



This method retrieves the call limit and utilization data for an application. The data is retrieved for all RESTful APIs and the legacy Trading API.  <br><br>The response from <b>getRateLimits</b> includes a list of the applicable resources and the \"call limit\", or quota, that is set for each resource. In addition to quota information, the response also includes the number of remaining calls available before the limit is reached, the time remaining before the quota resets, and the length of the \"time window\" to which the quota applies.  <br><br>By default, this method returns utilization data for all RESTful API and the legacy Trading API resources. Use the <b>api_name</b> and <b>api_context</b> query parameters to filter the response to only the desired APIs.  <br><br>For more on call limits, see <a href=\"https://developer.ebay.com/support/app-check\" target=\"_blank\">Compatible Application Check</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Developer\AnalyticsBeta\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Developer\AnalyticsBeta\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Developer\AnalyticsBeta\V1\Api\RateLimitApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$api_context = 'api_context_example'; // string | This optional query parameter filters the result to include only the specified API context. <br /><br /><b>Valid values:</b> <ul><li><code>buy</code></li><li><code>sell</code></li> <li><code>commerce</code></li><li><code>developer</code></li><li><code>tradingapi</code></li></ul>
$api_name = 'api_name_example'; // string | This optional query parameter filters the result to include only the APIs specified. <br /><br /><b>Example values:</b> <ul> <li><code>browse</code> for the <a href=\"/../develop/apis/restful-apis/buy-apis#buy-apis\" target=\"_blank\">Buy APIs</a></li> <li><code>inventory</code> for the <a href=\"/../develop/apis/restful-apis/sell-apis#sell-apis\" target=\"_blank\">Sell APIs</a></li>  <li><code>taxonomy</code> for the <a href=\"/../develop/apis/restful-apis/commerce-apis#commerce-apis\" target=\"_blank\">Commerce APIs</a> context</li>  <li><code>tradingapi</code> for the <a href=\"/../Devzone/XML/docs/Reference/eBay/index.html\" target=\"_blank\">Trading APIs</a></li></ul>

try {
    $result = $apiInstance->getRateLimits($api_context, $api_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RateLimitApi->getRateLimits: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_context** | **string**| This optional query parameter filters the result to include only the specified API context. &lt;br /&gt;&lt;br /&gt;&lt;b&gt;Valid values:&lt;/b&gt; &lt;ul&gt;&lt;li&gt;&lt;code&gt;buy&lt;/code&gt;&lt;/li&gt;&lt;li&gt;&lt;code&gt;sell&lt;/code&gt;&lt;/li&gt; &lt;li&gt;&lt;code&gt;commerce&lt;/code&gt;&lt;/li&gt;&lt;li&gt;&lt;code&gt;developer&lt;/code&gt;&lt;/li&gt;&lt;li&gt;&lt;code&gt;tradingapi&lt;/code&gt;&lt;/li&gt;&lt;/ul&gt; | [optional]
 **api_name** | **string**| This optional query parameter filters the result to include only the APIs specified. &lt;br /&gt;&lt;br /&gt;&lt;b&gt;Example values:&lt;/b&gt; &lt;ul&gt; &lt;li&gt;&lt;code&gt;browse&lt;/code&gt; for the &lt;a href&#x3D;\&quot;/../develop/apis/restful-apis/buy-apis#buy-apis\&quot; target&#x3D;\&quot;_blank\&quot;&gt;Buy APIs&lt;/a&gt;&lt;/li&gt; &lt;li&gt;&lt;code&gt;inventory&lt;/code&gt; for the &lt;a href&#x3D;\&quot;/../develop/apis/restful-apis/sell-apis#sell-apis\&quot; target&#x3D;\&quot;_blank\&quot;&gt;Sell APIs&lt;/a&gt;&lt;/li&gt;  &lt;li&gt;&lt;code&gt;taxonomy&lt;/code&gt; for the &lt;a href&#x3D;\&quot;/../develop/apis/restful-apis/commerce-apis#commerce-apis\&quot; target&#x3D;\&quot;_blank\&quot;&gt;Commerce APIs&lt;/a&gt; context&lt;/li&gt;  &lt;li&gt;&lt;code&gt;tradingapi&lt;/code&gt; for the &lt;a href&#x3D;\&quot;/../Devzone/XML/docs/Reference/eBay/index.html\&quot; target&#x3D;\&quot;_blank\&quot;&gt;Trading APIs&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt; | [optional]

### Return type

[**\TNT\Ebay\Developer\AnalyticsBeta\V1\Model\RateLimitsResponse**](../Model/RateLimitsResponse.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
