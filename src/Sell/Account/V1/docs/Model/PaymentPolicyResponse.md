# # PaymentPolicyResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**href** | **string** | This field is for future use. | [optional]
**limit** | **int** | This field is for future use. | [optional]
**next** | **string** | This field is for future use. | [optional]
**offset** | **int** | This field is for future use. | [optional]
**payment_policies** | [**\TNT\Ebay\Sell\Account\V1\Model\PaymentPolicy[]**](PaymentPolicy.md) | A list of all of the seller&#39;s payment business policies defined for the specified marketplace. This array will be returned as empty if no payment business policies are defined for the specified marketplace. | [optional]
**prev** | **string** | This field is for future use. | [optional]
**total** | **int** | The total number of payment business policies retrieved in the result set.  &lt;br/&gt;&lt;br/&gt;If no payment business policies are defined for the specified marketplace, this field is returned with a value of &lt;code&gt;0&lt;/code&gt;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
