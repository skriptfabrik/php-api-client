<?php
/**
 * MocoHookAttributes
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
 * The version of the OpenAPI document: 1.1.1+134fc7b
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
 * MocoHookAttributes Class Doc Comment
 *
 * @category Class
 * @description The MOCO Hook Attributes.
 * @package  Skriptfabrik\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class MocoHookAttributes implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'MocoHookAttributes';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        '_id' => 'string',
        'status' => 'string',
        'signature_key' => 'string',
        'event' => 'string',
        'target' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        '_id' => null,
        'status' => null,
        'signature_key' => null,
        'event' => null,
        'target' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        '_id' => false,
		'status' => false,
		'signature_key' => false,
		'event' => false,
		'target' => false
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
        '_id' => '_id',
        'status' => 'status',
        'signature_key' => 'signatureKey',
        'event' => 'event',
        'target' => 'target'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        '_id' => 'setId',
        'status' => 'setStatus',
        'signature_key' => 'setSignatureKey',
        'event' => 'setEvent',
        'target' => 'setTarget'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        '_id' => 'getId',
        'status' => 'getStatus',
        'signature_key' => 'getSignatureKey',
        'event' => 'getEvent',
        'target' => 'getTarget'
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

    public const STATUS_ENABLED = 'ENABLED';
    public const STATUS_DISABLED = 'DISABLED';
    public const EVENT_CREATED = 'CREATED';
    public const EVENT_UPDATED = 'UPDATED';
    public const EVENT_DELETED = 'DELETED';
    public const EVENT_ARCHIVED = 'ARCHIVED';
    public const TARGET_COMPANY = 'COMPANY';
    public const TARGET_PROJECT = 'PROJECT';
    public const TARGET_TASK = 'TASK';
    public const TARGET_USER = 'USER';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_ENABLED,
            self::STATUS_DISABLED,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEventAllowableValues()
    {
        return [
            self::EVENT_CREATED,
            self::EVENT_UPDATED,
            self::EVENT_DELETED,
            self::EVENT_ARCHIVED,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTargetAllowableValues()
    {
        return [
            self::TARGET_COMPANY,
            self::TARGET_PROJECT,
            self::TARGET_TASK,
            self::TARGET_USER,
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
    public function __construct(array $data = null)
    {
        $this->setIfExists('_id', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('signature_key', $data ?? [], null);
        $this->setIfExists('event', $data ?? [], null);
        $this->setIfExists('target', $data ?? [], null);
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

        if (!is_null($this->container['_id']) && (mb_strlen($this->container['_id']) > 26)) {
            $invalidProperties[] = "invalid value for '_id', the character length must be smaller than or equal to 26.";
        }

        if (!is_null($this->container['_id']) && (mb_strlen($this->container['_id']) < 26)) {
            $invalidProperties[] = "invalid value for '_id', the character length must be bigger than or equal to 26.";
        }

        if (!is_null($this->container['_id']) && !preg_match("/^[0-9A-HJ-KM-NP-TV-Z]{26}$/", $this->container['_id'])) {
            $invalidProperties[] = "invalid value for '_id', must be conform to the pattern /^[0-9A-HJ-KM-NP-TV-Z]{26}$/.";
        }

        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['signature_key'] === null) {
            $invalidProperties[] = "'signature_key' can't be null";
        }
        if ((mb_strlen($this->container['signature_key']) < 1)) {
            $invalidProperties[] = "invalid value for 'signature_key', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['event'] === null) {
            $invalidProperties[] = "'event' can't be null";
        }
        $allowedValues = $this->getEventAllowableValues();
        if (!is_null($this->container['event']) && !in_array($this->container['event'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'event', must be one of '%s'",
                $this->container['event'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['target'] === null) {
            $invalidProperties[] = "'target' can't be null";
        }
        $allowedValues = $this->getTargetAllowableValues();
        if (!is_null($this->container['target']) && !in_array($this->container['target'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'target', must be one of '%s'",
                $this->container['target'],
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
     * Gets _id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['_id'];
    }

    /**
     * Sets _id
     *
     * @param string|null $_id MOCO hook identifier
     *
     * @return self
     */
    public function setId($_id)
    {
        if (!is_null($_id) && (mb_strlen($_id) > 26)) {
            throw new \InvalidArgumentException('invalid length for $_id when calling MocoHookAttributes., must be smaller than or equal to 26.');
        }
        if (!is_null($_id) && (mb_strlen($_id) < 26)) {
            throw new \InvalidArgumentException('invalid length for $_id when calling MocoHookAttributes., must be bigger than or equal to 26.');
        }
        if (!is_null($_id) && (!preg_match("/^[0-9A-HJ-KM-NP-TV-Z]{26}$/", $_id))) {
            throw new \InvalidArgumentException("invalid value for \$_id when calling MocoHookAttributes., must conform to the pattern /^[0-9A-HJ-KM-NP-TV-Z]{26}$/.");
        }


        if (is_null($_id)) {
            throw new \InvalidArgumentException('non-nullable _id cannot be null');
        }

        $this->container['_id'] = $_id;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status Clockify hook status
     *
     * @return self
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'status', must be one of '%s'",
                    $status,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }

        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets signature_key
     *
     * @return string
     */
    public function getSignatureKey()
    {
        return $this->container['signature_key'];
    }

    /**
     * Sets signature_key
     *
     * @param string $signature_key Clockify signature
     *
     * @return self
     */
    public function setSignatureKey($signature_key)
    {

        if ((mb_strlen($signature_key) < 1)) {
            throw new \InvalidArgumentException('invalid length for $signature_key when calling MocoHookAttributes., must be bigger than or equal to 1.');
        }


        if (is_null($signature_key)) {
            throw new \InvalidArgumentException('non-nullable signature_key cannot be null');
        }

        $this->container['signature_key'] = $signature_key;

        return $this;
    }

    /**
     * Gets event
     *
     * @return string
     */
    public function getEvent()
    {
        return $this->container['event'];
    }

    /**
     * Sets event
     *
     * @param string $event event
     *
     * @return self
     */
    public function setEvent($event)
    {
        $allowedValues = $this->getEventAllowableValues();
        if (!in_array($event, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'event', must be one of '%s'",
                    $event,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($event)) {
            throw new \InvalidArgumentException('non-nullable event cannot be null');
        }

        $this->container['event'] = $event;

        return $this;
    }

    /**
     * Gets target
     *
     * @return string
     */
    public function getTarget()
    {
        return $this->container['target'];
    }

    /**
     * Sets target
     *
     * @param string $target target
     *
     * @return self
     */
    public function setTarget($target)
    {
        $allowedValues = $this->getTargetAllowableValues();
        if (!in_array($target, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'target', must be one of '%s'",
                    $target,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($target)) {
            throw new \InvalidArgumentException('non-nullable target cannot be null');
        }

        $this->container['target'] = $target;

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


