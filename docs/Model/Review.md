# Review

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | ID of the review as it appears on the native site | [optional] 
**text** | **string** | Review plain text (no HTML) as posted by the author (in its original language). It can be null with some networks if no text was posted and only a rate. | [optional] 
**language** | **string** | The original language of the review. Made of 2 to 3 characters. Could vary for the same language, e.g. &#x60;en&#x60; and &#x60;eng&#x60; but does not vary per network. | [optional] 
**translation** | **string** | The english translation of the review if made available by the originating network. | [optional] 
**timestamp** | [**\DateTime**](\DateTime.md) | Date and time when the review was posted/published on the review site. Some networks do not offer granular precision and the timestamp might be rounded to the day. | [optional] 
**url** | **string** | Review URL that helps navigate straight to the review | [optional] 
**rating** | **float** | Posted rating. Can be null if it is a recommendation. | [optional] 
**recommendation** | **int** | Review recommendation: positive or negative. Can be null if it is a rated review. | [optional] 
**is_hidden** | **bool** | Indicates whether the review is kept hidden on the native site or not | [optional] [default to false]
**is_deleted** | **bool** | Indicates whether the review has been detected by the engine as missing or not | [optional] [default to false]
**author** | [**\Zembra\Client\Model\ReviewAuthor**](ReviewAuthor.md) |  | [optional] 
**photos** | [**\Zembra\Client\Model\ReviewPhoto[]**](ReviewPhoto.md) |  | [optional] 
**replies** | [**\Zembra\Client\Model\ReviewReply[]**](ReviewReply.md) |  | [optional] 
**edits** | [**\Zembra\Client\Model\ReviewEdits[]**](ReviewEdits.md) |  | [optional] 
**raw_data** | **object** | Returns raw data collected from the original network | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

