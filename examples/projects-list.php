<?php

require_once(__DIR__ . '/../vendor/autoload.php');

use GuzzleHttp\Client;
use Postmypost\RestSdk\Configuration;
use Postmypost\RestSdk\Api\ProjectsApi;

// Set your API access token
$accessToken = 'YOUR_ACCESS_TOKEN';

$client = new Client();
$config = Configuration::getDefaultConfiguration()->setAccessToken($accessToken);
$projectsApi = new ProjectsApi($client, $config);

try {
    $projectsResponse = $projectsApi->getProjects();

    echo "Projects list:\n";

    foreach ($projectsResponse->getData() as $project) {
        printf(
            "  - ID: %s | Name: %s\n",
            $project->getId(),
            $project->getName(),
        );
    }

    // Output pagination info
    $pagination = $projectsResponse->getPages();
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
    echo "Error while requesting projects: ", $e->getMessage(), PHP_EOL;
}
