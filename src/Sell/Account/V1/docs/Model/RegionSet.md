# # RegionSet

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**region_excluded** | [**\TNT\Ebay\Sell\Account\V1\Model\Region[]**](Region.md) | An array of one or more &lt;b&gt;regionName&lt;/b&gt; values that specify the areas to where a seller does not ship. A &lt;b&gt;regionExcluded&lt;/b&gt; list should only be set in the top-level &lt;b&gt;shipToLocations&lt;/b&gt; container and not within the &lt;b&gt;shippingServices.shipToLocations&lt;/b&gt; container used to specify which shipping regions are serviced by each available shipping service option. &lt;p&gt;Many sellers are willing to ship to many international locations, but they may want to exclude some world regions or some countries as places they are willing to ship to.&lt;br/&gt;&lt;br/&gt;This array will be returned as empty if no shipping regions are excluded with the fulfillment business policy. | [optional]
**region_included** | [**\TNT\Ebay\Sell\Account\V1\Model\Region[]**](Region.md) | An array of one or more &lt;b&gt;regionName&lt;/b&gt; fields that specify the areas to where a seller ships. &lt;br&gt;&lt;br&gt;Each eBay marketplace supports its own set of allowable shipping locations. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
