# Phrase\JobTemplateLocalesApi

All URIs are relative to *https://api.phrase.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**jobTemplateLocaleDelete**](JobTemplateLocalesApi.md#jobTemplateLocaleDelete) | **DELETE** /projects/{project_id}/job_templates/{job_template_id}/locales/{job_template_locale_id} | Delete a job template locale
[**jobTemplateLocaleShow**](JobTemplateLocalesApi.md#jobTemplateLocaleShow) | **GET** /projects/{project_id}/job_templates/{job_template_id}/locales/{job_template_locale_id} | Get a single job template locale
[**jobTemplateLocaleUpdate**](JobTemplateLocalesApi.md#jobTemplateLocaleUpdate) | **PATCH** /projects/{project_id}/job_templates/{job_template_id}/locales/{job_template_locale_id} | Update a job template locale
[**jobTemplateLocalesCreate**](JobTemplateLocalesApi.md#jobTemplateLocalesCreate) | **POST** /projects/{project_id}/job_templates/{job_template_id}/locales | Create a job template locale
[**jobTemplateLocalesList**](JobTemplateLocalesApi.md#jobTemplateLocalesList) | **GET** /projects/{project_id}/job_templates/{job_template_id}/locales | List job template locales



## jobTemplateLocaleDelete

> jobTemplateLocaleDelete($project_id, $job_template_id, $job_template_locale_id, $x_phrase_app_otp, $branch)

Delete a job template locale

Delete an existing job template locale.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\JobTemplateLocalesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string | Project ID
$job_template_id = 'job_template_id_example'; // string | Job Template ID
$job_template_locale_id = 'job_template_locale_id_example'; // string | Job Template Locale ID
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)
$branch = my-feature-branch; // string | specify the branch to use

try {
    $apiInstance->jobTemplateLocaleDelete($project_id, $job_template_id, $job_template_locale_id, $x_phrase_app_otp, $branch);
} catch (Exception $e) {
    echo 'Exception when calling JobTemplateLocalesApi->jobTemplateLocaleDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project ID |
 **job_template_id** | **string**| Job Template ID |
 **job_template_locale_id** | **string**| Job Template Locale ID |
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


## jobTemplateLocaleShow

> \Phrase\Model\JobTemplateLocales jobTemplateLocaleShow($project_id, $job_template_id, $job_template_locale_id, $x_phrase_app_otp, $branch)

Get a single job template locale

Get a single job template locale for a given job template.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\JobTemplateLocalesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string | Project ID
$job_template_id = 'job_template_id_example'; // string | Job Template ID
$job_template_locale_id = 'job_template_locale_id_example'; // string | Job Template Locale ID
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)
$branch = my-feature-branch; // string | specify the branch to use

try {
    $result = $apiInstance->jobTemplateLocaleShow($project_id, $job_template_id, $job_template_locale_id, $x_phrase_app_otp, $branch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobTemplateLocalesApi->jobTemplateLocaleShow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project ID |
 **job_template_id** | **string**| Job Template ID |
 **job_template_locale_id** | **string**| Job Template Locale ID |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]
 **branch** | **string**| specify the branch to use | [optional]

### Return type

[**\Phrase\Model\JobTemplateLocales**](../Model/JobTemplateLocales.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## jobTemplateLocaleUpdate

> \Phrase\Model\JobTemplateLocales jobTemplateLocaleUpdate($project_id, $job_template_id, $job_template_locale_id, $job_template_locale_update_parameters, $x_phrase_app_otp)

Update a job template locale

Update an existing job template locale.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\JobTemplateLocalesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string | Project ID
$job_template_id = 'job_template_id_example'; // string | Job Template ID
$job_template_locale_id = 'job_template_locale_id_example'; // string | Job Template Locale ID
$job_template_locale_update_parameters = new \Phrase\Model\JobTemplateLocaleUpdateParameters(); // \Phrase\Model\JobTemplateLocaleUpdateParameters | 
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)

try {
    $result = $apiInstance->jobTemplateLocaleUpdate($project_id, $job_template_id, $job_template_locale_id, $job_template_locale_update_parameters, $x_phrase_app_otp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobTemplateLocalesApi->jobTemplateLocaleUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project ID |
 **job_template_id** | **string**| Job Template ID |
 **job_template_locale_id** | **string**| Job Template Locale ID |
 **job_template_locale_update_parameters** | [**\Phrase\Model\JobTemplateLocaleUpdateParameters**](../Model/JobTemplateLocaleUpdateParameters.md)|  |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]

### Return type

[**\Phrase\Model\JobTemplateLocales**](../Model/JobTemplateLocales.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## jobTemplateLocalesCreate

> \Phrase\Model\JobTemplateLocales jobTemplateLocalesCreate($project_id, $job_template_id, $job_template_locales_create_parameters, $x_phrase_app_otp)

Create a job template locale

Create a new job template locale.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\JobTemplateLocalesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string | Project ID
$job_template_id = 'job_template_id_example'; // string | Job Template ID
$job_template_locales_create_parameters = new \Phrase\Model\JobTemplateLocalesCreateParameters(); // \Phrase\Model\JobTemplateLocalesCreateParameters | 
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)

try {
    $result = $apiInstance->jobTemplateLocalesCreate($project_id, $job_template_id, $job_template_locales_create_parameters, $x_phrase_app_otp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobTemplateLocalesApi->jobTemplateLocalesCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project ID |
 **job_template_id** | **string**| Job Template ID |
 **job_template_locales_create_parameters** | [**\Phrase\Model\JobTemplateLocalesCreateParameters**](../Model/JobTemplateLocalesCreateParameters.md)|  |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]

### Return type

[**\Phrase\Model\JobTemplateLocales**](../Model/JobTemplateLocales.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## jobTemplateLocalesList

> \Phrase\Model\JobTemplateLocales[] jobTemplateLocalesList($project_id, $job_template_id, $x_phrase_app_otp, $page, $per_page, $branch)

List job template locales

List all job template locales for a given job template.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\JobTemplateLocalesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string | Project ID
$job_template_id = 'job_template_id_example'; // string | Job Template ID
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)
$page = 1; // int | Page number
$per_page = 25; // int | Limit on the number of objects to be returned, between 1 and 100. 25 by default
$branch = my-feature-branch; // string | specify the branch to use

try {
    $result = $apiInstance->jobTemplateLocalesList($project_id, $job_template_id, $x_phrase_app_otp, $page, $per_page, $branch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobTemplateLocalesApi->jobTemplateLocalesList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project ID |
 **job_template_id** | **string**| Job Template ID |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]
 **page** | **int**| Page number | [optional]
 **per_page** | **int**| Limit on the number of objects to be returned, between 1 and 100. 25 by default | [optional]
 **branch** | **string**| specify the branch to use | [optional]

### Return type

[**\Phrase\Model\JobTemplateLocales[]**](../Model/JobTemplateLocales.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

