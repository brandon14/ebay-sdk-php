# # FulfillmentPolicy

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**category_types** | [**\TNT\Ebay\Sell\Account\V1\Model\CategoryType[]**](CategoryType.md) | This container indicates whether the fulfillment policy applies to motor vehicle listings, or if it applies to non-motor vehicle listings. | [optional]
**description** | **string** | A seller-defined description of the fulfillment policy. This description is only for the seller&#39;s use, and is not exposed on any eBay pages. This field is returned if set for the policy. &lt;br/&gt;&lt;br/&gt;&lt;b&gt;Max length&lt;/b&gt;: 250 | [optional]
**freight_shipping** | **bool** | If returned as &lt;code&gt;true&lt;/code&gt;, the seller offers freight shipping. Freight shipping can be used for large items over 150 lbs. | [optional]
**fulfillment_policy_id** | **string** | A unique eBay-assigned ID for the fulfillment policy. This ID is generated when the policy is created. | [optional]
**global_shipping** | **bool** | If returned as &lt;code&gt;true&lt;/code&gt;, eBay&#39;s Global Shipping Program will be used by the seller to ship items to international locations. | [optional]
**handling_time** | [**\TNT\Ebay\Sell\Account\V1\Model\TimeDuration**](TimeDuration.md) |  | [optional]
**local_pickup** | **bool** | If returned as &lt;code&gt;true&lt;/code&gt;, local pickup is available for this policy. | [optional]
**marketplace_id** | **string** | The ID of the eBay marketplace to which this fulfillment policy applies. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/sell/account/types/ba:MarketplaceIdEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**name** | **string** | A seller-defined name for this fulfillment policy. Names must be unique for policies assigned to the same marketplace. &lt;br/&gt;&lt;br/&gt;&lt;b&gt;Max length&lt;/b&gt;: 64 | [optional]
**pickup_drop_off** | **bool** | If returned as &lt;code&gt;true&lt;/code&gt;, the seller offers the \&quot;Click and Collect\&quot; option. &lt;br/&gt;&lt;br/&gt;Currently, \&quot;Click and Collect\&quot; is available only to large retail merchants the eBay AU and UK marketplaces. | [optional]
**shipping_options** | [**\TNT\Ebay\Sell\Account\V1\Model\ShippingOption[]**](ShippingOption.md) | This array is used to provide detailed information on the domestic and international shipping options available for the policy. A separate &lt;b&gt;ShippingOption&lt;/b&gt; object covers domestic shipping service options and international shipping service options (if the seller ships to international locations). The &lt;b&gt;optionType&lt;/b&gt; field indicates whether the &lt;b&gt;ShippingOption&lt;/b&gt; object applies to domestic or international shipping, and the &lt;b&gt;costType&lt;/b&gt; field indicates whether flat-rate shipping or calculated shipping will be used. &lt;p&gt;A separate &lt;b&gt;ShippingServices&lt;/b&gt; object is used to specify cost and other details for every available domestic and international shipping service option. &lt;/p&gt; | [optional]
**ship_to_locations** | [**\TNT\Ebay\Sell\Account\V1\Model\RegionSet**](RegionSet.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
