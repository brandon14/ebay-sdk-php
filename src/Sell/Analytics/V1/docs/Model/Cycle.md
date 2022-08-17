# # Cycle

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cycle_type** | **string** | The cycle type, either CURRENT or PROJECTED. CURRENT means the profile&#39;s metrics values are from the most recent official eBay monthly standards evaluation. PROJECTED means the profile values were determined when the profile was requested. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/devzone/rest/api-ref/analytics/types/CycleTypeEnum.html&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**evaluation_date** | **string** | The date and time at which the standard compliance values were determined for the profile. The time stamp is formatted as an ISO 8601 string, which is based on the 24-hour Universal Coordinated Time (UTC) clock. Format: [YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z Example: 2018-08-04T07:09:00.000Z | [optional]
**evaluation_month** | **string** | The month in which the currently effective seller level was computed. The value is always formatted as YYYY-MM. If the cycle is CURRENT, this value is the month and year the of the last eBay compliance evaluation. If this is for a PROJECTED cycle, the value is the month and year of the next scheduled evaluation. Because eBay does official evaluations around the 20th of each month, a PROJECTED value may indicate either the current or the next month. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
