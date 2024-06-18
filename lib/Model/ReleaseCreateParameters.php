<?php
/**
 * ReleaseCreateParameters
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
 * ReleaseCreateParameters Class Doc Comment
 *
 * @category Class
 * @package  Phrase
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ReleaseCreateParameters implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'release_create_parameters';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'description' => 'string',
        'platforms' => 'string[]',
        'locale_ids' => 'string[]',
        'tags' => 'string[]',
        'app_min_version' => 'string',
        'app_max_version' => 'string',
        'branch' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'description' => null,
        'platforms' => null,
        'locale_ids' => null,
        'tags' => null,
        'app_min_version' => null,
        'app_max_version' => null,
        'branch' => null
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
        'description' => 'description',
        'platforms' => 'platforms',
        'locale_ids' => 'locale_ids',
        'tags' => 'tags',
        'app_min_version' => 'app_min_version',
        'app_max_version' => 'app_max_version',
        'branch' => 'branch'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'description' => 'setDescription',
        'platforms' => 'setPlatforms',
        'locale_ids' => 'setLocaleIds',
        'tags' => 'setTags',
        'app_min_version' => 'setAppMinVersion',
        'app_max_version' => 'setAppMaxVersion',
        'branch' => 'setBranch'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'description' => 'getDescription',
        'platforms' => 'getPlatforms',
        'locale_ids' => 'getLocaleIds',
        'tags' => 'getTags',
        'app_min_version' => 'getAppMinVersion',
        'app_max_version' => 'getAppMaxVersion',
        'branch' => 'getBranch'
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['platforms'] = isset($data['platforms']) ? $data['platforms'] : null;
        $this->container['locale_ids'] = isset($data['locale_ids']) ? $data['locale_ids'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['app_min_version'] = isset($data['app_min_version']) ? $data['app_min_version'] : null;
        $this->container['app_max_version'] = isset($data['app_max_version']) ? $data['app_max_version'] : null;
        $this->container['branch'] = isset($data['branch']) ? $data['branch'] : null;
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
     * @param string|null $description Description of the release
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets platforms
     *
     * @return string[]|null
     */
    public function getPlatforms()
    {
        return $this->container['platforms'];
    }

    /**
     * Sets platforms
     *
     * @param string[]|null $platforms List of platforms the release should support.
     *
     * @return $this
     */
    public function setPlatforms($platforms)
    {
        $this->container['platforms'] = $platforms;

        return $this;
    }

    /**
     * Gets locale_ids
     *
     * @return string[]|null
     */
    public function getLocaleIds()
    {
        return $this->container['locale_ids'];
    }

    /**
     * Sets locale_ids
     *
     * @param string[]|null $locale_ids List of locale ids that will be included in the release. If empty, distribution locales will be used
     *
     * @return $this
     */
    public function setLocaleIds($locale_ids)
    {
        $this->container['locale_ids'] = $locale_ids;

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
     * @param string[]|null $tags Only include tagged keys in the release. For a key to be included it must be tagged with all tags provided
     *
     * @return $this
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets app_min_version
     *
     * @return string|null
     */
    public function getAppMinVersion()
    {
        return $this->container['app_min_version'];
    }

    /**
     * Sets app_min_version
     *
     * @param string|null $app_min_version Minimum version of the app that the release supports in semver format
     *
     * @return $this
     */
    public function setAppMinVersion($app_min_version)
    {
        $this->container['app_min_version'] = $app_min_version;

        return $this;
    }

    /**
     * Gets app_max_version
     *
     * @return string|null
     */
    public function getAppMaxVersion()
    {
        return $this->container['app_max_version'];
    }

    /**
     * Sets app_max_version
     *
     * @param string|null $app_max_version Maximum version of the app that the release supports in semver format
     *
     * @return $this
     */
    public function setAppMaxVersion($app_max_version)
    {
        $this->container['app_max_version'] = $app_max_version;

        return $this;
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
     * @param string|null $branch Branch used for release
     *
     * @return $this
     */
    public function setBranch($branch)
    {
        $this->container['branch'] = $branch;

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


