# # GuestCheckoutSessionResponseV2

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**applied_coupons** | [**\TNT\Ebay\Buy\Order\V2\Model\Coupon[]**](Coupon.md) | A container that returns the information for the coupons that were applied in the guest checkout session. | [optional]
**checkout_session_id** | **string** | The eBay-assigned guest checkout session ID. This ID is created after a successful &lt;b&gt;initiateGuestCheckoutSession&lt;/b&gt; call. | [optional]
**line_items** | [**\TNT\Ebay\Buy\Order\V2\Model\LineItem[]**](LineItem.md) | An array of line items associated with the guest checkout session. | [optional]
**pricing_summary** | [**\TNT\Ebay\Buy\Order\V2\Model\PricingSummaryV2**](PricingSummaryV2.md) |  | [optional]
**shipping_address** | [**\TNT\Ebay\Buy\Order\V2\Model\ShippingAddress**](ShippingAddress.md) |  | [optional]
**warnings** | [**\TNT\Ebay\Buy\Order\V2\Model\Error[]**](Error.md) | An array of errors or warnings that were generated during the method processing. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
