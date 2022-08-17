# TNT\Ebay\Commerce\Taxonomy\V1\CategoryTreeApi

All URIs are relative to https://api.ebay.com/commerce/taxonomy/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**fetchItemAspects()**](CategoryTreeApi.md#fetchItemAspects) | **GET** /category_tree/{category_tree_id}/fetch_item_aspects | Get Aspects for All Leaf Categories in a Marketplace
[**getCategorySubtree()**](CategoryTreeApi.md#getCategorySubtree) | **GET** /category_tree/{category_tree_id}/get_category_subtree | Get a Category Subtree
[**getCategorySuggestions()**](CategoryTreeApi.md#getCategorySuggestions) | **GET** /category_tree/{category_tree_id}/get_category_suggestions | Get Suggested Categories
[**getCategoryTree()**](CategoryTreeApi.md#getCategoryTree) | **GET** /category_tree/{category_tree_id} | Get a Category Tree
[**getCompatibilityProperties()**](CategoryTreeApi.md#getCompatibilityProperties) | **GET** /category_tree/{category_tree_id}/get_compatibility_properties | Get Compatibility Properties
[**getCompatibilityPropertyValues()**](CategoryTreeApi.md#getCompatibilityPropertyValues) | **GET** /category_tree/{category_tree_id}/get_compatibility_property_values | Get Compatibility Property Values
[**getDefaultCategoryTreeId()**](CategoryTreeApi.md#getDefaultCategoryTreeId) | **GET** /get_default_category_tree_id | Get a Default Category Tree ID
[**getItemAspectsForCategory()**](CategoryTreeApi.md#getItemAspectsForCategory) | **GET** /category_tree/{category_tree_id}/get_item_aspects_for_category | 


## `fetchItemAspects()`

```php
fetchItemAspects($category_tree_id): \TNT\Ebay\Commerce\Taxonomy\V1\Model\GetCategoriesAspectResponse
```

Get Aspects for All Leaf Categories in a Marketplace

This call returns a complete list of aspects for all of the leaf categories that belong to an eBay marketplace. The eBay marketplace is specified through the <b>category_tree_id</b> URI parameter.<br /><br /><span class=\"tablenote\"> <strong>Note:</strong> A successful call returns a payload as a gzipped JSON file sent as a binary file using the content-type:application/octet-stream in the response. This file may be large (over 100 MB, compressed). Extract the JSON file from the compressed file with a utility that handles .gz or .gzip. The open source <a href=\"https://github.com/eBay/taxonomy-sdk\" target=\"_blank\">Taxonomy SDK</a> can be used to compare the aspect metadata that is returned in this response. The <b>Taxonomy SDK</b> uses this method to surface changes (new, modified, and removed entities) between an updated version of a bulk downloaded file relative to a previous version.</span>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Commerce\Taxonomy\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Commerce\Taxonomy\V1\Api\CategoryTreeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$category_tree_id = 'category_tree_id_example'; // string | The unique identifier of the eBay category tree being requested.

try {
    $result = $apiInstance->fetchItemAspects($category_tree_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoryTreeApi->fetchItemAspects: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **category_tree_id** | **string**| The unique identifier of the eBay category tree being requested. |

### Return type

[**\TNT\Ebay\Commerce\Taxonomy\V1\Model\GetCategoriesAspectResponse**](../Model/GetCategoriesAspectResponse.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCategorySubtree()`

```php
getCategorySubtree($category_id, $category_tree_id): \TNT\Ebay\Commerce\Taxonomy\V1\Model\CategorySubtree
```

Get a Category Subtree

This call retrieves the details of all nodes of the category tree hierarchy (the subtree) below a specified category of a category tree. You identify the tree using the <b>category_tree_id</b> parameter, which was returned by the <b>getDefaultCategoryTreeId</b> call in the <b>categoryTreeId</b> field.<br /><br /><span class=\"tablenote\"> <strong>Note:</strong> This call can return a very large payload, so you are strongly advised to submit the request with the following HTTP header:       <br /><br /><code>&nbsp;&nbsp;Accept-Encoding: application/gzip</code>       <br /><br />With this header (in addition to the required headers described under <a href=\"/api-docs/static/rest-request-components.html#HTTP\">HTTP Request Headers</a>), the call returns the response with <b>gzip</b> compression. </span>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Commerce\Taxonomy\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Commerce\Taxonomy\V1\Api\CategoryTreeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$category_id = 'category_id_example'; // string | The unique identifier of the category at the top of the subtree being requested. <br /><br />    <span class=\"tablenote\"> <strong>Note:</strong> If the <b>category_id</b> submitted identifies the root node of the tree, this call returns an error. To retrieve the complete tree, use this value with the <b>getCategoryTree</b> call.                   <br /><br />   If the <b>category_id</b> submitted identifies a leaf node of the tree, the call response will contain information about only that leaf node, which is a valid subtree.   <!-- <br /><br /> This call also returns an error if <b>category_id</b> identifies a deprecated category. This can occur if you routinely cache your category trees. Use the <b>Get Deprecated Categories and Mapping</b> call to determine which current category should be used in place of the deprecated category, and use the <b>getCategoryTree</b> call to update your cached copy of the tree. --> </span>
$category_tree_id = 'category_tree_id_example'; // string | The unique identifier of the eBay category tree from which a category subtree is being requested.

try {
    $result = $apiInstance->getCategorySubtree($category_id, $category_tree_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoryTreeApi->getCategorySubtree: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **category_id** | **string**| The unique identifier of the category at the top of the subtree being requested. &lt;br /&gt;&lt;br /&gt;    &lt;span class&#x3D;\&quot;tablenote\&quot;&gt; &lt;strong&gt;Note:&lt;/strong&gt; If the &lt;b&gt;category_id&lt;/b&gt; submitted identifies the root node of the tree, this call returns an error. To retrieve the complete tree, use this value with the &lt;b&gt;getCategoryTree&lt;/b&gt; call.                   &lt;br /&gt;&lt;br /&gt;   If the &lt;b&gt;category_id&lt;/b&gt; submitted identifies a leaf node of the tree, the call response will contain information about only that leaf node, which is a valid subtree.   &lt;!-- &lt;br /&gt;&lt;br /&gt; This call also returns an error if &lt;b&gt;category_id&lt;/b&gt; identifies a deprecated category. This can occur if you routinely cache your category trees. Use the &lt;b&gt;Get Deprecated Categories and Mapping&lt;/b&gt; call to determine which current category should be used in place of the deprecated category, and use the &lt;b&gt;getCategoryTree&lt;/b&gt; call to update your cached copy of the tree. --&gt; &lt;/span&gt; |
 **category_tree_id** | **string**| The unique identifier of the eBay category tree from which a category subtree is being requested. |

### Return type

[**\TNT\Ebay\Commerce\Taxonomy\V1\Model\CategorySubtree**](../Model/CategorySubtree.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCategorySuggestions()`

```php
getCategorySuggestions($category_tree_id, $q): \TNT\Ebay\Commerce\Taxonomy\V1\Model\CategorySuggestionResponse
```

Get Suggested Categories

This call returns an array of category tree leaf nodes in the specified category tree that are considered by eBay to most closely correspond to the query string <b>q</b>. Returned with each suggested node is a localized name for that category (based on the <b>Accept-Language</b> header specified for the call), and details about each of the category's ancestor nodes, extending from its immediate parent up to the root of the category tree.<br /><br /><span class=\"tablenote\"> <strong>Note:</strong> This call can return a large payload, so you are advised to submit the request with the following HTTP header:<br /><br /><code>&nbsp;&nbsp;Accept-Encoding: application/gzip</code><br /><br />              With this header (in addition to the required headers described under <a href=\"/api-docs/static/rest-request-components.html#HTTP\">HTTP Request Headers</a>), the call returns the response with <b>gzip</b> compression. </span><br /><br />You identify the tree using the <b>category_tree_id</b> parameter, which was returned by the <b>getDefaultCategoryTreeId</b> call in the <b>categoryTreeId</b> field.<br /><br /><span class=\"tablenote\"> <strong><span style=\"color:red\">Important:</span></strong> This call is not supported in the Sandbox environment. It will return a response payload in which the <b>categoryName</b> fields contain random or boilerplate text regardless of the query submitted. </span>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Commerce\Taxonomy\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Commerce\Taxonomy\V1\Api\CategoryTreeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$category_tree_id = 'category_tree_id_example'; // string | The unique identifier of the eBay category tree for which suggested nodes are being requested.
$q = 'q_example'; // string | A quoted string that describes or characterizes the item being offered for sale. The string format is free form, and can contain any combination of phrases or keywords. eBay will parse the string and return suggested categories for the item.

try {
    $result = $apiInstance->getCategorySuggestions($category_tree_id, $q);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoryTreeApi->getCategorySuggestions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **category_tree_id** | **string**| The unique identifier of the eBay category tree for which suggested nodes are being requested. |
 **q** | **string**| A quoted string that describes or characterizes the item being offered for sale. The string format is free form, and can contain any combination of phrases or keywords. eBay will parse the string and return suggested categories for the item. |

### Return type

[**\TNT\Ebay\Commerce\Taxonomy\V1\Model\CategorySuggestionResponse**](../Model/CategorySuggestionResponse.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCategoryTree()`

```php
getCategoryTree($category_tree_id): \TNT\Ebay\Commerce\Taxonomy\V1\Model\CategoryTree
```

Get a Category Tree

This call retrieves the complete category tree that is identified by the <b>category_tree_id</b> parameter. The value of <b>category_tree_id</b> was returned by the <b>getDefaultCategoryTreeId</b> call in the <b>categoryTreeId</b> field. The response contains details of all nodes of the specified eBay category tree, as well as the eBay marketplaces that use this category tree.      <br /><br />            <span class=\"tablenote\"> <strong>Note:</strong> This call can return a very large payload, so you are strongly advised to submit the request with the following HTTP header:       <br /><br />     <code>&nbsp;&nbsp;Accept-Encoding: application/gzip</code>       <br /><br />             With this header (in addition to the required headers described under <a href=\"/api-docs/static/rest-request-components.html#HTTP\">HTTP Request Headers</a>), the call returns the response with <b>gzip</b> compression.</span>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Commerce\Taxonomy\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Commerce\Taxonomy\V1\Api\CategoryTreeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$category_tree_id = 'category_tree_id_example'; // string | The unique identifier of the eBay category tree being requested.

try {
    $result = $apiInstance->getCategoryTree($category_tree_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoryTreeApi->getCategoryTree: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **category_tree_id** | **string**| The unique identifier of the eBay category tree being requested. |

### Return type

[**\TNT\Ebay\Commerce\Taxonomy\V1\Model\CategoryTree**](../Model/CategoryTree.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCompatibilityProperties()`

```php
getCompatibilityProperties($category_tree_id, $category_id): \TNT\Ebay\Commerce\Taxonomy\V1\Model\GetCompatibilityMetadataResponse
```

Get Compatibility Properties

This call retrieves the compatible vehicle aspects that are used to define a motor vehicle that is compatible with a motor vehicle part or accessory. The values that are retrieved here might include motor vehicle aspects such as 'Make', 'Model', 'Year', 'Engine', and 'Trim', and each of these aspects are localized for the eBay marketplace.<br/><br/> The <strong>category_tree_id</strong> value is passed in as a path parameter, and this value identifies the eBay category tree. The <strong>category_id</strong> value is passed in as a query parameter, as this parameter is also required. The specified category must be a category that supports parts compatibility.<br/><br/> At this time, this operation only supports parts and accessories listings for cars, trucks, and motorcycles (not boats,  power sports, or any other vehicle types). Only the following eBay marketplaces support parts compatibility:<ul><li>eBay US (Motors and non-Motors categories)</li><li>eBay Canada (Motors and non-Motors categories)</li><li>eBay UK</li><li>eBay Germany</li><li>eBay Australia</li><li>eBay France</li><li>eBay Italy</li><li>eBay Spain</li></ul>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Commerce\Taxonomy\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Commerce\Taxonomy\V1\Api\CategoryTreeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$category_tree_id = 'category_tree_id_example'; // string | This is the unique identifier of category tree. The following is the list of <strong>category_tree_id</strong> values and the eBay marketplaces that they represent. One of these ID values must be passed in as a path parameter, and the <strong>category_id</strong> value, that is passed in as query parameter, must be a valid eBay category on that eBay marketplace that supports parts compatibility for cars, trucks, or motorcyles.<br/><br/><ul><li>eBay US: 0</li><li>eBay Motors US: 100</li><li>eBay Canada: 2</li><li>eBay UK: 3</li><li>eBay Germany: 77</li><li>eBay Australia: 15</li><li>eBay France: 71</li><li>eBay Italy: 101</li><li>eBay Spain: 186</li></ul>
$category_id = 'category_id_example'; // string | The unique identifier of an eBay category. This eBay category must be a valid eBay category on the specified eBay marketplace, and the category must support parts compatibility for cars, trucks, or motorcyles. The <strong>getAutomotivePartsCompatibilityPolicies</strong> method of the Selling Metadata API can be used to retrieve all eBay categories for an eBay marketplace that supports parts compatibility cars, trucks, or motorcyles. The <strong>getAutomotivePartsCompatibilityPolicies</strong> method can also be used to see if one or more specific eBay categories support parts compatibility.

try {
    $result = $apiInstance->getCompatibilityProperties($category_tree_id, $category_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoryTreeApi->getCompatibilityProperties: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **category_tree_id** | **string**| This is the unique identifier of category tree. The following is the list of &lt;strong&gt;category_tree_id&lt;/strong&gt; values and the eBay marketplaces that they represent. One of these ID values must be passed in as a path parameter, and the &lt;strong&gt;category_id&lt;/strong&gt; value, that is passed in as query parameter, must be a valid eBay category on that eBay marketplace that supports parts compatibility for cars, trucks, or motorcyles.&lt;br/&gt;&lt;br/&gt;&lt;ul&gt;&lt;li&gt;eBay US: 0&lt;/li&gt;&lt;li&gt;eBay Motors US: 100&lt;/li&gt;&lt;li&gt;eBay Canada: 2&lt;/li&gt;&lt;li&gt;eBay UK: 3&lt;/li&gt;&lt;li&gt;eBay Germany: 77&lt;/li&gt;&lt;li&gt;eBay Australia: 15&lt;/li&gt;&lt;li&gt;eBay France: 71&lt;/li&gt;&lt;li&gt;eBay Italy: 101&lt;/li&gt;&lt;li&gt;eBay Spain: 186&lt;/li&gt;&lt;/ul&gt; |
 **category_id** | **string**| The unique identifier of an eBay category. This eBay category must be a valid eBay category on the specified eBay marketplace, and the category must support parts compatibility for cars, trucks, or motorcyles. The &lt;strong&gt;getAutomotivePartsCompatibilityPolicies&lt;/strong&gt; method of the Selling Metadata API can be used to retrieve all eBay categories for an eBay marketplace that supports parts compatibility cars, trucks, or motorcyles. The &lt;strong&gt;getAutomotivePartsCompatibilityPolicies&lt;/strong&gt; method can also be used to see if one or more specific eBay categories support parts compatibility. |

### Return type

[**\TNT\Ebay\Commerce\Taxonomy\V1\Model\GetCompatibilityMetadataResponse**](../Model/GetCompatibilityMetadataResponse.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCompatibilityPropertyValues()`

```php
getCompatibilityPropertyValues($category_tree_id, $compatibility_property, $category_id, $filter): \TNT\Ebay\Commerce\Taxonomy\V1\Model\GetCompatibilityPropertyValuesResponse
```

Get Compatibility Property Values

This call retrieves applicable compatible vehicle property values based on the specified eBay marketplace, specified eBay category, and filters used in the request. Compatible vehicle properties are returned in the <strong>compatibilityProperties.name</strong> field of a <strong>getCompatibilityProperties</strong> response. <br/><br/> One compatible vehicle property applicable to the specified eBay marketplace and eBay category is specified through the required <strong>compatibility_property</strong> filter. Then, the user has the option of further restricting the compatible vehicle property values that are returned in the response by specifying one or more compatible vehicle property name/value pairs through the <strong>filter</strong> query parameter.<br/><br/> See the documentation in <strong>URI parameters</strong> section for more information on using the <strong>compatibility_property</strong> and <strong>filter</strong> query parameters together to customize the data that is retrieved.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Commerce\Taxonomy\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Commerce\Taxonomy\V1\Api\CategoryTreeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$category_tree_id = 'category_tree_id_example'; // string | This is the unique identifier of the category tree. The following is the list of <strong>category_tree_id</strong> values and the eBay marketplaces that they represent. One of these ID values must be passed in as a path parameter, and the <strong>category_id</strong> value, that is passed in as query parameter, must be a valid eBay category on that eBay marketplace that supports parts compatibility for cars, trucks, or motorcyles.<br/><br/><ul><li>eBay US: 0</li><li>eBay Motors US: 100</li><li>eBay Canada: 2</li><li>eBay UK: 3</li><li>eBay Germany: 77</li><li>eBay Australia: 15</li><li>eBay France: 71</li><li>eBay Italy: 101</li><li>eBay Spain: 186</li></ul>
$compatibility_property = 'compatibility_property_example'; // string | One compatible vehicle property applicable to the specified eBay marketplace and eBay category is specified in this required filter. Compatible vehicle properties are returned in the <strong>compatibilityProperties.name</strong> field of a <strong>getCompatibilityProperties</strong> response. <br/><br/> For example, if you wanted to retrieve all vehicle trims for a 2018 Toyota Camry, you would set this filter as follows: <code>compatibility_property=Trim</code>; and then include the following three name/value filters through one <strong>filter</strong> parameter: <code>filter=Year:2018,Make:Toyota,Model:Camry</code>. So, putting this all together, your URI would look something like this:<br/><br/><pre><code>GET https://api.ebay.com/commerce/<br/>taxonomy/v1/category_tree/100/<br/>get_compatibility_property_values?<br/><strong>category_id</strong>=6016&<strong>compatibility_property</strong>=Trim<br/>&<strong>filter</strong>=filter=Year:2018,Make:Toyota,Model:Camry</code></pre>
$category_id = 'category_id_example'; // string | The unique identifier of an eBay category. This eBay category must be a valid eBay category on the specified eBay marketplace, and the category must support parts compatibility for cars, trucks, or motorcyles. The <strong>getAutomotivePartsCompatibilityPolicies</strong> method of the Selling Metadata API can be used to retrieve all eBay categories for an eBay marketplace that supports parts compatibility cars, trucks, or motorcyles. The <strong>getAutomotivePartsCompatibilityPolicies</strong> method can also be used to see if one or more specific eBay categories support parts compatibility.
$filter = 'filter_example'; // string | One or more compatible vehicle property name/value pairs are passed in through this query parameter. The compatible vehicle property name and corresponding value are delimited with a colon (:), such as <code>filter=Year:2018</code>, and multiple compatible vehicle property name/value pairs are delimited with a comma (,). <br/><br/> For example, if you wanted to retrieve all vehicle trims for a 2018 Toyota Camry, you would set the <strong>compatibility_property</strong> filter as follows: <code>compatibility_property=Trim</code>; and then include the following three name/value filters through one <strong>filter</strong> parameter: <code>filter=Year:2018,Make:Toyota,Model:Camry</code>. So, putting this all together, your URI would look something like this:<br/><br/><pre><code>GET https://api.ebay.com/commerce/<br/>taxonomy/v1/category_tree/100/<br/>get_compatibility_property_values?<br/><strong>category_id</strong>=6016&<strong>compatibility_property</strong>=Trim<br/>&<strong>filter</strong>=filter=Year:2018,Make:Toyota,Model:Camry</code></pre> For implementation help, refer to eBay API documentation at https://developer.ebay.com/api-docs/commerce/taxonomy/types/txn:ConstraintFilter

try {
    $result = $apiInstance->getCompatibilityPropertyValues($category_tree_id, $compatibility_property, $category_id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoryTreeApi->getCompatibilityPropertyValues: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **category_tree_id** | **string**| This is the unique identifier of the category tree. The following is the list of &lt;strong&gt;category_tree_id&lt;/strong&gt; values and the eBay marketplaces that they represent. One of these ID values must be passed in as a path parameter, and the &lt;strong&gt;category_id&lt;/strong&gt; value, that is passed in as query parameter, must be a valid eBay category on that eBay marketplace that supports parts compatibility for cars, trucks, or motorcyles.&lt;br/&gt;&lt;br/&gt;&lt;ul&gt;&lt;li&gt;eBay US: 0&lt;/li&gt;&lt;li&gt;eBay Motors US: 100&lt;/li&gt;&lt;li&gt;eBay Canada: 2&lt;/li&gt;&lt;li&gt;eBay UK: 3&lt;/li&gt;&lt;li&gt;eBay Germany: 77&lt;/li&gt;&lt;li&gt;eBay Australia: 15&lt;/li&gt;&lt;li&gt;eBay France: 71&lt;/li&gt;&lt;li&gt;eBay Italy: 101&lt;/li&gt;&lt;li&gt;eBay Spain: 186&lt;/li&gt;&lt;/ul&gt; |
 **compatibility_property** | **string**| One compatible vehicle property applicable to the specified eBay marketplace and eBay category is specified in this required filter. Compatible vehicle properties are returned in the &lt;strong&gt;compatibilityProperties.name&lt;/strong&gt; field of a &lt;strong&gt;getCompatibilityProperties&lt;/strong&gt; response. &lt;br/&gt;&lt;br/&gt; For example, if you wanted to retrieve all vehicle trims for a 2018 Toyota Camry, you would set this filter as follows: &lt;code&gt;compatibility_property&#x3D;Trim&lt;/code&gt;; and then include the following three name/value filters through one &lt;strong&gt;filter&lt;/strong&gt; parameter: &lt;code&gt;filter&#x3D;Year:2018,Make:Toyota,Model:Camry&lt;/code&gt;. So, putting this all together, your URI would look something like this:&lt;br/&gt;&lt;br/&gt;&lt;pre&gt;&lt;code&gt;GET https://api.ebay.com/commerce/&lt;br/&gt;taxonomy/v1/category_tree/100/&lt;br/&gt;get_compatibility_property_values?&lt;br/&gt;&lt;strong&gt;category_id&lt;/strong&gt;&#x3D;6016&amp;&lt;strong&gt;compatibility_property&lt;/strong&gt;&#x3D;Trim&lt;br/&gt;&amp;&lt;strong&gt;filter&lt;/strong&gt;&#x3D;filter&#x3D;Year:2018,Make:Toyota,Model:Camry&lt;/code&gt;&lt;/pre&gt; |
 **category_id** | **string**| The unique identifier of an eBay category. This eBay category must be a valid eBay category on the specified eBay marketplace, and the category must support parts compatibility for cars, trucks, or motorcyles. The &lt;strong&gt;getAutomotivePartsCompatibilityPolicies&lt;/strong&gt; method of the Selling Metadata API can be used to retrieve all eBay categories for an eBay marketplace that supports parts compatibility cars, trucks, or motorcyles. The &lt;strong&gt;getAutomotivePartsCompatibilityPolicies&lt;/strong&gt; method can also be used to see if one or more specific eBay categories support parts compatibility. |
 **filter** | **string**| One or more compatible vehicle property name/value pairs are passed in through this query parameter. The compatible vehicle property name and corresponding value are delimited with a colon (:), such as &lt;code&gt;filter&#x3D;Year:2018&lt;/code&gt;, and multiple compatible vehicle property name/value pairs are delimited with a comma (,). &lt;br/&gt;&lt;br/&gt; For example, if you wanted to retrieve all vehicle trims for a 2018 Toyota Camry, you would set the &lt;strong&gt;compatibility_property&lt;/strong&gt; filter as follows: &lt;code&gt;compatibility_property&#x3D;Trim&lt;/code&gt;; and then include the following three name/value filters through one &lt;strong&gt;filter&lt;/strong&gt; parameter: &lt;code&gt;filter&#x3D;Year:2018,Make:Toyota,Model:Camry&lt;/code&gt;. So, putting this all together, your URI would look something like this:&lt;br/&gt;&lt;br/&gt;&lt;pre&gt;&lt;code&gt;GET https://api.ebay.com/commerce/&lt;br/&gt;taxonomy/v1/category_tree/100/&lt;br/&gt;get_compatibility_property_values?&lt;br/&gt;&lt;strong&gt;category_id&lt;/strong&gt;&#x3D;6016&amp;&lt;strong&gt;compatibility_property&lt;/strong&gt;&#x3D;Trim&lt;br/&gt;&amp;&lt;strong&gt;filter&lt;/strong&gt;&#x3D;filter&#x3D;Year:2018,Make:Toyota,Model:Camry&lt;/code&gt;&lt;/pre&gt; For implementation help, refer to eBay API documentation at https://developer.ebay.com/api-docs/commerce/taxonomy/types/txn:ConstraintFilter | [optional]

### Return type

[**\TNT\Ebay\Commerce\Taxonomy\V1\Model\GetCompatibilityPropertyValuesResponse**](../Model/GetCompatibilityPropertyValuesResponse.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDefaultCategoryTreeId()`

```php
getDefaultCategoryTreeId($marketplace_id, $accept_language): \TNT\Ebay\Commerce\Taxonomy\V1\Model\BaseCategoryTree
```

Get a Default Category Tree ID

A given eBay marketplace might use multiple category trees, but one of those trees is considered to be the default for that marketplace. This call retrieves a reference to the default category tree associated with the specified eBay marketplace ID. The response includes only the tree's unique identifier and version, which you can use to retrieve more details about the tree, its structure, and its individual category nodes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Commerce\Taxonomy\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Commerce\Taxonomy\V1\Api\CategoryTreeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$marketplace_id = 'marketplace_id_example'; // string | The ID of the eBay marketplace for which the category tree ID is being requested. For a list of supported marketplace IDs, see <a href=\"/api-docs/commerce/taxonomy/static/supportedmarketplaces.html\">Marketplaces with Default Category Trees</a>.
$accept_language = 'accept_language_example'; // string | A header used to indicate the natural language the seller prefers for the response.<br /><br />This specifies the language that the seller wants to use when the field values provided in the request body are displayed to consumers.<br /><br /><span class=\"tablenote\"> <strong>Note:</strong> For details, see <i>Accept-Language</i> in <a href=\"/api-docs/static/rest-request-components.html#headers\">HTTP request headers</a>.</span><br /><br /><b>Valid Values:</b> <ul><li>For EBAY_CA in French:<br /><code>Accept-Language: fr-CA</code></li><li>For EBAY_BE in French:<br /><code>Accept-Language: fr-BE</code></li></ul>

try {
    $result = $apiInstance->getDefaultCategoryTreeId($marketplace_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoryTreeApi->getDefaultCategoryTreeId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplace_id** | **string**| The ID of the eBay marketplace for which the category tree ID is being requested. For a list of supported marketplace IDs, see &lt;a href&#x3D;\&quot;/api-docs/commerce/taxonomy/static/supportedmarketplaces.html\&quot;&gt;Marketplaces with Default Category Trees&lt;/a&gt;. |
 **accept_language** | **string**| A header used to indicate the natural language the seller prefers for the response.&lt;br /&gt;&lt;br /&gt;This specifies the language that the seller wants to use when the field values provided in the request body are displayed to consumers.&lt;br /&gt;&lt;br /&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt; &lt;strong&gt;Note:&lt;/strong&gt; For details, see &lt;i&gt;Accept-Language&lt;/i&gt; in &lt;a href&#x3D;\&quot;/api-docs/static/rest-request-components.html#headers\&quot;&gt;HTTP request headers&lt;/a&gt;.&lt;/span&gt;&lt;br /&gt;&lt;br /&gt;&lt;b&gt;Valid Values:&lt;/b&gt; &lt;ul&gt;&lt;li&gt;For EBAY_CA in French:&lt;br /&gt;&lt;code&gt;Accept-Language: fr-CA&lt;/code&gt;&lt;/li&gt;&lt;li&gt;For EBAY_BE in French:&lt;br /&gt;&lt;code&gt;Accept-Language: fr-BE&lt;/code&gt;&lt;/li&gt;&lt;/ul&gt; | [optional]

### Return type

[**\TNT\Ebay\Commerce\Taxonomy\V1\Model\BaseCategoryTree**](../Model/BaseCategoryTree.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getItemAspectsForCategory()`

```php
getItemAspectsForCategory($category_id, $category_tree_id): \TNT\Ebay\Commerce\Taxonomy\V1\Model\AspectMetadata
```



This call returns a list of <i>aspects</i> that are appropriate or necessary for accurately describing items in the specified leaf category. Each aspect identifies an item attribute (for example, color) for which the seller will be required or encouraged to provide a value (or variation values) when offering an item in that category on eBay.<br /><br />For each aspect, <b>getItemAspectsForCategory</b> provides complete metadata, including: <ul> <li>The aspect's data type, format, and entry mode</li> <li>Whether the aspect is required in listings</li> <li>Whether the aspect can be used for item variations</li> <li>Whether the aspect accepts multiple values for an item</li> <li>Allowed values for the aspect</li> </ul> Use this information to construct an interface through which sellers can enter or select the appropriate values for their items or item variations. Once you collect those values, include them as product aspects when creating inventory items using the Inventory API.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Commerce\Taxonomy\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Commerce\Taxonomy\V1\Api\CategoryTreeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$category_id = 'category_id_example'; // string | The unique identifier of the leaf category for which aspects are being requested.          <br /><br />                 <span class=\"tablenote\"> <strong>Note:</strong> If the <b>category_id</b> submitted does not identify a leaf node of the tree, this call returns an error. </span>
$category_tree_id = 'category_tree_id_example'; // string | The unique identifier of the eBay category tree from which the specified category's aspects are being requested.

try {
    $result = $apiInstance->getItemAspectsForCategory($category_id, $category_tree_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoryTreeApi->getItemAspectsForCategory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **category_id** | **string**| The unique identifier of the leaf category for which aspects are being requested.          &lt;br /&gt;&lt;br /&gt;                 &lt;span class&#x3D;\&quot;tablenote\&quot;&gt; &lt;strong&gt;Note:&lt;/strong&gt; If the &lt;b&gt;category_id&lt;/b&gt; submitted does not identify a leaf node of the tree, this call returns an error. &lt;/span&gt; |
 **category_tree_id** | **string**| The unique identifier of the eBay category tree from which the specified category&#39;s aspects are being requested. |

### Return type

[**\TNT\Ebay\Commerce\Taxonomy\V1\Model\AspectMetadata**](../Model/AspectMetadata.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
