# # OrderFilterCriteria

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**creation_date_range** | [**\TNT\Ebay\Sell\Feed\V1\Model\DateRange**](DateRange.md) |  | [optional]
**modified_date_range** | [**\TNT\Ebay\Sell\Feed\V1\Model\DateRange**](DateRange.md) |  | [optional]
**order_status** | **string** | The order status of the orders returned. If the filter is omitted from createOrderTask call, orders that are in both &lt;code&gt;ACTIVE &lt;/code&gt;and&lt;code&gt; COMPLETED&lt;/code&gt; states are returned. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/sell/feed/types/api:OrderStatusEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
