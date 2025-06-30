<?php

require_once(__DIR__ . '/../vendor/autoload.php');

use GuzzleHttp\Client;
use Postmypost\RestSdk\Api\PublicationsApi;
use Postmypost\RestSdk\Configuration;
use Postmypost\RestSdk\Model\CreatePublicationRequest;
use Postmypost\RestSdk\Model\PublicationDetailEditRequest;
use Postmypost\RestSdk\Model\PublicationDetailPublicationTypeEnum;
use Postmypost\RestSdk\Model\PublicationStatusEnumEdit;

// Set your API access token and project ID
$accessToken = 'YOUR_ACCESS_TOKEN';
$projectId = 123456;

// Set up HTTP client and configuration
$client = new Client();
$config = Configuration::getDefaultConfiguration()->setAccessToken($accessToken);
$publicationsApi = new PublicationsApi($client, $config);

// Build the publication request object
$publicationRequest = new CreatePublicationRequest([
    'project_id' => $projectId,
    'post_at' => new DateTime('2025-06-30T12:00:00+00:00'), // Publication time (UTC)
    'account_ids' => [111111, 222222], // Example account IDs
    'publication_status' => PublicationStatusEnumEdit::NUMBER_PENDING_PUBLICATION,
    'details' => [
        new PublicationDetailEditRequest([
            'account_id' => 111111,
            'publication_type' => PublicationDetailPublicationTypeEnum::NUMBER_POST,
            'content' => 'Check out our new product launch! #newproduct #launch',
            'file_ids' => [42516053],
        ]),
        new PublicationDetailEditRequest([
            'account_id' => 222222,
            'publication_type' => PublicationDetailPublicationTypeEnum::NUMBER_POST,
            'link' => 'https://example.com/new-product',
        ]),
    ]
]);

try {
    $response = $publicationsApi->createPublication($publicationRequest);
    echo "Publication created successfully!\n";
    echo "  Publication ID: " . $response->getId() . "\n";
} catch (Exception $e) {
    echo "Error while creating publication: ", $e->getMessage(), PHP_EOL;
}
