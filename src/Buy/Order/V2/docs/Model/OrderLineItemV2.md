# # OrderLineItemV2

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**authenticity_verification** | [**\TNT\Ebay\Buy\Order\V2\Model\AuthenticityVerificationProgram**](AuthenticityVerificationProgram.md) |  | [optional]
**base_unit_price** | [**\TNT\Ebay\Buy\Order\V2\Model\Amount**](Amount.md) |  | [optional]
**fees** | [**\TNT\Ebay\Buy\Order\V2\Model\Fee[]**](Fee.md) | A breakdown of the fees applicable to the line item. | [optional]
**image** | [**\TNT\Ebay\Buy\Order\V2\Model\Image**](Image.md) |  | [optional]
**item_id** | **string** | The eBay identifier of an item. This ID is returned by the &lt;b&gt;Browse&lt;/b&gt; and &lt;b&gt;Feed&lt;/b&gt; API methods. | [optional]
**legacy_reference** | [**\TNT\Ebay\Buy\Order\V2\Model\LegacyReference**](LegacyReference.md) |  | [optional]
**line_item_id** | **string** | A unique eBay-assigned ID value that identifies a line item in a checkout session. This is created by the &lt;a href&#x3D;\&quot;/api-docs/buy/order/resources/guest_checkout_session/methods/initiateGuestCheckoutSession\&quot;&gt;initiateGuestCheckoutSession&lt;/a&gt;. | [optional]
**line_item_payment_status** | **string** | An enumeration value that indicates the payment status of the line item. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/buy/order/types/gct:LineItemPaymentStatusEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**line_item_status** | **string** | An enumeration value that indicates the fulfillment state of this line item.&lt;br /&gt;&lt;br /&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; When there is no tracking information, the status will never change from &lt;code&gt;FULFILLMENT_IN_PROGRESS&lt;/code&gt;; without tracking information, eBay has no way of knowing whether the order was delivered.&lt;/span&gt; For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/buy/order/types/gct:LineItemStatusEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**net_price** | [**\TNT\Ebay\Buy\Order\V2\Model\Amount**](Amount.md) |  | [optional]
**order_id** | **string** | The unique order ID for the line item.&lt;br /&gt;&lt;br /&gt;&lt;b&gt;Maximum Length:&lt;/b&gt; 40 characters | [optional]
**promotions** | [**\TNT\Ebay\Buy\Order\V2\Model\Promotion[]**](Promotion.md) | An array of promotions applied to the line item. | [optional]
**quantity** | **int** | The quantity ordered for the line item. | [optional]
**seller** | [**\TNT\Ebay\Buy\Order\V2\Model\Seller**](Seller.md) |  | [optional]
**shipping_detail** | [**\TNT\Ebay\Buy\Order\V2\Model\ShippingDetail**](ShippingDetail.md) |  | [optional]
**tax_details** | [**\TNT\Ebay\Buy\Order\V2\Model\TaxDetail[]**](TaxDetail.md) | A container for the tax information for the line item. | [optional]
**title** | **string** | The seller-created title of the item. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
