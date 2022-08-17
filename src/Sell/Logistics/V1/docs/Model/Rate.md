# # Rate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**additional_options** | [**\TNT\Ebay\Sell\Logistics\V1\Model\AdditionalOption[]**](AdditionalOption.md) | Contains service and pricing information for one or more shipping options that are offered by the carrier and can be purchased in addition to the base shipping service provided by this rate. Shipping options can include items such as &lt;code&gt;INSURANCE&lt;/code&gt; and &lt;code&gt;SIGNATURE&lt;/code&gt;. | [optional]
**base_shipping_cost** | [**\TNT\Ebay\Sell\Logistics\V1\Model\Amount**](Amount.md) |  | [optional]
**destination_time_zone** | **string** | The name of the time zone region, as defined in the &lt;a href&#x3D;\&quot;http://www.iana.org/time-zones\&quot;  target&#x3D;\&quot;_blank\&quot;&gt;IANA Time Zone Database&lt;/a&gt;, to which the package is being shipped.  &lt;br&gt;&lt;br&gt;Delivery dates are calculated relative to this time zone.  &lt;br&gt;&lt;br&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;strong&gt;Note:&lt;/strong&gt; This is different from a Coordinated Universal Time (UTC) offset. For example, the &lt;i&gt;America/Los_Angeles&lt;/i&gt; time zone identifies a region with the UTC standard time offset of &lt;code&gt;-08:00&lt;/code&gt;, but so do several other time zones, including &lt;i&gt;America/Tijuana&lt;/i&gt;,&lt;i&gt;America/Dawson&lt;/i&gt;, and &lt;i&gt;Pacific/Pitcairn&lt;/i&gt;.&lt;/span&gt; | [optional]
**max_estimated_delivery_date** | **string** | The latest stated date and time the shipment will be delivered at this rate.  &lt;br&gt;&lt;br&gt;The time stamp is formatted as an &lt;a href&#x3D;\&quot;https://www.iso.org/iso-8601-date-and-time-format.html\&quot; title&#x3D;\&quot;https://www.iso.org\&quot; target&#x3D;\&quot;_blank\&quot;&gt;ISO 8601&lt;/a&gt; string, which is based on the 24-hour Coordinated Universal Time (UTC) clock.  &lt;br&gt;&lt;br&gt;&lt;b&gt;Format:&lt;/b&gt; &lt;code&gt;[YYYY]-[MM]-[DD]T[HH]:[MM]:[SS].[SSS]Z&lt;/code&gt; &lt;br&gt;&lt;b&gt;Example:&lt;/b&gt; &lt;code&gt;2018-08-20T07:09:00.000Z&lt;/code&gt; | [optional]
**min_estimated_delivery_date** | **string** | The estimated earliest date and time the shipment will be delivered at this rate. The time stamp is formatted as an ISO 8601 UTC string. | [optional]
**pickup_networks** | **string[]** | A list of pickup networks compatible with the shipping service. | [optional]
**pickup_slots** | [**\TNT\Ebay\Sell\Logistics\V1\Model\PickupSlot[]**](PickupSlot.md) | A list of available pickup slots for the package. | [optional]
**pickup_type** | **string** | The type of pickup or drop-off service associated with the &lt;b&gt;pickupSlots&lt;/b&gt; time frames. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/sell/logistics/types/api:PickupTypeEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**rate_id** | **string** | The unique eBay-assigned ID for this shipping rate. | [optional]
**rate_recommendation** | **string[]** | A list of reasons this rate is recommended. Available values are: &lt;ul&gt; &lt;li&gt;&lt;code&gt;BUYER_CHOSEN&lt;/code&gt; &amp;mdash; The rate meets or exceeds the requirements of the buyer&#39;s preferred shipping option.&lt;/li&gt; &lt;li&gt;&lt;code&gt;CHEAPEST_ON_TIME&lt;/code&gt; &amp;mdash; The rate is the cheapest rate available that will provide delivery within the seller&#39;s time frame commitment.&lt;/li&gt;  &lt;li&gt;&lt;code&gt;EBAY_PLUS_OK&lt;/code&gt; &amp;mdash; The rate complies with the shipping requirements of the eBay Plus program.&lt;/li&gt; &lt;li&gt;&lt;code&gt;FASTEST_ON_TIME&lt;/code&gt; &amp;mdash; The rate has the fastest shipping time, and will provide delivery within the seller&#39;s time frame commitment.&lt;/li&gt; &lt;li&gt;&lt;code&gt;GUARANTEED_DELIVERY_OK&lt;/code&gt; &amp;mdash; The rate complies with the shipping requirements of the eBay Guaranteed Delivery program.&lt;/li&gt;&lt;/ul&gt; | [optional]
**shipping_carrier_code** | **string** | The code name of the shipping carrier who will provide the service identified by &lt;b&gt;shippingServiceCode&lt;/b&gt;. | [optional]
**shipping_carrier_name** | **string** | The common name of the shipping carrier. | [optional]
**shipping_service_code** | **string** | The code name of the shipping service to be provided by the carrier identified by &lt;b&gt;shippingCarrierCode&lt;/b&gt;. | [optional]
**shipping_service_name** | **string** | The common name of the shipping service. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)