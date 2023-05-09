<?php
/**
 * UploadCreateParameters
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
 * UploadCreateParameters Class Doc Comment
 *
 * @category Class
 * @package  Phrase
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class UploadCreateParameters implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'upload_create_parameters';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'branch' => 'string',
        'file' => '\SplFileObject',
        'file_format' => 'string',
        'locale_id' => 'string',
        'tags' => 'string',
        'update_translations' => 'bool',
        'update_descriptions' => 'bool',
        'convert_emoji' => 'bool',
        'skip_upload_tags' => 'bool',
        'skip_unverification' => 'bool',
        'file_encoding' => 'string',
        'locale_mapping' => 'object',
        'format_options' => 'object',
        'autotranslate' => 'bool',
        'mark_reviewed' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'branch' => null,
        'file' => 'binary',
        'file_format' => null,
        'locale_id' => null,
        'tags' => null,
        'update_translations' => null,
        'update_descriptions' => null,
        'convert_emoji' => null,
        'skip_upload_tags' => null,
        'skip_unverification' => null,
        'file_encoding' => null,
        'locale_mapping' => null,
        'format_options' => null,
        'autotranslate' => null,
        'mark_reviewed' => null
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
        'file' => 'file',
        'file_format' => 'file_format',
        'locale_id' => 'locale_id',
        'tags' => 'tags',
        'update_translations' => 'update_translations',
        'update_descriptions' => 'update_descriptions',
        'convert_emoji' => 'convert_emoji',
        'skip_upload_tags' => 'skip_upload_tags',
        'skip_unverification' => 'skip_unverification',
        'file_encoding' => 'file_encoding',
        'locale_mapping' => 'locale_mapping',
        'format_options' => 'format_options',
        'autotranslate' => 'autotranslate',
        'mark_reviewed' => 'mark_reviewed'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'branch' => 'setBranch',
        'file' => 'setFile',
        'file_format' => 'setFileFormat',
        'locale_id' => 'setLocaleId',
        'tags' => 'setTags',
        'update_translations' => 'setUpdateTranslations',
        'update_descriptions' => 'setUpdateDescriptions',
        'convert_emoji' => 'setConvertEmoji',
        'skip_upload_tags' => 'setSkipUploadTags',
        'skip_unverification' => 'setSkipUnverification',
        'file_encoding' => 'setFileEncoding',
        'locale_mapping' => 'setLocaleMapping',
        'format_options' => 'setFormatOptions',
        'autotranslate' => 'setAutotranslate',
        'mark_reviewed' => 'setMarkReviewed'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'branch' => 'getBranch',
        'file' => 'getFile',
        'file_format' => 'getFileFormat',
        'locale_id' => 'getLocaleId',
        'tags' => 'getTags',
        'update_translations' => 'getUpdateTranslations',
        'update_descriptions' => 'getUpdateDescriptions',
        'convert_emoji' => 'getConvertEmoji',
        'skip_upload_tags' => 'getSkipUploadTags',
        'skip_unverification' => 'getSkipUnverification',
        'file_encoding' => 'getFileEncoding',
        'locale_mapping' => 'getLocaleMapping',
        'format_options' => 'getFormatOptions',
        'autotranslate' => 'getAutotranslate',
        'mark_reviewed' => 'getMarkReviewed'
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
        $this->container['file'] = isset($data['file']) ? $data['file'] : null;
        $this->container['file_format'] = isset($data['file_format']) ? $data['file_format'] : null;
        $this->container['locale_id'] = isset($data['locale_id']) ? $data['locale_id'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['update_translations'] = isset($data['update_translations']) ? $data['update_translations'] : null;
        $this->container['update_descriptions'] = isset($data['update_descriptions']) ? $data['update_descriptions'] : null;
        $this->container['convert_emoji'] = isset($data['convert_emoji']) ? $data['convert_emoji'] : null;
        $this->container['skip_upload_tags'] = isset($data['skip_upload_tags']) ? $data['skip_upload_tags'] : null;
        $this->container['skip_unverification'] = isset($data['skip_unverification']) ? $data['skip_unverification'] : null;
        $this->container['file_encoding'] = isset($data['file_encoding']) ? $data['file_encoding'] : null;
        $this->container['locale_mapping'] = isset($data['locale_mapping']) ? $data['locale_mapping'] : null;
        $this->container['format_options'] = isset($data['format_options']) ? $data['format_options'] : null;
        $this->container['autotranslate'] = isset($data['autotranslate']) ? $data['autotranslate'] : null;
        $this->container['mark_reviewed'] = isset($data['mark_reviewed']) ? $data['mark_reviewed'] : null;
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
     * Gets file
     *
     * @return \SplFileObject|null
     */
    public function getFile()
    {
        return $this->container['file'];
    }

    /**
     * Sets file
     *
     * @param \SplFileObject|null $file File to be imported
     *
     * @return $this
     */
    public function setFile($file)
    {
        $this->container['file'] = $file;

        return $this;
    }

    /**
     * Gets file_format
     *
     * @return string|null
     */
    public function getFileFormat()
    {
        return $this->container['file_format'];
    }

    /**
     * Sets file_format
     *
     * @param string|null $file_format File format. Auto-detected when possible and not specified.
     *
     * @return $this
     */
    public function setFileFormat($file_format)
    {
        $this->container['file_format'] = $file_format;

        return $this;
    }

    /**
     * Gets locale_id
     *
     * @return string|null
     */
    public function getLocaleId()
    {
        return $this->container['locale_id'];
    }

    /**
     * Sets locale_id
     *
     * @param string|null $locale_id Locale of the file's content. Can be the name or public id of the locale. Preferred is the public id.
     *
     * @return $this
     */
    public function setLocaleId($locale_id)
    {
        $this->container['locale_id'] = $locale_id;

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
     * @param string|null $tags List of tags separated by comma to be associated with the new keys contained in the upload.
     *
     * @return $this
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets update_translations
     *
     * @return bool|null
     */
    public function getUpdateTranslations()
    {
        return $this->container['update_translations'];
    }

    /**
     * Sets update_translations
     *
     * @param bool|null $update_translations Indicates whether existing translations should be updated with the file content.
     *
     * @return $this
     */
    public function setUpdateTranslations($update_translations)
    {
        $this->container['update_translations'] = $update_translations;

        return $this;
    }

    /**
     * Gets update_descriptions
     *
     * @return bool|null
     */
    public function getUpdateDescriptions()
    {
        return $this->container['update_descriptions'];
    }

    /**
     * Sets update_descriptions
     *
     * @param bool|null $update_descriptions Existing key descriptions will be updated with the file content. Empty descriptions overwrite existing descriptions.
     *
     * @return $this
     */
    public function setUpdateDescriptions($update_descriptions)
    {
        $this->container['update_descriptions'] = $update_descriptions;

        return $this;
    }

    /**
     * Gets convert_emoji
     *
     * @return bool|null
     */
    public function getConvertEmoji()
    {
        return $this->container['convert_emoji'];
    }

    /**
     * Sets convert_emoji
     *
     * @param bool|null $convert_emoji This option is obsolete. Providing the option will cause a bad request error.
     *
     * @return $this
     */
    public function setConvertEmoji($convert_emoji)
    {
        $this->container['convert_emoji'] = $convert_emoji;

        return $this;
    }

    /**
     * Gets skip_upload_tags
     *
     * @return bool|null
     */
    public function getSkipUploadTags()
    {
        return $this->container['skip_upload_tags'];
    }

    /**
     * Sets skip_upload_tags
     *
     * @param bool|null $skip_upload_tags Indicates whether the upload should not create upload tags.
     *
     * @return $this
     */
    public function setSkipUploadTags($skip_upload_tags)
    {
        $this->container['skip_upload_tags'] = $skip_upload_tags;

        return $this;
    }

    /**
     * Gets skip_unverification
     *
     * @return bool|null
     */
    public function getSkipUnverification()
    {
        return $this->container['skip_unverification'];
    }

    /**
     * Sets skip_unverification
     *
     * @param bool|null $skip_unverification Indicates whether the upload should unverify updated translations.
     *
     * @return $this
     */
    public function setSkipUnverification($skip_unverification)
    {
        $this->container['skip_unverification'] = $skip_unverification;

        return $this;
    }

    /**
     * Gets file_encoding
     *
     * @return string|null
     */
    public function getFileEncoding()
    {
        return $this->container['file_encoding'];
    }

    /**
     * Sets file_encoding
     *
     * @param string|null $file_encoding Enforces a specific encoding on the file contents. Valid options are \"UTF-8\", \"UTF-16\" and \"ISO-8859-1\".
     *
     * @return $this
     */
    public function setFileEncoding($file_encoding)
    {
        $this->container['file_encoding'] = $file_encoding;

        return $this;
    }

    /**
     * Gets locale_mapping
     *
     * @return object|null
     */
    public function getLocaleMapping()
    {
        return $this->container['locale_mapping'];
    }

    /**
     * Sets locale_mapping
     *
     * @param object|null $locale_mapping Optional, format specific mapping between locale names and the columns the translations to those locales are contained in.
     *
     * @return $this
     */
    public function setLocaleMapping($locale_mapping)
    {
        $this->container['locale_mapping'] = $locale_mapping;

        return $this;
    }

    /**
     * Gets format_options
     *
     * @return object|null
     */
    public function getFormatOptions()
    {
        return $this->container['format_options'];
    }

    /**
     * Sets format_options
     *
     * @param object|null $format_options Additional options available for specific formats. See our format guide for complete list.
     *
     * @return $this
     */
    public function setFormatOptions($format_options)
    {
        $this->container['format_options'] = $format_options;

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
     * @param bool|null $autotranslate If set, translations for the uploaded language will be fetched automatically.
     *
     * @return $this
     */
    public function setAutotranslate($autotranslate)
    {
        $this->container['autotranslate'] = $autotranslate;

        return $this;
    }

    /**
     * Gets mark_reviewed
     *
     * @return bool|null
     */
    public function getMarkReviewed()
    {
        return $this->container['mark_reviewed'];
    }

    /**
     * Sets mark_reviewed
     *
     * @param bool|null $mark_reviewed Indicated whether the imported translations should be marked as reviewed. This setting is available if the review workflow is enabled for the project.
     *
     * @return $this
     */
    public function setMarkReviewed($mark_reviewed)
    {
        $this->container['mark_reviewed'] = $mark_reviewed;

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


