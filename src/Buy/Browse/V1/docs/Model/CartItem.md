# # CartItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cart_item_id** | **string** | The identifier for the item being added to the cart. This is generated when the item is added to the cart. | [optional]
**cart_item_subtotal** | [**\TNT\Ebay\Buy\Browse\V1\Model\Amount**](Amount.md) |  | [optional]
**image** | [**\TNT\Ebay\Buy\Browse\V1\Model\Image**](Image.md) |  | [optional]
**item_id** | **string** | The RESTful identifier of the item. This identifier is generated when the item was listed. &lt;br /&gt;&lt;br /&gt; &lt;b&gt;RESTful Item ID Format: &lt;/b&gt;&lt;code&gt;v1&lt;/code&gt;|&lt;code&gt;&lt;i&gt;#&lt;/i&gt;&lt;/code&gt;|&lt;code&gt;&lt;i&gt;#&lt;/i&gt;&lt;/code&gt; &lt;br /&gt;&lt;b&gt; For example: &lt;/b&gt;&lt;br /&gt; &lt;code&gt;v1|2**********2|0&lt;/code&gt; &lt;br /&gt;&lt;code&gt;v1|1**********2|4**********2&lt;/code&gt; | [optional]
**item_web_url** | **string** | The URL of the eBay view item page for the item. | [optional]
**price** | [**\TNT\Ebay\Buy\Browse\V1\Model\Price**](Price.md) |  | [optional]
**quantity** | **int** | The number of this item the buyer wants to purchase. | [optional]
**title** | **string** | The title of the item. This can be written by the seller or come from the eBay product catalog. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
