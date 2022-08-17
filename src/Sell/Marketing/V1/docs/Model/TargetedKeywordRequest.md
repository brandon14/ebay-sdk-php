# # TargetedKeywordRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**additional_info** | **string[]** | A field used to indicate whether additional information and insight data shall be provided for suggested keywords.&lt;br /&gt;&lt;br /&gt;&lt;strong&gt;Valid Value:&lt;/strong&gt; &lt;code&gt;KEYWORD_INSIGHTS&lt;/code&gt; | [optional]
**exclusions** | **string[]** | A field used to indicate that the keywords already selected by sellers for the specified listing IDs should be filtered out of the response, and only new and unique keyword recommendations shall be returned.&lt;br /&gt;&lt;br /&gt;&lt;strong&gt;Valid Value:&lt;/strong&gt; &lt;code&gt;ADOPTED_KEYWORDS&lt;/code&gt; | [optional]
**listing_ids** | **string[]** | A set of comma-separated listing IDs in the paginated collection. &lt;br /&gt;&lt;br /&gt;&lt;b&gt;Maximum number of listings requested: &lt;/b&gt;300 | [optional]
**match_type** | **string** | A field that defines the match type for the keyword.&lt;br /&gt;&lt;br /&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;span style&#x3D;\&quot;color:#004680\&quot;&gt;&lt;strong&gt;Note:&lt;/strong&gt;&lt;/span&gt; Broad matching of keywords is currently only supported in the AU marketplace.&lt;/span&gt;&lt;br /&gt;&lt;b&gt;Valid Values:&lt;/b&gt;&lt;ul&gt;&lt;li&gt;&lt;code&gt;BROAD&lt;/code&gt;&lt;/li&gt;&lt;li&gt;&lt;code&gt;EXACT&lt;/code&gt;&lt;/li&gt;&lt;li&gt;&lt;code&gt;PHRASE&lt;/code&gt;&lt;/li&gt;&lt;/ul&gt; For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/sell/marketing/types/pls:MatchTypeEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
