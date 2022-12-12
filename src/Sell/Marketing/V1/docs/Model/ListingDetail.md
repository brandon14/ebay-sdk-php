# # ListingDetail

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**current_price** | [**\TNT\Ebay\Sell\Marketing\V1\Model\Amount**](Amount.md) |  | [optional]
**free_shipping** | **bool** | If set to &lt;code&gt;true&lt;/code&gt;, the seller pays for the shipping (or that the item is marked for local pickup only) In this case, the listing does not have an associated shipping cost for the first listed domestic-shipping option (even if the first domestic-shipping option specifies a flat-rate or calculated shipping option). If &lt;code&gt;false&lt;/code&gt;, the buyer is required to pay for a flat-rate or calculated cost shipping service. | [optional]
**inventory_reference_id** | **string** | The seller&#39;s inventory reference ID for a listing. Also known as the \&quot;SKU\&quot; or \&quot;custom label,\&quot; an inventory reference ID is either the ID of the listing or, if the listing has variations (such as a shirt that&#39;s available in multiple sizes and colors), the ID of the parent listing. | [optional]
**inventory_reference_type** | **string** | Indicates the type of the &lt;b&gt;inventoryReferenceId&lt;/b&gt;, which can be either a single-SKU or a multi-SKU listing (&lt;code&gt;INVENTORY_ITEM&lt;/code&gt; and &lt;code&gt;INVENTORY_ITEM_GROUP&lt;/code&gt;, respectively).  &lt;br&gt;&lt;br&gt;&lt;b&gt;Note:&lt;/b&gt; This value is not currently returned in the response. | [optional]
**listing_category_id** | **string** | The ID of the category that listing belongs to. The ID is a numeric and unique identifier for the category that is assigned by eBay. | [optional]
**listing_condition** | **string** | An eBay-assigned value that indicates condition of the associated item. For more information, see &lt;a href&#x3D;\&quot;/api-docs/sell/static/metadata/condition-id-values.html\&quot;&gt;Item condition ID and name values&lt;/a&gt;. | [optional]
**listing_condition_id** | **string** | The ID of the condition associated with the item. For more information, see &lt;a href&#x3D;\&quot;/api-docs/sell/static/metadata/condition-id-values.html\&quot;&gt;Item condition ID and name values&lt;/a&gt;.&lt;br /&gt;&lt;br /&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note: &lt;/b&gt; This value is not currently returned in the response.&lt;/span&gt; | [optional]
**listing_id** | **string** | A unique eBay-assigned ID that is generated when the item is listed. | [optional]
**listing_promotion_statuses** | [**\TNT\Ebay\Sell\Marketing\V1\Model\ItemMarkdownStatus[]**](ItemMarkdownStatus.md) | A list of the status values assigned to the item and the date that each new status was assigned. | [optional]
**quantity** | **int** | The number of items being sold in the listing. | [optional]
**store_category_id** | **string** | Store CategoryId (if any) that to which the listing belongs. This field is blank if there is no seller Store category ID. | [optional]
**title** | **string** | The seller-defined title of the listing that a seller can use to identify the item.  This label is not displayed in end-user flows. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
