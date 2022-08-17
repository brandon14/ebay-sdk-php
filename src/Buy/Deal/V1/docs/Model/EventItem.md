# # EventItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**additional_images** | [**\TNT\Ebay\Buy\Deal\V1\Model\Image[]**](Image.md) | The additional images for the event item. | [optional]
**category_ancestor_ids** | **string[]** | The IDs of the ancestors for the primary category. | [optional]
**category_id** | **string** | The ID of the leaf category for the event item. A leaf category is the lowest level in a category and has no children. | [optional]
**energy_efficiency_class** | **string** | A string value specifying the Energy Efficiency class. | [optional]
**event_id** | **string** | The unique event identifier associated with the item. | [optional]
**image** | [**\TNT\Ebay\Buy\Deal\V1\Model\Image**](Image.md) |  | [optional]
**item_affiliate_web_url** | **string** | The item web URL with affiliate attribution. | [optional]
**item_group_id** | **string** | The unique identifier for the event item group. This is the parent item ID for the seller-defined variations. Note: This field is returned for multiple-SKU items. | [optional]
**item_group_type** | **string** | An enumeration value that indicates the type of item group. An item group contains items that have various aspect differences, such as color, size, or storage capacity. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/buy/deal/types/api:ItemGroupTypeEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**item_id** | **string** | The unique identifier for the event item. Note: This field is only returned for single-SKU items. | [optional]
**item_web_url** | **string** | The web URL for the event item. | [optional]
**legacy_item_id** | **string** | The legacy item ID associated with the event item. | [optional]
**marketing_price** | [**\TNT\Ebay\Buy\Deal\V1\Model\MarketingPrice**](MarketingPrice.md) |  | [optional]
**price** | [**\TNT\Ebay\Buy\Deal\V1\Model\Amount**](Amount.md) |  | [optional]
**qualified_programs** | **string[]** | A list of programs applicable to the event item. | [optional]
**shipping_options** | [**\TNT\Ebay\Buy\Deal\V1\Model\ShippingOption[]**](ShippingOption.md) | The cost required to ship the event item. | [optional]
**title** | **string** | The title of the event item. | [optional]
**unit_price** | [**\TNT\Ebay\Buy\Deal\V1\Model\Amount**](Amount.md) |  | [optional]
**unit_pricing_measure** | **string** | The designation used to specify the quantity of the event item, such as size, weight, volume, and count. This helps buyers compare prices. For example, the following tells the buyer that the item is 7.99 per 100 grams. &amp;quot;unitPricingMeasure&amp;quot;: &amp;quot;100g&amp;quot;, &amp;quot;unitPrice&amp;quot;: { &amp;nbsp;&amp;nbsp;&amp;quot;value&amp;quot;: &amp;quot;7.99&amp;quot;, &amp;nbsp;&amp;nbsp;&amp;quot;currency&amp;quot;: &amp;quot;GBP&amp;quot; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
