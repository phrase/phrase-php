# Phrase\QualityPerformanceScoreApi

All URIs are relative to *https://api.phrase.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**projectsQualityPerformanceScore**](QualityPerformanceScoreApi.md#projectsQualityPerformanceScore) | **POST** /projects/{project_id}/quality_performance_score | Get Translation Quality



## projectsQualityPerformanceScore

> \Phrase\Model\ProjectsQualityPerformanceScore200Response projectsQualityPerformanceScore($project_id, $projects_quality_performance_score_request, $x_phrase_app_otp)

Get Translation Quality

Retrieves the quality scores for your Strings translations. Returns a score, measured by Phrase QPS

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Phrase\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = Phrase\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'token');

$apiInstance = new Phrase\Api\QualityPerformanceScoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string | Project ID
$projects_quality_performance_score_request = new \Phrase\Model\ProjectsQualityPerformanceScoreRequest(); // \Phrase\Model\ProjectsQualityPerformanceScoreRequest | 
$x_phrase_app_otp = 'x_phrase_app_otp_example'; // string | Two-Factor-Authentication token (optional)

try {
    $result = $apiInstance->projectsQualityPerformanceScore($project_id, $projects_quality_performance_score_request, $x_phrase_app_otp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QualityPerformanceScoreApi->projectsQualityPerformanceScore: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| Project ID |
 **projects_quality_performance_score_request** | [**\Phrase\Model\ProjectsQualityPerformanceScoreRequest**](../Model/ProjectsQualityPerformanceScoreRequest.md)|  |
 **x_phrase_app_otp** | **string**| Two-Factor-Authentication token (optional) | [optional]

### Return type

[**\Phrase\Model\ProjectsQualityPerformanceScore200Response**](../Model/ProjectsQualityPerformanceScore200Response.md)

### Authorization

[Basic](../../README.md#Basic), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

