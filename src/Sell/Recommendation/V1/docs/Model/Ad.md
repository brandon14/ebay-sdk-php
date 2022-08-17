# # Ad

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**bid_percentages** | [**\TNT\Ebay\Sell\Recommendation\V1\Model\BidPercentages[]**](BidPercentages.md) | This field returns information that you can use to configure the bidPercentage field in a Promoted Listings campaign. Note: Currently, ITEM and TRENDING are the only supported bid percentage types. The ITEM suggested bid percentages are tailored to each of your items and are designed to help you stay competitive while finding an optimal balance between performance and cost. The recommendations are calculated based on a variety of factors that may include item attributes, seasonality, past performance, and current competition for each of your listings. The TRENDING suggested bid percentages are calculated by reviewing the category level average ad rates in the marketplace. Setting the bidPercentage of your ad campaign based on these rate recommendations will help the items in the campaign be competitive with other items in the marketplace by improving their chances of being displayed more often in the marketplace. | [optional]
**promote_with_ad** | **string** | An enum whose values describe whether or not eBay recommends you place the associated listing in a Promoted Listings ad campaign. IDs deemed RECOMMENDED by eBay are the listings with the highest potential of benefiting from being promoted. The recommendation calculation is based on marketplace trends, like buyer demand and the competition in the item&amp;rsquo;s category. Note: A promoteWithAd value cannot be calculated for listings that are part of Promoted Listings campaigns. Because of this, if you call findListingRecommendations with a specific set of listing IDs, the promoteWithAd field is not returned for any of the listings that are involved in a promotion. However, as long as they are eligible, the trending bidPercentage is returned for all specified listings, even if they are part of an ad campaign. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/sell/recommendation/types/api:PromoteWithAd&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)