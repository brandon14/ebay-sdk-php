# # Interval

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**close** | **string** | The &lt;strong&gt;close&lt;/strong&gt; value is actually the time that the store closes. Local time (in Military format) is used. So, if a store closed at 8 PM local time, the &lt;strong&gt;close&lt;/strong&gt; time would look like the following: &lt;code&gt;20:00:00&lt;/code&gt;. This field is conditionally required if the &lt;strong&gt;intervals&lt;/strong&gt; container is used to specify working hours or special hours for a store. &lt;br&gt;&lt;br&gt;This field is returned if set for the store location. | [optional]
**open** | **string** | The &lt;strong&gt;open&lt;/strong&gt; value is actually the time that the store opens. Local time (in Military format) is used. So, if a store opens at 9 AM local time, the &lt;strong&gt;close&lt;/strong&gt; time would look like the following: &lt;code&gt;09:00:00&lt;/code&gt;. This field is conditionally required if the &lt;strong&gt;intervals&lt;/strong&gt; container is used to specify working hours or special hours for a store. &lt;br&gt;&lt;br&gt;This field is returned if set for the store location. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
