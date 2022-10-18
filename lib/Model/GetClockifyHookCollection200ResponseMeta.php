<?php
/**
 * GetClockifyHookCollection200ResponseMeta
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
 * GetClockifyHookCollection200ResponseMeta Class Doc Comment
 *
 * @category Class
 * @package  Skriptfabrik\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetClockifyHookCollection200ResponseMeta implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'getClockifyHookCollection_200_response_meta';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'total_items' => 'float',
        'items_per_page' => 'float',
        'current_page' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'total_items' => null,
        'items_per_page' => null,
        'current_page' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'total_items' => false,
		'items_per_page' => false,
		'current_page' => false
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
        'total_items' => 'totalItems',
        'items_per_page' => 'itemsPerPage',
        'current_page' => 'currentPage'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'total_items' => 'setTotalItems',
        'items_per_page' => 'setItemsPerPage',
        'current_page' => 'setCurrentPage'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'total_items' => 'getTotalItems',
        'items_per_page' => 'getItemsPerPage',
        'current_page' => 'getCurrentPage'
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
        $this->setIfExists('total_items', $data ?? [], null);
        $this->setIfExists('items_per_page', $data ?? [], null);
        $this->setIfExists('current_page', $data ?? [], null);
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

        if ($this->container['total_items'] === null) {
            $invalidProperties[] = "'total_items' can't be null";
        }
        if (($this->container['total_items'] < 0)) {
            $invalidProperties[] = "invalid value for 'total_items', must be bigger than or equal to 0.";
        }

        if ($this->container['items_per_page'] === null) {
            $invalidProperties[] = "'items_per_page' can't be null";
        }
        if (($this->container['items_per_page'] < 0)) {
            $invalidProperties[] = "invalid value for 'items_per_page', must be bigger than or equal to 0.";
        }

        if ($this->container['current_page'] === null) {
            $invalidProperties[] = "'current_page' can't be null";
        }
        if (($this->container['current_page'] < 1)) {
            $invalidProperties[] = "invalid value for 'current_page', must be bigger than or equal to 1.";
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
     * Gets total_items
     *
     * @return float
     */
    public function getTotalItems()
    {
        return $this->container['total_items'];
    }

    /**
     * Sets total_items
     *
     * @param float $total_items Amount of elements in total
     *
     * @return self
     */
    public function setTotalItems($total_items)
    {

        if (($total_items < 0)) {
            throw new \InvalidArgumentException('invalid value for $total_items when calling GetClockifyHookCollection200ResponseMeta., must be bigger than or equal to 0.');
        }


        if (is_null($total_items)) {
            throw new \InvalidArgumentException('non-nullable total_items cannot be null');
        }

        $this->container['total_items'] = $total_items;

        return $this;
    }

    /**
     * Gets items_per_page
     *
     * @return float
     */
    public function getItemsPerPage()
    {
        return $this->container['items_per_page'];
    }

    /**
     * Sets items_per_page
     *
     * @param float $items_per_page Amount of elements per page
     *
     * @return self
     */
    public function setItemsPerPage($items_per_page)
    {

        if (($items_per_page < 0)) {
            throw new \InvalidArgumentException('invalid value for $items_per_page when calling GetClockifyHookCollection200ResponseMeta., must be bigger than or equal to 0.');
        }


        if (is_null($items_per_page)) {
            throw new \InvalidArgumentException('non-nullable items_per_page cannot be null');
        }

        $this->container['items_per_page'] = $items_per_page;

        return $this;
    }

    /**
     * Gets current_page
     *
     * @return float
     */
    public function getCurrentPage()
    {
        return $this->container['current_page'];
    }

    /**
     * Sets current_page
     *
     * @param float $current_page Number of the current page
     *
     * @return self
     */
    public function setCurrentPage($current_page)
    {

        if (($current_page < 1)) {
            throw new \InvalidArgumentException('invalid value for $current_page when calling GetClockifyHookCollection200ResponseMeta., must be bigger than or equal to 1.');
        }


        if (is_null($current_page)) {
            throw new \InvalidArgumentException('non-nullable current_page cannot be null');
        }

        $this->container['current_page'] = $current_page;

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


