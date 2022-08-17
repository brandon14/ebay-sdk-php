# # FileEvidence

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**file_id** | **string** | If an &lt;strong&gt;uploadEvidenceFile&lt;/strong&gt; call is successful, a unique identifier of this evidence file will be returned in the &lt;strong&gt;uploadEvidenceFile&lt;/strong&gt; response payload.  This unique &lt;strong&gt;fileId&lt;/strong&gt; value is then used to either add this evidence file to a new evidence set using the &lt;strong&gt;addEvidence&lt;/strong&gt; method, or to add this file to an existing evidence set using the &lt;strong&gt;updateEvidence&lt;/strong&gt; method.&lt;br&gt;&lt;br&gt;Note that if an evidence set already exists for a payment dispute, the &lt;strong&gt;getPaymentDispute&lt;/strong&gt; method will return both the &lt;strong&gt;evidenceId&lt;/strong&gt; (unique identifier of evidence set) value, and the &lt;strong&gt;fileId&lt;/strong&gt; (unique identifier of a file within that evidence set) value(s). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
