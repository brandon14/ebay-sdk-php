# TNT\Ebay\Developer\AnalyticsBeta\V1\UserRateLimitApi

All URIs are relative to https://api.ebay.com/developer/analytics/v1_beta.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getUserRateLimits()**](UserRateLimitApi.md#getUserRateLimits) | **GET** /user_rate_limit/ | 


## `getUserRateLimits()`

```php
getUserRateLimits($api_context, $api_name): \TNT\Ebay\Developer\AnalyticsBeta\V1\Model\RateLimitsResponse
```



This method retrieves the call limit and utilization data for an application user. The call-limit data is returned for all RESTful APIs and resources that limit calls on a per-user basis. The response from getUserRateLimits includes a list of the applicable resources and the &quot;call limit&quot;, or quota, that is set for each resource. In addition to quota information, the response also includes the number of remaining calls available before the limit is reached, the time remaining before the quota resets, and the length of the &quot;time window&quot; to which the quota applies. By default, this method returns utilization data for all RESTful API resources that limit request access by user. Use the api_name and api_context query parameters to filter the response to only the desired APIs. For more on call limits, see Compatible Application Check.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Developer\AnalyticsBeta\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Developer\AnalyticsBeta\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Developer\AnalyticsBeta\V1\Api\UserRateLimitApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$api_context = 'api_context_example'; // string | This optional query parameter filters the result to include only the specified API context. Acceptable values for the parameter are buy, sell, commerce, and developer.
$api_name = 'api_name_example'; // string | This optional query parameter filters the result to include only the APIs specified. Example values are browse for the Buy APIs context, inventory for the Sell APIs context, and taxonomy for the Commerce APIs context.

try {
    $result = $apiInstance->getUserRateLimits($api_context, $api_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserRateLimitApi->getUserRateLimits: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_context** | **string**| This optional query parameter filters the result to include only the specified API context. Acceptable values for the parameter are buy, sell, commerce, and developer. | [optional]
 **api_name** | **string**| This optional query parameter filters the result to include only the APIs specified. Example values are browse for the Buy APIs context, inventory for the Sell APIs context, and taxonomy for the Commerce APIs context. | [optional]

### Return type

[**\TNT\Ebay\Developer\AnalyticsBeta\V1\Model\RateLimitsResponse**](../Model/RateLimitsResponse.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
