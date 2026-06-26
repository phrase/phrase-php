# Phrase\LinkedKeysApi

All URIs are relative to *https://api.phrase.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**keyLinksBatchDestroy**](LinkedKeysApi.md#keyLinksBatchDestroy) | **DELETE** /projects/{project_id}/keys/{id}/key_links | Batch unlink child keys from a parent key
[**keyLinksCreate**](LinkedKeysApi.md#keyLinksCreate) | **POST** /projects/{project_id}/keys/{id}/key_links | Link child keys to a parent key
[**keyLinksDestroy**](LinkedKeysApi.md#keyLinksDestroy) | **DELETE** /projects/{project_id}/keys/{id}/key_links/{child_key_id} | Unlink a child key from a parent key
[**keyLinksIndex**](LinkedKeysApi.md#keyLinksIndex) | **GET** /projects/{project_id}/keys/{id}/key_links | List child keys of a parent key



## keyLinksBatchDestroy

> \Phrase\Model\KeyLink keyLinksBatchDestroy($project_id, $id, $x_phrase_app_otp, $key_links_batch_destroy_parameters)

Batch unlink child keys from a parent key

Removes one or more child keys from a parent key's linked-key group, or dissolves the entire group by setting unlink_parent to true.  Use this when you need to detach specific child keys from a shared translation source, or to fully break apart a linked-key group so each key manages its own translations independently. When child keys are unlinked, their translations are updated with a copy of the parent's current content (strategy keep_content, the default) or cleared (strategy remove_content).  This operation is only available on main projects. It returns 422 when a child key in `child_key_ids` is not currently linked to the parent, or when a translation update fails while unlinking.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\LinkedKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string | Project ID
$id = 'id_example'; // string | Parent Translation Key ID
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)
$key_links_batch_destroy_parameters = new \Phrase\Model\KeyLinksBatchDestroyParameters(); // \Phrase\Model\KeyLinksBatchDestroyParameters | 

try {
    $result = $apiInstance->keyLinksBatchDestroy($project_id, $id, $x_phrase_app_otp, $key_links_batch_destroy_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LinkedKeysApi->keyLinksBatchDestroy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project ID |
 **id** | **string**| Parent Translation Key ID |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]
 **key_links_batch_destroy_parameters** | [**\Phrase\Model\KeyLinksBatchDestroyParameters**](../Model/KeyLinksBatchDestroyParameters.md)|  | [optional]

### Return type

[**\Phrase\Model\KeyLink**](../Model/KeyLink.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## keyLinksCreate

> \Phrase\Model\KeyLink keyLinksCreate($project_id, $id, $key_links_create_parameters, $x_phrase_app_otp)

Link child keys to a parent key

Designates a translation key as a parent and links one or more child keys to it. Once linked, child keys receive a special reference marker as their translation content, signalling that their translations are derived from the parent. Use this when you want to group related keys — for example, a short label and its long-form variant — so translators see them in context together.  Pass an empty child_key_ids array to mark the key as a parent without linking any children yet. Both the parent key and every child key must belong to the main project; branch keys cannot participate in key links. A child key can have at most one parent at a time; attempting to link a child that already has a parent returns a 422 error with code CHILD_IS_ALREADY_LINKED. Parent and child key plurality must match — linking a plural child to a non-plural parent (or vice versa) also returns a 422.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\LinkedKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string | Project ID
$id = 'id_example'; // string | Parent Translation Key ID
$key_links_create_parameters = {"child_key_ids":["ijkl9012mnop3456ijkl9012mnop3456","abcd1234efgh5678abcd1234efgh5678"]}; // \Phrase\Model\KeyLinksCreateParameters | 
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)

try {
    $result = $apiInstance->keyLinksCreate($project_id, $id, $key_links_create_parameters, $x_phrase_app_otp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LinkedKeysApi->keyLinksCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project ID |
 **id** | **string**| Parent Translation Key ID |
 **key_links_create_parameters** | [**\Phrase\Model\KeyLinksCreateParameters**](../Model/KeyLinksCreateParameters.md)|  |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]

### Return type

[**\Phrase\Model\KeyLink**](../Model/KeyLink.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## keyLinksDestroy

> keyLinksDestroy($project_id, $id, $child_key_id, $x_phrase_app_otp)

Unlink a child key from a parent key

Removes a single child key from a parent key's link group. A link group is the relationship model that keeps child keys synchronized with a parent: while linked, a child key's translations are derived from the parent's content. When you call this endpoint, the child key leaves the group and becomes independent — its existing translations are updated with the parent's current content and then marked unverified, signalling that reviewers should confirm the content is still appropriate for the child's context.  Use this endpoint when you need to detach one specific child key while keeping other children linked. To detach multiple children at once, use the batch unlink endpoint. This operation is only available on main projects.  It returns 422 when the child key is not currently linked to the specified parent key, or when a translation update fails during the unlink process.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\LinkedKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string | Project ID
$id = 'id_example'; // string | Parent Translation Key ID
$child_key_id = 1234abcd1234cdef1234abcd1234cdef; // string | The ID of the child translation key to unlink from the parent.
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)

try {
    $apiInstance->keyLinksDestroy($project_id, $id, $child_key_id, $x_phrase_app_otp);
} catch (Exception $e) {
    echo 'Exception when calling LinkedKeysApi->keyLinksDestroy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project ID |
 **id** | **string**| Parent Translation Key ID |
 **child_key_id** | **string**| The ID of the child translation key to unlink from the parent. |
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


## keyLinksIndex

> \Phrase\Model\KeyLink keyLinksIndex($project_id, $id, $x_phrase_app_otp)

List child keys of a parent key

Returns detailed information about a parent key, including its linked child keys.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\LinkedKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string | Project ID
$id = 'id_example'; // string | Parent Translation Key ID
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)

try {
    $result = $apiInstance->keyLinksIndex($project_id, $id, $x_phrase_app_otp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LinkedKeysApi->keyLinksIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project ID |
 **id** | **string**| Parent Translation Key ID |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]

### Return type

[**\Phrase\Model\KeyLink**](../Model/KeyLink.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

