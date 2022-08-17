# # CompatibilityResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**compatibility_status** | **string** | An enumeration value that tells you if the item is compatible with the product. &lt;br /&gt;&lt;br /&gt;The values are: &lt;ul&gt;   &lt;li&gt;   &lt;b&gt; COMPATIBLE&lt;/b&gt; - Indicates the item is compatible with the product specified in the request.&lt;/li&gt;   &lt;li&gt;   &lt;b&gt; NOT_COMPATIBLE&lt;/b&gt; - Indicates the item is not compatible with the product specified in the request. Be sure to check all the &lt;b&gt; value&lt;/b&gt; fields to ensure they are correct as errors in the value can also cause this response.&lt;/li&gt;   &lt;li&gt; &lt;b&gt; UNDETERMINED&lt;/b&gt; - Indicates one or more attributes for the specified product are missing so compatibility cannot be determined.  The response returns the attributes that are missing.&lt;/li&gt;  &lt;/ul&gt;  Code so that your app gracefully handles any future changes to this list. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/buy/browse/types/gct:CompatibilityStatus&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**warnings** | [**\TNT\Ebay\Buy\Browse\V1\Model\Error[]**](Error.md) | An array of warning messages. These types of errors do not prevent the method from executing but should be checked. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
