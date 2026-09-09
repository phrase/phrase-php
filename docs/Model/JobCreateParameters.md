# # JobCreateParameters

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**branch** | **string** | specify the branch to use | [optional] 
**name** | **string** | Job name | 
**source_locale_id** | **string** | The API id of the source language | [optional] 
**briefing** | **string** | Briefing for the translators | [optional] 
**due_date** | **\DateTime** | Date the job should be finished | [optional] 
**ticket_url** | **string** | URL to a ticket for this job (e.g. Jira, Trello) | [optional] 
**tags** | **string[]** | tags of keys that should be included within the job.  *Note: a tag matches every key currently carrying that tag, not just the ones you just tagged. For example, if hundreds of pre-existing keys already share the tag &#x60;myUploadTag&#x60;, adding it here pulls in every one of them, not only the key you just tagged. Use &#x60;translation_key_ids&#x60; to scope the job to specific keys instead.* | [optional] 
**translation_key_ids** | **string[]** | ids of keys that should be included within the job | [optional] 
**target_locale_ids** | **string[]** | List of target locales for the job. Mutually exclusive with &#x60;job_template_id&#x60;. | [optional] 
**job_template_id** | **string** | id of a job template you would like to model the created job after. Any manually added parameters will take preference over template attributes. Mutually exclusive with &#x60;target_locale_ids&#x60;. | [optional] 
**autotranslate** | **bool** | Automatically translate the job using machine translation. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


