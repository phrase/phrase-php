<?php
/**
 * KeysFigmaAttachmentsApi
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
 * KeysFigmaAttachmentsApi Class Doc Comment
 *
 * @category Class
 * @package  Phrase
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class KeysFigmaAttachmentsApi
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
     * Operation figmaAttachmentAttachToKey
     *
     * Attach the Figma attachment to a key
     *
     * @param  string $project_id Project ID (required)
     * @param  string $figma_attachment_id Figma attachment ID (required)
     * @param  string $id ID (required)
     * @param  string $x_phrase_app_otp Two-Factor-Authentication token (optional) (optional)
     * @param  string $branch specify the branch to use (optional)
     *
     * @throws \Phrase\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function figmaAttachmentAttachToKey($project_id, $figma_attachment_id, $id, $x_phrase_app_otp = null, $branch = null)
    {
        $this->figmaAttachmentAttachToKeyWithHttpInfo($project_id, $figma_attachment_id, $id, $x_phrase_app_otp, $branch);
    }

    /**
     * Operation figmaAttachmentAttachToKeyWithHttpInfo
     *
     * Attach the Figma attachment to a key
     *
     * @param  string $project_id Project ID (required)
     * @param  string $figma_attachment_id Figma attachment ID (required)
     * @param  string $id ID (required)
     * @param  string $x_phrase_app_otp Two-Factor-Authentication token (optional) (optional)
     * @param  string $branch specify the branch to use (optional)
     *
     * @throws \Phrase\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function figmaAttachmentAttachToKeyWithHttpInfo($project_id, $figma_attachment_id, $id, $x_phrase_app_otp = null, $branch = null)
    {
        $request = $this->figmaAttachmentAttachToKeyRequest($project_id, $figma_attachment_id, $id, $x_phrase_app_otp, $branch);

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
     * Operation figmaAttachmentAttachToKeyAsync
     *
     * Attach the Figma attachment to a key
     *
     * @param  string $project_id Project ID (required)
     * @param  string $figma_attachment_id Figma attachment ID (required)
     * @param  string $id ID (required)
     * @param  string $x_phrase_app_otp Two-Factor-Authentication token (optional) (optional)
     * @param  string $branch specify the branch to use (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function figmaAttachmentAttachToKeyAsync($project_id, $figma_attachment_id, $id, $x_phrase_app_otp = null, $branch = null)
    {
        return $this->figmaAttachmentAttachToKeyAsyncWithHttpInfo($project_id, $figma_attachment_id, $id, $x_phrase_app_otp, $branch)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation figmaAttachmentAttachToKeyAsyncWithHttpInfo
     *
     * Attach the Figma attachment to a key
     *
     * @param  string $project_id Project ID (required)
     * @param  string $figma_attachment_id Figma attachment ID (required)
     * @param  string $id ID (required)
     * @param  string $x_phrase_app_otp Two-Factor-Authentication token (optional) (optional)
     * @param  string $branch specify the branch to use (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function figmaAttachmentAttachToKeyAsyncWithHttpInfo($project_id, $figma_attachment_id, $id, $x_phrase_app_otp = null, $branch = null)
    {
        $returnType = '';
        $request = $this->figmaAttachmentAttachToKeyRequest($project_id, $figma_attachment_id, $id, $x_phrase_app_otp, $branch);

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
     * Create request for operation 'figmaAttachmentAttachToKey'
     *
     * @param  string $project_id Project ID (required)
     * @param  string $figma_attachment_id Figma attachment ID (required)
     * @param  string $id ID (required)
     * @param  string $x_phrase_app_otp Two-Factor-Authentication token (optional) (optional)
     * @param  string $branch specify the branch to use (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function figmaAttachmentAttachToKeyRequest($project_id, $figma_attachment_id, $id, $x_phrase_app_otp = null, $branch = null)
    {
        // verify the required parameter 'project_id' is set
        if ($project_id === null || (is_array($project_id) && count($project_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $project_id when calling figmaAttachmentAttachToKey'
            );
        }
        // verify the required parameter 'figma_attachment_id' is set
        if ($figma_attachment_id === null || (is_array($figma_attachment_id) && count($figma_attachment_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $figma_attachment_id when calling figmaAttachmentAttachToKey'
            );
        }
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling figmaAttachmentAttachToKey'
            );
        }

        $resourcePath = '/projects/{project_id}/figma_attachments/{figma_attachment_id}/keys';
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
        // path params
        if ($figma_attachment_id !== null) {
            $resourcePath = str_replace(
                '{' . 'figma_attachment_id' . '}',
                ObjectSerializer::toPathValue($figma_attachment_id),
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
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation figmaAttachmentDetachFromKey
     *
     * Detach the Figma attachment from a key
     *
     * @param  string $project_id Project ID (required)
     * @param  string $figma_attachment_id Figma attachment ID (required)
     * @param  string $id ID (required)
     * @param  string $x_phrase_app_otp Two-Factor-Authentication token (optional) (optional)
     * @param  string $branch specify the branch to use (optional)
     *
     * @throws \Phrase\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function figmaAttachmentDetachFromKey($project_id, $figma_attachment_id, $id, $x_phrase_app_otp = null, $branch = null)
    {
        $this->figmaAttachmentDetachFromKeyWithHttpInfo($project_id, $figma_attachment_id, $id, $x_phrase_app_otp, $branch);
    }

    /**
     * Operation figmaAttachmentDetachFromKeyWithHttpInfo
     *
     * Detach the Figma attachment from a key
     *
     * @param  string $project_id Project ID (required)
     * @param  string $figma_attachment_id Figma attachment ID (required)
     * @param  string $id ID (required)
     * @param  string $x_phrase_app_otp Two-Factor-Authentication token (optional) (optional)
     * @param  string $branch specify the branch to use (optional)
     *
     * @throws \Phrase\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function figmaAttachmentDetachFromKeyWithHttpInfo($project_id, $figma_attachment_id, $id, $x_phrase_app_otp = null, $branch = null)
    {
        $request = $this->figmaAttachmentDetachFromKeyRequest($project_id, $figma_attachment_id, $id, $x_phrase_app_otp, $branch);

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
     * Operation figmaAttachmentDetachFromKeyAsync
     *
     * Detach the Figma attachment from a key
     *
     * @param  string $project_id Project ID (required)
     * @param  string $figma_attachment_id Figma attachment ID (required)
     * @param  string $id ID (required)
     * @param  string $x_phrase_app_otp Two-Factor-Authentication token (optional) (optional)
     * @param  string $branch specify the branch to use (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function figmaAttachmentDetachFromKeyAsync($project_id, $figma_attachment_id, $id, $x_phrase_app_otp = null, $branch = null)
    {
        return $this->figmaAttachmentDetachFromKeyAsyncWithHttpInfo($project_id, $figma_attachment_id, $id, $x_phrase_app_otp, $branch)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation figmaAttachmentDetachFromKeyAsyncWithHttpInfo
     *
     * Detach the Figma attachment from a key
     *
     * @param  string $project_id Project ID (required)
     * @param  string $figma_attachment_id Figma attachment ID (required)
     * @param  string $id ID (required)
     * @param  string $x_phrase_app_otp Two-Factor-Authentication token (optional) (optional)
     * @param  string $branch specify the branch to use (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function figmaAttachmentDetachFromKeyAsyncWithHttpInfo($project_id, $figma_attachment_id, $id, $x_phrase_app_otp = null, $branch = null)
    {
        $returnType = '';
        $request = $this->figmaAttachmentDetachFromKeyRequest($project_id, $figma_attachment_id, $id, $x_phrase_app_otp, $branch);

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
     * Create request for operation 'figmaAttachmentDetachFromKey'
     *
     * @param  string $project_id Project ID (required)
     * @param  string $figma_attachment_id Figma attachment ID (required)
     * @param  string $id ID (required)
     * @param  string $x_phrase_app_otp Two-Factor-Authentication token (optional) (optional)
     * @param  string $branch specify the branch to use (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function figmaAttachmentDetachFromKeyRequest($project_id, $figma_attachment_id, $id, $x_phrase_app_otp = null, $branch = null)
    {
        // verify the required parameter 'project_id' is set
        if ($project_id === null || (is_array($project_id) && count($project_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $project_id when calling figmaAttachmentDetachFromKey'
            );
        }
        // verify the required parameter 'figma_attachment_id' is set
        if ($figma_attachment_id === null || (is_array($figma_attachment_id) && count($figma_attachment_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $figma_attachment_id when calling figmaAttachmentDetachFromKey'
            );
        }
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling figmaAttachmentDetachFromKey'
            );
        }

        $resourcePath = '/projects/{project_id}/figma_attachments/{figma_attachment_id}/keys/{id}';
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
        // path params
        if ($figma_attachment_id !== null) {
            $resourcePath = str_replace(
                '{' . 'figma_attachment_id' . '}',
                ObjectSerializer::toPathValue($figma_attachment_id),
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
