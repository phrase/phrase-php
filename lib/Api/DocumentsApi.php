<?php
/**
 * DocumentsApi
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
 * DocumentsApi Class Doc Comment
 *
 * @category Class
 * @package  Phrase
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DocumentsApi
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
     * Operation documentDelete
     *
     * Delete document
     *
     * @param  string $project_id Project ID (required)
     * @param  string $id ID (required)
     * @param  string $x_phrase_app_otp Two-Factor-Authentication token (optional) (optional)
     *
     * @throws \Phrase\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function documentDelete($project_id, $id, $x_phrase_app_otp = null)
    {
        $this->documentDeleteWithHttpInfo($project_id, $id, $x_phrase_app_otp);
    }

    /**
     * Operation documentDeleteWithHttpInfo
     *
     * Delete document
     *
     * @param  string $project_id Project ID (required)
     * @param  string $id ID (required)
     * @param  string $x_phrase_app_otp Two-Factor-Authentication token (optional) (optional)
     *
     * @throws \Phrase\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function documentDeleteWithHttpInfo($project_id, $id, $x_phrase_app_otp = null)
    {
        $request = $this->documentDeleteRequest($project_id, $id, $x_phrase_app_otp);

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
            }
            throw $e;
        }
    }

    /**
     * Operation documentDeleteAsync
     *
     * Delete document
     *
     * @param  string $project_id Project ID (required)
     * @param  string $id ID (required)
     * @param  string $x_phrase_app_otp Two-Factor-Authentication token (optional) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function documentDeleteAsync($project_id, $id, $x_phrase_app_otp = null)
    {
        return $this->documentDeleteAsyncWithHttpInfo($project_id, $id, $x_phrase_app_otp)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation documentDeleteAsyncWithHttpInfo
     *
     * Delete document
     *
     * @param  string $project_id Project ID (required)
     * @param  string $id ID (required)
     * @param  string $x_phrase_app_otp Two-Factor-Authentication token (optional) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function documentDeleteAsyncWithHttpInfo($project_id, $id, $x_phrase_app_otp = null)
    {
        $returnType = '';
        $request = $this->documentDeleteRequest($project_id, $id, $x_phrase_app_otp);

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
     * Create request for operation 'documentDelete'
     *
     * @param  string $project_id Project ID (required)
     * @param  string $id ID (required)
     * @param  string $x_phrase_app_otp Two-Factor-Authentication token (optional) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function documentDeleteRequest($project_id, $id, $x_phrase_app_otp = null)
    {
        // verify the required parameter 'project_id' is set
        if ($project_id === null || (is_array($project_id) && count($project_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $project_id when calling documentDelete'
            );
        }
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling documentDelete'
            );
        }

        $resourcePath = '/projects/{project_id}/documents/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


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
        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                []
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                [],
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
            'DELETE',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation documentsList
     *
     * List documents
     *
     * @param  string $project_id Project ID (required)
     * @param  string $x_phrase_app_otp Two-Factor-Authentication token (optional) (optional)
     * @param  int $page Page number (optional)
     * @param  int $per_page Limit on the number of objects to be returned, between 1 and 100. 25 by default (optional)
     *
     * @throws \Phrase\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Phrase\Model\Document[]
     */
    public function documentsList($project_id, $x_phrase_app_otp = null, $page = null, $per_page = null)
    {
        list($response) = $this->documentsListWithHttpInfo($project_id, $x_phrase_app_otp, $page, $per_page);
        return $response;
    }

    /**
     * Operation documentsListWithHttpInfo
     *
     * List documents
     *
     * @param  string $project_id Project ID (required)
     * @param  string $x_phrase_app_otp Two-Factor-Authentication token (optional) (optional)
     * @param  int $page Page number (optional)
     * @param  int $per_page Limit on the number of objects to be returned, between 1 and 100. 25 by default (optional)
     *
     * @throws \Phrase\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Phrase\Model\Document[], HTTP status code, HTTP response headers (array of strings)
     */
    public function documentsListWithHttpInfo($project_id, $x_phrase_app_otp = null, $page = null, $per_page = null)
    {
        $request = $this->documentsListRequest($project_id, $x_phrase_app_otp, $page, $per_page);

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
                    if ('\Phrase\Model\Document[]' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Phrase\Model\Document[]', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Phrase\Model\Document[]';
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
                        '\Phrase\Model\Document[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation documentsListAsync
     *
     * List documents
     *
     * @param  string $project_id Project ID (required)
     * @param  string $x_phrase_app_otp Two-Factor-Authentication token (optional) (optional)
     * @param  int $page Page number (optional)
     * @param  int $per_page Limit on the number of objects to be returned, between 1 and 100. 25 by default (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function documentsListAsync($project_id, $x_phrase_app_otp = null, $page = null, $per_page = null)
    {
        return $this->documentsListAsyncWithHttpInfo($project_id, $x_phrase_app_otp, $page, $per_page)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation documentsListAsyncWithHttpInfo
     *
     * List documents
     *
     * @param  string $project_id Project ID (required)
     * @param  string $x_phrase_app_otp Two-Factor-Authentication token (optional) (optional)
     * @param  int $page Page number (optional)
     * @param  int $per_page Limit on the number of objects to be returned, between 1 and 100. 25 by default (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function documentsListAsyncWithHttpInfo($project_id, $x_phrase_app_otp = null, $page = null, $per_page = null)
    {
        $returnType = '\Phrase\Model\Document[]';
        $request = $this->documentsListRequest($project_id, $x_phrase_app_otp, $page, $per_page);

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
     * Create request for operation 'documentsList'
     *
     * @param  string $project_id Project ID (required)
     * @param  string $x_phrase_app_otp Two-Factor-Authentication token (optional) (optional)
     * @param  int $page Page number (optional)
     * @param  int $per_page Limit on the number of objects to be returned, between 1 and 100. 25 by default (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function documentsListRequest($project_id, $x_phrase_app_otp = null, $page = null, $per_page = null)
    {
        // verify the required parameter 'project_id' is set
        if ($project_id === null || (is_array($project_id) && count($project_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $project_id when calling documentsList'
            );
        }

        $resourcePath = '/projects/{project_id}/documents';
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
