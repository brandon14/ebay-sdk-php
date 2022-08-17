# # InventoryFilterCriteria

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**creation_date_range** | [**\TNT\Ebay\Sell\Feed\V1\Model\DateRange**](DateRange.md) |  | [optional]
**modified_date_range** | [**\TNT\Ebay\Sell\Feed\V1\Model\DateRange**](DateRange.md) |  | [optional]
**listing_format** | **string** | The type of buying option for the order. Supports &lt;code&gt;LMS_ACTIVE_INVENTORY_REPORT&lt;/code&gt;. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/sell/feed/types/api:ListingFormatEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**listing_status** | **string** | The status of the listing (whether the listing was unsold or is active). The &lt;strong&gt;UNSOLD&lt;/strong&gt; value does not apply to &lt;code&gt;LMS_ACTIVE_INVENTORY_REPORT&lt;/code&gt; feed types. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/sell/feed/types/api:ListingStatusEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
