<?php
/**
 * ChannelsApi
 * PHP version 5
 *
 * @category Class
 * @package  BigCommerce\Api\v3
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * BigCommerce Channels API
 *
 * The Channels API enables you to create and manage listings across a BigCommerce merchant's sales channels.
 *
 * OpenAPI spec version: 1.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace BigCommerce\Api\v3\Api;

use \BigCommerce\Api\v3\ApiClient;
use \BigCommerce\Api\v3\ApiException;
use \BigCommerce\Api\v3\Configuration;
use \BigCommerce\Api\v3\ObjectSerializer;

/**
 * ChannelsApi Class Doc Comment
 *
 * @category Class
 * @package  BigCommerce\Api\v3
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ChannelsApi
{
    /**
     * API Client
     *
     * @var \BigCommerce\Api\v3\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \BigCommerce\Api\v3\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\BigCommerce\Api\v3\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('https://api.bigcommerce.com');
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \BigCommerce\Api\v3\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \BigCommerce\Api\v3\ApiClient $apiClient set the API client
     *
     * @return ChannelsApi
     */
    public function setApiClient(\BigCommerce\Api\v3\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation createChannel
     *
     * Create a Channel
     *
     * @param \BigCommerce\Api\v3\Model\CreateChannelRequest $body  (required)
     * @throws \BigCommerce\Api\v3\ApiException on non-2xx response
     * @return \BigCommerce\Api\v3\Model\ChannelResponse
     */
    public function createChannel($body)
    {
        list($response) = $this->createChannelWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation createChannelWithHttpInfo
     *
     * Create a Channel
     *
     * @param \BigCommerce\Api\v3\Model\CreateChannelRequest $body  (required)
     * @throws \BigCommerce\Api\v3\ApiException on non-2xx response
     * @return array of \BigCommerce\Api\v3\Model\ChannelResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function createChannelWithHttpInfo($body)
    {
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling createChannel');
        }
        // parse inputs
        $resourcePath = "/channels";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\BigCommerce\Api\v3\Model\ChannelResponse',
                '/channels'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BigCommerce\Api\v3\Model\ChannelResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BigCommerce\Api\v3\Model\ChannelResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation createChannelListings
     *
     * Create Channel Listings
     *
     * @param int $channel_id  (required)
     * @param \BigCommerce\Api\v3\Model\Listing[] $body If state is omitted in the variants object, it inherits the top-level state (required)
     * @throws \BigCommerce\Api\v3\ApiException on non-2xx response
     * @return \BigCommerce\Api\v3\Model\ListingCollectionResponse
     */
    public function createChannelListings($channel_id, $body)
    {
        list($response) = $this->createChannelListingsWithHttpInfo($channel_id, $body);
        return $response;
    }

    /**
     * Operation createChannelListingsWithHttpInfo
     *
     * Create Channel Listings
     *
     * @param int $channel_id  (required)
     * @param \BigCommerce\Api\v3\Model\Listing[] $body If state is omitted in the variants object, it inherits the top-level state (required)
     * @throws \BigCommerce\Api\v3\ApiException on non-2xx response
     * @return array of \BigCommerce\Api\v3\Model\ListingCollectionResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function createChannelListingsWithHttpInfo($channel_id, $body)
    {
        // verify the required parameter 'channel_id' is set
        if ($channel_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $channel_id when calling createChannelListings');
        }
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling createChannelListings');
        }
        // parse inputs
        $resourcePath = "/channels/{channelId}/listings";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($channel_id !== null) {
            $resourcePath = str_replace(
                "{" . "channelId" . "}",
                $this->apiClient->getSerializer()->toPathValue($channel_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\BigCommerce\Api\v3\Model\ListingCollectionResponse',
                '/channels/{channelId}/listings'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BigCommerce\Api\v3\Model\ListingCollectionResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BigCommerce\Api\v3\Model\ListingCollectionResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getChannel
     *
     * Get Channel
     *
     * @param int $channel_id The ID of a Channel that&#39;s available through GET /channels (required)
     * @throws \BigCommerce\Api\v3\ApiException on non-2xx response
     * @return \BigCommerce\Api\v3\Model\ChannelResponse
     */
    public function getChannel($channel_id)
    {
        list($response) = $this->getChannelWithHttpInfo($channel_id);
        return $response;
    }

    /**
     * Operation getChannelWithHttpInfo
     *
     * Get Channel
     *
     * @param int $channel_id The ID of a Channel that&#39;s available through GET /channels (required)
     * @throws \BigCommerce\Api\v3\ApiException on non-2xx response
     * @return array of \BigCommerce\Api\v3\Model\ChannelResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getChannelWithHttpInfo($channel_id)
    {
        // verify the required parameter 'channel_id' is set
        if ($channel_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $channel_id when calling getChannel');
        }
        // parse inputs
        $resourcePath = "/channels/{channelId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($channel_id !== null) {
            $resourcePath = str_replace(
                "{" . "channelId" . "}",
                $this->apiClient->getSerializer()->toPathValue($channel_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\BigCommerce\Api\v3\Model\ChannelResponse',
                '/channels/{channelId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BigCommerce\Api\v3\Model\ChannelResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BigCommerce\Api\v3\Model\ChannelResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getChannelListing
     *
     * Get Channel Listing
     *
     * @param int $channel_id  (required)
     * @param int $listing_id The ID of a Channel Listing that&#39;s available through GET /channels/listings (required)
     * @throws \BigCommerce\Api\v3\ApiException on non-2xx response
     * @return \BigCommerce\Api\v3\Model\ListingResponse
     */
    public function getChannelListing($channel_id, $listing_id)
    {
        list($response) = $this->getChannelListingWithHttpInfo($channel_id, $listing_id);
        return $response;
    }

    /**
     * Operation getChannelListingWithHttpInfo
     *
     * Get Channel Listing
     *
     * @param int $channel_id  (required)
     * @param int $listing_id The ID of a Channel Listing that&#39;s available through GET /channels/listings (required)
     * @throws \BigCommerce\Api\v3\ApiException on non-2xx response
     * @return array of \BigCommerce\Api\v3\Model\ListingResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getChannelListingWithHttpInfo($channel_id, $listing_id)
    {
        // verify the required parameter 'channel_id' is set
        if ($channel_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $channel_id when calling getChannelListing');
        }
        // verify the required parameter 'listing_id' is set
        if ($listing_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $listing_id when calling getChannelListing');
        }
        // parse inputs
        $resourcePath = "/channels/{channelId}/listings/{listingId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($channel_id !== null) {
            $resourcePath = str_replace(
                "{" . "channelId" . "}",
                $this->apiClient->getSerializer()->toPathValue($channel_id),
                $resourcePath
            );
        }
        // path params
        if ($listing_id !== null) {
            $resourcePath = str_replace(
                "{" . "listingId" . "}",
                $this->apiClient->getSerializer()->toPathValue($listing_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\BigCommerce\Api\v3\Model\ListingResponse',
                '/channels/{channelId}/listings/{listingId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BigCommerce\Api\v3\Model\ListingResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BigCommerce\Api\v3\Model\ListingResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation listChannelListings
     *
     * List all Channels Listings
     *
     * @param int $channel_id  (required)
     * @param int $limit Controls the number of items per page in a limited (paginated) list of products. (optional)
     * @param int $after Specifies the prior ID number in a limited (paginated) list of listings. (optional)
     * @throws \BigCommerce\Api\v3\ApiException on non-2xx response
     * @return \BigCommerce\Api\v3\Model\ListingCollectionResponse
     */
    public function listChannelListings($channel_id, $limit = null, $after = null)
    {
        list($response) = $this->listChannelListingsWithHttpInfo($channel_id, $limit, $after);
        return $response;
    }

    /**
     * Operation listChannelListingsWithHttpInfo
     *
     * List all Channels Listings
     *
     * @param int $channel_id  (required)
     * @param int $limit Controls the number of items per page in a limited (paginated) list of products. (optional)
     * @param int $after Specifies the prior ID number in a limited (paginated) list of listings. (optional)
     * @throws \BigCommerce\Api\v3\ApiException on non-2xx response
     * @return array of \BigCommerce\Api\v3\Model\ListingCollectionResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function listChannelListingsWithHttpInfo($channel_id, $limit = null, $after = null)
    {
        // verify the required parameter 'channel_id' is set
        if ($channel_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $channel_id when calling listChannelListings');
        }
        // parse inputs
        $resourcePath = "/channels/{channelId}/listings";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        if ($limit !== null) {
            $queryParams['limit'] = $this->apiClient->getSerializer()->toQueryValue($limit);
        }
        // query params
        if ($after !== null) {
            $queryParams['after'] = $this->apiClient->getSerializer()->toQueryValue($after);
        }
        // path params
        if ($channel_id !== null) {
            $resourcePath = str_replace(
                "{" . "channelId" . "}",
                $this->apiClient->getSerializer()->toPathValue($channel_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\BigCommerce\Api\v3\Model\ListingCollectionResponse',
                '/channels/{channelId}/listings'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BigCommerce\Api\v3\Model\ListingCollectionResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BigCommerce\Api\v3\Model\ListingCollectionResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation listChannels
     *
     * List all Channels
     *
     * @throws \BigCommerce\Api\v3\ApiException on non-2xx response
     * @return \BigCommerce\Api\v3\Model\ChannelCollectionResponse
     */
    public function listChannels()
    {
        list($response) = $this->listChannelsWithHttpInfo();
        return $response;
    }

    /**
     * Operation listChannelsWithHttpInfo
     *
     * List all Channels
     *
     * @throws \BigCommerce\Api\v3\ApiException on non-2xx response
     * @return array of \BigCommerce\Api\v3\Model\ChannelCollectionResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function listChannelsWithHttpInfo()
    {
        // parse inputs
        $resourcePath = "/channels";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\BigCommerce\Api\v3\Model\ChannelCollectionResponse',
                '/channels'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BigCommerce\Api\v3\Model\ChannelCollectionResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BigCommerce\Api\v3\Model\ChannelCollectionResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation updateChannel
     *
     * Update Channel
     *
     * @param int $channel_id The ID of a Channel that&#39;s available through GET /channels (required)
     * @param \BigCommerce\Api\v3\Model\UpdateChannelRequest $body  (required)
     * @throws \BigCommerce\Api\v3\ApiException on non-2xx response
     * @return \BigCommerce\Api\v3\Model\ChannelResponse
     */
    public function updateChannel($channel_id, $body)
    {
        list($response) = $this->updateChannelWithHttpInfo($channel_id, $body);
        return $response;
    }

    /**
     * Operation updateChannelWithHttpInfo
     *
     * Update Channel
     *
     * @param int $channel_id The ID of a Channel that&#39;s available through GET /channels (required)
     * @param \BigCommerce\Api\v3\Model\UpdateChannelRequest $body  (required)
     * @throws \BigCommerce\Api\v3\ApiException on non-2xx response
     * @return array of \BigCommerce\Api\v3\Model\ChannelResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateChannelWithHttpInfo($channel_id, $body)
    {
        // verify the required parameter 'channel_id' is set
        if ($channel_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $channel_id when calling updateChannel');
        }
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling updateChannel');
        }
        // parse inputs
        $resourcePath = "/channels/{channelId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($channel_id !== null) {
            $resourcePath = str_replace(
                "{" . "channelId" . "}",
                $this->apiClient->getSerializer()->toPathValue($channel_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\BigCommerce\Api\v3\Model\ChannelResponse',
                '/channels/{channelId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BigCommerce\Api\v3\Model\ChannelResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BigCommerce\Api\v3\Model\ChannelResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation updateChannelListings
     *
     * Update Channel Listings
     *
     * @param int $channel_id  (required)
     * @param \BigCommerce\Api\v3\Model\UpdateListingRequest[] $body  (required)
     * @throws \BigCommerce\Api\v3\ApiException on non-2xx response
     * @return \BigCommerce\Api\v3\Model\ListingCollectionResponse
     */
    public function updateChannelListings($channel_id, $body)
    {
        list($response) = $this->updateChannelListingsWithHttpInfo($channel_id, $body);
        return $response;
    }

    /**
     * Operation updateChannelListingsWithHttpInfo
     *
     * Update Channel Listings
     *
     * @param int $channel_id  (required)
     * @param \BigCommerce\Api\v3\Model\UpdateListingRequest[] $body  (required)
     * @throws \BigCommerce\Api\v3\ApiException on non-2xx response
     * @return array of \BigCommerce\Api\v3\Model\ListingCollectionResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateChannelListingsWithHttpInfo($channel_id, $body)
    {
        // verify the required parameter 'channel_id' is set
        if ($channel_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $channel_id when calling updateChannelListings');
        }
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling updateChannelListings');
        }
        // parse inputs
        $resourcePath = "/channels/{channelId}/listings";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($channel_id !== null) {
            $resourcePath = str_replace(
                "{" . "channelId" . "}",
                $this->apiClient->getSerializer()->toPathValue($channel_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\BigCommerce\Api\v3\Model\ListingCollectionResponse',
                '/channels/{channelId}/listings'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BigCommerce\Api\v3\Model\ListingCollectionResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BigCommerce\Api\v3\Model\ListingCollectionResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
