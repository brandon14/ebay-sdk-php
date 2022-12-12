# TNT\Ebay\Sell\Account\V1\SalesTaxApi

All URIs are relative to https://api.ebay.com/sell/account/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createOrReplaceSalesTax()**](SalesTaxApi.md#createOrReplaceSalesTax) | **PUT** /sales_tax/{countryCode}/{jurisdictionId} | 
[**deleteSalesTax()**](SalesTaxApi.md#deleteSalesTax) | **DELETE** /sales_tax/{countryCode}/{jurisdictionId} | 
[**getSalesTax()**](SalesTaxApi.md#getSalesTax) | **GET** /sales_tax/{countryCode}/{jurisdictionId} | 
[**getSalesTaxes()**](SalesTaxApi.md#getSalesTaxes) | **GET** /sales_tax | 


## `createOrReplaceSalesTax()`

```php
createOrReplaceSalesTax($country_code, $jurisdiction_id, $sales_tax_base)
```



This method creates or updates a sales tax table entry for a jurisdiction. Specify the tax table entry you want to configure using the two path parameters: <b>countryCode</b> and <b>jurisdictionId</b>.  <br/><br/>A tax table entry for a jurisdiction is comprised of two fields: one for the jurisdiction's sales-tax rate and another that's a boolean value indicating whether or not shipping and handling are taxed in the jurisdiction.  <br/><br/>You can set up <i>tax tables</i> for countries that support different <i>tax jurisdictions</i>. Currently, only Canada, India, and the US support separate tax jurisdictions. If you sell into any of these countries, you can set up tax tables for any of the country's jurisdictions. Retrieve valid jurisdiction IDs using <b>getSalesTaxJurisdictions</b> in the Metadata API.  <br/><br/>For details on using this call, see <a href=\"/api-docs/sell/static/seller-accounts/tax-tables.html\">Establishing sales-tax tables</a>. <br/><br/><span class=\"tablenote\"><b>Important!</b> In the US, eBay now 'collects and remits' sales tax for every US state except for Missouri (and a few US territories), so sellers can no longer configure sales tax rates for any states except Missouri. With eBay 'collect and remit', eBay calculates the sales tax, collects the sales tax from the buyer, and remits the sales tax to the tax authorities at the buyer's location.</span>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Account\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Account\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Account\V1\Api\SalesTaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$country_code = 'country_code_example'; // string | This path parameter specifies the two-letter <a href=\"https://www.iso.org/iso-3166-country-codes.html \" title=\"https://www.iso.org \" target=\"_blank\">ISO 3166</a> code for the country for which you want to create a sales tax table entry.
$jurisdiction_id = 'jurisdiction_id_example'; // string | This path parameter specifies the ID of the tax jurisdiction for the table entry you want to create. Retrieve valid jurisdiction IDs using <b>getSalesTaxJurisdictions</b> in the Metadata API.
$sales_tax_base = new \TNT\Ebay\Sell\Account\V1\Model\SalesTaxBase(); // \TNT\Ebay\Sell\Account\V1\Model\SalesTaxBase | A container that describes the how the sales tax is calculated.

try {
    $apiInstance->createOrReplaceSalesTax($country_code, $jurisdiction_id, $sales_tax_base);
} catch (Exception $e) {
    echo 'Exception when calling SalesTaxApi->createOrReplaceSalesTax: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **country_code** | **string**| This path parameter specifies the two-letter &lt;a href&#x3D;\&quot;https://www.iso.org/iso-3166-country-codes.html \&quot; title&#x3D;\&quot;https://www.iso.org \&quot; target&#x3D;\&quot;_blank\&quot;&gt;ISO 3166&lt;/a&gt; code for the country for which you want to create a sales tax table entry. |
 **jurisdiction_id** | **string**| This path parameter specifies the ID of the tax jurisdiction for the table entry you want to create. Retrieve valid jurisdiction IDs using &lt;b&gt;getSalesTaxJurisdictions&lt;/b&gt; in the Metadata API. |
 **sales_tax_base** | [**\TNT\Ebay\Sell\Account\V1\Model\SalesTaxBase**](../Model/SalesTaxBase.md)| A container that describes the how the sales tax is calculated. |

### Return type

void (empty response body)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteSalesTax()`

```php
deleteSalesTax($country_code, $jurisdiction_id)
```



This call deletes a sales tax table entry for a jurisdiction. Specify the jurisdiction to delete using the <b>countryCode</b> and <b>jurisdictionId</b> path parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Account\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Account\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Account\V1\Api\SalesTaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$country_code = 'country_code_example'; // string | This path parameter specifies the two-letter <a href=\"https://www.iso.org/iso-3166-country-codes.html \" title=\"https://www.iso.org \" target=\"_blank\">ISO 3166</a> code for the country whose sales tax table entry you want to delete.
$jurisdiction_id = 'jurisdiction_id_example'; // string | This path parameter specifies the ID of the sales tax jurisdiction whose table entry you want to delete. Retrieve valid jurisdiction IDs using <b>getSalesTaxJurisdictions</b> in the Metadata API.

try {
    $apiInstance->deleteSalesTax($country_code, $jurisdiction_id);
} catch (Exception $e) {
    echo 'Exception when calling SalesTaxApi->deleteSalesTax: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **country_code** | **string**| This path parameter specifies the two-letter &lt;a href&#x3D;\&quot;https://www.iso.org/iso-3166-country-codes.html \&quot; title&#x3D;\&quot;https://www.iso.org \&quot; target&#x3D;\&quot;_blank\&quot;&gt;ISO 3166&lt;/a&gt; code for the country whose sales tax table entry you want to delete. |
 **jurisdiction_id** | **string**| This path parameter specifies the ID of the sales tax jurisdiction whose table entry you want to delete. Retrieve valid jurisdiction IDs using &lt;b&gt;getSalesTaxJurisdictions&lt;/b&gt; in the Metadata API. |

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

## `getSalesTax()`

```php
getSalesTax($country_code, $jurisdiction_id): \TNT\Ebay\Sell\Account\V1\Model\SalesTax
```



This call gets the current sales tax table entry for a specific tax jurisdiction. Specify the jurisdiction to retrieve using the <b>countryCode</b> and <b>jurisdictionId</b> path parameters. All four response fields will be returned if a sales tax entry exists for the tax jurisdiction. Otherwise, the response will be returned as empty.<br/><br/><span class=\"tablenote\"><b>Important!</b> In most US states and territories, eBay now 'collects and remits' sales tax, so sellers can no longer configure sales tax rates for these states/territories.</span>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Account\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Account\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Account\V1\Api\SalesTaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$country_code = 'country_code_example'; // string | This path parameter specifies the two-letter <a href=\"https://www.iso.org/iso-3166-country-codes.html \" title=\"https://www.iso.org \" target=\"_blank\">ISO 3166</a> code for the country whose sales tax table you want to retrieve.
$jurisdiction_id = 'jurisdiction_id_example'; // string | This path parameter specifies the ID of the sales tax jurisdiction for the tax table entry you want to retrieve. Retrieve valid jurisdiction IDs using <b>getSalesTaxJurisdictions</b> in the Metadata API.

try {
    $result = $apiInstance->getSalesTax($country_code, $jurisdiction_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesTaxApi->getSalesTax: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **country_code** | **string**| This path parameter specifies the two-letter &lt;a href&#x3D;\&quot;https://www.iso.org/iso-3166-country-codes.html \&quot; title&#x3D;\&quot;https://www.iso.org \&quot; target&#x3D;\&quot;_blank\&quot;&gt;ISO 3166&lt;/a&gt; code for the country whose sales tax table you want to retrieve. |
 **jurisdiction_id** | **string**| This path parameter specifies the ID of the sales tax jurisdiction for the tax table entry you want to retrieve. Retrieve valid jurisdiction IDs using &lt;b&gt;getSalesTaxJurisdictions&lt;/b&gt; in the Metadata API. |

### Return type

[**\TNT\Ebay\Sell\Account\V1\Model\SalesTax**](../Model/SalesTax.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSalesTaxes()`

```php
getSalesTaxes($country_code): \TNT\Ebay\Sell\Account\V1\Model\SalesTaxes
```



Use this call to retrieve all sales tax table entries that the seller has defined for a specific country. All four response fields will be returned for each tax jurisdiction that matches the search criteria. <br/><br/><span class=\"tablenote\"><b>Important!</b> In most US states and territories, eBay now 'collects and remits' sales tax, so sellers can no longer configure sales tax rates for these states/territories.</span>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Account\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Account\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Account\V1\Api\SalesTaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$country_code = 'country_code_example'; // string | This path parameter specifies the two-letter <a href=\"https://www.iso.org/iso-3166-country-codes.html \" title=\"https://www.iso.org \" target=\"_blank\">ISO 3166</a> code for the country whose tax table you want to retrieve. For implementation help, refer to eBay API documentation at https://developer.ebay.com/api-docs/sell/account/types/ba:CountryCodeEnum

try {
    $result = $apiInstance->getSalesTaxes($country_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesTaxApi->getSalesTaxes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **country_code** | **string**| This path parameter specifies the two-letter &lt;a href&#x3D;\&quot;https://www.iso.org/iso-3166-country-codes.html \&quot; title&#x3D;\&quot;https://www.iso.org \&quot; target&#x3D;\&quot;_blank\&quot;&gt;ISO 3166&lt;/a&gt; code for the country whose tax table you want to retrieve. For implementation help, refer to eBay API documentation at https://developer.ebay.com/api-docs/sell/account/types/ba:CountryCodeEnum |

### Return type

[**\TNT\Ebay\Sell\Account\V1\Model\SalesTaxes**](../Model/SalesTaxes.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
