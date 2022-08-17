# # LineItemInput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**item_id** | **string** | The unique eBay-assigned identifier of an item. This ID is returned by the &lt;b&gt;Browse&lt;/b&gt; and &lt;b&gt;Feed&lt;/b&gt; API methods. The ID must be in RESTful item ID format.&lt;br /&gt;&lt;br /&gt;&lt;b&gt;For example:&lt;/b&gt; &lt;code&gt;v1|2**********6|5**********4&lt;/code&gt; or &lt;code&gt;v1|1**********9|0&lt;/code&gt;.&lt;br /&gt;&lt;br /&gt;For more information about item IDs for RESTful APIs, see &lt;a href&#x3D;\&quot;/api-docs/buy/static/api-browse.html#Legacy\&quot;&gt;Legacy API compatibility&lt;/a&gt;.&lt;br /&gt;&lt;br /&gt;Each &lt;b&gt;itemId&lt;/b&gt; will become a single line item.&lt;br /&gt;&lt;br /&gt;&lt;b&gt;Maximum:&lt;/b&gt;10 per checkout | [optional]
**quantity** | **int** | The quantity ordered in this line item. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
