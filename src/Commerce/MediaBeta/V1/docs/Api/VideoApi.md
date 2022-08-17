# TNT\Ebay\Commerce\MediaBeta\V1\VideoApi

All URIs are relative to https://apim.ebay.com/commerce/media/v1_beta.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createVideo()**](VideoApi.md#createVideo) | **POST** /video | 
[**getVideo()**](VideoApi.md#getVideo) | **GET** /video/{video_id} | 
[**uploadVideo()**](VideoApi.md#uploadVideo) | **POST** /video/{video_id}/upload | 


## `createVideo()`

```php
createVideo($body)
```



This method creates a video. When using this method, specify the <b>title</b>, <b>size</b>, and <b>classification</b> of the video to be created. <b>Description</b> is an optional field for this method.<br /><br /><span class=\"tablenote\"><span style=\"color:#478415\"><strong>Tip:</strong></span> See <a href=\"https://www.ebay.com/help/selling/listings/creating-managing-listings/add-video-to-listing?id=5272#section3\" target=\"_blank\">Adding a video to your listing</a> in the eBay Seller Center for details about video formatting requirements and restrictions, or visit the relevant eBay site help pages for the region in which the listings will be posted.</span><br /><br />When a video is successfully created, the method returns the HTTP Status Code <code>201 Created.</code>The method also returns the location response header containing the <b>video ID</b>, which you can use to retrieve the video.<br /><br /><span class=\"tablenote\"><span style=\"color:#004680\"><strong>Note:</strong></span> There is no ability to edit metadata on videos at this time. There is also no method to delete videos.</span><br /><br />To upload a created video, use the <a href=\" /api-docs/commerce/media/resources/video/methods/uploadVideo\" target=\"_blank\">uploadVideo</a> method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Authorization Code
$config = TNT\Ebay\Commerce\MediaBeta\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Commerce\MediaBeta\V1\Api\VideoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \TNT\Ebay\Commerce\MediaBeta\V1\Model\CreateVideoRequest(); // \TNT\Ebay\Commerce\MediaBeta\V1\Model\CreateVideoRequest

try {
    $apiInstance->createVideo($body);
} catch (Exception $e) {
    echo 'Exception when calling VideoApi->createVideo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\TNT\Ebay\Commerce\MediaBeta\V1\Model\CreateVideoRequest**](../Model/CreateVideoRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[Authorization Code](../../README.md#Authorization Code)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getVideo()`

```php
getVideo($video_id): \TNT\Ebay\Commerce\MediaBeta\V1\Model\Video
```



This method retrieves a video's metadata and content given a specified <b>video ID</b>. The method returns the <b>title</b>, <b>size</b>, <b>classification</b>, <b>description</b>, <b>video ID</b>, <b>playList</b>, <b>status</b>, <b>status message</b> (if any), <b>expiration  date</b>, and <b>thumbnail</b> image of the retrieved video. <p>The video’s <b>title</b>, <b>size</b>, <b>classification</b>, and <b>description</b> are set using the <a href=\" /api-docs/commerce/media/resources/video/methods/createVideo\" target=\"_blank\">createVideo</a> method.</p> <p>The video's <b>playList</b> contains two URLs that link to instances of the streaming video based on the supported protocol.</p><p>The <b>status</b> field contains the current status of the video. After a video upload is successfully completed, the video's <b>status</b> will show as <code>PROCESSING</code> until the video reaches one of the terminal states of <code>LIVE</code>, <code>BLOCKED</code> or <code>PROCESSING_FAILED</code>.<p> If a video's processing fails, it could be because the file is corrupted, is too large, or its size doesn’t match what was provided in the metadata. Refer to the error messages to determine the cause of the video’s failure to upload.</p> <p> The <b>status message</b> will indicate why a video was blocked from uploading.</p><p>The video’s <b>expiration date</b> is automatically set to 365 days (one year) after the video’s initial creation.<p>The video's <b>thumbnail</b> image is automatically generated when the video is created.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Authorization Code
$config = TNT\Ebay\Commerce\MediaBeta\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Commerce\MediaBeta\V1\Api\VideoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$video_id = 'video_id_example'; // string | The <b>video ID</b> for the video to be retrieved.

try {
    $result = $apiInstance->getVideo($video_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VideoApi->getVideo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **video_id** | **string**| The &lt;b&gt;video ID&lt;/b&gt; for the video to be retrieved. |

### Return type

[**\TNT\Ebay\Commerce\MediaBeta\V1\Model\Video**](../Model/Video.md)

### Authorization

[Authorization Code](../../README.md#Authorization Code)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uploadVideo()`

```php
uploadVideo($content_type, $video_id, $content_length, $content_range, $body)
```



This method associates the specified file with the specified <b>video ID</b> and uploads the input file. After the file has been uploaded the processing of the file begins.<br /><br /><span class=\"tablenote\"><span style=\"color:#004680\"><strong>Note:</strong></span> The size of the video to be uploaded must exactly match the size of the video's input stream that was set in the <a href=\" /api-docs/commerce/media/resources/video/methods/createVideo\" target=\"_blank\">createVideo</a> method. If the sizes do not match, the video will not upload successfully.</span><br /><br />When a video is successfully uploaded, it returns the HTTP Status Code <code>200 OK</code>.<br /><br />The status flow is <code>PENDING_UPLOAD</code> > <code>PROCESSING</code> > <code>LIVE</code>,  <code>PROCESSING_FAILED</code>, or <code>BLOCKED</code>. After a video upload is successfully completed, the status will show as <code>PROCESSING</code> until the video reaches one of the terminal states of <code>LIVE</code>, <code>BLOCKED</code>, or <code>PROCESSING_FAILED</code>. If the size information (in bytes) provided is incorrect, the API will throw an error.<br /><br /><span class=\"tablenote\"><span style=\"color:#478415\"><strong>Tip:</strong></span> See <a href=\"https://www.ebay.com/help/selling/listings/creating-managing-listings/add-video-to-listing?id=5272#section3\" target=\"_blank\">Adding a video to your listing</a> in the eBay Seller Center for details about video formatting requirements and restrictions, or visit the relevant eBay site help pages for the region in which the listings will be posted.</span><br /><br />To retrieve an uploaded video, use the <a href=\"/api-docs/commerce/media/resources/video/methods/getVideo\" target=\"_blank\">getVideo</a> method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Authorization Code
$config = TNT\Ebay\Commerce\MediaBeta\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Commerce\MediaBeta\V1\Api\VideoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = 'content_type_example'; // string | Use this header to specify the content type for the upload. The Content-Type should be set to <code>application/octet-stream</code>.
$video_id = 'video_id_example'; // string | The <b>video ID</b> for the uploaded video.
$content_length = 'content_length_example'; // string | Use this header to specify the content length for the upload. Use Content-Range: bytes {1}-{2}/{3} and Content-Length:{4} headers.<br /><br /><span class=\"tablenote\"><span style=\"color:#004680\"><strong>Note:</strong></span> This header is optional and is only required for <i>resumable</i> uploads (when an upload is interrupted and must be resumed from a certain point).</span>
$content_range = 'content_range_example'; // string | Use this header to specify the content range for the upload. The Content-Range should be of the following bytes ((?:[0-9]+-[0-9]+)|\\\\\\\\*)/([0-9]+|\\\\\\\\*) pattern.<br /><br /><span class=\"tablenote\"><span style=\"color:#004680\"><strong>Note:</strong></span> This header is optional and is only required for <i>resumable</i> uploads (when an upload is interrupted and must be resumed from a certain point).</span>
$body = array('key' => new \stdClass); // object | The request payload for this method is the input stream for the video source. The input source must be an .mp4 file of the type MPEG-4 Part 10 or Advanced Video Coding (MPEG-4 AVC).

try {
    $apiInstance->uploadVideo($content_type, $video_id, $content_length, $content_range, $body);
} catch (Exception $e) {
    echo 'Exception when calling VideoApi->uploadVideo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**| Use this header to specify the content type for the upload. The Content-Type should be set to &lt;code&gt;application/octet-stream&lt;/code&gt;. |
 **video_id** | **string**| The &lt;b&gt;video ID&lt;/b&gt; for the uploaded video. |
 **content_length** | **string**| Use this header to specify the content length for the upload. Use Content-Range: bytes {1}-{2}/{3} and Content-Length:{4} headers.&lt;br /&gt;&lt;br /&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;span style&#x3D;\&quot;color:#004680\&quot;&gt;&lt;strong&gt;Note:&lt;/strong&gt;&lt;/span&gt; This header is optional and is only required for &lt;i&gt;resumable&lt;/i&gt; uploads (when an upload is interrupted and must be resumed from a certain point).&lt;/span&gt; | [optional]
 **content_range** | **string**| Use this header to specify the content range for the upload. The Content-Range should be of the following bytes ((?:[0-9]+-[0-9]+)|\\\\\\\\*)/([0-9]+|\\\\\\\\*) pattern.&lt;br /&gt;&lt;br /&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;span style&#x3D;\&quot;color:#004680\&quot;&gt;&lt;strong&gt;Note:&lt;/strong&gt;&lt;/span&gt; This header is optional and is only required for &lt;i&gt;resumable&lt;/i&gt; uploads (when an upload is interrupted and must be resumed from a certain point).&lt;/span&gt; | [optional]
 **body** | **object**| The request payload for this method is the input stream for the video source. The input source must be an .mp4 file of the type MPEG-4 Part 10 or Advanced Video Coding (MPEG-4 AVC). | [optional]

### Return type

void (empty response body)

### Authorization

[Authorization Code](../../README.md#Authorization Code)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
