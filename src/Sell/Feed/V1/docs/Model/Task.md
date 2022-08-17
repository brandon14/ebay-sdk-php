# # Task

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**completion_date** | **string** | The timestamp when the task went into the &lt;code&gt;COMPLETED&lt;/code&gt; or &lt;code&gt;COMPLETED_WITH_ERROR&lt;/code&gt; state. This state means that eBay has compiled the report for the seller based on the seller’s filter criteria, and the seller can run a &lt;strong&gt;getResultFile&lt;/strong&gt; call to download the report. | [optional]
**creation_date** | **string** | The date the task was created. | [optional]
**detail_href** | **string** | The path to the call URI used to retrieve the task. This field points to the GetOrderTask URI if the task is for &lt;code&gt;LMS_ORDER_REPORT&lt;/code&gt; or will be null if this task is for &lt;code&gt;LMS_ORDER_ACK&lt;/code&gt;. | [optional]
**feed_type** | **string** | The feed type associated with the task. | [optional]
**schema_version** | **string** | The schema version number associated with the task. | [optional]
**status** | **string** | The enumeration value that indicates the state of the task that was submitted in the request. See &lt;strong&gt;FeedStatusEnum&lt;/strong&gt; for information. &lt;p&gt;The values &lt;code&gt;COMPLETED &lt;/code&gt;and&lt;code&gt; COMPLETED_WITH_ERROR&lt;/code&gt; indicate the Order Report file is ready to download.&lt;/p&gt; For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/sell/feed/types/api:FeedStatusEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**task_id** | **string** | The ID of the task that was submitted in the request. | [optional]
**upload_summary** | [**\TNT\Ebay\Sell\Feed\V1\Model\UploadSummary**](UploadSummary.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
