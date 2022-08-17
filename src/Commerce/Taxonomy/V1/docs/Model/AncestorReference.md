# # AncestorReference

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**category_id** | **string** | The unique identifier of the eBay ancestor category.      &lt;br /&gt;&lt;br /&gt;     &lt;span class&#x3D;\&quot;tablenote\&quot;&gt; &lt;strong&gt;Note:&lt;/strong&gt; The root node of a full default category tree includes the &lt;b&gt;categoryId&lt;/b&gt; field, but its value should not be relied upon. It provides no useful information for application development. &lt;/span&gt; | [optional]
**category_name** | **string** | The name of the ancestor category identified by &lt;b&gt;categoryId&lt;/b&gt;. | [optional]
**category_subtree_node_href** | **string** | The href portion of the &lt;b&gt;getCategorySubtree&lt;/b&gt; call that retrieves the subtree below the ancestor category node. | [optional]
**category_tree_node_level** | **int** | The absolute level of the ancestor category node in the hierarchy of its category tree.&lt;br /&gt;&lt;br /&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt; &lt;strong&gt;Note:&lt;/strong&gt; The root node of any full category tree is always at level &lt;code&gt;&lt;b&gt;0&lt;/b&gt;&lt;/code&gt;. &lt;/span&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
