# # GetCompatibilityPropertyValuesResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**compatibility_property_values** | [**\TNT\Ebay\Commerce\Taxonomy\V1\Model\CompatibilityPropertyValue[]**](CompatibilityPropertyValue.md) | This array contains all compatible vehicle property values that match the specified eBay marketplace, specified eBay category, and filters in the request. If the &lt;strong&gt;compatibility_property&lt;/strong&gt; parameter value in the request is &#39;Trim&#39;, each value returned in each &lt;strong&gt;value&lt;/strong&gt; field will be a different vehicle trim, applicable to any filters that are set in the &lt;string&gt;filter&lt;/string&gt; query parameter of the request, and also based on the eBay marketplace and category specified in the call request. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
