<?php
/**
 * TranslationKeyDetails
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
 * TranslationKeyDetails Class Doc Comment
 *
 * @category Class
 * @package  Phrase
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TranslationKeyDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'translation_key_details';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'name' => 'string',
        'description' => 'string',
        'name_hash' => 'string',
        'plural' => 'bool',
        'tags' => 'string[]',
        'data_type' => 'string',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'name_plural' => 'string',
        'comments_count' => 'int',
        'max_characters_allowed' => 'int',
        'screenshot_url' => 'string',
        'unformatted' => 'bool',
        'xml_space_preserve' => 'bool',
        'original_file' => 'string',
        'format_value_type' => 'string',
        'creator' => '\Phrase\Model\UserPreview'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'description' => null,
        'name_hash' => null,
        'plural' => null,
        'tags' => null,
        'data_type' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'name_plural' => null,
        'comments_count' => null,
        'max_characters_allowed' => null,
        'screenshot_url' => null,
        'unformatted' => null,
        'xml_space_preserve' => null,
        'original_file' => null,
        'format_value_type' => null,
        'creator' => null
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
        'description' => 'description',
        'name_hash' => 'name_hash',
        'plural' => 'plural',
        'tags' => 'tags',
        'data_type' => 'data_type',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at',
        'name_plural' => 'name_plural',
        'comments_count' => 'comments_count',
        'max_characters_allowed' => 'max_characters_allowed',
        'screenshot_url' => 'screenshot_url',
        'unformatted' => 'unformatted',
        'xml_space_preserve' => 'xml_space_preserve',
        'original_file' => 'original_file',
        'format_value_type' => 'format_value_type',
        'creator' => 'creator'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'description' => 'setDescription',
        'name_hash' => 'setNameHash',
        'plural' => 'setPlural',
        'tags' => 'setTags',
        'data_type' => 'setDataType',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'name_plural' => 'setNamePlural',
        'comments_count' => 'setCommentsCount',
        'max_characters_allowed' => 'setMaxCharactersAllowed',
        'screenshot_url' => 'setScreenshotUrl',
        'unformatted' => 'setUnformatted',
        'xml_space_preserve' => 'setXmlSpacePreserve',
        'original_file' => 'setOriginalFile',
        'format_value_type' => 'setFormatValueType',
        'creator' => 'setCreator'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'description' => 'getDescription',
        'name_hash' => 'getNameHash',
        'plural' => 'getPlural',
        'tags' => 'getTags',
        'data_type' => 'getDataType',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'name_plural' => 'getNamePlural',
        'comments_count' => 'getCommentsCount',
        'max_characters_allowed' => 'getMaxCharactersAllowed',
        'screenshot_url' => 'getScreenshotUrl',
        'unformatted' => 'getUnformatted',
        'xml_space_preserve' => 'getXmlSpacePreserve',
        'original_file' => 'getOriginalFile',
        'format_value_type' => 'getFormatValueType',
        'creator' => 'getCreator'
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['name_hash'] = isset($data['name_hash']) ? $data['name_hash'] : null;
        $this->container['plural'] = isset($data['plural']) ? $data['plural'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['data_type'] = isset($data['data_type']) ? $data['data_type'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['name_plural'] = isset($data['name_plural']) ? $data['name_plural'] : null;
        $this->container['comments_count'] = isset($data['comments_count']) ? $data['comments_count'] : null;
        $this->container['max_characters_allowed'] = isset($data['max_characters_allowed']) ? $data['max_characters_allowed'] : null;
        $this->container['screenshot_url'] = isset($data['screenshot_url']) ? $data['screenshot_url'] : null;
        $this->container['unformatted'] = isset($data['unformatted']) ? $data['unformatted'] : null;
        $this->container['xml_space_preserve'] = isset($data['xml_space_preserve']) ? $data['xml_space_preserve'] : null;
        $this->container['original_file'] = isset($data['original_file']) ? $data['original_file'] : null;
        $this->container['format_value_type'] = isset($data['format_value_type']) ? $data['format_value_type'] : null;
        $this->container['creator'] = isset($data['creator']) ? $data['creator'] : null;
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
     * @param string|null $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets name_hash
     *
     * @return string|null
     */
    public function getNameHash()
    {
        return $this->container['name_hash'];
    }

    /**
     * Sets name_hash
     *
     * @param string|null $name_hash name_hash
     *
     * @return $this
     */
    public function setNameHash($name_hash)
    {
        $this->container['name_hash'] = $name_hash;

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
     * @param bool|null $plural plural
     *
     * @return $this
     */
    public function setPlural($plural)
    {
        $this->container['plural'] = $plural;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return string[]|null
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param string[]|null $tags tags
     *
     * @return $this
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

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
     * @param string|null $data_type data_type
     *
     * @return $this
     */
    public function setDataType($data_type)
    {
        $this->container['data_type'] = $data_type;

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
     * @param string|null $name_plural name_plural
     *
     * @return $this
     */
    public function setNamePlural($name_plural)
    {
        $this->container['name_plural'] = $name_plural;

        return $this;
    }

    /**
     * Gets comments_count
     *
     * @return int|null
     */
    public function getCommentsCount()
    {
        return $this->container['comments_count'];
    }

    /**
     * Sets comments_count
     *
     * @param int|null $comments_count comments_count
     *
     * @return $this
     */
    public function setCommentsCount($comments_count)
    {
        $this->container['comments_count'] = $comments_count;

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
     * @param int|null $max_characters_allowed max_characters_allowed
     *
     * @return $this
     */
    public function setMaxCharactersAllowed($max_characters_allowed)
    {
        $this->container['max_characters_allowed'] = $max_characters_allowed;

        return $this;
    }

    /**
     * Gets screenshot_url
     *
     * @return string|null
     */
    public function getScreenshotUrl()
    {
        return $this->container['screenshot_url'];
    }

    /**
     * Sets screenshot_url
     *
     * @param string|null $screenshot_url screenshot_url
     *
     * @return $this
     */
    public function setScreenshotUrl($screenshot_url)
    {
        $this->container['screenshot_url'] = $screenshot_url;

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
     * @param bool|null $unformatted unformatted
     *
     * @return $this
     */
    public function setUnformatted($unformatted)
    {
        $this->container['unformatted'] = $unformatted;

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
     * @param bool|null $xml_space_preserve xml_space_preserve
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
     * @param string|null $original_file original_file
     *
     * @return $this
     */
    public function setOriginalFile($original_file)
    {
        $this->container['original_file'] = $original_file;

        return $this;
    }

    /**
     * Gets format_value_type
     *
     * @return string|null
     */
    public function getFormatValueType()
    {
        return $this->container['format_value_type'];
    }

    /**
     * Sets format_value_type
     *
     * @param string|null $format_value_type format_value_type
     *
     * @return $this
     */
    public function setFormatValueType($format_value_type)
    {
        $this->container['format_value_type'] = $format_value_type;

        return $this;
    }

    /**
     * Gets creator
     *
     * @return \Phrase\Model\UserPreview|null
     */
    public function getCreator()
    {
        return $this->container['creator'];
    }

    /**
     * Sets creator
     *
     * @param \Phrase\Model\UserPreview|null $creator creator
     *
     * @return $this
     */
    public function setCreator($creator)
    {
        $this->container['creator'] = $creator;

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


