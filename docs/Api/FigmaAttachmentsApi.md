# Phrase\FigmaAttachmentsApi

All URIs are relative to *https://api.phrase.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**figmaAttachmentCreate**](FigmaAttachmentsApi.md#figmaAttachmentCreate) | **POST** /projects/{project_id}/figma_attachments | Create a Figma attachment
[**figmaAttachmentDelete**](FigmaAttachmentsApi.md#figmaAttachmentDelete) | **DELETE** /projects/{project_id}/figma_attachments/{id} | Delete a Figma attachment
[**figmaAttachmentShow**](FigmaAttachmentsApi.md#figmaAttachmentShow) | **GET** /projects/{project_id}/figma_attachments/{id} | Get a single Figma attachment
[**figmaAttachmentUpdate**](FigmaAttachmentsApi.md#figmaAttachmentUpdate) | **PATCH** /projects/{project_id}/figma_attachments/{id} | Update a Figma attachment
[**figmaAttachmentsList**](FigmaAttachmentsApi.md#figmaAttachmentsList) | **GET** /projects/{project_id}/figma_attachments | List Figma attachments



## figmaAttachmentCreate

> \Phrase\Model\FigmaAttachment figmaAttachmentCreate($project_id, $figma_attachment_create_parameters, $x_phrase_app_otp, $branch)

Create a Figma attachment

Create a new Figma attachment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\FigmaAttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string | Project ID
$figma_attachment_create_parameters = new \Phrase\Model\FigmaAttachmentCreateParameters(); // \Phrase\Model\FigmaAttachmentCreateParameters | 
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)
$branch = my-feature-branch; // string | specify the branch to use

try {
    $result = $apiInstance->figmaAttachmentCreate($project_id, $figma_attachment_create_parameters, $x_phrase_app_otp, $branch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FigmaAttachmentsApi->figmaAttachmentCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project ID |
 **figma_attachment_create_parameters** | [**\Phrase\Model\FigmaAttachmentCreateParameters**](../Model/FigmaAttachmentCreateParameters.md)|  |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]
 **branch** | **string**| specify the branch to use | [optional]

### Return type

[**\Phrase\Model\FigmaAttachment**](../Model/FigmaAttachment.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## figmaAttachmentDelete

> figmaAttachmentDelete($project_id, $id, $x_phrase_app_otp, $branch)

Delete a Figma attachment

Delete an existing Figma attachment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\FigmaAttachmentsApi(
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
    $apiInstance->figmaAttachmentDelete($project_id, $id, $x_phrase_app_otp, $branch);
} catch (Exception $e) {
    echo 'Exception when calling FigmaAttachmentsApi->figmaAttachmentDelete: ', $e->getMessage(), PHP_EOL;
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
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## figmaAttachmentShow

> \Phrase\Model\FigmaAttachment figmaAttachmentShow($project_id, $id, $x_phrase_app_otp, $branch)

Get a single Figma attachment

Get details on a single Figma attachment for a given project.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\FigmaAttachmentsApi(
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
    $result = $apiInstance->figmaAttachmentShow($project_id, $id, $x_phrase_app_otp, $branch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FigmaAttachmentsApi->figmaAttachmentShow: ', $e->getMessage(), PHP_EOL;
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

[**\Phrase\Model\FigmaAttachment**](../Model/FigmaAttachment.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## figmaAttachmentUpdate

> \Phrase\Model\FigmaAttachment figmaAttachmentUpdate($project_id, $id, $figma_attachment_update_parameters, $x_phrase_app_otp, $branch)

Update a Figma attachment

Update an existing Figma attachment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\FigmaAttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string | Project ID
$id = 'id_example'; // string | ID
$figma_attachment_update_parameters = new \Phrase\Model\FigmaAttachmentUpdateParameters(); // \Phrase\Model\FigmaAttachmentUpdateParameters | 
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)
$branch = my-feature-branch; // string | specify the branch to use

try {
    $result = $apiInstance->figmaAttachmentUpdate($project_id, $id, $figma_attachment_update_parameters, $x_phrase_app_otp, $branch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FigmaAttachmentsApi->figmaAttachmentUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project ID |
 **id** | **string**| ID |
 **figma_attachment_update_parameters** | [**\Phrase\Model\FigmaAttachmentUpdateParameters**](../Model/FigmaAttachmentUpdateParameters.md)|  |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]
 **branch** | **string**| specify the branch to use | [optional]

### Return type

[**\Phrase\Model\FigmaAttachment**](../Model/FigmaAttachment.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## figmaAttachmentsList

> \Phrase\Model\FigmaAttachment[] figmaAttachmentsList($project_id, $x_phrase_app_otp, $page, $per_page, $branch)

List Figma attachments

List all Figma attachments for the given project

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\FigmaAttachmentsApi(
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

try {
    $result = $apiInstance->figmaAttachmentsList($project_id, $x_phrase_app_otp, $page, $per_page, $branch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FigmaAttachmentsApi->figmaAttachmentsList: ', $e->getMessage(), PHP_EOL;
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

### Return type

[**\Phrase\Model\FigmaAttachment[]**](../Model/FigmaAttachment.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

