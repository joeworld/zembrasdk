# ReviewJob

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**network** | [**\Zembra\Client\Model\ReviewNetwork**](ReviewNetwork.md) |  | [optional] 
**slug** | [**\Zembra\Client\Model\Slug**](Slug.md) |  | [optional] 
**job_id** | **string** | The generated job ID that uniquely identifies the job in our platform. This is used to retrieve results or to identify delivered payload to your selected destination. | [optional] 
**internal_id** | **string** | Your application internal ID associated with this record. | [optional] 
**requested_at** | [**\DateTime**](\DateTime.md) | The time this job was requested in UTC. | [optional] 
**expires_at** | [**\DateTime**](\DateTime.md) | The time until which the data will remain queryable in our system and available for download. | [optional] 
**stream_size_limit** | **int** | The requested maximum number of reviews to be returned. | [optional] 
**include_raw_data** | **bool** | Describes the requested behavior of listeners to deliver payload to destination with or without review raw data. | [optional] [default to false]

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

