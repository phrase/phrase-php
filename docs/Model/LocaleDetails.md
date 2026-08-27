# # LocaleDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional] 
**name** | **string** |  | [optional] 
**code** | **string** |  | [optional] 
**default** | **bool** |  | [optional] 
**main** | **bool** |  | [optional] 
**rtl** | **bool** |  | [optional] 
**plural_forms** | **string[]** |  | [optional] 
**ordinal_plural_forms** | **string[]** |  | [optional] 
**source_locale** | [**\Phrase\Model\LocalePreview**](LocalePreview.md) |  | [optional] 
**fallback_locale** | [**\Phrase\Model\LocalePreview**](LocalePreview.md) |  | [optional] 
**language_ai_profile** | **string** |  | [optional] 
**unverify_new_translations** | **bool** | Indicates that new translations for this locale are marked as unverified. Only applies to locales using the basic verification workflow. Part of the [Advanced Workflows](https://support.phrase.com/hc/en-us/articles/5784094755484) feature. | [optional] 
**unverify_updated_translations** | **bool** | Indicates that updated translations for this locale are marked as unverified. Only applies to locales using the basic verification workflow. Part of the [Advanced Workflows](https://support.phrase.com/hc/en-us/articles/5784094755484) feature. | [optional] 
**unverify_on_source_changes** | **bool** | Indicates that translations for this locale are marked as unverified when the source language has been changed. | [optional] 
**created_at** | **\DateTime** |  | [optional] 
**updated_at** | **\DateTime** |  | [optional] 
**statistics** | [**\Phrase\Model\LocaleStatistics**](LocaleStatistics.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


