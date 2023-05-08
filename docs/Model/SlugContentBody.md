# SlugContentBody

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**internal_id** | **string** | This is your application&#x27;s internal ID. It can help you identify the requested resource, particularly when you activate listeners and we send you a change notification. | [optional] 
**stream_size_limit** | **int** | Instructs the API to only collect up to this number of elements. For example, an Instagram post may have thousands of comments but you are only interested in the first 500. This will make the pulling process abort at the 500th element. | [optional] 
**stream_date_limit** | **int** | Instructs the API to only collect elements posted after and not older than this timestamp. For example, an Instagram post may have thousands of comments but you are only interested in those that were posted the last 24 hours. The pulling process will stop as soon as a collected comment is older than the given limit. All older comments are filtered out. The account is only charged for the eligible comments. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

