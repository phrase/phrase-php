# Phrase\LocalesApi

All URIs are relative to *https://api.phrase.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountLocales**](LocalesApi.md#accountLocales) | **GET** /accounts/{account_id}/locales | List locales used in account
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
$per_page = 25; // int | allows you to specify a page size up to 100 items, 25 by default

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
 **per_page** | **int**| allows you to specify a page size up to 100 items, 25 by default | [optional]

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
$id = 'id_example'; // string | ID
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
 **id** | **string**| ID |
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

> \SplFileObject localeDownload($project_id, $id, $x_phrase_app_otp, $branch, $file_format, $tags, $tag, $include_empty_translations, $exclude_empty_zero_forms, $include_translated_keys, $keep_notranslate_tags, $convert_emoji, $format_options, $encoding, $skip_unverified_translations, $include_unverified_translations, $use_last_reviewed_version, $fallback_locale_id, $source_locale_id)

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
$id = 'id_example'; // string | ID
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)
$branch = my-feature-branch; // string | specify the branch to use
$file_format = yml; // string | File format name. See the <a href=\"https://help.phrase.com/help/supported-platforms-and-formats\">format guide</a> for all supported file formats.
$tags = feature1,feature2; // string | Limit results to keys tagged with a list of comma separated tag names.
$tag = feature; // string | Limit download to tagged keys. This parameter is deprecated. Please use the \"tags\" parameter instead
$include_empty_translations = True; // bool | Indicates whether keys without translations should be included in the output as well.
$exclude_empty_zero_forms = True; // bool | Indicates whether zero forms should be included when empty in pluralized keys.
$include_translated_keys = True; // bool | Include translated keys in the locale file. Use in combination with include_empty_translations to obtain only untranslated keys.
$keep_notranslate_tags = True; // bool | Indicates whether [NOTRANSLATE] tags should be kept.
$convert_emoji = True; // bool | This option is obsolete. Projects that were created on or after Nov 29th 2019 or that did not contain emoji by then will not require this flag any longer since emoji are now supported natively.
$format_options = new \stdClass; // object | Additional formatting and render options. See the <a href=\"https://help.phrase.com/help/supported-platforms-and-formats\">format guide</a> for a list of options available for each format. Specify format options like this: <code>...&format_options[foo]=bar</code>
$encoding = 'encoding_example'; // string | Enforces a specific encoding on the file contents. Valid options are \"UTF-8\", \"UTF-16\" and \"ISO-8859-1\".
$skip_unverified_translations = True; // bool | Indicates whether the locale file should skip all unverified translations. This parameter is deprecated and should be replaced with <code>include_unverified_translations</code>.
$include_unverified_translations = True; // bool | if set to false unverified translations are excluded
$use_last_reviewed_version = True; // bool | If set to true the last reviewed version of a translation is used. This is only available if the review workflow (currently in beta) is enabled for the project.
$fallback_locale_id = 'fallback_locale_id_example'; // string | If a key has no translation in the locale being downloaded the translation in the fallback locale will be used. Provide the public ID of the locale that should be used as the fallback. Requires include_empty_translations to be set to <code>true</code>.
$source_locale_id = 'source_locale_id_example'; // string | Provides the source language of a corresponding job as the source language of the generated locale file. This parameter will be ignored unless used in combination with a <code>tag</code> parameter indicating a specific job.

try {
    $result = $apiInstance->localeDownload($project_id, $id, $x_phrase_app_otp, $branch, $file_format, $tags, $tag, $include_empty_translations, $exclude_empty_zero_forms, $include_translated_keys, $keep_notranslate_tags, $convert_emoji, $format_options, $encoding, $skip_unverified_translations, $include_unverified_translations, $use_last_reviewed_version, $fallback_locale_id, $source_locale_id);
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
 **id** | **string**| ID |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]
 **branch** | **string**| specify the branch to use | [optional]
 **file_format** | **string**| File format name. See the &lt;a href&#x3D;\&quot;https://help.phrase.com/help/supported-platforms-and-formats\&quot;&gt;format guide&lt;/a&gt; for all supported file formats. | [optional]
 **tags** | **string**| Limit results to keys tagged with a list of comma separated tag names. | [optional]
 **tag** | **string**| Limit download to tagged keys. This parameter is deprecated. Please use the \&quot;tags\&quot; parameter instead | [optional]
 **include_empty_translations** | **bool**| Indicates whether keys without translations should be included in the output as well. | [optional]
 **exclude_empty_zero_forms** | **bool**| Indicates whether zero forms should be included when empty in pluralized keys. | [optional]
 **include_translated_keys** | **bool**| Include translated keys in the locale file. Use in combination with include_empty_translations to obtain only untranslated keys. | [optional]
 **keep_notranslate_tags** | **bool**| Indicates whether [NOTRANSLATE] tags should be kept. | [optional]
 **convert_emoji** | **bool**| This option is obsolete. Projects that were created on or after Nov 29th 2019 or that did not contain emoji by then will not require this flag any longer since emoji are now supported natively. | [optional]
 **format_options** | [**object**](../Model/.md)| Additional formatting and render options. See the &lt;a href&#x3D;\&quot;https://help.phrase.com/help/supported-platforms-and-formats\&quot;&gt;format guide&lt;/a&gt; for a list of options available for each format. Specify format options like this: &lt;code&gt;...&amp;format_options[foo]&#x3D;bar&lt;/code&gt; | [optional]
 **encoding** | **string**| Enforces a specific encoding on the file contents. Valid options are \&quot;UTF-8\&quot;, \&quot;UTF-16\&quot; and \&quot;ISO-8859-1\&quot;. | [optional]
 **skip_unverified_translations** | **bool**| Indicates whether the locale file should skip all unverified translations. This parameter is deprecated and should be replaced with &lt;code&gt;include_unverified_translations&lt;/code&gt;. | [optional]
 **include_unverified_translations** | **bool**| if set to false unverified translations are excluded | [optional]
 **use_last_reviewed_version** | **bool**| If set to true the last reviewed version of a translation is used. This is only available if the review workflow (currently in beta) is enabled for the project. | [optional]
 **fallback_locale_id** | **string**| If a key has no translation in the locale being downloaded the translation in the fallback locale will be used. Provide the public ID of the locale that should be used as the fallback. Requires include_empty_translations to be set to &lt;code&gt;true&lt;/code&gt;. | [optional]
 **source_locale_id** | **string**| Provides the source language of a corresponding job as the source language of the generated locale file. This parameter will be ignored unless used in combination with a &lt;code&gt;tag&lt;/code&gt; parameter indicating a specific job. | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

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
$id = 'id_example'; // string | ID
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
 **id** | **string**| ID |
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
$id = 'id_example'; // string | ID
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
 **id** | **string**| ID |
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
$per_page = 25; // int | allows you to specify a page size up to 100 items, 25 by default
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
 **per_page** | **int**| allows you to specify a page size up to 100 items, 25 by default | [optional]
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

