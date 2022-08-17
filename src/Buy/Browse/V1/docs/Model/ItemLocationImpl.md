# # ItemLocationImpl

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**address_line1** | **string** | The first line of the street address. | [optional]
**address_line2** | **string** | The second line of the street address. This field may contain such values as an apartment or suite number. | [optional]
**city** | **string** | The city in which the item is located. &lt;br /&gt;&lt;br /&gt;&lt;b&gt;Restriction:&lt;/b&gt; This field is populated in the &lt;b&gt; search&lt;/b&gt; method response &lt;i&gt; only&lt;/i&gt; when &lt;b&gt; fieldgroups&lt;/b&gt; &#x3D; &lt;code&gt;EXTENDED&lt;/code&gt;. | [optional]
**country** | **string** | The two-letter &lt;a href&#x3D;\&quot;https://www.iso.org/iso-3166-country-codes.html \&quot;&gt;ISO 3166&lt;/a&gt; standard code that indicates the country in which the item is located.  For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/buy/browse/types/ba:CountryCodeEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**county** | **string** | The county in which the item is located. | [optional]
**postal_code** | **string** | The postal code (or zip code in US) where the item is located. Sellers set a postal code (or zip code in US) for items when they are listed. The postal code is used for calculating proximity searches. It is anonymized when returned in &lt;b&gt;itemLocation.postalCode&lt;/b&gt; via the API. | [optional]
**state_or_province** | **string** | The state or province in which the item is located. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
