# # Error

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**category** | **string** | Identifies whether the error was in the REQUEST or happened when running the APPLICATION. | [optional]
**domain** | **string** | The primary system where the error occurred. This is relevant for application errors. For Analytics errors, it always has the value API_ANALYTICS. | [optional]
**error_id** | **int** | A positive integer that uniquely identifies the specific error condition that occurred. Your application can use error codes as identifiers in your customized error-handling algorithms. Traffic report error IDs range from 50001 to 50500. | [optional]
**input_ref_ids** | **string[]** | Identifies specific request elements associated with the error, if any. inputRefId&#39;s response is format specific. For JSON, use JSONPath notation. | [optional]
**long_message** | **string** | A more detailed explanation of the error than given in the message error field. | [optional]
**message** | **string** | Information on how to correct the problem, in the end user&#39;s terms and language where applicable. Its value is at most 50 characters long. If applicable, the value is localized in the end user&#39;s requested locale. | [optional]
**output_ref_ids** | **string[]** | Identifies specific response elements associated with the error, if any. Path format is the same as inputRefId. | [optional]
**parameters** | [**\TNT\Ebay\Sell\Analytics\V1\Model\ErrorParameter[]**](ErrorParameter.md) | This optional list of name/value pairs that contain context-specific ErrorParameter objects, with each item in the list being a parameter (or input field name) that caused an error condition. Each ErrorParameter object consists of two fields, a name and a value. | [optional]
**subdomain** | **string** | If present, indicates which subsystem in which the error occurred. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
