# Phrase\AutomationsApi

All URIs are relative to *https://api.phrase.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**automationActivate**](AutomationsApi.md#automationActivate) | **POST** /accounts/{account_id}/automations/{automation_id}/activate | Activate an automation
[**automationCreate**](AutomationsApi.md#automationCreate) | **POST** /accounts/{account_id}/automations | Create an automation
[**automationDeactivate**](AutomationsApi.md#automationDeactivate) | **POST** /accounts/{account_id}/automations/{automation_id}/deactivate | Deactivate an automation
[**automationDelete**](AutomationsApi.md#automationDelete) | **DELETE** /accounts/{account_id}/automations/{automation_id} | Destroy automation
[**automationShow**](AutomationsApi.md#automationShow) | **GET** /accounts/{account_id}/automations/{automation_id} | Get a single automation
[**automationUpdate**](AutomationsApi.md#automationUpdate) | **PATCH** /accounts/{account_id}/automations/{automation_id} | Update an automation
[**automationsList**](AutomationsApi.md#automationsList) | **GET** /accounts/{account_id}/automations | List automations



## automationActivate

> \Phrase\Model\Automation automationActivate($account_id, $id, $x_phrase_app_otp)

Activate an automation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\AutomationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Account ID
$id = 'id_example'; // string | ID
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)

try {
    $result = $apiInstance->automationActivate($account_id, $id, $x_phrase_app_otp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutomationsApi->automationActivate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| Account ID |
 **id** | **string**| ID |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]

### Return type

[**\Phrase\Model\Automation**](../Model/Automation.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## automationCreate

> \Phrase\Model\Automation automationCreate($account_id, $automations_create_parameters, $x_phrase_app_otp)

Create an automation

Create a new automation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\AutomationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Account ID
$automations_create_parameters = new \Phrase\Model\AutomationsCreateParameters(); // \Phrase\Model\AutomationsCreateParameters | 
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)

try {
    $result = $apiInstance->automationCreate($account_id, $automations_create_parameters, $x_phrase_app_otp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutomationsApi->automationCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| Account ID |
 **automations_create_parameters** | [**\Phrase\Model\AutomationsCreateParameters**](../Model/AutomationsCreateParameters.md)|  |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]

### Return type

[**\Phrase\Model\Automation**](../Model/Automation.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## automationDeactivate

> \Phrase\Model\Automation automationDeactivate($account_id, $id, $x_phrase_app_otp)

Deactivate an automation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\AutomationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Account ID
$id = 'id_example'; // string | ID
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)

try {
    $result = $apiInstance->automationDeactivate($account_id, $id, $x_phrase_app_otp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutomationsApi->automationDeactivate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| Account ID |
 **id** | **string**| ID |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]

### Return type

[**\Phrase\Model\Automation**](../Model/Automation.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## automationDelete

> automationDelete($account_id, $id, $x_phrase_app_otp)

Destroy automation

Destroy an automation of an account.  This endpoint is only available to accounts with advanced plans or above.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\AutomationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Account ID
$id = 'id_example'; // string | ID
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)

try {
    $apiInstance->automationDelete($account_id, $id, $x_phrase_app_otp);
} catch (Exception $e) {
    echo 'Exception when calling AutomationsApi->automationDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| Account ID |
 **id** | **string**| ID |
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


## automationShow

> \Phrase\Model\Automation automationShow($account_id, $id, $x_phrase_app_otp)

Get a single automation

Get details of a single automation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\AutomationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Account ID
$id = 'id_example'; // string | ID
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)

try {
    $result = $apiInstance->automationShow($account_id, $id, $x_phrase_app_otp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutomationsApi->automationShow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| Account ID |
 **id** | **string**| ID |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]

### Return type

[**\Phrase\Model\Automation**](../Model/Automation.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## automationUpdate

> \Phrase\Model\Automation automationUpdate($account_id, $id, $automations_create_parameters1, $x_phrase_app_otp)

Update an automation

Update an existing automation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\AutomationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Account ID
$id = 'id_example'; // string | ID
$automations_create_parameters1 = new \Phrase\Model\AutomationsCreateParameters1(); // \Phrase\Model\AutomationsCreateParameters1 | 
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)

try {
    $result = $apiInstance->automationUpdate($account_id, $id, $automations_create_parameters1, $x_phrase_app_otp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutomationsApi->automationUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| Account ID |
 **id** | **string**| ID |
 **automations_create_parameters1** | [**\Phrase\Model\AutomationsCreateParameters1**](../Model/AutomationsCreateParameters1.md)|  |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]

### Return type

[**\Phrase\Model\Automation**](../Model/Automation.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## automationsList

> \Phrase\Model\Automation[] automationsList($account_id, $x_phrase_app_otp, $page, $per_page)

List automations

List all automations for an account.  This endpoint is only available to accounts with advanced plans or above.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\AutomationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Account ID
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)
$page = 1; // int | Page number
$per_page = 25; // int | Limit on the number of objects to be returned, between 1 and 100. 25 by default

try {
    $result = $apiInstance->automationsList($account_id, $x_phrase_app_otp, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutomationsApi->automationsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| Account ID |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]
 **page** | **int**| Page number | [optional]
 **per_page** | **int**| Limit on the number of objects to be returned, between 1 and 100. 25 by default | [optional]

### Return type

[**\Phrase\Model\Automation[]**](../Model/Automation.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

