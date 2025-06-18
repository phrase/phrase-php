# # LocaleDownloadCreateParameters

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**file_format** | **string** | File format name. See the [format guide](https://support.phrase.com/hc/en-us/sections/6111343326364) for all supported file formats. | 
**branch** | **string** | specify the branch to use | [optional] 
**tags** | **string** | Limit results to keys tagged with a list of comma separated tag names. | [optional] 
**include_empty_translations** | **bool** | Indicates whether keys without translations should be included in the output as well. | [optional] 
**exclude_empty_zero_forms** | **bool** | Indicates whether zero forms should be included when empty in pluralized keys. | [optional] 
**include_translated_keys** | **bool** | Include translated keys in the locale file. Use in combination with include_empty_translations to obtain only untranslated keys. | [optional] 
**keep_notranslate_tags** | **bool** | Indicates whether [NOTRANSLATE] tags should be kept. | [optional] 
**format_options** | **object** | Additional formatting and render options. See the [format guide](https://support.phrase.com/hc/en-us/sections/6111343326364) for a list of options available for each format. Specify format options like this: &#x60;...&amp;format_options[foo]&#x3D;bar&#x60; | [optional] 
**encoding** | **string** | Enforces a specific encoding on the file contents. Valid options are \&quot;UTF-8\&quot;, \&quot;UTF-16\&quot; and \&quot;ISO-8859-1\&quot;. | [optional] 
**include_unverified_translations** | **bool** | if set to false unverified translations are excluded | [optional] 
**use_last_reviewed_version** | **bool** | If set to true the last reviewed version of a translation is used. This is only available if the review workflow is enabled for the project. | [optional] 
**locale_ids** | **string[]** | Locale IDs or locale names | [optional] 
**fallback_locale_id** | **string** | If a key has no translation in the locale being downloaded the translation in the fallback locale will be used. Provide the ID of the locale that should be used as the fallback. Requires include_empty_translations to be set to &#x60;true&#x60;. | [optional] 
**source_locale_id** | **string** | Provides the source language of a corresponding job as the source language of the generated locale file. This parameter will be ignored unless used in combination with a &#x60;tag&#x60; parameter indicating a specific job. | [optional] 
**custom_metadata_filters** | **object** | Custom metadata filters. Provide the name of the metadata field and the value to filter by. Only keys with matching metadata will be included in the download. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


