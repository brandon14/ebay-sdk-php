# TNT\Ebay\Sell\Feed\V1\OrderTaskApi

All URIs are relative to https://api.ebay.com/sell/feed/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createOrderTask()**](OrderTaskApi.md#createOrderTask) | **POST** /order_task | 
[**getOrderTask()**](OrderTaskApi.md#getOrderTask) | **GET** /order_task/{task_id} | 
[**getOrderTasks()**](OrderTaskApi.md#getOrderTasks) | **GET** /order_task | 


## `createOrderTask()`

```php
createOrderTask($create_order_task_request, $x_ebay_c_marketplace_id)
```



This method creates an order download task with filter criteria for the order report. When using this method, specify the <b> feedType</b>, <b> schemaVersion</b>, and <b> filterCriteria</b> for the report. The method returns the <b> location</b> response header containing the getOrderTask call URI to retrieve the order task you just created. The URL includes the eBay-assigned task ID, which you can use to reference the order task. <br /><br />To retrieve the status of the task, use the <b> getOrderTask</b> method to retrieve a single task ID or the <b>getOrderTasks</b> method to retrieve multiple order task IDs.<p> <span class=\"tablenote\"><strong>Note:</strong> The scope depends on the feed type. An error message results when an unsupported scope or feed type is specified.</span></p><p>The following list contains this method's authorization scope and its corresponding feed type:<ul><li>https://api.ebay.com/oauth/api_scope/sell.fulfillment: LMS_ORDER_REPORT</li></ul> </p><p>For details about how this method is used, see <a href=\"/api-docs/sell/static/feed/general-feed-tasks.html\">General feed types</a> in the Selling Integration Guide. <p> <span class=\"tablenote\"><strong>Note:</strong> At this time, the <strong>createOrderTask</strong> method only supports order creation date filters and not modified order date filters. Do not include the <strong>modifiedDateRange</strong> filter in your request payload.</span></p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Feed\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Feed\V1\Api\OrderTaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_order_task_request = new \TNT\Ebay\Sell\Feed\V1\Model\CreateOrderTaskRequest(); // \TNT\Ebay\Sell\Feed\V1\Model\CreateOrderTaskRequest | description not needed
$x_ebay_c_marketplace_id = 'x_ebay_c_marketplace_id_example'; // string | The ID of the eBay marketplace where the item is hosted. <p> <span class=\"tablenote\"><strong>Note:</strong> This value is case sensitive.</span></p><p>For example:</p><p><code>X-EBAY-C-MARKETPLACE-ID:EBAY_US</code></p><p>This identifies the eBay marketplace that applies to this task. See <a href=\"/api-docs/sell/feed/types/bas:MarketplaceIdEnum\">MarketplaceIdEnum</a>.</p>

try {
    $apiInstance->createOrderTask($create_order_task_request, $x_ebay_c_marketplace_id);
} catch (Exception $e) {
    echo 'Exception when calling OrderTaskApi->createOrderTask: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_order_task_request** | [**\TNT\Ebay\Sell\Feed\V1\Model\CreateOrderTaskRequest**](../Model/CreateOrderTaskRequest.md)| description not needed |
 **x_ebay_c_marketplace_id** | **string**| The ID of the eBay marketplace where the item is hosted. &lt;p&gt; &lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;strong&gt;Note:&lt;/strong&gt; This value is case sensitive.&lt;/span&gt;&lt;/p&gt;&lt;p&gt;For example:&lt;/p&gt;&lt;p&gt;&lt;code&gt;X-EBAY-C-MARKETPLACE-ID:EBAY_US&lt;/code&gt;&lt;/p&gt;&lt;p&gt;This identifies the eBay marketplace that applies to this task. See &lt;a href&#x3D;\&quot;/api-docs/sell/feed/types/bas:MarketplaceIdEnum\&quot;&gt;MarketplaceIdEnum&lt;/a&gt;.&lt;/p&gt; | [optional]

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

## `getOrderTask()`

```php
getOrderTask($task_id): \TNT\Ebay\Sell\Feed\V1\Model\OrderTask
```



This method retrieves the task details and status of the specified task. The input is <strong>task_id</strong>. <p>For details about how this method is used, see <a href=\"/api-docs/sell/static/orders/generating-and-retrieving-order-reports.html\">Working with Order Feeds</a> in the Selling Integration Guide.  </p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Feed\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Feed\V1\Api\OrderTaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_id = 'task_id_example'; // string | The ID of the task. This ID is generated when the task was created by the <b> createOrderTask</b> method.

try {
    $result = $apiInstance->getOrderTask($task_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderTaskApi->getOrderTask: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_id** | **string**| The ID of the task. This ID is generated when the task was created by the &lt;b&gt; createOrderTask&lt;/b&gt; method. |

### Return type

[**\TNT\Ebay\Sell\Feed\V1\Model\OrderTask**](../Model/OrderTask.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrderTasks()`

```php
getOrderTasks($date_range, $feed_type, $limit, $look_back_days, $offset, $schedule_id): \TNT\Ebay\Sell\Feed\V1\Model\OrderTaskCollection
```



This method returns the details and status for an array of order tasks based on a specified <strong>feed_type</strong> or <strong>schedule_id</strong>. Specifying both <strong>feed_type</strong> and <strong>schedule_id</strong> results in an error. Since schedules are based on feed types, you can specify a schedule (<strong>schedule_id</strong>) that returns the needed <strong>feed_type</strong>.<br /><br />If specifying the <strong>feed_type</strong>, limit which order tasks are returned by specifying filters such as the creation date range or period of time using <strong>look_back_days</strong>. <br /><br />If specifying a <strong>schedule_id</strong>, the schedule template (that the <strong>schedule_id</strong> is based on) determines which order tasks are returned (see <strong>schedule_id</strong> for additional information). Each <strong>schedule_id</strong> applies to one <strong>feed_type</strong>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Feed\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Feed\V1\Api\OrderTaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$date_range = 'date_range_example'; // string | The order tasks creation date range. This range is used to filter the results. The filtered results are filtered to include only tasks with a creation date that is equal to this date or is within specified range. Only orders less than 90 days old can be retrieved. Do not use with the <strong>look_back_days</strong> parameter. <br /><br /><b>Format: </b>UTC   <br /><br /> <b> For example: </b> <br /><br />Tasks within a range  <br /> <code>yyyy-MM-ddThh:mm:ss.SSSZ..yyyy-MM-ddThh:mm:ss.SSSZ </code> <br /><br /> Tasks created on September 8, 2019<br /> <code>2019-09-08T00:00:00.000Z..2019-09-09T00:00:00.000Z</code><br />
$feed_type = 'feed_type_example'; // string | The feed type associated with the task. The only presently supported value is <code>LMS_ORDER_REPORT</code>. Do not use with the <strong>schedule_id</strong> parameter. Since schedules are based on feed types, you can specify a schedule (<strong>schedule_id</strong>) that returns the needed <strong>feed_type</strong>.
$limit = 'limit_example'; // string | The maximum number of order tasks that can be returned on each page of the paginated response. Use this parameter in conjunction with the <strong>offset</strong> parameter to control the pagination of the output. <p> <span class=\"tablenote\"><strong>Note:</strong> This feature employs a zero-based list, where the first item in the list has an offset of <code>0</code>.</span></p><p>For example, if <strong>offset</strong> is set to 10 and <strong>limit</strong> is set to 10, the call retrieves order tasks 11 thru 20 from the result set.</p><p>If this parameter is omitted, the default value is used.</p><p><b>Default:</b> 10 <p><b>Maximum:</b> 500</p>
$look_back_days = 'look_back_days_example'; // string | The number of previous days in which to search for tasks. Do not use with the <strong>date_range</strong> parameter. If both <strong>date_range</strong> and <strong>look_back_days</strong> are omitted, this parameter's default value is used.  <br /><br /><b>Default: </b> 7 <br /><br /><b>Range: </b> 1-90 (inclusive)
$offset = 'offset_example'; // string | The number of order tasks to skip in the result set before returning the first order in the paginated response. <p>Combine <strong>offset</strong> with the <strong>limit</strong> query parameter to control the items returned in the response. For example, if you supply an <strong>offset</strong> of <code>0</code> and a <strong>limit</strong> of <code>10</code>, the first page of the response contains the first 10 items from the complete list of items retrieved by the call. If <strong>offset</strong> is <code>10</code> and <strong>limit</strong> is <code>20</code>, the first page of the response contains items 11-30 from the complete result set. If this query parameter is not set, the default value is used and the first page of records is returned.<br /><br /><b>Default: </b>0
$schedule_id = 'schedule_id_example'; // string | The schedule ID associated with the order task. A schedule periodically generates a report for the feed type specified by the schedule template (see <strong>scheduleTemplateId</strong> in <strong>createSchedule</strong>). Do not use with the <strong>feed_type</strong> parameter. Since schedules are based on feed types, you can specify a schedule (<strong>schedule_id</strong>) that returns the needed <strong>feed_type</strong>.

try {
    $result = $apiInstance->getOrderTasks($date_range, $feed_type, $limit, $look_back_days, $offset, $schedule_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderTaskApi->getOrderTasks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **date_range** | **string**| The order tasks creation date range. This range is used to filter the results. The filtered results are filtered to include only tasks with a creation date that is equal to this date or is within specified range. Only orders less than 90 days old can be retrieved. Do not use with the &lt;strong&gt;look_back_days&lt;/strong&gt; parameter. &lt;br /&gt;&lt;br /&gt;&lt;b&gt;Format: &lt;/b&gt;UTC   &lt;br /&gt;&lt;br /&gt; &lt;b&gt; For example: &lt;/b&gt; &lt;br /&gt;&lt;br /&gt;Tasks within a range  &lt;br /&gt; &lt;code&gt;yyyy-MM-ddThh:mm:ss.SSSZ..yyyy-MM-ddThh:mm:ss.SSSZ &lt;/code&gt; &lt;br /&gt;&lt;br /&gt; Tasks created on September 8, 2019&lt;br /&gt; &lt;code&gt;2019-09-08T00:00:00.000Z..2019-09-09T00:00:00.000Z&lt;/code&gt;&lt;br /&gt; | [optional]
 **feed_type** | **string**| The feed type associated with the task. The only presently supported value is &lt;code&gt;LMS_ORDER_REPORT&lt;/code&gt;. Do not use with the &lt;strong&gt;schedule_id&lt;/strong&gt; parameter. Since schedules are based on feed types, you can specify a schedule (&lt;strong&gt;schedule_id&lt;/strong&gt;) that returns the needed &lt;strong&gt;feed_type&lt;/strong&gt;. | [optional]
 **limit** | **string**| The maximum number of order tasks that can be returned on each page of the paginated response. Use this parameter in conjunction with the &lt;strong&gt;offset&lt;/strong&gt; parameter to control the pagination of the output. &lt;p&gt; &lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;strong&gt;Note:&lt;/strong&gt; This feature employs a zero-based list, where the first item in the list has an offset of &lt;code&gt;0&lt;/code&gt;.&lt;/span&gt;&lt;/p&gt;&lt;p&gt;For example, if &lt;strong&gt;offset&lt;/strong&gt; is set to 10 and &lt;strong&gt;limit&lt;/strong&gt; is set to 10, the call retrieves order tasks 11 thru 20 from the result set.&lt;/p&gt;&lt;p&gt;If this parameter is omitted, the default value is used.&lt;/p&gt;&lt;p&gt;&lt;b&gt;Default:&lt;/b&gt; 10 &lt;p&gt;&lt;b&gt;Maximum:&lt;/b&gt; 500&lt;/p&gt; | [optional]
 **look_back_days** | **string**| The number of previous days in which to search for tasks. Do not use with the &lt;strong&gt;date_range&lt;/strong&gt; parameter. If both &lt;strong&gt;date_range&lt;/strong&gt; and &lt;strong&gt;look_back_days&lt;/strong&gt; are omitted, this parameter&#39;s default value is used.  &lt;br /&gt;&lt;br /&gt;&lt;b&gt;Default: &lt;/b&gt; 7 &lt;br /&gt;&lt;br /&gt;&lt;b&gt;Range: &lt;/b&gt; 1-90 (inclusive) | [optional]
 **offset** | **string**| The number of order tasks to skip in the result set before returning the first order in the paginated response. &lt;p&gt;Combine &lt;strong&gt;offset&lt;/strong&gt; with the &lt;strong&gt;limit&lt;/strong&gt; query parameter to control the items returned in the response. For example, if you supply an &lt;strong&gt;offset&lt;/strong&gt; of &lt;code&gt;0&lt;/code&gt; and a &lt;strong&gt;limit&lt;/strong&gt; of &lt;code&gt;10&lt;/code&gt;, the first page of the response contains the first 10 items from the complete list of items retrieved by the call. If &lt;strong&gt;offset&lt;/strong&gt; is &lt;code&gt;10&lt;/code&gt; and &lt;strong&gt;limit&lt;/strong&gt; is &lt;code&gt;20&lt;/code&gt;, the first page of the response contains items 11-30 from the complete result set. If this query parameter is not set, the default value is used and the first page of records is returned.&lt;br /&gt;&lt;br /&gt;&lt;b&gt;Default: &lt;/b&gt;0 | [optional]
 **schedule_id** | **string**| The schedule ID associated with the order task. A schedule periodically generates a report for the feed type specified by the schedule template (see &lt;strong&gt;scheduleTemplateId&lt;/strong&gt; in &lt;strong&gt;createSchedule&lt;/strong&gt;). Do not use with the &lt;strong&gt;feed_type&lt;/strong&gt; parameter. Since schedules are based on feed types, you can specify a schedule (&lt;strong&gt;schedule_id&lt;/strong&gt;) that returns the needed &lt;strong&gt;feed_type&lt;/strong&gt;. | [optional]

### Return type

[**\TNT\Ebay\Sell\Feed\V1\Model\OrderTaskCollection**](../Model/OrderTaskCollection.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
