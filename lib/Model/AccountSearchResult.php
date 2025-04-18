<?php
/**
 * AccountSearchResult
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
 * AccountSearchResult Class Doc Comment
 *
 * @category Class
 * @package  Phrase
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AccountSearchResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'account_search_result';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'query' => 'string',
        'excerpt' => 'string',
        'key' => '\Phrase\Model\KeyPreview',
        'locale' => '\Phrase\Model\LocalePreview',
        'project' => '\Phrase\Model\Project',
        'translation' => '\Phrase\Model\Translation',
        'other_translations' => '\Phrase\Model\Translation[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'query' => null,
        'excerpt' => null,
        'key' => null,
        'locale' => null,
        'project' => null,
        'translation' => null,
        'other_translations' => null
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
        'query' => 'query',
        'excerpt' => 'excerpt',
        'key' => 'key',
        'locale' => 'locale',
        'project' => 'project',
        'translation' => 'translation',
        'other_translations' => 'other_translations'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'query' => 'setQuery',
        'excerpt' => 'setExcerpt',
        'key' => 'setKey',
        'locale' => 'setLocale',
        'project' => 'setProject',
        'translation' => 'setTranslation',
        'other_translations' => 'setOtherTranslations'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'query' => 'getQuery',
        'excerpt' => 'getExcerpt',
        'key' => 'getKey',
        'locale' => 'getLocale',
        'project' => 'getProject',
        'translation' => 'getTranslation',
        'other_translations' => 'getOtherTranslations'
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
    public function __construct(?array $data = null)
    {
        $this->container['query'] = isset($data['query']) ? $data['query'] : null;
        $this->container['excerpt'] = isset($data['excerpt']) ? $data['excerpt'] : null;
        $this->container['key'] = isset($data['key']) ? $data['key'] : null;
        $this->container['locale'] = isset($data['locale']) ? $data['locale'] : null;
        $this->container['project'] = isset($data['project']) ? $data['project'] : null;
        $this->container['translation'] = isset($data['translation']) ? $data['translation'] : null;
        $this->container['other_translations'] = isset($data['other_translations']) ? $data['other_translations'] : null;
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
     * Gets query
     *
     * @return string|null
     */
    public function getQuery()
    {
        return $this->container['query'];
    }

    /**
     * Sets query
     *
     * @param string|null $query query
     *
     * @return $this
     */
    public function setQuery($query)
    {
        $this->container['query'] = $query;

        return $this;
    }

    /**
     * Gets excerpt
     *
     * @return string|null
     */
    public function getExcerpt()
    {
        return $this->container['excerpt'];
    }

    /**
     * Sets excerpt
     *
     * @param string|null $excerpt excerpt
     *
     * @return $this
     */
    public function setExcerpt($excerpt)
    {
        $this->container['excerpt'] = $excerpt;

        return $this;
    }

    /**
     * Gets key
     *
     * @return \Phrase\Model\KeyPreview|null
     */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
     * Sets key
     *
     * @param \Phrase\Model\KeyPreview|null $key key
     *
     * @return $this
     */
    public function setKey($key)
    {
        $this->container['key'] = $key;

        return $this;
    }

    /**
     * Gets locale
     *
     * @return \Phrase\Model\LocalePreview|null
     */
    public function getLocale()
    {
        return $this->container['locale'];
    }

    /**
     * Sets locale
     *
     * @param \Phrase\Model\LocalePreview|null $locale locale
     *
     * @return $this
     */
    public function setLocale($locale)
    {
        $this->container['locale'] = $locale;

        return $this;
    }

    /**
     * Gets project
     *
     * @return \Phrase\Model\Project|null
     */
    public function getProject()
    {
        return $this->container['project'];
    }

    /**
     * Sets project
     *
     * @param \Phrase\Model\Project|null $project project
     *
     * @return $this
     */
    public function setProject($project)
    {
        $this->container['project'] = $project;

        return $this;
    }

    /**
     * Gets translation
     *
     * @return \Phrase\Model\Translation|null
     */
    public function getTranslation()
    {
        return $this->container['translation'];
    }

    /**
     * Sets translation
     *
     * @param \Phrase\Model\Translation|null $translation translation
     *
     * @return $this
     */
    public function setTranslation($translation)
    {
        $this->container['translation'] = $translation;

        return $this;
    }

    /**
     * Gets other_translations
     *
     * @return \Phrase\Model\Translation[]|null
     */
    public function getOtherTranslations()
    {
        return $this->container['other_translations'];
    }

    /**
     * Sets other_translations
     *
     * @param \Phrase\Model\Translation[]|null $other_translations other_translations
     *
     * @return $this
     */
    public function setOtherTranslations($other_translations)
    {
        $this->container['other_translations'] = $other_translations;

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


