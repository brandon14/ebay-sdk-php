# # PaymentMethod

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**payment_method_type** | **string** | The payment method type, such as credit card or cash. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/buy/browse/types/gct:PaymentMethodTypeEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**payment_method_brands** | [**\TNT\Ebay\Buy\Browse\V1\Model\PaymentMethodBrand[]**](PaymentMethodBrand.md) | The payment method brands, including the payment method brand type and logo image. | [optional]
**payment_instructions** | **string[]** | The payment instructions for the buyer, such as &lt;i&gt;cash in person&lt;/i&gt; or &lt;i&gt;contact seller&lt;/i&gt;. | [optional]
**seller_instructions** | **string[]** | The seller instructions to the buyer, such as &lt;i&gt;accepts credit cards&lt;/i&gt; or &lt;i&gt;see description&lt;/i&gt;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
