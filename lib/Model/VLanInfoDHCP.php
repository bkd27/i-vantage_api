<?php
/**
 * VLanInfoDHCP
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
 * VLanInfoDHCP Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class VLanInfoDHCP implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'VLanInfo_DHCP';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'dhcp_id' => 'int',
        'lease_seconds' => 'int',
        'dhcp_mode' => 'int',
        'primary_dns_addr' => 'string',
        'secondary_dns_addr' => 'string',
        'default_gw_addr' => 'string',
        'relay_server' => 'string',
        'client_addr_ranges' => '\Swagger\Client\Model\DhcpClnAddrRange[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'dhcp_id' => 'int64',
        'lease_seconds' => 'int64',
        'dhcp_mode' => 'int32',
        'primary_dns_addr' => null,
        'secondary_dns_addr' => null,
        'default_gw_addr' => null,
        'relay_server' => null,
        'client_addr_ranges' => null
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
        'dhcp_id' => 'DhcpID',
        'lease_seconds' => 'LeaseSeconds',
        'dhcp_mode' => 'DhcpMode',
        'primary_dns_addr' => 'PrimaryDnsAddr',
        'secondary_dns_addr' => 'SecondaryDnsAddr',
        'default_gw_addr' => 'DefaultGwAddr',
        'relay_server' => 'RelayServer',
        'client_addr_ranges' => 'ClientAddrRanges'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'dhcp_id' => 'setDhcpId',
        'lease_seconds' => 'setLeaseSeconds',
        'dhcp_mode' => 'setDhcpMode',
        'primary_dns_addr' => 'setPrimaryDnsAddr',
        'secondary_dns_addr' => 'setSecondaryDnsAddr',
        'default_gw_addr' => 'setDefaultGwAddr',
        'relay_server' => 'setRelayServer',
        'client_addr_ranges' => 'setClientAddrRanges'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'dhcp_id' => 'getDhcpId',
        'lease_seconds' => 'getLeaseSeconds',
        'dhcp_mode' => 'getDhcpMode',
        'primary_dns_addr' => 'getPrimaryDnsAddr',
        'secondary_dns_addr' => 'getSecondaryDnsAddr',
        'default_gw_addr' => 'getDefaultGwAddr',
        'relay_server' => 'getRelayServer',
        'client_addr_ranges' => 'getClientAddrRanges'
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
        $this->container['dhcp_id'] = isset($data['dhcp_id']) ? $data['dhcp_id'] : null;
        $this->container['lease_seconds'] = isset($data['lease_seconds']) ? $data['lease_seconds'] : null;
        $this->container['dhcp_mode'] = isset($data['dhcp_mode']) ? $data['dhcp_mode'] : null;
        $this->container['primary_dns_addr'] = isset($data['primary_dns_addr']) ? $data['primary_dns_addr'] : null;
        $this->container['secondary_dns_addr'] = isset($data['secondary_dns_addr']) ? $data['secondary_dns_addr'] : null;
        $this->container['default_gw_addr'] = isset($data['default_gw_addr']) ? $data['default_gw_addr'] : null;
        $this->container['relay_server'] = isset($data['relay_server']) ? $data['relay_server'] : null;
        $this->container['client_addr_ranges'] = isset($data['client_addr_ranges']) ? $data['client_addr_ranges'] : null;
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
     * Gets dhcp_id
     *
     * @return int
     */
    public function getDhcpId()
    {
        return $this->container['dhcp_id'];
    }

    /**
     * Sets dhcp_id
     *
     * @param int $dhcp_id dhcp_id
     *
     * @return $this
     */
    public function setDhcpId($dhcp_id)
    {
        $this->container['dhcp_id'] = $dhcp_id;

        return $this;
    }

    /**
     * Gets lease_seconds
     *
     * @return int
     */
    public function getLeaseSeconds()
    {
        return $this->container['lease_seconds'];
    }

    /**
     * Sets lease_seconds
     *
     * @param int $lease_seconds lease_seconds
     *
     * @return $this
     */
    public function setLeaseSeconds($lease_seconds)
    {
        $this->container['lease_seconds'] = $lease_seconds;

        return $this;
    }

    /**
     * Gets dhcp_mode
     *
     * @return int
     */
    public function getDhcpMode()
    {
        return $this->container['dhcp_mode'];
    }

    /**
     * Sets dhcp_mode
     *
     * @param int $dhcp_mode dhcp_mode
     *
     * @return $this
     */
    public function setDhcpMode($dhcp_mode)
    {
        $this->container['dhcp_mode'] = $dhcp_mode;

        return $this;
    }

    /**
     * Gets primary_dns_addr
     *
     * @return string
     */
    public function getPrimaryDnsAddr()
    {
        return $this->container['primary_dns_addr'];
    }

    /**
     * Sets primary_dns_addr
     *
     * @param string $primary_dns_addr primary_dns_addr
     *
     * @return $this
     */
    public function setPrimaryDnsAddr($primary_dns_addr)
    {
        $this->container['primary_dns_addr'] = $primary_dns_addr;

        return $this;
    }

    /**
     * Gets secondary_dns_addr
     *
     * @return string
     */
    public function getSecondaryDnsAddr()
    {
        return $this->container['secondary_dns_addr'];
    }

    /**
     * Sets secondary_dns_addr
     *
     * @param string $secondary_dns_addr secondary_dns_addr
     *
     * @return $this
     */
    public function setSecondaryDnsAddr($secondary_dns_addr)
    {
        $this->container['secondary_dns_addr'] = $secondary_dns_addr;

        return $this;
    }

    /**
     * Gets default_gw_addr
     *
     * @return string
     */
    public function getDefaultGwAddr()
    {
        return $this->container['default_gw_addr'];
    }

    /**
     * Sets default_gw_addr
     *
     * @param string $default_gw_addr default_gw_addr
     *
     * @return $this
     */
    public function setDefaultGwAddr($default_gw_addr)
    {
        $this->container['default_gw_addr'] = $default_gw_addr;

        return $this;
    }

    /**
     * Gets relay_server
     *
     * @return string
     */
    public function getRelayServer()
    {
        return $this->container['relay_server'];
    }

    /**
     * Sets relay_server
     *
     * @param string $relay_server relay_server
     *
     * @return $this
     */
    public function setRelayServer($relay_server)
    {
        $this->container['relay_server'] = $relay_server;

        return $this;
    }

    /**
     * Gets client_addr_ranges
     *
     * @return \Swagger\Client\Model\DhcpClnAddrRange[]
     */
    public function getClientAddrRanges()
    {
        return $this->container['client_addr_ranges'];
    }

    /**
     * Sets client_addr_ranges
     *
     * @param \Swagger\Client\Model\DhcpClnAddrRange[] $client_addr_ranges client_addr_ranges
     *
     * @return $this
     */
    public function setClientAddrRanges($client_addr_ranges)
    {
        $this->container['client_addr_ranges'] = $client_addr_ranges;

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


