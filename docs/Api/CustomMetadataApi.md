# Phrase\CustomMetadataApi

All URIs are relative to *https://api.phrase.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**customMetadataPropertiesDelete**](CustomMetadataApi.md#customMetadataPropertiesDelete) | **DELETE** /accounts/{account_id}/custom_metadata/properties/{id} | Destroy property
[**customMetadataPropertiesList**](CustomMetadataApi.md#customMetadataPropertiesList) | **GET** /accounts/{account_id}/custom_metadata/properties | List properties
[**customMetadataPropertyCreate**](CustomMetadataApi.md#customMetadataPropertyCreate) | **POST** /accounts/{account_id}/custom_metadata/properties | Create a property
[**customMetadataPropertyShow**](CustomMetadataApi.md#customMetadataPropertyShow) | **GET** /accounts/{account_id}/custom_metadata/properties/{id} | Get a single property
[**customMetadataPropertyUpdate**](CustomMetadataApi.md#customMetadataPropertyUpdate) | **PATCH** /accounts/{account_id}/custom_metadata/properties/{id} | Update a property



## customMetadataPropertiesDelete

> customMetadataPropertiesDelete($account_id, $id, $x_phrase_app_otp)

Destroy property

Destroy a custom metadata property of an account.  This endpoint is only available to accounts with advanced plans or above.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\CustomMetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Account ID
$id = 'id_example'; // string | ID
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)

try {
    $apiInstance->customMetadataPropertiesDelete($account_id, $id, $x_phrase_app_otp);
} catch (Exception $e) {
    echo 'Exception when calling CustomMetadataApi->customMetadataPropertiesDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| Account ID |
 **id** | **string**| ID |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]

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


## customMetadataPropertiesList

> \Phrase\Model\CustomMetadataProperty[] customMetadataPropertiesList($account_id, $x_phrase_app_otp, $data_type, $project_id, $page, $per_page, $sort, $order)

List properties

List all custom metadata properties for an account.  This endpoint is only available to accounts with advanced plans or above.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\CustomMetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Account ID
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)
$data_type = boolean; // CustomMetadataDataType | Data Type of Custom Metadata Property
$project_id = abcd1234cdef1234abcd1234cdef1234; // string | id of project that the properties belong to
$page = 1; // int | Page number
$per_page = 25; // int | Limit on the number of objects to be returned, between 1 and 100. 25 by default
$sort = updated_at; // string | Sort criteria. Can be one of: name, data_type, created_at.
$order = desc; // string | Order direction. Can be one of: asc, desc.

try {
    $result = $apiInstance->customMetadataPropertiesList($account_id, $x_phrase_app_otp, $data_type, $project_id, $page, $per_page, $sort, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomMetadataApi->customMetadataPropertiesList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| Account ID |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]
 **data_type** | [**CustomMetadataDataType**](../Model/.md)| Data Type of Custom Metadata Property | [optional]
 **project_id** | **string**| id of project that the properties belong to | [optional]
 **page** | **int**| Page number | [optional]
 **per_page** | **int**| Limit on the number of objects to be returned, between 1 and 100. 25 by default | [optional]
 **sort** | **string**| Sort criteria. Can be one of: name, data_type, created_at. | [optional]
 **order** | **string**| Order direction. Can be one of: asc, desc. | [optional]

### Return type

[**\Phrase\Model\CustomMetadataProperty[]**](../Model/CustomMetadataProperty.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## customMetadataPropertyCreate

> \Phrase\Model\CustomMetadataProperty customMetadataPropertyCreate($account_id, $name, $data_type, $x_phrase_app_otp, $description, $project_ids, $value_options)

Create a property

Create a new custom metadata property.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\CustomMetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Account ID
$name = ["Fruit"]; // string | name of the property
$data_type = boolean; // CustomMetadataDataType | Data Type of Custom Metadata Property
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)
$description = ["A healthy snack for all ages"]; // string | description of property
$project_ids = ["abcd1234cdef1234abcd1234cdef1234"]; // string[] | ids of projects that the property belongs to
$value_options = ["Apple","Banana","Coconut"]; // string[] | value options of property (only applies to single or multi select properties)

try {
    $result = $apiInstance->customMetadataPropertyCreate($account_id, $name, $data_type, $x_phrase_app_otp, $description, $project_ids, $value_options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomMetadataApi->customMetadataPropertyCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| Account ID |
 **name** | **string**| name of the property |
 **data_type** | [**CustomMetadataDataType**](../Model/.md)| Data Type of Custom Metadata Property |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]
 **description** | **string**| description of property | [optional]
 **project_ids** | [**string[]**](../Model/string.md)| ids of projects that the property belongs to | [optional]
 **value_options** | [**string[]**](../Model/string.md)| value options of property (only applies to single or multi select properties) | [optional]

### Return type

[**\Phrase\Model\CustomMetadataProperty**](../Model/CustomMetadataProperty.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## customMetadataPropertyShow

> \Phrase\Model\CustomMetadataProperty customMetadataPropertyShow($account_id, $id, $x_phrase_app_otp)

Get a single property

Get details of a single custom property.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\CustomMetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Account ID
$id = 'id_example'; // string | ID
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)

try {
    $result = $apiInstance->customMetadataPropertyShow($account_id, $id, $x_phrase_app_otp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomMetadataApi->customMetadataPropertyShow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| Account ID |
 **id** | **string**| ID |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]

### Return type

[**\Phrase\Model\CustomMetadataProperty**](../Model/CustomMetadataProperty.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## customMetadataPropertyUpdate

> \Phrase\Model\CustomMetadataProperty customMetadataPropertyUpdate($account_id, $id, $x_phrase_app_otp, $name, $description, $project_ids, $value_options)

Update a property

Update an existing custom metadata property.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\CustomMetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Account ID
$id = 'id_example'; // string | ID
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)
$name = ["Fruit"]; // string | name of the property
$description = ["A healthy snack for all ages"]; // string | description of property
$project_ids = ["abcd1234cdef1234abcd1234cdef1234"]; // string[] | ids of projects that the property belongs to
$value_options = ["Apple","Banana","Coconut"]; // string[] | value options of property (only applies to single or multi select properties)

try {
    $result = $apiInstance->customMetadataPropertyUpdate($account_id, $id, $x_phrase_app_otp, $name, $description, $project_ids, $value_options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomMetadataApi->customMetadataPropertyUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| Account ID |
 **id** | **string**| ID |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]
 **name** | **string**| name of the property | [optional]
 **description** | **string**| description of property | [optional]
 **project_ids** | [**string[]**](../Model/string.md)| ids of projects that the property belongs to | [optional]
 **value_options** | [**string[]**](../Model/string.md)| value options of property (only applies to single or multi select properties) | [optional]

### Return type

[**\Phrase\Model\CustomMetadataProperty**](../Model/CustomMetadataProperty.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

