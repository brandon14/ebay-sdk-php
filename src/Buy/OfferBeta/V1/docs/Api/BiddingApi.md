# TNT\Ebay\Buy\OfferBeta\V1\BiddingApi

All URIs are relative to https://api.ebay.com/buy/offer/v1_beta.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getBidding()**](BiddingApi.md#getBidding) | **GET** /bidding/{item_id} | 
[**placeProxyBid()**](BiddingApi.md#placeProxyBid) | **POST** /bidding/{item_id}/place_proxy_bid | 


## `getBidding()`

```php
getBidding($item_id, $x_ebay_c_marketplace_id): \TNT\Ebay\Buy\OfferBeta\V1\Model\Bidding
```



This method retrieves the bidding details that are specific to the buyer of the specified auction. This must be an auction where the buyer has already placed a bid. To retrieve the bidding information you use a user access token and pass in the item ID of the auction. You can also retrieve general bidding details about the auction, such as minimum bid price and the count of unique bidders, using the Browse API getItem method. URLs for this method Production URL: https://api.ebay.com/buy/offer/v1_beta/bidding/{item_id} Sandbox URL: https://api.sandbox.ebay.com/buy/offer/v1_beta/bidding/{item_id} Restrictions For a list of supported sites and other restrictions, see API Restrictions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Buy\OfferBeta\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Buy\OfferBeta\V1\Api\BiddingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_id = 'item_id_example'; // string | The eBay RESTful identifier of an item that you want the buyer's bidding information. This ID is returned by the Browse and Feed API methods. RESTful Item ID example: v1|2**********2|0 For more information about item ID for RESTful APIs, see the Legacy API compatibility section of the Buy APIs Overview. Restriction: The buyer must have placed a bid for this item.
$x_ebay_c_marketplace_id = 'x_ebay_c_marketplace_id_example'; // string | The ID of the eBay marketplace where the buyer is based. Note: This value is case sensitive. For example: &nbsp;&nbsp;X-EBAY-C-MARKETPLACE-ID = EBAY_US For a list of supported sites see, API Restrictions.

try {
    $result = $apiInstance->getBidding($item_id, $x_ebay_c_marketplace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BiddingApi->getBidding: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_id** | **string**| The eBay RESTful identifier of an item that you want the buyer&#39;s bidding information. This ID is returned by the Browse and Feed API methods. RESTful Item ID example: v1|2**********2|0 For more information about item ID for RESTful APIs, see the Legacy API compatibility section of the Buy APIs Overview. Restriction: The buyer must have placed a bid for this item. |
 **x_ebay_c_marketplace_id** | **string**| The ID of the eBay marketplace where the buyer is based. Note: This value is case sensitive. For example: &amp;nbsp;&amp;nbsp;X-EBAY-C-MARKETPLACE-ID &#x3D; EBAY_US For a list of supported sites see, API Restrictions. |

### Return type

[**\TNT\Ebay\Buy\OfferBeta\V1\Model\Bidding**](../Model/Bidding.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `placeProxyBid()`

```php
placeProxyBid($item_id, $x_ebay_c_marketplace_id, $place_proxy_bid_request): \TNT\Ebay\Buy\OfferBeta\V1\Model\PlaceProxyBidResponse
```



This method uses a user access token to place a proxy bid for the buyer on a specific auction item. The item must offer AUCTION as one of the buyingOptions. To place a bid, you pass in the item ID of the auction as a URI parameter and the buyer's maximum bid amount (maxAmount ) in the payload. By placing a proxy bid, the buyer is agreeing to purchase the item if they win the auction. After this bid is placed, if someone else outbids the buyer a bid, eBay automatically bids again for the buyer up to the amount of their maximum bid. When the bid exceeds the buyer's maximum bid, eBay will notify them that they have been outbid. To find auctions, you can use the Browse API to search for items and use a filter to return only auction items. For example: /buy/browse/v1/item_summary/search?q=iphone&amp;filter=buyingOptions:{AUCTION} URLs for this method Production URL: https://api.ebay.com/buy/offer/v1_beta/bidding/{item_id}/place_proxy_bid Sandbox URL: https://api.sandbox.ebay.com/buy/offer/v1_beta/bidding/{item_id}/place_proxy_bid Restrictions For a list of supported sites and other restrictions, see API Restrictions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Buy\OfferBeta\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Buy\OfferBeta\V1\Api\BiddingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_id = 'item_id_example'; // string | The eBay RESTful identifier of an item you want to bid on. This ID is returned by the Browse and Feed API methods. RESTful Item ID Example: v1|2**********2|0 For more information about item ID for RESTful APIs, see the Legacy API compatibility section of the Buy APIs Overview.
$x_ebay_c_marketplace_id = 'x_ebay_c_marketplace_id_example'; // string | The ID of the eBay marketplace where the buyer is based. Note: This value is case sensitive. For example: &nbsp;&nbsp;X-EBAY-C-MARKETPLACE-ID = EBAY_US For a list of supported sites see, API Restrictions.
$place_proxy_bid_request = new \TNT\Ebay\Buy\OfferBeta\V1\Model\PlaceProxyBidRequest(); // \TNT\Ebay\Buy\OfferBeta\V1\Model\PlaceProxyBidRequest

try {
    $result = $apiInstance->placeProxyBid($item_id, $x_ebay_c_marketplace_id, $place_proxy_bid_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BiddingApi->placeProxyBid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_id** | **string**| The eBay RESTful identifier of an item you want to bid on. This ID is returned by the Browse and Feed API methods. RESTful Item ID Example: v1|2**********2|0 For more information about item ID for RESTful APIs, see the Legacy API compatibility section of the Buy APIs Overview. |
 **x_ebay_c_marketplace_id** | **string**| The ID of the eBay marketplace where the buyer is based. Note: This value is case sensitive. For example: &amp;nbsp;&amp;nbsp;X-EBAY-C-MARKETPLACE-ID &#x3D; EBAY_US For a list of supported sites see, API Restrictions. |
 **place_proxy_bid_request** | [**\TNT\Ebay\Buy\OfferBeta\V1\Model\PlaceProxyBidRequest**](../Model/PlaceProxyBidRequest.md)|  | [optional]

### Return type

[**\TNT\Ebay\Buy\OfferBeta\V1\Model\PlaceProxyBidResponse**](../Model/PlaceProxyBidResponse.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
