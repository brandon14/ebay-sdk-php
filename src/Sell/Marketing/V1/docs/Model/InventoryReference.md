# # InventoryReference

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**inventory_reference_id** | **string** | The seller&#39;s inventory reference ID for an item that is managed with the Inventory API.  &lt;br&gt;&lt;br&gt;An inventory reference is either the ID of a single listing or the ID of the parent of an item group listing (a multi-variation listing, such as a shirt that is available in multiple sizes and colors).  &lt;br&gt;&lt;br&gt;&lt;i&gt;Required if &lt;/i&gt; if you supply an &lt;b&gt;inventoryReferenceType&lt;/b&gt;. | [optional]
**inventory_reference_type** | **string** | Indicates the type of item indicated by the &lt;b&gt;inventoryReferenceId&lt;/b&gt;.  &lt;br&gt;&lt;br&gt;This value can be set to either &lt;code&gt;INVENTORY_ITEM&lt;/code&gt; or &lt;code&gt;INVENTORY_ITEM_GROUP&lt;/code&gt; (if the ID points to a multi-variation listing). &lt;br&gt;&lt;br&gt;&lt;i&gt;Required if &lt;/i&gt; if you supply an &lt;b&gt;inventoryReferenceId&lt;/b&gt;. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/sell/marketing/types/pls:InventoryReferenceTypeEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
