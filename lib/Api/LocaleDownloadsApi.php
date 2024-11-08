<?php
/**
 * LocaleDownloadsApi
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
 * LocaleDownloadsApi Class Doc Comment
 *
 * @category Class
 * @package  Phrase
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class LocaleDownloadsApi
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
     * Operation localeDownloadCreate
     *
     * Initiate async download of a locale
     *
     * @param  string $project_id Project ID (required)
     * @param  string $locale_id Locale ID (required)
     * @param  \Phrase\Model\LocaleDownloadCreateParameters $locale_download_create_parameters locale_download_create_parameters (required)
     * @param  string $x_phrase_app_otp Two-Factor-Authentication token (optional) (optional)
     * @param  string $if_modified_since Last modified condition, see &lt;a href&#x3D;\&quot;#overview--conditional-get-requests--http-caching\&quot;&gt;Conditional GET requests / HTTP Caching&lt;/a&gt; (optional) (optional)
     * @param  string $if_none_match ETag condition, see &lt;a href&#x3D;\&quot;#overview--conditional-get-requests--http-caching\&quot;&gt;Conditional GET requests / HTTP Caching&lt;/a&gt; (optional) (optional)
     *
     * @throws \Phrase\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Phrase\Model\LocaleDownload
     */
    public function localeDownloadCreate($project_id, $locale_id, $locale_download_create_parameters, $x_phrase_app_otp = null, $if_modified_since = null, $if_none_match = null)
    {
        list($response) = $this->localeDownloadCreateWithHttpInfo($project_id, $locale_id, $locale_download_create_parameters, $x_phrase_app_otp, $if_modified_since, $if_none_match);
        return $response;
    }

    /**
     * Operation localeDownloadCreateWithHttpInfo
     *
     * Initiate async download of a locale
     *
     * @param  string $project_id Project ID (required)
     * @param  string $locale_id Locale ID (required)
     * @param  \Phrase\Model\LocaleDownloadCreateParameters $locale_download_create_parameters (required)
     * @param  string $x_phrase_app_otp Two-Factor-Authentication token (optional) (optional)
     * @param  string $if_modified_since Last modified condition, see &lt;a href&#x3D;\&quot;#overview--conditional-get-requests--http-caching\&quot;&gt;Conditional GET requests / HTTP Caching&lt;/a&gt; (optional) (optional)
     * @param  string $if_none_match ETag condition, see &lt;a href&#x3D;\&quot;#overview--conditional-get-requests--http-caching\&quot;&gt;Conditional GET requests / HTTP Caching&lt;/a&gt; (optional) (optional)
     *
     * @throws \Phrase\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Phrase\Model\LocaleDownload, HTTP status code, HTTP response headers (array of strings)
     */
    public function localeDownloadCreateWithHttpInfo($project_id, $locale_id, $locale_download_create_parameters, $x_phrase_app_otp = null, $if_modified_since = null, $if_none_match = null)
    {
        $request = $this->localeDownloadCreateRequest($project_id, $locale_id, $locale_download_create_parameters, $x_phrase_app_otp, $if_modified_since, $if_none_match);

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
                case 201:
                    if ('\Phrase\Model\LocaleDownload' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Phrase\Model\LocaleDownload', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Phrase\Model\LocaleDownload';
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
                case 201:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Phrase\Model\LocaleDownload',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation localeDownloadCreateAsync
     *
     * Initiate async download of a locale
     *
     * @param  string $project_id Project ID (required)
     * @param  string $locale_id Locale ID (required)
     * @param  \Phrase\Model\LocaleDownloadCreateParameters $locale_download_create_parameters (required)
     * @param  string $x_phrase_app_otp Two-Factor-Authentication token (optional) (optional)
     * @param  string $if_modified_since Last modified condition, see &lt;a href&#x3D;\&quot;#overview--conditional-get-requests--http-caching\&quot;&gt;Conditional GET requests / HTTP Caching&lt;/a&gt; (optional) (optional)
     * @param  string $if_none_match ETag condition, see &lt;a href&#x3D;\&quot;#overview--conditional-get-requests--http-caching\&quot;&gt;Conditional GET requests / HTTP Caching&lt;/a&gt; (optional) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function localeDownloadCreateAsync($project_id, $locale_id, $locale_download_create_parameters, $x_phrase_app_otp = null, $if_modified_since = null, $if_none_match = null)
    {
        return $this->localeDownloadCreateAsyncWithHttpInfo($project_id, $locale_id, $locale_download_create_parameters, $x_phrase_app_otp, $if_modified_since, $if_none_match)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation localeDownloadCreateAsyncWithHttpInfo
     *
     * Initiate async download of a locale
     *
     * @param  string $project_id Project ID (required)
     * @param  string $locale_id Locale ID (required)
     * @param  \Phrase\Model\LocaleDownloadCreateParameters $locale_download_create_parameters (required)
     * @param  string $x_phrase_app_otp Two-Factor-Authentication token (optional) (optional)
     * @param  string $if_modified_since Last modified condition, see &lt;a href&#x3D;\&quot;#overview--conditional-get-requests--http-caching\&quot;&gt;Conditional GET requests / HTTP Caching&lt;/a&gt; (optional) (optional)
     * @param  string $if_none_match ETag condition, see &lt;a href&#x3D;\&quot;#overview--conditional-get-requests--http-caching\&quot;&gt;Conditional GET requests / HTTP Caching&lt;/a&gt; (optional) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function localeDownloadCreateAsyncWithHttpInfo($project_id, $locale_id, $locale_download_create_parameters, $x_phrase_app_otp = null, $if_modified_since = null, $if_none_match = null)
    {
        $returnType = '\Phrase\Model\LocaleDownload';
        $request = $this->localeDownloadCreateRequest($project_id, $locale_id, $locale_download_create_parameters, $x_phrase_app_otp, $if_modified_since, $if_none_match);

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
     * Create request for operation 'localeDownloadCreate'
     *
     * @param  string $project_id Project ID (required)
     * @param  string $locale_id Locale ID (required)
     * @param  \Phrase\Model\LocaleDownloadCreateParameters $locale_download_create_parameters (required)
     * @param  string $x_phrase_app_otp Two-Factor-Authentication token (optional) (optional)
     * @param  string $if_modified_since Last modified condition, see &lt;a href&#x3D;\&quot;#overview--conditional-get-requests--http-caching\&quot;&gt;Conditional GET requests / HTTP Caching&lt;/a&gt; (optional) (optional)
     * @param  string $if_none_match ETag condition, see &lt;a href&#x3D;\&quot;#overview--conditional-get-requests--http-caching\&quot;&gt;Conditional GET requests / HTTP Caching&lt;/a&gt; (optional) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function localeDownloadCreateRequest($project_id, $locale_id, $locale_download_create_parameters, $x_phrase_app_otp = null, $if_modified_since = null, $if_none_match = null)
    {
        // verify the required parameter 'project_id' is set
        if ($project_id === null || (is_array($project_id) && count($project_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $project_id when calling localeDownloadCreate'
            );
        }
        // verify the required parameter 'locale_id' is set
        if ($locale_id === null || (is_array($locale_id) && count($locale_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $locale_id when calling localeDownloadCreate'
            );
        }
        // verify the required parameter 'locale_download_create_parameters' is set
        if ($locale_download_create_parameters === null || (is_array($locale_download_create_parameters) && count($locale_download_create_parameters) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $locale_download_create_parameters when calling localeDownloadCreate'
            );
        }

        $resourcePath = '/projects/{project_id}/locales/{locale_id}/downloads';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // header params
        if ($x_phrase_app_otp !== null) {
            $headerParams['X-PhraseApp-OTP'] = ObjectSerializer::toHeaderValue($x_phrase_app_otp);
        }
        // header params
        if ($if_modified_since !== null) {
            $headerParams['If-Modified-Since'] = ObjectSerializer::toHeaderValue($if_modified_since);
        }
        // header params
        if ($if_none_match !== null) {
            $headerParams['If-None-Match'] = ObjectSerializer::toHeaderValue($if_none_match);
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
        if ($locale_id !== null) {
            $resourcePath = str_replace(
                '{' . 'locale_id' . '}',
                ObjectSerializer::toPathValue($locale_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($locale_download_create_parameters)) {
            $_tempBody = $locale_download_create_parameters;
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

        $query = http_build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation localeDownloadShow
     *
     * Show status of an async locale download
     *
     * @param  string $project_id Project ID (required)
     * @param  string $locale_id Locale ID (required)
     * @param  string $id ID (required)
     * @param  string $x_phrase_app_otp Two-Factor-Authentication token (optional) (optional)
     * @param  string $if_modified_since Last modified condition, see &lt;a href&#x3D;\&quot;#overview--conditional-get-requests--http-caching\&quot;&gt;Conditional GET requests / HTTP Caching&lt;/a&gt; (optional) (optional)
     * @param  string $if_none_match ETag condition, see &lt;a href&#x3D;\&quot;#overview--conditional-get-requests--http-caching\&quot;&gt;Conditional GET requests / HTTP Caching&lt;/a&gt; (optional) (optional)
     *
     * @throws \Phrase\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Phrase\Model\LocaleDownload
     */
    public function localeDownloadShow($project_id, $locale_id, $id, $x_phrase_app_otp = null, $if_modified_since = null, $if_none_match = null)
    {
        list($response) = $this->localeDownloadShowWithHttpInfo($project_id, $locale_id, $id, $x_phrase_app_otp, $if_modified_since, $if_none_match);
        return $response;
    }

    /**
     * Operation localeDownloadShowWithHttpInfo
     *
     * Show status of an async locale download
     *
     * @param  string $project_id Project ID (required)
     * @param  string $locale_id Locale ID (required)
     * @param  string $id ID (required)
     * @param  string $x_phrase_app_otp Two-Factor-Authentication token (optional) (optional)
     * @param  string $if_modified_since Last modified condition, see &lt;a href&#x3D;\&quot;#overview--conditional-get-requests--http-caching\&quot;&gt;Conditional GET requests / HTTP Caching&lt;/a&gt; (optional) (optional)
     * @param  string $if_none_match ETag condition, see &lt;a href&#x3D;\&quot;#overview--conditional-get-requests--http-caching\&quot;&gt;Conditional GET requests / HTTP Caching&lt;/a&gt; (optional) (optional)
     *
     * @throws \Phrase\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Phrase\Model\LocaleDownload, HTTP status code, HTTP response headers (array of strings)
     */
    public function localeDownloadShowWithHttpInfo($project_id, $locale_id, $id, $x_phrase_app_otp = null, $if_modified_since = null, $if_none_match = null)
    {
        $request = $this->localeDownloadShowRequest($project_id, $locale_id, $id, $x_phrase_app_otp, $if_modified_since, $if_none_match);

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
                    if ('\Phrase\Model\LocaleDownload' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Phrase\Model\LocaleDownload', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Phrase\Model\LocaleDownload';
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
                        '\Phrase\Model\LocaleDownload',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation localeDownloadShowAsync
     *
     * Show status of an async locale download
     *
     * @param  string $project_id Project ID (required)
     * @param  string $locale_id Locale ID (required)
     * @param  string $id ID (required)
     * @param  string $x_phrase_app_otp Two-Factor-Authentication token (optional) (optional)
     * @param  string $if_modified_since Last modified condition, see &lt;a href&#x3D;\&quot;#overview--conditional-get-requests--http-caching\&quot;&gt;Conditional GET requests / HTTP Caching&lt;/a&gt; (optional) (optional)
     * @param  string $if_none_match ETag condition, see &lt;a href&#x3D;\&quot;#overview--conditional-get-requests--http-caching\&quot;&gt;Conditional GET requests / HTTP Caching&lt;/a&gt; (optional) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function localeDownloadShowAsync($project_id, $locale_id, $id, $x_phrase_app_otp = null, $if_modified_since = null, $if_none_match = null)
    {
        return $this->localeDownloadShowAsyncWithHttpInfo($project_id, $locale_id, $id, $x_phrase_app_otp, $if_modified_since, $if_none_match)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation localeDownloadShowAsyncWithHttpInfo
     *
     * Show status of an async locale download
     *
     * @param  string $project_id Project ID (required)
     * @param  string $locale_id Locale ID (required)
     * @param  string $id ID (required)
     * @param  string $x_phrase_app_otp Two-Factor-Authentication token (optional) (optional)
     * @param  string $if_modified_since Last modified condition, see &lt;a href&#x3D;\&quot;#overview--conditional-get-requests--http-caching\&quot;&gt;Conditional GET requests / HTTP Caching&lt;/a&gt; (optional) (optional)
     * @param  string $if_none_match ETag condition, see &lt;a href&#x3D;\&quot;#overview--conditional-get-requests--http-caching\&quot;&gt;Conditional GET requests / HTTP Caching&lt;/a&gt; (optional) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function localeDownloadShowAsyncWithHttpInfo($project_id, $locale_id, $id, $x_phrase_app_otp = null, $if_modified_since = null, $if_none_match = null)
    {
        $returnType = '\Phrase\Model\LocaleDownload';
        $request = $this->localeDownloadShowRequest($project_id, $locale_id, $id, $x_phrase_app_otp, $if_modified_since, $if_none_match);

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
     * Create request for operation 'localeDownloadShow'
     *
     * @param  string $project_id Project ID (required)
     * @param  string $locale_id Locale ID (required)
     * @param  string $id ID (required)
     * @param  string $x_phrase_app_otp Two-Factor-Authentication token (optional) (optional)
     * @param  string $if_modified_since Last modified condition, see &lt;a href&#x3D;\&quot;#overview--conditional-get-requests--http-caching\&quot;&gt;Conditional GET requests / HTTP Caching&lt;/a&gt; (optional) (optional)
     * @param  string $if_none_match ETag condition, see &lt;a href&#x3D;\&quot;#overview--conditional-get-requests--http-caching\&quot;&gt;Conditional GET requests / HTTP Caching&lt;/a&gt; (optional) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function localeDownloadShowRequest($project_id, $locale_id, $id, $x_phrase_app_otp = null, $if_modified_since = null, $if_none_match = null)
    {
        // verify the required parameter 'project_id' is set
        if ($project_id === null || (is_array($project_id) && count($project_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $project_id when calling localeDownloadShow'
            );
        }
        // verify the required parameter 'locale_id' is set
        if ($locale_id === null || (is_array($locale_id) && count($locale_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $locale_id when calling localeDownloadShow'
            );
        }
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling localeDownloadShow'
            );
        }

        $resourcePath = '/projects/{project_id}/locales/{locale_id}/downloads/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // header params
        if ($x_phrase_app_otp !== null) {
            $headerParams['X-PhraseApp-OTP'] = ObjectSerializer::toHeaderValue($x_phrase_app_otp);
        }
        // header params
        if ($if_modified_since !== null) {
            $headerParams['If-Modified-Since'] = ObjectSerializer::toHeaderValue($if_modified_since);
        }
        // header params
        if ($if_none_match !== null) {
            $headerParams['If-None-Match'] = ObjectSerializer::toHeaderValue($if_none_match);
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
        if ($locale_id !== null) {
            $resourcePath = str_replace(
                '{' . 'locale_id' . '}',
                ObjectSerializer::toPathValue($locale_id),
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
