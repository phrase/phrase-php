<?php
/**
 * GitHubSyncApi
 * PHP version 5
 *
 * @category Class
 * @package  Phrase
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Phrase Strings API Reference
 *
 * The version of the OpenAPI document: 2.0.0
 * Contact: support@phrase.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.3.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Phrase\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Phrase\ApiException;
use Phrase\Configuration;
use Phrase\HeaderSelector;
use Phrase\ObjectSerializer;

/**
 * GitHubSyncApi Class Doc Comment
 *
 * @category Class
 * @package  Phrase
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class GitHubSyncApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $host_index (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $host_index = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $host_index;
    }

    /**
     * Set the host index
     *
     * @param  int Host index (required)
     */
    public function setHostIndex($host_index)
    {
        $this->hostIndex = $host_index;
    }

    /**
     * Get the host index
     *
     * @return Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation githubSyncExport
     *
     * Export from Phrase Strings to GitHub
     *
     * @param  \Phrase\Model\GithubSyncExportParameters $github_sync_export_parameters github_sync_export_parameters (required)
     * @param  string $x_phrase_app_otp Two-Factor-Authentication token (optional) (optional)
     *
     * @throws \Phrase\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function githubSyncExport($github_sync_export_parameters, $x_phrase_app_otp = null)
    {
        $this->githubSyncExportWithHttpInfo($github_sync_export_parameters, $x_phrase_app_otp);
    }

    /**
     * Operation githubSyncExportWithHttpInfo
     *
     * Export from Phrase Strings to GitHub
     *
     * @param  \Phrase\Model\GithubSyncExportParameters $github_sync_export_parameters (required)
     * @param  string $x_phrase_app_otp Two-Factor-Authentication token (optional) (optional)
     *
     * @throws \Phrase\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function githubSyncExportWithHttpInfo($github_sync_export_parameters, $x_phrase_app_otp = null)
    {
        $request = $this->githubSyncExportRequest($github_sync_export_parameters, $x_phrase_app_otp);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 422:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Phrase\Model\InlineResponse422',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation githubSyncExportAsync
     *
     * Export from Phrase Strings to GitHub
     *
     * @param  \Phrase\Model\GithubSyncExportParameters $github_sync_export_parameters (required)
     * @param  string $x_phrase_app_otp Two-Factor-Authentication token (optional) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function githubSyncExportAsync($github_sync_export_parameters, $x_phrase_app_otp = null)
    {
        return $this->githubSyncExportAsyncWithHttpInfo($github_sync_export_parameters, $x_phrase_app_otp)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation githubSyncExportAsyncWithHttpInfo
     *
     * Export from Phrase Strings to GitHub
     *
     * @param  \Phrase\Model\GithubSyncExportParameters $github_sync_export_parameters (required)
     * @param  string $x_phrase_app_otp Two-Factor-Authentication token (optional) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function githubSyncExportAsyncWithHttpInfo($github_sync_export_parameters, $x_phrase_app_otp = null)
    {
        $returnType = '';
        $request = $this->githubSyncExportRequest($github_sync_export_parameters, $x_phrase_app_otp);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'githubSyncExport'
     *
     * @param  \Phrase\Model\GithubSyncExportParameters $github_sync_export_parameters (required)
     * @param  string $x_phrase_app_otp Two-Factor-Authentication token (optional) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function githubSyncExportRequest($github_sync_export_parameters, $x_phrase_app_otp = null)
    {
        // verify the required parameter 'github_sync_export_parameters' is set
        if ($github_sync_export_parameters === null || (is_array($github_sync_export_parameters) && count($github_sync_export_parameters) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $github_sync_export_parameters when calling githubSyncExport'
            );
        }

        $resourcePath = '/github_syncs/export';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // header params
        if ($x_phrase_app_otp !== null) {
            $headerParams['X-PhraseApp-OTP'] = ObjectSerializer::toHeaderValue($x_phrase_app_otp);
        }


        // body params
        $_tempBody = null;
        if (isset($github_sync_export_parameters)) {
            $_tempBody = $github_sync_export_parameters;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($_tempBody));
            } else {
                $httpBody = $_tempBody;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires HTTP basic authentication
        if (!empty($this->config->getUsername()) || !(empty($this->config->getPassword()))) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
        }
        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation githubSyncImport
     *
     * Import to Phrase Strings from GitHub
     *
     * @param  \Phrase\Model\GithubSyncImportParameters $github_sync_import_parameters github_sync_import_parameters (required)
     * @param  string $x_phrase_app_otp Two-Factor-Authentication token (optional) (optional)
     *
     * @throws \Phrase\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function githubSyncImport($github_sync_import_parameters, $x_phrase_app_otp = null)
    {
        $this->githubSyncImportWithHttpInfo($github_sync_import_parameters, $x_phrase_app_otp);
    }

    /**
     * Operation githubSyncImportWithHttpInfo
     *
     * Import to Phrase Strings from GitHub
     *
     * @param  \Phrase\Model\GithubSyncImportParameters $github_sync_import_parameters (required)
     * @param  string $x_phrase_app_otp Two-Factor-Authentication token (optional) (optional)
     *
     * @throws \Phrase\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function githubSyncImportWithHttpInfo($github_sync_import_parameters, $x_phrase_app_otp = null)
    {
        $request = $this->githubSyncImportRequest($github_sync_import_parameters, $x_phrase_app_otp);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 422:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Phrase\Model\InlineResponse422',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation githubSyncImportAsync
     *
     * Import to Phrase Strings from GitHub
     *
     * @param  \Phrase\Model\GithubSyncImportParameters $github_sync_import_parameters (required)
     * @param  string $x_phrase_app_otp Two-Factor-Authentication token (optional) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function githubSyncImportAsync($github_sync_import_parameters, $x_phrase_app_otp = null)
    {
        return $this->githubSyncImportAsyncWithHttpInfo($github_sync_import_parameters, $x_phrase_app_otp)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation githubSyncImportAsyncWithHttpInfo
     *
     * Import to Phrase Strings from GitHub
     *
     * @param  \Phrase\Model\GithubSyncImportParameters $github_sync_import_parameters (required)
     * @param  string $x_phrase_app_otp Two-Factor-Authentication token (optional) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function githubSyncImportAsyncWithHttpInfo($github_sync_import_parameters, $x_phrase_app_otp = null)
    {
        $returnType = '';
        $request = $this->githubSyncImportRequest($github_sync_import_parameters, $x_phrase_app_otp);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'githubSyncImport'
     *
     * @param  \Phrase\Model\GithubSyncImportParameters $github_sync_import_parameters (required)
     * @param  string $x_phrase_app_otp Two-Factor-Authentication token (optional) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function githubSyncImportRequest($github_sync_import_parameters, $x_phrase_app_otp = null)
    {
        // verify the required parameter 'github_sync_import_parameters' is set
        if ($github_sync_import_parameters === null || (is_array($github_sync_import_parameters) && count($github_sync_import_parameters) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $github_sync_import_parameters when calling githubSyncImport'
            );
        }

        $resourcePath = '/github_syncs/import';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // header params
        if ($x_phrase_app_otp !== null) {
            $headerParams['X-PhraseApp-OTP'] = ObjectSerializer::toHeaderValue($x_phrase_app_otp);
        }


        // body params
        $_tempBody = null;
        if (isset($github_sync_import_parameters)) {
            $_tempBody = $github_sync_import_parameters;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($_tempBody));
            } else {
                $httpBody = $_tempBody;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires HTTP basic authentication
        if (!empty($this->config->getUsername()) || !(empty($this->config->getPassword()))) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
        }
        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
    /**
     * Append to form params, handle object params
     */
    protected function formParamsAppend(&$formParams, $name, $value)
    {
        if (is_object($value)) {
            foreach ((array) $value as $k => $v) {
                $formParams[$name.'['.$k.']'] = ObjectSerializer::toFormValue($v);
            }

            return;
        }

        $formParams[$name] = ObjectSerializer::toFormValue($value);
    }
}
