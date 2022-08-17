# # Product

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**additional_images** | [**\TNT\Ebay\Buy\Browse\V1\Model\Image[]**](Image.md) | An array of containers with the URLs for the product images that are in addition to the primary image. | [optional]
**additional_product_identities** | [**\TNT\Ebay\Buy\Browse\V1\Model\AdditionalProductIdentity[]**](AdditionalProductIdentity.md) | An array of product identifiers associated with the item. This container is returned if the seller has associated the eBay Product Identifier (ePID) with the item and in the request &lt;b&gt; fieldgroups&lt;/b&gt; is set to &lt;code&gt;PRODUCT&lt;/code&gt;. | [optional]
**aspect_groups** | [**\TNT\Ebay\Buy\Browse\V1\Model\AspectGroup[]**](AspectGroup.md) | An array of containers for the product aspects. Each group contains the aspect group name and the aspect name/value pairs. | [optional]
**brand** | **string** | The brand associated with product. To identify the product, this is always used along with MPN (manufacturer part number). | [optional]
**description** | **string** | The rich description of an eBay product, which might contain HTML. | [optional]
**gtins** | **string[]** | An array of all the possible GTINs values associated with the product. A GTIN is a unique Global Trade Item number of the item as defined by &lt;a href&#x3D;\&quot;https://www.gtin.info \&quot; target&#x3D;\&quot;_blank\&quot;&gt;https://www.gtin.info&lt;/a&gt;. This can be a UPC (Universal Product Code), EAN (European Article Number), or an ISBN (International Standard Book Number) value. | [optional]
**image** | [**\TNT\Ebay\Buy\Browse\V1\Model\Image**](Image.md) |  | [optional]
**mpns** | **string[]** | An array of all possible MPN values associated with the product. A MPNs is manufacturer part number of the product. To identify the product, this is always used along with brand. | [optional]
**title** | **string** | The title of the product. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
