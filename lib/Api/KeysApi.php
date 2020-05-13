<?php
/**
 * KeysApi
 * PHP version 5
 *
 * @category Class
 * @package  Phrase
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Phrase API Reference
 *
 * Phrase is a translation management platform for software projects. You can collaborate on language file translation with your team or order translations through our platform. The API allows you to import locale files, download locale files, tag keys or interact in other ways with the localization data stored in Phrase for your account.  ## API Endpoint  ``` https://api.phrase.com/v2/ ```  The API is only accessible via HTTPS, the base URL is <code>https://api.phrase.com/</code>, and the current version is <code>v2</code> which results in the base URL for all requests: <code>https://api.phrase.com/v2/</code>.  ## Usage  [curl](http://curl.haxx.se/) is used primarily to send requests to Phrase in the examples. On most you'll find a second variant using the [Phrase API v2 client](https://phrase.com/cli/) that might be more convenient to handle. For further information check its [documentation](https://help.phrase.com/help/phrase-in-your-terminal).  ## Use of HTTP Verbs  Phrase API v2 tries to use the appropriate HTTP verb for accessing each endpoint according to REST specification where possible:  <div class=\"table-responsive\">   <table class=\"basic-table\">     <thead>       <tr class=\"basic-table__row basic-table__row--header\">         <th class=\"basic-table__cell basic-table__cell--header\">Verb</th>         <th class=\"basic-table__cell basic-table__cell--header\">Description</th>       </tr>     </thead>     <tbody>       <tr>         <td class=\"basic-table__cell\">GET</td>         <td class=\"basic-table__cell\">Retrieve one or multiple resources</td>       </tr>       <tr>         <td class=\"basic-table__cell\">POST</td>         <td class=\"basic-table__cell\">Create a resource</td>       </tr>       <tr>         <td class=\"basic-table__cell\">PUT</td>         <td class=\"basic-table__cell\">Update a resource</td>       </tr>       <tr>         <td class=\"basic-table__cell\">PATCH</td>         <td class=\"basic-table__cell\">Update a resource (partially)</td>       </tr>       <tr>         <td class=\"basic-table__cell\">DELETE</td>         <td class=\"basic-table__cell\">Delete a resource</td>       </tr>     </tbody>   </table> </div>   ## Identification via User-Agent  You must include the User-Agent header with the name of your application or project. It might be a good idea to include some sort of contact information  as well, so that we can get in touch if necessary (e.g. to warn you about Rate-Limiting or badly formed requests). Examples of excellent User-Agent headers:  ``` User-Agent: Frederiks Mobile App (frederik@phrase.com) User-Agent: ACME Inc Python Client (http://example.com/contact) ```  If you don't send this header, you will receive a response with 400 Bad Request.   ## Lists  When you request a list of resources, the API will typically only return an array of resources including their most important attributes. For a detailed representation of the resource you should request its detailed representation.  Lists are usually [paginated](#pagination).   ## Parameters  Many endpoints support additional parameters, e.g. for pagination. When passing them in a GET request you can send them as HTTP query string parameters:  ``` $ curl -u EMAIL_OR_ACCESS_TOKEN \"https://api.phrase.com/v2/projects?page=2\" ```  When performing a POST, PUT, PATCH or DELETE request, we recommend sending parameters that are not already included in the URL, as JSON body:  ``` $ curl -H 'Content-Type: application/json' -d '{\"name\":\"My new project\"}' -u EMAIL_OR_ACCESS_TOKEN https://api.phrase.com/v2/projects ```  Encoding parameters as JSON means better support for types (boolean, integer) and usually better readability. Don't forget to set the correct Content-Type for your request.  *The Content-Type header is omitted in some of the following examples for better readbility.*   ## Errors   ### Request Errors  If a request contains invalid JSON or is missing a required parameter (besides resource attributes), the status `400 Bad Request` is returned:  ``` {   \"message\": \"JSON could not be parsed\" } ```   ### Validation Errors  When the validation for a resource fails, the status `422 Unprocessable Entity` is returned, along with information on the affected fields:  ``` {   \"message\": \"Validation Failed\",   \"errors\": [     {       \"resource\": \"Project\",       \"field\": \"name\",       \"message\": \"can't be blank\"     }   ] } ```   ## Date Format  Times and dates are returned and expected in [ISO 8601](http://en.wikipedia.org/wiki/ISO_8601) date format:  ``` YYYY-MM-DDTHH:MM:SSZ ```  Instead of 'Z' for UTC time zone you can specify your time zone's locale offset using the following notation:  ``` YYYY-MM-DDTHH:MM:SS¬±hh:mm ```  Example for CET (1 hour behind UTC):  ``` 2015-03-31T13:00+01:00 ```  Please note that in HTTP headers, we will use the appropriate recommended date formats instead of ISO 8601.   ## Authentication  <div class=\"alert alert-info\">For more detailed information on authentication, check out the <a href=\"#authentication\">API v2 Authentication Guide</a>.</div>  There are two different ways to authenticate when performing API requests:  * E-Mail and password * Oauth Access Token   ### E-Mail and password  To get started easily, you can use HTTP Basic authentication with your email and password:  ``` $ curl -u username:password \"https://api.phrase.com/v2/projects\" ```   ### OAuth via Access Tokens  You can create and manage access tokens in your [profile settings](https://app.phrase.com/settings/oauth_access_tokens) in Translation Center or via the [Authorizations API](#authorizations).  Simply pass the access token as the username of your request:  ``` $ curl -u ACCESS_TOKEN: \"https://api.phrase.com/v2/projects\" ```  or send the access token via the `Authorization` header field:  ``` $ curl -H \"Authorization: token ACCESS_TOKEN\" https://api.phrase.com/v2/projects ```  For more detailed information on authentication, check out the <a href=\"#authentication\">API v2 Authentication Guide</a>.  #### Send via parameter  As JSONP (and other) requests cannot send HTTP Basic Auth credentials, a special query parameter `access_token` can be used:  ``` curl \"https://api.phrase.com/v2/projects?access_token=ACCESS_TOKEN\" ```  You should only use this transport method if sending the authentication via header or Basic authentication is not possible.  ### Two-Factor-Authentication  Users with Two-Factor-Authentication enabled have to send a valid token along their request with certain authentication methods (such as Basic authentication). The necessity of a Two-Factor-Authentication token is indicated by the `X-PhraseApp-OTP: required; :MFA-type` header in the response. The `:MFA-type`field indicates the source of the token, e.g. `app` (refers to your Authenticator application):  ``` X-PhraseApp-OTP: required; app ```  To provide a Two-Factor-Authentication token you can simply send it in the header of the request:  ``` curl -H \"X-PhraseApp-OTP: MFA-TOKEN\" -u EMAIL https://api.phrase.com/v2/projects ```  Since Two-Factor-Authentication tokens usually expire quickly, we recommend using an alternative authentication method such as OAuth access tokens.  ### Multiple Accounts  Some endpoints require the account ID to be specified if the authenticated user is a member of multiple accounts. You can find the eight-digit account ID inside <a href=\"https://app.phrase.com/\" target=\"_blank\">Translation Center</a> by switching to the desired account and then visiting the account details page. If required, you can specify the account just like a normal parameter within the request.  ## Pagination  Endpoints that return a list or resources will usually return paginated results and include 25 items by default. To access further pages, use the `page` parameter:  ``` $ curl -u EMAIL_OR_ACCESS_TOKEN \"https://api.phrase.com/v2/projects?page=2\" ```  Some endpoints also allow a custom page size by using the `per_page` parameter:  ``` $ curl -u EMAIL_OR_ACCESS_TOKEN \"https://api.phrase.com/v2/projects?page=2&per_page=50\" ```  Unless specified otherwise in the description of the respective endpoint, `per_page` allows you to specify a page size up to 100 items.   ## Link-Headers  We provide you with pagination URLs in the [Link Header field](http://tools.ietf.org/html/rfc5988). Make use of this information to avoid building pagination URLs yourself.  ``` Link: <https://api.phrase.com/v2/projects?page=1>; rel=\"first\", <https://api.phrase.com/v2/projects?page=3>; rel=\"prev\", <https://api.phrase.com/v2/projects?page=5>; rel=\"next\", <https://api.phrase.com/v2/projects?page=9>; rel=\"last\" ```  Possible `rel` values are:  <div class=\"table-responsive\">   <table class=\"basic-table\">     <thead>       <tr class=\"basic-table__row basic-table__row--header\">         <th class=\"basic-table__cell basic-table__cell--header\">Value</th>         <th class=\"basic-table__cell basic-table__cell--header\">Description</th>       </tr>     </thead>     <tbody>       <tr>         <td class=\"basic-table__cell\">next</td>         <td class=\"basic-table__cell\">URL of the next page of results</td>       </tr>       <tr>         <td class=\"basic-table__cell\">last</td>         <td class=\"basic-table__cell\">URL of the last page of results</td>       </tr>       <tr>         <td class=\"basic-table__cell\">first</td>         <td class=\"basic-table__cell\">URL of the first page of results</td>       </tr>       <tr>         <td class=\"basic-table__cell\">prev</td>         <td class=\"basic-table__cell\">URL of the previous page of results</td>       </tr>     </tbody>   </table> </div>  ## Rate Limiting  All API endpoints are subject to rate limiting to ensure good performance for all customers. The rate limit is calculated per user:  * 1000 requests per 5 minutes * 4 concurrent (parallel) requests  For your convenience we send information on the current rate limit within the response headers:  <div class=\"table-responsive\">   <table class=\"basic-table\">     <thead>       <tr class=\"basic-table__row basic-table__row--header\">         <th class=\"basic-table__cell basic-table__cell--header\">Header</th>         <th class=\"basic-table__cell basic-table__cell--header\">Description</th>       </tr>     </thead>     <tbody>       <tr>         <td class=\"basic-table__cell\" style=\"white-space: nowrap;\"><code>X-Rate-Limit-Limit</code></td>         <td class=\"basic-table__cell\">Number of max requests allowed in the current time period</td>       </tr>       <tr>         <td class=\"basic-table__cell\" style=\"white-space: nowrap;\"><code>X-Rate-Limit-Remaining</code></td>         <td class=\"basic-table__cell\">Number of remaining requests in the current time period</td>       </tr>       <tr>         <td class=\"basic-table__cell\" style=\"white-space: nowrap;\"><code>X-Rate-Limit-Reset</code></td>         <td class=\"basic-table__cell\">Timestamp of end of current time period as UNIX timestamp</td>       </tr>     </tbody>   </table> </div>  If you should run into the rate limit, you will receive the HTTP status code `429: Too many requests`.  If you should need higher rate limits, [contact us](https://phrase.com/contact).   ## Conditional GET requests / HTTP Caching  <div class=\"alert alert-info\"><p><strong>Note:</strong> Conditional GET requests are currently only supported for <a href=\"#locales_download\">locales#download</a> and <a href=\"#translations_index\">translations#index</a></p></div>  We will return an ETag or Last-Modified header with most GET requests. When you request a resource we recommend to store this value and submit them on subsequent requests as `If-Modified-Since` and `If-None-Match` headers. If the resource has not changed in the meantime, we will return the status `304 Not Modified` instead of rendering and returning the resource again. In most cases this is less time-consuming and makes your application/integration faster.  Please note that all conditional requests that return a response with status 304 don't count against your rate limits.  ``` $ curl -i -u EMAIL_OR_ACCESS_TOKEN \"https://api.phrase.com/v2/projects/1234abcd1234abcdefefabcd1234efab/locales/en/download\" HTTP/1.1 200 OK ETag: \"abcd1234abcdefefabcd1234efab1234\" Last-Modified: Wed, 28 Jan 2015 15:31:30 UTC Status: 200 OK  $ curl -i -u EMAIL_OR_ACCESS_TOKEN \"https://api.phrase.com/v2/projects/1234abcd1234abcdefefabcd1234efab/locales/en/download\" -H 'If-None-Match: \"abcd1234abcdefefabcd1234efab1234\"' HTTP/1.1 304 Not Modified ETag: \"abcd1234abcdefefabcd1234efab1234\" Last-Modified: Wed, 28 Jan 2015 15:31:30 UTC Status: 304 Not Modified  $ curl -i -u EMAIL_OR_ACCESS_TOKEN \"https://api.phrase.com/v2/projects/1234abcd1234abcdefefabcd1234efab/locales/en/download\" -H \"If-Modified-Since: Wed, 28 Jan 2015 15:31:30 UTC\" HTTP/1.1 304 Not Modified Last-Modified: Wed, 28 Jan 2015 15:31:30 UTC Status: 304 Not Modified ```   ## JSONP  The Phrase API supports [JSONP](http://en.wikipedia.org/wiki/JSONP) for all GET requests in order to deal with cross-domain request issues. Just send a `?callback` parameter along with the request to specify the Javascript function name to be called with the response content:  ``` $ curl \"https://api.phrase.com/v2/projects?callback=myFunction\" ```  The response will include the normal output for that endpoint, along with a `meta` section including header data:  ``` myFunction({   {     \"meta\": {       \"status\": 200,       ...     },     \"data\": [       {         \"id\": \"1234abcd1234abc1234abcd1234abc\"         ...       }     ]   } }); ```  To authenticate a JSONP request, you can send a valid [access token](#authentication) as the `?access_token` parameter along the request:  ``` $ curl \"https://api.phrase.com/v2/projects?callback=myFunction&access_token=ACCESS-TOKEN\" ```
 *
 * The version of the OpenAPI document: 2.0.0
 * Contact: support@phrase.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.3.0
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
 * KeysApi Class Doc Comment
 *
 * @category Class
 * @package  Phrase
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class KeysApi
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
     * Operation keyCreate
     *
     * Create a key
     *
     * @param  string $project_id Project ID (required)
     * @param  \Phrase\Model\KeyCreateParameters $key_create_parameters key_create_parameters (required)
     * @param  string $x_phrase_app_otp Two-Factor-Authentication token (optional) (optional)
     *
     * @throws \Phrase\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function keyCreate($project_id, $key_create_parameters, $x_phrase_app_otp = null)
    {
        $this->keyCreateWithHttpInfo($project_id, $key_create_parameters, $x_phrase_app_otp);
    }

    /**
     * Operation keyCreateWithHttpInfo
     *
     * Create a key
     *
     * @param  string $project_id Project ID (required)
     * @param  \Phrase\Model\KeyCreateParameters $key_create_parameters (required)
     * @param  string $x_phrase_app_otp Two-Factor-Authentication token (optional) (optional)
     *
     * @throws \Phrase\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function keyCreateWithHttpInfo($project_id, $key_create_parameters, $x_phrase_app_otp = null)
    {
        $request = $this->keyCreateRequest($project_id, $key_create_parameters, $x_phrase_app_otp);

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
     * Operation keyCreateAsync
     *
     * Create a key
     *
     * @param  string $project_id Project ID (required)
     * @param  \Phrase\Model\KeyCreateParameters $key_create_parameters (required)
     * @param  string $x_phrase_app_otp Two-Factor-Authentication token (optional) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function keyCreateAsync($project_id, $key_create_parameters, $x_phrase_app_otp = null)
    {
        return $this->keyCreateAsyncWithHttpInfo($project_id, $key_create_parameters, $x_phrase_app_otp)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation keyCreateAsyncWithHttpInfo
     *
     * Create a key
     *
     * @param  string $project_id Project ID (required)
     * @param  \Phrase\Model\KeyCreateParameters $key_create_parameters (required)
     * @param  string $x_phrase_app_otp Two-Factor-Authentication token (optional) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function keyCreateAsyncWithHttpInfo($project_id, $key_create_parameters, $x_phrase_app_otp = null)
    {
        $returnType = '';
        $request = $this->keyCreateRequest($project_id, $key_create_parameters, $x_phrase_app_otp);

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
     * Create request for operation 'keyCreate'
     *
     * @param  string $project_id Project ID (required)
     * @param  \Phrase\Model\KeyCreateParameters $key_create_parameters (required)
     * @param  string $x_phrase_app_otp Two-Factor-Authentication token (optional) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function keyCreateRequest($project_id, $key_create_parameters, $x_phrase_app_otp = null)
    {
        // verify the required parameter 'project_id' is set
        if ($project_id === null || (is_array($project_id) && count($project_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $project_id when calling keyCreate'
            );
        }
        // verify the required parameter 'key_create_parameters' is set
        if ($key_create_parameters === null || (is_array($key_create_parameters) && count($key_create_parameters) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $key_create_parameters when calling keyCreate'
            );
        }

        $resourcePath = '/projects/{project_id}/keys';
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

        // body params
        $_tempBody = null;
        if (isset($key_create_parameters)) {
            $_tempBody = $key_create_parameters;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                []
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                [],
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
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
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

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation keyDelete
     *
     * Delete a key
     *
     * @param  string $project_id Project ID (required)
     * @param  string $id ID (required)
     * @param  string $x_phrase_app_otp Two-Factor-Authentication token (optional) (optional)
     * @param  string $branch specify the branch to use (optional)
     *
     * @throws \Phrase\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function keyDelete($project_id, $id, $x_phrase_app_otp = null, $branch = null)
    {
        $this->keyDeleteWithHttpInfo($project_id, $id, $x_phrase_app_otp, $branch);
    }

    /**
     * Operation keyDeleteWithHttpInfo
     *
     * Delete a key
     *
     * @param  string $project_id Project ID (required)
     * @param  string $id ID (required)
     * @param  string $x_phrase_app_otp Two-Factor-Authentication token (optional) (optional)
     * @param  string $branch specify the branch to use (optional)
     *
     * @throws \Phrase\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function keyDeleteWithHttpInfo($project_id, $id, $x_phrase_app_otp = null, $branch = null)
    {
        $request = $this->keyDeleteRequest($project_id, $id, $x_phrase_app_otp, $branch);

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
     * Operation keyDeleteAsync
     *
     * Delete a key
     *
     * @param  string $project_id Project ID (required)
     * @param  string $id ID (required)
     * @param  string $x_phrase_app_otp Two-Factor-Authentication token (optional) (optional)
     * @param  string $branch specify the branch to use (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function keyDeleteAsync($project_id, $id, $x_phrase_app_otp = null, $branch = null)
    {
        return $this->keyDeleteAsyncWithHttpInfo($project_id, $id, $x_phrase_app_otp, $branch)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation keyDeleteAsyncWithHttpInfo
     *
     * Delete a key
     *
     * @param  string $project_id Project ID (required)
     * @param  string $id ID (required)
     * @param  string $x_phrase_app_otp Two-Factor-Authentication token (optional) (optional)
     * @param  string $branch specify the branch to use (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function keyDeleteAsyncWithHttpInfo($project_id, $id, $x_phrase_app_otp = null, $branch = null)
    {
        $returnType = '';
        $request = $this->keyDeleteRequest($project_id, $id, $x_phrase_app_otp, $branch);

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
     * Create request for operation 'keyDelete'
     *
     * @param  string $project_id Project ID (required)
     * @param  string $id ID (required)
     * @param  string $x_phrase_app_otp Two-Factor-Authentication token (optional) (optional)
     * @param  string $branch specify the branch to use (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function keyDeleteRequest($project_id, $id, $x_phrase_app_otp = null, $branch = null)
    {
        // verify the required parameter 'project_id' is set
        if ($project_id === null || (is_array($project_id) && count($project_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $project_id when calling keyDelete'
            );
        }
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling keyDelete'
            );
        }

        $resourcePath = '/projects/{project_id}/keys/{id}';
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
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
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

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'DELETE',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation keyShow
     *
     * Get a single key
     *
     * @param  string $project_id Project ID (required)
     * @param  string $id ID (required)
     * @param  string $x_phrase_app_otp Two-Factor-Authentication token (optional) (optional)
     * @param  string $branch specify the branch to use (optional)
     *
     * @throws \Phrase\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Phrase\Model\TranslationKeyDetails
     */
    public function keyShow($project_id, $id, $x_phrase_app_otp = null, $branch = null)
    {
        list($response) = $this->keyShowWithHttpInfo($project_id, $id, $x_phrase_app_otp, $branch);
        return $response;
    }

    /**
     * Operation keyShowWithHttpInfo
     *
     * Get a single key
     *
     * @param  string $project_id Project ID (required)
     * @param  string $id ID (required)
     * @param  string $x_phrase_app_otp Two-Factor-Authentication token (optional) (optional)
     * @param  string $branch specify the branch to use (optional)
     *
     * @throws \Phrase\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Phrase\Model\TranslationKeyDetails, HTTP status code, HTTP response headers (array of strings)
     */
    public function keyShowWithHttpInfo($project_id, $id, $x_phrase_app_otp = null, $branch = null)
    {
        $request = $this->keyShowRequest($project_id, $id, $x_phrase_app_otp, $branch);

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
                    if ('\Phrase\Model\TranslationKeyDetails' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Phrase\Model\TranslationKeyDetails', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Phrase\Model\TranslationKeyDetails';
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
                        '\Phrase\Model\TranslationKeyDetails',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation keyShowAsync
     *
     * Get a single key
     *
     * @param  string $project_id Project ID (required)
     * @param  string $id ID (required)
     * @param  string $x_phrase_app_otp Two-Factor-Authentication token (optional) (optional)
     * @param  string $branch specify the branch to use (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function keyShowAsync($project_id, $id, $x_phrase_app_otp = null, $branch = null)
    {
        return $this->keyShowAsyncWithHttpInfo($project_id, $id, $x_phrase_app_otp, $branch)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation keyShowAsyncWithHttpInfo
     *
     * Get a single key
     *
     * @param  string $project_id Project ID (required)
     * @param  string $id ID (required)
     * @param  string $x_phrase_app_otp Two-Factor-Authentication token (optional) (optional)
     * @param  string $branch specify the branch to use (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function keyShowAsyncWithHttpInfo($project_id, $id, $x_phrase_app_otp = null, $branch = null)
    {
        $returnType = '\Phrase\Model\TranslationKeyDetails';
        $request = $this->keyShowRequest($project_id, $id, $x_phrase_app_otp, $branch);

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
     * Create request for operation 'keyShow'
     *
     * @param  string $project_id Project ID (required)
     * @param  string $id ID (required)
     * @param  string $x_phrase_app_otp Two-Factor-Authentication token (optional) (optional)
     * @param  string $branch specify the branch to use (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function keyShowRequest($project_id, $id, $x_phrase_app_otp = null, $branch = null)
    {
        // verify the required parameter 'project_id' is set
        if ($project_id === null || (is_array($project_id) && count($project_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $project_id when calling keyShow'
            );
        }
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling keyShow'
            );
        }

        $resourcePath = '/projects/{project_id}/keys/{id}';
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
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
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

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation keyUpdate
     *
     * Update a key
     *
     * @param  string $project_id Project ID (required)
     * @param  string $id ID (required)
     * @param  \Phrase\Model\KeyUpdateParameters $key_update_parameters key_update_parameters (required)
     * @param  string $x_phrase_app_otp Two-Factor-Authentication token (optional) (optional)
     *
     * @throws \Phrase\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Phrase\Model\TranslationKeyDetails
     */
    public function keyUpdate($project_id, $id, $key_update_parameters, $x_phrase_app_otp = null)
    {
        list($response) = $this->keyUpdateWithHttpInfo($project_id, $id, $key_update_parameters, $x_phrase_app_otp);
        return $response;
    }

    /**
     * Operation keyUpdateWithHttpInfo
     *
     * Update a key
     *
     * @param  string $project_id Project ID (required)
     * @param  string $id ID (required)
     * @param  \Phrase\Model\KeyUpdateParameters $key_update_parameters (required)
     * @param  string $x_phrase_app_otp Two-Factor-Authentication token (optional) (optional)
     *
     * @throws \Phrase\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Phrase\Model\TranslationKeyDetails, HTTP status code, HTTP response headers (array of strings)
     */
    public function keyUpdateWithHttpInfo($project_id, $id, $key_update_parameters, $x_phrase_app_otp = null)
    {
        $request = $this->keyUpdateRequest($project_id, $id, $key_update_parameters, $x_phrase_app_otp);

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
                    if ('\Phrase\Model\TranslationKeyDetails' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Phrase\Model\TranslationKeyDetails', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Phrase\Model\TranslationKeyDetails';
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
                        '\Phrase\Model\TranslationKeyDetails',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation keyUpdateAsync
     *
     * Update a key
     *
     * @param  string $project_id Project ID (required)
     * @param  string $id ID (required)
     * @param  \Phrase\Model\KeyUpdateParameters $key_update_parameters (required)
     * @param  string $x_phrase_app_otp Two-Factor-Authentication token (optional) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function keyUpdateAsync($project_id, $id, $key_update_parameters, $x_phrase_app_otp = null)
    {
        return $this->keyUpdateAsyncWithHttpInfo($project_id, $id, $key_update_parameters, $x_phrase_app_otp)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation keyUpdateAsyncWithHttpInfo
     *
     * Update a key
     *
     * @param  string $project_id Project ID (required)
     * @param  string $id ID (required)
     * @param  \Phrase\Model\KeyUpdateParameters $key_update_parameters (required)
     * @param  string $x_phrase_app_otp Two-Factor-Authentication token (optional) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function keyUpdateAsyncWithHttpInfo($project_id, $id, $key_update_parameters, $x_phrase_app_otp = null)
    {
        $returnType = '\Phrase\Model\TranslationKeyDetails';
        $request = $this->keyUpdateRequest($project_id, $id, $key_update_parameters, $x_phrase_app_otp);

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
     * Create request for operation 'keyUpdate'
     *
     * @param  string $project_id Project ID (required)
     * @param  string $id ID (required)
     * @param  \Phrase\Model\KeyUpdateParameters $key_update_parameters (required)
     * @param  string $x_phrase_app_otp Two-Factor-Authentication token (optional) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function keyUpdateRequest($project_id, $id, $key_update_parameters, $x_phrase_app_otp = null)
    {
        // verify the required parameter 'project_id' is set
        if ($project_id === null || (is_array($project_id) && count($project_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $project_id when calling keyUpdate'
            );
        }
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling keyUpdate'
            );
        }
        // verify the required parameter 'key_update_parameters' is set
        if ($key_update_parameters === null || (is_array($key_update_parameters) && count($key_update_parameters) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $key_update_parameters when calling keyUpdate'
            );
        }

        $resourcePath = '/projects/{project_id}/keys/{id}';
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
        if (isset($key_update_parameters)) {
            $_tempBody = $key_update_parameters;
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
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
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

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'PATCH',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation keysDelete
     *
     * Delete collection of keys
     *
     * @param  string $project_id Project ID (required)
     * @param  string $x_phrase_app_otp Two-Factor-Authentication token (optional) (optional)
     * @param  string $branch specify the branch to use (optional)
     * @param  string $q q_description_placeholder (optional)
     * @param  string $locale_id Locale used to determine the translation state of a key when filtering for untranslated or translated keys. (optional)
     *
     * @throws \Phrase\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Phrase\Model\AffectedResources
     */
    public function keysDelete($project_id, $x_phrase_app_otp = null, $branch = null, $q = null, $locale_id = null)
    {
        list($response) = $this->keysDeleteWithHttpInfo($project_id, $x_phrase_app_otp, $branch, $q, $locale_id);
        return $response;
    }

    /**
     * Operation keysDeleteWithHttpInfo
     *
     * Delete collection of keys
     *
     * @param  string $project_id Project ID (required)
     * @param  string $x_phrase_app_otp Two-Factor-Authentication token (optional) (optional)
     * @param  string $branch specify the branch to use (optional)
     * @param  string $q q_description_placeholder (optional)
     * @param  string $locale_id Locale used to determine the translation state of a key when filtering for untranslated or translated keys. (optional)
     *
     * @throws \Phrase\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Phrase\Model\AffectedResources, HTTP status code, HTTP response headers (array of strings)
     */
    public function keysDeleteWithHttpInfo($project_id, $x_phrase_app_otp = null, $branch = null, $q = null, $locale_id = null)
    {
        $request = $this->keysDeleteRequest($project_id, $x_phrase_app_otp, $branch, $q, $locale_id);

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
                    if ('\Phrase\Model\AffectedResources' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Phrase\Model\AffectedResources', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Phrase\Model\AffectedResources';
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
                        '\Phrase\Model\AffectedResources',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation keysDeleteAsync
     *
     * Delete collection of keys
     *
     * @param  string $project_id Project ID (required)
     * @param  string $x_phrase_app_otp Two-Factor-Authentication token (optional) (optional)
     * @param  string $branch specify the branch to use (optional)
     * @param  string $q q_description_placeholder (optional)
     * @param  string $locale_id Locale used to determine the translation state of a key when filtering for untranslated or translated keys. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function keysDeleteAsync($project_id, $x_phrase_app_otp = null, $branch = null, $q = null, $locale_id = null)
    {
        return $this->keysDeleteAsyncWithHttpInfo($project_id, $x_phrase_app_otp, $branch, $q, $locale_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation keysDeleteAsyncWithHttpInfo
     *
     * Delete collection of keys
     *
     * @param  string $project_id Project ID (required)
     * @param  string $x_phrase_app_otp Two-Factor-Authentication token (optional) (optional)
     * @param  string $branch specify the branch to use (optional)
     * @param  string $q q_description_placeholder (optional)
     * @param  string $locale_id Locale used to determine the translation state of a key when filtering for untranslated or translated keys. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function keysDeleteAsyncWithHttpInfo($project_id, $x_phrase_app_otp = null, $branch = null, $q = null, $locale_id = null)
    {
        $returnType = '\Phrase\Model\AffectedResources';
        $request = $this->keysDeleteRequest($project_id, $x_phrase_app_otp, $branch, $q, $locale_id);

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
     * Create request for operation 'keysDelete'
     *
     * @param  string $project_id Project ID (required)
     * @param  string $x_phrase_app_otp Two-Factor-Authentication token (optional) (optional)
     * @param  string $branch specify the branch to use (optional)
     * @param  string $q q_description_placeholder (optional)
     * @param  string $locale_id Locale used to determine the translation state of a key when filtering for untranslated or translated keys. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function keysDeleteRequest($project_id, $x_phrase_app_otp = null, $branch = null, $q = null, $locale_id = null)
    {
        // verify the required parameter 'project_id' is set
        if ($project_id === null || (is_array($project_id) && count($project_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $project_id when calling keysDelete'
            );
        }

        $resourcePath = '/projects/{project_id}/keys';
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
        // query params
        if ($q !== null) {
            if('form' === 'form' && is_array($q)) {
                foreach($q as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['q'] = $q;
            }
        }
        // query params
        if ($locale_id !== null) {
            if('form' === 'form' && is_array($locale_id)) {
                foreach($locale_id as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['locale_id'] = $locale_id;
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
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
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

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'DELETE',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation keysList
     *
     * List keys
     *
     * @param  string $project_id Project ID (required)
     * @param  string $x_phrase_app_otp Two-Factor-Authentication token (optional) (optional)
     * @param  int $page Page number (optional)
     * @param  int $per_page allows you to specify a page size up to 100 items, 10 by default (optional)
     * @param  string $branch specify the branch to use (optional)
     * @param  string $sort Sort by field. Can be one of: name, created_at, updated_at. (optional)
     * @param  string $order Order direction. Can be one of: asc, desc. (optional)
     * @param  string $q q_description_placeholder (optional)
     * @param  string $locale_id Locale used to determine the translation state of a key when filtering for untranslated or translated keys. (optional)
     *
     * @throws \Phrase\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Phrase\Model\TranslationKey[]
     */
    public function keysList($project_id, $x_phrase_app_otp = null, $page = null, $per_page = null, $branch = null, $sort = null, $order = null, $q = null, $locale_id = null)
    {
        list($response) = $this->keysListWithHttpInfo($project_id, $x_phrase_app_otp, $page, $per_page, $branch, $sort, $order, $q, $locale_id);
        return $response;
    }

    /**
     * Operation keysListWithHttpInfo
     *
     * List keys
     *
     * @param  string $project_id Project ID (required)
     * @param  string $x_phrase_app_otp Two-Factor-Authentication token (optional) (optional)
     * @param  int $page Page number (optional)
     * @param  int $per_page allows you to specify a page size up to 100 items, 10 by default (optional)
     * @param  string $branch specify the branch to use (optional)
     * @param  string $sort Sort by field. Can be one of: name, created_at, updated_at. (optional)
     * @param  string $order Order direction. Can be one of: asc, desc. (optional)
     * @param  string $q q_description_placeholder (optional)
     * @param  string $locale_id Locale used to determine the translation state of a key when filtering for untranslated or translated keys. (optional)
     *
     * @throws \Phrase\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Phrase\Model\TranslationKey[], HTTP status code, HTTP response headers (array of strings)
     */
    public function keysListWithHttpInfo($project_id, $x_phrase_app_otp = null, $page = null, $per_page = null, $branch = null, $sort = null, $order = null, $q = null, $locale_id = null)
    {
        $request = $this->keysListRequest($project_id, $x_phrase_app_otp, $page, $per_page, $branch, $sort, $order, $q, $locale_id);

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
                    if ('\Phrase\Model\TranslationKey[]' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Phrase\Model\TranslationKey[]', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Phrase\Model\TranslationKey[]';
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
                        '\Phrase\Model\TranslationKey[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation keysListAsync
     *
     * List keys
     *
     * @param  string $project_id Project ID (required)
     * @param  string $x_phrase_app_otp Two-Factor-Authentication token (optional) (optional)
     * @param  int $page Page number (optional)
     * @param  int $per_page allows you to specify a page size up to 100 items, 10 by default (optional)
     * @param  string $branch specify the branch to use (optional)
     * @param  string $sort Sort by field. Can be one of: name, created_at, updated_at. (optional)
     * @param  string $order Order direction. Can be one of: asc, desc. (optional)
     * @param  string $q q_description_placeholder (optional)
     * @param  string $locale_id Locale used to determine the translation state of a key when filtering for untranslated or translated keys. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function keysListAsync($project_id, $x_phrase_app_otp = null, $page = null, $per_page = null, $branch = null, $sort = null, $order = null, $q = null, $locale_id = null)
    {
        return $this->keysListAsyncWithHttpInfo($project_id, $x_phrase_app_otp, $page, $per_page, $branch, $sort, $order, $q, $locale_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation keysListAsyncWithHttpInfo
     *
     * List keys
     *
     * @param  string $project_id Project ID (required)
     * @param  string $x_phrase_app_otp Two-Factor-Authentication token (optional) (optional)
     * @param  int $page Page number (optional)
     * @param  int $per_page allows you to specify a page size up to 100 items, 10 by default (optional)
     * @param  string $branch specify the branch to use (optional)
     * @param  string $sort Sort by field. Can be one of: name, created_at, updated_at. (optional)
     * @param  string $order Order direction. Can be one of: asc, desc. (optional)
     * @param  string $q q_description_placeholder (optional)
     * @param  string $locale_id Locale used to determine the translation state of a key when filtering for untranslated or translated keys. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function keysListAsyncWithHttpInfo($project_id, $x_phrase_app_otp = null, $page = null, $per_page = null, $branch = null, $sort = null, $order = null, $q = null, $locale_id = null)
    {
        $returnType = '\Phrase\Model\TranslationKey[]';
        $request = $this->keysListRequest($project_id, $x_phrase_app_otp, $page, $per_page, $branch, $sort, $order, $q, $locale_id);

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
     * Create request for operation 'keysList'
     *
     * @param  string $project_id Project ID (required)
     * @param  string $x_phrase_app_otp Two-Factor-Authentication token (optional) (optional)
     * @param  int $page Page number (optional)
     * @param  int $per_page allows you to specify a page size up to 100 items, 10 by default (optional)
     * @param  string $branch specify the branch to use (optional)
     * @param  string $sort Sort by field. Can be one of: name, created_at, updated_at. (optional)
     * @param  string $order Order direction. Can be one of: asc, desc. (optional)
     * @param  string $q q_description_placeholder (optional)
     * @param  string $locale_id Locale used to determine the translation state of a key when filtering for untranslated or translated keys. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function keysListRequest($project_id, $x_phrase_app_otp = null, $page = null, $per_page = null, $branch = null, $sort = null, $order = null, $q = null, $locale_id = null)
    {
        // verify the required parameter 'project_id' is set
        if ($project_id === null || (is_array($project_id) && count($project_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $project_id when calling keysList'
            );
        }

        $resourcePath = '/projects/{project_id}/keys';
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
        // query params
        if ($sort !== null) {
            if('form' === 'form' && is_array($sort)) {
                foreach($sort as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['sort'] = $sort;
            }
        }
        // query params
        if ($order !== null) {
            if('form' === 'form' && is_array($order)) {
                foreach($order as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['order'] = $order;
            }
        }
        // query params
        if ($q !== null) {
            if('form' === 'form' && is_array($q)) {
                foreach($q as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['q'] = $q;
            }
        }
        // query params
        if ($locale_id !== null) {
            if('form' === 'form' && is_array($locale_id)) {
                foreach($locale_id as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['locale_id'] = $locale_id;
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
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
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

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation keysSearch
     *
     * Search keys
     *
     * @param  string $project_id Project ID (required)
     * @param  \Phrase\Model\KeysSearchParameters $keys_search_parameters keys_search_parameters (required)
     * @param  string $x_phrase_app_otp Two-Factor-Authentication token (optional) (optional)
     * @param  int $page Page number (optional)
     * @param  int $per_page allows you to specify a page size up to 100 items, 10 by default (optional)
     *
     * @throws \Phrase\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Phrase\Model\TranslationKey[]
     */
    public function keysSearch($project_id, $keys_search_parameters, $x_phrase_app_otp = null, $page = null, $per_page = null)
    {
        list($response) = $this->keysSearchWithHttpInfo($project_id, $keys_search_parameters, $x_phrase_app_otp, $page, $per_page);
        return $response;
    }

    /**
     * Operation keysSearchWithHttpInfo
     *
     * Search keys
     *
     * @param  string $project_id Project ID (required)
     * @param  \Phrase\Model\KeysSearchParameters $keys_search_parameters (required)
     * @param  string $x_phrase_app_otp Two-Factor-Authentication token (optional) (optional)
     * @param  int $page Page number (optional)
     * @param  int $per_page allows you to specify a page size up to 100 items, 10 by default (optional)
     *
     * @throws \Phrase\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Phrase\Model\TranslationKey[], HTTP status code, HTTP response headers (array of strings)
     */
    public function keysSearchWithHttpInfo($project_id, $keys_search_parameters, $x_phrase_app_otp = null, $page = null, $per_page = null)
    {
        $request = $this->keysSearchRequest($project_id, $keys_search_parameters, $x_phrase_app_otp, $page, $per_page);

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
                    if ('\Phrase\Model\TranslationKey[]' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Phrase\Model\TranslationKey[]', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Phrase\Model\TranslationKey[]';
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
                        '\Phrase\Model\TranslationKey[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation keysSearchAsync
     *
     * Search keys
     *
     * @param  string $project_id Project ID (required)
     * @param  \Phrase\Model\KeysSearchParameters $keys_search_parameters (required)
     * @param  string $x_phrase_app_otp Two-Factor-Authentication token (optional) (optional)
     * @param  int $page Page number (optional)
     * @param  int $per_page allows you to specify a page size up to 100 items, 10 by default (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function keysSearchAsync($project_id, $keys_search_parameters, $x_phrase_app_otp = null, $page = null, $per_page = null)
    {
        return $this->keysSearchAsyncWithHttpInfo($project_id, $keys_search_parameters, $x_phrase_app_otp, $page, $per_page)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation keysSearchAsyncWithHttpInfo
     *
     * Search keys
     *
     * @param  string $project_id Project ID (required)
     * @param  \Phrase\Model\KeysSearchParameters $keys_search_parameters (required)
     * @param  string $x_phrase_app_otp Two-Factor-Authentication token (optional) (optional)
     * @param  int $page Page number (optional)
     * @param  int $per_page allows you to specify a page size up to 100 items, 10 by default (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function keysSearchAsyncWithHttpInfo($project_id, $keys_search_parameters, $x_phrase_app_otp = null, $page = null, $per_page = null)
    {
        $returnType = '\Phrase\Model\TranslationKey[]';
        $request = $this->keysSearchRequest($project_id, $keys_search_parameters, $x_phrase_app_otp, $page, $per_page);

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
     * Create request for operation 'keysSearch'
     *
     * @param  string $project_id Project ID (required)
     * @param  \Phrase\Model\KeysSearchParameters $keys_search_parameters (required)
     * @param  string $x_phrase_app_otp Two-Factor-Authentication token (optional) (optional)
     * @param  int $page Page number (optional)
     * @param  int $per_page allows you to specify a page size up to 100 items, 10 by default (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function keysSearchRequest($project_id, $keys_search_parameters, $x_phrase_app_otp = null, $page = null, $per_page = null)
    {
        // verify the required parameter 'project_id' is set
        if ($project_id === null || (is_array($project_id) && count($project_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $project_id when calling keysSearch'
            );
        }
        // verify the required parameter 'keys_search_parameters' is set
        if ($keys_search_parameters === null || (is_array($keys_search_parameters) && count($keys_search_parameters) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $keys_search_parameters when calling keysSearch'
            );
        }

        $resourcePath = '/projects/{project_id}/keys/search';
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
        if (isset($keys_search_parameters)) {
            $_tempBody = $keys_search_parameters;
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
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
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

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation keysTag
     *
     * Add tags to collection of keys
     *
     * @param  string $project_id Project ID (required)
     * @param  \Phrase\Model\KeysTagParameters $keys_tag_parameters keys_tag_parameters (required)
     * @param  string $x_phrase_app_otp Two-Factor-Authentication token (optional) (optional)
     *
     * @throws \Phrase\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Phrase\Model\AffectedResources
     */
    public function keysTag($project_id, $keys_tag_parameters, $x_phrase_app_otp = null)
    {
        list($response) = $this->keysTagWithHttpInfo($project_id, $keys_tag_parameters, $x_phrase_app_otp);
        return $response;
    }

    /**
     * Operation keysTagWithHttpInfo
     *
     * Add tags to collection of keys
     *
     * @param  string $project_id Project ID (required)
     * @param  \Phrase\Model\KeysTagParameters $keys_tag_parameters (required)
     * @param  string $x_phrase_app_otp Two-Factor-Authentication token (optional) (optional)
     *
     * @throws \Phrase\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Phrase\Model\AffectedResources, HTTP status code, HTTP response headers (array of strings)
     */
    public function keysTagWithHttpInfo($project_id, $keys_tag_parameters, $x_phrase_app_otp = null)
    {
        $request = $this->keysTagRequest($project_id, $keys_tag_parameters, $x_phrase_app_otp);

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
                    if ('\Phrase\Model\AffectedResources' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Phrase\Model\AffectedResources', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Phrase\Model\AffectedResources';
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
                        '\Phrase\Model\AffectedResources',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation keysTagAsync
     *
     * Add tags to collection of keys
     *
     * @param  string $project_id Project ID (required)
     * @param  \Phrase\Model\KeysTagParameters $keys_tag_parameters (required)
     * @param  string $x_phrase_app_otp Two-Factor-Authentication token (optional) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function keysTagAsync($project_id, $keys_tag_parameters, $x_phrase_app_otp = null)
    {
        return $this->keysTagAsyncWithHttpInfo($project_id, $keys_tag_parameters, $x_phrase_app_otp)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation keysTagAsyncWithHttpInfo
     *
     * Add tags to collection of keys
     *
     * @param  string $project_id Project ID (required)
     * @param  \Phrase\Model\KeysTagParameters $keys_tag_parameters (required)
     * @param  string $x_phrase_app_otp Two-Factor-Authentication token (optional) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function keysTagAsyncWithHttpInfo($project_id, $keys_tag_parameters, $x_phrase_app_otp = null)
    {
        $returnType = '\Phrase\Model\AffectedResources';
        $request = $this->keysTagRequest($project_id, $keys_tag_parameters, $x_phrase_app_otp);

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
     * Create request for operation 'keysTag'
     *
     * @param  string $project_id Project ID (required)
     * @param  \Phrase\Model\KeysTagParameters $keys_tag_parameters (required)
     * @param  string $x_phrase_app_otp Two-Factor-Authentication token (optional) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function keysTagRequest($project_id, $keys_tag_parameters, $x_phrase_app_otp = null)
    {
        // verify the required parameter 'project_id' is set
        if ($project_id === null || (is_array($project_id) && count($project_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $project_id when calling keysTag'
            );
        }
        // verify the required parameter 'keys_tag_parameters' is set
        if ($keys_tag_parameters === null || (is_array($keys_tag_parameters) && count($keys_tag_parameters) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $keys_tag_parameters when calling keysTag'
            );
        }

        $resourcePath = '/projects/{project_id}/keys/tag';
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

        // body params
        $_tempBody = null;
        if (isset($keys_tag_parameters)) {
            $_tempBody = $keys_tag_parameters;
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
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
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

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'PATCH',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation keysUntag
     *
     * Remove tags from collection of keys
     *
     * @param  string $project_id Project ID (required)
     * @param  \Phrase\Model\KeysUntagParameters $keys_untag_parameters keys_untag_parameters (required)
     * @param  string $x_phrase_app_otp Two-Factor-Authentication token (optional) (optional)
     *
     * @throws \Phrase\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Phrase\Model\AffectedResources
     */
    public function keysUntag($project_id, $keys_untag_parameters, $x_phrase_app_otp = null)
    {
        list($response) = $this->keysUntagWithHttpInfo($project_id, $keys_untag_parameters, $x_phrase_app_otp);
        return $response;
    }

    /**
     * Operation keysUntagWithHttpInfo
     *
     * Remove tags from collection of keys
     *
     * @param  string $project_id Project ID (required)
     * @param  \Phrase\Model\KeysUntagParameters $keys_untag_parameters (required)
     * @param  string $x_phrase_app_otp Two-Factor-Authentication token (optional) (optional)
     *
     * @throws \Phrase\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Phrase\Model\AffectedResources, HTTP status code, HTTP response headers (array of strings)
     */
    public function keysUntagWithHttpInfo($project_id, $keys_untag_parameters, $x_phrase_app_otp = null)
    {
        $request = $this->keysUntagRequest($project_id, $keys_untag_parameters, $x_phrase_app_otp);

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
                    if ('\Phrase\Model\AffectedResources' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Phrase\Model\AffectedResources', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Phrase\Model\AffectedResources';
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
                        '\Phrase\Model\AffectedResources',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation keysUntagAsync
     *
     * Remove tags from collection of keys
     *
     * @param  string $project_id Project ID (required)
     * @param  \Phrase\Model\KeysUntagParameters $keys_untag_parameters (required)
     * @param  string $x_phrase_app_otp Two-Factor-Authentication token (optional) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function keysUntagAsync($project_id, $keys_untag_parameters, $x_phrase_app_otp = null)
    {
        return $this->keysUntagAsyncWithHttpInfo($project_id, $keys_untag_parameters, $x_phrase_app_otp)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation keysUntagAsyncWithHttpInfo
     *
     * Remove tags from collection of keys
     *
     * @param  string $project_id Project ID (required)
     * @param  \Phrase\Model\KeysUntagParameters $keys_untag_parameters (required)
     * @param  string $x_phrase_app_otp Two-Factor-Authentication token (optional) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function keysUntagAsyncWithHttpInfo($project_id, $keys_untag_parameters, $x_phrase_app_otp = null)
    {
        $returnType = '\Phrase\Model\AffectedResources';
        $request = $this->keysUntagRequest($project_id, $keys_untag_parameters, $x_phrase_app_otp);

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
     * Create request for operation 'keysUntag'
     *
     * @param  string $project_id Project ID (required)
     * @param  \Phrase\Model\KeysUntagParameters $keys_untag_parameters (required)
     * @param  string $x_phrase_app_otp Two-Factor-Authentication token (optional) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function keysUntagRequest($project_id, $keys_untag_parameters, $x_phrase_app_otp = null)
    {
        // verify the required parameter 'project_id' is set
        if ($project_id === null || (is_array($project_id) && count($project_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $project_id when calling keysUntag'
            );
        }
        // verify the required parameter 'keys_untag_parameters' is set
        if ($keys_untag_parameters === null || (is_array($keys_untag_parameters) && count($keys_untag_parameters) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $keys_untag_parameters when calling keysUntag'
            );
        }

        $resourcePath = '/projects/{project_id}/keys/untag';
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

        // body params
        $_tempBody = null;
        if (isset($keys_untag_parameters)) {
            $_tempBody = $keys_untag_parameters;
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
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
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

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'PATCH',
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
}
