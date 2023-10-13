# Phrase\KeysFigmaAttachmentsApi

All URIs are relative to *https://api.phrase.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**figmaAttachmentAttachToKey**](KeysFigmaAttachmentsApi.md#figmaAttachmentAttachToKey) | **POST** /projects/{project_id}/figma_attachments/{figma_attachment_id}/keys | Attach the Figma attachment to a key
[**figmaAttachmentDetachFromKey**](KeysFigmaAttachmentsApi.md#figmaAttachmentDetachFromKey) | **DELETE** /projects/{project_id}/figma_attachments/{figma_attachment_id}/keys/{id} | Detach the Figma attachment from a key



## figmaAttachmentAttachToKey

> figmaAttachmentAttachToKey($project_id, $figma_attachment_id, $id, $x_phrase_app_otp, $branch)

Attach the Figma attachment to a key

Attach the Figma attachment to a key

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\KeysFigmaAttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string | Project ID
$figma_attachment_id = 'figma_attachment_id_example'; // string | Figma attachment ID
$id = 'id_example'; // string | ID
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)
$branch = my-feature-branch; // string | specify the branch to use

try {
    $apiInstance->figmaAttachmentAttachToKey($project_id, $figma_attachment_id, $id, $x_phrase_app_otp, $branch);
} catch (Exception $e) {
    echo 'Exception when calling KeysFigmaAttachmentsApi->figmaAttachmentAttachToKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project ID |
 **figma_attachment_id** | **string**| Figma attachment ID |
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


## figmaAttachmentDetachFromKey

> figmaAttachmentDetachFromKey($project_id, $figma_attachment_id, $id, $x_phrase_app_otp, $branch)

Detach the Figma attachment from a key

Detach the Figma attachment from a key

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\KeysFigmaAttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string | Project ID
$figma_attachment_id = 'figma_attachment_id_example'; // string | Figma attachment ID
$id = 'id_example'; // string | ID
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)
$branch = my-feature-branch; // string | specify the branch to use

try {
    $apiInstance->figmaAttachmentDetachFromKey($project_id, $figma_attachment_id, $id, $x_phrase_app_otp, $branch);
} catch (Exception $e) {
    echo 'Exception when calling KeysFigmaAttachmentsApi->figmaAttachmentDetachFromKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project ID |
 **figma_attachment_id** | **string**| Figma attachment ID |
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

