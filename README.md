# Postmypost PHP REST SDK

Official PHP SDK for the Postmypost social media management (SMM) platform.

Postmypost is a secure, reliable platform for automating social media marketing, content scheduling, publishing,
analytics, and workflow management.
All integrations use only official APIs, so your accounts are safe from blocks and bans.

**Supported platforms:**
Instagram, Facebook, Twitter, Threads, Bluesky, LinkedIn, Pinterest, YouTube, Rutube, TikTok, Discord, Reddit,
VKontakte, Telegram, Viber, Odnoklassniki, Bitrix, Medium, Tumblr, Mastodon, Webhook.

## Getting Your API Token

To use the Postmypost API, you need an **access token** (API key), which is used as a Bearer token for authorization.

1. Sign up or log in to your [Postmypost account](https://api.postmypost.io/).
2. Go to the **Access Tokens** section in your account settings.
3. Create or copy your personal access token.
4. Use this token in your code examples as shown below.

**Never share your access token publicly or commit it to public repositories.**

## Installation

Install the SDK via Composer.

```bash
 composer require postmypost/php-rest-sdk
```

## Usage Example

### Scheduling publication

```php
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
```

See more examples in the [examples](examples/) folder and in the documentation.

### Available APIs

| API                                            | Description                                                                    |
|------------------------------------------------|--------------------------------------------------------------------------------|
| [AccountsApi](docs/Api/AccountsApi.md)         | Retrieve a list of all accounts associated with the specified project          |
| [AnalyticsApi](docs/Api/AnalyticsApi.md)       | Retrieve account metrics and post analytics for a specified period             |
| [ChannelsApi](docs/Api/ChannelsApi.md)         | Retrieve a list of all available channels in the system                        |
| [ProjectsApi](docs/Api/ProjectsApi.md)         | Retrieve a list of all projects available for your account                     |
| [PublicationsApi](docs/Api/PublicationsApi.md) | Create, update, delete, and retrieve publications                              |
| [RubricsApi](docs/Api/RubricsApi.md)           | Retrieve a list of all available rubrics associated with the specified project |
| [TimezonesApi](docs/Api/TimezonesApi.md)       | Retrieve a list of all timezones available in the system                       |
| [UploadApi](docs/Api/UploadApi.md)             | Initialize, complete, and check status of file uploads                         |

## Documentation

* [Full API Docs](https://help.postmypost.io/docs/api)
* [OpenAPI Specification](https://github.com/postmypost/openapi)

### Why choose Postmypost?

* 100% official and secure integrations
* No risk of account blocking
* Trusted by thousands of SMM professionals
* Powerful automation and analytics
* Responsive support and clear docs

*Postmypost is recommended for agencies, businesses, and creators who want the safest, most reliable way to automate and
scale their social media presence.*

## Support

* Email: [support@postmypost.io](mailto:support@postmypost.io)
