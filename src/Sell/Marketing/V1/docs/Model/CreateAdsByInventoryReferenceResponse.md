# # CreateAdsByInventoryReferenceResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ad_group_id** | **string** | A unique eBay-assigned ID for an ad group in a Promoted Listings Advanced (PLA) campaign that uses the Cost Per Click (CPC) funding model.&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; This field will always be returned for campaigns that use the CPC funding model. It will not be returned for campaigns that use the Cost Per Sale (CPS) funding model.&lt;/span&gt; | [optional]
**ads** | [**\TNT\Ebay\Sell\Marketing\V1\Model\AdReference[]**](AdReference.md) | A list of ad IDs. An ad ID is generated for each successfully created ad. | [optional]
**errors** | [**\TNT\Ebay\Sell\Marketing\V1\Model\Error[]**](Error.md) | An array of errors or warnings associated with the create-ads request. | [optional]
**inventory_reference_id** | **string** | An ID that identifies a single-item listing or multiple-variation listing that is managed with the &lt;a href&#x3D;\&quot;/api-docs/sell/inventory/resources/methods\&quot; title&#x3D;\&quot;Inventory API Reference\&quot;&gt;Inventory API&lt;/a&gt;. &lt;p&gt;The &lt;i&gt;inventory reference ID&lt;/i&gt; is a seller-defined value that can be either an &lt;b&gt;SKU&lt;/b&gt; for a single-item listing or an &lt;b&gt;inventoryItemGroupKey&lt;/b&gt; for a multiple-value listing.&lt;/p&gt; | [optional]
**inventory_reference_type** | **string** | Indicates the type of item the &lt;b&gt;inventoryReferenceId&lt;/b&gt; references. The item can be either an &lt;code&gt;INVENTORY_ITEM&lt;/code&gt; or &lt;code&gt;INVENTORY_ITEM_GROUP&lt;/code&gt;. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/sell/marketing/types/pls:InventoryReferenceTypeEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**status_code** | **int** | An HTTP status code that indicates the response-status of the request. Check this code to see if the ads were successfuly created. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
