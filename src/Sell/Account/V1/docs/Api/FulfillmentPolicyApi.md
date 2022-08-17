# TNT\Ebay\Sell\Account\V1\FulfillmentPolicyApi

All URIs are relative to https://api.ebay.com/sell/account/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createFulfillmentPolicy()**](FulfillmentPolicyApi.md#createFulfillmentPolicy) | **POST** /fulfillment_policy/ | 
[**deleteFulfillmentPolicy()**](FulfillmentPolicyApi.md#deleteFulfillmentPolicy) | **DELETE** /fulfillment_policy/{fulfillmentPolicyId} | 
[**getFulfillmentPolicies()**](FulfillmentPolicyApi.md#getFulfillmentPolicies) | **GET** /fulfillment_policy | 
[**getFulfillmentPolicy()**](FulfillmentPolicyApi.md#getFulfillmentPolicy) | **GET** /fulfillment_policy/{fulfillmentPolicyId} | 
[**getFulfillmentPolicyByName()**](FulfillmentPolicyApi.md#getFulfillmentPolicyByName) | **GET** /fulfillment_policy/get_by_policy_name | 
[**updateFulfillmentPolicy()**](FulfillmentPolicyApi.md#updateFulfillmentPolicy) | **PUT** /fulfillment_policy/{fulfillmentPolicyId} | 


## `createFulfillmentPolicy()`

```php
createFulfillmentPolicy($fulfillment_policy_request): \TNT\Ebay\Sell\Account\V1\Model\SetFulfillmentPolicyResponse
```



This method creates a new fulfillment policy where the policy encapsulates seller's terms for fulfilling item purchases. Fulfillment policies include the shipment options that the seller offers to buyers.  <br/><br/>Each policy targets a specific eBay marketplace and a category group type, and you can create multiple policies for each combination. <br/><br/>A successful request returns the <b>getFulfillmentPolicy</b> URI to the new policy in the <b>Location</b> response header and the ID for the new policy is returned in the response payload.  <p class=\"tablenote\"><b>Tip:</b> For details on creating and using the business policies supported by the Account API, see <a href=\"/api-docs/sell/static/seller-accounts/business-policies.html\">eBay business policies</a>.</p>  <p><b>Using the eBay standard envelope service (eSE)</b></p>  <p>The eBay standard envelope service (eSE) is a domestic envelope service with tracking through eBay. This service applies to specific Trading Cards categories (not all categories are supported), and to Coins & Paper Money, Postcards, and Stamps. See <a href=\"/api-docs/sell/static/seller-accounts/using-the-ebay-standard-envelope-service.html\" target=\"_blank\">Using the eBay standard envelope (eSE) service</a>.</p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Account\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Account\V1\Api\FulfillmentPolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fulfillment_policy_request = new \TNT\Ebay\Sell\Account\V1\Model\FulfillmentPolicyRequest(); // \TNT\Ebay\Sell\Account\V1\Model\FulfillmentPolicyRequest | Request to create a seller account fulfillment policy.

try {
    $result = $apiInstance->createFulfillmentPolicy($fulfillment_policy_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentPolicyApi->createFulfillmentPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fulfillment_policy_request** | [**\TNT\Ebay\Sell\Account\V1\Model\FulfillmentPolicyRequest**](../Model/FulfillmentPolicyRequest.md)| Request to create a seller account fulfillment policy. |

### Return type

[**\TNT\Ebay\Sell\Account\V1\Model\SetFulfillmentPolicyResponse**](../Model/SetFulfillmentPolicyResponse.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteFulfillmentPolicy()`

```php
deleteFulfillmentPolicy($fulfillment_policy_id)
```



This method deletes a fulfillment policy. Supply the ID of the policy you want to delete in the <b>fulfillmentPolicyId</b> path parameter.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Account\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Account\V1\Api\FulfillmentPolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fulfillment_policy_id = 'fulfillment_policy_id_example'; // string | This path parameter specifies the ID of the fulfillment policy to delete.

try {
    $apiInstance->deleteFulfillmentPolicy($fulfillment_policy_id);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentPolicyApi->deleteFulfillmentPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fulfillment_policy_id** | **string**| This path parameter specifies the ID of the fulfillment policy to delete. |

### Return type

void (empty response body)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFulfillmentPolicies()`

```php
getFulfillmentPolicies($marketplace_id): \TNT\Ebay\Sell\Account\V1\Model\FulfillmentPolicyResponse
```



This method retrieves all the fulfillment policies configured for the marketplace you specify using the <code>marketplace_id</code> query parameter.  <br/><br/><b>Marketplaces and locales</b>  <br/><br/>Get the correct policies for a marketplace that supports multiple locales using the <code>Content-Language</code> request header. For example, get the policies for the French locale of the Canadian marketplace by specifying <code>fr-CA</code> for the <code>Content-Language</code> header. Likewise, target the Dutch locale of the Belgium marketplace by setting <code>Content-Language: nl-BE</code>. For details on header values, see <a href=\"/api-docs/static/rest-request-components.html#HTTP\" target=\"_blank\">HTTP request headers</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Account\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Account\V1\Api\FulfillmentPolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$marketplace_id = 'marketplace_id_example'; // string | This query parameter specifies the eBay marketplace of the policies you want to retrieve. For implementation help, refer to eBay API documentation at https://developer.ebay.com/api-docs/sell/account/types/ba:MarketplaceIdEnum

try {
    $result = $apiInstance->getFulfillmentPolicies($marketplace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentPolicyApi->getFulfillmentPolicies: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplace_id** | **string**| This query parameter specifies the eBay marketplace of the policies you want to retrieve. For implementation help, refer to eBay API documentation at https://developer.ebay.com/api-docs/sell/account/types/ba:MarketplaceIdEnum |

### Return type

[**\TNT\Ebay\Sell\Account\V1\Model\FulfillmentPolicyResponse**](../Model/FulfillmentPolicyResponse.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFulfillmentPolicy()`

```php
getFulfillmentPolicy($fulfillment_policy_id): \TNT\Ebay\Sell\Account\V1\Model\FulfillmentPolicy
```



This method retrieves the complete details of a fulfillment policy. Supply the ID of the policy you want to retrieve using the <b>fulfillmentPolicyId</b> path parameter.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Account\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Account\V1\Api\FulfillmentPolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fulfillment_policy_id = 'fulfillment_policy_id_example'; // string | This path parameter specifies the ID of the fulfillment policy you want to retrieve.

try {
    $result = $apiInstance->getFulfillmentPolicy($fulfillment_policy_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentPolicyApi->getFulfillmentPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fulfillment_policy_id** | **string**| This path parameter specifies the ID of the fulfillment policy you want to retrieve. |

### Return type

[**\TNT\Ebay\Sell\Account\V1\Model\FulfillmentPolicy**](../Model/FulfillmentPolicy.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFulfillmentPolicyByName()`

```php
getFulfillmentPolicyByName($marketplace_id, $name): \TNT\Ebay\Sell\Account\V1\Model\FulfillmentPolicy
```



This method retrieves the details for a specific fulfillment policy. In the request, supply both the policy <code>name</code> and its associated <code>marketplace_id</code> as query parameters.   <br/><br/><b>Marketplaces and locales</b>  <br/><br/>Get the correct policy for a marketplace that supports multiple locales using the <code>Content-Language</code> request header. For example, get a policy for the French locale of the Canadian marketplace by specifying <code>fr-CA</code> for the <code>Content-Language</code> header. Likewise, target the Dutch locale of the Belgium marketplace by setting <code>Content-Language: nl-BE</code>. For details on header values, see <a href=\"/api-docs/static/rest-request-components.html#HTTP\">HTTP request headers</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Account\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Account\V1\Api\FulfillmentPolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$marketplace_id = 'marketplace_id_example'; // string | This query parameter specifies the eBay marketplace of the policy you want to retrieve. For implementation help, refer to eBay API documentation at https://developer.ebay.com/api-docs/sell/account/types/ba:MarketplaceIdEnum
$name = 'name_example'; // string | This query parameter specifies the seller-defined name of the fulfillment policy you want to retrieve.

try {
    $result = $apiInstance->getFulfillmentPolicyByName($marketplace_id, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentPolicyApi->getFulfillmentPolicyByName: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplace_id** | **string**| This query parameter specifies the eBay marketplace of the policy you want to retrieve. For implementation help, refer to eBay API documentation at https://developer.ebay.com/api-docs/sell/account/types/ba:MarketplaceIdEnum |
 **name** | **string**| This query parameter specifies the seller-defined name of the fulfillment policy you want to retrieve. |

### Return type

[**\TNT\Ebay\Sell\Account\V1\Model\FulfillmentPolicy**](../Model/FulfillmentPolicy.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateFulfillmentPolicy()`

```php
updateFulfillmentPolicy($fulfillment_policy_id, $fulfillment_policy_request): \TNT\Ebay\Sell\Account\V1\Model\SetFulfillmentPolicyResponse
```



This method updates an existing fulfillment policy. Specify the policy you want to update using the <b>fulfillment_policy_id</b> path parameter. Supply a complete policy payload with the updates you want to make; this call overwrites the existing policy with the new details specified in the payload.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Account\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Account\V1\Api\FulfillmentPolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fulfillment_policy_id = 'fulfillment_policy_id_example'; // string | This path parameter specifies the ID of the fulfillment policy you want to update.
$fulfillment_policy_request = new \TNT\Ebay\Sell\Account\V1\Model\FulfillmentPolicyRequest(); // \TNT\Ebay\Sell\Account\V1\Model\FulfillmentPolicyRequest | Fulfillment policy request

try {
    $result = $apiInstance->updateFulfillmentPolicy($fulfillment_policy_id, $fulfillment_policy_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentPolicyApi->updateFulfillmentPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fulfillment_policy_id** | **string**| This path parameter specifies the ID of the fulfillment policy you want to update. |
 **fulfillment_policy_request** | [**\TNT\Ebay\Sell\Account\V1\Model\FulfillmentPolicyRequest**](../Model/FulfillmentPolicyRequest.md)| Fulfillment policy request |

### Return type

[**\TNT\Ebay\Sell\Account\V1\Model\SetFulfillmentPolicyResponse**](../Model/SetFulfillmentPolicyResponse.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
