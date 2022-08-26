<?php

/**
 * This file is part of the brandon14/ebay-sdk-php package.
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
 * RateTableApi.
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
 * Rate Table API.
 *
 * This API allows sellers to retrieve and manage their custom shipping rate tables.
 *
 * The version of the OpenAPI document: 2.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace TNT\Ebay\Sell\Account\V2\Api;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use TNT\Ebay\Sell\Account\V2\ApiException;
use TNT\Ebay\Sell\Account\V2\Configuration;
use TNT\Ebay\Sell\Account\V2\HeaderSelector;
use TNT\Ebay\Sell\Account\V2\ObjectSerializer;

/**
 * RateTableApi Class Doc Comment.
 *
 * @category Class
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 */
class RateTableApi
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
     * Operation getRateTable.
     *
     * @param string $rate_table_id The unique identifier for the shipping rate table. This identifier is generated by eBay when a shipping rate table is first created.&lt;br/&gt;&lt;br/&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;strong&gt;Note:&lt;/strong&gt; To retrieve a list of all &lt;b&gt;rateTableId&lt;/b&gt; values, issue a &lt;a href&#x3D;\&quot;/api-docs/sell/account/resources/rate_table/methods/getRateTables\&quot; target&#x3D;\&quot;_blank\&quot;&gt;getRateTables&lt;/a&gt; call (part of &lt;a href&#x3D;\&quot;/api-docs/sell/account/static/overview.html \&quot; target&#x3D;\&quot;_blank\&quot;&gt;Account API V1&lt;/a&gt;,) with no &lt;b&gt;countryCode&lt;/b&gt; query parameter specifed. This will return a list of all shipping rate tables defined for each marketplace and their corresponding &lt;b&gt;rateTableId&lt;/b&gt; values.&lt;/span&gt; (required)
     *
     * @throws \TNT\Ebay\Sell\Account\V2\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return \TNT\Ebay\Sell\Account\V2\Model\RateTableDetails
     */
    public function getRateTable($rate_table_id)
    {
        [$response] = $this->getRateTableWithHttpInfo($rate_table_id);

        return $response;
    }

    /**
     * Operation getRateTableWithHttpInfo.
     *
     * @param string $rate_table_id The unique identifier for the shipping rate table. This identifier is generated by eBay when a shipping rate table is first created.&lt;br/&gt;&lt;br/&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;strong&gt;Note:&lt;/strong&gt; To retrieve a list of all &lt;b&gt;rateTableId&lt;/b&gt; values, issue a &lt;a href&#x3D;\&quot;/api-docs/sell/account/resources/rate_table/methods/getRateTables\&quot; target&#x3D;\&quot;_blank\&quot;&gt;getRateTables&lt;/a&gt; call (part of &lt;a href&#x3D;\&quot;/api-docs/sell/account/static/overview.html \&quot; target&#x3D;\&quot;_blank\&quot;&gt;Account API V1&lt;/a&gt;,) with no &lt;b&gt;countryCode&lt;/b&gt; query parameter specifed. This will return a list of all shipping rate tables defined for each marketplace and their corresponding &lt;b&gt;rateTableId&lt;/b&gt; values.&lt;/span&gt; (required)
     *
     * @throws \TNT\Ebay\Sell\Account\V2\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return array of \TNT\Ebay\Sell\Account\V2\Model\RateTableDetails, HTTP status code, HTTP response headers (array of strings)
     */
    public function getRateTableWithHttpInfo($rate_table_id)
    {
        $request = $this->getRateTableRequest($rate_table_id);

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
                    if ('\TNT\Ebay\Sell\Account\V2\Model\RateTableDetails' === '\SplFileObject') {
                        $content = $response->getBody(); // Stream goes to serializer.
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\TNT\Ebay\Sell\Account\V2\Model\RateTableDetails', []),
                        $response->getStatusCode(),
                        $response->getHeaders(),
                    ];
            }

            $returnType = '\TNT\Ebay\Sell\Account\V2\Model\RateTableDetails';

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
                        '\TNT\Ebay\Sell\Account\V2\Model\RateTableDetails',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getRateTableAsync.
     *
     * @param string $rate_table_id The unique identifier for the shipping rate table. This identifier is generated by eBay when a shipping rate table is first created.&lt;br/&gt;&lt;br/&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;strong&gt;Note:&lt;/strong&gt; To retrieve a list of all &lt;b&gt;rateTableId&lt;/b&gt; values, issue a &lt;a href&#x3D;\&quot;/api-docs/sell/account/resources/rate_table/methods/getRateTables\&quot; target&#x3D;\&quot;_blank\&quot;&gt;getRateTables&lt;/a&gt; call (part of &lt;a href&#x3D;\&quot;/api-docs/sell/account/static/overview.html \&quot; target&#x3D;\&quot;_blank\&quot;&gt;Account API V1&lt;/a&gt;,) with no &lt;b&gt;countryCode&lt;/b&gt; query parameter specifed. This will return a list of all shipping rate tables defined for each marketplace and their corresponding &lt;b&gt;rateTableId&lt;/b&gt; values.&lt;/span&gt; (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getRateTableAsync($rate_table_id)
    {
        return $this->getRateTableAsyncWithHttpInfo($rate_table_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getRateTableAsyncWithHttpInfo.
     *
     * @param string $rate_table_id The unique identifier for the shipping rate table. This identifier is generated by eBay when a shipping rate table is first created.&lt;br/&gt;&lt;br/&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;strong&gt;Note:&lt;/strong&gt; To retrieve a list of all &lt;b&gt;rateTableId&lt;/b&gt; values, issue a &lt;a href&#x3D;\&quot;/api-docs/sell/account/resources/rate_table/methods/getRateTables\&quot; target&#x3D;\&quot;_blank\&quot;&gt;getRateTables&lt;/a&gt; call (part of &lt;a href&#x3D;\&quot;/api-docs/sell/account/static/overview.html \&quot; target&#x3D;\&quot;_blank\&quot;&gt;Account API V1&lt;/a&gt;,) with no &lt;b&gt;countryCode&lt;/b&gt; query parameter specifed. This will return a list of all shipping rate tables defined for each marketplace and their corresponding &lt;b&gt;rateTableId&lt;/b&gt; values.&lt;/span&gt; (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getRateTableAsyncWithHttpInfo($rate_table_id)
    {
        $returnType = '\TNT\Ebay\Sell\Account\V2\Model\RateTableDetails';
        $request = $this->getRateTableRequest($rate_table_id);

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
     * Create request for operation 'getRateTable'.
     *
     * @param string $rate_table_id The unique identifier for the shipping rate table. This identifier is generated by eBay when a shipping rate table is first created.&lt;br/&gt;&lt;br/&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;strong&gt;Note:&lt;/strong&gt; To retrieve a list of all &lt;b&gt;rateTableId&lt;/b&gt; values, issue a &lt;a href&#x3D;\&quot;/api-docs/sell/account/resources/rate_table/methods/getRateTables\&quot; target&#x3D;\&quot;_blank\&quot;&gt;getRateTables&lt;/a&gt; call (part of &lt;a href&#x3D;\&quot;/api-docs/sell/account/static/overview.html \&quot; target&#x3D;\&quot;_blank\&quot;&gt;Account API V1&lt;/a&gt;,) with no &lt;b&gt;countryCode&lt;/b&gt; query parameter specifed. This will return a list of all shipping rate tables defined for each marketplace and their corresponding &lt;b&gt;rateTableId&lt;/b&gt; values.&lt;/span&gt; (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getRateTableRequest($rate_table_id)
    {
        // Verify the required parameter 'rate_table_id' is set.
        if ($rate_table_id === null || (\is_array($rate_table_id) && count($rate_table_id) === 0)) {
            throw new \InvalidArgumentException('Missing the required parameter $rate_table_id when calling getRateTable');
        }

        $resourcePath = '/rate_table/{rate_table_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // path params
        if ($rate_table_id !== null) {
            $resourcePath = str_replace(
                '{'.'rate_table_id'.'}',
                ObjectSerializer::toPathValue($rate_table_id),
                $resourcePath
            );
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
     * Operation updateShippingCost.
     *
     * @param string                                          $rate_table_id     The unique identifier for the shipping rate table. This identifier is generated by eBay when a shipping rate table is first created.&lt;br/&gt;&lt;br/&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;strong&gt;Note:&lt;/strong&gt; To retrieve a list of all &lt;b&gt;rateTableId&lt;/b&gt; values, issue a &lt;a href&#x3D;\&quot;/api-docs/sell/account/resources/rate_table/methods/getRateTables\&quot; target&#x3D;\&quot;_blank\&quot;&gt;getRateTables&lt;/a&gt; call (part of &lt;a href&#x3D;\&quot;/api-docs/sell/account/static/overview.html \&quot; target&#x3D;\&quot;_blank\&quot;&gt;Account API V1&lt;/a&gt;,) with no &lt;b&gt;countryCode&lt;/b&gt; query parameter specifed. This will return a list of all shipping rate tables defined for each marketplace and their corresponding &lt;b&gt;rateTableId&lt;/b&gt; values. (required)
     * @param \TNT\Ebay\Sell\Account\V2\Model\RateTableUpdate $rate_table_update Request to update the shipping costs for the identified shipping rate table. (optional)
     *
     * @throws \TNT\Ebay\Sell\Account\V2\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return void
     */
    public function updateShippingCost($rate_table_id, $rate_table_update = null)
    {
        $this->updateShippingCostWithHttpInfo($rate_table_id, $rate_table_update);
    }

    /**
     * Operation updateShippingCostWithHttpInfo.
     *
     * @param string                                          $rate_table_id     The unique identifier for the shipping rate table. This identifier is generated by eBay when a shipping rate table is first created.&lt;br/&gt;&lt;br/&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;strong&gt;Note:&lt;/strong&gt; To retrieve a list of all &lt;b&gt;rateTableId&lt;/b&gt; values, issue a &lt;a href&#x3D;\&quot;/api-docs/sell/account/resources/rate_table/methods/getRateTables\&quot; target&#x3D;\&quot;_blank\&quot;&gt;getRateTables&lt;/a&gt; call (part of &lt;a href&#x3D;\&quot;/api-docs/sell/account/static/overview.html \&quot; target&#x3D;\&quot;_blank\&quot;&gt;Account API V1&lt;/a&gt;,) with no &lt;b&gt;countryCode&lt;/b&gt; query parameter specifed. This will return a list of all shipping rate tables defined for each marketplace and their corresponding &lt;b&gt;rateTableId&lt;/b&gt; values. (required)
     * @param \TNT\Ebay\Sell\Account\V2\Model\RateTableUpdate $rate_table_update Request to update the shipping costs for the identified shipping rate table. (optional)
     *
     * @throws \TNT\Ebay\Sell\Account\V2\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateShippingCostWithHttpInfo($rate_table_id, $rate_table_update = null)
    {
        $request = $this->updateShippingCostRequest($rate_table_id, $rate_table_update);

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

            return [null, $statusCode, $response->getHeaders()];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation updateShippingCostAsync.
     *
     * @param string                                          $rate_table_id     The unique identifier for the shipping rate table. This identifier is generated by eBay when a shipping rate table is first created.&lt;br/&gt;&lt;br/&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;strong&gt;Note:&lt;/strong&gt; To retrieve a list of all &lt;b&gt;rateTableId&lt;/b&gt; values, issue a &lt;a href&#x3D;\&quot;/api-docs/sell/account/resources/rate_table/methods/getRateTables\&quot; target&#x3D;\&quot;_blank\&quot;&gt;getRateTables&lt;/a&gt; call (part of &lt;a href&#x3D;\&quot;/api-docs/sell/account/static/overview.html \&quot; target&#x3D;\&quot;_blank\&quot;&gt;Account API V1&lt;/a&gt;,) with no &lt;b&gt;countryCode&lt;/b&gt; query parameter specifed. This will return a list of all shipping rate tables defined for each marketplace and their corresponding &lt;b&gt;rateTableId&lt;/b&gt; values. (required)
     * @param \TNT\Ebay\Sell\Account\V2\Model\RateTableUpdate $rate_table_update Request to update the shipping costs for the identified shipping rate table. (optional)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateShippingCostAsync($rate_table_id, $rate_table_update = null)
    {
        return $this->updateShippingCostAsyncWithHttpInfo($rate_table_id, $rate_table_update)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation updateShippingCostAsyncWithHttpInfo.
     *
     * @param string                                          $rate_table_id     The unique identifier for the shipping rate table. This identifier is generated by eBay when a shipping rate table is first created.&lt;br/&gt;&lt;br/&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;strong&gt;Note:&lt;/strong&gt; To retrieve a list of all &lt;b&gt;rateTableId&lt;/b&gt; values, issue a &lt;a href&#x3D;\&quot;/api-docs/sell/account/resources/rate_table/methods/getRateTables\&quot; target&#x3D;\&quot;_blank\&quot;&gt;getRateTables&lt;/a&gt; call (part of &lt;a href&#x3D;\&quot;/api-docs/sell/account/static/overview.html \&quot; target&#x3D;\&quot;_blank\&quot;&gt;Account API V1&lt;/a&gt;,) with no &lt;b&gt;countryCode&lt;/b&gt; query parameter specifed. This will return a list of all shipping rate tables defined for each marketplace and their corresponding &lt;b&gt;rateTableId&lt;/b&gt; values. (required)
     * @param \TNT\Ebay\Sell\Account\V2\Model\RateTableUpdate $rate_table_update Request to update the shipping costs for the identified shipping rate table. (optional)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateShippingCostAsyncWithHttpInfo($rate_table_id, $rate_table_update = null)
    {
        $returnType = '';
        $request = $this->updateShippingCostRequest($rate_table_id, $rate_table_update);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();

                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), (string) $response->getBody(), $exception instanceof \Throwable ? $exception : null);
                }
            );
    }

    /**
     * Create request for operation 'updateShippingCost'.
     *
     * @param string                                          $rate_table_id     The unique identifier for the shipping rate table. This identifier is generated by eBay when a shipping rate table is first created.&lt;br/&gt;&lt;br/&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;strong&gt;Note:&lt;/strong&gt; To retrieve a list of all &lt;b&gt;rateTableId&lt;/b&gt; values, issue a &lt;a href&#x3D;\&quot;/api-docs/sell/account/resources/rate_table/methods/getRateTables\&quot; target&#x3D;\&quot;_blank\&quot;&gt;getRateTables&lt;/a&gt; call (part of &lt;a href&#x3D;\&quot;/api-docs/sell/account/static/overview.html \&quot; target&#x3D;\&quot;_blank\&quot;&gt;Account API V1&lt;/a&gt;,) with no &lt;b&gt;countryCode&lt;/b&gt; query parameter specifed. This will return a list of all shipping rate tables defined for each marketplace and their corresponding &lt;b&gt;rateTableId&lt;/b&gt; values. (required)
     * @param \TNT\Ebay\Sell\Account\V2\Model\RateTableUpdate $rate_table_update Request to update the shipping costs for the identified shipping rate table. (optional)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Psr7\Request
     */
    public function updateShippingCostRequest($rate_table_id, $rate_table_update = null)
    {
        // Verify the required parameter 'rate_table_id' is set.
        if ($rate_table_id === null || (\is_array($rate_table_id) && count($rate_table_id) === 0)) {
            throw new \InvalidArgumentException('Missing the required parameter $rate_table_id when calling updateShippingCost');
        }

        $resourcePath = '/rate_table/{rate_table_id}/update_shipping_cost';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // path params
        if ($rate_table_id !== null) {
            $resourcePath = str_replace(
                '{'.'rate_table_id'.'}',
                ObjectSerializer::toPathValue($rate_table_id),
                $resourcePath
            );
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                []
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                [],
                ['application/json']
            );
        }

        // For model (json/xml)
        if (isset($rate_table_update)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($rate_table_update));
            } else {
                $httpBody = $rate_table_update;
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
