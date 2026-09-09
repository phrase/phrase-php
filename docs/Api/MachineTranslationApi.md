# Phrase\MachineTranslationApi

All URIs are relative to *https://api.phrase.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**machineTranslationLocaleProviderMappingsCreate**](MachineTranslationApi.md#machineTranslationLocaleProviderMappingsCreate) | **POST** /accounts/{account_id}/machine_translation_locale_provider_mappings | Create a locale provider mapping
[**machineTranslationLocaleProviderMappingsDestroy**](MachineTranslationApi.md#machineTranslationLocaleProviderMappingsDestroy) | **DELETE** /accounts/{account_id}/machine_translation_locale_provider_mappings | Delete a locale provider mapping
[**machineTranslationSettingsShow**](MachineTranslationApi.md#machineTranslationSettingsShow) | **GET** /accounts/{account_id}/machine_translation_settings | Get machine translation settings
[**machineTranslationSettingsUpdate**](MachineTranslationApi.md#machineTranslationSettingsUpdate) | **PATCH** /accounts/{account_id}/machine_translation_settings | Update machine translation settings



## machineTranslationLocaleProviderMappingsCreate

> \Phrase\Model\MachineTranslationLocaleProviderMapping machineTranslationLocaleProviderMappingsCreate($account_id, $machine_translation_locale_provider_mappings_create_parameters, $x_phrase_app_otp)

Create a locale provider mapping

Creates a locale-pair-specific machine translation provider override for the account. When a mapping exists for a given source/target locale pair, that provider is used instead of the account default. Only one mapping may exist per source/target locale pair; attempting to create a duplicate returns a validation error. The source and target locale codes must differ.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\MachineTranslationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Account ID
$machine_translation_locale_provider_mappings_create_parameters = new \Phrase\Model\MachineTranslationLocaleProviderMappingsCreateParameters(); // \Phrase\Model\MachineTranslationLocaleProviderMappingsCreateParameters | 
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)

try {
    $result = $apiInstance->machineTranslationLocaleProviderMappingsCreate($account_id, $machine_translation_locale_provider_mappings_create_parameters, $x_phrase_app_otp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MachineTranslationApi->machineTranslationLocaleProviderMappingsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| Account ID |
 **machine_translation_locale_provider_mappings_create_parameters** | [**\Phrase\Model\MachineTranslationLocaleProviderMappingsCreateParameters**](../Model/MachineTranslationLocaleProviderMappingsCreateParameters.md)|  |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]

### Return type

[**\Phrase\Model\MachineTranslationLocaleProviderMapping**](../Model/MachineTranslationLocaleProviderMapping.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## machineTranslationLocaleProviderMappingsDestroy

> machineTranslationLocaleProviderMappingsDestroy($account_id, $source_locale_code, $target_locale_code, $x_phrase_app_otp)

Delete a locale provider mapping

Removes the machine translation provider override for the specified source and target locale pair. The mapping is identified by locale codes supplied as query parameters rather than a path ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\MachineTranslationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Account ID
$source_locale_code = en; // string | The locale code of the source language of the mapping to delete.
$target_locale_code = de; // string | The locale code of the target language of the mapping to delete.
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)

try {
    $apiInstance->machineTranslationLocaleProviderMappingsDestroy($account_id, $source_locale_code, $target_locale_code, $x_phrase_app_otp);
} catch (Exception $e) {
    echo 'Exception when calling MachineTranslationApi->machineTranslationLocaleProviderMappingsDestroy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| Account ID |
 **source_locale_code** | **string**| The locale code of the source language of the mapping to delete. |
 **target_locale_code** | **string**| The locale code of the target language of the mapping to delete. |
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


## machineTranslationSettingsShow

> \Phrase\Model\MachineTranslationSettings machineTranslationSettingsShow($account_id, $x_phrase_app_otp)

Get machine translation settings

Returns the machine translation configuration for the account, including the default translation service, current machine translation unit usage, and any locale-pair-specific provider mappings.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\MachineTranslationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Account ID
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)

try {
    $result = $apiInstance->machineTranslationSettingsShow($account_id, $x_phrase_app_otp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MachineTranslationApi->machineTranslationSettingsShow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| Account ID |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]

### Return type

[**\Phrase\Model\MachineTranslationSettings**](../Model/MachineTranslationSettings.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## machineTranslationSettingsUpdate

> \Phrase\Model\MachineTranslationSettings machineTranslationSettingsUpdate($account_id, $machine_translation_settings_update_parameters, $x_phrase_app_otp)

Update machine translation settings

Sets the default machine translation service for the account. Requires write access to the account's machine translation settings. Passing an empty or absent value for `default_service` resets the account to its plan default (Microsoft Translate).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\MachineTranslationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Account ID
$machine_translation_settings_update_parameters = new \Phrase\Model\MachineTranslationSettingsUpdateParameters(); // \Phrase\Model\MachineTranslationSettingsUpdateParameters | 
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)

try {
    $result = $apiInstance->machineTranslationSettingsUpdate($account_id, $machine_translation_settings_update_parameters, $x_phrase_app_otp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MachineTranslationApi->machineTranslationSettingsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| Account ID |
 **machine_translation_settings_update_parameters** | [**\Phrase\Model\MachineTranslationSettingsUpdateParameters**](../Model/MachineTranslationSettingsUpdateParameters.md)|  |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]

### Return type

[**\Phrase\Model\MachineTranslationSettings**](../Model/MachineTranslationSettings.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

