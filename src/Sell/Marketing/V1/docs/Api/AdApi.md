# TNT\Ebay\Sell\Marketing\V1\AdApi

All URIs are relative to https://api.ebay.com/sell/marketing/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**bulkCreateAdsByInventoryReference()**](AdApi.md#bulkCreateAdsByInventoryReference) | **POST** /ad_campaign/{campaign_id}/bulk_create_ads_by_inventory_reference | 
[**bulkCreateAdsByListingId()**](AdApi.md#bulkCreateAdsByListingId) | **POST** /ad_campaign/{campaign_id}/bulk_create_ads_by_listing_id | 
[**bulkDeleteAdsByInventoryReference()**](AdApi.md#bulkDeleteAdsByInventoryReference) | **POST** /ad_campaign/{campaign_id}/bulk_delete_ads_by_inventory_reference | 
[**bulkDeleteAdsByListingId()**](AdApi.md#bulkDeleteAdsByListingId) | **POST** /ad_campaign/{campaign_id}/bulk_delete_ads_by_listing_id | 
[**bulkUpdateAdsBidByInventoryReference()**](AdApi.md#bulkUpdateAdsBidByInventoryReference) | **POST** /ad_campaign/{campaign_id}/bulk_update_ads_bid_by_inventory_reference | 
[**bulkUpdateAdsBidByListingId()**](AdApi.md#bulkUpdateAdsBidByListingId) | **POST** /ad_campaign/{campaign_id}/bulk_update_ads_bid_by_listing_id | 
[**bulkUpdateAdsStatus()**](AdApi.md#bulkUpdateAdsStatus) | **POST** /ad_campaign/{campaign_id}/bulk_update_ads_status | 
[**bulkUpdateAdsStatusByListingId()**](AdApi.md#bulkUpdateAdsStatusByListingId) | **POST** /ad_campaign/{campaign_id}/bulk_update_ads_status_by_listing_id | 
[**createAdByListingId()**](AdApi.md#createAdByListingId) | **POST** /ad_campaign/{campaign_id}/ad | 
[**createAdsByInventoryReference()**](AdApi.md#createAdsByInventoryReference) | **POST** /ad_campaign/{campaign_id}/create_ads_by_inventory_reference | 
[**deleteAd()**](AdApi.md#deleteAd) | **DELETE** /ad_campaign/{campaign_id}/ad/{ad_id} | 
[**deleteAdsByInventoryReference()**](AdApi.md#deleteAdsByInventoryReference) | **POST** /ad_campaign/{campaign_id}/delete_ads_by_inventory_reference | 
[**getAd()**](AdApi.md#getAd) | **GET** /ad_campaign/{campaign_id}/ad/{ad_id} | 
[**getAds()**](AdApi.md#getAds) | **GET** /ad_campaign/{campaign_id}/ad | 
[**getAdsByInventoryReference()**](AdApi.md#getAdsByInventoryReference) | **GET** /ad_campaign/{campaign_id}/get_ads_by_inventory_reference | 
[**updateBid()**](AdApi.md#updateBid) | **POST** /ad_campaign/{campaign_id}/ad/{ad_id}/update_bid | 


## `bulkCreateAdsByInventoryReference()`

```php
bulkCreateAdsByInventoryReference($campaign_id, $bulk_create_ads_by_inventory_reference_request): \TNT\Ebay\Sell\Marketing\V1\Model\BulkCreateAdsByInventoryReferenceResponse
```



This method adds multiple listings that are managed with the <a href=\"/api-docs/sell/inventory/resources/methods\" title=\"Inventory API Reference\">Inventory API</a> to an existing Promoted Listings campaign.<br /><br />For Promoted Listings Standard (PLS) campaigns using the Cost Per Sale (CPS) model, bulk ads may be directly created for the listing.<br /><br />For each listing specified in the request, this method:<br /><ul><li>Creates an ad for the listing.</li> <li>Sets the bid percentage (also known as the <i>ad rate</i>) for the ads created.</li> <li>Associates the ads created with the specified campaign.</li></ul><br />To create ads for a listing, specify their <b>inventoryReferenceId</b> and <b>inventoryReferenceType</b>, plus the <b>bidPercentage</b> for the ad in the payload of the request. Specify the campaign to which you want to associate the ads using the <b>campaign_id</b> path parameter.<br /><br /><span class=\"tablenote\"><b>Note:</b> This method only applies to the Cost Per Sale (CPS) funding model; it does not apply to the Cost Per Click (CPC) funding model. See <a href=\"/api-docs/sell/static/marketing/pl-overview.html#funding-model\">Funding Models</a> in the <i>Promoted Listings Playbook</i> for more information.</span><br /><br />Use <a href=\"/api-docs/sell/marketing/resources/campaign/methods/createCampaign\">createCampaign</a> to create a new campaign and use <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\">getCampaigns</a> to get a list of existing campaigns.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Marketing\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Marketing\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Marketing\V1\Api\AdApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | A unique eBay-assigned ID for an ad campaign that is generated when a campaign is created. Get a seller's campaign IDs by calling <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\">getCampaigns</a>.
$bulk_create_ads_by_inventory_reference_request = new \TNT\Ebay\Sell\Marketing\V1\Model\BulkCreateAdsByInventoryReferenceRequest(); // \TNT\Ebay\Sell\Marketing\V1\Model\BulkCreateAdsByInventoryReferenceRequest | The container for the bulk request to create ads for eBay inventory reference IDs. eBay inventory reference IDs are seller-defined IDs used by theInventory API.

try {
    $result = $apiInstance->bulkCreateAdsByInventoryReference($campaign_id, $bulk_create_ads_by_inventory_reference_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdApi->bulkCreateAdsByInventoryReference: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **string**| A unique eBay-assigned ID for an ad campaign that is generated when a campaign is created. Get a seller&#39;s campaign IDs by calling &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\&quot;&gt;getCampaigns&lt;/a&gt;. |
 **bulk_create_ads_by_inventory_reference_request** | [**\TNT\Ebay\Sell\Marketing\V1\Model\BulkCreateAdsByInventoryReferenceRequest**](../Model/BulkCreateAdsByInventoryReferenceRequest.md)| The container for the bulk request to create ads for eBay inventory reference IDs. eBay inventory reference IDs are seller-defined IDs used by theInventory API. |

### Return type

[**\TNT\Ebay\Sell\Marketing\V1\Model\BulkCreateAdsByInventoryReferenceResponse**](../Model/BulkCreateAdsByInventoryReferenceResponse.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bulkCreateAdsByListingId()`

```php
bulkCreateAdsByListingId($campaign_id, $bulk_create_ad_request): \TNT\Ebay\Sell\Marketing\V1\Model\BulkAdResponse
```



This method adds multiple listings to an existing Promoted Listings campaign using <b>listingId</b> values generated by the <a href=\"/Devzone/XML/docs/Reference/eBay/index.html\" title=\"Trading API Reference\">Trading API</a> or <a href=\"/api-docs/sell/inventory/resources/methods\" title=\"Inventory API Reference\">Inventory API</a>, or using values generated by an ad group ID.<p>For Promoted Listings Standard (PLS) campaigns using the Cost Per Sale (CPS) funding model, bulk ads may be directly created for the listing.</p><p>For each listing ID specified in the request, this method:</p>  <ul><li>Creates an ad for the listing.</li> <li>Sets the bid percentage (also known as the <i>ad rate</i>) for the ad.</li> <li>Associates the ad with the specified campaign.</li></ul><p>To create an ad for a listing, specify its <b>listingId</b>, plus the <b>bidPercentage</b> for the ad in the payload of the request. Specify the campaign to associate the ads with using the <b>campaign_id</b> path parameter. Listing IDs are generated by eBay when a seller creates listings with the Trading API.</p><p>You can specify a maximum of <b>500 listings per call</b> and each campaign can have ads for a maximum of 50,000 items. Be aware when using this call that each variation in a multiple-variation listing creates an individual ad.</p><p>For Promoted Listings Advanced (PLA) campaigns using the Cost Per Click (CPC) funding model, an ad group must be created first. If no ad group has been created for the campaign, ads cannot be created.</p><p>For the ad group specified in the request, this method associates the ad with the specified ad group.</p><p>To create an ad for an ad group, specify the name of the ad group plus the <b>defaultBid</b> for the ad in the payload of the request. Specify the campaign to associate the ads with using the <b>campaign_id</b> path parameter. Ad groups are generated using the <a href=\"/api-docs/sell/marketing/resources/adgroup/methods/createAdGroup\">createAdGroup</a>  method.</p> <p>You can specify one or more ad groups per campaign.</p><p>Use <a href=\"/api-docs/sell/marketing/resources/campaign/methods/createCampaign\">createCampaign</a> to create a new campaign and use <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\">getCampaigns</a> to get a list of existing campaigns.</p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Marketing\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Marketing\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Marketing\V1\Api\AdApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | A unique eBay-assigned ID for an ad campaign that's generated when a campaign is created. Get a seller's campaign IDs by calling <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\">getCampaigns</a>.
$bulk_create_ad_request = new \TNT\Ebay\Sell\Marketing\V1\Model\BulkCreateAdRequest(); // \TNT\Ebay\Sell\Marketing\V1\Model\BulkCreateAdRequest | The container for the bulk request to create ads for eBay listing IDs. eBay listing IDs are generated by the Trading API and Inventory API when the listing is created on eBay.

try {
    $result = $apiInstance->bulkCreateAdsByListingId($campaign_id, $bulk_create_ad_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdApi->bulkCreateAdsByListingId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **string**| A unique eBay-assigned ID for an ad campaign that&#39;s generated when a campaign is created. Get a seller&#39;s campaign IDs by calling &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\&quot;&gt;getCampaigns&lt;/a&gt;. |
 **bulk_create_ad_request** | [**\TNT\Ebay\Sell\Marketing\V1\Model\BulkCreateAdRequest**](../Model/BulkCreateAdRequest.md)| The container for the bulk request to create ads for eBay listing IDs. eBay listing IDs are generated by the Trading API and Inventory API when the listing is created on eBay. |

### Return type

[**\TNT\Ebay\Sell\Marketing\V1\Model\BulkAdResponse**](../Model/BulkAdResponse.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bulkDeleteAdsByInventoryReference()`

```php
bulkDeleteAdsByInventoryReference($campaign_id, $bulk_delete_ads_by_inventory_reference_request): \TNT\Ebay\Sell\Marketing\V1\Model\BulkDeleteAdsByInventoryReferenceResponse
```



This method works with listings created with the <a href=\"/api-docs/sell/inventory/resources/methods\" title=\"Inventory API Reference\">Inventory API</a>.<br /><br />The method deletes a set of ads, as specified by a list of inventory reference IDs, from the specified campaign. <i>Inventory reference IDs</i> are seller-defined IDs that are used with the Inventory API</a>.<br /><br />Pass the <b>campaign_id</b> as a path parameter and populate the payload with a list of <b>inventoryReferenceId</b> and <b>inventoryReferenceType</b> pairs that you want to delete.<br /><br />Get the campaign IDs for a seller by calling <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\">getCampaigns</a> and call <a href=\"/api-docs/sell/marketing/resources/ad/methods/getAds\">getAds</a> to get a list of the seller's inventory reference IDs.<br /><br /><span class=\"tablenote\"><b>Note:</b> This method only applies to the Cost Per Sale (CPS) funding model; it does not apply to the Cost Per Click (CPC) funding model. See <a href=\"/api-docs/sell/static/marketing/pl-overview.html#funding-model\">Funding Models</a> in the <i>Promoted Listings Playbook</i> for more information.</span>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Marketing\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Marketing\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Marketing\V1\Api\AdApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | A unique eBay-assigned ID for an ad campaign that's generated when a campaign is created. Get a seller's campaign IDs by calling <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\">getCampaigns</a>.
$bulk_delete_ads_by_inventory_reference_request = new \TNT\Ebay\Sell\Marketing\V1\Model\BulkDeleteAdsByInventoryReferenceRequest(); // \TNT\Ebay\Sell\Marketing\V1\Model\BulkDeleteAdsByInventoryReferenceRequest | This request works with listings created via the <a href=\"/api-docs/sell/inventory/resources/methods\">Inventory API</a>.<br /><br />The request is to delete a set of ads in bulk, as specified by a list of inventory reference IDs from the specified campaign.

try {
    $result = $apiInstance->bulkDeleteAdsByInventoryReference($campaign_id, $bulk_delete_ads_by_inventory_reference_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdApi->bulkDeleteAdsByInventoryReference: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **string**| A unique eBay-assigned ID for an ad campaign that&#39;s generated when a campaign is created. Get a seller&#39;s campaign IDs by calling &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\&quot;&gt;getCampaigns&lt;/a&gt;. |
 **bulk_delete_ads_by_inventory_reference_request** | [**\TNT\Ebay\Sell\Marketing\V1\Model\BulkDeleteAdsByInventoryReferenceRequest**](../Model/BulkDeleteAdsByInventoryReferenceRequest.md)| This request works with listings created via the &lt;a href&#x3D;\&quot;/api-docs/sell/inventory/resources/methods\&quot;&gt;Inventory API&lt;/a&gt;.&lt;br /&gt;&lt;br /&gt;The request is to delete a set of ads in bulk, as specified by a list of inventory reference IDs from the specified campaign. |

### Return type

[**\TNT\Ebay\Sell\Marketing\V1\Model\BulkDeleteAdsByInventoryReferenceResponse**](../Model/BulkDeleteAdsByInventoryReferenceResponse.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bulkDeleteAdsByListingId()`

```php
bulkDeleteAdsByListingId($campaign_id, $bulk_delete_ad_request): \TNT\Ebay\Sell\Marketing\V1\Model\BulkDeleteAdResponse
```



This method works with listing IDs created with either the <a href=\"/Devzone/XML/docs/Reference/eBay/index.html\" title=\"Trading API Reference\">Trading API</a> or the <a href=\"/api-docs/sell/inventory/resources/methods\" title=\"Inventory API Reference\">Inventory API</a>.<br /><br />The method deletes a set of ads, as specified by a list of <b>listingID</b> values from a Promoted Listings campaign. A listing ID value is generated by eBay when a seller creates a listing with either the Trading API and Inventory API.<br /><br />Pass the <b>campaign_id</b> as a path parameter and populate the payload with the set of listing IDs that you want to delete.<br /><br />Get the campaign IDs for a seller by calling <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\">getCampaigns</a> and call <a href=\"/api-docs/sell/marketing/resources/ad/methods/getAds\">getAds</a> to get a list of the seller's inventory reference IDs.<br /><br /><span class=\"tablenote\"><b>Note:</b> This method only applies to the Cost Per Sale (CPS) funding model; it does not apply to the Cost Per Click (CPC) funding model. See <a href=\"/api-docs/sell/static/marketing/pl-overview.html#funding-model\">Funding Models</a> in the <i>Promoted Listings Playbook</i> for more information.</span><br /><br />When using the CPC funding model, use the <a href=\"/api-docs/sell/marketing/resources/ad/methods/bulkUpdateAdsStatusByListingId\">bulkUpdateAdsStatusByListingId</a> method to change the status of ads to ARCHIVED.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Marketing\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Marketing\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Marketing\V1\Api\AdApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | A unique eBay-assigned ID for an ad campaign that's generated when a campaign is created. Get a seller's campaign IDs by calling <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\">getCampaigns</a>.
$bulk_delete_ad_request = new \TNT\Ebay\Sell\Marketing\V1\Model\BulkDeleteAdRequest(); // \TNT\Ebay\Sell\Marketing\V1\Model\BulkDeleteAdRequest | This request object defines the fields for the <b>bulkDeleteAdsByListingId</b> request.

try {
    $result = $apiInstance->bulkDeleteAdsByListingId($campaign_id, $bulk_delete_ad_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdApi->bulkDeleteAdsByListingId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **string**| A unique eBay-assigned ID for an ad campaign that&#39;s generated when a campaign is created. Get a seller&#39;s campaign IDs by calling &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\&quot;&gt;getCampaigns&lt;/a&gt;. |
 **bulk_delete_ad_request** | [**\TNT\Ebay\Sell\Marketing\V1\Model\BulkDeleteAdRequest**](../Model/BulkDeleteAdRequest.md)| This request object defines the fields for the &lt;b&gt;bulkDeleteAdsByListingId&lt;/b&gt; request. |

### Return type

[**\TNT\Ebay\Sell\Marketing\V1\Model\BulkDeleteAdResponse**](../Model/BulkDeleteAdResponse.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bulkUpdateAdsBidByInventoryReference()`

```php
bulkUpdateAdsBidByInventoryReference($campaign_id, $bulk_create_ads_by_inventory_reference_request): \TNT\Ebay\Sell\Marketing\V1\Model\BulkUpdateAdsByInventoryReferenceResponse
```



This method works with listings created with either the <a href=\"/Devzone/XML/docs/Reference/eBay/index.html\" title=\"Trading API Reference\">Trading API</a> or the <a href=\"/api-docs/sell/inventory/resources/methods\" title=\"Inventory API Reference\">Inventory API</a>.  <p>The method updates the <b>bidPercentage</b> values for a set of ads associated with the specified campaign.</p>  <p>Specify the <b>campaign_id</b> as a path parameter and supply a set of listing IDs with their associated updated <b>bidPercentage</b> values in the request body. An eBay listing ID is generated when a listing is created with the Trading API.</p>  <p>Get the campaign IDs for a seller by calling <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\">getCampaigns</a> and call <a href=\"/api-docs/sell/marketing/resources/ad/methods/getAds\">getAds</a> to get a list of the seller's inventory reference IDs.</p><span class=\"tablenote\"><b>Note:</b> This method only applies to the Cost Per Sale (CPS) funding model; it does not apply to the Cost Per Click (CPC) funding model. See <a href=\"/api-docs/sell/static/marketing/pl-overview.html#funding-model\">Funding Models</a> in the <i>Promoted Listings Playbook</i> for more information.</span>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Marketing\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Marketing\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Marketing\V1\Api\AdApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | A unique eBay-assigned ID for an ad campaign that's generated when a campaign is created. Get a seller's campaign IDs by calling <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\">getCampaigns</a>.
$bulk_create_ads_by_inventory_reference_request = new \TNT\Ebay\Sell\Marketing\V1\Model\BulkCreateAdsByInventoryReferenceRequest(); // \TNT\Ebay\Sell\Marketing\V1\Model\BulkCreateAdsByInventoryReferenceRequest | This request object defines the fields for the <b>BulkCreateAdsByInventoryReference</b> request.

try {
    $result = $apiInstance->bulkUpdateAdsBidByInventoryReference($campaign_id, $bulk_create_ads_by_inventory_reference_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdApi->bulkUpdateAdsBidByInventoryReference: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **string**| A unique eBay-assigned ID for an ad campaign that&#39;s generated when a campaign is created. Get a seller&#39;s campaign IDs by calling &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\&quot;&gt;getCampaigns&lt;/a&gt;. |
 **bulk_create_ads_by_inventory_reference_request** | [**\TNT\Ebay\Sell\Marketing\V1\Model\BulkCreateAdsByInventoryReferenceRequest**](../Model/BulkCreateAdsByInventoryReferenceRequest.md)| This request object defines the fields for the &lt;b&gt;BulkCreateAdsByInventoryReference&lt;/b&gt; request. |

### Return type

[**\TNT\Ebay\Sell\Marketing\V1\Model\BulkUpdateAdsByInventoryReferenceResponse**](../Model/BulkUpdateAdsByInventoryReferenceResponse.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bulkUpdateAdsBidByListingId()`

```php
bulkUpdateAdsBidByListingId($campaign_id, $bulk_create_ad_request): \TNT\Ebay\Sell\Marketing\V1\Model\BulkAdUpdateResponse
```



This method works with listings created with either the <a href=\"/Devzone/XML/docs/Reference/eBay/index.html\" title=\"Trading API Reference\">Trading API</a> or the <a href=\"/api-docs/sell/inventory/resources/methods\" title=\"Inventory API Reference\">Inventory API</a>.  <p>The method updates the <b>bidPercentage</b> values for a set of ads associated with the specified campaign.</p>  <p>Specify the <b>campaign_id</b> as a path parameter and supply a set of listing IDs with their associated updated <b>bidPercentage</b> values in the request body. An eBay listing ID is generated when a listing is created with the Trading API.</p>  <p>Get the campaign IDs for a seller by calling <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\">getCampaigns</a> and call <a href=\"/api-docs/sell/marketing/resources/ad/methods/getAds\">getAds</a> to get a list of the seller's inventory reference IDs.</p><span class=\"tablenote\"><b>Note:</b> This method only applies to the Cost Per Sale (CPS) funding model; it does not apply to the Cost Per Click (CPC) funding model. See <a href=\"/api-docs/sell/static/marketing/pl-overview.html#funding-model\">Funding Models</a> in the <i>Promoted Listings Playbook</i> for more information.</span>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Marketing\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Marketing\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Marketing\V1\Api\AdApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | A unique eBay-assigned ID for an ad campaign that's generated when a campaign is created. Get a seller's campaign IDs by calling <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\">getCampaigns</a>.
$bulk_create_ad_request = new \TNT\Ebay\Sell\Marketing\V1\Model\BulkCreateAdRequest(); // \TNT\Ebay\Sell\Marketing\V1\Model\BulkCreateAdRequest | This request object defines the fields for the <b>BulkCreateAdsByListingId</b> request.

try {
    $result = $apiInstance->bulkUpdateAdsBidByListingId($campaign_id, $bulk_create_ad_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdApi->bulkUpdateAdsBidByListingId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **string**| A unique eBay-assigned ID for an ad campaign that&#39;s generated when a campaign is created. Get a seller&#39;s campaign IDs by calling &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\&quot;&gt;getCampaigns&lt;/a&gt;. |
 **bulk_create_ad_request** | [**\TNT\Ebay\Sell\Marketing\V1\Model\BulkCreateAdRequest**](../Model/BulkCreateAdRequest.md)| This request object defines the fields for the &lt;b&gt;BulkCreateAdsByListingId&lt;/b&gt; request. |

### Return type

[**\TNT\Ebay\Sell\Marketing\V1\Model\BulkAdUpdateResponse**](../Model/BulkAdUpdateResponse.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bulkUpdateAdsStatus()`

```php
bulkUpdateAdsStatus($campaign_id, $bulk_update_ad_status_request): \TNT\Ebay\Sell\Marketing\V1\Model\BulkAdUpdateStatusResponse
```



<span class=\"tablenote\"><b>Note:</b> This is a <a href=\"/api-docs/static/versioning.html#limited \" target=\"_blank\"> <img src=\"/cms/img/docs/partners-api.svg\" class=\"legend-icon partners-icon\" title=\"Limited Release\"  alt=\"Limited Release\" />Limited Release</a> API service that is available only to select partners who have been approved for the eBay Promoted Listings Advanced (PLA) program. For details about how to request access to this program, see <a href=\"/api-docs/sell/static/marketing/pl-verify-eligibility.html#access-requests\">Promoted Listings Advanced Access Requests</a> in the Promoted Listings Playbook.</span><br />This method works with listings created with either the <a href=\"/Devzone/XML/docs/Reference/eBay/index.html\">Trading API</a> or the <a href=\"/api-docs/sell/inventory/resources/methods\">Inventory API</a>.<br /><br />This method updates the status of ads in bulk.<br /><br />Specify the <b>campaign_id</b> you want to update as a URI parameter, and configure the <b>adGroupStatus</b> in the request payload.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Marketing\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Marketing\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Marketing\V1\Api\AdApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | A unique eBay-assigned ID for an ad campaign that is generated when a campaign is created.<br /><br /><span class=\"tablenote\"><b>Note:</b> You can retrieve the campaign IDs for a specified seller using the <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\">getCampaigns</a> method.</span>
$bulk_update_ad_status_request = new \TNT\Ebay\Sell\Marketing\V1\Model\BulkUpdateAdStatusRequest(); // \TNT\Ebay\Sell\Marketing\V1\Model\BulkUpdateAdStatusRequest | The bulk request to update the ads.

try {
    $result = $apiInstance->bulkUpdateAdsStatus($campaign_id, $bulk_update_ad_status_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdApi->bulkUpdateAdsStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **string**| A unique eBay-assigned ID for an ad campaign that is generated when a campaign is created.&lt;br /&gt;&lt;br /&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; You can retrieve the campaign IDs for a specified seller using the &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\&quot;&gt;getCampaigns&lt;/a&gt; method.&lt;/span&gt; |
 **bulk_update_ad_status_request** | [**\TNT\Ebay\Sell\Marketing\V1\Model\BulkUpdateAdStatusRequest**](../Model/BulkUpdateAdStatusRequest.md)| The bulk request to update the ads. |

### Return type

[**\TNT\Ebay\Sell\Marketing\V1\Model\BulkAdUpdateStatusResponse**](../Model/BulkAdUpdateStatusResponse.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bulkUpdateAdsStatusByListingId()`

```php
bulkUpdateAdsStatusByListingId($campaign_id, $bulk_update_ad_status_by_listing_id_request): \TNT\Ebay\Sell\Marketing\V1\Model\BulkAdUpdateStatusByListingIdResponse
```



<span class=\"tablenote\"><b>Note:</b> This is a <a href=\"/api-docs/static/versioning.html#limited \" target=\"_blank\"> <img src=\"/cms/img/docs/partners-api.svg\" class=\"legend-icon partners-icon\" title=\"Limited Release\"  alt=\"Limited Release\" />Limited Release</a> API service that is available only to select partners who have been approved for the eBay Promoted Listings Advanced (PLA) program. For details about how to request access to this program, see <a href=\"/api-docs/sell/static/marketing/pl-verify-eligibility.html#access-requests\">Promoted Listings Advanced Access Requests</a> in the Promoted Listings Playbook.</span><br />This method works with listings created with either the <a href=\"/Devzone/XML/docs/Reference/eBay/index.html\">Trading API</a> or the <a href=\"/api-docs/sell/inventory/resources/methods\">Inventory API</a>.<br /><br />The method updates the status of ads in bulk, based on listing ID values.<br /><br />Specify the <b>campaign_id</b> as a path parameter and supply a set of listing IDs with their updated <b>adStatus</b> values in the request body. An eBay listing ID is generated when a listing is created with the Trading API.<br /><br />Get the campaign IDs for a seller by calling <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\">getCampaigns</a> and call <a href=\"/api-docs/sell/marketing/resources/ad/methods/getAds\">getAds</a> to retrieve a list of seller inventory reference IDs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Marketing\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Marketing\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Marketing\V1\Api\AdApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | A unique eBay-assigned ID for an ad campaign that is generated when a campaign is created.<br /><br /><span class=\"tablenote\"><b>Note:</b> You can retrieve the campaign IDs for a specified seller using the <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\">getCampaigns</a> method.</span>
$bulk_update_ad_status_by_listing_id_request = new \TNT\Ebay\Sell\Marketing\V1\Model\BulkUpdateAdStatusByListingIdRequest(); // \TNT\Ebay\Sell\Marketing\V1\Model\BulkUpdateAdStatusByListingIdRequest | The bulk request to update ads.

try {
    $result = $apiInstance->bulkUpdateAdsStatusByListingId($campaign_id, $bulk_update_ad_status_by_listing_id_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdApi->bulkUpdateAdsStatusByListingId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **string**| A unique eBay-assigned ID for an ad campaign that is generated when a campaign is created.&lt;br /&gt;&lt;br /&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; You can retrieve the campaign IDs for a specified seller using the &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\&quot;&gt;getCampaigns&lt;/a&gt; method.&lt;/span&gt; |
 **bulk_update_ad_status_by_listing_id_request** | [**\TNT\Ebay\Sell\Marketing\V1\Model\BulkUpdateAdStatusByListingIdRequest**](../Model/BulkUpdateAdStatusByListingIdRequest.md)| The bulk request to update ads. |

### Return type

[**\TNT\Ebay\Sell\Marketing\V1\Model\BulkAdUpdateStatusByListingIdResponse**](../Model/BulkAdUpdateStatusByListingIdResponse.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAdByListingId()`

```php
createAdByListingId($campaign_id, $create_ad_request): object
```



This method adds a listing to an existing Promoted Listings campaign using a <b>listingId</b> value generated by the <a href=\"/Devzone/XML/docs/Reference/eBay/index.html\" title=\"Trading API Reference\">Trading API</a> or <a href=\"/api-docs/sell/inventory/resources/methods\" title=\"Inventory API Reference\">Inventory API</a>, or using a value generated by an ad group ID. <p>For Promoted Listings Standard (PLS) campaigns using the Cost Per Sale (CPS) funding model, an ad may be directly created for the listing.</p><p>For the listing ID specified in the request, this method:</p>  <ul><li>Creates an ad for the listing.</li> <li>Sets the bid percentage (also known as the <i>ad rate</i>) for the ad.</li> <li>Associates the ad with the specified campaign.</li></ul>  <p>To create an ad for a listing, specify its <b>listingId</b>, plus the <b>bidPercentage</b> for the ad in the payload of the request. Specify the campaign to associate the ad with using the <b>campaign_id</b> path parameter. Listing IDs are generated by eBay when a seller creates listings with the Trading API.</p><p>For Promoted Listings Advanced (PLA) campaigns using the Cost Per Click (CPC) funding model, an ad group must be created first. If no ad group has been created for the campaign, an ad cannot be created.</p><p>For the ad group specified in the request, this method associates the ad with the specified ad group.</p><p>To create an ad for an ad group, specify the name of the ad group in the payload of the request. Specify the campaign to associate the ads with using the <b>campaign_id</b> path parameter. Ad groups are generated using the <a href=\"/api-docs/sell/marketing/resources/adgroup/methods/createAdGroup\">createAdGroup</a> method.</p> <p>You can specify one or more ad groups per campaign.</p><p>Use <a href=\"/api-docs/sell/marketing/resources/campaign/methods/createCampaign\">createCampaign</a> to create a new campaign and use <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\">getCampaigns</a> to get a list of existing campaigns.</p><p>This call has no response payload. If the ad is successfully created, a <code>201 Created</code> HTTP status code and the <a href=\"/api-docs/sell/marketing/resources/ad/methods/getAd\">getAd</a> URI of the ad are returned in the location header.</p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Marketing\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Marketing\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Marketing\V1\Api\AdApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | A unique eBay-assigned ID for an ad campaign that is generated when a campaign is created.<br /><br /><span class=\"tablenote\"><b>Note:</b> You can retrieve the campaign IDs for a specified seller using the <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\">getCampaigns</a> method.</span>
$create_ad_request = new \TNT\Ebay\Sell\Marketing\V1\Model\CreateAdRequest(); // \TNT\Ebay\Sell\Marketing\V1\Model\CreateAdRequest | This request object defines the fields used in the <b>createAdByListingId</b> request.

try {
    $result = $apiInstance->createAdByListingId($campaign_id, $create_ad_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdApi->createAdByListingId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **string**| A unique eBay-assigned ID for an ad campaign that is generated when a campaign is created.&lt;br /&gt;&lt;br /&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; You can retrieve the campaign IDs for a specified seller using the &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\&quot;&gt;getCampaigns&lt;/a&gt; method.&lt;/span&gt; |
 **create_ad_request** | [**\TNT\Ebay\Sell\Marketing\V1\Model\CreateAdRequest**](../Model/CreateAdRequest.md)| This request object defines the fields used in the &lt;b&gt;createAdByListingId&lt;/b&gt; request. |

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

## `createAdsByInventoryReference()`

```php
createAdsByInventoryReference($campaign_id, $create_ads_by_inventory_reference_request): \TNT\Ebay\Sell\Marketing\V1\Model\AdReferences
```



This method adds a listing that is managed with the <a href=\"/api-docs/sell/inventory/resources/methods\" title=\"Inventory API Reference\">Inventory API</a> to an existing Promoted Listings campaign.<br /><br />For Promoted Listings Standard (PLS) campaigns using the Cost Per Sale (CPS) funding model, an ad may be directly created for the listing.<br /><br />For each listing specified in the request, this method:<br /><ul><li>Creates an ad for the listing.</li> <li>Sets the bid percentage (also known as the <i>ad rate</i>) for the ads created.</li> <li>Associates the created ad with the specified campaign.</li></ul><br />To create an ad for a listing, specify its <b>inventoryReferenceId</b> and <b>inventoryReferenceType</b>, plus the <b>bidPercentage</b> for the ad in the payload of the request. Specify the campaign to associate the ad with using the <b>campaign_id</b> path parameter.<br /><br /><span class=\"tablenote\"><b>Note:</b> This method only applies to the Cost Per Sale (CPS) funding model; it does not apply to the Cost Per Click (CPC) funding model. See <a href=\"/api-docs/sell/static/marketing/pl-overview.html#funding-model\">Funding Models</a> in the <i>Promoted Listings Playbook</i> for more information.</span><br /><br />Use <a href=\"/api-docs/sell/marketing/resources/campaign/methods/createCampaign\">createCampaign</a> to create a new campaign and use <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\">getCampaigns</a> to get a list of existing campaigns.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Marketing\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Marketing\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Marketing\V1\Api\AdApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | A unique eBay-assigned ID for an ad campaign that is generated when a campaign is created.<br /><br /><span class=\"tablenote\"><b>Note:</b> You can retrieve the campaign IDs for a specified seller using the <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\">getCampaigns</a> method.</span>
$create_ads_by_inventory_reference_request = new \TNT\Ebay\Sell\Marketing\V1\Model\CreateAdsByInventoryReferenceRequest(); // \TNT\Ebay\Sell\Marketing\V1\Model\CreateAdsByInventoryReferenceRequest | This request object defines the fields used in the <b>createAdsByInventoryReference</b> request.

try {
    $result = $apiInstance->createAdsByInventoryReference($campaign_id, $create_ads_by_inventory_reference_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdApi->createAdsByInventoryReference: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **string**| A unique eBay-assigned ID for an ad campaign that is generated when a campaign is created.&lt;br /&gt;&lt;br /&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; You can retrieve the campaign IDs for a specified seller using the &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\&quot;&gt;getCampaigns&lt;/a&gt; method.&lt;/span&gt; |
 **create_ads_by_inventory_reference_request** | [**\TNT\Ebay\Sell\Marketing\V1\Model\CreateAdsByInventoryReferenceRequest**](../Model/CreateAdsByInventoryReferenceRequest.md)| This request object defines the fields used in the &lt;b&gt;createAdsByInventoryReference&lt;/b&gt; request. |

### Return type

[**\TNT\Ebay\Sell\Marketing\V1\Model\AdReferences**](../Model/AdReferences.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAd()`

```php
deleteAd($ad_id, $campaign_id)
```



This method removes the specified ad from the specified campaign.<br /><br />Pass the ID of the ad to delete with the ID of the campaign associated with the ad as path parameters to the call.<br /><br />Call <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\">getCampaigns</a> to get the current list of the seller's campaign IDs.<br /><br /><span class=\"tablenote\"><b>Note:</b> This method only applies to the Cost Per Sale (CPS) funding model; it does not apply to the Cost Per Click (CPC) funding model. See <a href=\"/api-docs/sell/static/marketing/pl-overview.html#funding-model\">Funding Models</a> in the <i>Promoted Listings Playbook</i> for more information.</span><br /><br />When using the CPC funding model, use the <b>bulkUpdateAdsStatusByListingId</b> method to change the status of ads to ARCHIVED.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Marketing\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Marketing\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Marketing\V1\Api\AdApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ad_id = 'ad_id_example'; // string | Identifier of an ad. This ID was generated when the ad was created.
$campaign_id = 'campaign_id_example'; // string | A unique eBay-assigned ID for an ad campaign that is generated when a campaign is created.<br /><br /><span class=\"tablenote\"><b>Note:</b> You can retrieve the campaign IDs for a specified seller using the <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\">getCampaigns</a> method.</span>

try {
    $apiInstance->deleteAd($ad_id, $campaign_id);
} catch (Exception $e) {
    echo 'Exception when calling AdApi->deleteAd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ad_id** | **string**| Identifier of an ad. This ID was generated when the ad was created. |
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

## `deleteAdsByInventoryReference()`

```php
deleteAdsByInventoryReference($campaign_id, $delete_ads_by_inventory_reference_request): \TNT\Ebay\Sell\Marketing\V1\Model\AdIds
```



This method works with listings that are managed with the <a href=\"/api-docs/sell/inventory/resources/methods\" title=\"Inventory API Reference\">Inventory API</a>.  <p>The method deletes ads using a list of seller-defined inventory reference IDs, used with the Inventory API, that are associated with the specified campaign ID.</p> <p>Specify the campaign ID (as a path parameter) and a list of <b>inventoryReferenceId</b> and <b>inventoryReferenceType</b> pairs to be deleted.</p>  <p>Call <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\">getCampaigns</a> to get a list of the seller's current campaign IDs.</p><span class=\"tablenote\"><b>Note:</b> This method only applies to the Cost Per Sale (CPS) funding model; it does not apply to the Cost Per Click (CPC) funding model. See <a href=\"/api-docs/sell/static/marketing/pl-overview.html#funding-model\">Funding Models</a> in the <i>Promoted Listings Playbook</i> for more information.</span><br /><br />When using the CPC funding model, use the bulkUpdateAdsStatusByInventoryReference method to change the status of ads to ARCHIVED.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Marketing\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Marketing\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Marketing\V1\Api\AdApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | A unique eBay-assigned ID for an ad campaign that is generated when a campaign is created.<br /><br /><span class=\"tablenote\"><b>Note:</b> You can retrieve the campaign IDs for a specified seller using the <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\">getCampaigns</a> method.</span>
$delete_ads_by_inventory_reference_request = new \TNT\Ebay\Sell\Marketing\V1\Model\DeleteAdsByInventoryReferenceRequest(); // \TNT\Ebay\Sell\Marketing\V1\Model\DeleteAdsByInventoryReferenceRequest | This request object defines the fields for the <b>deleteAdsByInventoryReference</b> request.

try {
    $result = $apiInstance->deleteAdsByInventoryReference($campaign_id, $delete_ads_by_inventory_reference_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdApi->deleteAdsByInventoryReference: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **string**| A unique eBay-assigned ID for an ad campaign that is generated when a campaign is created.&lt;br /&gt;&lt;br /&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; You can retrieve the campaign IDs for a specified seller using the &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\&quot;&gt;getCampaigns&lt;/a&gt; method.&lt;/span&gt; |
 **delete_ads_by_inventory_reference_request** | [**\TNT\Ebay\Sell\Marketing\V1\Model\DeleteAdsByInventoryReferenceRequest**](../Model/DeleteAdsByInventoryReferenceRequest.md)| This request object defines the fields for the &lt;b&gt;deleteAdsByInventoryReference&lt;/b&gt; request. |

### Return type

[**\TNT\Ebay\Sell\Marketing\V1\Model\AdIds**](../Model/AdIds.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAd()`

```php
getAd($ad_id, $campaign_id): \TNT\Ebay\Sell\Marketing\V1\Model\Ad
```



This method retrieves the specified ad from the specified campaign.  <p>In the request, supply the <b>campaign_id</b> and <b>ad_id</b> as path parameters.</p> <p>Call <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\">getCampaigns</a> to retrieve a list of the seller's current campaign IDs and call <a href=\"/api-docs/sell/marketing/resources/ad/methods/getAds\">getAds</a> to retrieve their current ad IDs.</p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Marketing\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Marketing\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Marketing\V1\Api\AdApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ad_id = 'ad_id_example'; // string | A unique identifier for an ad. This ID is generated when the ad is created.
$campaign_id = 'campaign_id_example'; // string | A unique eBay-assigned ID for an ad campaign that is generated when a campaign is created.<br /><br /><span class=\"tablenote\"><b>Note:</b> You can retrieve the campaign IDs for a specified seller using the <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\">getCampaigns</a> method.</span>

try {
    $result = $apiInstance->getAd($ad_id, $campaign_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdApi->getAd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ad_id** | **string**| A unique identifier for an ad. This ID is generated when the ad is created. |
 **campaign_id** | **string**| A unique eBay-assigned ID for an ad campaign that is generated when a campaign is created.&lt;br /&gt;&lt;br /&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; You can retrieve the campaign IDs for a specified seller using the &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\&quot;&gt;getCampaigns&lt;/a&gt; method.&lt;/span&gt; |

### Return type

[**\TNT\Ebay\Sell\Marketing\V1\Model\Ad**](../Model/Ad.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAds()`

```php
getAds($campaign_id, $ad_group_ids, $ad_status, $limit, $listing_ids, $offset): \TNT\Ebay\Sell\Marketing\V1\Model\AdPagedCollectionResponse
```



This method retrieves Promoted Listings ads that are associated with listings created with either the <a href=\"/Devzone/XML/docs/Reference/eBay/index.html\" title=\"Trading API Reference\">Trading API</a> or the <a href=\"/api-docs/sell/inventory/resources/methods\" title=\"Inventory API Reference\">Inventory API</a>. <p>The method retrieves ads related to the specified campaign. Specify the Promoted Listings campaign to target with the <b>campaign_id</b> path parameter.</p>  <p>Because of the large number of possible results, you can use query parameters to paginate the result set by specifying a <b>limit</b>, which dictates how many ads to return on each page of the response. You can also specify how many ads to skip in the result set before returning the first result using the <b>offset</b> path parameter.</p>  <p>Call <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\">getCampaigns</a> to retrieve the current campaign IDs for the seller.</p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Marketing\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Marketing\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Marketing\V1\Api\AdApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | A unique eBay-assigned ID for an ad campaign that is generated when a campaign is created.<br /><br /><span class=\"tablenote\"><b>Note:</b> You can retrieve the campaign IDs for a specified seller using the <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\">getCampaigns</a> method.</span>
$ad_group_ids = 'ad_group_ids_example'; // string | A comma-separated list of ad group IDs. The results will be filtered to only include active ads for these ad groups. Call <a href=\"/api-docs/sell/marketing/resources/adgroup/methods/getAdGroups\">getAdGroups</a> to retrieve the ad group ID for the ad group.<br /><br /><span class=\"tablenote\"><b>Note:</b> This field only applies to the Cost Per Click (CPC) funding model; it does not apply to the Cost Per Sale (CPS) funding model.</span>
$ad_status = 'ad_status_example'; // string | A comma-separated list of ad statuses. The results will be filtered to only include the given statuses of the ad. If none are provided, all ads are returned.
$limit = 'limit_example'; // string | Specifies the maximum number of ads to return on a page in the paginated response. <p><b>Default: </b>10 <br><b>Maximum:</b> 500</p>
$listing_ids = 'listing_ids_example'; // string | A comma-separated list of listing IDs. The response includes only active ads (ads associated with a RUNNING campaign). The results do not include listing IDs that are excluded by other conditions.
$offset = 'offset_example'; // string | Specifies the number of ads to skip in the result set before returning the first ad in the paginated response.  <p>Combine <b>offset</b> with the <b>limit</b> query parameter to control the items returned in the response. For example, if you supply an <b>offset</b> of <code>0</code> and a <b>limit</b> of <code>10</code>, the first page of the response contains the first 10 items from the complete list of items retrieved by the call. If <b>offset</b> is <code>10</code> and <b>limit</b> is <code>20</code>, the first page of the response contains items 11-30 from the complete result set.</p> <p><b>Default:</b> 0</p>

try {
    $result = $apiInstance->getAds($campaign_id, $ad_group_ids, $ad_status, $limit, $listing_ids, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdApi->getAds: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **string**| A unique eBay-assigned ID for an ad campaign that is generated when a campaign is created.&lt;br /&gt;&lt;br /&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; You can retrieve the campaign IDs for a specified seller using the &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\&quot;&gt;getCampaigns&lt;/a&gt; method.&lt;/span&gt; |
 **ad_group_ids** | **string**| A comma-separated list of ad group IDs. The results will be filtered to only include active ads for these ad groups. Call &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/resources/adgroup/methods/getAdGroups\&quot;&gt;getAdGroups&lt;/a&gt; to retrieve the ad group ID for the ad group.&lt;br /&gt;&lt;br /&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; This field only applies to the Cost Per Click (CPC) funding model; it does not apply to the Cost Per Sale (CPS) funding model.&lt;/span&gt; | [optional]
 **ad_status** | **string**| A comma-separated list of ad statuses. The results will be filtered to only include the given statuses of the ad. If none are provided, all ads are returned. | [optional]
 **limit** | **string**| Specifies the maximum number of ads to return on a page in the paginated response. &lt;p&gt;&lt;b&gt;Default: &lt;/b&gt;10 &lt;br&gt;&lt;b&gt;Maximum:&lt;/b&gt; 500&lt;/p&gt; | [optional]
 **listing_ids** | **string**| A comma-separated list of listing IDs. The response includes only active ads (ads associated with a RUNNING campaign). The results do not include listing IDs that are excluded by other conditions. | [optional]
 **offset** | **string**| Specifies the number of ads to skip in the result set before returning the first ad in the paginated response.  &lt;p&gt;Combine &lt;b&gt;offset&lt;/b&gt; with the &lt;b&gt;limit&lt;/b&gt; query parameter to control the items returned in the response. For example, if you supply an &lt;b&gt;offset&lt;/b&gt; of &lt;code&gt;0&lt;/code&gt; and a &lt;b&gt;limit&lt;/b&gt; of &lt;code&gt;10&lt;/code&gt;, the first page of the response contains the first 10 items from the complete list of items retrieved by the call. If &lt;b&gt;offset&lt;/b&gt; is &lt;code&gt;10&lt;/code&gt; and &lt;b&gt;limit&lt;/b&gt; is &lt;code&gt;20&lt;/code&gt;, the first page of the response contains items 11-30 from the complete result set.&lt;/p&gt; &lt;p&gt;&lt;b&gt;Default:&lt;/b&gt; 0&lt;/p&gt; | [optional]

### Return type

[**\TNT\Ebay\Sell\Marketing\V1\Model\AdPagedCollectionResponse**](../Model/AdPagedCollectionResponse.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAdsByInventoryReference()`

```php
getAdsByInventoryReference($campaign_id, $inventory_reference_id, $inventory_reference_type): \TNT\Ebay\Sell\Marketing\V1\Model\Ads
```



This method retrieves Promoted Listings ads associated with listings that are managed with the <a href=\"/api-docs/sell/inventory/resources/methods\" title=\"Inventory API Reference\">Inventory API</a> from the specified campaign.<br /><br />Supply the <b>campaign_id</b> as a path parameter and use query parameters to specify the <b>inventory_reference_id</b> and <b>inventory_reference_type</b> pairs.<br /><br />In the Inventory API, an <i>inventory reference ID</i> is either a seller-defined <b>SKU</b> value or an <b>inventoryItemGroupKey</b> (a seller-defined ID for an inventory item group, which is an entity that's used in the Inventory API to create a multiple-variation listing). To indicate a listing managed by the Inventory API, you must always specify both an <b>inventory_reference_id</b> and the associated <b>inventory_reference_type</b>.<br /><br />Call <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\">getCampaigns</a> to retrieve all of the seller's the current campaign IDs.<br /><br /><span class=\"tablenote\"><b>Note:</b> This method only applies to the Cost Per Sale (CPS) funding model; it does not apply to the Cost Per Click (CPC) funding model. See <a href=\"/api-docs/sell/static/marketing/pl-overview.html#funding-model\">Funding Models</a> in the <i>Promoted Listings Playbook</i> for more information.</span>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Marketing\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Marketing\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Marketing\V1\Api\AdApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | A unique eBay-assigned ID for an ad campaign that is generated when a campaign is created.<br /><br /><span class=\"tablenote\"><b>Note:</b> You can retrieve the campaign IDs for a specified seller using the <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\">getCampaigns</a> method.</span>
$inventory_reference_id = 'inventory_reference_id_example'; // string | The inventory reference ID associated with the ad you want returned. A seller's inventory reference ID is the ID of either a listing or the ID of an inventory item group (the parent of a multi-variation listing, such as a shirt that is available in multiple sizes and colors). You must always supply in both an <b>inventory_reference_id</b> and an <b>inventory_reference_type</b>.
$inventory_reference_type = 'inventory_reference_type_example'; // string | The type of the inventory reference ID. Set this value to either <code>INVENTORY_ITEM</CODE> (a single listing) or <code>INVENTORY_ITEM_GROUP</CODE> (a multi-variation listing). You must always pass in both an <b>inventory_reference_id</b> and an <b>inventory_reference_type</b>.

try {
    $result = $apiInstance->getAdsByInventoryReference($campaign_id, $inventory_reference_id, $inventory_reference_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdApi->getAdsByInventoryReference: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **string**| A unique eBay-assigned ID for an ad campaign that is generated when a campaign is created.&lt;br /&gt;&lt;br /&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; You can retrieve the campaign IDs for a specified seller using the &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\&quot;&gt;getCampaigns&lt;/a&gt; method.&lt;/span&gt; |
 **inventory_reference_id** | **string**| The inventory reference ID associated with the ad you want returned. A seller&#39;s inventory reference ID is the ID of either a listing or the ID of an inventory item group (the parent of a multi-variation listing, such as a shirt that is available in multiple sizes and colors). You must always supply in both an &lt;b&gt;inventory_reference_id&lt;/b&gt; and an &lt;b&gt;inventory_reference_type&lt;/b&gt;. |
 **inventory_reference_type** | **string**| The type of the inventory reference ID. Set this value to either &lt;code&gt;INVENTORY_ITEM&lt;/CODE&gt; (a single listing) or &lt;code&gt;INVENTORY_ITEM_GROUP&lt;/CODE&gt; (a multi-variation listing). You must always pass in both an &lt;b&gt;inventory_reference_id&lt;/b&gt; and an &lt;b&gt;inventory_reference_type&lt;/b&gt;. |

### Return type

[**\TNT\Ebay\Sell\Marketing\V1\Model\Ads**](../Model/Ads.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateBid()`

```php
updateBid($ad_id, $campaign_id, $update_bid_percentage_request)
```



This method updates the bid percentage (also known as the \"ad rate\") for the specified ad in the specified campaign. <p>In the request, supply the <b>campaign_id</b> and <b>ad_id</b> as path parameters, and supply the new <b>bidPercentage</b> value in the payload of the call.</p>  <p>Call <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\">getCampaigns</a> to retrieve a seller's current campaign IDs and call <a href=\"/api-docs/sell/marketing/resources/ad/methods/getAds\">getAds</a> to get their ad IDs.</p><span class=\"tablenote\"><b>Note:</b> This method only applies to the Cost Per Sale (CPS) funding model; it does not apply to the Cost Per Click (CPC) funding model. See <a href=\"/api-docs/sell/static/marketing/pl-overview.html#funding-model\">Funding Models</a> in the <i>Promoted Listings Playbook</i> for more information.</span>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Marketing\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Marketing\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Marketing\V1\Api\AdApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ad_id = 'ad_id_example'; // string | A unique eBay-assigned ID for an ad that's generated when an ad is created.
$campaign_id = 'campaign_id_example'; // string | A unique eBay-assigned ID for an ad campaign that is generated when a campaign is created.<br /><br /><span class=\"tablenote\"><b>Note:</b> You can retrieve the campaign IDs for a specified seller using the <a href=\"/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\">getCampaigns</a> method.</span>
$update_bid_percentage_request = new \TNT\Ebay\Sell\Marketing\V1\Model\UpdateBidPercentageRequest(); // \TNT\Ebay\Sell\Marketing\V1\Model\UpdateBidPercentageRequest | This type defines the fields for the <b>updateBid</b> request.

try {
    $apiInstance->updateBid($ad_id, $campaign_id, $update_bid_percentage_request);
} catch (Exception $e) {
    echo 'Exception when calling AdApi->updateBid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ad_id** | **string**| A unique eBay-assigned ID for an ad that&#39;s generated when an ad is created. |
 **campaign_id** | **string**| A unique eBay-assigned ID for an ad campaign that is generated when a campaign is created.&lt;br /&gt;&lt;br /&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; You can retrieve the campaign IDs for a specified seller using the &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/resources/campaign/methods/getCampaigns\&quot;&gt;getCampaigns&lt;/a&gt; method.&lt;/span&gt; |
 **update_bid_percentage_request** | [**\TNT\Ebay\Sell\Marketing\V1\Model\UpdateBidPercentageRequest**](../Model/UpdateBidPercentageRequest.md)| This type defines the fields for the &lt;b&gt;updateBid&lt;/b&gt; request. |

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
