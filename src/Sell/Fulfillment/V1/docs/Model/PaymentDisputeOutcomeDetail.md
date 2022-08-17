# # PaymentDisputeOutcomeDetail

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**fees** | [**\TNT\Ebay\Sell\Fulfillment\V1\Model\SimpleAmount**](SimpleAmount.md) |  | [optional]
**protected_amount** | [**\TNT\Ebay\Sell\Fulfillment\V1\Model\SimpleAmount**](SimpleAmount.md) |  | [optional]
**protection_status** | **string** | This enumeration value indicates if the seller is fully protected, partially protected, or not protected by eBay for the payment dispute. This field is always returned once the payment dispute is resolved. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/sell/fulfillment/types/api:ProtectionStatusEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**reason_for_closure** | **string** | The enumeration value returned in this field indicates the outcome of the payment dispute for the seller. This field is always returned once the payment dispute is resolved. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/sell/fulfillment/types/api:OutcomeEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**recoup_amount** | [**\TNT\Ebay\Sell\Fulfillment\V1\Model\SimpleAmount**](SimpleAmount.md) |  | [optional]
**total_fee_credit** | [**\TNT\Ebay\Sell\Fulfillment\V1\Model\SimpleAmount**](SimpleAmount.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
