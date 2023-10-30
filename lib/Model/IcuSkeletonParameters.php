<?php
/**
 * IcuSkeletonParameters
 *
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

namespace Phrase\Model;

use \ArrayAccess;
use \Phrase\ObjectSerializer;

/**
 * IcuSkeletonParameters Class Doc Comment
 *
 * @category Class
 * @package  Phrase
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class IcuSkeletonParameters implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'icu_skeleton_parameters';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'content' => 'string',
        'locale_codes' => 'string[]',
        'keep_content' => 'bool',
        'zero_form_enabled' => 'bool',
        'cldr_version' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'content' => null,
        'locale_codes' => null,
        'keep_content' => null,
        'zero_form_enabled' => null,
        'cldr_version' => null
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
        'content' => 'content',
        'locale_codes' => 'locale_codes',
        'keep_content' => 'keep_content',
        'zero_form_enabled' => 'zero_form_enabled',
        'cldr_version' => 'cldr_version'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'content' => 'setContent',
        'locale_codes' => 'setLocaleCodes',
        'keep_content' => 'setKeepContent',
        'zero_form_enabled' => 'setZeroFormEnabled',
        'cldr_version' => 'setCldrVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'content' => 'getContent',
        'locale_codes' => 'getLocaleCodes',
        'keep_content' => 'getKeepContent',
        'zero_form_enabled' => 'getZeroFormEnabled',
        'cldr_version' => 'getCldrVersion'
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
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
        $this->container['locale_codes'] = isset($data['locale_codes']) ? $data['locale_codes'] : null;
        $this->container['keep_content'] = isset($data['keep_content']) ? $data['keep_content'] : null;
        $this->container['zero_form_enabled'] = isset($data['zero_form_enabled']) ? $data['zero_form_enabled'] : null;
        $this->container['cldr_version'] = isset($data['cldr_version']) ? $data['cldr_version'] : null;
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
     * Gets content
     *
     * @return string|null
     */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
     * Sets content
     *
     * @param string|null $content Source content
     *
     * @return $this
     */
    public function setContent($content)
    {
        $this->container['content'] = $content;

        return $this;
    }

    /**
     * Gets locale_codes
     *
     * @return string[]|null
     */
    public function getLocaleCodes()
    {
        return $this->container['locale_codes'];
    }

    /**
     * Sets locale_codes
     *
     * @param string[]|null $locale_codes Locale codes
     *
     * @return $this
     */
    public function setLocaleCodes($locale_codes)
    {
        $this->container['locale_codes'] = $locale_codes;

        return $this;
    }

    /**
     * Gets keep_content
     *
     * @return bool|null
     */
    public function getKeepContent()
    {
        return $this->container['keep_content'];
    }

    /**
     * Sets keep_content
     *
     * @param bool|null $keep_content Keep the content and add missing plural forms for each locale
     *
     * @return $this
     */
    public function setKeepContent($keep_content)
    {
        $this->container['keep_content'] = $keep_content;

        return $this;
    }

    /**
     * Gets zero_form_enabled
     *
     * @return bool|null
     */
    public function getZeroFormEnabled()
    {
        return $this->container['zero_form_enabled'];
    }

    /**
     * Sets zero_form_enabled
     *
     * @param bool|null $zero_form_enabled Indicates whether the zero form should be included or excluded in the returned skeletons
     *
     * @return $this
     */
    public function setZeroFormEnabled($zero_form_enabled)
    {
        $this->container['zero_form_enabled'] = $zero_form_enabled;

        return $this;
    }

    /**
     * Gets cldr_version
     *
     * @return string|null
     */
    public function getCldrVersion()
    {
        return $this->container['cldr_version'];
    }

    /**
     * Sets cldr_version
     *
     * @param string|null $cldr_version Strings supports two CLDR variants, when it comes to pluralization rules. \\ You can choose which one you want to use when constructing the skeletons. Possible values \\ are `legacy` and `cldr_41`. Default value is `legacy`.
     *
     * @return $this
     */
    public function setCldrVersion($cldr_version)
    {
        $this->container['cldr_version'] = $cldr_version;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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


