<?php
/**
 * SubscriptionNetworkBody1
 *
 * PHP version 5
 *
 * @category Class
 * @package  Zembra\Client
 * @author   Zembra Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Zembra - API Reference
 *
 * Zembra is a REST API. It accepts standard verbs and returns JSON responses with standard HTTP response codes.    You can use the sandbox token and endpoints for testing. Using the sandbox does not affect your account's balance. Nevertheless, the same throttling applies to both live and sandbox environments combined. The sandbox randomly returns dummy data representing all different expected responses from an endpoint. The sandbox performs the same set of validation the live box does, including slug validation and eligibility for services.    Default throttling is set to **100** calls per minute. Your account may have a higher limit. If you don't know your current rate limit, contact your account manager or reach out to our [support team](mailto:contact@zembratech.com).  Each response returned by the API has throttling info added to the headers: - **X-RateLimit-Limit**: 100 or -1 if no limit   The allocated rate limit to the account - **X-RateLimit-Remaining**: < 100 or -1 if no limit   The number of remaining calls before hitting the throttling limit and start getting calls rejected until the counter is reset.    Zembra has made SDKs available in many coding languages to help you quickly get started consuming the API with minimum effort:   - [C-Sharp](https://cdn.sdks.zembratech.com/zembra-sdk-csharp.zip) - [Go](https://cdn.sdks.zembratech.com/zembra-sdk-go.zip) - [Java](https://cdn.sdks.zembratech.com/zembra-sdk-java.zip) - [Kotlin](https://cdn.sdks.zembratech.com/zembra-sdk-kotlin.zip) - [PHP](https://cdn.sdks.zembratech.com/zembra-sdk-php.zip) - [Python](https://cdn.sdks.zembratech.com/zembra-sdk-python.zip) - [Scala](https://cdn.sdks.zembratech.com/zembra-sdk-scala.zip) - [Swift 3](https://cdn.sdks.zembratech.com/zembra-sdk-swift3.zip) - [Swift 4](https://cdn.sdks.zembratech.com/zembra-sdk-swift4.zip) - [Swift 5](https://cdn.sdks.zembratech.com/zembra-sdk-swift5.zip) - [Typescript Angular](https://cdn.sdks.zembratech.com/zembra-sdk-typescript-angular.zip) - [Typescript Fetch](https://cdn.sdks.zembratech.com/zembra-sdk-typescript-fetch.zip)  You can also download [Postman](https://www.postman.com/downloads/) then import this [collection](https://docs.zembra.io/zembra-api-postman-collection.json) which includes calls the all Zembra API sandbox endpoints with a combination of all available parameters.
 *
 * OpenAPI spec version: 3.0.0
 * Contact: contact@zembratech.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Zembra Codegen version: 3.0.42
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Zembra\Client\Model;

use \ArrayAccess;
use \Zembra\Client\ObjectSerializer;

/**
 * SubscriptionNetworkBody1 Class Doc Comment
 *
 * @category Class
 * @package  Zembra\Client
 * @author   Zembra Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SubscriptionNetworkBody1 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'subscription_network_body_1';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'slug' => 'string',
'include_raw_data' => 'bool',
'auto_renew' => 'bool',
'internal_id' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'slug' => null,
'include_raw_data' => null,
'auto_renew' => null,
'internal_id' => null    ];

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
        'slug' => 'slug',
'include_raw_data' => 'includeRawData',
'auto_renew' => 'autoRenew',
'internal_id' => 'internalId'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'slug' => 'setSlug',
'include_raw_data' => 'setIncludeRawData',
'auto_renew' => 'setAutoRenew',
'internal_id' => 'setInternalId'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'slug' => 'getSlug',
'include_raw_data' => 'getIncludeRawData',
'auto_renew' => 'getAutoRenew',
'internal_id' => 'getInternalId'    ];

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
        $this->container['slug'] = isset($data['slug']) ? $data['slug'] : null;
        $this->container['include_raw_data'] = isset($data['include_raw_data']) ? $data['include_raw_data'] : false;
        $this->container['auto_renew'] = isset($data['auto_renew']) ? $data['auto_renew'] : false;
        $this->container['internal_id'] = isset($data['internal_id']) ? $data['internal_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['slug'] === null) {
            $invalidProperties[] = "'slug' can't be null";
        }
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
     * Gets slug
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->container['slug'];
    }

    /**
     * Sets slug
     *
     * @param string $slug Please see the description for `slug` on **[GET] /business/{network}**
     *
     * @return $this
     */
    public function setSlug($slug)
    {
        $this->container['slug'] = $slug;

        return $this;
    }

    /**
     * Gets include_raw_data
     *
     * @return bool
     */
    public function getIncludeRawData()
    {
        return $this->container['include_raw_data'];
    }

    /**
     * Sets include_raw_data
     *
     * @param bool $include_raw_data Please see the description for `includeRawData` on **[POST] /reviews/subscription/{network}**
     *
     * @return $this
     */
    public function setIncludeRawData($include_raw_data)
    {
        $this->container['include_raw_data'] = $include_raw_data;

        return $this;
    }

    /**
     * Gets auto_renew
     *
     * @return bool
     */
    public function getAutoRenew()
    {
        return $this->container['auto_renew'];
    }

    /**
     * Sets auto_renew
     *
     * @param bool $auto_renew Please see the description for `autoRenew` on **[POST] /reviews/subscription/{network}**
     *
     * @return $this
     */
    public function setAutoRenew($auto_renew)
    {
        $this->container['auto_renew'] = $auto_renew;

        return $this;
    }

    /**
     * Gets internal_id
     *
     * @return string
     */
    public function getInternalId()
    {
        return $this->container['internal_id'];
    }

    /**
     * Sets internal_id
     *
     * @param string $internal_id Please see the description for `internalId` on **[POST] /reviews/subscription/{network}**
     *
     * @return $this
     */
    public function setInternalId($internal_id)
    {
        $this->container['internal_id'] = $internal_id;

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
