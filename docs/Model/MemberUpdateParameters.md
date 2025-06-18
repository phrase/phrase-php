# # MemberUpdateParameters

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**strategy** | **string** | Update strategy, can be any of set, add, remove. If provided, it will set, add or remove given spaces, projects and locale ids from users access list. | [optional] 
**role** | **string** | Member role, can be any of of Admin, ProjectManager, Developer, Designer, Translator | [optional] 
**project_ids** | **string** | List of project ids the user has access to. | [optional] 
**locale_ids** | **string** | List of locale ids the user has access to. | [optional] 
**default_locale_codes** | **string[]** | List of default locales for the user. | [optional] 
**space_ids** | **string[]** | List of spaces the user is assigned to. | [optional] 
**permissions** | **array&lt;string,string&gt;** | Additional permissions depending on member role. Available permissions are &#x60;create_upload&#x60; and &#x60;review_translations&#x60; | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


