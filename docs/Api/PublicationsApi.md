# Postmypost\RestSdk\PublicationsApi

All URIs are relative to https://api.postmypost.io/v4.1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createPublication()**](PublicationsApi.md#createPublication) | **POST** /publications | Create publication |
| [**deletePublication()**](PublicationsApi.md#deletePublication) | **DELETE** /publications/{id} | Delete publication |
| [**getPublication()**](PublicationsApi.md#getPublication) | **GET** /publications/{id} | Get publication by ID |
| [**getPublications()**](PublicationsApi.md#getPublications) | **GET** /publications | Get list of publications |
| [**updatePublication()**](PublicationsApi.md#updatePublication) | **PUT** /publications/{id} | Update publication |


## `createPublication()`

```php
createPublication($create_publication_request): \Postmypost\RestSdk\Model\Publication
```

Create publication

Create a new publication.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Postmypost\RestSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Postmypost\RestSdk\Api\PublicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_publication_request = new \Postmypost\RestSdk\Model\CreatePublicationRequest(); // \Postmypost\RestSdk\Model\CreatePublicationRequest

try {
    $result = $apiInstance->createPublication($create_publication_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicationsApi->createPublication: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_publication_request** | [**\Postmypost\RestSdk\Model\CreatePublicationRequest**](../Model/CreatePublicationRequest.md)|  | |

### Return type

[**\Postmypost\RestSdk\Model\Publication**](../Model/Publication.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deletePublication()`

```php
deletePublication($id, $delete_option, $account_ids): \Postmypost\RestSdk\Model\Publication
```

Delete publication

Delete a publication.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Postmypost\RestSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Postmypost\RestSdk\Api\PublicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Publication ID
$delete_option = 56; // int | Deletion method: 1 — delete everywhere, 2 — only in social network, 3 — only in Postmypost
$account_ids = 'account_ids_example'; // string | Comma-separated list of account IDs

try {
    $result = $apiInstance->deletePublication($id, $delete_option, $account_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicationsApi->deletePublication: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Publication ID | |
| **delete_option** | **int**| Deletion method: 1 — delete everywhere, 2 — only in social network, 3 — only in Postmypost | |
| **account_ids** | **string**| Comma-separated list of account IDs | |

### Return type

[**\Postmypost\RestSdk\Model\Publication**](../Model/Publication.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPublication()`

```php
getPublication($id): \Postmypost\RestSdk\Model\Publication
```

Get publication by ID

Retrieve publication data by its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Postmypost\RestSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Postmypost\RestSdk\Api\PublicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Publication ID

try {
    $result = $apiInstance->getPublication($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicationsApi->getPublication: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Publication ID | |

### Return type

[**\Postmypost\RestSdk\Model\Publication**](../Model/Publication.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPublications()`

```php
getPublications($project_id, $post_date, $sort, $page, $per_page): \Postmypost\RestSdk\Model\PublicationsResponse
```

Get list of publications

Retrieve a list of all publications available in the system.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Postmypost\RestSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Postmypost\RestSdk\Api\PublicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 56; // int | Project ID
$post_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Publication date (YYYY-MM-DD)
$sort = 'sort_example'; // string | List sorting parameter. Format: `sort=field` — ascending by field, `sort=-field` — descending by field. Multiple fields can be specified separated by a comma: `sort=field,-another_field`.
$page = 1; // int | Page number (starts from 1).
$per_page = 20; // int | Number of items per page (maximum 50).

try {
    $result = $apiInstance->getPublications($project_id, $post_date, $sort, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicationsApi->getPublications: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID | |
| **post_date** | **\DateTime**| Publication date (YYYY-MM-DD) | [optional] |
| **sort** | **string**| List sorting parameter. Format: &#x60;sort&#x3D;field&#x60; — ascending by field, &#x60;sort&#x3D;-field&#x60; — descending by field. Multiple fields can be specified separated by a comma: &#x60;sort&#x3D;field,-another_field&#x60;. | [optional] |
| **page** | **int**| Page number (starts from 1). | [optional] [default to 1] |
| **per_page** | **int**| Number of items per page (maximum 50). | [optional] [default to 20] |

### Return type

[**\Postmypost\RestSdk\Model\PublicationsResponse**](../Model/PublicationsResponse.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePublication()`

```php
updatePublication($id, $update_publication_request): \Postmypost\RestSdk\Model\Publication
```

Update publication

Update a publication by ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Postmypost\RestSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Postmypost\RestSdk\Api\PublicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Publication ID
$update_publication_request = new \Postmypost\RestSdk\Model\UpdatePublicationRequest(); // \Postmypost\RestSdk\Model\UpdatePublicationRequest

try {
    $result = $apiInstance->updatePublication($id, $update_publication_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicationsApi->updatePublication: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Publication ID | |
| **update_publication_request** | [**\Postmypost\RestSdk\Model\UpdatePublicationRequest**](../Model/UpdatePublicationRequest.md)|  | |

### Return type

[**\Postmypost\RestSdk\Model\Publication**](../Model/Publication.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
