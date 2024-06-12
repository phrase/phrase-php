# # ReleaseTrigger

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional] 
**branch** | **string** |  | [optional] 
**cron_schedule** | **string** | Cron schedule for the scheduler. Read more about the format of this field at https://en.wikipedia.org/wiki/Cron | [optional] 
**time_zone** | **string** | Time zone for the scheduler | [optional] 
**next_run_at** | **\DateTime** | The next time a release will be created for this trigger | [optional] 
**app_min_version** | **string** |  | [optional] 
**app_max_version** | **string** |  | [optional] 
**locales** | [**\Phrase\Model\LocalePreview[]**](LocalePreview.md) |  | [optional] 
**tags** | **string[]** |  | [optional] 
**created_at** | **\DateTime** |  | [optional] 
**updated_at** | **\DateTime** |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


