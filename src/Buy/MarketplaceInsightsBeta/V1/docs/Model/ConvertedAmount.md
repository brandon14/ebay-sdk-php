# # ConvertedAmount

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**converted_from_currency** | **string** | A three-letter &lt;a href&#x3D;\&quot;https://en.wikipedia.org/wiki/ISO_4217\&quot;&gt;ISO 4217&lt;/a&gt; code that indicates the currency of the amount in the &lt;b&gt; convertedFromValue&lt;/b&gt; field. This value represents the pre-conversion currency. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/buy/marketplace_insights/types/ba:CurrencyCodeEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**converted_from_value** | **string** | The monetary amount before any conversion is performed, in the currency specified by the &lt;b&gt; convertedFromCurrency&lt;/b&gt; field. The &lt;b&gt; value&lt;/b&gt; field contains the converted amount of this value, in the currency specified by the &lt;b&gt; currency&lt;/b&gt; field. | [optional]
**currency** | **string** | A three-letter &lt;a href&#x3D;\&quot;https://en.wikipedia.org/wiki/ISO_4217 \&quot;&gt;ISO 4217&lt;/a&gt; code that indicates the currency of the amount in the &lt;b&gt; value&lt;/b&gt; field. This value represents the post-conversion currency of the amount in the &lt;b&gt; value&lt;/b&gt; field. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/buy/marketplace_insights/types/ba:CurrencyCodeEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**value** | **string** | The monetary value in the currency specified in the &lt;b&gt; currency&lt;/b&gt; field. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
