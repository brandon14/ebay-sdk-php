# # PostSaleAuthenticationProgram

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**outcome_reason** | **string** | This field indicates the result of the authenticity verification inspection on an order line item. This field is not returned when the status value of the order line item is &lt;code&gt;PENDING&lt;/code&gt; or &lt;code&gt;PASSED&lt;/code&gt;. The possible values returned here are &lt;code&gt;NOT_AUTHENTIC&lt;/code&gt;, &lt;code&gt;NOT_AS_DESCRIBED&lt;/code&gt;, &lt;code&gt;CUSTOMIZED&lt;/code&gt;, &lt;code&gt;MISCATEGORIZED&lt;/code&gt;, or &lt;code&gt;NOT_AUTHENTIC_NO_RETURN&lt;/code&gt;. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/sell/fulfillment/types/sel:AuthenticityVerificationReasonEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**status** | **string** | The value in this field indicates whether the order line item has passed or failed the authenticity verification inspection, or if the inspection and/or results are still pending. The possible values returned here are &lt;code&gt;PENDING&lt;/code&gt;, &lt;code&gt;PASSED&lt;/code&gt;, &lt;code&gt;FAILED&lt;/code&gt;, or &lt;code&gt;PASSED_WITH_EXCEPTION&lt;/code&gt;. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/sell/fulfillment/types/sel:AuthenticityVerificationStatusEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
