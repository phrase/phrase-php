# Phrase\GlossaryTermTranslationsApi

All URIs are relative to *https://api.phrase.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**glossaryTermTranslationCreate**](GlossaryTermTranslationsApi.md#glossaryTermTranslationCreate) | **POST** /accounts/{account_id}/glossaries/{glossary_id}/terms/{term_id}/translations | Create a translation for a term
[**glossaryTermTranslationDelete**](GlossaryTermTranslationsApi.md#glossaryTermTranslationDelete) | **DELETE** /accounts/{account_id}/glossaries/{glossary_id}/terms/{term_id}/translations/{id} | Delete a translation for a term
[**glossaryTermTranslationUpdate**](GlossaryTermTranslationsApi.md#glossaryTermTranslationUpdate) | **PATCH** /accounts/{account_id}/glossaries/{glossary_id}/terms/{term_id}/translations/{id} | Update a translation for a term



## glossaryTermTranslationCreate

> \Phrase\Model\GlossaryTermTranslation glossaryTermTranslationCreate($account_id, $glossary_id, $term_id, $glossary_term_translation_create_parameters, $x_phrase_app_otp)

Create a translation for a term

Create a new translation for a term in a term base (previously: glossary).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\GlossaryTermTranslationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Account ID
$glossary_id = 'glossary_id_example'; // string | Glossary ID
$term_id = 'term_id_example'; // string | Term ID
$glossary_term_translation_create_parameters = new \Phrase\Model\GlossaryTermTranslationCreateParameters(); // \Phrase\Model\GlossaryTermTranslationCreateParameters | 
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)

try {
    $result = $apiInstance->glossaryTermTranslationCreate($account_id, $glossary_id, $term_id, $glossary_term_translation_create_parameters, $x_phrase_app_otp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlossaryTermTranslationsApi->glossaryTermTranslationCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| Account ID |
 **glossary_id** | **string**| Glossary ID |
 **term_id** | **string**| Term ID |
 **glossary_term_translation_create_parameters** | [**\Phrase\Model\GlossaryTermTranslationCreateParameters**](../Model/GlossaryTermTranslationCreateParameters.md)|  |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]

### Return type

[**\Phrase\Model\GlossaryTermTranslation**](../Model/GlossaryTermTranslation.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## glossaryTermTranslationDelete

> glossaryTermTranslationDelete($account_id, $glossary_id, $term_id, $id, $x_phrase_app_otp)

Delete a translation for a term

Delete an existing translation of a term in a term base (previously: glossary).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\GlossaryTermTranslationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Account ID
$glossary_id = 'glossary_id_example'; // string | Glossary ID
$term_id = 'term_id_example'; // string | Term ID
$id = 'id_example'; // string | ID
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)

try {
    $apiInstance->glossaryTermTranslationDelete($account_id, $glossary_id, $term_id, $id, $x_phrase_app_otp);
} catch (Exception $e) {
    echo 'Exception when calling GlossaryTermTranslationsApi->glossaryTermTranslationDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| Account ID |
 **glossary_id** | **string**| Glossary ID |
 **term_id** | **string**| Term ID |
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


## glossaryTermTranslationUpdate

> \Phrase\Model\GlossaryTermTranslation glossaryTermTranslationUpdate($account_id, $glossary_id, $term_id, $id, $glossary_term_translation_update_parameters, $x_phrase_app_otp)

Update a translation for a term

Update an existing translation for a term in a term base (previously: glossary).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\GlossaryTermTranslationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Account ID
$glossary_id = 'glossary_id_example'; // string | Glossary ID
$term_id = 'term_id_example'; // string | Term ID
$id = 'id_example'; // string | ID
$glossary_term_translation_update_parameters = new \Phrase\Model\GlossaryTermTranslationUpdateParameters(); // \Phrase\Model\GlossaryTermTranslationUpdateParameters | 
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)

try {
    $result = $apiInstance->glossaryTermTranslationUpdate($account_id, $glossary_id, $term_id, $id, $glossary_term_translation_update_parameters, $x_phrase_app_otp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlossaryTermTranslationsApi->glossaryTermTranslationUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| Account ID |
 **glossary_id** | **string**| Glossary ID |
 **term_id** | **string**| Term ID |
 **id** | **string**| ID |
 **glossary_term_translation_update_parameters** | [**\Phrase\Model\GlossaryTermTranslationUpdateParameters**](../Model/GlossaryTermTranslationUpdateParameters.md)|  |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]

### Return type

[**\Phrase\Model\GlossaryTermTranslation**](../Model/GlossaryTermTranslation.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

