# # OfferSkuResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**errors** | [**\TNT\Ebay\Sell\Inventory\V1\Model\Error[]**](Error.md) | This container will be returned at the offer level, and will contain one or more errors if any occurred with the attempted creation of the corresponding offer. | [optional]
**format** | **string** | This enumeration value indicates the listing format of the offer. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/sell/inventory/types/slr:FormatTypeEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**marketplace_id** | **string** | This enumeration value is the unique identifier of the eBay marketplace for which the offer will be made available. This enumeration value should be the same for all offers since the &lt;strong&gt;bulkCreateOffer&lt;/strong&gt; method can only be used to create offers for one eBay marketplace at a time. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/sell/inventory/types/slr:MarketplaceEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**offer_id** | **string** | The unique identifier of the newly-created offer. This identifier should be automatically created by eBay if the creation of the offer was successful. It is not returned if the creation of the offer was not successful. In which case, the user may want to scan the corresponding &lt;strong&gt;errors&lt;/strong&gt; and/or &lt;strong&gt;warnings&lt;/strong&gt; container to see what the issue may be. | [optional]
**sku** | **string** | The seller-defined Stock-Keeping Unit (SKU) of the inventory item. The &lt;strong&gt;sku&lt;/strong&gt; value is required for each product offer that the seller is trying to create, and it is always returned to identified the product that is associated with the offer. | [optional]
**status_code** | **int** | The integer value returned in this field is the http status code. If an offer is created successfully, the value returned in this field should be &lt;code&gt;200&lt;/code&gt;. A user can view the &lt;strong&gt;HTTP status codes&lt;/strong&gt; section for information on other status codes that may be returned with the &lt;strong&gt;bulkCreateOffer&lt;/strong&gt; method. | [optional]
**warnings** | [**\TNT\Ebay\Sell\Inventory\V1\Model\Error[]**](Error.md) | This container will be returned at the offer level, and will contain one or more warnings if any occurred with the attempted creation of the corresponding offer. Note that it is possible that an offer can be created successfully even if one or more warnings are triggered. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
