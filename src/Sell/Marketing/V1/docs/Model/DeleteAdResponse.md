# # DeleteAdResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ad_id** | **string** | The unique identifier of the ad that was deleted, or the ad that the seller attempted to delete. | [optional]
**errors** | [**\TNT\Ebay\Sell\Marketing\V1\Model\Error[]**](Error.md) | An array of the errors or warnings associated with the request. | [optional]
**listing_id** | **string** | A unique eBay-assigned ID for a listing that is generated when the listing is created. | [optional]
**status_code** | **int** | An HTTP status code that indicates the response-status of the request. Check this code to see if the ad was successfully deleted.&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt;A status code is returned for each ad that the seller deletes, or attempts to delete.&lt;/span&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
