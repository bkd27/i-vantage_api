<?php
/**
 * Spacecraft
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
 * Spacecraft Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Spacecraft implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Spacecraft';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'name' => 'string',
        'operator_id' => 'int',
        'operator_ref_name' => 'string',
        'longitude' => 'double',
        'incline_orbit' => 'double',
        'minimum_look_angle' => 'double',
        'max_skew' => 'double',
        'skew_polarization' => 'double',
        'skew_margin' => 'double',
        'station_box_angle' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'name' => null,
        'operator_id' => 'int32',
        'operator_ref_name' => null,
        'longitude' => 'double',
        'incline_orbit' => 'double',
        'minimum_look_angle' => 'double',
        'max_skew' => 'double',
        'skew_polarization' => 'double',
        'skew_margin' => 'double',
        'station_box_angle' => 'double'
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
        'operator_id' => 'OperatorID',
        'operator_ref_name' => 'OperatorRefName',
        'longitude' => 'Longitude',
        'incline_orbit' => 'InclineOrbit',
        'minimum_look_angle' => 'MinimumLookAngle',
        'max_skew' => 'MaxSkew',
        'skew_polarization' => 'SkewPolarization',
        'skew_margin' => 'SkewMargin',
        'station_box_angle' => 'StationBoxAngle'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'operator_id' => 'setOperatorId',
        'operator_ref_name' => 'setOperatorRefName',
        'longitude' => 'setLongitude',
        'incline_orbit' => 'setInclineOrbit',
        'minimum_look_angle' => 'setMinimumLookAngle',
        'max_skew' => 'setMaxSkew',
        'skew_polarization' => 'setSkewPolarization',
        'skew_margin' => 'setSkewMargin',
        'station_box_angle' => 'setStationBoxAngle'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'operator_id' => 'getOperatorId',
        'operator_ref_name' => 'getOperatorRefName',
        'longitude' => 'getLongitude',
        'incline_orbit' => 'getInclineOrbit',
        'minimum_look_angle' => 'getMinimumLookAngle',
        'max_skew' => 'getMaxSkew',
        'skew_polarization' => 'getSkewPolarization',
        'skew_margin' => 'getSkewMargin',
        'station_box_angle' => 'getStationBoxAngle'
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
        $this->container['operator_id'] = isset($data['operator_id']) ? $data['operator_id'] : null;
        $this->container['operator_ref_name'] = isset($data['operator_ref_name']) ? $data['operator_ref_name'] : null;
        $this->container['longitude'] = isset($data['longitude']) ? $data['longitude'] : null;
        $this->container['incline_orbit'] = isset($data['incline_orbit']) ? $data['incline_orbit'] : null;
        $this->container['minimum_look_angle'] = isset($data['minimum_look_angle']) ? $data['minimum_look_angle'] : null;
        $this->container['max_skew'] = isset($data['max_skew']) ? $data['max_skew'] : null;
        $this->container['skew_polarization'] = isset($data['skew_polarization']) ? $data['skew_polarization'] : null;
        $this->container['skew_margin'] = isset($data['skew_margin']) ? $data['skew_margin'] : null;
        $this->container['station_box_angle'] = isset($data['station_box_angle']) ? $data['station_box_angle'] : null;
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
     * @param int $id Internal ID of the Spacecraft
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
     * @param string $name Name of the Spacecraft
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets operator_id
     *
     * @return int
     */
    public function getOperatorId()
    {
        return $this->container['operator_id'];
    }

    /**
     * Sets operator_id
     *
     * @param int $operator_id operator_id
     *
     * @return $this
     */
    public function setOperatorId($operator_id)
    {
        $this->container['operator_id'] = $operator_id;

        return $this;
    }

    /**
     * Gets operator_ref_name
     *
     * @return string
     */
    public function getOperatorRefName()
    {
        return $this->container['operator_ref_name'];
    }

    /**
     * Sets operator_ref_name
     *
     * @param string $operator_ref_name operator_ref_name
     *
     * @return $this
     */
    public function setOperatorRefName($operator_ref_name)
    {
        $this->container['operator_ref_name'] = $operator_ref_name;

        return $this;
    }

    /**
     * Gets longitude
     *
     * @return double
     */
    public function getLongitude()
    {
        return $this->container['longitude'];
    }

    /**
     * Sets longitude
     *
     * @param double $longitude longitude
     *
     * @return $this
     */
    public function setLongitude($longitude)
    {
        $this->container['longitude'] = $longitude;

        return $this;
    }

    /**
     * Gets incline_orbit
     *
     * @return double
     */
    public function getInclineOrbit()
    {
        return $this->container['incline_orbit'];
    }

    /**
     * Sets incline_orbit
     *
     * @param double $incline_orbit incline_orbit
     *
     * @return $this
     */
    public function setInclineOrbit($incline_orbit)
    {
        $this->container['incline_orbit'] = $incline_orbit;

        return $this;
    }

    /**
     * Gets minimum_look_angle
     *
     * @return double
     */
    public function getMinimumLookAngle()
    {
        return $this->container['minimum_look_angle'];
    }

    /**
     * Sets minimum_look_angle
     *
     * @param double $minimum_look_angle minimum_look_angle
     *
     * @return $this
     */
    public function setMinimumLookAngle($minimum_look_angle)
    {
        $this->container['minimum_look_angle'] = $minimum_look_angle;

        return $this;
    }

    /**
     * Gets max_skew
     *
     * @return double
     */
    public function getMaxSkew()
    {
        return $this->container['max_skew'];
    }

    /**
     * Sets max_skew
     *
     * @param double $max_skew max_skew
     *
     * @return $this
     */
    public function setMaxSkew($max_skew)
    {
        $this->container['max_skew'] = $max_skew;

        return $this;
    }

    /**
     * Gets skew_polarization
     *
     * @return double
     */
    public function getSkewPolarization()
    {
        return $this->container['skew_polarization'];
    }

    /**
     * Sets skew_polarization
     *
     * @param double $skew_polarization skew_polarization
     *
     * @return $this
     */
    public function setSkewPolarization($skew_polarization)
    {
        $this->container['skew_polarization'] = $skew_polarization;

        return $this;
    }

    /**
     * Gets skew_margin
     *
     * @return double
     */
    public function getSkewMargin()
    {
        return $this->container['skew_margin'];
    }

    /**
     * Sets skew_margin
     *
     * @param double $skew_margin skew_margin
     *
     * @return $this
     */
    public function setSkewMargin($skew_margin)
    {
        $this->container['skew_margin'] = $skew_margin;

        return $this;
    }

    /**
     * Gets station_box_angle
     *
     * @return double
     */
    public function getStationBoxAngle()
    {
        return $this->container['station_box_angle'];
    }

    /**
     * Sets station_box_angle
     *
     * @param double $station_box_angle station_box_angle
     *
     * @return $this
     */
    public function setStationBoxAngle($station_box_angle)
    {
        $this->container['station_box_angle'] = $station_box_angle;

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


