# # SupportedFeed

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**authorization_scopes** | **string[]** | The oauth authorization scopes which grant access to the feed files.&lt;br /&gt;&lt;br /&gt;Currently the only applicable authorization scope is &lt;code&gt;https://api.ebay.com/oauth/api_scope/buy.item.feed&lt;/code&gt;.&lt;br /&gt;&lt;br /&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;span style&#x3D;\&quot;color:#004680\&quot;&gt;&lt;strong&gt;Note:&lt;/strong&gt;&lt;/span&gt; You can view your application&#39;s oauth scopes on the &lt;a href&#x3D;&#39;developer.ebay.com/my/keys&#39;&gt;Application Keys&lt;/a&gt; page.&lt;/span&gt; | [optional]
**constraint** | [**\TNT\Ebay\Buy\Feed\V1\Model\Constraint**](Constraint.md) |  | [optional]
**feed_scope** | **string** | Specifies the frequency with which the feed file is made available (&lt;code&gt;HOURLY&lt;/code&gt;, &lt;code&gt;DAILY&lt;/code&gt;, &lt;code&gt;WEEKLY&lt;/code&gt;).&lt;br /&gt;&lt;br /&gt;Currently only &lt;code&gt;DAILY&lt;/code&gt; is supported. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/buy/feed/types/api:FeedScopeEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**look_back** | [**\TNT\Ebay\Buy\Feed\V1\Model\TimeDuration**](TimeDuration.md) |  | [optional]
**status** | **string** | The status for this feed. One of &lt;code&gt;ACTIVE&lt;/code&gt;, &lt;code&gt;PAUSED&lt;/code&gt;, or &lt;code&gt;DEPRECATED&lt;/code&gt;. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/buy/feed/types/api:FeedStatusEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**supported_schemas** | [**\TNT\Ebay\Buy\Feed\V1\Model\SupportedSchema[]**](SupportedSchema.md) | An array of the supported &lt;b&gt;Feed&lt;/b&gt; API schemas for this feed type. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
