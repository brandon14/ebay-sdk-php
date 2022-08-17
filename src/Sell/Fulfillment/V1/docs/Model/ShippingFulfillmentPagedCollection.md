# # ShippingFulfillmentPagedCollection

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**fulfillments** | [**\TNT\Ebay\Sell\Fulfillment\V1\Model\ShippingFulfillment[]**](ShippingFulfillment.md) | This array contains one or more fulfillments required for the order that was specified in method endpoint. | [optional]
**total** | **int** | The total number of fulfillments in the specified order.&lt;br /&gt;&lt;br /&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;strong&gt;Note:&lt;/strong&gt; If no fulfillments are found for the order, this field is returned with a value of &lt;code&gt;0&lt;/code&gt;.&lt;/span&gt; | [optional]
**warnings** | [**\TNT\Ebay\Sell\Fulfillment\V1\Model\Error[]**](Error.md) | This array is only returned if one or more errors or warnings occur with the call request. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
