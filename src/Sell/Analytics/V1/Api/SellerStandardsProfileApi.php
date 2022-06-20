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
 * SellerStandardsProfileApi.
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
 * Seller Service Metrics API.
 *
 * The <i>Analytics API</i> provides data and information about a seller and their eBay business.  <br><br>The resources and methods in this API let sellers review information on their listing performance, metrics on their customer service performance, and details on their eBay seller performance rating.  <br><br>The three resources in the Analytics API provide the following data and information: <ul><li><b>Customer Service Metric</b> &ndash; Returns benchmark data and a metric rating pertaining to a seller's customer service performance as compared to other seller's in the same peer group.</li> <li><b>Traffic Report</b> &ndash; Returns data and information that shows how buyers are engaging with a seller's listings.</li> <li><b>Seller Standards Profile</b> &ndash; Returns information pertaining to a seller's profile rating.</li></ul> Sellers can use the data and information returned by the various Analytics API methods to determine where they can make improvements to increase sales and how they might improve their seller status as viewed by eBay buyers.  <br><br>For details on using this API, see <a href=\"/api-docs/sell/static/performance/analyzing-performance.html\" title=\"Selling Integration Guide\">Analyzing seller performance</a>.
 *
 * The version of the OpenAPI document: 1.3.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace TNT\Ebay\Sell\Analytics\V1\Api;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use TNT\Ebay\Sell\Analytics\V1\ApiException;
use TNT\Ebay\Sell\Analytics\V1\Configuration;
use TNT\Ebay\Sell\Analytics\V1\HeaderSelector;
use TNT\Ebay\Sell\Analytics\V1\ObjectSerializer;

