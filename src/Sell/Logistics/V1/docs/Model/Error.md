# # Error

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**category** | **string** | The category type for this error or warning. It takes a string that can have one of three values:&lt;ul&gt;&lt;li&gt;&lt;code&gt;Application&lt;/code&gt;: Indicates an exception or error occurred in the application code or at runtime. Examples include catching an exception in a service&#39;s business logic, system failures, or request errors from a dependency.&lt;/li&gt;&lt;li&gt;&lt;code&gt;Business&lt;/code&gt;: Used when your service or a dependent service refused to continue processing on the resource because of a business rule violation such as \&quot;Seller does not ship item to Antarctica\&quot; or \&quot;Buyer ineligible to purchase an alcoholic item\&quot;. Business errors are not syntactical input errors.&lt;/li&gt;&lt;li&gt;&lt;code&gt;Request&lt;/code&gt;: Used when there is anything wrong with the request, such as authentication, syntactical errors, rate limiting or missing headers, bad HTTP header values, and so on.&lt;/li&gt;&lt;/ul&gt; | [optional]
**domain** | **string** | Name of the domain containing the service or application. | [optional]
**error_id** | **int** | A positive integer that uniquely identifies the specific error condition that occurred. Your application can use error codes as identifiers in your customized error-handling algorithms. | [optional]
**input_ref_ids** | **string[]** | Identifies specific request elements associated with the error, if any. inputRefId&#39;s response is format specific. For JSON, use &lt;i&gt;JSONPath&lt;/i&gt; notation. | [optional]
**long_message** | **string** | An expanded version of message that should be around 100-200 characters long, but is not required to be such. | [optional]
**message** | **string** | An end user and app-developer friendly device agnostic message. It explains what the error or warning is, and how to fix it (in a general sense). Its value is at most 50 characters long. If applicable, the value is localized in the end user&#39;s requested locale. | [optional]
**output_ref_ids** | **string[]** | Identifies specific response elements associated with the error, if any. Path format is the same as &lt;code&gt;inputRefId&lt;/code&gt;. | [optional]
**parameters** | [**\TNT\Ebay\Sell\Logistics\V1\Model\ErrorParameter[]**](ErrorParameter.md) | This optional complex field type contains a list of one or more context-specific &lt;code&gt;ErrorParameter&lt;/code&gt; objects, with each item in the list entry being a parameter (or input field name) that caused an error condition. Each &lt;code&gt;ErrorParameter&lt;/code&gt; object consists of two fields, a &lt;code&gt;name&lt;/code&gt; and a &lt;code&gt;value&lt;/code&gt;. | [optional]
**subdomain** | **string** | Name of the domain&#39;s subsystem or subdivision. For example, checkout is a subdomain in the buying domain. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
