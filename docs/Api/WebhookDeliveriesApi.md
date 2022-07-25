# Phrase\WebhookDeliveriesApi

All URIs are relative to *https://api.phrase.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**webhookDeliveriesList**](WebhookDeliveriesApi.md#webhookDeliveriesList) | **GET** /projects/{project_id}/webhooks/{webhook_id}/deliveries | List webhook deliveries
[**webhookDeliveriesRedeliver**](WebhookDeliveriesApi.md#webhookDeliveriesRedeliver) | **POST** /projects/{project_id}/webhooks/{webhook_id}/deliveries/{id}/redeliver | Redeliver a single webhook delivery
[**webhookDeliveriesShow**](WebhookDeliveriesApi.md#webhookDeliveriesShow) | **GET** /projects/{project_id}/webhooks/{webhook_id}/deliveries/{id} | Get a single webhook delivery



## webhookDeliveriesList

> \Phrase\Model\WebhookDelivery[] webhookDeliveriesList($project_id, $webhook_id, $x_phrase_app_otp, $response_status_codes)

List webhook deliveries

List all webhook deliveries for the given webhook_id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\WebhookDeliveriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string | Project ID
$webhook_id = 'webhook_id_example'; // string | Webhook ID
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)
$response_status_codes = 'response_status_codes_example'; // string | List of Response Status Codes

try {
    $result = $apiInstance->webhookDeliveriesList($project_id, $webhook_id, $x_phrase_app_otp, $response_status_codes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookDeliveriesApi->webhookDeliveriesList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project ID |
 **webhook_id** | **string**| Webhook ID |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]
 **response_status_codes** | **string**| List of Response Status Codes | [optional]

### Return type

[**\Phrase\Model\WebhookDelivery[]**](../Model/WebhookDelivery.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## webhookDeliveriesRedeliver

> \Phrase\Model\WebhookDelivery webhookDeliveriesRedeliver($project_id, $webhook_id, $id, $x_phrase_app_otp)

Redeliver a single webhook delivery

Trigger an individual webhook delivery to be redelivered.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\WebhookDeliveriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string | Project ID
$webhook_id = 'webhook_id_example'; // string | Webhook ID
$id = 'id_example'; // string | ID
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)

try {
    $result = $apiInstance->webhookDeliveriesRedeliver($project_id, $webhook_id, $id, $x_phrase_app_otp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookDeliveriesApi->webhookDeliveriesRedeliver: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project ID |
 **webhook_id** | **string**| Webhook ID |
 **id** | **string**| ID |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]

### Return type

[**\Phrase\Model\WebhookDelivery**](../Model/WebhookDelivery.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## webhookDeliveriesShow

> \Phrase\Model\WebhookDelivery webhookDeliveriesShow($project_id, $webhook_id, $id, $x_phrase_app_otp)

Get a single webhook delivery

Get all information about a single webhook delivery for the given ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\WebhookDeliveriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string | Project ID
$webhook_id = 'webhook_id_example'; // string | Webhook ID
$id = 'id_example'; // string | ID
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)

try {
    $result = $apiInstance->webhookDeliveriesShow($project_id, $webhook_id, $id, $x_phrase_app_otp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookDeliveriesApi->webhookDeliveriesShow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project ID |
 **webhook_id** | **string**| Webhook ID |
 **id** | **string**| ID |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]

### Return type

[**\Phrase\Model\WebhookDelivery**](../Model/WebhookDelivery.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

