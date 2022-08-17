# # PaymentHold

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**expected_release_date** | **string** | The date and time that the payment being held is expected to be released to the seller. This timestamp is in ISO 8601 format, which uses the 24-hour Universal Coordinated Time (UTC) clock. This field will be returned if known by eBay. &lt;br /&gt;&lt;br /&gt;&lt;b&gt;Format:&lt;/b&gt; &lt;code&gt;[YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z&lt;/code&gt; &lt;br /&gt;&lt;b&gt;Example:&lt;/b&gt; &lt;code&gt;2015-08-04T19:09:02.768Z&lt;/code&gt; | [optional]
**hold_amount** | [**\TNT\Ebay\Sell\Fulfillment\V1\Model\Amount**](Amount.md) |  | [optional]
**hold_reason** | **string** | The reason that the payment is being held. A seller&#39;s payment may be held for a number of reasons, including when the seller is new, the seller&#39;s level is below standard, or if a return case or &#39;Significantly not as described&#39; case is pending against the seller. This field is always returned with the &lt;strong&gt;paymentHolds&lt;/strong&gt; array. | [optional]
**hold_state** | **string** | The current stage or condition of the hold. This field is always returned with the &lt;strong&gt;paymentHolds&lt;/strong&gt; array.&lt;br /&gt;&lt;br /&gt;&lt;b&gt;Applicable values:&lt;/b&gt;&lt;ul&gt;&lt;li&gt;&lt;code&gt;HELD&lt;/code&gt;&lt;/li&gt;&lt;li&gt;&lt;code&gt;HELD_PENDING&lt;/code&gt;&lt;/li&gt;&lt;li&gt;&lt;code&gt;NOT_HELD&lt;/code&gt;&lt;/li&gt;&lt;li&gt;&lt;code&gt;RELEASE_CONFIRMED&lt;/code&gt;&lt;/li&gt;&lt;li&gt;&lt;code&gt;RELEASE_FAILED&lt;/code&gt;&lt;/li&gt;&lt;li&gt;&lt;code&gt;RELEASE_PENDING&lt;/code&gt;&lt;/li&gt;&lt;li&gt;&lt;code&gt;RELEASED&lt;/code&gt;&lt;/li&gt;&lt;/ul&gt; | [optional]
**release_date** | **string** | The date and time that the payment being held was actually released to the seller. This timestamp is in ISO 8601 format, which uses the 24-hour Universal Coordinated Time (UTC) clock. This field is not returned until the seller&#39;s payment is actually released into the seller&#39;s account.&lt;br /&gt;&lt;br /&gt;&lt;b&gt;Format:&lt;/b&gt; &lt;code&gt;[YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z&lt;/code&gt; &lt;br /&gt;&lt;b&gt;Example:&lt;/b&gt; &lt;code&gt;2015-08-04T19:09:02.768Z&lt;/code&gt; | [optional]
**seller_actions_to_release** | [**\TNT\Ebay\Sell\Fulfillment\V1\Model\SellerActionsToRelease[]**](SellerActionsToRelease.md) | A list of one or more possible actions that the seller can take to expedite the release of the payment hold. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
