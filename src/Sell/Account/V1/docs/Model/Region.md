# # Region

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**region_name** | **string** | A string that indicates the name of a region, as defined by eBay. A \&quot;region\&quot; can be either a &#39;world region&#39; (e.g., the \&quot;Middle East\&quot; or \&quot;Southeast Asia\&quot;), a country (represented with a two-letter country code), a state or province (represented with a two-letter code), or a special domestic region within a country. &lt;br /&gt;&lt;br /&gt;The &lt;b&gt;GeteBayDetails&lt;/b&gt; call in the Trading API can be used to retrieve the world regions and special domestic regions within a specific country. To get these enumeration values, call &lt;b&gt;GeteBayDetails&lt;/b&gt; with the &lt;b&gt;DetailName&lt;/b&gt; value set to &lt;b&gt;ExcludeShippingLocationDetails&lt;/b&gt;. | [optional]
**region_type** | **string** | Reserved for future use. &lt;!--The region&#39;s type, which can be one of the following: &#39;COUNTRY&#39;, &#39;COUNTRY_REGION&#39;, &#39;STATE_OR_PROVINCE&#39;, &#39;WORLD_REGION&#39;, or &#39;WORLDWIDE&#39;.--&gt; For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/sell/account/types/ba:RegionTypeEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
