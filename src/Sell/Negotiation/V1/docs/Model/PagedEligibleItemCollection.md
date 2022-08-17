# # PagedEligibleItemCollection

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**eligible_items** | [**\TNT\Ebay\Sell\Negotiation\V1\Model\EligibleItem[]**](EligibleItem.md) | A list of items that are eligible for a seller-initiated offer to a buyer. Each element in the list contains the listing ID of a listed item. These IDs represent the listings for which buyers have shown an interest. | [optional]
**href** | **string** | The URI of the current page of results from the result set. | [optional]
**limit** | **int** | The number of items returned on a single page from the result set. This value can be set in the request with the limit query parameter. | [optional]
**next** | **string** | The URI for the following page of results. This value is returned only if there is an additional page of results to display from the result set. Max length: 2048 | [optional]
**offset** | **int** | The number of results skipped in the result set before listing the first returned result. This value can be set in the request with the offset query parameter. Note: The items in a paginated result set use a zero-based list where the first item in the list has an offset of 0. | [optional]
**prev** | **string** | The URI for the preceding page of results. This value is returned only if there is a previous page of results to display from the result set. Max length: 2048 | [optional]
**total** | **int** | The total number of items retrieved in the result set. If no items match the search criteria, the server returns the HTTP status code 204 No Content. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
