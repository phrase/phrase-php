<?php
/**
 * ProjectReport
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
 * ProjectReport Class Doc Comment
 *
 * @category Class
 * @package  Phrase
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ProjectReport implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'project_report';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'locales_count' => 'int',
        'keys_count' => 'int',
        'translations_count' => 'int',
        'untranslated_keys_count' => 'int',
        'unverified_translations_count' => 'int',
        'reviewed_translations_count' => 'int',
        'managed_words_count' => 'int',
        'project' => '\Phrase\Model\ProjectShort'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'locales_count' => null,
        'keys_count' => null,
        'translations_count' => null,
        'untranslated_keys_count' => null,
        'unverified_translations_count' => null,
        'reviewed_translations_count' => null,
        'managed_words_count' => null,
        'project' => null
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
        'locales_count' => 'locales_count',
        'keys_count' => 'keys_count',
        'translations_count' => 'translations_count',
        'untranslated_keys_count' => 'untranslated_keys_count',
        'unverified_translations_count' => 'unverified_translations_count',
        'reviewed_translations_count' => 'reviewed_translations_count',
        'managed_words_count' => 'managed_words_count',
        'project' => 'project'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'locales_count' => 'setLocalesCount',
        'keys_count' => 'setKeysCount',
        'translations_count' => 'setTranslationsCount',
        'untranslated_keys_count' => 'setUntranslatedKeysCount',
        'unverified_translations_count' => 'setUnverifiedTranslationsCount',
        'reviewed_translations_count' => 'setReviewedTranslationsCount',
        'managed_words_count' => 'setManagedWordsCount',
        'project' => 'setProject'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'locales_count' => 'getLocalesCount',
        'keys_count' => 'getKeysCount',
        'translations_count' => 'getTranslationsCount',
        'untranslated_keys_count' => 'getUntranslatedKeysCount',
        'unverified_translations_count' => 'getUnverifiedTranslationsCount',
        'reviewed_translations_count' => 'getReviewedTranslationsCount',
        'managed_words_count' => 'getManagedWordsCount',
        'project' => 'getProject'
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
        $this->container['locales_count'] = isset($data['locales_count']) ? $data['locales_count'] : null;
        $this->container['keys_count'] = isset($data['keys_count']) ? $data['keys_count'] : null;
        $this->container['translations_count'] = isset($data['translations_count']) ? $data['translations_count'] : null;
        $this->container['untranslated_keys_count'] = isset($data['untranslated_keys_count']) ? $data['untranslated_keys_count'] : null;
        $this->container['unverified_translations_count'] = isset($data['unverified_translations_count']) ? $data['unverified_translations_count'] : null;
        $this->container['reviewed_translations_count'] = isset($data['reviewed_translations_count']) ? $data['reviewed_translations_count'] : null;
        $this->container['managed_words_count'] = isset($data['managed_words_count']) ? $data['managed_words_count'] : null;
        $this->container['project'] = isset($data['project']) ? $data['project'] : null;
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
     * Gets locales_count
     *
     * @return int|null
     */
    public function getLocalesCount()
    {
        return $this->container['locales_count'];
    }

    /**
     * Sets locales_count
     *
     * @param int|null $locales_count locales_count
     *
     * @return $this
     */
    public function setLocalesCount($locales_count)
    {
        $this->container['locales_count'] = $locales_count;

        return $this;
    }

    /**
     * Gets keys_count
     *
     * @return int|null
     */
    public function getKeysCount()
    {
        return $this->container['keys_count'];
    }

    /**
     * Sets keys_count
     *
     * @param int|null $keys_count keys_count
     *
     * @return $this
     */
    public function setKeysCount($keys_count)
    {
        $this->container['keys_count'] = $keys_count;

        return $this;
    }

    /**
     * Gets translations_count
     *
     * @return int|null
     */
    public function getTranslationsCount()
    {
        return $this->container['translations_count'];
    }

    /**
     * Sets translations_count
     *
     * @param int|null $translations_count translations_count
     *
     * @return $this
     */
    public function setTranslationsCount($translations_count)
    {
        $this->container['translations_count'] = $translations_count;

        return $this;
    }

    /**
     * Gets untranslated_keys_count
     *
     * @return int|null
     */
    public function getUntranslatedKeysCount()
    {
        return $this->container['untranslated_keys_count'];
    }

    /**
     * Sets untranslated_keys_count
     *
     * @param int|null $untranslated_keys_count untranslated_keys_count
     *
     * @return $this
     */
    public function setUntranslatedKeysCount($untranslated_keys_count)
    {
        $this->container['untranslated_keys_count'] = $untranslated_keys_count;

        return $this;
    }

    /**
     * Gets unverified_translations_count
     *
     * @return int|null
     */
    public function getUnverifiedTranslationsCount()
    {
        return $this->container['unverified_translations_count'];
    }

    /**
     * Sets unverified_translations_count
     *
     * @param int|null $unverified_translations_count unverified_translations_count
     *
     * @return $this
     */
    public function setUnverifiedTranslationsCount($unverified_translations_count)
    {
        $this->container['unverified_translations_count'] = $unverified_translations_count;

        return $this;
    }

    /**
     * Gets reviewed_translations_count
     *
     * @return int|null
     */
    public function getReviewedTranslationsCount()
    {
        return $this->container['reviewed_translations_count'];
    }

    /**
     * Sets reviewed_translations_count
     *
     * @param int|null $reviewed_translations_count reviewed_translations_count
     *
     * @return $this
     */
    public function setReviewedTranslationsCount($reviewed_translations_count)
    {
        $this->container['reviewed_translations_count'] = $reviewed_translations_count;

        return $this;
    }

    /**
     * Gets managed_words_count
     *
     * @return int|null
     */
    public function getManagedWordsCount()
    {
        return $this->container['managed_words_count'];
    }

    /**
     * Sets managed_words_count
     *
     * @param int|null $managed_words_count managed_words_count
     *
     * @return $this
     */
    public function setManagedWordsCount($managed_words_count)
    {
        $this->container['managed_words_count'] = $managed_words_count;

        return $this;
    }

    /**
     * Gets project
     *
     * @return \Phrase\Model\ProjectShort|null
     */
    public function getProject()
    {
        return $this->container['project'];
    }

    /**
     * Sets project
     *
     * @param \Phrase\Model\ProjectShort|null $project project
     *
     * @return $this
     */
    public function setProject($project)
    {
        $this->container['project'] = $project;

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

