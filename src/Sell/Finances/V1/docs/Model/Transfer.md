# # Transfer

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**funding_source** | [**\TNT\Ebay\Sell\Finances\V1\Model\FundingSource**](FundingSource.md) |  | [optional]
**transaction_date** | **string** | This timestamp indicates the date/time of the transfer. The following (UTC) format is used: &lt;code&gt;YYYY-MM-DDTHH:MM:SS.SSSZ&lt;/code&gt;. For example, &lt;code&gt;2020-08-04T19:09:02.768Z&lt;/code&gt; | [optional]
**transfer_amount** | [**\TNT\Ebay\Sell\Finances\V1\Model\Amount**](Amount.md) |  | [optional]
**transfer_detail** | [**\TNT\Ebay\Sell\Finances\V1\Model\TransferDetail**](TransferDetail.md) |  | [optional]
**transfer_id** | **string** | The unique identifier of the &lt;code&gt;TRANSFER&lt;/code&gt; transaction type. This is the same value that was passed into the end of the call URI. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
