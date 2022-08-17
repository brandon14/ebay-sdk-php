# # ShippingQuote

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**creation_date** | **string** | The date and time this quote was created, expressed as an ISO 8601 UTC string. | [optional]
**expiration_date** | **string** | The last date and time that this quote will be honored, expressed as an ISO 8601 UTC string. After this time the quote expires and the expressed rates can no longer be purchased. | [optional]
**orders** | [**\TNT\Ebay\Sell\Logistics\V1\Model\Order[]**](Order.md) | This list value is optionally assigned by the seller. When present, each element in the returned list contains seller-assigned information about an order (such as an order number). Because a package can contain all or part of one or more orders, this field provides a way for sellers to identify the packages that contain specific orders. | [optional]
**package_specification** | [**\TNT\Ebay\Sell\Logistics\V1\Model\PackageSpecification**](PackageSpecification.md) |  | [optional]
**rates** | [**\TNT\Ebay\Sell\Logistics\V1\Model\Rate[]**](Rate.md) | A list of &lt;i&gt;rates&lt;/i&gt; where each rate, as identified by a &lt;b&gt;rateId&lt;/b&gt;, contains information about a specific shipping service offered by a carrier.  Rates include shipping carrier and service, the to and from locations, the pickup and delivery windows, the seller&#39;s shipping parameters, the service constraints, and the cost for the base service and a list of additional shipping options.  &lt;br&gt;&lt;br&gt;Each rate offered is supported by a label service where you can purchase the rate, and associated shipping label, via a call to &lt;b&gt;createFromShippingQuote&lt;/b&gt;. | [optional]
**ship_from** | [**\TNT\Ebay\Sell\Logistics\V1\Model\Contact**](Contact.md) |  | [optional]
**shipping_quote_id** | **string** | The unique eBay-assigned ID for this shipping quote. The value of this field is associated with a specific package, based on its origin, destination, and size. | [optional]
**ship_to** | [**\TNT\Ebay\Sell\Logistics\V1\Model\Contact**](Contact.md) |  | [optional]
**warnings** | [**\TNT\Ebay\Sell\Logistics\V1\Model\Error[]**](Error.md) | A list of any warnings triggered by the request. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
