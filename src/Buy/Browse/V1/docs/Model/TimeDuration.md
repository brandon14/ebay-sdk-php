# # TimeDuration

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**unit** | **string** | An enumeration value that indicates the units (such as hours) of the time span. The enumeration value in this field defines the period of time being used to measure the duration. &lt;br&gt;&lt;br&gt;&lt;b&gt; Valid Values: &lt;/b&gt; YEAR, MONTH, DAY, HOUR, CALENDAR_DAY, BUSINESS_DAY, MINUTE, SECOND, or MILLISECOND &lt;br /&gt;&lt;br /&gt;Code so that your app gracefully handles any future changes to this list. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/buy/browse/types/ba:TimeDurationUnitEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**value** | **int** | Retrieves the duration of the time span (no units).The value in this field indicates the number of years, months, days, hours, or minutes in the defined period. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
