# TNT\Ebay\Sell\Metadata\V1\MarketplaceApi

All URIs are relative to https://api.ebay.com/sell/metadata/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAutomotivePartsCompatibilityPolicies()**](MarketplaceApi.md#getAutomotivePartsCompatibilityPolicies) | **GET** /marketplace/{marketplace_id}/get_automotive_parts_compatibility_policies | 
[**getExtendedProducerResponsibilityPolicies()**](MarketplaceApi.md#getExtendedProducerResponsibilityPolicies) | **GET** /marketplace/{marketplace_id}/get_extended_producer_responsibility_policies | 
[**getItemConditionPolicies()**](MarketplaceApi.md#getItemConditionPolicies) | **GET** /marketplace/{marketplace_id}/get_item_condition_policies | 
[**getListingStructurePolicies()**](MarketplaceApi.md#getListingStructurePolicies) | **GET** /marketplace/{marketplace_id}/get_listing_structure_policies | 
[**getNegotiatedPricePolicies()**](MarketplaceApi.md#getNegotiatedPricePolicies) | **GET** /marketplace/{marketplace_id}/get_negotiated_price_policies | 
[**getReturnPolicies()**](MarketplaceApi.md#getReturnPolicies) | **GET** /marketplace/{marketplace_id}/get_return_policies | 


## `getAutomotivePartsCompatibilityPolicies()`

```php
getAutomotivePartsCompatibilityPolicies($marketplace_id, $filter): \TNT\Ebay\Sell\Metadata\V1\Model\AutomotivePartsCompatibilityPolicyResponse
```



This method returns the eBay policies that define how to list automotive-parts-compatibility items in the categories of a specific marketplace.  <br><br>By default, this method returns the entire category tree for the specified marketplace. You can limit the size of the result set by using the <b>filter</b> query parameter to specify only the category IDs you want to review.<br /><br /><span class=\"tablenote\"><span style=\"color:#478415\"><strong>Tip:</strong></span> This method can potentially return a very large response payload. eBay recommends that the response payload be compressed by passing in the <b>Accept-Encoding</b> request header and setting the value to <code>application/gzip</code>.</span>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Metadata\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Metadata\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Metadata\V1\Api\MarketplaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$marketplace_id = 'marketplace_id_example'; // string | This path parameter specifies the eBay marketplace for which policy information is retrieved.  <br><br><b>Note:</b> Only the following eBay marketplaces support automotive parts compatibility: <ul> <li>EBAY_US</li> <li>EBAY_AU</li> <li>EBAY_CA</li> <li>EBAY_DE</li> <li>EBAY_ES</li> <li>EBAY_FR</li> <li>EBAY_GB</li> <li>EBAY_IT</li><ul>
$filter = 'filter_example'; // string | This query parameter limits the response by returning policy information for only the selected sections of the category tree. Supply <b>categoryId</b> values for the sections of the tree you want returned.  <br><br>When you specify a <b>categoryId</b> value, the returned category tree includes the policies for that parent node, plus the policies for any leaf nodes below that parent node.  <br><br>The parameter takes a list of <b>categoryId</b> values and you can specify up to 50 separate category IDs. Separate multiple values with a pipe character ('|'). If you specify more than 50 <code>categoryId</code> values, eBay returns the policies for the first 50 IDs and a warning that not all categories were returned.  <br><br><b>Example:</b> <code>filter=categoryIds:{100|101|102}</code>  <br><br>Note that you must URL-encode the parameter list, which results in the following filter for the above example: <br><br> &nbsp;&nbsp;<code>filter=categoryIds%3A%7B100%7C101%7C102%7D</code>

try {
    $result = $apiInstance->getAutomotivePartsCompatibilityPolicies($marketplace_id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketplaceApi->getAutomotivePartsCompatibilityPolicies: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplace_id** | **string**| This path parameter specifies the eBay marketplace for which policy information is retrieved.  &lt;br&gt;&lt;br&gt;&lt;b&gt;Note:&lt;/b&gt; Only the following eBay marketplaces support automotive parts compatibility: &lt;ul&gt; &lt;li&gt;EBAY_US&lt;/li&gt; &lt;li&gt;EBAY_AU&lt;/li&gt; &lt;li&gt;EBAY_CA&lt;/li&gt; &lt;li&gt;EBAY_DE&lt;/li&gt; &lt;li&gt;EBAY_ES&lt;/li&gt; &lt;li&gt;EBAY_FR&lt;/li&gt; &lt;li&gt;EBAY_GB&lt;/li&gt; &lt;li&gt;EBAY_IT&lt;/li&gt;&lt;ul&gt; |
 **filter** | **string**| This query parameter limits the response by returning policy information for only the selected sections of the category tree. Supply &lt;b&gt;categoryId&lt;/b&gt; values for the sections of the tree you want returned.  &lt;br&gt;&lt;br&gt;When you specify a &lt;b&gt;categoryId&lt;/b&gt; value, the returned category tree includes the policies for that parent node, plus the policies for any leaf nodes below that parent node.  &lt;br&gt;&lt;br&gt;The parameter takes a list of &lt;b&gt;categoryId&lt;/b&gt; values and you can specify up to 50 separate category IDs. Separate multiple values with a pipe character (&#39;|&#39;). If you specify more than 50 &lt;code&gt;categoryId&lt;/code&gt; values, eBay returns the policies for the first 50 IDs and a warning that not all categories were returned.  &lt;br&gt;&lt;br&gt;&lt;b&gt;Example:&lt;/b&gt; &lt;code&gt;filter&#x3D;categoryIds:{100|101|102}&lt;/code&gt;  &lt;br&gt;&lt;br&gt;Note that you must URL-encode the parameter list, which results in the following filter for the above example: &lt;br&gt;&lt;br&gt; &amp;nbsp;&amp;nbsp;&lt;code&gt;filter&#x3D;categoryIds%3A%7B100%7C101%7C102%7D&lt;/code&gt; | [optional]

### Return type

[**\TNT\Ebay\Sell\Metadata\V1\Model\AutomotivePartsCompatibilityPolicyResponse**](../Model/AutomotivePartsCompatibilityPolicyResponse.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getExtendedProducerResponsibilityPolicies()`

```php
getExtendedProducerResponsibilityPolicies($marketplace_id, $filter): \TNT\Ebay\Sell\Metadata\V1\Model\ExtendedProducerResponsibilityPolicyResponse
```



This method returns the Extended Producer Responsibility policies for one, multiple, or all eBay categories in an eBay marketplace.<br /><br />The identifier of the eBay marketplace is passed in as a path parameter, and unless one or more eBay category IDs are passed in through the filter query parameter, this method will return metadata on every applicable category for the specified marketplace.<br /><br /><span class=\"tablenote\"><span style=\"color:#004680\"><strong>Note:</strong></span> Currently, the Extended Producer Responsibility policies are only applicable to a limited number of categories, and only in the EBAY_FR marketplace.</span><br /><br /><span class=\"tablenote\"><span style=\"color:#478415\"><strong>Tip:</strong></span> This method can potentially return a very large response payload. eBay recommends that the response payload be compressed by passing in the <b>Accept-Encoding</b> request header and setting the value to <code>application/gzip</code>.</span>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Metadata\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Metadata\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Metadata\V1\Api\MarketplaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$marketplace_id = 'marketplace_id_example'; // string | A path parameter that specifies the eBay marketplace for which policy information shall be retrieved.<br /><br /><span class=\"tablenote\"><span style=\"color:#478415\"><strong>Tip:</strong></span> See <a href=\"/api-docs/static/rest-request-components.html#marketpl\" target=\"_blank\">Request components</a> for a list of valid eBay marketplace IDs.</span>
$filter = 'filter_example'; // string | A query parameter that can be used to limit the response by returning policy information for only the selected sections of the category tree. Supply <b>categoryId</b> values for the sections of the tree that should be returned.<br /><br />When a <b>categoryId</b> value is specified, the returned category tree includes the policies for that parent node, as well as the policies for any child nodes below that parent node.<br /><br />Pass in the <b>categoryId</b> values using a URL-encoded, pipe-separated ('|') list. For example:<br /><br /><code>filter=categoryIds%3A%7B100%7C101%7C102%7D</code><br /><br /><b>Maximum:</b> 50

try {
    $result = $apiInstance->getExtendedProducerResponsibilityPolicies($marketplace_id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketplaceApi->getExtendedProducerResponsibilityPolicies: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplace_id** | **string**| A path parameter that specifies the eBay marketplace for which policy information shall be retrieved.&lt;br /&gt;&lt;br /&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;span style&#x3D;\&quot;color:#478415\&quot;&gt;&lt;strong&gt;Tip:&lt;/strong&gt;&lt;/span&gt; See &lt;a href&#x3D;\&quot;/api-docs/static/rest-request-components.html#marketpl\&quot; target&#x3D;\&quot;_blank\&quot;&gt;Request components&lt;/a&gt; for a list of valid eBay marketplace IDs.&lt;/span&gt; |
 **filter** | **string**| A query parameter that can be used to limit the response by returning policy information for only the selected sections of the category tree. Supply &lt;b&gt;categoryId&lt;/b&gt; values for the sections of the tree that should be returned.&lt;br /&gt;&lt;br /&gt;When a &lt;b&gt;categoryId&lt;/b&gt; value is specified, the returned category tree includes the policies for that parent node, as well as the policies for any child nodes below that parent node.&lt;br /&gt;&lt;br /&gt;Pass in the &lt;b&gt;categoryId&lt;/b&gt; values using a URL-encoded, pipe-separated (&#39;|&#39;) list. For example:&lt;br /&gt;&lt;br /&gt;&lt;code&gt;filter&#x3D;categoryIds%3A%7B100%7C101%7C102%7D&lt;/code&gt;&lt;br /&gt;&lt;br /&gt;&lt;b&gt;Maximum:&lt;/b&gt; 50 | [optional]

### Return type

[**\TNT\Ebay\Sell\Metadata\V1\Model\ExtendedProducerResponsibilityPolicyResponse**](../Model/ExtendedProducerResponsibilityPolicyResponse.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getItemConditionPolicies()`

```php
getItemConditionPolicies($marketplace_id, $filter): \TNT\Ebay\Sell\Metadata\V1\Model\ItemConditionPolicyResponse
```



This method returns item condition metadata on one, multiple, or all eBay categories on an eBay marketplace. This metadata consists of the different item conditions (with IDs) that an eBay category supports, and a boolean to indicate if an eBay category requires an item condition. <br><br>The identifier of the eBay marketplace is passed in as a path parameter, and unless one or more eBay category IDs are passed in through the <b>filter</b> query parameter, this method will return metadata on every single category for the specified marketplace. If you only want to view item condition metadata for one eBay category or a select group of eBay categories, you can pass in up to 50 eBay category ID through the <b>filter</b> query parameter.<br /><br /><span class=\"tablenote\"><span style=\"color:#FF0000\"><strong>Important:</strong></span> <b>Certified - Refurbished</b>-eligible sellers, and sellers who are eligible to list with the new values (EXCELLENT_REFURBISHED, VERY_GOOD_REFURBISHED, and GOOD_REFURBISHED) must use an OAuth token created with the <a href=\"/api-docs/static/oauth-authorization-code-grant.html\" target=\"_blank\">authorization code grant flow</a> and <b>https://api.ebay.com/oauth/api_scope/sell.inventory</b> scope in order to retrieve the refurbished conditions for the relevant categories.<br/><br/>See the <a href=\"/api-docs/sell/static/metadata/condition-id-values.html#Category \" target=\"_blank\">eBay Refurbished Program - Category and marketplace support</a> topic for the categories and marketplaces that support these refurbished conditions<br/><br/>These restricted item conditions will not be returned if an OAuth token created with the <a href=\"/api-docs/static/oauth-client-credentials-grant.html\" target=\"_blank\">client credentials grant flow</a> and <b>https://api.ebay.com/oauth/api_scope</b> scope is used, or if any seller is not eligible to list with that item condition. <br/><br/> See the <a href=\"/api-docs/static/oauth-scopes.html\" target=\"_blank\">Specifying OAuth scopes</a> topic for more information about specifying scopes.</span><br /><br /><span class=\"tablenote\"><span style=\"color:#478415\"><strong>Tip:</strong></span> This method can potentially return a very large response payload. eBay recommends that the response payload be compressed by passing in the <b>Accept-Encoding</b> request header and setting the value to <code>application/gzip</code>.</span>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Metadata\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Metadata\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Metadata\V1\Api\MarketplaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$marketplace_id = 'marketplace_id_example'; // string | This path parameter specifies the eBay marketplace for which policy information is retrieved. See the following page for a list of valid eBay marketplace IDs: <a href=\"/api-docs/static/rest-request-components.html#marketpl\" target=\"_blank\">Request components</a>.
$filter = 'filter_example'; // string | This query parameter limits the response by returning policy information for only the selected sections of the category tree. Supply <b>categoryId</b> values for the sections of the tree you want returned.  <br><br>When you specify a <b>categoryId</b> value, the returned category tree includes the policies for that parent node, plus the policies for any leaf nodes below that parent node.  <br><br>The parameter takes a list of <b>categoryId</b> values and you can specify up to 50 separate category IDs. Separate multiple values with a pipe character ('|'). If you specify more than 50 <code>categoryId</code> values, eBay returns the policies for the first 50 IDs and a warning that not all categories were returned.  <br><br><b>Example:</b> <code>filter=categoryIds:{100|101|102}</code>  <br><br>Note that you must URL-encode the parameter list, which results in the following filter for the above example: <br><br> &nbsp;&nbsp;<code>filter=categoryIds%3A%7B100%7C101%7C102%7D</code>

try {
    $result = $apiInstance->getItemConditionPolicies($marketplace_id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketplaceApi->getItemConditionPolicies: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplace_id** | **string**| This path parameter specifies the eBay marketplace for which policy information is retrieved. See the following page for a list of valid eBay marketplace IDs: &lt;a href&#x3D;\&quot;/api-docs/static/rest-request-components.html#marketpl\&quot; target&#x3D;\&quot;_blank\&quot;&gt;Request components&lt;/a&gt;. |
 **filter** | **string**| This query parameter limits the response by returning policy information for only the selected sections of the category tree. Supply &lt;b&gt;categoryId&lt;/b&gt; values for the sections of the tree you want returned.  &lt;br&gt;&lt;br&gt;When you specify a &lt;b&gt;categoryId&lt;/b&gt; value, the returned category tree includes the policies for that parent node, plus the policies for any leaf nodes below that parent node.  &lt;br&gt;&lt;br&gt;The parameter takes a list of &lt;b&gt;categoryId&lt;/b&gt; values and you can specify up to 50 separate category IDs. Separate multiple values with a pipe character (&#39;|&#39;). If you specify more than 50 &lt;code&gt;categoryId&lt;/code&gt; values, eBay returns the policies for the first 50 IDs and a warning that not all categories were returned.  &lt;br&gt;&lt;br&gt;&lt;b&gt;Example:&lt;/b&gt; &lt;code&gt;filter&#x3D;categoryIds:{100|101|102}&lt;/code&gt;  &lt;br&gt;&lt;br&gt;Note that you must URL-encode the parameter list, which results in the following filter for the above example: &lt;br&gt;&lt;br&gt; &amp;nbsp;&amp;nbsp;&lt;code&gt;filter&#x3D;categoryIds%3A%7B100%7C101%7C102%7D&lt;/code&gt; | [optional]

### Return type

[**\TNT\Ebay\Sell\Metadata\V1\Model\ItemConditionPolicyResponse**](../Model/ItemConditionPolicyResponse.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getListingStructurePolicies()`

```php
getListingStructurePolicies($marketplace_id, $filter): \TNT\Ebay\Sell\Metadata\V1\Model\ListingStructurePolicyResponse
```



This method returns the eBay policies that define the allowed listing structures for the categories of a specific marketplace. The listing-structure policies currently pertain to whether or not you can list items with variations.  <br><br>By default, this method returns the entire category tree for the specified marketplace. You can limit the size of the result set by using the <b>filter</b> query parameter to specify only the category IDs you want to review.<br /><br /><span class=\"tablenote\"><span style=\"color:#478415\"><strong>Tip:</strong></span> This method can potentially return a very large response payload. eBay recommends that the response payload be compressed by passing in the <b>Accept-Encoding</b> request header and setting the value to <code>application/gzip</code>.</span>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Metadata\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Metadata\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Metadata\V1\Api\MarketplaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$marketplace_id = 'marketplace_id_example'; // string | This path parameter specifies the eBay marketplace for which policy information is retrieved. See the following page for a list of valid eBay marketplace IDs: <a href=\"/api-docs/static/rest-request-components.html#marketpl\" target=\"_blank\">Request components</a>.
$filter = 'filter_example'; // string | This query parameter limits the response by returning policy information for only the selected sections of the category tree. Supply <b>categoryId</b> values for the sections of the tree you want returned.  <br><br>When you specify a <b>categoryId</b> value, the returned category tree includes the policies for that parent node, plus the policies for any leaf nodes below that parent node.  <br><br>The parameter takes a list of <b>categoryId</b> values and you can specify up to 50 separate category IDs. Separate multiple values with a pipe character ('|'). If you specify more than 50 <code>categoryId</code> values, eBay returns the policies for the first 50 IDs and a warning that not all categories were returned.  <br><br><b>Example:</b> <code>filter=categoryIds:{100|101|102}</code>  <br><br>Note that you must URL-encode the parameter list, which results in the following filter for the above example: <br><br> &nbsp;&nbsp;<code>filter=categoryIds%3A%7B100%7C101%7C102%7D</code>

try {
    $result = $apiInstance->getListingStructurePolicies($marketplace_id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketplaceApi->getListingStructurePolicies: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplace_id** | **string**| This path parameter specifies the eBay marketplace for which policy information is retrieved. See the following page for a list of valid eBay marketplace IDs: &lt;a href&#x3D;\&quot;/api-docs/static/rest-request-components.html#marketpl\&quot; target&#x3D;\&quot;_blank\&quot;&gt;Request components&lt;/a&gt;. |
 **filter** | **string**| This query parameter limits the response by returning policy information for only the selected sections of the category tree. Supply &lt;b&gt;categoryId&lt;/b&gt; values for the sections of the tree you want returned.  &lt;br&gt;&lt;br&gt;When you specify a &lt;b&gt;categoryId&lt;/b&gt; value, the returned category tree includes the policies for that parent node, plus the policies for any leaf nodes below that parent node.  &lt;br&gt;&lt;br&gt;The parameter takes a list of &lt;b&gt;categoryId&lt;/b&gt; values and you can specify up to 50 separate category IDs. Separate multiple values with a pipe character (&#39;|&#39;). If you specify more than 50 &lt;code&gt;categoryId&lt;/code&gt; values, eBay returns the policies for the first 50 IDs and a warning that not all categories were returned.  &lt;br&gt;&lt;br&gt;&lt;b&gt;Example:&lt;/b&gt; &lt;code&gt;filter&#x3D;categoryIds:{100|101|102}&lt;/code&gt;  &lt;br&gt;&lt;br&gt;Note that you must URL-encode the parameter list, which results in the following filter for the above example: &lt;br&gt;&lt;br&gt; &amp;nbsp;&amp;nbsp;&lt;code&gt;filter&#x3D;categoryIds%3A%7B100%7C101%7C102%7D&lt;/code&gt; | [optional]

### Return type

[**\TNT\Ebay\Sell\Metadata\V1\Model\ListingStructurePolicyResponse**](../Model/ListingStructurePolicyResponse.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNegotiatedPricePolicies()`

```php
getNegotiatedPricePolicies($marketplace_id, $filter): \TNT\Ebay\Sell\Metadata\V1\Model\NegotiatedPricePolicyResponse
```



This method returns the eBay policies that define the supported negotiated price features (like \"best offer\") for the categories of a specific marketplace.  <br><br>By default, this method returns the entire category tree for the specified marketplace. You can limit the size of the result set by using the <b>filter</b> query parameter to specify only the category IDs you want to review.<br /><br /><span class=\"tablenote\"><span style=\"color:#478415\"><strong>Tip:</strong></span> This method can potentially return a very large response payload. eBay recommends that the response payload be compressed by passing in the <b>Accept-Encoding</b> request header and setting the value to <code>application/gzip</code>.</span>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Metadata\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Metadata\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Metadata\V1\Api\MarketplaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$marketplace_id = 'marketplace_id_example'; // string | This path parameter specifies the eBay marketplace for which policy information is retrieved. See the following page for a list of valid eBay marketplace IDs: <a href=\"/api-docs/static/rest-request-components.html#marketpl\" target=\"_blank\">Request components</a>.
$filter = 'filter_example'; // string | This query parameter limits the response by returning policy information for only the selected sections of the category tree. Supply <b>categoryId</b> values for the sections of the tree you want returned.  <br><br>When you specify a <b>categoryId</b> value, the returned category tree includes the policies for that parent node, plus the policies for any leaf nodes below that parent node.  <br><br>The parameter takes a list of <b>categoryId</b> values and you can specify up to 50 separate category IDs. Separate multiple values with a pipe character ('|'). If you specify more than 50 <code>categoryId</code> values, eBay returns the policies for the first 50 IDs and a warning that not all categories were returned.  <br><br><b>Example:</b> <code>filter=categoryIds:{100|101|102}</code>  <br><br>Note that you must URL-encode the parameter list, which results in the following filter for the above example: <br><br> &nbsp;&nbsp;<code>filter=categoryIds%3A%7B100%7C101%7C102%7D</code>

try {
    $result = $apiInstance->getNegotiatedPricePolicies($marketplace_id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketplaceApi->getNegotiatedPricePolicies: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplace_id** | **string**| This path parameter specifies the eBay marketplace for which policy information is retrieved. See the following page for a list of valid eBay marketplace IDs: &lt;a href&#x3D;\&quot;/api-docs/static/rest-request-components.html#marketpl\&quot; target&#x3D;\&quot;_blank\&quot;&gt;Request components&lt;/a&gt;. |
 **filter** | **string**| This query parameter limits the response by returning policy information for only the selected sections of the category tree. Supply &lt;b&gt;categoryId&lt;/b&gt; values for the sections of the tree you want returned.  &lt;br&gt;&lt;br&gt;When you specify a &lt;b&gt;categoryId&lt;/b&gt; value, the returned category tree includes the policies for that parent node, plus the policies for any leaf nodes below that parent node.  &lt;br&gt;&lt;br&gt;The parameter takes a list of &lt;b&gt;categoryId&lt;/b&gt; values and you can specify up to 50 separate category IDs. Separate multiple values with a pipe character (&#39;|&#39;). If you specify more than 50 &lt;code&gt;categoryId&lt;/code&gt; values, eBay returns the policies for the first 50 IDs and a warning that not all categories were returned.  &lt;br&gt;&lt;br&gt;&lt;b&gt;Example:&lt;/b&gt; &lt;code&gt;filter&#x3D;categoryIds:{100|101|102}&lt;/code&gt;  &lt;br&gt;&lt;br&gt;Note that you must URL-encode the parameter list, which results in the following filter for the above example: &lt;br&gt;&lt;br&gt; &amp;nbsp;&amp;nbsp;&lt;code&gt;filter&#x3D;categoryIds%3A%7B100%7C101%7C102%7D&lt;/code&gt; | [optional]

### Return type

[**\TNT\Ebay\Sell\Metadata\V1\Model\NegotiatedPricePolicyResponse**](../Model/NegotiatedPricePolicyResponse.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReturnPolicies()`

```php
getReturnPolicies($marketplace_id, $filter): \TNT\Ebay\Sell\Metadata\V1\Model\ReturnPolicyResponse
```



This method returns the eBay policies that define whether or not you must include a return policy for the items you list in the categories of a specific marketplace, plus the guidelines for creating domestic and international return policies in the different eBay categories.  <br><br>By default, this method returns the entire category tree for the specified marketplace. You can limit the size of the result set by using the <b>filter</b> query parameter to specify only the category IDs you want to review.<br /><br /><span class=\"tablenote\"><span style=\"color:#478415\"><strong>Tip:</strong></span> This method can potentially return a very large response payload. eBay recommends that the response payload be compressed by passing in the <b>Accept-Encoding</b> request header and setting the value to <code>application/gzip</code>.</span>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Metadata\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Metadata\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Metadata\V1\Api\MarketplaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$marketplace_id = 'marketplace_id_example'; // string | This path parameter specifies the eBay marketplace for which policy information is retrieved. See the following page for a list of valid eBay marketplace IDs: <a href=\"/api-docs/static/rest-request-components.html#marketpl\" target=\"_blank\">Request components</a>.
$filter = 'filter_example'; // string | This query parameter limits the response by returning policy information for only the selected sections of the category tree. Supply <b>categoryId</b> values for the sections of the tree you want returned.  <br><br>When you specify a <b>categoryId</b> value, the returned category tree includes the policies for that parent node, plus the policies for any leaf nodes below that parent node.  <br><br>The parameter takes a list of <b>categoryId</b> values and you can specify up to 50 separate category IDs. Separate multiple values with a pipe character ('|'). If you specify more than 50 <code>categoryId</code> values, eBay returns the policies for the first 50 IDs and a warning that not all categories were returned.  <br><br><b>Example:</b> <code>filter=categoryIds:{100|101|102}</code>  <br><br>Note that you must URL-encode the parameter list, which results in the following filter for the above example: <br><br> &nbsp;&nbsp;<code>filter=categoryIds%3A%7B100%7C101%7C102%7D</code>

try {
    $result = $apiInstance->getReturnPolicies($marketplace_id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketplaceApi->getReturnPolicies: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplace_id** | **string**| This path parameter specifies the eBay marketplace for which policy information is retrieved. See the following page for a list of valid eBay marketplace IDs: &lt;a href&#x3D;\&quot;/api-docs/static/rest-request-components.html#marketpl\&quot; target&#x3D;\&quot;_blank\&quot;&gt;Request components&lt;/a&gt;. |
 **filter** | **string**| This query parameter limits the response by returning policy information for only the selected sections of the category tree. Supply &lt;b&gt;categoryId&lt;/b&gt; values for the sections of the tree you want returned.  &lt;br&gt;&lt;br&gt;When you specify a &lt;b&gt;categoryId&lt;/b&gt; value, the returned category tree includes the policies for that parent node, plus the policies for any leaf nodes below that parent node.  &lt;br&gt;&lt;br&gt;The parameter takes a list of &lt;b&gt;categoryId&lt;/b&gt; values and you can specify up to 50 separate category IDs. Separate multiple values with a pipe character (&#39;|&#39;). If you specify more than 50 &lt;code&gt;categoryId&lt;/code&gt; values, eBay returns the policies for the first 50 IDs and a warning that not all categories were returned.  &lt;br&gt;&lt;br&gt;&lt;b&gt;Example:&lt;/b&gt; &lt;code&gt;filter&#x3D;categoryIds:{100|101|102}&lt;/code&gt;  &lt;br&gt;&lt;br&gt;Note that you must URL-encode the parameter list, which results in the following filter for the above example: &lt;br&gt;&lt;br&gt; &amp;nbsp;&amp;nbsp;&lt;code&gt;filter&#x3D;categoryIds%3A%7B100%7C101%7C102%7D&lt;/code&gt; | [optional]

### Return type

[**\TNT\Ebay\Sell\Metadata\V1\Model\ReturnPolicyResponse**](../Model/ReturnPolicyResponse.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
