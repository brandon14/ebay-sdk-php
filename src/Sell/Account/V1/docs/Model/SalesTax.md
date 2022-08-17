# # SalesTax

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**country_code** | **string** | The country code enumeration value identifies the country to which this sales tax rate applies. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/sell/account/types/ba:CountryCodeEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**sales_tax_jurisdiction_id** | **string** | A unique ID that identifies the sales tax jurisdiction to which the salest tax rate applies (for example, a state within the United States). | [optional]
**sales_tax_percentage** | **string** | The sales tax rate that will be applied to sales price. The &lt;b&gt;shippingAndHandlingTaxed&lt;/b&gt; value will indicate whether or not sales tax is also applied to shipping and handling charges&lt;br&gt;&lt;br&gt;Although it is a string, a percentage value is returned here, such as &lt;code&gt;7.75&lt;/code&gt; | [optional]
**shipping_and_handling_taxed** | **bool** | If returned as &lt;code&gt;true&lt;/code&gt;, sales tax is also applied to shipping and handling charges, and not just the total sales price of the order. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
