<?php
/**
 * UploadCreateParameters
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
 * OpenAPI Generator version: 4.3.1
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
 * UploadCreateParameters Class Doc Comment
 *
 * @category Class
 * @package  Phrase
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class UploadCreateParameters implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'upload_create_parameters';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'branch' => 'string',
        'file' => '\SplFileObject',
        'file_format' => 'string',
        'locale_id' => 'string',
        'tags' => 'string',
        'update_translations' => 'bool',
        'update_descriptions' => 'bool',
        'convert_emoji' => 'bool',
        'skip_upload_tags' => 'bool',
        'skip_unverification' => 'bool',
        'file_encoding' => 'string',
        'locale_mapping' => 'map[string,string]',
        'format_options' => 'map[string,string]',
        'autotranslate' => 'bool',
        'mark_reviewed' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'branch' => null,
        'file' => 'binary',
        'file_format' => null,
        'locale_id' => null,
        'tags' => null,
        'update_translations' => null,
        'update_descriptions' => null,
        'convert_emoji' => null,
        'skip_upload_tags' => null,
        'skip_unverification' => null,
        'file_encoding' => null,
        'locale_mapping' => null,
        'format_options' => null,
        'autotranslate' => null,
        'mark_reviewed' => null
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
        'file' => 'file',
        'file_format' => 'file_format',
        'locale_id' => 'locale_id',
        'tags' => 'tags',
        'update_translations' => 'update_translations',
        'update_descriptions' => 'update_descriptions',
        'convert_emoji' => 'convert_emoji',
        'skip_upload_tags' => 'skip_upload_tags',
        'skip_unverification' => 'skip_unverification',
        'file_encoding' => 'file_encoding',
        'locale_mapping' => 'locale_mapping',
        'format_options' => 'format_options',
        'autotranslate' => 'autotranslate',
        'mark_reviewed' => 'mark_reviewed'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'branch' => 'setBranch',
        'file' => 'setFile',
        'file_format' => 'setFileFormat',
        'locale_id' => 'setLocaleId',
        'tags' => 'setTags',
        'update_translations' => 'setUpdateTranslations',
        'update_descriptions' => 'setUpdateDescriptions',
        'convert_emoji' => 'setConvertEmoji',
        'skip_upload_tags' => 'setSkipUploadTags',
        'skip_unverification' => 'setSkipUnverification',
        'file_encoding' => 'setFileEncoding',
        'locale_mapping' => 'setLocaleMapping',
        'format_options' => 'setFormatOptions',
        'autotranslate' => 'setAutotranslate',
        'mark_reviewed' => 'setMarkReviewed'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'branch' => 'getBranch',
        'file' => 'getFile',
        'file_format' => 'getFileFormat',
        'locale_id' => 'getLocaleId',
        'tags' => 'getTags',
        'update_translations' => 'getUpdateTranslations',
        'update_descriptions' => 'getUpdateDescriptions',
        'convert_emoji' => 'getConvertEmoji',
        'skip_upload_tags' => 'getSkipUploadTags',
        'skip_unverification' => 'getSkipUnverification',
        'file_encoding' => 'getFileEncoding',
        'locale_mapping' => 'getLocaleMapping',
        'format_options' => 'getFormatOptions',
        'autotranslate' => 'getAutotranslate',
        'mark_reviewed' => 'getMarkReviewed'
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
        $this->container['file'] = isset($data['file']) ? $data['file'] : null;
        $this->container['file_format'] = isset($data['file_format']) ? $data['file_format'] : null;
        $this->container['locale_id'] = isset($data['locale_id']) ? $data['locale_id'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['update_translations'] = isset($data['update_translations']) ? $data['update_translations'] : null;
        $this->container['update_descriptions'] = isset($data['update_descriptions']) ? $data['update_descriptions'] : null;
        $this->container['convert_emoji'] = isset($data['convert_emoji']) ? $data['convert_emoji'] : null;
        $this->container['skip_upload_tags'] = isset($data['skip_upload_tags']) ? $data['skip_upload_tags'] : null;
        $this->container['skip_unverification'] = isset($data['skip_unverification']) ? $data['skip_unverification'] : null;
        $this->container['file_encoding'] = isset($data['file_encoding']) ? $data['file_encoding'] : null;
        $this->container['locale_mapping'] = isset($data['locale_mapping']) ? $data['locale_mapping'] : null;
        $this->container['format_options'] = isset($data['format_options']) ? $data['format_options'] : null;
        $this->container['autotranslate'] = isset($data['autotranslate']) ? $data['autotranslate'] : null;
        $this->container['mark_reviewed'] = isset($data['mark_reviewed']) ? $data['mark_reviewed'] : null;
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
     * Gets file
     *
     * @return \SplFileObject|null
     */
    public function getFile()
    {
        return $this->container['file'];
    }

    /**
     * Sets file
     *
     * @param \SplFileObject|null $file File to be imported
     *
     * @return $this
     */
    public function setFile($file)
    {
        $this->container['file'] = $file;

        return $this;
    }

    /**
     * Gets file_format
     *
     * @return string|null
     */
    public function getFileFormat()
    {
        return $this->container['file_format'];
    }

    /**
     * Sets file_format
     *
     * @param string|null $file_format File format. Auto-detected when possible and not specified.
     *
     * @return $this
     */
    public function setFileFormat($file_format)
    {
        $this->container['file_format'] = $file_format;

        return $this;
    }

    /**
     * Gets locale_id
     *
     * @return string|null
     */
    public function getLocaleId()
    {
        return $this->container['locale_id'];
    }

    /**
     * Sets locale_id
     *
     * @param string|null $locale_id Locale of the file's content. Can be the name or public id of the locale. Preferred is the public id.
     *
     * @return $this
     */
    public function setLocaleId($locale_id)
    {
        $this->container['locale_id'] = $locale_id;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return string|null
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param string|null $tags List of tags separated by comma to be associated with the new keys contained in the upload.
     *
     * @return $this
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets update_translations
     *
     * @return bool|null
     */
    public function getUpdateTranslations()
    {
        return $this->container['update_translations'];
    }

    /**
     * Sets update_translations
     *
     * @param bool|null $update_translations Indicates whether existing translations should be updated with the file content.
     *
     * @return $this
     */
    public function setUpdateTranslations($update_translations)
    {
        $this->container['update_translations'] = $update_translations;

        return $this;
    }

    /**
     * Gets update_descriptions
     *
     * @return bool|null
     */
    public function getUpdateDescriptions()
    {
        return $this->container['update_descriptions'];
    }

    /**
     * Sets update_descriptions
     *
     * @param bool|null $update_descriptions Existing key descriptions will be updated with the file content. Empty descriptions overwrite existing descriptions.
     *
     * @return $this
     */
    public function setUpdateDescriptions($update_descriptions)
    {
        $this->container['update_descriptions'] = $update_descriptions;

        return $this;
    }

    /**
     * Gets convert_emoji
     *
     * @return bool|null
     */
    public function getConvertEmoji()
    {
        return $this->container['convert_emoji'];
    }

    /**
     * Sets convert_emoji
     *
     * @param bool|null $convert_emoji This option is obsolete. Providing the option will cause a bad request error.
     *
     * @return $this
     */
    public function setConvertEmoji($convert_emoji)
    {
        $this->container['convert_emoji'] = $convert_emoji;

        return $this;
    }

    /**
     * Gets skip_upload_tags
     *
     * @return bool|null
     */
    public function getSkipUploadTags()
    {
        return $this->container['skip_upload_tags'];
    }

    /**
     * Sets skip_upload_tags
     *
     * @param bool|null $skip_upload_tags Indicates whether the upload should not create upload tags.
     *
     * @return $this
     */
    public function setSkipUploadTags($skip_upload_tags)
    {
        $this->container['skip_upload_tags'] = $skip_upload_tags;

        return $this;
    }

    /**
     * Gets skip_unverification
     *
     * @return bool|null
     */
    public function getSkipUnverification()
    {
        return $this->container['skip_unverification'];
    }

    /**
     * Sets skip_unverification
     *
     * @param bool|null $skip_unverification Indicates whether the upload should unverify updated translations.
     *
     * @return $this
     */
    public function setSkipUnverification($skip_unverification)
    {
        $this->container['skip_unverification'] = $skip_unverification;

        return $this;
    }

    /**
     * Gets file_encoding
     *
     * @return string|null
     */
    public function getFileEncoding()
    {
        return $this->container['file_encoding'];
    }

    /**
     * Sets file_encoding
     *
     * @param string|null $file_encoding Enforces a specific encoding on the file contents. Valid options are \"UTF-8\", \"UTF-16\" and \"ISO-8859-1\".
     *
     * @return $this
     */
    public function setFileEncoding($file_encoding)
    {
        $this->container['file_encoding'] = $file_encoding;

        return $this;
    }

    /**
     * Gets locale_mapping
     *
     * @return map[string,string]|null
     */
    public function getLocaleMapping()
    {
        return $this->container['locale_mapping'];
    }

    /**
     * Sets locale_mapping
     *
     * @param map[string,string]|null $locale_mapping Optional, format specific mapping between locale names and the columns the translations to those locales are contained in.
     *
     * @return $this
     */
    public function setLocaleMapping($locale_mapping)
    {
        $this->container['locale_mapping'] = $locale_mapping;

        return $this;
    }

    /**
     * Gets format_options
     *
     * @return map[string,string]|null
     */
    public function getFormatOptions()
    {
        return $this->container['format_options'];
    }

    /**
     * Sets format_options
     *
     * @param map[string,string]|null $format_options Additional options available for specific formats. See our format guide for complete list.
     *
     * @return $this
     */
    public function setFormatOptions($format_options)
    {
        $this->container['format_options'] = $format_options;

        return $this;
    }

    /**
     * Gets autotranslate
     *
     * @return bool|null
     */
    public function getAutotranslate()
    {
        return $this->container['autotranslate'];
    }

    /**
     * Sets autotranslate
     *
     * @param bool|null $autotranslate If set, translations for the uploaded language will be fetched automatically.
     *
     * @return $this
     */
    public function setAutotranslate($autotranslate)
    {
        $this->container['autotranslate'] = $autotranslate;

        return $this;
    }

    /**
     * Gets mark_reviewed
     *
     * @return bool|null
     */
    public function getMarkReviewed()
    {
        return $this->container['mark_reviewed'];
    }

    /**
     * Sets mark_reviewed
     *
     * @param bool|null $mark_reviewed Indicated whether the imported translations should be marked as reviewed. This setting is available if the review workflow (currently beta) is enabled for the project.
     *
     * @return $this
     */
    public function setMarkReviewed($mark_reviewed)
    {
        $this->container['mark_reviewed'] = $mark_reviewed;

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


