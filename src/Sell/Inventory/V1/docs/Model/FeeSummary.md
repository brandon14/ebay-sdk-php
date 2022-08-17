# # FeeSummary

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**fees** | [**\TNT\Ebay\Sell\Inventory\V1\Model\Fee[]**](Fee.md) | This container is an array of listing fees that can be expected to be applied to an offer on the specified eBay marketplace (&lt;strong&gt;marketplaceId&lt;/strong&gt; value). Many fee types will get returned even when they are &lt;code&gt;0.0&lt;/code&gt;.&lt;br/&gt;&lt;br/&gt;See the &lt;a href&#x3D;\&quot;https://pages.ebay.com/help/sell/fees.html\&quot; target&#x3D;\&quot;_blank\&quot;&gt;Standard selling fees&lt;/a&gt; help page for more information on listing fees. | [optional]
**marketplace_id** | **string** | This is the unique identifier of the eBay site for which  listing fees for the offer are applicable. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/sell/inventory/types/slr:MarketplaceEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**warnings** | [**\TNT\Ebay\Sell\Inventory\V1\Model\Error[]**](Error.md) | This container will contain an array of errors and/or warnings when a call is made, and errors and/or warnings occur. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
