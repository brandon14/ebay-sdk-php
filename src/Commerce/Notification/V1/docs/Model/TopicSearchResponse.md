# # TopicSearchResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**total** | **int** | The total number of matches for the search criteria. | [optional]
**href** | **string** | The path to the call URI that produced the current page of results. | [optional]
**next** | **string** | The URL to access the next set of results. This field includes a &lt;strong&gt;continuation_token&lt;/strong&gt;. No &lt;b&gt;prev&lt;/b&gt; field is returned, but this value is persistent during the session so that you can use it to return to the next page.&lt;br&gt;&lt;br&gt;This field is not returned if fewer records than specified by the &lt;strong&gt;limit&lt;/strong&gt; field are returned. | [optional]
**limit** | **int** | The value of the limit parameter submitted in the request, which is the maximum number of items to return per page, from the result set. A result set is the complete set of results returned by the method.&lt;br /&gt;&lt;br /&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; Though this parameter is not required to be submitted in the request, the parameter defaults to &lt;code&gt;20&lt;/code&gt; if omitted.&lt;/span&gt; | [optional]
**topics** | [**\TNT\Ebay\Commerce\Notification\V1\Model\Topic[]**](Topic.md) | An array of topics that match the specified criteria. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
