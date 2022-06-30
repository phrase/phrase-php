<?php
/**
 * LocaleCreateParameters
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
 * LocaleCreateParameters Class Doc Comment
 *
 * @category Class
 * @package  Phrase
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class LocaleCreateParameters implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'locale_create_parameters';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'branch' => 'string',
        'name' => 'string',
        'code' => 'string',
        'default' => 'bool',
        'main' => 'bool',
        'rtl' => 'bool',
        'source_locale_id' => 'string',
        'fallback_locale_id' => 'string',
        'unverify_new_translations' => 'bool',
        'unverify_updated_translations' => 'bool',
        'autotranslate' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'branch' => null,
        'name' => null,
        'code' => null,
        'default' => null,
        'main' => null,
        'rtl' => null,
        'source_locale_id' => null,
        'fallback_locale_id' => null,
        'unverify_new_translations' => null,
        'unverify_updated_translations' => null,
        'autotranslate' => null
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
        'name' => 'name',
        'code' => 'code',
        'default' => 'default',
        'main' => 'main',
        'rtl' => 'rtl',
        'source_locale_id' => 'source_locale_id',
        'fallback_locale_id' => 'fallback_locale_id',
        'unverify_new_translations' => 'unverify_new_translations',
        'unverify_updated_translations' => 'unverify_updated_translations',
        'autotranslate' => 'autotranslate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'branch' => 'setBranch',
        'name' => 'setName',
        'code' => 'setCode',
        'default' => 'setDefault',
        'main' => 'setMain',
        'rtl' => 'setRtl',
        'source_locale_id' => 'setSourceLocaleId',
        'fallback_locale_id' => 'setFallbackLocaleId',
        'unverify_new_translations' => 'setUnverifyNewTranslations',
        'unverify_updated_translations' => 'setUnverifyUpdatedTranslations',
        'autotranslate' => 'setAutotranslate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'branch' => 'getBranch',
        'name' => 'getName',
        'code' => 'getCode',
        'default' => 'getDefault',
        'main' => 'getMain',
        'rtl' => 'getRtl',
        'source_locale_id' => 'getSourceLocaleId',
        'fallback_locale_id' => 'getFallbackLocaleId',
        'unverify_new_translations' => 'getUnverifyNewTranslations',
        'unverify_updated_translations' => 'getUnverifyUpdatedTranslations',
        'autotranslate' => 'getAutotranslate'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['default'] = isset($data['default']) ? $data['default'] : null;
        $this->container['main'] = isset($data['main']) ? $data['main'] : null;
        $this->container['rtl'] = isset($data['rtl']) ? $data['rtl'] : null;
        $this->container['source_locale_id'] = isset($data['source_locale_id']) ? $data['source_locale_id'] : null;
        $this->container['fallback_locale_id'] = isset($data['fallback_locale_id']) ? $data['fallback_locale_id'] : null;
        $this->container['unverify_new_translations'] = isset($data['unverify_new_translations']) ? $data['unverify_new_translations'] : null;
        $this->container['unverify_updated_translations'] = isset($data['unverify_updated_translations']) ? $data['unverify_updated_translations'] : null;
        $this->container['autotranslate'] = isset($data['autotranslate']) ? $data['autotranslate'] : null;
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
     * @param string|null $name Locale name
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
     * @param string|null $code Locale ISO code
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
     * @param bool|null $default Indicates whether locale is the default locale. If set to true, the previous default locale the project is no longer the default locale.
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
     * @param bool|null $main Indicates whether locale is a main locale. Main locales are part of the <a href=\"https://help.phrase.com/help/verification-and-proofreading\" target=\"_blank\">Verification System</a> feature.
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
     * @param bool|null $rtl Indicates whether locale is a RTL (Right-to-Left) locale.
     *
     * @return $this
     */
    public function setRtl($rtl)
    {
        $this->container['rtl'] = $rtl;

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
     * @param string|null $source_locale_id Source locale. Can be the name or public id of the locale. Preferred is the public id.
     *
     * @return $this
     */
    public function setSourceLocaleId($source_locale_id)
    {
        $this->container['source_locale_id'] = $source_locale_id;

        return $this;
    }

    /**
     * Gets fallback_locale_id
     *
     * @return string|null
     */
    public function getFallbackLocaleId()
    {
        return $this->container['fallback_locale_id'];
    }

    /**
     * Sets fallback_locale_id
     *
     * @param string|null $fallback_locale_id Fallback locale for empty translations. Can be a locale name or id.
     *
     * @return $this
     */
    public function setFallbackLocaleId($fallback_locale_id)
    {
        $this->container['fallback_locale_id'] = $fallback_locale_id;

        return $this;
    }

    /**
     * Gets unverify_new_translations
     *
     * @return bool|null
     */
    public function getUnverifyNewTranslations()
    {
        return $this->container['unverify_new_translations'];
    }

    /**
     * Sets unverify_new_translations
     *
     * @param bool|null $unverify_new_translations Indicates that new translations for this locale should be marked as unverified. Part of the <a href=\"https://help.phrase.com/help/verification-and-proofreading\" target=\"_blank\">Advanced Workflows</a> feature.
     *
     * @return $this
     */
    public function setUnverifyNewTranslations($unverify_new_translations)
    {
        $this->container['unverify_new_translations'] = $unverify_new_translations;

        return $this;
    }

    /**
     * Gets unverify_updated_translations
     *
     * @return bool|null
     */
    public function getUnverifyUpdatedTranslations()
    {
        return $this->container['unverify_updated_translations'];
    }

    /**
     * Sets unverify_updated_translations
     *
     * @param bool|null $unverify_updated_translations Indicates that updated translations for this locale should be marked as unverified. Part of the <a href=\"https://help.phrase.com/help/verification-and-proofreading\" target=\"_blank\">Advanced Workflows</a> feature.
     *
     * @return $this
     */
    public function setUnverifyUpdatedTranslations($unverify_updated_translations)
    {
        $this->container['unverify_updated_translations'] = $unverify_updated_translations;

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
     * @param bool|null $autotranslate If set, translations for this locale will be fetched automatically, right after creation.
     *
     * @return $this
     */
    public function setAutotranslate($autotranslate)
    {
        $this->container['autotranslate'] = $autotranslate;

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


