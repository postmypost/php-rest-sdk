<?php
/**
 * TimezonesApi
 * PHP version 7.4
 *
 * @category Class
 * @package  Postmypost\RestSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Postmypost REST API
 *
 * Official OpenAPI specification for the Postmypost social media management (SMM) API.  Postmypost is a secure, reliable, and highly trusted social media management platform, recommended by thousands of SMM professionals and agencies. All integrations are built exclusively on official APIs, ensuring maximum security, compliance, and no risk of account blocking or bans.  With the Postmypost API, you can automate social media marketing, content scheduling, publishing, analytics, and workflow management across all major platforms, including Instagram, Facebook, Twitter, Threads, Bluesky, LinkedIn, Pinterest, YouTube, Rutube, TikTok, Discord, Reddit, VKontakte, Telegram, Viber, Odnoklassniki, Bitrix, Medium, Tumblr, Mastodon, and Webhook.  Why choose Postmypost? - 100% official and secure integrations with social networks - No risk of account blocking — all APIs are fully compliant - Trusted by thousands of businesses, agencies, and SMM professionals - Powerful automation, scheduling, and analytics tools - Friendly support and clear documentation  For agencies, businesses, and creators looking for the safest, most reliable way to automate and scale their social media presence, Postmypost is the recommended choice.
 *
 * The version of the OpenAPI document: 4.1.4
 * Contact: support@postmypost.io
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.6.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Postmypost\RestSdk\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Postmypost\RestSdk\ApiException;
use Postmypost\RestSdk\Configuration;
use Postmypost\RestSdk\HeaderSelector;
use Postmypost\RestSdk\ObjectSerializer;

/**
 * TimezonesApi Class Doc Comment
 *
 * @category Class
 * @package  Postmypost\RestSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TimezonesApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'getTimezones' => [
            'application/json',
        ],
    ];

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation getTimezones
     *
     * Get list of timezones
     *
     * @param  string $sort List sorting parameter. Format: &#x60;sort&#x3D;field&#x60; — ascending by field, &#x60;sort&#x3D;-field&#x60; — descending by field. Multiple fields can be specified separated by a comma: &#x60;sort&#x3D;field,-another_field&#x60;. (optional)
     * @param  int $page Page number (starts from 1). (optional, default to 1)
     * @param  int $per_page Number of items per page (maximum 50). (optional, default to 20)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getTimezones'] to see the possible values for this operation
     *
     * @throws \Postmypost\RestSdk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Postmypost\RestSdk\Model\TimezonesResponse|\Postmypost\RestSdk\Model\BadRequestError|\Postmypost\RestSdk\Model\UnauthorizedError|\Postmypost\RestSdk\Model\ForbiddenError|\Postmypost\RestSdk\Model\NotFoundError|\Postmypost\RestSdk\Model\UnprocessableEntityError
     */
    public function getTimezones($sort = null, $page = 1, $per_page = 20, string $contentType = self::contentTypes['getTimezones'][0])
    {
        list($response) = $this->getTimezonesWithHttpInfo($sort, $page, $per_page, $contentType);
        return $response;
    }

    /**
     * Operation getTimezonesWithHttpInfo
     *
     * Get list of timezones
     *
     * @param  string $sort List sorting parameter. Format: &#x60;sort&#x3D;field&#x60; — ascending by field, &#x60;sort&#x3D;-field&#x60; — descending by field. Multiple fields can be specified separated by a comma: &#x60;sort&#x3D;field,-another_field&#x60;. (optional)
     * @param  int $page Page number (starts from 1). (optional, default to 1)
     * @param  int $per_page Number of items per page (maximum 50). (optional, default to 20)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getTimezones'] to see the possible values for this operation
     *
     * @throws \Postmypost\RestSdk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Postmypost\RestSdk\Model\TimezonesResponse|\Postmypost\RestSdk\Model\BadRequestError|\Postmypost\RestSdk\Model\UnauthorizedError|\Postmypost\RestSdk\Model\ForbiddenError|\Postmypost\RestSdk\Model\NotFoundError|\Postmypost\RestSdk\Model\UnprocessableEntityError, HTTP status code, HTTP response headers (array of strings)
     */
    public function getTimezonesWithHttpInfo($sort = null, $page = 1, $per_page = 20, string $contentType = self::contentTypes['getTimezones'][0])
    {
        $request = $this->getTimezonesRequest($sort, $page, $per_page, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\Postmypost\RestSdk\Model\TimezonesResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Postmypost\RestSdk\Model\TimezonesResponse' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Postmypost\RestSdk\Model\TimezonesResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\Postmypost\RestSdk\Model\BadRequestError' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Postmypost\RestSdk\Model\BadRequestError' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Postmypost\RestSdk\Model\BadRequestError', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 401:
                    if ('\Postmypost\RestSdk\Model\UnauthorizedError' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Postmypost\RestSdk\Model\UnauthorizedError' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Postmypost\RestSdk\Model\UnauthorizedError', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 403:
                    if ('\Postmypost\RestSdk\Model\ForbiddenError' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Postmypost\RestSdk\Model\ForbiddenError' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Postmypost\RestSdk\Model\ForbiddenError', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 404:
                    if ('\Postmypost\RestSdk\Model\NotFoundError' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Postmypost\RestSdk\Model\NotFoundError' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Postmypost\RestSdk\Model\NotFoundError', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 422:
                    if ('\Postmypost\RestSdk\Model\UnprocessableEntityError' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Postmypost\RestSdk\Model\UnprocessableEntityError' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Postmypost\RestSdk\Model\UnprocessableEntityError', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Postmypost\RestSdk\Model\TimezonesResponse';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    try {
                        $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                    } catch (\JsonException $exception) {
                        throw new ApiException(
                            sprintf(
                                'Error JSON decoding server response (%s)',
                                $request->getUri()
                            ),
                            $statusCode,
                            $response->getHeaders(),
                            $content
                        );
                    }
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Postmypost\RestSdk\Model\TimezonesResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Postmypost\RestSdk\Model\BadRequestError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Postmypost\RestSdk\Model\UnauthorizedError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Postmypost\RestSdk\Model\ForbiddenError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Postmypost\RestSdk\Model\NotFoundError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 422:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Postmypost\RestSdk\Model\UnprocessableEntityError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getTimezonesAsync
     *
     * Get list of timezones
     *
     * @param  string $sort List sorting parameter. Format: &#x60;sort&#x3D;field&#x60; — ascending by field, &#x60;sort&#x3D;-field&#x60; — descending by field. Multiple fields can be specified separated by a comma: &#x60;sort&#x3D;field,-another_field&#x60;. (optional)
     * @param  int $page Page number (starts from 1). (optional, default to 1)
     * @param  int $per_page Number of items per page (maximum 50). (optional, default to 20)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getTimezones'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTimezonesAsync($sort = null, $page = 1, $per_page = 20, string $contentType = self::contentTypes['getTimezones'][0])
    {
        return $this->getTimezonesAsyncWithHttpInfo($sort, $page, $per_page, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getTimezonesAsyncWithHttpInfo
     *
     * Get list of timezones
     *
     * @param  string $sort List sorting parameter. Format: &#x60;sort&#x3D;field&#x60; — ascending by field, &#x60;sort&#x3D;-field&#x60; — descending by field. Multiple fields can be specified separated by a comma: &#x60;sort&#x3D;field,-another_field&#x60;. (optional)
     * @param  int $page Page number (starts from 1). (optional, default to 1)
     * @param  int $per_page Number of items per page (maximum 50). (optional, default to 20)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getTimezones'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTimezonesAsyncWithHttpInfo($sort = null, $page = 1, $per_page = 20, string $contentType = self::contentTypes['getTimezones'][0])
    {
        $returnType = '\Postmypost\RestSdk\Model\TimezonesResponse';
        $request = $this->getTimezonesRequest($sort, $page, $per_page, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getTimezones'
     *
     * @param  string $sort List sorting parameter. Format: &#x60;sort&#x3D;field&#x60; — ascending by field, &#x60;sort&#x3D;-field&#x60; — descending by field. Multiple fields can be specified separated by a comma: &#x60;sort&#x3D;field,-another_field&#x60;. (optional)
     * @param  int $page Page number (starts from 1). (optional, default to 1)
     * @param  int $per_page Number of items per page (maximum 50). (optional, default to 20)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getTimezones'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getTimezonesRequest($sort = null, $page = 1, $per_page = 20, string $contentType = self::contentTypes['getTimezones'][0])
    {



        if ($per_page !== null && $per_page > 50) {
            throw new \InvalidArgumentException('invalid value for "$per_page" when calling TimezonesApi.getTimezones, must be smaller than or equal to 50.');
        }
        

        $resourcePath = '/timezones';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $sort,
            'sort', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $page,
            'page', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $per_page,
            'per_page', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);




        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires Bearer authentication (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
