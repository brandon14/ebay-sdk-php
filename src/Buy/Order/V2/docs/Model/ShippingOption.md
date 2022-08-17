# # ShippingOption

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**base_delivery_cost** | [**\TNT\Ebay\Buy\Order\V2\Model\Amount**](Amount.md) |  | [optional]
**delivery_discount** | [**\TNT\Ebay\Buy\Order\V2\Model\Amount**](Amount.md) |  | [optional]
**import_charges** | [**\TNT\Ebay\Buy\Order\V2\Model\Amount**](Amount.md) |  | [optional]
**max_estimated_delivery_date** | **string** | The end of the date range in which the purchase order is expected to be delivered to the shipping address. | [optional]
**min_estimated_delivery_date** | **string** | The beginning of the date range in which the purchase order is expected to be delivered to the shipping address. | [optional]
**selected** | **bool** | A field that indicates whether the shipping method is selected. | [optional]
**shipping_carrier_code** | **string** | The shipping provider for the line item, such as FedEx or USPS. | [optional]
**shipping_option_id** | **string** | A unique ID for the selected shipping option/method. | [optional]
**shipping_service_code** | **string** | The name of the shipping service code. For example, Priority Mail Express (provided by USPS) or FedEx International Priority (Provided by FedEx). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
