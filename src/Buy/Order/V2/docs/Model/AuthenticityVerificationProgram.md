# # AuthenticityVerificationProgram

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**description** | **string** | An informational message that applies to the Authenticity Guarantee program. | [optional]
**outcome_reason** | **string** | An informational message regarding the authentication outcome of an Authenticity Guarantee verification inspection.&lt;br /&gt;&lt;br /&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; This field is conditionally returned when there is information that applies to the Authenticity Guarantee program.&lt;/span&gt; | [optional]
**status** | **string** | An enumerated value that indicates whether the order line item has passed or failed the Authenticity Guarantee verification inspection, or whether the inspection and/or results are still pending.&lt;br /&gt;&lt;br /&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; This field is conditionally returned when the purchase is complete.&lt;/span&gt;&lt;br /&gt;&lt;br /&gt;&lt;b&gt;Valid Values:&lt;/b&gt;&lt;ul&gt;&lt;li&gt;&lt;code&gt;PENDING&lt;/code&gt;&lt;/li&gt;&lt;li&gt;&lt;code&gt;PASSED&lt;/code&gt;&lt;/li&gt;&lt;li&gt;&lt;code&gt;FAILED&lt;/code&gt;&lt;/li&gt;&lt;li&gt;&lt;code&gt;INELIGIBLE&lt;/code&gt;&lt;/li&gt;&lt;/ul&gt; For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/buy/order/types/gct:AuthenticityVerificationStatusEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**terms_web_url** | **string** | The terms and conditions that apply to the Authenticity Guarantee program. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
