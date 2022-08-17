# TNT\Ebay\Buy\Feed\V1\FileApi

All URIs are relative to https://api.ebay.com/buy/feed/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**downloadFile()**](FileApi.md#downloadFile) | **GET** /file/{file_id}/download | 
[**getFile()**](FileApi.md#getFile) | **GET** /file/{file_id} | 
[**getFiles()**](FileApi.md#getFiles) | **GET** /file | 


## `downloadFile()`

```php
downloadFile($file_id, $x_ebay_c_marketplace_id, $range): object
```



<p>Use the <b>downloadFile</b> method to download a selected TSV_gzip feed file.<p>Use the <b>getFiles</b> methods to obtain the <b>file_id</b> of the specific feed file you require.</p><h3><b>Downloading feed files </b></h3>  <p>The feed files are binary gzip files. If the file is larger than 200 MB, the download must be streamed in chunks. You specify the size of the chunks in bytes using the <a href=\"#range-header\">Range</a> request header. The <a href=\"#content-range\">content-range</a> response header indicates where in the full resource this partial chunk of data belongs  and the total number of bytes in the file.       For more information about using these headers, see <a href=\"/api-docs/buy/static/api-feed.html#retrv-gzip\">Retrieving a GZIP feed file</a>.    </p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Buy\Feed\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Buy\Feed\V1\Api\FileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file_id = 'file_id_example'; // string | The unique identifier of the feed file that you wish to download. Use the <b>getFiles</b> method to obtain the <b>fileId</b> value for the desired feed file.
$x_ebay_c_marketplace_id = 'x_ebay_c_marketplace_id_example'; // string | This is the ID of the eBay marketplace that the feed file belongs to. <br /><br /><b>Example:</b><code>X-EBAY-C-MARKETPLACE-ID: EBAY_US</code>.<br /><br />For a list of supported sites and other restrictions, see <a href=\"/api-docs/buy/feed/overview.html#API\">API Restrictions</a>.
$range = 'range_example'; // string | Indicates where in the full resource this partial chunk of data belongs and the total number of bytes in the file.<br /><br /><b>Example: </b> <code>bytes=0-102400</code>.<br /><br />For more information about using this header, see <a href=\"/api-docs/buy/static/api-feed.html#retrv-gzip\">Retrieving a gzip feed file</a>.

try {
    $result = $apiInstance->downloadFile($file_id, $x_ebay_c_marketplace_id, $range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->downloadFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file_id** | **string**| The unique identifier of the feed file that you wish to download. Use the &lt;b&gt;getFiles&lt;/b&gt; method to obtain the &lt;b&gt;fileId&lt;/b&gt; value for the desired feed file. |
 **x_ebay_c_marketplace_id** | **string**| This is the ID of the eBay marketplace that the feed file belongs to. &lt;br /&gt;&lt;br /&gt;&lt;b&gt;Example:&lt;/b&gt;&lt;code&gt;X-EBAY-C-MARKETPLACE-ID: EBAY_US&lt;/code&gt;.&lt;br /&gt;&lt;br /&gt;For a list of supported sites and other restrictions, see &lt;a href&#x3D;\&quot;/api-docs/buy/feed/overview.html#API\&quot;&gt;API Restrictions&lt;/a&gt;. |
 **range** | **string**| Indicates where in the full resource this partial chunk of data belongs and the total number of bytes in the file.&lt;br /&gt;&lt;br /&gt;&lt;b&gt;Example: &lt;/b&gt; &lt;code&gt;bytes&#x3D;0-102400&lt;/code&gt;.&lt;br /&gt;&lt;br /&gt;For more information about using this header, see &lt;a href&#x3D;\&quot;/api-docs/buy/static/api-feed.html#retrv-gzip\&quot;&gt;Retrieving a gzip feed file&lt;/a&gt;. | [optional]

### Return type

**object**

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFile()`

```php
getFile($file_id, $x_ebay_c_marketplace_id): \TNT\Ebay\Buy\Feed\V1\Model\FileMetadata
```



Use the <b>getFile</b> method to fetch the details of a feed file available to download, as specified by the file's <b>file_id</b>.</p><p>Details in the response include: the feed's <b>file_id</b>, the date it became available, eBay categories that support the feed, its frequency, the time span it covers, its feed type, its format (currently only TSV is available), its size in bytes, the schema under which it was pulled, and the marketplaces it applies to.</p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Buy\Feed\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Buy\Feed\V1\Api\FileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file_id = 'file_id_example'; // string | Unique identifier of feed file. Feed file IDs can be retrieved with the <b>getFiles</b> method.
$x_ebay_c_marketplace_id = 'x_ebay_c_marketplace_id_example'; // string | This is the ID of the eBay marketplace on which the feed file exists. <br /><br /><b>Example:</b> <code>X-EBAY-C-MARKETPLACE-ID: EBAY_US</code>.<br /><br />For a list of supported sites and other restrictions, see <a href=\"/api-docs/buy/feed/overview.html#API\">API Restrictions</a>.

try {
    $result = $apiInstance->getFile($file_id, $x_ebay_c_marketplace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->getFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file_id** | **string**| Unique identifier of feed file. Feed file IDs can be retrieved with the &lt;b&gt;getFiles&lt;/b&gt; method. |
 **x_ebay_c_marketplace_id** | **string**| This is the ID of the eBay marketplace on which the feed file exists. &lt;br /&gt;&lt;br /&gt;&lt;b&gt;Example:&lt;/b&gt; &lt;code&gt;X-EBAY-C-MARKETPLACE-ID: EBAY_US&lt;/code&gt;.&lt;br /&gt;&lt;br /&gt;For a list of supported sites and other restrictions, see &lt;a href&#x3D;\&quot;/api-docs/buy/feed/overview.html#API\&quot;&gt;API Restrictions&lt;/a&gt;. |

### Return type

[**\TNT\Ebay\Buy\Feed\V1\Model\FileMetadata**](../Model/FileMetadata.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFiles()`

```php
getFiles($x_ebay_c_marketplace_id, $category_ids, $continuation_token, $feed_scope, $feed_type_id, $limit, $look_back): \TNT\Ebay\Buy\Feed\V1\Model\FileMetadataSearchResponse
```



<p>The <b>getFiles</b> method provides a list of the feed files available for download.</p>Details for each feed returned include the date the feed was generated, the frequency with which it is pulled, its feed type, its <b>fileid</b>, its format (currently only TSV is supported), the eBay marketplaces it applies to, the schema version under which it was generated, its size in bytes, and the time span it covers (in hours).</p><p>You can limit your search results by feed type, marketplace, scope, and eBay L1 category.</p><h3><b>Restrictions </b></h3><p>For a list of supported sites and other restrictions, see <a href=\"/api-docs/buy/feed/overview.html#API\">API Restrictions</a>.</p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Buy\Feed\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Buy\Feed\V1\Api\FileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_ebay_c_marketplace_id = 'x_ebay_c_marketplace_id_example'; // string | This is the ID of the eBay marketplace on which to search for feed files.<br /><br /><b>Example:</b> <code>X-EBAY-C-MARKETPLACE-ID: EBAY_US</code>.<br /><br /><p>For a list of supported sites and other restrictions, see <a href=\"/api-docs/buy/feed/overview.html#API\">API Restrictions</a>.
$category_ids = 'category_ids_example'; // string | This query parameter is used to specify one or more eBay L1 category IDs. If this filter is used, only feed files that are supported for the specified category (or categories) will be returned in the response. Each category ID value must be delimited by a comma.<br /><br /><b>Max:</b> 20 values
$continuation_token = 'continuation_token_example'; // string | The server returns this token to the web client when the responses received require multiple pages to display. The web client sends this token back to the server to get the next page of results.
$feed_scope = 'feed_scope_example'; // string | Specifies the frequency with which the feed file is made available (<code>HOURLY</code>, <code>DAILY</code>, <code>WEEKLY</code>).<br /><br />Currently only <code>DAILY</code> is supported.
$feed_type_id = 'feed_type_id_example'; // string | The unique identifier for the feed type.<br /><br />Use the <b>getFeedTypes</b> method to identify the available feed types.<br /><br /><span class=\"tablenote\"><span style=\"color:#004680\"><strong>Note:</strong></span> Refer to <a href=\"/api-docs/buy/feed/v1/static/overview.html#feed-types\" target=\"_blank\">Supported feed types</a> to learn more about the feed types supported by the Feed API.</span>
$limit = 'limit_example'; // string | The number of records to show in the response.<br /><br /><b>Default:</b> 20<br /><br /><b>Minimum:</b> 20<br /><br /><b>Maximum:</b> 100
$look_back = 'look_back_example'; // string | How far back from the current time to limit the returned feed files. The returned feed files will be those generated between the current time and the look-back time.<br /><br /><b>Example:</b> A value of <code>120</code> will limit the returned feed files to those generated in the past 2 hours (120 minutes). If 3 feed files have been generated in the past 2 hours, those 3 files will be returned. A feed file generated 4 hours earlier will not be returned.

try {
    $result = $apiInstance->getFiles($x_ebay_c_marketplace_id, $category_ids, $continuation_token, $feed_scope, $feed_type_id, $limit, $look_back);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->getFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_ebay_c_marketplace_id** | **string**| This is the ID of the eBay marketplace on which to search for feed files.&lt;br /&gt;&lt;br /&gt;&lt;b&gt;Example:&lt;/b&gt; &lt;code&gt;X-EBAY-C-MARKETPLACE-ID: EBAY_US&lt;/code&gt;.&lt;br /&gt;&lt;br /&gt;&lt;p&gt;For a list of supported sites and other restrictions, see &lt;a href&#x3D;\&quot;/api-docs/buy/feed/overview.html#API\&quot;&gt;API Restrictions&lt;/a&gt;. |
 **category_ids** | **string**| This query parameter is used to specify one or more eBay L1 category IDs. If this filter is used, only feed files that are supported for the specified category (or categories) will be returned in the response. Each category ID value must be delimited by a comma.&lt;br /&gt;&lt;br /&gt;&lt;b&gt;Max:&lt;/b&gt; 20 values | [optional]
 **continuation_token** | **string**| The server returns this token to the web client when the responses received require multiple pages to display. The web client sends this token back to the server to get the next page of results. | [optional]
 **feed_scope** | **string**| Specifies the frequency with which the feed file is made available (&lt;code&gt;HOURLY&lt;/code&gt;, &lt;code&gt;DAILY&lt;/code&gt;, &lt;code&gt;WEEKLY&lt;/code&gt;).&lt;br /&gt;&lt;br /&gt;Currently only &lt;code&gt;DAILY&lt;/code&gt; is supported. | [optional]
 **feed_type_id** | **string**| The unique identifier for the feed type.&lt;br /&gt;&lt;br /&gt;Use the &lt;b&gt;getFeedTypes&lt;/b&gt; method to identify the available feed types.&lt;br /&gt;&lt;br /&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;span style&#x3D;\&quot;color:#004680\&quot;&gt;&lt;strong&gt;Note:&lt;/strong&gt;&lt;/span&gt; Refer to &lt;a href&#x3D;\&quot;/api-docs/buy/feed/v1/static/overview.html#feed-types\&quot; target&#x3D;\&quot;_blank\&quot;&gt;Supported feed types&lt;/a&gt; to learn more about the feed types supported by the Feed API.&lt;/span&gt; | [optional]
 **limit** | **string**| The number of records to show in the response.&lt;br /&gt;&lt;br /&gt;&lt;b&gt;Default:&lt;/b&gt; 20&lt;br /&gt;&lt;br /&gt;&lt;b&gt;Minimum:&lt;/b&gt; 20&lt;br /&gt;&lt;br /&gt;&lt;b&gt;Maximum:&lt;/b&gt; 100 | [optional]
 **look_back** | **string**| How far back from the current time to limit the returned feed files. The returned feed files will be those generated between the current time and the look-back time.&lt;br /&gt;&lt;br /&gt;&lt;b&gt;Example:&lt;/b&gt; A value of &lt;code&gt;120&lt;/code&gt; will limit the returned feed files to those generated in the past 2 hours (120 minutes). If 3 feed files have been generated in the past 2 hours, those 3 files will be returned. A feed file generated 4 hours earlier will not be returned. | [optional]

### Return type

[**\TNT\Ebay\Buy\Feed\V1\Model\FileMetadataSearchResponse**](../Model/FileMetadataSearchResponse.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
