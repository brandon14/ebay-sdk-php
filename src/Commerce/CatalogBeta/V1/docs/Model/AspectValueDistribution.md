# # AspectValueDistribution

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**localized_aspect_value** | **string** | The localized value of the category aspect identified by refinement.aspectDistributions.localizedAspectName. | [optional]
**match_count** | **int** | The number of times the value of localizedAspectValue has been used for eBay product listings. By comparing this quantity to the matchCount for other values of the same aspect, you can present a histogram of the values to sellers, who can use that information to select which aspect value is most appropriate for their product. You can then include the user-selected value in the the search call&#39;s aspect_filter parameter to refine your search. | [optional]
**refinement_href** | **string** | A HATEOAS reference that further refines the search with this particular localizedAspectValue. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
