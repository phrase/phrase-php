# Phrase\LocalesApi

All URIs are relative to *https://api.phrase.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountLocales**](LocalesApi.md#accountLocales) | **GET** /accounts/{id}/locales | List locales used in account
[**localeCreate**](LocalesApi.md#localeCreate) | **POST** /projects/{project_id}/locales | Create a locale
[**localeDelete**](LocalesApi.md#localeDelete) | **DELETE** /projects/{project_id}/locales/{id} | Delete a locale
[**localeDownload**](LocalesApi.md#localeDownload) | **GET** /projects/{project_id}/locales/{id}/download | Download a locale
[**localeShow**](LocalesApi.md#localeShow) | **GET** /projects/{project_id}/locales/{id} | Get a single locale
[**localeUpdate**](LocalesApi.md#localeUpdate) | **PATCH** /projects/{project_id}/locales/{id} | Update a locale
[**localesList**](LocalesApi.md#localesList) | **GET** /projects/{project_id}/locales | List locales



## accountLocales

> \Phrase\Model\LocalePreview1[] accountLocales($id, $x_phrase_app_otp, $page, $per_page)

List locales used in account

List all locales unique by locale code used across all projects within an account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\LocalesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | ID
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)
$page = 1; // int | Page number
$per_page = 25; // int | Limit on the number of objects to be returned, between 1 and 100. 25 by default

try {
    $result = $apiInstance->accountLocales($id, $x_phrase_app_otp, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocalesApi->accountLocales: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]
 **page** | **int**| Page number | [optional]
 **per_page** | **int**| Limit on the number of objects to be returned, between 1 and 100. 25 by default | [optional]

### Return type

[**\Phrase\Model\LocalePreview1[]**](../Model/LocalePreview1.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## localeCreate

> \Phrase\Model\LocaleDetails localeCreate($project_id, $locale_create_parameters, $x_phrase_app_otp)

Create a locale

Create a new locale.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\LocalesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string | Project ID
$locale_create_parameters = new \Phrase\Model\LocaleCreateParameters(); // \Phrase\Model\LocaleCreateParameters | 
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)

try {
    $result = $apiInstance->localeCreate($project_id, $locale_create_parameters, $x_phrase_app_otp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocalesApi->localeCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project ID |
 **locale_create_parameters** | [**\Phrase\Model\LocaleCreateParameters**](../Model/LocaleCreateParameters.md)|  |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]

### Return type

[**\Phrase\Model\LocaleDetails**](../Model/LocaleDetails.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## localeDelete

> localeDelete($project_id, $id, $x_phrase_app_otp, $branch)

Delete a locale

Delete an existing locale.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\LocalesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string | Project ID
$id = 'id_example'; // string | Locale ID or locale name
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)
$branch = my-feature-branch; // string | specify the branch to use

try {
    $apiInstance->localeDelete($project_id, $id, $x_phrase_app_otp, $branch);
} catch (Exception $e) {
    echo 'Exception when calling LocalesApi->localeDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project ID |
 **id** | **string**| Locale ID or locale name |
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


## localeDownload

> \SplFileObject localeDownload($project_id, $id, $x_phrase_app_otp, $if_modified_since, $if_none_match, $branch, $file_format, $tags, $tag, $include_empty_translations, $exclude_empty_zero_forms, $include_translated_keys, $keep_notranslate_tags, $convert_emoji, $format_options, $encoding, $skip_unverified_translations, $include_unverified_translations, $use_last_reviewed_version, $fallback_locale_id, $source_locale_id, $translation_key_prefix, $filter_by_prefix, $custom_metadata_filters, $locale_ids, $updated_since)

Download a locale

Download a locale in a specific file format.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\LocalesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string | Project ID
$id = 'id_example'; // string | Locale ID or locale name
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)
$if_modified_since = 'if_modified_since_example'; // string | Last modified condition, see [Conditional GET requests / HTTP Caching](/en/api/strings/pagination#conditional-get-requests-%2F-http-caching) (optional)
$if_none_match = 'if_none_match_example'; // string | ETag condition, see [Conditional GET requests / HTTP Caching](/en/api/strings/pagination#conditional-get-requests-%2F-http-caching) (optional)
$branch = my-feature-branch; // string | specify the branch to use
$file_format = yml; // string | File format name. See the [format guide](https://support.phrase.com/hc/en-us/sections/6111343326364) for all supported file formats.
$tags = feature1,feature2; // string | Limit results to keys tagged with a list of comma separated tag names.
$tag = feature; // string | Limit download to tagged keys. This parameter is deprecated. Please use the \"tags\" parameter instead
$include_empty_translations = True; // bool | Indicates whether keys without translations should be included in the output as well.
$exclude_empty_zero_forms = True; // bool | Indicates whether zero forms should be included when empty in pluralized keys.
$include_translated_keys = True; // bool | Include translated keys in the locale file. Use in combination with include_empty_translations to obtain only untranslated keys.
$keep_notranslate_tags = True; // bool | Indicates whether [NOTRANSLATE] tags should be kept.
$convert_emoji = True; // bool | This option is obsolete. Projects that were created on or after Nov 29th 2019 or that did not contain emoji by then will not require this flag any longer since emoji are now supported natively.
$format_options = array('key' => new \stdClass); // object | Additional formatting and render options. See the [format guide](https://support.phrase.com/hc/en-us/sections/6111343326364) for a list of options available for each format. Specify format options like this: `...&format_options[foo]=bar`
$encoding = 'encoding_example'; // string | Enforces a specific encoding on the file contents. Valid options are \"UTF-8\", \"UTF-16\" and \"ISO-8859-1\".
$skip_unverified_translations = True; // bool | Indicates whether the locale file should skip all unverified translations. This parameter is deprecated and should be replaced with `include_unverified_translations`.
$include_unverified_translations = True; // bool | if set to false unverified translations are excluded
$use_last_reviewed_version = True; // bool | If set to true the last reviewed version of a translation is used. This is only available if the review workflow is enabled for the project.
$fallback_locale_id = 'fallback_locale_id_example'; // string | If a key has no translation in the locale being downloaded the translation in the fallback locale will be used. Provide the ID of the locale that should be used as the fallback. Requires include_empty_translations to be set to `true`.
$source_locale_id = 'source_locale_id_example'; // string | Provides the source language of a corresponding job as the source language of the generated locale file. This parameter will be ignored unless used in combination with a `tag` parameter indicating a specific job.
$translation_key_prefix = prefix_; // string | Download all translation keys, and remove the specified prefix where possible. Warning: this may create duplicate key names if other keys share the same name after the prefix is removed.
$filter_by_prefix = True; // bool | Only download translation keys containing the specified prefix, and remove the prefix from the generated file.
$custom_metadata_filters = array('key' => new \stdClass); // object | Custom metadata filters. Provide the name of the metadata field and the value to filter by. Only keys with matching metadata will be included in the download.
$locale_ids = ["de","en"]; // string[] | Locale IDs or locale names
$updated_since = 2023-01-01T00:00:00Z; // string | Only include translations and keys that have been updated since the given date. The date must be in ISO 8601 format (e.g., `2023-01-01T00:00:00Z`).

try {
    $result = $apiInstance->localeDownload($project_id, $id, $x_phrase_app_otp, $if_modified_since, $if_none_match, $branch, $file_format, $tags, $tag, $include_empty_translations, $exclude_empty_zero_forms, $include_translated_keys, $keep_notranslate_tags, $convert_emoji, $format_options, $encoding, $skip_unverified_translations, $include_unverified_translations, $use_last_reviewed_version, $fallback_locale_id, $source_locale_id, $translation_key_prefix, $filter_by_prefix, $custom_metadata_filters, $locale_ids, $updated_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocalesApi->localeDownload: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project ID |
 **id** | **string**| Locale ID or locale name |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]
 **if_modified_since** | **string**| Last modified condition, see [Conditional GET requests / HTTP Caching](/en/api/strings/pagination#conditional-get-requests-%2F-http-caching) (optional) | [optional]
 **if_none_match** | **string**| ETag condition, see [Conditional GET requests / HTTP Caching](/en/api/strings/pagination#conditional-get-requests-%2F-http-caching) (optional) | [optional]
 **branch** | **string**| specify the branch to use | [optional]
 **file_format** | **string**| File format name. See the [format guide](https://support.phrase.com/hc/en-us/sections/6111343326364) for all supported file formats. | [optional]
 **tags** | **string**| Limit results to keys tagged with a list of comma separated tag names. | [optional]
 **tag** | **string**| Limit download to tagged keys. This parameter is deprecated. Please use the \&quot;tags\&quot; parameter instead | [optional]
 **include_empty_translations** | **bool**| Indicates whether keys without translations should be included in the output as well. | [optional]
 **exclude_empty_zero_forms** | **bool**| Indicates whether zero forms should be included when empty in pluralized keys. | [optional]
 **include_translated_keys** | **bool**| Include translated keys in the locale file. Use in combination with include_empty_translations to obtain only untranslated keys. | [optional]
 **keep_notranslate_tags** | **bool**| Indicates whether [NOTRANSLATE] tags should be kept. | [optional]
 **convert_emoji** | **bool**| This option is obsolete. Projects that were created on or after Nov 29th 2019 or that did not contain emoji by then will not require this flag any longer since emoji are now supported natively. | [optional]
 **format_options** | [**object**](../Model/.md)| Additional formatting and render options. See the [format guide](https://support.phrase.com/hc/en-us/sections/6111343326364) for a list of options available for each format. Specify format options like this: &#x60;...&amp;format_options[foo]&#x3D;bar&#x60; | [optional]
 **encoding** | **string**| Enforces a specific encoding on the file contents. Valid options are \&quot;UTF-8\&quot;, \&quot;UTF-16\&quot; and \&quot;ISO-8859-1\&quot;. | [optional]
 **skip_unverified_translations** | **bool**| Indicates whether the locale file should skip all unverified translations. This parameter is deprecated and should be replaced with &#x60;include_unverified_translations&#x60;. | [optional]
 **include_unverified_translations** | **bool**| if set to false unverified translations are excluded | [optional]
 **use_last_reviewed_version** | **bool**| If set to true the last reviewed version of a translation is used. This is only available if the review workflow is enabled for the project. | [optional]
 **fallback_locale_id** | **string**| If a key has no translation in the locale being downloaded the translation in the fallback locale will be used. Provide the ID of the locale that should be used as the fallback. Requires include_empty_translations to be set to &#x60;true&#x60;. | [optional]
 **source_locale_id** | **string**| Provides the source language of a corresponding job as the source language of the generated locale file. This parameter will be ignored unless used in combination with a &#x60;tag&#x60; parameter indicating a specific job. | [optional]
 **translation_key_prefix** | **string**| Download all translation keys, and remove the specified prefix where possible. Warning: this may create duplicate key names if other keys share the same name after the prefix is removed. | [optional]
 **filter_by_prefix** | **bool**| Only download translation keys containing the specified prefix, and remove the prefix from the generated file. | [optional]
 **custom_metadata_filters** | [**object**](../Model/.md)| Custom metadata filters. Provide the name of the metadata field and the value to filter by. Only keys with matching metadata will be included in the download. | [optional]
 **locale_ids** | [**string[]**](../Model/string.md)| Locale IDs or locale names | [optional]
 **updated_since** | **string**| Only include translations and keys that have been updated since the given date. The date must be in ISO 8601 format (e.g., &#x60;2023-01-01T00:00:00Z&#x60;). | [optional]

### Return type

**\SplFileObject**

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: *

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## localeShow

> \Phrase\Model\LocaleDetails localeShow($project_id, $id, $x_phrase_app_otp, $branch)

Get a single locale

Get details on a single locale for a given project.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\LocalesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string | Project ID
$id = 'id_example'; // string | Locale ID or locale name
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)
$branch = my-feature-branch; // string | specify the branch to use

try {
    $result = $apiInstance->localeShow($project_id, $id, $x_phrase_app_otp, $branch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocalesApi->localeShow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project ID |
 **id** | **string**| Locale ID or locale name |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]
 **branch** | **string**| specify the branch to use | [optional]

### Return type

[**\Phrase\Model\LocaleDetails**](../Model/LocaleDetails.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## localeUpdate

> \Phrase\Model\LocaleDetails localeUpdate($project_id, $id, $locale_update_parameters, $x_phrase_app_otp)

Update a locale

Update an existing locale.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\LocalesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string | Project ID
$id = 'id_example'; // string | Locale ID or locale name
$locale_update_parameters = new \Phrase\Model\LocaleUpdateParameters(); // \Phrase\Model\LocaleUpdateParameters | 
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)

try {
    $result = $apiInstance->localeUpdate($project_id, $id, $locale_update_parameters, $x_phrase_app_otp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocalesApi->localeUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project ID |
 **id** | **string**| Locale ID or locale name |
 **locale_update_parameters** | [**\Phrase\Model\LocaleUpdateParameters**](../Model/LocaleUpdateParameters.md)|  |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]

### Return type

[**\Phrase\Model\LocaleDetails**](../Model/LocaleDetails.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## localesList

> \Phrase\Model\Locale[] localesList($project_id, $x_phrase_app_otp, $page, $per_page, $sort_by, $branch)

List locales

List all locales for the given project.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\LocalesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string | Project ID
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)
$page = 1; // int | Page number
$per_page = 25; // int | Limit on the number of objects to be returned, between 1 and 100. 25 by default
$sort_by = 'sort_by_example'; // string | Sort locales. Valid options are \"name_asc\", \"name_desc\", \"default_asc\", \"default_desc\".
$branch = my-feature-branch; // string | specify the branch to use

try {
    $result = $apiInstance->localesList($project_id, $x_phrase_app_otp, $page, $per_page, $sort_by, $branch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocalesApi->localesList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project ID |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]
 **page** | **int**| Page number | [optional]
 **per_page** | **int**| Limit on the number of objects to be returned, between 1 and 100. 25 by default | [optional]
 **sort_by** | **string**| Sort locales. Valid options are \&quot;name_asc\&quot;, \&quot;name_desc\&quot;, \&quot;default_asc\&quot;, \&quot;default_desc\&quot;. | [optional]
 **branch** | **string**| specify the branch to use | [optional]

### Return type

[**\Phrase\Model\Locale[]**](../Model/Locale.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

