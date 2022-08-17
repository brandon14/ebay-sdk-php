# # OfferPriceQuantity

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**available_quantity** | **int** | This field is used if the seller wants to modify the current quantity of the inventory item that will be available for purchase in the offer (identified by the corresponding &lt;strong&gt;offerId&lt;/strong&gt; value). Either the &lt;strong&gt;availableQuantity&lt;/strong&gt; field or the &lt;strong&gt;price&lt;/strong&gt; container is required, but not necessarily both. | [optional]
**offer_id** | **string** | This field is the unique identifier of the offer. If an &lt;strong&gt;offers&lt;/strong&gt; container is used to update one or more offers associated to a specific inventory item, the &lt;strong&gt;offerId&lt;/strong&gt; value is required in order to identify the offer to update with a modified price and/or quantity.&lt;br/&gt;&lt;br/&gt;The seller can run a &lt;strong&gt;getOffers&lt;/strong&gt; call (passing in the correct SKU value as a query parameter) to retrieve &lt;strong&gt;offerId&lt;/strong&gt; values for offers associated with the SKU. | [optional]
**price** | [**\TNT\Ebay\Sell\Inventory\V1\Model\Amount**](Amount.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
