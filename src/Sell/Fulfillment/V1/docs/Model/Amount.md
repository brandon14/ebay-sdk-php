# # Amount

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**converted_from_currency** | **string** | A three-letter ISO 4217 code that indicates the currency of the amount in the &lt;b&gt;convertedFromValue&lt;/b&gt; field. This value is required or returned only if currency conversion/localization is required, and represents the pre-conversion currency. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/sell/fulfillment/types/ba:CurrencyCodeEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**converted_from_value** | **string** | The monetary amount before any conversion is performed, in the currency specified by the &lt;b&gt;convertedFromCurrency&lt;/b&gt; field. This value is required or returned only if currency conversion/localization is required. The &lt;b&gt;value&lt;/b&gt; field contains the converted amount of this value, in the currency specified by the &lt;b&gt;currency&lt;/b&gt; field. | [optional]
**currency** | **string** | A three-letter ISO 4217 code that indicates the currency of the amount in the &lt;b&gt;value&lt;/b&gt; field. If currency conversion/localization is required, this is the post-conversion currency of the amount in the &lt;b&gt;value&lt;/b&gt; field.&lt;br /&gt;&lt;br /&gt;&lt;b&gt;Default:&lt;/b&gt; The default currency of the eBay marketplace that hosts the listing. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/sell/fulfillment/types/ba:CurrencyCodeEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**value** | **string** | The monetary amount, in the currency specified by the &lt;b&gt;currency&lt;/b&gt; field. If currency conversion/localization is required, this value is the converted amount, and the &lt;b&gt;convertedFromValue&lt;/b&gt; field contains the amount in the original currency.  &lt;br&gt;&lt;br&gt;&lt;i&gt;Required in&lt;/i&gt; the &lt;b&gt;amount&lt;/b&gt; type. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
