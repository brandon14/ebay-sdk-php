# # TimeDuration

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**unit** | **string** | This enumeration value indicates the time unit used to specify the fulfillment time, such as &lt;code&gt;HOUR&lt;/code&gt; or &lt;code&gt;BUSINESS_DAY&lt;/code&gt;. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/sell/inventory/types/slr:TimeDurationUnitEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**value** | **int** | The integer value in this field, along with the time unit in the &lt;strong&gt;unit&lt;/strong&gt; field, will indicate the fulfillment time.&lt;br&gt;&lt;br&gt; For In-Store Pickup orders, this value will indicate how soon after an In-Store Pickup purchase can the buyer pick up the item at the designated store location. If the value of this field is &lt;code&gt;4&lt;/code&gt;, and the value of the &lt;strong&gt;unit&lt;/strong&gt; field is &lt;code&gt;HOUR&lt;/code&gt;, then the fulfillment time for the In-Store Pickup order is four hours, which means that the buyer will be able to pick up the item at the store four hours after the transaction took place.&lt;br&gt;&lt;br&gt; For standard orders that will be shipped, this value will indicate the expected fulfillment time if the inventory item is shipped from the inventory location. If the value of this field is &lt;code&gt;4&lt;/code&gt;, and the value of the &lt;strong&gt;unit&lt;/strong&gt; field is &lt;code&gt;BUSINESS_DAY&lt;/code&gt;, then the estimated delivery date after purchase is 4 business days. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
