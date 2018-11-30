<?php
/**
 * DiscretePorts
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
 * DiscretePorts Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class DiscretePorts implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'DiscretePorts';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'port_number' => 'int',
        'enabled' => 'boolean',
        'speed' => 'string',
        'duplex' => 'string',
        'mode' => 'string',
        'port_ethertype1' => 'string',
        'port_ethertype2' => 'string',
        'native_v_lan_id' => 'string',
        'svn_ids' => 'array',

    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'port_number' =>'int32',
        'enabled' => null,
        'speed' => null,
        'duplex' => null,
		'mode' => null,
        'port_ethertype1' => null,
        'port_ethertype2' => null,
        'native_v_lan_id' => null,
        'svn_ids' => null,
       

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
        'port_number' => 'PortNumber',
        'enabled' => 'Enabled',
        'speed' => 'Speed',
        'duplex' => 'Duplex',
        'mode' => 'Mode',
        'port_ethertype1' => 'PortEthertype1',
        'port_ethertype2' => 'PortEthertype2',
        'native_v_lan_id' => 'NativeVLanID',
        'svn_ids' => 'SvnIDs',

    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'port_number' => 'setPortNumber',
        'enabled' => 'setEnabled',
        'speed' => 'setSpeed',
        'duplex' => 'setDuplex',
        'mode' => 'setMode',
        'port_ethertype1' => 'setPortEthertype1',
        'port_ethertype2' => 'setPortEthertype2',
        'native_v_lan_id' => 'setNativeVLanID',
        'svn_ids' => 'setSvnIDs',
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'port_number' => 'getPortNumber',
        'enabled' => 'getEnabled',
        'speed' => 'getSpeed',
		
        'duplex' => 'getDuplex',
        'mode' => 'getMode',
        'port_ethertype1' => 'getPortEthertype1',
		
        'port_ethertype2' => 'getPortEthertype2',
        'native_v_lan_id' => 'getNativeVLanID',
        'svn_ids' => 'getSvnIDs',
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
        $this->container['port_number'] = isset($data['port_number']) ? $data['port_number'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['speed'] = isset($data['speed']) ? $data['speed'] : null;
        $this->container['duplex'] = isset($data['duplex']) ? $data['duplex'] : null;
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
        $this->container['port_ethertype1'] = isset($data['port_ethertype1']) ? $data['port_ethertype1'] : null;
        $this->container['port_ethertype2'] = isset($data['port_ethertype2']) ? $data['port_ethertype2'] : null;
        $this->container['native_v_lan_id'] = isset($data['native_v_lan_id']) ? $data['native_v_lan_id'] : null;
        $this->container['svn_ids'] = isset($data['svn_ids']) ? $data['svn_ids'] : null;
      
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
     * Gets port_number
     * @return int
     */
    public function getPortNumber()
    {
        return $this->container['port_number'];
    }

    /**
     * Sets port_number
     * @param int $port_number Internal ID of the DiscretePorts
     * @return $this
     */
    public function setPortNumber($port_number)
    {
        $this->container['port_number'] = $port_number;

        return $this;
    }

    /**
     * Gets enabled
     * @return string
     */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     * @param string $enabled Name of the DiscretePorts
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;

        return $this;
    }

    /**
     * Gets speed
     * @return int
     */
    public function getSpeed()
    {
        return $this->container['speed'];
    }

    /**
     * Sets speed
     * @param int $speed
     * @return $this
     */
    public function setSpeed($speed)
    {
        $this->container['speed'] = $speed;

        return $this;
    }

    /**
     * Gets duplex
     * @return int
     */
    public function getDuplex()
    {
        return $this->container['duplex'];
    }

    /**
     * Sets duplex
     * @param int $duplex
     * @return $this
     */
    public function setDuplex($duplex)
    {
        $this->container['duplex'] = $duplex;

        return $this;
    }

    /**
     * Gets mode
     * @return string
     */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
     * Sets mode
     * @param string $mode
     * @return $this
     */
    public function setMode($mode)
    {
        $this->container['mode'] = $mode;

        return $this;
    }

    /**
     * Gets port_ethertype1
     * @return string
     */
    public function getPortEthertype1()
    {
        return $this->container['port_ethertype1'];
    }

    /**
     * Sets port_ethertype1
     * @param string $port_ethertype1
     * @return $this
     */
    public function setPortEthertype1($port_ethertype1)
    {
        $this->container['port_ethertype1'] = $port_ethertype1;

        return $this;
    }

    /**
     * Gets port_ethertype2
     * @return string
     */
    public function getPortEthertype2()
    {
        return $this->container['port_ethertype2'];
    }

    /**
     * Sets port_ethertype2
     * @param string $port_ethertype2
     * @return $this
     */
    public function setPortEthertype2($port_ethertype2)
    {
        $this->container['port_ethertype2'] = $port_ethertype2;

        return $this;
    }

    /**
     * Gets native_v_lan_id
     * @return double
     */
    public function getNativeVLanID()
    {
        return $this->container['native_v_lan_id'];
    }

    /**
     * Sets native_v_lan_id
     * @param double $native_v_lan_id
     * @return $this
     */
    public function setNativeVLanID($native_v_lan_id)
    {
        $this->container['native_v_lan_id'] = $native_v_lan_id;

        return $this;
    }

    /**
     * Gets svn_ids
     * @return double
     */
    public function getSvnIDs()
    {
        return $this->container['svn_ids'];
    }

    /**
     * Sets svn_ids
     * @param double $svn_ids
     * @return $this
     */
    public function setSvnIDs($svn_ids)
    {
        $this->container['svn_ids'] = $svn_ids;

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


