# # Shipment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cancellation** | [**\TNT\Ebay\Sell\Logistics\V1\Model\ShipmentCancellation**](ShipmentCancellation.md) |  | [optional]
**creation_date** | **string** | The date and time the shipment was created, formatted as an &lt;a href&#x3D;\&quot;https://www.iso.org/iso-8601-date-and-time-format.html\&quot; title&#x3D;\&quot;https://www.iso.org\&quot; target&#x3D;\&quot;_blank\&quot;&gt;ISO 8601&lt;/a&gt; string, which is based on the 24-hour Coordinated Universal Time (UTC) clock.  &lt;br&gt;&lt;br&gt;&lt;b&gt;Format:&lt;/b&gt; &lt;code&gt;[YYYY]-[MM]-[DD]T[HH]:[MM]:[SS].[SSS]Z&lt;/code&gt; &lt;br&gt;&lt;b&gt;Example:&lt;/b&gt; &lt;code&gt;2018-08-20T07:09:00.000Z&lt;/code&gt; | [optional]
**label_custom_message** | **string** | If supported by the selected shipping carrier, this field can contain optional seller text to be printed on the shipping label. | [optional]
**label_download_url** | **string** | The direct URL the seller can use to download an image of the shipping label. By default, the file format is PDF. See &lt;a href&#x3D;\&quot;/api-docs/sell/logistics/resources/shipment/methods/downloadLabelFile\&quot;&gt;downloadLabelFile&lt;/a&gt; for requesting different response file formats. | [optional]
**label_size** | **string** | The seller&#39;s desired label size. The support for multi-sized labels is shipping-carrier specific and if the size requested in the &lt;b&gt;creaateFromShippingQuote&lt;/b&gt; call matches a size the carrier supports, the value will be represented here in the shipment. &lt;br&gt;&lt;br&gt;Currently, the only valid value is: &lt;code&gt;4\&quot;x6\&quot;&lt;/code&gt; | [optional]
**orders** | [**\TNT\Ebay\Sell\Logistics\V1\Model\Order[]**](Order.md) | This list value is optionally assigned by the seller. When present, each element in the returned list contains seller-assigned information about an order (such as an order number). Because a package can contain all or part of one or more orders, this field provides a way for sellers to identify the packages that contain specific orders. | [optional]
**package_specification** | [**\TNT\Ebay\Sell\Logistics\V1\Model\PackageSpecification**](PackageSpecification.md) |  | [optional]
**rate** | [**\TNT\Ebay\Sell\Logistics\V1\Model\PurchasedRate**](PurchasedRate.md) |  | [optional]
**return_to** | [**\TNT\Ebay\Sell\Logistics\V1\Model\Contact**](Contact.md) |  | [optional]
**ship_from** | [**\TNT\Ebay\Sell\Logistics\V1\Model\Contact**](Contact.md) |  | [optional]
**shipment_id** | **string** | The unique eBay-assigned ID for the shipment. The ID is generated when the shipment is created by a call to &lt;b&gt;createFromShippingQuote&lt;/b&gt;. | [optional]
**shipment_tracking_number** | **string** | A unique carrier-assigned ID string that can be used to track the shipment. | [optional]
**ship_to** | [**\TNT\Ebay\Sell\Logistics\V1\Model\Contact**](Contact.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
