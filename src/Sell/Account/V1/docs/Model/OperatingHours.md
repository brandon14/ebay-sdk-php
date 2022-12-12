# # OperatingHours

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**day_of_week_enum** | **string** | A &lt;strong&gt;dayOfWeekEnum&lt;/strong&gt; value is required for each day of the week that the store location has regular operating hours. &lt;br/&gt;&lt;br/&gt;This field is returned if operating hours are defined for the store location. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/sell/account/types/api:DayOfWeekEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**intervals** | [**\TNT\Ebay\Sell\Account\V1\Model\Interval[]**](Interval.md) | This container is used to define the opening and closing times of a store&#39;s working day (defined in the &lt;strong&gt;dayOfWeekEnum&lt;/strong&gt; field). An &lt;strong&gt;intervals&lt;/strong&gt; container is needed for each day of the week that the store location is open. If a store location closes for lunch (or any other period during the day) and then reopens, multiple &lt;strong&gt;open&lt;/strong&gt; and &lt;strong&gt;close&lt;/strong&gt; pairs are needed &lt;br/&gt;&lt;br/&gt;This container is returned if operating hours are defined for the store location. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
