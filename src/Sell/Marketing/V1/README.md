# trollandtoad/ebay-sell-marketing-v1

<p>The <i>Marketing API </i> offers two platforms that sellers can use to promote and advertise their products:</p> <ul><li><b>Promoted Listings</b> is an eBay ad service that lets sellers set up <i>ad campaigns </i> for the products they want to promote. eBay displays the ads in search results and in other marketing modules as <b>SPONSORED</b> listings. If an item in a Promoted Listings campaign sells, the seller is assessed a Promoted Listings fee, which is a seller-specified percentage applied to the sales price. For complete details, see <a href=\"/api-docs/sell/static/marketing/promoted-listings.html\">Promoted Listings</a>.</li>  <li><b>Promotions Manager</b> gives sellers a way to offer discounts on specific items as a way to attract buyers to their inventory. Sellers can set up discounts (such as \"20% off\" and other types of offers) on specific items or on an entire customer order. To further attract buyers, eBay prominently displays promotion <i>teasers</i> throughout buyer flows. For complete details, see <a href=\"/api-docs/sell/static/marketing/promotions-manager.html\">Promotions Manager</a>.</li></ul>  <p><b>Marketing reports</b>, on both the Promoted Listings and Promotions Manager platforms, give sellers information that shows the effectiveness of their marketing strategies. The data gives sellers the ability to review and fine tune their marketing efforts.</p> <p class=\"tablenote\"><b>Important!</b> Sellers must have an active eBay Store subscription, and they must accept the <b>Terms and Conditions</b> before they can make requests to these APIs in the Production environment. There are also site-specific listings requirements and restrictions associated with these marketing tools, as listed in the \"requirements and restrictions\" sections for <a href=\"/api-docs/sell/marketing/static/overview.html#PL-requirements\">Promoted Listings</a> and <a href=\"/api-docs/sell/marketing/static/overview.html#PM-requirements\">Promotions Manager</a>.</p> <p>The table below lists all the Marketing API calls grouped by resource.</p>


## Installation & Usage

### Requirements

