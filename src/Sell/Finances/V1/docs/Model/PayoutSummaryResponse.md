# # PayoutSummaryResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | [**\TNT\Ebay\Sell\Finances\V1\Model\Amount**](Amount.md) |  | [optional]
**payout_count** | **int** | This integer value indicates the total count of payouts to the seller that match the input criteria. This field is always returned, even if there are no payouts that match the input criteria (its value will show &lt;code&gt;0&lt;/code&gt;). | [optional]
**transaction_count** | **int** | This integer value indicates the total count of monetary transactions (order payments, buyer refunds, and seller credits) associated with the payouts that match the input criteria. This field is always returned, even if there are no payouts that match the input criteria (its value will show &lt;code&gt;0&lt;/code&gt;). If there is at least one payout that matches the input criteria, the value in this field will be at least &lt;code&gt;1&lt;/code&gt;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
