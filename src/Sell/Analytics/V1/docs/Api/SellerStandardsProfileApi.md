# TNT\Ebay\Sell\Analytics\V1\SellerStandardsProfileApi

All URIs are relative to https://api.ebay.com/sell/analytics/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**findSellerStandardsProfiles()**](SellerStandardsProfileApi.md#findSellerStandardsProfiles) | **GET** /seller_standards_profile | 
[**getSellerStandardsProfile()**](SellerStandardsProfileApi.md#getSellerStandardsProfile) | **GET** /seller_standards_profile/{program}/{cycle} | 


## `findSellerStandardsProfiles()`

```php
findSellerStandardsProfiles(): \TNT\Ebay\Sell\Analytics\V1\Model\FindSellerStandardsProfilesResponse
```



This call retrieves all the standards profiles for the associated seller. A standards profile is a set of eBay seller metrics and the seller's associated compliance values (either TOP_RATED, ABOVE_STANDARD, or BELOW_STANDARD). A seller's multiple profiles are distinguished by two criteria, a &quot;program&quot; and a &quot;cycle.&quot; A profile's program is one of three regions where the seller may have done business, or PROGRAM_GLOBAL to indicate all marketplaces where the seller has done business. The cycle value specifies whether the standards compliance values were determined at the last official eBay evaluation or at the time of the request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Analytics\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Analytics\V1\Api\SellerStandardsProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->findSellerStandardsProfiles();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SellerStandardsProfileApi->findSellerStandardsProfiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\TNT\Ebay\Sell\Analytics\V1\Model\FindSellerStandardsProfilesResponse**](../Model/FindSellerStandardsProfilesResponse.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSellerStandardsProfile()`

```php
getSellerStandardsProfile($cycle, $program): \TNT\Ebay\Sell\Analytics\V1\Model\StandardsProfile
```



This call retrieves a single standards profile for the associated seller. A standards profile is a set of eBay seller metrics and the seller's associated compliance values (either TOP_RATED, ABOVE_STANDARD, or BELOW_STANDARD). A seller can have multiple profiles distinguished by two criteria, a &quot;program&quot; and a &quot;cycle.&quot; A profile's program is one of three regions where the seller may have done business, or PROGRAM_GLOBAL to indicate all marketplaces where the seller has done business. The cycle value specifies whether the standards compliance values were determined at the last official eBay evaluation (CURRENT) or at the time of the request (PROJECTED). Both cycle and a program values are required URI parameters for this method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Analytics\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Analytics\V1\Api\SellerStandardsProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cycle = 'cycle_example'; // string | The period covered by the returned standards profile evaluation. Supply one of two values, CURRENT means the response reflects eBay's most recent monthly standards evaluation and PROJECTED means the response reflect the seller's projected monthly evaluation, as calculated at the time of the request.
$program = 'program_example'; // string | This input value specifies the region used to determine the seller's standards profile. Supply one of the four following values, PROGRAM_DE, PROGRAM_UK, PROGRAM_US, or PROGRAM_GLOBAL.

try {
    $result = $apiInstance->getSellerStandardsProfile($cycle, $program);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SellerStandardsProfileApi->getSellerStandardsProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cycle** | **string**| The period covered by the returned standards profile evaluation. Supply one of two values, CURRENT means the response reflects eBay&#39;s most recent monthly standards evaluation and PROJECTED means the response reflect the seller&#39;s projected monthly evaluation, as calculated at the time of the request. |
 **program** | **string**| This input value specifies the region used to determine the seller&#39;s standards profile. Supply one of the four following values, PROGRAM_DE, PROGRAM_UK, PROGRAM_US, or PROGRAM_GLOBAL. |

### Return type

[**\TNT\Ebay\Sell\Analytics\V1\Model\StandardsProfile**](../Model/StandardsProfile.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
