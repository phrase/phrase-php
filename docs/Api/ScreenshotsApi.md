# Phrase\ScreenshotsApi

All URIs are relative to *https://api.phrase.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**screenshotCreate**](ScreenshotsApi.md#screenshotCreate) | **POST** /projects/{project_id}/screenshots | Create a screenshot
[**screenshotDelete**](ScreenshotsApi.md#screenshotDelete) | **DELETE** /projects/{project_id}/screenshots/{id} | Delete a screenshot
[**screenshotShow**](ScreenshotsApi.md#screenshotShow) | **GET** /projects/{project_id}/screenshots/{id} | Get a single screenshot
[**screenshotUpdate**](ScreenshotsApi.md#screenshotUpdate) | **PATCH** /projects/{project_id}/screenshots/{id} | Update a screenshot
[**screenshotsList**](ScreenshotsApi.md#screenshotsList) | **GET** /projects/{project_id}/screenshots | List screenshots



## screenshotCreate

> \Phrase\Model\Screenshot screenshotCreate($project_id, $filename, $x_phrase_app_otp, $branch, $name, $description)

Create a screenshot

Creates a screenshot in a project to provide visual context for in-context translation. Attach translation keys to regions of the uploaded image so translators can see where each string appears in your UI.  This endpoint accepts a multipart/form-data request with a binary file upload, unlike most Phrase API endpoints that use JSON. Use a multipart form client or the -F flag in curl rather than a JSON body.  The screenshot name must be unique within the project (case-insensitive). When name is omitted, it is derived from the uploaded filename. The account must have the Screenshots feature enabled; requests to projects on accounts without it return 403. Creating a screenshot requires a token with the write scope and manage access to the project.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\ScreenshotsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string | Project ID
$filename = "/path/to/file.txt"; // \SplFileObject | Image file to upload. Accepted formats are JPEG (jpg/jpeg), GIF, and PNG. Maximum file size is 10 MB. Submitting an unsupported format or a file exceeding the size limit returns 422.
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)
$branch = 'branch_example'; // string | specify the branch to use
$name = 'name_example'; // string | Display name for the screenshot. Must be unique within the project (case-insensitive). When omitted, the name is derived from the uploaded filename.
$description = 'description_example'; // string | Optional free-text description of the screenshot.

try {
    $result = $apiInstance->screenshotCreate($project_id, $filename, $x_phrase_app_otp, $branch, $name, $description);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScreenshotsApi->screenshotCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project ID |
 **filename** | **\SplFileObject****\SplFileObject**| Image file to upload. Accepted formats are JPEG (jpg/jpeg), GIF, and PNG. Maximum file size is 10 MB. Submitting an unsupported format or a file exceeding the size limit returns 422. |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]
 **branch** | **string**| specify the branch to use | [optional]
 **name** | **string**| Display name for the screenshot. Must be unique within the project (case-insensitive). When omitted, the name is derived from the uploaded filename. | [optional]
 **description** | **string**| Optional free-text description of the screenshot. | [optional]

### Return type

[**\Phrase\Model\Screenshot**](../Model/Screenshot.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: multipart/form-data
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## screenshotDelete

> screenshotDelete($project_id, $id, $x_phrase_app_otp, $branch)

Delete a screenshot

Permanently removes a screenshot and all its associated markers from the project. Use this when you need to fully remove a screenshot that is no longer relevant — for example, after a UI redesign renders the captured screen obsolete. This is a hard delete: the screenshot record and every key-to-region marker linked to it are destroyed together and cannot be recovered.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\ScreenshotsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string | Project ID
$id = 'id_example'; // string | ID
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)
$branch = my-feature-branch; // string | specify the branch to use

try {
    $apiInstance->screenshotDelete($project_id, $id, $x_phrase_app_otp, $branch);
} catch (Exception $e) {
    echo 'Exception when calling ScreenshotsApi->screenshotDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project ID |
 **id** | **string**| ID |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]
 **branch** | **string**| specify the branch to use | [optional]

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


## screenshotShow

> \Phrase\Model\Screenshot screenshotShow($project_id, $id, $x_phrase_app_otp, $branch)

Get a single screenshot

Get details on a single screenshot for a given project.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\ScreenshotsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string | Project ID
$id = 'id_example'; // string | ID
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)
$branch = my-feature-branch; // string | specify the branch to use

try {
    $result = $apiInstance->screenshotShow($project_id, $id, $x_phrase_app_otp, $branch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScreenshotsApi->screenshotShow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project ID |
 **id** | **string**| ID |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]
 **branch** | **string**| specify the branch to use | [optional]

### Return type

[**\Phrase\Model\Screenshot**](../Model/Screenshot.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## screenshotUpdate

> \Phrase\Model\Screenshot screenshotUpdate($project_id, $id, $screenshot_update_parameters, $x_phrase_app_otp)

Update a screenshot

Update an existing screenshot.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\ScreenshotsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string | Project ID
$id = 'id_example'; // string | ID
$screenshot_update_parameters = new \Phrase\Model\ScreenshotUpdateParameters(); // \Phrase\Model\ScreenshotUpdateParameters | 
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)

try {
    $result = $apiInstance->screenshotUpdate($project_id, $id, $screenshot_update_parameters, $x_phrase_app_otp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScreenshotsApi->screenshotUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project ID |
 **id** | **string**| ID |
 **screenshot_update_parameters** | [**\Phrase\Model\ScreenshotUpdateParameters**](../Model/ScreenshotUpdateParameters.md)|  |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]

### Return type

[**\Phrase\Model\Screenshot**](../Model/Screenshot.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## screenshotsList

> \Phrase\Model\Screenshot[] screenshotsList($project_id, $x_phrase_app_otp, $page, $per_page, $branch, $key_id)

List screenshots

List all screenshots for the given project.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\ScreenshotsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string | Project ID
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)
$page = 1; // int | Page number
$per_page = 25; // int | Limit on the number of objects to be returned, between 1 and 100. 25 by default
$branch = my-feature-branch; // string | specify the branch to use
$key_id = abcd1234cdef1234abcd1234cdef1234; // string | filter by key

try {
    $result = $apiInstance->screenshotsList($project_id, $x_phrase_app_otp, $page, $per_page, $branch, $key_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScreenshotsApi->screenshotsList: ', $e->getMessage(), PHP_EOL;
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
 **branch** | **string**| specify the branch to use | [optional]
 **key_id** | **string**| filter by key | [optional]

### Return type

[**\Phrase\Model\Screenshot[]**](../Model/Screenshot.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

