# # Charity

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**charity_id** | **string** | The eBay-assigned unique identifier of the charitable organization that will receive a percentage of the sales proceeds. The charitable organization must be reqistered with the PayPal Giving Fund in order to receive sales proceeds through eBay listings.&lt;br/&gt;&lt;br/&gt;This field is conditionally required if a seller is planning on donating a percentage of the sale proceeds to a charitable organization.&lt;br&gt;&lt;br&gt;The eBay-assigned unique identifier of a charitable organization can be found using the &lt;strong&gt;GetCharities&lt;/strong&gt; call of the Trading API. In the &lt;strong&gt;GetCharities&lt;/strong&gt; call response, this unique identifier is shown in the &lt;strong&gt;id&lt;/strong&gt; attribute of the &lt;strong&gt;Charity&lt;/strong&gt; container. | [optional]
**donation_percentage** | **string** | This field is the percentage of the purchase price that the charitable organization (identified in the &lt;strong&gt;charityId&lt;/strong&gt; field) will receive for each sale that the listing generates. This field is conditionally required if a seller is planning on donating a percentage of the sale proceeds to a charitable organization. This numeric value can range from 10 to 100, and in any 5 (percent) increments in between this range (e.g. &lt;code&gt;10&lt;/code&gt;, &lt;code&gt;15&lt;/code&gt;, &lt;code&gt;20&lt;/code&gt;...&lt;code&gt;95&lt;/code&gt;,... &lt;code&gt;100&lt;/code&gt;). The seller would pass in &lt;code&gt;10&lt;/code&gt; for 10 percent, &lt;code&gt;15&lt;/code&gt; for 15 percent, &lt;code&gt;20&lt;/code&gt; for 20 percent, and so on, all the way to &lt;code&gt;100&lt;/code&gt; for 100 percent. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
