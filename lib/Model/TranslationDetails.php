<?php
/**
 * TranslationDetails
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
 * TranslationDetails Class Doc Comment
 *
 * @category Class
 * @package  Phrase
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TranslationDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'translation_details';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'content' => 'string',
        'unverified' => 'bool',
        'excluded' => 'bool',
        'plural_suffix' => 'string',
        'key' => '\Phrase\Model\KeyPreview',
        'locale' => '\Phrase\Model\LocalePreview',
        'placeholders' => 'string[]',
        'state' => 'string',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'user' => '\Phrase\Model\UserPreview',
        'word_count' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => null,
        'content' => null,
        'unverified' => null,
        'excluded' => null,
        'plural_suffix' => null,
        'key' => null,
        'locale' => null,
        'placeholders' => null,
        'state' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'user' => null,
        'word_count' => null
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
        'id' => 'id',
        'content' => 'content',
        'unverified' => 'unverified',
        'excluded' => 'excluded',
        'plural_suffix' => 'plural_suffix',
        'key' => 'key',
        'locale' => 'locale',
        'placeholders' => 'placeholders',
        'state' => 'state',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at',
        'user' => 'user',
        'word_count' => 'word_count'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'content' => 'setContent',
        'unverified' => 'setUnverified',
        'excluded' => 'setExcluded',
        'plural_suffix' => 'setPluralSuffix',
        'key' => 'setKey',
        'locale' => 'setLocale',
        'placeholders' => 'setPlaceholders',
        'state' => 'setState',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'user' => 'setUser',
        'word_count' => 'setWordCount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'content' => 'getContent',
        'unverified' => 'getUnverified',
        'excluded' => 'getExcluded',
        'plural_suffix' => 'getPluralSuffix',
        'key' => 'getKey',
        'locale' => 'getLocale',
        'placeholders' => 'getPlaceholders',
        'state' => 'getState',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'user' => 'getUser',
        'word_count' => 'getWordCount'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
        $this->container['unverified'] = isset($data['unverified']) ? $data['unverified'] : null;
        $this->container['excluded'] = isset($data['excluded']) ? $data['excluded'] : null;
        $this->container['plural_suffix'] = isset($data['plural_suffix']) ? $data['plural_suffix'] : null;
        $this->container['key'] = isset($data['key']) ? $data['key'] : null;
        $this->container['locale'] = isset($data['locale']) ? $data['locale'] : null;
        $this->container['placeholders'] = isset($data['placeholders']) ? $data['placeholders'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['word_count'] = isset($data['word_count']) ? $data['word_count'] : null;
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
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
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
     * @param string|null $content content
     *
     * @return $this
     */
    public function setContent($content)
    {
        $this->container['content'] = $content;

        return $this;
    }

    /**
     * Gets unverified
     *
     * @return bool|null
     */
    public function getUnverified()
    {
        return $this->container['unverified'];
    }

    /**
     * Sets unverified
     *
     * @param bool|null $unverified unverified
     *
     * @return $this
     */
    public function setUnverified($unverified)
    {
        $this->container['unverified'] = $unverified;

        return $this;
    }

    /**
     * Gets excluded
     *
     * @return bool|null
     */
    public function getExcluded()
    {
        return $this->container['excluded'];
    }

    /**
     * Sets excluded
     *
     * @param bool|null $excluded excluded
     *
     * @return $this
     */
    public function setExcluded($excluded)
    {
        $this->container['excluded'] = $excluded;

        return $this;
    }

    /**
     * Gets plural_suffix
     *
     * @return string|null
     */
    public function getPluralSuffix()
    {
        return $this->container['plural_suffix'];
    }

    /**
     * Sets plural_suffix
     *
     * @param string|null $plural_suffix plural_suffix
     *
     * @return $this
     */
    public function setPluralSuffix($plural_suffix)
    {
        $this->container['plural_suffix'] = $plural_suffix;

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
     * Gets placeholders
     *
     * @return string[]|null
     */
    public function getPlaceholders()
    {
        return $this->container['placeholders'];
    }

    /**
     * Sets placeholders
     *
     * @param string[]|null $placeholders placeholders
     *
     * @return $this
     */
    public function setPlaceholders($placeholders)
    {
        $this->container['placeholders'] = $placeholders;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string|null $state state
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime|null $created_at created_at
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime|null $updated_at updated_at
     *
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets user
     *
     * @return \Phrase\Model\UserPreview|null
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     *
     * @param \Phrase\Model\UserPreview|null $user user
     *
     * @return $this
     */
    public function setUser($user)
    {
        $this->container['user'] = $user;

        return $this;
    }

    /**
     * Gets word_count
     *
     * @return int|null
     */
    public function getWordCount()
    {
        return $this->container['word_count'];
    }

    /**
     * Sets word_count
     *
     * @param int|null $word_count word_count
     *
     * @return $this
     */
    public function setWordCount($word_count)
    {
        $this->container['word_count'] = $word_count;

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


