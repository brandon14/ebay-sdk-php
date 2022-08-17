# # SuppressViolationRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**compliance_type** | **string** | The compliance type of the listing violation to suppress is specified in this field. The compliance type for each listing violation is found in the complianceType field under the listingViolations array in a getListingViolations response. Note: At this time, the suppressViolation method is only used to suppress aspect adoption listing violations in the &#39;at-risk&#39; state, so ASPECTS_ADOPTION is currently the only supported value for this field. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/sell/compliance/types/com:ComplianceTypeEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**listing_id** | **string** | The unique identifier of the listing with the violation(s) is specified in this field. The unique identifier of the listing with the listing violation(s) is found in the listingId field under the listingViolations array in a getListingViolations response. Note: At this time, the suppressViolation method is only used to suppress aspect adoption listing violations in the &#39;at-risk&#39; state, so the listing specified in this field should be a listing with an ASPECTS_ADOPTION violation in the &#39;at-risk&#39; state. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
