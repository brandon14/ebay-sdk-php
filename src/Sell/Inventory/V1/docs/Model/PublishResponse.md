# # PublishResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**listing_id** | **string** | The unique identifier of the newly created eBay listing. This field is returned if the single offer (if &lt;strong&gt;publishOffer&lt;/strong&gt; call was used) or group of offers in an inventory item group (if &lt;strong&gt;publishOfferByInventoryItemGroup&lt;/strong&gt; call was used) was successfully converted into an eBay listing. | [optional]
**warnings** | [**\TNT\Ebay\Sell\Inventory\V1\Model\Error[]**](Error.md) | This container will contain an array of errors and/or warnings if any occur when a &lt;strong&gt;publishOffer&lt;/strong&gt; or &lt;strong&gt;publishOfferByInventoryItemGroup&lt;/strong&gt; call is made. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
