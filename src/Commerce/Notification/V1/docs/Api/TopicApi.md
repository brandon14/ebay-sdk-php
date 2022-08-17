# TNT\Ebay\Commerce\Notification\V1\TopicApi

All URIs are relative to https://api.ebay.com/commerce/notification/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getTopic()**](TopicApi.md#getTopic) | **GET** /topic/{topic_id} | 
[**getTopics()**](TopicApi.md#getTopics) | **GET** /topic | 


## `getTopic()`

```php
getTopic($topic_id): \TNT\Ebay\Commerce\Notification\V1\Model\Topic
```



This method allows applications to retrieve details for the specified topic. This information includes supported schema versions, formats, and other metadata for the topic.<br /><br />Applications can subscribe to any of the topics for a supported schema version and format, limited by the authorization scopes required to subscribe to the topic.<br /><br />A topic specifies the type of information to be received and the data types associated with an event. An event occurs in the eBay system, such as when a user requests deletion or revokes access for an application. An event is an instance of an event type (topic).<br /><br />Specify the topic to retrieve using the <b>topic_id</b> URI parameter.<br /><br /><span class=\"tablenote\"><b>Note:</b> Use the <a href=\"/api-docs/commerce/notification/resources/topic/methods/getTopics\">getTopics</a> method to find a topic if you do not know the topic ID.</span>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Commerce\Notification\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Commerce\Notification\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Commerce\Notification\V1\Api\TopicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$topic_id = 'topic_id_example'; // string | The ID of the topic for which to retrieve the details.

try {
    $result = $apiInstance->getTopic($topic_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TopicApi->getTopic: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **topic_id** | **string**| The ID of the topic for which to retrieve the details. |

### Return type

[**\TNT\Ebay\Commerce\Notification\V1\Model\Topic**](../Model/Topic.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTopics()`

```php
getTopics($limit, $continuation_token): \TNT\Ebay\Commerce\Notification\V1\Model\TopicSearchResponse
```



This method returns a paginated collection of all supported topics, along with the details for the topics. This information includes supported schema versions, formats, and other metadata for the topics.<br /><br />Applications can subscribe to any of the topics for a supported schema version and format, limited by the authorization scopes required to subscribe to the topic.<br /><br />A topic specifies the type of information to be received and the data types associated with an event. An event occurs in the eBay system, such as when a user requests deletion or revokes access for an application. An event is an instance of an event type (topic).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Commerce\Notification\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Commerce\Notification\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Commerce\Notification\V1\Api\TopicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 'limit_example'; // string | The maximum number of items to return per page from the result set. A result set is the complete set of results returned by the method. Range is from 10-100. <br /><br />If this parameter is omitted, the default value is used.<br/><br/><b> Default:</b> 20<br /><br /><b>Maximum:</b> 100 items per page
$continuation_token = 'continuation_token_example'; // string | The token used to access the next set of results.

try {
    $result = $apiInstance->getTopics($limit, $continuation_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TopicApi->getTopics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **string**| The maximum number of items to return per page from the result set. A result set is the complete set of results returned by the method. Range is from 10-100. &lt;br /&gt;&lt;br /&gt;If this parameter is omitted, the default value is used.&lt;br/&gt;&lt;br/&gt;&lt;b&gt; Default:&lt;/b&gt; 20&lt;br /&gt;&lt;br /&gt;&lt;b&gt;Maximum:&lt;/b&gt; 100 items per page | [optional]
 **continuation_token** | **string**| The token used to access the next set of results. | [optional]

### Return type

[**\TNT\Ebay\Commerce\Notification\V1\Model\TopicSearchResponse**](../Model/TopicSearchResponse.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
