# # Error

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**category** | **string** | The category type for this error or warning. It is a string that can have one of three values:&lt;ul&gt;&lt;li&gt;&lt;code&gt;Application&lt;/code&gt;: Indicates an exception or error occurred in the application code or at runtime. Examples include catching an exception in a service&#39;s business logic, system failures, or request errors from a dependency.&lt;/li&gt;&lt;li&gt;&lt;code&gt;Business&lt;/code&gt;: Used when your service or a dependent service refused to continue processing on the resource because of a business rule violation such as \&quot;Seller does not ship item to Antarctica\&quot; or \&quot;Buyer ineligible to purchase an alcoholic item\&quot;. Business errors are not syntactical input errors.&lt;/li&gt;&lt;li&gt;&lt;code&gt;Request&lt;/code&gt;: Used when there is anything wrong with the request, such as authentication, syntactical errors, rate limiting or missing headers, bad HTTP header values, and so on.&lt;/li&gt;&lt;/ul&gt; | [optional]
**domain** | **string** | Name of the domain ,or primary system, of the service or application where the error occurred. | [optional]
**error_id** | **int** | A positive integer that uniquely identifies the specific error condition that occurred. Your application can use error codes as identifiers in your customized error-handling algorithms. | [optional]
**input_ref_ids** | **string[]** | Identifies specific request elements associated with the error, if any. inputRefId&#39;s response is format specific. For JSON, use &lt;i&gt;JSONPath&lt;/i&gt; notation. | [optional]
**long_message** | **string** | A more detailed explanation of the error than given in the &lt;code&gt;message&lt;/code&gt; error field. | [optional]
**message** | **string** | Information on how to correct the problem, in the end user&#39;s terms and language where applicable. Its value is at most 50 characters long. If applicable, the value is localized in the end user&#39;s requested locale. | [optional]
**output_ref_ids** | **string[]** | Identifies specific response elements associated with the error, if any. Path format is the same as &lt;code&gt;inputRefId&lt;/code&gt;. | [optional]
**parameters** | [**\TNT\Ebay\Sell\Account\V1\Model\ErrorParameter[]**](ErrorParameter.md) | This optional list of name/value pairs that contain context-specific &lt;code&gt;ErrorParameter&lt;/code&gt; objects, with each item in the list being a parameter (or input field name) that caused an error condition. Each &lt;code&gt;ErrorParameter&lt;/code&gt; object consists of two fields, a &lt;code&gt;name&lt;/code&gt; and a &lt;code&gt;value&lt;/code&gt;. | [optional]
**subdomain** | **string** | If present, indicates the subsystem in which the error occurred. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
