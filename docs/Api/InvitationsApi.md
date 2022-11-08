# Phrase\InvitationsApi

All URIs are relative to *https://api.phrase.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**invitationCreate**](InvitationsApi.md#invitationCreate) | **POST** /accounts/{account_id}/invitations | Create a new invitation
[**invitationDelete**](InvitationsApi.md#invitationDelete) | **DELETE** /accounts/{account_id}/invitations/{id} | Delete an invitation
[**invitationResend**](InvitationsApi.md#invitationResend) | **POST** /accounts/{account_id}/invitations/{id}/resend | Resend an invitation
[**invitationShow**](InvitationsApi.md#invitationShow) | **GET** /accounts/{account_id}/invitations/{id} | Get a single invitation
[**invitationUpdate**](InvitationsApi.md#invitationUpdate) | **PATCH** /accounts/{account_id}/invitations/{id} | Update an invitation
[**invitationUpdateSettings**](InvitationsApi.md#invitationUpdateSettings) | **PATCH** /projects/{project_id}/invitations/{id} | Update a member&#39;s invitation access
[**invitationsList**](InvitationsApi.md#invitationsList) | **GET** /accounts/{account_id}/invitations | List invitations



## invitationCreate

> \Phrase\Model\Invitation invitationCreate($account_id, $invitation_create_parameters, $x_phrase_app_otp)

Create a new invitation

Invite a person to an account. Developers and translators need <code>project_ids</code> and <code>locale_ids</code> assigned to access them. Access token scope must include <code>team.manage</code>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\InvitationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Account ID
$invitation_create_parameters = new \Phrase\Model\InvitationCreateParameters(); // \Phrase\Model\InvitationCreateParameters | 
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)

try {
    $result = $apiInstance->invitationCreate($account_id, $invitation_create_parameters, $x_phrase_app_otp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvitationsApi->invitationCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| Account ID |
 **invitation_create_parameters** | [**\Phrase\Model\InvitationCreateParameters**](../Model/InvitationCreateParameters.md)|  |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]

### Return type

[**\Phrase\Model\Invitation**](../Model/Invitation.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## invitationDelete

> invitationDelete($account_id, $id, $x_phrase_app_otp)

Delete an invitation

Delete an existing invitation (must not be accepted yet). Access token scope must include <code>team.manage</code>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\InvitationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Account ID
$id = 'id_example'; // string | ID
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)

try {
    $apiInstance->invitationDelete($account_id, $id, $x_phrase_app_otp);
} catch (Exception $e) {
    echo 'Exception when calling InvitationsApi->invitationDelete: ', $e->getMessage(), PHP_EOL;
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


## invitationResend

> \Phrase\Model\Invitation invitationResend($account_id, $id, $x_phrase_app_otp)

Resend an invitation

Resend the invitation email (must not be accepted yet). Access token scope must include <code>team.manage</code>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\InvitationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Account ID
$id = 'id_example'; // string | ID
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)

try {
    $result = $apiInstance->invitationResend($account_id, $id, $x_phrase_app_otp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvitationsApi->invitationResend: ', $e->getMessage(), PHP_EOL;
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

[**\Phrase\Model\Invitation**](../Model/Invitation.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## invitationShow

> \Phrase\Model\Invitation invitationShow($account_id, $id, $x_phrase_app_otp)

Get a single invitation

Get details on a single invitation. Access token scope must include <code>team.manage</code>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\InvitationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Account ID
$id = 'id_example'; // string | ID
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)

try {
    $result = $apiInstance->invitationShow($account_id, $id, $x_phrase_app_otp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvitationsApi->invitationShow: ', $e->getMessage(), PHP_EOL;
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

[**\Phrase\Model\Invitation**](../Model/Invitation.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## invitationUpdate

> \Phrase\Model\Invitation invitationUpdate($account_id, $id, $invitation_update_parameters, $x_phrase_app_otp)

Update an invitation

Update an existing invitation (must not be accepted yet). The <code>email</code> cannot be updated. Developers and translators need <code>project_ids</code> and <code>locale_ids</code> assigned to access them. Access token scope must include <code>team.manage</code>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\InvitationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Account ID
$id = 'id_example'; // string | ID
$invitation_update_parameters = new \Phrase\Model\InvitationUpdateParameters(); // \Phrase\Model\InvitationUpdateParameters | 
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)

try {
    $result = $apiInstance->invitationUpdate($account_id, $id, $invitation_update_parameters, $x_phrase_app_otp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvitationsApi->invitationUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| Account ID |
 **id** | **string**| ID |
 **invitation_update_parameters** | [**\Phrase\Model\InvitationUpdateParameters**](../Model/InvitationUpdateParameters.md)|  |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]

### Return type

[**\Phrase\Model\Invitation**](../Model/Invitation.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## invitationUpdateSettings

> \Phrase\Model\Invitation invitationUpdateSettings($project_id, $id, $invitation_update_settings_parameters, $x_phrase_app_otp)

Update a member's invitation access

Update member's settings in the invitations. Access token scope must include <code>team.manage</code>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\InvitationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string | Project ID
$id = 'id_example'; // string | ID
$invitation_update_settings_parameters = new \Phrase\Model\InvitationUpdateSettingsParameters(); // \Phrase\Model\InvitationUpdateSettingsParameters | 
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)

try {
    $result = $apiInstance->invitationUpdateSettings($project_id, $id, $invitation_update_settings_parameters, $x_phrase_app_otp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvitationsApi->invitationUpdateSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project ID |
 **id** | **string**| ID |
 **invitation_update_settings_parameters** | [**\Phrase\Model\InvitationUpdateSettingsParameters**](../Model/InvitationUpdateSettingsParameters.md)|  |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]

### Return type

[**\Phrase\Model\Invitation**](../Model/Invitation.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## invitationsList

> \Phrase\Model\Invitation[] invitationsList($account_id, $x_phrase_app_otp, $page, $per_page)

List invitations

List invitations for an account. It will also list the accessible resources like projects and locales the invited user has access to. In case nothing is shown the default access from the role is used. Access token scope must include <code>team.manage</code>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\InvitationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Account ID
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)
$page = 1; // int | Page number
$per_page = 25; // int | Limit on the number of objects to be returned, between 1 and 100. 25 by default

try {
    $result = $apiInstance->invitationsList($account_id, $x_phrase_app_otp, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvitationsApi->invitationsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| Account ID |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]
 **page** | **int**| Page number | [optional]
 **per_page** | **int**| Limit on the number of objects to be returned, between 1 and 100. 25 by default | [optional]

### Return type

[**\Phrase\Model\Invitation[]**](../Model/Invitation.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

