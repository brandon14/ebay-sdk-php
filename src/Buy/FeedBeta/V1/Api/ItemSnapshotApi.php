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
 * ItemSnapshotApi.
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
 * Item Feed Service.
 *
 * <span class=\"tablenote\"><b>Note:</b> This is a <a href=\"https://developer.ebay.com/api-docs/static/versioning.html#limited \" target=\"_blank\"> <img src=\"/cms/img/docs/partners-api.svg\" class=\"legend-icon partners-icon\" title=\"Limited Release\"  alt=\"Limited Release\" />(Limited Release)</a> API available only to select developers approved by business units.</span><br /><br />The Feed API provides the ability to download TSV_GZIP feed files containing eBay items and an hourly snapshot file of the items that have changed within an hour for a specific category, date and marketplace. <p>In addition to the API, there is an open source <a href=\"https://github.com/eBay/FeedSDK \" target=\"_blank\">Feed SDK</a> written in Java that downloads, combines files into a single file when needed, and unzips the entire feed file. It also lets you specify field filters to curate the items in the file.</p>
 *
 * The version of the OpenAPI document: v1_beta.33.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace TNT\Ebay\Buy\FeedBeta\V1\Api;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use TNT\Ebay\Buy\FeedBeta\V1\ApiException;
use TNT\Ebay\Buy\FeedBeta\V1\Configuration;
use TNT\Ebay\Buy\FeedBeta\V1\HeaderSelector;
use TNT\Ebay\Buy\FeedBeta\V1\ObjectSerializer;

