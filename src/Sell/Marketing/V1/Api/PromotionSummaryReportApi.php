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
 * PromotionSummaryReportApi.
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
 * Marketing API.
 *
 * <p>The <i>Marketing API </i> offers two platforms that sellers can use to promote and advertise their products:</p> <ul><li><b>Promoted Listings</b> is an eBay ad service that lets sellers set up <i>ad campaigns </i> for the products they want to promote. eBay displays the ads in search results and in other marketing modules as <b>SPONSORED</b> listings. If an item in a Promoted Listings campaign sells, the seller is assessed a Promoted Listings fee, which is a seller-specified percentage applied to the sales price. For complete details, refer to the <a href=\"/api-docs/sell/static/marketing/pl-landing.html\">Promoted Listings playbook</a>.</li><li><b>Promotions Manager</b> gives sellers a way to offer discounts on specific items as a way to attract buyers to their inventory. Sellers can set up discounts (such as \"20% off\" and other types of offers) on specific items or on an entire customer order. To further attract buyers, eBay prominently displays promotion <i>teasers</i> throughout buyer flows. For complete details, see <a href=\"/api-docs/sell/static/marketing/promotions-manager.html\">Promotions Manager</a>.</li></ul>  <p><b>Marketing reports</b>, on both the Promoted Listings and Promotions Manager platforms, give sellers information that shows the effectiveness of their marketing strategies. The data gives sellers the ability to review and fine tune their marketing efforts.</p> <p class=\"tablenote\"><b>Important!</b> Sellers must have an active eBay Store subscription, and they must accept the <b>Terms and Conditions</b> before they can make requests to these APIs in the Production environment. There are also site-specific listings requirements and restrictions associated with these marketing tools, as listed in the \"requirements and restrictions\" sections for <a href=\"/api-docs/sell/marketing/static/overview.html#PL-requirements\">Promoted Listings</a> and <a href=\"/api-docs/sell/marketing/static/overview.html#PM-requirements\">Promotions Manager</a>.</p> <p>The table below lists all the Marketing API calls grouped by resource.</p>
 *
 * The version of the OpenAPI document: v1.13.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace TNT\Ebay\Sell\Marketing\V1\Api;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use TNT\Ebay\Sell\Marketing\V1\ApiException;
use TNT\Ebay\Sell\Marketing\V1\Configuration;
use TNT\Ebay\Sell\Marketing\V1\HeaderSelector;
use TNT\Ebay\Sell\Marketing\V1\ObjectSerializer;

