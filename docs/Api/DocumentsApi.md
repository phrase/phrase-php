# Phrase\DocumentsApi

All URIs are relative to *https://api.phrase.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**documentDelete**](DocumentsApi.md#documentDelete) | **DELETE** /projects/{project_id}/documents/{id} | Delete document
[**documentsList**](DocumentsApi.md#documentsList) | **GET** /projects/{project_id}/documents | List documents



## documentDelete

> documentDelete($project_id, $id, $x_phrase_app_otp)

Delete document

Permanently deletes a document and all of its associated translation segments from the project. Use this when you want to remove a document that is no longer needed; the deletion cannot be reversed and all associated segments will be lost.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string | Project ID
$id = 'id_example'; // string | ID
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)

try {
    $apiInstance->documentDelete($project_id, $id, $x_phrase_app_otp);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->documentDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project ID |
 **id** | **string**| ID |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]

### Return type

void (empty response body)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## documentsList

> \Phrase\Model\Document[] documentsList($project_id, $x_phrase_app_otp, $page, $per_page, $q)

List documents

Returns all documents in a project that the authenticated user has read access to. A Document is a source file — an HTML or DOCX file — that has been uploaded to Phrase Strings and whose content is segmented into translation keys for localization.  Use this endpoint to enumerate documents before downloading, previewing, or triggering translation workflows for individual files.  The q parameter performs a prefix match on the document name (case-insensitive). For example, passing q=invoice returns documents whose names begin with \"invoice\" but not documents containing \"invoice\" elsewhere in the name.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string | Project ID
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)
$page = 1; // int | Page number
$per_page = 25; // int | Limit on the number of objects to be returned, between 1 and 100. 25 by default
$q = invoice; // string | Filter documents by name prefix. Returns documents whose name starts with the given value (case-insensitive).

try {
    $result = $apiInstance->documentsList($project_id, $x_phrase_app_otp, $page, $per_page, $q);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->documentsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project ID |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]
 **page** | **int**| Page number | [optional]
 **per_page** | **int**| Limit on the number of objects to be returned, between 1 and 100. 25 by default | [optional]
 **q** | **string**| Filter documents by name prefix. Returns documents whose name starts with the given value (case-insensitive). | [optional]

### Return type

[**\Phrase\Model\Document[]**](../Model/Document.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

