# # ApplicationAccess

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**accesses** | [**\TNT\Ebay\Buy\Feed\V1\Model\Access[]**](Access.md) | The response payload will contain a list of every feed type the application can access. The marketplaces and L1 categories to which the application is constrained within each feed are also returned. If no marketplaces are listed for a particular feed type, the application has access to all marketplaces. L1 categories are constrained according to marketplace. If a marketplace is listed with no L1 categories, the application has access to all categories in that marketplace. See &lt;b&gt;Sample 1: getAccess Request&lt;/b&gt; below. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
