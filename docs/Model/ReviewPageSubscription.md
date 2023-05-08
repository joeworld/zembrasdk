# ReviewPageSubscription

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**network** | [**\Zembra\Client\Model\ReviewNetwork**](ReviewNetwork.md) |  | [optional] 
**slug** | [**\Zembra\Client\Model\Slug**](Slug.md) |  | [optional] 
**internal_id** | **string** | Your application internal ID associated with this record. | [optional] 
**requested_at** | [**\DateTime**](\DateTime.md) | The time this active subscription was first requested or renewed. | [optional] 
**expires_at** | [**\DateTime**](\DateTime.md) | The time this active subscription expires or will be renewed. | [optional] 
**auto_renew** | **bool** | Tells if this subscription is set to automatically renew when it expires or not. | [optional] 
**include_raw_data** | **bool** | Describes the requested behavior of listeners to deliver payload to destination with or without review raw data. | [optional] 
**renewed** | **bool** | Indicates if this subscription has been automatically renewed from an expired one or not.. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

