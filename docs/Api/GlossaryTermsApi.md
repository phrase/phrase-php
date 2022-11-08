# Phrase\GlossaryTermsApi

All URIs are relative to *https://api.phrase.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**glossaryTermCreate**](GlossaryTermsApi.md#glossaryTermCreate) | **POST** /accounts/{account_id}/glossaries/{glossary_id}/terms | Create a term
[**glossaryTermDelete**](GlossaryTermsApi.md#glossaryTermDelete) | **DELETE** /accounts/{account_id}/glossaries/{glossary_id}/terms/{id} | Delete a term
[**glossaryTermShow**](GlossaryTermsApi.md#glossaryTermShow) | **GET** /accounts/{account_id}/glossaries/{glossary_id}/terms/{id} | Get a single term
[**glossaryTermUpdate**](GlossaryTermsApi.md#glossaryTermUpdate) | **PATCH** /accounts/{account_id}/glossaries/{glossary_id}/terms/{id} | Update a term
[**glossaryTermsList**](GlossaryTermsApi.md#glossaryTermsList) | **GET** /accounts/{account_id}/glossaries/{glossary_id}/terms | List terms



## glossaryTermCreate

> \Phrase\Model\GlossaryTerm glossaryTermCreate($account_id, $glossary_id, $glossary_term_create_parameters, $x_phrase_app_otp)

Create a term

Create a new term in a term base (previously: glossary).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\GlossaryTermsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Account ID
$glossary_id = 'glossary_id_example'; // string | Glossary ID
$glossary_term_create_parameters = new \Phrase\Model\GlossaryTermCreateParameters(); // \Phrase\Model\GlossaryTermCreateParameters | 
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)

try {
    $result = $apiInstance->glossaryTermCreate($account_id, $glossary_id, $glossary_term_create_parameters, $x_phrase_app_otp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlossaryTermsApi->glossaryTermCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| Account ID |
 **glossary_id** | **string**| Glossary ID |
 **glossary_term_create_parameters** | [**\Phrase\Model\GlossaryTermCreateParameters**](../Model/GlossaryTermCreateParameters.md)|  |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]

### Return type

[**\Phrase\Model\GlossaryTerm**](../Model/GlossaryTerm.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## glossaryTermDelete

> glossaryTermDelete($account_id, $glossary_id, $id, $x_phrase_app_otp)

Delete a term

Delete an existing term in a term base (previously: glossary).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\GlossaryTermsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Account ID
$glossary_id = 'glossary_id_example'; // string | Glossary ID
$id = 'id_example'; // string | ID
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)

try {
    $apiInstance->glossaryTermDelete($account_id, $glossary_id, $id, $x_phrase_app_otp);
} catch (Exception $e) {
    echo 'Exception when calling GlossaryTermsApi->glossaryTermDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| Account ID |
 **glossary_id** | **string**| Glossary ID |
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


## glossaryTermShow

> \Phrase\Model\GlossaryTerm glossaryTermShow($account_id, $glossary_id, $id, $x_phrase_app_otp)

Get a single term

Get details for a single term in the term base (previously: glossary).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\GlossaryTermsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Account ID
$glossary_id = 'glossary_id_example'; // string | Glossary ID
$id = 'id_example'; // string | ID
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)

try {
    $result = $apiInstance->glossaryTermShow($account_id, $glossary_id, $id, $x_phrase_app_otp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlossaryTermsApi->glossaryTermShow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| Account ID |
 **glossary_id** | **string**| Glossary ID |
 **id** | **string**| ID |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]

### Return type

[**\Phrase\Model\GlossaryTerm**](../Model/GlossaryTerm.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## glossaryTermUpdate

> \Phrase\Model\GlossaryTerm glossaryTermUpdate($account_id, $glossary_id, $id, $glossary_term_update_parameters, $x_phrase_app_otp)

Update a term

Update an existing term in a term base (previously: glossary).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\GlossaryTermsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Account ID
$glossary_id = 'glossary_id_example'; // string | Glossary ID
$id = 'id_example'; // string | ID
$glossary_term_update_parameters = new \Phrase\Model\GlossaryTermUpdateParameters(); // \Phrase\Model\GlossaryTermUpdateParameters | 
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)

try {
    $result = $apiInstance->glossaryTermUpdate($account_id, $glossary_id, $id, $glossary_term_update_parameters, $x_phrase_app_otp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlossaryTermsApi->glossaryTermUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| Account ID |
 **glossary_id** | **string**| Glossary ID |
 **id** | **string**| ID |
 **glossary_term_update_parameters** | [**\Phrase\Model\GlossaryTermUpdateParameters**](../Model/GlossaryTermUpdateParameters.md)|  |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]

### Return type

[**\Phrase\Model\GlossaryTerm**](../Model/GlossaryTerm.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## glossaryTermsList

> \Phrase\Model\GlossaryTerm[] glossaryTermsList($account_id, $glossary_id, $x_phrase_app_otp, $page, $per_page)

List terms

List all terms in term bases (previously: glossary) that the current user has access to.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\GlossaryTermsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Account ID
$glossary_id = 'glossary_id_example'; // string | Glossary ID
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)
$page = 1; // int | Page number
$per_page = 25; // int | Limit on the number of objects to be returned, between 1 and 100. 25 by default

try {
    $result = $apiInstance->glossaryTermsList($account_id, $glossary_id, $x_phrase_app_otp, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlossaryTermsApi->glossaryTermsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| Account ID |
 **glossary_id** | **string**| Glossary ID |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]
 **page** | **int**| Page number | [optional]
 **per_page** | **int**| Limit on the number of objects to be returned, between 1 and 100. 25 by default | [optional]

### Return type

[**\Phrase\Model\GlossaryTerm[]**](../Model/GlossaryTerm.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

