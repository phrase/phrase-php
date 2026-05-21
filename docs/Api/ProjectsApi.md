# Phrase\ProjectsApi

All URIs are relative to *https://api.phrase.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**projectCreate**](ProjectsApi.md#projectCreate) | **POST** /projects | Create a project
[**projectDelete**](ProjectsApi.md#projectDelete) | **DELETE** /projects/{id} | Delete a project
[**projectShow**](ProjectsApi.md#projectShow) | **GET** /projects/{id} | Get a single project
[**projectUpdate**](ProjectsApi.md#projectUpdate) | **PATCH** /projects/{id} | Update a project
[**projectsList**](ProjectsApi.md#projectsList) | **GET** /projects | List projects



## projectCreate

> \Phrase\Model\ProjectDetails projectCreate($project_create_parameters, $x_phrase_app_otp)

Create a project

Create a new project in the given account.  When `source_project_id` is supplied, the new project is created as a clone of that project. All locales, keys, and translations are copied asynchronously after the response is returned, so they may not be available immediately. Settings from the source project are inherited unless explicitly overridden in the request; in clone mode, the `shares_translation_memory` field is ignored and inherited from the source.  `shares_translation_memory` defaults to `true` when omitted on a non-clone create.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_create_parameters = new \Phrase\Model\ProjectCreateParameters(); // \Phrase\Model\ProjectCreateParameters | 
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)

try {
    $result = $apiInstance->projectCreate($project_create_parameters, $x_phrase_app_otp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_create_parameters** | [**\Phrase\Model\ProjectCreateParameters**](../Model/ProjectCreateParameters.md)|  |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]

### Return type

[**\Phrase\Model\ProjectDetails**](../Model/ProjectDetails.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## projectDelete

> projectDelete($id, $x_phrase_app_otp)

Delete a project

Delete an existing project. Associated repository syncs and OTA distributions are removed. A `project:delete` event is dispatched.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | ID
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)

try {
    $apiInstance->projectDelete($id, $x_phrase_app_otp);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]

### Return type

void (empty response body)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## projectShow

> \Phrase\Model\ProjectDetails projectShow($id, $x_phrase_app_otp)

Get a single project

Get details on a single project.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | ID
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)

try {
    $result = $apiInstance->projectShow($id, $x_phrase_app_otp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectShow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]

### Return type

[**\Phrase\Model\ProjectDetails**](../Model/ProjectDetails.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## projectUpdate

> \Phrase\Model\ProjectDetails projectUpdate($id, $project_update_parameters, $x_phrase_app_otp)

Update a project

Update an existing project.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | ID
$project_update_parameters = new \Phrase\Model\ProjectUpdateParameters(); // \Phrase\Model\ProjectUpdateParameters | 
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)

try {
    $result = $apiInstance->projectUpdate($id, $project_update_parameters, $x_phrase_app_otp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID |
 **project_update_parameters** | [**\Phrase\Model\ProjectUpdateParameters**](../Model/ProjectUpdateParameters.md)|  |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]

### Return type

[**\Phrase\Model\ProjectDetails**](../Model/ProjectDetails.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## projectsList

> \Phrase\Model\Project[] projectsList($x_phrase_app_otp, $page, $per_page, $account_id, $sort_by, $filters, $q)

List projects

List all projects the current user has access to.  When the `account_id` query parameter is omitted, the response includes projects across every account the user is a member of. Pass `account_id` to scope the results to a single account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)
$page = 1; // int | Page number
$per_page = 25; // int | Limit on the number of objects to be returned, between 1 and 100. 25 by default
$account_id = 'account_id_example'; // string | Filter by Account ID
$sort_by = 'sort_by_example'; // string | Sort projects. Valid values are `name_asc`, `name_desc`, `updated_at_asc`, `updated_at_desc`, `space_asc`, and `space_desc`. The trailing direction segment is optional; if omitted or invalid, projects are sorted ascending. Any other value is ignored and the default ordering is returned.
$filters = favorites; // string[] | Filter projects. The only supported value is `favorites`, which restricts the results to projects the current user has starred.
$q = name:android; // string | Search query. The only supported syntax is `name:<text>` — for example `name:android` returns projects whose name matches `android` (case-insensitive substring). Any value that does not match the `name:` prefix is ignored.

try {
    $result = $apiInstance->projectsList($x_phrase_app_otp, $page, $per_page, $account_id, $sort_by, $filters, $q);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]
 **page** | **int**| Page number | [optional]
 **per_page** | **int**| Limit on the number of objects to be returned, between 1 and 100. 25 by default | [optional]
 **account_id** | **string**| Filter by Account ID | [optional]
 **sort_by** | **string**| Sort projects. Valid values are &#x60;name_asc&#x60;, &#x60;name_desc&#x60;, &#x60;updated_at_asc&#x60;, &#x60;updated_at_desc&#x60;, &#x60;space_asc&#x60;, and &#x60;space_desc&#x60;. The trailing direction segment is optional; if omitted or invalid, projects are sorted ascending. Any other value is ignored and the default ordering is returned. | [optional]
 **filters** | [**string[]**](../Model/string.md)| Filter projects. The only supported value is &#x60;favorites&#x60;, which restricts the results to projects the current user has starred. | [optional]
 **q** | **string**| Search query. The only supported syntax is &#x60;name:&lt;text&gt;&#x60; — for example &#x60;name:android&#x60; returns projects whose name matches &#x60;android&#x60; (case-insensitive substring). Any value that does not match the &#x60;name:&#x60; prefix is ignored. | [optional]

### Return type

[**\Phrase\Model\Project[]**](../Model/Project.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

