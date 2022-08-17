# # DestinationSearchResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**total** | **int** | The total number of matches for the search criteria. | [optional]
**href** | **string** | The path to the call URI that produced the current page of results. | [optional]
**next** | **string** | The URL to access the next set of results. This field includes a &lt;strong&gt;continuation_token&lt;/strong&gt;. No &lt;b&gt;prev&lt;/b&gt; field is returned, but this value is persistent during the session so that you can use it to return to the next page.&lt;br&gt;&lt;br&gt;This field is not returned if fewer records than specified by the &lt;strong&gt;limit&lt;/strong&gt; field are returned. | [optional]
**limit** | **int** | The number of records to show in the current response.&lt;br /&gt;&lt;br /&gt;&lt;b&gt;Default:&lt;/b&gt; 20 | [optional]
**destinations** | [**\TNT\Ebay\Commerce\Notification\V1\Model\Destination[]**](Destination.md) | An array that contains the destination details. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
