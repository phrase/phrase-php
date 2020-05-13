<?php
/**
 * OrderCreateParameters
 *
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

namespace Phrase\Model;

use \ArrayAccess;
use \Phrase\ObjectSerializer;

/**
 * OrderCreateParameters Class Doc Comment
 *
 * @category Class
 * @package  Phrase
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class OrderCreateParameters implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'order_create_parameters';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'branch' => 'string',
        'lsp' => 'string',
        'source_locale_id' => 'string',
        'target_locale_ids' => 'string[]',
        'translation_type' => 'string',
        'tag' => 'string',
        'message' => 'string',
        'styleguide_id' => 'string',
        'unverify_translations_upon_delivery' => 'bool',
        'include_untranslated_keys' => 'bool',
        'include_unverified_translations' => 'bool',
        'category' => 'string',
        'quality' => 'bool',
        'priority' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'branch' => null,
        'lsp' => null,
        'source_locale_id' => null,
        'target_locale_ids' => null,
        'translation_type' => null,
        'tag' => null,
        'message' => null,
        'styleguide_id' => null,
        'unverify_translations_upon_delivery' => null,
        'include_untranslated_keys' => null,
        'include_unverified_translations' => null,
        'category' => null,
        'quality' => null,
        'priority' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'branch' => 'branch',
        'lsp' => 'lsp',
        'source_locale_id' => 'source_locale_id',
        'target_locale_ids' => 'target_locale_ids',
        'translation_type' => 'translation_type',
        'tag' => 'tag',
        'message' => 'message',
        'styleguide_id' => 'styleguide_id',
        'unverify_translations_upon_delivery' => 'unverify_translations_upon_delivery',
        'include_untranslated_keys' => 'include_untranslated_keys',
        'include_unverified_translations' => 'include_unverified_translations',
        'category' => 'category',
        'quality' => 'quality',
        'priority' => 'priority'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'branch' => 'setBranch',
        'lsp' => 'setLsp',
        'source_locale_id' => 'setSourceLocaleId',
        'target_locale_ids' => 'setTargetLocaleIds',
        'translation_type' => 'setTranslationType',
        'tag' => 'setTag',
        'message' => 'setMessage',
        'styleguide_id' => 'setStyleguideId',
        'unverify_translations_upon_delivery' => 'setUnverifyTranslationsUponDelivery',
        'include_untranslated_keys' => 'setIncludeUntranslatedKeys',
        'include_unverified_translations' => 'setIncludeUnverifiedTranslations',
        'category' => 'setCategory',
        'quality' => 'setQuality',
        'priority' => 'setPriority'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'branch' => 'getBranch',
        'lsp' => 'getLsp',
        'source_locale_id' => 'getSourceLocaleId',
        'target_locale_ids' => 'getTargetLocaleIds',
        'translation_type' => 'getTranslationType',
        'tag' => 'getTag',
        'message' => 'getMessage',
        'styleguide_id' => 'getStyleguideId',
        'unverify_translations_upon_delivery' => 'getUnverifyTranslationsUponDelivery',
        'include_untranslated_keys' => 'getIncludeUntranslatedKeys',
        'include_unverified_translations' => 'getIncludeUnverifiedTranslations',
        'category' => 'getCategory',
        'quality' => 'getQuality',
        'priority' => 'getPriority'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['branch'] = isset($data['branch']) ? $data['branch'] : null;
        $this->container['lsp'] = isset($data['lsp']) ? $data['lsp'] : null;
        $this->container['source_locale_id'] = isset($data['source_locale_id']) ? $data['source_locale_id'] : null;
        $this->container['target_locale_ids'] = isset($data['target_locale_ids']) ? $data['target_locale_ids'] : null;
        $this->container['translation_type'] = isset($data['translation_type']) ? $data['translation_type'] : null;
        $this->container['tag'] = isset($data['tag']) ? $data['tag'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['styleguide_id'] = isset($data['styleguide_id']) ? $data['styleguide_id'] : null;
        $this->container['unverify_translations_upon_delivery'] = isset($data['unverify_translations_upon_delivery']) ? $data['unverify_translations_upon_delivery'] : null;
        $this->container['include_untranslated_keys'] = isset($data['include_untranslated_keys']) ? $data['include_untranslated_keys'] : null;
        $this->container['include_unverified_translations'] = isset($data['include_unverified_translations']) ? $data['include_unverified_translations'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['quality'] = isset($data['quality']) ? $data['quality'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets branch
     *
     * @return string|null
     */
    public function getBranch()
    {
        return $this->container['branch'];
    }

    /**
     * Sets branch
     *
     * @param string|null $branch specify the branch to use
     *
     * @return $this
     */
    public function setBranch($branch)
    {
        $this->container['branch'] = $branch;

        return $this;
    }

    /**
     * Gets lsp
     *
     * @return string|null
     */
    public function getLsp()
    {
        return $this->container['lsp'];
    }

    /**
     * Sets lsp
     *
     * @param string|null $lsp Name of the LSP that should process this order. Can be one of gengo, textmaster.
     *
     * @return $this
     */
    public function setLsp($lsp)
    {
        $this->container['lsp'] = $lsp;

        return $this;
    }

    /**
     * Gets source_locale_id
     *
     * @return string|null
     */
    public function getSourceLocaleId()
    {
        return $this->container['source_locale_id'];
    }

    /**
     * Sets source_locale_id
     *
     * @param string|null $source_locale_id Source locale for the order. Can be the name or public id of the source locale. Preferred is the public id.
     *
     * @return $this
     */
    public function setSourceLocaleId($source_locale_id)
    {
        $this->container['source_locale_id'] = $source_locale_id;

        return $this;
    }

    /**
     * Gets target_locale_ids
     *
     * @return string[]|null
     */
    public function getTargetLocaleIds()
    {
        return $this->container['target_locale_ids'];
    }

    /**
     * Sets target_locale_ids
     *
     * @param string[]|null $target_locale_ids List of target locales you want the source content translate to. Can be the name or public id of the target locales. Preferred is the public id.
     *
     * @return $this
     */
    public function setTargetLocaleIds($target_locale_ids)
    {
        $this->container['target_locale_ids'] = $target_locale_ids;

        return $this;
    }

    /**
     * Gets translation_type
     *
     * @return string|null
     */
    public function getTranslationType()
    {
        return $this->container['translation_type'];
    }

    /**
     * Sets translation_type
     *
     * @param string|null $translation_type Name of the quality level, availability depends on the LSP. Can be one of:  standard, pro (for orders processed by Gengo) and one of regular, premium, enterprise (for orders processed by TextMaster)
     *
     * @return $this
     */
    public function setTranslationType($translation_type)
    {
        $this->container['translation_type'] = $translation_type;

        return $this;
    }

    /**
     * Gets tag
     *
     * @return string|null
     */
    public function getTag()
    {
        return $this->container['tag'];
    }

    /**
     * Sets tag
     *
     * @param string|null $tag Tag you want to order translations for.
     *
     * @return $this
     */
    public function setTag($tag)
    {
        $this->container['tag'] = $tag;

        return $this;
    }

    /**
     * Gets message
     *
     * @return string|null
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string|null $message Message that is displayed to the translators for description.
     *
     * @return $this
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets styleguide_id
     *
     * @return string|null
     */
    public function getStyleguideId()
    {
        return $this->container['styleguide_id'];
    }

    /**
     * Sets styleguide_id
     *
     * @param string|null $styleguide_id Style guide for translators to be sent with the order.
     *
     * @return $this
     */
    public function setStyleguideId($styleguide_id)
    {
        $this->container['styleguide_id'] = $styleguide_id;

        return $this;
    }

    /**
     * Gets unverify_translations_upon_delivery
     *
     * @return bool|null
     */
    public function getUnverifyTranslationsUponDelivery()
    {
        return $this->container['unverify_translations_upon_delivery'];
    }

    /**
     * Sets unverify_translations_upon_delivery
     *
     * @param bool|null $unverify_translations_upon_delivery Unverify translations upon delivery.
     *
     * @return $this
     */
    public function setUnverifyTranslationsUponDelivery($unverify_translations_upon_delivery)
    {
        $this->container['unverify_translations_upon_delivery'] = $unverify_translations_upon_delivery;

        return $this;
    }

    /**
     * Gets include_untranslated_keys
     *
     * @return bool|null
     */
    public function getIncludeUntranslatedKeys()
    {
        return $this->container['include_untranslated_keys'];
    }

    /**
     * Sets include_untranslated_keys
     *
     * @param bool|null $include_untranslated_keys Order translations for keys with untranslated content in the selected target locales.
     *
     * @return $this
     */
    public function setIncludeUntranslatedKeys($include_untranslated_keys)
    {
        $this->container['include_untranslated_keys'] = $include_untranslated_keys;

        return $this;
    }

    /**
     * Gets include_unverified_translations
     *
     * @return bool|null
     */
    public function getIncludeUnverifiedTranslations()
    {
        return $this->container['include_unverified_translations'];
    }

    /**
     * Sets include_unverified_translations
     *
     * @param bool|null $include_unverified_translations Order translations for keys with unverified content in the selected target locales.
     *
     * @return $this
     */
    public function setIncludeUnverifiedTranslations($include_unverified_translations)
    {
        $this->container['include_unverified_translations'] = $include_unverified_translations;

        return $this;
    }

    /**
     * Gets category
     *
     * @return string|null
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param string|null $category Category to use (required for orders processed by TextMaster).
     *
     * @return $this
     */
    public function setCategory($category)
    {
        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets quality
     *
     * @return bool|null
     */
    public function getQuality()
    {
        return $this->container['quality'];
    }

    /**
     * Sets quality
     *
     * @param bool|null $quality Extra proofreading option to ensure consistency in vocabulary and style. Only available for orders processed by TextMaster.
     *
     * @return $this
     */
    public function setQuality($quality)
    {
        $this->container['quality'] = $quality;

        return $this;
    }

    /**
     * Gets priority
     *
     * @return bool|null
     */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
     * Sets priority
     *
     * @param bool|null $priority Indicates whether the priority option should be ordered which decreases turnaround time by 30%. Available only for orders processed by TextMaster.
     *
     * @return $this
     */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


