<?php
/**
 * ProtocolProcessorL2oS
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
 * ProtocolProcessorL2oS Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ProtocolProcessorL2oS implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ProtocolProcessor_L2oS';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'enable_l2o_s' => 'bool',
        'reserve_outer_svn_for_l3' => 'bool',
        'sdt_mode' => 'string',
        'ethertype1' => 'string',
        'ethertype2' => 'string',
        'l2_sw_mode' => 'string',
        'mac_rewrite' => 'string',
        'reserved_outer_svn_id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'enable_l2o_s' => null,
        'reserve_outer_svn_for_l3' => null,
        'sdt_mode' => null,
        'ethertype1' => null,
        'ethertype2' => null,
        'l2_sw_mode' => null,
        'mac_rewrite' => null,
        'reserved_outer_svn_id' => 'int32'
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
        'enable_l2o_s' => 'EnableL2oS',
        'reserve_outer_svn_for_l3' => 'ReserveOuterSvnForL3',
        'sdt_mode' => 'SdtMode',
        'ethertype1' => 'Ethertype1',
        'ethertype2' => 'Ethertype2',
        'l2_sw_mode' => 'L2SWMode',
        'mac_rewrite' => 'MacRewrite',
        'reserved_outer_svn_id' => 'ReservedOuterSvnID'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'enable_l2o_s' => 'setEnableL2oS',
        'reserve_outer_svn_for_l3' => 'setReserveOuterSvnForL3',
        'sdt_mode' => 'setSdtMode',
        'ethertype1' => 'setEthertype1',
        'ethertype2' => 'setEthertype2',
        'l2_sw_mode' => 'setL2SwMode',
        'mac_rewrite' => 'setMacRewrite',
        'reserved_outer_svn_id' => 'setReservedOuterSvnId'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'enable_l2o_s' => 'getEnableL2oS',
        'reserve_outer_svn_for_l3' => 'getReserveOuterSvnForL3',
        'sdt_mode' => 'getSdtMode',
        'ethertype1' => 'getEthertype1',
        'ethertype2' => 'getEthertype2',
        'l2_sw_mode' => 'getL2SwMode',
        'mac_rewrite' => 'getMacRewrite',
        'reserved_outer_svn_id' => 'getReservedOuterSvnId'
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
        $this->container['enable_l2o_s'] = isset($data['enable_l2o_s']) ? $data['enable_l2o_s'] : null;
        $this->container['reserve_outer_svn_for_l3'] = isset($data['reserve_outer_svn_for_l3']) ? $data['reserve_outer_svn_for_l3'] : null;
        $this->container['sdt_mode'] = isset($data['sdt_mode']) ? $data['sdt_mode'] : null;
        $this->container['ethertype1'] = isset($data['ethertype1']) ? $data['ethertype1'] : null;
        $this->container['ethertype2'] = isset($data['ethertype2']) ? $data['ethertype2'] : null;
        $this->container['l2_sw_mode'] = isset($data['l2_sw_mode']) ? $data['l2_sw_mode'] : null;
        $this->container['mac_rewrite'] = isset($data['mac_rewrite']) ? $data['mac_rewrite'] : null;
        $this->container['reserved_outer_svn_id'] = isset($data['reserved_outer_svn_id']) ? $data['reserved_outer_svn_id'] : null;
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
     * Gets enable_l2o_s
     * @return bool
     */
    public function getEnableL2oS()
    {
        return $this->container['enable_l2o_s'];
    }

    /**
     * Sets enable_l2o_s
     * @param bool $enable_l2o_s
     * @return $this
     */
    public function setEnableL2oS($enable_l2o_s)
    {
        $this->container['enable_l2o_s'] = $enable_l2o_s;

        return $this;
    }

    /**
     * Gets reserve_outer_svn_for_l3
     * @return bool
     */
    public function getReserveOuterSvnForL3()
    {
        return $this->container['reserve_outer_svn_for_l3'];
    }

    /**
     * Sets reserve_outer_svn_for_l3
     * @param bool $reserve_outer_svn_for_l3
     * @return $this
     */
    public function setReserveOuterSvnForL3($reserve_outer_svn_for_l3)
    {
        $this->container['reserve_outer_svn_for_l3'] = $reserve_outer_svn_for_l3;

        return $this;
    }

    /**
     * Gets sdt_mode
     * @return string
     */
    public function getSdtMode()
    {
        return $this->container['sdt_mode'];
    }

    /**
     * Sets sdt_mode
     * @param string $sdt_mode
     * @return $this
     */
    public function setSdtMode($sdt_mode)
    {
        $this->container['sdt_mode'] = $sdt_mode;

        return $this;
    }

    /**
     * Gets ethertype1
     * @return string
     */
    public function getEthertype1()
    {
        return $this->container['ethertype1'];
    }

    /**
     * Sets ethertype1
     * @param string $ethertype1
     * @return $this
     */
    public function setEthertype1($ethertype1)
    {
        $this->container['ethertype1'] = $ethertype1;

        return $this;
    }

    /**
     * Gets ethertype2
     * @return string
     */
    public function getEthertype2()
    {
        return $this->container['ethertype2'];
    }

    /**
     * Sets ethertype2
     * @param string $ethertype2
     * @return $this
     */
    public function setEthertype2($ethertype2)
    {
        $this->container['ethertype2'] = $ethertype2;

        return $this;
    }

    /**
     * Gets l2_sw_mode
     * @return string
     */
    public function getL2SwMode()
    {
        return $this->container['l2_sw_mode'];
    }

    /**
     * Sets l2_sw_mode
     * @param string $l2_sw_mode
     * @return $this
     */
    public function setL2SwMode($l2_sw_mode)
    {
        $this->container['l2_sw_mode'] = $l2_sw_mode;

        return $this;
    }

    /**
     * Gets mac_rewrite
     * @return string
     */
    public function getMacRewrite()
    {
        return $this->container['mac_rewrite'];
    }

    /**
     * Sets mac_rewrite
     * @param string $mac_rewrite
     * @return $this
     */
    public function setMacRewrite($mac_rewrite)
    {
        $this->container['mac_rewrite'] = $mac_rewrite;

        return $this;
    }

    /**
     * Gets reserved_outer_svn_id
     * @return int
     */
    public function getReservedOuterSvnId()
    {
        return $this->container['reserved_outer_svn_id'];
    }

    /**
     * Sets reserved_outer_svn_id
     * @param int $reserved_outer_svn_id
     * @return $this
     */
    public function setReservedOuterSvnId($reserved_outer_svn_id)
    {
        $this->container['reserved_outer_svn_id'] = $reserved_outer_svn_id;

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


