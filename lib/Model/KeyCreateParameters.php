<?php
/**
 * KeyCreateParameters
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
 * KeyCreateParameters Class Doc Comment
 *
 * @category Class
 * @package  Phrase
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class KeyCreateParameters implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'key_create_parameters';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'branch' => 'string',
        'name' => 'string',
        'description' => 'string',
        'plural' => 'bool',
        'name_plural' => 'string',
        'data_type' => 'string',
        'tags' => 'string',
        'max_characters_allowed' => 'int',
        'screenshot' => '\SplFileObject',
        'remove_screenshot' => 'bool',
        'unformatted' => 'bool',
        'default_translation_content' => 'string',
        'xml_space_preserve' => 'bool',
        'original_file' => 'string',
        'localized_format_string' => 'string',
        'localized_format_key' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'branch' => null,
        'name' => null,
        'description' => null,
        'plural' => null,
        'name_plural' => null,
        'data_type' => null,
        'tags' => null,
        'max_characters_allowed' => null,
        'screenshot' => 'binary',
        'remove_screenshot' => null,
        'unformatted' => null,
        'default_translation_content' => null,
        'xml_space_preserve' => null,
        'original_file' => null,
        'localized_format_string' => null,
        'localized_format_key' => null
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
        'description' => 'description',
        'plural' => 'plural',
        'name_plural' => 'name_plural',
        'data_type' => 'data_type',
        'tags' => 'tags',
        'max_characters_allowed' => 'max_characters_allowed',
        'screenshot' => 'screenshot',
        'remove_screenshot' => 'remove_screenshot',
        'unformatted' => 'unformatted',
        'default_translation_content' => 'default_translation_content',
        'xml_space_preserve' => 'xml_space_preserve',
        'original_file' => 'original_file',
        'localized_format_string' => 'localized_format_string',
        'localized_format_key' => 'localized_format_key'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'branch' => 'setBranch',
        'name' => 'setName',
        'description' => 'setDescription',
        'plural' => 'setPlural',
        'name_plural' => 'setNamePlural',
        'data_type' => 'setDataType',
        'tags' => 'setTags',
        'max_characters_allowed' => 'setMaxCharactersAllowed',
        'screenshot' => 'setScreenshot',
        'remove_screenshot' => 'setRemoveScreenshot',
        'unformatted' => 'setUnformatted',
        'default_translation_content' => 'setDefaultTranslationContent',
        'xml_space_preserve' => 'setXmlSpacePreserve',
        'original_file' => 'setOriginalFile',
        'localized_format_string' => 'setLocalizedFormatString',
        'localized_format_key' => 'setLocalizedFormatKey'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'branch' => 'getBranch',
        'name' => 'getName',
        'description' => 'getDescription',
        'plural' => 'getPlural',
        'name_plural' => 'getNamePlural',
        'data_type' => 'getDataType',
        'tags' => 'getTags',
        'max_characters_allowed' => 'getMaxCharactersAllowed',
        'screenshot' => 'getScreenshot',
        'remove_screenshot' => 'getRemoveScreenshot',
        'unformatted' => 'getUnformatted',
        'default_translation_content' => 'getDefaultTranslationContent',
        'xml_space_preserve' => 'getXmlSpacePreserve',
        'original_file' => 'getOriginalFile',
        'localized_format_string' => 'getLocalizedFormatString',
        'localized_format_key' => 'getLocalizedFormatKey'
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['plural'] = isset($data['plural']) ? $data['plural'] : null;
        $this->container['name_plural'] = isset($data['name_plural']) ? $data['name_plural'] : null;
        $this->container['data_type'] = isset($data['data_type']) ? $data['data_type'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['max_characters_allowed'] = isset($data['max_characters_allowed']) ? $data['max_characters_allowed'] : null;
        $this->container['screenshot'] = isset($data['screenshot']) ? $data['screenshot'] : null;
        $this->container['remove_screenshot'] = isset($data['remove_screenshot']) ? $data['remove_screenshot'] : null;
        $this->container['unformatted'] = isset($data['unformatted']) ? $data['unformatted'] : null;
        $this->container['default_translation_content'] = isset($data['default_translation_content']) ? $data['default_translation_content'] : null;
        $this->container['xml_space_preserve'] = isset($data['xml_space_preserve']) ? $data['xml_space_preserve'] : null;
        $this->container['original_file'] = isset($data['original_file']) ? $data['original_file'] : null;
        $this->container['localized_format_string'] = isset($data['localized_format_string']) ? $data['localized_format_string'] : null;
        $this->container['localized_format_key'] = isset($data['localized_format_key']) ? $data['localized_format_key'] : null;
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
     * @param string|null $name Key name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description Key description (usually includes contextual information for translators)
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets plural
     *
     * @return bool|null
     */
    public function getPlural()
    {
        return $this->container['plural'];
    }

    /**
     * Sets plural
     *
     * @param bool|null $plural Indicates whether key supports pluralization
     *
     * @return $this
     */
    public function setPlural($plural)
    {
        $this->container['plural'] = $plural;

        return $this;
    }

    /**
     * Gets name_plural
     *
     * @return string|null
     */
    public function getNamePlural()
    {
        return $this->container['name_plural'];
    }

    /**
     * Sets name_plural
     *
     * @param string|null $name_plural Plural name for the key (used in some file formats, e.g. Gettext)
     *
     * @return $this
     */
    public function setNamePlural($name_plural)
    {
        $this->container['name_plural'] = $name_plural;

        return $this;
    }

    /**
     * Gets data_type
     *
     * @return string|null
     */
    public function getDataType()
    {
        return $this->container['data_type'];
    }

    /**
     * Sets data_type
     *
     * @param string|null $data_type Type of the key. Can be one of the following: string, number, boolean, array, markdown.
     *
     * @return $this
     */
    public function setDataType($data_type)
    {
        $this->container['data_type'] = $data_type;

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
     * @param string|null $tags List of tags separated by comma to be associated with the key.
     *
     * @return $this
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets max_characters_allowed
     *
     * @return int|null
     */
    public function getMaxCharactersAllowed()
    {
        return $this->container['max_characters_allowed'];
    }

    /**
     * Sets max_characters_allowed
     *
     * @param int|null $max_characters_allowed Max. number of characters translations for this key can have.
     *
     * @return $this
     */
    public function setMaxCharactersAllowed($max_characters_allowed)
    {
        $this->container['max_characters_allowed'] = $max_characters_allowed;

        return $this;
    }

    /**
     * Gets screenshot
     *
     * @return \SplFileObject|null
     */
    public function getScreenshot()
    {
        return $this->container['screenshot'];
    }

    /**
     * Sets screenshot
     *
     * @param \SplFileObject|null $screenshot Screenshot/image for the key. This parameter is deprecated. Please use the Screenshots endpoint instead.
     *
     * @return $this
     */
    public function setScreenshot($screenshot)
    {
        $this->container['screenshot'] = $screenshot;

        return $this;
    }

    /**
     * Gets remove_screenshot
     *
     * @return bool|null
     */
    public function getRemoveScreenshot()
    {
        return $this->container['remove_screenshot'];
    }

    /**
     * Sets remove_screenshot
     *
     * @param bool|null $remove_screenshot Indicates whether the screenshot will be deleted. This parameter is deprecated. Please use the Screenshots endpoint instead.
     *
     * @return $this
     */
    public function setRemoveScreenshot($remove_screenshot)
    {
        $this->container['remove_screenshot'] = $remove_screenshot;

        return $this;
    }

    /**
     * Gets unformatted
     *
     * @return bool|null
     */
    public function getUnformatted()
    {
        return $this->container['unformatted'];
    }

    /**
     * Sets unformatted
     *
     * @param bool|null $unformatted Indicates whether the key should be exported as \"unformatted\". Supported by Android XML and other formats.
     *
     * @return $this
     */
    public function setUnformatted($unformatted)
    {
        $this->container['unformatted'] = $unformatted;

        return $this;
    }

    /**
     * Gets default_translation_content
     *
     * @return string|null
     */
    public function getDefaultTranslationContent()
    {
        return $this->container['default_translation_content'];
    }

    /**
     * Sets default_translation_content
     *
     * @param string|null $default_translation_content Creates a translation in the default locale with the specified content
     *
     * @return $this
     */
    public function setDefaultTranslationContent($default_translation_content)
    {
        $this->container['default_translation_content'] = $default_translation_content;

        return $this;
    }

    /**
     * Gets xml_space_preserve
     *
     * @return bool|null
     */
    public function getXmlSpacePreserve()
    {
        return $this->container['xml_space_preserve'];
    }

    /**
     * Sets xml_space_preserve
     *
     * @param bool|null $xml_space_preserve Indicates whether the key should be exported with \"xml:space=preserve\". Supported by several XML-based formats.
     *
     * @return $this
     */
    public function setXmlSpacePreserve($xml_space_preserve)
    {
        $this->container['xml_space_preserve'] = $xml_space_preserve;

        return $this;
    }

    /**
     * Gets original_file
     *
     * @return string|null
     */
    public function getOriginalFile()
    {
        return $this->container['original_file'];
    }

    /**
     * Sets original_file
     *
     * @param string|null $original_file Original file attribute. Used in some formats, e.g. XLIFF.
     *
     * @return $this
     */
    public function setOriginalFile($original_file)
    {
        $this->container['original_file'] = $original_file;

        return $this;
    }

    /**
     * Gets localized_format_string
     *
     * @return string|null
     */
    public function getLocalizedFormatString()
    {
        return $this->container['localized_format_string'];
    }

    /**
     * Sets localized_format_string
     *
     * @param string|null $localized_format_string NSStringLocalizedFormatKey attribute. Used in .stringsdict format.
     *
     * @return $this
     */
    public function setLocalizedFormatString($localized_format_string)
    {
        $this->container['localized_format_string'] = $localized_format_string;

        return $this;
    }

    /**
     * Gets localized_format_key
     *
     * @return string|null
     */
    public function getLocalizedFormatKey()
    {
        return $this->container['localized_format_key'];
    }

    /**
     * Sets localized_format_key
     *
     * @param string|null $localized_format_key NSStringLocalizedFormatKey attribute. Used in .stringsdict format.
     *
     * @return $this
     */
    public function setLocalizedFormatKey($localized_format_key)
    {
        $this->container['localized_format_key'] = $localized_format_key;

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


