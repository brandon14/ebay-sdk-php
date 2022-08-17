# # Dimension

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**dimension_key** | **string** | dimensionKey defines the basis against which the seller&#39;s customer service metric is measured. The value of this field gets set according to the value of the customer_service_metric_type input parameter. The following input configurations return the responses shown: ITEM_NOT_AS_DESCRIBED &amp;ndash; Returns benchmark ratings based on L1 listing categories, so the result shows metrics where the dimensionKey is set to LISTING_CATEGORY. ITEM_NOT_RECEIVED &amp;ndash; Returns benchmark ratings based on world shipping regions, so the result shows metrics where the dimensionKey is set to SHIPPING_REGION. The shipping region is indicated by the associated value field. For specifics on world shipping regions, see the FAQ section on the following page: Monitor your service metrics For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/devzone/rest/api-ref/analytics/types/DimensionTypeEnum.html&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**name** | **string** | The dimension name returned in this field depends on the dimensionKey: If dimensionKey is set to SHIPPING_REGION, this field is set to one of following values, which represent established shipping corridors: Domestic International: Mature region International: Emerging region If dimensionKey is set to LISTING_CATEGORY, this field is set to the name of the primary (L1) category in which the items being rated were listed. | [optional]
**value** | **string** | The value returned in this field depends on the dimensionKey. If dimensionKey equals LISTING_CATEGORY, the value returned in this field is the category ID of the primary (L1) category in which the items being rated were listed. If dimensionKey equals SHIPPING_REGION, one of the following values is returned: DOMESTIC INTERNATIONAL_MATURED_REGION INTERNATIONAL_EMERGING_REGION | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
