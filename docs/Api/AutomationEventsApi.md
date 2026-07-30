# Phrase\AutomationEventsApi

All URIs are relative to *https://api.phrase.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountAutomationEventsList**](AutomationEventsApi.md#accountAutomationEventsList) | **GET** /accounts/{account_id}/automation_events | List automation events for an account
[**automationEventsList**](AutomationEventsApi.md#automationEventsList) | **GET** /accounts/{account_id}/automations/{automation_id}/events | List events for an automation



## accountAutomationEventsList

> \Phrase\Model\AutomationEvent[] accountAutomationEventsList($account_id, $x_phrase_app_otp, $page, $per_page, $automation_id, $state, $triggered_by, $project_id, $project_ids, $created_after, $created_before)

List automation events for an account

Returns the run history across all automations in the account, newest-first.  Use `automation_id` to narrow results to a single automation. Use `project_id` or `project_ids` to narrow by project.  For feature availability, see [Jobs (Strings)](https://support.phrase.com/hc/en-us/articles/5784100517788-Jobs-Strings).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\AutomationEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Account ID
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)
$page = 1; // int | Page number
$per_page = 25; // int | Limit on the number of objects to be returned, between 1 and 100. 25 by default
$automation_id = 'automation_id_example'; // string | Filter events to a single automation by its ID.
$state = 'state_example'; // string | Filter events by outcome state. Unrecognized values are ignored.
$triggered_by = 'triggered_by_example'; // string | Filter events by what triggered the automation run. Unrecognized values are ignored.
$project_id = 'project_id_example'; // string | Filter events by project ID. Accepts a single ID or a comma-separated list of IDs.
$project_ids = array('project_ids_example'); // string[] | Filter events by one or more project IDs.
$created_after = 2023-01-01T00:00:00Z; // string | Return only events created after this ISO 8601 timestamp. Returns 400 if the value is not a valid date-time.
$created_before = 2023-01-01T00:00:00Z; // string | Return only events created before this ISO 8601 timestamp. Returns 400 if the value is not a valid date-time.

try {
    $result = $apiInstance->accountAutomationEventsList($account_id, $x_phrase_app_otp, $page, $per_page, $automation_id, $state, $triggered_by, $project_id, $project_ids, $created_after, $created_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutomationEventsApi->accountAutomationEventsList: ', $e->getMessage(), PHP_EOL;
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
 **automation_id** | **string**| Filter events to a single automation by its ID. | [optional]
 **state** | **string**| Filter events by outcome state. Unrecognized values are ignored. | [optional]
 **triggered_by** | **string**| Filter events by what triggered the automation run. Unrecognized values are ignored. | [optional]
 **project_id** | **string**| Filter events by project ID. Accepts a single ID or a comma-separated list of IDs. | [optional]
 **project_ids** | [**string[]**](../Model/string.md)| Filter events by one or more project IDs. | [optional]
 **created_after** | **string**| Return only events created after this ISO 8601 timestamp. Returns 400 if the value is not a valid date-time. | [optional]
 **created_before** | **string**| Return only events created before this ISO 8601 timestamp. Returns 400 if the value is not a valid date-time. | [optional]

### Return type

[**\Phrase\Model\AutomationEvent[]**](../Model/AutomationEvent.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## automationEventsList

> \Phrase\Model\AutomationEvent[] automationEventsList($account_id, $id, $x_phrase_app_otp, $page, $per_page, $state, $triggered_by, $project_id, $project_ids, $created_after, $created_before)

List events for an automation

Returns the run history for a specific automation, newest-first.  For feature availability, see [Jobs (Strings)](https://support.phrase.com/hc/en-us/articles/5784100517788-Jobs-Strings).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\AutomationEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Account ID
$id = 'id_example'; // string | ID
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)
$page = 1; // int | Page number
$per_page = 25; // int | Limit on the number of objects to be returned, between 1 and 100. 25 by default
$state = 'state_example'; // string | Filter events by outcome state. Unrecognized values are ignored.
$triggered_by = 'triggered_by_example'; // string | Filter events by what triggered the automation run. Unrecognized values are ignored.
$project_id = 'project_id_example'; // string | Filter events by project ID. Accepts a single ID or a comma-separated list of IDs.
$project_ids = array('project_ids_example'); // string[] | Filter events by one or more project IDs.
$created_after = 2023-01-01T00:00:00Z; // string | Return only events created after this ISO 8601 timestamp. Returns 400 if the value is not a valid date-time.
$created_before = 2023-01-01T00:00:00Z; // string | Return only events created before this ISO 8601 timestamp. Returns 400 if the value is not a valid date-time.

try {
    $result = $apiInstance->automationEventsList($account_id, $id, $x_phrase_app_otp, $page, $per_page, $state, $triggered_by, $project_id, $project_ids, $created_after, $created_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutomationEventsApi->automationEventsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| Account ID |
 **id** | **string**| ID |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]
 **page** | **int**| Page number | [optional]
 **per_page** | **int**| Limit on the number of objects to be returned, between 1 and 100. 25 by default | [optional]
 **state** | **string**| Filter events by outcome state. Unrecognized values are ignored. | [optional]
 **triggered_by** | **string**| Filter events by what triggered the automation run. Unrecognized values are ignored. | [optional]
 **project_id** | **string**| Filter events by project ID. Accepts a single ID or a comma-separated list of IDs. | [optional]
 **project_ids** | [**string[]**](../Model/string.md)| Filter events by one or more project IDs. | [optional]
 **created_after** | **string**| Return only events created after this ISO 8601 timestamp. Returns 400 if the value is not a valid date-time. | [optional]
 **created_before** | **string**| Return only events created before this ISO 8601 timestamp. Returns 400 if the value is not a valid date-time. | [optional]

### Return type

[**\Phrase\Model\AutomationEvent[]**](../Model/AutomationEvent.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

