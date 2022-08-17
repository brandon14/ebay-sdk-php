# # CategorySuggestionResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**category_suggestions** | [**\TNT\Ebay\Commerce\Taxonomy\V1\Model\CategorySuggestion[]**](CategorySuggestion.md) | Contains details about one or more suggested categories that correspond to the provided keywords. The array of suggested categories is sorted in order of eBay&#39;s confidence of the relevance of each category (the first category is the most relevant).&lt;br /&gt;&lt;br /&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt; &lt;strong&gt;&lt;span style&#x3D;\&quot;color:red\&quot;&gt;Important:&lt;/span&gt;&lt;/strong&gt; This call is not supported in the Sandbox environment. It will return a response payload in which the &lt;b&gt;categoryName&lt;/b&gt; fields contain random or boilerplate text regardless of the query submitted. &lt;/span&gt; | [optional]
**category_tree_id** | **string** | The unique identifier of the eBay category tree from which suggestions are returned. | [optional]
**category_tree_version** | **string** | The version of the category tree identified by &lt;b&gt;categoryTreeId&lt;/b&gt;. It&#39;s a good idea to cache this value for comparison so you can determine if this category tree has been modified in subsequent calls. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
