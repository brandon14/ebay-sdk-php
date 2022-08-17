# TNT\Ebay\Sell\Marketing\V1\NegativeKeywordApi

All URIs are relative to https://api.ebay.com/sell/marketing/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**bulkCreateNegativeKeyword()**](NegativeKeywordApi.md#bulkCreateNegativeKeyword) | **POST** /bulk_create_negative_keyword | 
[**bulkUpdateNegativeKeyword()**](NegativeKeywordApi.md#bulkUpdateNegativeKeyword) | **POST** /bulk_update_negative_keyword | 
[**createNegativeKeyword()**](NegativeKeywordApi.md#createNegativeKeyword) | **POST** /negative_keyword | 
[**getNegativeKeyword()**](NegativeKeywordApi.md#getNegativeKeyword) | **GET** /negative_keyword/{negative_keyword_id} | 
[**getNegativeKeywords()**](NegativeKeywordApi.md#getNegativeKeywords) | **GET** /negative_keyword | 
[**updateNegativeKeyword()**](NegativeKeywordApi.md#updateNegativeKeyword) | **PUT** /negative_keyword/{negative_keyword_id} | 


## `bulkCreateNegativeKeyword()`

```php
bulkCreateNegativeKeyword($bulk_create_negative_keyword_request): \TNT\Ebay\Sell\Marketing\V1\Model\BulkCreateNegativeKeywordResponse
```



<span class=\"tablenote\"><b>Note:</b> This is a <a href=\"/api-docs/static/versioning.html#limited \" target=\"_blank\"><img src=\"/cms/img/docs/partners-api.svg\" class=\"legend-icon partners-icon\" title=\"Limited Release\"  alt=\"Limited Release\" />Limited Release</a> API service that is available only to select partners who have been approved for the eBay Promoted Listings Advanced (PLA) program. For details about how to request access to this program, see <a href=\"/api-docs/sell/static/marketing/pl-verify-eligibility.html#access-requests\">Promoted Listings Advanced Access Requests</a> in the Promoted Listings Playbook.</span><br />This method adds negative keywords, in bulk, to an existing ad group in a PLA campaign that uses the Cost Per Click (CPC) funding model.<br /><br />Specify the <b>campaignId</b> and <b>adGroupId</b> in the request body, along with the <b>negativeKeywordText</b> and <b>negativeKeywordMatchType</b>.<br /><br />Call the <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\">getCampaigns</a> method to retrieve a list of current campaign IDs for a specified seller.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Marketing\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Marketing\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Marketing\V1\Api\NegativeKeywordApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bulk_create_negative_keyword_request = new \TNT\Ebay\Sell\Marketing\V1\Model\BulkCreateNegativeKeywordRequest(); // \TNT\Ebay\Sell\Marketing\V1\Model\BulkCreateNegativeKeywordRequest | A type that defines the fields for the bulk request to create negative keywords.

try {
    $result = $apiInstance->bulkCreateNegativeKeyword($bulk_create_negative_keyword_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NegativeKeywordApi->bulkCreateNegativeKeyword: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bulk_create_negative_keyword_request** | [**\TNT\Ebay\Sell\Marketing\V1\Model\BulkCreateNegativeKeywordRequest**](../Model/BulkCreateNegativeKeywordRequest.md)| A type that defines the fields for the bulk request to create negative keywords. |

### Return type

[**\TNT\Ebay\Sell\Marketing\V1\Model\BulkCreateNegativeKeywordResponse**](../Model/BulkCreateNegativeKeywordResponse.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bulkUpdateNegativeKeyword()`

```php
bulkUpdateNegativeKeyword($bulk_update_negative_keyword_request): \TNT\Ebay\Sell\Marketing\V1\Model\BulkUpdateNegativeKeywordResponse
```



<span class=\"tablenote\"><b>Note:</b> This is a <a href=\"/api-docs/static/versioning.html#limited \" target=\"_blank\"><img src=\"/cms/img/docs/partners-api.svg\" class=\"legend-icon partners-icon\" title=\"Limited Release\"  alt=\"Limited Release\" />Limited Release</a> API service that is available only to select partners who have been approved for the eBay Promoted Listings Advanced (PLA) program. For details about how to request access to this program, see <a href=\"/api-docs/sell/static/marketing/pl-verify-eligibility.html#access-requests\">Promoted Listings Advanced Access Requests</a> in the Promoted Listings Playbook.</span><br />This method updates the statuses of existing negative keywords, in bulk.<br /><br />Specify the <b>negativeKeywordId</b> and <b>negativeKeywordStatus</b> in the request body.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Marketing\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Marketing\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Marketing\V1\Api\NegativeKeywordApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bulk_update_negative_keyword_request = new \TNT\Ebay\Sell\Marketing\V1\Model\BulkUpdateNegativeKeywordRequest(); // \TNT\Ebay\Sell\Marketing\V1\Model\BulkUpdateNegativeKeywordRequest | A type that defines the fields for the bulk request to update negative keyword statuses.

try {
    $result = $apiInstance->bulkUpdateNegativeKeyword($bulk_update_negative_keyword_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NegativeKeywordApi->bulkUpdateNegativeKeyword: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bulk_update_negative_keyword_request** | [**\TNT\Ebay\Sell\Marketing\V1\Model\BulkUpdateNegativeKeywordRequest**](../Model/BulkUpdateNegativeKeywordRequest.md)| A type that defines the fields for the bulk request to update negative keyword statuses. |

### Return type

[**\TNT\Ebay\Sell\Marketing\V1\Model\BulkUpdateNegativeKeywordResponse**](../Model/BulkUpdateNegativeKeywordResponse.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createNegativeKeyword()`

```php
createNegativeKeyword($create_negative_keyword_request): object
```



<span class=\"tablenote\"><b>Note:</b> This is a <a href=\"/api-docs/static/versioning.html#limited \" target=\"_blank\"><img src=\"/cms/img/docs/partners-api.svg\" class=\"legend-icon partners-icon\" title=\"Limited Release\"  alt=\"Limited Release\" />Limited Release</a> API service that is available only to select partners who have been approved for the eBay Promoted Listings Advanced (PLA) program. For details about how to request access to this program, see <a href=\"/api-docs/sell/static/marketing/pl-verify-eligibility.html#access-requests\">Promoted Listings Advanced Access Requests</a> in the Promoted Listings Playbook.</span><br />This method adds a negative keyword to an existing ad group in a PLA campaign that uses the Cost Per Click (CPC) funding model.<br /><br />Specify the <b>campaignId</b> and <b>adGroupId</b> in the request body, along with the <b>negativeKeywordText</b> and <b>negativeKeywordMatchType</b>.<br /><br />Call the <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\">getCampaigns</a> method to retrieve a list of current campaign IDs for a specified seller.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Marketing\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Marketing\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Marketing\V1\Api\NegativeKeywordApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_negative_keyword_request = new \TNT\Ebay\Sell\Marketing\V1\Model\CreateNegativeKeywordRequest(); // \TNT\Ebay\Sell\Marketing\V1\Model\CreateNegativeKeywordRequest | A type that defines the fields for the request to create a negative keyword.

try {
    $result = $apiInstance->createNegativeKeyword($create_negative_keyword_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NegativeKeywordApi->createNegativeKeyword: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_negative_keyword_request** | [**\TNT\Ebay\Sell\Marketing\V1\Model\CreateNegativeKeywordRequest**](../Model/CreateNegativeKeywordRequest.md)| A type that defines the fields for the request to create a negative keyword. |

### Return type

**object**

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNegativeKeyword()`

```php
getNegativeKeyword($negative_keyword_id): \TNT\Ebay\Sell\Marketing\V1\Model\NegativeKeyword
```



<span class=\"tablenote\"><b>Note:</b> This is a <a href=\"/api-docs/static/versioning.html#limited \" target=\"_blank\"><img src=\"/cms/img/docs/partners-api.svg\" class=\"legend-icon partners-icon\" title=\"Limited Release\"  alt=\"Limited Release\" />Limited Release</a> API service that is available only to select partners who have been approved for the eBay Promoted Listings Advanced (PLA) program. For details about how to request access to this program, see <a href=\"/api-docs/sell/static/marketing/pl-verify-eligibility.html#access-requests\">Promoted Listings Advanced Access Requests</a> in the Promoted Listings Playbook.</span><br />This method retrieves details on a specific negative keyword.<br /><br />In the request, specify the <b>negative_keyword_id</b> as a path parameter.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Marketing\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Marketing\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Marketing\V1\Api\NegativeKeywordApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$negative_keyword_id = 'negative_keyword_id_example'; // string | The unique identifier for the negative keyword.<br /><br />This value is returned in the <b>Location</b> response header from the <a href=\"/api-docs/sell/marketing/resources/negative_keyword/methods/createNegativeKeyword\">createNegativeKeyword</a> method.

try {
    $result = $apiInstance->getNegativeKeyword($negative_keyword_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NegativeKeywordApi->getNegativeKeyword: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **negative_keyword_id** | **string**| The unique identifier for the negative keyword.&lt;br /&gt;&lt;br /&gt;This value is returned in the &lt;b&gt;Location&lt;/b&gt; response header from the &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/resources/negative_keyword/methods/createNegativeKeyword\&quot;&gt;createNegativeKeyword&lt;/a&gt; method. |

### Return type

[**\TNT\Ebay\Sell\Marketing\V1\Model\NegativeKeyword**](../Model/NegativeKeyword.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNegativeKeywords()`

```php
getNegativeKeywords($ad_group_ids, $campaign_ids, $limit, $negative_keyword_status, $offset): \TNT\Ebay\Sell\Marketing\V1\Model\NegativeKeywordPagedCollectionResponse
```



<span class=\"tablenote\"><b>Note:</b> This is a <a href=\"/api-docs/static/versioning.html#limited \" target=\"_blank\"><img src=\"/cms/img/docs/partners-api.svg\" class=\"legend-icon partners-icon\" title=\"Limited Release\"  alt=\"Limited Release\" />Limited Release</a> API service that is available only to select partners who have been approved for the eBay Promoted Listings Advanced (PLA) program. For details about how to request access to this program, see <a href=\"/api-docs/sell/static/marketing/pl-verify-eligibility.html#access-requests\">Promoted Listings Advanced Access Requests</a> in the Promoted Listings Playbook.</span><br />This method can be used to retrieve all of the negative keywords for ad groups in PLA campaigns that use the Cost Per Click (CPC) funding model.<br /><br />The results can be filtered using the <b>campaign_ids</b>, <b>ad_group_ids</b>, and <b>negative_keyword_status</b> query parameters.<br /><br />Call the <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\">getCampaigns</a> method to retrieve a list of current campaign IDs for a seller.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Marketing\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Marketing\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Marketing\V1\Api\NegativeKeywordApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ad_group_ids = 'ad_group_ids_example'; // string | A comma-separated list of ad group IDs.<br /><br />This query parameter is used if the seller wants to retrieve the negative keywords from one or more specific ad groups. The results might not include these ad group IDs if other search conditions exclude them.<br /><br /><span class=\"tablenote\"><b>Note:</b>You can call the <a href=\"/api-docs/sell/marketing/resources/adgroup/methods/getAdGroups\">getAdGroups</a> method to retrieve the ad group IDs for a seller.</span><br /><br /><i>Required if</i> the search results must be filtered to include negative keywords created at the ad group level.
$campaign_ids = 'campaign_ids_example'; // string | A unique eBay-assigned ID for an ad campaign that is generated when a campaign is created.<br /><br />This query parameter is used if the seller wants to retrieve the negative keywords from a specific campaign. The results might not include these campaign IDs if other search conditions exclude them.<br /><br /><span class=\"tablenote\"><b>Note:</b> Currently, only one campaign ID value is supported for each request.</span>
$limit = 'limit_example'; // string | The number of results, from the current result set, to be returned in a single page.
$negative_keyword_status = 'negative_keyword_status_example'; // string | A comma-separated list of negative keyword statuses.<br /><br />This query parameter is used if the seller wants to filter the search results based on one or more negative keyword statuses.
$offset = 'offset_example'; // string | The number of results that will be skipped in the result set. This is used with the <b>limit</b> field to control the pagination of the output.<br /><br />For example, if the <b>offset</b> is set to <code>0</code> and the <b>limit</b> is set to <code>10</code>, the method will retrieve items 1 through 10 from the list of items returned. If the <b>offset</b> is set to <code>10</code> and the <b>limit</b> is set to <code>10</code>, the method will retrieve items 11 through 20 from the list of items returned.

try {
    $result = $apiInstance->getNegativeKeywords($ad_group_ids, $campaign_ids, $limit, $negative_keyword_status, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NegativeKeywordApi->getNegativeKeywords: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ad_group_ids** | **string**| A comma-separated list of ad group IDs.&lt;br /&gt;&lt;br /&gt;This query parameter is used if the seller wants to retrieve the negative keywords from one or more specific ad groups. The results might not include these ad group IDs if other search conditions exclude them.&lt;br /&gt;&lt;br /&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt;You can call the &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/resources/adgroup/methods/getAdGroups\&quot;&gt;getAdGroups&lt;/a&gt; method to retrieve the ad group IDs for a seller.&lt;/span&gt;&lt;br /&gt;&lt;br /&gt;&lt;i&gt;Required if&lt;/i&gt; the search results must be filtered to include negative keywords created at the ad group level. | [optional]
 **campaign_ids** | **string**| A unique eBay-assigned ID for an ad campaign that is generated when a campaign is created.&lt;br /&gt;&lt;br /&gt;This query parameter is used if the seller wants to retrieve the negative keywords from a specific campaign. The results might not include these campaign IDs if other search conditions exclude them.&lt;br /&gt;&lt;br /&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; Currently, only one campaign ID value is supported for each request.&lt;/span&gt; | [optional]
 **limit** | **string**| The number of results, from the current result set, to be returned in a single page. | [optional]
 **negative_keyword_status** | **string**| A comma-separated list of negative keyword statuses.&lt;br /&gt;&lt;br /&gt;This query parameter is used if the seller wants to filter the search results based on one or more negative keyword statuses. | [optional]
 **offset** | **string**| The number of results that will be skipped in the result set. This is used with the &lt;b&gt;limit&lt;/b&gt; field to control the pagination of the output.&lt;br /&gt;&lt;br /&gt;For example, if the &lt;b&gt;offset&lt;/b&gt; is set to &lt;code&gt;0&lt;/code&gt; and the &lt;b&gt;limit&lt;/b&gt; is set to &lt;code&gt;10&lt;/code&gt;, the method will retrieve items 1 through 10 from the list of items returned. If the &lt;b&gt;offset&lt;/b&gt; is set to &lt;code&gt;10&lt;/code&gt; and the &lt;b&gt;limit&lt;/b&gt; is set to &lt;code&gt;10&lt;/code&gt;, the method will retrieve items 11 through 20 from the list of items returned. | [optional]

### Return type

[**\TNT\Ebay\Sell\Marketing\V1\Model\NegativeKeywordPagedCollectionResponse**](../Model/NegativeKeywordPagedCollectionResponse.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNegativeKeyword()`

```php
updateNegativeKeyword($negative_keyword_id, $update_negative_keyword_request)
```



<span class=\"tablenote\"><b>Note:</b> This is a <a href=\"/api-docs/static/versioning.html#limited \" target=\"_blank\"><img src=\"/cms/img/docs/partners-api.svg\" class=\"legend-icon partners-icon\" title=\"Limited Release\"  alt=\"Limited Release\" />Limited Release</a> API service that is available only to select partners who have been approved for the eBay Promoted Listings Advanced (PLA) program. For details about how to request access to this program, see <a href=\"/api-docs/sell/static/marketing/pl-verify-eligibility.html#access-requests\">Promoted Listings Advanced Access Requests</a> in the Promoted Listings Playbook.</span><br />This method updates the status of an existing negative keyword.<br /><br />Specify the <b>negative_keyword_id</b> as a path parameter, and specify the <b>negativeKeywordStatus</b> in the request body.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Marketing\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Marketing\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Marketing\V1\Api\NegativeKeywordApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$negative_keyword_id = 'negative_keyword_id_example'; // string | The unique identifier for the negative keyword.<br /><br />This value is returned in the <b>Location</b> response header from the <a href=\"/api-docs/sell/marketing/resources/negative_keyword/methods/createNegativeKeyword\">createNegativeKeyword</a> method.
$update_negative_keyword_request = new \TNT\Ebay\Sell\Marketing\V1\Model\UpdateNegativeKeywordRequest(); // \TNT\Ebay\Sell\Marketing\V1\Model\UpdateNegativeKeywordRequest | A type that defines the fields for the request to update a negative keyword.

try {
    $apiInstance->updateNegativeKeyword($negative_keyword_id, $update_negative_keyword_request);
} catch (Exception $e) {
    echo 'Exception when calling NegativeKeywordApi->updateNegativeKeyword: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **negative_keyword_id** | **string**| The unique identifier for the negative keyword.&lt;br /&gt;&lt;br /&gt;This value is returned in the &lt;b&gt;Location&lt;/b&gt; response header from the &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/resources/negative_keyword/methods/createNegativeKeyword\&quot;&gt;createNegativeKeyword&lt;/a&gt; method. |
 **update_negative_keyword_request** | [**\TNT\Ebay\Sell\Marketing\V1\Model\UpdateNegativeKeywordRequest**](../Model/UpdateNegativeKeywordRequest.md)| A type that defines the fields for the request to update a negative keyword. |

### Return type

void (empty response body)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