/**
 * PromotionSummaryReportApi Class Doc Comment.
 *
 * @category Class
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 */
class PromotionSummaryReportApi
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
     * Operation getPromotionSummaryReport.
     *
     * @param string $marketplace_id The eBay marketplace ID of the site you for which you want a promotion summary report.  &lt;p&gt;&lt;b&gt;Valid values:&lt;/b&gt;&lt;/p&gt;  &lt;ul&gt;&lt;li&gt;&lt;code&gt;EBAY_AU&lt;/code&gt; &#x3D; Australia&lt;/li&gt; &lt;li&gt;&lt;code&gt;EBAY_DE&lt;/code&gt; &#x3D; Germany&lt;/li&gt; &lt;li&gt;&lt;code&gt;EBAY_ES&lt;/code&gt; &#x3D; Spain&lt;/li&gt; &lt;li&gt;&lt;code&gt;EBAY_FR&lt;/code&gt; &#x3D; France&lt;/li&gt; &lt;li&gt;&lt;code&gt;EBAY_GB&lt;/code&gt; &#x3D; Great Britain&lt;/li&gt; &lt;li&gt;&lt;code&gt;EBAY_IT&lt;/code&gt; &#x3D; Italy&lt;/li&gt; &lt;li&gt;&lt;code&gt;EBAY_US&lt;/code&gt; &#x3D; United States&lt;/li&gt;&lt;/ul&gt; (required)
     *
     * @throws \TNT\Ebay\Sell\Marketing\V1\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return \TNT\Ebay\Sell\Marketing\V1\Model\SummaryReportResponse
     */
    public function getPromotionSummaryReport($marketplace_id)
    {
        [$response] = $this->getPromotionSummaryReportWithHttpInfo($marketplace_id);

        return $response;
    }

    /**
     * Operation getPromotionSummaryReportWithHttpInfo.
     *
     * @param string $marketplace_id The eBay marketplace ID of the site you for which you want a promotion summary report.  &lt;p&gt;&lt;b&gt;Valid values:&lt;/b&gt;&lt;/p&gt;  &lt;ul&gt;&lt;li&gt;&lt;code&gt;EBAY_AU&lt;/code&gt; &#x3D; Australia&lt;/li&gt; &lt;li&gt;&lt;code&gt;EBAY_DE&lt;/code&gt; &#x3D; Germany&lt;/li&gt; &lt;li&gt;&lt;code&gt;EBAY_ES&lt;/code&gt; &#x3D; Spain&lt;/li&gt; &lt;li&gt;&lt;code&gt;EBAY_FR&lt;/code&gt; &#x3D; France&lt;/li&gt; &lt;li&gt;&lt;code&gt;EBAY_GB&lt;/code&gt; &#x3D; Great Britain&lt;/li&gt; &lt;li&gt;&lt;code&gt;EBAY_IT&lt;/code&gt; &#x3D; Italy&lt;/li&gt; &lt;li&gt;&lt;code&gt;EBAY_US&lt;/code&gt; &#x3D; United States&lt;/li&gt;&lt;/ul&gt; (required)
     *
     * @throws \TNT\Ebay\Sell\Marketing\V1\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return array of \TNT\Ebay\Sell\Marketing\V1\Model\SummaryReportResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getPromotionSummaryReportWithHttpInfo($marketplace_id)
    {
        $request = $this->getPromotionSummaryReportRequest($marketplace_id);

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
                    if ('\TNT\Ebay\Sell\Marketing\V1\Model\SummaryReportResponse' === '\SplFileObject') {
                        $content = $response->getBody(); // stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\TNT\Ebay\Sell\Marketing\V1\Model\SummaryReportResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders(),
                    ];
            }

            $returnType = '\TNT\Ebay\Sell\Marketing\V1\Model\SummaryReportResponse';

            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); // stream goes to serializer
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
                        '\TNT\Ebay\Sell\Marketing\V1\Model\SummaryReportResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getPromotionSummaryReportAsync.
     *
     * @param string $marketplace_id The eBay marketplace ID of the site you for which you want a promotion summary report.  &lt;p&gt;&lt;b&gt;Valid values:&lt;/b&gt;&lt;/p&gt;  &lt;ul&gt;&lt;li&gt;&lt;code&gt;EBAY_AU&lt;/code&gt; &#x3D; Australia&lt;/li&gt; &lt;li&gt;&lt;code&gt;EBAY_DE&lt;/code&gt; &#x3D; Germany&lt;/li&gt; &lt;li&gt;&lt;code&gt;EBAY_ES&lt;/code&gt; &#x3D; Spain&lt;/li&gt; &lt;li&gt;&lt;code&gt;EBAY_FR&lt;/code&gt; &#x3D; France&lt;/li&gt; &lt;li&gt;&lt;code&gt;EBAY_GB&lt;/code&gt; &#x3D; Great Britain&lt;/li&gt; &lt;li&gt;&lt;code&gt;EBAY_IT&lt;/code&gt; &#x3D; Italy&lt;/li&gt; &lt;li&gt;&lt;code&gt;EBAY_US&lt;/code&gt; &#x3D; United States&lt;/li&gt;&lt;/ul&gt; (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getPromotionSummaryReportAsync($marketplace_id)
    {
        return $this->getPromotionSummaryReportAsyncWithHttpInfo($marketplace_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getPromotionSummaryReportAsyncWithHttpInfo.
     *
     * @param string $marketplace_id The eBay marketplace ID of the site you for which you want a promotion summary report.  &lt;p&gt;&lt;b&gt;Valid values:&lt;/b&gt;&lt;/p&gt;  &lt;ul&gt;&lt;li&gt;&lt;code&gt;EBAY_AU&lt;/code&gt; &#x3D; Australia&lt;/li&gt; &lt;li&gt;&lt;code&gt;EBAY_DE&lt;/code&gt; &#x3D; Germany&lt;/li&gt; &lt;li&gt;&lt;code&gt;EBAY_ES&lt;/code&gt; &#x3D; Spain&lt;/li&gt; &lt;li&gt;&lt;code&gt;EBAY_FR&lt;/code&gt; &#x3D; France&lt;/li&gt; &lt;li&gt;&lt;code&gt;EBAY_GB&lt;/code&gt; &#x3D; Great Britain&lt;/li&gt; &lt;li&gt;&lt;code&gt;EBAY_IT&lt;/code&gt; &#x3D; Italy&lt;/li&gt; &lt;li&gt;&lt;code&gt;EBAY_US&lt;/code&gt; &#x3D; United States&lt;/li&gt;&lt;/ul&gt; (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getPromotionSummaryReportAsyncWithHttpInfo($marketplace_id)
    {
        $returnType = '\TNT\Ebay\Sell\Marketing\V1\Model\SummaryReportResponse';
        $request = $this->getPromotionSummaryReportRequest($marketplace_id);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); // stream goes to serializer
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
     * Create request for operation 'getPromotionSummaryReport'.
     *
     * @param string $marketplace_id The eBay marketplace ID of the site you for which you want a promotion summary report.  &lt;p&gt;&lt;b&gt;Valid values:&lt;/b&gt;&lt;/p&gt;  &lt;ul&gt;&lt;li&gt;&lt;code&gt;EBAY_AU&lt;/code&gt; &#x3D; Australia&lt;/li&gt; &lt;li&gt;&lt;code&gt;EBAY_DE&lt;/code&gt; &#x3D; Germany&lt;/li&gt; &lt;li&gt;&lt;code&gt;EBAY_ES&lt;/code&gt; &#x3D; Spain&lt;/li&gt; &lt;li&gt;&lt;code&gt;EBAY_FR&lt;/code&gt; &#x3D; France&lt;/li&gt; &lt;li&gt;&lt;code&gt;EBAY_GB&lt;/code&gt; &#x3D; Great Britain&lt;/li&gt; &lt;li&gt;&lt;code&gt;EBAY_IT&lt;/code&gt; &#x3D; Italy&lt;/li&gt; &lt;li&gt;&lt;code&gt;EBAY_US&lt;/code&gt; &#x3D; United States&lt;/li&gt;&lt;/ul&gt; (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getPromotionSummaryReportRequest($marketplace_id)
    {
        // Verify the required parameter 'marketplace_id' is set.
        if ($marketplace_id === null || (\is_array($marketplace_id) && count($marketplace_id) === 0)) {
            throw new \InvalidArgumentException('Missing the required parameter $marketplace_id when calling getPromotionSummaryReport');
        }

        $resourcePath = '/promotion_summary_report';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $marketplace_id,
            'marketplace_id', // param base name
            'string', // openApiType
            'form', // style
            true // explode
        ) ?? []);

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
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'ab');

            if (! $options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: '.$this->config->getDebugFile());
            }
        }

        return $options;
    }
}
