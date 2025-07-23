# Phrase\JobAnnotationsApi

All URIs are relative to *https://api.phrase.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**jobAnnotationDelete**](JobAnnotationsApi.md#jobAnnotationDelete) | **DELETE** /projects/{project_id}/jobs/{job_id}/annotations/{id} | Delete a job annotation
[**jobAnnotationUpdate**](JobAnnotationsApi.md#jobAnnotationUpdate) | **PATCH** /projects/{project_id}/jobs/{job_id}/annotations/{id} | Create/Update a job annotation
[**jobAnnotationsList**](JobAnnotationsApi.md#jobAnnotationsList) | **GET** /projects/{project_id}/jobs/{job_id}/annotations | List job annotations
[**jobLocaleAnnotationDelete**](JobAnnotationsApi.md#jobLocaleAnnotationDelete) | **DELETE** /projects/{project_id}/jobs/{job_id}/locales/{job_locale_id}/annotations/{id} | Delete a job locale annotation
[**jobLocaleAnnotationUpdate**](JobAnnotationsApi.md#jobLocaleAnnotationUpdate) | **PATCH** /projects/{project_id}/jobs/{job_id}/locales/{job_locale_id}/annotations/{id} | Create/Update a job locale annotation
[**jobLocaleAnnotationsList**](JobAnnotationsApi.md#jobLocaleAnnotationsList) | **GET** /projects/{project_id}/jobs/{job_id}/locales/{job_locale_id}/annotations | List job locale annotations



## jobAnnotationDelete

> jobAnnotationDelete($project_id, $job_id, $id, $x_phrase_app_otp, $branch)

Delete a job annotation

Delete an annotation for a job.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\JobAnnotationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string | Project ID
$job_id = 'job_id_example'; // string | Job ID
$id = 'id_example'; // string | Name of the annotation to delete.
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)
$branch = my-feature-branch; // string | Branch to use

try {
    $apiInstance->jobAnnotationDelete($project_id, $job_id, $id, $x_phrase_app_otp, $branch);
} catch (Exception $e) {
    echo 'Exception when calling JobAnnotationsApi->jobAnnotationDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project ID |
 **job_id** | **string**| Job ID |
 **id** | **string**| Name of the annotation to delete. |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]
 **branch** | **string**| Branch to use | [optional]

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


## jobAnnotationUpdate

> \Phrase\Model\JobAnnotation jobAnnotationUpdate($project_id, $job_id, $id, $job_annotation_update_parameters, $x_phrase_app_otp)

Create/Update a job annotation

Create or update an annotation for a job. If the annotation already exists, it will be updated; otherwise, a new annotation will be created.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\JobAnnotationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string | Project ID
$job_id = 'job_id_example'; // string | Job ID
$id = 'id_example'; // string | Name of the annotation to set or update.
$job_annotation_update_parameters = new \Phrase\Model\JobAnnotationUpdateParameters(); // \Phrase\Model\JobAnnotationUpdateParameters | 
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)

try {
    $result = $apiInstance->jobAnnotationUpdate($project_id, $job_id, $id, $job_annotation_update_parameters, $x_phrase_app_otp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobAnnotationsApi->jobAnnotationUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project ID |
 **job_id** | **string**| Job ID |
 **id** | **string**| Name of the annotation to set or update. |
 **job_annotation_update_parameters** | [**\Phrase\Model\JobAnnotationUpdateParameters**](../Model/JobAnnotationUpdateParameters.md)|  |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]

### Return type

[**\Phrase\Model\JobAnnotation**](../Model/JobAnnotation.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## jobAnnotationsList

> \Phrase\Model\JobAnnotation[] jobAnnotationsList($project_id, $job_id, $x_phrase_app_otp, $branch)

List job annotations

Retrieve a list of annotations for a job.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\JobAnnotationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string | Project ID
$job_id = 'job_id_example'; // string | Job ID
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)
$branch = my-feature-branch; // string | Branch to use

try {
    $result = $apiInstance->jobAnnotationsList($project_id, $job_id, $x_phrase_app_otp, $branch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobAnnotationsApi->jobAnnotationsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project ID |
 **job_id** | **string**| Job ID |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]
 **branch** | **string**| Branch to use | [optional]

### Return type

[**\Phrase\Model\JobAnnotation[]**](../Model/JobAnnotation.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## jobLocaleAnnotationDelete

> jobLocaleAnnotationDelete($project_id, $job_id, $job_locale_id, $id, $x_phrase_app_otp, $branch)

Delete a job locale annotation

Delete an annotation for a job locale.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\JobAnnotationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string | Project ID
$job_id = 'job_id_example'; // string | Job ID
$job_locale_id = 'job_locale_id_example'; // string | Job Locale ID
$id = 'id_example'; // string | Name of the annotation to delete.
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)
$branch = my-feature-branch; // string | Branch to use

try {
    $apiInstance->jobLocaleAnnotationDelete($project_id, $job_id, $job_locale_id, $id, $x_phrase_app_otp, $branch);
} catch (Exception $e) {
    echo 'Exception when calling JobAnnotationsApi->jobLocaleAnnotationDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project ID |
 **job_id** | **string**| Job ID |
 **job_locale_id** | **string**| Job Locale ID |
 **id** | **string**| Name of the annotation to delete. |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]
 **branch** | **string**| Branch to use | [optional]

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


## jobLocaleAnnotationUpdate

> \Phrase\Model\JobAnnotation jobLocaleAnnotationUpdate($project_id, $job_id, $job_locale_id, $id, $job_annotation_update_parameters, $x_phrase_app_otp)

Create/Update a job locale annotation

Create or update an annotation for a job locale. If the annotation already exists, it will be updated; otherwise, a new annotation will be created.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\JobAnnotationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string | Project ID
$job_id = 'job_id_example'; // string | Job ID
$job_locale_id = 'job_locale_id_example'; // string | Job Locale ID
$id = 'id_example'; // string | Name of the annotation to set or update.
$job_annotation_update_parameters = new \Phrase\Model\JobAnnotationUpdateParameters(); // \Phrase\Model\JobAnnotationUpdateParameters | 
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)

try {
    $result = $apiInstance->jobLocaleAnnotationUpdate($project_id, $job_id, $job_locale_id, $id, $job_annotation_update_parameters, $x_phrase_app_otp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobAnnotationsApi->jobLocaleAnnotationUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project ID |
 **job_id** | **string**| Job ID |
 **job_locale_id** | **string**| Job Locale ID |
 **id** | **string**| Name of the annotation to set or update. |
 **job_annotation_update_parameters** | [**\Phrase\Model\JobAnnotationUpdateParameters**](../Model/JobAnnotationUpdateParameters.md)|  |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]

### Return type

[**\Phrase\Model\JobAnnotation**](../Model/JobAnnotation.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## jobLocaleAnnotationsList

> \Phrase\Model\JobAnnotation[] jobLocaleAnnotationsList($project_id, $job_id, $job_locale_id, $x_phrase_app_otp, $branch)

List job locale annotations

Retrieve a list of annotations for a job locale.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\JobAnnotationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string | Project ID
$job_id = 'job_id_example'; // string | Job ID
$job_locale_id = 'job_locale_id_example'; // string | Job Locale ID
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)
$branch = my-feature-branch; // string | Branch to use

try {
    $result = $apiInstance->jobLocaleAnnotationsList($project_id, $job_id, $job_locale_id, $x_phrase_app_otp, $branch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobAnnotationsApi->jobLocaleAnnotationsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project ID |
 **job_id** | **string**| Job ID |
 **job_locale_id** | **string**| Job Locale ID |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]
 **branch** | **string**| Branch to use | [optional]

### Return type

[**\Phrase\Model\JobAnnotation[]**](../Model/JobAnnotation.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

