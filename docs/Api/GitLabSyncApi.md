# Phrase\GitLabSyncApi

All URIs are relative to *https://api.phrase.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**gitlabSyncDelete**](GitLabSyncApi.md#gitlabSyncDelete) | **DELETE** /gitlab_syncs/{id} | Delete single Sync Setting
[**gitlabSyncExport**](GitLabSyncApi.md#gitlabSyncExport) | **POST** /gitlab_syncs/{gitlab_sync_id}/export | Export from Phrase Strings to GitLab
[**gitlabSyncHistory**](GitLabSyncApi.md#gitlabSyncHistory) | **GET** /gitlab_syncs/{gitlab_sync_id}/history | History of single Sync Setting
[**gitlabSyncImport**](GitLabSyncApi.md#gitlabSyncImport) | **POST** /gitlab_syncs/{gitlab_sync_id}/import | Import from GitLab to Phrase
[**gitlabSyncList**](GitLabSyncApi.md#gitlabSyncList) | **GET** /gitlab_syncs | List GitLab syncs
[**gitlabSyncShow**](GitLabSyncApi.md#gitlabSyncShow) | **GET** /gitlab_syncs/{id} | Get single Sync Setting
[**gitlabSyncUpdate**](GitLabSyncApi.md#gitlabSyncUpdate) | **PUT** /gitlab_syncs/{id} | Update single Sync Setting



## gitlabSyncDelete

> gitlabSyncDelete($id, $x_phrase_app_otp, $account_id)

Delete single Sync Setting

Deletes a single GitLab Sync Setting.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\GitLabSyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | ID
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)
$account_id = abcd1234; // string | Account ID to specify the actual account the GitLab Sync should be created in. Required if the requesting user is a member of multiple accounts.

try {
    $apiInstance->gitlabSyncDelete($id, $x_phrase_app_otp, $account_id);
} catch (Exception $e) {
    echo 'Exception when calling GitLabSyncApi->gitlabSyncDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]
 **account_id** | **string**| Account ID to specify the actual account the GitLab Sync should be created in. Required if the requesting user is a member of multiple accounts. | [optional]

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


## gitlabSyncExport

> \Phrase\Model\GitlabSyncExport gitlabSyncExport($gitlab_sync_id, $gitlab_sync_export_parameters, $x_phrase_app_otp)

Export from Phrase Strings to GitLab

Export translations from Phrase Strings to GitLab according to the .phraseapp.yml file within the GitLab repository. <br><br><i>Note: Export is done asynchronously and may take several seconds depending on the project size.</i>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\GitLabSyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gitlab_sync_id = 'gitlab_sync_id_example'; // string | Gitlab Sync ID
$gitlab_sync_export_parameters = new \Phrase\Model\GitlabSyncExportParameters(); // \Phrase\Model\GitlabSyncExportParameters | 
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)

try {
    $result = $apiInstance->gitlabSyncExport($gitlab_sync_id, $gitlab_sync_export_parameters, $x_phrase_app_otp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GitLabSyncApi->gitlabSyncExport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gitlab_sync_id** | **string**| Gitlab Sync ID |
 **gitlab_sync_export_parameters** | [**\Phrase\Model\GitlabSyncExportParameters**](../Model/GitlabSyncExportParameters.md)|  |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]

### Return type

[**\Phrase\Model\GitlabSyncExport**](../Model/GitlabSyncExport.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## gitlabSyncHistory

> \Phrase\Model\GitlabSyncHistory[] gitlabSyncHistory($gitlab_sync_id, $x_phrase_app_otp, $page, $per_page, $account_id)

History of single Sync Setting

List history for a single Sync Setting.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\GitLabSyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gitlab_sync_id = 'gitlab_sync_id_example'; // string | Gitlab Sync ID
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)
$page = 1; // int | Page number
$per_page = 25; // int | Limit on the number of objects to be returned, between 1 and 100. 25 by default
$account_id = abcd1234; // string | Account ID to specify the actual account the GitLab Sync should be created in. Required if the requesting user is a member of multiple accounts.

try {
    $result = $apiInstance->gitlabSyncHistory($gitlab_sync_id, $x_phrase_app_otp, $page, $per_page, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GitLabSyncApi->gitlabSyncHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gitlab_sync_id** | **string**| Gitlab Sync ID |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]
 **page** | **int**| Page number | [optional]
 **per_page** | **int**| Limit on the number of objects to be returned, between 1 and 100. 25 by default | [optional]
 **account_id** | **string**| Account ID to specify the actual account the GitLab Sync should be created in. Required if the requesting user is a member of multiple accounts. | [optional]

### Return type

[**\Phrase\Model\GitlabSyncHistory[]**](../Model/GitlabSyncHistory.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## gitlabSyncImport

> \Phrase\Model\Upload[] gitlabSyncImport($gitlab_sync_id, $gitlab_sync_import_parameters, $x_phrase_app_otp)

Import from GitLab to Phrase

Import translations from GitLab to Phrase Strings according to the .phraseapp.yml file within the GitLab repository. <br><br><i>Note: Import is done asynchronously and may take several seconds depending on the project size.</i>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\GitLabSyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gitlab_sync_id = 'gitlab_sync_id_example'; // string | Gitlab Sync ID
$gitlab_sync_import_parameters = new \Phrase\Model\GitlabSyncImportParameters(); // \Phrase\Model\GitlabSyncImportParameters | 
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)

try {
    $result = $apiInstance->gitlabSyncImport($gitlab_sync_id, $gitlab_sync_import_parameters, $x_phrase_app_otp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GitLabSyncApi->gitlabSyncImport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gitlab_sync_id** | **string**| Gitlab Sync ID |
 **gitlab_sync_import_parameters** | [**\Phrase\Model\GitlabSyncImportParameters**](../Model/GitlabSyncImportParameters.md)|  |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]

### Return type

[**\Phrase\Model\Upload[]**](../Model/Upload.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## gitlabSyncList

> \Phrase\Model\GitlabSync[] gitlabSyncList($x_phrase_app_otp, $account_id)

List GitLab syncs

List all GitLab Sync Settings for which synchronisation with Phrase Strings and GitLab is activated.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\GitLabSyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)
$account_id = abcd1234; // string | Account ID to specify the actual account the GitLab Sync should be created in. Required if the requesting user is a member of multiple accounts.

try {
    $result = $apiInstance->gitlabSyncList($x_phrase_app_otp, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GitLabSyncApi->gitlabSyncList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]
 **account_id** | **string**| Account ID to specify the actual account the GitLab Sync should be created in. Required if the requesting user is a member of multiple accounts. | [optional]

### Return type

[**\Phrase\Model\GitlabSync[]**](../Model/GitlabSync.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## gitlabSyncShow

> \Phrase\Model\GitlabSync gitlabSyncShow($id, $x_phrase_app_otp, $account_id)

Get single Sync Setting

Shows a single GitLab Sync Setting.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\GitLabSyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | ID
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)
$account_id = abcd1234; // string | Account ID to specify the actual account the GitLab Sync should be created in. Required if the requesting user is a member of multiple accounts.

try {
    $result = $apiInstance->gitlabSyncShow($id, $x_phrase_app_otp, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GitLabSyncApi->gitlabSyncShow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]
 **account_id** | **string**| Account ID to specify the actual account the GitLab Sync should be created in. Required if the requesting user is a member of multiple accounts. | [optional]

### Return type

[**\Phrase\Model\GitlabSync**](../Model/GitlabSync.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## gitlabSyncUpdate

> \Phrase\Model\GitlabSync gitlabSyncUpdate($id, $x_phrase_app_otp, $account_id, $phrase_project_code, $gitlab_project_id, $gitlab_branch_name)

Update single Sync Setting

Updates a single GitLab Sync Setting.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\GitLabSyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | ID
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)
$account_id = abcd1234; // string | Account ID to specify the actual account the GitLab Sync should be created in. Required if the requesting user is a member of multiple accounts.
$phrase_project_code = 3456abcd; // string | Code of the related Phrase Strings Project.
$gitlab_project_id = 12345; // int | ID of the related GitLab Project.
$gitlab_branch_name = feature-development; // string | Name of the GitLab Branch.

try {
    $result = $apiInstance->gitlabSyncUpdate($id, $x_phrase_app_otp, $account_id, $phrase_project_code, $gitlab_project_id, $gitlab_branch_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GitLabSyncApi->gitlabSyncUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]
 **account_id** | **string**| Account ID to specify the actual account the GitLab Sync should be created in. Required if the requesting user is a member of multiple accounts. | [optional]
 **phrase_project_code** | **string**| Code of the related Phrase Strings Project. | [optional]
 **gitlab_project_id** | **int**| ID of the related GitLab Project. | [optional]
 **gitlab_branch_name** | **string**| Name of the GitLab Branch. | [optional]

### Return type

[**\Phrase\Model\GitlabSync**](../Model/GitlabSync.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

