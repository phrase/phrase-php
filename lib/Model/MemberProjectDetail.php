<?php
/**
 * MemberProjectDetail
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
 * MemberProjectDetail Class Doc Comment
 *
 * @category Class
 * @package  Phrase
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class MemberProjectDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'member_project_detail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'email' => 'string',
        'username' => 'string',
        'role' => 'string',
        'projects' => '\Phrase\Model\ProjectLocales[]',
        'permissions' => 'object',
        'locale_ids' => 'string[]',
        'default_locale_codes' => 'string[]',
        'spaces' => '\Phrase\Model\MemberSpacesInner[]',
        'project_roles' => '\Phrase\Model\MemberProjectDetailProjectRolesInner[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => null,
        'email' => null,
        'username' => null,
        'role' => null,
        'projects' => null,
        'permissions' => null,
        'locale_ids' => null,
        'default_locale_codes' => null,
        'spaces' => null,
        'project_roles' => null
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
        'email' => 'email',
        'username' => 'username',
        'role' => 'role',
        'projects' => 'projects',
        'permissions' => 'permissions',
        'locale_ids' => 'locale_ids',
        'default_locale_codes' => 'default_locale_codes',
        'spaces' => 'spaces',
        'project_roles' => 'project_roles'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'email' => 'setEmail',
        'username' => 'setUsername',
        'role' => 'setRole',
        'projects' => 'setProjects',
        'permissions' => 'setPermissions',
        'locale_ids' => 'setLocaleIds',
        'default_locale_codes' => 'setDefaultLocaleCodes',
        'spaces' => 'setSpaces',
        'project_roles' => 'setProjectRoles'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'email' => 'getEmail',
        'username' => 'getUsername',
        'role' => 'getRole',
        'projects' => 'getProjects',
        'permissions' => 'getPermissions',
        'locale_ids' => 'getLocaleIds',
        'default_locale_codes' => 'getDefaultLocaleCodes',
        'spaces' => 'getSpaces',
        'project_roles' => 'getProjectRoles'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['username'] = isset($data['username']) ? $data['username'] : null;
        $this->container['role'] = isset($data['role']) ? $data['role'] : null;
        $this->container['projects'] = isset($data['projects']) ? $data['projects'] : null;
        $this->container['permissions'] = isset($data['permissions']) ? $data['permissions'] : null;
        $this->container['locale_ids'] = isset($data['locale_ids']) ? $data['locale_ids'] : null;
        $this->container['default_locale_codes'] = isset($data['default_locale_codes']) ? $data['default_locale_codes'] : null;
        $this->container['spaces'] = isset($data['spaces']) ? $data['spaces'] : null;
        $this->container['project_roles'] = isset($data['project_roles']) ? $data['project_roles'] : null;
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
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets username
     *
     * @return string|null
     */
    public function getUsername()
    {
        return $this->container['username'];
    }

    /**
     * Sets username
     *
     * @param string|null $username username
     *
     * @return $this
     */
    public function setUsername($username)
    {
        $this->container['username'] = $username;

        return $this;
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
     * @param string|null $role role
     *
     * @return $this
     */
    public function setRole($role)
    {
        $this->container['role'] = $role;

        return $this;
    }

    /**
     * Gets projects
     *
     * @return \Phrase\Model\ProjectLocales[]|null
     */
    public function getProjects()
    {
        return $this->container['projects'];
    }

    /**
     * Sets projects
     *
     * @param \Phrase\Model\ProjectLocales[]|null $projects projects
     *
     * @return $this
     */
    public function setProjects($projects)
    {
        $this->container['projects'] = $projects;

        return $this;
    }

    /**
     * Gets permissions
     *
     * @return object|null
     */
    public function getPermissions()
    {
        return $this->container['permissions'];
    }

    /**
     * Sets permissions
     *
     * @param object|null $permissions permissions
     *
     * @return $this
     */
    public function setPermissions($permissions)
    {
        $this->container['permissions'] = $permissions;

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
     * @param string[]|null $locale_ids locale_ids
     *
     * @return $this
     */
    public function setLocaleIds($locale_ids)
    {
        $this->container['locale_ids'] = $locale_ids;

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
     * @param string[]|null $default_locale_codes default_locale_codes
     *
     * @return $this
     */
    public function setDefaultLocaleCodes($default_locale_codes)
    {
        $this->container['default_locale_codes'] = $default_locale_codes;

        return $this;
    }

    /**
     * Gets spaces
     *
     * @return \Phrase\Model\MemberSpacesInner[]|null
     */
    public function getSpaces()
    {
        return $this->container['spaces'];
    }

    /**
     * Sets spaces
     *
     * @param \Phrase\Model\MemberSpacesInner[]|null $spaces spaces
     *
     * @return $this
     */
    public function setSpaces($spaces)
    {
        $this->container['spaces'] = $spaces;

        return $this;
    }

    /**
     * Gets project_roles
     *
     * @return \Phrase\Model\MemberProjectDetailProjectRolesInner[]|null
     */
    public function getProjectRoles()
    {
        return $this->container['project_roles'];
    }

    /**
     * Sets project_roles
     *
     * @param \Phrase\Model\MemberProjectDetailProjectRolesInner[]|null $project_roles project_roles
     *
     * @return $this
     */
    public function setProjectRoles($project_roles)
    {
        $this->container['project_roles'] = $project_roles;

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


