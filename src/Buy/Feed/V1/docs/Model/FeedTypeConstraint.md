# # FeedTypeConstraint

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**category_ids** | **string[]** | An array of the eBay categories the application can access in a feed. See the &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/commerce/taxonomy/overview.html&#39;&gt;Taxonomy API&lt;/a&gt; for details about obtaining a list eBay L1 categories. The category is expressed as the category&#39;s &lt;b&gt;categoryId&lt;/b&gt;, not its &lt;b&gt;categoryName&lt;/b&gt;; e.g.,  &lt;code&gt;172008&lt;/code&gt;, not &lt;code&gt;Gift Cards &amp;amp; Coupons&lt;/code&gt;.&lt;br /&gt;&lt;br /&gt;If no &lt;b&gt;categoryIds&lt;/b&gt; are listed, the application can access all categories in the specified marketplace. | [optional]
**marketplace_id** | **string** | This enum value indicates an eBay marketplace for which the application can access feed files for the corresponding feed type&lt;br/&gt;&lt;br/&gt;&lt;b&gt;Example:&lt;/b&gt; &lt;code&gt;EBAY_US&lt;/code&gt; for the U.S. or &lt;code&gt;EBAY_DE&lt;/code&gt; for Germany. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/buy/feed/types/bas:MarketplaceIdEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
