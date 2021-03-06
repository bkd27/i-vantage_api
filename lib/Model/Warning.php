<?php
/**
 * Warning
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * iVantage API
 *
 * This is the iDirect iVantage API.
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * Warning Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Warning implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Warning';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'warning_type' => 'string',
        'limit_type' => 'string',
        'limit_value' => 'int',
        'send_value_change' => 'bool',
        'enabled' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'warning_type' => null,
        'limit_type' => null,
        'limit_value' => 'int32',
        'send_value_change' => null,
        'enabled' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'warning_type' => 'WarningType',
        'limit_type' => 'LimitType',
        'limit_value' => 'LimitValue',
        'send_value_change' => 'SendValueChange',
        'enabled' => 'Enabled'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'warning_type' => 'setWarningType',
        'limit_type' => 'setLimitType',
        'limit_value' => 'setLimitValue',
        'send_value_change' => 'setSendValueChange',
        'enabled' => 'setEnabled'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'warning_type' => 'getWarningType',
        'limit_type' => 'getLimitType',
        'limit_value' => 'getLimitValue',
        'send_value_change' => 'getSendValueChange',
        'enabled' => 'getEnabled'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['warning_type'] = isset($data['warning_type']) ? $data['warning_type'] : null;
        $this->container['limit_type'] = isset($data['limit_type']) ? $data['limit_type'] : null;
        $this->container['limit_value'] = isset($data['limit_value']) ? $data['limit_value'] : null;
        $this->container['send_value_change'] = isset($data['send_value_change']) ? $data['send_value_change'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets warning_type
     * @return string
     */
    public function getWarningType()
    {
        return $this->container['warning_type'];
    }

    /**
     * Sets warning_type
     * @param string $warning_type
     * @return $this
     */
    public function setWarningType($warning_type)
    {
        $this->container['warning_type'] = $warning_type;

        return $this;
    }

    /**
     * Gets limit_type
     * @return string
     */
    public function getLimitType()
    {
        return $this->container['limit_type'];
    }

    /**
     * Sets limit_type
     * @param string $limit_type
     * @return $this
     */
    public function setLimitType($limit_type)
    {
        $this->container['limit_type'] = $limit_type;

        return $this;
    }

    /**
     * Gets limit_value
     * @return int
     */
    public function getLimitValue()
    {
        return $this->container['limit_value'];
    }

    /**
     * Sets limit_value
     * @param int $limit_value
     * @return $this
     */
    public function setLimitValue($limit_value)
    {
        $this->container['limit_value'] = $limit_value;

        return $this;
    }

    /**
     * Gets send_value_change
     * @return bool
     */
    public function getSendValueChange()
    {
        return $this->container['send_value_change'];
    }

    /**
     * Sets send_value_change
     * @param bool $send_value_change
     * @return $this
     */
    public function setSendValueChange($send_value_change)
    {
        $this->container['send_value_change'] = $send_value_change;

        return $this;
    }

    /**
     * Gets enabled
     * @return bool
     */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     * @param bool $enabled
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


