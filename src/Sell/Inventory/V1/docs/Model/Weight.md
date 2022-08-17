# # Weight

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**unit** | **string** | The unit of measurement used to specify the weight of a shipping package. Both the &lt;strong&gt;unit&lt;/strong&gt; and &lt;strong&gt;value&lt;/strong&gt; fields are required if the &lt;strong&gt;weight&lt;/strong&gt; container is used. If the English system of measurement is being used, the applicable values for weight units are &lt;code&gt;POUND&lt;/code&gt; and &lt;code&gt;OUNCE&lt;/CODE&gt;. If the metric system of measurement is being used, the applicable values for weight units are &lt;code&gt;KILOGRAM&lt;/code&gt; and &lt;code&gt;GRAM&lt;/code&gt;. The metric system is used by most countries outside of the US. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/sell/inventory/types/slr:WeightUnitOfMeasureEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**value** | **float** | The actual weight (in the measurement unit specified in the &lt;strong&gt;unit&lt;/strong&gt; field) of the shipping package. Both the &lt;strong&gt;unit&lt;/strong&gt; and &lt;strong&gt;value&lt;/strong&gt; fields are required if the &lt;strong&gt;weight&lt;/strong&gt; container is used. If a shipping package weighed 20.5 ounces, the container would look as follows: &lt;br/&gt;&lt;pre&gt;\&quot;weight\&quot;: {&lt;br/&gt; \&quot;value\&quot;: 20.5,&lt;br/&gt; \&quot;unit\&quot;: \&quot;OUNCE\&quot;&lt;br/&gt; }&lt;/pre&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
