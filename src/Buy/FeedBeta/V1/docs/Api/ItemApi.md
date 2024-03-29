# TNT\Ebay\Buy\FeedBeta\V1\ItemApi

All URIs are relative to https://api.ebay.com/buy/feed/v1_beta.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getItemFeed()**](ItemApi.md#getItemFeed) | **GET** /item | 


## `getItemFeed()`

```php
getItemFeed($accept, $x_ebay_c_marketplace_id, $range, $feed_scope, $category_id, $date): \TNT\Ebay\Buy\FeedBeta\V1\Model\ItemResponse
```



<p>This method lets you download a TSV_GZIP (tab separated value gzip) <b> Item</b> feed file. The feed file contains all the items from <b> all</b> the child categories of the specified category.  The first line of the file is the header, which labels the columns and indicates the order of the values on each line.  Each header is described in the <a href=\"/api-docs/buy/feed/resources/item/methods/getItemFeed#h3-response-fields\">Response fields</a> section.  </p> <p> There are two types of item feed files generated: <ul> <li>A daily <b>Item</b> feed file containing all the newly listed items for a specific category, date, and marketplace (<b>feed_scope</b> = <code>NEWLY_LISTED</code>)</li>  <li>A weekly <b>Item Bootstrap</b> feed file containing <i> all</i> the items in a specific category and marketplace (<b>feed_scope</b> = <code>ALL_ACTIVE</code>)</li>  </ul>  </p>   <p><span class=\"tablenote\"><b>Note: </b>  Filters are applied to the feed files. For details, see <a href=\"/api-docs/buy/static/api-feed_beta.html#Feed2\">Feed File Filters</a>. When curating the items returned, be sure to code as if these filters are not applied as they can be changed or removed in the future.</span></p>                                   <h3><b>URLs for this method</b></h3>   <p><ul>    <li><b> Production URL: </b> <code>https://api.ebay.com/buy/feed/v1_beta/item?</code></li>    <li><b> Sandbox URL:  </b><code>https://api.sandbox.ebay.com/buy/feed/v1_beta/item?</code></li>   </ul> </p>              <h3><b>Downloading feed files </b></h3>             <p>Item feed files are binary gzip files. If the file is larger than 100 MB, the download must be streamed in chunks. You specify the size of the chunks in bytes using the <a href=\"#range-header\">Range</a> request header. The <a href=\"#content-range\">Content-range</a> response header indicates where in the full resource this partial chunk of data belongs  and the total number of bytes in the file.       For more information about using these headers, see <a href=\"/api-docs/buy/static/api-feed.html#retrv-gzip\">Retrieving a gzip feed file</a>.    </p>    <p>In addition to the API, there is an open source <a href=\"https://github.com/eBay/FeedSDK\" target=\"_blank\">Feed SDK</a> written in Java that downloads, combines files into a single file when needed, and unzips the entire feed file. It also lets you specify field filters to curate the items in the file.</p>              <p><span class=\"tablenote\">  <b> Note:</b> A successful call will always return a TSV.GZIP file; however, unsuccessful calls generate errors that are returned in JSON format. For documentation purposes, the successful call response is shown below as JSON fields so that the value returned in each column can be explained. The order of the response fields shows the order of the columns in the feed file.</span>  </p>                <h3><b>Restrictions </b></h3>                <p>For a list of supported sites and other restrictions, see <a href=\"/api-docs/buy/feed/overview.html#API\">API Restrictions</a>.</p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Buy\FeedBeta\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Buy\FeedBeta\V1\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = 'accept_example'; // string | The formats that the client accepts for the response.<br /><br />A successful call will always return a TSV.GZIP file; however, unsuccessful calls generate errors that are returned in JSON format.<br /><br /><b>Default:</b> <code>application/json,text/tab-separated-values</code>
$x_ebay_c_marketplace_id = 'x_ebay_c_marketplace_id_example'; // string | The ID of the eBay marketplace where the item is hosted. <b>Note: </b> This value is case sensitive.<br /><br />For example: <br />&nbsp;&nbsp;<code>X-EBAY-C-MARKETPLACE-ID = EBAY_US</code>  <br /><br /> For a list of supported sites see, <a href=\"/api-docs/buy/feed/overview.html#API\">API Restrictions</a>.
$range = 'range_example'; // string | <a name=\"range-header\"></a>This header specifies the range in bytes of the chunks of the gzip file being returned. <br /><br /><b> Format:</b> <code >bytes=<em>startpos</em>-<em>endpos</em></code><br /><br />  For example, the following retrieves the first 10 MBs of the feed file. <br /><br />&nbsp;&nbsp;<code>Range bytes=0-10485760</code> <br /><br />For more information about using this header, see <a href=\"/api-docs/buy/static/api-feed.html#retrv-gzip\">Retrieving a gzip feed file</a>. <br /><br /><b>Maximum:</b> 100 MB (10MB in the Sandbox)
$feed_scope = 'feed_scope_example'; // string | Specifies the type of feed file to return. <br /><br /><b>Valid Values: </b>   <ul> <li><b> NEWLY_LISTED</b> - Returns the daily <b>Item</b> feed file containing all Good 'Til Cancelled items that were listed on the day specified by the <b> date</b> parameter in the category specified by the <b> category_id</b> parameter.<br /><br /><code>/item?feed_scope=NEWLY_LISTED&category_id=15032&date=20170925</code></li><li><b>ALL_ACTIVE</b> - Returns the weekly <b>Item Bootstrap</b> feed file containing all the Good 'Til Cancelled items in the category specified by the <b>category_id</b> parameter.<br /><br /><span class=\"tablenote\"><b>Note:</b> Bootstrap files are generated every Tuesday and the file is available on Wednesday. However, the exact time the file is available can vary so we recommend you download the Bootstrap file on Thursday. The items in the file are the items that were in the specified category on Sunday.</span> <br /><br /><code>/item?feed_scope=ALL_ACTIVE&category_id=15032</code>  </ul>
$category_id = 'category_id_example'; // string | An eBay top-level category ID of the items to be returned in the feed file. <br /> <br />The list of eBay category IDs changes over time and category IDs are not the same across all the eBay marketplaces. To get a list of the top-level categories for a marketplace, you can use the Taxonomy API <a href=\"/api-docs/commerce/taxonomy/resources/category_tree/methods/getCategoryTree\">getCategoryTree</a> method. This method retrieves the complete category tree for the marketplace. The top-level categories are identified by the <b>categoryTreeNodeLevel</b> field. <br /><br /><b>For example:</b><br />&nbsp;&nbsp;<code>\"categoryTreeNodeLevel\": 1</code> <br /><br />For details see <a href=\"/api-docs/buy/buy-categories.html\">Get Categories for Buy APIs</a>. </li>  </ul> <br /><br />   <b>Restriction:</b> Must be a top-level (L1) category other than Real Estate. Items listed under Real Estate L1 categories are excluded from all feeds in all marketplaces.
$date = 'date_example'; // string | The date of the daily <b>Item</b> feed file (<b>feed_scope</b>=<code>NEWLY_LISTED</code>) you want. <p>The <b> date</b> is required only for the daily <b>Item</b> feed file. If you specify a date for the <b>Item Bootstrap</b> file (<b>feed_scope</b>=<code>ALL_ACTIVE</code>), the date is ignored and the latest file is returned. The date the <b>Item Bootstrap</b> feed file was generated is returned in the <b>Last-Modified</b> response header.</code></p>    <p>The <b> Item</b> feed files are generated every day and there are 14 daily files available.</p>  <span class=\"tablenote\"> <b>Note: </b><ul>  <li>The daily <b>Item</b> feed files are available each day after 9AM MST (US Mountain Standard Time), which is -7 hours UTC time.</li>    <li>There is a 48 hour latency when generating the <b> Item</b> feed files. This means you can download the file for July 10th on July 12 after 9AM MST. <br /><br /><b>Note: </b> For categories with a large number of items, the latency can be up to 72 hours.</li> </ul></span> <p><b> Format: </b><code>yyyyMMdd</code><br /><br /><b> Requirements: </b> <ul>  <li>Required when <b>feed_scope</b>=<code>NEWLY_LISTED</code> </li>  <li>Must be within 3-14 days in the past</li></ul>

