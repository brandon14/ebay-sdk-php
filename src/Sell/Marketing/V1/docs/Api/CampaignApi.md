# TNT\Ebay\Sell\Marketing\V1\CampaignApi

All URIs are relative to https://api.ebay.com/sell/marketing/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**cloneCampaign()**](CampaignApi.md#cloneCampaign) | **POST** /ad_campaign/{campaign_id}/clone | 
[**createCampaign()**](CampaignApi.md#createCampaign) | **POST** /ad_campaign | 
[**deleteCampaign()**](CampaignApi.md#deleteCampaign) | **DELETE** /ad_campaign/{campaign_id} | 
[**endCampaign()**](CampaignApi.md#endCampaign) | **POST** /ad_campaign/{campaign_id}/end | 
[**findCampaignByAdReference()**](CampaignApi.md#findCampaignByAdReference) | **GET** /ad_campaign/find_campaign_by_ad_reference | 
[**getCampaign()**](CampaignApi.md#getCampaign) | **GET** /ad_campaign/{campaign_id} | 
[**getCampaignByName()**](CampaignApi.md#getCampaignByName) | **GET** /ad_campaign/get_campaign_by_name | 
[**getCampaigns()**](CampaignApi.md#getCampaigns) | **GET** /ad_campaign | 
[**pauseCampaign()**](CampaignApi.md#pauseCampaign) | **POST** /ad_campaign/{campaign_id}/pause | 
[**resumeCampaign()**](CampaignApi.md#resumeCampaign) | **POST** /ad_campaign/{campaign_id}/resume | 
[**suggestItems()**](CampaignApi.md#suggestItems) | **GET** /ad_campaign/{campaign_id}/suggest_items | 
[**updateAdRateStrategy()**](CampaignApi.md#updateAdRateStrategy) | **POST** /ad_campaign/{campaign_id}/update_ad_rate_strategy | 
[**updateCampaignBudget()**](CampaignApi.md#updateCampaignBudget) | **POST** /ad_campaign/{campaign_id}/update_campaign_budget | 
[**updateCampaignIdentification()**](CampaignApi.md#updateCampaignIdentification) | **POST** /ad_campaign/{campaign_id}/update_campaign_identification | 


## `cloneCampaign()`

```php
cloneCampaign($campaign_id, $clone_campaign_request): object
```



This method clones (makes a copy of) the specified campaign's <b>campaign criterion</b>. The <b>campaign criterion</b> is a container for the fields that define the criteria for a rule-based campaign.<p>To clone a campaign, supply the <b>campaign_id</b> as a path parameter in your call. There is no request payload.</p>  <p>The ID of the newly-cloned campaign is returned in the <b>Location</b> response header.</p><p>Call <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\">getCampaigns</a> to retrieve a seller's current campaign IDs.</p>  <p><b>Requirement: </b>In order to clone a campaign, the <b>campaignStatus</b> must be <code>ENDED</code> and the campaign must define a set of selection rules (it must be a rules-based campaign).</p><span class=\"tablenote\"><b>Note:</b> This method only applies to the Cost Per Sale (CPS) funding model; it does not apply to the Cost Per Click (CPC) funding model. See <a href=\"/api-docs/sell/static/marketing/pl-overview.html#funding-model\">Funding Models</a> in the <i>Promoted Listings Playbook</i> for more information.</span>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Marketing\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Marketing\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Marketing\V1\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | A unique eBay-assigned ID for an ad campaign that is generated when a campaign is created. This ID is the campaign ID of the campaign being cloned.<br /><br /><span class=\"tablenote\"><b>Note:</b> You can retrieve the campaign IDs for a specified seller using the <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\">getCampaigns</a> method.</span>
$clone_campaign_request = new \TNT\Ebay\Sell\Marketing\V1\Model\CloneCampaignRequest(); // \TNT\Ebay\Sell\Marketing\V1\Model\CloneCampaignRequest | This type defines the fields for a clone campaign request.

try {
    $result = $apiInstance->cloneCampaign($campaign_id, $clone_campaign_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->cloneCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **string**| A unique eBay-assigned ID for an ad campaign that is generated when a campaign is created. This ID is the campaign ID of the campaign being cloned.&lt;br /&gt;&lt;br /&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; You can retrieve the campaign IDs for a specified seller using the &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\&quot;&gt;getCampaigns&lt;/a&gt; method.&lt;/span&gt; |
 **clone_campaign_request** | [**\TNT\Ebay\Sell\Marketing\V1\Model\CloneCampaignRequest**](../Model/CloneCampaignRequest.md)| This type defines the fields for a clone campaign request. |

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

## `createCampaign()`

```php
createCampaign($create_campaign_request): object
```



This method creates a Promoted Listings ad campaign. <p>A Promoted Listings <i>campaign</i> is the structure into which you place the ads or ad group for the listings you want to promote.</p>  <p>Identify the items you want to place into a campaign either by \"key\" or by \"rule\" as follows:</p> <ul><li><b>Rules-based campaigns</b> &ndash; A rules-based campaign adds items to the campaign according to the <i>criteria</i> you specify in your call to <b>createCampaign</b>. You can set the <b>autoSelectFutureInventory</b> request field to <code>true</code> so that after your campaign launches, eBay will regularly assess your new, revised, or newly-eligible listings to determine whether any should be added or removed from your campaign according to the rules you set. If there are, eBay will add or remove them automatically on a daily basis.</li> <li><b>Key-based campaigns</b> &ndash; Add items to an existing campaign using either listing ID values or Inventory Reference values: <ul><li>Add <b>listingId</b> values to an existing campaign by calling either <b>createAdByListingID</b> or <b>bulkCreateAdsByListingId</b>.</li>  <li>Add <b>inventoryReference</b> values to an existing campaign by calling either <b>createAdByInventoryReference</b> or <b>bulkCreateAdsByInventoryReference</b>.</li><li>Add an <b>ad group</b> to an existing campaign by calling <b>createAdGroup</b>.</li></ul><p class=\"tablenote\"><b>Note:</b> No matter how you add items to a Promoted Listings campaign, each campaign can contain ads for a maximum of 50,000 items. <br><br>If a rules-based campaign identifies more than 50,000 items, ads are created for only the first 50,000 items identified by the specified criteria, and ads are not created for the remaining items.</p>  <p><b>Creating a campaign</b></p> <p>To create a basic campaign, supply:</p>  <ul><li>The user-defined campaign name</li> <li>The start date (and optionally the end date) of the campaign</li> <li>The eBay marketplace on which the campaign is hosted</li> <li>Details on the campaign funding model</li></ul>  <p>The campaign funding model specifies how the Promoted Listings fee is calculated. Currently, the supported funding models are <code>COST_PER_SALE</code> and <code>COST_PER_CLICK</code>. For complete information on how the fee is calculated and when it applies, see <a href=\"/api-docs/sell/static/marketing/pl-overview.html#pl-fees\">Promoted Listings fees</a>.</p>   <p>If you populate the <b>campaignCriterion</b> object in your <b>createCampaign</b> request, campaign \"ads\" are created by \"rule\" for the listings that meet the criteria you specify, and these ads are associated with the newly created campaign.</p>  <p>For details on creating Promoted Listings campaigns and how to select the items to be included in your campaigns, see <a href=\"/api-docs/sell/static/marketing/pl-create-campaign.html\">Promoted Listings campaign creation</a>.</p>  <p>For recommendations on which listings are prime for a Promoted Listings ad campaign and to get guidance on how to set the <b>bidPercentage</b> field, see <a href=\"/api-docs/sell/static/marketing/pl-reco-api.html\">Using the Recommendation API to help configure campaigns</a>.</p>  <p class=\"tablenote\"><b>Tip:</b> See <a href=\"/api-docs/sell/marketing/static/overview.html#PL-requirements\">Promoted Listings requirements and restrictions</a> for the details on the marketplaces that support Promoted Listings via the API. See <a href=\"/api-docs/sell/static/marketing/pl-restrictions\">Promoted Listings restrictions</a> for details about campaign limitations and restrictions.</p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Marketing\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Marketing\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Marketing\V1\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_campaign_request = new \TNT\Ebay\Sell\Marketing\V1\Model\CreateCampaignRequest(); // \TNT\Ebay\Sell\Marketing\V1\Model\CreateCampaignRequest | This type defines the fields for the create campaign request.

try {
    $result = $apiInstance->createCampaign($create_campaign_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->createCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_campaign_request** | [**\TNT\Ebay\Sell\Marketing\V1\Model\CreateCampaignRequest**](../Model/CreateCampaignRequest.md)| This type defines the fields for the create campaign request. |

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

## `deleteCampaign()`

```php
deleteCampaign($campaign_id)
```



This method deletes the campaign specified by the <code>campaign_id</code> query parameter.<br /><br /><span class=\"tablenote\"><b>Note: </b> You can only delete campaigns that have ended.</span><br /><br />Call <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\">getCampaigns</a> to retrieve the <b>campaign_id</b> and the campaign status (<code>RUNNING</code>, <code>PAUSED</code>, <code>ENDED</code>, and so on) for all the seller's campaigns.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Marketing\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Marketing\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Marketing\V1\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | A unique eBay-assigned ID for an ad campaign that is generated when a campaign is created.<br /><br /><span class=\"tablenote\"><b>Note:</b> You can retrieve the campaign IDs for a specified seller using the <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\">getCampaigns</a> method.</span>

try {
    $apiInstance->deleteCampaign($campaign_id);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->deleteCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **string**| A unique eBay-assigned ID for an ad campaign that is generated when a campaign is created.&lt;br /&gt;&lt;br /&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; You can retrieve the campaign IDs for a specified seller using the &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\&quot;&gt;getCampaigns&lt;/a&gt; method.&lt;/span&gt; |

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

## `endCampaign()`

```php
endCampaign($campaign_id)
```



This method ends an active (<code>RUNNING</code>) or paused campaign. Specify the campaign you want to end by supplying its campaign ID in a query parameter.  <p>Call <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\">getCampaigns</a> to retrieve the <b>campaign_id</b> and the campaign status (<code>RUNNING</code>, <code>PAUSED</code>, <code>ENDED</code>, and so on) for all the seller's campaigns.</p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Marketing\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Marketing\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Marketing\V1\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | A unique eBay-assigned ID for an ad campaign that is generated when a campaign is created.<br /><br /><span class=\"tablenote\"><b>Note:</b> You can retrieve the campaign IDs for a specified seller using the <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\">getCampaigns</a> method.</span>

try {
    $apiInstance->endCampaign($campaign_id);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->endCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **string**| A unique eBay-assigned ID for an ad campaign that is generated when a campaign is created.&lt;br /&gt;&lt;br /&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; You can retrieve the campaign IDs for a specified seller using the &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\&quot;&gt;getCampaigns&lt;/a&gt; method.&lt;/span&gt; |

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

## `findCampaignByAdReference()`

```php
findCampaignByAdReference($inventory_reference_id, $inventory_reference_type, $listing_id): \TNT\Ebay\Sell\Marketing\V1\Model\Campaigns
```



This method retrieves the campaigns containing the listing that is specified using either a listing ID, or an inventory reference ID and inventory reference type pair. The request accepts either a <b>listing_id</b>, <i>or</i> an <b>inventory_reference_id</b> and <b>inventory_reference_type</b> pair, as used in the Inventory API.<br /><br />eBay <i>listing IDs</i> are generated by either the <a href=\"/Devzone/XML/docs/Reference/eBay/index.html\" title=\"Trading API Reference\">Trading API</a> or the <a href=\"/api-docs/sell/inventory/resources/methods\">Inventory API</a> when you create a listing.<br /><br />An <i>inventory reference ID</i> can be either a seller-defined <b>SKU</b> or <b>inventoryItemGroupKey</b>, as specified in the Inventory API.<br /><br /><span class=\"tablenote\"><b>Note:</b> This method only applies to the Cost Per Sale (CPS) funding model; it does not apply to the Cost Per Click (CPC) funding model. See <a href=\"/api-docs/sell/static/marketing/pl-overview.html#funding-model\">Funding Models</a> in the <i>Promoted Listings Playbook</i> for more information.</span>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Marketing\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Marketing\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Marketing\V1\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inventory_reference_id = 'inventory_reference_id_example'; // string | The seller's inventory reference ID of the listing to be used to find the campaign in which it is associated.  This will either be a seller-defined <b>SKU</b> value or inventory item group ID, depending on the reference type specified. You must always pass in both  <b>inventory_reference_id</b> and <b>inventory_reference_type</b>.
$inventory_reference_type = 'inventory_reference_type_example'; // string | The type of the seller's inventory reference ID, which is a listing or group of items. You must always pass in both <b>inventory_reference_id</b> and <b>inventory_reference_type</b>.
$listing_id = 'listing_id_example'; // string | Identifier of the eBay listing associated with the ad.

try {
    $result = $apiInstance->findCampaignByAdReference($inventory_reference_id, $inventory_reference_type, $listing_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->findCampaignByAdReference: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inventory_reference_id** | **string**| The seller&#39;s inventory reference ID of the listing to be used to find the campaign in which it is associated.  This will either be a seller-defined &lt;b&gt;SKU&lt;/b&gt; value or inventory item group ID, depending on the reference type specified. You must always pass in both  &lt;b&gt;inventory_reference_id&lt;/b&gt; and &lt;b&gt;inventory_reference_type&lt;/b&gt;. | [optional]
 **inventory_reference_type** | **string**| The type of the seller&#39;s inventory reference ID, which is a listing or group of items. You must always pass in both &lt;b&gt;inventory_reference_id&lt;/b&gt; and &lt;b&gt;inventory_reference_type&lt;/b&gt;. | [optional]
 **listing_id** | **string**| Identifier of the eBay listing associated with the ad. | [optional]

### Return type

[**\TNT\Ebay\Sell\Marketing\V1\Model\Campaigns**](../Model/Campaigns.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCampaign()`

```php
getCampaign($campaign_id): \TNT\Ebay\Sell\Marketing\V1\Model\Campaign
```



This method retrieves the details of a single campaign, as specified with the <b>campaign_id</b> query parameter.  <p>This method returns all the details of a campaign (including the campaign's the selection rules), except the for the listing IDs or inventory reference IDs included in the campaign. These IDs are returned by <a href=\"/api-docs/sell/marketing/resources/ad/methods/getAds\">getAds</a>.</p>  <p>Call <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\">getCampaigns</a> to retrieve a list of the seller's campaign IDs.</p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Marketing\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Marketing\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Marketing\V1\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | A unique eBay-assigned ID for an ad campaign that is generated when a campaign is created.<br /><br /><span class=\"tablenote\"><b>Note:</b> You can retrieve the campaign IDs for a specified seller using the <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\">getCampaigns</a> method.</span>

try {
    $result = $apiInstance->getCampaign($campaign_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **string**| A unique eBay-assigned ID for an ad campaign that is generated when a campaign is created.&lt;br /&gt;&lt;br /&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; You can retrieve the campaign IDs for a specified seller using the &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\&quot;&gt;getCampaigns&lt;/a&gt; method.&lt;/span&gt; |

### Return type

[**\TNT\Ebay\Sell\Marketing\V1\Model\Campaign**](../Model/Campaign.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCampaignByName()`

```php
getCampaignByName($campaign_name): \TNT\Ebay\Sell\Marketing\V1\Model\Campaign
```



This method retrieves the details of a single campaign, as specified with the <b>campaign_name</b> query parameter. Note that the campaign name you specify must be an exact, case-sensitive match of the name of the campaign you want to retrieve.</p><p>Call <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\">getCampaigns</a> to retrieve a list of the seller's campaign names.</p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Marketing\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Marketing\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Marketing\V1\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_name = 'campaign_name_example'; // string | The name of the campaign.

try {
    $result = $apiInstance->getCampaignByName($campaign_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getCampaignByName: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_name** | **string**| The name of the campaign. |

### Return type

[**\TNT\Ebay\Sell\Marketing\V1\Model\Campaign**](../Model/Campaign.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCampaigns()`

```php
getCampaigns($campaign_name, $campaign_status, $end_date_range, $funding_strategy, $limit, $offset, $start_date_range): \TNT\Ebay\Sell\Marketing\V1\Model\CampaignPagedCollectionResponse
```



This method retrieves the details for all of the seller's defined campaigns. Request parameters can be used to retrieve a specific campaign, such as the campaign's name, the start and end date, the status, and the funding model (Cost Per Sale (CPS) or Cost Per Click (CPC). <p>You can filter the result set by a campaign name, end date range, start date range, or campaign status. You can also paginate the records returned from the result set using the <b>limit</b> query parameter, and control which records to return using the  <b>offset</b> parameter.</p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Marketing\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Marketing\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Marketing\V1\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_name = 'campaign_name_example'; // string | Specifies the campaign name. The results are filtered to include only the campaign by the specified name.<br /><br /><b>Note: </b>The results might be null if other filters exclude the campaign with this name. <br /><br /><b>Maximum: </b> 1 campaign name
$campaign_status = 'campaign_status_example'; // string | Include this filter and input a specific campaign status to retrieve campaigns currently in that state. <br /><br /><b>Note: </b>The results might not include all the campaigns with this status if other filters exclude them. <br /><br /><b>Valid values:</b> See <a href=\"/api-docs/sell/marketing/types/pls:CampaignStatusEnum\">CampaignStatusEnum</a> <br /><br /><b>Maximum: </b> 1 status
$end_date_range = 'end_date_range_example'; // string | Specifies the range of a campaign's end date. The results are filtered to include only campaigns with an end date that is within specified range. <br><br><b>Valid format (UTC)</b>: <ul><li><code> yyyy-MM-ddThh:mm:ssZ..yyyy-MM-ddThh:mm:ssZ </code>  (campaign ends within this range)</li><li><code>yyyy-MM-ddThh:mm:ssZ..</code> (campaign ends on or after this date)</li><li><code>..yyyy-MM-ddThh:mm:ssZ </code> (campaign ends on or before this date)</li><li><code>2016-09-08T00:00.00.000Z..2016-09-09T00:00:00Z</code> (campaign ends on September 08, 2016)</li></ul> <br /><br /><b>Note: </b>The results might not include all the campaigns ending on this date if other filters exclude them.
$funding_strategy = 'funding_strategy_example'; // string | Specifies the funding strategy for the campaign.<br /><br />The results will be filtered to only include campaigns with the specified funding model. If not specified, all campaigns matching the other filter parameters will be returned. The results might not include these campaigns if other search conditions exclude them.<br /><br /><b>Valid Values:</b><ul><li><code>COST_PER_SALE</code></li><li><code>COST_PER_CLICK</code></li></ul>
$limit = 'limit_example'; // string | <p>Specifies the maximum number of campaigns to return on a page in the paginated response.</p>  <b>Default: </b>10 <br><b>Maximum: </b> 500
$offset = 'offset_example'; // string | Specifies the number of campaigns to skip in the result set before returning the first report in the paginated response.  <p>Combine <b>offset</b> with the <b>limit</b> query parameter to control the items returned in the response. For example, if you supply an <b>offset</b> of <code>0</code> and a <b>limit</b> of <code>10</code>, the first page of the response contains the first 10 items from the complete list of items retrieved by the call. If <b>offset</b> is <code>10</code> and <b>limit</b> is <code>20</code>, the first page of the response contains items 11-30 from the complete result set.</p> <p><b>Default:</b> 0</p>
$start_date_range = 'start_date_range_example'; // string | Specifies the range of a campaign's start date in which to filter the results. The results are filtered to include only campaigns with a start date that is equal to this date or is within specified range.<br><br><b>Valid format (UTC): </b> <ul><li><code>yyyy-MM-ddThh:mm:ssZ..yyyy-MM-ddThh:mm:ssZ</code> (starts within this range)</li><li><code>yyyy-MM-ddThh:mm:ssZ</code> (campaign starts on or after this date)</li><li><code>..yyyy-MM-ddThh:mm:ssZ </code>(campaign starts on or before this date)</li><li><code>2016-09-08T00:00.00.000Z..2016-09-09T00:00:00Z</code> (campaign starts on September 08, 2016)</li></ul><br /><br /><b>Note: </b>The results might not include all the campaigns with this start date if other filters exclude them.

try {
    $result = $apiInstance->getCampaigns($campaign_name, $campaign_status, $end_date_range, $funding_strategy, $limit, $offset, $start_date_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getCampaigns: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_name** | **string**| Specifies the campaign name. The results are filtered to include only the campaign by the specified name.&lt;br /&gt;&lt;br /&gt;&lt;b&gt;Note: &lt;/b&gt;The results might be null if other filters exclude the campaign with this name. &lt;br /&gt;&lt;br /&gt;&lt;b&gt;Maximum: &lt;/b&gt; 1 campaign name | [optional]
 **campaign_status** | **string**| Include this filter and input a specific campaign status to retrieve campaigns currently in that state. &lt;br /&gt;&lt;br /&gt;&lt;b&gt;Note: &lt;/b&gt;The results might not include all the campaigns with this status if other filters exclude them. &lt;br /&gt;&lt;br /&gt;&lt;b&gt;Valid values:&lt;/b&gt; See &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/types/pls:CampaignStatusEnum\&quot;&gt;CampaignStatusEnum&lt;/a&gt; &lt;br /&gt;&lt;br /&gt;&lt;b&gt;Maximum: &lt;/b&gt; 1 status | [optional]
 **end_date_range** | **string**| Specifies the range of a campaign&#39;s end date. The results are filtered to include only campaigns with an end date that is within specified range. &lt;br&gt;&lt;br&gt;&lt;b&gt;Valid format (UTC)&lt;/b&gt;: &lt;ul&gt;&lt;li&gt;&lt;code&gt; yyyy-MM-ddThh:mm:ssZ..yyyy-MM-ddThh:mm:ssZ &lt;/code&gt;  (campaign ends within this range)&lt;/li&gt;&lt;li&gt;&lt;code&gt;yyyy-MM-ddThh:mm:ssZ..&lt;/code&gt; (campaign ends on or after this date)&lt;/li&gt;&lt;li&gt;&lt;code&gt;..yyyy-MM-ddThh:mm:ssZ &lt;/code&gt; (campaign ends on or before this date)&lt;/li&gt;&lt;li&gt;&lt;code&gt;2016-09-08T00:00.00.000Z..2016-09-09T00:00:00Z&lt;/code&gt; (campaign ends on September 08, 2016)&lt;/li&gt;&lt;/ul&gt; &lt;br /&gt;&lt;br /&gt;&lt;b&gt;Note: &lt;/b&gt;The results might not include all the campaigns ending on this date if other filters exclude them. | [optional]
 **funding_strategy** | **string**| Specifies the funding strategy for the campaign.&lt;br /&gt;&lt;br /&gt;The results will be filtered to only include campaigns with the specified funding model. If not specified, all campaigns matching the other filter parameters will be returned. The results might not include these campaigns if other search conditions exclude them.&lt;br /&gt;&lt;br /&gt;&lt;b&gt;Valid Values:&lt;/b&gt;&lt;ul&gt;&lt;li&gt;&lt;code&gt;COST_PER_SALE&lt;/code&gt;&lt;/li&gt;&lt;li&gt;&lt;code&gt;COST_PER_CLICK&lt;/code&gt;&lt;/li&gt;&lt;/ul&gt; | [optional]
 **limit** | **string**| &lt;p&gt;Specifies the maximum number of campaigns to return on a page in the paginated response.&lt;/p&gt;  &lt;b&gt;Default: &lt;/b&gt;10 &lt;br&gt;&lt;b&gt;Maximum: &lt;/b&gt; 500 | [optional]
 **offset** | **string**| Specifies the number of campaigns to skip in the result set before returning the first report in the paginated response.  &lt;p&gt;Combine &lt;b&gt;offset&lt;/b&gt; with the &lt;b&gt;limit&lt;/b&gt; query parameter to control the items returned in the response. For example, if you supply an &lt;b&gt;offset&lt;/b&gt; of &lt;code&gt;0&lt;/code&gt; and a &lt;b&gt;limit&lt;/b&gt; of &lt;code&gt;10&lt;/code&gt;, the first page of the response contains the first 10 items from the complete list of items retrieved by the call. If &lt;b&gt;offset&lt;/b&gt; is &lt;code&gt;10&lt;/code&gt; and &lt;b&gt;limit&lt;/b&gt; is &lt;code&gt;20&lt;/code&gt;, the first page of the response contains items 11-30 from the complete result set.&lt;/p&gt; &lt;p&gt;&lt;b&gt;Default:&lt;/b&gt; 0&lt;/p&gt; | [optional]
 **start_date_range** | **string**| Specifies the range of a campaign&#39;s start date in which to filter the results. The results are filtered to include only campaigns with a start date that is equal to this date or is within specified range.&lt;br&gt;&lt;br&gt;&lt;b&gt;Valid format (UTC): &lt;/b&gt; &lt;ul&gt;&lt;li&gt;&lt;code&gt;yyyy-MM-ddThh:mm:ssZ..yyyy-MM-ddThh:mm:ssZ&lt;/code&gt; (starts within this range)&lt;/li&gt;&lt;li&gt;&lt;code&gt;yyyy-MM-ddThh:mm:ssZ&lt;/code&gt; (campaign starts on or after this date)&lt;/li&gt;&lt;li&gt;&lt;code&gt;..yyyy-MM-ddThh:mm:ssZ &lt;/code&gt;(campaign starts on or before this date)&lt;/li&gt;&lt;li&gt;&lt;code&gt;2016-09-08T00:00.00.000Z..2016-09-09T00:00:00Z&lt;/code&gt; (campaign starts on September 08, 2016)&lt;/li&gt;&lt;/ul&gt;&lt;br /&gt;&lt;br /&gt;&lt;b&gt;Note: &lt;/b&gt;The results might not include all the campaigns with this start date if other filters exclude them. | [optional]

### Return type

[**\TNT\Ebay\Sell\Marketing\V1\Model\CampaignPagedCollectionResponse**](../Model/CampaignPagedCollectionResponse.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pauseCampaign()`

```php
pauseCampaign($campaign_id)
```



This method pauses an active (RUNNING) campaign.  <p>You can restart the campaign by calling <a href=\"/api-docs/sell/marketing/resources/campaign/methods/resumeCampaign\">resumeCampaign</a>, as long as the campaign's end date is in the future.</p>  <p><b>Note: </b> The listings associated with a paused campaign cannot be added into another campaign.</p>  <p>Call <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\">getCampaigns</a> to retrieve the <b>campaign_id</b> and the campaign status (<code>RUNNING</code>, <code>PAUSED</code>, <code>ENDED</code>, and so on) for all the seller's campaigns.</p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Marketing\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Marketing\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Marketing\V1\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | A unique eBay-assigned ID for an ad campaign that is generated when a campaign is created.<br /><br /><span class=\"tablenote\"><b>Note:</b> You can retrieve the campaign IDs for a specified seller using the <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\">getCampaigns</a> method.</span>

try {
    $apiInstance->pauseCampaign($campaign_id);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->pauseCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **string**| A unique eBay-assigned ID for an ad campaign that is generated when a campaign is created.&lt;br /&gt;&lt;br /&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; You can retrieve the campaign IDs for a specified seller using the &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\&quot;&gt;getCampaigns&lt;/a&gt; method.&lt;/span&gt; |

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

## `resumeCampaign()`

```php
resumeCampaign($campaign_id)
```



This method resumes a paused campaign, as long as its end date is in the future. Supply the <b>campaign_id</b> for the campaign you want to restart as a query parameter in the request.  <p>Call <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\">getCampaigns</a> to retrieve the <b>campaign_id</b> and the campaign status (<code>RUNNING</code>, <code>PAUSED</code>, <code>ENDED</code>, and so on) for all the seller's campaigns.</p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Marketing\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Marketing\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Marketing\V1\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | A unique eBay-assigned ID for an ad campaign that is generated when a campaign is created.<br /><br /><span class=\"tablenote\"><b>Note:</b> You can retrieve the campaign IDs for a specified seller using the <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\">getCampaigns</a> method.</span>

try {
    $apiInstance->resumeCampaign($campaign_id);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->resumeCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **string**| A unique eBay-assigned ID for an ad campaign that is generated when a campaign is created.&lt;br /&gt;&lt;br /&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; You can retrieve the campaign IDs for a specified seller using the &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\&quot;&gt;getCampaigns&lt;/a&gt; method.&lt;/span&gt; |

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

## `suggestItems()`

```php
suggestItems($campaign_id, $category_ids, $limit, $offset): \TNT\Ebay\Sell\Marketing\V1\Model\TargetedAdsPagedCollection
```



<span class=\"tablenote\"><b>Note:</b> This is a <a href=\"/api-docs/static/versioning.html#limited \" target=\"_blank\"><img src=\"/cms/img/docs/partners-api.svg\" class=\"legend-icon partners-icon\" title=\"Limited Release\"  alt=\"Limited Release\" />Limited Release</a> API service that is available only to select partners who have been approved for the eBay Promoted Listings Advanced (PLA) program. For details about how to request access to this program, see <a href=\"/api-docs/sell/static/marketing/pl-verify-eligibility.html#access-requests\">Promoted Listings Advanced Access Requests</a> in the Promoted Listings Playbook.</span><br />This method allows sellers to obtain ideas for listings, which can be targeted for Promoted Listings campaigns.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Marketing\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Marketing\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Marketing\V1\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | A unique eBay-assigned ID for an ad campaign that is generated when a campaign is created.<br /><br /><span class=\"tablenote\"><b>Note:</b> You can retrieve the campaign IDs for a specified seller using the <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\">getCampaigns</a> method.</span>
$category_ids = 'category_ids_example'; // string | Specifies the category ID that is used to limit the results. This refers to an exact leaf category (the lowest level in that category and has no children). This field can have one category ID, or a comma-separated list of IDs. To return all category IDs, set to <code>null</code>. <br /><br /><b>Maximum: </b> 10
$limit = 'limit_example'; // string | Specifies the maximum number of campaigns to return on a page in the paginated response. If no value is specified, the default value is used. <br /><br /><b>Default: </b>10 <br /><br /><b>Minimum: </b> 1<br /><br /><b>Maximum: </b> 1000
$offset = 'offset_example'; // string | Specifies the number of campaigns to skip in the result set before returning the first report in the paginated response.  <p>Combine <b>offset</b> with the <b>limit</b> query parameter to control the items returned in the response. For example, if you supply an <b>offset</b> of <code>0</code> and a <b>limit</b> of <code>10</code>, the first page of the response contains the first 10 items from the complete list of items retrieved by the call. If <b>offset</b> is <code>10</code> and <b>limit</b> is <code>20</code>, the first page of the response contains items 11-30 from the complete result set.</p> <p><b>Default:</b> 0</p>

try {
    $result = $apiInstance->suggestItems($campaign_id, $category_ids, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->suggestItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **string**| A unique eBay-assigned ID for an ad campaign that is generated when a campaign is created.&lt;br /&gt;&lt;br /&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; You can retrieve the campaign IDs for a specified seller using the &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\&quot;&gt;getCampaigns&lt;/a&gt; method.&lt;/span&gt; |
 **category_ids** | **string**| Specifies the category ID that is used to limit the results. This refers to an exact leaf category (the lowest level in that category and has no children). This field can have one category ID, or a comma-separated list of IDs. To return all category IDs, set to &lt;code&gt;null&lt;/code&gt;. &lt;br /&gt;&lt;br /&gt;&lt;b&gt;Maximum: &lt;/b&gt; 10 | [optional]
 **limit** | **string**| Specifies the maximum number of campaigns to return on a page in the paginated response. If no value is specified, the default value is used. &lt;br /&gt;&lt;br /&gt;&lt;b&gt;Default: &lt;/b&gt;10 &lt;br /&gt;&lt;br /&gt;&lt;b&gt;Minimum: &lt;/b&gt; 1&lt;br /&gt;&lt;br /&gt;&lt;b&gt;Maximum: &lt;/b&gt; 1000 | [optional]
 **offset** | **string**| Specifies the number of campaigns to skip in the result set before returning the first report in the paginated response.  &lt;p&gt;Combine &lt;b&gt;offset&lt;/b&gt; with the &lt;b&gt;limit&lt;/b&gt; query parameter to control the items returned in the response. For example, if you supply an &lt;b&gt;offset&lt;/b&gt; of &lt;code&gt;0&lt;/code&gt; and a &lt;b&gt;limit&lt;/b&gt; of &lt;code&gt;10&lt;/code&gt;, the first page of the response contains the first 10 items from the complete list of items retrieved by the call. If &lt;b&gt;offset&lt;/b&gt; is &lt;code&gt;10&lt;/code&gt; and &lt;b&gt;limit&lt;/b&gt; is &lt;code&gt;20&lt;/code&gt;, the first page of the response contains items 11-30 from the complete result set.&lt;/p&gt; &lt;p&gt;&lt;b&gt;Default:&lt;/b&gt; 0&lt;/p&gt; | [optional]

### Return type

[**\TNT\Ebay\Sell\Marketing\V1\Model\TargetedAdsPagedCollection**](../Model/TargetedAdsPagedCollection.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAdRateStrategy()`

```php
updateAdRateStrategy($campaign_id, $update_adrate_strategy_request)
```



This method updates the ad rate strategy for an existing Promoted Listings Standard (PLS) rules-based ad campaign that uses the Cost Per Sale (CPS) funding model.<br /><br />Specify the <b>campaign_id</b> as a path parameter. You can retrieve the campaign IDs for a seller by calling the <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\">getCampaigns</a> method.<br /><br /><span class=\"tablenote\"><b>Note:</b> This method only applies to the CPS funding model; it does not apply to the Cost Per Click (CPC) funding model. See <a href=\"/api-docs/sell/static/marketing/pl-overview.html#funding-model\">Funding Models</a> in the <i>Promoted Listings Playbook</i> for more information.</span>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Marketing\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Marketing\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Marketing\V1\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | A unique eBay-assigned ID for an ad campaign that is generated when a campaign is created.<br /><br /><span class=\"tablenote\"><b>Note:</b> You can retrieve the campaign IDs for a specified seller using the <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\">getCampaigns</a> method.</span>
$update_adrate_strategy_request = new \TNT\Ebay\Sell\Marketing\V1\Model\UpdateAdrateStrategyRequest(); // \TNT\Ebay\Sell\Marketing\V1\Model\UpdateAdrateStrategyRequest | This type defines the request fields for the ad rate strategy that shall be updated.

try {
    $apiInstance->updateAdRateStrategy($campaign_id, $update_adrate_strategy_request);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->updateAdRateStrategy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **string**| A unique eBay-assigned ID for an ad campaign that is generated when a campaign is created.&lt;br /&gt;&lt;br /&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; You can retrieve the campaign IDs for a specified seller using the &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\&quot;&gt;getCampaigns&lt;/a&gt; method.&lt;/span&gt; |
 **update_adrate_strategy_request** | [**\TNT\Ebay\Sell\Marketing\V1\Model\UpdateAdrateStrategyRequest**](../Model/UpdateAdrateStrategyRequest.md)| This type defines the request fields for the ad rate strategy that shall be updated. |

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

## `updateCampaignBudget()`

```php
updateCampaignBudget($campaign_id, $update_campaign_budget_request)
```



<span class=\"tablenote\"><b>Note:</b> This is a <a href=\"/api-docs/static/versioning.html#limited \" target=\"_blank\"><img src=\"/cms/img/docs/partners-api.svg\" class=\"legend-icon partners-icon\" title=\"Limited Release\"  alt=\"Limited Release\" />Limited Release</a> API service that is available only to select partners who have been approved for the eBay Promoted Listings Advanced (PLA) program. For details about how to request access to this program, see <a href=\"/api-docs/sell/static/marketing/pl-verify-eligibility.html#access-requests\">Promoted Listings Advanced Access Requests</a> in the Promoted Listings Playbook.</span><br />This method updates the daily budget for a PLA campaign that uses the Cost Per Click (CPC) funding model.<br /><br />A click occurs when an eBay user finds and clicks on the seller’s listing (within the search results) after using a keyword that the seller has created for the campaign. For each ad in an ad group in the campaign, each click triggers a cost, which gets subtracted from the campaign’s daily budget. If the cost of the clicks exceeds the daily budget, the Promoted Listings campaign will be paused until the next day.<br /><br />Specify the <b>campaign_id</b> as a path parameter. You can retrieve the campaign IDs for a seller by calling the <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\">getCampaigns</a> method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Marketing\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Marketing\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Marketing\V1\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | A unique eBay-assigned ID for an ad campaign that is generated when a campaign is created.<br /><br /><span class=\"tablenote\"><b>Note:</b> You can retrieve the campaign IDs for a specified seller using the <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\">getCampaigns</a> method.</span>
$update_campaign_budget_request = new \TNT\Ebay\Sell\Marketing\V1\Model\UpdateCampaignBudgetRequest(); // \TNT\Ebay\Sell\Marketing\V1\Model\UpdateCampaignBudgetRequest | This type defines the request fields for the budget details that shall be updated.

try {
    $apiInstance->updateCampaignBudget($campaign_id, $update_campaign_budget_request);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->updateCampaignBudget: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **string**| A unique eBay-assigned ID for an ad campaign that is generated when a campaign is created.&lt;br /&gt;&lt;br /&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; You can retrieve the campaign IDs for a specified seller using the &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\&quot;&gt;getCampaigns&lt;/a&gt; method.&lt;/span&gt; |
 **update_campaign_budget_request** | [**\TNT\Ebay\Sell\Marketing\V1\Model\UpdateCampaignBudgetRequest**](../Model/UpdateCampaignBudgetRequest.md)| This type defines the request fields for the budget details that shall be updated. |

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

## `updateCampaignIdentification()`

```php
updateCampaignIdentification($campaign_id, $update_campaign_identification_request)
```



This method can be used to change the name of a campaign, as well as modify the start or end dates. <p>Specify the <b>campaign_id</b> you want to update as a URI parameter, and configure the <b>campaignName</b> and <b>startDate</b> in the request payload.  <p>If you want to change only the end date of the campaign, specify the current campaign name and set <b>startDate</b> to the current date (you cannot use a start date that is in the past), and set the <b>endDate</b> as desired. Note that if you do not set a new end date in this call, any current <b>endDate</b> value will be set to <code>null</code>. To preserve the currently-set end date, you must specify the value again in your request.</p>  <p>Call <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\">getCampaigns</a> to retrieve a seller's campaign details, including the campaign ID, campaign name, and the start and end dates of the campaign.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Marketing\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Marketing\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Marketing\V1\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | A unique eBay-assigned ID for an ad campaign that is generated when a campaign is created.<br /><br /><span class=\"tablenote\"><b>Note:</b> You can retrieve the campaign IDs for a specified seller using the <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\">getCampaigns</a> method.</span>
$update_campaign_identification_request = new \TNT\Ebay\Sell\Marketing\V1\Model\UpdateCampaignIdentificationRequest(); // \TNT\Ebay\Sell\Marketing\V1\Model\UpdateCampaignIdentificationRequest | This type defines the fields to update the campaign name and start and end dates.

try {
    $apiInstance->updateCampaignIdentification($campaign_id, $update_campaign_identification_request);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->updateCampaignIdentification: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **string**| A unique eBay-assigned ID for an ad campaign that is generated when a campaign is created.&lt;br /&gt;&lt;br /&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; You can retrieve the campaign IDs for a specified seller using the &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\&quot;&gt;getCampaigns&lt;/a&gt; method.&lt;/span&gt; |
 **update_campaign_identification_request** | [**\TNT\Ebay\Sell\Marketing\V1\Model\UpdateCampaignIdentificationRequest**](../Model/UpdateCampaignIdentificationRequest.md)| This type defines the fields to update the campaign name and start and end dates. |

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
