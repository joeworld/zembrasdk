# Zembra\Client\BatchApi

All URIs are relative to *https://api.zembra.io/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**batchBatchIdGet**](BatchApi.md#batchbatchidget) | **GET** /batch/{batchId} | Get a summary of the batch status
[**batchBatchIdRequestIndexGet**](BatchApi.md#batchbatchidrequestindexget) | **GET** /batch/{batchId}/{requestIndex} | Return a particular request from the batch
[**batchServiceSubServicePost**](BatchApi.md#batchservicesubservicepost) | **POST** /batch/{service}/{sub-service} | Submit multiple requests for the same service
[**batchesGet**](BatchApi.md#batchesget) | **GET** /batches | Returns the list of batches

# **batchBatchIdGet**
> \Zembra\Client\Model\InlineResponse200 batchBatchIdGet($batch_id)

Get a summary of the batch status

**Service**: `get-batch-status`    This endpoint will provide details about the batch like requested time, overall progress, list of completed requests, etc.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Zembra\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zembra\Client\Api\BatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$batch_id = "batch_id_example"; // string | The generated batchID that was returned by the API when the batch was submitted.

try {
    $result = $apiInstance->batchBatchIdGet($batch_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchApi->batchBatchIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **batch_id** | **string**| The generated batchID that was returned by the API when the batch was submitted. |

### Return type

[**\Zembra\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **batchBatchIdRequestIndexGet**
> \Zembra\Client\Model\InlineResponse2001 batchBatchIdRequestIndexGet($batch_id, $request_index)

Return a particular request from the batch

**Service**: `get-request-result`    Get the status and, if completed, the result of a request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Zembra\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zembra\Client\Api\BatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$batch_id = "batch_id_example"; // string | The generated batchID that was returned by the API when the batch was submitted.
$request_index = 56; // int | The index of the request from the originally submitted array. The index starts from 1 and can be at most 1000 where 1 stands for the first request.

try {
    $result = $apiInstance->batchBatchIdRequestIndexGet($batch_id, $request_index);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchApi->batchBatchIdRequestIndexGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **batch_id** | **string**| The generated batchID that was returned by the API when the batch was submitted. |
 **request_index** | **int**| The index of the request from the originally submitted array. The index starts from 1 and can be at most 1000 where 1 stands for the first request. |

### Return type

[**\Zembra\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **batchServiceSubServicePost**
> \Zembra\Client\Model\InlineResponse201 batchServiceSubServicePost($body, $service, $sub_service)

Submit multiple requests for the same service

**Service**: `batch-service-subService`    Instead of running parallel requests or looping over your records and submitting one request at a time, you can choose to submit up to 1,000 requests in bulk. The server will pre-validate the inputs and accept all valid requests from the batch.    Every request included in the batch will be processed and its result stored and if applicable delivered to your listeners.  You can always retrieve the output of each request individually.    To prevent congestion, you can only submit 1 batch per minute.   Same options from the original endpoint can be used. Example, for **[POST] /batch/business/details** your payload will look like this `[{\"network\": \"google\", \"slug\": \"my-business\"}]`.    Below is the mapping of batch endpoints to non-batch endpoints. :  | Batch Endpoint  | Original Endpoint | |-----------------|-------------------| | /batch/business/details | [GET] /business/{network} | | /batch/business/find  | [GET] /business/find  | | /batch/business/match | [GET] /business/match | | /batch/reviews/job  | [POST] /reviews/job/{network} | | /batch/reviews/subscription | [POST] /reviews/subscription/{network} | | /batch/social/details | [POST] /social/{network}/{resource}/{slug}  | | /batch/social/job | [POST] /social/job/{network}/{resource}/{slug}/{content}  | | /batch/social/subscription | [POST] /social/subscription/{network}/{resource}/{slug}/{content} |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Zembra\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zembra\Client\Api\BatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \Zembra\Client\Model\ServiceSubserviceBody()); // \Zembra\Client\Model\ServiceSubserviceBody[] | An array of raw request objects. Fields vary per requested service.
$service = "service_example"; // string | One of the major service categories.
$sub_service = "sub_service_example"; // string | The specific endpoint alias.

try {
    $result = $apiInstance->batchServiceSubServicePost($body, $service, $sub_service);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchApi->batchServiceSubServicePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Zembra\Client\Model\ServiceSubserviceBody[]**](../Model/ServiceSubserviceBody.md)| An array of raw request objects. Fields vary per requested service. |
 **service** | **string**| One of the major service categories. |
 **sub_service** | **string**| The specific endpoint alias. |

### Return type

[**\Zembra\Client\Model\InlineResponse201**](../Model/InlineResponse201.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **batchesGet**
> \Zembra\Client\Model\InlineResponse2002 batchesGet($limit, $offset, $sort_by, $sort_direction, $service, $sub_service, $status)

Returns the list of batches

**Service**: `get-batches`    Get the list of all the batches previously accepted.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Zembra\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zembra\Client\Api\BatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 100; // int | Maximum number of batches to be returned. At most 100 batches will be returned even if this parameter is set to a higher value.
$offset = 56; // int | Helps with pagination. It controls the offset to be applied to the set of batches.
$sort_by = "timestamp"; // string | Indicates the desired sorting attribute.
$sort_direction = "DESC"; // string | Indicates the desired sorting direction.
$service = "service_example"; // string | Filter results to only batches that match the requested service.
$sub_service = "sub_service_example"; // string | Filter results to only batches that match the request sub-service.
$status = "status_example"; // string | Filters by batch status.

try {
    $result = $apiInstance->batchesGet($limit, $offset, $sort_by, $sort_direction, $service, $sub_service, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchApi->batchesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Maximum number of batches to be returned. At most 100 batches will be returned even if this parameter is set to a higher value. | [optional] [default to 100]
 **offset** | **int**| Helps with pagination. It controls the offset to be applied to the set of batches. | [optional]
 **sort_by** | **string**| Indicates the desired sorting attribute. | [optional] [default to timestamp]
 **sort_direction** | **string**| Indicates the desired sorting direction. | [optional] [default to DESC]
 **service** | **string**| Filter results to only batches that match the requested service. | [optional]
 **sub_service** | **string**| Filter results to only batches that match the request sub-service. | [optional]
 **status** | **string**| Filters by batch status. | [optional]

### Return type

[**\Zembra\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

