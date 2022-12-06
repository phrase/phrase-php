# Phrase\GitHubSyncApi

All URIs are relative to *https://api.phrase.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**githubSyncExport**](GitHubSyncApi.md#githubSyncExport) | **POST** /github_syncs/export | Export from Phrase Strings to GitHub
[**githubSyncImport**](GitHubSyncApi.md#githubSyncImport) | **POST** /github_syncs/import | Import to Phrase Strings from GitHub



## githubSyncExport

> githubSyncExport($github_sync_export_parameters, $x_phrase_app_otp)

Export from Phrase Strings to GitHub

Export translations from Phrase Strings to GitHub according to the .phraseapp.yml file within the GitHub repository. <br><br><i>Note: Export is done asynchronously and may take several seconds depending on the project size.</i>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\GitHubSyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$github_sync_export_parameters = new \Phrase\Model\GithubSyncExportParameters(); // \Phrase\Model\GithubSyncExportParameters | 
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)

try {
    $apiInstance->githubSyncExport($github_sync_export_parameters, $x_phrase_app_otp);
} catch (Exception $e) {
    echo 'Exception when calling GitHubSyncApi->githubSyncExport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **github_sync_export_parameters** | [**\Phrase\Model\GithubSyncExportParameters**](../Model/GithubSyncExportParameters.md)|  |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]

### Return type

void (empty response body)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## githubSyncImport

> githubSyncImport($github_sync_import_parameters, $x_phrase_app_otp)

Import to Phrase Strings from GitHub

Import files to Phrase Strings from your connected GitHub repository. <br><br><i>Note: Import is done asynchronously and may take several seconds depending on the project size.</i>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\GitHubSyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$github_sync_import_parameters = new \Phrase\Model\GithubSyncImportParameters(); // \Phrase\Model\GithubSyncImportParameters | 
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)

try {
    $apiInstance->githubSyncImport($github_sync_import_parameters, $x_phrase_app_otp);
} catch (Exception $e) {
    echo 'Exception when calling GitHubSyncApi->githubSyncImport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **github_sync_import_parameters** | [**\Phrase\Model\GithubSyncImportParameters**](../Model/GithubSyncImportParameters.md)|  |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]

### Return type

void (empty response body)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

