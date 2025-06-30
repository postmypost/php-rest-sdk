<?php

require_once(__DIR__ . '/../vendor/autoload.php');

use GuzzleHttp\Client;
use Postmypost\RestSdk\Api\AccountsApi;
use Postmypost\RestSdk\Configuration;

// Set your API access token and project ID
$accessToken = 'YOUR_ACCESS_TOKEN';
$projectId = 123456;

$client = new Client();
$config = Configuration::getDefaultConfiguration()->setAccessToken($accessToken);
$accountsApi = new AccountsApi($client, $config);

try {
    $accountsResponse = $accountsApi->getAccounts($projectId);

    echo "Accounts list:\n";

    foreach ($accountsResponse->getData() as $account) {
        printf(
            "  - ID: %s | Name: %s\n",
            $account->getId(),
            $account->getName()
        );
    }

    // Output pagination info
    $pagination = $accountsResponse->getPages();
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
    echo "Error while requesting accounts: ", $e->getMessage(), PHP_EOL;
}
