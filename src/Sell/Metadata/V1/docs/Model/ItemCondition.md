# # ItemCondition

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**condition_description** | **string** | The human-readable label for the condition (e.g., \&quot;New\&quot;). This value is typically localized for each site.  &lt;br&gt;&lt;br&gt;Note that the display name can vary by category. For example, the description for condition ID &lt;code&gt;1000&lt;/code&gt; could be called \&quot;New: with Tags\&quot; in one category and \&quot;Brand New\&quot; in another. For details on condition IDs and descriptions, see &lt;a href&#x3D;&#39;/api-docs/sell/static/metadata/condition-id-values.html&#39;&gt;Item condition ID and name values&lt;/a&gt;. | [optional]
**condition_id** | **string** | The ID value of the selected item condition. For information on the supported condition ID values, see &lt;a href&#x3D;&#39;/api-docs/sell/static/metadata/condition-id-values.html&#39;&gt;Item condition ID and name values&lt;/a&gt;. | [optional]
**usage** | **string** | The value returned in this field indicates if there are any usage restrictions or requirements for the corresponding item condition in the corresponding category.&lt;br /&gt;&lt;br /&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; Currently, the only supported value is &#39;RESTRICTED&#39;, and this field will only be returned for the following conditions: 2000, 2010, 2020, 2030. Sellers must be pre-approved to use any of these item conditions.&lt;/span&gt; For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/sell/metadata/types/sel:UsageEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
