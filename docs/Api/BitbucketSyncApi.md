# Phrase\BitbucketSyncApi

All URIs are relative to *https://api.phrase.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**bitbucketSyncExport**](BitbucketSyncApi.md#bitbucketSyncExport) | **POST** /bitbucket_syncs/{id}/export | Export from Phrase Strings to Bitbucket
[**bitbucketSyncImport**](BitbucketSyncApi.md#bitbucketSyncImport) | **POST** /bitbucket_syncs/{id}/import | Import to Phrase Strings from Bitbucket
[**bitbucketSyncsList**](BitbucketSyncApi.md#bitbucketSyncsList) | **GET** /bitbucket_syncs | List Bitbucket syncs



## bitbucketSyncExport

> \Phrase\Model\BitbucketSyncExportResponse bitbucketSyncExport($id, $bitbucket_sync_export_parameters, $x_phrase_app_otp)

Export from Phrase Strings to Bitbucket

Export translations from Phrase Strings to Bitbucket according to the .phraseapp.yml file within the Bitbucket Repository. <br><br><i>Note: Export is done asynchronously and may take several seconds depending on the project size.</i>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\BitbucketSyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | ID
$bitbucket_sync_export_parameters = new \Phrase\Model\BitbucketSyncExportParameters(); // \Phrase\Model\BitbucketSyncExportParameters | 
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)

try {
    $result = $apiInstance->bitbucketSyncExport($id, $bitbucket_sync_export_parameters, $x_phrase_app_otp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BitbucketSyncApi->bitbucketSyncExport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID |
 **bitbucket_sync_export_parameters** | [**\Phrase\Model\BitbucketSyncExportParameters**](../Model/BitbucketSyncExportParameters.md)|  |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]

### Return type

[**\Phrase\Model\BitbucketSyncExportResponse**](../Model/BitbucketSyncExportResponse.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## bitbucketSyncImport

> bitbucketSyncImport($id, $bitbucket_sync_import_parameters, $x_phrase_app_otp)

Import to Phrase Strings from Bitbucket

Import translations from Bitbucket to Phrase Strings according to the .phraseapp.yml file within the Bitbucket repository. <br><br><i>Note: Import is done asynchronously and may take several seconds depending on the project size.</i>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\BitbucketSyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | ID
$bitbucket_sync_import_parameters = new \Phrase\Model\BitbucketSyncImportParameters(); // \Phrase\Model\BitbucketSyncImportParameters | 
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)

try {
    $apiInstance->bitbucketSyncImport($id, $bitbucket_sync_import_parameters, $x_phrase_app_otp);
} catch (Exception $e) {
    echo 'Exception when calling BitbucketSyncApi->bitbucketSyncImport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID |
 **bitbucket_sync_import_parameters** | [**\Phrase\Model\BitbucketSyncImportParameters**](../Model/BitbucketSyncImportParameters.md)|  |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]

### Return type

void (empty response body)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## bitbucketSyncsList

> \Phrase\Model\BitbucketSync[] bitbucketSyncsList($x_phrase_app_otp, $account_id)

List Bitbucket syncs

List all Bitbucket repositories for which synchronisation with Phrase Strings is activated.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\BitbucketSyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)
$account_id = abcd1234; // string | Account ID to specify the actual account the project should be created in. Required if the requesting user is a member of multiple accounts.

try {
    $result = $apiInstance->bitbucketSyncsList($x_phrase_app_otp, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BitbucketSyncApi->bitbucketSyncsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]
 **account_id** | **string**| Account ID to specify the actual account the project should be created in. Required if the requesting user is a member of multiple accounts. | [optional]

### Return type

[**\Phrase\Model\BitbucketSync[]**](../Model/BitbucketSync.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

