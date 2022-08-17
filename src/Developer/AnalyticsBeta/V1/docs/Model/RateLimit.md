# # RateLimit

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**api_context** | **string** | The context of the API for which rate-limit data is returned. For example buy, sell, commerce, or developer. | [optional]
**api_name** | **string** | The name of the API for which rate-limit data is returned. For example browse for the Buy API, inventory for the Sell API, or taxonomy for the Commerce API. | [optional]
**api_version** | **string** | The version of the API for which rate-limit data is returned. For example v1 or v2. | [optional]
**resources** | [**\TNT\Ebay\Developer\AnalyticsBeta\V1\Model\Resource[]**](Resource.md) | A list of the methods for which rate-limit data is returned. For example item for the Feed API, getOrder for the Fulfillment API, and getProduct for the Catalog API. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
