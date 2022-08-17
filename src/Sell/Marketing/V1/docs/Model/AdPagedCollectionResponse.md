# # AdPagedCollectionResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ads** | [**\TNT\Ebay\Sell\Marketing\V1\Model\Ad[]**](Ad.md) | The list of ads that matched the request criteria. | [optional]
**href** | **string** | The URI of the current page of results from the result set. | [optional]
**limit** | **int** | The number of items returned on a single page from the result set. This value can be set in the request with the &lt;b&gt;limit&lt;/b&gt; query parameter.&lt;p&gt;&lt;b&gt;Default&lt;/b&gt;: &lt;code&gt;10&lt;/code&gt; | [optional]
**next** | **string** | The call URI that can be used to retrieve the next page in the result set. Basically, all of the request parameters will remain the same except the offset value, which will be increased to retrieve the next page of results. &lt;br&gt;&lt;br&gt;&lt;b&gt;Max length&lt;/b&gt;: 2048 | [optional]
**offset** | **int** | The number of results skipped in the result set before listing the first result on the current page. This value can be set in the request with the &lt;b&gt;offset&lt;/b&gt; query parameter. If the &lt;b&gt;offset&lt;/b&gt; value is not set, it defaults to zero.&lt;p&gt;&lt;b&gt;Default&lt;/b&gt;: &lt;code&gt;0&lt;/code&gt;&lt;/p&gt;&lt;p class&#x3D;\&quot;tablenote\&quot;&gt;&lt;strong&gt;Note: &lt;/strong&gt;The items in a paginated result set use a zero-based list where the first item in the list has an offset of &lt;code&gt;0&lt;/code&gt;.&lt;/p&gt; | [optional]
**prev** | **string** | The call URI that can be used to retrieve the previous page in the result set. Basically, all of the request parameters will remain the same except the offset value, which will be decreased to retrieve the previous page of results. &lt;br&gt;&lt;br&gt;&lt;b&gt;Max length&lt;/b&gt;: 2048 | [optional]
**total** | **int** | The total number of items retrieved in the result set.  &lt;br&gt;&lt;br&gt;If no items are found, this field is returned with a value of &lt;code&gt;0&lt;/code&gt;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
