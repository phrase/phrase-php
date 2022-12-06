# Phrase\UploadsApi

All URIs are relative to *https://api.phrase.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**uploadCreate**](UploadsApi.md#uploadCreate) | **POST** /projects/{project_id}/uploads | Upload a new file
[**uploadShow**](UploadsApi.md#uploadShow) | **GET** /projects/{project_id}/uploads/{id} | Get a single upload
[**uploadsList**](UploadsApi.md#uploadsList) | **GET** /projects/{project_id}/uploads | List uploads



## uploadCreate

> \Phrase\Model\Upload uploadCreate($project_id, $x_phrase_app_otp, $branch, $file, $file_format, $locale_id, $tags, $update_translations, $update_descriptions, $convert_emoji, $skip_upload_tags, $skip_unverification, $file_encoding, $locale_mapping, $format_options, $autotranslate, $mark_reviewed)

Upload a new file

Upload a new language file. Creates necessary resources in your project.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\UploadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string | Project ID
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)
$branch = 'branch_example'; // string | specify the branch to use
$file = "/path/to/file.txt"; // \SplFileObject | File to be imported
$file_format = 'file_format_example'; // string | File format. Auto-detected when possible and not specified.
$locale_id = 'locale_id_example'; // string | Locale of the file's content. Can be the name or public id of the locale. Preferred is the public id.
$tags = 'tags_example'; // string | List of tags separated by comma to be associated with the new keys contained in the upload.
$update_translations = True; // bool | Indicates whether existing translations should be updated with the file content.
$update_descriptions = True; // bool | Existing key descriptions will be updated with the file content. Empty descriptions overwrite existing descriptions.
$convert_emoji = True; // bool | This option is obsolete. Providing the option will cause a bad request error.
$skip_upload_tags = True; // bool | Indicates whether the upload should not create upload tags.
$skip_unverification = True; // bool | Indicates whether the upload should unverify updated translations.
$file_encoding = 'file_encoding_example'; // string | Enforces a specific encoding on the file contents. Valid options are \\\"UTF-8\\\", \\\"UTF-16\\\" and \\\"ISO-8859-1\\\".
$locale_mapping = new \stdClass; // object | Optional, format specific mapping between locale names and the columns the translations to those locales are contained in.
$format_options = new \stdClass; // object | Additional options available for specific formats. See our format guide for complete list.
$autotranslate = True; // bool | If set, translations for the uploaded language will be fetched automatically.
$mark_reviewed = True; // bool | Indicated whether the imported translations should be marked as reviewed. This setting is available if the review workflow (currently beta) is enabled for the project.

try {
    $result = $apiInstance->uploadCreate($project_id, $x_phrase_app_otp, $branch, $file, $file_format, $locale_id, $tags, $update_translations, $update_descriptions, $convert_emoji, $skip_upload_tags, $skip_unverification, $file_encoding, $locale_mapping, $format_options, $autotranslate, $mark_reviewed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UploadsApi->uploadCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project ID |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]
 **branch** | **string**| specify the branch to use | [optional]
 **file** | **\SplFileObject****\SplFileObject**| File to be imported | [optional]
 **file_format** | **string**| File format. Auto-detected when possible and not specified. | [optional]
 **locale_id** | **string**| Locale of the file&#39;s content. Can be the name or public id of the locale. Preferred is the public id. | [optional]
 **tags** | **string**| List of tags separated by comma to be associated with the new keys contained in the upload. | [optional]
 **update_translations** | **bool**| Indicates whether existing translations should be updated with the file content. | [optional]
 **update_descriptions** | **bool**| Existing key descriptions will be updated with the file content. Empty descriptions overwrite existing descriptions. | [optional]
 **convert_emoji** | **bool**| This option is obsolete. Providing the option will cause a bad request error. | [optional]
 **skip_upload_tags** | **bool**| Indicates whether the upload should not create upload tags. | [optional]
 **skip_unverification** | **bool**| Indicates whether the upload should unverify updated translations. | [optional]
 **file_encoding** | **string**| Enforces a specific encoding on the file contents. Valid options are \\\&quot;UTF-8\\\&quot;, \\\&quot;UTF-16\\\&quot; and \\\&quot;ISO-8859-1\\\&quot;. | [optional]
 **locale_mapping** | [**object**](../Model/object.md)| Optional, format specific mapping between locale names and the columns the translations to those locales are contained in. | [optional]
 **format_options** | [**object**](../Model/object.md)| Additional options available for specific formats. See our format guide for complete list. | [optional]
 **autotranslate** | **bool**| If set, translations for the uploaded language will be fetched automatically. | [optional]
 **mark_reviewed** | **bool**| Indicated whether the imported translations should be marked as reviewed. This setting is available if the review workflow (currently beta) is enabled for the project. | [optional]

### Return type

[**\Phrase\Model\Upload**](../Model/Upload.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: multipart/form-data
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## uploadShow

> \Phrase\Model\Upload uploadShow($project_id, $id, $x_phrase_app_otp, $branch)

Get a single upload

View details and summary for a single upload.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\UploadsApi(
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
    $result = $apiInstance->uploadShow($project_id, $id, $x_phrase_app_otp, $branch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UploadsApi->uploadShow: ', $e->getMessage(), PHP_EOL;
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

[**\Phrase\Model\Upload**](../Model/Upload.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## uploadsList

> \Phrase\Model\Upload[] uploadsList($project_id, $x_phrase_app_otp, $page, $per_page, $branch)

List uploads

List all uploads for the given project.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\UploadsApi(
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
    $result = $apiInstance->uploadsList($project_id, $x_phrase_app_otp, $page, $per_page, $branch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UploadsApi->uploadsList: ', $e->getMessage(), PHP_EOL;
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

[**\Phrase\Model\Upload[]**](../Model/Upload.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

