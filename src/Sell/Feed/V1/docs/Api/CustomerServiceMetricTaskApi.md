# TNT\Ebay\Sell\Feed\V1\CustomerServiceMetricTaskApi

All URIs are relative to https://api.ebay.com/sell/feed/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCustomerServiceMetricTask()**](CustomerServiceMetricTaskApi.md#createCustomerServiceMetricTask) | **POST** /customer_service_metric_task | 
[**getCustomerServiceMetricTask()**](CustomerServiceMetricTaskApi.md#getCustomerServiceMetricTask) | **GET** /customer_service_metric_task/{task_id} | 
[**getCustomerServiceMetricTasks()**](CustomerServiceMetricTaskApi.md#getCustomerServiceMetricTasks) | **GET** /customer_service_metric_task | 


## `createCustomerServiceMetricTask()`

```php
createCustomerServiceMetricTask($accept_language, $create_service_metrics_task_request)
```



<p>Use this method to create a customer service metrics download task with filter criteria for the customer service metrics report. When using this method, specify the <strong>feedType</strong> and <strong>filterCriteria</strong> including both <strong>evaluationMarketplaceId</strong> and <strong>customerServiceMetricType</strong> for the report. The method returns the location response header containing the call URI to use with <strong>getCustomerServiceMetricTask</strong> to retrieve status and details on the task.</p><p>Only CURRENT Customer Service Metrics reports can be generated with the Sell Feed API. PROJECTED reports are not supported at this time. See the <a href=\"/api-docs/sell/analytics/resources/customer_service_metric/methods/getCustomerServiceMetric\">getCustomerServiceMetric</a> method document in the Analytics API for more information about these two types of reports.</p><p><span class=\"tablenote\"><strong>Note:</strong> Before calling this API, retrieve the summary of the seller's performance and rating for the customer service metric by calling <strong>getCustomerServiceMetric</strong> (part of the <a href=\"/api-docs/sell/analytics/resources/methods\">Analytics API</a>). You can then populate the create task request fields with the values from the response. This technique eliminates failed tasks that request a report for a <strong>customerServiceMetricType</strong> and <strong>evaluationMarketplaceId</strong> that are without evaluation.</span></p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Feed\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Feed\V1\Api\CustomerServiceMetricTaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept_language = 'accept_language_example'; // string | Use this header to specify the natural language in which the authenticated user desires the response.
$create_service_metrics_task_request = new \TNT\Ebay\Sell\Feed\V1\Model\CreateServiceMetricsTaskRequest(); // \TNT\Ebay\Sell\Feed\V1\Model\CreateServiceMetricsTaskRequest | Request payload containing version, feedType, and optional filterCriteria.

try {
    $apiInstance->createCustomerServiceMetricTask($accept_language, $create_service_metrics_task_request);
} catch (Exception $e) {
    echo 'Exception when calling CustomerServiceMetricTaskApi->createCustomerServiceMetricTask: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept_language** | **string**| Use this header to specify the natural language in which the authenticated user desires the response. |
 **create_service_metrics_task_request** | [**\TNT\Ebay\Sell\Feed\V1\Model\CreateServiceMetricsTaskRequest**](../Model/CreateServiceMetricsTaskRequest.md)| Request payload containing version, feedType, and optional filterCriteria. |

### Return type

void (empty response body)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCustomerServiceMetricTask()`

```php
getCustomerServiceMetricTask($task_id): \TNT\Ebay\Sell\Feed\V1\Model\ServiceMetricsTask
```



<p>Use this method to retrieve customer service metric task details for the specified task. The input is <strong>task_id</strong>.</p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Feed\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Feed\V1\Api\CustomerServiceMetricTaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_id = 'task_id_example'; // string | Use this path parameter to specify the task ID value for the customer service metric task to retrieve.

try {
    $result = $apiInstance->getCustomerServiceMetricTask($task_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerServiceMetricTaskApi->getCustomerServiceMetricTask: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_id** | **string**| Use this path parameter to specify the task ID value for the customer service metric task to retrieve. |

### Return type

[**\TNT\Ebay\Sell\Feed\V1\Model\ServiceMetricsTask**](../Model/ServiceMetricsTask.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCustomerServiceMetricTasks()`

```php
getCustomerServiceMetricTasks($date_range, $feed_type, $limit, $look_back_days, $offset): \TNT\Ebay\Sell\Feed\V1\Model\CustomerServiceMetricTaskCollection
```



Use this method to return an array of customer service metric tasks. You can limit the tasks returned by specifying a date range. </p> <p> <span class=\"tablenote\"><strong>Note:</strong> You can pass in either the <code>look_back_days </code>or<code> date_range</code>, but not both.</span></p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Feed\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Feed\V1\Api\CustomerServiceMetricTaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$date_range = 'date_range_example'; // string | The task creation date range. The results are filtered to include only tasks with a creation date that is equal to the dates specified or is within the specified range. Do not use with the <code>look_back_days</code> parameter.<p><strong>Format: </strong>UTC</p><p>For example, tasks within a range: </p><p><code>yyyy-MM-ddThh:mm:ss.SSSZ..yyyy-MM-ddThh:mm:ss.SSSZ </code></p><p>Tasks created on March 8, 2020</p><p><code>2020-03-08T00:00.00.000Z..2020-03-09T00:00:00.000Z</code></p><p><b>Maximum: </b>90 days</p>
$feed_type = 'feed_type_example'; // string | The feed type associated with the task. The only presently supported value is <code>CUSTOMER_SERVICE_METRICS_REPORT</code>.
$limit = 'limit_example'; // string | The number of customer service metric tasks to return per page of the result set. Use this parameter in conjunction with the offset parameter to control the pagination of the output. <p>For example, if <strong>offset</strong> is set to 10 and <strong>limit</strong> is set to 10, the call retrieves tasks 11 thru 20 from the result set.</p><p>If this parameter is omitted, the default value is used.</p><p> <span class=\"tablenote\"><strong>Note:</strong>This feature employs a zero-based list, where the first item in the list has an offset of <code>0</code>.</span></p><p><b>Default:</b> 10 <p><b>Maximum:</b> 500</p>
$look_back_days = 'look_back_days_example'; // string | The number of previous days in which to search for tasks. Do not use with the <code>date_range</code> parameter. If both <code>date_range</code> and <code>look_back_days</code> are omitted, this parameter's default value is used. <p><b>Default value:</b> 7</p><p><b>Range:</b> 1-90 (inclusive)</p>
$offset = 'offset_example'; // string | The number of customer service metric tasks to skip in the result set before returning the first task in the paginated response. <p>Combine <strong>offset</strong> with the <strong>limit</strong> query parameter to control the items returned in the response. For example, if you supply an <strong>offset</strong> of <code>0</code> and a <strong>limit</strong> of <code>10</code>, the first page of the response contains the first 10 items from the complete list of items retrieved by the call. If <strong>offset</strong> is <code>10</code> and <strong>limit</strong> is <code>20</code>, the first page of the response contains items 11-30 from the complete result set. <br /><br /><b>Default: </b>0

try {
    $result = $apiInstance->getCustomerServiceMetricTasks($date_range, $feed_type, $limit, $look_back_days, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerServiceMetricTaskApi->getCustomerServiceMetricTasks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **date_range** | **string**| The task creation date range. The results are filtered to include only tasks with a creation date that is equal to the dates specified or is within the specified range. Do not use with the &lt;code&gt;look_back_days&lt;/code&gt; parameter.&lt;p&gt;&lt;strong&gt;Format: &lt;/strong&gt;UTC&lt;/p&gt;&lt;p&gt;For example, tasks within a range: &lt;/p&gt;&lt;p&gt;&lt;code&gt;yyyy-MM-ddThh:mm:ss.SSSZ..yyyy-MM-ddThh:mm:ss.SSSZ &lt;/code&gt;&lt;/p&gt;&lt;p&gt;Tasks created on March 8, 2020&lt;/p&gt;&lt;p&gt;&lt;code&gt;2020-03-08T00:00.00.000Z..2020-03-09T00:00:00.000Z&lt;/code&gt;&lt;/p&gt;&lt;p&gt;&lt;b&gt;Maximum: &lt;/b&gt;90 days&lt;/p&gt; | [optional]
 **feed_type** | **string**| The feed type associated with the task. The only presently supported value is &lt;code&gt;CUSTOMER_SERVICE_METRICS_REPORT&lt;/code&gt;. | [optional]
 **limit** | **string**| The number of customer service metric tasks to return per page of the result set. Use this parameter in conjunction with the offset parameter to control the pagination of the output. &lt;p&gt;For example, if &lt;strong&gt;offset&lt;/strong&gt; is set to 10 and &lt;strong&gt;limit&lt;/strong&gt; is set to 10, the call retrieves tasks 11 thru 20 from the result set.&lt;/p&gt;&lt;p&gt;If this parameter is omitted, the default value is used.&lt;/p&gt;&lt;p&gt; &lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;strong&gt;Note:&lt;/strong&gt;This feature employs a zero-based list, where the first item in the list has an offset of &lt;code&gt;0&lt;/code&gt;.&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;b&gt;Default:&lt;/b&gt; 10 &lt;p&gt;&lt;b&gt;Maximum:&lt;/b&gt; 500&lt;/p&gt; | [optional]
 **look_back_days** | **string**| The number of previous days in which to search for tasks. Do not use with the &lt;code&gt;date_range&lt;/code&gt; parameter. If both &lt;code&gt;date_range&lt;/code&gt; and &lt;code&gt;look_back_days&lt;/code&gt; are omitted, this parameter&#39;s default value is used. &lt;p&gt;&lt;b&gt;Default value:&lt;/b&gt; 7&lt;/p&gt;&lt;p&gt;&lt;b&gt;Range:&lt;/b&gt; 1-90 (inclusive)&lt;/p&gt; | [optional]
 **offset** | **string**| The number of customer service metric tasks to skip in the result set before returning the first task in the paginated response. &lt;p&gt;Combine &lt;strong&gt;offset&lt;/strong&gt; with the &lt;strong&gt;limit&lt;/strong&gt; query parameter to control the items returned in the response. For example, if you supply an &lt;strong&gt;offset&lt;/strong&gt; of &lt;code&gt;0&lt;/code&gt; and a &lt;strong&gt;limit&lt;/strong&gt; of &lt;code&gt;10&lt;/code&gt;, the first page of the response contains the first 10 items from the complete list of items retrieved by the call. If &lt;strong&gt;offset&lt;/strong&gt; is &lt;code&gt;10&lt;/code&gt; and &lt;strong&gt;limit&lt;/strong&gt; is &lt;code&gt;20&lt;/code&gt;, the first page of the response contains items 11-30 from the complete result set. &lt;br /&gt;&lt;br /&gt;&lt;b&gt;Default: &lt;/b&gt;0 | [optional]

### Return type

[**\TNT\Ebay\Sell\Feed\V1\Model\CustomerServiceMetricTaskCollection**](../Model/CustomerServiceMetricTaskCollection.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
