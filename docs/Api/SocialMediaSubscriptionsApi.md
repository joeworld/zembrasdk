# Zembra\Client\SocialMediaSubscriptionsApi

All URIs are relative to *https://api.zembra.io/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**socialSubscriptionNetworkResourceSlugContentDelete**](SocialMediaSubscriptionsApi.md#socialsubscriptionnetworkresourceslugcontentdelete) | **DELETE** /social/subscription/{network}/{resource}/{slug}/{content} | Delete a social media subscription by slug
[**socialSubscriptionNetworkResourceSlugContentGet**](SocialMediaSubscriptionsApi.md#socialsubscriptionnetworkresourceslugcontentget) | **GET** /social/subscription/{network}/{resource}/{slug}/{content} | Get social media content from existing subscription by slug
[**socialSubscriptionNetworkResourceSlugContentPatch**](SocialMediaSubscriptionsApi.md#socialsubscriptionnetworkresourceslugcontentpatch) | **PATCH** /social/subscription/{network}/{resource}/{slug}/{content} | Update an active social media subscription by slug
[**socialSubscriptionNetworkResourceSlugContentPost**](SocialMediaSubscriptionsApi.md#socialsubscriptionnetworkresourceslugcontentpost) | **POST** /social/subscription/{network}/{resource}/{slug}/{content} | Create a new subscription to a social media resource stream
[**socialSubscriptionUidUidDelete**](SocialMediaSubscriptionsApi.md#socialsubscriptionuiduiddelete) | **DELETE** /social/subscription/uid/{uid} | Delete a social media subscription by UID
[**socialSubscriptionUidUidGet**](SocialMediaSubscriptionsApi.md#socialsubscriptionuiduidget) | **GET** /social/subscription/uid/{uid} | Get social media content from existing subscription by UID
[**socialSubscriptionUidUidPatch**](SocialMediaSubscriptionsApi.md#socialsubscriptionuiduidpatch) | **PATCH** /social/subscription/uid/{uid} | Update an active social media subscription by UID
[**socialSubscriptionsGet**](SocialMediaSubscriptionsApi.md#socialsubscriptionsget) | **GET** /social/subscriptions | Get the list of social media subscriptions

# **socialSubscriptionNetworkResourceSlugContentDelete**
> \Zembra\Client\Model\InlineResponse20016 socialSubscriptionNetworkResourceSlugContentDelete($network, $resource, $slug, $content)

Delete a social media subscription by slug

**Service**: `cancel-social-subscription-by-slug`    Completely delete a subscription. This action is not reversible. In the scenario you re-request to create a subscription to the same social media resource, you will be charged a new fee like if the previous and deleted subscription had never existed. You will also immediately stop receiving updates. We will stop monitoring updates.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Zembra\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zembra\Client\Api\SocialMediaSubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network = new \Zembra\Client\Model\SocialNetwork(); // \Zembra\Client\Model\SocialNetwork | Target social network
$resource = new \Zembra\Client\Model\Resource(); // \Zembra\Client\Model\Resource | Depending on the selected network, this will define what object you are trying to access details.    List of available resources varies by network:   - **Facebook**:   - page   - post - **Instagram**:   - hashtag   - post   - user - **LinkedIn**:   - company   - keyword   - profile   - post - **Reddit**:   - keyword   - post   - subreddit   - user - **TokTok**:   - hashtag   - user   - video
$slug = new \Zembra\Client\Model\SocialSlug(); // \Zembra\Client\Model\SocialSlug | Unique resource identifier. Full URLs are not accepted. Varies by network. Here are a few examples per resource:   - **Facebook**:   - Page: Presidence.tn   - Post: S:_I1391675561076747:3140064409571178 - **Instagram**:   - Hashtag: coupleprayer   - Post: CFzAp7DASJ0   - User: soumaya_belkouchi - **LinkedIn**:   - Company: zembra   - Keyword: san+diego   - Profile: bakayoko   - Post: urn:li:ugcPost:6971444261015724033 - **Reddit**:   - Keyword: sandiego   - Post: 12mizot   - Subreddit: Damnthatsinteresting   - User: coastalJuncture - **TokTok**:   - Hashtag: healthy   - User: justqueen1988   - Video: 7114961878434041094
$content = new \Zembra\Client\Model\Content(); // \Zembra\Client\Model\Content | Depending on the selected network, this will define what data you want to stream. This is needed because under one source there could be more than one content type to be streamed. Example, for Instagram users, you may want to pull all comments or all reels.

try {
    $result = $apiInstance->socialSubscriptionNetworkResourceSlugContentDelete($network, $resource, $slug, $content);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SocialMediaSubscriptionsApi->socialSubscriptionNetworkResourceSlugContentDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **network** | [**\Zembra\Client\Model\SocialNetwork**](../Model/.md)| Target social network |
 **resource** | [**\Zembra\Client\Model\Resource**](../Model/.md)| Depending on the selected network, this will define what object you are trying to access details.    List of available resources varies by network:   - **Facebook**:   - page   - post - **Instagram**:   - hashtag   - post   - user - **LinkedIn**:   - company   - keyword   - profile   - post - **Reddit**:   - keyword   - post   - subreddit   - user - **TokTok**:   - hashtag   - user   - video |
 **slug** | [**\Zembra\Client\Model\SocialSlug**](../Model/.md)| Unique resource identifier. Full URLs are not accepted. Varies by network. Here are a few examples per resource:   - **Facebook**:   - Page: Presidence.tn   - Post: S:_I1391675561076747:3140064409571178 - **Instagram**:   - Hashtag: coupleprayer   - Post: CFzAp7DASJ0   - User: soumaya_belkouchi - **LinkedIn**:   - Company: zembra   - Keyword: san+diego   - Profile: bakayoko   - Post: urn:li:ugcPost:6971444261015724033 - **Reddit**:   - Keyword: sandiego   - Post: 12mizot   - Subreddit: Damnthatsinteresting   - User: coastalJuncture - **TokTok**:   - Hashtag: healthy   - User: justqueen1988   - Video: 7114961878434041094 |
 **content** | [**\Zembra\Client\Model\Content**](../Model/.md)| Depending on the selected network, this will define what data you want to stream. This is needed because under one source there could be more than one content type to be streamed. Example, for Instagram users, you may want to pull all comments or all reels. |

### Return type

[**\Zembra\Client\Model\InlineResponse20016**](../Model/InlineResponse20016.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **socialSubscriptionNetworkResourceSlugContentGet**
> \Zembra\Client\Model\InlineResponse20015 socialSubscriptionNetworkResourceSlugContentGet($network, $resource, $slug, $content, $limit, $offset)

Get social media content from existing subscription by slug

**Service**: `get-social-subscription-by-slug`    Returns the list of elements for the requested resource along with details of the subscription.    If the data is fully loaded in our system, you will get a **200 OK**. However, if the pulling is still in progress, expect to get a **206 Partial Content**. This last response will include whatever data has been collected thus far. You can call this endpoint as many times as you want within the lifespan of the subscription.    If you have webhooks or listeners enabled, you will start receiving data in chunks right away. Contrary to reviews where the data is received as a summary or in a form of digests including all the reviews, with social streams the data is forwarded to your servers on the fly in chunks of 20 to 50 elements at a time. There are no daily digests or summaries.    Social networks operate differently compared to review networks. They apply a chaining mechanism even when using API integration. As a consequence, when requesting a stream of a large size, you may experience delay due to serial data sourcing.    Data retention is set to 5 days as the day this documentation is generated. During the data retention period, you can query the API as many times as you want to request the data without being charged.    We will monitor the requested resource for updates with a minimum rest time of 3 hours.    Contents are always returned sorted by timestamp descending.    If streamSizeLimit and/or streamDateLimit parameters are set, the streaming will be stopped as soon as one of the conditions is met. If none of these parameters is present, the streaming will continue until all content is downloaded. Omitting both parameters may cause your account to accrue large charges with busy sources.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Zembra\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zembra\Client\Api\SocialMediaSubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network = new \Zembra\Client\Model\SocialNetwork(); // \Zembra\Client\Model\SocialNetwork | Target social network
$resource = new \Zembra\Client\Model\Resource(); // \Zembra\Client\Model\Resource | Depending on the selected network, this will define what object you are trying to access details.    List of available resources varies by network:   - **Facebook**:   - page   - post - **Instagram**:   - hashtag   - post   - user - **LinkedIn**:   - company   - keyword   - profile   - post - **Reddit**:   - keyword   - post   - subreddit   - user - **TokTok**:   - hashtag   - user   - video
$slug = new \Zembra\Client\Model\SocialSlug(); // \Zembra\Client\Model\SocialSlug | Unique resource identifier. Full URLs are not accepted. Varies by network. Here are a few examples per resource:   - **Facebook**:   - Page: Presidence.tn   - Post: S:_I1391675561076747:3140064409571178 - **Instagram**:   - Hashtag: coupleprayer   - Post: CFzAp7DASJ0   - User: soumaya_belkouchi - **LinkedIn**:   - Company: zembra   - Keyword: san+diego   - Profile: bakayoko   - Post: urn:li:ugcPost:6971444261015724033 - **Reddit**:   - Keyword: sandiego   - Post: 12mizot   - Subreddit: Damnthatsinteresting   - User: coastalJuncture - **TokTok**:   - Hashtag: healthy   - User: justqueen1988   - Video: 7114961878434041094
$content = new \Zembra\Client\Model\Content(); // \Zembra\Client\Model\Content | Depending on the selected network, this will define what data you want to stream. This is needed because under one source there could be more than one content type to be streamed. Example, for Instagram users, you may want to pull all comments or all reels.
$limit = 1000; // int | Indicates the maximum number of elements to be returned. The default limit will be applied if omitted.
$offset = 56; // int | Helps with pagination. It indicates the offset to be applied to the set of elements.

try {
    $result = $apiInstance->socialSubscriptionNetworkResourceSlugContentGet($network, $resource, $slug, $content, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SocialMediaSubscriptionsApi->socialSubscriptionNetworkResourceSlugContentGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **network** | [**\Zembra\Client\Model\SocialNetwork**](../Model/.md)| Target social network |
 **resource** | [**\Zembra\Client\Model\Resource**](../Model/.md)| Depending on the selected network, this will define what object you are trying to access details.    List of available resources varies by network:   - **Facebook**:   - page   - post - **Instagram**:   - hashtag   - post   - user - **LinkedIn**:   - company   - keyword   - profile   - post - **Reddit**:   - keyword   - post   - subreddit   - user - **TokTok**:   - hashtag   - user   - video |
 **slug** | [**\Zembra\Client\Model\SocialSlug**](../Model/.md)| Unique resource identifier. Full URLs are not accepted. Varies by network. Here are a few examples per resource:   - **Facebook**:   - Page: Presidence.tn   - Post: S:_I1391675561076747:3140064409571178 - **Instagram**:   - Hashtag: coupleprayer   - Post: CFzAp7DASJ0   - User: soumaya_belkouchi - **LinkedIn**:   - Company: zembra   - Keyword: san+diego   - Profile: bakayoko   - Post: urn:li:ugcPost:6971444261015724033 - **Reddit**:   - Keyword: sandiego   - Post: 12mizot   - Subreddit: Damnthatsinteresting   - User: coastalJuncture - **TokTok**:   - Hashtag: healthy   - User: justqueen1988   - Video: 7114961878434041094 |
 **content** | [**\Zembra\Client\Model\Content**](../Model/.md)| Depending on the selected network, this will define what data you want to stream. This is needed because under one source there could be more than one content type to be streamed. Example, for Instagram users, you may want to pull all comments or all reels. |
 **limit** | **int**| Indicates the maximum number of elements to be returned. The default limit will be applied if omitted. | [optional] [default to 1000]
 **offset** | **int**| Helps with pagination. It indicates the offset to be applied to the set of elements. | [optional]

### Return type

[**\Zembra\Client\Model\InlineResponse20015**](../Model/InlineResponse20015.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **socialSubscriptionNetworkResourceSlugContentPatch**
> \Zembra\Client\Model\InlineResponse20017 socialSubscriptionNetworkResourceSlugContentPatch($internal_id, $network, $resource, $slug, $content)

Update an active social media subscription by slug

**Service**: `update-social-subscription-by-slug`    Introduces changes to an existing and active subscription to a social media resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Zembra\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zembra\Client\Api\SocialMediaSubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$internal_id = "internal_id_example"; // string | 
$network = new \Zembra\Client\Model\SocialNetwork(); // \Zembra\Client\Model\SocialNetwork | Target social network
$resource = new \Zembra\Client\Model\Resource(); // \Zembra\Client\Model\Resource | Depending on the selected network, this will define what object you are trying to access details.    List of available resources varies by network:   - **Facebook**:   - page   - post - **Instagram**:   - hashtag   - post   - user - **LinkedIn**:   - company   - keyword   - profile   - post - **Reddit**:   - keyword   - post   - subreddit   - user - **TokTok**:   - hashtag   - user   - video
$slug = new \Zembra\Client\Model\SocialSlug(); // \Zembra\Client\Model\SocialSlug | Unique resource identifier. Full URLs are not accepted. Varies by network. Here are a few examples per resource:   - **Facebook**:   - Page: Presidence.tn   - Post: S:_I1391675561076747:3140064409571178 - **Instagram**:   - Hashtag: coupleprayer   - Post: CFzAp7DASJ0   - User: soumaya_belkouchi - **LinkedIn**:   - Company: zembra   - Keyword: san+diego   - Profile: bakayoko   - Post: urn:li:ugcPost:6971444261015724033 - **Reddit**:   - Keyword: sandiego   - Post: 12mizot   - Subreddit: Damnthatsinteresting   - User: coastalJuncture - **TokTok**:   - Hashtag: healthy   - User: justqueen1988   - Video: 7114961878434041094
$content = new \Zembra\Client\Model\Content(); // \Zembra\Client\Model\Content | Depending on the selected network, this will define what data you want to stream. This is needed because under one source there could be more than one content type to be streamed. Example, for Instagram users, you may want to pull all comments or all reels.

try {
    $result = $apiInstance->socialSubscriptionNetworkResourceSlugContentPatch($internal_id, $network, $resource, $slug, $content);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SocialMediaSubscriptionsApi->socialSubscriptionNetworkResourceSlugContentPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **internal_id** | **string**|  |
 **network** | [**\Zembra\Client\Model\SocialNetwork**](../Model/.md)| Target social network |
 **resource** | [**\Zembra\Client\Model\Resource**](../Model/.md)| Depending on the selected network, this will define what object you are trying to access details.    List of available resources varies by network:   - **Facebook**:   - page   - post - **Instagram**:   - hashtag   - post   - user - **LinkedIn**:   - company   - keyword   - profile   - post - **Reddit**:   - keyword   - post   - subreddit   - user - **TokTok**:   - hashtag   - user   - video |
 **slug** | [**\Zembra\Client\Model\SocialSlug**](../Model/.md)| Unique resource identifier. Full URLs are not accepted. Varies by network. Here are a few examples per resource:   - **Facebook**:   - Page: Presidence.tn   - Post: S:_I1391675561076747:3140064409571178 - **Instagram**:   - Hashtag: coupleprayer   - Post: CFzAp7DASJ0   - User: soumaya_belkouchi - **LinkedIn**:   - Company: zembra   - Keyword: san+diego   - Profile: bakayoko   - Post: urn:li:ugcPost:6971444261015724033 - **Reddit**:   - Keyword: sandiego   - Post: 12mizot   - Subreddit: Damnthatsinteresting   - User: coastalJuncture - **TokTok**:   - Hashtag: healthy   - User: justqueen1988   - Video: 7114961878434041094 |
 **content** | [**\Zembra\Client\Model\Content**](../Model/.md)| Depending on the selected network, this will define what data you want to stream. This is needed because under one source there could be more than one content type to be streamed. Example, for Instagram users, you may want to pull all comments or all reels. |

### Return type

[**\Zembra\Client\Model\InlineResponse20017**](../Model/InlineResponse20017.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **socialSubscriptionNetworkResourceSlugContentPost**
> \Zembra\Client\Model\InlineResponse2014 socialSubscriptionNetworkResourceSlugContentPost($internal_id, $stream_size_limit, $stream_date_limit, $network, $resource, $slug, $content)

Create a new subscription to a social media resource stream

**Service**: `create-social-subscription`    Creates a new subscription to the requested social media resource stream. The subscription lasts 5 days. We monitor the resource for added elements, e.g. new comments posted. Data is kept current with a maximum of an 8 hour-gap with the source depending on how busy the source is.    All calls during the lifespan of the subscription to pull the data are free of charge. The cost of the subscription is based on the number of elements streamed in addition to a base service fee. There are no tiers per network. The same pricing applies to all networks.    If accepted, the response will include details about the requested resource and the `subscription` object with the requested settings. Once the subscription is created and if you desire to get the stream data, you can call the **[GET] /social/subscription/{network}/{resource}/{slug}/{content}** or **[GET] /social/subscription/uid/{uid}** endpoints to retrieve the data.    You may need to allow a few minutes before getting the full list of elements. It takes as little as 1 second or sometimes 5 minutes for an average resource (~5000 comments) to be ready for delivery. Occasionally, the wait time may increase to 30 minutes and very rarely higher based on the **selected network**, the **number of elements**, and the status of the **social media platform servers**.    Once the data is fully ready, it will be delivered in chunks of up to 100 elements per call to your webhook.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Zembra\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zembra\Client\Api\SocialMediaSubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$internal_id = "internal_id_example"; // string | 
$stream_size_limit = 56; // int | 
$stream_date_limit = 56; // int | 
$network = new \Zembra\Client\Model\SocialNetwork(); // \Zembra\Client\Model\SocialNetwork | Target social network
$resource = new \Zembra\Client\Model\Resource(); // \Zembra\Client\Model\Resource | Depending on the selected network, this will define what object you are trying to access details.    List of available resources varies by network:   - **Facebook**:   - page   - post - **Instagram**:   - hashtag   - post   - user - **LinkedIn**:   - company   - keyword   - profile   - post - **Reddit**:   - keyword   - post   - subreddit   - user - **TokTok**:   - hashtag   - user   - video
$slug = new \Zembra\Client\Model\SocialSlug(); // \Zembra\Client\Model\SocialSlug | Unique resource identifier. Full URLs are not accepted. Varies by network. Here are a few examples per resource:   - **Facebook**:   - Page: Presidence.tn   - Post: S:_I1391675561076747:3140064409571178 - **Instagram**:   - Hashtag: coupleprayer   - Post: CFzAp7DASJ0   - User: soumaya_belkouchi - **LinkedIn**:   - Company: zembra   - Keyword: san+diego   - Profile: bakayoko   - Post: urn:li:ugcPost:6971444261015724033 - **Reddit**:   - Keyword: sandiego   - Post: 12mizot   - Subreddit: Damnthatsinteresting   - User: coastalJuncture - **TokTok**:   - Hashtag: healthy   - User: justqueen1988   - Video: 7114961878434041094
$content = new \Zembra\Client\Model\Content(); // \Zembra\Client\Model\Content | Depending on the selected network, this will define what data you want to stream. This is needed because under one source there could be more than one content type to be streamed. Example, for Instagram users, you may want to pull all comments or all reels.

try {
    $result = $apiInstance->socialSubscriptionNetworkResourceSlugContentPost($internal_id, $stream_size_limit, $stream_date_limit, $network, $resource, $slug, $content);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SocialMediaSubscriptionsApi->socialSubscriptionNetworkResourceSlugContentPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **internal_id** | **string**|  |
 **stream_size_limit** | **int**|  |
 **stream_date_limit** | **int**|  |
 **network** | [**\Zembra\Client\Model\SocialNetwork**](../Model/.md)| Target social network |
 **resource** | [**\Zembra\Client\Model\Resource**](../Model/.md)| Depending on the selected network, this will define what object you are trying to access details.    List of available resources varies by network:   - **Facebook**:   - page   - post - **Instagram**:   - hashtag   - post   - user - **LinkedIn**:   - company   - keyword   - profile   - post - **Reddit**:   - keyword   - post   - subreddit   - user - **TokTok**:   - hashtag   - user   - video |
 **slug** | [**\Zembra\Client\Model\SocialSlug**](../Model/.md)| Unique resource identifier. Full URLs are not accepted. Varies by network. Here are a few examples per resource:   - **Facebook**:   - Page: Presidence.tn   - Post: S:_I1391675561076747:3140064409571178 - **Instagram**:   - Hashtag: coupleprayer   - Post: CFzAp7DASJ0   - User: soumaya_belkouchi - **LinkedIn**:   - Company: zembra   - Keyword: san+diego   - Profile: bakayoko   - Post: urn:li:ugcPost:6971444261015724033 - **Reddit**:   - Keyword: sandiego   - Post: 12mizot   - Subreddit: Damnthatsinteresting   - User: coastalJuncture - **TokTok**:   - Hashtag: healthy   - User: justqueen1988   - Video: 7114961878434041094 |
 **content** | [**\Zembra\Client\Model\Content**](../Model/.md)| Depending on the selected network, this will define what data you want to stream. This is needed because under one source there could be more than one content type to be streamed. Example, for Instagram users, you may want to pull all comments or all reels. |

### Return type

[**\Zembra\Client\Model\InlineResponse2014**](../Model/InlineResponse2014.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **socialSubscriptionUidUidDelete**
> \Zembra\Client\Model\InlineResponse20016 socialSubscriptionUidUidDelete($uid)

Delete a social media subscription by UID

**Service**: `cancel-social-subscription-by-uid`    Please see the description for **[DELETE] /social/subscription/{network}/{resource}/{slug}/{content}**

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Zembra\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zembra\Client\Api\SocialMediaSubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uid = "uid_example"; // string | The UID of the subscription that was returned at the time of creation. It persists over time and across accounts.

try {
    $result = $apiInstance->socialSubscriptionUidUidDelete($uid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SocialMediaSubscriptionsApi->socialSubscriptionUidUidDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uid** | **string**| The UID of the subscription that was returned at the time of creation. It persists over time and across accounts. |

### Return type

[**\Zembra\Client\Model\InlineResponse20016**](../Model/InlineResponse20016.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **socialSubscriptionUidUidGet**
> \Zembra\Client\Model\InlineResponse20015 socialSubscriptionUidUidGet($uid, $limit, $offset)

Get social media content from existing subscription by UID

**Service**: `get-social-subscription-by-uid`    Please see the description for **[GET] /social/subscription/{network}/{resource}/{slug}/{content}**

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Zembra\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zembra\Client\Api\SocialMediaSubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uid = "uid_example"; // string | The UID of the subscription that was returned at the time of creation. It persists over time and across accounts.
$limit = 1000; // int | Indicates the maximum number of elements to be returned. The default limit will be applied if omitted.
$offset = 56; // int | Helps with pagination. It indicates the offset to be applied to the set of elements.

try {
    $result = $apiInstance->socialSubscriptionUidUidGet($uid, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SocialMediaSubscriptionsApi->socialSubscriptionUidUidGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uid** | **string**| The UID of the subscription that was returned at the time of creation. It persists over time and across accounts. |
 **limit** | **int**| Indicates the maximum number of elements to be returned. The default limit will be applied if omitted. | [optional] [default to 1000]
 **offset** | **int**| Helps with pagination. It indicates the offset to be applied to the set of elements. | [optional]

### Return type

[**\Zembra\Client\Model\InlineResponse20015**](../Model/InlineResponse20015.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **socialSubscriptionUidUidPatch**
> \Zembra\Client\Model\InlineResponse20017 socialSubscriptionUidUidPatch($internal_id, $uid)

Update an active social media subscription by UID

**Service**: `update-social-subscription-by-uid`    Please see the description for **[PATCH] /social/subscription/{network}/{resource}/{slug}/{content}**

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Zembra\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zembra\Client\Api\SocialMediaSubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$internal_id = "internal_id_example"; // string | 
$uid = "uid_example"; // string | The UID of the subscription that was returned at the time of creation. It persists over time and across accounts.

try {
    $result = $apiInstance->socialSubscriptionUidUidPatch($internal_id, $uid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SocialMediaSubscriptionsApi->socialSubscriptionUidUidPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **internal_id** | **string**|  |
 **uid** | **string**| The UID of the subscription that was returned at the time of creation. It persists over time and across accounts. |

### Return type

[**\Zembra\Client\Model\InlineResponse20017**](../Model/InlineResponse20017.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **socialSubscriptionsGet**
> \Zembra\Client\Model\InlineResponse20018 socialSubscriptionsGet($limit, $offset, $sort_by, $sort_direction, $internal_id, $slug, $network, $resource, $content)

Get the list of social media subscriptions

**Service**: `get-social-subscriptions`    Returns the list of social media subscriptions of the account. The result includes details about the subscription like requested time, internal ID, etc. The maximum number of returned subscriptions is 100 but you may use the `limit` and `offset` parameters for pagination.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Zembra\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zembra\Client\Api\SocialMediaSubscriptionsApi(
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
$slug = new \Zembra\Client\Model\SocialSlug(); // \Zembra\Client\Model\SocialSlug | Filter results to only subscriptions to resources with similar slug.
$network = new \Zembra\Client\Model\SocialNetwork(); // \Zembra\Client\Model\SocialNetwork | Returns subscriptions only from the requested network.
$resource = new \Zembra\Client\Model\Resource(); // \Zembra\Client\Model\Resource | Limits subscriptions to only those that match the selected resource type.
$content = new \Zembra\Client\Model\Content(); // \Zembra\Client\Model\Content | Limits subscriptions to only those that match the selected content type.

try {
    $result = $apiInstance->socialSubscriptionsGet($limit, $offset, $sort_by, $sort_direction, $internal_id, $slug, $network, $resource, $content);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SocialMediaSubscriptionsApi->socialSubscriptionsGet: ', $e->getMessage(), PHP_EOL;
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
 **slug** | [**\Zembra\Client\Model\SocialSlug**](../Model/.md)| Filter results to only subscriptions to resources with similar slug. | [optional]
 **network** | [**\Zembra\Client\Model\SocialNetwork**](../Model/.md)| Returns subscriptions only from the requested network. | [optional]
 **resource** | [**\Zembra\Client\Model\Resource**](../Model/.md)| Limits subscriptions to only those that match the selected resource type. | [optional]
 **content** | [**\Zembra\Client\Model\Content**](../Model/.md)| Limits subscriptions to only those that match the selected content type. | [optional]

### Return type

[**\Zembra\Client\Model\InlineResponse20018**](../Model/InlineResponse20018.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

