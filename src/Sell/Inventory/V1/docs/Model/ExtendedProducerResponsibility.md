# # ExtendedProducerResponsibility

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**producer_product_id** | **string** | This ID is the Unique Identifier of the producer related to the item. For instance, if the seller is selling a cell phone, it is the ID related to the cell phone. | [optional]
**product_package_id** | **string** | The Unique ID of the producer of any packaging related to the product added by the seller. This does not include package in which the product is shipped (see &lt;strong&gt;ShipmentPackageID&lt;/strong&gt;). For instance, if the seller adds bubble wrap, it is the ID related to the bubble wrap. | [optional]
**shipment_package_id** | **string** | This ID is the Unique Identifier of the producer of any packaging used by the seller to ship the item. This does not include non-shipping packaging added to the product (see &lt;strong&gt;ProductPackageID&lt;/strong&gt;). This ID is required when the seller uses packaging to ship the item. For instance, if the seller uses a different box to ship the item, it is the ID related to the box. | [optional]
**product_documentation_id** | **string** | This ID is the Unique Identifier of the producer of any paper added to the parcel of the item by the seller. For example, this ID concerns any notice, leaflet, or paper that the seller adds to a cell phone parcel. | [optional]
**eco_participation_fee** | [**\TNT\Ebay\Sell\Inventory\V1\Model\Amount**](Amount.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
