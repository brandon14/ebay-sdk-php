# # RemoteShopcartResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cart_items** | [**\TNT\Ebay\Buy\Browse\V1\Model\CartItem[]**](CartItem.md) | An array of the items in the member&#39;s eBay cart. | [optional]
**cart_subtotal** | [**\TNT\Ebay\Buy\Browse\V1\Model\Amount**](Amount.md) |  | [optional]
**cart_web_url** | **string** | The URL of the member&#39;s eBay cart. | [optional]
**unavailable_cart_items** | [**\TNT\Ebay\Buy\Browse\V1\Model\CartItem[]**](CartItem.md) | An array of items in the cart that are unavailable. This can be for a variety of reasons such as, when the listing has ended or the item is out of stock. Because a cart never expires, these items will remain in the cart until they are removed. | [optional]
**warnings** | [**\TNT\Ebay\Buy\Browse\V1\Model\Error[]**](Error.md) | An array of warning messages. These type of errors do not prevent the call from executing but should be checked. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
