# # RepoSyncEvent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**event_type** | **string** |  | [optional] 
**created_at** | **\DateTime** |  | [optional] 
**status** | **string** |  | [optional] 
**pull_request_url** | **string** | URL of the pull request created on export | [optional] 
**auto_import** | **bool** | Whether the import was triggered by the repo push event | [optional] 
**errors** | [**\Phrase\Model\RepoSyncEventErrorsInner[]**](RepoSyncEventErrorsInner.md) | List of error messages, in case of failure | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