/**
 * SellerStandardsProfileApi Class Doc Comment.
 *
 * @category Class
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 */
class SellerStandardsProfileApi
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
     * Operation findSellerStandardsProfiles.
     *
     * @throws \TNT\Ebay\Sell\Analytics\V1\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return \TNT\Ebay\Sell\Analytics\V1\Model\FindSellerStandardsProfilesResponse
     */
    public function findSellerStandardsProfiles()
    {
        [$response] = $this->findSellerStandardsProfilesWithHttpInfo();

        return $response;
    }

    /**
     * Operation findSellerStandardsProfilesWithHttpInfo.
     *
     * @throws \TNT\Ebay\Sell\Analytics\V1\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return array of \TNT\Ebay\Sell\Analytics\V1\Model\FindSellerStandardsProfilesResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function findSellerStandardsProfilesWithHttpInfo()
    {
        $request = $this->findSellerStandardsProfilesRequest();

        try {
            $options = $this->createHttpClientOption();

            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException("[{$e->getCode()}] {$e->getMessage()}", (int) $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null, $e->getResponse() ? (string) $e->getResponse()->getBody() : null);
            } catch (ConnectException $e) {
                throw new ApiException("[{$e->getCode()}] {$e->getMessage()}", (int) $e->getCode(), null, null);
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, (string) $request->getUri()), $statusCode, $response->getHeaders(), (string) $response->getBody());
            }

            switch ($statusCode) {
                case 200:
                    if ('\TNT\Ebay\Sell\Analytics\V1\Model\FindSellerStandardsProfilesResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\TNT\Ebay\Sell\Analytics\V1\Model\FindSellerStandardsProfilesResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders(),
                    ];
            }

            $returnType = '\TNT\Ebay\Sell\Analytics\V1\Model\FindSellerStandardsProfilesResponse';

            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
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
                        '\TNT\Ebay\Sell\Analytics\V1\Model\FindSellerStandardsProfilesResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation findSellerStandardsProfilesAsync.
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function findSellerStandardsProfilesAsync()
    {
        return $this->findSellerStandardsProfilesAsyncWithHttpInfo()
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation findSellerStandardsProfilesAsyncWithHttpInfo.
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function findSellerStandardsProfilesAsyncWithHttpInfo()
    {
        $returnType = '\TNT\Ebay\Sell\Analytics\V1\Model\FindSellerStandardsProfilesResponse';
        $request = $this->findSellerStandardsProfilesRequest();

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
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

                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), (string) $response->getBody());
                }
            );
    }

    /**
     * Create request for operation 'findSellerStandardsProfiles'.
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Psr7\Request
     */
    public function findSellerStandardsProfilesRequest()
    {
        $resourcePath = '/seller_standards_profile';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

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
     * Operation getSellerStandardsProfile.
     *
     * @param string $cycle   The period covered by the returned standards profile evaluation.  &lt;br&gt;&lt;br&gt;Supply one of two values, &lt;code&gt;CURRENT&lt;/code&gt; means the response reflects eBay&#39;s most recent monthly standards evaluation and &lt;code&gt;PROJECTED&lt;/code&gt; means the response reflect the seller&#39;s projected monthly evaluation, as calculated at the time of the request. (required)
     * @param string $program This input value specifies the region used to determine the seller&#39;s standards profile.  &lt;br&gt;&lt;br&gt;Supply one of the four following values, &lt;code&gt;PROGRAM_DE&lt;/code&gt;, &lt;code&gt;PROGRAM_UK&lt;/code&gt;, &lt;code&gt;PROGRAM_US&lt;/code&gt;, or &lt;code&gt;PROGRAM_GLOBAL&lt;/code&gt;. (required)
     *
     * @throws \TNT\Ebay\Sell\Analytics\V1\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return \TNT\Ebay\Sell\Analytics\V1\Model\StandardsProfile
     */
    public function getSellerStandardsProfile($cycle, $program)
    {
        [$response] = $this->getSellerStandardsProfileWithHttpInfo($cycle, $program);

        return $response;
    }

    /**
     * Operation getSellerStandardsProfileWithHttpInfo.
     *
     * @param string $cycle   The period covered by the returned standards profile evaluation.  &lt;br&gt;&lt;br&gt;Supply one of two values, &lt;code&gt;CURRENT&lt;/code&gt; means the response reflects eBay&#39;s most recent monthly standards evaluation and &lt;code&gt;PROJECTED&lt;/code&gt; means the response reflect the seller&#39;s projected monthly evaluation, as calculated at the time of the request. (required)
     * @param string $program This input value specifies the region used to determine the seller&#39;s standards profile.  &lt;br&gt;&lt;br&gt;Supply one of the four following values, &lt;code&gt;PROGRAM_DE&lt;/code&gt;, &lt;code&gt;PROGRAM_UK&lt;/code&gt;, &lt;code&gt;PROGRAM_US&lt;/code&gt;, or &lt;code&gt;PROGRAM_GLOBAL&lt;/code&gt;. (required)
     *
     * @throws \TNT\Ebay\Sell\Analytics\V1\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return array of \TNT\Ebay\Sell\Analytics\V1\Model\StandardsProfile, HTTP status code, HTTP response headers (array of strings)
     */
    public function getSellerStandardsProfileWithHttpInfo($cycle, $program)
    {
        $request = $this->getSellerStandardsProfileRequest($cycle, $program);

        try {
            $options = $this->createHttpClientOption();

            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException("[{$e->getCode()}] {$e->getMessage()}", (int) $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null, $e->getResponse() ? (string) $e->getResponse()->getBody() : null);
            } catch (ConnectException $e) {
                throw new ApiException("[{$e->getCode()}] {$e->getMessage()}", (int) $e->getCode(), null, null);
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, (string) $request->getUri()), $statusCode, $response->getHeaders(), (string) $response->getBody());
            }

            switch ($statusCode) {
                case 200:
                    if ('\TNT\Ebay\Sell\Analytics\V1\Model\StandardsProfile' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\TNT\Ebay\Sell\Analytics\V1\Model\StandardsProfile', []),
                        $response->getStatusCode(),
                        $response->getHeaders(),
                    ];
            }

            $returnType = '\TNT\Ebay\Sell\Analytics\V1\Model\StandardsProfile';

            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
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
                        '\TNT\Ebay\Sell\Analytics\V1\Model\StandardsProfile',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getSellerStandardsProfileAsync.
     *
     * @param string $cycle   The period covered by the returned standards profile evaluation.  &lt;br&gt;&lt;br&gt;Supply one of two values, &lt;code&gt;CURRENT&lt;/code&gt; means the response reflects eBay&#39;s most recent monthly standards evaluation and &lt;code&gt;PROJECTED&lt;/code&gt; means the response reflect the seller&#39;s projected monthly evaluation, as calculated at the time of the request. (required)
     * @param string $program This input value specifies the region used to determine the seller&#39;s standards profile.  &lt;br&gt;&lt;br&gt;Supply one of the four following values, &lt;code&gt;PROGRAM_DE&lt;/code&gt;, &lt;code&gt;PROGRAM_UK&lt;/code&gt;, &lt;code&gt;PROGRAM_US&lt;/code&gt;, or &lt;code&gt;PROGRAM_GLOBAL&lt;/code&gt;. (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getSellerStandardsProfileAsync($cycle, $program)
    {
        return $this->getSellerStandardsProfileAsyncWithHttpInfo($cycle, $program)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getSellerStandardsProfileAsyncWithHttpInfo.
     *
     * @param string $cycle   The period covered by the returned standards profile evaluation.  &lt;br&gt;&lt;br&gt;Supply one of two values, &lt;code&gt;CURRENT&lt;/code&gt; means the response reflects eBay&#39;s most recent monthly standards evaluation and &lt;code&gt;PROJECTED&lt;/code&gt; means the response reflect the seller&#39;s projected monthly evaluation, as calculated at the time of the request. (required)
     * @param string $program This input value specifies the region used to determine the seller&#39;s standards profile.  &lt;br&gt;&lt;br&gt;Supply one of the four following values, &lt;code&gt;PROGRAM_DE&lt;/code&gt;, &lt;code&gt;PROGRAM_UK&lt;/code&gt;, &lt;code&gt;PROGRAM_US&lt;/code&gt;, or &lt;code&gt;PROGRAM_GLOBAL&lt;/code&gt;. (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getSellerStandardsProfileAsyncWithHttpInfo($cycle, $program)
    {
        $returnType = '\TNT\Ebay\Sell\Analytics\V1\Model\StandardsProfile';
        $request = $this->getSellerStandardsProfileRequest($cycle, $program);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
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

                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), (string) $response->getBody());
                }
            );
    }

    /**
     * Create request for operation 'getSellerStandardsProfile'.
     *
     * @param string $cycle   The period covered by the returned standards profile evaluation.  &lt;br&gt;&lt;br&gt;Supply one of two values, &lt;code&gt;CURRENT&lt;/code&gt; means the response reflects eBay&#39;s most recent monthly standards evaluation and &lt;code&gt;PROJECTED&lt;/code&gt; means the response reflect the seller&#39;s projected monthly evaluation, as calculated at the time of the request. (required)
     * @param string $program This input value specifies the region used to determine the seller&#39;s standards profile.  &lt;br&gt;&lt;br&gt;Supply one of the four following values, &lt;code&gt;PROGRAM_DE&lt;/code&gt;, &lt;code&gt;PROGRAM_UK&lt;/code&gt;, &lt;code&gt;PROGRAM_US&lt;/code&gt;, or &lt;code&gt;PROGRAM_GLOBAL&lt;/code&gt;. (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getSellerStandardsProfileRequest($cycle, $program)
    {
        // verify the required parameter 'cycle' is set
        if ($cycle === null || (is_array($cycle) && count($cycle) === 0)) {
            throw new \InvalidArgumentException('Missing the required parameter $cycle when calling getSellerStandardsProfile');
        }
        // verify the required parameter 'program' is set
        if ($program === null || (is_array($program) && count($program) === 0)) {
            throw new \InvalidArgumentException('Missing the required parameter $program when calling getSellerStandardsProfile');
        }

        $resourcePath = '/seller_standards_profile/{program}/{cycle}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // path params
        if ($cycle !== null) {
            $resourcePath = str_replace(
                '{'.'cycle'.'}',
                ObjectSerializer::toPathValue($cycle),
                $resourcePath
            );
        }
        // path params
        if ($program !== null) {
            $resourcePath = str_replace(
                '{'.'program'.'}',
                ObjectSerializer::toPathValue($program),
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
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');

            if (! $options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: '.$this->config->getDebugFile());
            }
        }

        return $options;
    }
}
