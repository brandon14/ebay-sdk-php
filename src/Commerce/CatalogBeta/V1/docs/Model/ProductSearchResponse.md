# # ProductSearchResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**href** | **string** | This field is reserved for internal or future use. | [optional]
**limit** | **int** | The number of product summaries returned in the response. This is the result set, a subset of the full collection of products that match the search or filter criteria of this call. If the limit query parameter was included in the request, this field will have the same value. Default: 50 | [optional]
**next** | **string** | This field is reserved for internal or future use. | [optional]
**offset** | **int** | This field is reserved for internal or future use. | [optional]
**prev** | **string** | This field is reserved for internal or future use. | [optional]
**product_summaries** | [**\TNT\Ebay\Commerce\CatalogBeta\V1\Model\ProductSummary[]**](ProductSummary.md) | Returned if the fieldGroups query parameter was omitted from the request, or if it was included with a value of MATCHING_PRODUCTS or FULL. This container provides an array of product summaries in the current result set for products that match the combination of the q, category_ids, and aspect_filter parameters that were provided in the request. Each product summary includes information about the product&#39;s identifiers, product images, aspects, the product page URL, and the getProduct URL for retrieving the product details. | [optional]
**refinement** | [**\TNT\Ebay\Commerce\CatalogBeta\V1\Model\Refinement**](Refinement.md) |  | [optional]
**total** | **int** | This field is reserved for internal or future use. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
