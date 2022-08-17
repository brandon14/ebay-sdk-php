# # ComplianceSummary

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**violation_summaries** | [**\TNT\Ebay\Sell\Compliance\V1\Model\ComplianceSummaryInfo[]**](ComplianceSummaryInfo.md) | This container is an array of one or more policy violation counts. A policy violation count is returned for each unique eBay marketplace and compliance type violation. As long as there is at least one non-compliant listing for the specified compliance type(s), this container will be returned. If no non-compliant listings are found for the specified compliance type(s), an HTTP status code of 204 No Content is returned, and there is no response body. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
