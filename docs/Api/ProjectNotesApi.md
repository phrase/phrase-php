# Phrase\ProjectNotesApi

All URIs are relative to *https://api.phrase.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**projectNoteDestroy**](ProjectNotesApi.md#projectNoteDestroy) | **DELETE** /projects/{project_id}/note | Delete a project note
[**projectNoteShow**](ProjectNotesApi.md#projectNoteShow) | **GET** /projects/{project_id}/note | Get a project note
[**projectNoteUpdate**](ProjectNotesApi.md#projectNoteUpdate) | **PATCH** /projects/{project_id}/note | Create or update a project note



## projectNoteDestroy

> projectNoteDestroy($project_id, $x_phrase_app_otp, $branch)

Delete a project note

Deletes the note associated with a project. This operation is idempotent — it succeeds silently even when no note exists. The note is resolved against the main project — branch projects delete the main project's note. Requires manage permissions on the project and the `write` OAuth scope.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\ProjectNotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string | Project ID
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)
$branch = my-feature-branch; // string | Branch to use

try {
    $apiInstance->projectNoteDestroy($project_id, $x_phrase_app_otp, $branch);
} catch (Exception $e) {
    echo 'Exception when calling ProjectNotesApi->projectNoteDestroy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project ID |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]
 **branch** | **string**| Branch to use | [optional]

### Return type

void (empty response body)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## projectNoteShow

> \Phrase\Model\Note projectNoteShow($project_id, $x_phrase_app_otp, $branch)

Get a project note

Returns the Markdown-formatted note attached to a project. The note is resolved against the main project — branch projects return the main project's note. Returns 404 when no note has been created yet. Requires the `read` OAuth scope.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\ProjectNotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string | Project ID
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)
$branch = my-feature-branch; // string | Branch to use

try {
    $result = $apiInstance->projectNoteShow($project_id, $x_phrase_app_otp, $branch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectNotesApi->projectNoteShow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project ID |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]
 **branch** | **string**| Branch to use | [optional]

### Return type

[**\Phrase\Model\Note**](../Model/Note.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## projectNoteUpdate

> \Phrase\Model\Note projectNoteUpdate($project_id, $project_note_update_parameters, $x_phrase_app_otp, $branch)

Create or update a project note

Creates or updates the Markdown-formatted note for a project. If a note already exists it is updated in place; otherwise a new note is created. The note is stored on the main project — branch projects write to the main project's note. `body` is required. Requires manage permissions on the project and the `write` OAuth scope.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\ProjectNotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string | Project ID
$project_note_update_parameters = new \Phrase\Model\ProjectNoteUpdateParameters(); // \Phrase\Model\ProjectNoteUpdateParameters | 
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)
$branch = my-feature-branch; // string | Branch to use

try {
    $result = $apiInstance->projectNoteUpdate($project_id, $project_note_update_parameters, $x_phrase_app_otp, $branch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectNotesApi->projectNoteUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project ID |
 **project_note_update_parameters** | [**\Phrase\Model\ProjectNoteUpdateParameters**](../Model/ProjectNoteUpdateParameters.md)|  |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]
 **branch** | **string**| Branch to use | [optional]

### Return type

[**\Phrase\Model\Note**](../Model/Note.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

