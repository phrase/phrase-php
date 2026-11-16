# # RepoSync

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional] 
**name** | **string** | Optional custom display name for this repo sync. When null or blank, the sync is displayed using the associated project name. | [optional] 
**project** | [**\Phrase\Model\ProjectShort**](ProjectShort.md) |  | [optional] 
**provider** | **string** |  | [optional] 
**enabled** | **bool** |  | [optional] 
**auto_import** | **bool** |  | [optional] 
**repo_name** | **string** |  | [optional] 
**pr_branch** | **string** | Branch used as the source of exports/PRs. May be &#x60;null&#x60; when the sync is configured to push directly to &#x60;base_branch&#x60;. | [optional] 
**created_at** | **\DateTime** |  | [optional] 
**last_import_at** | **\DateTime** |  | [optional] 
**last_export_at** | **\DateTime** |  | [optional] 
**owner** | [**\Phrase\Model\UserShort**](UserShort.md) |  | [optional] 
**export_triggers** | **string[]** | Events that trigger an automatic export. Only present when the automatic export feature is enabled for the account. Possible values: &#x60;schedule&#x60; (runs on the configured schedule), &#x60;branch_merged&#x60; (runs when a branch is merged in the connected repository), &#x60;job_completed&#x60; (runs when a translation job completes in the project). | [optional] 
**export_schedule** | [**\Phrase\Model\RepoSyncExportSchedule**](RepoSyncExportSchedule.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


