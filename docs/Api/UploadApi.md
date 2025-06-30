# Postmypost\RestSdk\UploadApi

All URIs are relative to https://api.postmypost.io/v4.1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**completeUpload()**](UploadApi.md#completeUpload) | **POST** /upload/complete | Complete file upload |
| [**initUpload()**](UploadApi.md#initUpload) | **POST** /upload/init | Initialize file upload |
| [**statusUpload()**](UploadApi.md#statusUpload) | **GET** /upload/status | Check file upload status |


## `completeUpload()`

```php
completeUpload($id): \Postmypost\RestSdk\Model\UploadComplete
```

Complete file upload

Completes the file upload process after the file has been successfully sent.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Postmypost\RestSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Postmypost\RestSdk\Api\UploadApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Upload ID obtained during initialization

try {
    $result = $apiInstance->completeUpload($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UploadApi->completeUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Upload ID obtained during initialization | |

### Return type

[**\Postmypost\RestSdk\Model\UploadComplete**](../Model/UploadComplete.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `initUpload()`

```php
initUpload($init_upload_request): \Postmypost\RestSdk\Model\UploadInit
```

Initialize file upload

Initializes the file upload process.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Postmypost\RestSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Postmypost\RestSdk\Api\UploadApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$init_upload_request = new \Postmypost\RestSdk\Model\InitUploadRequest(); // \Postmypost\RestSdk\Model\InitUploadRequest | Initializes the file upload process. Requires one of the following parameter combinations: - `project_id` and `url` - `project_id`, `name`, and `size`

try {
    $result = $apiInstance->initUpload($init_upload_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UploadApi->initUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **init_upload_request** | [**\Postmypost\RestSdk\Model\InitUploadRequest**](../Model/InitUploadRequest.md)| Initializes the file upload process. Requires one of the following parameter combinations: - &#x60;project_id&#x60; and &#x60;url&#x60; - &#x60;project_id&#x60;, &#x60;name&#x60;, and &#x60;size&#x60; | |

### Return type

[**\Postmypost\RestSdk\Model\UploadInit**](../Model/UploadInit.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `statusUpload()`

```php
statusUpload($id): \Postmypost\RestSdk\Model\UploadStatus
```

Check file upload status

Checks the processing status of an uploaded file.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Postmypost\RestSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Postmypost\RestSdk\Api\UploadApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Upload ID obtained during initialization

try {
    $result = $apiInstance->statusUpload($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UploadApi->statusUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Upload ID obtained during initialization | |

### Return type

[**\Postmypost\RestSdk\Model\UploadStatus**](../Model/UploadStatus.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
