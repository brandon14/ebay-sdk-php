# # RateLimit

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**api_context** | **string** | The context of the API for which rate-limit data is returned. For example &lt;code&gt;buy&lt;/code&gt;, &lt;code&gt;sell&lt;/code&gt;, &lt;code&gt;commerce&lt;/code&gt;, &lt;code&gt;developer&lt;/code&gt; or &lt;code&gt;tradingapi&lt;/code&gt;. | [optional]
**api_name** | **string** | The name of the API for which rate-limit data is returned. For example &lt;code&gt;browse&lt;/code&gt; for the Buy API, &lt;code&gt;inventory&lt;/code&gt; for the Sell API, &lt;code&gt;taxonomy&lt;/code&gt; for the Commerce API, or &lt;code&gt;tradingapi&lt;/code&gt; for Trading API. | [optional]
**api_version** | **string** | The version of the API for which rate-limit data is returned. For example &lt;code&gt;v1&lt;/code&gt; or &lt;code&gt;v2&lt;/code&gt;. | [optional]
**resources** | [**\TNT\Ebay\Developer\AnalyticsBeta\V1\Model\Resource[]**](Resource.md) | A list of the methods for which rate-limit data is returned. For example &lt;code&gt;item&lt;/code&gt; for the Feed API, &lt;code&gt;getOrder&lt;/code&gt; for the Fulfillment API, &lt;code&gt;getProduct&lt;/code&gt; for the Catalog API, &lt;code&gt;AddItems&lt;/code&gt; for the Trading API. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
