# JobNetworkBody

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**slug** | **string** | Please see the description for &#x60;slug&#x60; on **[GET] /business/{network}** | 
**include_raw_data** | **bool** | This boolean option controls whether we should include the raw data in the payload that we deliver to your webhook or not. The raw data may include additional information that is not parsed by default by the API in the standard format that applies to all networks. Examples of raw data can be reviews rating breakdown, or number of followers, etc. Including raw data may drive the size of the data to become considerably large. Some servers may reject POST requests with large payloads over 2MB.    The value of this option can be updated at a later time. | [optional] [default to false]
**internal_id** | **string** | This is your application&#x27;s internal ID. It can help you identify the review page, particularly when you activate listeners and we send you a change notification. | [optional] 
**stream_size_limit** | [****](.md) | Indicates the maximum number of reviews to be retrieved from the original website. A minimum of 25 reviews to be returned is enforced. This field controls the charges applied to the job. If 100 reviews are requested, a maximum of 100 most recent reviews will be returned even if the page has more than 100 reviews. The account will be charged for no more than 100 reviews. If the page has less than the requested limit, even if less than 25, the account is only charged for the number of returned reviews. If this parameter is omitted, all the reviews found on the review page will be returned and the account will be charged for all returned reviews. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

