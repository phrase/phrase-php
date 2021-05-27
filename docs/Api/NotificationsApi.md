# Phrase\NotificationsApi

All URIs are relative to *https://api.phrase.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**notificationsList**](NotificationsApi.md#notificationsList) | **GET** /notifications | List notifications



## notificationsList

> \Phrase\Model\Notification[] notificationsList($x_phrase_app_otp, $page, $per_page)

List notifications

List all notifications from the current user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\NotificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)
$page = 1; // int | Page number
$per_page = 25; // int | allows you to specify a page size up to 100 items, 25 by default

try {
    $result = $apiInstance->notificationsList($x_phrase_app_otp, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->notificationsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]
 **page** | **int**| Page number | [optional]
 **per_page** | **int**| allows you to specify a page size up to 100 items, 25 by default | [optional]

### Return type

[**\Phrase\Model\Notification[]**](../Model/Notification.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

