# # UpdateAdsByInventoryReferenceResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ads** | [**\TNT\Ebay\Sell\Marketing\V1\Model\AdReference[]**](AdReference.md) | A list of ad IDs and links to retrieve them. | [optional]
**errors** | [**\TNT\Ebay\Sell\Marketing\V1\Model\Error[]**](Error.md) | A container for all of the errors associated with the specified inventory reference ID. | [optional]
**inventory_reference_id** | **string** | The reference ID associated with the ad. The reference ID could be a SKU number or Inventory Item Group, depending on value of &lt;code&gt;inventoryReferenceType&lt;/code&gt;. | [optional]
**inventory_reference_type** | **string** | The inventory reference type associated with the ad. The inventory reference type could be a SKU number or Inventory Item Group. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/sell/marketing/types/pls:InventoryReferenceTypeEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**status_code** | **int** | An HTTP status code that indicates whether or not the CPS ad was successfully updated. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
