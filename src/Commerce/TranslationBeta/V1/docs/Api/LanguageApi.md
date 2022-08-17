# TNT\Ebay\Commerce\TranslationBeta\V1\LanguageApi

All URIs are relative to https://api.ebay.com/commerce/translation/v1_beta.

Method | HTTP request | Description
------------- | ------------- | -------------
[**translate()**](LanguageApi.md#translate) | **POST** /translate | 


## `translate()`

```php
translate($translate_request): \TNT\Ebay\Commerce\TranslationBeta\V1\Model\TranslateResponse
```



This method translates listing title and listing description text from one language into another. For a full list of supported language translations, see the table in the API Overview page.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Commerce\TranslationBeta\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Commerce\TranslationBeta\V1\Api\LanguageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$translate_request = new \TNT\Ebay\Commerce\TranslationBeta\V1\Model\TranslateRequest(); // \TNT\Ebay\Commerce\TranslationBeta\V1\Model\TranslateRequest

try {
    $result = $apiInstance->translate($translate_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LanguageApi->translate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **translate_request** | [**\TNT\Ebay\Commerce\TranslationBeta\V1\Model\TranslateRequest**](../Model/TranslateRequest.md)|  |

### Return type

[**\TNT\Ebay\Commerce\TranslationBeta\V1\Model\TranslateResponse**](../Model/TranslateResponse.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
