# SocialSubscription

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**uid** | **string** | The uid associated with the subscription which uniquely identifies it in our platform. This can be used to retrieve results or to identify delivered payload to your selected destination. | [optional] 
**uuid** | **string** | The unique ID of the current active subscription. A renewed subscription will have a new and different uuid. | [optional] 
**network** | [**\Zembra\Client\Model\SocialNetwork**](SocialNetwork.md) |  | [optional] 
**slug** | [**\Zembra\Client\Model\SocialSlug**](SocialSlug.md) |  | [optional] 
**resource** | [**\Zembra\Client\Model\SocialResource**](SocialResource.md) |  | [optional] 
**content** | [**\Zembra\Client\Model\SocialContent**](SocialContent.md) |  | [optional] 
**internal_id** | **string** | Your application internal ID associated with this record. | [optional] 
**requested_at** | [**\DateTime**](\DateTime.md) | The time this subscription was requested in UTC. | [optional] 
**expires_at** | [**\DateTime**](\DateTime.md) | The time until which the data will remain queryable in our system and available for download. | [optional] 
**stream_size_limit** | **int** | The requested maximum number of elements to be streamed. | [optional] 
**stream_date_limit** | **int** | The requested timestamp threshold for the oldest element to be pulled. | [optional] 
**cost** | **int** | The number of credits charged for this subscription. | [optional] 
**active** | **bool** | True if the subscription is still active. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

