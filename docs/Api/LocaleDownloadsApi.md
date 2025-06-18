# Phrase\LocaleDownloadsApi

All URIs are relative to *https://api.phrase.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**localeDownloadCreate**](LocaleDownloadsApi.md#localeDownloadCreate) | **POST** /projects/{project_id}/locales/{locale_id}/downloads | Initiate async download of a locale
[**localeDownloadShow**](LocaleDownloadsApi.md#localeDownloadShow) | **GET** /projects/{project_id}/locales/{locale_id}/downloads/{id} | Show status of an async locale download



## localeDownloadCreate

> \Phrase\Model\LocaleDownload localeDownloadCreate($project_id, $locale_id, $locale_download_create_parameters, $x_phrase_app_otp, $if_modified_since, $if_none_match)

Initiate async download of a locale

Prepare a locale for download in a specific file format.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\LocaleDownloadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string | Project ID
$locale_id = 'locale_id_example'; // string | Locale ID
$locale_download_create_parameters = new \Phrase\Model\LocaleDownloadCreateParameters(); // \Phrase\Model\LocaleDownloadCreateParameters | 
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)
$if_modified_since = 'if_modified_since_example'; // string | Last modified condition, see [Conditional GET requests / HTTP Caching](/en/api/strings/pagination#conditional-get-requests-%2F-http-caching) (optional)
$if_none_match = 'if_none_match_example'; // string | ETag condition, see [Conditional GET requests / HTTP Caching](/en/api/strings/pagination#conditional-get-requests-%2F-http-caching) (optional)

try {
    $result = $apiInstance->localeDownloadCreate($project_id, $locale_id, $locale_download_create_parameters, $x_phrase_app_otp, $if_modified_since, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocaleDownloadsApi->localeDownloadCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project ID |
 **locale_id** | **string**| Locale ID |
 **locale_download_create_parameters** | [**\Phrase\Model\LocaleDownloadCreateParameters**](../Model/LocaleDownloadCreateParameters.md)|  |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]
 **if_modified_since** | **string**| Last modified condition, see [Conditional GET requests / HTTP Caching](/en/api/strings/pagination#conditional-get-requests-%2F-http-caching) (optional) | [optional]
 **if_none_match** | **string**| ETag condition, see [Conditional GET requests / HTTP Caching](/en/api/strings/pagination#conditional-get-requests-%2F-http-caching) (optional) | [optional]

### Return type

[**\Phrase\Model\LocaleDownload**](../Model/LocaleDownload.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## localeDownloadShow

> \Phrase\Model\LocaleDownload localeDownloadShow($project_id, $locale_id, $id, $x_phrase_app_otp, $if_modified_since, $if_none_match)

Show status of an async locale download

Show status of already started async locale download. If the download is finished, the download link will be returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\LocaleDownloadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string | Project ID
$locale_id = 'locale_id_example'; // string | Locale ID
$id = 'id_example'; // string | ID
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)
$if_modified_since = 'if_modified_since_example'; // string | Last modified condition, see [Conditional GET requests / HTTP Caching](/en/api/strings/pagination#conditional-get-requests-%2F-http-caching) (optional)
$if_none_match = 'if_none_match_example'; // string | ETag condition, see [Conditional GET requests / HTTP Caching](/en/api/strings/pagination#conditional-get-requests-%2F-http-caching) (optional)

try {
    $result = $apiInstance->localeDownloadShow($project_id, $locale_id, $id, $x_phrase_app_otp, $if_modified_since, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocaleDownloadsApi->localeDownloadShow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project ID |
 **locale_id** | **string**| Locale ID |
 **id** | **string**| ID |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]
 **if_modified_since** | **string**| Last modified condition, see [Conditional GET requests / HTTP Caching](/en/api/strings/pagination#conditional-get-requests-%2F-http-caching) (optional) | [optional]
 **if_none_match** | **string**| ETag condition, see [Conditional GET requests / HTTP Caching](/en/api/strings/pagination#conditional-get-requests-%2F-http-caching) (optional) | [optional]

### Return type

[**\Phrase\Model\LocaleDownload**](../Model/LocaleDownload.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

