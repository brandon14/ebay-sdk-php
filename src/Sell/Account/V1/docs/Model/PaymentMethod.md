# # PaymentMethod

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**brands** | **string[]** | &lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note&lt;/b&gt;: This array is no longer applicable and should not be used. eBay now controls all electronic payment methods available for a marketplace, and a seller never has to specify any electronic payment methods, including any credit card brands accepted. &lt;/span&gt; | [optional]
**payment_method_type** | **string** | eBay now controls all electronic payment methods available for a marketplace, so only offline payment method enum values may be used in this field, and offline payment methods will only be applicable to listings that require or support offline payments. See the &lt;b&gt;PaymentMethodTypeEnum&lt;/b&gt; type for supported offline payment method enum values. &lt;/p&gt; For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/sell/account/types/api:PaymentMethodTypeEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**recipient_account_reference** | [**\TNT\Ebay\Sell\Account\V1\Model\RecipientAccountReference**](RecipientAccountReference.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
