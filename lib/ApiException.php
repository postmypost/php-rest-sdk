<?php
/**
 * ApiException
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

namespace Postmypost\RestSdk;

use \Exception;

/**
 * ApiException Class Doc Comment
 *
 * @category Class
 * @package  Postmypost\RestSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ApiException extends Exception
{
    /**
     * The HTTP body of the server response either as Json or string.
     *
     * @var \stdClass|string|null
     */
    protected $responseBody;

    /**
     * The HTTP header of the server response.
     *
     * @var string[]|null
     */
    protected $responseHeaders;

    /**
     * The deserialized response object
     *
     * @var \stdClass|string|null
     */
    protected $responseObject;

    /**
     * Constructor
     *
     * @param string                $message         Error message
     * @param int                   $code            HTTP status code
     * @param string[]|null         $responseHeaders HTTP response header
     * @param \stdClass|string|null $responseBody    HTTP decoded body of the server response either as \stdClass or string
     */
    public function __construct($message = "", $code = 0, $responseHeaders = [], $responseBody = null)
    {
        parent::__construct($message, $code);
        $this->responseHeaders = $responseHeaders;
        $this->responseBody = $responseBody;
    }

    /**
     * Gets the HTTP response header
     *
     * @return string[]|null HTTP response header
     */
    public function getResponseHeaders()
    {
        return $this->responseHeaders;
    }

    /**
     * Gets the HTTP body of the server response either as Json or string
     *
     * @return \stdClass|string|null HTTP body of the server response either as \stdClass or string
     */
    public function getResponseBody()
    {
        return $this->responseBody;
    }

    /**
     * Sets the deserialized response object (during deserialization)
     *
     * @param mixed $obj Deserialized response object
     *
     * @return void
     */
    public function setResponseObject($obj)
    {
        $this->responseObject = $obj;
    }

    /**
     * Gets the deserialized response object (during deserialization)
     *
     * @return mixed the deserialized response object
     */
    public function getResponseObject()
    {
        return $this->responseObject;
    }
}
