<?php
/**
 * Review
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
 * Review Class Doc Comment
 *
 * @category Class
 * @package  Zembra\Client
 * @author   Zembra Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Review implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Review';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
'text' => 'string',
'language' => 'string',
'translation' => 'string',
'timestamp' => '\DateTime',
'url' => 'string',
'rating' => 'float',
'recommendation' => 'int',
'is_hidden' => 'bool',
'is_deleted' => 'bool',
'author' => '\Zembra\Client\Model\ReviewAuthor',
'photos' => '\Zembra\Client\Model\ReviewPhoto[]',
'replies' => '\Zembra\Client\Model\ReviewReply[]',
'edits' => '\Zembra\Client\Model\ReviewEdits[]',
'raw_data' => 'object'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'text' => null,
'language' => null,
'translation' => null,
'timestamp' => 'date-time',
'url' => null,
'rating' => null,
'recommendation' => null,
'is_hidden' => null,
'is_deleted' => null,
'author' => null,
'photos' => null,
'replies' => null,
'edits' => null,
'raw_data' => null    ];

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
        'id' => 'id',
'text' => 'text',
'language' => 'language',
'translation' => 'translation',
'timestamp' => 'timestamp',
'url' => 'url',
'rating' => 'rating',
'recommendation' => 'recommendation',
'is_hidden' => 'isHidden',
'is_deleted' => 'isDeleted',
'author' => 'author',
'photos' => 'photos',
'replies' => 'replies',
'edits' => 'edits',
'raw_data' => 'rawData'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'text' => 'setText',
'language' => 'setLanguage',
'translation' => 'setTranslation',
'timestamp' => 'setTimestamp',
'url' => 'setUrl',
'rating' => 'setRating',
'recommendation' => 'setRecommendation',
'is_hidden' => 'setIsHidden',
'is_deleted' => 'setIsDeleted',
'author' => 'setAuthor',
'photos' => 'setPhotos',
'replies' => 'setReplies',
'edits' => 'setEdits',
'raw_data' => 'setRawData'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'text' => 'getText',
'language' => 'getLanguage',
'translation' => 'getTranslation',
'timestamp' => 'getTimestamp',
'url' => 'getUrl',
'rating' => 'getRating',
'recommendation' => 'getRecommendation',
'is_hidden' => 'getIsHidden',
'is_deleted' => 'getIsDeleted',
'author' => 'getAuthor',
'photos' => 'getPhotos',
'replies' => 'getReplies',
'edits' => 'getEdits',
'raw_data' => 'getRawData'    ];

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

    const RECOMMENDATION_1 = 1;
const RECOMMENDATION_MINUS_1 = -1;

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRecommendationAllowableValues()
    {
        return [
            self::RECOMMENDATION_1,
self::RECOMMENDATION_MINUS_1,        ];
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
        $this->container['text'] = isset($data['text']) ? $data['text'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['translation'] = isset($data['translation']) ? $data['translation'] : null;
        $this->container['timestamp'] = isset($data['timestamp']) ? $data['timestamp'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['rating'] = isset($data['rating']) ? $data['rating'] : null;
        $this->container['recommendation'] = isset($data['recommendation']) ? $data['recommendation'] : null;
        $this->container['is_hidden'] = isset($data['is_hidden']) ? $data['is_hidden'] : false;
        $this->container['is_deleted'] = isset($data['is_deleted']) ? $data['is_deleted'] : false;
        $this->container['author'] = isset($data['author']) ? $data['author'] : null;
        $this->container['photos'] = isset($data['photos']) ? $data['photos'] : null;
        $this->container['replies'] = isset($data['replies']) ? $data['replies'] : null;
        $this->container['edits'] = isset($data['edits']) ? $data['edits'] : null;
        $this->container['raw_data'] = isset($data['raw_data']) ? $data['raw_data'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getRecommendationAllowableValues();
        if (!is_null($this->container['recommendation']) && !in_array($this->container['recommendation'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'recommendation', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id ID of the review as it appears on the native site
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets text
     *
     * @return string
     */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
     * Sets text
     *
     * @param string $text Review plain text (no HTML) as posted by the author (in its original language). It can be null with some networks if no text was posted and only a rate.
     *
     * @return $this
     */
    public function setText($text)
    {
        $this->container['text'] = $text;

        return $this;
    }

    /**
     * Gets language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param string $language The original language of the review. Made of 2 to 3 characters. Could vary for the same language, e.g. `en` and `eng` but does not vary per network.
     *
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets translation
     *
     * @return string
     */
    public function getTranslation()
    {
        return $this->container['translation'];
    }

    /**
     * Sets translation
     *
     * @param string $translation The english translation of the review if made available by the originating network.
     *
     * @return $this
     */
    public function setTranslation($translation)
    {
        $this->container['translation'] = $translation;

        return $this;
    }

    /**
     * Gets timestamp
     *
     * @return \DateTime
     */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
     * Sets timestamp
     *
     * @param \DateTime $timestamp Date and time when the review was posted/published on the review site. Some networks do not offer granular precision and the timestamp might be rounded to the day.
     *
     * @return $this
     */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url Review URL that helps navigate straight to the review
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets rating
     *
     * @return float
     */
    public function getRating()
    {
        return $this->container['rating'];
    }

    /**
     * Sets rating
     *
     * @param float $rating Posted rating. Can be null if it is a recommendation.
     *
     * @return $this
     */
    public function setRating($rating)
    {
        $this->container['rating'] = $rating;

        return $this;
    }

    /**
     * Gets recommendation
     *
     * @return int
     */
    public function getRecommendation()
    {
        return $this->container['recommendation'];
    }

    /**
     * Sets recommendation
     *
     * @param int $recommendation Review recommendation: positive or negative. Can be null if it is a rated review.
     *
     * @return $this
     */
    public function setRecommendation($recommendation)
    {
        $allowedValues = $this->getRecommendationAllowableValues();
        if (!is_null($recommendation) && !in_array($recommendation, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'recommendation', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['recommendation'] = $recommendation;

        return $this;
    }

    /**
     * Gets is_hidden
     *
     * @return bool
     */
    public function getIsHidden()
    {
        return $this->container['is_hidden'];
    }

    /**
     * Sets is_hidden
     *
     * @param bool $is_hidden Indicates whether the review is kept hidden on the native site or not
     *
     * @return $this
     */
    public function setIsHidden($is_hidden)
    {
        $this->container['is_hidden'] = $is_hidden;

        return $this;
    }

    /**
     * Gets is_deleted
     *
     * @return bool
     */
    public function getIsDeleted()
    {
        return $this->container['is_deleted'];
    }

    /**
     * Sets is_deleted
     *
     * @param bool $is_deleted Indicates whether the review has been detected by the engine as missing or not
     *
     * @return $this
     */
    public function setIsDeleted($is_deleted)
    {
        $this->container['is_deleted'] = $is_deleted;

        return $this;
    }

    /**
     * Gets author
     *
     * @return \Zembra\Client\Model\ReviewAuthor
     */
    public function getAuthor()
    {
        return $this->container['author'];
    }

    /**
     * Sets author
     *
     * @param \Zembra\Client\Model\ReviewAuthor $author author
     *
     * @return $this
     */
    public function setAuthor($author)
    {
        $this->container['author'] = $author;

        return $this;
    }

    /**
     * Gets photos
     *
     * @return \Zembra\Client\Model\ReviewPhoto[]
     */
    public function getPhotos()
    {
        return $this->container['photos'];
    }

    /**
     * Sets photos
     *
     * @param \Zembra\Client\Model\ReviewPhoto[] $photos photos
     *
     * @return $this
     */
    public function setPhotos($photos)
    {
        $this->container['photos'] = $photos;

        return $this;
    }

    /**
     * Gets replies
     *
     * @return \Zembra\Client\Model\ReviewReply[]
     */
    public function getReplies()
    {
        return $this->container['replies'];
    }

    /**
     * Sets replies
     *
     * @param \Zembra\Client\Model\ReviewReply[] $replies replies
     *
     * @return $this
     */
    public function setReplies($replies)
    {
        $this->container['replies'] = $replies;

        return $this;
    }

    /**
     * Gets edits
     *
     * @return \Zembra\Client\Model\ReviewEdits[]
     */
    public function getEdits()
    {
        return $this->container['edits'];
    }

    /**
     * Sets edits
     *
     * @param \Zembra\Client\Model\ReviewEdits[] $edits edits
     *
     * @return $this
     */
    public function setEdits($edits)
    {
        $this->container['edits'] = $edits;

        return $this;
    }

    /**
     * Gets raw_data
     *
     * @return object
     */
    public function getRawData()
    {
        return $this->container['raw_data'];
    }

    /**
     * Sets raw_data
     *
     * @param object $raw_data Returns raw data collected from the original network
     *
     * @return $this
     */
    public function setRawData($raw_data)
    {
        $this->container['raw_data'] = $raw_data;

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
