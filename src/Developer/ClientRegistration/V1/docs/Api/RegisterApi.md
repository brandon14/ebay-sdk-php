# TNT\Ebay\Developer\ClientRegistration\V1\RegisterApi

All URIs are relative to https://tppz.ebay.com/developer/registration/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**registerClient()**](RegisterApi.md#registerClient) | **POST** /client/register | 


## `registerClient()`

```php
registerClient($client_settings): \TNT\Ebay\Developer\ClientRegistration\V1\Model\ClientDetails
```



<span class=\"tablenote\"><b>Note:</b> The Client Registration API is not intended for use by developers who have previously registered for a Developer Account on the eBay platform.</span><br/>This call registers a new third party financial application with eBay.<br/><br/><div class=\"msgbox_important\"><p class=\"msgbox_importantInDiv\" data-mc-autonum=\"&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;\"><span class=\"autonumber\"><span><b><span style=\"color: #dd1e31;\" class=\"mcFormatColor\">Important!</span></b></span></span> When calling the <b>registerClient</b> method, Third Party Providers (TPPs) are required to pass their valid eIDAS certificate to eBay via Mutual Transport Layer Security (MTLS) handshake <i>Certificate Request</i> messages.</p></div><br/>A successful call returns an HTTP status code of <b>201 Created</b> and the response payload.<h4>Registering multiple applications</h4>A regulated third party provider (identified by a unique <i>organizationIdentifier</i>) may register up to 15 different applications with eBay provided the unique <a href=\"#request.software_id \">software_id</a> for each application is passed in at the time of registration.<br/><br/>Each <b>registerClient</b> call that passes in a unique <a href=\"#request.software_id \">software_id</a> will generate new <a href=\"#response.client_id \">client_id</a> and <a href=\"#response.client_secret \">client_secret</a> keypairs.<br/><br/>If a third party provider calls <b>registerClient</b> using a previously registered <a href=\"#request.software_id \">software_id</a>, the existing <a href=\"#response.client_id \">client_id</a> and <a href=\"#response.client_secret \">client_secret</a> keypairs are returned.<br/><br/><span class=\"tablenote\"><b>Note:</b> For additional information about using an <i>organizationIdentifier</i>, refer to the following sections of <a href=\"https://www.etsi.org/deliver/etsi_ts/119400_119499/119495/01.05.01_60/ts_119495v010501p.pdf \" target=\"_blank \">ETSI Technical Specification 119 495</a><ul><li>Section 5.2.1: Authorization Number or other recognized identifier for Open Banking;</li><li>Section 5.4: Profile Requirements for Digital Signatures.</li></ul></span>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new TNT\Ebay\Developer\ClientRegistration\V1\Api\RegisterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$client_settings = new \TNT\Ebay\Developer\ClientRegistration\V1\Model\ClientSettings(); // \TNT\Ebay\Developer\ClientRegistration\V1\Model\ClientSettings | This container stores information about the third party provider's financial application that is being registered.

try {
    $result = $apiInstance->registerClient($client_settings);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegisterApi->registerClient: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_settings** | [**\TNT\Ebay\Developer\ClientRegistration\V1\Model\ClientSettings**](../Model/ClientSettings.md)| This container stores information about the third party provider&#39;s financial application that is being registered. |

### Return type

[**\TNT\Ebay\Developer\ClientRegistration\V1\Model\ClientDetails**](../Model/ClientDetails.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
