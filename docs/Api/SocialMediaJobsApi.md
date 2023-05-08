# Zembra\Client\SocialMediaJobsApi

All URIs are relative to *https://api.zembra.io/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**socialJobNetworkResourceSlugContentPost**](SocialMediaJobsApi.md#socialjobnetworkresourceslugcontentpost) | **POST** /social/job/{network}/{resource}/{slug}/{content} | Create a social media job
[**socialJobUidGet**](SocialMediaJobsApi.md#socialjobuidget) | **GET** /social/job/{uid} | Get stream data of requested resource from existing job by UID
[**socialJobsGet**](SocialMediaJobsApi.md#socialjobsget) | **GET** /social/jobs | Get the list of social media jobs

# **socialJobNetworkResourceSlugContentPost**
> \Zembra\Client\Model\InlineResponse2013 socialJobNetworkResourceSlugContentPost($internal_id, $stream_size_limit, $stream_date_limit, $network, $resource, $slug, $content)

Create a social media job

**Service**: `create-social-job`    Creates a new job to stream data from the requested social media resource. It could be the comments list of an Instagram post or something similar. Data retention is set to 5 days. The data is not maintained up to date. The payload will be identical to the origin at the time of request. This is a snapshot of the current state of the requested resource.    If streamSizeLimit and/or streamDateLimit parameters are set, the streaming will be stopped as soon as one of the conditions is met. If none of these parameters is present, the streaming will continue until all content is downloaded. Omitting both parameters may cause your account to accrue large charges with busy sources.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Zembra\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zembra\Client\Api\SocialMediaJobsApi(
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
    $result = $apiInstance->socialJobNetworkResourceSlugContentPost($internal_id, $stream_size_limit, $stream_date_limit, $network, $resource, $slug, $content);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SocialMediaJobsApi->socialJobNetworkResourceSlugContentPost: ', $e->getMessage(), PHP_EOL;
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

[**\Zembra\Client\Model\InlineResponse2013**](../Model/InlineResponse2013.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **socialJobUidGet**
> \Zembra\Client\Model\InlineResponse20013 socialJobUidGet($uid, $limit, $offset)

Get stream data of requested resource from existing job by UID

**Service**: `get-social-job`    Returns the list of elements (posts, comments, etc.) that were collected as requested in the job.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Zembra\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zembra\Client\Api\SocialMediaJobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uid = "uid_example"; // string | The UID of the job that was returned at the time of creating the job
$limit = 1000; // int | Indicates the maximum number of elements to be returned. The default limit will be applied if omitted.
$offset = 56; // int | Helps with pagination. It indicates the offset to be applied to the set of elements.

try {
    $result = $apiInstance->socialJobUidGet($uid, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SocialMediaJobsApi->socialJobUidGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uid** | **string**| The UID of the job that was returned at the time of creating the job |
 **limit** | **int**| Indicates the maximum number of elements to be returned. The default limit will be applied if omitted. | [optional] [default to 1000]
 **offset** | **int**| Helps with pagination. It indicates the offset to be applied to the set of elements. | [optional]

### Return type

[**\Zembra\Client\Model\InlineResponse20013**](../Model/InlineResponse20013.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **socialJobsGet**
> \Zembra\Client\Model\InlineResponse20014 socialJobsGet($limit, $offset, $sort_by, $sort_direction, $internal_id, $slug, $network, $resource, $content)

Get the list of social media jobs

**Service**: `get-social-jobs`    Returns the list of social media jobs of the account. The result includes details about the job like requested time, internal ID, etc. The maximum number of returned jobs is 100 but you may use the `limit` and `offset` parameters for pagination.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Zembra\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zembra\Client\Api\SocialMediaJobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 100; // int | Maximum number of jobs to be returned. At most 100 jobs will be returned even if this parameter is set to a higher value.
$offset = 56; // int | Helps with pagination. It controls the offset to be applied to the set of jobs.
$sort_by = "timestamp"; // string | Indicates the desired sorting attribute
$sort_direction = "DESC"; // string | Indicates the desired sorting direction.
$internal_id = "internal_id_example"; // string | Filter results to only jobs with similar internal ID. This is the ID you set on the job that identifies it with your application. Please see the description for `internalId` on **[GET] /social/{network}/{resource}/{slug}**.
$slug = new \Zembra\Client\Model\SocialSlug(); // \Zembra\Client\Model\SocialSlug | Filter results to only jobs with similar slug. Please see the description for `slug` on **[GET] /social/{network}/{resource}/{slug}**.
$network = new \Zembra\Client\Model\SocialNetwork(); // \Zembra\Client\Model\SocialNetwork | Returns jobs only from the requested network.
$resource = new \Zembra\Client\Model\Resource(); // \Zembra\Client\Model\Resource | Limits jobs to only those that match the selected resource type.
$content = new \Zembra\Client\Model\Content(); // \Zembra\Client\Model\Content | Limits jobs to only those that match the selected content type.

try {
    $result = $apiInstance->socialJobsGet($limit, $offset, $sort_by, $sort_direction, $internal_id, $slug, $network, $resource, $content);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SocialMediaJobsApi->socialJobsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Maximum number of jobs to be returned. At most 100 jobs will be returned even if this parameter is set to a higher value. | [optional] [default to 100]
 **offset** | **int**| Helps with pagination. It controls the offset to be applied to the set of jobs. | [optional]
 **sort_by** | **string**| Indicates the desired sorting attribute | [optional] [default to timestamp]
 **sort_direction** | **string**| Indicates the desired sorting direction. | [optional] [default to DESC]
 **internal_id** | **string**| Filter results to only jobs with similar internal ID. This is the ID you set on the job that identifies it with your application. Please see the description for &#x60;internalId&#x60; on **[GET] /social/{network}/{resource}/{slug}**. | [optional]
 **slug** | [**\Zembra\Client\Model\SocialSlug**](../Model/.md)| Filter results to only jobs with similar slug. Please see the description for &#x60;slug&#x60; on **[GET] /social/{network}/{resource}/{slug}**. | [optional]
 **network** | [**\Zembra\Client\Model\SocialNetwork**](../Model/.md)| Returns jobs only from the requested network. | [optional]
 **resource** | [**\Zembra\Client\Model\Resource**](../Model/.md)| Limits jobs to only those that match the selected resource type. | [optional]
 **content** | [**\Zembra\Client\Model\Content**](../Model/.md)| Limits jobs to only those that match the selected content type. | [optional]

### Return type

[**\Zembra\Client\Model\InlineResponse20014**](../Model/InlineResponse20014.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

