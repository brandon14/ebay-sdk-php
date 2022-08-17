# # RateTable

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**country_code** | **string** | A two-letter &lt;a href&#x3D;\&quot;https://www.iso.org/iso-3166-country-codes.html\&quot; title&#x3D;\&quot;https://www.iso.org\&quot; target&#x3D;\&quot;_blank\&quot;&gt;ISO 3166&lt;/a&gt; country code representing the eBay marketplace where the shipping rate table is defined. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/sell/account/types/ba:CountryCodeEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**locality** | **string** | This enumeration value returned here indicates whether the shipping rate table is a domestic or international shipping rate table. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/sell/account/types/api:ShippingOptionTypeEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**name** | **string** | The seller-defined name for the shipping rate table. | [optional]
**rate_table_id** | **string** | A unique eBay-assigned ID for a seller&#39;s shipping rate table. These &lt;b&gt;rateTableId&lt;/b&gt; values are used to associate shipping rate tables to fulfillment business policies or directly to listings through an add/revise/relist call in the Trading API. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
