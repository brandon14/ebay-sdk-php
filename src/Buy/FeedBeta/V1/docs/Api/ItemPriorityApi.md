# TNT\Ebay\Buy\FeedBeta\V1\ItemPriorityApi

All URIs are relative to https://api.ebay.com/buy/feed/v1_beta.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getItemPriorityFeed()**](ItemPriorityApi.md#getItemPriorityFeed) | **GET** /item_priority | 


## `getItemPriorityFeed()`

```php
getItemPriorityFeed($accept, $x_ebay_c_marketplace_id, $range, $category_id, $date): \TNT\Ebay\Buy\FeedBeta\V1\Model\ItemPriorityResponse
```



<p>Using this method, you can download a TSV_GZIP (tab separated value gzip) <b>Item Priority</b> feed file, which allows you to track changes (deltas) in the status of your priority items, such as when an item is added or removed from a campaign.  The delta feed tracks the changes to the status of items within a category you specify in the input URI. You can also specify a specific date for the feed you want returned.</p><p><span class=\"tablenote\"><span style=\"color:#FF0000\"> <b> Important:</b> </span> You must consume the daily feeds (<b>Item</b>, <b>Item Group</b>) before consuming the <b>Item Priority</b> feed. This ensures that your inventory is up to date.</span></p>                                   <h3><b>URLs for this method</b></h3>   <p><ul>    <li><b> Production URL: </b> <code>https://api.ebay.com/buy/feed/v1_beta/item_priority?</code></li>    <li><b> Sandbox URL:  </b><code>https://api.sandbox.ebay.com/buy/feed/v1_beta/item_priority?</code></li>   </ul> </p>              <h3><b>Downloading feed files </b></h3>             <p><span class=\"tablenote\"><b>Note: </b> Filters are applied to the feed files. For details, see <a href=\"/api-docs/buy/static/api-feed.html#feed-filters\">Feed File Filters</a>. When curating the items returned, be sure to code as if these filters are not applied as they can be changed or removed in the future.</span></p><p>Priority Item feed files are binary gzip files. If the file is larger than 100 MB, the download must be streamed in chunks. You specify the size of the chunks in bytes using the <a href=\"#range-header\">Range</a> request header. The <a href=\"#content-range\">Content-range</a> response header indicates where in the full resource this partial chunk of data belongs  and the total number of bytes in the file.       For more information about using these headers, see <a href=\"/api-docs/buy/static/api-feed.html#retrv-gzip\">Retrieving a gzip feed file</a>.    </p>    <p>In addition to the API, there is an open source <a href=\"https://github.com/eBay/FeedSDK\" target=\"_blank\">Feed SDK</a> written in Java that downloads, combines files into a single file when needed, and unzips the entire feed file. It also lets you specify field filters to curate the items in the file.</p>              <p><span class=\"tablenote\">  <b> Note:</b>  A successful call will always return a TSV.GZIP file; however, unsuccessful calls generate errors that are returned in JSON format. For documentation purposes, the successful call response is shown below as JSON fields so that the value returned in each column can be explained. The order of the response fields shows the order of the columns in the feed file.</span>  </p>                <h3><b>Restrictions </b></h3>                <p>For a list of supported sites and other restrictions, see <a href=\"/api-docs/buy/feed/overview.html#API\">API Restrictions</a>.</p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Buy\FeedBeta\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Buy\FeedBeta\V1\Api\ItemPriorityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = 'accept_example'; // string | The formats that the client accepts for the response.<br /><br />A successful call will always return a TSV.GZIP file; however, unsuccessful calls generate error codes that are returned in JSON format.<br /><br /><b>Default:</b> <code>application/json,text/tab-separated-values</code>
$x_ebay_c_marketplace_id = 'x_ebay_c_marketplace_id_example'; // string | The ID of the eBay marketplace where the item is hosted. <b>Note: </b> This value is case sensitive.<br /><br />For example: <br />&nbsp;&nbsp;<code>X-EBAY-C-MARKETPLACE-ID = EBAY_US</code>  <br /><br /> For a list of supported sites see, <a href=\"/api-docs/buy/static/ref-marketplace-supported.html\">Buy API Support by Marketplace</a>.
$range = 'range_example'; // string | Header specifying content range to be retrieved. Only supported range is bytes.<br /> <br /><b>Example</b> : <code>bytes = 0-102400</code>.
$category_id = 'category_id_example'; // string | An eBay top-level category ID of the items to be returned in the feed file.<br /> <br />The list of eBay category IDs changes over time and category IDs are not the same across all the eBay marketplaces. To get a list of the top-level categories for a marketplaces, you can use the Taxonomy API <a href=\"/api-docs/commerce/taxonomy/resources/category_tree/methods/getCategoryTree\">getCategoryTree</a> method. This method retrieves the complete category tree for the marketplace. The top-level categories are identified by the <b>categoryTreeNodeLevel</b> field.<br /><br /><b>For example:</b><br />&nbsp;&nbsp;<code>\"categoryTreeNodeLevel\": 1</code> <br /><br />For details see <a href=\"/api-docs/buy/api-feed.html#Getcat\">Get the eBay categories of a marketplace</a>.</li></ul><br /><br /><b>Restriction:</b> Must be a top-level category other than Real Estate. Items listed under Real Estate L1 categories are excluded from all feeds in all marketplaces.
$date = 'date_example'; // string | The date of the feed you want returned. This can be up to 14 days in the past but cannot be set to a date in the future.<br /> <br /><b>Format:</b> <code>yyyyMMdd</code><br ><br /><span class=\"tablenote\"> <b>Note: </b><ul>  <li>The daily <b>Item</b> feed files are available each day after 9AM MST (US Mountain Standard Time), which is -7 hours UTC time.</li>    <li>There is a 48 hour latency when generating the <b> Item</b> feed files. This means you can download the file for July 10th on July 12 after 9AM MST. <br /><br /><b>Note: </b> For categories with a large number of items, the latency can be up to 72 hours.</li> </ul></span>

