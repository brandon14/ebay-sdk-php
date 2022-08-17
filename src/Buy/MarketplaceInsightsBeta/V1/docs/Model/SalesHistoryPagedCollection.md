# # SalesHistoryPagedCollection

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**href** | **string** | The URI of the current page of results from the result set.  &lt;br /&gt;&lt;br /&gt;&lt;b&gt; The following example returns items 1 thru 5 from the list of items found. &lt;/b&gt;&lt;br /&gt;&lt;code&gt;https://api.ebay.com/buy/marketplace_insights/v1_beta/item_sales/search?q&#x3D;shirt&amp;&amp;limit&#x3D;5&amp;offset&#x3D;0&lt;/code&gt; | [optional]
**item_sales** | [**\TNT\Ebay\Buy\MarketplaceInsightsBeta\V1\Model\ItemSales[]**](ItemSales.md) | The type that defines the fields for a paginated result set of the sold items. The response consists of 0 or more sequenced &lt;em&gt; result sets&lt;/em&gt; where each result sets has 0 or more items.&lt;br /&gt;&lt;br /&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt; Note:&lt;/b&gt; For items with multiple quantities that might result in multiple transactions, and items with the &lt;code&gt;SELLER_DEFINED_VARIATIONS&lt;/code&gt; group type that might result in multiple transactions, only one deduped transaction is returned in the search results.&lt;/span&gt; | [optional]
**limit** | **int** | The number of items returned on a single page from the result set. This value can be set in the request with the &lt;b&gt;limit&lt;/b&gt; query parameter. | [optional]
**next** | **string** | The URI for the following page of results. This value is returned only if there is an additional page of results to display from the result set. &lt;br&gt;&lt;br&gt;&lt;b&gt;Max length&lt;/b&gt;: 2048 | [optional]
**offset** | **int** | The number of results skipped in the result set before listing the first returned result. This value can be set in the request with the &lt;b&gt;offset&lt;/b&gt; query parameter. | [optional]
**prev** | **string** | The URI for the preceding page of results. This value is returned only if there is a previous page of results to display from the result set. &lt;br&gt;&lt;br&gt;&lt;b&gt;Max length&lt;/b&gt;: 2048 | [optional]
**refinement** | [**\TNT\Ebay\Buy\MarketplaceInsightsBeta\V1\Model\Refinement**](Refinement.md) |  | [optional]
**total** | **int** | The total number of items retrieved in the result set.  &lt;br&gt;&lt;br&gt;If no items are found, this field is returned with a value of &lt;code&gt;0&lt;/code&gt;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
