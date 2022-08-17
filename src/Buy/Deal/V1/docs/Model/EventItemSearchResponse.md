# # EventItemSearchResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**event_items** | [**\TNT\Ebay\Buy\Deal\V1\Model\EventItem[]**](EventItem.md) | A list of event items that match the search criteria. | [optional]
**href** | **string** | The relative path to the current set of results. | [optional]
**limit** | **int** | The maximum number of items, from the current result set, returned on a single page. Default: 20 | [optional]
**next** | **string** | The relative path to the next set of results. | [optional]
**offset** | **int** | The number of items that will be skipped in the result set. This is used with the limit field to control the pagination of the output. For example, if the offset is set to 0 and the limit is set to 10, the method will retrieve items 1 through 10 from the list of items returned. If the offset is set to 10 and the limit is set to 10, the method will retrieve items 11 through 20 from the list of items returned. Default: 0 | [optional]
**prev** | **string** | The relative path to the previous set of results. | [optional]
**total** | **int** | The total number of matches for the specified search criteria. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
