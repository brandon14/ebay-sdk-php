# # CategorySuggestion

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**category** | [**\TNT\Ebay\Commerce\Taxonomy\V1\Model\Category**](Category.md) |  | [optional]
**category_tree_node_ancestors** | [**\TNT\Ebay\Commerce\Taxonomy\V1\Model\AncestorReference[]**](AncestorReference.md) | An ordered list of category references that describes the location of the suggested category in the specified category tree. The list identifies the category&#39;s ancestry as a sequence of parent nodes, from the current node&#39;s immediate parent to the root node of the category tree.    &lt;br /&gt;&lt;br /&gt;          &lt;span class&#x3D;\&quot;tablenote\&quot;&gt; &lt;strong&gt;Note:&lt;/strong&gt; The root node of a full default category tree includes &lt;b&gt;categoryId&lt;/b&gt; and &lt;b&gt;categoryName&lt;/b&gt; fields, but their values should not be relied upon. They provide no useful information for application development. &lt;/span&gt; | [optional]
**category_tree_node_level** | **int** | The absolute level of the category tree node in the hierarchy of its category tree.    &lt;br /&gt;&lt;br /&gt;          &lt;span class&#x3D;\&quot;tablenote\&quot;&gt; &lt;strong&gt;Note:&lt;/strong&gt; The root node of any full category tree is always at level &lt;code&gt;&lt;b&gt;0&lt;/b&gt;&lt;/code&gt;. &lt;/span&gt; | [optional]
**relevancy** | **string** | This field is reserved for internal or future use. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
