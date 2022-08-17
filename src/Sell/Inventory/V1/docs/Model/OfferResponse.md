# # OfferResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**offer_id** | **string** | The unique identifier of the offer that was just created with a &lt;strong&gt;createOffer&lt;/strong&gt; call. It is not returned if the &lt;strong&gt;createOffer&lt;/strong&gt; call fails to create an offer. This identifier will be needed for many offer-related calls. &lt;p&gt; &lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;strong&gt;Note:&lt;/strong&gt; The &lt;strong&gt;offerId&lt;/strong&gt; value is only returned with a successful &lt;strong&gt;createOffer&lt;/strong&gt; call. This field will not be returned in the &lt;strong&gt;updateOffer &lt;/strong&gt; response.&lt;/span&gt;&lt;/p&gt; | [optional]
**warnings** | [**\TNT\Ebay\Sell\Inventory\V1\Model\Error[]**](Error.md) | This container will contain an array of errors and/or warnings when a call is made, and errors and/or warnings occur. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
