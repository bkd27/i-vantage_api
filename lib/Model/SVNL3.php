<?php
/**
 * SVNL3
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
 * SVNL3 Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SVNL3 implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'SVN_L3';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'eth0_ip_address' => 'string',
        'eth0_subnet_mask' => 'string',
        'sat0_ip_address' => 'string',
        'sat0_subnet_mask' => 'string',
        'bgp' => '\Swagger\Client\Model\SVNL3BGP'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'eth0_ip_address' => null,
        'eth0_subnet_mask' => null,
        'sat0_ip_address' => null,
        'sat0_subnet_mask' => null,
        'bgp' => null
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
        'eth0_ip_address' => 'ETH0IPAddress',
        'eth0_subnet_mask' => 'ETH0SubnetMask',
        'sat0_ip_address' => 'SAT0IPAddress',
        'sat0_subnet_mask' => 'SAT0SubnetMask',
        'bgp' => 'BGP'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'eth0_ip_address' => 'setEth0IpAddress',
        'eth0_subnet_mask' => 'setEth0SubnetMask',
        'sat0_ip_address' => 'setSat0IpAddress',
        'sat0_subnet_mask' => 'setSat0SubnetMask',
        'bgp' => 'setBgp'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'eth0_ip_address' => 'getEth0IpAddress',
        'eth0_subnet_mask' => 'getEth0SubnetMask',
        'sat0_ip_address' => 'getSat0IpAddress',
        'sat0_subnet_mask' => 'getSat0SubnetMask',
        'bgp' => 'getBgp'
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
        $this->container['eth0_ip_address'] = isset($data['eth0_ip_address']) ? $data['eth0_ip_address'] : null;
        $this->container['eth0_subnet_mask'] = isset($data['eth0_subnet_mask']) ? $data['eth0_subnet_mask'] : null;
        $this->container['sat0_ip_address'] = isset($data['sat0_ip_address']) ? $data['sat0_ip_address'] : null;
        $this->container['sat0_subnet_mask'] = isset($data['sat0_subnet_mask']) ? $data['sat0_subnet_mask'] : null;
        $this->container['bgp'] = isset($data['bgp']) ? $data['bgp'] : null;
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
     * Gets eth0_ip_address
     * @return string
     */
    public function getEth0IpAddress()
    {
        return $this->container['eth0_ip_address'];
    }

    /**
     * Sets eth0_ip_address
     * @param string $eth0_ip_address
     * @return $this
     */
    public function setEth0IpAddress($eth0_ip_address)
    {
        $this->container['eth0_ip_address'] = $eth0_ip_address;

        return $this;
    }

    /**
     * Gets eth0_subnet_mask
     * @return string
     */
    public function getEth0SubnetMask()
    {
        return $this->container['eth0_subnet_mask'];
    }

    /**
     * Sets eth0_subnet_mask
     * @param string $eth0_subnet_mask
     * @return $this
     */
    public function setEth0SubnetMask($eth0_subnet_mask)
    {
        $this->container['eth0_subnet_mask'] = $eth0_subnet_mask;

        return $this;
    }

    /**
     * Gets sat0_ip_address
     * @return string
     */
    public function getSat0IpAddress()
    {
        return $this->container['sat0_ip_address'];
    }

    /**
     * Sets sat0_ip_address
     * @param string $sat0_ip_address
     * @return $this
     */
    public function setSat0IpAddress($sat0_ip_address)
    {
        $this->container['sat0_ip_address'] = $sat0_ip_address;

        return $this;
    }

    /**
     * Gets sat0_subnet_mask
     * @return string
     */
    public function getSat0SubnetMask()
    {
        return $this->container['sat0_subnet_mask'];
    }

    /**
     * Sets sat0_subnet_mask
     * @param string $sat0_subnet_mask
     * @return $this
     */
    public function setSat0SubnetMask($sat0_subnet_mask)
    {
        $this->container['sat0_subnet_mask'] = $sat0_subnet_mask;

        return $this;
    }

    /**
     * Gets bgp
     * @return \Swagger\Client\Model\SVNL3BGP
     */
    public function getBgp()
    {
        return $this->container['bgp'];
    }

    /**
     * Sets bgp
     * @param \Swagger\Client\Model\SVNL3BGP $bgp
     * @return $this
     */
    public function setBgp($bgp)
    {
        $this->container['bgp'] = $bgp;

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


