# Zembra\Client\ReviewJobsApi

All URIs are relative to *https://api.zembra.io/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**reviewsJobNetworkPost**](ReviewJobsApi.md#reviewsjobnetworkpost) | **POST** /reviews/job/{network} | Create a new review job
[**reviewsJobUidGet**](ReviewJobsApi.md#reviewsjobuidget) | **GET** /reviews/job/{uid} | Get reviews of requested business from existing job by UID
[**reviewsJobsGet**](ReviewJobsApi.md#reviewsjobsget) | **GET** /reviews/jobs | Get the list of review jobs

# **reviewsJobNetworkPost**
> \Zembra\Client\Model\InlineResponse2011 reviewsJobNetworkPost($slug, $include_raw_data, $internal_id, $stream_size_limit, $network)

Create a new review job

**Service**: `create-reviews-job`    Creates a new job to pull review data from the requested review page without creating a subscription. Data retention is set to 5 days. Reviews are not maintained up to date. The payload will be identical to the origin at the time of request. This is a snapshot of the current state of the reviews at the time of request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Zembra\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zembra\Client\Api\ReviewJobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slug = "slug_example"; // string | 
$include_raw_data = true; // bool | 
$internal_id = "internal_id_example"; // string | 
$stream_size_limit = new \Zembra\Client\Model\null(); //  | 
$network = new \Zembra\Client\Model\ReviewNetwork(); // \Zembra\Client\Model\ReviewNetwork | Network this business page belongs to

try {
    $result = $apiInstance->reviewsJobNetworkPost($slug, $include_raw_data, $internal_id, $stream_size_limit, $network);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReviewJobsApi->reviewsJobNetworkPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slug** | **string**|  |
 **include_raw_data** | **bool**|  |
 **internal_id** | **string**|  |
 **stream_size_limit** | [****](../Model/.md)|  |
 **network** | [**\Zembra\Client\Model\ReviewNetwork**](../Model/.md)| Network this business page belongs to |

### Return type

[**\Zembra\Client\Model\InlineResponse2011**](../Model/InlineResponse2011.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reviewsJobUidGet**
> \Zembra\Client\Model\InlineResponse2006 reviewsJobUidGet($uid, $fields, $limit, $offset)

Get reviews of requested business from existing job by UID

**Service**: `get-reviews-job`    Returns the list of reviews that were collected as requested in the review job.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Zembra\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zembra\Client\Api\ReviewJobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uid = "uid_example"; // string | The UID of the job that was returned at the time of creating the job
$fields = array("fields_example"); // string[] | List of review fields to be returned
$limit = 1000; // int | Indicates the maximum number of reviews to be returned. If you change the default list of fields and omit the `limit` then the default limit will be applied.
$offset = 56; // int | Helps with pagination. It indicates the offset to be applied to the set of reviews.

try {
    $result = $apiInstance->reviewsJobUidGet($uid, $fields, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReviewJobsApi->reviewsJobUidGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uid** | **string**| The UID of the job that was returned at the time of creating the job |
 **fields** | [**string[]**](../Model/string.md)| List of review fields to be returned | [optional]
 **limit** | **int**| Indicates the maximum number of reviews to be returned. If you change the default list of fields and omit the &#x60;limit&#x60; then the default limit will be applied. | [optional] [default to 1000]
 **offset** | **int**| Helps with pagination. It indicates the offset to be applied to the set of reviews. | [optional]

### Return type

[**\Zembra\Client\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reviewsJobsGet**
> \Zembra\Client\Model\InlineResponse2007 reviewsJobsGet($limit, $offset, $sort_by, $sort_direction, $internal_id, $slug, $network)

Get the list of review jobs

**Service**: `get-reviews-jobs`    Returns the list of review jobs of the account. The result includes details about the job like requested time, internal ID, etc. The maximum number of returned jobs is 100 but you may use the `limit` and `offset` parameters for pagination.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Zembra\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zembra\Client\Api\ReviewJobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 100; // int | Maximum number of jobs to be returned. At most 100 jobs will be returned even if this parameter is set to a higher value.
$offset = 56; // int | Helps with pagination. It controls the offset to be applied to the set of jobs.
$sort_by = "timestamp"; // string | Indicates the desired sorting attribute.
$sort_direction = "DESC"; // string | Indicates the desired sorting direction.
$internal_id = "internal_id_example"; // string | Filter results to only jobs with similar internal ID. This is the ID you set on the job that identifies it with your application. Please see the description for `internalId` on **[POST] /reviews/subscription/{network}**.
$slug = new \Zembra\Client\Model\Slug(); // \Zembra\Client\Model\Slug | Filter results to only jobs with similar slug. Please see the description for `slug` on **[GET] /business/{network}**.
$network = new \Zembra\Client\Model\ReviewNetwork(); // \Zembra\Client\Model\ReviewNetwork | Returns jobs only from the requested network.

try {
    $result = $apiInstance->reviewsJobsGet($limit, $offset, $sort_by, $sort_direction, $internal_id, $slug, $network);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReviewJobsApi->reviewsJobsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Maximum number of jobs to be returned. At most 100 jobs will be returned even if this parameter is set to a higher value. | [optional] [default to 100]
 **offset** | **int**| Helps with pagination. It controls the offset to be applied to the set of jobs. | [optional]
 **sort_by** | **string**| Indicates the desired sorting attribute. | [optional] [default to timestamp]
 **sort_direction** | **string**| Indicates the desired sorting direction. | [optional] [default to DESC]
 **internal_id** | **string**| Filter results to only jobs with similar internal ID. This is the ID you set on the job that identifies it with your application. Please see the description for &#x60;internalId&#x60; on **[POST] /reviews/subscription/{network}**. | [optional]
 **slug** | [**\Zembra\Client\Model\Slug**](../Model/.md)| Filter results to only jobs with similar slug. Please see the description for &#x60;slug&#x60; on **[GET] /business/{network}**. | [optional]
 **network** | [**\Zembra\Client\Model\ReviewNetwork**](../Model/.md)| Returns jobs only from the requested network. | [optional]

### Return type

[**\Zembra\Client\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

