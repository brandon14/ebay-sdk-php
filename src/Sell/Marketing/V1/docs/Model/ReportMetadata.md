# # ReportMetadata

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**dimension_metadata** | [**\TNT\Ebay\Sell\Marketing\V1\Model\DimensionMetadata[]**](DimensionMetadata.md) | A list containing the metadata for the dimension used in the report. | [optional]
**max_number_of_dimensions_to_request** | **int** | The maximum number of dimensions that can be requested for the specified report type. | [optional]
**max_number_of_metrics_to_request** | **int** | The maximum number of metrics that can be requested for the specified report type. | [optional]
**metric_metadata** | [**\TNT\Ebay\Sell\Marketing\V1\Model\MetricMetadata[]**](MetricMetadata.md) | A list containing the metadata for the metrics in the report. | [optional]
**report_type** | **string** | The &lt;b&gt;report_type&lt;/b&gt;, as specified in the request to create the report task.&lt;br/&gt;&lt;br/&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; INVENTORY_PERFORMANCE_REPORT is not currently available; availability date is pending.&lt;/span&gt; For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/sell/marketing/types/plr:ReportTypeEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
