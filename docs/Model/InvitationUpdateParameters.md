# # InvitationUpdateParameters

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**role** | **string** | Invitiation role, can be any of Manager, Developer, Translator | [optional] 
**project_ids** | **string** | List of project ids the invited user has access to | [optional] 
**locale_ids** | **string** | List of locale ids the invited user has access to | [optional] 
**space_ids** | **string[]** | List of spaces the user is assigned to. | [optional] 
**team_ids** | **string[]** | List of teams the user is assigned to. | [optional] 
**default_locale_codes** | **string[]** | List of default locales for the user. | [optional] 
**permissions** | **map[string,string]** | Additional permissions depending on invitation role. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


