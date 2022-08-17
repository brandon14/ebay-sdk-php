# # KycCheck

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**data_required** | **string** | The enumeration value returned in this field categorizes the type of details needed for the KYC check. More information about the check is shown in the &lt;b&gt;detailMessage&lt;/b&gt; and other applicable, corresponding fields. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/sell/account/types/kyc:DetailsType&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**due_date** | **string** | The timestamp in this field indicates the date by which the seller should resolve the KYC requirement.&lt;br&gt;&lt;br&gt;The timestamp in this field uses the UTC date and time format described in the &lt;a href&#x3D;\&quot;https://www.iso.org/iso-8601-date-and-time-format.html\&quot; target&#x3D;\&quot;_blank\&quot;&gt;ISO 8601 Standard&lt;/a&gt;. See below for this format and an example: &lt;br&gt;&lt;br&gt;&lt;i&gt;MM-DD-YYYY HH:MM:SS&lt;/i&gt;&lt;br/&gt;&lt;code&gt;06-05-2020 10:34:18&lt;/code&gt; | [optional]
**remedy_url** | **string** | If applicable and available, a URL will be returned in this field, and the link will take the seller to an eBay page where they can provide the requested information. | [optional]
**alert** | **string** | This field gives a short summary of what is required from the seller. An example might be, &#39;&lt;code&gt;Upload bank document now.&lt;/code&gt;&#39;. The &lt;b&gt;detailMessage&lt;/b&gt; field will often provide more details on what is required of the seller. | [optional]
**detail_message** | **string** | This field gives a detailed message about what is required from the seller. An example might be, &#39;&lt;code&gt;Please upload a bank document by 2020-08-01 to get your account back in good standing.&lt;/code&gt;&#39;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
