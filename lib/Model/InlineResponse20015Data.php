<?php
/**
 * InlineResponse20015Data
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
 * InlineResponse20015Data Class Doc Comment
 *
 * @category Class
 * @package  Zembra\Client
 * @author   Zembra Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InlineResponse20015Data implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'inline_response_200_15_data';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'subscription' => '\Zembra\Client\Model\SocialSubscription',
'target' => '\Zembra\Client\Model\SocialResource',
'stream' => '\Zembra\Client\Model\SocialContent[]',
'returned' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'subscription' => null,
'target' => null,
'stream' => null,
'returned' => null    ];

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
        'subscription' => 'subscription',
'target' => 'target',
'stream' => 'stream',
'returned' => 'returned'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'subscription' => 'setSubscription',
'target' => 'setTarget',
'stream' => 'setStream',
'returned' => 'setReturned'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'subscription' => 'getSubscription',
'target' => 'getTarget',
'stream' => 'getStream',
'returned' => 'getReturned'    ];

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
        $this->container['subscription'] = isset($data['subscription']) ? $data['subscription'] : null;
        $this->container['target'] = isset($data['target']) ? $data['target'] : null;
        $this->container['stream'] = isset($data['stream']) ? $data['stream'] : null;
        $this->container['returned'] = isset($data['returned']) ? $data['returned'] : null;
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
     * Gets subscription
     *
     * @return \Zembra\Client\Model\SocialSubscription
     */
    public function getSubscription()
    {
        return $this->container['subscription'];
    }

    /**
     * Sets subscription
     *
     * @param \Zembra\Client\Model\SocialSubscription $subscription subscription
     *
     * @return $this
     */
    public function setSubscription($subscription)
    {
        $this->container['subscription'] = $subscription;

        return $this;
    }

    /**
     * Gets target
     *
     * @return \Zembra\Client\Model\SocialResource
     */
    public function getTarget()
    {
        return $this->container['target'];
    }

    /**
     * Sets target
     *
     * @param \Zembra\Client\Model\SocialResource $target target
     *
     * @return $this
     */
    public function setTarget($target)
    {
        $this->container['target'] = $target;

        return $this;
    }

    /**
     * Gets stream
     *
     * @return \Zembra\Client\Model\SocialContent[]
     */
    public function getStream()
    {
        return $this->container['stream'];
    }

    /**
     * Sets stream
     *
     * @param \Zembra\Client\Model\SocialContent[] $stream stream
     *
     * @return $this
     */
    public function setStream($stream)
    {
        $this->container['stream'] = $stream;

        return $this;
    }

    /**
     * Gets returned
     *
     * @return int
     */
    public function getReturned()
    {
        return $this->container['returned'];
    }

    /**
     * Sets returned
     *
     * @param int $returned The number of elements included in the response
     *
     * @return $this
     */
    public function setReturned($returned)
    {
        $this->container['returned'] = $returned;

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
