<?php
/**
 * Reflector
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
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
 * Swagger Codegen version: 2.4.32
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * Reflector Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Reflector implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Reflector';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'name' => 'string',
        'parent_id' => 'int',
        'i_direct_part_number' => 'string',
        'size' => 'double',
        'offset_angle' => 'double',
        'controllable' => 'bool',
        'antenna_controller' => '\Swagger\Client\Model\ReflectorAntennaController'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'name' => null,
        'parent_id' => 'int32',
        'i_direct_part_number' => null,
        'size' => 'double',
        'offset_angle' => 'double',
        'controllable' => null,
        'antenna_controller' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'ID',
        'name' => 'Name',
        'parent_id' => 'ParentID',
        'i_direct_part_number' => 'iDirectPartNumber',
        'size' => 'Size',
        'offset_angle' => 'OffsetAngle',
        'controllable' => 'Controllable',
        'antenna_controller' => 'AntennaController'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'parent_id' => 'setParentId',
        'i_direct_part_number' => 'setIDirectPartNumber',
        'size' => 'setSize',
        'offset_angle' => 'setOffsetAngle',
        'controllable' => 'setControllable',
        'antenna_controller' => 'setAntennaController'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'parent_id' => 'getParentId',
        'i_direct_part_number' => 'getIDirectPartNumber',
        'size' => 'getSize',
        'offset_angle' => 'getOffsetAngle',
        'controllable' => 'getControllable',
        'antenna_controller' => 'getAntennaController'
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
        return self::$swaggerModelName;
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['parent_id'] = isset($data['parent_id']) ? $data['parent_id'] : null;
        $this->container['i_direct_part_number'] = isset($data['i_direct_part_number']) ? $data['i_direct_part_number'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['offset_angle'] = isset($data['offset_angle']) ? $data['offset_angle'] : null;
        $this->container['controllable'] = isset($data['controllable']) ? $data['controllable'] : null;
        $this->container['antenna_controller'] = isset($data['antenna_controller']) ? $data['antenna_controller'] : null;
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
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id Internal ID of the Reflector
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Name of the Reflector
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets parent_id
     *
     * @return int
     */
    public function getParentId()
    {
        return $this->container['parent_id'];
    }

    /**
     * Sets parent_id
     *
     * @param int $parent_id parent_id
     *
     * @return $this
     */
    public function setParentId($parent_id)
    {
        $this->container['parent_id'] = $parent_id;

        return $this;
    }

    /**
     * Gets i_direct_part_number
     *
     * @return string
     */
    public function getIDirectPartNumber()
    {
        return $this->container['i_direct_part_number'];
    }

    /**
     * Sets i_direct_part_number
     *
     * @param string $i_direct_part_number i_direct_part_number
     *
     * @return $this
     */
    public function setIDirectPartNumber($i_direct_part_number)
    {
        $this->container['i_direct_part_number'] = $i_direct_part_number;

        return $this;
    }

    /**
     * Gets size
     *
     * @return double
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     *
     * @param double $size size
     *
     * @return $this
     */
    public function setSize($size)
    {
        $this->container['size'] = $size;

        return $this;
    }

    /**
     * Gets offset_angle
     *
     * @return double
     */
    public function getOffsetAngle()
    {
        return $this->container['offset_angle'];
    }

    /**
     * Sets offset_angle
     *
     * @param double $offset_angle offset_angle
     *
     * @return $this
     */
    public function setOffsetAngle($offset_angle)
    {
        $this->container['offset_angle'] = $offset_angle;

        return $this;
    }

    /**
     * Gets controllable
     *
     * @return bool
     */
    public function getControllable()
    {
        return $this->container['controllable'];
    }

    /**
     * Sets controllable
     *
     * @param bool $controllable controllable
     *
     * @return $this
     */
    public function setControllable($controllable)
    {
        $this->container['controllable'] = $controllable;

        return $this;
    }

    /**
     * Gets antenna_controller
     *
     * @return \Swagger\Client\Model\ReflectorAntennaController
     */
    public function getAntennaController()
    {
        return $this->container['antenna_controller'];
    }

    /**
     * Sets antenna_controller
     *
     * @param \Swagger\Client\Model\ReflectorAntennaController $antenna_controller antenna_controller
     *
     * @return $this
     */
    public function setAntennaController($antenna_controller)
    {
        $this->container['antenna_controller'] = $antenna_controller;

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
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


