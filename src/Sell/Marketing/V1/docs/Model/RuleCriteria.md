# # RuleCriteria

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**exclude_inventory_items** | [**\TNT\Ebay\Sell\Marketing\V1\Model\InventoryItem[]**](InventoryItem.md) | A list of seller inventory reference IDs to exclude from the promotion.  &lt;br&gt;&lt;br&gt;&lt;p class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; The request can have either &lt;b&gt;excludeInventoryItems&lt;/b&gt; or &lt;b&gt;excludeListingIds&lt;/b&gt; but not both.&lt;/p&gt; &lt;b&gt;Maximum:&lt;/b&gt; 100 parent items &lt;br&gt;&lt;b&gt;Maximum SKU or custom label length:&lt;/b&gt; 50 characters | [optional]
**exclude_listing_ids** | **string[]** | A list of eBay listing IDs to exclude from the promotion.  &lt;br&gt;&lt;br&gt;&lt;p class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; The request can have either &lt;b&gt;excludeInventoryItems&lt;/b&gt; or &lt;b&gt;excludeListingIds&lt;/b&gt; but not both.&lt;/p&gt; &lt;b&gt;Maximum:&lt;/b&gt; 100 parent items &lt;br&gt;&lt;b&gt;Maximum SKU or custom label length:&lt;/b&gt; 50 characters | [optional]
**markup_inventory_items** | [**\TNT\Ebay\Sell\Marketing\V1\Model\InventoryItem[]**](InventoryItem.md) | A list of SKUs to remove from a markdown promotion. The listed SKUs are &#39;marked up&#39; to their standard price after being part of the markdown promotion. | [optional]
**markup_listing_ids** | **string[]** | A list of listing IDs to remove from a markdown promotion. The listed items are &#39;marked up&#39; to their standard price after being part of the markdown promotion. | [optional]
**selection_rules** | [**\TNT\Ebay\Sell\Marketing\V1\Model\SelectionRule[]**](SelectionRule.md) | The container for the rules that select the items to include in a promotion.  &lt;br&gt;&lt;br&gt;&lt;i&gt;Required if &lt;/i&gt; &lt;b&gt;inventoryCriterionType&lt;/b&gt; is set to &lt;code&gt;INVENTORY_BY_RULE&lt;/code&gt;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
