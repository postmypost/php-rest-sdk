# Postmypost\RestSdk\ChannelsApi

All URIs are relative to https://api.postmypost.io/v4.1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getChannels()**](ChannelsApi.md#getChannels) | **GET** /channels | Get list of channels |


## `getChannels()`

```php
getChannels($sort, $page, $per_page): \Postmypost\RestSdk\Model\ChannelsResponse
```

Get list of channels

Retrieve a list of all available channels in the system.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Postmypost\RestSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Postmypost\RestSdk\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sort = 'sort_example'; // string | List sorting parameter. Format: `sort=field` — ascending by field, `sort=-field` — descending by field. Multiple fields can be specified separated by a comma: `sort=field,-another_field`.
$page = 1; // int | Page number (starts from 1).
$per_page = 20; // int | Number of items per page (maximum 50).

try {
    $result = $apiInstance->getChannels($sort, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->getChannels: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sort** | **string**| List sorting parameter. Format: &#x60;sort&#x3D;field&#x60; — ascending by field, &#x60;sort&#x3D;-field&#x60; — descending by field. Multiple fields can be specified separated by a comma: &#x60;sort&#x3D;field,-another_field&#x60;. | [optional] |
| **page** | **int**| Page number (starts from 1). | [optional] [default to 1] |
| **per_page** | **int**| Number of items per page (maximum 50). | [optional] [default to 20] |

### Return type

[**\Postmypost\RestSdk\Model\ChannelsResponse**](../Model/ChannelsResponse.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
