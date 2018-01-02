<?php
/**
 * ProtocolProcessor
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
 * ProtocolProcessor Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ProtocolProcessor implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ProtocolProcessor';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'name' => 'string',
        'parent_id' => 'int',
        'download_monitor_credentials' => 'int',
        'user_password' => 'string',
        'admin_password' => 'string',
        'upstream_gateway' => 'string',
        'upstream_interface' => 'string',
        'tunnel_interface' => 'string',
        'si_table_multicast_address' => 'string',
        'gkd_cluster_id' => 'string',
        'custom_keys' => 'string',
        'enable_ri_pv2' => 'bool',
        'enable_dvbs2_x' => 'bool',
        'enable_transec' => 'bool',
        'multicast_groups' => '\Swagger\Client\Model\MulticastGroup[]',
        'blades' => '\Swagger\Client\Model\Blade[]',
        'l2_sv_ns' => '\Swagger\Client\Model\L2SVN[]',
        'l3_sv_ns' => '\Swagger\Client\Model\L3SVN[]',
        'warnings' => '\Swagger\Client\Model\Warning[]',
        'l2o_s' => '\Swagger\Client\Model\ProtocolProcessorL2oS'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'name' => null,
        'parent_id' => 'int32',
        'download_monitor_credentials' => 'int32',
        'user_password' => null,
        'admin_password' => null,
        'upstream_gateway' => null,
        'upstream_interface' => null,
        'tunnel_interface' => null,
        'si_table_multicast_address' => null,
        'gkd_cluster_id' => null,
        'custom_keys' => null,
        'enable_ri_pv2' => null,
        'enable_dvbs2_x' => null,
        'enable_transec' => null,
        'multicast_groups' => null,
        'blades' => null,
        'l2_sv_ns' => null,
        'l3_sv_ns' => null,
        'warnings' => null,
        'l2o_s' => null
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
        'id' => 'ID',
        'name' => 'Name',
        'parent_id' => 'ParentID',
        'download_monitor_credentials' => 'DownloadMonitorCredentials',
        'user_password' => 'UserPassword',
        'admin_password' => 'AdminPassword',
        'upstream_gateway' => 'UpstreamGateway',
        'upstream_interface' => 'UpstreamInterface',
        'tunnel_interface' => 'TunnelInterface',
        'si_table_multicast_address' => 'SITableMulticastAddress',
        'gkd_cluster_id' => 'GKDClusterID',
        'custom_keys' => 'CustomKeys',
        'enable_ri_pv2' => 'EnableRIPv2',
        'enable_dvbs2_x' => 'EnableDVBS2X',
        'enable_transec' => 'EnableTRANSEC',
        'multicast_groups' => 'MulticastGroups',
        'blades' => 'Blades',
        'l2_sv_ns' => 'L2SVNs',
        'l3_sv_ns' => 'L3SVNs',
        'warnings' => 'Warnings',
        'l2o_s' => 'L2oS'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'parent_id' => 'setParentId',
        'download_monitor_credentials' => 'setDownloadMonitorCredentials',
        'user_password' => 'setUserPassword',
        'admin_password' => 'setAdminPassword',
        'upstream_gateway' => 'setUpstreamGateway',
        'upstream_interface' => 'setUpstreamInterface',
        'tunnel_interface' => 'setTunnelInterface',
        'si_table_multicast_address' => 'setSiTableMulticastAddress',
        'gkd_cluster_id' => 'setGkdClusterId',
        'custom_keys' => 'setCustomKeys',
        'enable_ri_pv2' => 'setEnableRiPv2',
        'enable_dvbs2_x' => 'setEnableDvbs2X',
        'enable_transec' => 'setEnableTransec',
        'multicast_groups' => 'setMulticastGroups',
        'blades' => 'setBlades',
        'l2_sv_ns' => 'setL2SvNs',
        'l3_sv_ns' => 'setL3SvNs',
        'warnings' => 'setWarnings',
        'l2o_s' => 'setL2oS'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'parent_id' => 'getParentId',
        'download_monitor_credentials' => 'getDownloadMonitorCredentials',
        'user_password' => 'getUserPassword',
        'admin_password' => 'getAdminPassword',
        'upstream_gateway' => 'getUpstreamGateway',
        'upstream_interface' => 'getUpstreamInterface',
        'tunnel_interface' => 'getTunnelInterface',
        'si_table_multicast_address' => 'getSiTableMulticastAddress',
        'gkd_cluster_id' => 'getGkdClusterId',
        'custom_keys' => 'getCustomKeys',
        'enable_ri_pv2' => 'getEnableRiPv2',
        'enable_dvbs2_x' => 'getEnableDvbs2X',
        'enable_transec' => 'getEnableTransec',
        'multicast_groups' => 'getMulticastGroups',
        'blades' => 'getBlades',
        'l2_sv_ns' => 'getL2SvNs',
        'l3_sv_ns' => 'getL3SvNs',
        'warnings' => 'getWarnings',
        'l2o_s' => 'getL2oS'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['parent_id'] = isset($data['parent_id']) ? $data['parent_id'] : null;
        $this->container['download_monitor_credentials'] = isset($data['download_monitor_credentials']) ? $data['download_monitor_credentials'] : null;
        $this->container['user_password'] = isset($data['user_password']) ? $data['user_password'] : null;
        $this->container['admin_password'] = isset($data['admin_password']) ? $data['admin_password'] : null;
        $this->container['upstream_gateway'] = isset($data['upstream_gateway']) ? $data['upstream_gateway'] : null;
        $this->container['upstream_interface'] = isset($data['upstream_interface']) ? $data['upstream_interface'] : null;
        $this->container['tunnel_interface'] = isset($data['tunnel_interface']) ? $data['tunnel_interface'] : null;
        $this->container['si_table_multicast_address'] = isset($data['si_table_multicast_address']) ? $data['si_table_multicast_address'] : null;
        $this->container['gkd_cluster_id'] = isset($data['gkd_cluster_id']) ? $data['gkd_cluster_id'] : null;
        $this->container['custom_keys'] = isset($data['custom_keys']) ? $data['custom_keys'] : null;
        $this->container['enable_ri_pv2'] = isset($data['enable_ri_pv2']) ? $data['enable_ri_pv2'] : null;
        $this->container['enable_dvbs2_x'] = isset($data['enable_dvbs2_x']) ? $data['enable_dvbs2_x'] : null;
        $this->container['enable_transec'] = isset($data['enable_transec']) ? $data['enable_transec'] : null;
        $this->container['multicast_groups'] = isset($data['multicast_groups']) ? $data['multicast_groups'] : null;
        $this->container['blades'] = isset($data['blades']) ? $data['blades'] : null;
        $this->container['l2_sv_ns'] = isset($data['l2_sv_ns']) ? $data['l2_sv_ns'] : null;
        $this->container['l3_sv_ns'] = isset($data['l3_sv_ns']) ? $data['l3_sv_ns'] : null;
        $this->container['warnings'] = isset($data['warnings']) ? $data['warnings'] : null;
        $this->container['l2o_s'] = isset($data['l2o_s']) ? $data['l2o_s'] : null;
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
     * Gets id
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param int $id Internal ID of the ProtocolProcessor
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name Name of the ProtocolProcessor
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets parent_id
     * @return int
     */
    public function getParentId()
    {
        return $this->container['parent_id'];
    }

    /**
     * Sets parent_id
     * @param int $parent_id
     * @return $this
     */
    public function setParentId($parent_id)
    {
        $this->container['parent_id'] = $parent_id;

        return $this;
    }

    /**
     * Gets download_monitor_credentials
     * @return int
     */
    public function getDownloadMonitorCredentials()
    {
        return $this->container['download_monitor_credentials'];
    }

    /**
     * Sets download_monitor_credentials
     * @param int $download_monitor_credentials
     * @return $this
     */
    public function setDownloadMonitorCredentials($download_monitor_credentials)
    {
        $this->container['download_monitor_credentials'] = $download_monitor_credentials;

        return $this;
    }

    /**
     * Gets user_password
     * @return string
     */
    public function getUserPassword()
    {
        return $this->container['user_password'];
    }

    /**
     * Sets user_password
     * @param string $user_password
     * @return $this
     */
    public function setUserPassword($user_password)
    {
        $this->container['user_password'] = $user_password;

        return $this;
    }

    /**
     * Gets admin_password
     * @return string
     */
    public function getAdminPassword()
    {
        return $this->container['admin_password'];
    }

    /**
     * Sets admin_password
     * @param string $admin_password
     * @return $this
     */
    public function setAdminPassword($admin_password)
    {
        $this->container['admin_password'] = $admin_password;

        return $this;
    }

    /**
     * Gets upstream_gateway
     * @return string
     */
    public function getUpstreamGateway()
    {
        return $this->container['upstream_gateway'];
    }

    /**
     * Sets upstream_gateway
     * @param string $upstream_gateway
     * @return $this
     */
    public function setUpstreamGateway($upstream_gateway)
    {
        $this->container['upstream_gateway'] = $upstream_gateway;

        return $this;
    }

    /**
     * Gets upstream_interface
     * @return string
     */
    public function getUpstreamInterface()
    {
        return $this->container['upstream_interface'];
    }

    /**
     * Sets upstream_interface
     * @param string $upstream_interface
     * @return $this
     */
    public function setUpstreamInterface($upstream_interface)
    {
        $this->container['upstream_interface'] = $upstream_interface;

        return $this;
    }

    /**
     * Gets tunnel_interface
     * @return string
     */
    public function getTunnelInterface()
    {
        return $this->container['tunnel_interface'];
    }

    /**
     * Sets tunnel_interface
     * @param string $tunnel_interface
     * @return $this
     */
    public function setTunnelInterface($tunnel_interface)
    {
        $this->container['tunnel_interface'] = $tunnel_interface;

        return $this;
    }

    /**
     * Gets si_table_multicast_address
     * @return string
     */
    public function getSiTableMulticastAddress()
    {
        return $this->container['si_table_multicast_address'];
    }

    /**
     * Sets si_table_multicast_address
     * @param string $si_table_multicast_address
     * @return $this
     */
    public function setSiTableMulticastAddress($si_table_multicast_address)
    {
        $this->container['si_table_multicast_address'] = $si_table_multicast_address;

        return $this;
    }

    /**
     * Gets gkd_cluster_id
     * @return string
     */
    public function getGkdClusterId()
    {
        return $this->container['gkd_cluster_id'];
    }

    /**
     * Sets gkd_cluster_id
     * @param string $gkd_cluster_id
     * @return $this
     */
    public function setGkdClusterId($gkd_cluster_id)
    {
        $this->container['gkd_cluster_id'] = $gkd_cluster_id;

        return $this;
    }

    /**
     * Gets custom_keys
     * @return string
     */
    public function getCustomKeys()
    {
        return $this->container['custom_keys'];
    }

    /**
     * Sets custom_keys
     * @param string $custom_keys
     * @return $this
     */
    public function setCustomKeys($custom_keys)
    {
        $this->container['custom_keys'] = $custom_keys;

        return $this;
    }

    /**
     * Gets enable_ri_pv2
     * @return bool
     */
    public function getEnableRiPv2()
    {
        return $this->container['enable_ri_pv2'];
    }

    /**
     * Sets enable_ri_pv2
     * @param bool $enable_ri_pv2
     * @return $this
     */
    public function setEnableRiPv2($enable_ri_pv2)
    {
        $this->container['enable_ri_pv2'] = $enable_ri_pv2;

        return $this;
    }

    /**
     * Gets enable_dvbs2_x
     * @return bool
     */
    public function getEnableDvbs2X()
    {
        return $this->container['enable_dvbs2_x'];
    }

    /**
     * Sets enable_dvbs2_x
     * @param bool $enable_dvbs2_x
     * @return $this
     */
    public function setEnableDvbs2X($enable_dvbs2_x)
    {
        $this->container['enable_dvbs2_x'] = $enable_dvbs2_x;

        return $this;
    }

    /**
     * Gets enable_transec
     * @return bool
     */
    public function getEnableTransec()
    {
        return $this->container['enable_transec'];
    }

    /**
     * Sets enable_transec
     * @param bool $enable_transec
     * @return $this
     */
    public function setEnableTransec($enable_transec)
    {
        $this->container['enable_transec'] = $enable_transec;

        return $this;
    }

    /**
     * Gets multicast_groups
     * @return \Swagger\Client\Model\MulticastGroup[]
     */
    public function getMulticastGroups()
    {
        return $this->container['multicast_groups'];
    }

    /**
     * Sets multicast_groups
     * @param \Swagger\Client\Model\MulticastGroup[] $multicast_groups
     * @return $this
     */
    public function setMulticastGroups($multicast_groups)
    {
        $this->container['multicast_groups'] = $multicast_groups;

        return $this;
    }

    /**
     * Gets blades
     * @return \Swagger\Client\Model\Blade[]
     */
    public function getBlades()
    {
        return $this->container['blades'];
    }

    /**
     * Sets blades
     * @param \Swagger\Client\Model\Blade[] $blades
     * @return $this
     */
    public function setBlades($blades)
    {
        $this->container['blades'] = $blades;

        return $this;
    }

    /**
     * Gets l2_sv_ns
     * @return \Swagger\Client\Model\L2SVN[]
     */
    public function getL2SvNs()
    {
        return $this->container['l2_sv_ns'];
    }

    /**
     * Sets l2_sv_ns
     * @param \Swagger\Client\Model\L2SVN[] $l2_sv_ns
     * @return $this
     */
    public function setL2SvNs($l2_sv_ns)
    {
        $this->container['l2_sv_ns'] = $l2_sv_ns;

        return $this;
    }

    /**
     * Gets l3_sv_ns
     * @return \Swagger\Client\Model\L3SVN[]
     */
    public function getL3SvNs()
    {
        return $this->container['l3_sv_ns'];
    }

    /**
     * Sets l3_sv_ns
     * @param \Swagger\Client\Model\L3SVN[] $l3_sv_ns
     * @return $this
     */
    public function setL3SvNs($l3_sv_ns)
    {
        $this->container['l3_sv_ns'] = $l3_sv_ns;

        return $this;
    }

    /**
     * Gets warnings
     * @return \Swagger\Client\Model\Warning[]
     */
    public function getWarnings()
    {
        return $this->container['warnings'];
    }

    /**
     * Sets warnings
     * @param \Swagger\Client\Model\Warning[] $warnings
     * @return $this
     */
    public function setWarnings($warnings)
    {
        $this->container['warnings'] = $warnings;

        return $this;
    }

    /**
     * Gets l2o_s
     * @return \Swagger\Client\Model\ProtocolProcessorL2oS
     */
    public function getL2oS()
    {
        return $this->container['l2o_s'];
    }

    /**
     * Sets l2o_s
     * @param \Swagger\Client\Model\ProtocolProcessorL2oS $l2o_s
     * @return $this
     */
    public function setL2oS($l2o_s)
    {
        $this->container['l2o_s'] = $l2o_s;

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


