<?php
/**
 * ListingVariant
 *
 * PHP version 5
 *
 * @category Class
 * @package  BigCommerce\Api\v3
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * BigCommerce Channels API
 *
 * The Channels API enables you to create and manage listings across a BigCommerce merchant's sales channels.
 *
 * OpenAPI spec version: 1.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace BigCommerce\Api\v3\Model;

use \ArrayAccess;

/**
 * ListingVariant Class Doc Comment
 *
 * @category    Class */
/**
 * @package     BigCommerce\Api\v3
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ListingVariant implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ListingVariant';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'product_id' => 'int',
        'variant_id' => 'int',
        'external_id' => 'string',
        'state' => 'string',
        'date_created' => 'string',
        'date_modified' => 'string'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'product_id' => 'product_id',
        'variant_id' => 'variant_id',
        'external_id' => 'external_id',
        'state' => 'state',
        'date_created' => 'date_created',
        'date_modified' => 'date_modified'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'product_id' => 'setProductId',
        'variant_id' => 'setVariantId',
        'external_id' => 'setExternalId',
        'state' => 'setState',
        'date_created' => 'setDateCreated',
        'date_modified' => 'setDateModified'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'product_id' => 'getProductId',
        'variant_id' => 'getVariantId',
        'external_id' => 'getExternalId',
        'state' => 'getState',
        'date_created' => 'getDateCreated',
        'date_modified' => 'getDateModified'
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

    const STATE_ACTIVE = 'active';
    const STATE_DISABLED = 'disabled';
    const STATE_ERROR = 'error';
    const STATE_PENDING = 'pending';
    const STATE_PENDING_DISABLE = 'pending_disable';
    const STATE_PENDING_DELETE = 'pending_delete';
    const STATE_QUEUED = 'queued';
    const STATE_REJECTED = 'rejected';
    const STATE_SUBMITTED = 'submitted';
    const STATE_DELETED = 'deleted';
    const STATE_UNKNOWN = 'unknown';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_ACTIVE,
            self::STATE_DISABLED,
            self::STATE_ERROR,
            self::STATE_PENDING,
            self::STATE_PENDING_DISABLE,
            self::STATE_PENDING_DELETE,
            self::STATE_QUEUED,
            self::STATE_REJECTED,
            self::STATE_SUBMITTED,
            self::STATE_DELETED,
            self::STATE_UNKNOWN,
        ];
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
        $this->container['product_id'] = isset($data['product_id']) ? $data['product_id'] : null;
        $this->container['variant_id'] = isset($data['variant_id']) ? $data['variant_id'] : null;
        $this->container['external_id'] = isset($data['external_id']) ? $data['external_id'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['date_created'] = isset($data['date_created']) ? $data['date_created'] : null;
        $this->container['date_modified'] = isset($data['date_modified']) ? $data['date_modified'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        if ($this->container['product_id'] === null) {
            $invalid_properties[] = "'product_id' can't be null";
        }
        if ($this->container['variant_id'] === null) {
            $invalid_properties[] = "'variant_id' can't be null";
        }
        if ($this->container['state'] === null) {
            $invalid_properties[] = "'state' can't be null";
        }
        $allowed_values = ["active", "disabled", "error", "pending", "pending_disable", "pending_delete", "queued", "rejected", "submitted", "deleted", "unknown"];
        if (!in_array($this->container['state'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'state', must be one of #{allowed_values}.";
        }

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        if ($this->container['product_id'] === null) {
            return false;
        }
        if ($this->container['variant_id'] === null) {
            return false;
        }
        if ($this->container['state'] === null) {
            return false;
        }
        $allowed_values = ["active", "disabled", "error", "pending", "pending_disable", "pending_delete", "queued", "rejected", "submitted", "deleted", "unknown"];
        if (!in_array($this->container['state'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets product_id
     * @return int
     */
    public function getProductId()
    {
        return $this->container['product_id'];
    }

    /**
     * Sets product_id
     * @param int $product_id
     * @return $this
     */
    public function setProductId($product_id)
    {
        $this->container['product_id'] = $product_id;

        return $this;
    }

    /**
     * Gets variant_id
     * @return int
     */
    public function getVariantId()
    {
        return $this->container['variant_id'];
    }

    /**
     * Sets variant_id
     * @param int $variant_id
     * @return $this
     */
    public function setVariantId($variant_id)
    {
        $this->container['variant_id'] = $variant_id;

        return $this;
    }

    /**
     * Gets external_id
     * @return string
     */
    public function getExternalId()
    {
        return $this->container['external_id'];
    }

    /**
     * Sets external_id
     * @param string $external_id
     * @return $this
     */
    public function setExternalId($external_id)
    {
        $this->container['external_id'] = $external_id;

        return $this;
    }

    /**
     * Gets state
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     * @param string $state
     * @return $this
     */
    public function setState($state)
    {
        $allowed_values = array('active', 'disabled', 'error', 'pending', 'pending_disable', 'pending_delete', 'queued', 'rejected', 'submitted', 'deleted', 'unknown');
        if ((!in_array($state, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'state', must be one of 'active', 'disabled', 'error', 'pending', 'pending_disable', 'pending_delete', 'queued', 'rejected', 'submitted', 'deleted', 'unknown'");
        }
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets date_created
     * @return string
     */
    public function getDateCreated()
    {
        return $this->container['date_created'];
    }

    /**
     * Sets date_created
     * @param string $date_created
     * @return $this
     */
    public function setDateCreated($date_created)
    {
        $this->container['date_created'] = $date_created;

        return $this;
    }

    /**
     * Gets date_modified
     * @return string
     */
    public function getDateModified()
    {
        return $this->container['date_modified'];
    }

    /**
     * Sets date_modified
     * @param string $date_modified
     * @return $this
     */
    public function setDateModified($date_modified)
    {
        $this->container['date_modified'] = $date_modified;

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
            return json_encode(\BigCommerce\Api\v3\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\BigCommerce\Api\v3\ObjectSerializer::sanitizeForSerialization($this));
    }
}


