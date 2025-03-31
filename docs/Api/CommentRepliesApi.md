# Phrase\CommentRepliesApi

All URIs are relative to *https://api.phrase.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**repliesList**](CommentRepliesApi.md#repliesList) | **GET** /projects/{project_id}/keys/{key_id}/comments/{comment_id}/replies | List replies
[**replyCreate**](CommentRepliesApi.md#replyCreate) | **POST** /projects/{project_id}/keys/{key_id}/comments/{comment_id}/replies | Create a reply
[**replyDelete**](CommentRepliesApi.md#replyDelete) | **DELETE** /projects/{project_id}/keys/{key_id}/comments/{comment_id}/replies/{id} | Delete a reply
[**replyMarkAsRead**](CommentRepliesApi.md#replyMarkAsRead) | **PATCH** /projects/{project_id}/keys/{key_id}/comments/{comment_id}/replies/{id}/mark_as_read | Mark a reply as read
[**replyMarkAsUnread**](CommentRepliesApi.md#replyMarkAsUnread) | **PATCH** /projects/{project_id}/keys/{key_id}/comments/{comment_id}/replies/{id}/mark_as_unread | Mark a reply as unread
[**replyShow**](CommentRepliesApi.md#replyShow) | **GET** /projects/{project_id}/keys/{key_id}/comments/{comment_id}/replies/{id} | Get a single reply



## repliesList

> \Phrase\Model\Comment[] repliesList($project_id, $key_id, $comment_id, $x_phrase_app_otp, $page, $per_page, $branch, $query, $filters, $order)

List replies

List all replies for a comment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\CommentRepliesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string | Project ID
$key_id = 'key_id_example'; // string | Translation Key ID
$comment_id = 'comment_id_example'; // string | Comment ID
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)
$page = 1; // int | Page number
$per_page = 25; // int | Limit on the number of objects to be returned, between 1 and 100. 25 by default
$branch = my-feature-branch; // string | specify the branch to use
$query = Some comment content; // string | Search query for comment messages
$filters = ["read","unread"]; // string[] | Specify the filter for the comments
$order = desc; // string | Order direction. Can be one of: asc, desc.

try {
    $result = $apiInstance->repliesList($project_id, $key_id, $comment_id, $x_phrase_app_otp, $page, $per_page, $branch, $query, $filters, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommentRepliesApi->repliesList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project ID |
 **key_id** | **string**| Translation Key ID |
 **comment_id** | **string**| Comment ID |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]
 **page** | **int**| Page number | [optional]
 **per_page** | **int**| Limit on the number of objects to be returned, between 1 and 100. 25 by default | [optional]
 **branch** | **string**| specify the branch to use | [optional]
 **query** | **string**| Search query for comment messages | [optional]
 **filters** | [**string[]**](../Model/string.md)| Specify the filter for the comments | [optional]
 **order** | **string**| Order direction. Can be one of: asc, desc. | [optional]

### Return type

[**\Phrase\Model\Comment[]**](../Model/Comment.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## replyCreate

> \Phrase\Model\Comment replyCreate($project_id, $key_id, $comment_id, $comment_create_parameters1, $x_phrase_app_otp)

Create a reply

Create a new reply for a comment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\CommentRepliesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string | Project ID
$key_id = 'key_id_example'; // string | Translation Key ID
$comment_id = 'comment_id_example'; // string | Comment ID
$comment_create_parameters1 = new \Phrase\Model\CommentCreateParameters1(); // \Phrase\Model\CommentCreateParameters1 | 
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)

try {
    $result = $apiInstance->replyCreate($project_id, $key_id, $comment_id, $comment_create_parameters1, $x_phrase_app_otp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommentRepliesApi->replyCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project ID |
 **key_id** | **string**| Translation Key ID |
 **comment_id** | **string**| Comment ID |
 **comment_create_parameters1** | [**\Phrase\Model\CommentCreateParameters1**](../Model/CommentCreateParameters1.md)|  |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]

### Return type

[**\Phrase\Model\Comment**](../Model/Comment.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## replyDelete

> replyDelete($project_id, $key_id, $comment_id, $id, $x_phrase_app_otp, $branch)

Delete a reply

Delete an existing reply.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\CommentRepliesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string | Project ID
$key_id = 'key_id_example'; // string | Translation Key ID
$comment_id = 'comment_id_example'; // string | Comment ID
$id = 'id_example'; // string | ID
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)
$branch = my-feature-branch; // string | specify the branch to use

try {
    $apiInstance->replyDelete($project_id, $key_id, $comment_id, $id, $x_phrase_app_otp, $branch);
} catch (Exception $e) {
    echo 'Exception when calling CommentRepliesApi->replyDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project ID |
 **key_id** | **string**| Translation Key ID |
 **comment_id** | **string**| Comment ID |
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


## replyMarkAsRead

> replyMarkAsRead($project_id, $key_id, $comment_id, $id, $x_phrase_app_otp, $branch)

Mark a reply as read

Mark a reply as read.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\CommentRepliesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string | Project ID
$key_id = 'key_id_example'; // string | Translation Key ID
$comment_id = 'comment_id_example'; // string | Comment ID
$id = 'id_example'; // string | ID
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)
$branch = my-feature-branch; // string | specify the branch to use

try {
    $apiInstance->replyMarkAsRead($project_id, $key_id, $comment_id, $id, $x_phrase_app_otp, $branch);
} catch (Exception $e) {
    echo 'Exception when calling CommentRepliesApi->replyMarkAsRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project ID |
 **key_id** | **string**| Translation Key ID |
 **comment_id** | **string**| Comment ID |
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


## replyMarkAsUnread

> replyMarkAsUnread($project_id, $key_id, $comment_id, $id, $x_phrase_app_otp, $branch)

Mark a reply as unread

Mark a reply as unread.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\CommentRepliesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string | Project ID
$key_id = 'key_id_example'; // string | Translation Key ID
$comment_id = 'comment_id_example'; // string | Comment ID
$id = 'id_example'; // string | ID
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)
$branch = my-feature-branch; // string | specify the branch to use

try {
    $apiInstance->replyMarkAsUnread($project_id, $key_id, $comment_id, $id, $x_phrase_app_otp, $branch);
} catch (Exception $e) {
    echo 'Exception when calling CommentRepliesApi->replyMarkAsUnread: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project ID |
 **key_id** | **string**| Translation Key ID |
 **comment_id** | **string**| Comment ID |
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


## replyShow

> \Phrase\Model\Comment replyShow($project_id, $key_id, $comment_id, $id, $x_phrase_app_otp, $branch)

Get a single reply

Get details on a single reply.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\CommentRepliesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string | Project ID
$key_id = 'key_id_example'; // string | Translation Key ID
$comment_id = 'comment_id_example'; // string | Comment ID
$id = 'id_example'; // string | ID
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)
$branch = my-feature-branch; // string | specify the branch to use

try {
    $result = $apiInstance->replyShow($project_id, $key_id, $comment_id, $id, $x_phrase_app_otp, $branch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommentRepliesApi->replyShow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project ID |
 **key_id** | **string**| Translation Key ID |
 **comment_id** | **string**| Comment ID |
 **id** | **string**| ID |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]
 **branch** | **string**| specify the branch to use | [optional]

### Return type

[**\Phrase\Model\Comment**](../Model/Comment.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

