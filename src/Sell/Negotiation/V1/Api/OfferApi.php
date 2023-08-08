<?php

/**
 * This file is part of the trollandtoad/ebay-sdk-php package.
 *
 * MIT License
 *
 * Copyright (c) 2022 Brandon Clothier
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 *
 */

declare(strict_types=1);

/**
 * OfferApi.
 *
 * PHP version ^7.2 || ^8.0
 *
 * @category Class
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 */

/**
 * Negotiation API.
 *
 * The <b>Negotiations API</b> gives sellers the ability to proactively send discount offers to buyers who have shown an \"interest\" in their listings.  <br><br>By sending buyers discount offers on listings where they have shown an interest, sellers can increase the velocity of their sales.  <br><br>There are various ways for a buyer to show <i>interest </i> in a listing. For example, if a buyer adds the listing to their <b>Watch</b> list, or if they add the listing to their shopping cart and later abandon the cart, they are deemed to have shown an interest in the listing.  <br><br>In the offers that sellers send, they can discount their listings by either a percentage off the listing price, or they can set a new discounted price that is lower than the original listing price.  <br><br>For details about how seller offers work, see <a href=\"/api-docs/sell/static/marketing/offers-to-buyers.html\" title=\"Selling Integration Guide\">Sending offers to buyers</a>.
 *
 * The version of the OpenAPI document: v1.1.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace TNT\Ebay\Sell\Negotiation\V1\Api;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use TNT\Ebay\Sell\Negotiation\V1\ApiException;
use TNT\Ebay\Sell\Negotiation\V1\Configuration;
use TNT\Ebay\Sell\Negotiation\V1\HeaderSelector;
use TNT\Ebay\Sell\Negotiation\V1\ObjectSerializer;

/**
 * OfferApi Class Doc Comment.
 *
 * @category Class
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 */
class OfferApi
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
     * Set the host index.
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index.
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
    public function getConfiguration()
    {
        return $this->config;
    }

    /**
     * Operation findEligibleItems.
     *
     * @param string $x_ebay_c_marketplace_id The eBay marketplace on which you want to search for eligible listings. For a complete list of supported marketplaces, see Negotiation API requirements and restrictions. (required)
     * @param string $limit                   This query parameter specifies the maximum number of items to return from the result set on a page in the paginated response. Minimum: 1 &amp;nbsp; &amp;nbsp;Maximum: 200 Default: 10 (optional)
     * @param string $offset                  This query parameter specifies the number of results to skip in the result set before returning the first result in the paginated response. Combine offset with the limit query parameter to control the items returned in the response. For example, if you supply an offset of 0 and a limit of 10, the first page of the response contains the first 10 results from the complete list of items retrieved by the call. If offset is 10 and limit is 20, the first page of the response contains items 11-30 from the complete result set. Default: 0 (optional)
     *
     * @throws \TNT\Ebay\Sell\Negotiation\V1\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return \TNT\Ebay\Sell\Negotiation\V1\Model\PagedEligibleItemCollection
     */
    public function findEligibleItems($x_ebay_c_marketplace_id, $limit = null, $offset = null)
    {
        [$response] = $this->findEligibleItemsWithHttpInfo($x_ebay_c_marketplace_id, $limit, $offset);

        return $response;
    }

    /**
     * Operation findEligibleItemsWithHttpInfo.
     *
     * @param string $x_ebay_c_marketplace_id The eBay marketplace on which you want to search for eligible listings. For a complete list of supported marketplaces, see Negotiation API requirements and restrictions. (required)
     * @param string $limit                   This query parameter specifies the maximum number of items to return from the result set on a page in the paginated response. Minimum: 1 &amp;nbsp; &amp;nbsp;Maximum: 200 Default: 10 (optional)
     * @param string $offset                  This query parameter specifies the number of results to skip in the result set before returning the first result in the paginated response. Combine offset with the limit query parameter to control the items returned in the response. For example, if you supply an offset of 0 and a limit of 10, the first page of the response contains the first 10 results from the complete list of items retrieved by the call. If offset is 10 and limit is 20, the first page of the response contains items 11-30 from the complete result set. Default: 0 (optional)
     *
     * @throws \TNT\Ebay\Sell\Negotiation\V1\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return array of \TNT\Ebay\Sell\Negotiation\V1\Model\PagedEligibleItemCollection, HTTP status code, HTTP response headers (array of strings)
     */
    public function findEligibleItemsWithHttpInfo($x_ebay_c_marketplace_id, $limit = null, $offset = null)
    {
        $request = $this->findEligibleItemsRequest($x_ebay_c_marketplace_id, $limit, $offset);

        try {
            $options = $this->createHttpClientOption();

            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException("[{$e->getCode()}] {$e->getMessage()}", (int) $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null, $e->getResponse() ? (string) $e->getResponse()->getBody() : null, $e);
            } catch (ConnectException $e) {
                throw new ApiException("[{$e->getCode()}] {$e->getMessage()}", (int) $e->getCode(), null, null, $e);
            } catch (GuzzleException $e) {
                throw new ApiException("[{$e->getCode()}] {$e->getMessage()}", (int) $e->getCode(), null, null, $e);
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, (string) $request->getUri()), $statusCode, $response->getHeaders(), (string) $response->getBody());
            }

            switch ($statusCode) {
                case 200:
                    if ('\TNT\Ebay\Sell\Negotiation\V1\Model\PagedEligibleItemCollection' === '\SplFileObject') {
                        $content = $response->getBody(); // Stream goes to serializer.
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\TNT\Ebay\Sell\Negotiation\V1\Model\PagedEligibleItemCollection', []),
                        $response->getStatusCode(),
                        $response->getHeaders(),
                    ];
            }

            $returnType = '\TNT\Ebay\Sell\Negotiation\V1\Model\PagedEligibleItemCollection';

            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); // Stream goes to serializer.
            } else {
                $content = (string) $response->getBody();
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders(),
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TNT\Ebay\Sell\Negotiation\V1\Model\PagedEligibleItemCollection',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation findEligibleItemsAsync.
     *
     * @param string $x_ebay_c_marketplace_id The eBay marketplace on which you want to search for eligible listings. For a complete list of supported marketplaces, see Negotiation API requirements and restrictions. (required)
     * @param string $limit                   This query parameter specifies the maximum number of items to return from the result set on a page in the paginated response. Minimum: 1 &amp;nbsp; &amp;nbsp;Maximum: 200 Default: 10 (optional)
     * @param string $offset                  This query parameter specifies the number of results to skip in the result set before returning the first result in the paginated response. Combine offset with the limit query parameter to control the items returned in the response. For example, if you supply an offset of 0 and a limit of 10, the first page of the response contains the first 10 results from the complete list of items retrieved by the call. If offset is 10 and limit is 20, the first page of the response contains items 11-30 from the complete result set. Default: 0 (optional)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function findEligibleItemsAsync($x_ebay_c_marketplace_id, $limit = null, $offset = null)
    {
        return $this->findEligibleItemsAsyncWithHttpInfo($x_ebay_c_marketplace_id, $limit, $offset)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation findEligibleItemsAsyncWithHttpInfo.
     *
     * @param string $x_ebay_c_marketplace_id The eBay marketplace on which you want to search for eligible listings. For a complete list of supported marketplaces, see Negotiation API requirements and restrictions. (required)
     * @param string $limit                   This query parameter specifies the maximum number of items to return from the result set on a page in the paginated response. Minimum: 1 &amp;nbsp; &amp;nbsp;Maximum: 200 Default: 10 (optional)
     * @param string $offset                  This query parameter specifies the number of results to skip in the result set before returning the first result in the paginated response. Combine offset with the limit query parameter to control the items returned in the response. For example, if you supply an offset of 0 and a limit of 10, the first page of the response contains the first 10 results from the complete list of items retrieved by the call. If offset is 10 and limit is 20, the first page of the response contains items 11-30 from the complete result set. Default: 0 (optional)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function findEligibleItemsAsyncWithHttpInfo($x_ebay_c_marketplace_id, $limit = null, $offset = null)
    {
        $returnType = '\TNT\Ebay\Sell\Negotiation\V1\Model\PagedEligibleItemCollection';
        $request = $this->findEligibleItemsRequest($x_ebay_c_marketplace_id, $limit, $offset);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); // Stream goes to serializer.
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders(),
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();

                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), (string) $response->getBody(), $exception instanceof \Throwable ? $exception : null);
                }
            );
    }

    /**
     * Create request for operation 'findEligibleItems'.
     *
     * @param string $x_ebay_c_marketplace_id The eBay marketplace on which you want to search for eligible listings. For a complete list of supported marketplaces, see Negotiation API requirements and restrictions. (required)
     * @param string $limit                   This query parameter specifies the maximum number of items to return from the result set on a page in the paginated response. Minimum: 1 &amp;nbsp; &amp;nbsp;Maximum: 200 Default: 10 (optional)
     * @param string $offset                  This query parameter specifies the number of results to skip in the result set before returning the first result in the paginated response. Combine offset with the limit query parameter to control the items returned in the response. For example, if you supply an offset of 0 and a limit of 10, the first page of the response contains the first 10 results from the complete list of items retrieved by the call. If offset is 10 and limit is 20, the first page of the response contains items 11-30 from the complete result set. Default: 0 (optional)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Psr7\Request
     */
    public function findEligibleItemsRequest($x_ebay_c_marketplace_id, $limit = null, $offset = null)
    {
        // Verify the required parameter 'x_ebay_c_marketplace_id' is set.
        if ($x_ebay_c_marketplace_id === null || (\is_array($x_ebay_c_marketplace_id) && count($x_ebay_c_marketplace_id) === 0)) {
            throw new \InvalidArgumentException('Missing the required parameter $x_ebay_c_marketplace_id when calling findEligibleItems');
        }

        $resourcePath = '/find_eligible_items';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $limit,
            'limit', // param base name
            'string', // openApiType
            'form', // style
            true // explode
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $offset,
            'offset', // param base name
            'string', // openApiType
            'form', // style
            true // explode
        ) ?? []);

        // header params
        if ($x_ebay_c_marketplace_id !== null) {
            $headerParams['X-EBAY-C-MARKETPLACE-ID'] = ObjectSerializer::toHeaderValue($x_ebay_c_marketplace_id);
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // For model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];

                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem,
                        ];
                    }
                }

                // For HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);
            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);
            } else {
                // For HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($queryParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if (! empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer '.$this->config->getAccessToken();
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

        $query = ObjectSerializer::buildQuery($queryParams);

        return new Request(
            'GET',
            $this->config->getHost().$resourcePath.($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation sendOfferToInterestedBuyers.
     *
     * @param string                                                  $x_ebay_c_marketplace_id The eBay marketplace on which your listings with &amp;quot;eligible&amp;quot; buyers appear. For a complete list of supported marketplaces, see Negotiation API requirements and restrictions. (required)
     * @param \TNT\Ebay\Sell\Negotiation\V1\Model\CreateOffersRequest $create_offers_request   Send offer to eligible items request. (optional)
     *
     * @throws \TNT\Ebay\Sell\Negotiation\V1\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return \TNT\Ebay\Sell\Negotiation\V1\Model\SendOfferToInterestedBuyersCollectionResponse
     */
    public function sendOfferToInterestedBuyers($x_ebay_c_marketplace_id, $create_offers_request = null)
    {
        [$response] = $this->sendOfferToInterestedBuyersWithHttpInfo($x_ebay_c_marketplace_id, $create_offers_request);

        return $response;
    }

    /**
     * Operation sendOfferToInterestedBuyersWithHttpInfo.
     *
     * @param string                                                  $x_ebay_c_marketplace_id The eBay marketplace on which your listings with &amp;quot;eligible&amp;quot; buyers appear. For a complete list of supported marketplaces, see Negotiation API requirements and restrictions. (required)
     * @param \TNT\Ebay\Sell\Negotiation\V1\Model\CreateOffersRequest $create_offers_request   Send offer to eligible items request. (optional)
     *
     * @throws \TNT\Ebay\Sell\Negotiation\V1\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return array of \TNT\Ebay\Sell\Negotiation\V1\Model\SendOfferToInterestedBuyersCollectionResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function sendOfferToInterestedBuyersWithHttpInfo($x_ebay_c_marketplace_id, $create_offers_request = null)
    {
        $request = $this->sendOfferToInterestedBuyersRequest($x_ebay_c_marketplace_id, $create_offers_request);

        try {
            $options = $this->createHttpClientOption();

            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException("[{$e->getCode()}] {$e->getMessage()}", (int) $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null, $e->getResponse() ? (string) $e->getResponse()->getBody() : null, $e);
            } catch (ConnectException $e) {
                throw new ApiException("[{$e->getCode()}] {$e->getMessage()}", (int) $e->getCode(), null, null, $e);
            } catch (GuzzleException $e) {
                throw new ApiException("[{$e->getCode()}] {$e->getMessage()}", (int) $e->getCode(), null, null, $e);
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, (string) $request->getUri()), $statusCode, $response->getHeaders(), (string) $response->getBody());
            }

            switch ($statusCode) {
                case 200:
                    if ('\TNT\Ebay\Sell\Negotiation\V1\Model\SendOfferToInterestedBuyersCollectionResponse' === '\SplFileObject') {
                        $content = $response->getBody(); // Stream goes to serializer.
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\TNT\Ebay\Sell\Negotiation\V1\Model\SendOfferToInterestedBuyersCollectionResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders(),
                    ];
            }

            $returnType = '\TNT\Ebay\Sell\Negotiation\V1\Model\SendOfferToInterestedBuyersCollectionResponse';

            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); // Stream goes to serializer.
            } else {
                $content = (string) $response->getBody();
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders(),
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TNT\Ebay\Sell\Negotiation\V1\Model\SendOfferToInterestedBuyersCollectionResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation sendOfferToInterestedBuyersAsync.
     *
     * @param string                                                  $x_ebay_c_marketplace_id The eBay marketplace on which your listings with &amp;quot;eligible&amp;quot; buyers appear. For a complete list of supported marketplaces, see Negotiation API requirements and restrictions. (required)
     * @param \TNT\Ebay\Sell\Negotiation\V1\Model\CreateOffersRequest $create_offers_request   Send offer to eligible items request. (optional)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function sendOfferToInterestedBuyersAsync($x_ebay_c_marketplace_id, $create_offers_request = null)
    {
        return $this->sendOfferToInterestedBuyersAsyncWithHttpInfo($x_ebay_c_marketplace_id, $create_offers_request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation sendOfferToInterestedBuyersAsyncWithHttpInfo.
     *
     * @param string                                                  $x_ebay_c_marketplace_id The eBay marketplace on which your listings with &amp;quot;eligible&amp;quot; buyers appear. For a complete list of supported marketplaces, see Negotiation API requirements and restrictions. (required)
     * @param \TNT\Ebay\Sell\Negotiation\V1\Model\CreateOffersRequest $create_offers_request   Send offer to eligible items request. (optional)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function sendOfferToInterestedBuyersAsyncWithHttpInfo($x_ebay_c_marketplace_id, $create_offers_request = null)
    {
        $returnType = '\TNT\Ebay\Sell\Negotiation\V1\Model\SendOfferToInterestedBuyersCollectionResponse';
        $request = $this->sendOfferToInterestedBuyersRequest($x_ebay_c_marketplace_id, $create_offers_request);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); // Stream goes to serializer.
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders(),
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();

                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), (string) $response->getBody(), $exception instanceof \Throwable ? $exception : null);
                }
            );
    }

    /**
     * Create request for operation 'sendOfferToInterestedBuyers'.
     *
     * @param string                                                  $x_ebay_c_marketplace_id The eBay marketplace on which your listings with &amp;quot;eligible&amp;quot; buyers appear. For a complete list of supported marketplaces, see Negotiation API requirements and restrictions. (required)
     * @param \TNT\Ebay\Sell\Negotiation\V1\Model\CreateOffersRequest $create_offers_request   Send offer to eligible items request. (optional)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Psr7\Request
     */
    public function sendOfferToInterestedBuyersRequest($x_ebay_c_marketplace_id, $create_offers_request = null)
    {
        // Verify the required parameter 'x_ebay_c_marketplace_id' is set.
        if ($x_ebay_c_marketplace_id === null || (\is_array($x_ebay_c_marketplace_id) && count($x_ebay_c_marketplace_id) === 0)) {
            throw new \InvalidArgumentException('Missing the required parameter $x_ebay_c_marketplace_id when calling sendOfferToInterestedBuyers');
        }

        $resourcePath = '/send_offer_to_interested_buyers';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // header params
        if ($x_ebay_c_marketplace_id !== null) {
            $headerParams['X-EBAY-C-MARKETPLACE-ID'] = ObjectSerializer::toHeaderValue($x_ebay_c_marketplace_id);
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // For model (json/xml)
        if (isset($create_offers_request)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($create_offers_request));
            } else {
                $httpBody = $create_offers_request;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];

                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem,
                        ];
                    }
                }

                // For HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);
            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);
            } else {
                // For HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($queryParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if (! empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer '.$this->config->getAccessToken();
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

        $query = ObjectSerializer::buildQuery($queryParams);

        return new Request(
            'POST',
            $this->config->getHost().$resourcePath.($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option.
     *
     * @throws \RuntimeException on file opening failure
     *
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];

        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'ab');

            if (! $options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: '.$this->config->getDebugFile());
            }
        }

        return $options;
    }
}
