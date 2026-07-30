# # AutomationEvent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique identifier of the automation event. | [optional] 
**automation_id** | **string** | Identifier of the automation that produced this event. | [optional] 
**state** | **string** | Outcome of the automation run. | [optional] 
**triggered_by** | **string** | What caused the automation to run. | [optional] 
**created_at** | **\DateTime** | Timestamp when the event was created. | [optional] 
**jobs_created** | **int** | Number of jobs created during this automation run. | [optional] 
**job_ids** | **string[]** | Identifiers of the jobs created during this automation run. | [optional] 
**project** | [**\Phrase\Model\AutomationEventProject**](AutomationEventProject.md) |  | [optional] 
**details** | **string** | Error message describing the failure when state is &#x60;failure&#x60;; null otherwise. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


