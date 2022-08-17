# # Address

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**address_line1** | **string** | The first line of the street address. | [optional]
**address_line2** | **string** | The second line of the street address. This field can be used for additional address information, such as a suite or apartment number. This field will be returned if defined for the shipping address. | [optional]
**city** | **string** | The city of the shipping destination. | [optional]
**country** | **string** | The country of the shipping destination, represented as a two-letter ISO 3166-1 alpha-2 country code. For example, &lt;code&gt;US&lt;/code&gt; represents the United States, and &lt;code&gt;DE&lt;/code&gt; represents Germany. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/sell/fulfillment/types/ba:CountryCodeEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**county** | **string** | The county of the shipping destination. Counties typically, but not always, contain multiple cities or towns. This field is returned if known/available. | [optional]
**postal_code** | **string** | The postal code of the shipping destination. Usually referred to as Zip codes in the US. Most countries have postal codes, but not all. The postal code will be returned if applicable. | [optional]
**state_or_province** | **string** | The state or province of the shipping destination. Most countries have states or provinces, but not all. The state or province will be returned if applicable. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
