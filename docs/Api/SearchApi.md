# Phrase\SearchApi

All URIs are relative to *https://api.phrase.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**searchInAccount**](SearchApi.md#searchInAccount) | **POST** /accounts/{account_id}/search | Search across projects



## searchInAccount

> \Phrase\Model\AccountSearchResult searchInAccount($account_id, $search_in_account_parameters, $x_phrase_app_otp)

Search across projects

Search for keys and translations in all account projects <br><br><i>Note: Search is limited to 10000 results and may not include recently updated data depending on the project sizes.</i>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Account ID
$search_in_account_parameters = new \Phrase\Model\SearchInAccountParameters(); // \Phrase\Model\SearchInAccountParameters | 
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)

try {
    $result = $apiInstance->searchInAccount($account_id, $search_in_account_parameters, $x_phrase_app_otp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->searchInAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| Account ID |
 **search_in_account_parameters** | [**\Phrase\Model\SearchInAccountParameters**](../Model/SearchInAccountParameters.md)|  |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]

### Return type

[**\Phrase\Model\AccountSearchResult**](../Model/AccountSearchResult.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

