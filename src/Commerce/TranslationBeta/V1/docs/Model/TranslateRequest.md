# # TranslateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**from** | **string** | The language of the input text to be translated. Not all LanguageEnum values are supported in this field. For a full list of supported language translations, see the table in the API Overview page. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/commerce/translation/types/api:LanguageEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**text** | **string[]** | The input text to translate. For ITEM_DESCRIPTION translations, HTML/CSS markup and links can be included, but will count toward max character limit. Max Length: 1,000 characters for ITEM_TITLE 100,000 characters for ITEM_DESCRIPTION, including markup/tagsMax Occurrence: 1. Only one continuous text string currently supported. | [optional]
**to** | **string** | The target language for the translation of the input text. Not all LanguageEnum values are supported in this field. For a full list of supported language translations, see the table in the API Overview page. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/commerce/translation/types/api:LanguageEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**translation_context** | **string** | Input the listing entity to be translated. Valid Values: ITEM_TITLE and ITEM_DESCRIPTION For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/commerce/translation/types/api:TranslationContextEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
