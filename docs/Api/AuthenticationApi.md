# Zembra\Client\AuthenticationApi

All URIs are relative to *https://api.zembra.io/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**tokenGet**](AuthenticationApi.md#tokenget) | **GET** /token | Refresh API token

# **tokenGet**
> \Zembra\Client\Model\ApiResponse tokenGet()

Refresh API token

**Service**: `refresh-token`    The API token never expires but you can renew it as needed. The API token is a 128-character string made of latin letters, both uppercase and lowercase, and digits. The API token is case-sensitive. API token should always be kept private and never shared with other third parties.    When hitting the sandbox, this action will only affect the sandbox token.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Zembra\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zembra\Client\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->tokenGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->tokenGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Zembra\Client\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

