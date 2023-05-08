# ReviewEdits

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Review edit ID. If it is missing from the native site then by default it is set to the ID of the review. | [optional] 
**timestamp** | [**\DateTime**](\DateTime.md) | Date and time this version of the review was posted/published | 
**text** | **string** | Review text before being edited to its current version. Can be null in case of a recommendation. | [optional] 
**language** | **string** | The original language of the review. Made of 2 to 3 characters. Could vary for the same language, e.g. &#x60;en&#x60; and &#x60;eng&#x60; but does not vary per network. | [optional] 
**translation** | **string** | The english translation of the review if made available by the originating network. | [optional] 
**rating** | **float** | Review rating before being edited to its current version. Can be null in case of a recommendation | [optional] 
**recommendation** | **int** | Review recommendation before being edited to its current version. Can be null in case of a rated review | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

