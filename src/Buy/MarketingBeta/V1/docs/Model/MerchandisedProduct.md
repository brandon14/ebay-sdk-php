# # MerchandisedProduct

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**average_rating** | **string** | The average rating for the product based on eBay user ratings. | [optional]
**epid** | **string** | The eBay product identifier of a product from the eBay product catalog. You can use this value in the Browse API &lt;b&gt;search&lt;/b&gt; method to retrieve items for this product. | [optional]
**image** | [**\TNT\Ebay\Buy\MarketingBeta\V1\Model\Image**](Image.md) |  | [optional]
**market_price_details** | [**\TNT\Ebay\Buy\MarketingBeta\V1\Model\MarketPriceDetail[]**](MarketPriceDetail.md) | An array of containers for the product market price details, such as condition and market price. | [optional]
**rating_aspects** | [**\TNT\Ebay\Buy\MarketingBeta\V1\Model\RatingAspect[]**](RatingAspect.md) | An array of containers for ratings of the product aspects, such as \&quot;Is it a good value\&quot;. | [optional]
**rating_count** | **int** | The total number of eBay users that rated the product. | [optional]
**review_count** | **int** | The total number of eBay users that wrote a review for the product. | [optional]
**title** | **string** | The title of the product. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
