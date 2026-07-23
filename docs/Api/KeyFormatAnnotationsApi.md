# Phrase\KeyFormatAnnotationsApi

All URIs are relative to *https://api.phrase.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**keyFormatAnnotationsList**](KeyFormatAnnotationsApi.md#keyFormatAnnotationsList) | **GET** /projects/{project_id}/keys/{id}/format_annotations | List format annotations for a key



## keyFormatAnnotationsList

> \Phrase\Model\KeyFormatAnnotationsList200ResponseInner[] keyFormatAnnotationsList($project_id, $id, $x_phrase_app_otp, $branch)

List format annotations for a key

Returns the format annotations stored on a translation key. Format annotations capture file-format data recorded when the key was imported — for example, an ARB placeholder block or an XLIFF note.  Results are limited to 1,000 entries.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\KeyFormatAnnotationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string | Project ID
$id = 'id_example'; // string | ID
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)
$branch = my-feature-branch; // string | Branch to use

try {
    $result = $apiInstance->keyFormatAnnotationsList($project_id, $id, $x_phrase_app_otp, $branch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeyFormatAnnotationsApi->keyFormatAnnotationsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project ID |
 **id** | **string**| ID |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]
 **branch** | **string**| Branch to use | [optional]

### Return type

[**\Phrase\Model\KeyFormatAnnotationsList200ResponseInner[]**](../Model/KeyFormatAnnotationsList200ResponseInner.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

