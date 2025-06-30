<?php

require_once(__DIR__ . '/../vendor/autoload.php');

use GuzzleHttp\Client;
use Postmypost\RestSdk\Api\UploadApi;
use Postmypost\RestSdk\Configuration;
use Postmypost\RestSdk\Model\UploadStatusEnum;

// Set your API access token and the upload ID you want to check
$accessToken = 'YOUR_ACCESS_TOKEN';
$uploadId = 123456;
$maxAttempts = 10;

$client = new Client();
$config = Configuration::getDefaultConfiguration()->setAccessToken($accessToken);

$uploadApi = new UploadApi($client, $config);

for ($attempt = 1; $attempt <= $maxAttempts; $attempt++) {
    try {
        $response = $uploadApi->statusUpload($uploadId);
        $status = $response->getStatus();

        echo "Attempt $attempt\n";
        echo "Upload status: $status\n";

        if ($status === UploadStatusEnum::NUMBER_FILE_UPLOADED_SUCCESSFULLY) {
            echo "File ID: " . $response->getFileId() . "\n";
            echo "Upload completed successfully!\n";
            break;
        }
        if ($status === UploadStatusEnum::NUMBER_ERROR) {
            echo "Upload failed with error.\n";
            break;
        }
    } catch (Exception $e) {
        echo "Error while requesting upload status: ", $e->getMessage(), PHP_EOL;
        break;
    }
    sleep(2);
}

if ($attempt > $maxAttempts) {
    echo "Upload did not complete after $maxAttempts attempts.\n";
}
