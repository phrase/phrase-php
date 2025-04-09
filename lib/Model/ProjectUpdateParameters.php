<?php
/**
 * ProjectUpdateParameters
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
 * ProjectUpdateParameters Class Doc Comment
 *
 * @category Class
 * @package  Phrase
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ProjectUpdateParameters implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'project_update_parameters';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'account_id' => 'string',
        'name' => 'string',
        'point_of_contact' => 'string',
        'main_format' => 'string',
        'media' => 'string',
        'shares_translation_memory' => 'bool',
        'project_image' => '\SplFileObject',
        'remove_project_image' => 'bool',
        'workflow' => 'string',
        'machine_translation_enabled' => 'bool',
        'enable_branching' => 'bool',
        'protect_master_branch' => 'bool',
        'enable_all_data_type_translation_keys_for_translators' => 'bool',
        'enable_icu_message_format' => 'bool',
        'zero_plural_form_enabled' => 'bool',
        'autotranslate_enabled' => 'bool',
        'autotranslate_check_new_translation_keys' => 'bool',
        'autotranslate_check_new_uploads' => 'bool',
        'autotranslate_check_new_locales' => 'bool',
        'autotranslate_mark_as_unverified' => 'bool',
        'autotranslate_use_machine_translation' => 'bool',
        'autotranslate_use_translation_memory' => 'bool',
        'default_encoding' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'account_id' => null,
        'name' => null,
        'point_of_contact' => null,
        'main_format' => null,
        'media' => null,
        'shares_translation_memory' => null,
        'project_image' => 'binary',
        'remove_project_image' => null,
        'workflow' => null,
        'machine_translation_enabled' => null,
        'enable_branching' => null,
        'protect_master_branch' => null,
        'enable_all_data_type_translation_keys_for_translators' => null,
        'enable_icu_message_format' => null,
        'zero_plural_form_enabled' => null,
        'autotranslate_enabled' => null,
        'autotranslate_check_new_translation_keys' => null,
        'autotranslate_check_new_uploads' => null,
        'autotranslate_check_new_locales' => null,
        'autotranslate_mark_as_unverified' => null,
        'autotranslate_use_machine_translation' => null,
        'autotranslate_use_translation_memory' => null,
        'default_encoding' => null
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
        'account_id' => 'account_id',
        'name' => 'name',
        'point_of_contact' => 'point_of_contact',
        'main_format' => 'main_format',
        'media' => 'media',
        'shares_translation_memory' => 'shares_translation_memory',
        'project_image' => 'project_image',
        'remove_project_image' => 'remove_project_image',
        'workflow' => 'workflow',
        'machine_translation_enabled' => 'machine_translation_enabled',
        'enable_branching' => 'enable_branching',
        'protect_master_branch' => 'protect_master_branch',
        'enable_all_data_type_translation_keys_for_translators' => 'enable_all_data_type_translation_keys_for_translators',
        'enable_icu_message_format' => 'enable_icu_message_format',
        'zero_plural_form_enabled' => 'zero_plural_form_enabled',
        'autotranslate_enabled' => 'autotranslate_enabled',
        'autotranslate_check_new_translation_keys' => 'autotranslate_check_new_translation_keys',
        'autotranslate_check_new_uploads' => 'autotranslate_check_new_uploads',
        'autotranslate_check_new_locales' => 'autotranslate_check_new_locales',
        'autotranslate_mark_as_unverified' => 'autotranslate_mark_as_unverified',
        'autotranslate_use_machine_translation' => 'autotranslate_use_machine_translation',
        'autotranslate_use_translation_memory' => 'autotranslate_use_translation_memory',
        'default_encoding' => 'default_encoding'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_id' => 'setAccountId',
        'name' => 'setName',
        'point_of_contact' => 'setPointOfContact',
        'main_format' => 'setMainFormat',
        'media' => 'setMedia',
        'shares_translation_memory' => 'setSharesTranslationMemory',
        'project_image' => 'setProjectImage',
        'remove_project_image' => 'setRemoveProjectImage',
        'workflow' => 'setWorkflow',
        'machine_translation_enabled' => 'setMachineTranslationEnabled',
        'enable_branching' => 'setEnableBranching',
        'protect_master_branch' => 'setProtectMasterBranch',
        'enable_all_data_type_translation_keys_for_translators' => 'setEnableAllDataTypeTranslationKeysForTranslators',
        'enable_icu_message_format' => 'setEnableIcuMessageFormat',
        'zero_plural_form_enabled' => 'setZeroPluralFormEnabled',
        'autotranslate_enabled' => 'setAutotranslateEnabled',
        'autotranslate_check_new_translation_keys' => 'setAutotranslateCheckNewTranslationKeys',
        'autotranslate_check_new_uploads' => 'setAutotranslateCheckNewUploads',
        'autotranslate_check_new_locales' => 'setAutotranslateCheckNewLocales',
        'autotranslate_mark_as_unverified' => 'setAutotranslateMarkAsUnverified',
        'autotranslate_use_machine_translation' => 'setAutotranslateUseMachineTranslation',
        'autotranslate_use_translation_memory' => 'setAutotranslateUseTranslationMemory',
        'default_encoding' => 'setDefaultEncoding'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_id' => 'getAccountId',
        'name' => 'getName',
        'point_of_contact' => 'getPointOfContact',
        'main_format' => 'getMainFormat',
        'media' => 'getMedia',
        'shares_translation_memory' => 'getSharesTranslationMemory',
        'project_image' => 'getProjectImage',
        'remove_project_image' => 'getRemoveProjectImage',
        'workflow' => 'getWorkflow',
        'machine_translation_enabled' => 'getMachineTranslationEnabled',
        'enable_branching' => 'getEnableBranching',
        'protect_master_branch' => 'getProtectMasterBranch',
        'enable_all_data_type_translation_keys_for_translators' => 'getEnableAllDataTypeTranslationKeysForTranslators',
        'enable_icu_message_format' => 'getEnableIcuMessageFormat',
        'zero_plural_form_enabled' => 'getZeroPluralFormEnabled',
        'autotranslate_enabled' => 'getAutotranslateEnabled',
        'autotranslate_check_new_translation_keys' => 'getAutotranslateCheckNewTranslationKeys',
        'autotranslate_check_new_uploads' => 'getAutotranslateCheckNewUploads',
        'autotranslate_check_new_locales' => 'getAutotranslateCheckNewLocales',
        'autotranslate_mark_as_unverified' => 'getAutotranslateMarkAsUnverified',
        'autotranslate_use_machine_translation' => 'getAutotranslateUseMachineTranslation',
        'autotranslate_use_translation_memory' => 'getAutotranslateUseTranslationMemory',
        'default_encoding' => 'getDefaultEncoding'
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

    const DEFAULT_ENCODING_UTF_8 = 'UTF-8';
    const DEFAULT_ENCODING_UTF_16 = 'UTF-16';
    const DEFAULT_ENCODING_UTF_16_BE = 'UTF-16BE';
    const DEFAULT_ENCODING_UTF_16_LE = 'UTF-16LE';
    const DEFAULT_ENCODING_ISO_8859_1 = 'ISO-8859-1';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDefaultEncodingAllowableValues()
    {
        return [
            self::DEFAULT_ENCODING_UTF_8,
            self::DEFAULT_ENCODING_UTF_16,
            self::DEFAULT_ENCODING_UTF_16_BE,
            self::DEFAULT_ENCODING_UTF_16_LE,
            self::DEFAULT_ENCODING_ISO_8859_1,
        ];
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
        $this->container['account_id'] = isset($data['account_id']) ? $data['account_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['point_of_contact'] = isset($data['point_of_contact']) ? $data['point_of_contact'] : null;
        $this->container['main_format'] = isset($data['main_format']) ? $data['main_format'] : null;
        $this->container['media'] = isset($data['media']) ? $data['media'] : null;
        $this->container['shares_translation_memory'] = isset($data['shares_translation_memory']) ? $data['shares_translation_memory'] : null;
        $this->container['project_image'] = isset($data['project_image']) ? $data['project_image'] : null;
        $this->container['remove_project_image'] = isset($data['remove_project_image']) ? $data['remove_project_image'] : null;
        $this->container['workflow'] = isset($data['workflow']) ? $data['workflow'] : null;
        $this->container['machine_translation_enabled'] = isset($data['machine_translation_enabled']) ? $data['machine_translation_enabled'] : null;
        $this->container['enable_branching'] = isset($data['enable_branching']) ? $data['enable_branching'] : null;
        $this->container['protect_master_branch'] = isset($data['protect_master_branch']) ? $data['protect_master_branch'] : null;
        $this->container['enable_all_data_type_translation_keys_for_translators'] = isset($data['enable_all_data_type_translation_keys_for_translators']) ? $data['enable_all_data_type_translation_keys_for_translators'] : null;
        $this->container['enable_icu_message_format'] = isset($data['enable_icu_message_format']) ? $data['enable_icu_message_format'] : null;
        $this->container['zero_plural_form_enabled'] = isset($data['zero_plural_form_enabled']) ? $data['zero_plural_form_enabled'] : null;
        $this->container['autotranslate_enabled'] = isset($data['autotranslate_enabled']) ? $data['autotranslate_enabled'] : null;
        $this->container['autotranslate_check_new_translation_keys'] = isset($data['autotranslate_check_new_translation_keys']) ? $data['autotranslate_check_new_translation_keys'] : null;
        $this->container['autotranslate_check_new_uploads'] = isset($data['autotranslate_check_new_uploads']) ? $data['autotranslate_check_new_uploads'] : null;
        $this->container['autotranslate_check_new_locales'] = isset($data['autotranslate_check_new_locales']) ? $data['autotranslate_check_new_locales'] : null;
        $this->container['autotranslate_mark_as_unverified'] = isset($data['autotranslate_mark_as_unverified']) ? $data['autotranslate_mark_as_unverified'] : null;
        $this->container['autotranslate_use_machine_translation'] = isset($data['autotranslate_use_machine_translation']) ? $data['autotranslate_use_machine_translation'] : null;
        $this->container['autotranslate_use_translation_memory'] = isset($data['autotranslate_use_translation_memory']) ? $data['autotranslate_use_translation_memory'] : null;
        $this->container['default_encoding'] = isset($data['default_encoding']) ? $data['default_encoding'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getDefaultEncodingAllowableValues();
        if (!is_null($this->container['default_encoding']) && !in_array($this->container['default_encoding'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'default_encoding', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

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
     * Gets account_id
     *
     * @return string|null
     */
    public function getAccountId()
    {
        return $this->container['account_id'];
    }

    /**
     * Sets account_id
     *
     * @param string|null $account_id Required if the requesting user is a member of multiple accounts. Account ID to specify the actual account the project should be created in.
     *
     * @return $this
     */
    public function setAccountId($account_id)
    {
        $this->container['account_id'] = $account_id;

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
     * @param string|null $name (Optional) Name of the project
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets point_of_contact
     *
     * @return string|null
     */
    public function getPointOfContact()
    {
        return $this->container['point_of_contact'];
    }

    /**
     * Sets point_of_contact
     *
     * @param string|null $point_of_contact (Optional) User ID of the point of contact for the project. Pass `null` to unset.
     *
     * @return $this
     */
    public function setPointOfContact($point_of_contact)
    {
        $this->container['point_of_contact'] = $point_of_contact;

        return $this;
    }

    /**
     * Gets main_format
     *
     * @return string|null
     */
    public function getMainFormat()
    {
        return $this->container['main_format'];
    }

    /**
     * Sets main_format
     *
     * @param string|null $main_format (Optional) Main file format specified by its API Extension name. Used for locale downloads if no format is specified. For API Extension names of available file formats see <a href=\"https://support.phrase.com/hc/en-us/sections/6111343326364\">Format Guide</a> or our <a href=\"#formats\">Formats API Endpoint</a>.
     *
     * @return $this
     */
    public function setMainFormat($main_format)
    {
        $this->container['main_format'] = $main_format;

        return $this;
    }

    /**
     * Gets media
     *
     * @return string|null
     */
    public function getMedia()
    {
        return $this->container['media'];
    }

    /**
     * Sets media
     *
     * @param string|null $media (Optional) Main technology stack used in the project. It affects for example the suggested placeholder style. Predefined values include: `Ruby`, `JavaScript`, `AngularJS`, `React`, `iOS`, `Android`, `Python`, `PHP`, `Java`, `Go`, `Windows Phone`, `Rails`, `Node.js`, `.NET`, `Django`, `Symfony`, `Yii Framework`, `Zend Framework`, `Apple App Store Description`, `Google Play Description`, but it can also take any other value.
     *
     * @return $this
     */
    public function setMedia($media)
    {
        $this->container['media'] = $media;

        return $this;
    }

    /**
     * Gets shares_translation_memory
     *
     * @return bool|null
     */
    public function getSharesTranslationMemory()
    {
        return $this->container['shares_translation_memory'];
    }

    /**
     * Sets shares_translation_memory
     *
     * @param bool|null $shares_translation_memory (Optional) Indicates whether the project should share the account's translation memory
     *
     * @return $this
     */
    public function setSharesTranslationMemory($shares_translation_memory)
    {
        $this->container['shares_translation_memory'] = $shares_translation_memory;

        return $this;
    }

    /**
     * Gets project_image
     *
     * @return \SplFileObject|null
     */
    public function getProjectImage()
    {
        return $this->container['project_image'];
    }

    /**
     * Sets project_image
     *
     * @param \SplFileObject|null $project_image (Optional) Image to identify the project
     *
     * @return $this
     */
    public function setProjectImage($project_image)
    {
        $this->container['project_image'] = $project_image;

        return $this;
    }

    /**
     * Gets remove_project_image
     *
     * @return bool|null
     */
    public function getRemoveProjectImage()
    {
        return $this->container['remove_project_image'];
    }

    /**
     * Sets remove_project_image
     *
     * @param bool|null $remove_project_image (Optional) Indicates whether the project image should be deleted.
     *
     * @return $this
     */
    public function setRemoveProjectImage($remove_project_image)
    {
        $this->container['remove_project_image'] = $remove_project_image;

        return $this;
    }

    /**
     * Gets workflow
     *
     * @return string|null
     */
    public function getWorkflow()
    {
        return $this->container['workflow'];
    }

    /**
     * Sets workflow
     *
     * @param string|null $workflow (Optional) Review Workflow. \"simple\" / \"review\". <a href=\"https://support.phrase.com/hc/en-us/articles/5784094755484\">Read more</a>
     *
     * @return $this
     */
    public function setWorkflow($workflow)
    {
        $this->container['workflow'] = $workflow;

        return $this;
    }

    /**
     * Gets machine_translation_enabled
     *
     * @return bool|null
     */
    public function getMachineTranslationEnabled()
    {
        return $this->container['machine_translation_enabled'];
    }

    /**
     * Sets machine_translation_enabled
     *
     * @param bool|null $machine_translation_enabled (Optional) Enable machine translation support in the project. Required for Pre-Translation
     *
     * @return $this
     */
    public function setMachineTranslationEnabled($machine_translation_enabled)
    {
        $this->container['machine_translation_enabled'] = $machine_translation_enabled;

        return $this;
    }

    /**
     * Gets enable_branching
     *
     * @return bool|null
     */
    public function getEnableBranching()
    {
        return $this->container['enable_branching'];
    }

    /**
     * Sets enable_branching
     *
     * @param bool|null $enable_branching (Optional) Enable branching in the project
     *
     * @return $this
     */
    public function setEnableBranching($enable_branching)
    {
        $this->container['enable_branching'] = $enable_branching;

        return $this;
    }

    /**
     * Gets protect_master_branch
     *
     * @return bool|null
     */
    public function getProtectMasterBranch()
    {
        return $this->container['protect_master_branch'];
    }

    /**
     * Sets protect_master_branch
     *
     * @param bool|null $protect_master_branch (Optional) Protect the master branch in project where branching is enabled
     *
     * @return $this
     */
    public function setProtectMasterBranch($protect_master_branch)
    {
        $this->container['protect_master_branch'] = $protect_master_branch;

        return $this;
    }

    /**
     * Gets enable_all_data_type_translation_keys_for_translators
     *
     * @return bool|null
     */
    public function getEnableAllDataTypeTranslationKeysForTranslators()
    {
        return $this->container['enable_all_data_type_translation_keys_for_translators'];
    }

    /**
     * Sets enable_all_data_type_translation_keys_for_translators
     *
     * @param bool|null $enable_all_data_type_translation_keys_for_translators (Optional) Otherwise, translators are not allowed to edit translations other than strings
     *
     * @return $this
     */
    public function setEnableAllDataTypeTranslationKeysForTranslators($enable_all_data_type_translation_keys_for_translators)
    {
        $this->container['enable_all_data_type_translation_keys_for_translators'] = $enable_all_data_type_translation_keys_for_translators;

        return $this;
    }

    /**
     * Gets enable_icu_message_format
     *
     * @return bool|null
     */
    public function getEnableIcuMessageFormat()
    {
        return $this->container['enable_icu_message_format'];
    }

    /**
     * Sets enable_icu_message_format
     *
     * @param bool|null $enable_icu_message_format (Optional) We can validate and highlight your ICU messages. <a href=\"https://support.phrase.com/hc/en-us/articles/5822319545116\">Read more</a>
     *
     * @return $this
     */
    public function setEnableIcuMessageFormat($enable_icu_message_format)
    {
        $this->container['enable_icu_message_format'] = $enable_icu_message_format;

        return $this;
    }

    /**
     * Gets zero_plural_form_enabled
     *
     * @return bool|null
     */
    public function getZeroPluralFormEnabled()
    {
        return $this->container['zero_plural_form_enabled'];
    }

    /**
     * Sets zero_plural_form_enabled
     *
     * @param bool|null $zero_plural_form_enabled (Optional) Displays the input fields for the 'ZERO' plural form for every key as well although only some languages require the 'ZERO' explicitly.
     *
     * @return $this
     */
    public function setZeroPluralFormEnabled($zero_plural_form_enabled)
    {
        $this->container['zero_plural_form_enabled'] = $zero_plural_form_enabled;

        return $this;
    }

    /**
     * Gets autotranslate_enabled
     *
     * @return bool|null
     */
    public function getAutotranslateEnabled()
    {
        return $this->container['autotranslate_enabled'];
    }

    /**
     * Sets autotranslate_enabled
     *
     * @param bool|null $autotranslate_enabled (Optional) Autopilot, requires machine_translation_enabled. <a href=\"https://support.phrase.com/hc/en-us/articles/5822187934364\">Read more</a>
     *
     * @return $this
     */
    public function setAutotranslateEnabled($autotranslate_enabled)
    {
        $this->container['autotranslate_enabled'] = $autotranslate_enabled;

        return $this;
    }

    /**
     * Gets autotranslate_check_new_translation_keys
     *
     * @return bool|null
     */
    public function getAutotranslateCheckNewTranslationKeys()
    {
        return $this->container['autotranslate_check_new_translation_keys'];
    }

    /**
     * Sets autotranslate_check_new_translation_keys
     *
     * @param bool|null $autotranslate_check_new_translation_keys (Optional) Requires autotranslate_enabled to be true
     *
     * @return $this
     */
    public function setAutotranslateCheckNewTranslationKeys($autotranslate_check_new_translation_keys)
    {
        $this->container['autotranslate_check_new_translation_keys'] = $autotranslate_check_new_translation_keys;

        return $this;
    }

    /**
     * Gets autotranslate_check_new_uploads
     *
     * @return bool|null
     */
    public function getAutotranslateCheckNewUploads()
    {
        return $this->container['autotranslate_check_new_uploads'];
    }

    /**
     * Sets autotranslate_check_new_uploads
     *
     * @param bool|null $autotranslate_check_new_uploads (Optional) Requires autotranslate_enabled to be true
     *
     * @return $this
     */
    public function setAutotranslateCheckNewUploads($autotranslate_check_new_uploads)
    {
        $this->container['autotranslate_check_new_uploads'] = $autotranslate_check_new_uploads;

        return $this;
    }

    /**
     * Gets autotranslate_check_new_locales
     *
     * @return bool|null
     */
    public function getAutotranslateCheckNewLocales()
    {
        return $this->container['autotranslate_check_new_locales'];
    }

    /**
     * Sets autotranslate_check_new_locales
     *
     * @param bool|null $autotranslate_check_new_locales (Optional) Requires autotranslate_enabled to be true
     *
     * @return $this
     */
    public function setAutotranslateCheckNewLocales($autotranslate_check_new_locales)
    {
        $this->container['autotranslate_check_new_locales'] = $autotranslate_check_new_locales;

        return $this;
    }

    /**
     * Gets autotranslate_mark_as_unverified
     *
     * @return bool|null
     */
    public function getAutotranslateMarkAsUnverified()
    {
        return $this->container['autotranslate_mark_as_unverified'];
    }

    /**
     * Sets autotranslate_mark_as_unverified
     *
     * @param bool|null $autotranslate_mark_as_unverified (Optional) Requires autotranslate_enabled to be true
     *
     * @return $this
     */
    public function setAutotranslateMarkAsUnverified($autotranslate_mark_as_unverified)
    {
        $this->container['autotranslate_mark_as_unverified'] = $autotranslate_mark_as_unverified;

        return $this;
    }

    /**
     * Gets autotranslate_use_machine_translation
     *
     * @return bool|null
     */
    public function getAutotranslateUseMachineTranslation()
    {
        return $this->container['autotranslate_use_machine_translation'];
    }

    /**
     * Sets autotranslate_use_machine_translation
     *
     * @param bool|null $autotranslate_use_machine_translation (Optional) Requires autotranslate_enabled to be true
     *
     * @return $this
     */
    public function setAutotranslateUseMachineTranslation($autotranslate_use_machine_translation)
    {
        $this->container['autotranslate_use_machine_translation'] = $autotranslate_use_machine_translation;

        return $this;
    }

    /**
     * Gets autotranslate_use_translation_memory
     *
     * @return bool|null
     */
    public function getAutotranslateUseTranslationMemory()
    {
        return $this->container['autotranslate_use_translation_memory'];
    }

    /**
     * Sets autotranslate_use_translation_memory
     *
     * @param bool|null $autotranslate_use_translation_memory (Optional) Requires autotranslate_enabled to be true
     *
     * @return $this
     */
    public function setAutotranslateUseTranslationMemory($autotranslate_use_translation_memory)
    {
        $this->container['autotranslate_use_translation_memory'] = $autotranslate_use_translation_memory;

        return $this;
    }

    /**
     * Gets default_encoding
     *
     * @return string|null
     */
    public function getDefaultEncoding()
    {
        return $this->container['default_encoding'];
    }

    /**
     * Sets default_encoding
     *
     * @param string|null $default_encoding (Optional) Sets the default encoding for Uploads. If you leave it empty, we will try to guess it automatically for you when you Upload a file. You can still override this value by setting the <a href='#post-/projects/-project_id-/uploads'>`file_encoding`</a> parameter for Uploads.
     *
     * @return $this
     */
    public function setDefaultEncoding($default_encoding)
    {
        $allowedValues = $this->getDefaultEncodingAllowableValues();
        if (!is_null($default_encoding) && !in_array($default_encoding, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'default_encoding', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['default_encoding'] = $default_encoding;

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


