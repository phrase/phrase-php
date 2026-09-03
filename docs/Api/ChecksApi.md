# Phrase\ChecksApi

All URIs are relative to *https://api.phrase.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**checkIssueDismiss**](ChecksApi.md#checkIssueDismiss) | **PATCH** /projects/{project_id}/checks/issues/{id}/dismiss | Dismiss a check issue
[**checkIssuesList**](ChecksApi.md#checkIssuesList) | **GET** /projects/{project_id}/checks/issues | List check issues



## checkIssueDismiss

> \Phrase\Model\CheckIssue checkIssueDismiss($project_id, $id, $x_phrase_app_otp)

Dismiss a check issue

**Note:** The Checks API is still in development and might change in subsequent releases.  Mark a check issue as dismissed so it no longer appears on the list of active check issues.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\ChecksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string | Project ID
$id = 'id_example'; // string | Check Issue ID
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)

try {
    $result = $apiInstance->checkIssueDismiss($project_id, $id, $x_phrase_app_otp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChecksApi->checkIssueDismiss: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project ID |
 **id** | **string**| Check Issue ID |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]

### Return type

[**\Phrase\Model\CheckIssue**](../Model/CheckIssue.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## checkIssuesList

> \Phrase\Model\CheckIssue[] checkIssuesList($project_id, $x_phrase_app_otp, $page, $per_page, $state, $locale_ids, $check_names)

List check issues

**Note:** The Checks API is still in development and might change in subsequent releases.  List check issues for the given project. Results can be filtered by locale, check name, and state.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\ChecksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string | Project ID
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)
$page = 1; // int | Page number
$per_page = 25; // int | Limit on the number of objects to be returned, between 1 and 100. 25 by default
$state = active; // string | Filter by state of the check issue. Can be one of: `active`, `solved`, `dismissed`, `all`. Defaults to `active`.
$locale_ids = ["abcd1234cdef1234abcd1234cdef1234"]; // string[] | Filter by one or more locale IDs.
$check_names = ["translation_placeholder_usage"]; // string[] | Filter by one or more check names. Valid values are:  - `translation_content_length` — the translation exceeds the maximum character limit configured for the key. - `translation_placeholder_usage` — the translation is missing placeholders present in the source, or contains unexpected ones. - `translation_glossary_usage` — the translation does not follow the glossary term translations.

try {
    $result = $apiInstance->checkIssuesList($project_id, $x_phrase_app_otp, $page, $per_page, $state, $locale_ids, $check_names);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChecksApi->checkIssuesList: ', $e->getMessage(), PHP_EOL;
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
 **state** | **string**| Filter by state of the check issue. Can be one of: &#x60;active&#x60;, &#x60;solved&#x60;, &#x60;dismissed&#x60;, &#x60;all&#x60;. Defaults to &#x60;active&#x60;. | [optional] [default to &#39;active&#39;]
 **locale_ids** | [**string[]**](../Model/string.md)| Filter by one or more locale IDs. | [optional]
 **check_names** | [**string[]**](../Model/string.md)| Filter by one or more check names. Valid values are:  - &#x60;translation_content_length&#x60; — the translation exceeds the maximum character limit configured for the key. - &#x60;translation_placeholder_usage&#x60; — the translation is missing placeholders present in the source, or contains unexpected ones. - &#x60;translation_glossary_usage&#x60; — the translation does not follow the glossary term translations. | [optional]

### Return type

[**\Phrase\Model\CheckIssue[]**](../Model/CheckIssue.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

