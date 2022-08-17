# # PurchasedRate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**additional_options** | [**\TNT\Ebay\Sell\Logistics\V1\Model\AdditionalOption[]**](AdditionalOption.md) | An list of additional, optional features that have been purchased for the shipment. | [optional]
**base_shipping_cost** | [**\TNT\Ebay\Sell\Logistics\V1\Model\Amount**](Amount.md) |  | [optional]
**destination_time_zone** | **string** | The time zone of the destination according to &lt;a href&#x3D;\&quot;https://www.iana.org/time-zones\&quot; target&#x3D;\&quot;_blank\&quot;&gt;Time Zone Database&lt;/a&gt;. For example, \&quot;America/Los_Angeles\&quot;. | [optional]
**max_estimated_delivery_date** | **string** | A string value representing maximum (latest) estimated delivery time, formatted as an &lt;a href&#x3D;\&quot;https://www.iso.org/iso-8601-date-and-time-format.html\&quot; title&#x3D;\&quot;https://www.iso.org\&quot; target&#x3D;\&quot;_blank\&quot;&gt;ISO 8601&lt;/a&gt; string, which is based on the 24-hour Coordinated Universal Time (UTC) clock.  &lt;br&gt;&lt;br&gt;&lt;b&gt;Format:&lt;/b&gt; &lt;code&gt;[YYYY]-[MM]-[DD]T[HH]:[MM]:[SS].[SSS]Z&lt;/code&gt; &lt;br&gt;&lt;b&gt;Example:&lt;/b&gt; &lt;code&gt;2018-08-20T07:09:00.000Z&lt;/code&gt; | [optional]
**min_estimated_delivery_date** | **string** | A string value representing minimum (earliest) estimated delivery time, formatted as an &lt;a href&#x3D;\&quot;https://www.iso.org/iso-8601-date-and-time-format.html\&quot; title&#x3D;\&quot;https://www.iso.org\&quot; target&#x3D;\&quot;_blank\&quot;&gt;ISO 8601&lt;/a&gt;ISO 8601&lt;/a&gt; UTC string. | [optional]
**pickup_networks** | **string[]** | A list of pickup networks compatible with the shipping service. | [optional]
**pickup_slot_id** | **string** | This unique eBay-assigned ID value is returned only if the shipment has been configured for a scheduled pickup. | [optional]
**pickup_type** | **string** | The type of pickup or drop off configured for the shipment. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/sell/logistics/types/api:PickupTypeEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**rate_id** | **string** | The eBay-generated ID of the shipping rate that the seller has chosen to purchase for the shipment. | [optional]
**shipping_carrier_code** | **string** | The ID code for the carrier that was selected for the package shipment. | [optional]
**shipping_carrier_name** | **string** | The name of the shipping carrier. | [optional]
**shipping_quote_id** | **string** | The unique eBay-generated ID of the &lt;i&gt;shipping quote&lt;/i&gt; from which the seller selected a shipping rate (&lt;b&gt;rateId&lt;/b&gt;). | [optional]
**shipping_service_code** | **string** | String ID code for the shipping service selected for the package shipment. This is a service that the shipping carrier supplies. | [optional]
**shipping_service_name** | **string** | The name of the shipping service. | [optional]
**total_shipping_cost** | [**\TNT\Ebay\Sell\Logistics\V1\Model\Amount**](Amount.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
