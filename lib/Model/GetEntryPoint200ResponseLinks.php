<?php
/**
 * GetEntryPoint200ResponseLinks
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Skriptfabrik\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * skriptfabrik API
 *
 * This is the specification for the skriptfabrik API.
 *
 * The version of the OpenAPI document: 1.0.0+65bfafc
 * Contact: info@skriptfabrik.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.2.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Skriptfabrik\ApiClient\Model;

use \ArrayAccess;
use \Skriptfabrik\ApiClient\ObjectSerializer;

/**
 * GetEntryPoint200ResponseLinks Class Doc Comment
 *
 * @category Class
 * @package  Skriptfabrik\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetEntryPoint200ResponseLinks implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'getEntryPoint_200_response_links';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'self' => '\Skriptfabrik\ApiClient\Model\JSONAPILink',
        'clockify_hook' => '\Skriptfabrik\ApiClient\Model\JSONAPILink',
        'clockify_user' => '\Skriptfabrik\ApiClient\Model\JSONAPILink',
        'moco_service' => '\Skriptfabrik\ApiClient\Model\JSONAPILink',
        'moco_settings' => '\Skriptfabrik\ApiClient\Model\JSONAPILink',
        'organization' => '\Skriptfabrik\ApiClient\Model\JSONAPILink',
        'user' => '\Skriptfabrik\ApiClient\Model\JSONAPILink'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'self' => null,
        'clockify_hook' => null,
        'clockify_user' => null,
        'moco_service' => null,
        'moco_settings' => null,
        'organization' => null,
        'user' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'self' => false,
		'clockify_hook' => false,
		'clockify_user' => false,
		'moco_service' => false,
		'moco_settings' => false,
		'organization' => false,
		'user' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'self' => 'self',
        'clockify_hook' => 'clockifyHook',
        'clockify_user' => 'clockifyUser',
        'moco_service' => 'mocoService',
        'moco_settings' => 'mocoSettings',
        'organization' => 'organization',
        'user' => 'user'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'self' => 'setSelf',
        'clockify_hook' => 'setClockifyHook',
        'clockify_user' => 'setClockifyUser',
        'moco_service' => 'setMocoService',
        'moco_settings' => 'setMocoSettings',
        'organization' => 'setOrganization',
        'user' => 'setUser'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'self' => 'getSelf',
        'clockify_hook' => 'getClockifyHook',
        'clockify_user' => 'getClockifyUser',
        'moco_service' => 'getMocoService',
        'moco_settings' => 'getMocoSettings',
        'organization' => 'getOrganization',
        'user' => 'getUser'
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
        $this->setIfExists('self', $data ?? [], null);
        $this->setIfExists('clockify_hook', $data ?? [], null);
        $this->setIfExists('clockify_user', $data ?? [], null);
        $this->setIfExists('moco_service', $data ?? [], null);
        $this->setIfExists('moco_settings', $data ?? [], null);
        $this->setIfExists('organization', $data ?? [], null);
        $this->setIfExists('user', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['self'] === null) {
            $invalidProperties[] = "'self' can't be null";
        }
        if ($this->container['clockify_hook'] === null) {
            $invalidProperties[] = "'clockify_hook' can't be null";
        }
        if ($this->container['clockify_user'] === null) {
            $invalidProperties[] = "'clockify_user' can't be null";
        }
        if ($this->container['moco_service'] === null) {
            $invalidProperties[] = "'moco_service' can't be null";
        }
        if ($this->container['moco_settings'] === null) {
            $invalidProperties[] = "'moco_settings' can't be null";
        }
        if ($this->container['organization'] === null) {
            $invalidProperties[] = "'organization' can't be null";
        }
        if ($this->container['user'] === null) {
            $invalidProperties[] = "'user' can't be null";
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
     * Gets self
     *
     * @return \Skriptfabrik\ApiClient\Model\JSONAPILink
     */
    public function getSelf()
    {
        return $this->container['self'];
    }

    /**
     * Sets self
     *
     * @param \Skriptfabrik\ApiClient\Model\JSONAPILink $self self
     *
     * @return self
     */
    public function setSelf($self)
    {

        if (is_null($self)) {
            throw new \InvalidArgumentException('non-nullable self cannot be null');
        }

        $this->container['self'] = $self;

        return $this;
    }

    /**
     * Gets clockify_hook
     *
     * @return \Skriptfabrik\ApiClient\Model\JSONAPILink
     */
    public function getClockifyHook()
    {
        return $this->container['clockify_hook'];
    }

    /**
     * Sets clockify_hook
     *
     * @param \Skriptfabrik\ApiClient\Model\JSONAPILink $clockify_hook clockify_hook
     *
     * @return self
     */
    public function setClockifyHook($clockify_hook)
    {

        if (is_null($clockify_hook)) {
            throw new \InvalidArgumentException('non-nullable clockify_hook cannot be null');
        }

        $this->container['clockify_hook'] = $clockify_hook;

        return $this;
    }

    /**
     * Gets clockify_user
     *
     * @return \Skriptfabrik\ApiClient\Model\JSONAPILink
     */
    public function getClockifyUser()
    {
        return $this->container['clockify_user'];
    }

    /**
     * Sets clockify_user
     *
     * @param \Skriptfabrik\ApiClient\Model\JSONAPILink $clockify_user clockify_user
     *
     * @return self
     */
    public function setClockifyUser($clockify_user)
    {

        if (is_null($clockify_user)) {
            throw new \InvalidArgumentException('non-nullable clockify_user cannot be null');
        }

        $this->container['clockify_user'] = $clockify_user;

        return $this;
    }

    /**
     * Gets moco_service
     *
     * @return \Skriptfabrik\ApiClient\Model\JSONAPILink
     */
    public function getMocoService()
    {
        return $this->container['moco_service'];
    }

    /**
     * Sets moco_service
     *
     * @param \Skriptfabrik\ApiClient\Model\JSONAPILink $moco_service moco_service
     *
     * @return self
     */
    public function setMocoService($moco_service)
    {

        if (is_null($moco_service)) {
            throw new \InvalidArgumentException('non-nullable moco_service cannot be null');
        }

        $this->container['moco_service'] = $moco_service;

        return $this;
    }

    /**
     * Gets moco_settings
     *
     * @return \Skriptfabrik\ApiClient\Model\JSONAPILink
     */
    public function getMocoSettings()
    {
        return $this->container['moco_settings'];
    }

    /**
     * Sets moco_settings
     *
     * @param \Skriptfabrik\ApiClient\Model\JSONAPILink $moco_settings moco_settings
     *
     * @return self
     */
    public function setMocoSettings($moco_settings)
    {

        if (is_null($moco_settings)) {
            throw new \InvalidArgumentException('non-nullable moco_settings cannot be null');
        }

        $this->container['moco_settings'] = $moco_settings;

        return $this;
    }

    /**
     * Gets organization
     *
     * @return \Skriptfabrik\ApiClient\Model\JSONAPILink
     */
    public function getOrganization()
    {
        return $this->container['organization'];
    }

    /**
     * Sets organization
     *
     * @param \Skriptfabrik\ApiClient\Model\JSONAPILink $organization organization
     *
     * @return self
     */
    public function setOrganization($organization)
    {

        if (is_null($organization)) {
            throw new \InvalidArgumentException('non-nullable organization cannot be null');
        }

        $this->container['organization'] = $organization;

        return $this;
    }

    /**
     * Gets user
     *
     * @return \Skriptfabrik\ApiClient\Model\JSONAPILink
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     *
     * @param \Skriptfabrik\ApiClient\Model\JSONAPILink $user user
     *
     * @return self
     */
    public function setUser($user)
    {

        if (is_null($user)) {
            throw new \InvalidArgumentException('non-nullable user cannot be null');
        }

        $this->container['user'] = $user;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
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

