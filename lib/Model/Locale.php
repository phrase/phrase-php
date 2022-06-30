<?php
/**
 * Locale
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
 * Locale Class Doc Comment
 *
 * @category Class
 * @package  Phrase
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Locale implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'locale';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'name' => 'string',
        'code' => 'string',
        'default' => 'bool',
        'main' => 'bool',
        'rtl' => 'bool',
        'plural_forms' => 'string[]',
        'source_locale' => '\Phrase\Model\LocalePreview',
        'fallback_locale' => '\Phrase\Model\LocalePreview',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'code' => null,
        'default' => null,
        'main' => null,
        'rtl' => null,
        'plural_forms' => null,
        'source_locale' => null,
        'fallback_locale' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time'
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
        'name' => 'name',
        'code' => 'code',
        'default' => 'default',
        'main' => 'main',
        'rtl' => 'rtl',
        'plural_forms' => 'plural_forms',
        'source_locale' => 'source_locale',
        'fallback_locale' => 'fallback_locale',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'code' => 'setCode',
        'default' => 'setDefault',
        'main' => 'setMain',
        'rtl' => 'setRtl',
        'plural_forms' => 'setPluralForms',
        'source_locale' => 'setSourceLocale',
        'fallback_locale' => 'setFallbackLocale',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'code' => 'getCode',
        'default' => 'getDefault',
        'main' => 'getMain',
        'rtl' => 'getRtl',
        'plural_forms' => 'getPluralForms',
        'source_locale' => 'getSourceLocale',
        'fallback_locale' => 'getFallbackLocale',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['default'] = isset($data['default']) ? $data['default'] : null;
        $this->container['main'] = isset($data['main']) ? $data['main'] : null;
        $this->container['rtl'] = isset($data['rtl']) ? $data['rtl'] : null;
        $this->container['plural_forms'] = isset($data['plural_forms']) ? $data['plural_forms'] : null;
        $this->container['source_locale'] = isset($data['source_locale']) ? $data['source_locale'] : null;
        $this->container['fallback_locale'] = isset($data['fallback_locale']) ? $data['fallback_locale'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
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
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets code
     *
     * @return string|null
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string|null $code code
     *
     * @return $this
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets default
     *
     * @return bool|null
     */
    public function getDefault()
    {
        return $this->container['default'];
    }

    /**
     * Sets default
     *
     * @param bool|null $default default
     *
     * @return $this
     */
    public function setDefault($default)
    {
        $this->container['default'] = $default;

        return $this;
    }

    /**
     * Gets main
     *
     * @return bool|null
     */
    public function getMain()
    {
        return $this->container['main'];
    }

    /**
     * Sets main
     *
     * @param bool|null $main main
     *
     * @return $this
     */
    public function setMain($main)
    {
        $this->container['main'] = $main;

        return $this;
    }

    /**
     * Gets rtl
     *
     * @return bool|null
     */
    public function getRtl()
    {
        return $this->container['rtl'];
    }

    /**
     * Sets rtl
     *
     * @param bool|null $rtl rtl
     *
     * @return $this
     */
    public function setRtl($rtl)
    {
        $this->container['rtl'] = $rtl;

        return $this;
    }

    /**
     * Gets plural_forms
     *
     * @return string[]|null
     */
    public function getPluralForms()
    {
        return $this->container['plural_forms'];
    }

    /**
     * Sets plural_forms
     *
     * @param string[]|null $plural_forms plural_forms
     *
     * @return $this
     */
    public function setPluralForms($plural_forms)
    {
        $this->container['plural_forms'] = $plural_forms;

        return $this;
    }

    /**
     * Gets source_locale
     *
     * @return \Phrase\Model\LocalePreview|null
     */
    public function getSourceLocale()
    {
        return $this->container['source_locale'];
    }

    /**
     * Sets source_locale
     *
     * @param \Phrase\Model\LocalePreview|null $source_locale source_locale
     *
     * @return $this
     */
    public function setSourceLocale($source_locale)
    {
        $this->container['source_locale'] = $source_locale;

        return $this;
    }

    /**
     * Gets fallback_locale
     *
     * @return \Phrase\Model\LocalePreview|null
     */
    public function getFallbackLocale()
    {
        return $this->container['fallback_locale'];
    }

    /**
     * Sets fallback_locale
     *
     * @param \Phrase\Model\LocalePreview|null $fallback_locale fallback_locale
     *
     * @return $this
     */
    public function setFallbackLocale($fallback_locale)
    {
        $this->container['fallback_locale'] = $fallback_locale;

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


