# TNT\Ebay\Buy\Deal\V1\EventItemApi

All URIs are relative to https://api.ebay.com/buy/deal/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getEventItems()**](EventItemApi.md#getEventItems) | **GET** /event_item | 


## `getEventItems()`

```php
getEventItems($event_ids, $x_ebay_c_marketplace_id, $category_ids, $delivery_country, $limit, $offset): \TNT\Ebay\Buy\Deal\V1\Model\EventItemSearchResponse
```



This method returns a paginated set of event items. The result set contains all event items associated with the specified search criteria and marketplace ID. Request headers This method uses the X-EBAY-C-ENDUSERCTX request header to support revenue sharing for eBay Partner Networks and to improve the accuracy of shipping and delivery time estimations. For details see, Request headers in the Buying Integration Guide. Restrictions This method can return a maximum of 10,000 items. For a list of supported sites and other restrictions, see API Restrictions. eBay Partner Network: In order to receive a commission for your sales, you must use the URL returned in the itemAffiliateWebUrl field to forward your buyer to the ebay.com site.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Buy\Deal\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Buy\Deal\V1\Api\EventItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_ids = 'event_ids_example'; // string | The unique identifiers for the eBay events. Maximum Value: 1
$x_ebay_c_marketplace_id = 'x_ebay_c_marketplace_id_example'; // string | A header used to specify the eBay marketplace ID.
$category_ids = 'category_ids_example'; // string | The unique identifier of the eBay category for the search. Maximum Value: 1
$delivery_country = 'delivery_country_example'; // string | A filter for items that can be shipped to the specified country.
$limit = 'limit_example'; // string | The maximum number of items, from the current result set, returned on a single page. Default: 20
$offset = 'offset_example'; // string | The number of items that will be skipped in the result set. This is used with the limit field to control the pagination of the output. For example, if the offset is set to 0 and the limit is set to 10, the method will retrieve items 1 through 10 from the list of items returned. If the offset is set to 10 and the limit is set to 10, the method will retrieve items 11 through 20 from the list of items returned. Default: 0

try {
    $result = $apiInstance->getEventItems($event_ids, $x_ebay_c_marketplace_id, $category_ids, $delivery_country, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventItemApi->getEventItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **event_ids** | **string**| The unique identifiers for the eBay events. Maximum Value: 1 |
 **x_ebay_c_marketplace_id** | **string**| A header used to specify the eBay marketplace ID. |
 **category_ids** | **string**| The unique identifier of the eBay category for the search. Maximum Value: 1 | [optional]
 **delivery_country** | **string**| A filter for items that can be shipped to the specified country. | [optional]
 **limit** | **string**| The maximum number of items, from the current result set, returned on a single page. Default: 20 | [optional]
 **offset** | **string**| The number of items that will be skipped in the result set. This is used with the limit field to control the pagination of the output. For example, if the offset is set to 0 and the limit is set to 10, the method will retrieve items 1 through 10 from the list of items returned. If the offset is set to 10 and the limit is set to 10, the method will retrieve items 11 through 20 from the list of items returned. Default: 0 | [optional]

### Return type

[**\TNT\Ebay\Buy\Deal\V1\Model\EventItemSearchResponse**](../Model/EventItemSearchResponse.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
