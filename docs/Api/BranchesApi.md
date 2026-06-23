# Phrase\BranchesApi

All URIs are relative to *https://api.phrase.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**branchCompare**](BranchesApi.md#branchCompare) | **GET** /projects/{project_id}/branches/{name}/compare | Compare branches
[**branchComparisonCreate**](BranchesApi.md#branchComparisonCreate) | **POST** /projects/{project_id}/branches/{name}/compare | Create comparison (async.)
[**branchCreate**](BranchesApi.md#branchCreate) | **POST** /projects/{project_id}/branches | Create a branch
[**branchDelete**](BranchesApi.md#branchDelete) | **DELETE** /projects/{project_id}/branches/{name} | Delete a branch
[**branchMerge**](BranchesApi.md#branchMerge) | **PATCH** /projects/{project_id}/branches/{name}/merge | Merge a branch
[**branchShow**](BranchesApi.md#branchShow) | **GET** /projects/{project_id}/branches/{name} | Get a single branch
[**branchSync**](BranchesApi.md#branchSync) | **PATCH** /projects/{project_id}/branches/{name}/sync | Sync a branch
[**branchUpdate**](BranchesApi.md#branchUpdate) | **PATCH** /projects/{project_id}/branches/{name} | Update a branch
[**branchesList**](BranchesApi.md#branchesList) | **GET** /projects/{project_id}/branches | List branches



## branchCompare

> \Phrase\Model\BranchComparison branchCompare($project_id, $name, $x_phrase_app_otp)

Compare branches

Compare branch with main branch.  *Note: Comparing a branch may take several minutes depending on the project size. Consider using the `POST /compare` endpoint for creating comparison asynchronously.*

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\BranchesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string | Project ID
$name = 'name_example'; // string | name
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)

try {
    $result = $apiInstance->branchCompare($project_id, $name, $x_phrase_app_otp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BranchesApi->branchCompare: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project ID |
 **name** | **string**| name |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]

### Return type

[**\Phrase\Model\BranchComparison**](../Model/BranchComparison.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## branchComparisonCreate

> branchComparisonCreate($project_id, $name, $branch_create_comparison_parameters, $x_phrase_app_otp)

Create comparison (async.)

Create a branch comparison asynchronously.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\BranchesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string | Project ID
$name = 'name_example'; // string | name
$branch_create_comparison_parameters = new \Phrase\Model\BranchCreateComparisonParameters(); // \Phrase\Model\BranchCreateComparisonParameters | 
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)

try {
    $apiInstance->branchComparisonCreate($project_id, $name, $branch_create_comparison_parameters, $x_phrase_app_otp);
} catch (Exception $e) {
    echo 'Exception when calling BranchesApi->branchComparisonCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project ID |
 **name** | **string**| name |
 **branch_create_comparison_parameters** | [**\Phrase\Model\BranchCreateComparisonParameters**](../Model/BranchCreateComparisonParameters.md)|  |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]

### Return type

void (empty response body)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## branchCreate

> \Phrase\Model\Branch branchCreate($project_id, $branch_create_parameters, $x_phrase_app_otp)

Create a branch

Create a new branch.  Branch project provisioning runs asynchronously, so the newly created branch is returned in a transitional state (typically `creating_branch`) and only reaches `success` once the underlying project has been set up. Poll the branch resource until its `state` becomes `success` before performing further operations on it.  Requires the Branching feature to be enabled on the account.  *Note: Creating a new branch may take several minutes depending on the project size.*

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\BranchesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string | Project ID
$branch_create_parameters = new \Phrase\Model\BranchCreateParameters(); // \Phrase\Model\BranchCreateParameters | 
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)

try {
    $result = $apiInstance->branchCreate($project_id, $branch_create_parameters, $x_phrase_app_otp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BranchesApi->branchCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project ID |
 **branch_create_parameters** | [**\Phrase\Model\BranchCreateParameters**](../Model/BranchCreateParameters.md)|  |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]

### Return type

[**\Phrase\Model\Branch**](../Model/Branch.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## branchDelete

> branchDelete($project_id, $name, $x_phrase_app_otp)

Delete a branch

Delete an existing branch.  A branch cannot be deleted while it still has open jobs or open translation orders attached to its branch project — in that case the request is rejected with `409 Conflict`. A branch whose current `state` does not allow deletion (for example, while a merge or sync is in progress) is rejected with `422 Unprocessable Entity`.  Requires the Branching feature to be enabled on the account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\BranchesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string | Project ID
$name = 'name_example'; // string | name
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)

try {
    $apiInstance->branchDelete($project_id, $name, $x_phrase_app_otp);
} catch (Exception $e) {
    echo 'Exception when calling BranchesApi->branchDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project ID |
 **name** | **string**| name |
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


## branchMerge

> branchMerge($project_id, $name, $branch_merge_parameters, $x_phrase_app_otp)

Merge a branch

Merge an existing branch back into its base branch.  The merge runs asynchronously. The branch transitions to `merging_branch` and settles in `merged`, `merge_error`, or `merge_conflict` once the background job completes; the response body for this request is empty. Poll the branch resource to observe the final state.  A branch cannot be merged while it still has open jobs or open translation orders attached to its branch project — in that case the request is rejected with `409 Conflict`. A branch whose current `state` does not allow a merge is rejected with `422 Unprocessable Entity`.  Requires the Branching feature to be enabled on the account.  *Note: Merging a branch may take several minutes depending on diff size.*

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\BranchesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string | Project ID
$name = 'name_example'; // string | name
$branch_merge_parameters = new \Phrase\Model\BranchMergeParameters(); // \Phrase\Model\BranchMergeParameters | 
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)

try {
    $apiInstance->branchMerge($project_id, $name, $branch_merge_parameters, $x_phrase_app_otp);
} catch (Exception $e) {
    echo 'Exception when calling BranchesApi->branchMerge: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project ID |
 **name** | **string**| name |
 **branch_merge_parameters** | [**\Phrase\Model\BranchMergeParameters**](../Model/BranchMergeParameters.md)|  |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]

### Return type

void (empty response body)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## branchShow

> \Phrase\Model\Branch branchShow($project_id, $name, $x_phrase_app_otp)

Get a single branch

Get details on a single branch for a given project.  Requires the Branching feature to be enabled on the account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\BranchesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string | Project ID
$name = 'name_example'; // string | name
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)

try {
    $result = $apiInstance->branchShow($project_id, $name, $x_phrase_app_otp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BranchesApi->branchShow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project ID |
 **name** | **string**| name |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]

### Return type

[**\Phrase\Model\Branch**](../Model/Branch.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## branchSync

> branchSync($project_id, $name, $branch_sync_parameters, $x_phrase_app_otp)

Sync a branch

Pull changes from the base branch into this branch, applying the chosen conflict-resolution strategy.  The sync runs asynchronously. The branch transitions to `syncing_branch` and settles back into `success` (or `merge_conflict` / `branch_error`) once the background job completes; the response body for this request is empty. Poll the branch resource to observe the final state.  Only branches created with the newer branching system can be synced. Requests against branches from the older system, or against branches whose current state does not allow a sync, are rejected with `422 Unprocessable Entity` and an empty body.  Requires the Branching feature to be enabled on the account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\BranchesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string | Project ID
$name = 'name_example'; // string | name
$branch_sync_parameters = new \Phrase\Model\BranchSyncParameters(); // \Phrase\Model\BranchSyncParameters | 
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)

try {
    $apiInstance->branchSync($project_id, $name, $branch_sync_parameters, $x_phrase_app_otp);
} catch (Exception $e) {
    echo 'Exception when calling BranchesApi->branchSync: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project ID |
 **name** | **string**| name |
 **branch_sync_parameters** | [**\Phrase\Model\BranchSyncParameters**](../Model/BranchSyncParameters.md)|  |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]

### Return type

void (empty response body)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## branchUpdate

> \Phrase\Model\Branch branchUpdate($project_id, $name, $branch_update_parameters, $x_phrase_app_otp)

Update a branch

Update an existing branch. Only the branch name can be changed.  Requires the Branching feature to be enabled on the account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\BranchesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string | Project ID
$name = 'name_example'; // string | name
$branch_update_parameters = new \Phrase\Model\BranchUpdateParameters(); // \Phrase\Model\BranchUpdateParameters | 
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)

try {
    $result = $apiInstance->branchUpdate($project_id, $name, $branch_update_parameters, $x_phrase_app_otp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BranchesApi->branchUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project ID |
 **name** | **string**| name |
 **branch_update_parameters** | [**\Phrase\Model\BranchUpdateParameters**](../Model/BranchUpdateParameters.md)|  |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]

### Return type

[**\Phrase\Model\Branch**](../Model/Branch.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## branchesList

> \Phrase\Model\Branch[] branchesList($project_id, $x_phrase_app_otp, $page, $per_page)

List branches

List all branches of the current project.  Requires the Branching feature to be enabled on the account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\BranchesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string | Project ID
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)
$page = 1; // int | Page number
$per_page = 25; // int | Limit on the number of objects to be returned, between 1 and 100. 25 by default

try {
    $result = $apiInstance->branchesList($project_id, $x_phrase_app_otp, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BranchesApi->branchesList: ', $e->getMessage(), PHP_EOL;
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

### Return type

[**\Phrase\Model\Branch[]**](../Model/Branch.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

