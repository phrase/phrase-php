# Phrase\ReleasesApi

All URIs are relative to *https://api.phrase.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**releaseCreate**](ReleasesApi.md#releaseCreate) | **POST** /accounts/{account_id}/distributions/{distribution_id}/releases | Create a release
[**releaseDelete**](ReleasesApi.md#releaseDelete) | **DELETE** /accounts/{account_id}/distributions/{distribution_id}/releases/{id} | Delete a release
[**releasePublish**](ReleasesApi.md#releasePublish) | **POST** /accounts/{account_id}/distributions/{distribution_id}/releases/{id}/publish | Publish a release
[**releaseShow**](ReleasesApi.md#releaseShow) | **GET** /accounts/{account_id}/distributions/{distribution_id}/releases/{id} | Get a single release
[**releaseUpdate**](ReleasesApi.md#releaseUpdate) | **PATCH** /accounts/{account_id}/distributions/{distribution_id}/releases/{id} | Update a release
[**releasesList**](ReleasesApi.md#releasesList) | **GET** /accounts/{account_id}/distributions/{distribution_id}/releases | List releases



## releaseCreate

> \Phrase\Model\Release releaseCreate($account_id, $distribution_id, $release_create_parameters, $x_phrase_app_otp)

Create a release

Create a new release.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\ReleasesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Account ID
$distribution_id = 'distribution_id_example'; // string | Distribution ID
$release_create_parameters = new \Phrase\Model\ReleaseCreateParameters(); // \Phrase\Model\ReleaseCreateParameters | 
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)

try {
    $result = $apiInstance->releaseCreate($account_id, $distribution_id, $release_create_parameters, $x_phrase_app_otp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReleasesApi->releaseCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| Account ID |
 **distribution_id** | **string**| Distribution ID |
 **release_create_parameters** | [**\Phrase\Model\ReleaseCreateParameters**](../Model/ReleaseCreateParameters.md)|  |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]

### Return type

[**\Phrase\Model\Release**](../Model/Release.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## releaseDelete

> releaseDelete($account_id, $distribution_id, $id, $x_phrase_app_otp)

Delete a release

Delete an existing release.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\ReleasesApi(
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
    $apiInstance->releaseDelete($account_id, $distribution_id, $id, $x_phrase_app_otp);
} catch (Exception $e) {
    echo 'Exception when calling ReleasesApi->releaseDelete: ', $e->getMessage(), PHP_EOL;
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


## releasePublish

> \Phrase\Model\Release releasePublish($account_id, $distribution_id, $id, $x_phrase_app_otp)

Publish a release

Publish a release for production.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\ReleasesApi(
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
    $result = $apiInstance->releasePublish($account_id, $distribution_id, $id, $x_phrase_app_otp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReleasesApi->releasePublish: ', $e->getMessage(), PHP_EOL;
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

[**\Phrase\Model\Release**](../Model/Release.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## releaseShow

> \Phrase\Model\Release releaseShow($account_id, $distribution_id, $id, $x_phrase_app_otp)

Get a single release

Get details on a single release.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\ReleasesApi(
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
    $result = $apiInstance->releaseShow($account_id, $distribution_id, $id, $x_phrase_app_otp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReleasesApi->releaseShow: ', $e->getMessage(), PHP_EOL;
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

[**\Phrase\Model\Release**](../Model/Release.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## releaseUpdate

> \Phrase\Model\Release releaseUpdate($account_id, $distribution_id, $id, $release_update_parameters, $x_phrase_app_otp)

Update a release

Update an existing release.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\ReleasesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Account ID
$distribution_id = 'distribution_id_example'; // string | Distribution ID
$id = 'id_example'; // string | ID
$release_update_parameters = new \Phrase\Model\ReleaseUpdateParameters(); // \Phrase\Model\ReleaseUpdateParameters | 
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)

try {
    $result = $apiInstance->releaseUpdate($account_id, $distribution_id, $id, $release_update_parameters, $x_phrase_app_otp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReleasesApi->releaseUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| Account ID |
 **distribution_id** | **string**| Distribution ID |
 **id** | **string**| ID |
 **release_update_parameters** | [**\Phrase\Model\ReleaseUpdateParameters**](../Model/ReleaseUpdateParameters.md)|  |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]

### Return type

[**\Phrase\Model\Release**](../Model/Release.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## releasesList

> \Phrase\Model\ReleasePreview[] releasesList($account_id, $distribution_id, $x_phrase_app_otp, $page, $per_page)

List releases

List all releases for the given distribution.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\ReleasesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Account ID
$distribution_id = 'distribution_id_example'; // string | Distribution ID
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)
$page = 1; // int | Page number
$per_page = 25; // int | Limit on the number of objects to be returned, between 1 and 100. 25 by default

try {
    $result = $apiInstance->releasesList($account_id, $distribution_id, $x_phrase_app_otp, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReleasesApi->releasesList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| Account ID |
 **distribution_id** | **string**| Distribution ID |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]
 **page** | **int**| Page number | [optional]
 **per_page** | **int**| Limit on the number of objects to be returned, between 1 and 100. 25 by default | [optional]

### Return type

[**\Phrase\Model\ReleasePreview[]**](../Model/ReleasePreview.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

