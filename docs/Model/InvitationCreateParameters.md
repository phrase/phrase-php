# # InvitationCreateParameters

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**email** | **string** | The email of the invited user. The &#x60;email&#x60; can not be updated once created. Create a new invitation for each unique email. | 
**role** | **string** | Invitiation role, can be any of Manager, Developer, Translator. | 
**project_ids** | **string** | List of project ids the invited user has access to. | [optional] 
**locale_ids** | **string** | List of locale ids the invited user has access to. | [optional] 
**space_ids** | **string[]** | List of spaces the user is assigned to. | [optional] 
**team_ids** | **string[]** | List of teams the user is assigned to. | [optional] 
**default_locale_codes** | **string[]** | List of default locales for the user. | [optional] 
**permissions** | **array&lt;string,string&gt;** | Additional permissions depending on invitation role. Available permissions are &#x60;create_upload&#x60; and &#x60;review_translations&#x60; | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


