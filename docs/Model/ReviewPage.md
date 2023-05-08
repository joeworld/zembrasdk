# ReviewPage

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**address** | [**\Zembra\Client\Model\Address**](Address.md) |  | [optional] 
**aliases** | **string[]** | List of other slugs that the business might be known by or identified with | [optional] 
**categories** | **string[]** | List of categories as defined by the review platform. Not available on all networks. | [optional] 
**formatted_address** | **string** | One-line formatted address. The address might be missing on some networks for a limited list of businesses. | [optional] 
**global_rating** | **float** | Business global rating as posted on the native site. Set to &#x60;null&#x60; if the business has 0 reviews. | [optional] 
**id** | **string** | Business identifier as it appears on the native site. For some networks it is the same as the slug. | [optional] 
**last_crawled** | [**\DateTime**](\DateTime.md) | Date and time of the last time the engine crawled/scraped the review page successfully. The format is &#x60;Y-m-d H:i:s&#x60; and the timezone is UTC. | [optional] 
**name** | **string** | Name of the business as it appears on the native site | [optional] 
**network** | [**\Zembra\Client\Model\ReviewNetwork**](ReviewNetwork.md) |  | [optional] 
**phone** | **string** | Phone number of the business as it appears on the native site | [optional] 
**photos** | **string[]** | List of URLs of photos from the image gallery of the business on the native site | [optional] 
**price_range** | **string** | Price range attributed to the business by the native site. On most networks,  it consists of a series of $ signs indicating how relatively expensive the business is compared to similar businesses on a scale of 1 to 5. For other networks, the price range can be a whole string with cost in USD. | [optional] 
**profile_image** | **string** | URL to the business avatar on the native site | [optional] 
**raw_data** | **object** | Returns raw data collected from the original network | [optional] 
**review_count** | [**\Zembra\Client\Model\ReviewPageReviewCount**](ReviewPageReviewCount.md) |  | [optional] 
**slug** | [**\Zembra\Client\Model\Slug**](Slug.md) |  | [optional] 
**url** | **string** | URL to the business on the native site | [optional] 
**link** | **string** | URL to the review page on Zembra | [optional] 
**website** | **string** | Website of the business as it appears on the native site | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