/**
 * ItemSnapshotApi Class Doc Comment.
 *
 * @category Class
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 */
class ItemSnapshotApi
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
     * Operation getItemSnapshotFeed.
     *
     * @param string $accept                  The formats that the client accepts for the response.&lt;br /&gt;&lt;br /&gt;A successful call will always return a TSV.GZIP file; however, unsuccessful calls generate error codes that are returned in JSON format.&lt;br /&gt;&lt;br /&gt;&lt;b&gt;Default:&lt;/b&gt; &lt;code&gt;application/json,text/tab-separated-values&lt;/code&gt; (required)
     * @param string $x_ebay_c_marketplace_id The ID of the eBay marketplace where the item is hosted. &lt;b&gt;Note: &lt;/b&gt; This value is case sensitive.&lt;br /&gt;&lt;br /&gt;For example: &lt;br /&gt;&amp;nbsp;&amp;nbsp;&lt;code&gt;X-EBAY-C-MARKETPLACE-ID &#x3D; EBAY_US&lt;/code&gt;  &lt;br /&gt;&lt;br /&gt; For a list of supported sites see, &lt;a href&#x3D;\&quot;/api-docs/buy/feed/overview.html#API\&quot;&gt;API Restrictions&lt;/a&gt;. (required)
     * @param string $range                   &lt;a name&#x3D;\&quot;range-header\&quot;&gt;&lt;/a&gt;This header specifies the range in bytes of the chunks of the gzip file being returned. &lt;br /&gt;&lt;br /&gt;&lt;b&gt; Format:&lt;/b&gt; &lt;code&gt;bytes&#x3D;&lt;em&gt;startpos&lt;/em&gt;-&lt;em&gt;endpos&lt;/em&gt;&lt;/code&gt;&lt;br /&gt;&lt;br /&gt;  For example, the following retrieves the first 10 MBs of the feed file. &lt;br /&gt;&lt;br /&gt;&amp;nbsp;&amp;nbsp;&lt;code&gt;Range bytes&#x3D;0-10485760&lt;/code&gt; &lt;br /&gt;&lt;br /&gt;For more information about using this header, see &lt;a href&#x3D;\&quot;/api-docs/buy/static/api-feed.html#retrv-gzip\&quot;&gt;Retrieving a gzip feed file&lt;/a&gt;. &lt;br /&gt;&lt;br /&gt;&lt;b&gt;Maximum:&lt;/b&gt; 100 MB (10MB in the Sandbox) (required)
     * @param string $category_id             An eBay top-level category ID  of the items to be returned in the feed file.&lt;br /&gt; &lt;br /&gt;The list of eBay category IDs changes over time and category IDs are not the same across all the eBay marketplaces. To get a list of the top-level categories for a marketplace, you can use the Taxonomy API &lt;a href&#x3D;\&quot;/api-docs/commerce/taxonomy/resources/category_tree/methods/getCategoryTree\&quot;&gt;getCategoryTree&lt;/a&gt; method. This method retrieves the complete category tree for the marketplace. The top-level categories are identified by the &lt;b&gt;categoryTreeNodeLevel&lt;/b&gt; field.&lt;br /&gt;&lt;br /&gt;&lt;b&gt;For example:&lt;/b&gt;&lt;br /&gt;&amp;nbsp;&amp;nbsp;&lt;code&gt;\&quot;categoryTreeNodeLevel\&quot;: 1&lt;/code&gt; &lt;br /&gt;&lt;br /&gt;For details see &lt;a href&#x3D;\&quot;/api-docs/buy/buy-categories.html\&quot;&gt;Get Categories for Buy APIs&lt;/a&gt;.&lt;/li&gt;  &lt;/ul&gt; &lt;br /&gt;&lt;br /&gt;   &lt;b&gt;Restriction:&lt;/b&gt; Must be a top-level category other than Real Estate. Items listed under Real Estate L1 categories are excluded from all feeds in all marketplaces. (required)
     * @param string $snapshot_date           The date and hour of the snapshot feed file you want. Each file contains the items that changed within the hour in the specified category. So, the 9AM file contains the items that changed between 9AM and 9:59AM on the day specified.  It takes 2 hours to generate a snapshot file, which means to get the file for 9AM the earliest you could submit the call is at 11AM.&lt;br /&gt;&lt;br /&gt;There are 7 days of &lt;b&gt; Hourly Snapshot&lt;/b&gt; feed files available.&lt;p&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note: &lt;/b&gt; The Feed API uses GMT, so you must convert your local time to GMT. For example, if you lived in California and wanted the September 15th 7pm file, you would submit the following call: &lt;br /&gt; &lt;br /&gt;&lt;code&gt;item_snapshot?category_id&#x3D;625&amp;snapshot_date&#x3D;2017-09-16T02:00:00.000Z&lt;/code&gt; &lt;/span&gt;&lt;/p&gt;  &lt;b&gt;Format: &lt;/b&gt;UTC format (yyyy-MM-ddThh:00:00.000Z) &lt;br /&gt;&lt;br /&gt;Files are generated on the hour, so minutes and seconds are &lt;em&gt; always&lt;/em&gt; zeros. (required)
     *
     * @throws \TNT\Ebay\Buy\FeedBeta\V1\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return \TNT\Ebay\Buy\FeedBeta\V1\Model\ItemSnapshotResponse|\TNT\Ebay\Buy\FeedBeta\V1\Model\ItemSnapshotResponse
     */
    public function getItemSnapshotFeed($accept, $x_ebay_c_marketplace_id, $range, $category_id, $snapshot_date)
    {
        [$response] = $this->getItemSnapshotFeedWithHttpInfo($accept, $x_ebay_c_marketplace_id, $range, $category_id, $snapshot_date);

        return $response;
    }

    /**
     * Operation getItemSnapshotFeedWithHttpInfo.
     *
     * @param string $accept                  The formats that the client accepts for the response.&lt;br /&gt;&lt;br /&gt;A successful call will always return a TSV.GZIP file; however, unsuccessful calls generate error codes that are returned in JSON format.&lt;br /&gt;&lt;br /&gt;&lt;b&gt;Default:&lt;/b&gt; &lt;code&gt;application/json,text/tab-separated-values&lt;/code&gt; (required)
     * @param string $x_ebay_c_marketplace_id The ID of the eBay marketplace where the item is hosted. &lt;b&gt;Note: &lt;/b&gt; This value is case sensitive.&lt;br /&gt;&lt;br /&gt;For example: &lt;br /&gt;&amp;nbsp;&amp;nbsp;&lt;code&gt;X-EBAY-C-MARKETPLACE-ID &#x3D; EBAY_US&lt;/code&gt;  &lt;br /&gt;&lt;br /&gt; For a list of supported sites see, &lt;a href&#x3D;\&quot;/api-docs/buy/feed/overview.html#API\&quot;&gt;API Restrictions&lt;/a&gt;. (required)
     * @param string $range                   &lt;a name&#x3D;\&quot;range-header\&quot;&gt;&lt;/a&gt;This header specifies the range in bytes of the chunks of the gzip file being returned. &lt;br /&gt;&lt;br /&gt;&lt;b&gt; Format:&lt;/b&gt; &lt;code&gt;bytes&#x3D;&lt;em&gt;startpos&lt;/em&gt;-&lt;em&gt;endpos&lt;/em&gt;&lt;/code&gt;&lt;br /&gt;&lt;br /&gt;  For example, the following retrieves the first 10 MBs of the feed file. &lt;br /&gt;&lt;br /&gt;&amp;nbsp;&amp;nbsp;&lt;code&gt;Range bytes&#x3D;0-10485760&lt;/code&gt; &lt;br /&gt;&lt;br /&gt;For more information about using this header, see &lt;a href&#x3D;\&quot;/api-docs/buy/static/api-feed.html#retrv-gzip\&quot;&gt;Retrieving a gzip feed file&lt;/a&gt;. &lt;br /&gt;&lt;br /&gt;&lt;b&gt;Maximum:&lt;/b&gt; 100 MB (10MB in the Sandbox) (required)
     * @param string $category_id             An eBay top-level category ID  of the items to be returned in the feed file.&lt;br /&gt; &lt;br /&gt;The list of eBay category IDs changes over time and category IDs are not the same across all the eBay marketplaces. To get a list of the top-level categories for a marketplace, you can use the Taxonomy API &lt;a href&#x3D;\&quot;/api-docs/commerce/taxonomy/resources/category_tree/methods/getCategoryTree\&quot;&gt;getCategoryTree&lt;/a&gt; method. This method retrieves the complete category tree for the marketplace. The top-level categories are identified by the &lt;b&gt;categoryTreeNodeLevel&lt;/b&gt; field.&lt;br /&gt;&lt;br /&gt;&lt;b&gt;For example:&lt;/b&gt;&lt;br /&gt;&amp;nbsp;&amp;nbsp;&lt;code&gt;\&quot;categoryTreeNodeLevel\&quot;: 1&lt;/code&gt; &lt;br /&gt;&lt;br /&gt;For details see &lt;a href&#x3D;\&quot;/api-docs/buy/buy-categories.html\&quot;&gt;Get Categories for Buy APIs&lt;/a&gt;.&lt;/li&gt;  &lt;/ul&gt; &lt;br /&gt;&lt;br /&gt;   &lt;b&gt;Restriction:&lt;/b&gt; Must be a top-level category other than Real Estate. Items listed under Real Estate L1 categories are excluded from all feeds in all marketplaces. (required)
     * @param string $snapshot_date           The date and hour of the snapshot feed file you want. Each file contains the items that changed within the hour in the specified category. So, the 9AM file contains the items that changed between 9AM and 9:59AM on the day specified.  It takes 2 hours to generate a snapshot file, which means to get the file for 9AM the earliest you could submit the call is at 11AM.&lt;br /&gt;&lt;br /&gt;There are 7 days of &lt;b&gt; Hourly Snapshot&lt;/b&gt; feed files available.&lt;p&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note: &lt;/b&gt; The Feed API uses GMT, so you must convert your local time to GMT. For example, if you lived in California and wanted the September 15th 7pm file, you would submit the following call: &lt;br /&gt; &lt;br /&gt;&lt;code&gt;item_snapshot?category_id&#x3D;625&amp;snapshot_date&#x3D;2017-09-16T02:00:00.000Z&lt;/code&gt; &lt;/span&gt;&lt;/p&gt;  &lt;b&gt;Format: &lt;/b&gt;UTC format (yyyy-MM-ddThh:00:00.000Z) &lt;br /&gt;&lt;br /&gt;Files are generated on the hour, so minutes and seconds are &lt;em&gt; always&lt;/em&gt; zeros. (required)
     *
     * @throws \TNT\Ebay\Buy\FeedBeta\V1\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return array of \TNT\Ebay\Buy\FeedBeta\V1\Model\ItemSnapshotResponse|\TNT\Ebay\Buy\FeedBeta\V1\Model\ItemSnapshotResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getItemSnapshotFeedWithHttpInfo($accept, $x_ebay_c_marketplace_id, $range, $category_id, $snapshot_date)
    {
        $request = $this->getItemSnapshotFeedRequest($accept, $x_ebay_c_marketplace_id, $range, $category_id, $snapshot_date);

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
                    if ('\TNT\Ebay\Buy\FeedBeta\V1\Model\ItemSnapshotResponse' === '\SplFileObject') {
                        $content = $response->getBody(); // Stream goes to serializer.
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\TNT\Ebay\Buy\FeedBeta\V1\Model\ItemSnapshotResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders(),
                    ];
                case 206:
                    if ('\TNT\Ebay\Buy\FeedBeta\V1\Model\ItemSnapshotResponse' === '\SplFileObject') {
                        $content = $response->getBody(); // Stream goes to serializer.
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\TNT\Ebay\Buy\FeedBeta\V1\Model\ItemSnapshotResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders(),
                    ];
            }

            $returnType = '\TNT\Ebay\Buy\FeedBeta\V1\Model\ItemSnapshotResponse';

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
                        '\TNT\Ebay\Buy\FeedBeta\V1\Model\ItemSnapshotResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 206:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TNT\Ebay\Buy\FeedBeta\V1\Model\ItemSnapshotResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getItemSnapshotFeedAsync.
     *
     * @param string $accept                  The formats that the client accepts for the response.&lt;br /&gt;&lt;br /&gt;A successful call will always return a TSV.GZIP file; however, unsuccessful calls generate error codes that are returned in JSON format.&lt;br /&gt;&lt;br /&gt;&lt;b&gt;Default:&lt;/b&gt; &lt;code&gt;application/json,text/tab-separated-values&lt;/code&gt; (required)
     * @param string $x_ebay_c_marketplace_id The ID of the eBay marketplace where the item is hosted. &lt;b&gt;Note: &lt;/b&gt; This value is case sensitive.&lt;br /&gt;&lt;br /&gt;For example: &lt;br /&gt;&amp;nbsp;&amp;nbsp;&lt;code&gt;X-EBAY-C-MARKETPLACE-ID &#x3D; EBAY_US&lt;/code&gt;  &lt;br /&gt;&lt;br /&gt; For a list of supported sites see, &lt;a href&#x3D;\&quot;/api-docs/buy/feed/overview.html#API\&quot;&gt;API Restrictions&lt;/a&gt;. (required)
     * @param string $range                   &lt;a name&#x3D;\&quot;range-header\&quot;&gt;&lt;/a&gt;This header specifies the range in bytes of the chunks of the gzip file being returned. &lt;br /&gt;&lt;br /&gt;&lt;b&gt; Format:&lt;/b&gt; &lt;code&gt;bytes&#x3D;&lt;em&gt;startpos&lt;/em&gt;-&lt;em&gt;endpos&lt;/em&gt;&lt;/code&gt;&lt;br /&gt;&lt;br /&gt;  For example, the following retrieves the first 10 MBs of the feed file. &lt;br /&gt;&lt;br /&gt;&amp;nbsp;&amp;nbsp;&lt;code&gt;Range bytes&#x3D;0-10485760&lt;/code&gt; &lt;br /&gt;&lt;br /&gt;For more information about using this header, see &lt;a href&#x3D;\&quot;/api-docs/buy/static/api-feed.html#retrv-gzip\&quot;&gt;Retrieving a gzip feed file&lt;/a&gt;. &lt;br /&gt;&lt;br /&gt;&lt;b&gt;Maximum:&lt;/b&gt; 100 MB (10MB in the Sandbox) (required)
     * @param string $category_id             An eBay top-level category ID  of the items to be returned in the feed file.&lt;br /&gt; &lt;br /&gt;The list of eBay category IDs changes over time and category IDs are not the same across all the eBay marketplaces. To get a list of the top-level categories for a marketplace, you can use the Taxonomy API &lt;a href&#x3D;\&quot;/api-docs/commerce/taxonomy/resources/category_tree/methods/getCategoryTree\&quot;&gt;getCategoryTree&lt;/a&gt; method. This method retrieves the complete category tree for the marketplace. The top-level categories are identified by the &lt;b&gt;categoryTreeNodeLevel&lt;/b&gt; field.&lt;br /&gt;&lt;br /&gt;&lt;b&gt;For example:&lt;/b&gt;&lt;br /&gt;&amp;nbsp;&amp;nbsp;&lt;code&gt;\&quot;categoryTreeNodeLevel\&quot;: 1&lt;/code&gt; &lt;br /&gt;&lt;br /&gt;For details see &lt;a href&#x3D;\&quot;/api-docs/buy/buy-categories.html\&quot;&gt;Get Categories for Buy APIs&lt;/a&gt;.&lt;/li&gt;  &lt;/ul&gt; &lt;br /&gt;&lt;br /&gt;   &lt;b&gt;Restriction:&lt;/b&gt; Must be a top-level category other than Real Estate. Items listed under Real Estate L1 categories are excluded from all feeds in all marketplaces. (required)
     * @param string $snapshot_date           The date and hour of the snapshot feed file you want. Each file contains the items that changed within the hour in the specified category. So, the 9AM file contains the items that changed between 9AM and 9:59AM on the day specified.  It takes 2 hours to generate a snapshot file, which means to get the file for 9AM the earliest you could submit the call is at 11AM.&lt;br /&gt;&lt;br /&gt;There are 7 days of &lt;b&gt; Hourly Snapshot&lt;/b&gt; feed files available.&lt;p&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note: &lt;/b&gt; The Feed API uses GMT, so you must convert your local time to GMT. For example, if you lived in California and wanted the September 15th 7pm file, you would submit the following call: &lt;br /&gt; &lt;br /&gt;&lt;code&gt;item_snapshot?category_id&#x3D;625&amp;snapshot_date&#x3D;2017-09-16T02:00:00.000Z&lt;/code&gt; &lt;/span&gt;&lt;/p&gt;  &lt;b&gt;Format: &lt;/b&gt;UTC format (yyyy-MM-ddThh:00:00.000Z) &lt;br /&gt;&lt;br /&gt;Files are generated on the hour, so minutes and seconds are &lt;em&gt; always&lt;/em&gt; zeros. (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getItemSnapshotFeedAsync($accept, $x_ebay_c_marketplace_id, $range, $category_id, $snapshot_date)
    {
        return $this->getItemSnapshotFeedAsyncWithHttpInfo($accept, $x_ebay_c_marketplace_id, $range, $category_id, $snapshot_date)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getItemSnapshotFeedAsyncWithHttpInfo.
     *
     * @param string $accept                  The formats that the client accepts for the response.&lt;br /&gt;&lt;br /&gt;A successful call will always return a TSV.GZIP file; however, unsuccessful calls generate error codes that are returned in JSON format.&lt;br /&gt;&lt;br /&gt;&lt;b&gt;Default:&lt;/b&gt; &lt;code&gt;application/json,text/tab-separated-values&lt;/code&gt; (required)
     * @param string $x_ebay_c_marketplace_id The ID of the eBay marketplace where the item is hosted. &lt;b&gt;Note: &lt;/b&gt; This value is case sensitive.&lt;br /&gt;&lt;br /&gt;For example: &lt;br /&gt;&amp;nbsp;&amp;nbsp;&lt;code&gt;X-EBAY-C-MARKETPLACE-ID &#x3D; EBAY_US&lt;/code&gt;  &lt;br /&gt;&lt;br /&gt; For a list of supported sites see, &lt;a href&#x3D;\&quot;/api-docs/buy/feed/overview.html#API\&quot;&gt;API Restrictions&lt;/a&gt;. (required)
     * @param string $range                   &lt;a name&#x3D;\&quot;range-header\&quot;&gt;&lt;/a&gt;This header specifies the range in bytes of the chunks of the gzip file being returned. &lt;br /&gt;&lt;br /&gt;&lt;b&gt; Format:&lt;/b&gt; &lt;code&gt;bytes&#x3D;&lt;em&gt;startpos&lt;/em&gt;-&lt;em&gt;endpos&lt;/em&gt;&lt;/code&gt;&lt;br /&gt;&lt;br /&gt;  For example, the following retrieves the first 10 MBs of the feed file. &lt;br /&gt;&lt;br /&gt;&amp;nbsp;&amp;nbsp;&lt;code&gt;Range bytes&#x3D;0-10485760&lt;/code&gt; &lt;br /&gt;&lt;br /&gt;For more information about using this header, see &lt;a href&#x3D;\&quot;/api-docs/buy/static/api-feed.html#retrv-gzip\&quot;&gt;Retrieving a gzip feed file&lt;/a&gt;. &lt;br /&gt;&lt;br /&gt;&lt;b&gt;Maximum:&lt;/b&gt; 100 MB (10MB in the Sandbox) (required)
     * @param string $category_id             An eBay top-level category ID  of the items to be returned in the feed file.&lt;br /&gt; &lt;br /&gt;The list of eBay category IDs changes over time and category IDs are not the same across all the eBay marketplaces. To get a list of the top-level categories for a marketplace, you can use the Taxonomy API &lt;a href&#x3D;\&quot;/api-docs/commerce/taxonomy/resources/category_tree/methods/getCategoryTree\&quot;&gt;getCategoryTree&lt;/a&gt; method. This method retrieves the complete category tree for the marketplace. The top-level categories are identified by the &lt;b&gt;categoryTreeNodeLevel&lt;/b&gt; field.&lt;br /&gt;&lt;br /&gt;&lt;b&gt;For example:&lt;/b&gt;&lt;br /&gt;&amp;nbsp;&amp;nbsp;&lt;code&gt;\&quot;categoryTreeNodeLevel\&quot;: 1&lt;/code&gt; &lt;br /&gt;&lt;br /&gt;For details see &lt;a href&#x3D;\&quot;/api-docs/buy/buy-categories.html\&quot;&gt;Get Categories for Buy APIs&lt;/a&gt;.&lt;/li&gt;  &lt;/ul&gt; &lt;br /&gt;&lt;br /&gt;   &lt;b&gt;Restriction:&lt;/b&gt; Must be a top-level category other than Real Estate. Items listed under Real Estate L1 categories are excluded from all feeds in all marketplaces. (required)
     * @param string $snapshot_date           The date and hour of the snapshot feed file you want. Each file contains the items that changed within the hour in the specified category. So, the 9AM file contains the items that changed between 9AM and 9:59AM on the day specified.  It takes 2 hours to generate a snapshot file, which means to get the file for 9AM the earliest you could submit the call is at 11AM.&lt;br /&gt;&lt;br /&gt;There are 7 days of &lt;b&gt; Hourly Snapshot&lt;/b&gt; feed files available.&lt;p&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note: &lt;/b&gt; The Feed API uses GMT, so you must convert your local time to GMT. For example, if you lived in California and wanted the September 15th 7pm file, you would submit the following call: &lt;br /&gt; &lt;br /&gt;&lt;code&gt;item_snapshot?category_id&#x3D;625&amp;snapshot_date&#x3D;2017-09-16T02:00:00.000Z&lt;/code&gt; &lt;/span&gt;&lt;/p&gt;  &lt;b&gt;Format: &lt;/b&gt;UTC format (yyyy-MM-ddThh:00:00.000Z) &lt;br /&gt;&lt;br /&gt;Files are generated on the hour, so minutes and seconds are &lt;em&gt; always&lt;/em&gt; zeros. (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getItemSnapshotFeedAsyncWithHttpInfo($accept, $x_ebay_c_marketplace_id, $range, $category_id, $snapshot_date)
    {
        $returnType = '\TNT\Ebay\Buy\FeedBeta\V1\Model\ItemSnapshotResponse';
        $request = $this->getItemSnapshotFeedRequest($accept, $x_ebay_c_marketplace_id, $range, $category_id, $snapshot_date);

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
     * Create request for operation 'getItemSnapshotFeed'.
     *
     * @param string $accept                  The formats that the client accepts for the response.&lt;br /&gt;&lt;br /&gt;A successful call will always return a TSV.GZIP file; however, unsuccessful calls generate error codes that are returned in JSON format.&lt;br /&gt;&lt;br /&gt;&lt;b&gt;Default:&lt;/b&gt; &lt;code&gt;application/json,text/tab-separated-values&lt;/code&gt; (required)
     * @param string $x_ebay_c_marketplace_id The ID of the eBay marketplace where the item is hosted. &lt;b&gt;Note: &lt;/b&gt; This value is case sensitive.&lt;br /&gt;&lt;br /&gt;For example: &lt;br /&gt;&amp;nbsp;&amp;nbsp;&lt;code&gt;X-EBAY-C-MARKETPLACE-ID &#x3D; EBAY_US&lt;/code&gt;  &lt;br /&gt;&lt;br /&gt; For a list of supported sites see, &lt;a href&#x3D;\&quot;/api-docs/buy/feed/overview.html#API\&quot;&gt;API Restrictions&lt;/a&gt;. (required)
     * @param string $range                   &lt;a name&#x3D;\&quot;range-header\&quot;&gt;&lt;/a&gt;This header specifies the range in bytes of the chunks of the gzip file being returned. &lt;br /&gt;&lt;br /&gt;&lt;b&gt; Format:&lt;/b&gt; &lt;code&gt;bytes&#x3D;&lt;em&gt;startpos&lt;/em&gt;-&lt;em&gt;endpos&lt;/em&gt;&lt;/code&gt;&lt;br /&gt;&lt;br /&gt;  For example, the following retrieves the first 10 MBs of the feed file. &lt;br /&gt;&lt;br /&gt;&amp;nbsp;&amp;nbsp;&lt;code&gt;Range bytes&#x3D;0-10485760&lt;/code&gt; &lt;br /&gt;&lt;br /&gt;For more information about using this header, see &lt;a href&#x3D;\&quot;/api-docs/buy/static/api-feed.html#retrv-gzip\&quot;&gt;Retrieving a gzip feed file&lt;/a&gt;. &lt;br /&gt;&lt;br /&gt;&lt;b&gt;Maximum:&lt;/b&gt; 100 MB (10MB in the Sandbox) (required)
     * @param string $category_id             An eBay top-level category ID  of the items to be returned in the feed file.&lt;br /&gt; &lt;br /&gt;The list of eBay category IDs changes over time and category IDs are not the same across all the eBay marketplaces. To get a list of the top-level categories for a marketplace, you can use the Taxonomy API &lt;a href&#x3D;\&quot;/api-docs/commerce/taxonomy/resources/category_tree/methods/getCategoryTree\&quot;&gt;getCategoryTree&lt;/a&gt; method. This method retrieves the complete category tree for the marketplace. The top-level categories are identified by the &lt;b&gt;categoryTreeNodeLevel&lt;/b&gt; field.&lt;br /&gt;&lt;br /&gt;&lt;b&gt;For example:&lt;/b&gt;&lt;br /&gt;&amp;nbsp;&amp;nbsp;&lt;code&gt;\&quot;categoryTreeNodeLevel\&quot;: 1&lt;/code&gt; &lt;br /&gt;&lt;br /&gt;For details see &lt;a href&#x3D;\&quot;/api-docs/buy/buy-categories.html\&quot;&gt;Get Categories for Buy APIs&lt;/a&gt;.&lt;/li&gt;  &lt;/ul&gt; &lt;br /&gt;&lt;br /&gt;   &lt;b&gt;Restriction:&lt;/b&gt; Must be a top-level category other than Real Estate. Items listed under Real Estate L1 categories are excluded from all feeds in all marketplaces. (required)
     * @param string $snapshot_date           The date and hour of the snapshot feed file you want. Each file contains the items that changed within the hour in the specified category. So, the 9AM file contains the items that changed between 9AM and 9:59AM on the day specified.  It takes 2 hours to generate a snapshot file, which means to get the file for 9AM the earliest you could submit the call is at 11AM.&lt;br /&gt;&lt;br /&gt;There are 7 days of &lt;b&gt; Hourly Snapshot&lt;/b&gt; feed files available.&lt;p&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note: &lt;/b&gt; The Feed API uses GMT, so you must convert your local time to GMT. For example, if you lived in California and wanted the September 15th 7pm file, you would submit the following call: &lt;br /&gt; &lt;br /&gt;&lt;code&gt;item_snapshot?category_id&#x3D;625&amp;snapshot_date&#x3D;2017-09-16T02:00:00.000Z&lt;/code&gt; &lt;/span&gt;&lt;/p&gt;  &lt;b&gt;Format: &lt;/b&gt;UTC format (yyyy-MM-ddThh:00:00.000Z) &lt;br /&gt;&lt;br /&gt;Files are generated on the hour, so minutes and seconds are &lt;em&gt; always&lt;/em&gt; zeros. (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getItemSnapshotFeedRequest($accept, $x_ebay_c_marketplace_id, $range, $category_id, $snapshot_date)
    {
        // Verify the required parameter 'accept' is set.
        if ($accept === null || (\is_array($accept) && count($accept) === 0)) {
            throw new \InvalidArgumentException('Missing the required parameter $accept when calling getItemSnapshotFeed');
        }
        // Verify the required parameter 'x_ebay_c_marketplace_id' is set.
        if ($x_ebay_c_marketplace_id === null || (\is_array($x_ebay_c_marketplace_id) && count($x_ebay_c_marketplace_id) === 0)) {
            throw new \InvalidArgumentException('Missing the required parameter $x_ebay_c_marketplace_id when calling getItemSnapshotFeed');
        }
        // Verify the required parameter 'range' is set.
        if ($range === null || (\is_array($range) && count($range) === 0)) {
            throw new \InvalidArgumentException('Missing the required parameter $range when calling getItemSnapshotFeed');
        }
        // Verify the required parameter 'category_id' is set.
        if ($category_id === null || (\is_array($category_id) && count($category_id) === 0)) {
            throw new \InvalidArgumentException('Missing the required parameter $category_id when calling getItemSnapshotFeed');
        }
        // Verify the required parameter 'snapshot_date' is set.
        if ($snapshot_date === null || (\is_array($snapshot_date) && count($snapshot_date) === 0)) {
            throw new \InvalidArgumentException('Missing the required parameter $snapshot_date when calling getItemSnapshotFeed');
        }

        $resourcePath = '/item_snapshot';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $category_id,
            'category_id', // param base name
            'string', // openApiType
            'form', // style
            true // explode
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $snapshot_date,
            'snapshot_date', // param base name
            'string', // openApiType
            'form', // style
            true // explode
        ) ?? []);

        // header params
        if ($accept !== null) {
            $headerParams['Accept'] = ObjectSerializer::toHeaderValue($accept);
        }
        // header params
        if ($x_ebay_c_marketplace_id !== null) {
            $headerParams['X-EBAY-C-MARKETPLACE-ID'] = ObjectSerializer::toHeaderValue($x_ebay_c_marketplace_id);
        }
        // header params
        if ($range !== null) {
            $headerParams['Range'] = ObjectSerializer::toHeaderValue($range);
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['text/tab-separated-values']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['text/tab-separated-values'],
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
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'ab');

            if (! $options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: '.$this->config->getDebugFile());
            }
        }

        return $options;
    }
}
