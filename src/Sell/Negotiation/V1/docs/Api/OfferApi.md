# TNT\Ebay\Sell\Negotiation\V1\OfferApi

All URIs are relative to https://api.ebay.com/sell/negotiation/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**findEligibleItems()**](OfferApi.md#findEligibleItems) | **GET** /find_eligible_items | 
[**sendOfferToInterestedBuyers()**](OfferApi.md#sendOfferToInterestedBuyers) | **POST** /send_offer_to_interested_buyers | 


## `findEligibleItems()`

```php
findEligibleItems($x_ebay_c_marketplace_id, $limit, $offset): \TNT\Ebay\Sell\Negotiation\V1\Model\PagedEligibleItemCollection
```



This method evaluates a seller's current listings and returns the set of IDs that are eligible for a seller-initiated discount offer to a buyer. A listing ID is returned only when one or more buyers have shown an &quot;interest&quot; in the listing. If any buyers have shown interest in a listing, the seller can initiate a &quot;negotiation&quot; with them by calling sendOfferToInterestedBuyers, which sends all interested buyers a message that offers the listing at a discount. For details about how to create seller offers to buyers, see Sending offers to buyers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Negotiation\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Negotiation\V1\Api\OfferApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_ebay_c_marketplace_id = 'x_ebay_c_marketplace_id_example'; // string | The eBay marketplace on which you want to search for eligible listings. For a complete list of supported marketplaces, see Negotiation API requirements and restrictions.
$limit = 'limit_example'; // string | This query parameter specifies the maximum number of items to return from the result set on a page in the paginated response. Minimum: 1 &nbsp; &nbsp;Maximum: 200 Default: 10
$offset = 'offset_example'; // string | This query parameter specifies the number of results to skip in the result set before returning the first result in the paginated response. Combine offset with the limit query parameter to control the items returned in the response. For example, if you supply an offset of 0 and a limit of 10, the first page of the response contains the first 10 results from the complete list of items retrieved by the call. If offset is 10 and limit is 20, the first page of the response contains items 11-30 from the complete result set. Default: 0

try {
    $result = $apiInstance->findEligibleItems($x_ebay_c_marketplace_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferApi->findEligibleItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_ebay_c_marketplace_id** | **string**| The eBay marketplace on which you want to search for eligible listings. For a complete list of supported marketplaces, see Negotiation API requirements and restrictions. |
 **limit** | **string**| This query parameter specifies the maximum number of items to return from the result set on a page in the paginated response. Minimum: 1 &amp;nbsp; &amp;nbsp;Maximum: 200 Default: 10 | [optional]
 **offset** | **string**| This query parameter specifies the number of results to skip in the result set before returning the first result in the paginated response. Combine offset with the limit query parameter to control the items returned in the response. For example, if you supply an offset of 0 and a limit of 10, the first page of the response contains the first 10 results from the complete list of items retrieved by the call. If offset is 10 and limit is 20, the first page of the response contains items 11-30 from the complete result set. Default: 0 | [optional]

### Return type

[**\TNT\Ebay\Sell\Negotiation\V1\Model\PagedEligibleItemCollection**](../Model/PagedEligibleItemCollection.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendOfferToInterestedBuyers()`

```php
sendOfferToInterestedBuyers($x_ebay_c_marketplace_id, $create_offers_request): \TNT\Ebay\Sell\Negotiation\V1\Model\SendOfferToInterestedBuyersCollectionResponse
```



This method sends eligible buyers offers to purchase items in a listing at a discount. When a buyer has shown interest in a listing, they become &quot;eligible&quot; to receive a seller-initiated offer to purchase the item(s). Sellers use findEligibleItems to get the set of listings that have interested buyers. If a listing has interested buyers, sellers can use this method (sendOfferToInterestedBuyers) to send an offer to the buyers who are interested in the listing. The offer gives buyers the ability to purchase the associated listings at a discounted price. For details about how to create seller offers to buyers, see Sending offers to buyers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Negotiation\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Negotiation\V1\Api\OfferApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_ebay_c_marketplace_id = 'x_ebay_c_marketplace_id_example'; // string | The eBay marketplace on which your listings with &quot;eligible&quot; buyers appear. For a complete list of supported marketplaces, see Negotiation API requirements and restrictions.
$create_offers_request = new \TNT\Ebay\Sell\Negotiation\V1\Model\CreateOffersRequest(); // \TNT\Ebay\Sell\Negotiation\V1\Model\CreateOffersRequest | Send offer to eligible items request.

try {
    $result = $apiInstance->sendOfferToInterestedBuyers($x_ebay_c_marketplace_id, $create_offers_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferApi->sendOfferToInterestedBuyers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_ebay_c_marketplace_id** | **string**| The eBay marketplace on which your listings with &amp;quot;eligible&amp;quot; buyers appear. For a complete list of supported marketplaces, see Negotiation API requirements and restrictions. |
 **create_offers_request** | [**\TNT\Ebay\Sell\Negotiation\V1\Model\CreateOffersRequest**](../Model/CreateOffersRequest.md)| Send offer to eligible items request. | [optional]

### Return type

[**\TNT\Ebay\Sell\Negotiation\V1\Model\SendOfferToInterestedBuyersCollectionResponse**](../Model/SendOfferToInterestedBuyersCollectionResponse.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
