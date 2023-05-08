# Zembra\Client\SocialMediaDetailsApi

All URIs are relative to *https://api.zembra.io/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**socialNetworkResourceSlugGet**](SocialMediaDetailsApi.md#socialnetworkresourceslugget) | **GET** /social/{network}/{resource}/{slug} | Get details about a social media resource

# **socialNetworkResourceSlugGet**
> \Zembra\Client\Model\InlineResponse20012 socialNetworkResourceSlugGet($network, $resource, $slug)

Get details about a social media resource

**Service**: `get-social-details`    Returns details about social content like an Instagram post, TikTok video, LinkedIn post, etc. The response will include quasi-standard format across networks in addition to the original `rawData` collected from the source. Examples of collected data from an Instagram post are the slug, id, text, username, number of comments, number of likes, etc.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Zembra\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zembra\Client\Api\SocialMediaDetailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network = new \Zembra\Client\Model\SocialNetwork(); // \Zembra\Client\Model\SocialNetwork | Target social network
$resource = new \Zembra\Client\Model\Resource(); // \Zembra\Client\Model\Resource | Depending on the selected network, this will define what object you are trying to access details.    List of available resources varies by network:   - **Facebook**:   - page   - post - **Instagram**:   - hashtag   - post   - user - **LinkedIn**:   - company   - keyword   - profile   - post - **Reddit**:   - keyword   - post   - subreddit   - user - **TokTok**:   - hashtag   - user   - video
$slug = new \Zembra\Client\Model\SocialSlug(); // \Zembra\Client\Model\SocialSlug | Unique resource identifier. Full URLs are not accepted. Varies by network. Here are a few examples per resource:   - **Facebook**:   - Page: Presidence.tn   - Post: S:_I1391675561076747:3140064409571178 - **Instagram**:   - Hashtag: coupleprayer   - Post: CFzAp7DASJ0   - User: soumaya_belkouchi - **LinkedIn**:   - Company: zembra   - Keyword: san+diego   - Profile: bakayoko   - Post: urn:li:ugcPost:6971444261015724033 - **Reddit**:   - Keyword: sandiego   - Post: 12mizot   - Subreddit: Damnthatsinteresting   - User: coastalJuncture - **TokTok**:   - Hashtag: healthy   - User: justqueen1988   - Video: 7114961878434041094

try {
    $result = $apiInstance->socialNetworkResourceSlugGet($network, $resource, $slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SocialMediaDetailsApi->socialNetworkResourceSlugGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **network** | [**\Zembra\Client\Model\SocialNetwork**](../Model/.md)| Target social network |
 **resource** | [**\Zembra\Client\Model\Resource**](../Model/.md)| Depending on the selected network, this will define what object you are trying to access details.    List of available resources varies by network:   - **Facebook**:   - page   - post - **Instagram**:   - hashtag   - post   - user - **LinkedIn**:   - company   - keyword   - profile   - post - **Reddit**:   - keyword   - post   - subreddit   - user - **TokTok**:   - hashtag   - user   - video |
 **slug** | [**\Zembra\Client\Model\SocialSlug**](../Model/.md)| Unique resource identifier. Full URLs are not accepted. Varies by network. Here are a few examples per resource:   - **Facebook**:   - Page: Presidence.tn   - Post: S:_I1391675561076747:3140064409571178 - **Instagram**:   - Hashtag: coupleprayer   - Post: CFzAp7DASJ0   - User: soumaya_belkouchi - **LinkedIn**:   - Company: zembra   - Keyword: san+diego   - Profile: bakayoko   - Post: urn:li:ugcPost:6971444261015724033 - **Reddit**:   - Keyword: sandiego   - Post: 12mizot   - Subreddit: Damnthatsinteresting   - User: coastalJuncture - **TokTok**:   - Hashtag: healthy   - User: justqueen1988   - Video: 7114961878434041094 |

### Return type

[**\Zembra\Client\Model\InlineResponse20012**](../Model/InlineResponse20012.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

