# # ReturnPolicy

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**category_id** | **string** | The category ID to which the return policies apply. | [optional]
**category_tree_id** | **string** | A value that indicates the root node of the category tree used for the response set. Each marketplace is based on a category tree whose root node is indicated by this unique category ID value. All category policy information returned by this call pertains to the categories included below this root node of the tree.    &lt;br&gt;&lt;br&gt;A &lt;i&gt;category tree&lt;/i&gt; is a hierarchical framework of eBay categories that begins at the root node of the tree and extends to include all the child nodes in the tree. Each child node in the tree is an eBay category that is represented by a unique &lt;b&gt;categoryId&lt;/b&gt; value. Within a category tree, the root node has no parent node and &lt;i&gt;leaf nodes&lt;/i&gt; are nodes that have no child nodes. | [optional]
**domestic** | [**\TNT\Ebay\Sell\Metadata\V1\Model\ReturnPolicyDetails**](ReturnPolicyDetails.md) |  | [optional]
**international** | [**\TNT\Ebay\Sell\Metadata\V1\Model\ReturnPolicyDetails**](ReturnPolicyDetails.md) |  | [optional]
**required** | **bool** | If set to &lt;code&gt;true&lt;/code&gt;, this flag indicates that you must specify a return policy for items listed in the associated category.  &lt;br&gt;&lt;br&gt;Note that not accepting returns (setting &lt;b&gt;returnsAcceptedEnabled&lt;/b&gt; to &lt;code&gt;false&lt;/code&gt;) is a valid return policy. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
