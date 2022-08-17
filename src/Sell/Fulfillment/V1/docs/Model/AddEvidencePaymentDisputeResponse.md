# # AddEvidencePaymentDisputeResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**evidence_id** | **string** | The value returned in this field is the unique identifier of the newly-created evidence set. Upon a successful call, this value is automatically genererated. This new evidence set for the payment dispute includes the evidence file(s) that were passed in to the &lt;strong&gt;fileId&lt;/strong&gt; array in the request payload. The &lt;strong&gt;evidenceId&lt;/strong&gt; value will be needed if the seller wishes to add to the evidence set by using the &lt;strong&gt;updateEvidence&lt;/strong&gt; method, or if they want to retrieve a specific evidence file within the evidence set by using the &lt;strong&gt;fetchEvidenceContent&lt;/strong&gt; method. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
