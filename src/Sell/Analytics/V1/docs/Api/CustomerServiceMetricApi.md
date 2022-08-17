# TNT\Ebay\Sell\Analytics\V1\CustomerServiceMetricApi

All URIs are relative to https://api.ebay.com/sell/analytics/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCustomerServiceMetric()**](CustomerServiceMetricApi.md#getCustomerServiceMetric) | **GET** /customer_service_metric/{customer_service_metric_type}/{evaluation_type} | 


## `getCustomerServiceMetric()`

```php
getCustomerServiceMetric($customer_service_metric_type, $evaluation_marketplace_id, $evaluation_type): \TNT\Ebay\Sell\Analytics\V1\Model\GetCustomerServiceMetricResponse
```



Use this method to retrieve a seller's performance and rating for the customer service metric. Control the response from the getCustomerServiceMetric method using the following path and query parameters: customer_service_metric_type controls the type of customer service transactions evaluated for the metric rating. evaluation_type controls the period you want to review. evaluation_marketplace_id specifies the target marketplace for the evaluation. Currently, metric data is returned for only peer benchmarking. For more detail on the workings of peer benchmarking, see Service metrics policy.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Analytics\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Analytics\V1\Api\CustomerServiceMetricApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_service_metric_type = 'customer_service_metric_type_example'; // string | Use this path parameter to specify the type of customer service metrics and benchmark data you want returned for the seller. Supported types are: ITEM_NOT_AS_DESCRIBED ITEM_NOT_RECEIVED
$evaluation_marketplace_id = 'evaluation_marketplace_id_example'; // string | Use this query parameter to specify the Marketplace ID to evaluate for the customer service metrics and benchmark data. For the list of supported marketplaces, see Analytics API requirements and restrictions. For implementation help, refer to eBay API documentation at https://developer.ebay.com/devzone/rest/api-ref/analytics/types/MarketplaceIdEnum.html
$evaluation_type = 'evaluation_type_example'; // string | Use this path parameter to specify the type of the seller evaluation you want returned, either: CURRENT &ndash; A monthly evaluation that occurs on the 20th of every month. PROJECTED &ndash; A daily evaluation that provides a projection of how the seller is currently performing with regards to the upcoming evaluation period.

try {
    $result = $apiInstance->getCustomerServiceMetric($customer_service_metric_type, $evaluation_marketplace_id, $evaluation_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerServiceMetricApi->getCustomerServiceMetric: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_service_metric_type** | **string**| Use this path parameter to specify the type of customer service metrics and benchmark data you want returned for the seller. Supported types are: ITEM_NOT_AS_DESCRIBED ITEM_NOT_RECEIVED |
 **evaluation_marketplace_id** | **string**| Use this query parameter to specify the Marketplace ID to evaluate for the customer service metrics and benchmark data. For the list of supported marketplaces, see Analytics API requirements and restrictions. For implementation help, refer to eBay API documentation at https://developer.ebay.com/devzone/rest/api-ref/analytics/types/MarketplaceIdEnum.html |
 **evaluation_type** | **string**| Use this path parameter to specify the type of the seller evaluation you want returned, either: CURRENT &amp;ndash; A monthly evaluation that occurs on the 20th of every month. PROJECTED &amp;ndash; A daily evaluation that provides a projection of how the seller is currently performing with regards to the upcoming evaluation period. |

### Return type

[**\TNT\Ebay\Sell\Analytics\V1\Model\GetCustomerServiceMetricResponse**](../Model/GetCustomerServiceMetricResponse.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
