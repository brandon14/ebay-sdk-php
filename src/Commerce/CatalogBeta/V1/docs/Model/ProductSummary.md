# # ProductSummary

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**additional_images** | [**\TNT\Ebay\Commerce\CatalogBeta\V1\Model\Image[]**](Image.md) | Contains information about additional images associated with this product. For the primary image, see the image container. | [optional]
**aspects** | [**\TNT\Ebay\Commerce\CatalogBeta\V1\Model\Aspect[]**](Aspect.md) | Contains an array of the category aspects and their values that are associated with this product. | [optional]
**brand** | **string** | The manufacturer&#39;s brand name for this product. | [optional]
**ean** | **string[]** | A list of all European Article Numbers (EANs) that identify this product. | [optional]
**epid** | **string** | The eBay product ID of this product. | [optional]
**gtin** | **string[]** | A list of all GTINs that identify this product. This includes all of the values returned in the ean, isbn, and upc fields. | [optional]
**image** | [**\TNT\Ebay\Commerce\CatalogBeta\V1\Model\Image**](Image.md) |  | [optional]
**isbn** | **string[]** | A list of all International Standard Book Numbers (ISBNs) that identify this product. | [optional]
**mpn** | **string[]** | A list of all Manufacturer Product Number (MPN) values that the manufacturer uses to identify this product. | [optional]
**product_href** | **string** | The URI of the getProduct call request that retrieves this product&#39;s details. | [optional]
**product_web_url** | **string** | The URL for this product&#39;s eBay product page. | [optional]
**title** | **string** | The title of this product on eBay. | [optional]
**upc** | **string[]** | A list of Universal Product Codes (UPCs) that identify this product. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
