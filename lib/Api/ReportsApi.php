<?php
/**
 * ReportsApi
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
 * OpenAPI Generator version: 7.0.1
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
 * ReportsApi Class Doc Comment
 *
 * @category Class
 * @package  Phrase
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ReportsApi
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
        ?ClientInterface $client = null,
        ?Configuration $config = null,
        ?HeaderSelector $selector = null,
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
     * Operation reportLocalesList
     *
     * List Locale Reports
     *
     * @param  string $project_id Project ID (required)
     * @param  string $x_phrase_app_otp Two-Factor-Authentication token (optional) (optional)
     * @param  int $page Page number (optional)
     * @param  int $per_page Limit on the number of objects to be returned, between 1 and 100. 25 by default (optional)
     * @param  string $locale_codes Locale Code (optional)
     * @param  string $tag tag (optional)
     * @param  string $branch specify the branch to use (optional)
     *
     * @throws \Phrase\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Phrase\Model\LocaleReport[]
     */
    public function reportLocalesList($project_id, $x_phrase_app_otp = null, $page = null, $per_page = null, $locale_codes = null, $tag = null, $branch = null)
    {
        list($response) = $this->reportLocalesListWithHttpInfo($project_id, $x_phrase_app_otp, $page, $per_page, $locale_codes, $tag, $branch);
        return $response;
    }

    /**
     * Operation reportLocalesListWithHttpInfo
     *
     * List Locale Reports
     *
     * @param  string $project_id Project ID (required)
     * @param  string $x_phrase_app_otp Two-Factor-Authentication token (optional) (optional)
     * @param  int $page Page number (optional)
     * @param  int $per_page Limit on the number of objects to be returned, between 1 and 100. 25 by default (optional)
     * @param  string $locale_codes Locale Code (optional)
     * @param  string $tag tag (optional)
     * @param  string $branch specify the branch to use (optional)
     *
     * @throws \Phrase\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Phrase\Model\LocaleReport[], HTTP status code, HTTP response headers (array of strings)
     */
    public function reportLocalesListWithHttpInfo($project_id, $x_phrase_app_otp = null, $page = null, $per_page = null, $locale_codes = null, $tag = null, $branch = null)
    {
        $request = $this->reportLocalesListRequest($project_id, $x_phrase_app_otp, $page, $per_page, $locale_codes, $tag, $branch);

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

            $responseBody = $response->getBody();
            switch($statusCode) {
                case 200:
                    if ('\Phrase\Model\LocaleReport[]' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Phrase\Model\LocaleReport[]', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Phrase\Model\LocaleReport[]';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = (string) $responseBody;
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Phrase\Model\LocaleReport[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation reportLocalesListAsync
     *
     * List Locale Reports
     *
     * @param  string $project_id Project ID (required)
     * @param  string $x_phrase_app_otp Two-Factor-Authentication token (optional) (optional)
     * @param  int $page Page number (optional)
     * @param  int $per_page Limit on the number of objects to be returned, between 1 and 100. 25 by default (optional)
     * @param  string $locale_codes Locale Code (optional)
     * @param  string $tag tag (optional)
     * @param  string $branch specify the branch to use (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function reportLocalesListAsync($project_id, $x_phrase_app_otp = null, $page = null, $per_page = null, $locale_codes = null, $tag = null, $branch = null)
    {
        return $this->reportLocalesListAsyncWithHttpInfo($project_id, $x_phrase_app_otp, $page, $per_page, $locale_codes, $tag, $branch)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation reportLocalesListAsyncWithHttpInfo
     *
     * List Locale Reports
     *
     * @param  string $project_id Project ID (required)
     * @param  string $x_phrase_app_otp Two-Factor-Authentication token (optional) (optional)
     * @param  int $page Page number (optional)
     * @param  int $per_page Limit on the number of objects to be returned, between 1 and 100. 25 by default (optional)
     * @param  string $locale_codes Locale Code (optional)
     * @param  string $tag tag (optional)
     * @param  string $branch specify the branch to use (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function reportLocalesListAsyncWithHttpInfo($project_id, $x_phrase_app_otp = null, $page = null, $per_page = null, $locale_codes = null, $tag = null, $branch = null)
    {
        $returnType = '\Phrase\Model\LocaleReport[]';
        $request = $this->reportLocalesListRequest($project_id, $x_phrase_app_otp, $page, $per_page, $locale_codes, $tag, $branch);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
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
     * Create request for operation 'reportLocalesList'
     *
     * @param  string $project_id Project ID (required)
     * @param  string $x_phrase_app_otp Two-Factor-Authentication token (optional) (optional)
     * @param  int $page Page number (optional)
     * @param  int $per_page Limit on the number of objects to be returned, between 1 and 100. 25 by default (optional)
     * @param  string $locale_codes Locale Code (optional)
     * @param  string $tag tag (optional)
     * @param  string $branch specify the branch to use (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function reportLocalesListRequest($project_id, $x_phrase_app_otp = null, $page = null, $per_page = null, $locale_codes = null, $tag = null, $branch = null)
    {
        // verify the required parameter 'project_id' is set
        if ($project_id === null || (is_array($project_id) && count($project_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $project_id when calling reportLocalesList'
            );
        }

        $resourcePath = '/projects/{project_id}/report/locales';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($page !== null) {
            if('form' === 'form' && is_array($page)) {
                foreach($page as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['page'] = $page;
            }
        }
        // query params
        if ($per_page !== null) {
            if('form' === 'form' && is_array($per_page)) {
                foreach($per_page as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['per_page'] = $per_page;
            }
        }
        // query params
        if ($locale_codes !== null) {
            if('form' === 'form' && is_array($locale_codes)) {
                foreach($locale_codes as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['locale_codes'] = $locale_codes;
            }
        }
        // query params
        if ($tag !== null) {
            if('form' === 'form' && is_array($tag)) {
                foreach($tag as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['tag'] = $tag;
            }
        }
        // query params
        if ($branch !== null) {
            if('form' === 'form' && is_array($branch)) {
                foreach($branch as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['branch'] = $branch;
            }
        }

        // header params
        if ($x_phrase_app_otp !== null) {
            $headerParams['X-PhraseApp-OTP'] = ObjectSerializer::toHeaderValue($x_phrase_app_otp);
        }

        // path params
        if ($project_id !== null) {
            $resourcePath = str_replace(
                '{' . 'project_id' . '}',
                ObjectSerializer::toPathValue($project_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
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

        $query = http_build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation reportShow
     *
     * Get Project Report
     *
     * @param  string $project_id Project ID (required)
     * @param  string $x_phrase_app_otp Two-Factor-Authentication token (optional) (optional)
     * @param  string $branch specify the branch to use (optional)
     *
     * @throws \Phrase\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Phrase\Model\ProjectReport
     */
    public function reportShow($project_id, $x_phrase_app_otp = null, $branch = null)
    {
        list($response) = $this->reportShowWithHttpInfo($project_id, $x_phrase_app_otp, $branch);
        return $response;
    }

    /**
     * Operation reportShowWithHttpInfo
     *
     * Get Project Report
     *
     * @param  string $project_id Project ID (required)
     * @param  string $x_phrase_app_otp Two-Factor-Authentication token (optional) (optional)
     * @param  string $branch specify the branch to use (optional)
     *
     * @throws \Phrase\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Phrase\Model\ProjectReport, HTTP status code, HTTP response headers (array of strings)
     */
    public function reportShowWithHttpInfo($project_id, $x_phrase_app_otp = null, $branch = null)
    {
        $request = $this->reportShowRequest($project_id, $x_phrase_app_otp, $branch);

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

            $responseBody = $response->getBody();
            switch($statusCode) {
                case 200:
                    if ('\Phrase\Model\ProjectReport' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Phrase\Model\ProjectReport', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Phrase\Model\ProjectReport';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = (string) $responseBody;
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Phrase\Model\ProjectReport',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation reportShowAsync
     *
     * Get Project Report
     *
     * @param  string $project_id Project ID (required)
     * @param  string $x_phrase_app_otp Two-Factor-Authentication token (optional) (optional)
     * @param  string $branch specify the branch to use (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function reportShowAsync($project_id, $x_phrase_app_otp = null, $branch = null)
    {
        return $this->reportShowAsyncWithHttpInfo($project_id, $x_phrase_app_otp, $branch)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation reportShowAsyncWithHttpInfo
     *
     * Get Project Report
     *
     * @param  string $project_id Project ID (required)
     * @param  string $x_phrase_app_otp Two-Factor-Authentication token (optional) (optional)
     * @param  string $branch specify the branch to use (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function reportShowAsyncWithHttpInfo($project_id, $x_phrase_app_otp = null, $branch = null)
    {
        $returnType = '\Phrase\Model\ProjectReport';
        $request = $this->reportShowRequest($project_id, $x_phrase_app_otp, $branch);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
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
     * Create request for operation 'reportShow'
     *
     * @param  string $project_id Project ID (required)
     * @param  string $x_phrase_app_otp Two-Factor-Authentication token (optional) (optional)
     * @param  string $branch specify the branch to use (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function reportShowRequest($project_id, $x_phrase_app_otp = null, $branch = null)
    {
        // verify the required parameter 'project_id' is set
        if ($project_id === null || (is_array($project_id) && count($project_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $project_id when calling reportShow'
            );
        }

        $resourcePath = '/projects/{project_id}/report';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($branch !== null) {
            if('form' === 'form' && is_array($branch)) {
                foreach($branch as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['branch'] = $branch;
            }
        }

        // header params
        if ($x_phrase_app_otp !== null) {
            $headerParams['X-PhraseApp-OTP'] = ObjectSerializer::toHeaderValue($x_phrase_app_otp);
        }

        // path params
        if ($project_id !== null) {
            $resourcePath = str_replace(
                '{' . 'project_id' . '}',
                ObjectSerializer::toPathValue($project_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
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

        $query = http_build_query($queryParams);
        return new Request(
            'GET',
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
        $formValues = ObjectSerializer::toFormValues($name, $value);
        foreach ($formValues as $k => $v) {
            $formParams[$k] = $v;
        }
    }
}
