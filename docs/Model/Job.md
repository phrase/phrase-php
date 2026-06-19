# # Job

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional] 
**name** | **string** |  | [optional] 
**briefing** | **string** |  | [optional] 
**due_date** | **\DateTime** |  | [optional] 
**state** | **string** |  | [optional] 
**ticket_url** | **string** |  | [optional] 
**project** | [**\Phrase\Model\ProjectShort**](ProjectShort.md) |  | [optional] 
**branch** | [**\Phrase\Model\BranchName**](BranchName.md) |  | [optional] 
**created_at** | **\DateTime** |  | [optional] 
**updated_at** | **\DateTime** |  | [optional] 
**automation_id** | **string** | The ID of the automation that created this job, or null if the job was created manually. | [optional] 
**job_template_id** | **string** | The ID of the job template this job was created from, or null if no template was used. | [optional] 
**review_due_date** | **\DateTime** | The review due date for this job. Returns &#x60;null&#x60; when the project does not have review workflow enabled. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


