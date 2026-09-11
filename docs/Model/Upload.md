# # Upload

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional] 
**filename** | **string** |  | [optional] 
**format** | **string** |  | [optional] 
**state** | **string** |  | [optional] 
**error_message** | **string** | A user-facing message explaining why the upload failed, or &#x60;null&#x60; if the upload did not fail.  This message is intended for display only. Its wording may change at any time and it should not be parsed or relied upon programmatically. | [optional] 
**tag** | **string** | Unique tag of the upload | [optional] 
**tags** | **string[]** | List of tags that were assigned to the uploaded keys | [optional] 
**url** | **string** | The URL to the upload in Phrase Strings app. | [optional] 
**user** | [**\Phrase\Model\UserPreview**](.md) |  | [optional] 
**summary** | [**\Phrase\Model\UploadSummary**](UploadSummary.md) |  | [optional] 
**created_at** | **\DateTime** |  | [optional] 
**updated_at** | **\DateTime** |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


