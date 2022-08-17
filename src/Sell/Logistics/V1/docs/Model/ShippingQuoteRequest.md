# # ShippingQuoteRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**orders** | [**\TNT\Ebay\Sell\Logistics\V1\Model\Order[]**](Order.md) | A seller-defined list that contains information about the orders in the package. This allows sellers to include information about the line items in the package with the shipment information.  &lt;br&gt;&lt;br&gt;A package can contain any number of line items from one or more orders, providing they all ship in the same package.  &lt;br&gt;&lt;br&gt;&lt;b&gt;Maximum list size:&lt;/b&gt; 10 | [optional]
**package_specification** | [**\TNT\Ebay\Sell\Logistics\V1\Model\PackageSpecification**](PackageSpecification.md) |  | [optional]
**ship_from** | [**\TNT\Ebay\Sell\Logistics\V1\Model\Contact**](Contact.md) |  | [optional]
**ship_to** | [**\TNT\Ebay\Sell\Logistics\V1\Model\Contact**](Contact.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
