# # TranslateResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**from** | **string** | The enumeration value indicates the language of the input text. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/commerce/translation/types/api:LanguageEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**to** | **string** | The enumeration value indicates the language of the translated text. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/commerce/translation/types/api:LanguageEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**translations** | [**\TNT\Ebay\Commerce\TranslationBeta\V1\Model\Translation[]**](Translation.md) | An array showing the input and translated text. Only one input string can be translated at this time. Support for multiple continuous text strings is expected in the future. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
