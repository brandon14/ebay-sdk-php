# # RefundItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**refund_amount** | [**\TNT\Ebay\Sell\Fulfillment\V1\Model\SimpleAmount**](SimpleAmount.md) |  | [optional]
**line_item_id** | **string** | The unique identifier of an order line item. This identifier is created once a buyer purchases a &#39;Buy It Now&#39; item or if an auction listing ends with a winning bidder. Either this field or the &lt;b&gt;legacyReference&lt;/b&gt; container is needed to identify an individual order line item that will receive a refund.&lt;br/&gt;&lt;br/&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;strong&gt;Note:&lt;/strong&gt; The &lt;b&gt;lineItemId&lt;/b&gt; field is used to identify an order line item in REST API format, and the  &lt;b&gt;legacyReference&lt;/b&gt; container is used to identify an order line item in Trading/legacy API format. Both legacy and REST API identifiers are returned in &lt;b&gt;getOrder&lt;/b&gt; (Fulfillment API) and &lt;b&gt;GetOrders&lt;/b&gt; (Trading API).&lt;/span&gt; | [optional]
**legacy_reference** | [**\TNT\Ebay\Sell\Fulfillment\V1\Model\LegacyReference**](LegacyReference.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
