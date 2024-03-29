# # CharitySearchResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**charity_orgs** | [**\TNT\Ebay\Commerce\Charity\V1\Model\CharityOrg[]**](CharityOrg.md) | The list of charitable organizations that match the search criteria. | [optional]
**href** | **string** | The relative path to the current set of results. | [optional]
**limit** | **int** | The number of items, from the result set, returned in a single page.&lt;br /&gt;&lt;br /&gt;&lt;b&gt;Valid Values:&lt;/b&gt; &lt;code&gt;1-100&lt;/code&gt;&lt;br /&gt;&lt;br /&gt;&lt;b&gt;Default:&lt;/b&gt; &lt;code&gt;20&lt;/code&gt; | [optional]
**next** | **string** | The relative path to the next set of results. | [optional]
**offset** | **int** | The number of items that will be skipped in the result set. This is used with the &lt;b&gt;limit&lt;/b&gt; field to control the pagination of the output.&lt;br /&gt;&lt;br /&gt;For example, if the &lt;b&gt;offset&lt;/b&gt; is set to &lt;code&gt;0&lt;/code&gt; and the &lt;b&gt;limit&lt;/b&gt; is set to &lt;code&gt;10&lt;/code&gt;, the method will retrieve items 1 through 10 from the list of items returned. If the &lt;b&gt;offset&lt;/b&gt; is set to &lt;code&gt;10&lt;/code&gt; and the &lt;b&gt;limit&lt;/b&gt; is set to &lt;code&gt;10&lt;/code&gt;, the method will retrieve items 11 through 20 from the list of items returned.&lt;br /&gt;&lt;br /&gt;&lt;b&gt;Valid Values:&lt;/b&gt; &lt;code&gt;0-10,000&lt;/code&gt;&lt;br /&gt;&lt;br /&gt;&lt;b&gt;Default:&lt;/b&gt; &lt;code&gt;0&lt;/code&gt; | [optional]
**prev** | **string** | The relative path to the previous set of results. | [optional]
**total** | **int** | The total number of matches for the search criteria. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
