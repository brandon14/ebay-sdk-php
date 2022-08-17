# # Record

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**dimension_values** | [**\TNT\Ebay\Sell\Analytics\V1\Model\Value[]**](Value.md) | A list where each element contains either the string DAY (if the dimension is DAY), or the listing ID for which the record&#39;s metric data is computed. A second array member, applicable, is always true for dimension values. | [optional]
**metric_values** | [**\TNT\Ebay\Sell\Analytics\V1\Model\Value[]**](Value.md) | A list where each element contains a value field that indicates the record&#39;s value for the metric. Each element also contains an applicable field that indicates the veracity of the computed value. Note that there are no metric names or IDs associated with the values returned in this array. The metadata to which these values relate can be found in the key values . The order of the metric values in this array equals the order of the key values in metadataHeader. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
