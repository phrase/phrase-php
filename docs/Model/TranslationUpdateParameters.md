# # TranslationUpdateParameters

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**branch** | **string** | specify the branch to use | [optional] 
**content** | **string** | Translation content | [optional] 
**plural_suffix** | **string** | Plural suffix. Can be one of: zero, one, two, few, many, other. Must be specified if the key associated to the translation is pluralized. | [optional] 
**unverified** | **bool** | Indicates whether translation is unverified. Part of the &lt;a href&#x3D;\&quot;https://support.phrase.com/hc/en-us/articles/5784094755484\&quot; target&#x3D;\&quot;_blank\&quot;&gt;Advanced Workflows&lt;/a&gt; feature. | [optional] 
**excluded** | **bool** | Indicates whether translation is excluded. | [optional] 
**autotranslate** | **bool** | Indicates whether the translation should be auto-translated. Responses with status 422 if provided for translation within a non-default locale or the project does not have the Autopilot feature enabled. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


