# TNT\Ebay\Sell\Marketing\V1\AdReportMetadataApi

All URIs are relative to https://api.ebay.com/sell/marketing/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getReportMetadata()**](AdReportMetadataApi.md#getReportMetadata) | **GET** /ad_report_metadata | 
[**getReportMetadataForReportType()**](AdReportMetadataApi.md#getReportMetadataForReportType) | **GET** /ad_report_metadata/{report_type} | 


## `getReportMetadata()`

```php
getReportMetadata(): \TNT\Ebay\Sell\Marketing\V1\Model\ReportMetadatas
```



This call retrieves information that details the fields used in each of the Promoted Listings reports. Use the returned information to configure the different types of Promoted Listings reports.</br></br>The request for this method does not use a payload or any URI parameters.<br/><br/><span class=\"tablenote\"><b>Note:</b> The reporting of some data related to sales and ad-fees may require a 72-hour (<b>maximum</b>) adjustment period which is often referred to as the <i>Reconciliation Period</i>. Such adjustment periods should, on average, be minimal. However, at any given time, the <b>payments</b> tab may be used to view those amounts that have actually been charged.</span>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Marketing\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Marketing\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Marketing\V1\Api\AdReportMetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getReportMetadata();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdReportMetadataApi->getReportMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\TNT\Ebay\Sell\Marketing\V1\Model\ReportMetadatas**](../Model/ReportMetadatas.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReportMetadataForReportType()`

```php
getReportMetadataForReportType($report_type): \TNT\Ebay\Sell\Marketing\V1\Model\ReportMetadata
```



This call retrieves metadata that details the fields used by a specific Promoted Listings report type. Use the <b>report_type</b> path parameter to indicate metadata to retrieve.<br/><br/>This method does not use a request payload.<br/><br/><span class=\"tablenote\"><b>Note:</b> The reporting of some data related to sales and ad-fees may require a 72-hour (<b>maximum</b>) adjustment period which is often referred to as the <i>Reconciliation Period</i>. Such adjustment periods should, on average, be minimal. However, at any given time, the <b>payments</b> tab may be used to view those amounts that have actually been charged.</span>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Marketing\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Marketing\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Marketing\V1\Api\AdReportMetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$report_type = 'report_type_example'; // string | The name of the report type whose metadata you want to retrieve.<br /><br /><span class=\"tablenote\"><b>Tip:</b> For details about available report types and their descriptions, refer to the <a href=\"/api-docs/sell/marketing/types/plr:ReportTypeEnum\">ReportTypeEnum</a>.</span>

try {
    $result = $apiInstance->getReportMetadataForReportType($report_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdReportMetadataApi->getReportMetadataForReportType: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **report_type** | **string**| The name of the report type whose metadata you want to retrieve.&lt;br /&gt;&lt;br /&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Tip:&lt;/b&gt; For details about available report types and their descriptions, refer to the &lt;a href&#x3D;\&quot;/api-docs/sell/marketing/types/plr:ReportTypeEnum\&quot;&gt;ReportTypeEnum&lt;/a&gt;.&lt;/span&gt; |

### Return type

[**\TNT\Ebay\Sell\Marketing\V1\Model\ReportMetadata**](../Model/ReportMetadata.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
