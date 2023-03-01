# Phrase\OrganizationJobTemplateLocalesApi

All URIs are relative to *https://api.phrase.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**organizationJobTemplateLocaleDelete**](OrganizationJobTemplateLocalesApi.md#organizationJobTemplateLocaleDelete) | **DELETE** /accounts/{account_id}/job_templates/{job_template_id}/locales/{job_template_locale_id} | Delete an organization job template locale
[**organizationJobTemplateLocaleShow**](OrganizationJobTemplateLocalesApi.md#organizationJobTemplateLocaleShow) | **GET** /accounts/{account_id}/job_templates/{job_template_id}/locales/{job_template_locale_id} | Get a single organization job template locale
[**organizationJobTemplateLocaleUpdate**](OrganizationJobTemplateLocalesApi.md#organizationJobTemplateLocaleUpdate) | **PATCH** /accounts/{account_id}/job_templates/{job_template_id}/locales/{job_template_locale_id} | Update an organization job template locale
[**organizationJobTemplateLocalesCreate**](OrganizationJobTemplateLocalesApi.md#organizationJobTemplateLocalesCreate) | **POST** /accounts/{account_id}/job_templates/{job_template_id}/locales | Create an organization job template locale
[**organizationJobTemplateLocalesList**](OrganizationJobTemplateLocalesApi.md#organizationJobTemplateLocalesList) | **GET** /accounts/{account_id}/job_templates/{job_template_id}/locales | List organization job template locales



## organizationJobTemplateLocaleDelete

> organizationJobTemplateLocaleDelete($account_id, $job_template_id, $job_template_locale_id, $x_phrase_app_otp)

Delete an organization job template locale

Delete an existing organization job template locale.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\OrganizationJobTemplateLocalesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Account ID
$job_template_id = 'job_template_id_example'; // string | Job Template ID
$job_template_locale_id = 'job_template_locale_id_example'; // string | Job Template Locale ID
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)

try {
    $apiInstance->organizationJobTemplateLocaleDelete($account_id, $job_template_id, $job_template_locale_id, $x_phrase_app_otp);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationJobTemplateLocalesApi->organizationJobTemplateLocaleDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| Account ID |
 **job_template_id** | **string**| Job Template ID |
 **job_template_locale_id** | **string**| Job Template Locale ID |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]

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


## organizationJobTemplateLocaleShow

> \Phrase\Model\JobTemplateLocales organizationJobTemplateLocaleShow($account_id, $job_template_id, $job_template_locale_id, $x_phrase_app_otp)

Get a single organization job template locale

Get a single job template locale for a given organization job template.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\OrganizationJobTemplateLocalesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Account ID
$job_template_id = 'job_template_id_example'; // string | Job Template ID
$job_template_locale_id = 'job_template_locale_id_example'; // string | Job Template Locale ID
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)

try {
    $result = $apiInstance->organizationJobTemplateLocaleShow($account_id, $job_template_id, $job_template_locale_id, $x_phrase_app_otp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationJobTemplateLocalesApi->organizationJobTemplateLocaleShow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| Account ID |
 **job_template_id** | **string**| Job Template ID |
 **job_template_locale_id** | **string**| Job Template Locale ID |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]

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


## organizationJobTemplateLocaleUpdate

> \Phrase\Model\JobTemplateLocales organizationJobTemplateLocaleUpdate($account_id, $job_template_id, $job_template_locale_id, $organization_job_template_locale_update_parameters, $x_phrase_app_otp)

Update an organization job template locale

Update an existing organization job template locale.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\OrganizationJobTemplateLocalesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Account ID
$job_template_id = 'job_template_id_example'; // string | Job Template ID
$job_template_locale_id = 'job_template_locale_id_example'; // string | Job Template Locale ID
$organization_job_template_locale_update_parameters = new \Phrase\Model\OrganizationJobTemplateLocaleUpdateParameters(); // \Phrase\Model\OrganizationJobTemplateLocaleUpdateParameters | 
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)

try {
    $result = $apiInstance->organizationJobTemplateLocaleUpdate($account_id, $job_template_id, $job_template_locale_id, $organization_job_template_locale_update_parameters, $x_phrase_app_otp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationJobTemplateLocalesApi->organizationJobTemplateLocaleUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| Account ID |
 **job_template_id** | **string**| Job Template ID |
 **job_template_locale_id** | **string**| Job Template Locale ID |
 **organization_job_template_locale_update_parameters** | [**\Phrase\Model\OrganizationJobTemplateLocaleUpdateParameters**](../Model/OrganizationJobTemplateLocaleUpdateParameters.md)|  |
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


## organizationJobTemplateLocalesCreate

> \Phrase\Model\JobTemplateLocales organizationJobTemplateLocalesCreate($account_id, $job_template_id, $organization_job_template_locales_create_parameters, $x_phrase_app_otp)

Create an organization job template locale

Create a new organization job template locale.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\OrganizationJobTemplateLocalesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Account ID
$job_template_id = 'job_template_id_example'; // string | Job Template ID
$organization_job_template_locales_create_parameters = new \Phrase\Model\OrganizationJobTemplateLocalesCreateParameters(); // \Phrase\Model\OrganizationJobTemplateLocalesCreateParameters | 
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)

try {
    $result = $apiInstance->organizationJobTemplateLocalesCreate($account_id, $job_template_id, $organization_job_template_locales_create_parameters, $x_phrase_app_otp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationJobTemplateLocalesApi->organizationJobTemplateLocalesCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| Account ID |
 **job_template_id** | **string**| Job Template ID |
 **organization_job_template_locales_create_parameters** | [**\Phrase\Model\OrganizationJobTemplateLocalesCreateParameters**](../Model/OrganizationJobTemplateLocalesCreateParameters.md)|  |
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


## organizationJobTemplateLocalesList

> \Phrase\Model\JobTemplateLocales[] organizationJobTemplateLocalesList($account_id, $job_template_id, $x_phrase_app_otp, $page, $per_page)

List organization job template locales

List all job template locales for a given organization job template.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\OrganizationJobTemplateLocalesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Account ID
$job_template_id = 'job_template_id_example'; // string | Job Template ID
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)
$page = 1; // int | Page number
$per_page = 25; // int | Limit on the number of objects to be returned, between 1 and 100. 25 by default

try {
    $result = $apiInstance->organizationJobTemplateLocalesList($account_id, $job_template_id, $x_phrase_app_otp, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationJobTemplateLocalesApi->organizationJobTemplateLocalesList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| Account ID |
 **job_template_id** | **string**| Job Template ID |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]
 **page** | **int**| Page number | [optional]
 **per_page** | **int**| Limit on the number of objects to be returned, between 1 and 100. 25 by default | [optional]

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

