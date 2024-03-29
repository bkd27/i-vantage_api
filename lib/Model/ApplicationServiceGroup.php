<?php
/**
 * ApplicationServiceGroup
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
 * ApplicationServiceGroup Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ApplicationServiceGroup implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ApplicationServiceGroup';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'name' => 'string',
        'parent_id' => 'int',
        'parent_name' => 'string',
        'priority' => 'string',
        'min_modcod' => 'string',
        'downstream' => 'bool',
        'sticky_cir' => 'bool',
        'alloc_rel_to_cir' => 'bool',
        'alloc_rel_to_nominal' => 'bool',
        'alloc_rel_to_operational' => 'bool',
        'enable_eir' => 'bool',
        'configured_rates' => '\Swagger\Client\Model\ApplicationServiceGroupConfiguredRates',
        'effective_rates' => '\Swagger\Client\Model\ApplicationServiceGroupEffectiveRates',
        'applications' => '\Swagger\Client\Model\ApplicationMember[]'
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
        'parent_name' => null,
        'priority' => null,
        'min_modcod' => null,
        'downstream' => null,
        'sticky_cir' => null,
        'alloc_rel_to_cir' => null,
        'alloc_rel_to_nominal' => null,
        'alloc_rel_to_operational' => null,
        'enable_eir' => null,
        'configured_rates' => null,
        'effective_rates' => null,
        'applications' => null
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
        'parent_name' => 'ParentName',
        'priority' => 'Priority',
        'min_modcod' => 'MinMODCOD',
        'downstream' => 'Downstream',
        'sticky_cir' => 'StickyCIR',
        'alloc_rel_to_cir' => 'AllocRelToCIR',
        'alloc_rel_to_nominal' => 'AllocRelToNominal',
        'alloc_rel_to_operational' => 'AllocRelToOperational',
        'enable_eir' => 'EnableEIR',
        'configured_rates' => 'ConfiguredRates',
        'effective_rates' => 'EffectiveRates',
        'applications' => 'Applications'
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
        'parent_name' => 'setParentName',
        'priority' => 'setPriority',
        'min_modcod' => 'setMinModcod',
        'downstream' => 'setDownstream',
        'sticky_cir' => 'setStickyCir',
        'alloc_rel_to_cir' => 'setAllocRelToCir',
        'alloc_rel_to_nominal' => 'setAllocRelToNominal',
        'alloc_rel_to_operational' => 'setAllocRelToOperational',
        'enable_eir' => 'setEnableEir',
        'configured_rates' => 'setConfiguredRates',
        'effective_rates' => 'setEffectiveRates',
        'applications' => 'setApplications'
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
        'parent_name' => 'getParentName',
        'priority' => 'getPriority',
        'min_modcod' => 'getMinModcod',
        'downstream' => 'getDownstream',
        'sticky_cir' => 'getStickyCir',
        'alloc_rel_to_cir' => 'getAllocRelToCir',
        'alloc_rel_to_nominal' => 'getAllocRelToNominal',
        'alloc_rel_to_operational' => 'getAllocRelToOperational',
        'enable_eir' => 'getEnableEir',
        'configured_rates' => 'getConfiguredRates',
        'effective_rates' => 'getEffectiveRates',
        'applications' => 'getApplications'
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
        $this->container['parent_name'] = isset($data['parent_name']) ? $data['parent_name'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['min_modcod'] = isset($data['min_modcod']) ? $data['min_modcod'] : null;
        $this->container['downstream'] = isset($data['downstream']) ? $data['downstream'] : null;
        $this->container['sticky_cir'] = isset($data['sticky_cir']) ? $data['sticky_cir'] : null;
        $this->container['alloc_rel_to_cir'] = isset($data['alloc_rel_to_cir']) ? $data['alloc_rel_to_cir'] : null;
        $this->container['alloc_rel_to_nominal'] = isset($data['alloc_rel_to_nominal']) ? $data['alloc_rel_to_nominal'] : null;
        $this->container['alloc_rel_to_operational'] = isset($data['alloc_rel_to_operational']) ? $data['alloc_rel_to_operational'] : null;
        $this->container['enable_eir'] = isset($data['enable_eir']) ? $data['enable_eir'] : null;
        $this->container['configured_rates'] = isset($data['configured_rates']) ? $data['configured_rates'] : null;
        $this->container['effective_rates'] = isset($data['effective_rates']) ? $data['effective_rates'] : null;
        $this->container['applications'] = isset($data['applications']) ? $data['applications'] : null;
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
     * @param int $id Internal ID of the ApplicationServiceGroup
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
     * @param string $name Name of the ApplicationServiceGroup
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
     * Gets parent_name
     *
     * @return string
     */
    public function getParentName()
    {
        return $this->container['parent_name'];
    }

    /**
     * Sets parent_name
     *
     * @param string $parent_name parent_name
     *
     * @return $this
     */
    public function setParentName($parent_name)
    {
        $this->container['parent_name'] = $parent_name;

        return $this;
    }

    /**
     * Gets priority
     *
     * @return string
     */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
     * Sets priority
     *
     * @param string $priority priority
     *
     * @return $this
     */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;

        return $this;
    }

    /**
     * Gets min_modcod
     *
     * @return string
     */
    public function getMinModcod()
    {
        return $this->container['min_modcod'];
    }

    /**
     * Sets min_modcod
     *
     * @param string $min_modcod min_modcod
     *
     * @return $this
     */
    public function setMinModcod($min_modcod)
    {
        $this->container['min_modcod'] = $min_modcod;

        return $this;
    }

    /**
     * Gets downstream
     *
     * @return bool
     */
    public function getDownstream()
    {
        return $this->container['downstream'];
    }

    /**
     * Sets downstream
     *
     * @param bool $downstream downstream
     *
     * @return $this
     */
    public function setDownstream($downstream)
    {
        $this->container['downstream'] = $downstream;

        return $this;
    }

    /**
     * Gets sticky_cir
     *
     * @return bool
     */
    public function getStickyCir()
    {
        return $this->container['sticky_cir'];
    }

    /**
     * Sets sticky_cir
     *
     * @param bool $sticky_cir sticky_cir
     *
     * @return $this
     */
    public function setStickyCir($sticky_cir)
    {
        $this->container['sticky_cir'] = $sticky_cir;

        return $this;
    }

    /**
     * Gets alloc_rel_to_cir
     *
     * @return bool
     */
    public function getAllocRelToCir()
    {
        return $this->container['alloc_rel_to_cir'];
    }

    /**
     * Sets alloc_rel_to_cir
     *
     * @param bool $alloc_rel_to_cir alloc_rel_to_cir
     *
     * @return $this
     */
    public function setAllocRelToCir($alloc_rel_to_cir)
    {
        $this->container['alloc_rel_to_cir'] = $alloc_rel_to_cir;

        return $this;
    }

    /**
     * Gets alloc_rel_to_nominal
     *
     * @return bool
     */
    public function getAllocRelToNominal()
    {
        return $this->container['alloc_rel_to_nominal'];
    }

    /**
     * Sets alloc_rel_to_nominal
     *
     * @param bool $alloc_rel_to_nominal alloc_rel_to_nominal
     *
     * @return $this
     */
    public function setAllocRelToNominal($alloc_rel_to_nominal)
    {
        $this->container['alloc_rel_to_nominal'] = $alloc_rel_to_nominal;

        return $this;
    }

    /**
     * Gets alloc_rel_to_operational
     *
     * @return bool
     */
    public function getAllocRelToOperational()
    {
        return $this->container['alloc_rel_to_operational'];
    }

    /**
     * Sets alloc_rel_to_operational
     *
     * @param bool $alloc_rel_to_operational alloc_rel_to_operational
     *
     * @return $this
     */
    public function setAllocRelToOperational($alloc_rel_to_operational)
    {
        $this->container['alloc_rel_to_operational'] = $alloc_rel_to_operational;

        return $this;
    }

    /**
     * Gets enable_eir
     *
     * @return bool
     */
    public function getEnableEir()
    {
        return $this->container['enable_eir'];
    }

    /**
     * Sets enable_eir
     *
     * @param bool $enable_eir enable_eir
     *
     * @return $this
     */
    public function setEnableEir($enable_eir)
    {
        $this->container['enable_eir'] = $enable_eir;

        return $this;
    }

    /**
     * Gets configured_rates
     *
     * @return \Swagger\Client\Model\ApplicationServiceGroupConfiguredRates
     */
    public function getConfiguredRates()
    {
        return $this->container['configured_rates'];
    }

    /**
     * Sets configured_rates
     *
     * @param \Swagger\Client\Model\ApplicationServiceGroupConfiguredRates $configured_rates configured_rates
     *
     * @return $this
     */
    public function setConfiguredRates($configured_rates)
    {
        $this->container['configured_rates'] = $configured_rates;

        return $this;
    }

    /**
     * Gets effective_rates
     *
     * @return \Swagger\Client\Model\ApplicationServiceGroupEffectiveRates
     */
    public function getEffectiveRates()
    {
        return $this->container['effective_rates'];
    }

    /**
     * Sets effective_rates
     *
     * @param \Swagger\Client\Model\ApplicationServiceGroupEffectiveRates $effective_rates effective_rates
     *
     * @return $this
     */
    public function setEffectiveRates($effective_rates)
    {
        $this->container['effective_rates'] = $effective_rates;

        return $this;
    }

    /**
     * Gets applications
     *
     * @return \Swagger\Client\Model\ApplicationMember[]
     */
    public function getApplications()
    {
        return $this->container['applications'];
    }

    /**
     * Sets applications
     *
     * @param \Swagger\Client\Model\ApplicationMember[] $applications applications
     *
     * @return $this
     */
    public function setApplications($applications)
    {
        $this->container['applications'] = $applications;

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


