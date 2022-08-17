# # OfferKeysWithId

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**offers** | [**\TNT\Ebay\Sell\Inventory\V1\Model\OfferKeyWithId[]**](OfferKeyWithId.md) | This container is used to identify one or more (up to 250)unpublished offers for which expected listing fees will be retrieved. The user passes one or more &lt;strong&gt;offerId&lt;/strong&gt; values (maximum of 250) in to this container to identify the unpublished offers in which to retrieve expected listing fees. This call is only applicable for offers in the unpublished state. &lt;br/&gt;&lt;br/&gt; The call response gives aggregate fee amounts per eBay marketplace, and does not give fee information at the individual offer level. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
