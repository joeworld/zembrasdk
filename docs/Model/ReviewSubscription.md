# ReviewSubscription

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**uid** | **string** | The unique ID of the subscription in our system. It is invariant to renewals and persists over time and across accounts. You can use this uid to retrieve reviews. | 
**uuid** | **string** | The unique ID of the current active subscription. A renewed subscription will have a new and different uuid. | 
**network** | [**\Zembra\Client\Model\ReviewNetwork**](ReviewNetwork.md) |  | 
**slug** | [**\Zembra\Client\Model\Slug**](Slug.md) |  | 
**internal_id** | **string** | Your application internal ID associated with this record. | 
**requested_at** | [**\DateTime**](\DateTime.md) | The time this active subscription was first requested or renewed. | 
**expires_at** | [**\DateTime**](\DateTime.md) | The time this active subscription expires or will be renewed. | 
**auto_renew** | **bool** | Controls if this subscription is set to automatically renew when it expires or not. | 
**include_raw_data** | **bool** | Describes the requested behavior of listeners to deliver payload to destination with or without review raw data. | [default to false]
**renewed** | **bool** | Indicates if this subscription has been automatically renewed from an expired one or not. | 
**url** | **string** | The direct URL to visualize the data from your account on https://my.zembratech.com/ | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

