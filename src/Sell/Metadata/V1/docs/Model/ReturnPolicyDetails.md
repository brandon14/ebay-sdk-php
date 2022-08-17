# # ReturnPolicyDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**policy_description_enabled** | **bool** | If set to &lt;code&gt;true&lt;/code&gt;, this flag indicates you can supply a detailed return policy description within your return policy (for example, by populating the &lt;b&gt;returnInstructions&lt;/b&gt; field in the Account API&#39;s &lt;b&gt;createReturnPolicy&lt;/b&gt;). User-supplied return policy details are allowed only in the DE, ES, FR, and IT marketplaces. | [optional]
**refund_methods** | **string[]** | A list of refund methods allowed for the associated category. | [optional]
**return_methods** | **string[]** | A list of return methods allowed for the associated category. | [optional]
**return_periods** | [**\TNT\Ebay\Sell\Metadata\V1\Model\TimeDuration[]**](TimeDuration.md) | A list of return periods allowed for the associated category.  &lt;br&gt;&lt;br&gt;Note that different APIs require you to enter the return period in different ways. For example, the Account API uses the complex &lt;b&gt;TimeDuration&lt;/b&gt; type, which takes two values (a &lt;b&gt;unit&lt;/b&gt; and a &lt;b&gt;value&lt;/b&gt;), whereas the Trading API takes a single value (such as &lt;code&gt;Days_30&lt;/code&gt;). | [optional]
**returns_acceptance_enabled** | **bool** | If set to &lt;code&gt;true&lt;/code&gt;, this flag indicates the seller can configure how they handle domestic returns. | [optional]
**return_shipping_cost_payers** | **string[]** | A list of allowed values for who pays for the return shipping cost.  &lt;br&gt;&lt;br&gt;Note that for SNAD returns, the seller is always responsible for the return shipping cost. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
