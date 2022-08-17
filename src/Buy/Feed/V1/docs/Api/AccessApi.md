# TNT\Ebay\Buy\Feed\V1\AccessApi

All URIs are relative to https://api.ebay.com/buy/feed/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAccess()**](AccessApi.md#getAccess) | **GET** /access | 


## `getAccess()`

```php
getAccess(): \TNT\Ebay\Buy\Feed\V1\Model\ApplicationAccess
```



The getAccess method retrieves the access rules specific to the application; for example, the feed types to which the application has permissions. An application may be constrained to certain marketplaces, and to specific L1 categories within those marketplaces. You can use this information to apply filters to the getFiles method when obtaining details on accessible downloadable files.<h3><b>Restrictions </b></h3>                <p>For a list of supported sites and other restrictions, see <a href=\"/api-docs/buy/feed/overview.html#API\">API Restrictions</a>.</p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Buy\Feed\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Buy\Feed\V1\Api\AccessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAccess();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessApi->getAccess: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\TNT\Ebay\Buy\Feed\V1\Model\ApplicationAccess**](../Model/ApplicationAccess.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
