# # Automation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional] 
**name** | **string** |  | [optional] 
**status** | **string** |  | [optional] 
**trigger** | **string** |  | [optional] 
**status_filters** | **string[]** | translation key statuses used to filter keys that are added to jobs | [optional] 
**project_id** | **string** |  | [optional] 
**project_ids** | **string[]** | All project IDs the automation applies to. Returned alongside the singular &#x60;project_id&#x60; for backwards compatibility. | [optional] 
**job_template_id** | **string** |  | [optional] 
**job_owner_id** | **string** | User ID of the job owner that newly created jobs are assigned to. | [optional] 
**include_only_updated_locales** | **bool** | When &#x60;true&#x60;, the automation only acts on locales that changed since its last run. | [optional] 
**tags** | **string[]** |  | [optional] 
**cron_schedule** | **string** |  | [optional] 
**time_zone** | **string** |  | [optional] 
**account** | [**\Phrase\Model\Account**](Account.md) |  | [optional] 
**created_at** | **\DateTime** |  | [optional] 
**updated_at** | **\DateTime** |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


