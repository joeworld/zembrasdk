# SocialJob

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**job_id** | **string** | The generated job ID that uniquely identifies the job in our platform. This is used to retrieve results or to identify delivered payload to your selected destination. | [optional] 
**network** | [**\Zembra\Client\Model\SocialNetwork**](SocialNetwork.md) |  | [optional] 
**slug** | [**\Zembra\Client\Model\SocialSlug**](SocialSlug.md) |  | [optional] 
**resource** | [**\Zembra\Client\Model\Resource**](Resource.md) |  | [optional] 
**content** | [**\Zembra\Client\Model\Content**](Content.md) |  | [optional] 
**internal_id** | **string** | Your application internal ID associated with this record. | [optional] 
**requested_at** | [**\DateTime**](\DateTime.md) | The time this job was requested in UTC. | [optional] 
**expires_at** | [**\DateTime**](\DateTime.md) | The time until which the data will remain queryable in our system and available for download. | [optional] 
**stream_size_limit** | **int** | The requested maximum number of elements to be streamed. | [optional] 
**stream_date_limit** | **int** | The requested timestamp threshold for the oldest element to be pulled. | [optional] 
**cost** | **int** | The number of credits charged for this job. | [optional] 
**active** | **bool** | True if the job is still within the data retention window. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

