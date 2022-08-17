# TNT\Ebay\Sell\Recommendation\V1\ListingRecommendationApi

All URIs are relative to https://api.ebay.com/sell/recommendation/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**findListingRecommendations()**](ListingRecommendationApi.md#findListingRecommendations) | **POST** /find | 


## `findListingRecommendations()`

```php
findListingRecommendations($x_ebay_c_marketplace_id, $filter, $limit, $offset, $find_listing_recommendation_request): \TNT\Ebay\Sell\Recommendation\V1\Model\PagedListingRecommendationCollection
```



The find method currently returns information for a single recommendation type (AD) which contains information that sellers can use to configure Promoted Listings ad campaigns. The response from this method includes an array of the seller's listing IDs, where each element in the array contains recommendations related to the associated listing ID. For details on how to use this method, see Using the Recommendation API to help configure campaigns. The AD recommendation type The AD type contains two sets of information: The promoteWithAd indicator The promoteWithAd response field indicates whether or not eBay recommends you place the associated listing in a Promoted Listings ad campaign. The returned value is set to either RECOMMENDED or UNDETERMINED, where RECOMMENDED identifies the listings that will benefit the most from having them included in an ad campaign. The bid percentage Also known as the &quot;ad rate,&quot; the bidPercentage field provides the current trending bid percentage of similarly promoted items in the marketplace. The ad rate is a user-specified value that indicates the level of promotion that eBay applies to the campaign across the marketplace. The value is also used to calculate the Promotion Listings fee, which is assessed to the seller if a Promoted Listings action results in the sale of an item. Configuring the request You can configure a request to review all of a seller's currently active listings, or just a subset of them. All active listings &ndash; If you leave the request body empty, the request targets all the items currently listed by the seller. Here, the response is filtered to contain only the items where promoteWithAd equals RECOMMENDED. In this case, eBay recommends that all the returned listings should be included in a Promoted Listings ad campaign. Selected listing IDs &ndash; If you populate the request body with a set of listingIds, the response contains data for all the specified listing IDs. In this scenario, the response provides you with information on listings where the promoteWithAd can be either RECOMMENDED or UNDETERMINED. The paginated response Because the response can contain many listing IDs, the findListingRecommendations method paginates the response set. You can control size of the returned pages, as well as an offset that dictates where to start the pagination, using query parameters in the request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Recommendation\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Recommendation\V1\Api\ListingRecommendationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_ebay_c_marketplace_id = 'x_ebay_c_marketplace_id_example'; // string | Use this header to specify the eBay marketplace where you list the items for which you want to get recommendations.
$filter = 'filter_example'; // string | Provide a list of key-value pairs to specify the criteria you want to use to filter the response. In the list, separate each filter key from its associated value with a colon (&quot;:&quot;). Currently, the only supported filter value is recommendationTypes and it supports only the (&quot;AD&quot;) type. Follow the recommendationTypes specifier with the filter type(s) enclosed in curly braces (&quot;{ }&quot;), and separate multiple types with commas. Example: filter=recommendationTypes:{AD} Default: recommendationTypes:{AD}
$limit = 'limit_example'; // string | Use this query parameter to set the maximum number of ads to return on a page from the paginated response. Default: 10 Maximum: 500
$offset = 'offset_example'; // string | Specifies the number of ads to skip in the result set before returning the first ad in the paginated response. Combine offset with the limit query parameter to control the items returned in the response. For example, if you supply an offset of 0 and a limit of 10, the first page of the response contains the first 10 items from the complete list of items retrieved by the call. If offset is 10 and limit is 20, the first page of the response contains items 11-30 from the complete result set. Default: 0
$find_listing_recommendation_request = new \TNT\Ebay\Sell\Recommendation\V1\Model\FindListingRecommendationRequest(); // \TNT\Ebay\Sell\Recommendation\V1\Model\FindListingRecommendationRequest

try {
    $result = $apiInstance->findListingRecommendations($x_ebay_c_marketplace_id, $filter, $limit, $offset, $find_listing_recommendation_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListingRecommendationApi->findListingRecommendations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_ebay_c_marketplace_id** | **string**| Use this header to specify the eBay marketplace where you list the items for which you want to get recommendations. |
 **filter** | **string**| Provide a list of key-value pairs to specify the criteria you want to use to filter the response. In the list, separate each filter key from its associated value with a colon (&amp;quot;:&amp;quot;). Currently, the only supported filter value is recommendationTypes and it supports only the (&amp;quot;AD&amp;quot;) type. Follow the recommendationTypes specifier with the filter type(s) enclosed in curly braces (&amp;quot;{ }&amp;quot;), and separate multiple types with commas. Example: filter&#x3D;recommendationTypes:{AD} Default: recommendationTypes:{AD} | [optional]
 **limit** | **string**| Use this query parameter to set the maximum number of ads to return on a page from the paginated response. Default: 10 Maximum: 500 | [optional]
 **offset** | **string**| Specifies the number of ads to skip in the result set before returning the first ad in the paginated response. Combine offset with the limit query parameter to control the items returned in the response. For example, if you supply an offset of 0 and a limit of 10, the first page of the response contains the first 10 items from the complete list of items retrieved by the call. If offset is 10 and limit is 20, the first page of the response contains items 11-30 from the complete result set. Default: 0 | [optional]
 **find_listing_recommendation_request** | [**\TNT\Ebay\Sell\Recommendation\V1\Model\FindListingRecommendationRequest**](../Model/FindListingRecommendationRequest.md)|  | [optional]

### Return type

[**\TNT\Ebay\Sell\Recommendation\V1\Model\PagedListingRecommendationCollection**](../Model/PagedListingRecommendationCollection.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json;charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
