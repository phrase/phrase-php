# # OrganizationJobTemplateDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional] 
**name** | **string** |  | [optional] 
**briefing** | **string** |  | [optional] 
**autotranslate_enabled** | **bool** | When &#x60;true&#x60;, jobs created from this template are auto-translated on creation. Maps to the &#x60;autotranslate&#x60; field on the request body. | [optional] 
**source_locale_id** | **string** | Optional. ID of the source locale used by jobs created from this template. When omitted, the project&#39;s default source locale is used. | [optional] 
**created_at** | **\DateTime** |  | [optional] 
**updated_at** | **\DateTime** |  | [optional] 
**owner** | [**\Phrase\Model\UserPreview**](UserPreview.md) |  | [optional] 
**creator** | [**\Phrase\Model\UserPreview**](UserPreview.md) |  | [optional] 
**locales** | [**\Phrase\Model\LocalePreview[]**](LocalePreview.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


