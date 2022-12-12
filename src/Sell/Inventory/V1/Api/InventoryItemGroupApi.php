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
 * InventoryItemGroupApi.
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
 * Inventory API.
 *
 * The Inventory API is used to create and manage inventory, and then to publish and manage this inventory on an eBay marketplace. There are also methods in this API that will convert eligible, active eBay listings into the Inventory API model.
 *
 * The version of the OpenAPI document: 1.16.1
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace TNT\Ebay\Sell\Inventory\V1\Api;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use TNT\Ebay\Sell\Inventory\V1\ApiException;
use TNT\Ebay\Sell\Inventory\V1\Configuration;
use TNT\Ebay\Sell\Inventory\V1\HeaderSelector;
use TNT\Ebay\Sell\Inventory\V1\ObjectSerializer;

/**
 * InventoryItemGroupApi Class Doc Comment.
 *
 * @category Class
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 */
class InventoryItemGroupApi
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
     * Operation createOrReplaceInventoryItemGroup.
     *
     * @param string                                               $content_language         This request header sets the natural language that will be provided in the field values of the request payload. (required)
     * @param string                                               $inventory_item_group_key Unique identifier of the inventory item group. This identifier is supplied by the seller. The &lt;strong&gt;inventoryItemGroupKey&lt;/strong&gt; value for the inventory item group to create/update is passed in at the end of the call URI. This value cannot be changed once it is set. (required)
     * @param \TNT\Ebay\Sell\Inventory\V1\Model\InventoryItemGroup $inventory_item_group     Details of the inventory Item Group (required)
     *
     * @throws \TNT\Ebay\Sell\Inventory\V1\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return \TNT\Ebay\Sell\Inventory\V1\Model\BaseResponse|\TNT\Ebay\Sell\Inventory\V1\Model\BaseResponse
     */
    public function createOrReplaceInventoryItemGroup($content_language, $inventory_item_group_key, $inventory_item_group)
    {
        [$response] = $this->createOrReplaceInventoryItemGroupWithHttpInfo($content_language, $inventory_item_group_key, $inventory_item_group);

        return $response;
    }

    /**
     * Operation createOrReplaceInventoryItemGroupWithHttpInfo.
     *
     * @param string                                               $content_language         This request header sets the natural language that will be provided in the field values of the request payload. (required)
     * @param string                                               $inventory_item_group_key Unique identifier of the inventory item group. This identifier is supplied by the seller. The &lt;strong&gt;inventoryItemGroupKey&lt;/strong&gt; value for the inventory item group to create/update is passed in at the end of the call URI. This value cannot be changed once it is set. (required)
     * @param \TNT\Ebay\Sell\Inventory\V1\Model\InventoryItemGroup $inventory_item_group     Details of the inventory Item Group (required)
     *
     * @throws \TNT\Ebay\Sell\Inventory\V1\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return array of \TNT\Ebay\Sell\Inventory\V1\Model\BaseResponse|\TNT\Ebay\Sell\Inventory\V1\Model\BaseResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function createOrReplaceInventoryItemGroupWithHttpInfo($content_language, $inventory_item_group_key, $inventory_item_group)
    {
        $request = $this->createOrReplaceInventoryItemGroupRequest($content_language, $inventory_item_group_key, $inventory_item_group);

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
                    if ('\TNT\Ebay\Sell\Inventory\V1\Model\BaseResponse' === '\SplFileObject') {
                        $content = $response->getBody(); // Stream goes to serializer.
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\TNT\Ebay\Sell\Inventory\V1\Model\BaseResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders(),
                    ];
                case 201:
                    if ('\TNT\Ebay\Sell\Inventory\V1\Model\BaseResponse' === '\SplFileObject') {
                        $content = $response->getBody(); // Stream goes to serializer.
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\TNT\Ebay\Sell\Inventory\V1\Model\BaseResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders(),
                    ];
            }

            $returnType = '\TNT\Ebay\Sell\Inventory\V1\Model\BaseResponse';

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
                        '\TNT\Ebay\Sell\Inventory\V1\Model\BaseResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 201:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TNT\Ebay\Sell\Inventory\V1\Model\BaseResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation createOrReplaceInventoryItemGroupAsync.
     *
     * @param string                                               $content_language         This request header sets the natural language that will be provided in the field values of the request payload. (required)
     * @param string                                               $inventory_item_group_key Unique identifier of the inventory item group. This identifier is supplied by the seller. The &lt;strong&gt;inventoryItemGroupKey&lt;/strong&gt; value for the inventory item group to create/update is passed in at the end of the call URI. This value cannot be changed once it is set. (required)
     * @param \TNT\Ebay\Sell\Inventory\V1\Model\InventoryItemGroup $inventory_item_group     Details of the inventory Item Group (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createOrReplaceInventoryItemGroupAsync($content_language, $inventory_item_group_key, $inventory_item_group)
    {
        return $this->createOrReplaceInventoryItemGroupAsyncWithHttpInfo($content_language, $inventory_item_group_key, $inventory_item_group)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createOrReplaceInventoryItemGroupAsyncWithHttpInfo.
     *
     * @param string                                               $content_language         This request header sets the natural language that will be provided in the field values of the request payload. (required)
     * @param string                                               $inventory_item_group_key Unique identifier of the inventory item group. This identifier is supplied by the seller. The &lt;strong&gt;inventoryItemGroupKey&lt;/strong&gt; value for the inventory item group to create/update is passed in at the end of the call URI. This value cannot be changed once it is set. (required)
     * @param \TNT\Ebay\Sell\Inventory\V1\Model\InventoryItemGroup $inventory_item_group     Details of the inventory Item Group (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createOrReplaceInventoryItemGroupAsyncWithHttpInfo($content_language, $inventory_item_group_key, $inventory_item_group)
    {
        $returnType = '\TNT\Ebay\Sell\Inventory\V1\Model\BaseResponse';
        $request = $this->createOrReplaceInventoryItemGroupRequest($content_language, $inventory_item_group_key, $inventory_item_group);

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
     * Create request for operation 'createOrReplaceInventoryItemGroup'.
     *
     * @param string                                               $content_language         This request header sets the natural language that will be provided in the field values of the request payload. (required)
     * @param string                                               $inventory_item_group_key Unique identifier of the inventory item group. This identifier is supplied by the seller. The &lt;strong&gt;inventoryItemGroupKey&lt;/strong&gt; value for the inventory item group to create/update is passed in at the end of the call URI. This value cannot be changed once it is set. (required)
     * @param \TNT\Ebay\Sell\Inventory\V1\Model\InventoryItemGroup $inventory_item_group     Details of the inventory Item Group (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Psr7\Request
     */
    public function createOrReplaceInventoryItemGroupRequest($content_language, $inventory_item_group_key, $inventory_item_group)
    {
        // Verify the required parameter 'content_language' is set.
        if ($content_language === null || (\is_array($content_language) && count($content_language) === 0)) {
            throw new \InvalidArgumentException('Missing the required parameter $content_language when calling createOrReplaceInventoryItemGroup');
        }
        // Verify the required parameter 'inventory_item_group_key' is set.
        if ($inventory_item_group_key === null || (\is_array($inventory_item_group_key) && count($inventory_item_group_key) === 0)) {
            throw new \InvalidArgumentException('Missing the required parameter $inventory_item_group_key when calling createOrReplaceInventoryItemGroup');
        }
        // Verify the required parameter 'inventory_item_group' is set.
        if ($inventory_item_group === null || (\is_array($inventory_item_group) && count($inventory_item_group) === 0)) {
            throw new \InvalidArgumentException('Missing the required parameter $inventory_item_group when calling createOrReplaceInventoryItemGroup');
        }

        $resourcePath = '/inventory_item_group/{inventoryItemGroupKey}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // header params
        if ($content_language !== null) {
            $headerParams['Content-Language'] = ObjectSerializer::toHeaderValue($content_language);
        }

        // path params
        if ($inventory_item_group_key !== null) {
            $resourcePath = str_replace(
                '{'.'inventoryItemGroupKey'.'}',
                ObjectSerializer::toPathValue($inventory_item_group_key),
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
                ['application/json']
            );
        }

        // For model (json/xml)
        if (isset($inventory_item_group)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($inventory_item_group));
            } else {
                $httpBody = $inventory_item_group;
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
            'PUT',
            $this->config->getHost().$resourcePath.($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation deleteInventoryItemGroup.
     *
     * @param string $inventory_item_group_key The unique identifier of an inventory item group. This value is assigned by the seller when an inventory item group is created. The &lt;strong&gt;inventoryItemGroupKey&lt;/strong&gt; value for the inventory item group to delete is passed in at the end of the call URI. (required)
     *
     * @throws \TNT\Ebay\Sell\Inventory\V1\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return void
     */
    public function deleteInventoryItemGroup($inventory_item_group_key)
    {
        $this->deleteInventoryItemGroupWithHttpInfo($inventory_item_group_key);
    }

    /**
     * Operation deleteInventoryItemGroupWithHttpInfo.
     *
     * @param string $inventory_item_group_key The unique identifier of an inventory item group. This value is assigned by the seller when an inventory item group is created. The &lt;strong&gt;inventoryItemGroupKey&lt;/strong&gt; value for the inventory item group to delete is passed in at the end of the call URI. (required)
     *
     * @throws \TNT\Ebay\Sell\Inventory\V1\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteInventoryItemGroupWithHttpInfo($inventory_item_group_key)
    {
        $request = $this->deleteInventoryItemGroupRequest($inventory_item_group_key);

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
     * Operation deleteInventoryItemGroupAsync.
     *
     * @param string $inventory_item_group_key The unique identifier of an inventory item group. This value is assigned by the seller when an inventory item group is created. The &lt;strong&gt;inventoryItemGroupKey&lt;/strong&gt; value for the inventory item group to delete is passed in at the end of the call URI. (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteInventoryItemGroupAsync($inventory_item_group_key)
    {
        return $this->deleteInventoryItemGroupAsyncWithHttpInfo($inventory_item_group_key)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation deleteInventoryItemGroupAsyncWithHttpInfo.
     *
     * @param string $inventory_item_group_key The unique identifier of an inventory item group. This value is assigned by the seller when an inventory item group is created. The &lt;strong&gt;inventoryItemGroupKey&lt;/strong&gt; value for the inventory item group to delete is passed in at the end of the call URI. (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteInventoryItemGroupAsyncWithHttpInfo($inventory_item_group_key)
    {
        $returnType = '';
        $request = $this->deleteInventoryItemGroupRequest($inventory_item_group_key);

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
     * Create request for operation 'deleteInventoryItemGroup'.
     *
     * @param string $inventory_item_group_key The unique identifier of an inventory item group. This value is assigned by the seller when an inventory item group is created. The &lt;strong&gt;inventoryItemGroupKey&lt;/strong&gt; value for the inventory item group to delete is passed in at the end of the call URI. (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Psr7\Request
     */
    public function deleteInventoryItemGroupRequest($inventory_item_group_key)
    {
        // Verify the required parameter 'inventory_item_group_key' is set.
        if ($inventory_item_group_key === null || (\is_array($inventory_item_group_key) && count($inventory_item_group_key) === 0)) {
            throw new \InvalidArgumentException('Missing the required parameter $inventory_item_group_key when calling deleteInventoryItemGroup');
        }

        $resourcePath = '/inventory_item_group/{inventoryItemGroupKey}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // path params
        if ($inventory_item_group_key !== null) {
            $resourcePath = str_replace(
                '{'.'inventoryItemGroupKey'.'}',
                ObjectSerializer::toPathValue($inventory_item_group_key),
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
            'DELETE',
            $this->config->getHost().$resourcePath.($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getInventoryItemGroup.
     *
     * @param string $inventory_item_group_key The unique identifier of an inventory item group. This value is assigned by the seller when an inventory item group is created. The &lt;strong&gt;inventoryItemGroupKey&lt;/strong&gt; value for the inventory item group to retrieve is passed in at the end of the call URI. (required)
     *
     * @throws \TNT\Ebay\Sell\Inventory\V1\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return \TNT\Ebay\Sell\Inventory\V1\Model\InventoryItemGroup
     */
    public function getInventoryItemGroup($inventory_item_group_key)
    {
        [$response] = $this->getInventoryItemGroupWithHttpInfo($inventory_item_group_key);

        return $response;
    }

    /**
     * Operation getInventoryItemGroupWithHttpInfo.
     *
     * @param string $inventory_item_group_key The unique identifier of an inventory item group. This value is assigned by the seller when an inventory item group is created. The &lt;strong&gt;inventoryItemGroupKey&lt;/strong&gt; value for the inventory item group to retrieve is passed in at the end of the call URI. (required)
     *
     * @throws \TNT\Ebay\Sell\Inventory\V1\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return array of \TNT\Ebay\Sell\Inventory\V1\Model\InventoryItemGroup, HTTP status code, HTTP response headers (array of strings)
     */
    public function getInventoryItemGroupWithHttpInfo($inventory_item_group_key)
    {
        $request = $this->getInventoryItemGroupRequest($inventory_item_group_key);

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
                    if ('\TNT\Ebay\Sell\Inventory\V1\Model\InventoryItemGroup' === '\SplFileObject') {
                        $content = $response->getBody(); // Stream goes to serializer.
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\TNT\Ebay\Sell\Inventory\V1\Model\InventoryItemGroup', []),
                        $response->getStatusCode(),
                        $response->getHeaders(),
                    ];
            }

            $returnType = '\TNT\Ebay\Sell\Inventory\V1\Model\InventoryItemGroup';

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
                        '\TNT\Ebay\Sell\Inventory\V1\Model\InventoryItemGroup',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getInventoryItemGroupAsync.
     *
     * @param string $inventory_item_group_key The unique identifier of an inventory item group. This value is assigned by the seller when an inventory item group is created. The &lt;strong&gt;inventoryItemGroupKey&lt;/strong&gt; value for the inventory item group to retrieve is passed in at the end of the call URI. (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getInventoryItemGroupAsync($inventory_item_group_key)
    {
        return $this->getInventoryItemGroupAsyncWithHttpInfo($inventory_item_group_key)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getInventoryItemGroupAsyncWithHttpInfo.
     *
     * @param string $inventory_item_group_key The unique identifier of an inventory item group. This value is assigned by the seller when an inventory item group is created. The &lt;strong&gt;inventoryItemGroupKey&lt;/strong&gt; value for the inventory item group to retrieve is passed in at the end of the call URI. (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getInventoryItemGroupAsyncWithHttpInfo($inventory_item_group_key)
    {
        $returnType = '\TNT\Ebay\Sell\Inventory\V1\Model\InventoryItemGroup';
        $request = $this->getInventoryItemGroupRequest($inventory_item_group_key);

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
     * Create request for operation 'getInventoryItemGroup'.
     *
     * @param string $inventory_item_group_key The unique identifier of an inventory item group. This value is assigned by the seller when an inventory item group is created. The &lt;strong&gt;inventoryItemGroupKey&lt;/strong&gt; value for the inventory item group to retrieve is passed in at the end of the call URI. (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getInventoryItemGroupRequest($inventory_item_group_key)
    {
        // Verify the required parameter 'inventory_item_group_key' is set.
        if ($inventory_item_group_key === null || (\is_array($inventory_item_group_key) && count($inventory_item_group_key) === 0)) {
            throw new \InvalidArgumentException('Missing the required parameter $inventory_item_group_key when calling getInventoryItemGroup');
        }

        $resourcePath = '/inventory_item_group/{inventoryItemGroupKey}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // path params
        if ($inventory_item_group_key !== null) {
            $resourcePath = str_replace(
                '{'.'inventoryItemGroupKey'.'}',
                ObjectSerializer::toPathValue($inventory_item_group_key),
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
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'ab');

            if (! $options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: '.$this->config->getDebugFile());
            }
        }

        return $options;
    }
}
