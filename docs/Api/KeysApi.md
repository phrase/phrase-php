# Phrase\KeysApi

All URIs are relative to *https://api.phrase.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**keyCreate**](KeysApi.md#keyCreate) | **POST** /projects/{project_id}/keys | Create a key
[**keyDelete**](KeysApi.md#keyDelete) | **DELETE** /projects/{project_id}/keys/{id} | Delete a key
[**keyShow**](KeysApi.md#keyShow) | **GET** /projects/{project_id}/keys/{id} | Get a single key
[**keyUpdate**](KeysApi.md#keyUpdate) | **PATCH** /projects/{project_id}/keys/{id} | Update a key
[**keysDeleteCollection**](KeysApi.md#keysDeleteCollection) | **DELETE** /projects/{project_id}/keys | Delete collection of keys
[**keysExclude**](KeysApi.md#keysExclude) | **PATCH** /projects/{project_id}/keys/exclude | Exclude a locale on a collection of keys
[**keysInclude**](KeysApi.md#keysInclude) | **PATCH** /projects/{project_id}/keys/include | Include a locale on a collection of keys
[**keysList**](KeysApi.md#keysList) | **GET** /projects/{project_id}/keys | List keys
[**keysSearch**](KeysApi.md#keysSearch) | **POST** /projects/{project_id}/keys/search | Search keys
[**keysTag**](KeysApi.md#keysTag) | **PATCH** /projects/{project_id}/keys/tag | Add tags to collection of keys
[**keysUntag**](KeysApi.md#keysUntag) | **PATCH** /projects/{project_id}/keys/untag | Remove tags from collection of keys



## keyCreate

> \Phrase\Model\TranslationKeyDetails keyCreate($project_id, $key_create_parameters, $x_phrase_app_otp)

Create a key

Create a new key.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\KeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string | Project ID
$key_create_parameters = new \Phrase\Model\KeyCreateParameters(); // \Phrase\Model\KeyCreateParameters | 
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)

try {
    $result = $apiInstance->keyCreate($project_id, $key_create_parameters, $x_phrase_app_otp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeysApi->keyCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project ID |
 **key_create_parameters** | [**\Phrase\Model\KeyCreateParameters**](../Model/KeyCreateParameters.md)|  |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]

### Return type

[**\Phrase\Model\TranslationKeyDetails**](../Model/TranslationKeyDetails.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## keyDelete

> keyDelete($project_id, $id, $x_phrase_app_otp, $branch)

Delete a key

Delete an existing key.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\KeysApi(
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
    $apiInstance->keyDelete($project_id, $id, $x_phrase_app_otp, $branch);
} catch (Exception $e) {
    echo 'Exception when calling KeysApi->keyDelete: ', $e->getMessage(), PHP_EOL;
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


## keyShow

> \Phrase\Model\TranslationKeyDetails keyShow($project_id, $id, $x_phrase_app_otp, $branch)

Get a single key

Get details on a single key for a given project.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\KeysApi(
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
    $result = $apiInstance->keyShow($project_id, $id, $x_phrase_app_otp, $branch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeysApi->keyShow: ', $e->getMessage(), PHP_EOL;
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

[**\Phrase\Model\TranslationKeyDetails**](../Model/TranslationKeyDetails.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## keyUpdate

> \Phrase\Model\TranslationKeyDetails keyUpdate($project_id, $id, $key_update_parameters, $x_phrase_app_otp)

Update a key

Update an existing key.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\KeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string | Project ID
$id = 'id_example'; // string | ID
$key_update_parameters = new \Phrase\Model\KeyUpdateParameters(); // \Phrase\Model\KeyUpdateParameters | 
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)

try {
    $result = $apiInstance->keyUpdate($project_id, $id, $key_update_parameters, $x_phrase_app_otp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeysApi->keyUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project ID |
 **id** | **string**| ID |
 **key_update_parameters** | [**\Phrase\Model\KeyUpdateParameters**](../Model/KeyUpdateParameters.md)|  |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]

### Return type

[**\Phrase\Model\TranslationKeyDetails**](../Model/TranslationKeyDetails.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## keysDeleteCollection

> \Phrase\Model\AffectedResources keysDeleteCollection($project_id, $x_phrase_app_otp, $branch, $q, $locale_id)

Delete collection of keys

Delete all keys matching query. Same constraints as list. Please limit the number of affected keys to about 1,000 as you might experience timeouts otherwise.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\KeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string | Project ID
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)
$branch = my-feature-branch; // string | specify the branch to use
$q = mykey* translated:true; // string | Specify a query to do broad search for keys by name (including wildcards).<br><br> The following qualifiers are also supported in the search term:<br> <ul>   <li><code>ids:key_id,...</code> for queries on a comma-separated list of ids</li>   <li><code>name:key_name</code> for text queries on exact key names - spaces, commas, and colons  need to be escaped with double backslashes</li>   <li><code>tags:tag_name</code> to filter for keys with certain tags</li>   <li><code>translated:{true|false}</code> for translation status (also requires <code>locale_id</code> to be specified)</li>   <li><code>updated_at:{>=|<=}2013-02-21T00:00:00Z</code> for date range queries</li>   <li><code>unmentioned_in_upload:upload_id</code> to filter keys unmentioned within upload</li> </ul> Find more examples <a href=\"#overview--usage-examples\">here</a>.
$locale_id = abcd1234abcd1234abcd1234abcd1234; // string | Locale used to determine the translation state of a key when filtering for untranslated or translated keys.

try {
    $result = $apiInstance->keysDeleteCollection($project_id, $x_phrase_app_otp, $branch, $q, $locale_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeysApi->keysDeleteCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project ID |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]
 **branch** | **string**| specify the branch to use | [optional]
 **q** | **string**| Specify a query to do broad search for keys by name (including wildcards).&lt;br&gt;&lt;br&gt; The following qualifiers are also supported in the search term:&lt;br&gt; &lt;ul&gt;   &lt;li&gt;&lt;code&gt;ids:key_id,...&lt;/code&gt; for queries on a comma-separated list of ids&lt;/li&gt;   &lt;li&gt;&lt;code&gt;name:key_name&lt;/code&gt; for text queries on exact key names - spaces, commas, and colons  need to be escaped with double backslashes&lt;/li&gt;   &lt;li&gt;&lt;code&gt;tags:tag_name&lt;/code&gt; to filter for keys with certain tags&lt;/li&gt;   &lt;li&gt;&lt;code&gt;translated:{true|false}&lt;/code&gt; for translation status (also requires &lt;code&gt;locale_id&lt;/code&gt; to be specified)&lt;/li&gt;   &lt;li&gt;&lt;code&gt;updated_at:{&gt;&#x3D;|&lt;&#x3D;}2013-02-21T00:00:00Z&lt;/code&gt; for date range queries&lt;/li&gt;   &lt;li&gt;&lt;code&gt;unmentioned_in_upload:upload_id&lt;/code&gt; to filter keys unmentioned within upload&lt;/li&gt; &lt;/ul&gt; Find more examples &lt;a href&#x3D;\&quot;#overview--usage-examples\&quot;&gt;here&lt;/a&gt;. | [optional]
 **locale_id** | **string**| Locale used to determine the translation state of a key when filtering for untranslated or translated keys. | [optional]

### Return type

[**\Phrase\Model\AffectedResources**](../Model/AffectedResources.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## keysExclude

> \Phrase\Model\AffectedResources keysExclude($project_id, $keys_exclude_parameters, $x_phrase_app_otp)

Exclude a locale on a collection of keys

Exclude a locale on keys matching query. Same constraints as list.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\KeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string | Project ID
$keys_exclude_parameters = new \Phrase\Model\KeysExcludeParameters(); // \Phrase\Model\KeysExcludeParameters | 
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)

try {
    $result = $apiInstance->keysExclude($project_id, $keys_exclude_parameters, $x_phrase_app_otp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeysApi->keysExclude: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project ID |
 **keys_exclude_parameters** | [**\Phrase\Model\KeysExcludeParameters**](../Model/KeysExcludeParameters.md)|  |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]

### Return type

[**\Phrase\Model\AffectedResources**](../Model/AffectedResources.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## keysInclude

> \Phrase\Model\AffectedResources keysInclude($project_id, $keys_include_parameters, $x_phrase_app_otp)

Include a locale on a collection of keys

Include a locale on keys matching query. Same constraints as list.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\KeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string | Project ID
$keys_include_parameters = new \Phrase\Model\KeysIncludeParameters(); // \Phrase\Model\KeysIncludeParameters | 
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)

try {
    $result = $apiInstance->keysInclude($project_id, $keys_include_parameters, $x_phrase_app_otp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeysApi->keysInclude: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project ID |
 **keys_include_parameters** | [**\Phrase\Model\KeysIncludeParameters**](../Model/KeysIncludeParameters.md)|  |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]

### Return type

[**\Phrase\Model\AffectedResources**](../Model/AffectedResources.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## keysList

> \Phrase\Model\TranslationKey[] keysList($project_id, $x_phrase_app_otp, $page, $per_page, $branch, $sort, $order, $q, $locale_id)

List keys

List all keys for the given project. Alternatively you can POST requests to /search.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\KeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string | Project ID
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)
$page = 1; // int | Page number
$per_page = 25; // int | Limit on the number of objects to be returned, between 1 and 100. 25 by default
$branch = my-feature-branch; // string | specify the branch to use
$sort = updated_at; // string | Sort by field. Can be one of: name, created_at, updated_at.
$order = desc; // string | Order direction. Can be one of: asc, desc.
$q = mykey* translated:true; // string | Specify a query to do broad search for keys by name (including wildcards).<br><br> The following qualifiers are also supported in the search term:<br> <ul>   <li><code>ids:key_id,...</code> for queries on a comma-separated list of ids</li>   <li><code>name:key_name</code> for text queries on exact key names - spaces, commas, and colons  need to be escaped with double backslashes</li>   <li><code>tags:tag_name</code> to filter for keys with certain tags</li>   <li><code>translated:{true|false}</code> for translation status (also requires <code>locale_id</code> to be specified)</li>   <li><code>updated_at:{>=|<=}2013-02-21T00:00:00Z</code> for date range queries</li>   <li><code>unmentioned_in_upload:upload_id</code> to filter keys unmentioned within upload</li> </ul> Find more examples <a href=\"#overview--usage-examples\">here</a>.
$locale_id = abcd1234abcd1234abcd1234abcd1234; // string | Locale used to determine the translation state of a key when filtering for untranslated or translated keys.

try {
    $result = $apiInstance->keysList($project_id, $x_phrase_app_otp, $page, $per_page, $branch, $sort, $order, $q, $locale_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeysApi->keysList: ', $e->getMessage(), PHP_EOL;
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
 **branch** | **string**| specify the branch to use | [optional]
 **sort** | **string**| Sort by field. Can be one of: name, created_at, updated_at. | [optional]
 **order** | **string**| Order direction. Can be one of: asc, desc. | [optional]
 **q** | **string**| Specify a query to do broad search for keys by name (including wildcards).&lt;br&gt;&lt;br&gt; The following qualifiers are also supported in the search term:&lt;br&gt; &lt;ul&gt;   &lt;li&gt;&lt;code&gt;ids:key_id,...&lt;/code&gt; for queries on a comma-separated list of ids&lt;/li&gt;   &lt;li&gt;&lt;code&gt;name:key_name&lt;/code&gt; for text queries on exact key names - spaces, commas, and colons  need to be escaped with double backslashes&lt;/li&gt;   &lt;li&gt;&lt;code&gt;tags:tag_name&lt;/code&gt; to filter for keys with certain tags&lt;/li&gt;   &lt;li&gt;&lt;code&gt;translated:{true|false}&lt;/code&gt; for translation status (also requires &lt;code&gt;locale_id&lt;/code&gt; to be specified)&lt;/li&gt;   &lt;li&gt;&lt;code&gt;updated_at:{&gt;&#x3D;|&lt;&#x3D;}2013-02-21T00:00:00Z&lt;/code&gt; for date range queries&lt;/li&gt;   &lt;li&gt;&lt;code&gt;unmentioned_in_upload:upload_id&lt;/code&gt; to filter keys unmentioned within upload&lt;/li&gt; &lt;/ul&gt; Find more examples &lt;a href&#x3D;\&quot;#overview--usage-examples\&quot;&gt;here&lt;/a&gt;. | [optional]
 **locale_id** | **string**| Locale used to determine the translation state of a key when filtering for untranslated or translated keys. | [optional]

### Return type

[**\Phrase\Model\TranslationKey[]**](../Model/TranslationKey.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## keysSearch

> \Phrase\Model\TranslationKey[] keysSearch($project_id, $keys_search_parameters, $x_phrase_app_otp, $page, $per_page)

Search keys

Search keys for the given project matching query.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\KeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string | Project ID
$keys_search_parameters = new \Phrase\Model\KeysSearchParameters(); // \Phrase\Model\KeysSearchParameters | 
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)
$page = 1; // int | Page number
$per_page = 25; // int | Limit on the number of objects to be returned, between 1 and 100. 25 by default

try {
    $result = $apiInstance->keysSearch($project_id, $keys_search_parameters, $x_phrase_app_otp, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeysApi->keysSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project ID |
 **keys_search_parameters** | [**\Phrase\Model\KeysSearchParameters**](../Model/KeysSearchParameters.md)|  |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]
 **page** | **int**| Page number | [optional]
 **per_page** | **int**| Limit on the number of objects to be returned, between 1 and 100. 25 by default | [optional]

### Return type

[**\Phrase\Model\TranslationKey[]**](../Model/TranslationKey.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## keysTag

> \Phrase\Model\AffectedResources keysTag($project_id, $keys_tag_parameters, $x_phrase_app_otp)

Add tags to collection of keys

Tags all keys matching query. Same constraints as list.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\KeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string | Project ID
$keys_tag_parameters = new \Phrase\Model\KeysTagParameters(); // \Phrase\Model\KeysTagParameters | 
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)

try {
    $result = $apiInstance->keysTag($project_id, $keys_tag_parameters, $x_phrase_app_otp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeysApi->keysTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project ID |
 **keys_tag_parameters** | [**\Phrase\Model\KeysTagParameters**](../Model/KeysTagParameters.md)|  |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]

### Return type

[**\Phrase\Model\AffectedResources**](../Model/AffectedResources.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## keysUntag

> \Phrase\Model\AffectedResources keysUntag($project_id, $keys_untag_parameters, $x_phrase_app_otp)

Remove tags from collection of keys

Removes specified tags from keys matching query.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\KeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string | Project ID
$keys_untag_parameters = new \Phrase\Model\KeysUntagParameters(); // \Phrase\Model\KeysUntagParameters | 
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)

try {
    $result = $apiInstance->keysUntag($project_id, $keys_untag_parameters, $x_phrase_app_otp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeysApi->keysUntag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project ID |
 **keys_untag_parameters** | [**\Phrase\Model\KeysUntagParameters**](../Model/KeysUntagParameters.md)|  |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]

### Return type

[**\Phrase\Model\AffectedResources**](../Model/AffectedResources.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

