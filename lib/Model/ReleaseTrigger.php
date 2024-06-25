<?php
/**
 * ReleaseTrigger
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
 * ReleaseTrigger Class Doc Comment
 *
 * @category Class
 * @package  Phrase
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ReleaseTrigger implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'release_trigger';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'branch' => 'string',
        'cron_schedule' => 'string',
        'time_zone' => 'string',
        'next_run_at' => '\DateTime',
        'app_min_version' => 'string',
        'app_max_version' => 'string',
        'locales' => '\Phrase\Model\LocalePreview[]',
        'tags' => 'string[]',
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
        'branch' => null,
        'cron_schedule' => null,
        'time_zone' => null,
        'next_run_at' => 'date-time',
        'app_min_version' => null,
        'app_max_version' => null,
        'locales' => null,
        'tags' => null,
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
        'branch' => 'branch',
        'cron_schedule' => 'cron_schedule',
        'time_zone' => 'time_zone',
        'next_run_at' => 'next_run_at',
        'app_min_version' => 'app_min_version',
        'app_max_version' => 'app_max_version',
        'locales' => 'locales',
        'tags' => 'tags',
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
        'branch' => 'setBranch',
        'cron_schedule' => 'setCronSchedule',
        'time_zone' => 'setTimeZone',
        'next_run_at' => 'setNextRunAt',
        'app_min_version' => 'setAppMinVersion',
        'app_max_version' => 'setAppMaxVersion',
        'locales' => 'setLocales',
        'tags' => 'setTags',
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
        'branch' => 'getBranch',
        'cron_schedule' => 'getCronSchedule',
        'time_zone' => 'getTimeZone',
        'next_run_at' => 'getNextRunAt',
        'app_min_version' => 'getAppMinVersion',
        'app_max_version' => 'getAppMaxVersion',
        'locales' => 'getLocales',
        'tags' => 'getTags',
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
        $this->container['branch'] = isset($data['branch']) ? $data['branch'] : null;
        $this->container['cron_schedule'] = isset($data['cron_schedule']) ? $data['cron_schedule'] : null;
        $this->container['time_zone'] = isset($data['time_zone']) ? $data['time_zone'] : null;
        $this->container['next_run_at'] = isset($data['next_run_at']) ? $data['next_run_at'] : null;
        $this->container['app_min_version'] = isset($data['app_min_version']) ? $data['app_min_version'] : null;
        $this->container['app_max_version'] = isset($data['app_max_version']) ? $data['app_max_version'] : null;
        $this->container['locales'] = isset($data['locales']) ? $data['locales'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
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
     * @param string|null $branch branch
     *
     * @return $this
     */
    public function setBranch($branch)
    {
        $this->container['branch'] = $branch;

        return $this;
    }

    /**
     * Gets cron_schedule
     *
     * @return string|null
     */
    public function getCronSchedule()
    {
        return $this->container['cron_schedule'];
    }

    /**
     * Sets cron_schedule
     *
     * @param string|null $cron_schedule Cron schedule for the scheduler. Read more about the format of this field at https://en.wikipedia.org/wiki/Cron
     *
     * @return $this
     */
    public function setCronSchedule($cron_schedule)
    {
        $this->container['cron_schedule'] = $cron_schedule;

        return $this;
    }

    /**
     * Gets time_zone
     *
     * @return string|null
     */
    public function getTimeZone()
    {
        return $this->container['time_zone'];
    }

    /**
     * Sets time_zone
     *
     * @param string|null $time_zone Time zone for the scheduler
     *
     * @return $this
     */
    public function setTimeZone($time_zone)
    {
        $this->container['time_zone'] = $time_zone;

        return $this;
    }

    /**
     * Gets next_run_at
     *
     * @return \DateTime|null
     */
    public function getNextRunAt()
    {
        return $this->container['next_run_at'];
    }

    /**
     * Sets next_run_at
     *
     * @param \DateTime|null $next_run_at The next time a release will be created for this trigger
     *
     * @return $this
     */
    public function setNextRunAt($next_run_at)
    {
        $this->container['next_run_at'] = $next_run_at;

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
     * @param string|null $app_min_version app_min_version
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
     * @param string|null $app_max_version app_max_version
     *
     * @return $this
     */
    public function setAppMaxVersion($app_max_version)
    {
        $this->container['app_max_version'] = $app_max_version;

        return $this;
    }

    /**
     * Gets locales
     *
     * @return \Phrase\Model\LocalePreview[]|null
     */
    public function getLocales()
    {
        return $this->container['locales'];
    }

    /**
     * Sets locales
     *
     * @param \Phrase\Model\LocalePreview[]|null $locales locales
     *
     * @return $this
     */
    public function setLocales($locales)
    {
        $this->container['locales'] = $locales;

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

