# # NegotiatedPricePolicy

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**best_offer_auto_accept_enabled** | **bool** | This flag denotes whether or not the category supports the setting of a price at which best offers are automatically accepted. If set to &lt;code&gt;true&lt;/code&gt;, the category does support the setting of an automatic price for best-offers. | [optional]
**best_offer_auto_decline_enabled** | **bool** | This flag denotes whether or not the category supports the setting of an auto-decline price for best offers. If set to &lt;code&gt;true&lt;/code&gt;, the category does support the setting of an automatic-decline price for best-offers. | [optional]
**best_offer_counter_enabled** | **bool** | This flag denotes whether or not the category supports the setting for an automatic counter-offer on best offers. If set to &lt;code&gt;true&lt;/code&gt;, the category does support the setting of an automatic counter-offer price for best-offers. | [optional]
**category_id** | **string** | The category ID to which the negotiated-price policies apply. | [optional]
**category_tree_id** | **string** | A value that indicates the root node of the category tree used for the response set. Each marketplace is based on a category tree whose root node is indicated by this unique category ID value. All category policy information returned by this call pertains to the categories included below this root node of the tree.    &lt;br&gt;&lt;br&gt;A &lt;i&gt;category tree&lt;/i&gt; is a hierarchical framework of eBay categories that begins at the root node of the tree and extends to include all the child nodes in the tree. Each child node in the tree is an eBay category that is represented by a unique &lt;b&gt;categoryId&lt;/b&gt; value. Within a category tree, the root node has no parent node and &lt;i&gt;leaf nodes&lt;/i&gt; are nodes that have no child nodes. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
