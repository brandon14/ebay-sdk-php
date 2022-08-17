# # Access

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**constraints** | [**\TNT\Ebay\Buy\Feed\V1\Model\FeedTypeConstraint[]**](FeedTypeConstraint.md) | This array shows the eBay marketplace and eBay L1 categories that the corresponding feed type applies to. If there are no &lt;b&gt;marketplaceId&lt;/b&gt; constraints, the application has access to all marketplaces. If there are no &lt;b&gt;categoryId&lt;/b&gt; constraints, then the application has access to all categories within the given marketplace. | [optional]
**feed_type** | **string** | The identifier of the feed type that the application has access to. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
