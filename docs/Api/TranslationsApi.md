# Phrase\TranslationsApi

All URIs are relative to *https://api.phrase.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**translationCreate**](TranslationsApi.md#translationCreate) | **POST** /projects/{project_id}/translations | Create a translation
[**translationExclude**](TranslationsApi.md#translationExclude) | **PATCH** /projects/{project_id}/translations/{id}/exclude | Exclude a translation from export
[**translationInclude**](TranslationsApi.md#translationInclude) | **PATCH** /projects/{project_id}/translations/{id}/include | Include a translation
[**translationReview**](TranslationsApi.md#translationReview) | **PATCH** /projects/{project_id}/translations/{id}/review | Review a translation
[**translationShow**](TranslationsApi.md#translationShow) | **GET** /projects/{project_id}/translations/{id} | Get a single translation
[**translationUnverify**](TranslationsApi.md#translationUnverify) | **PATCH** /projects/{project_id}/translations/{id}/unverify | Mark a translation as unverified
[**translationUpdate**](TranslationsApi.md#translationUpdate) | **PATCH** /projects/{project_id}/translations/{id} | Update a translation
[**translationVerify**](TranslationsApi.md#translationVerify) | **PATCH** /projects/{project_id}/translations/{id}/verify | Verify a translation
[**translationsByKey**](TranslationsApi.md#translationsByKey) | **GET** /projects/{project_id}/keys/{key_id}/translations | List translations by key
[**translationsByLocale**](TranslationsApi.md#translationsByLocale) | **GET** /projects/{project_id}/locales/{locale_id}/translations | List translations by locale
[**translationsExcludeCollection**](TranslationsApi.md#translationsExcludeCollection) | **PATCH** /projects/{project_id}/translations/exclude | Exclude translations by query
[**translationsIncludeCollection**](TranslationsApi.md#translationsIncludeCollection) | **PATCH** /projects/{project_id}/translations/include | Include translations by query
[**translationsList**](TranslationsApi.md#translationsList) | **GET** /projects/{project_id}/translations | List all translations
[**translationsReviewCollection**](TranslationsApi.md#translationsReviewCollection) | **PATCH** /projects/{project_id}/translations/review | Review translations selected by query
[**translationsSearch**](TranslationsApi.md#translationsSearch) | **POST** /projects/{project_id}/translations/search | Search translations
[**translationsUnverifyCollection**](TranslationsApi.md#translationsUnverifyCollection) | **PATCH** /projects/{project_id}/translations/unverify | Unverify translations by query
[**translationsVerifyCollection**](TranslationsApi.md#translationsVerifyCollection) | **PATCH** /projects/{project_id}/translations/verify | Verify translations by query



## translationCreate

> \Phrase\Model\TranslationDetails translationCreate($project_id, $translation_create_parameters, $x_phrase_app_otp)

Create a translation

Create a translation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\TranslationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string | Project ID
$translation_create_parameters = new \Phrase\Model\TranslationCreateParameters(); // \Phrase\Model\TranslationCreateParameters | 
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)

try {
    $result = $apiInstance->translationCreate($project_id, $translation_create_parameters, $x_phrase_app_otp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TranslationsApi->translationCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project ID |
 **translation_create_parameters** | [**\Phrase\Model\TranslationCreateParameters**](../Model/TranslationCreateParameters.md)|  |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]

### Return type

[**\Phrase\Model\TranslationDetails**](../Model/TranslationDetails.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## translationExclude

> \Phrase\Model\TranslationDetails translationExclude($project_id, $id, $translation_exclude_parameters, $x_phrase_app_otp)

Exclude a translation from export

Set exclude from export flag on an existing translation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\TranslationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string | Project ID
$id = 'id_example'; // string | ID
$translation_exclude_parameters = new \Phrase\Model\TranslationExcludeParameters(); // \Phrase\Model\TranslationExcludeParameters | 
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)

try {
    $result = $apiInstance->translationExclude($project_id, $id, $translation_exclude_parameters, $x_phrase_app_otp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TranslationsApi->translationExclude: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project ID |
 **id** | **string**| ID |
 **translation_exclude_parameters** | [**\Phrase\Model\TranslationExcludeParameters**](../Model/TranslationExcludeParameters.md)|  |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]

### Return type

[**\Phrase\Model\TranslationDetails**](../Model/TranslationDetails.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## translationInclude

> \Phrase\Model\TranslationDetails translationInclude($project_id, $id, $translation_include_parameters, $x_phrase_app_otp)

Include a translation

Remove exclude from export flag from an existing translation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\TranslationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string | Project ID
$id = 'id_example'; // string | ID
$translation_include_parameters = new \Phrase\Model\TranslationIncludeParameters(); // \Phrase\Model\TranslationIncludeParameters | 
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)

try {
    $result = $apiInstance->translationInclude($project_id, $id, $translation_include_parameters, $x_phrase_app_otp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TranslationsApi->translationInclude: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project ID |
 **id** | **string**| ID |
 **translation_include_parameters** | [**\Phrase\Model\TranslationIncludeParameters**](../Model/TranslationIncludeParameters.md)|  |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]

### Return type

[**\Phrase\Model\TranslationDetails**](../Model/TranslationDetails.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## translationReview

> \Phrase\Model\TranslationDetails translationReview($project_id, $id, $translation_review_parameters, $x_phrase_app_otp)

Review a translation

Mark an existing translation as reviewed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\TranslationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string | Project ID
$id = 'id_example'; // string | ID
$translation_review_parameters = new \Phrase\Model\TranslationReviewParameters(); // \Phrase\Model\TranslationReviewParameters | 
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)

try {
    $result = $apiInstance->translationReview($project_id, $id, $translation_review_parameters, $x_phrase_app_otp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TranslationsApi->translationReview: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project ID |
 **id** | **string**| ID |
 **translation_review_parameters** | [**\Phrase\Model\TranslationReviewParameters**](../Model/TranslationReviewParameters.md)|  |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]

### Return type

[**\Phrase\Model\TranslationDetails**](../Model/TranslationDetails.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## translationShow

> \Phrase\Model\TranslationDetails translationShow($project_id, $id, $x_phrase_app_otp, $branch)

Get a single translation

Get details on a single translation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\TranslationsApi(
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
    $result = $apiInstance->translationShow($project_id, $id, $x_phrase_app_otp, $branch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TranslationsApi->translationShow: ', $e->getMessage(), PHP_EOL;
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

[**\Phrase\Model\TranslationDetails**](../Model/TranslationDetails.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## translationUnverify

> \Phrase\Model\TranslationDetails translationUnverify($project_id, $id, $translation_unverify_parameters, $x_phrase_app_otp)

Mark a translation as unverified

Mark an existing translation as unverified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\TranslationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string | Project ID
$id = 'id_example'; // string | ID
$translation_unverify_parameters = new \Phrase\Model\TranslationUnverifyParameters(); // \Phrase\Model\TranslationUnverifyParameters | 
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)

try {
    $result = $apiInstance->translationUnverify($project_id, $id, $translation_unverify_parameters, $x_phrase_app_otp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TranslationsApi->translationUnverify: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project ID |
 **id** | **string**| ID |
 **translation_unverify_parameters** | [**\Phrase\Model\TranslationUnverifyParameters**](../Model/TranslationUnverifyParameters.md)|  |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]

### Return type

[**\Phrase\Model\TranslationDetails**](../Model/TranslationDetails.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## translationUpdate

> \Phrase\Model\TranslationDetails translationUpdate($project_id, $id, $translation_update_parameters, $x_phrase_app_otp)

Update a translation

Update an existing translation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\TranslationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string | Project ID
$id = 'id_example'; // string | ID
$translation_update_parameters = new \Phrase\Model\TranslationUpdateParameters(); // \Phrase\Model\TranslationUpdateParameters | 
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)

try {
    $result = $apiInstance->translationUpdate($project_id, $id, $translation_update_parameters, $x_phrase_app_otp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TranslationsApi->translationUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project ID |
 **id** | **string**| ID |
 **translation_update_parameters** | [**\Phrase\Model\TranslationUpdateParameters**](../Model/TranslationUpdateParameters.md)|  |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]

### Return type

[**\Phrase\Model\TranslationDetails**](../Model/TranslationDetails.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## translationVerify

> \Phrase\Model\TranslationDetails translationVerify($project_id, $id, $translation_verify_parameters, $x_phrase_app_otp)

Verify a translation

Verify an existing translation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\TranslationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string | Project ID
$id = 'id_example'; // string | ID
$translation_verify_parameters = new \Phrase\Model\TranslationVerifyParameters(); // \Phrase\Model\TranslationVerifyParameters | 
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)

try {
    $result = $apiInstance->translationVerify($project_id, $id, $translation_verify_parameters, $x_phrase_app_otp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TranslationsApi->translationVerify: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project ID |
 **id** | **string**| ID |
 **translation_verify_parameters** | [**\Phrase\Model\TranslationVerifyParameters**](../Model/TranslationVerifyParameters.md)|  |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]

### Return type

[**\Phrase\Model\TranslationDetails**](../Model/TranslationDetails.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## translationsByKey

> \Phrase\Model\Translation[] translationsByKey($project_id, $key_id, $x_phrase_app_otp, $page, $per_page, $branch, $sort, $order, $q)

List translations by key

List translations for a specific key.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\TranslationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string | Project ID
$key_id = 'key_id_example'; // string | Translation Key ID
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)
$page = 1; // int | Page number
$per_page = 25; // int | Limit on the number of objects to be returned, between 1 and 100. 25 by default
$branch = my-feature-branch; // string | specify the branch to use
$sort = updated_at; // string | Sort criteria. Can be one of: key_name, created_at, updated_at.
$order = desc; // string | Order direction. Can be one of: asc, desc.
$q = PhraseApp*%20unverified:true%20excluded:true%20tags:feature,center; // string | Specify a query to find translations by content (including wildcards).<br><br> The following qualifiers are supported in the query:<br> <ul>   <li><code>id:translation_id,...</code> for queries on a comma-separated list of ids</li>   <li><code>unverified:{true|false}</code> for verification status</li>   <li><code>tags:XYZ</code> for tags on the translation</li>   <li><code>excluded:{true|false}</code> for exclusion status</li>   <li><code>updated_at:{>=|<=}2013-02-21T00:00:00Z</code> for date range queries</li> </ul> Find more examples <a href=\"#overview--usage-examples\">here</a>.

try {
    $result = $apiInstance->translationsByKey($project_id, $key_id, $x_phrase_app_otp, $page, $per_page, $branch, $sort, $order, $q);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TranslationsApi->translationsByKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project ID |
 **key_id** | **string**| Translation Key ID |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]
 **page** | **int**| Page number | [optional]
 **per_page** | **int**| Limit on the number of objects to be returned, between 1 and 100. 25 by default | [optional]
 **branch** | **string**| specify the branch to use | [optional]
 **sort** | **string**| Sort criteria. Can be one of: key_name, created_at, updated_at. | [optional]
 **order** | **string**| Order direction. Can be one of: asc, desc. | [optional]
 **q** | **string**| Specify a query to find translations by content (including wildcards).&lt;br&gt;&lt;br&gt; The following qualifiers are supported in the query:&lt;br&gt; &lt;ul&gt;   &lt;li&gt;&lt;code&gt;id:translation_id,...&lt;/code&gt; for queries on a comma-separated list of ids&lt;/li&gt;   &lt;li&gt;&lt;code&gt;unverified:{true|false}&lt;/code&gt; for verification status&lt;/li&gt;   &lt;li&gt;&lt;code&gt;tags:XYZ&lt;/code&gt; for tags on the translation&lt;/li&gt;   &lt;li&gt;&lt;code&gt;excluded:{true|false}&lt;/code&gt; for exclusion status&lt;/li&gt;   &lt;li&gt;&lt;code&gt;updated_at:{&gt;&#x3D;|&lt;&#x3D;}2013-02-21T00:00:00Z&lt;/code&gt; for date range queries&lt;/li&gt; &lt;/ul&gt; Find more examples &lt;a href&#x3D;\&quot;#overview--usage-examples\&quot;&gt;here&lt;/a&gt;. | [optional]

### Return type

[**\Phrase\Model\Translation[]**](../Model/Translation.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## translationsByLocale

> \Phrase\Model\Translation[] translationsByLocale($project_id, $locale_id, $x_phrase_app_otp, $page, $per_page, $branch, $sort, $order, $q)

List translations by locale

List translations for a specific locale. If you want to download all translations for one locale we recommend to use the <code>locales#download</code> endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\TranslationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string | Project ID
$locale_id = 'locale_id_example'; // string | Locale ID
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)
$page = 1; // int | Page number
$per_page = 25; // int | Limit on the number of objects to be returned, between 1 and 100. 25 by default
$branch = my-feature-branch; // string | specify the branch to use
$sort = updated_at; // string | Sort criteria. Can be one of: key_name, created_at, updated_at.
$order = desc; // string | Order direction. Can be one of: asc, desc.
$q = PhraseApp*%20unverified:true%20excluded:true%20tags:feature,center; // string | Specify a query to find translations by content (including wildcards).<br><br> <i>Note: Search is limited to 10000 results and may not include recently updated data (depending on the project size).</i><br> The following qualifiers are supported in the query:<br> <ul>   <li><code>id:translation_id,...</code> for queries on a comma-separated list of ids</li>   <li><code>unverified:{true|false}</code> for verification status</li>   <li><code>tags:XYZ</code> for tags on the translation</li>   <li><code>excluded:{true|false}</code> for exclusion status</li>   <li><code>updated_at:{>=|<=}2013-02-21T00:00:00Z</code> for date range queries</li> </ul> Find more examples <a href=\"#overview--usage-examples\">here</a>.

try {
    $result = $apiInstance->translationsByLocale($project_id, $locale_id, $x_phrase_app_otp, $page, $per_page, $branch, $sort, $order, $q);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TranslationsApi->translationsByLocale: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project ID |
 **locale_id** | **string**| Locale ID |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]
 **page** | **int**| Page number | [optional]
 **per_page** | **int**| Limit on the number of objects to be returned, between 1 and 100. 25 by default | [optional]
 **branch** | **string**| specify the branch to use | [optional]
 **sort** | **string**| Sort criteria. Can be one of: key_name, created_at, updated_at. | [optional]
 **order** | **string**| Order direction. Can be one of: asc, desc. | [optional]
 **q** | **string**| Specify a query to find translations by content (including wildcards).&lt;br&gt;&lt;br&gt; &lt;i&gt;Note: Search is limited to 10000 results and may not include recently updated data (depending on the project size).&lt;/i&gt;&lt;br&gt; The following qualifiers are supported in the query:&lt;br&gt; &lt;ul&gt;   &lt;li&gt;&lt;code&gt;id:translation_id,...&lt;/code&gt; for queries on a comma-separated list of ids&lt;/li&gt;   &lt;li&gt;&lt;code&gt;unverified:{true|false}&lt;/code&gt; for verification status&lt;/li&gt;   &lt;li&gt;&lt;code&gt;tags:XYZ&lt;/code&gt; for tags on the translation&lt;/li&gt;   &lt;li&gt;&lt;code&gt;excluded:{true|false}&lt;/code&gt; for exclusion status&lt;/li&gt;   &lt;li&gt;&lt;code&gt;updated_at:{&gt;&#x3D;|&lt;&#x3D;}2013-02-21T00:00:00Z&lt;/code&gt; for date range queries&lt;/li&gt; &lt;/ul&gt; Find more examples &lt;a href&#x3D;\&quot;#overview--usage-examples\&quot;&gt;here&lt;/a&gt;. | [optional]

### Return type

[**\Phrase\Model\Translation[]**](../Model/Translation.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## translationsExcludeCollection

> \Phrase\Model\AffectedCount translationsExcludeCollection($project_id, $translations_exclude_parameters, $x_phrase_app_otp)

Exclude translations by query

Exclude translations matching query from locale export.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\TranslationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string | Project ID
$translations_exclude_parameters = new \Phrase\Model\TranslationsExcludeParameters(); // \Phrase\Model\TranslationsExcludeParameters | 
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)

try {
    $result = $apiInstance->translationsExcludeCollection($project_id, $translations_exclude_parameters, $x_phrase_app_otp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TranslationsApi->translationsExcludeCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project ID |
 **translations_exclude_parameters** | [**\Phrase\Model\TranslationsExcludeParameters**](../Model/TranslationsExcludeParameters.md)|  |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]

### Return type

[**\Phrase\Model\AffectedCount**](../Model/AffectedCount.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## translationsIncludeCollection

> \Phrase\Model\AffectedCount translationsIncludeCollection($project_id, $translations_include_parameters, $x_phrase_app_otp)

Include translations by query

Include translations matching query in locale export.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\TranslationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string | Project ID
$translations_include_parameters = new \Phrase\Model\TranslationsIncludeParameters(); // \Phrase\Model\TranslationsIncludeParameters | 
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)

try {
    $result = $apiInstance->translationsIncludeCollection($project_id, $translations_include_parameters, $x_phrase_app_otp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TranslationsApi->translationsIncludeCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project ID |
 **translations_include_parameters** | [**\Phrase\Model\TranslationsIncludeParameters**](../Model/TranslationsIncludeParameters.md)|  |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]

### Return type

[**\Phrase\Model\AffectedCount**](../Model/AffectedCount.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## translationsList

> \Phrase\Model\Translation[] translationsList($project_id, $x_phrase_app_otp, $if_modified_since, $if_none_match, $page, $per_page, $branch, $sort, $order, $q)

List all translations

List translations for the given project. If you want to download all translations for one locale we recommend to use the <code>locales#download</code> endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\TranslationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string | Project ID
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)
$if_modified_since = 'if_modified_since_example'; // string | Last modified condition, see <a href=\"#overview--conditional-get-requests--http-caching\">Conditional GET requests / HTTP Caching</a> (optional)
$if_none_match = 'if_none_match_example'; // string | ETag condition, see <a href=\"#overview--conditional-get-requests--http-caching\">Conditional GET requests / HTTP Caching</a> (optional)
$page = 1; // int | Page number
$per_page = 25; // int | Limit on the number of objects to be returned, between 1 and 100. 25 by default
$branch = my-feature-branch; // string | specify the branch to use
$sort = updated_at; // string | Sort criteria. Can be one of: key_name, created_at, updated_at.
$order = desc; // string | Order direction. Can be one of: asc, desc.
$q = PhraseApp*%20unverified:true%20excluded:true%20tags:feature,center; // string | Specify a query to find translations by content (including wildcards).<br><br> <i>Note: Search is limited to 10000 results and may not include recently updated data (depending on the project size).</i><br> The following qualifiers are supported in the query:<br> <ul>   <li><code>id:translation_id,...</code> for queries on a comma-separated list of ids</li>   <li><code>tags:XYZ</code> for tags on the translation</li>   <li><code>unverified:{true|false}</code> for verification status</li>   <li><code>excluded:{true|false}</code> for exclusion status</li>   <li><code>updated_at:{>=|<=}2013-02-21T00:00:00Z</code> for date range queries</li> </ul> Find more examples <a href=\"#overview--usage-examples\">here</a>.

try {
    $result = $apiInstance->translationsList($project_id, $x_phrase_app_otp, $if_modified_since, $if_none_match, $page, $per_page, $branch, $sort, $order, $q);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TranslationsApi->translationsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project ID |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]
 **if_modified_since** | **string**| Last modified condition, see &lt;a href&#x3D;\&quot;#overview--conditional-get-requests--http-caching\&quot;&gt;Conditional GET requests / HTTP Caching&lt;/a&gt; (optional) | [optional]
 **if_none_match** | **string**| ETag condition, see &lt;a href&#x3D;\&quot;#overview--conditional-get-requests--http-caching\&quot;&gt;Conditional GET requests / HTTP Caching&lt;/a&gt; (optional) | [optional]
 **page** | **int**| Page number | [optional]
 **per_page** | **int**| Limit on the number of objects to be returned, between 1 and 100. 25 by default | [optional]
 **branch** | **string**| specify the branch to use | [optional]
 **sort** | **string**| Sort criteria. Can be one of: key_name, created_at, updated_at. | [optional]
 **order** | **string**| Order direction. Can be one of: asc, desc. | [optional]
 **q** | **string**| Specify a query to find translations by content (including wildcards).&lt;br&gt;&lt;br&gt; &lt;i&gt;Note: Search is limited to 10000 results and may not include recently updated data (depending on the project size).&lt;/i&gt;&lt;br&gt; The following qualifiers are supported in the query:&lt;br&gt; &lt;ul&gt;   &lt;li&gt;&lt;code&gt;id:translation_id,...&lt;/code&gt; for queries on a comma-separated list of ids&lt;/li&gt;   &lt;li&gt;&lt;code&gt;tags:XYZ&lt;/code&gt; for tags on the translation&lt;/li&gt;   &lt;li&gt;&lt;code&gt;unverified:{true|false}&lt;/code&gt; for verification status&lt;/li&gt;   &lt;li&gt;&lt;code&gt;excluded:{true|false}&lt;/code&gt; for exclusion status&lt;/li&gt;   &lt;li&gt;&lt;code&gt;updated_at:{&gt;&#x3D;|&lt;&#x3D;}2013-02-21T00:00:00Z&lt;/code&gt; for date range queries&lt;/li&gt; &lt;/ul&gt; Find more examples &lt;a href&#x3D;\&quot;#overview--usage-examples\&quot;&gt;here&lt;/a&gt;. | [optional]

### Return type

[**\Phrase\Model\Translation[]**](../Model/Translation.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## translationsReviewCollection

> \Phrase\Model\AffectedCount translationsReviewCollection($project_id, $translations_review_parameters, $x_phrase_app_otp)

Review translations selected by query

Review translations matching query.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\TranslationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string | Project ID
$translations_review_parameters = new \Phrase\Model\TranslationsReviewParameters(); // \Phrase\Model\TranslationsReviewParameters | 
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)

try {
    $result = $apiInstance->translationsReviewCollection($project_id, $translations_review_parameters, $x_phrase_app_otp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TranslationsApi->translationsReviewCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project ID |
 **translations_review_parameters** | [**\Phrase\Model\TranslationsReviewParameters**](../Model/TranslationsReviewParameters.md)|  |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]

### Return type

[**\Phrase\Model\AffectedCount**](../Model/AffectedCount.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## translationsSearch

> \Phrase\Model\Translation[] translationsSearch($project_id, $translations_search_parameters, $x_phrase_app_otp, $page, $per_page)

Search translations

Search translations for the given project. Provides the same search interface as <code>translations#index</code> but allows POST requests to avoid limitations imposed by GET requests. If you want to download all translations for one locale we recommend to use the <code>locales#download</code> endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\TranslationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string | Project ID
$translations_search_parameters = new \Phrase\Model\TranslationsSearchParameters(); // \Phrase\Model\TranslationsSearchParameters | 
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)
$page = 1; // int | Page number
$per_page = 25; // int | Limit on the number of objects to be returned, between 1 and 100. 25 by default

try {
    $result = $apiInstance->translationsSearch($project_id, $translations_search_parameters, $x_phrase_app_otp, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TranslationsApi->translationsSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project ID |
 **translations_search_parameters** | [**\Phrase\Model\TranslationsSearchParameters**](../Model/TranslationsSearchParameters.md)|  |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]
 **page** | **int**| Page number | [optional]
 **per_page** | **int**| Limit on the number of objects to be returned, between 1 and 100. 25 by default | [optional]

### Return type

[**\Phrase\Model\Translation[]**](../Model/Translation.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## translationsUnverifyCollection

> \Phrase\Model\AffectedCount translationsUnverifyCollection($project_id, $translations_unverify_parameters, $x_phrase_app_otp)

Unverify translations by query

Mark translations matching query as unverified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\TranslationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string | Project ID
$translations_unverify_parameters = new \Phrase\Model\TranslationsUnverifyParameters(); // \Phrase\Model\TranslationsUnverifyParameters | 
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)

try {
    $result = $apiInstance->translationsUnverifyCollection($project_id, $translations_unverify_parameters, $x_phrase_app_otp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TranslationsApi->translationsUnverifyCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project ID |
 **translations_unverify_parameters** | [**\Phrase\Model\TranslationsUnverifyParameters**](../Model/TranslationsUnverifyParameters.md)|  |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]

### Return type

[**\Phrase\Model\AffectedCount**](../Model/AffectedCount.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## translationsVerifyCollection

> \Phrase\Model\AffectedCount translationsVerifyCollection($project_id, $translations_verify_parameters, $x_phrase_app_otp)

Verify translations by query

Verify translations matching query.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\TranslationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string | Project ID
$translations_verify_parameters = new \Phrase\Model\TranslationsVerifyParameters(); // \Phrase\Model\TranslationsVerifyParameters | 
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)

try {
    $result = $apiInstance->translationsVerifyCollection($project_id, $translations_verify_parameters, $x_phrase_app_otp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TranslationsApi->translationsVerifyCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project ID |
 **translations_verify_parameters** | [**\Phrase\Model\TranslationsVerifyParameters**](../Model/TranslationsVerifyParameters.md)|  |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]

### Return type

[**\Phrase\Model\AffectedCount**](../Model/AffectedCount.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