try {
    $result = $apiInstance->getItemFeed($accept, $x_ebay_c_marketplace_id, $range, $feed_scope, $category_id, $date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->getItemFeed: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| The formats that the client accepts for the response.&lt;br /&gt;&lt;br /&gt;A successful call will always return a TSV.GZIP file; however, unsuccessful calls generate errors that are returned in JSON format.&lt;br /&gt;&lt;br /&gt;&lt;b&gt;Default:&lt;/b&gt; &lt;code&gt;application/json,text/tab-separated-values&lt;/code&gt; |
 **x_ebay_c_marketplace_id** | **string**| The ID of the eBay marketplace where the item is hosted. &lt;b&gt;Note: &lt;/b&gt; This value is case sensitive.&lt;br /&gt;&lt;br /&gt;For example: &lt;br /&gt;&amp;nbsp;&amp;nbsp;&lt;code&gt;X-EBAY-C-MARKETPLACE-ID &#x3D; EBAY_US&lt;/code&gt;  &lt;br /&gt;&lt;br /&gt; For a list of supported sites see, &lt;a href&#x3D;\&quot;/api-docs/buy/feed/overview.html#API\&quot;&gt;API Restrictions&lt;/a&gt;. |
 **range** | **string**| &lt;a name&#x3D;\&quot;range-header\&quot;&gt;&lt;/a&gt;This header specifies the range in bytes of the chunks of the gzip file being returned. &lt;br /&gt;&lt;br /&gt;&lt;b&gt; Format:&lt;/b&gt; &lt;code &gt;bytes&#x3D;&lt;em&gt;startpos&lt;/em&gt;-&lt;em&gt;endpos&lt;/em&gt;&lt;/code&gt;&lt;br /&gt;&lt;br /&gt;  For example, the following retrieves the first 10 MBs of the feed file. &lt;br /&gt;&lt;br /&gt;&amp;nbsp;&amp;nbsp;&lt;code&gt;Range bytes&#x3D;0-10485760&lt;/code&gt; &lt;br /&gt;&lt;br /&gt;For more information about using this header, see &lt;a href&#x3D;\&quot;/api-docs/buy/static/api-feed.html#retrv-gzip\&quot;&gt;Retrieving a gzip feed file&lt;/a&gt;. &lt;br /&gt;&lt;br /&gt;&lt;b&gt;Maximum:&lt;/b&gt; 100 MB (10MB in the Sandbox) |
 **feed_scope** | **string**| Specifies the type of feed file to return. &lt;br /&gt;&lt;br /&gt;&lt;b&gt;Valid Values: &lt;/b&gt;   &lt;ul&gt; &lt;li&gt;&lt;b&gt; NEWLY_LISTED&lt;/b&gt; - Returns the daily &lt;b&gt;Item&lt;/b&gt; feed file containing all Good &#39;Til Cancelled items that were listed on the day specified by the &lt;b&gt; date&lt;/b&gt; parameter in the category specified by the &lt;b&gt; category_id&lt;/b&gt; parameter.&lt;br /&gt;&lt;br /&gt;&lt;code&gt;/item?feed_scope&#x3D;NEWLY_LISTED&amp;category_id&#x3D;15032&amp;date&#x3D;20170925&lt;/code&gt;&lt;/li&gt;&lt;li&gt;&lt;b&gt;ALL_ACTIVE&lt;/b&gt; - Returns the weekly &lt;b&gt;Item Bootstrap&lt;/b&gt; feed file containing all the Good &#39;Til Cancelled items in the category specified by the &lt;b&gt;category_id&lt;/b&gt; parameter.&lt;br /&gt;&lt;br /&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; Bootstrap files are generated every Tuesday and the file is available on Wednesday. However, the exact time the file is available can vary so we recommend you download the Bootstrap file on Thursday. The items in the file are the items that were in the specified category on Sunday.&lt;/span&gt; &lt;br /&gt;&lt;br /&gt;&lt;code&gt;/item?feed_scope&#x3D;ALL_ACTIVE&amp;category_id&#x3D;15032&lt;/code&gt;  &lt;/ul&gt; |
 **category_id** | **string**| An eBay top-level category ID of the items to be returned in the feed file. &lt;br /&gt; &lt;br /&gt;The list of eBay category IDs changes over time and category IDs are not the same across all the eBay marketplaces. To get a list of the top-level categories for a marketplace, you can use the Taxonomy API &lt;a href&#x3D;\&quot;/api-docs/commerce/taxonomy/resources/category_tree/methods/getCategoryTree\&quot;&gt;getCategoryTree&lt;/a&gt; method. This method retrieves the complete category tree for the marketplace. The top-level categories are identified by the &lt;b&gt;categoryTreeNodeLevel&lt;/b&gt; field. &lt;br /&gt;&lt;br /&gt;&lt;b&gt;For example:&lt;/b&gt;&lt;br /&gt;&amp;nbsp;&amp;nbsp;&lt;code&gt;\&quot;categoryTreeNodeLevel\&quot;: 1&lt;/code&gt; &lt;br /&gt;&lt;br /&gt;For details see &lt;a href&#x3D;\&quot;/api-docs/buy/buy-categories.html\&quot;&gt;Get Categories for Buy APIs&lt;/a&gt;. &lt;/li&gt;  &lt;/ul&gt; &lt;br /&gt;&lt;br /&gt;   &lt;b&gt;Restriction:&lt;/b&gt; Must be a top-level (L1) category other than Real Estate. Items listed under Real Estate L1 categories are excluded from all feeds in all marketplaces. |
 **date** | **string**| The date of the daily &lt;b&gt;Item&lt;/b&gt; feed file (&lt;b&gt;feed_scope&lt;/b&gt;&#x3D;&lt;code&gt;NEWLY_LISTED&lt;/code&gt;) you want. &lt;p&gt;The &lt;b&gt; date&lt;/b&gt; is required only for the daily &lt;b&gt;Item&lt;/b&gt; feed file. If you specify a date for the &lt;b&gt;Item Bootstrap&lt;/b&gt; file (&lt;b&gt;feed_scope&lt;/b&gt;&#x3D;&lt;code&gt;ALL_ACTIVE&lt;/code&gt;), the date is ignored and the latest file is returned. The date the &lt;b&gt;Item Bootstrap&lt;/b&gt; feed file was generated is returned in the &lt;b&gt;Last-Modified&lt;/b&gt; response header.&lt;/code&gt;&lt;/p&gt;    &lt;p&gt;The &lt;b&gt; Item&lt;/b&gt; feed files are generated every day and there are 14 daily files available.&lt;/p&gt;  &lt;span class&#x3D;\&quot;tablenote\&quot;&gt; &lt;b&gt;Note: &lt;/b&gt;&lt;ul&gt;  &lt;li&gt;The daily &lt;b&gt;Item&lt;/b&gt; feed files are available each day after 9AM MST (US Mountain Standard Time), which is -7 hours UTC time.&lt;/li&gt;    &lt;li&gt;There is a 48 hour latency when generating the &lt;b&gt; Item&lt;/b&gt; feed files. This means you can download the file for July 10th on July 12 after 9AM MST. &lt;br /&gt;&lt;br /&gt;&lt;b&gt;Note: &lt;/b&gt; For categories with a large number of items, the latency can be up to 72 hours.&lt;/li&gt; &lt;/ul&gt;&lt;/span&gt; &lt;p&gt;&lt;b&gt; Format: &lt;/b&gt;&lt;code&gt;yyyyMMdd&lt;/code&gt;&lt;br /&gt;&lt;br /&gt;&lt;b&gt; Requirements: &lt;/b&gt; &lt;ul&gt;  &lt;li&gt;Required when &lt;b&gt;feed_scope&lt;/b&gt;&#x3D;&lt;code&gt;NEWLY_LISTED&lt;/code&gt; &lt;/li&gt;  &lt;li&gt;Must be within 3-14 days in the past&lt;/li&gt;&lt;/ul&gt; | [optional]

### Return type

[**\TNT\Ebay\Buy\FeedBeta\V1\Model\ItemResponse**](../Model/ItemResponse.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/tab-separated-values`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
