# Postmypost\RestSdk\AnalyticsApi

All URIs are relative to https://api.postmypost.io/v4.1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAnalyticsAccounts()**](AnalyticsApi.md#getAnalyticsAccounts) | **GET** /analytics/accounts | Get account analytics |
| [**getAnalyticsPublications()**](AnalyticsApi.md#getAnalyticsPublications) | **GET** /analytics/publications | Get publications analytics |


## `getAnalyticsAccounts()`

```php
getAnalyticsAccounts($project_id, $account_id, $date_from, $date_to, $metrics): \Postmypost\RestSdk\Model\AccountAnalyticsResponse
```

Get account analytics

Retrieve account metrics (e.g., number of followers) for a specified period.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Postmypost\RestSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Postmypost\RestSdk\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 56; // int | Project ID
$account_id = 'account_id_example'; // string | Account ID
$date_from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Start date of the period (YYYY-MM-DD)
$date_to = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | End date of the period (YYYY-MM-DD)
$metrics = 'metrics_example'; // string | Comma-separated list of metrics (e.g., followers,subscribed)

try {
    $result = $apiInstance->getAnalyticsAccounts($project_id, $account_id, $date_from, $date_to, $metrics);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->getAnalyticsAccounts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID | |
| **account_id** | **string**| Account ID | |
| **date_from** | **\DateTime**| Start date of the period (YYYY-MM-DD) | |
| **date_to** | **\DateTime**| End date of the period (YYYY-MM-DD) | |
| **metrics** | **string**| Comma-separated list of metrics (e.g., followers,subscribed) | |

### Return type

[**\Postmypost\RestSdk\Model\AccountAnalyticsResponse**](../Model/AccountAnalyticsResponse.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAnalyticsPublications()`

```php
getAnalyticsPublications($project_id, $account_id, $date_from, $date_to): \Postmypost\RestSdk\Model\PublicationAnalyticsResponse
```

Get publications analytics

Retrieve post analytics by account and project for a specified period.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Postmypost\RestSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Postmypost\RestSdk\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 56; // int | Project ID
$account_id = 'account_id_example'; // string | Account ID
$date_from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Start date of the period (YYYY-MM-DD)
$date_to = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | End date of the period (YYYY-MM-DD)

try {
    $result = $apiInstance->getAnalyticsPublications($project_id, $account_id, $date_from, $date_to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->getAnalyticsPublications: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID | |
| **account_id** | **string**| Account ID | |
| **date_from** | **\DateTime**| Start date of the period (YYYY-MM-DD) | |
| **date_to** | **\DateTime**| End date of the period (YYYY-MM-DD) | |

### Return type

[**\Postmypost\RestSdk\Model\PublicationAnalyticsResponse**](../Model/PublicationAnalyticsResponse.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
