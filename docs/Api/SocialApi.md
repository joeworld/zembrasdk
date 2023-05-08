# Zembra\Client\SocialApi

All URIs are relative to *https://api.zembra.io/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**socialNetworkContentSlugGet**](SocialApi.md#socialnetworkcontentslugget) | **GET** /social/{network}/{content}/{slug} | Get details about content
[**socialNetworkContentSlugSubContentGet**](SocialApi.md#socialnetworkcontentslugsubcontentget) | **GET** /social/{network}/{content}/{slug}/{subContent} | Stream social content

# **socialNetworkContentSlugGet**
> \Zembra\Client\Model\InlineResponse2007 socialNetworkContentSlugGet($network, $content, $slug)

Get details about content

Get details about social content, e.g. Instagram post, TikTok video, LinkedIn post. The response will include meaningful fields at the root level, i.e. for Instagram post you can find the slug, id, text, username, etc. The rest of the data can be found under field raw_data which includes the original payload collected from the source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Zembra\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zembra\Client\Api\SocialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network = new \Zembra\Client\Model\SocialNetwork(); // \Zembra\Client\Model\SocialNetwork | Target social network
$content = new \Zembra\Client\Model\Content(); // \Zembra\Client\Model\Content | Depending on the selected network, this will define what object you are trying to access details.
$slug = new \Zembra\Client\Model\Slug(); // \Zembra\Client\Model\Slug | For this endpoint, the slug can only be the short version from the URI. Full URLs are not accepted.

try {
    $result = $apiInstance->socialNetworkContentSlugGet($network, $content, $slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SocialApi->socialNetworkContentSlugGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **network** | [**\Zembra\Client\Model\SocialNetwork**](../Model/.md)| Target social network |
 **content** | [**\Zembra\Client\Model\Content**](../Model/.md)| Depending on the selected network, this will define what object you are trying to access details. |
 **slug** | [**\Zembra\Client\Model\Slug**](../Model/.md)| For this endpoint, the slug can only be the short version from the URI. Full URLs are not accepted. |

### Return type

[**\Zembra\Client\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **socialNetworkContentSlugSubContentGet**
> \Zembra\Client\Model\InlineResponse2008 socialNetworkContentSlugSubContentGet($network, $content, $slug, $sub_content, $stream_size_limit, $stream_date_limit, $internal_id, $limit)

Stream social content

Pull all social content for a given resource, e.g. stream all Instagram post comments, all TikTok video comments, or all LinkedIn company posts. The response will include details about the original source and the list of all publicly available sub-contents.   If this endpoint is hit for the first time for a given resource, the returned HTTP response code is **201 Created**. It means that we received your order and we started processing it right away. The initial call will only include the details about the target resource but none of the sub-contents. If you have webhooks or listeners enabled, you will start receiving data in chunks right away. Contrary to reviews where the data is received as a summary or in a form of digests including all the reviews, with social streams the data is forwarded to your servers on the fly in chunks of 20 to 50 sub-contents at a time. There is no daily digests or summaries.    Social networks operate differently compared to review networks. They apply to mechanism of chaining eve when using API integration. As a consequence, when requesting a stream of a large size, you may experience delay due to serial data sourcing.   Data retention is set to 5 days as the day this documentation is generated. During the data retention period, you can query the API as many times as you want to request the data without being charged.   We will monitor the requested resource for updates with a minimum rest time of 3 hours.   Sub-contents are always returned sorted by timestamp descending.   If streamSizeLimit and/or streamDateLimit parameters are set, the streaming will be stopped as soon as one of the conditions is met. If none of these parameters is present, the streaming will continue until all content is downloaded. Omitting both parameters may cause your account to accrue large charges due to busy sources.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Zembra\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zembra\Client\Api\SocialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network = new \Zembra\Client\Model\SocialNetwork(); // \Zembra\Client\Model\SocialNetwork | Target social network
$content = new \Zembra\Client\Model\Content(); // \Zembra\Client\Model\Content | Depending on the selected network, this will define what object you are trying to stream data from.
$slug = new \Zembra\Client\Model\Slug(); // \Zembra\Client\Model\Slug | For this endpoint, the slug can only be the short version from the URI. Full URLs are not accepted.
$sub_content = new \Zembra\Client\Model\SubContent(); // \Zembra\Client\Model\SubContent | Depending on the selected network, this will define what data you want to stream. This is needed because under one source there could be more than one sub-content to be streamed. Example, for Instagram users, you may want to pull all comments or all reels.
$stream_size_limit = 56; // int | Instructs the API to only collect up to this number of sub-contents. For example, an Instagram post may have thousands of comments but you are only interested in the first 500. This will make the pulling process abort at the 500th element. Nevertheless, and because we continue to monitor the resource for new elements, during the subscription period you will continue to accrue charges for the new content. With the same example, if the same post receives 100 new posts, we will send you the data and charge your account for the new 100 posts.
$stream_date_limit = 56; // int | Instructs the API to only collect sub-contents posted after and not older than this timestamp. For example, an Instagram post may have thousands of comments but you are only interested in those that were posted the last 24 hours. The pulling process will stop as soon as the older comments are collected. Monitoring will continue for new comments and will impact the credits balance. The account is only charged for eligible comments. The format must be UNIX timestamp in seconds. The maximum acceptable value is the equivalent of 5 minutes from current UTC timestamp.
$internal_id = "internal_id_example"; // string | This is your application's internal ID. It can help you identify the resource in your database, particularly when you activate listeners and we send you a webhook call. You can include it in all requests or just in the very first one. Omitting this field keeps the saved value unchanged. If you wish to delete your saved internalId, simply set it to empty string.
$limit = 56; // int | Indicates the maximum number of sub-contents to be returned

try {
    $result = $apiInstance->socialNetworkContentSlugSubContentGet($network, $content, $slug, $sub_content, $stream_size_limit, $stream_date_limit, $internal_id, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SocialApi->socialNetworkContentSlugSubContentGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **network** | [**\Zembra\Client\Model\SocialNetwork**](../Model/.md)| Target social network |
 **content** | [**\Zembra\Client\Model\Content**](../Model/.md)| Depending on the selected network, this will define what object you are trying to stream data from. |
 **slug** | [**\Zembra\Client\Model\Slug**](../Model/.md)| For this endpoint, the slug can only be the short version from the URI. Full URLs are not accepted. |
 **sub_content** | [**\Zembra\Client\Model\SubContent**](../Model/.md)| Depending on the selected network, this will define what data you want to stream. This is needed because under one source there could be more than one sub-content to be streamed. Example, for Instagram users, you may want to pull all comments or all reels. |
 **stream_size_limit** | **int**| Instructs the API to only collect up to this number of sub-contents. For example, an Instagram post may have thousands of comments but you are only interested in the first 500. This will make the pulling process abort at the 500th element. Nevertheless, and because we continue to monitor the resource for new elements, during the subscription period you will continue to accrue charges for the new content. With the same example, if the same post receives 100 new posts, we will send you the data and charge your account for the new 100 posts. | [optional]
 **stream_date_limit** | **int**| Instructs the API to only collect sub-contents posted after and not older than this timestamp. For example, an Instagram post may have thousands of comments but you are only interested in those that were posted the last 24 hours. The pulling process will stop as soon as the older comments are collected. Monitoring will continue for new comments and will impact the credits balance. The account is only charged for eligible comments. The format must be UNIX timestamp in seconds. The maximum acceptable value is the equivalent of 5 minutes from current UTC timestamp. | [optional]
 **internal_id** | **string**| This is your application&#x27;s internal ID. It can help you identify the resource in your database, particularly when you activate listeners and we send you a webhook call. You can include it in all requests or just in the very first one. Omitting this field keeps the saved value unchanged. If you wish to delete your saved internalId, simply set it to empty string. | [optional]
 **limit** | **int**| Indicates the maximum number of sub-contents to be returned | [optional]

### Return type

[**\Zembra\Client\Model\InlineResponse2008**](../Model/InlineResponse2008.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

