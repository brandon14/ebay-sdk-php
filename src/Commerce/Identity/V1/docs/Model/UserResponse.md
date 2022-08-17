# # UserResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_type** | **string** | Indicates the user account type. This is determined when the user registers with eBay. If they register for a business account, this value will be BUSINESS. If they register for a private account, this value will be INDIVIDUAL. This designation is required by the tax laws in the following countries: EBAY_AT, EBAY_BE, EBAY_CH, EBAY_DE, EBAY_ES, EBAY_FR, EBAY_GB, EBAY_IE, EBAY_IT, EBAY_PL Valid Values: BUSINESS or INDIVIDUAL Code so that your app gracefully handles any future changes to this list. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/commerce/identity/types/api:AccountTypeEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**business_account** | [**\TNT\Ebay\Commerce\Identity\V1\Model\BusinessAccount**](BusinessAccount.md) |  | [optional]
**individual_account** | [**\TNT\Ebay\Commerce\Identity\V1\Model\IndividualAccount**](IndividualAccount.md) |  | [optional]
**registration_marketplace_id** | **string** | The eBay site on which the account is registered. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/commerce/identity/types/bas:MarketplaceIdEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**status** | **string** | Indicates the user&#39;s account status. Possible values: CONFIRMED, UNCONFIRMED, ACCOUNTONHOLD and UNDETERMINED. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/commerce/identity/types/api:UserStatusEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**user_id** | **string** | The eBay immutable user ID of the user&#39;s account and can always be used to identify the user. | [optional]
**username** | **string** | The user name, which was specific by the user when they created the account. Note: This value can be changed by the user. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
