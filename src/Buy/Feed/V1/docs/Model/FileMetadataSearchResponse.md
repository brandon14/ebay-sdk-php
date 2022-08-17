# # FileMetadataSearchResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**file_metadata** | [**\TNT\Ebay\Buy\Feed\V1\Model\FileMetadata[]**](FileMetadata.md) | An array of metadata values describing the available feed files that match the input criteria. | [optional]
**href** | **string** | The URL to to the current set of results. | [optional]
**limit** | **int** | The number of results that will be displayed on each page, as set by the &lt;b&gt;limit&lt;/b&gt; URI parameter.&lt;br /&gt;&lt;br /&gt;&lt;b&gt;Default:&lt;/b&gt; 20 | [optional]
**next** | **string** | You can use this URL to retrieve the next page of results beyond those displayed on the page if there are more results that match the search criteria. | [optional]
**total** | **int** | The total number of matches for the search criteria. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
