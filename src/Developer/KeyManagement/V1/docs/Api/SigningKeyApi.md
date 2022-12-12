# TNT\Ebay\Developer\KeyManagement\V1\SigningKeyApi

All URIs are relative to https://apiz.ebay.com/developer/key_management/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createSigningKey()**](SigningKeyApi.md#createSigningKey) | **POST** /signing_key | 
[**getSigningKey()**](SigningKeyApi.md#getSigningKey) | **GET** /signing_key/{signing_key_id} | 
[**getSigningKeys()**](SigningKeyApi.md#getSigningKeys) | **GET** /signing_key | 


## `createSigningKey()`

```php
createSigningKey($create_signing_key_request): \TNT\Ebay\Developer\KeyManagement\V1\Model\SigningKey
```



This method creates keypairs using one of the following ciphers:<ul><li>ED25519 (Edwards Curve)</li><li>RSA</li></ul><span class=\"tablenote\"><b>Note:</b> The recommended signature cipher is <b>ED25519</b> (Edwards Curve) since it uses much shorter keys and therefore decreases the header size. However, for development frameworks that do not support ED25519, RSA is also supported.</span><br/>Following a successful completion, the following keys are returned:<ul><li>Private Key</li><li>Public Key</li><li>Public Key as JWE</li></ul>Once keypairs are created, developers are <b>strongly advised</b> to create and store a local copy of each keypair for future reference. Although the <b>Public Key</b>, <b>Public Key as JWE</b>, and metadata for keypairs may be retrieved by the <code>getSigningKey</code> and <code>getSigningKeys</code> methods, in order to further ensure the security of confidential client information, eBay does not store the <b>Private Key</b> value in any system. If a developer loses their <b>Private Key</b> they must generate new keypairs using the <code>createSigningKey</code> method.<br/><span class=\"tablenote\"><b>Note:</b> For additional information about using keypairs, refer to <a href= \"/develop/guides/digital-signatures-for-apis \" target= \"_blank \">Digital Signatures for APIs</a>.</span>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Developer\KeyManagement\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Developer\KeyManagement\V1\Api\SigningKeyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_signing_key_request = new \TNT\Ebay\Developer\KeyManagement\V1\Model\CreateSigningKeyRequest(); // \TNT\Ebay\Developer\KeyManagement\V1\Model\CreateSigningKeyRequest

try {
    $result = $apiInstance->createSigningKey($create_signing_key_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SigningKeyApi->createSigningKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_signing_key_request** | [**\TNT\Ebay\Developer\KeyManagement\V1\Model\CreateSigningKeyRequest**](../Model/CreateSigningKeyRequest.md)|  | [optional]

### Return type

[**\TNT\Ebay\Developer\KeyManagement\V1\Model\SigningKey**](../Model/SigningKey.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSigningKey()`

```php
getSigningKey($signing_key_id): \TNT\Ebay\Developer\KeyManagement\V1\Model\SigningKey
```



This method returns the <b>Public Key</b>, <b>Public Key as JWE</b>, and metadata for a specified <code>signingKeyId</code> associated with the application key making the call.<br/><br/><span class=\"tablenote\"><b>Note:</b> It is important to note that the <code>privateKey</code> value is <b>not</b> returned. In order to further ensure the security of confidential client information, eBay does <b>not</b> store the <code>privateKey</code> value in any system. If a developer loses their <code>privateKey</code> they must generate new keypairs using the <code>createSigningKey</code> method.</span>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Developer\KeyManagement\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Developer\KeyManagement\V1\Api\SigningKeyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$signing_key_id = 'signing_key_id_example'; // string | The system-generated eBay ID of the keypairs being requested.

try {
    $result = $apiInstance->getSigningKey($signing_key_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SigningKeyApi->getSigningKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **signing_key_id** | **string**| The system-generated eBay ID of the keypairs being requested. |

### Return type

[**\TNT\Ebay\Developer\KeyManagement\V1\Model\SigningKey**](../Model/SigningKey.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSigningKeys()`

```php
getSigningKeys(): \TNT\Ebay\Developer\KeyManagement\V1\Model\QuerySigningKeysResponse
```



This method returns the <b>Public Key</b>, <b>Public Key as JWE</b>, and metadata for all keypairs associated with the application key making the call.<br/><br/><span class=\"tablenote\"><b>Note:</b> It is important to note that <code>privateKey</code> values are <b>not</b> returned. In order to further ensure the security of confidential client information, eBay does <b>not</b> store <code>privateKey</code> values in any system. If a developer loses their <code>privateKey</code> they must generate new keypairs set using the <code>createSigningKey</code> method.</span>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Developer\KeyManagement\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Developer\KeyManagement\V1\Api\SigningKeyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getSigningKeys();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SigningKeyApi->getSigningKeys: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\TNT\Ebay\Developer\KeyManagement\V1\Model\QuerySigningKeysResponse**](../Model/QuerySigningKeysResponse.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
