# Phrase\AccountsApi

All URIs are relative to *https://api.phrase.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountShow**](AccountsApi.md#accountShow) | **GET** /accounts/{id} | Get a single account
[**accountsList**](AccountsApi.md#accountsList) | **GET** /accounts | List accounts



## accountShow

> \Phrase\Model\AccountDetails accountShow($id, $x_phrase_app_otp)

Get a single account

Get details on a single account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | ID
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)

try {
    $result = $apiInstance->accountShow($id, $x_phrase_app_otp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->accountShow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]

### Return type

[**\Phrase\Model\AccountDetails**](../Model/AccountDetails.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## accountsList

> \Phrase\Model\Account[] accountsList($x_phrase_app_otp, $page, $per_page)

List accounts

List all accounts the current user has access to.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)
$page = 1; // int | Page number
$per_page = 25; // int | Limit on the number of objects to be returned, between 1 and 100. 25 by default

try {
    $result = $apiInstance->accountsList($x_phrase_app_otp, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->accountsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]
 **page** | **int**| Page number | [optional]
 **per_page** | **int**| Limit on the number of objects to be returned, between 1 and 100. 25 by default | [optional]

### Return type

[**\Phrase\Model\Account[]**](../Model/Account.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

