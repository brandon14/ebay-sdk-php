# # ItemReturnTerms

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**extended_holiday_returns_offered** | **bool** | This indicates if the seller has enabled the Extended Holiday Returns feature on the item. Extended Holiday Returns are only applicable during the US holiday season, and gives buyers extra time to return an item. This &#39;extra time&#39; will typically extend beyond what is set through the &lt;b&gt; returnPeriod&lt;/b&gt; value. | [optional]
**refund_method** | **string** | An enumeration value that indicates how a buyer is refunded when an item is returned. &lt;br&gt;&lt;br&gt;&lt;b&gt; Valid Values: &lt;/b&gt; MONEY_BACK or MERCHANDISE_CREDIT  &lt;br /&gt;&lt;br /&gt;Code so that your app gracefully handles any future changes to this list. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/buy/browse/types/gct:RefundMethodEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**restocking_fee_percentage** | **string** | This string field indicates the restocking fee percentage that the seller has set on the item. Sellers have the option of setting no restocking fee for an item, or they can set the percentage to 10, 15, or 20 percent. So, if the cost of the item was $100, and the restocking percentage was 20 percent, the buyer would be charged $20 to return that item, so instead of receiving a $100 refund, they would receive $80 due to the restocking fee. | [optional]
**return_instructions** | **string** | Text written by the seller describing what the buyer needs to do in order to return the item. | [optional]
**return_method** | **string** | An enumeration value that indicates the alternative methods for a full refund when an item is returned. This field is returned if the seller offers the buyer an item replacement or exchange instead of a monetary refund. &lt;br&gt;&lt;br&gt;&lt;b&gt; Valid Values: &lt;/b&gt;  &lt;ul&gt;&lt;li&gt;&lt;b&gt; REPLACEMENT&lt;/b&gt; -  Indicates that the buyer has the option of receiving money back for the returned item, or they can choose to have the seller replace the item with an identical item.&lt;/li&gt;  &lt;li&gt;&lt;b&gt; EXCHANGE&lt;/b&gt; - Indicates that the buyer has the option of receiving money back for the returned item, or they can exchange the item for another similar item.&lt;/li&gt;&lt;/ul&gt;  Code so that your app gracefully handles any future changes to this list. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/buy/browse/types/gct:ReturnMethodEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**return_period** | [**\TNT\Ebay\Buy\Browse\V1\Model\TimeDuration**](TimeDuration.md) |  | [optional]
**returns_accepted** | **bool** | Indicates whether the seller accepts returns for the item. | [optional]
**return_shipping_cost_payer** | **string** | This enumeration value indicates whether the buyer or seller is responsible for return shipping costs when an item is returned. &lt;br&gt;&lt;br&gt;&lt;b&gt; Valid Values: &lt;/b&gt; &lt;ul&gt;&lt;li&gt;&lt;b&gt; SELLER&lt;/b&gt; - Indicates the seller will pay for the shipping costs to return the item.&lt;/li&gt;  &lt;li&gt;&lt;b&gt; BUYER&lt;/b&gt; - Indicates the buyer will pay for the shipping costs to return the item.&lt;/li&gt;  &lt;/ul&gt;  Code so that your app gracefully handles any future changes to this list. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/buy/browse/types/gct:ReturnShippingCostPayerEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)