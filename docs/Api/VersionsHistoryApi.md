# Phrase\VersionsHistoryApi

All URIs are relative to *https://api.phrase.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**versionShow**](VersionsHistoryApi.md#versionShow) | **GET** /projects/{project_id}/translations/{translation_id}/versions/{id} | Get a single version
[**versionsList**](VersionsHistoryApi.md#versionsList) | **GET** /projects/{project_id}/translations/{translation_id}/versions | List all versions



## versionShow

> \Phrase\Model\TranslationVersionWithUser versionShow($project_id, $translation_id, $id, $x_phrase_app_otp, $branch)

Get a single version

Get details on a single version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\VersionsHistoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string | Project ID
$translation_id = 'translation_id_example'; // string | Translation ID
$id = 'id_example'; // string | ID
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)
$branch = my-feature-branch; // string | specify the branch to use

try {
    $result = $apiInstance->versionShow($project_id, $translation_id, $id, $x_phrase_app_otp, $branch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VersionsHistoryApi->versionShow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project ID |
 **translation_id** | **string**| Translation ID |
 **id** | **string**| ID |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]
 **branch** | **string**| specify the branch to use | [optional]

### Return type

[**\Phrase\Model\TranslationVersionWithUser**](../Model/TranslationVersionWithUser.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## versionsList

> \Phrase\Model\TranslationVersion[] versionsList($project_id, $translation_id, $x_phrase_app_otp, $page, $per_page, $branch)

List all versions

List all changes done to a given translation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\VersionsHistoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string | Project ID
$translation_id = 'translation_id_example'; // string | Translation ID
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)
$page = 1; // int | Page number
$per_page = 25; // int | Limit on the number of objects to be returned, between 1 and 100. 25 by default
$branch = my-feature-branch; // string | specify the branch to use

try {
    $result = $apiInstance->versionsList($project_id, $translation_id, $x_phrase_app_otp, $page, $per_page, $branch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VersionsHistoryApi->versionsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project ID |
 **translation_id** | **string**| Translation ID |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]
 **page** | **int**| Page number | [optional]
 **per_page** | **int**| Limit on the number of objects to be returned, between 1 and 100. 25 by default | [optional]
 **branch** | **string**| specify the branch to use | [optional]

### Return type

[**\Phrase\Model\TranslationVersion[]**](../Model/TranslationVersion.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

