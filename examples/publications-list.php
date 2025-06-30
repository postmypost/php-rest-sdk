<?php

require_once(__DIR__ . '/../vendor/autoload.php');

use GuzzleHttp\Client;
use Postmypost\RestSdk\Api\PublicationsApi;
use Postmypost\RestSdk\Configuration;

// Set your API access token and project ID
$accessToken = 'YOUR_ACCESS_TOKEN';
$projectId = 123456;

$client = new Client();
$config = Configuration::getDefaultConfiguration()->setAccessToken($accessToken);
$publicationsApi = new PublicationsApi($client, $config);

try {
    $publicationsResponse = $publicationsApi->getPublications($projectId);

    echo "Publications list:\n";

    foreach ($publicationsResponse->getData() as $publication) {
        printf(
            "  - ID: %s | Date: %s\n",
            $publication->getId(),
            $publication->getPostAt()->format('Y-m-d H:i'),
        );
    }

    // Output pagination info
    $pagination = $publicationsResponse->getPages();
    echo "\nPagination:\n";
    printf(
        "  Page: %d | Per page: %d | Total pages: %d | Total count: %d\n",
        $pagination->getPage(),
        $pagination->getPerPage(),
        $pagination->getTotalPages(),
        $pagination->getTotalCount()
    );
    if ($pagination->getPrev() !== null) {
        echo "  Prev: {$pagination->getPrev()}\n";
    }
    if ($pagination->getNext() !== null) {
        echo "  Next: {$pagination->getNext()}\n";
    }
} catch (Exception $e) {
    echo "Error while requesting publications: ", $e->getMessage(), PHP_EOL;
}
