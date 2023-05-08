# Zembra\Client\ReviewsApi

All URIs are relative to *https://api.zembra.io/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**reviewsJobsGet**](ReviewsApi.md#reviewsjobsget) | **GET** /reviews/jobs | Get the list of available review jobs
[**reviewsJobsJobIdGet**](ReviewsApi.md#reviewsjobsjobidget) | **GET** /reviews/jobs/{jobId} | Get reviews for requested business from existing job
[**reviewsJobsNetworkPost**](ReviewsApi.md#reviewsjobsnetworkpost) | **POST** /reviews/jobs/{network} | Create a new review job
[**reviewsSubscriptionsGet**](ReviewsApi.md#reviewssubscriptionsget) | **GET** /reviews/subscriptions | Get the list of active review subscriptions
[**reviewsSubscriptionsNetworkDelete**](ReviewsApi.md#reviewssubscriptionsnetworkdelete) | **DELETE** /reviews/subscriptions/{network} | Cancel auto-renew on a review page subscription
[**reviewsSubscriptionsNetworkGet**](ReviewsApi.md#reviewssubscriptionsnetworkget) | **GET** /reviews/subscriptions/{network} | Get reviews for requested business from existing subscription or create new subscription

# **reviewsJobsGet**
> \Zembra\Client\Model\InlineResponse2006 reviewsJobsGet($limit, $offset, $sort_by, $sort_direction, $internal_id, $slug, $network, $include_page)

Get the list of available review jobs

Returns the list of active review subscriptions of the account. The result includes details about the subscription like requested time, internal ID, etc. But it also may include updated details about the requested review page if requested.   The maximum number of returned subscriptions is 100 but you may use the **limit** and **offset** parameters for pagination.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Zembra\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zembra\Client\Api\ReviewsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Maximum number of jobs to be returned. At most 100 jobs will be returned even if this parameter is set to a higher value.
$offset = 56; // int | Helps with pagination. It indicates the offset to be applied to the set of jobs.
$sort_by = "timestamp"; // string | Indicates the desired sorting attribute
$sort_direction = "DESC"; // string | Indicates the desired sorting direction
$internal_id = "internal_id_example"; // string | Filter results to only jobs with similar internal ID. This is the ID you set on the job that identifies it with your application. Please see the description for **internalId** on **_/reviews/subscriptions/{network}**.
$slug = new \Zembra\Client\Model\Slug(); // \Zembra\Client\Model\Slug | Filter results to only jobs for review pages with similar slug. Please see the description for **slug** on **business/{network}/{slug}**.
$network = new \Zembra\Client\Model\ReviewNetwork(); // \Zembra\Client\Model\ReviewNetwork | Returns jobs for review pages only from the requested network.
$include_page = true; // bool | If omitted or set to **false**, the job is returned as a '#/components/schemas/ReviewPageJob' object. If set to include the review page, the returned object is of type '#/components/schemas/ReviewPage' and the job is set on field **job**.

try {
    $result = $apiInstance->reviewsJobsGet($limit, $offset, $sort_by, $sort_direction, $internal_id, $slug, $network, $include_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReviewsApi->reviewsJobsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Maximum number of jobs to be returned. At most 100 jobs will be returned even if this parameter is set to a higher value. | [optional]
 **offset** | **int**| Helps with pagination. It indicates the offset to be applied to the set of jobs. | [optional]
 **sort_by** | **string**| Indicates the desired sorting attribute | [optional] [default to timestamp]
 **sort_direction** | **string**| Indicates the desired sorting direction | [optional] [default to DESC]
 **internal_id** | **string**| Filter results to only jobs with similar internal ID. This is the ID you set on the job that identifies it with your application. Please see the description for **internalId** on **_/reviews/subscriptions/{network}**. | [optional]
 **slug** | [**\Zembra\Client\Model\Slug**](../Model/.md)| Filter results to only jobs for review pages with similar slug. Please see the description for **slug** on **business/{network}/{slug}**. | [optional]
 **network** | [**\Zembra\Client\Model\ReviewNetwork**](../Model/.md)| Returns jobs for review pages only from the requested network. | [optional]
 **include_page** | **bool**| If omitted or set to **false**, the job is returned as a &#x27;#/components/schemas/ReviewPageJob&#x27; object. If set to include the review page, the returned object is of type &#x27;#/components/schemas/ReviewPage&#x27; and the job is set on field **job**. | [optional]

### Return type

[**\Zembra\Client\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reviewsJobsJobIdGet**
> \Zembra\Client\Model\InlineResponse2003 reviewsJobsJobIdGet($job_id, $limit, $offset, $include_raw_data)

Get reviews for requested business from existing job

Please read the description from **reviews/subscriptions/{network} **. Contrary to subscriptions, jobs are only created explicitly through post requests are retrieved using job IDs and not the page identifiers like slugs.          The maximum number of returned reviews depends on the value set on the **streamSizeLimit** field at the time the job was requested, which cannot change unless a new job is created.          Reviews are always sorted by timestamp in descending order.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Zembra\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zembra\Client\Api\ReviewsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$job_id = "job_id_example"; // string | The generated job ID that was returned by the API when the job was created.
$limit = 56; // int | Indicates the maximum number of reviews to be returned
$offset = 56; // int | Helps with pagination. It indicates the offset to be applied to the set of reviews.
$include_raw_data = false; // bool | Please see description for **includeRawData** on **reviews/subscriptions/{network}**.

try {
    $result = $apiInstance->reviewsJobsJobIdGet($job_id, $limit, $offset, $include_raw_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReviewsApi->reviewsJobsJobIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **job_id** | **string**| The generated job ID that was returned by the API when the job was created. |
 **limit** | **int**| Indicates the maximum number of reviews to be returned | [optional]
 **offset** | **int**| Helps with pagination. It indicates the offset to be applied to the set of reviews. | [optional]
 **include_raw_data** | **bool**| Please see description for **includeRawData** on **reviews/subscriptions/{network}**. | [optional] [default to false]

### Return type

[**\Zembra\Client\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reviewsJobsNetworkPost**
> \Zembra\Client\Model\InlineResponse2011 reviewsJobsNetworkPost($network, $slug, $stream_size_limit, $include_raw_data, $internal_id)

Create a new review job

Create a new job to pull review data from requested review page without creating a subscription. Data retention is set to 5 days. Reviews are not maintained current. The payload will be identical to the origin at the time of request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Zembra\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zembra\Client\Api\ReviewsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network = new \Zembra\Client\Model\ReviewNetwork(); // \Zembra\Client\Model\ReviewNetwork | Network this business page belongs to
$slug = new \Zembra\Client\Model\Slug(); // \Zembra\Client\Model\Slug | Please see the description for **slug** on **business/{network}/{slug}**
$stream_size_limit = 56; // int | Indicates the maximum number of reviews to be retrieved from the original website. A minimum of 25 reviews to be returned is enforced. This field controls the charges applied to the job. If 100 reviews are requested, a maximum of 100 most recent reviews will be returned even if the page has more than 100 reviews. The account will be charged for no more than 100 reviews. If the page has less than the requested limit, even if less than 25, the account is only charged for the number of returned reviews. If this parameter is omitted, all the reviews found on the review page will be returned and the account will be charged for all returned reviews.
$include_raw_data = false; // bool | You can request to include the original data collected from the native site. The raw data may include additional information that is not parsed by default by the API. Example of raw data can be user email address, or number of followers, etc. When setting this flag to true, the review page subscription is updated. As a consequence, if you happen to have listeners enabled, e.g. HTTP webhook where you receive updates for a review page, the payload will include raw data. Including raw data may drive the size of the data to be considerably large. Some servers may reject POST requests with large payload.
$internal_id = "internal_id_example"; // string | Please see description for **internalId on **_/reviews/subscriptions/{network}**.

try {
    $result = $apiInstance->reviewsJobsNetworkPost($network, $slug, $stream_size_limit, $include_raw_data, $internal_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReviewsApi->reviewsJobsNetworkPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **network** | [**\Zembra\Client\Model\ReviewNetwork**](../Model/.md)| Network this business page belongs to |
 **slug** | [**\Zembra\Client\Model\Slug**](../Model/.md)| Please see the description for **slug** on **business/{network}/{slug}** |
 **stream_size_limit** | **int**| Indicates the maximum number of reviews to be retrieved from the original website. A minimum of 25 reviews to be returned is enforced. This field controls the charges applied to the job. If 100 reviews are requested, a maximum of 100 most recent reviews will be returned even if the page has more than 100 reviews. The account will be charged for no more than 100 reviews. If the page has less than the requested limit, even if less than 25, the account is only charged for the number of returned reviews. If this parameter is omitted, all the reviews found on the review page will be returned and the account will be charged for all returned reviews. | [optional]
 **include_raw_data** | **bool**| You can request to include the original data collected from the native site. The raw data may include additional information that is not parsed by default by the API. Example of raw data can be user email address, or number of followers, etc. When setting this flag to true, the review page subscription is updated. As a consequence, if you happen to have listeners enabled, e.g. HTTP webhook where you receive updates for a review page, the payload will include raw data. Including raw data may drive the size of the data to be considerably large. Some servers may reject POST requests with large payload. | [optional] [default to false]
 **internal_id** | **string**| Please see description for **internalId on **_/reviews/subscriptions/{network}**. | [optional]

### Return type

[**\Zembra\Client\Model\InlineResponse2011**](../Model/InlineResponse2011.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reviewsSubscriptionsGet**
> \Zembra\Client\Model\InlineResponse2005 reviewsSubscriptionsGet($limit, $offset, $sort_by, $sort_direction, $internal_id, $slug, $network, $include_page)

Get the list of active review subscriptions

Returns the list of active review subscriptions of the account. The result includes details about the subscription like requested time, internal ID, etc. But it also may include updated details about the requested review page if requested.   The maximum number of returned subscriptions is 100 but you may use the **limit** and **offset** parameters for pagination.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Zembra\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zembra\Client\Api\ReviewsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Maximum number of subscriptions to be returned. At most 100 subscriptions will be returned even if this parameter is set to a higher value.
$offset = 56; // int | Helps with pagination. It indicates the offset to be applied to the set of subscriptions.
$sort_by = "timestamp"; // string | Indicates the desired sorting attribute
$sort_direction = "DESC"; // string | Indicates the desired sorting direction
$internal_id = "internal_id_example"; // string | Filter results to only subscriptions with similar internal ID. This is the ID you set on the subscription that identifies it with your application. Please see the description for **internalId** on **_/reviews/subscriptions/{network}**.
$slug = new \Zembra\Client\Model\Slug(); // \Zembra\Client\Model\Slug | Filter results to only subscriptions to review pages with similar slug. Please see the description for **slug** on **business/{network}/{slug}**.
$network = new \Zembra\Client\Model\ReviewNetwork(); // \Zembra\Client\Model\ReviewNetwork | Returns subscriptions to review pages only from the requested network.
$include_page = true; // bool | If omitted or set to **false**, the subscription is returned as a '#/components/schemas/ReviewPageSubscription' object. If set to include the review page, the returned object is of type '#/components/schemas/ReviewPage' and the subscription is set on field **subscription**.

try {
    $result = $apiInstance->reviewsSubscriptionsGet($limit, $offset, $sort_by, $sort_direction, $internal_id, $slug, $network, $include_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReviewsApi->reviewsSubscriptionsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Maximum number of subscriptions to be returned. At most 100 subscriptions will be returned even if this parameter is set to a higher value. | [optional]
 **offset** | **int**| Helps with pagination. It indicates the offset to be applied to the set of subscriptions. | [optional]
 **sort_by** | **string**| Indicates the desired sorting attribute | [optional] [default to timestamp]
 **sort_direction** | **string**| Indicates the desired sorting direction | [optional] [default to DESC]
 **internal_id** | **string**| Filter results to only subscriptions with similar internal ID. This is the ID you set on the subscription that identifies it with your application. Please see the description for **internalId** on **_/reviews/subscriptions/{network}**. | [optional]
 **slug** | [**\Zembra\Client\Model\Slug**](../Model/.md)| Filter results to only subscriptions to review pages with similar slug. Please see the description for **slug** on **business/{network}/{slug}**. | [optional]
 **network** | [**\Zembra\Client\Model\ReviewNetwork**](../Model/.md)| Returns subscriptions to review pages only from the requested network. | [optional]
 **include_page** | **bool**| If omitted or set to **false**, the subscription is returned as a &#x27;#/components/schemas/ReviewPageSubscription&#x27; object. If set to include the review page, the returned object is of type &#x27;#/components/schemas/ReviewPage&#x27; and the subscription is set on field **subscription**. | [optional]

### Return type

[**\Zembra\Client\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reviewsSubscriptionsNetworkDelete**
> \Zembra\Client\Model\InlineResponse2004 reviewsSubscriptionsNetworkDelete($network, $slug)

Cancel auto-renew on a review page subscription

Sets the auo-renew field of a subscription a review page to false to avoid accruing charges at the term of the current subscription due to lost of interest. If you're not subscribed to this review page then this query has no effect. Cancelling auto-renew does not affect your subscription. If you have listeners configured, you will continue to receive notifications for this review page until the current subscription expires.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Zembra\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zembra\Client\Api\ReviewsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network = new \Zembra\Client\Model\ReviewNetwork(); // \Zembra\Client\Model\ReviewNetwork | Network the business page belongs to
$slug = new \Zembra\Client\Model\Slug(); // \Zembra\Client\Model\Slug | Please see the description for **slug** on **business/{network}/{slug}**

try {
    $result = $apiInstance->reviewsSubscriptionsNetworkDelete($network, $slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReviewsApi->reviewsSubscriptionsNetworkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **network** | [**\Zembra\Client\Model\ReviewNetwork**](../Model/.md)| Network the business page belongs to |
 **slug** | [**\Zembra\Client\Model\Slug**](../Model/.md)| Please see the description for **slug** on **business/{network}/{slug}** |

### Return type

[**\Zembra\Client\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reviewsSubscriptionsNetworkGet**
> \Zembra\Client\Model\InlineResponse2003 reviewsSubscriptionsNetworkGet($network, $slug, $fields, $has_photos, $has_replies, $has_edits, $is_hidden, $is_not_hidden, $is_recommended, $is_not_recommended, $max_rating, $min_rating, $posted_before, $posted_after, $include_deleted, $sort_by, $sort_direction, $limit, $offset, $auto_renew, $include_raw_data, $internal_id)

Get reviews for requested business from existing subscription or create new subscription

Get the list of reviews for the requested business along with a summary of the review page including the review count, global rating, and the **lastCrawled** timestamp that represents the date and time the review page was last updated.    If this endpoint is hit for the first time for a given business then the HTTP response code is **201 Created**. It means that we received your order and we started processing it right away. The response includes the business details but not the reviews. It takes about 50 seconds for an average page (~300 reviews) to be ready for delivery. Occasionally, the wait time may increase to 2 minutes and very rarely higher based on the **selected network**, the **number of reviews**, and the status of the **review platform servers**.   When you retry, you may get a **200 OK** response which means that the data is ready and included in the payload, or a **425 Too Early** that indicates that the job is still in progress. The **425** response may include a subset of reviews that were already processed.    By calling this endpoint, a subscription to the requested review page is automatically created for you and set to expire in exactly 30 days from the instant we receive the query. Any additional call to this resource does not generate extra cost. The cost is based on the number of reviews **ONLY** and it gets charged only once per subscription. Requested reviews are maintained up to date and we monitor any changes introduced on the original network. Data is kept current with a maximum of a 6 hour-gap with the source.  The list of requested fields can be adjusted and filters might be applied to customize the returned data. Some fields may not be supported on some networks. They are either set to **null** or omitted.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Zembra\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zembra\Client\Api\ReviewsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network = new \Zembra\Client\Model\ReviewNetwork(); // \Zembra\Client\Model\ReviewNetwork | Network this business page belongs to
$slug = new \Zembra\Client\Model\Slug(); // \Zembra\Client\Model\Slug | Please see the description for **slug** on **business/{network}/{slug}**
$fields = array("fields_example"); // string[] | List of review fields to be returned
$has_photos = true; // bool | If requested, only reviews with photos are returned
$has_replies = true; // bool | If requested, only reviews with replies from the business owner are returned
$has_edits = true; // bool | If requested, only reviews with edits are returned. Edits can be reported by the review platform, like with Yelp, or have been detected by our engines.
$is_hidden = true; // bool | If requested, only reviews that are kept hidden on the review platfom returned, e.g. non-recommended reviews on Yelp
$is_not_hidden = true; // bool | If requested, only reviews that are active and visible on the review platfom returned
$is_recommended = true; // bool | If requested, only reviews considered as positive recommendation (recommended) are returned
$is_not_recommended = true; // bool | If requested, only reviews considered as negative recommendation (not recommended) are returned
$max_rating = 3.4; // float | Limits the highest rating of the returned reviews
$min_rating = 3.4; // float | Limits the lowest rating of the returned reviews
$posted_before = new \DateTime("2013-10-20"); // \DateTime | Setting this parameter restricts the result to contain only reviews that were posted before the specified date. The input must respect this format **Y-m-d H:i:s** or any derivative starting from the left, e.g. **Y** or **Y-m**, etc.
$posted_after = new \DateTime("2013-10-20"); // \DateTime | Setting this parameter restricts the result to contain only reviews that were posted after the specified date. The input must respect this format **Y-m-d H:i:s** or any derivative starting from the left, e.g. **Y** or **Y-m**, etc.
$include_deleted = true; // bool | If requested, the result includes reviews that are detected by the engine as deleted, i.e. reviews that were live at some point then detected missing.
$sort_by = "timestamp"; // string | Indicates the desired sorting attribute
$sort_direction = "DESC"; // string | Indicates the desired sorting direction
$limit = 56; // int | Indicates the maximum number of reviews to be returned
$offset = 56; // int | Helps with pagination. It indicates the offset to be applied to the set of reviews.
$auto_renew = true; // bool | When a subscription to a review page is created, it is set to expire after 30 days from the moment it was first requested. If you wish to continuously receive updates and never miss a review, you can instruct Zembra to automatically renew the subscription when it expires. This results in a new charge for the review page. If insufficient funds found in the account, the subscription is canceled and it does not restart even if you reload your balance. If we fail to renew the subscription, we send you an email notification if not unsusbcribed from that email list, and in-app notification. Canceled subscriptions have to be restarted the same way they were first created.   Omitting this fied keeps it unchanged. If you want to cancel auto-renew, simply set this field to false. Cancelling auto-renew does not affect your current subscription.   A subscription is by default set *NOT* to auto-renew because the user's consent is required. However, once the subscription is set to auto-renew, you have to be explicitly cancel the subscription to disable auto-renew by setting this field to **false** or using the API verb **delete** without parameters.
$include_raw_data = false; // bool | You can request to include the original data collected from the native site. The raw data may include additional information that is not parsed by default by the API. Example of raw data can be user email address, or number of followers, etc. When setting this flag to true, the review page subscription is updated. As a consequence, if you happen to have listeners enabled, e.g. HTTP webhook where you receive updates for a review page, the payload will include raw data. Including raw data may drive the size of the data to be considerably large. Some servers may reject POST requests with large payload.
$internal_id = "internal_id_example"; // string | This is your application's internal ID. It can help you identify the review page, particularly when you activate listeners and we send you a change notification. You can include it in all requests or just in the very first one. Omitting this field keeps the saved value unchanged. If you wish to delete your saved internalId, simply set it to empty string.

try {
    $result = $apiInstance->reviewsSubscriptionsNetworkGet($network, $slug, $fields, $has_photos, $has_replies, $has_edits, $is_hidden, $is_not_hidden, $is_recommended, $is_not_recommended, $max_rating, $min_rating, $posted_before, $posted_after, $include_deleted, $sort_by, $sort_direction, $limit, $offset, $auto_renew, $include_raw_data, $internal_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReviewsApi->reviewsSubscriptionsNetworkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **network** | [**\Zembra\Client\Model\ReviewNetwork**](../Model/.md)| Network this business page belongs to |
 **slug** | [**\Zembra\Client\Model\Slug**](../Model/.md)| Please see the description for **slug** on **business/{network}/{slug}** |
 **fields** | [**string[]**](../Model/string.md)| List of review fields to be returned | [optional]
 **has_photos** | **bool**| If requested, only reviews with photos are returned | [optional]
 **has_replies** | **bool**| If requested, only reviews with replies from the business owner are returned | [optional]
 **has_edits** | **bool**| If requested, only reviews with edits are returned. Edits can be reported by the review platform, like with Yelp, or have been detected by our engines. | [optional]
 **is_hidden** | **bool**| If requested, only reviews that are kept hidden on the review platfom returned, e.g. non-recommended reviews on Yelp | [optional]
 **is_not_hidden** | **bool**| If requested, only reviews that are active and visible on the review platfom returned | [optional]
 **is_recommended** | **bool**| If requested, only reviews considered as positive recommendation (recommended) are returned | [optional]
 **is_not_recommended** | **bool**| If requested, only reviews considered as negative recommendation (not recommended) are returned | [optional]
 **max_rating** | **float**| Limits the highest rating of the returned reviews | [optional]
 **min_rating** | **float**| Limits the lowest rating of the returned reviews | [optional]
 **posted_before** | **\DateTime**| Setting this parameter restricts the result to contain only reviews that were posted before the specified date. The input must respect this format **Y-m-d H:i:s** or any derivative starting from the left, e.g. **Y** or **Y-m**, etc. | [optional]
 **posted_after** | **\DateTime**| Setting this parameter restricts the result to contain only reviews that were posted after the specified date. The input must respect this format **Y-m-d H:i:s** or any derivative starting from the left, e.g. **Y** or **Y-m**, etc. | [optional]
 **include_deleted** | **bool**| If requested, the result includes reviews that are detected by the engine as deleted, i.e. reviews that were live at some point then detected missing. | [optional]
 **sort_by** | **string**| Indicates the desired sorting attribute | [optional] [default to timestamp]
 **sort_direction** | **string**| Indicates the desired sorting direction | [optional] [default to DESC]
 **limit** | **int**| Indicates the maximum number of reviews to be returned | [optional]
 **offset** | **int**| Helps with pagination. It indicates the offset to be applied to the set of reviews. | [optional]
 **auto_renew** | **bool**| When a subscription to a review page is created, it is set to expire after 30 days from the moment it was first requested. If you wish to continuously receive updates and never miss a review, you can instruct Zembra to automatically renew the subscription when it expires. This results in a new charge for the review page. If insufficient funds found in the account, the subscription is canceled and it does not restart even if you reload your balance. If we fail to renew the subscription, we send you an email notification if not unsusbcribed from that email list, and in-app notification. Canceled subscriptions have to be restarted the same way they were first created.   Omitting this fied keeps it unchanged. If you want to cancel auto-renew, simply set this field to false. Cancelling auto-renew does not affect your current subscription.   A subscription is by default set *NOT* to auto-renew because the user&#x27;s consent is required. However, once the subscription is set to auto-renew, you have to be explicitly cancel the subscription to disable auto-renew by setting this field to **false** or using the API verb **delete** without parameters. | [optional]
 **include_raw_data** | **bool**| You can request to include the original data collected from the native site. The raw data may include additional information that is not parsed by default by the API. Example of raw data can be user email address, or number of followers, etc. When setting this flag to true, the review page subscription is updated. As a consequence, if you happen to have listeners enabled, e.g. HTTP webhook where you receive updates for a review page, the payload will include raw data. Including raw data may drive the size of the data to be considerably large. Some servers may reject POST requests with large payload. | [optional] [default to false]
 **internal_id** | **string**| This is your application&#x27;s internal ID. It can help you identify the review page, particularly when you activate listeners and we send you a change notification. You can include it in all requests or just in the very first one. Omitting this field keeps the saved value unchanged. If you wish to delete your saved internalId, simply set it to empty string. | [optional]

### Return type

[**\Zembra\Client\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

