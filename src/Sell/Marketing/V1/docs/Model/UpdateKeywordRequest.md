# # UpdateKeywordRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**bid** | [**\TNT\Ebay\Sell\Marketing\V1\Model\Amount**](Amount.md) |  | [optional]
**keyword_status** | **string** | Include this field if you wish to change the status of the keyword. The status value specified here must be different than the keyword&#39;s current status. To confirm the current status of a keyword, you can use the &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/resources/keyword/methods/getKeyword\&quot;&gt;getKeyword&lt;/a&gt; method.&lt;/p&gt;&lt;p&gt;If the status of the ad is currently &lt;code&gt;ACTIVE&lt;/code&gt;, you can change status to &lt;code&gt;PAUSED&lt;/code&gt; or &lt;code&gt;ARCHIVED&lt;/code&gt;. If ad group is currently in &lt;code&gt;PAUSED&lt;/code&gt; status, you can change the status back to &lt;code&gt;ACTIVE&lt;/code&gt;. Ads that are currently in &lt;code&gt;ARCHIVED&lt;/code&gt; status cannot be made &lt;code&gt;ACTIVE&lt;/code&gt; again. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/sell/marketing/types/pls:KeywordStatusEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
