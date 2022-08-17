# # Fee

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | [**\TNT\Ebay\Sell\Inventory\V1\Model\Amount**](Amount.md) |  | [optional]
**fee_type** | **string** | The value returned in this field indicates the type of listing fee that the seller may incur if one or more unpublished offers (offers are specified in the call request) are published on the marketplace specified in the &lt;strong&gt;marketplaceId&lt;/strong&gt; field. Applicable listing fees will often include things such as &lt;code&gt;InsertionFee&lt;/code&gt; or &lt;code&gt;SubtitleFee&lt;/code&gt;, but many fee types will get returned even when they are &lt;code&gt;0.0&lt;/code&gt;.&lt;br/&gt;&lt;br/&gt;See the &lt;a href&#x3D;\&quot;https://pages.ebay.com/help/sell/fees.html\&quot; target&#x3D;\&quot;_blank\&quot;&gt;Standard selling fees&lt;/a&gt; help page for more information on listing fees. | [optional]
**promotional_discount** | [**\TNT\Ebay\Sell\Inventory\V1\Model\Amount**](Amount.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
