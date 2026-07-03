# # AutomationsCreateParameters1

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | name of the automation | 
**trigger** | **string** |  | 
**project_ids** | **string[]** | List of project IDs to associate with the automation. Providing more than one project ID requires the &#x60;advanced_job_automation&#x60; plan feature; accounts without this feature receive a 422 response with error field &#x60;project_ids&#x60;. | 
**job_template_id** | **string** | id of job template that the automation uses to create jobs from | [optional] 
**status_filters** | **string[]** | translation key statuses used to filter keys that are added to jobs | 
**tags** | **string[]** | used to filter which keys are added to jobs | [optional] 
**cron_schedule** | **string** | along with time_zone, specifies when the scheduled automation is supposed to run | [optional] 
**time_zone** | **string** | along with cron_schedule, specifies when the scheduled automation is supposed to run | [optional] 
**job_owner_id** | **string** | User ID of the job owner that newly created jobs are assigned to. | [optional] 
**include_only_updated_locales** | **bool** | When &#x60;true&#x60;, the automation only acts on locales that changed since its last run. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


