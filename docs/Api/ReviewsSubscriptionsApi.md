# Zembra\Client\ReviewsSubscriptionsApi

All URIs are relative to *https://api.zembra.io/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**reviewsSubscriptionNetworkDelete**](ReviewsSubscriptionsApi.md#reviewssubscriptionnetworkdelete) | **DELETE** /reviews/subscription/{network} | Delete a review page subscription by slug
[**reviewsSubscriptionNetworkGet**](ReviewsSubscriptionsApi.md#reviewssubscriptionnetworkget) | **GET** /reviews/subscription/{network} | Get reviews of requested business from existing subscription by slug
[**reviewsSubscriptionNetworkPatch**](ReviewsSubscriptionsApi.md#reviewssubscriptionnetworkpatch) | **PATCH** /reviews/subscription/{network} | Update an active review page subscription by slug
[**reviewsSubscriptionNetworkPost**](ReviewsSubscriptionsApi.md#reviewssubscriptionnetworkpost) | **POST** /reviews/subscription/{network} | Create a new subscription to a review page
[**reviewsSubscriptionUidUidDelete**](ReviewsSubscriptionsApi.md#reviewssubscriptionuiduiddelete) | **DELETE** /reviews/subscription/uid/{uid} | Delete a review page subscription by UID
[**reviewsSubscriptionUidUidGet**](ReviewsSubscriptionsApi.md#reviewssubscriptionuiduidget) | **GET** /reviews/subscription/uid/{uid} | Get reviews of requested business from existing subscription by UID
[**reviewsSubscriptionUidUidPatch**](ReviewsSubscriptionsApi.md#reviewssubscriptionuiduidpatch) | **PATCH** /reviews/subscription/uid/{uid} | Update an active review page subscription by UID
[**reviewsSubscriptionsGet**](ReviewsSubscriptionsApi.md#reviewssubscriptionsget) | **GET** /reviews/subscriptions | Get the list of reviews subscriptions

# **reviewsSubscriptionNetworkDelete**
> \Zembra\Client\Model\InlineResponse2009 reviewsSubscriptionNetworkDelete($network, $slug)

Delete a review page subscription by slug

**Service**: `cancel-reviews-subscription-by-slug`    Completely delete a subscription. This action is not reversible. In the scenario you re-request to create a subscription to the same review page, you will be charged a new fee like if the previous and deleted subscription had never existed. You will also immediately stop receiving updates. We will stop monitoring updates.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Zembra\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zembra\Client\Api\ReviewsSubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network = new \Zembra\Client\Model\ReviewNetwork(); // \Zembra\Client\Model\ReviewNetwork | Network the business page belongs to
$slug = new \Zembra\Client\Model\Slug(); // \Zembra\Client\Model\Slug | Please see the description for `slug` on **[GET] /business/{network}**

try {
    $result = $apiInstance->reviewsSubscriptionNetworkDelete($network, $slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReviewsSubscriptionsApi->reviewsSubscriptionNetworkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **network** | [**\Zembra\Client\Model\ReviewNetwork**](../Model/.md)| Network the business page belongs to |
 **slug** | [**\Zembra\Client\Model\Slug**](../Model/.md)| Please see the description for &#x60;slug&#x60; on **[GET] /business/{network}** |

### Return type

[**\Zembra\Client\Model\InlineResponse2009**](../Model/InlineResponse2009.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reviewsSubscriptionNetworkGet**
> \Zembra\Client\Model\InlineResponse2008 reviewsSubscriptionNetworkGet($network, $slug, $fields, $has_photos, $has_replies, $has_edits, $is_hidden, $is_recommended, $max_rating, $min_rating, $posted_before, $posted_after, $language, $include_deleted, $sort_by, $sort_direction, $limit, $offset)

Get reviews of requested business from existing subscription by slug

**Service**: `get-reviews-subscription-by-slug`    Returns the list of reviews for the requested business along with details of the subscription, and a summary of the review page including the review count, global rating, and the `lastCrawled` timestamp that indicates the date and time the review page was last updated.    If the data is fully loaded in our system, you will get a **200 OK**. However, if the pulling is still in progress, expect to get a **206 Partial Content**. This last response will include whatever data has been collected thus far.    You can call this endpoint as many times as you want within the lifespan of the subscription. You can also apply filters to return only a subset of the data. Some fields may not be supported on some networks. They are either set to `null` or omitted.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Zembra\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zembra\Client\Api\ReviewsSubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network = new \Zembra\Client\Model\ReviewNetwork(); // \Zembra\Client\Model\ReviewNetwork | Network this business page belongs to
$slug = new \Zembra\Client\Model\Slug(); // \Zembra\Client\Model\Slug | Please see the description for `slug` on **[GET] /business/{network}**
$fields = array("fields_example"); // string[] | List of review fields to be returned
$has_photos = true; // bool | If requested, only reviews with photos are returned. If set to false, only reviews without photos are returned. To include all reviews regardless of whether they have photos or not, omit this option.
$has_replies = true; // bool | If requested, only reviews with replies are returned. If set to false, only reviews without replies are returned. To include all reviews regardless of whether they have replies or not, omit this option.
$has_edits = true; // bool | If requested, only reviews with edits are returned. Edits can be reported by the review platform, like with Yelp, or have been detected by our engines. If set to false, only reviews without edits are returned. To include all reviews regardless of whether they have edits or not, omit this option.
$is_hidden = true; // bool | If true, only reviews that are kept hidden on the review platform are included, e.g. non-recommended reviews on Yelp. If false, only visible reviews are returned.
$is_recommended = true; // bool | If true, reviews considered as positive recommendation (recommended) are returned. If false, reviews considered as negative recommendation (not recommended) are included.
$max_rating = 3.4; // float | Limits the highest rating of the returned reviews.
$min_rating = 3.4; // float | Limits the lowest rating of the returned reviews.
$posted_before = new \DateTime("2013-10-20"); // \DateTime | Setting this parameter restricts the result to contain only reviews that were posted before the specified date. The input must respect this format `Y-m-d H:i:s` or any derivative starting from the left, e.g. `Y` or `Y-m`, etc.
$posted_after = new \DateTime("2013-10-20"); // \DateTime | Setting this parameter restricts the result to contain only reviews that were posted after the specified date. The input must respect this format `Y-m-d H:i:s` or any derivative starting from the left, e.g. `Y` or `Y-m`, etc.
$language = "language_example"; // string | Return only reviews which language matches the given string.
$include_deleted = true; // bool | If requested, the result will include reviews that are detected by the engine as deleted, i.e. reviews that were live at some point then detected missing.
$sort_by = "timestamp"; // string | Indicates the desired sorting attribute.
$sort_direction = "DESC"; // string | Indicates the desired sorting direction.
$limit = 1000; // int | Indicates the maximum number of reviews to be returned. If you change the default filters and/or the list of fields and omit the `limit` then the default limit will be applied.
$offset = 56; // int | Helps with pagination. It indicates the offset to be applied to the set of reviews.

try {
    $result = $apiInstance->reviewsSubscriptionNetworkGet($network, $slug, $fields, $has_photos, $has_replies, $has_edits, $is_hidden, $is_recommended, $max_rating, $min_rating, $posted_before, $posted_after, $language, $include_deleted, $sort_by, $sort_direction, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReviewsSubscriptionsApi->reviewsSubscriptionNetworkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **network** | [**\Zembra\Client\Model\ReviewNetwork**](../Model/.md)| Network this business page belongs to |
 **slug** | [**\Zembra\Client\Model\Slug**](../Model/.md)| Please see the description for &#x60;slug&#x60; on **[GET] /business/{network}** |
 **fields** | [**string[]**](../Model/string.md)| List of review fields to be returned | [optional]
 **has_photos** | **bool**| If requested, only reviews with photos are returned. If set to false, only reviews without photos are returned. To include all reviews regardless of whether they have photos or not, omit this option. | [optional]
 **has_replies** | **bool**| If requested, only reviews with replies are returned. If set to false, only reviews without replies are returned. To include all reviews regardless of whether they have replies or not, omit this option. | [optional]
 **has_edits** | **bool**| If requested, only reviews with edits are returned. Edits can be reported by the review platform, like with Yelp, or have been detected by our engines. If set to false, only reviews without edits are returned. To include all reviews regardless of whether they have edits or not, omit this option. | [optional]
 **is_hidden** | **bool**| If true, only reviews that are kept hidden on the review platform are included, e.g. non-recommended reviews on Yelp. If false, only visible reviews are returned. | [optional]
 **is_recommended** | **bool**| If true, reviews considered as positive recommendation (recommended) are returned. If false, reviews considered as negative recommendation (not recommended) are included. | [optional]
 **max_rating** | **float**| Limits the highest rating of the returned reviews. | [optional]
 **min_rating** | **float**| Limits the lowest rating of the returned reviews. | [optional]
 **posted_before** | **\DateTime**| Setting this parameter restricts the result to contain only reviews that were posted before the specified date. The input must respect this format &#x60;Y-m-d H:i:s&#x60; or any derivative starting from the left, e.g. &#x60;Y&#x60; or &#x60;Y-m&#x60;, etc. | [optional]
 **posted_after** | **\DateTime**| Setting this parameter restricts the result to contain only reviews that were posted after the specified date. The input must respect this format &#x60;Y-m-d H:i:s&#x60; or any derivative starting from the left, e.g. &#x60;Y&#x60; or &#x60;Y-m&#x60;, etc. | [optional]
 **language** | **string**| Return only reviews which language matches the given string. | [optional]
 **include_deleted** | **bool**| If requested, the result will include reviews that are detected by the engine as deleted, i.e. reviews that were live at some point then detected missing. | [optional]
 **sort_by** | **string**| Indicates the desired sorting attribute. | [optional] [default to timestamp]
 **sort_direction** | **string**| Indicates the desired sorting direction. | [optional] [default to DESC]
 **limit** | **int**| Indicates the maximum number of reviews to be returned. If you change the default filters and/or the list of fields and omit the &#x60;limit&#x60; then the default limit will be applied. | [optional] [default to 1000]
 **offset** | **int**| Helps with pagination. It indicates the offset to be applied to the set of reviews. | [optional]

### Return type

[**\Zembra\Client\Model\InlineResponse2008**](../Model/InlineResponse2008.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reviewsSubscriptionNetworkPatch**
> \Zembra\Client\Model\InlineResponse20010 reviewsSubscriptionNetworkPatch($slug, $include_raw_data, $auto_renew, $internal_id, $network)

Update an active review page subscription by slug

**Service**: `update-reviews-subscription-by-slug`    Introduces changes to an existing and active subscription to a review page.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Zembra\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zembra\Client\Api\ReviewsSubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = "slug_example"; // string | 
$include_raw_data = true; // bool | 
$auto_renew = true; // bool | 
$internal_id = "internal_id_example"; // string | 
$network = new \Zembra\Client\Model\ReviewNetwork(); // \Zembra\Client\Model\ReviewNetwork | Network the subscription belongs to.

try {
    $result = $apiInstance->reviewsSubscriptionNetworkPatch($slug, $include_raw_data, $auto_renew, $internal_id, $network);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReviewsSubscriptionsApi->reviewsSubscriptionNetworkPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slug** | **string**|  |
 **include_raw_data** | **bool**|  |
 **auto_renew** | **bool**|  |
 **internal_id** | **string**|  |
 **network** | [**\Zembra\Client\Model\ReviewNetwork**](../Model/.md)| Network the subscription belongs to. |

### Return type

[**\Zembra\Client\Model\InlineResponse20010**](../Model/InlineResponse20010.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reviewsSubscriptionNetworkPost**
> \Zembra\Client\Model\InlineResponse2012 reviewsSubscriptionNetworkPost($slug, $include_raw_data, $auto_renew, $internal_id, $network)

Create a new subscription to a review page

**Service**: `create-reviews-subscription`    Creates a new subscription to the requested review page. The subscription lasts 30 days. Requested reviews are maintained up to date with the origin. We monitor all changes introduced to the original review, e.g. change in rating, in text, etc. Data is kept current with a maximum of a 6 hour-gap with the source.    All calls during the lifespan of the subscription to pull the data are free of charge. The cost of the subscription is based on the number of reviews which gets charged once per subscription including renewals. There is a base service fee that gets added regardless of the number or returned reviews. There are no tiers per network. The same pricing applies to all networks.    If accepted, the response will include details about the requested business and the `subscription` object with the requested settings. Once the subscription is created and if you desire to get the reviews data, you can call the **[GET] /reviews/subscription/{network}** or **[GET] /reviews/subscription/uid/{uid}** endpoints to retrieve the data.    You may need to allow a few minutes before getting the full list of reviews. It takes as little as 1 second or sometimes 50 seconds for an average page (~300 reviews) to be ready for delivery. Occasionally, the wait time may increase to 2 minutes and very rarely higher based on the **selected network**, the **number of reviews**, and the status of the **review platform servers**.    Once the data is fully ready, it will be delivered in chunks of up to 100 reviews per call to your webhook if you have it configured to receive data for **new reviews** event.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Zembra\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zembra\Client\Api\ReviewsSubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = "slug_example"; // string | 
$include_raw_data = true; // bool | 
$auto_renew = true; // bool | 
$internal_id = "internal_id_example"; // string | 
$network = new \Zembra\Client\Model\ReviewNetwork(); // \Zembra\Client\Model\ReviewNetwork | Network this business page belongs to

try {
    $result = $apiInstance->reviewsSubscriptionNetworkPost($slug, $include_raw_data, $auto_renew, $internal_id, $network);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReviewsSubscriptionsApi->reviewsSubscriptionNetworkPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slug** | **string**|  |
 **include_raw_data** | **bool**|  |
 **auto_renew** | **bool**|  |
 **internal_id** | **string**|  |
 **network** | [**\Zembra\Client\Model\ReviewNetwork**](../Model/.md)| Network this business page belongs to |

### Return type

[**\Zembra\Client\Model\InlineResponse2012**](../Model/InlineResponse2012.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reviewsSubscriptionUidUidDelete**
> \Zembra\Client\Model\InlineResponse2009 reviewsSubscriptionUidUidDelete($uid)

Delete a review page subscription by UID

**Service**: `cancel-reviews-subscription-by-uid`    Please see the description for **[DELETE] /reviews/subscription/{network}**

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Zembra\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zembra\Client\Api\ReviewsSubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uid = "uid_example"; // string | The UID of the subscription that was returned at the time of creation. It persists over time and across accounts.

try {
    $result = $apiInstance->reviewsSubscriptionUidUidDelete($uid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReviewsSubscriptionsApi->reviewsSubscriptionUidUidDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uid** | **string**| The UID of the subscription that was returned at the time of creation. It persists over time and across accounts. |

### Return type

[**\Zembra\Client\Model\InlineResponse2009**](../Model/InlineResponse2009.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reviewsSubscriptionUidUidGet**
> \Zembra\Client\Model\InlineResponse2008 reviewsSubscriptionUidUidGet($uid, $fields, $has_photos, $has_replies, $has_edits, $is_hidden, $is_recommended, $max_rating, $min_rating, $posted_before, $posted_after, $language, $include_deleted, $sort_by, $sort_direction, $limit, $offset)

Get reviews of requested business from existing subscription by UID

**Service**: `get-reviews-subscription-by-uid`    Please see the description for **[GET] /reviews/subscription/{network}**

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Zembra\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zembra\Client\Api\ReviewsSubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uid = "uid_example"; // string | The UID of the subscription that was returned at the time of creation. It persists over time and across accounts.
$fields = array("fields_example"); // string[] | List of review fields to be returned
$has_photos = true; // bool | If requested, only reviews with photos are returned. If set to false, only reviews without photos are returned. To include all reviews regardless of whether they have photos or not, omit this option.
$has_replies = true; // bool | If requested, only reviews with replies are returned. If set to false, only reviews without replies are returned. To include all reviews regardless of whether they have replies or not, omit this option.
$has_edits = true; // bool | If requested, only reviews with edits are returned. Edits can be reported by the review platform, like with Yelp, or have been detected by our engines. If set to false, only reviews without edits are returned. To include all reviews regardless of whether they have edits or not, omit this option.
$is_hidden = true; // bool | If true, only reviews that are kept hidden on the review platform are included, e.g. non-recommended reviews on Yelp. If false, only visible reviews are returned.
$is_recommended = true; // bool | If true, reviews considered as positive recommendation (recommended) are returned. If false, reviews considered as negative recommendation (not recommended) are included.
$max_rating = 3.4; // float | Limits the highest rating of the returned reviews.
$min_rating = 3.4; // float | Limits the lowest rating of the returned reviews.
$posted_before = new \DateTime("2013-10-20"); // \DateTime | Setting this parameter restricts the result to contain only reviews that were posted before the specified date. The input must respect this format `Y-m-d H:i:s` or any derivative starting from the left, e.g. `Y` or `Y-m`, etc.
$posted_after = new \DateTime("2013-10-20"); // \DateTime | Setting this parameter restricts the result to contain only reviews that were posted after the specified date. The input must respect this format `Y-m-d H:i:s` or any derivative starting from the left, e.g. `Y` or `Y-m`, etc.
$language = "language_example"; // string | Return only reviews which language matches the given string.
$include_deleted = true; // bool | If requested, the result will include reviews that are detected by the engine as deleted, i.e. reviews that were live at some point then detected missing.
$sort_by = "timestamp"; // string | Indicates the desired sorting attribute.
$sort_direction = "DESC"; // string | Indicates the desired sorting direction.
$limit = 1000; // int | Indicates the maximum number of reviews to be returned. If you change the default filters and/or the list of fields and omit the `limit` then the default limit will be applied.
$offset = 56; // int | Helps with pagination. It indicates the offset to be applied to the set of reviews.

try {
    $result = $apiInstance->reviewsSubscriptionUidUidGet($uid, $fields, $has_photos, $has_replies, $has_edits, $is_hidden, $is_recommended, $max_rating, $min_rating, $posted_before, $posted_after, $language, $include_deleted, $sort_by, $sort_direction, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReviewsSubscriptionsApi->reviewsSubscriptionUidUidGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uid** | **string**| The UID of the subscription that was returned at the time of creation. It persists over time and across accounts. |
 **fields** | [**string[]**](../Model/string.md)| List of review fields to be returned | [optional]
 **has_photos** | **bool**| If requested, only reviews with photos are returned. If set to false, only reviews without photos are returned. To include all reviews regardless of whether they have photos or not, omit this option. | [optional]
 **has_replies** | **bool**| If requested, only reviews with replies are returned. If set to false, only reviews without replies are returned. To include all reviews regardless of whether they have replies or not, omit this option. | [optional]
 **has_edits** | **bool**| If requested, only reviews with edits are returned. Edits can be reported by the review platform, like with Yelp, or have been detected by our engines. If set to false, only reviews without edits are returned. To include all reviews regardless of whether they have edits or not, omit this option. | [optional]
 **is_hidden** | **bool**| If true, only reviews that are kept hidden on the review platform are included, e.g. non-recommended reviews on Yelp. If false, only visible reviews are returned. | [optional]
 **is_recommended** | **bool**| If true, reviews considered as positive recommendation (recommended) are returned. If false, reviews considered as negative recommendation (not recommended) are included. | [optional]
 **max_rating** | **float**| Limits the highest rating of the returned reviews. | [optional]
 **min_rating** | **float**| Limits the lowest rating of the returned reviews. | [optional]
 **posted_before** | **\DateTime**| Setting this parameter restricts the result to contain only reviews that were posted before the specified date. The input must respect this format &#x60;Y-m-d H:i:s&#x60; or any derivative starting from the left, e.g. &#x60;Y&#x60; or &#x60;Y-m&#x60;, etc. | [optional]
 **posted_after** | **\DateTime**| Setting this parameter restricts the result to contain only reviews that were posted after the specified date. The input must respect this format &#x60;Y-m-d H:i:s&#x60; or any derivative starting from the left, e.g. &#x60;Y&#x60; or &#x60;Y-m&#x60;, etc. | [optional]
 **language** | **string**| Return only reviews which language matches the given string. | [optional]
 **include_deleted** | **bool**| If requested, the result will include reviews that are detected by the engine as deleted, i.e. reviews that were live at some point then detected missing. | [optional]
 **sort_by** | **string**| Indicates the desired sorting attribute. | [optional] [default to timestamp]
 **sort_direction** | **string**| Indicates the desired sorting direction. | [optional] [default to DESC]
 **limit** | **int**| Indicates the maximum number of reviews to be returned. If you change the default filters and/or the list of fields and omit the &#x60;limit&#x60; then the default limit will be applied. | [optional] [default to 1000]
 **offset** | **int**| Helps with pagination. It indicates the offset to be applied to the set of reviews. | [optional]

### Return type

[**\Zembra\Client\Model\InlineResponse2008**](../Model/InlineResponse2008.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reviewsSubscriptionUidUidPatch**
> \Zembra\Client\Model\InlineResponse20010 reviewsSubscriptionUidUidPatch($slug, $include_raw_data, $auto_renew, $internal_id, $uid)

Update an active review page subscription by UID

**Service**: `update-reviews-subscription-by-uid`    Please see the description for **[PATCH] /reviews/subscription/{network}**

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Zembra\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zembra\Client\Api\ReviewsSubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = "slug_example"; // string | 
$include_raw_data = true; // bool | 
$auto_renew = true; // bool | 
$internal_id = "internal_id_example"; // string | 
$uid = "uid_example"; // string | The UID of the subscription that was returned at the time of creation. It persists over time and across accounts.

try {
    $result = $apiInstance->reviewsSubscriptionUidUidPatch($slug, $include_raw_data, $auto_renew, $internal_id, $uid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReviewsSubscriptionsApi->reviewsSubscriptionUidUidPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slug** | **string**|  |
 **include_raw_data** | **bool**|  |
 **auto_renew** | **bool**|  |
 **internal_id** | **string**|  |
 **uid** | **string**| The UID of the subscription that was returned at the time of creation. It persists over time and across accounts. |

### Return type

[**\Zembra\Client\Model\InlineResponse20010**](../Model/InlineResponse20010.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reviewsSubscriptionsGet**
> \Zembra\Client\Model\InlineResponse20011 reviewsSubscriptionsGet($limit, $offset, $sort_by, $sort_direction, $internal_id, $slug, $network)

Get the list of reviews subscriptions

**Service**: `get-reviews-subscriptions`    Returns the list of reviews subscriptions of the account. The result includes details about the subscription like requested time, internal ID, etc. The maximum number of returned subscriptions is 100 but you may use the `limit` and `offset` parameters for pagination.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Zembra\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zembra\Client\Api\ReviewsSubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 100; // int | Maximum number of subscriptions to be returned. At most 100 subscriptions will be returned even if this parameter is set to a higher value.
$offset = 56; // int | Helps with pagination. It controls the offset to be applied to the set of subscriptions.
$sort_by = "timestamp"; // string | Indicates the desired sorting attribute.
$sort_direction = "DESC"; // string | Indicates the desired sorting direction.
$internal_id = "internal_id_example"; // string | Filter results to only subscriptions with similar internal ID. This is the ID you set on the subscription that identifies it with your application. Please see the description for `internalId` on **[POST] /reviews/subscription/{network}**.
$slug = new \Zembra\Client\Model\Slug(); // \Zembra\Client\Model\Slug | Filter results to only subscriptions to review pages with similar slug. Please see the description for `slug` on **[GET] /business/{network}**.
$network = new \Zembra\Client\Model\ReviewNetwork(); // \Zembra\Client\Model\ReviewNetwork | Returns subscriptions to review pages only from the requested network.

try {
    $result = $apiInstance->reviewsSubscriptionsGet($limit, $offset, $sort_by, $sort_direction, $internal_id, $slug, $network);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReviewsSubscriptionsApi->reviewsSubscriptionsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Maximum number of subscriptions to be returned. At most 100 subscriptions will be returned even if this parameter is set to a higher value. | [optional] [default to 100]
 **offset** | **int**| Helps with pagination. It controls the offset to be applied to the set of subscriptions. | [optional]
 **sort_by** | **string**| Indicates the desired sorting attribute. | [optional] [default to timestamp]
 **sort_direction** | **string**| Indicates the desired sorting direction. | [optional] [default to DESC]
 **internal_id** | **string**| Filter results to only subscriptions with similar internal ID. This is the ID you set on the subscription that identifies it with your application. Please see the description for &#x60;internalId&#x60; on **[POST] /reviews/subscription/{network}**. | [optional]
 **slug** | [**\Zembra\Client\Model\Slug**](../Model/.md)| Filter results to only subscriptions to review pages with similar slug. Please see the description for &#x60;slug&#x60; on **[GET] /business/{network}**. | [optional]
 **network** | [**\Zembra\Client\Model\ReviewNetwork**](../Model/.md)| Returns subscriptions to review pages only from the requested network. | [optional]

### Return type

[**\Zembra\Client\Model\InlineResponse20011**](../Model/InlineResponse20011.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

