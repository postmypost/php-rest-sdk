<?php

require_once(__DIR__ . '/../vendor/autoload.php');

use GuzzleHttp\Client;
use Postmypost\RestSdk\Api\UploadApi;
use Postmypost\RestSdk\Configuration;
use Postmypost\RestSdk\Model\InitUploadRequest;

// Set your API access token and project ID
$accessToken = 'YOUR_ACCESS_TOKEN';
$projectId = 123456;

// Path to your local file
$filePath = '/path/to/your/file.jpg';

if (!file_exists($filePath)) {
    throw new Exception("File does not exist: $filePath");
}

$fileSize = filesize($filePath);
$fileName = basename($filePath);

$client = new Client();
$config = Configuration::getDefaultConfiguration()->setAccessToken($accessToken);
$uploadApi = new UploadApi($client, $config);

try {
    // Step 1: Initialize upload
    $uploadRequest = new InitUploadRequest([
        'project_id' => $projectId,
        'name' => $fileName,
        'size' => $fileSize,
    ]);

    $initResponse = $uploadApi->initUpload($uploadRequest);
    echo "Upload initialized successfully.\n";
    echo "  Upload ID: " . $initResponse->getId() . "\n";
    echo "  Upload status: " . $initResponse->getStatus() . "\n";

    // Step 2: Prepare multipart form data for S3
    $formData = [];
    foreach ($initResponse->getFields() as $field) {
        $formData[] = [
            'name' => $field->getKey(),
            'contents' => $field->getValue()
        ];
    }

    $formData[] = [
        'name' => 'file',
        'contents' => fopen($filePath, 'r'),
        'filename' => $fileName
    ];

    // Step 3: Upload file to S3
    $s3Client = new Client();
    $s3Response = $s3Client->post($initResponse->getAction(), [
        'multipart' => $formData,
    ]);
    echo "File uploaded to storage provider (S3).\n";

    // Step 4: Complete the upload via Postmypost API
    $completeResponse = $uploadApi->completeUpload($initResponse->getId());
    echo "Upload completed successfully!\n";
    echo "  Upload ID:    " . $completeResponse->getId() . "\n";
    echo "  Status code:  " . $completeResponse->getStatus() . "\n";
} catch (Exception $e) {
    echo "Error during file upload: ", $e->getMessage(), PHP_EOL;
}