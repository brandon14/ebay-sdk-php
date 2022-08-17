# # CompatibilityProperty

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | This is the actual name of the compatible vehicle property as it is known on the specified eBay marketplace and in the eBay category. This is the string value that should be used in the &lt;strong&gt;compatibility_property&lt;/strong&gt; and &lt;strong&gt;filter&lt;/strong&gt; query parameters of a &lt;strong&gt;getCompatibilityPropertyValues&lt;/strong&gt; request URI. &lt;br/&gt;&lt;br/&gt; Typical vehicle properties are &#39;Make&#39;, &#39;Model&#39;, &#39;Year&#39;, &#39;Engine&#39;, and &#39;Trim&#39;, but will vary based on the eBay marketplace and the eBay category. | [optional]
**localized_name** | **string** | This is the localized name of the compatible vehicle property. The language that is used will depend on the user making the call, or based on the language specified if the &lt;strong&gt;Content-Language&lt;/strong&gt; HTTP header is used.&lt;br/&gt;&lt;br/&gt;In some instances, the string value in this field may be the same as the string in the corresponding &lt;strong&gt;name&lt;/strong&gt; field. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
