# Zembra\Client\BusinessApi

All URIs are relative to *https://api.zembra.io/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**businessFindGet**](BusinessApi.md#businessfindget) | **GET** /business/find | Find business by name and address across multiple networks
[**businessMatchGet**](BusinessApi.md#businessmatchget) | **GET** /business/match | Match the business across multiple networks
[**businessNetworkGet**](BusinessApi.md#businessnetworkget) | **GET** /business/{network} | Get business details

# **businessFindGet**
> \Zembra\Client\Model\InlineResponse2003 businessFindGet($name, $address, $networks, $fields)

Find business by name and address across multiple networks

**Service**: `find-review-pages`    Get the list of businesses, i.e. review pages, that match the search query from the given list of networks. The search query consists of the name of the business or its category, and optionally the address. If the business is found, the response contains a list of up to **10** businesses per network. You can also limit the list of fields to be returned. Data like images, exact address, review count, etc. might be missing on some networks. This service returns fewer details compared to querying business details which performs a more in-depth lookup.    Please note that networks **Expedia**, **Orbitz**, and **Travelocity** belong to the same group and use the same data and format. As a result, you might be getting data for *Expedia* showing URL on Orbitz but all info and reviews are valid and taken straight from the requested source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Zembra\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zembra\Client\Api\BusinessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = "name_example"; // string | Name of the business or in some cases the business category
$address = "address_example"; // string | One-line formatted address of the business. For some networks, the more precise is the address, the more accurate are the results. Nevertheless, in most of the cases the city is sufficient. The behavior and results are identical to running the same lookup command against the native site. Before questioning why no data is being returned by the API, please first confirm against the original platform.
$networks = array(new \Zembra\Client\Model\ReviewNetwork()); // \Zembra\Client\Model\ReviewNetwork[] | Optional field to restrict the search query to a limited set of networks. If omitted, the search covers all networks enabled for the account. Not all networks support this search feature. Your account will only be charged for supported networks.
$fields = array(new \Zembra\Client\Model\ReviewPageField()); // \Zembra\Client\Model\ReviewPageField[] | List of fields to be returned per business page

try {
    $result = $apiInstance->businessFindGet($name, $address, $networks, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessApi->businessFindGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Name of the business or in some cases the business category |
 **address** | **string**| One-line formatted address of the business. For some networks, the more precise is the address, the more accurate are the results. Nevertheless, in most of the cases the city is sufficient. The behavior and results are identical to running the same lookup command against the native site. Before questioning why no data is being returned by the API, please first confirm against the original platform. | [optional]
 **networks** | [**\Zembra\Client\Model\ReviewNetwork[]**](../Model/\Zembra\Client\Model\ReviewNetwork.md)| Optional field to restrict the search query to a limited set of networks. If omitted, the search covers all networks enabled for the account. Not all networks support this search feature. Your account will only be charged for supported networks. | [optional]
 **fields** | [**\Zembra\Client\Model\ReviewPageField[]**](../Model/\Zembra\Client\Model\ReviewPageField.md)| List of fields to be returned per business page | [optional]

### Return type

[**\Zembra\Client\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **businessMatchGet**
> \Zembra\Client\Model\InlineResponse2004 businessMatchGet($name, $address, $street, $city, $postal_code, $country, $region, $networks, $fields)

Match the business across multiple networks

**Service**: `match-business`    Using the business name and address, find the exact business profile page on the list of networks of your choice. If the business is found, this endpoint returns at most one review page per network representing the matching business page. Data and content are the same as returned by the **Find Business** endpoint.    This service is great for finding the exact pages of the same business on multiple platforms at once. The match is guaranteed to be precise. There could be some misses due to insufficient data to confirm the match.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Zembra\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zembra\Client\Api\BusinessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = "name_example"; // string | Name of the business, preferably as it appears on the review platform
$address = "address_example"; // string | One-line formatted address of the business. For some networks, the more precise is the address, the more accurate are the results. Nevertheless, in most of the cases the city is sufficient. Can be omitted if the user prefers to specify address components: `street`, `city`, `region`, `postalCode`, and `country`.
$street = "street_example"; // string | The street and street number of the business. Optionally, the unit/suite number can be appended. Required if parameter `address` is missing.
$city = "city_example"; // string | The city where the business is located. Required if parameter `address` is missing.
$postal_code = "postal_code_example"; // string | Postal code or zipcode of the business. Required if parameter `address` is missing.
$country = "country_example"; // string | The country where the business operates. Required if parameter `address` is missing.
$region = "region_example"; // string | The state, province, or any regional/political area that the city of the business belongs to.
$networks = array(new \Zembra\Client\Model\ReviewNetwork()); // \Zembra\Client\Model\ReviewNetwork[] | Optional field to restrict the search query to a limited set of networks. If omitted, the search covers all networks enabled for the account.
$fields = array(new \Zembra\Client\Model\ReviewPageField()); // \Zembra\Client\Model\ReviewPageField[] | List of fields to be returned per business page

try {
    $result = $apiInstance->businessMatchGet($name, $address, $street, $city, $postal_code, $country, $region, $networks, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessApi->businessMatchGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Name of the business, preferably as it appears on the review platform |
 **address** | **string**| One-line formatted address of the business. For some networks, the more precise is the address, the more accurate are the results. Nevertheless, in most of the cases the city is sufficient. Can be omitted if the user prefers to specify address components: &#x60;street&#x60;, &#x60;city&#x60;, &#x60;region&#x60;, &#x60;postalCode&#x60;, and &#x60;country&#x60;. |
 **street** | **string**| The street and street number of the business. Optionally, the unit/suite number can be appended. Required if parameter &#x60;address&#x60; is missing. |
 **city** | **string**| The city where the business is located. Required if parameter &#x60;address&#x60; is missing. |
 **postal_code** | **string**| Postal code or zipcode of the business. Required if parameter &#x60;address&#x60; is missing. |
 **country** | **string**| The country where the business operates. Required if parameter &#x60;address&#x60; is missing. |
 **region** | **string**| The state, province, or any regional/political area that the city of the business belongs to. | [optional]
 **networks** | [**\Zembra\Client\Model\ReviewNetwork[]**](../Model/\Zembra\Client\Model\ReviewNetwork.md)| Optional field to restrict the search query to a limited set of networks. If omitted, the search covers all networks enabled for the account. | [optional]
 **fields** | [**\Zembra\Client\Model\ReviewPageField[]**](../Model/\Zembra\Client\Model\ReviewPageField.md)| List of fields to be returned per business page | [optional]

### Return type

[**\Zembra\Client\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **businessNetworkGet**
> \Zembra\Client\Model\InlineResponse2005 businessNetworkGet($network, $slug, $fields)

Get business details

**Service**: `get-business-details`    Returns information about the business as presented on the requested network. On a few networks, data like exact address (Glassdoor) or images might be missing. The information returned by this endpoint is richer than data returned by the **Find Business** and **Match Business** endpoints.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Zembra\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zembra\Client\Api\BusinessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network = new \Zembra\Client\Model\ReviewNetwork(); // \Zembra\Client\Model\ReviewNetwork | Network the business page belongs to
$slug = new \Zembra\Client\Model\Slug(); // \Zembra\Client\Model\Slug | The business identifier as shown on the URL of the native site. It can be the full URL or a part of it. The slug pattern varies per network. Here is a list of acceptable slugs per network:     - **Angi**:     - ca/poway/crawl-space-and-attic-pro-reviews-9469089     - https://www.angi.com/companylist/us/ca/poway/crawl-space-and-attic-pro-reviews-9469089.htm   - **Apartment Guide**:     - 155467     - The-Village-Mission-Valley/155467     - apartments/California/San-Diego/The-Village-Mission-Valley/155467     - https://www.apartmentguide.com/apartments/California/San-Diego/The-Village-Mission-Valley/155467/   - **ApartmentRatings**:     - courts-at-preston-oaks_972788142275240     - https://www.apartmentratings.com/tx/dallas/courts-at-preston-oaks_972788142275240     - 972788142275240   - **Apartments**:     - 5jm0mwp     - overture-san-marcos-55-senior-housing-apa-san-marcos-ca/5jm0mwp     - https://www.apartments.com/overture-san-marcos-55-senior-housing-apa-san-marcos-ca/5jm0mwp   - **Better Business Bureau**:     - morgan-properties-0241-80016288     - https://www.bbb.org/us/pa/king-of-prussia/profile/property-management/morgan-properties-0241-80016288     - 0241-80016288   - **Booking**:     - hotel/us/polo-towers-suites     - attractions/us/prywkuaglxhb-las-vegas-strip-helicopter-ride-at-night     - https://www.booking.com/hotel/it/polo-towers-suites.it.html     - https://www.booking.com/attractions/us/prywkuaglxhb-las-vegas-strip-helicopter-ride-at-night.html   - **Carfax**:     - Reviews-Cronin-Chrysler-Dodge-Jeep-Ram-Lebanon-OH_P9E4IWXPNS     - P9E4IWXPNS     - https://www.carfax.com/Reviews-Cronin-Chrysler-Dodge-Jeep-Ram-Lebanon-OH_P9E4IWXPNS   - **Citysearch**:     - 44160554     - http://www.citysearch.com/profile/44160554/san_antonio_tx/fralo_s_art_of_pizza.html   - **Expedia**:     - Worcester-Hotels-Hilton-Garden-Inn-BostonMarlborough.h14833039.Hotel-Information     - https://www.expedia.com/Worcester-Hotels-Hilton-Garden-Inn-BostonMarlborough.h14833039.Hotel-Information     - Worcester-Hotels-Hilton-Garden-Inn-BostonMarlborough.h14833039     - h14833039     - 14833039   - **Facebook**:     - premiatofornocantoni     - 830214057037039     - https://www.facebook.com/premiatofornocantoni     - https://www.facebook.com/830214057037039     - https://www.facebook.com/pg/premiatofornocantoni   - **Foursquare**:     - 4a947bf6f964a520bf2120e3     - https://www.foursquare.com/v/bird-rock-coffee-roasters/4a947bf6f964a520bf2120e3     - https://www.foursquare.com/4a947bf6f964a520bf2120e3   - **Glassdoor**:     - Tower-Health-Reviews-E1833870     - https://www.glassdoor.com/Reviews/Tower-Health-Reviews-E1833870.htm     - https://www.glassdoor.com/Overview/Working-at-Tower-Health-EI_IE1833870.11,23.htm     - EI_IE1833870     - 1833870   - **Google**:     - 472717649119152494     - https://www.google.com/maps?cid=472717649119152494     - https://maps.google.com/maps?cid=472717649119152494     - ChIJx0JMBTFV2YARbgnOgjJujwY     - https://www.google.com/maps/place/The+Cheesecake+Factory/@32.76918,-117.1677887,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0x68f6e3282ce096e!8m2!3d32.76918!4d-117.1656   - **Grubhub**:     - 268858     - https://www.grubhub.com/restaurant/22-thai-cuisine-59-nassau-st-new-york/268858     - https://www.grubhub.com/restaurant/22-thai-cuisine-59-nassau-st-new-york/268858/reviews   - **Indeed**:     - Steadfast-Companies     - https://www.indeed.com/cmp/Steadfast-Companies     - https://www.indeed.com/cmp/Steadfast-Companies/reviews   - **Opentable**:     - r/the-rooftop-by-stk-san-diego     - https://www.opentable.com/r/the-rooftop-by-stk-san-diego     - https://www.opentable.com/bencotto-italian-kitchen     - bencotto-italian-kitchen     - https://www.opentable.com/restaurant/profile/1234567891234     - 1234567891234   - **Orbitz**:     - Worcester-Hotels-Hilton-Garden-Inn-BostonMarlborough.h14833039.Hotel-Information     - https://www.orbitz.com/Worcester-Hotels-Hilton-Garden-Inn-BostonMarlborough.h14833039.Hotel-Information     - Worcester-Hotels-Hilton-Garden-Inn-BostonMarlborough.h14833039     - h14833039     - 14833039   - **PagesJaunes**:     - 57672837     - https://www.pagesjaunes.fr/pros/57672837     - https://www.pagesjaunes.fr/pros/detail?bloc_id=51362276000001C0001&no_sequence=1&code_rubrique=30101400     - https://www.pagesjaunes.fr/pros/detail?bloc_id=FCP57672837CLIENTDCESS000003C0001%26no_sequence=1%26code_rubrique=54053000   - **Travelocity**:     - Worcester-Hotels-Hilton-Garden-Inn-BostonMarlborough.h14833039.Hotel-Information     - https://www.travelocity.com/Worcester-Hotels-Hilton-Garden-Inn-BostonMarlborough.h14833039.Hotel-Information     - Worcester-Hotels-Hilton-Garden-Inn-BostonMarlborough.h14833039     - h14833039     - 14833039   - **Treatwell**:     - https://www.treatwell.fr/salon/creepy-barber-the-home-show-studio-prive     - treatwell.fr/salon/creepy-barber-the-home-show-studio-prive     - https://www.treatwell.co.uk/salon/creepy-barber-the-home-show-studio-prive   - **Tripadvisor**:     - g53957-d4838236     - https://www.tripadvisor.com/Restaurant_Review-g53957-d4838236-Reviews-Top_of_the_80_s-West_Hazleton_Luzerne_County_Pocono_Mountains_Region_Pennsylvania.html     - Restaurant_Review-g53957-d4838236-Reviews-Top_of_the_80_s-West_Hazleton_Luzerne_County_Pocono_Mountains_Region_Pennsylvania.html     - d4838236     - 4838236   - **Trustpilot**:     - trustpilot.com     - https://www.trustpilot.fr/review/trustpilot.com     - https://fr.trustpilot.com/review/trustpilot.com     - trustpilot.com/review/www.trustpilot.com   - **Yellowpages**:     - the-auto-doc-8519899     - https://www.yellowpages.com/houston-tx/mip/the-auto-doc-8519899     - houston-tx/mip/the-auto-doc-8519899   - **Yelp**:     - the-cheesecake-factory-san-diego     - https://www.yelp.com/biz/the-cheesecake-factory-san-diego   - **Zomato**:     - san-diego/buon-appetito-little-italy     - https://www.zomato.com/san-diego/buon-appetito-little-italy/reviews     - https://www.zomato.com/tr/san-diego/buon-appetito-little-italy/reviews
$fields = array(new \Zembra\Client\Model\ReviewPageField()); // \Zembra\Client\Model\ReviewPageField[] | Sub-list of fields to be returned. If omitted, all the fields are returned.

try {
    $result = $apiInstance->businessNetworkGet($network, $slug, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessApi->businessNetworkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **network** | [**\Zembra\Client\Model\ReviewNetwork**](../Model/.md)| Network the business page belongs to |
 **slug** | [**\Zembra\Client\Model\Slug**](../Model/.md)| The business identifier as shown on the URL of the native site. It can be the full URL or a part of it. The slug pattern varies per network. Here is a list of acceptable slugs per network:     - **Angi**:     - ca/poway/crawl-space-and-attic-pro-reviews-9469089     - https://www.angi.com/companylist/us/ca/poway/crawl-space-and-attic-pro-reviews-9469089.htm   - **Apartment Guide**:     - 155467     - The-Village-Mission-Valley/155467     - apartments/California/San-Diego/The-Village-Mission-Valley/155467     - https://www.apartmentguide.com/apartments/California/San-Diego/The-Village-Mission-Valley/155467/   - **ApartmentRatings**:     - courts-at-preston-oaks_972788142275240     - https://www.apartmentratings.com/tx/dallas/courts-at-preston-oaks_972788142275240     - 972788142275240   - **Apartments**:     - 5jm0mwp     - overture-san-marcos-55-senior-housing-apa-san-marcos-ca/5jm0mwp     - https://www.apartments.com/overture-san-marcos-55-senior-housing-apa-san-marcos-ca/5jm0mwp   - **Better Business Bureau**:     - morgan-properties-0241-80016288     - https://www.bbb.org/us/pa/king-of-prussia/profile/property-management/morgan-properties-0241-80016288     - 0241-80016288   - **Booking**:     - hotel/us/polo-towers-suites     - attractions/us/prywkuaglxhb-las-vegas-strip-helicopter-ride-at-night     - https://www.booking.com/hotel/it/polo-towers-suites.it.html     - https://www.booking.com/attractions/us/prywkuaglxhb-las-vegas-strip-helicopter-ride-at-night.html   - **Carfax**:     - Reviews-Cronin-Chrysler-Dodge-Jeep-Ram-Lebanon-OH_P9E4IWXPNS     - P9E4IWXPNS     - https://www.carfax.com/Reviews-Cronin-Chrysler-Dodge-Jeep-Ram-Lebanon-OH_P9E4IWXPNS   - **Citysearch**:     - 44160554     - http://www.citysearch.com/profile/44160554/san_antonio_tx/fralo_s_art_of_pizza.html   - **Expedia**:     - Worcester-Hotels-Hilton-Garden-Inn-BostonMarlborough.h14833039.Hotel-Information     - https://www.expedia.com/Worcester-Hotels-Hilton-Garden-Inn-BostonMarlborough.h14833039.Hotel-Information     - Worcester-Hotels-Hilton-Garden-Inn-BostonMarlborough.h14833039     - h14833039     - 14833039   - **Facebook**:     - premiatofornocantoni     - 830214057037039     - https://www.facebook.com/premiatofornocantoni     - https://www.facebook.com/830214057037039     - https://www.facebook.com/pg/premiatofornocantoni   - **Foursquare**:     - 4a947bf6f964a520bf2120e3     - https://www.foursquare.com/v/bird-rock-coffee-roasters/4a947bf6f964a520bf2120e3     - https://www.foursquare.com/4a947bf6f964a520bf2120e3   - **Glassdoor**:     - Tower-Health-Reviews-E1833870     - https://www.glassdoor.com/Reviews/Tower-Health-Reviews-E1833870.htm     - https://www.glassdoor.com/Overview/Working-at-Tower-Health-EI_IE1833870.11,23.htm     - EI_IE1833870     - 1833870   - **Google**:     - 472717649119152494     - https://www.google.com/maps?cid&#x3D;472717649119152494     - https://maps.google.com/maps?cid&#x3D;472717649119152494     - ChIJx0JMBTFV2YARbgnOgjJujwY     - https://www.google.com/maps/place/The+Cheesecake+Factory/@32.76918,-117.1677887,17z/data&#x3D;!3m1!4b1!4m5!3m4!1s0x0:0x68f6e3282ce096e!8m2!3d32.76918!4d-117.1656   - **Grubhub**:     - 268858     - https://www.grubhub.com/restaurant/22-thai-cuisine-59-nassau-st-new-york/268858     - https://www.grubhub.com/restaurant/22-thai-cuisine-59-nassau-st-new-york/268858/reviews   - **Indeed**:     - Steadfast-Companies     - https://www.indeed.com/cmp/Steadfast-Companies     - https://www.indeed.com/cmp/Steadfast-Companies/reviews   - **Opentable**:     - r/the-rooftop-by-stk-san-diego     - https://www.opentable.com/r/the-rooftop-by-stk-san-diego     - https://www.opentable.com/bencotto-italian-kitchen     - bencotto-italian-kitchen     - https://www.opentable.com/restaurant/profile/1234567891234     - 1234567891234   - **Orbitz**:     - Worcester-Hotels-Hilton-Garden-Inn-BostonMarlborough.h14833039.Hotel-Information     - https://www.orbitz.com/Worcester-Hotels-Hilton-Garden-Inn-BostonMarlborough.h14833039.Hotel-Information     - Worcester-Hotels-Hilton-Garden-Inn-BostonMarlborough.h14833039     - h14833039     - 14833039   - **PagesJaunes**:     - 57672837     - https://www.pagesjaunes.fr/pros/57672837     - https://www.pagesjaunes.fr/pros/detail?bloc_id&#x3D;51362276000001C0001&amp;no_sequence&#x3D;1&amp;code_rubrique&#x3D;30101400     - https://www.pagesjaunes.fr/pros/detail?bloc_id&#x3D;FCP57672837CLIENTDCESS000003C0001%26no_sequence&#x3D;1%26code_rubrique&#x3D;54053000   - **Travelocity**:     - Worcester-Hotels-Hilton-Garden-Inn-BostonMarlborough.h14833039.Hotel-Information     - https://www.travelocity.com/Worcester-Hotels-Hilton-Garden-Inn-BostonMarlborough.h14833039.Hotel-Information     - Worcester-Hotels-Hilton-Garden-Inn-BostonMarlborough.h14833039     - h14833039     - 14833039   - **Treatwell**:     - https://www.treatwell.fr/salon/creepy-barber-the-home-show-studio-prive     - treatwell.fr/salon/creepy-barber-the-home-show-studio-prive     - https://www.treatwell.co.uk/salon/creepy-barber-the-home-show-studio-prive   - **Tripadvisor**:     - g53957-d4838236     - https://www.tripadvisor.com/Restaurant_Review-g53957-d4838236-Reviews-Top_of_the_80_s-West_Hazleton_Luzerne_County_Pocono_Mountains_Region_Pennsylvania.html     - Restaurant_Review-g53957-d4838236-Reviews-Top_of_the_80_s-West_Hazleton_Luzerne_County_Pocono_Mountains_Region_Pennsylvania.html     - d4838236     - 4838236   - **Trustpilot**:     - trustpilot.com     - https://www.trustpilot.fr/review/trustpilot.com     - https://fr.trustpilot.com/review/trustpilot.com     - trustpilot.com/review/www.trustpilot.com   - **Yellowpages**:     - the-auto-doc-8519899     - https://www.yellowpages.com/houston-tx/mip/the-auto-doc-8519899     - houston-tx/mip/the-auto-doc-8519899   - **Yelp**:     - the-cheesecake-factory-san-diego     - https://www.yelp.com/biz/the-cheesecake-factory-san-diego   - **Zomato**:     - san-diego/buon-appetito-little-italy     - https://www.zomato.com/san-diego/buon-appetito-little-italy/reviews     - https://www.zomato.com/tr/san-diego/buon-appetito-little-italy/reviews |
 **fields** | [**\Zembra\Client\Model\ReviewPageField[]**](../Model/\Zembra\Client\Model\ReviewPageField.md)| Sub-list of fields to be returned. If omitted, all the fields are returned. | [optional]

### Return type

[**\Zembra\Client\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

