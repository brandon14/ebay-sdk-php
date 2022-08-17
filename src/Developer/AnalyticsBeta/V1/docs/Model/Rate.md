# # Rate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**limit** | **int** | The maximum number of requests that can be made to this resource during a set time period. The length of time to which the limit is applied is defined by the associated timeWindow value. This value is often referred to as the &amp;quot;call quota&amp;quot; for the resource. | [optional]
**remaining** | **int** | The remaining number of requests that can be made to this resource before the associated time window resets. | [optional]
**reset** | **string** | The data and time the time window and accumulated calls for this resource reset. When the reset time is reached, the remaining value is reset to the value of limit, and this reset value is reset to the current time plus the number of seconds defined by the timeWindow value. The time stamp is formatted as an ISO 8601 string, which is based on the 24-hour Universal Coordinated Time (UTC) clock. Format: YYYY-MM-DDTHH:MM:SS.SSSZ Example: 2018-08-04T07:09:00.000Z | [optional]
**time_window** | **int** | A period of time, expressed in seconds. The call quota for a resource is applied to the period of time defined by the value of this field. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
