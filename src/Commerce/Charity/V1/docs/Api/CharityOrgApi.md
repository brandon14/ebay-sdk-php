# TNT\Ebay\Commerce\Charity\V1\CharityOrgApi

All URIs are relative to https://api.ebay.com/commerce/charity/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCharityOrg()**](CharityOrgApi.md#getCharityOrg) | **GET** /charity_org/{charity_org_id} | 
[**getCharityOrgByLegacyId()**](CharityOrgApi.md#getCharityOrgByLegacyId) | **GET** /charity_org/get_charity_org_by_legacy_id | 
[**getCharityOrgs()**](CharityOrgApi.md#getCharityOrgs) | **GET** /charity_org | 


## `getCharityOrg()`

```php
getCharityOrg($charity_org_id, $x_ebay_c_marketplace_id): \TNT\Ebay\Commerce\Charity\V1\Model\CharityOrg
```



This call is used to retrieve detailed information about supported charitable organizations. It allows users to retrieve the details for a specific charitable organization using its charity organization ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Commerce\Charity\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Commerce\Charity\V1\Api\CharityOrgApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$charity_org_id = 'charity_org_id_example'; // string | The unique ID of the charitable organization.
$x_ebay_c_marketplace_id = 'x_ebay_c_marketplace_id_example'; // string | A header used to specify the eBay marketplace ID.<br /><br /><b>Valid Values:</b> <code>EBAY_GB</code> and <code>EBAY_US</code>

try {
    $result = $apiInstance->getCharityOrg($charity_org_id, $x_ebay_c_marketplace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CharityOrgApi->getCharityOrg: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **charity_org_id** | **string**| The unique ID of the charitable organization. |
 **x_ebay_c_marketplace_id** | **string**| A header used to specify the eBay marketplace ID.&lt;br /&gt;&lt;br /&gt;&lt;b&gt;Valid Values:&lt;/b&gt; &lt;code&gt;EBAY_GB&lt;/code&gt; and &lt;code&gt;EBAY_US&lt;/code&gt; |

### Return type

[**\TNT\Ebay\Commerce\Charity\V1\Model\CharityOrg**](../Model/CharityOrg.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCharityOrgByLegacyId()`

```php
getCharityOrgByLegacyId($x_ebay_c_marketplace_id, $legacy_charity_org_id): \TNT\Ebay\Commerce\Charity\V1\Model\CharityOrg
```



<span class=\"tablenote\"><b>Note: </b>The <a href=\"https://developer.ebay.com/api-docs/commerce/charity/resources/charity_org/methods/getCharityOrgByLegacyId\">getCharityOrgByLegacyId</a> method requires a PayPal Giving Fund ID to retrieve an eBay charitable organizaiton, and eBay will no longer support these IDs beginning on January 16, 2023. The alternative to this method is the <a href=\"https://developer.ebay.com/api-docs/commerce/charity/resources/charity_org/methods/getCharityOrg\">getCharityOrg</a> method, and this method requires the eBay-generated ID for a charitable organization.</span><br /><br />This call allows users to retrieve the details for a specific charitable organization using its legacy charity ID, which has also been referred to as the charity number, external ID, and PayPal Giving Fund ID. The legacy charity ID is separate from eBay’s generic charity ID.<br /><br />The call returns the full details for the charitable organization that matches the specified ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Commerce\Charity\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Commerce\Charity\V1\Api\CharityOrgApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_ebay_c_marketplace_id = 'x_ebay_c_marketplace_id_example'; // string | A header used to specify the eBay marketplace ID.<br /><br /><b>Valid Values:</b> <code>EBAY_GB</code> and <code>EBAY_US</code>
$legacy_charity_org_id = 'legacy_charity_org_id_example'; // string | The legacy ID of the charitable organization.<br /><br /><span class=\"tablenote\"><b>Note: </b>The legacy charity ID is the identifier assigned to an organization upon registration with the PayPal Giving Fund (PPGF). It has also been referred to as the external ID/charity number.</span>

try {
    $result = $apiInstance->getCharityOrgByLegacyId($x_ebay_c_marketplace_id, $legacy_charity_org_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CharityOrgApi->getCharityOrgByLegacyId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_ebay_c_marketplace_id** | **string**| A header used to specify the eBay marketplace ID.&lt;br /&gt;&lt;br /&gt;&lt;b&gt;Valid Values:&lt;/b&gt; &lt;code&gt;EBAY_GB&lt;/code&gt; and &lt;code&gt;EBAY_US&lt;/code&gt; |
 **legacy_charity_org_id** | **string**| The legacy ID of the charitable organization.&lt;br /&gt;&lt;br /&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note: &lt;/b&gt;The legacy charity ID is the identifier assigned to an organization upon registration with the PayPal Giving Fund (PPGF). It has also been referred to as the external ID/charity number.&lt;/span&gt; |

### Return type

[**\TNT\Ebay\Commerce\Charity\V1\Model\CharityOrg**](../Model/CharityOrg.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCharityOrgs()`

```php
getCharityOrgs($x_ebay_c_marketplace_id, $limit, $offset, $q, $registration_ids): \TNT\Ebay\Commerce\Charity\V1\Model\CharitySearchResponse
```



This call is used to search for supported charitable organizations. It allows users to search for a specific charitable organization, or for multiple charitable organizations, from a particular charitable domain and/or geographical region, or by using search criteria.<br /><br />The call returns paginated search results containing the charitable organizations that match the specified criteria.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Commerce\Charity\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Commerce\Charity\V1\Api\CharityOrgApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_ebay_c_marketplace_id = 'x_ebay_c_marketplace_id_example'; // string | A header used to specify the eBay marketplace ID.<br /><br /><b>Valid Values:</b> <code>EBAY_GB</code> and <code>EBAY_US</code>
$limit = 'limit_example'; // string | The number of items, from the result set, returned in a single page.<br /><br /><b>Valid Values:</b> <code>1-100</code><br /><br /><b>Default:</b> <code>20</code>
$offset = 'offset_example'; // string | The number of items that will be skipped in the result set. This is used with the <b>limit</b> field to control the pagination of the output.<br /><br />For example, if the <b>offset</b> is set to <code>0</code> and the <b>limit</b> is set to <code>10</code>, the method will retrieve items 1 through 10 from the list of items returned. If the <b>offset</b> is set to <code>10</code> and the <b>limit</b> is set to <code>10</code>, the method will retrieve items 11 through 20 from the list of items returned.<br /><br /><b>Valid Values:</b> <code>0-10,000</code><br /><br /><b>Default:</b> <code>0</code>
$q = 'q_example'; // string | A query string that matches the keywords in name, mission statement, or description.
$registration_ids = 'registration_ids_example'; // string | A comma-separated list of charitable organization registration IDs.<br /><br /><span class=\"tablenote\"><b>Note: </b>Do not specify this parameter for query-based searches. Specify either the <b>q</b> or <b>registration_ids</b> parameter, but not both.</span><br /><br /><b>Maximum Limit:</b> <code>20</code>

try {
    $result = $apiInstance->getCharityOrgs($x_ebay_c_marketplace_id, $limit, $offset, $q, $registration_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CharityOrgApi->getCharityOrgs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_ebay_c_marketplace_id** | **string**| A header used to specify the eBay marketplace ID.&lt;br /&gt;&lt;br /&gt;&lt;b&gt;Valid Values:&lt;/b&gt; &lt;code&gt;EBAY_GB&lt;/code&gt; and &lt;code&gt;EBAY_US&lt;/code&gt; |
 **limit** | **string**| The number of items, from the result set, returned in a single page.&lt;br /&gt;&lt;br /&gt;&lt;b&gt;Valid Values:&lt;/b&gt; &lt;code&gt;1-100&lt;/code&gt;&lt;br /&gt;&lt;br /&gt;&lt;b&gt;Default:&lt;/b&gt; &lt;code&gt;20&lt;/code&gt; | [optional]
 **offset** | **string**| The number of items that will be skipped in the result set. This is used with the &lt;b&gt;limit&lt;/b&gt; field to control the pagination of the output.&lt;br /&gt;&lt;br /&gt;For example, if the &lt;b&gt;offset&lt;/b&gt; is set to &lt;code&gt;0&lt;/code&gt; and the &lt;b&gt;limit&lt;/b&gt; is set to &lt;code&gt;10&lt;/code&gt;, the method will retrieve items 1 through 10 from the list of items returned. If the &lt;b&gt;offset&lt;/b&gt; is set to &lt;code&gt;10&lt;/code&gt; and the &lt;b&gt;limit&lt;/b&gt; is set to &lt;code&gt;10&lt;/code&gt;, the method will retrieve items 11 through 20 from the list of items returned.&lt;br /&gt;&lt;br /&gt;&lt;b&gt;Valid Values:&lt;/b&gt; &lt;code&gt;0-10,000&lt;/code&gt;&lt;br /&gt;&lt;br /&gt;&lt;b&gt;Default:&lt;/b&gt; &lt;code&gt;0&lt;/code&gt; | [optional]
 **q** | **string**| A query string that matches the keywords in name, mission statement, or description. | [optional]
 **registration_ids** | **string**| A comma-separated list of charitable organization registration IDs.&lt;br /&gt;&lt;br /&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note: &lt;/b&gt;Do not specify this parameter for query-based searches. Specify either the &lt;b&gt;q&lt;/b&gt; or &lt;b&gt;registration_ids&lt;/b&gt; parameter, but not both.&lt;/span&gt;&lt;br /&gt;&lt;br /&gt;&lt;b&gt;Maximum Limit:&lt;/b&gt; &lt;code&gt;20&lt;/code&gt; | [optional]

### Return type

[**\TNT\Ebay\Commerce\Charity\V1\Model\CharitySearchResponse**](../Model/CharitySearchResponse.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
