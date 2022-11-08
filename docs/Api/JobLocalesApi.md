# Phrase\JobLocalesApi

All URIs are relative to *https://api.phrase.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**jobLocaleComplete**](JobLocalesApi.md#jobLocaleComplete) | **POST** /projects/{project_id}/jobs/{job_id}/locales/{id}/complete | Complete a job locale
[**jobLocaleCompleteReview**](JobLocalesApi.md#jobLocaleCompleteReview) | **POST** /projects/{project_id}/jobs/{job_id}/locales/{id}/complete_review | Review a job locale
[**jobLocaleDelete**](JobLocalesApi.md#jobLocaleDelete) | **DELETE** /projects/{project_id}/jobs/{job_id}/locales/{id} | Delete a job locale
[**jobLocaleReopen**](JobLocalesApi.md#jobLocaleReopen) | **POST** /projects/{project_id}/jobs/{job_id}/locales/{id}/reopen | Reopen a job locale
[**jobLocaleShow**](JobLocalesApi.md#jobLocaleShow) | **GET** /projects/{project_id}/jobs/{job_id}/locale/{id} | Get a single job locale
[**jobLocaleUpdate**](JobLocalesApi.md#jobLocaleUpdate) | **PATCH** /projects/{project_id}/jobs/{job_id}/locales/{id} | Update a job locale
[**jobLocalesCreate**](JobLocalesApi.md#jobLocalesCreate) | **POST** /projects/{project_id}/jobs/{job_id}/locales | Create a job locale
[**jobLocalesList**](JobLocalesApi.md#jobLocalesList) | **GET** /projects/{project_id}/jobs/{job_id}/locales | List job locales



## jobLocaleComplete

> \Phrase\Model\JobLocale jobLocaleComplete($project_id, $job_id, $id, $job_locale_complete_parameters, $x_phrase_app_otp)

Complete a job locale

Mark a job locale as completed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\JobLocalesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string | Project ID
$job_id = 'job_id_example'; // string | Job ID
$id = 'id_example'; // string | ID
$job_locale_complete_parameters = new \Phrase\Model\JobLocaleCompleteParameters(); // \Phrase\Model\JobLocaleCompleteParameters | 
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)

try {
    $result = $apiInstance->jobLocaleComplete($project_id, $job_id, $id, $job_locale_complete_parameters, $x_phrase_app_otp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobLocalesApi->jobLocaleComplete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project ID |
 **job_id** | **string**| Job ID |
 **id** | **string**| ID |
 **job_locale_complete_parameters** | [**\Phrase\Model\JobLocaleCompleteParameters**](../Model/JobLocaleCompleteParameters.md)|  |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]

### Return type

[**\Phrase\Model\JobLocale**](../Model/JobLocale.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## jobLocaleCompleteReview

> \Phrase\Model\JobLocale jobLocaleCompleteReview($project_id, $job_id, $id, $job_locale_complete_review_parameters, $x_phrase_app_otp)

Review a job locale

Mark job locale as reviewed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\JobLocalesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string | Project ID
$job_id = 'job_id_example'; // string | Job ID
$id = 'id_example'; // string | ID
$job_locale_complete_review_parameters = new \Phrase\Model\JobLocaleCompleteReviewParameters(); // \Phrase\Model\JobLocaleCompleteReviewParameters | 
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)

try {
    $result = $apiInstance->jobLocaleCompleteReview($project_id, $job_id, $id, $job_locale_complete_review_parameters, $x_phrase_app_otp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobLocalesApi->jobLocaleCompleteReview: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project ID |
 **job_id** | **string**| Job ID |
 **id** | **string**| ID |
 **job_locale_complete_review_parameters** | [**\Phrase\Model\JobLocaleCompleteReviewParameters**](../Model/JobLocaleCompleteReviewParameters.md)|  |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]

### Return type

[**\Phrase\Model\JobLocale**](../Model/JobLocale.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## jobLocaleDelete

> jobLocaleDelete($project_id, $job_id, $id, $x_phrase_app_otp, $branch)

Delete a job locale

Delete an existing job locale.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\JobLocalesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string | Project ID
$job_id = 'job_id_example'; // string | Job ID
$id = 'id_example'; // string | ID
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)
$branch = my-feature-branch; // string | specify the branch to use

try {
    $apiInstance->jobLocaleDelete($project_id, $job_id, $id, $x_phrase_app_otp, $branch);
} catch (Exception $e) {
    echo 'Exception when calling JobLocalesApi->jobLocaleDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project ID |
 **job_id** | **string**| Job ID |
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


## jobLocaleReopen

> \Phrase\Model\JobLocale jobLocaleReopen($project_id, $job_id, $id, $job_locale_reopen_parameters, $x_phrase_app_otp)

Reopen a job locale

Mark a job locale as uncompleted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\JobLocalesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string | Project ID
$job_id = 'job_id_example'; // string | Job ID
$id = 'id_example'; // string | ID
$job_locale_reopen_parameters = new \Phrase\Model\JobLocaleReopenParameters(); // \Phrase\Model\JobLocaleReopenParameters | 
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)

try {
    $result = $apiInstance->jobLocaleReopen($project_id, $job_id, $id, $job_locale_reopen_parameters, $x_phrase_app_otp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobLocalesApi->jobLocaleReopen: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project ID |
 **job_id** | **string**| Job ID |
 **id** | **string**| ID |
 **job_locale_reopen_parameters** | [**\Phrase\Model\JobLocaleReopenParameters**](../Model/JobLocaleReopenParameters.md)|  |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]

### Return type

[**\Phrase\Model\JobLocale**](../Model/JobLocale.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## jobLocaleShow

> \Phrase\Model\JobLocale jobLocaleShow($project_id, $job_id, $id, $x_phrase_app_otp, $branch)

Get a single job locale

Get a single job locale for a given job.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\JobLocalesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string | Project ID
$job_id = 'job_id_example'; // string | Job ID
$id = 'id_example'; // string | ID
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)
$branch = my-feature-branch; // string | specify the branch to use

try {
    $result = $apiInstance->jobLocaleShow($project_id, $job_id, $id, $x_phrase_app_otp, $branch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobLocalesApi->jobLocaleShow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project ID |
 **job_id** | **string**| Job ID |
 **id** | **string**| ID |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]
 **branch** | **string**| specify the branch to use | [optional]

### Return type

[**\Phrase\Model\JobLocale**](../Model/JobLocale.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## jobLocaleUpdate

> \Phrase\Model\JobLocale jobLocaleUpdate($project_id, $job_id, $id, $job_locale_update_parameters, $x_phrase_app_otp)

Update a job locale

Update an existing job locale.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\JobLocalesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string | Project ID
$job_id = 'job_id_example'; // string | Job ID
$id = 'id_example'; // string | ID
$job_locale_update_parameters = new \Phrase\Model\JobLocaleUpdateParameters(); // \Phrase\Model\JobLocaleUpdateParameters | 
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)

try {
    $result = $apiInstance->jobLocaleUpdate($project_id, $job_id, $id, $job_locale_update_parameters, $x_phrase_app_otp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobLocalesApi->jobLocaleUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project ID |
 **job_id** | **string**| Job ID |
 **id** | **string**| ID |
 **job_locale_update_parameters** | [**\Phrase\Model\JobLocaleUpdateParameters**](../Model/JobLocaleUpdateParameters.md)|  |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]

### Return type

[**\Phrase\Model\JobLocale**](../Model/JobLocale.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## jobLocalesCreate

> \Phrase\Model\JobLocale jobLocalesCreate($project_id, $job_id, $job_locales_create_parameters, $x_phrase_app_otp)

Create a job locale

Create a new job locale.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\JobLocalesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string | Project ID
$job_id = 'job_id_example'; // string | Job ID
$job_locales_create_parameters = new \Phrase\Model\JobLocalesCreateParameters(); // \Phrase\Model\JobLocalesCreateParameters | 
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)

try {
    $result = $apiInstance->jobLocalesCreate($project_id, $job_id, $job_locales_create_parameters, $x_phrase_app_otp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobLocalesApi->jobLocalesCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project ID |
 **job_id** | **string**| Job ID |
 **job_locales_create_parameters** | [**\Phrase\Model\JobLocalesCreateParameters**](../Model/JobLocalesCreateParameters.md)|  |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]

### Return type

[**\Phrase\Model\JobLocale**](../Model/JobLocale.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## jobLocalesList

> \Phrase\Model\JobLocale[] jobLocalesList($project_id, $job_id, $x_phrase_app_otp, $page, $per_page, $branch)

List job locales

List all job locales for a given job.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\JobLocalesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string | Project ID
$job_id = 'job_id_example'; // string | Job ID
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)
$page = 1; // int | Page number
$per_page = 25; // int | Limit on the number of objects to be returned, between 1 and 100. 25 by default
$branch = my-feature-branch; // string | specify the branch to use

try {
    $result = $apiInstance->jobLocalesList($project_id, $job_id, $x_phrase_app_otp, $page, $per_page, $branch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobLocalesApi->jobLocalesList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project ID |
 **job_id** | **string**| Job ID |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]
 **page** | **int**| Page number | [optional]
 **per_page** | **int**| Limit on the number of objects to be returned, between 1 and 100. 25 by default | [optional]
 **branch** | **string**| specify the branch to use | [optional]

### Return type

[**\Phrase\Model\JobLocale[]**](../Model/JobLocale.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

