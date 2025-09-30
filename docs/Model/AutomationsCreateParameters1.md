# # AutomationsCreateParameters1

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | name of the automation | 
**trigger** | **string** |  | 
**project_ids** | **string[]** | List of project IDs to associate with the automation. Currently, only the first ID in the array is used. The array format leaves room for future support of multiple projects. | 
**job_template_id** | **string** | id of job template that the automation uses to create jobs from | [optional] 
**status_filters** | **string[]** | translation key statuses used to filter keys that are added to jobs | 
**tags** | **string[]** | used to filter which keys are added to jobs | [optional] 
**cron_schedule** | **string** | along with time_zone, specifies when the scheduled automation is supposed to run | [optional] 
**time_zone** | **string** | along with cron_schedule, specifies when the scheduled automation is supposed to run | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


