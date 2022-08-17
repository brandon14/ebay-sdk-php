# # AddCartItemInput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**item_id** | **string** | The eBay RESTful identifier of the item you want added to the cart. &lt;br /&gt;&lt;br /&gt; &lt;b&gt;RESTful Item ID Format: &lt;/b&gt;&lt;code&gt;v1&lt;/code&gt;|&lt;code&gt;&lt;i&gt;#&lt;/i&gt;&lt;/code&gt;|&lt;code&gt;&lt;i&gt;#&lt;/i&gt;&lt;/code&gt; &lt;br /&gt;&lt;b&gt; For example: &lt;/b&gt; &lt;br /&gt;&lt;code&gt;v1|2**********2|0&lt;/code&gt; &lt;br /&gt;&lt;code&gt;v1|1**********2|4**********2&lt;/code&gt; &lt;br /&gt;&lt;br /&gt;For more information about item ID for RESTful APIs, see the &lt;a href&#x3D;\&quot;/api-docs/buy/static/api-browse.html#Legacy\&quot;&gt;Legacy API compatibility&lt;/a&gt; section of the &lt;i&gt;Buy APIs Overview&lt;/i&gt;.&lt;br /&gt;&lt;br /&gt;&lt;b&gt; Maximum number of items in a cart: &lt;/b&gt; 100 | [optional]
**quantity** | **int** | The number of this item the buyer wants to purchase. If this value is greater than the number available, the service will change this value to the number available. If this happens, a warning is returned.&lt;br /&gt;&lt;br /&gt;&lt;b&gt; Maximum: &lt;/b&gt; &lt;i&gt;number available&lt;/i&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
