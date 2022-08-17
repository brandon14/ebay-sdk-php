# # CancelStatus

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cancelled_date** | **string** | The date and time the order was cancelled, if applicable. This timestamp is in ISO 8601 format, which uses the 24-hour Universal Coordinated Time (UTC) clock. &lt;br /&gt;&lt;br /&gt;&lt;b&gt;Format:&lt;/b&gt; &lt;code&gt;[YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z&lt;/code&gt; &lt;br /&gt;&lt;b&gt;Example:&lt;/b&gt; &lt;code&gt;2015-08-04T19:09:02.768Z&lt;/code&gt; | [optional]
**cancel_requests** | [**\TNT\Ebay\Sell\Fulfillment\V1\Model\CancelRequest[]**](CancelRequest.md) | This array contains details of one or more buyer requests to cancel the order. &lt;br /&gt;&lt;br /&gt;&lt;b&gt;For the getOrders call:&lt;/b&gt;  This array is returned but is always empty.&lt;br /&gt;&lt;b&gt;For the getOrder call:&lt;/b&gt; This array is returned fully populated with information about any cancellation requests. | [optional]
**cancel_state** | **string** | The state of the order with regard to cancellation. This field is always returned, and if there are no cancellation requests, a value of &lt;code&gt;NONE_REQUESTED&lt;/code&gt; is returned.  For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/sell/fulfillment/types/sel:CancelStateEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
