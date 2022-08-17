# # ShippingOptionSummary

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**guaranteed_delivery** | **bool** | Indicates if the seller has committed to shipping the item with eBay Guaranteed Delivery. With eBay Guaranteed Delivery, the  seller is committed to getting the line item to the buyer within 4 business days or less. See the &lt;a href&#x3D;\&quot;https://www.ebay.com/help/buying/shipping-delivery/buying-items-ebay-guaranteed-delivery?id&#x3D;4641 \&quot;&gt;Buying items with eBay Guaranteed Delivery&lt;/a&gt; help topic for more details about eBay Guaranteed Delivery. | [optional]
**max_estimated_delivery_date** | **string** | The end date of the delivery window (latest projected delivery date). This value is returned in UTC format (yyyy-MM-ddThh:mm:ss.sssZ), which you can convert into the local time of the buyer. &lt;br /&gt; &lt;br /&gt; &lt;span class&#x3D;\&quot;tablenote\&quot;&gt; &lt;b&gt; Note: &lt;/b&gt; For the best accuracy, always include the &lt;code&gt; contextualLocation&lt;/code&gt; values in the &lt;a href&#x3D;\&quot;/api-docs/buy/static/api-browse.html#Headers\&quot;&gt; &lt;code&gt;X-EBAY-C-ENDUSERCTX&lt;/code&gt;&lt;/a&gt; request header.&lt;/span&gt; | [optional]
**min_estimated_delivery_date** | **string** | The start date of the delivery window (earliest projected delivery date).  This value is returned in UTC format (yyyy-MM-ddThh:mm:ss.sssZ), which you can convert into the local time of the buyer. &lt;br /&gt; &lt;br /&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt; &lt;b&gt; Note: &lt;/b&gt; For the best accuracy, always include the &lt;code&gt; contextualLocation&lt;/code&gt; values in the &lt;a href&#x3D;\&quot;/api-docs/buy/static/api-browse.html#Headers\&quot;&gt; &lt;code&gt;X-EBAY-C-ENDUSERCTX&lt;/code&gt;&lt;/a&gt; request header.&lt;/span&gt; | [optional]
**shipping_cost** | [**\TNT\Ebay\Buy\Browse\V1\Model\ConvertedAmount**](ConvertedAmount.md) |  | [optional]
**shipping_cost_type** | **string** | Indicates the type of shipping used to ship the item. Possible values are &lt;code&gt; FIXED&lt;/code&gt; (flat-rate shipping) and &lt;code&gt; CALCULATED&lt;/code&gt; (shipping cost calculated based on item and buyer location). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