try {
    $result = $apiInstance->getItemPriorityFeed($accept, $x_ebay_c_marketplace_id, $range, $category_id, $date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemPriorityApi->getItemPriorityFeed: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| The formats that the client accepts for the response.&lt;br /&gt;&lt;br /&gt;A successful call will always return a TSV.GZIP file; however, unsuccessful calls generate error codes that are returned in JSON format.&lt;br /&gt;&lt;br /&gt;&lt;b&gt;Default:&lt;/b&gt; &lt;code&gt;application/json,text/tab-separated-values&lt;/code&gt; |
 **x_ebay_c_marketplace_id** | **string**| The ID of the eBay marketplace where the item is hosted. &lt;b&gt;Note: &lt;/b&gt; This value is case sensitive.&lt;br /&gt;&lt;br /&gt;For example: &lt;br /&gt;&amp;nbsp;&amp;nbsp;&lt;code&gt;X-EBAY-C-MARKETPLACE-ID &#x3D; EBAY_US&lt;/code&gt;  &lt;br /&gt;&lt;br /&gt; For a list of supported sites see, &lt;a href&#x3D;\&quot;/api-docs/buy/static/ref-marketplace-supported.html\&quot;&gt;Buy API Support by Marketplace&lt;/a&gt;. |
 **range** | **string**| Header specifying content range to be retrieved. Only supported range is bytes.&lt;br /&gt; &lt;br /&gt;&lt;b&gt;Example&lt;/b&gt; : &lt;code&gt;bytes &#x3D; 0-102400&lt;/code&gt;. |
 **category_id** | **string**| An eBay top-level category ID of the items to be returned in the feed file.&lt;br /&gt; &lt;br /&gt;The list of eBay category IDs changes over time and category IDs are not the same across all the eBay marketplaces. To get a list of the top-level categories for a marketplaces, you can use the Taxonomy API &lt;a href&#x3D;\&quot;/api-docs/commerce/taxonomy/resources/category_tree/methods/getCategoryTree\&quot;&gt;getCategoryTree&lt;/a&gt; method. This method retrieves the complete category tree for the marketplace. The top-level categories are identified by the &lt;b&gt;categoryTreeNodeLevel&lt;/b&gt; field.&lt;br /&gt;&lt;br /&gt;&lt;b&gt;For example:&lt;/b&gt;&lt;br /&gt;&amp;nbsp;&amp;nbsp;&lt;code&gt;\&quot;categoryTreeNodeLevel\&quot;: 1&lt;/code&gt; &lt;br /&gt;&lt;br /&gt;For details see &lt;a href&#x3D;\&quot;/api-docs/buy/api-feed.html#Getcat\&quot;&gt;Get the eBay categories of a marketplace&lt;/a&gt;.&lt;/li&gt;&lt;/ul&gt;&lt;br /&gt;&lt;br /&gt;&lt;b&gt;Restriction:&lt;/b&gt; Must be a top-level category other than Real Estate. Items listed under Real Estate L1 categories are excluded from all feeds in all marketplaces. |
 **date** | **string**| The date of the feed you want returned. This can be up to 14 days in the past but cannot be set to a date in the future.&lt;br /&gt; &lt;br /&gt;&lt;b&gt;Format:&lt;/b&gt; &lt;code&gt;yyyyMMdd&lt;/code&gt;&lt;br &gt;&lt;br /&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt; &lt;b&gt;Note: &lt;/b&gt;&lt;ul&gt;  &lt;li&gt;The daily &lt;b&gt;Item&lt;/b&gt; feed files are available each day after 9AM MST (US Mountain Standard Time), which is -7 hours UTC time.&lt;/li&gt;    &lt;li&gt;There is a 48 hour latency when generating the &lt;b&gt; Item&lt;/b&gt; feed files. This means you can download the file for July 10th on July 12 after 9AM MST. &lt;br /&gt;&lt;br /&gt;&lt;b&gt;Note: &lt;/b&gt; For categories with a large number of items, the latency can be up to 72 hours.&lt;/li&gt; &lt;/ul&gt;&lt;/span&gt; |

### Return type

[**\TNT\Ebay\Buy\FeedBeta\V1\Model\ItemPriorityResponse**](../Model/ItemPriorityResponse.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/tab-separated-values`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
