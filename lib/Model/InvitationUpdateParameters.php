<?php
/**
 * InvitationUpdateParameters
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
 * InvitationUpdateParameters Class Doc Comment
 *
 * @category Class
 * @package  Phrase
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class InvitationUpdateParameters implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'invitation_update_parameters';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'role' => 'string',
        'project_ids' => 'string',
        'locale_ids' => 'string',
        'space_ids' => 'string[]',
        'team_ids' => 'string[]',
        'default_locale_codes' => 'string[]',
        'permissions' => 'array<string,string>'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'role' => null,
        'project_ids' => null,
        'locale_ids' => null,
        'space_ids' => null,
        'team_ids' => null,
        'default_locale_codes' => null,
        'permissions' => null
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
        'role' => 'role',
        'project_ids' => 'project_ids',
        'locale_ids' => 'locale_ids',
        'space_ids' => 'space_ids',
        'team_ids' => 'team_ids',
        'default_locale_codes' => 'default_locale_codes',
        'permissions' => 'permissions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'role' => 'setRole',
        'project_ids' => 'setProjectIds',
        'locale_ids' => 'setLocaleIds',
        'space_ids' => 'setSpaceIds',
        'team_ids' => 'setTeamIds',
        'default_locale_codes' => 'setDefaultLocaleCodes',
        'permissions' => 'setPermissions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'role' => 'getRole',
        'project_ids' => 'getProjectIds',
        'locale_ids' => 'getLocaleIds',
        'space_ids' => 'getSpaceIds',
        'team_ids' => 'getTeamIds',
        'default_locale_codes' => 'getDefaultLocaleCodes',
        'permissions' => 'getPermissions'
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
        $this->container['role'] = isset($data['role']) ? $data['role'] : null;
        $this->container['project_ids'] = isset($data['project_ids']) ? $data['project_ids'] : null;
        $this->container['locale_ids'] = isset($data['locale_ids']) ? $data['locale_ids'] : null;
        $this->container['space_ids'] = isset($data['space_ids']) ? $data['space_ids'] : null;
        $this->container['team_ids'] = isset($data['team_ids']) ? $data['team_ids'] : null;
        $this->container['default_locale_codes'] = isset($data['default_locale_codes']) ? $data['default_locale_codes'] : null;
        $this->container['permissions'] = isset($data['permissions']) ? $data['permissions'] : null;
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
     * Gets role
     *
     * @return string|null
     */
    public function getRole()
    {
        return $this->container['role'];
    }

    /**
     * Sets role
     *
     * @param string|null $role Invitiation role, can be any of Manager, Developer, Translator
     *
     * @return $this
     */
    public function setRole($role)
    {
        $this->container['role'] = $role;

        return $this;
    }

    /**
     * Gets project_ids
     *
     * @return string|null
     */
    public function getProjectIds()
    {
        return $this->container['project_ids'];
    }

    /**
     * Sets project_ids
     *
     * @param string|null $project_ids List of project ids the invited user has access to
     *
     * @return $this
     */
    public function setProjectIds($project_ids)
    {
        $this->container['project_ids'] = $project_ids;

        return $this;
    }

    /**
     * Gets locale_ids
     *
     * @return string|null
     */
    public function getLocaleIds()
    {
        return $this->container['locale_ids'];
    }

    /**
     * Sets locale_ids
     *
     * @param string|null $locale_ids List of locale ids the invited user has access to
     *
     * @return $this
     */
    public function setLocaleIds($locale_ids)
    {
        $this->container['locale_ids'] = $locale_ids;

        return $this;
    }

    /**
     * Gets space_ids
     *
     * @return string[]|null
     */
    public function getSpaceIds()
    {
        return $this->container['space_ids'];
    }

    /**
     * Sets space_ids
     *
     * @param string[]|null $space_ids List of spaces the user is assigned to.
     *
     * @return $this
     */
    public function setSpaceIds($space_ids)
    {
        $this->container['space_ids'] = $space_ids;

        return $this;
    }

    /**
     * Gets team_ids
     *
     * @return string[]|null
     */
    public function getTeamIds()
    {
        return $this->container['team_ids'];
    }

    /**
     * Sets team_ids
     *
     * @param string[]|null $team_ids List of teams the user is assigned to.
     *
     * @return $this
     */
    public function setTeamIds($team_ids)
    {
        $this->container['team_ids'] = $team_ids;

        return $this;
    }

    /**
     * Gets default_locale_codes
     *
     * @return string[]|null
     */
    public function getDefaultLocaleCodes()
    {
        return $this->container['default_locale_codes'];
    }

    /**
     * Sets default_locale_codes
     *
     * @param string[]|null $default_locale_codes List of default locales for the user.
     *
     * @return $this
     */
    public function setDefaultLocaleCodes($default_locale_codes)
    {
        $this->container['default_locale_codes'] = $default_locale_codes;

        return $this;
    }

    /**
     * Gets permissions
     *
     * @return array&lt;string,string&gt;|null
     */
    public function getPermissions()
    {
        return $this->container['permissions'];
    }

    /**
     * Sets permissions
     *
     * @param array&lt;string,string&gt;|null $permissions Additional permissions depending on invitation role.
     *
     * @return $this
     */
    public function setPermissions($permissions)
    {
        $this->container['permissions'] = $permissions;

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


