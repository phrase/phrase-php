# Phrase\ReleaseTriggersApi

All URIs are relative to *https://api.phrase.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**releaseTriggersCreate**](ReleaseTriggersApi.md#releaseTriggersCreate) | **POST** /accounts/{account_id}/distributions/{distribution_id}/release_triggers | Create a release trigger
[**releaseTriggersDestroy**](ReleaseTriggersApi.md#releaseTriggersDestroy) | **DELETE** /accounts/{account_id}/distributions/{distribution_id}/release_triggers/{id} | Delete a single release trigger
[**releaseTriggersList**](ReleaseTriggersApi.md#releaseTriggersList) | **GET** /accounts/{account_id}/distributions/{distribution_id}/release_triggers | List release triggers
[**releaseTriggersShow**](ReleaseTriggersApi.md#releaseTriggersShow) | **GET** /accounts/{account_id}/distributions/{distribution_id}/release_triggers/{id} | Get a single release trigger
[**releaseTriggersUpdate**](ReleaseTriggersApi.md#releaseTriggersUpdate) | **PATCH** /accounts/{account_id}/distributions/{distribution_id}/release_triggers/{id} | Update a release trigger



## releaseTriggersCreate

> \Phrase\Model\ReleaseTrigger releaseTriggersCreate($account_id, $distribution_id, $release_create_parameters1, $x_phrase_app_otp)

Create a release trigger

Create a new recurring release. New releases will be published automatically, based on the cron schedule provided. Currently, only one release trigger can exist per distribution.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\ReleaseTriggersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Account ID
$distribution_id = 'distribution_id_example'; // string | Distribution ID
$release_create_parameters1 = new \Phrase\Model\ReleaseCreateParameters1(); // \Phrase\Model\ReleaseCreateParameters1 | 
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)

try {
    $result = $apiInstance->releaseTriggersCreate($account_id, $distribution_id, $release_create_parameters1, $x_phrase_app_otp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReleaseTriggersApi->releaseTriggersCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| Account ID |
 **distribution_id** | **string**| Distribution ID |
 **release_create_parameters1** | [**\Phrase\Model\ReleaseCreateParameters1**](../Model/ReleaseCreateParameters1.md)|  |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]

### Return type

[**\Phrase\Model\ReleaseTrigger**](../Model/ReleaseTrigger.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## releaseTriggersDestroy

> releaseTriggersDestroy($account_id, $distribution_id, $id, $x_phrase_app_otp)

Delete a single release trigger

Delete a single release trigger.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\ReleaseTriggersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Account ID
$distribution_id = 'distribution_id_example'; // string | Distribution ID
$id = 'id_example'; // string | ID
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)

try {
    $apiInstance->releaseTriggersDestroy($account_id, $distribution_id, $id, $x_phrase_app_otp);
} catch (Exception $e) {
    echo 'Exception when calling ReleaseTriggersApi->releaseTriggersDestroy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| Account ID |
 **distribution_id** | **string**| Distribution ID |
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


## releaseTriggersList

> \Phrase\Model\ReleaseTrigger[] releaseTriggersList($account_id, $distribution_id, $x_phrase_app_otp)

List release triggers

List all release triggers for the given distribution.  Note: Currently only one release trigger can exist per distribution.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\ReleaseTriggersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Account ID
$distribution_id = 'distribution_id_example'; // string | Distribution ID
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)

try {
    $result = $apiInstance->releaseTriggersList($account_id, $distribution_id, $x_phrase_app_otp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReleaseTriggersApi->releaseTriggersList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| Account ID |
 **distribution_id** | **string**| Distribution ID |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]

### Return type

[**\Phrase\Model\ReleaseTrigger[]**](../Model/ReleaseTrigger.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## releaseTriggersShow

> \Phrase\Model\ReleaseTrigger releaseTriggersShow($account_id, $distribution_id, $id, $x_phrase_app_otp)

Get a single release trigger

Get details of a single release trigger.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\ReleaseTriggersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Account ID
$distribution_id = 'distribution_id_example'; // string | Distribution ID
$id = 'id_example'; // string | ID
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)

try {
    $result = $apiInstance->releaseTriggersShow($account_id, $distribution_id, $id, $x_phrase_app_otp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReleaseTriggersApi->releaseTriggersShow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| Account ID |
 **distribution_id** | **string**| Distribution ID |
 **id** | **string**| ID |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]

### Return type

[**\Phrase\Model\ReleaseTrigger**](../Model/ReleaseTrigger.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## releaseTriggersUpdate

> \Phrase\Model\ReleaseTrigger releaseTriggersUpdate($account_id, $distribution_id, $id, $release_update_parameters1, $x_phrase_app_otp)

Update a release trigger

Update a recurring release.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\ReleaseTriggersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Account ID
$distribution_id = 'distribution_id_example'; // string | Distribution ID
$id = 'id_example'; // string | ID
$release_update_parameters1 = new \Phrase\Model\ReleaseUpdateParameters1(); // \Phrase\Model\ReleaseUpdateParameters1 | 
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)

try {
    $result = $apiInstance->releaseTriggersUpdate($account_id, $distribution_id, $id, $release_update_parameters1, $x_phrase_app_otp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReleaseTriggersApi->releaseTriggersUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| Account ID |
 **distribution_id** | **string**| Distribution ID |
 **id** | **string**| ID |
 **release_update_parameters1** | [**\Phrase\Model\ReleaseUpdateParameters1**](../Model/ReleaseUpdateParameters1.md)|  |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]

### Return type

[**\Phrase\Model\ReleaseTrigger**](../Model/ReleaseTrigger.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

