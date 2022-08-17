# # ShipToLocations

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**region_excluded** | [**\TNT\Ebay\Buy\Browse\V1\Model\ShipToRegion[]**](ShipToRegion.md) | An array of containers that express the large geographical regions, countries, state/provinces, or special locations within a country where the seller is not willing to ship to. | [optional]
**region_included** | [**\TNT\Ebay\Buy\Browse\V1\Model\ShipToRegion[]**](ShipToRegion.md) | An array of containers that express the large geographical regions, countries, or state/provinces within a country where the seller is willing to ship to. Prospective buyers must look at the shipping regions under this container, as well as the shipping regions that are under the &lt;b&gt;regionExcluded&lt;/b&gt; to see where the seller is willing to ship items. Sellers can specify that they ship &#39;Worldwide&#39;, but then add several large geographical regions (e.g. Asia, Oceania, Middle East) to the exclusion list, or sellers can specify that they ship to Europe and Africa, but then add several individual countries to the exclusion list. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
