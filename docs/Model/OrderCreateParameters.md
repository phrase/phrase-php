# # OrderCreateParameters

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**branch** | **string** | specify the branch to use | [optional] 
**name** | **string** | the name of the order, default name is: Translation order from &#39;current datetime&#39; | [optional] 
**lsp** | **string** | Name of the LSP that should process this order. Can be one of gengo, textmaster. | [optional] 
**source_locale_id** | **string** | Source locale for the order. Can be the name or public id of the source locale. Preferred is the public id. | [optional] 
**target_locale_ids** | **string[]** | List of target locales you want the source content translate to. Can be the name or public id of the target locales. Preferred is the public id. | [optional] 
**translation_type** | **string** | Name of the quality level, availability depends on the LSP. Can be one of:  standard, pro (for orders processed by Gengo) and one of regular, premium, enterprise (for orders processed by TextMaster) | [optional] 
**tag** | **string** | Tag you want to order translations for. | [optional] 
**message** | **string** | Message that is displayed to the translators for description. | [optional] 
**styleguide_id** | **string** | Style guide for translators to be sent with the order. | [optional] 
**unverify_translations_upon_delivery** | **bool** | Unverify translations upon delivery. | [optional] 
**include_untranslated_keys** | **bool** | Order translations for keys with untranslated content in the selected target locales. | [optional] 
**include_unverified_translations** | **bool** | Order translations for keys with unverified content in the selected target locales. | [optional] 
**category** | **string** | Category to use (required for orders processed by TextMaster). | [optional] 
**quality** | **bool** | Extra proofreading option to ensure consistency in vocabulary and style. Only available for orders processed by TextMaster. | [optional] 
**priority** | **bool** | Indicates whether the priority option should be ordered which decreases turnaround time by 30%. Available only for orders processed by TextMaster. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


