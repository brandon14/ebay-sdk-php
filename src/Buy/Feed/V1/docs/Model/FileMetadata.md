# # FileMetadata

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**access** | **string** | Indicates whether the application is permitted to access the feed file. One of &lt;code&gt;ALLOWED&lt;/code&gt; or &lt;code&gt;RESTRICTED&lt;/code&gt;. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/buy/feed/types/api:AccessEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**dimensions** | [**\TNT\Ebay\Buy\Feed\V1\Model\Dimension[]**](Dimension.md) | An array of dimensions supported by the corresponding feed file. &lt;br /&gt;&lt;br /&gt;Currently the only dimension available is &lt;b&gt;CATEGORY&lt;/b&gt;.&lt;br /&gt;&lt;br /&gt;&lt;b&gt;Example:&lt;/b&gt;&lt;BR /&gt;&lt;code&gt;&amp;quot;dimensionKey&amp;quot;: &amp;quot;CATEGORY&amp;quot;,&lt;br /&gt;&amp;quotvalues&amp;quot;: &amp;lsqb;&amp;quot;15032&amp;quot;&amp;rsqb; | [optional]
**feed_date** | **string** | The date on which the feed was created. &lt;br /&gt;&lt;br /&gt;&lt;b&gt;Format:&lt;/b&gt; UTC format &lt;code&gt;(yyyy-MM-ddThh:00:00.000Z)&lt;/code&gt;. | [optional]
**feed_scope** | **string** | Specifies the frequency with which the feed file is made available (&lt;code&gt;HOURLY&lt;/code&gt;, &lt;code&gt;DAILY&lt;/code&gt;, &lt;code&gt;WEEKLY&lt;/code&gt;).&lt;br /&gt;&lt;br /&gt;Currently only &lt;code&gt;DAILY&lt;/code&gt; is supported. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/buy/feed/types/api:FeedScopeEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**feed_type_id** | **string** | The unique identifier of the feed type.&lt;br /&gt;&lt;br /&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;span style&#x3D;\&quot;color:#004680\&quot;&gt;&lt;strong&gt;Note:&lt;/strong&gt;&lt;/span&gt; Refer to &lt;a href&#x3D;\&quot;/api-docs/buy/feed/v1/static/overview.html#feed-types\&quot; target&#x3D;\&quot;_blank\&quot;&gt;Supported feed types&lt;/a&gt; for additional details.&lt;/span&gt; | [optional]
**file_id** | **string** | The file&#39;s unique identifier. This &lt;b&gt;fileid&lt;/b&gt; is used to select the feed file when using the &lt;b&gt;downloadFile&lt;/b&gt; method. | [optional]
**format** | **string** | Format of the returned feed file. Currently only TSV is supported. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/buy/feed/types/api:FormatEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**marketplace_id** | **string** | The eBay marketplace identifier for the marketplace(s) to which the feed applies.&lt;br /&gt;&lt;br /&gt;&lt;b&gt;Example:&lt;/b&gt; &lt;code&gt;EBAY_UK&lt;/code&gt;. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/buy/feed/types/bas:MarketplaceIdEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**schema_version** | **string** | Version of the API schema under which the feed was created. | [optional]
**size** | **int** | Size of the feed file in bytes. | [optional]
**span** | [**\TNT\Ebay\Buy\Feed\V1\Model\TimeDuration**](TimeDuration.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
