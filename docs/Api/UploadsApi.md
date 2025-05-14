# Phrase\UploadsApi

All URIs are relative to *https://api.phrase.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**uploadCreate**](UploadsApi.md#uploadCreate) | **POST** /projects/{project_id}/uploads | Upload a new file
[**uploadShow**](UploadsApi.md#uploadShow) | **GET** /projects/{project_id}/uploads/{id} | Get a single upload
[**uploadsList**](UploadsApi.md#uploadsList) | **GET** /projects/{project_id}/uploads | List uploads



## uploadCreate

> \Phrase\Model\Upload uploadCreate($project_id, $file, $file_format, $locale_id, $x_phrase_app_otp, $branch, $tags, $update_translations, $update_translation_keys, $update_translations_on_source_match, $update_descriptions, $convert_emoji, $skip_upload_tags, $skip_unverification, $file_encoding, $locale_mapping, $format_options, $autotranslate, $verify_mentioned_translations, $mark_reviewed, $tag_only_affected_keys, $translation_key_prefix)

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
$file = "/path/to/file.txt"; // \SplFileObject | File to be imported
$file_format = 'file_format_example'; // string | File format. Auto-detected when possible and not specified.
$locale_id = 'locale_id_example'; // string | Locale of the file's content. Can be the name or id of the locale. Preferred is id.
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)
$branch = 'branch_example'; // string | specify the branch to use
$tags = 'tags_example'; // string | List of tags separated by comma to be associated with the new keys contained in the upload.
$update_translations = True; // bool | Indicates whether existing translations should be updated with the file content.
$update_translation_keys = true; // bool | Pass `false` here to prevent new keys from being created and existing keys updated.
$update_translations_on_source_match = false; // bool | Update target translations only if the source translations of the uploaded multilingual file match the stored translations.
$update_descriptions = True; // bool | Existing key descriptions will be updated with the file content. Empty descriptions overwrite existing descriptions.
$convert_emoji = True; // bool | This option is obsolete. Providing the option will cause a bad request error.
$skip_upload_tags = True; // bool | Indicates whether the upload should not create upload tags.
$skip_unverification = True; // bool | Indicates whether the upload should unverify updated translations.
$file_encoding = 'file_encoding_example'; // string | Enforces a specific encoding on the file contents. Valid options are \\\"UTF-8\\\", \\\"UTF-16\\\" and \\\"ISO-8859-1\\\".
$locale_mapping = array('key' => new \stdClass); // object | Mapping between locale names and translation columns. Required in some formats like CSV or XLSX.
$format_options = array('key' => new \stdClass); // object | Additional options available for specific formats. See our format guide for the [complete list](https://support.phrase.com/hc/en-us/articles/9652464547740-List-of-Supported-File-Types-Strings).
$autotranslate = True; // bool | If set, translations for the uploaded language will be fetched automatically.
$verify_mentioned_translations = false; // bool | Indicates whether all translations mentioned in the upload should be verified.
$mark_reviewed = True; // bool | Indicated whether the imported translations should be marked as reviewed. This setting is available if the review workflow is enabled for the project.
$tag_only_affected_keys = false; // bool | Indicates whether only keys affected (created or updated) by the upload should be tagged. The default is `false`
$translation_key_prefix = 'translation_key_prefix_example'; // string | This prefix will be added to all uploaded translation key names to prevent collisions. Use a meaningful prefix related to your project or file to keep key names organized.

try {
    $result = $apiInstance->uploadCreate($project_id, $file, $file_format, $locale_id, $x_phrase_app_otp, $branch, $tags, $update_translations, $update_translation_keys, $update_translations_on_source_match, $update_descriptions, $convert_emoji, $skip_upload_tags, $skip_unverification, $file_encoding, $locale_mapping, $format_options, $autotranslate, $verify_mentioned_translations, $mark_reviewed, $tag_only_affected_keys, $translation_key_prefix);
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
 **file** | **\SplFileObject****\SplFileObject**| File to be imported |
 **file_format** | **string**| File format. Auto-detected when possible and not specified. |
 **locale_id** | **string**| Locale of the file&#39;s content. Can be the name or id of the locale. Preferred is id. |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]
 **branch** | **string**| specify the branch to use | [optional]
 **tags** | **string**| List of tags separated by comma to be associated with the new keys contained in the upload. | [optional]
 **update_translations** | **bool**| Indicates whether existing translations should be updated with the file content. | [optional]
 **update_translation_keys** | **bool**| Pass &#x60;false&#x60; here to prevent new keys from being created and existing keys updated. | [optional] [default to true]
 **update_translations_on_source_match** | **bool**| Update target translations only if the source translations of the uploaded multilingual file match the stored translations. | [optional] [default to false]
 **update_descriptions** | **bool**| Existing key descriptions will be updated with the file content. Empty descriptions overwrite existing descriptions. | [optional]
 **convert_emoji** | **bool**| This option is obsolete. Providing the option will cause a bad request error. | [optional]
 **skip_upload_tags** | **bool**| Indicates whether the upload should not create upload tags. | [optional]
 **skip_unverification** | **bool**| Indicates whether the upload should unverify updated translations. | [optional]
 **file_encoding** | **string**| Enforces a specific encoding on the file contents. Valid options are \\\&quot;UTF-8\\\&quot;, \\\&quot;UTF-16\\\&quot; and \\\&quot;ISO-8859-1\\\&quot;. | [optional]
 **locale_mapping** | [**object**](../Model/object.md)| Mapping between locale names and translation columns. Required in some formats like CSV or XLSX. | [optional]
 **format_options** | [**object**](../Model/object.md)| Additional options available for specific formats. See our format guide for the [complete list](https://support.phrase.com/hc/en-us/articles/9652464547740-List-of-Supported-File-Types-Strings). | [optional]
 **autotranslate** | **bool**| If set, translations for the uploaded language will be fetched automatically. | [optional]
 **verify_mentioned_translations** | **bool**| Indicates whether all translations mentioned in the upload should be verified. | [optional] [default to false]
 **mark_reviewed** | **bool**| Indicated whether the imported translations should be marked as reviewed. This setting is available if the review workflow is enabled for the project. | [optional]
 **tag_only_affected_keys** | **bool**| Indicates whether only keys affected (created or updated) by the upload should be tagged. The default is &#x60;false&#x60; | [optional] [default to false]
 **translation_key_prefix** | **string**| This prefix will be added to all uploaded translation key names to prevent collisions. Use a meaningful prefix related to your project or file to keep key names organized. | [optional]

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

