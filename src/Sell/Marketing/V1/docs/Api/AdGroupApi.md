# TNT\Ebay\Sell\Marketing\V1\AdGroupApi

All URIs are relative to https://api.ebay.com/sell/marketing/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createAdGroup()**](AdGroupApi.md#createAdGroup) | **POST** /ad_campaign/{campaign_id}/ad_group | 
[**getAdGroup()**](AdGroupApi.md#getAdGroup) | **GET** /ad_campaign/{campaign_id}/ad_group/{ad_group_id} | 
[**getAdGroups()**](AdGroupApi.md#getAdGroups) | **GET** /ad_campaign/{campaign_id}/ad_group | 
[**suggestBids()**](AdGroupApi.md#suggestBids) | **POST** /ad_campaign/{campaign_id}/ad_group/{ad_group_id}/suggest_bids | 
[**suggestKeywords()**](AdGroupApi.md#suggestKeywords) | **POST** /ad_campaign/{campaign_id}/ad_group/{ad_group_id}/suggest_keywords | 
[**updateAdGroup()**](AdGroupApi.md#updateAdGroup) | **PUT** /ad_campaign/{campaign_id}/ad_group/{ad_group_id} | 


## `createAdGroup()`

```php
createAdGroup($campaign_id, $create_ad_group_request): object
```



<span class=\"tablenote\"><b>Note:</b> This method is only available for select partners who have been approved for the eBay Promoted Listings Advanced (PLA) program. For information about how to request access to this program, refer to <a href=\"/api-docs/sell/static/marketing/pl-verify-eligibility.html#access-requests \" target=\"_blank \"> Promoted Listings Advanced Access Requests</a> in the Promoted Listings Playbook. To determine if a seller qualifies for PLA, use the <a href=\"/api-docs/sell/account/resources/advertising_eligibility/methods/getAdvertisingEligibility \" target=\"_blank \">getAdvertisingEligibility</a> method in Account API.</span><br />This method adds an ad group to an existing PLA campaign that uses the Cost Per Click (CPC) funding model.<br /><br />To create an ad group for a campaign, specify the <b>defaultBid</b> for the ad group in the payload of the request. Then specify the campaign to which the ad group should be associated using the <b>campaign_id</b> path parameter.<br /><br />Each campaign can have one or more associated ad groups.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Marketing\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Marketing\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Marketing\V1\Api\AdGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | A unique eBay-assigned ID for an ad campaign that is generated when a campaign is created.<br /><br /><span class=\"tablenote\"><b>Note:</b> You can retrieve the campaign IDs for a specified seller using the <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\">getCampaigns</a> method.</span>
$create_ad_group_request = new \TNT\Ebay\Sell\Marketing\V1\Model\CreateAdGroupRequest(); // \TNT\Ebay\Sell\Marketing\V1\Model\CreateAdGroupRequest | This type defines the fields for the <b>createAdGroup</b> request.

try {
    $result = $apiInstance->createAdGroup($campaign_id, $create_ad_group_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdGroupApi->createAdGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **string**| A unique eBay-assigned ID for an ad campaign that is generated when a campaign is created.&lt;br /&gt;&lt;br /&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; You can retrieve the campaign IDs for a specified seller using the &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\&quot;&gt;getCampaigns&lt;/a&gt; method.&lt;/span&gt; |
 **create_ad_group_request** | [**\TNT\Ebay\Sell\Marketing\V1\Model\CreateAdGroupRequest**](../Model/CreateAdGroupRequest.md)| This type defines the fields for the &lt;b&gt;createAdGroup&lt;/b&gt; request. |

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

## `getAdGroup()`

```php
getAdGroup($ad_group_id, $campaign_id): \TNT\Ebay\Sell\Marketing\V1\Model\AdGroup
```



<span class=\"tablenote\"><b>Note:</b> This method is only available for select partners who have been approved for the eBay Promoted Listings Advanced (PLA) program. For information about how to request access to this program, refer to <a href=\"/api-docs/sell/static/marketing/pl-verify-eligibility.html#access-requests \" target=\"_blank \"> Promoted Listings Advanced Access Requests</a> in the Promoted Listings Playbook. To determine if a seller qualifies for PLA, use the <a href=\"/api-docs/sell/account/resources/advertising_eligibility/methods/getAdvertisingEligibility \" target=\"_blank \">getAdvertisingEligibility</a> method in Account API.</span><br />This method retrieves the details of a specified ad group, such as the ad group’s default bid and status.<br /><br />In the request, specify the <b>campaign_id</b> and <b>ad_group_id</b> as path parameters.<br /><br />Call <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\">getCampaigns</a> to retrieve a list of the current campaign IDs for a seller and call <a href=\"/api-docs/sell/marketing/resources/adgroup/methods/getAdGroups\">getAdGroups</a> for the ad group ID of the ad group you wish to retrieve.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Marketing\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Marketing\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Marketing\V1\Api\AdGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ad_group_id = 'ad_group_id_example'; // string | The ID of the ad group that shall be retrieved.
$campaign_id = 'campaign_id_example'; // string | A unique eBay-assigned ID for an ad campaign that is generated when a campaign is created.<br /><br /><span class=\"tablenote\"><b>Note:</b> You can retrieve the campaign IDs for a specified seller using the <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\">getCampaigns</a> method.</span>

try {
    $result = $apiInstance->getAdGroup($ad_group_id, $campaign_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdGroupApi->getAdGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ad_group_id** | **string**| The ID of the ad group that shall be retrieved. |
 **campaign_id** | **string**| A unique eBay-assigned ID for an ad campaign that is generated when a campaign is created.&lt;br /&gt;&lt;br /&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; You can retrieve the campaign IDs for a specified seller using the &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\&quot;&gt;getCampaigns&lt;/a&gt; method.&lt;/span&gt; |

### Return type

[**\TNT\Ebay\Sell\Marketing\V1\Model\AdGroup**](../Model/AdGroup.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAdGroups()`

```php
getAdGroups($campaign_id, $ad_group_status, $limit, $offset): \TNT\Ebay\Sell\Marketing\V1\Model\AdGroupPagedCollectionResponse
```



<span class=\"tablenote\"><b>Note:</b> This method is only available for select partners who have been approved for the eBay Promoted Listings Advanced (PLA) program. For information about how to request access to this program, refer to <a href=\"/api-docs/sell/static/marketing/pl-verify-eligibility.html#access-requests \" target=\"_blank \"> Promoted Listings Advanced Access Requests</a> in the Promoted Listings Playbook. To determine if a seller qualifies for PLA, use the <a href=\"/api-docs/sell/account/resources/advertising_eligibility/methods/getAdvertisingEligibility \" target=\"_blank \">getAdvertisingEligibility</a> method in Account API.</span><br />This method retrieves ad groups for the specified campaigns.<br /><br />Each campaign can only have <b>one</b> ad group.<br /><br />In the request, supply the <b>campaign_ids</b> as path parameters.<br /><br />Call <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\">getCampaigns</a> to retrieve a list of the current campaign IDs for a seller.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Marketing\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Marketing\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Marketing\V1\Api\AdGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | A unique eBay-assigned ID for an ad campaign that is generated when a campaign is created.<br /><br /><span class=\"tablenote\"><b>Note:</b> You can retrieve the campaign IDs for a specified seller using the <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\">getCampaigns</a> method.</span>
$ad_group_status = 'ad_group_status_example'; // string | A comma-separated list of ad group statuses. The results will be filtered to only include the given statuses of the ad group.<br /><br />The results might not include these ad groups if other search conditions exclude them.
$limit = 'limit_example'; // string | The number of results, from the current result set, to be returned in a single page.
$offset = 'offset_example'; // string | The number of results that will be skipped in the result set. This is used with the <b>limit</b> field to control the pagination of the output.<br /><br />For example, if the <b>offset</b> is set to <code>0</code> and the <b>limit</b> is set to <code>10</code>, the method will retrieve items 1 through 10 from the list of items returned. If the <b>offset</b> is set to <code>10</code> and the <b>limit</b> is set to <code>10</code>, the method will retrieve items 11 through 20 from the list of items returned.<br><br><b>Default</b>: <code>0</code>

try {
    $result = $apiInstance->getAdGroups($campaign_id, $ad_group_status, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdGroupApi->getAdGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **string**| A unique eBay-assigned ID for an ad campaign that is generated when a campaign is created.&lt;br /&gt;&lt;br /&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; You can retrieve the campaign IDs for a specified seller using the &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\&quot;&gt;getCampaigns&lt;/a&gt; method.&lt;/span&gt; |
 **ad_group_status** | **string**| A comma-separated list of ad group statuses. The results will be filtered to only include the given statuses of the ad group.&lt;br /&gt;&lt;br /&gt;The results might not include these ad groups if other search conditions exclude them. | [optional]
 **limit** | **string**| The number of results, from the current result set, to be returned in a single page. | [optional]
 **offset** | **string**| The number of results that will be skipped in the result set. This is used with the &lt;b&gt;limit&lt;/b&gt; field to control the pagination of the output.&lt;br /&gt;&lt;br /&gt;For example, if the &lt;b&gt;offset&lt;/b&gt; is set to &lt;code&gt;0&lt;/code&gt; and the &lt;b&gt;limit&lt;/b&gt; is set to &lt;code&gt;10&lt;/code&gt;, the method will retrieve items 1 through 10 from the list of items returned. If the &lt;b&gt;offset&lt;/b&gt; is set to &lt;code&gt;10&lt;/code&gt; and the &lt;b&gt;limit&lt;/b&gt; is set to &lt;code&gt;10&lt;/code&gt;, the method will retrieve items 11 through 20 from the list of items returned.&lt;br&gt;&lt;br&gt;&lt;b&gt;Default&lt;/b&gt;: &lt;code&gt;0&lt;/code&gt; | [optional]

### Return type

[**\TNT\Ebay\Sell\Marketing\V1\Model\AdGroupPagedCollectionResponse**](../Model/AdGroupPagedCollectionResponse.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `suggestBids()`

```php
suggestBids($ad_group_id, $campaign_id, $targeted_bid_request): \TNT\Ebay\Sell\Marketing\V1\Model\TargetedBidsPagedCollection
```



<span class=\"tablenote\"><b>Note:</b> This method is only available for select partners who have been approved for the eBay Promoted Listings Advanced (PLA) program. For information about how to request access to this program, refer to <a href=\"/api-docs/sell/static/marketing/pl-verify-eligibility.html#access-requests \" target=\"_blank \"> Promoted Listings Advanced Access Requests</a> in the Promoted Listings Playbook. To determine if a seller qualifies for PLA, use the <a href=\"/api-docs/sell/account/resources/advertising_eligibility/methods/getAdvertisingEligibility \" target=\"_blank \">getAdvertisingEligibility</a> method in Account API.</span><br />This method allows sellers to retrieve the suggested bids for input keywords and match type.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Marketing\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Marketing\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Marketing\V1\Api\AdGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ad_group_id = 'ad_group_id_example'; // string | The ID of the ad group containing the keywords for which the bid suggestions will be provided.
$campaign_id = 'campaign_id_example'; // string | A unique eBay-assigned ID for an ad campaign that is generated when a campaign is created.<br /><br /><span class=\"tablenote\"><b>Note:</b> You can retrieve the campaign IDs for a specified seller using the <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\">getCampaigns</a> method.</span>
$targeted_bid_request = new \TNT\Ebay\Sell\Marketing\V1\Model\TargetedBidRequest(); // \TNT\Ebay\Sell\Marketing\V1\Model\TargetedBidRequest | The data requested to retrieve the suggested bids.

try {
    $result = $apiInstance->suggestBids($ad_group_id, $campaign_id, $targeted_bid_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdGroupApi->suggestBids: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ad_group_id** | **string**| The ID of the ad group containing the keywords for which the bid suggestions will be provided. |
 **campaign_id** | **string**| A unique eBay-assigned ID for an ad campaign that is generated when a campaign is created.&lt;br /&gt;&lt;br /&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; You can retrieve the campaign IDs for a specified seller using the &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\&quot;&gt;getCampaigns&lt;/a&gt; method.&lt;/span&gt; |
 **targeted_bid_request** | [**\TNT\Ebay\Sell\Marketing\V1\Model\TargetedBidRequest**](../Model/TargetedBidRequest.md)| The data requested to retrieve the suggested bids. |

### Return type

[**\TNT\Ebay\Sell\Marketing\V1\Model\TargetedBidsPagedCollection**](../Model/TargetedBidsPagedCollection.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `suggestKeywords()`

```php
suggestKeywords($ad_group_id, $campaign_id, $targeted_keyword_request): \TNT\Ebay\Sell\Marketing\V1\Model\TargetedKeywordsPagedCollection
```



<span class=\"tablenote\"><b>Note:</b> This method is only available for select partners who have been approved for the eBay Promoted Listings Advanced (PLA) program. For information about how to request access to this program, refer to <a href=\"/api-docs/sell/static/marketing/pl-verify-eligibility.html#access-requests \" target=\"_blank \"> Promoted Listings Advanced Access Requests</a> in the Promoted Listings Playbook. To determine if a seller qualifies for PLA, use the <a href=\"/api-docs/sell/account/resources/advertising_eligibility/methods/getAdvertisingEligibility \" target=\"_blank \">getAdvertisingEligibility</a> method in Account API.</span><br />This method allows sellers to retrieve a list of keyword ideas to be targeted for Promoted Listings campaigns.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Marketing\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Marketing\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Marketing\V1\Api\AdGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ad_group_id = 'ad_group_id_example'; // string | The ID of the ad group for which the keyword suggestions will be provided.
$campaign_id = 'campaign_id_example'; // string | A unique eBay-assigned ID for an ad campaign that is generated when a campaign is created.<br /><br /><span class=\"tablenote\"><b>Note:</b> You can retrieve the campaign IDs for a specified seller using the <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\">getCampaigns</a> method.</span>
$targeted_keyword_request = new \TNT\Ebay\Sell\Marketing\V1\Model\TargetedKeywordRequest(); // \TNT\Ebay\Sell\Marketing\V1\Model\TargetedKeywordRequest | The required data to retrieve suggested keywords.

try {
    $result = $apiInstance->suggestKeywords($ad_group_id, $campaign_id, $targeted_keyword_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdGroupApi->suggestKeywords: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ad_group_id** | **string**| The ID of the ad group for which the keyword suggestions will be provided. |
 **campaign_id** | **string**| A unique eBay-assigned ID for an ad campaign that is generated when a campaign is created.&lt;br /&gt;&lt;br /&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; You can retrieve the campaign IDs for a specified seller using the &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\&quot;&gt;getCampaigns&lt;/a&gt; method.&lt;/span&gt; |
 **targeted_keyword_request** | [**\TNT\Ebay\Sell\Marketing\V1\Model\TargetedKeywordRequest**](../Model/TargetedKeywordRequest.md)| The required data to retrieve suggested keywords. | [optional]

### Return type

[**\TNT\Ebay\Sell\Marketing\V1\Model\TargetedKeywordsPagedCollection**](../Model/TargetedKeywordsPagedCollection.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAdGroup()`

```php
updateAdGroup($ad_group_id, $campaign_id, $update_ad_group_request)
```



<span class=\"tablenote\"><b>Note:</b> This method is only available for select partners who have been approved for the eBay Promoted Listings Advanced (PLA) program. For information about how to request access to this program, refer to <a href=\"/api-docs/sell/static/marketing/pl-verify-eligibility.html#access-requests \" target=\"_blank \"> Promoted Listings Advanced Access Requests</a> in the Promoted Listings Playbook. To determine if a seller qualifies for PLA, use the <a href=\"/api-docs/sell/account/resources/advertising_eligibility/methods/getAdvertisingEligibility \" target=\"_blank \">getAdvertisingEligibility</a> method in Account API.</span><br />This method updates the ad group associated with a campaign.<br /><br />With this method, you can modify the <b>default bid</b> for the ad group, change the state of the ad group, or change the name of the ad group. Pass the <b>ad_group_id</b> you want to update as a URI parameter, and configure the <b>adGroupStatus</b> and <b>defaultBid</b> in the request payload.<br /><br />Call <a href=\"/api-docs/sell/marketing/resources/adgroup/methods/getAdGroup\">getAdGroup</a> to retrieve the current default bid and status of the ad group that you would like to update.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Marketing\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Marketing\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Marketing\V1\Api\AdGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ad_group_id = 'ad_group_id_example'; // string | The ID of the ad group that shall be updated.
$campaign_id = 'campaign_id_example'; // string | A unique eBay-assigned ID for an ad campaign that is generated when a campaign is created.<br /><br /><span class=\"tablenote\"><b>Note:</b> You can retrieve the campaign IDs for a specified seller using the <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\">getCampaigns</a> method.</span>
$update_ad_group_request = new \TNT\Ebay\Sell\Marketing\V1\Model\UpdateAdGroupRequest(); // \TNT\Ebay\Sell\Marketing\V1\Model\UpdateAdGroupRequest | This type defines the fields for the <b>UpdateAdGroup</b> request.

try {
    $apiInstance->updateAdGroup($ad_group_id, $campaign_id, $update_ad_group_request);
} catch (Exception $e) {
    echo 'Exception when calling AdGroupApi->updateAdGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ad_group_id** | **string**| The ID of the ad group that shall be updated. |
 **campaign_id** | **string**| A unique eBay-assigned ID for an ad campaign that is generated when a campaign is created.&lt;br /&gt;&lt;br /&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; You can retrieve the campaign IDs for a specified seller using the &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\&quot;&gt;getCampaigns&lt;/a&gt; method.&lt;/span&gt; |
 **update_ad_group_request** | [**\TNT\Ebay\Sell\Marketing\V1\Model\UpdateAdGroupRequest**](../Model/UpdateAdGroupRequest.md)| This type defines the fields for the &lt;b&gt;UpdateAdGroup&lt;/b&gt; request. |

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
