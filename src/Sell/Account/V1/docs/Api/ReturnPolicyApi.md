# TNT\Ebay\Sell\Account\V1\ReturnPolicyApi

All URIs are relative to https://api.ebay.com/sell/account/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createReturnPolicy()**](ReturnPolicyApi.md#createReturnPolicy) | **POST** /return_policy | 
[**deleteReturnPolicy()**](ReturnPolicyApi.md#deleteReturnPolicy) | **DELETE** /return_policy/{return_policy_id} | 
[**getReturnPolicies()**](ReturnPolicyApi.md#getReturnPolicies) | **GET** /return_policy | 
[**getReturnPolicy()**](ReturnPolicyApi.md#getReturnPolicy) | **GET** /return_policy/{return_policy_id} | 
[**getReturnPolicyByName()**](ReturnPolicyApi.md#getReturnPolicyByName) | **GET** /return_policy/get_by_policy_name | 
[**updateReturnPolicy()**](ReturnPolicyApi.md#updateReturnPolicy) | **PUT** /return_policy/{return_policy_id} | 


## `createReturnPolicy()`

```php
createReturnPolicy($return_policy_request): \TNT\Ebay\Sell\Account\V1\Model\SetReturnPolicyResponse
```



This method creates a new return policy where the policy encapsulates seller's terms for returning items.  <br/><br/>Each policy targets a specific marketplace, and you can create multiple policies for each marketplace. Return policies are not applicable to motor-vehicle listings.<br/><br/>A successful request returns the <b>getReturnPolicy</b> URI to the new policy in the <b>Location</b> response header and the ID for the new policy is returned in the response payload.  <p class=\"tablenote\"><b>Tip:</b> For details on creating and using the business policies supported by the Account API, see <a href=\"/api-docs/sell/static/seller-accounts/business-policies.html\">eBay business policies</a>.</p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Account\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Account\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Account\V1\Api\ReturnPolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$return_policy_request = new \TNT\Ebay\Sell\Account\V1\Model\ReturnPolicyRequest(); // \TNT\Ebay\Sell\Account\V1\Model\ReturnPolicyRequest | Return policy request

try {
    $result = $apiInstance->createReturnPolicy($return_policy_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnPolicyApi->createReturnPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **return_policy_request** | [**\TNT\Ebay\Sell\Account\V1\Model\ReturnPolicyRequest**](../Model/ReturnPolicyRequest.md)| Return policy request |

### Return type

[**\TNT\Ebay\Sell\Account\V1\Model\SetReturnPolicyResponse**](../Model/SetReturnPolicyResponse.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteReturnPolicy()`

```php
deleteReturnPolicy($return_policy_id)
```



This method deletes a return policy. Supply the ID of the policy you want to delete in the <b>returnPolicyId</b> path parameter.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Account\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Account\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Account\V1\Api\ReturnPolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$return_policy_id = 'return_policy_id_example'; // string | This path parameter specifies the ID of the return policy you want to delete.

try {
    $apiInstance->deleteReturnPolicy($return_policy_id);
} catch (Exception $e) {
    echo 'Exception when calling ReturnPolicyApi->deleteReturnPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **return_policy_id** | **string**| This path parameter specifies the ID of the return policy you want to delete. |

### Return type

void (empty response body)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReturnPolicies()`

```php
getReturnPolicies($marketplace_id): \TNT\Ebay\Sell\Account\V1\Model\ReturnPolicyResponse
```



This method retrieves all the return policies configured for the marketplace you specify using the <code>marketplace_id</code> query parameter.  <br/><br/><b>Marketplaces and locales</b>  <br/><br/>Get the correct policies for a marketplace that supports multiple locales using the <code>Content-Language</code> request header. For example, get the policies for the French locale of the Canadian marketplace by specifying <code>fr-CA</code> for the <code>Content-Language</code> header. Likewise, target the Dutch locale of the Belgium marketplace by setting <code>Content-Language: nl-BE</code>. For details on header values, see <a href=\"/api-docs/static/rest-request-components.html#HTTP\" target=\"_blank\">HTTP request headers</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Account\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Account\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Account\V1\Api\ReturnPolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$marketplace_id = 'marketplace_id_example'; // string | This query parameter specifies the ID of the eBay marketplace of the policy you want to retrieve. For implementation help, refer to eBay API documentation at https://developer.ebay.com/api-docs/sell/account/types/ba:MarketplaceIdEnum

try {
    $result = $apiInstance->getReturnPolicies($marketplace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnPolicyApi->getReturnPolicies: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplace_id** | **string**| This query parameter specifies the ID of the eBay marketplace of the policy you want to retrieve. For implementation help, refer to eBay API documentation at https://developer.ebay.com/api-docs/sell/account/types/ba:MarketplaceIdEnum |

### Return type

[**\TNT\Ebay\Sell\Account\V1\Model\ReturnPolicyResponse**](../Model/ReturnPolicyResponse.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReturnPolicy()`

```php
getReturnPolicy($return_policy_id): \TNT\Ebay\Sell\Account\V1\Model\ReturnPolicy
```



This method retrieves the complete details of the return policy specified by the <b>returnPolicyId</b> path parameter.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Account\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Account\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Account\V1\Api\ReturnPolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$return_policy_id = 'return_policy_id_example'; // string | This path parameter specifies the of the return policy you want to retrieve.

try {
    $result = $apiInstance->getReturnPolicy($return_policy_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnPolicyApi->getReturnPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **return_policy_id** | **string**| This path parameter specifies the of the return policy you want to retrieve. |

### Return type

[**\TNT\Ebay\Sell\Account\V1\Model\ReturnPolicy**](../Model/ReturnPolicy.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReturnPolicyByName()`

```php
getReturnPolicyByName($marketplace_id, $name): \TNT\Ebay\Sell\Account\V1\Model\ReturnPolicy
```



This method retrieves the details of a specific return policy. Supply both the policy <code>name</code> and its associated <code>marketplace_id</code> in the request query parameters.   <br/><br/><b>Marketplaces and locales</b>  <br/><br/>Get the correct policy for a marketplace that supports multiple locales using the <code>Content-Language</code> request header. For example, get a policy for the French locale of the Canadian marketplace by specifying <code>fr-CA</code> for the <code>Content-Language</code> header. Likewise, target the Dutch locale of the Belgium marketplace by setting <code>Content-Language: nl-BE</code>. For details on header values, see <a href=\"/api-docs/static/rest-request-components.html#HTTP\">HTTP request headers</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Account\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Account\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Account\V1\Api\ReturnPolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$marketplace_id = 'marketplace_id_example'; // string | This query parameter specifies the ID of the eBay marketplace of the policy you want to retrieve. For implementation help, refer to eBay API documentation at https://developer.ebay.com/api-docs/sell/account/types/ba:MarketplaceIdEnum
$name = 'name_example'; // string | This query parameter specifies the seller-defined name of the return policy you want to retrieve.

try {
    $result = $apiInstance->getReturnPolicyByName($marketplace_id, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnPolicyApi->getReturnPolicyByName: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplace_id** | **string**| This query parameter specifies the ID of the eBay marketplace of the policy you want to retrieve. For implementation help, refer to eBay API documentation at https://developer.ebay.com/api-docs/sell/account/types/ba:MarketplaceIdEnum |
 **name** | **string**| This query parameter specifies the seller-defined name of the return policy you want to retrieve. |

### Return type

[**\TNT\Ebay\Sell\Account\V1\Model\ReturnPolicy**](../Model/ReturnPolicy.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateReturnPolicy()`

```php
updateReturnPolicy($return_policy_id, $return_policy_request): \TNT\Ebay\Sell\Account\V1\Model\SetReturnPolicyResponse
```



This method updates an existing return policy. Specify the policy you want to update using the <b>return_policy_id</b> path parameter. Supply a complete policy payload with the updates you want to make; this call overwrites the existing policy with the new details specified in the payload.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Account\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Account\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Account\V1\Api\ReturnPolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$return_policy_id = 'return_policy_id_example'; // string | This path parameter specifies the ID of the return policy you want to update.
$return_policy_request = new \TNT\Ebay\Sell\Account\V1\Model\ReturnPolicyRequest(); // \TNT\Ebay\Sell\Account\V1\Model\ReturnPolicyRequest | Container for a return policy request.

try {
    $result = $apiInstance->updateReturnPolicy($return_policy_id, $return_policy_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnPolicyApi->updateReturnPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **return_policy_id** | **string**| This path parameter specifies the ID of the return policy you want to update. |
 **return_policy_request** | [**\TNT\Ebay\Sell\Account\V1\Model\ReturnPolicyRequest**](../Model/ReturnPolicyRequest.md)| Container for a return policy request. |

### Return type

[**\TNT\Ebay\Sell\Account\V1\Model\SetReturnPolicyResponse**](../Model/SetReturnPolicyResponse.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
