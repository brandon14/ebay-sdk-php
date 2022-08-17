# # AspectRecommendations

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**localized_aspect_name** | **string** | The name of the item aspect for which eBay has a recommendation. In many cases, the same item aspect(s) that are returned under the violationData array for ASPECTS_ADOPTION listing violations are also returned here Note: This name is always localized for the specified marketplace. | [optional]
**suggested_values** | **string[]** | One or more valid values for the corresponding item aspect (in localizedAspectName) are returned here. These suggested values for the item aspect depend on the listing category and on the information specified in the listing. Sellers should confirm accuracy of the values before applying them to the listing. Please use getItemAspectsForCategory in the Taxonomy API or GetCategorySpecifics in the Trading API to get a comprehensive list of required and recommended aspects for a given category and a list of supported aspect values for each. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
