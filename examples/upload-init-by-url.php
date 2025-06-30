<?php

require_once(__DIR__ . '/../vendor/autoload.php');

use GuzzleHttp\Client;
use Postmypost\RestSdk\Api\UploadApi;
use Postmypost\RestSdk\Configuration;
use Postmypost\RestSdk\Model\InitUploadRequest;

// Set your API access token and project ID
$accessToken = 'YOUR_ACCESS_TOKEN';
$projectId = 123456;

// Example image URL (replace with your file if needed)
$fileUrl = 'https://upload.wikimedia.org/wikipedia/commons/a/a9/Example.jpg';

$client = new Client();
$config = Configuration::getDefaultConfiguration()->setAccessToken($accessToken);

$uploadApi = new UploadApi($client, $config);

try {
    $uploadRequest = new InitUploadRequest([
        'project_id' => $projectId,
        'url' => $fileUrl,
    ]);

    $response = $uploadApi->initUpload($uploadRequest);

    echo "Upload initialized successfully.\n";
    echo "  Upload ID: " . $response->getId() . "\n";
    echo "  Upload status: " . $response->getStatus() . "\n";
} catch (Exception $e) {
    echo "Error during file upload: ", $e->getMessage(), PHP_EOL;
}
