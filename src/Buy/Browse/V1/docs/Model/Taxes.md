# # Taxes

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ebay_collect_and_remit_tax** | **bool** | This field is only returned if &lt;code&gt;true&lt;/code&gt;, and indicates that eBay will collect tax (sales tax, Goods and Services tax, or VAT) for at least one line item in the order, and remit the tax to the taxing authority of the buyer&#39;s residence. | [optional]
**included_in_price** | **bool** | This indicates if tax was applied for the cost of the item. | [optional]
**shipping_and_handling_taxed** | **bool** | This indicates if tax is applied for the shipping cost. | [optional]
**tax_jurisdiction** | [**\TNT\Ebay\Buy\Browse\V1\Model\TaxJurisdiction**](TaxJurisdiction.md) |  | [optional]
**tax_percentage** | **string** | The percentage of tax. | [optional]
**tax_type** | **string** | This field indicates the type of tax that may be collected for the item. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/buy/browse/types/gct:TaxType&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
