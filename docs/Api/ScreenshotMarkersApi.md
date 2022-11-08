# Phrase\ScreenshotMarkersApi

All URIs are relative to *https://api.phrase.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**screenshotMarkerCreate**](ScreenshotMarkersApi.md#screenshotMarkerCreate) | **POST** /projects/{project_id}/screenshots/{screenshot_id}/markers | Create a screenshot marker
[**screenshotMarkerDelete**](ScreenshotMarkersApi.md#screenshotMarkerDelete) | **DELETE** /projects/{project_id}/screenshots/{screenshot_id}/markers | Delete a screenshot marker
[**screenshotMarkerShow**](ScreenshotMarkersApi.md#screenshotMarkerShow) | **GET** /projects/{project_id}/screenshots/{screenshot_id}/markers/{id} | Get a single screenshot marker
[**screenshotMarkerUpdate**](ScreenshotMarkersApi.md#screenshotMarkerUpdate) | **PATCH** /projects/{project_id}/screenshots/{screenshot_id}/markers | Update a screenshot marker
[**screenshotMarkersList**](ScreenshotMarkersApi.md#screenshotMarkersList) | **GET** /projects/{project_id}/screenshots/{id}/markers | List screenshot markers



## screenshotMarkerCreate

> \Phrase\Model\ScreenshotMarker screenshotMarkerCreate($project_id, $screenshot_id, $screenshot_marker_create_parameters, $x_phrase_app_otp)

Create a screenshot marker

Create a new screenshot marker.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\ScreenshotMarkersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string | Project ID
$screenshot_id = 'screenshot_id_example'; // string | Screenshot ID
$screenshot_marker_create_parameters = new \Phrase\Model\ScreenshotMarkerCreateParameters(); // \Phrase\Model\ScreenshotMarkerCreateParameters | 
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)

try {
    $result = $apiInstance->screenshotMarkerCreate($project_id, $screenshot_id, $screenshot_marker_create_parameters, $x_phrase_app_otp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScreenshotMarkersApi->screenshotMarkerCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project ID |
 **screenshot_id** | **string**| Screenshot ID |
 **screenshot_marker_create_parameters** | [**\Phrase\Model\ScreenshotMarkerCreateParameters**](../Model/ScreenshotMarkerCreateParameters.md)|  |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]

### Return type

[**\Phrase\Model\ScreenshotMarker**](../Model/ScreenshotMarker.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## screenshotMarkerDelete

> screenshotMarkerDelete($project_id, $screenshot_id, $x_phrase_app_otp, $branch)

Delete a screenshot marker

Delete an existing screenshot marker.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\ScreenshotMarkersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string | Project ID
$screenshot_id = 'screenshot_id_example'; // string | Screenshot ID
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)
$branch = my-feature-branch; // string | specify the branch to use

try {
    $apiInstance->screenshotMarkerDelete($project_id, $screenshot_id, $x_phrase_app_otp, $branch);
} catch (Exception $e) {
    echo 'Exception when calling ScreenshotMarkersApi->screenshotMarkerDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project ID |
 **screenshot_id** | **string**| Screenshot ID |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]
 **branch** | **string**| specify the branch to use | [optional]

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


## screenshotMarkerShow

> \Phrase\Model\ScreenshotMarker screenshotMarkerShow($project_id, $screenshot_id, $id, $x_phrase_app_otp, $branch)

Get a single screenshot marker

Get details on a single screenshot marker for a given project.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\ScreenshotMarkersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string | Project ID
$screenshot_id = 'screenshot_id_example'; // string | Screenshot ID
$id = 'id_example'; // string | ID
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)
$branch = my-feature-branch; // string | specify the branch to use

try {
    $result = $apiInstance->screenshotMarkerShow($project_id, $screenshot_id, $id, $x_phrase_app_otp, $branch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScreenshotMarkersApi->screenshotMarkerShow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project ID |
 **screenshot_id** | **string**| Screenshot ID |
 **id** | **string**| ID |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]
 **branch** | **string**| specify the branch to use | [optional]

### Return type

[**\Phrase\Model\ScreenshotMarker**](../Model/ScreenshotMarker.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## screenshotMarkerUpdate

> \Phrase\Model\ScreenshotMarker screenshotMarkerUpdate($project_id, $screenshot_id, $screenshot_marker_update_parameters, $x_phrase_app_otp)

Update a screenshot marker

Update an existing screenshot marker.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\ScreenshotMarkersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string | Project ID
$screenshot_id = 'screenshot_id_example'; // string | Screenshot ID
$screenshot_marker_update_parameters = new \Phrase\Model\ScreenshotMarkerUpdateParameters(); // \Phrase\Model\ScreenshotMarkerUpdateParameters | 
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)

try {
    $result = $apiInstance->screenshotMarkerUpdate($project_id, $screenshot_id, $screenshot_marker_update_parameters, $x_phrase_app_otp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScreenshotMarkersApi->screenshotMarkerUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project ID |
 **screenshot_id** | **string**| Screenshot ID |
 **screenshot_marker_update_parameters** | [**\Phrase\Model\ScreenshotMarkerUpdateParameters**](../Model/ScreenshotMarkerUpdateParameters.md)|  |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]

### Return type

[**\Phrase\Model\ScreenshotMarker**](../Model/ScreenshotMarker.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## screenshotMarkersList

> \Phrase\Model\ScreenshotMarker[] screenshotMarkersList($project_id, $id, $x_phrase_app_otp, $page, $per_page, $branch)

List screenshot markers

List all screenshot markers for the given project.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\ScreenshotMarkersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string | Project ID
$id = 'id_example'; // string | ID
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)
$page = 1; // int | Page number
$per_page = 25; // int | Limit on the number of objects to be returned, between 1 and 100. 25 by default
$branch = my-feature-branch; // string | specify the branch to use

try {
    $result = $apiInstance->screenshotMarkersList($project_id, $id, $x_phrase_app_otp, $page, $per_page, $branch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScreenshotMarkersApi->screenshotMarkersList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project ID |
 **id** | **string**| ID |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]
 **page** | **int**| Page number | [optional]
 **per_page** | **int**| Limit on the number of objects to be returned, between 1 and 100. 25 by default | [optional]
 **branch** | **string**| specify the branch to use | [optional]

### Return type

[**\Phrase\Model\ScreenshotMarker[]**](../Model/ScreenshotMarker.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