PHP 7.3 and later.
Should also work with PHP 8.0 but has not been tested.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/trollandtoad/ebay-sell-marketing-v1.git"
    }
  ],
  "require": {
    "trollandtoad/ebay-sell-marketing-v1": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/trollandtoad/ebay-sell-marketing-v1/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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
$bulk_create_ads_by_inventory_reference_request = new \TNT\Ebay\Sell\Marketing\V1\Model\BulkCreateAdsByInventoryReferenceRequest(); // \TNT\Ebay\Sell\Marketing\V1\Model\BulkCreateAdsByInventoryReferenceRequest | The container for the bulk request to create ads for eBay inventory reference IDs. eBay inventory reference IDs are seller-defined IDs used by theInventory API.

try {
    $result = $apiInstance->bulkCreateAdsByInventoryReference($campaign_id, $bulk_create_ads_by_inventory_reference_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdApi->bulkCreateAdsByInventoryReference: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.ebay.com/sell/marketing/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AdApi* | [**bulkCreateAdsByInventoryReference**](docs/Api/AdApi.md#bulkcreateadsbyinventoryreference) | **POST** /ad_campaign/{campaign_id}/bulk_create_ads_by_inventory_reference | 
*AdApi* | [**bulkCreateAdsByListingId**](docs/Api/AdApi.md#bulkcreateadsbylistingid) | **POST** /ad_campaign/{campaign_id}/bulk_create_ads_by_listing_id | 
*AdApi* | [**bulkDeleteAdsByInventoryReference**](docs/Api/AdApi.md#bulkdeleteadsbyinventoryreference) | **POST** /ad_campaign/{campaign_id}/bulk_delete_ads_by_inventory_reference | 
*AdApi* | [**bulkDeleteAdsByListingId**](docs/Api/AdApi.md#bulkdeleteadsbylistingid) | **POST** /ad_campaign/{campaign_id}/bulk_delete_ads_by_listing_id | 
*AdApi* | [**bulkUpdateAdsBidByInventoryReference**](docs/Api/AdApi.md#bulkupdateadsbidbyinventoryreference) | **POST** /ad_campaign/{campaign_id}/bulk_update_ads_bid_by_inventory_reference | 
*AdApi* | [**bulkUpdateAdsBidByListingId**](docs/Api/AdApi.md#bulkupdateadsbidbylistingid) | **POST** /ad_campaign/{campaign_id}/bulk_update_ads_bid_by_listing_id | 
*AdApi* | [**createAdByListingId**](docs/Api/AdApi.md#createadbylistingid) | **POST** /ad_campaign/{campaign_id}/ad | 
*AdApi* | [**createAdsByInventoryReference**](docs/Api/AdApi.md#createadsbyinventoryreference) | **POST** /ad_campaign/{campaign_id}/create_ads_by_inventory_reference | 
*AdApi* | [**deleteAd**](docs/Api/AdApi.md#deletead) | **DELETE** /ad_campaign/{campaign_id}/ad/{ad_id} | 
*AdApi* | [**deleteAdsByInventoryReference**](docs/Api/AdApi.md#deleteadsbyinventoryreference) | **POST** /ad_campaign/{campaign_id}/delete_ads_by_inventory_reference | 
*AdApi* | [**getAd**](docs/Api/AdApi.md#getad) | **GET** /ad_campaign/{campaign_id}/ad/{ad_id} | 
*AdApi* | [**getAds**](docs/Api/AdApi.md#getads) | **GET** /ad_campaign/{campaign_id}/ad | 
*AdApi* | [**getAdsByInventoryReference**](docs/Api/AdApi.md#getadsbyinventoryreference) | **GET** /ad_campaign/{campaign_id}/get_ads_by_inventory_reference | 
*AdApi* | [**updateBid**](docs/Api/AdApi.md#updatebid) | **POST** /ad_campaign/{campaign_id}/ad/{ad_id}/update_bid | 
*AdReportApi* | [**getReport**](docs/Api/AdReportApi.md#getreport) | **GET** /ad_report/{report_id} | 
*AdReportMetadataApi* | [**getReportMetadata**](docs/Api/AdReportMetadataApi.md#getreportmetadata) | **GET** /ad_report_metadata | 
*AdReportMetadataApi* | [**getReportMetadataForReportType**](docs/Api/AdReportMetadataApi.md#getreportmetadataforreporttype) | **GET** /ad_report_metadata/{report_type} | 
*AdReportTaskApi* | [**createReportTask**](docs/Api/AdReportTaskApi.md#createreporttask) | **POST** /ad_report_task | 
*AdReportTaskApi* | [**deleteReportTask**](docs/Api/AdReportTaskApi.md#deletereporttask) | **DELETE** /ad_report_task/{report_task_id} | 
*AdReportTaskApi* | [**getReportTask**](docs/Api/AdReportTaskApi.md#getreporttask) | **GET** /ad_report_task/{report_task_id} | 
*AdReportTaskApi* | [**getReportTasks**](docs/Api/AdReportTaskApi.md#getreporttasks) | **GET** /ad_report_task | 
*CampaignApi* | [**cloneCampaign**](docs/Api/CampaignApi.md#clonecampaign) | **POST** /ad_campaign/{campaign_id}/clone | 
*CampaignApi* | [**createCampaign**](docs/Api/CampaignApi.md#createcampaign) | **POST** /ad_campaign | 
*CampaignApi* | [**deleteCampaign**](docs/Api/CampaignApi.md#deletecampaign) | **DELETE** /ad_campaign/{campaign_id} | 
*CampaignApi* | [**endCampaign**](docs/Api/CampaignApi.md#endcampaign) | **POST** /ad_campaign/{campaign_id}/end | 
*CampaignApi* | [**findCampaignByAdReference**](docs/Api/CampaignApi.md#findcampaignbyadreference) | **GET** /ad_campaign/find_campaign_by_ad_reference | 
*CampaignApi* | [**getCampaign**](docs/Api/CampaignApi.md#getcampaign) | **GET** /ad_campaign/{campaign_id} | 
*CampaignApi* | [**getCampaignByName**](docs/Api/CampaignApi.md#getcampaignbyname) | **GET** /ad_campaign/get_campaign_by_name | 
*CampaignApi* | [**getCampaigns**](docs/Api/CampaignApi.md#getcampaigns) | **GET** /ad_campaign | 
*CampaignApi* | [**pauseCampaign**](docs/Api/CampaignApi.md#pausecampaign) | **POST** /ad_campaign/{campaign_id}/pause | 
*CampaignApi* | [**resumeCampaign**](docs/Api/CampaignApi.md#resumecampaign) | **POST** /ad_campaign/{campaign_id}/resume | 
*CampaignApi* | [**updateCampaignIdentification**](docs/Api/CampaignApi.md#updatecampaignidentification) | **POST** /ad_campaign/{campaign_id}/update_campaign_identification | 
*ItemPriceMarkdownApi* | [**createItemPriceMarkdownPromotion**](docs/Api/ItemPriceMarkdownApi.md#createitempricemarkdownpromotion) | **POST** /item_price_markdown | 
*ItemPriceMarkdownApi* | [**deleteItemPriceMarkdownPromotion**](docs/Api/ItemPriceMarkdownApi.md#deleteitempricemarkdownpromotion) | **DELETE** /item_price_markdown/{promotion_id} | 
*ItemPriceMarkdownApi* | [**getItemPriceMarkdownPromotion**](docs/Api/ItemPriceMarkdownApi.md#getitempricemarkdownpromotion) | **GET** /item_price_markdown/{promotion_id} | 
*ItemPriceMarkdownApi* | [**updateItemPriceMarkdownPromotion**](docs/Api/ItemPriceMarkdownApi.md#updateitempricemarkdownpromotion) | **PUT** /item_price_markdown/{promotion_id} | 
*ItemPromotionApi* | [**createItemPromotion**](docs/Api/ItemPromotionApi.md#createitempromotion) | **POST** /item_promotion | 
*ItemPromotionApi* | [**deleteItemPromotion**](docs/Api/ItemPromotionApi.md#deleteitempromotion) | **DELETE** /item_promotion/{promotion_id} | 
*ItemPromotionApi* | [**getItemPromotion**](docs/Api/ItemPromotionApi.md#getitempromotion) | **GET** /item_promotion/{promotion_id} | 
*ItemPromotionApi* | [**updateItemPromotion**](docs/Api/ItemPromotionApi.md#updateitempromotion) | **PUT** /item_promotion/{promotion_id} | 
*PromotionApi* | [**getListingSet**](docs/Api/PromotionApi.md#getlistingset) | **GET** /promotion/{promotion_id}/get_listing_set | 
*PromotionApi* | [**getPromotions**](docs/Api/PromotionApi.md#getpromotions) | **GET** /promotion | 
*PromotionApi* | [**pausePromotion**](docs/Api/PromotionApi.md#pausepromotion) | **POST** /promotion/{promotion_id}/pause | 
*PromotionApi* | [**resumePromotion**](docs/Api/PromotionApi.md#resumepromotion) | **POST** /promotion/{promotion_id}/resume | 
*PromotionReportApi* | [**getPromotionReports**](docs/Api/PromotionReportApi.md#getpromotionreports) | **GET** /promotion_report | 
*PromotionSummaryReportApi* | [**getPromotionSummaryReport**](docs/Api/PromotionSummaryReportApi.md#getpromotionsummaryreport) | **GET** /promotion_summary_report | 

## Models

- [Ad](docs/Model/Ad.md)
- [AdIds](docs/Model/AdIds.md)
- [AdPagedCollection](docs/Model/AdPagedCollection.md)
- [AdReference](docs/Model/AdReference.md)
- [AdReferences](docs/Model/AdReferences.md)
- [AdResponse](docs/Model/AdResponse.md)
- [Ads](docs/Model/Ads.md)
- [Amount](docs/Model/Amount.md)
- [BaseResponse](docs/Model/BaseResponse.md)
- [BulkAdResponse](docs/Model/BulkAdResponse.md)
- [BulkCreateAdRequest](docs/Model/BulkCreateAdRequest.md)
- [BulkCreateAdsByInventoryReferenceRequest](docs/Model/BulkCreateAdsByInventoryReferenceRequest.md)
- [BulkCreateAdsByInventoryReferenceResponse](docs/Model/BulkCreateAdsByInventoryReferenceResponse.md)
- [BulkDeleteAdRequest](docs/Model/BulkDeleteAdRequest.md)
- [BulkDeleteAdResponse](docs/Model/BulkDeleteAdResponse.md)
- [BulkDeleteAdsByInventoryReferenceRequest](docs/Model/BulkDeleteAdsByInventoryReferenceRequest.md)
- [BulkDeleteAdsByInventoryReferenceResponse](docs/Model/BulkDeleteAdsByInventoryReferenceResponse.md)
- [Campaign](docs/Model/Campaign.md)
- [CampaignCriterion](docs/Model/CampaignCriterion.md)
- [CampaignPagedCollection](docs/Model/CampaignPagedCollection.md)
- [Campaigns](docs/Model/Campaigns.md)
- [CloneCampaignRequest](docs/Model/CloneCampaignRequest.md)
- [CouponConfiguration](docs/Model/CouponConfiguration.md)
- [CreateAdRequest](docs/Model/CreateAdRequest.md)
- [CreateAdsByInventoryReferenceRequest](docs/Model/CreateAdsByInventoryReferenceRequest.md)
- [CreateAdsByInventoryReferenceResponse](docs/Model/CreateAdsByInventoryReferenceResponse.md)
- [CreateCampaignRequest](docs/Model/CreateCampaignRequest.md)
- [CreateReportTask](docs/Model/CreateReportTask.md)
- [DeleteAdRequest](docs/Model/DeleteAdRequest.md)
- [DeleteAdResponse](docs/Model/DeleteAdResponse.md)
- [DeleteAdsByInventoryReferenceRequest](docs/Model/DeleteAdsByInventoryReferenceRequest.md)
- [DeleteAdsByInventoryReferenceResponse](docs/Model/DeleteAdsByInventoryReferenceResponse.md)
- [Dimension](docs/Model/Dimension.md)
- [DimensionKeyAnnotation](docs/Model/DimensionKeyAnnotation.md)
- [DimensionMetadata](docs/Model/DimensionMetadata.md)
- [DiscountBenefit](docs/Model/DiscountBenefit.md)
- [DiscountRule](docs/Model/DiscountRule.md)
- [DiscountSpecification](docs/Model/DiscountSpecification.md)
- [Error](docs/Model/Error.md)
- [ErrorParameter](docs/Model/ErrorParameter.md)
- [FundingStrategy](docs/Model/FundingStrategy.md)
- [InventoryCriterion](docs/Model/InventoryCriterion.md)
- [InventoryItem](docs/Model/InventoryItem.md)
- [InventoryReference](docs/Model/InventoryReference.md)
- [ItemPriceMarkdown](docs/Model/ItemPriceMarkdown.md)
- [ItemPromotion](docs/Model/ItemPromotion.md)
- [ItemPromotionResponse](docs/Model/ItemPromotionResponse.md)
- [MetricMetadata](docs/Model/MetricMetadata.md)
- [PromotionDetail](docs/Model/PromotionDetail.md)
- [PromotionReportDetail](docs/Model/PromotionReportDetail.md)
- [PromotionsPagedCollection](docs/Model/PromotionsPagedCollection.md)
- [PromotionsReportPagedCollection](docs/Model/PromotionsReportPagedCollection.md)
- [ReportMetadata](docs/Model/ReportMetadata.md)
- [ReportMetadatas](docs/Model/ReportMetadatas.md)
- [ReportTask](docs/Model/ReportTask.md)
- [ReportTaskPagedCollection](docs/Model/ReportTaskPagedCollection.md)
- [RuleCriteria](docs/Model/RuleCriteria.md)
- [SelectedInventoryDiscount](docs/Model/SelectedInventoryDiscount.md)
- [SelectionRule](docs/Model/SelectionRule.md)
- [SummaryReportResponse](docs/Model/SummaryReportResponse.md)
- [UpdateBidPercentageRequest](docs/Model/UpdateBidPercentageRequest.md)
- [UpdateCampaignIdentificationRequest](docs/Model/UpdateCampaignIdentificationRequest.md)

## Authorization

### api_auth

- **Type**: `OAuth`
- **Flow**: `application`
- **Authorization URL**: ``
- **Scopes**: 
    - **https://api.ebay.com/oauth/api_scope**: View public data from eBay


### api_auth

- **Type**: `OAuth`
- **Flow**: `accessCode`
- **Authorization URL**: `https://auth.ebay.com/oauth2/authorize`
- **Scopes**: 
    - **https://api.ebay.com/oauth/api_scope/sell.marketing.readonly**: View your eBay marketing activities, such as ad campaigns and listing promotions
    - **https://api.ebay.com/oauth/api_scope/sell.marketing**: View and manage your eBay marketing activities, such as ad campaigns and listing promotions

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `v1.10.1`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
