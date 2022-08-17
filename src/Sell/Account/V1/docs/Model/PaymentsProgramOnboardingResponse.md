# # PaymentsProgramOnboardingResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**onboarding_status** | **string** | This enumeration value indicates the eligibility of payment onboarding for the registered site. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/sell/account/types/api:PaymentsProgramOnboardingStatus&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**steps** | [**\TNT\Ebay\Sell\Account\V1\Model\PaymentsProgramOnboardingSteps[]**](PaymentsProgramOnboardingSteps.md) | An array of the active process steps for payment onboarding and the status of each step. This array includes the step &lt;strong&gt;name&lt;/strong&gt;, step &lt;strong&gt;status&lt;/strong&gt;, and a &lt;strong&gt;webUrl&lt;/strong&gt; to the &lt;code&gt;IN_PROGRESS&lt;/code&gt; step. The step names are returned in sequential order. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
