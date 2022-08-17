# # Topic

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**topic_id** | **string** | The unique identifier for the topic. | [optional]
**description** | **string** | The description of the topic. | [optional]
**authorization_scopes** | **string[]** | The authorization scopes required to subscribe to this topic. | [optional]
**status** | **string** | The status of this topic. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/commerce/notification/types/api:StatusEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**context** | **string** | The business context associated with this topic. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/commerce/notification/types/api:ContextEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**scope** | **string** | The scope of this topic. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/commerce/notification/types/api:ScopeEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**supported_payloads** | [**\TNT\Ebay\Commerce\Notification\V1\Model\PayloadDetail[]**](PayloadDetail.md) | The supported payloads for this topic. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
