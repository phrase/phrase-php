# # ReleaseCreateParameters

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**description** | **string** | Description of the release | [optional] 
**platforms** | **string[]** | List of platforms the release should support. | [optional] 
**locale_ids** | **string[]** | List of locale ids that will be included in the release. If empty, distribution locales will be used | [optional] 
**tags** | **string[]** | Only include tagged keys in the release. For a key to be included it must be tagged with all tags provided | [optional] 
**app_min_version** | **string** | Minimum version of the app that the release supports in semver format | [optional] 
**app_max_version** | **string** | Maximum version of the app that the release supports in semver format | [optional] 
**branch** | **string** | Branch used for release | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


