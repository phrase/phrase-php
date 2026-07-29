# Phrase\PreTranslationsApi

All URIs are relative to *https://api.phrase.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**preTranslationCreate**](PreTranslationsApi.md#preTranslationCreate) | **POST** /projects/{project_id}/pre_translations | Create a pre-translation job
[**preTranslationShow**](PreTranslationsApi.md#preTranslationShow) | **GET** /projects/{project_id}/pre_translations/{id} | Get a single pre-translation job
[**preTranslationsList**](PreTranslationsApi.md#preTranslationsList) | **GET** /projects/{project_id}/pre_translations | List pre-translation jobs



## preTranslationCreate

> \Phrase\Model\PreTranslation preTranslationCreate($project_id, $pre_translation_create_parameters, $x_phrase_app_otp)

Create a pre-translation job

Triggers a pre-translation job for a resource within a project, addressed by `translatable_type` (`locale`, `job`, `translation_key`, or `upload`) and `translatable_id` (its ID).  Enqueues machine translation using the project's configured MT engine.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\PreTranslationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string | Project ID
$pre_translation_create_parameters = new \Phrase\Model\PreTranslationCreateParameters(); // \Phrase\Model\PreTranslationCreateParameters | 
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)

try {
    $result = $apiInstance->preTranslationCreate($project_id, $pre_translation_create_parameters, $x_phrase_app_otp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PreTranslationsApi->preTranslationCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project ID |
 **pre_translation_create_parameters** | [**\Phrase\Model\PreTranslationCreateParameters**](../Model/PreTranslationCreateParameters.md)|  |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]

### Return type

[**\Phrase\Model\PreTranslation**](../Model/PreTranslation.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## preTranslationShow

> \Phrase\Model\PreTranslation preTranslationShow($project_id, $id, $x_phrase_app_otp, $if_modified_since, $if_none_match)

Get a single pre-translation job

Returns a single pre-translation job identified by its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\PreTranslationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string | Project ID
$id = 'id_example'; // string | ID
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)
$if_modified_since = 'if_modified_since_example'; // string | Last modified condition, see [Conditional GET requests / HTTP Caching](/en/api/strings/pagination#conditional-get-requests-%2F-http-caching) (optional)
$if_none_match = 'if_none_match_example'; // string | ETag condition, see [Conditional GET requests / HTTP Caching](/en/api/strings/pagination#conditional-get-requests-%2F-http-caching) (optional)

try {
    $result = $apiInstance->preTranslationShow($project_id, $id, $x_phrase_app_otp, $if_modified_since, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PreTranslationsApi->preTranslationShow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project ID |
 **id** | **string**| ID |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]
 **if_modified_since** | **string**| Last modified condition, see [Conditional GET requests / HTTP Caching](/en/api/strings/pagination#conditional-get-requests-%2F-http-caching) (optional) | [optional]
 **if_none_match** | **string**| ETag condition, see [Conditional GET requests / HTTP Caching](/en/api/strings/pagination#conditional-get-requests-%2F-http-caching) (optional) | [optional]

### Return type

[**\Phrase\Model\PreTranslation**](../Model/PreTranslation.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## preTranslationsList

> \Phrase\Model\PreTranslation[] preTranslationsList($project_id, $x_phrase_app_otp, $if_modified_since, $if_none_match, $page, $per_page)

List pre-translation jobs

Returns all pre-translation jobs scoped to a project, ordered by creation date descending.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\PreTranslationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string | Project ID
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)
$if_modified_since = 'if_modified_since_example'; // string | Last modified condition, see [Conditional GET requests / HTTP Caching](/en/api/strings/pagination#conditional-get-requests-%2F-http-caching) (optional)
$if_none_match = 'if_none_match_example'; // string | ETag condition, see [Conditional GET requests / HTTP Caching](/en/api/strings/pagination#conditional-get-requests-%2F-http-caching) (optional)
$page = 1; // int | Page number
$per_page = 25; // int | Limit on the number of objects to be returned, between 1 and 100. 25 by default

try {
    $result = $apiInstance->preTranslationsList($project_id, $x_phrase_app_otp, $if_modified_since, $if_none_match, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PreTranslationsApi->preTranslationsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project ID |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]
 **if_modified_since** | **string**| Last modified condition, see [Conditional GET requests / HTTP Caching](/en/api/strings/pagination#conditional-get-requests-%2F-http-caching) (optional) | [optional]
 **if_none_match** | **string**| ETag condition, see [Conditional GET requests / HTTP Caching](/en/api/strings/pagination#conditional-get-requests-%2F-http-caching) (optional) | [optional]
 **page** | **int**| Page number | [optional]
 **per_page** | **int**| Limit on the number of objects to be returned, between 1 and 100. 25 by default | [optional]

### Return type

[**\Phrase\Model\PreTranslation[]**](../Model/PreTranslation.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

