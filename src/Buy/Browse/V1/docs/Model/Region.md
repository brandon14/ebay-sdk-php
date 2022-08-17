# # Region

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**region_name** | **string** | A localized text string that indicates the name of the region. Taxes are generally charged at the state/province level or at the country level in the case of VAT tax. | [optional]
**region_type** | **string** | An enumeration value that indicates the type of region for the tax jurisdiction. &lt;br&gt;&lt;br&gt;&lt;b&gt; Valid Values: &lt;/b&gt; &lt;ul&gt;&lt;li&gt;&lt;b&gt; STATE_OR_PROVINCE &lt;/b&gt; - Indicates the region is a state or province within a country, such as California or New York in the US, or Ontario or Alberta in Canada.&lt;/li&gt;&lt;li&gt;&lt;b&gt; COUNTRY &lt;/b&gt; - Indicates the region is a single country.&lt;/li&gt;&lt;/ul&gt;  Code so that your app gracefully handles any future changes to this list. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/buy/browse/types/ba:RegionTypeEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
