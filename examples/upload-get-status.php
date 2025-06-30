<?php

require_once(__DIR__ . '/../vendor/autoload.php');

use GuzzleHttp\Client;
use Postmypost\RestSdk\Api\UploadApi;
use Postmypost\RestSdk\Configuration;

// Set your API access token and the upload ID you want to check
$accessToken = 'YOUR_ACCESS_TOKEN';
$uploadId = 123456;

$client = new Client();
$config = Configuration::getDefaultConfiguration()->setAccessToken($accessToken);
$uploadApi = new UploadApi($client, $config);

try {
    $response = $uploadApi->statusUpload($uploadId);

    echo "Upload status received successfully.\n";
    echo "  Upload ID:    " . $response->getId() . "\n";
    echo "  File ID:      " . $response->getFileId() . "\n";
    echo "  Status code:  " . $response->getStatus() . "\n";
    // You can map status codes to human-readable messages here if needed.
} catch (Exception $e) {
    echo "Error while requesting upload status: ", $e->getMessage(), PHP_EOL;
}
