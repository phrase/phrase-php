# Phrase\FormatsApi

All URIs are relative to *https://api.phrase.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**formatsList**](FormatsApi.md#formatsList) | **GET** /formats | List formats



## formatsList

> \Phrase\Model\Format[] formatsList()

List formats

Get a handy list of all localization file formats supported in Phrase.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\FormatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->formatsList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormatsApi->formatsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Phrase\Model\Format[]**](../Model/Format.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

