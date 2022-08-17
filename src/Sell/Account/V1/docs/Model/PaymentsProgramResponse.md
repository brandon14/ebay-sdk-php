# # PaymentsProgramResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**marketplace_id** | **string** | The ID of the eBay marketplace to which the payment program applies. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/sell/account/types/ba:MarketplaceIdEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**payments_program_type** | **string** | This parameter specifies the payment program whose status is returned by the call.  &lt;br&gt;&lt;br&gt;Currently the only supported payments program is &lt;code&gt;EBAY_PAYMENTS&lt;/code&gt;. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/sell/account/types/api:PaymentsProgramType&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**status** | **string** | The enumeration value returned in this field indicates whether or not the seller&#39;s account is enabled for the payments program. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/sell/account/types/api:PaymentsProgramStatus&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**was_previously_opted_in** | **bool** | If returned as &lt;code&gt;true&lt;/code&gt;, the seller was at one point opted-in to the associated payment program, but they later opted out of the program. A value of &lt;code&gt;false&lt;/code&gt; indicates the seller never opted-in to the program or if they did opt-in to the program, they never opted-out of it.  &lt;br&gt;&lt;br&gt;It&#39;s important to note that the setting of this field does not indicate the seller&#39;s current status regarding the payment program. It is possible for this field to return &lt;code&gt;true&lt;/code&gt; while the &lt;b&gt;status&lt;/b&gt; field returns &lt;code&gt;OPTED_IN&lt;/code&gt;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
