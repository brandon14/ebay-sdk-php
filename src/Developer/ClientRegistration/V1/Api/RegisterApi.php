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
 * RegisterApi.
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
 * Developer Registration API.
 *
 * <span class=\"tablenote\"><b>Note:</b> The Client Registration API is not intended for use by developers who have previously registered for a Developer Account on the eBay platform.</span><br/>The Client Registration API provides Dynamic Client Registration for regulated Third Party Providers (TPPs) who are, or will be, engaged in financial transactions on behalf of individuals domiciled in the EU/UK. This is required by the EU's Second Payment Services Directive (PSD2) which requires all regulated Account Servicing Payment Service Providers (ASPSPs) to provide secure APIs to access account and payment services on behalf of account holders.<br/><br/>A successful registration response returns a <b>HTTP 201 Created</b> status code with a JSON payload [RFC7519] that includes registration information.
 *
 * The version of the OpenAPI document: v1.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace TNT\Ebay\Developer\ClientRegistration\V1\Api;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use TNT\Ebay\Developer\ClientRegistration\V1\ApiException;
use TNT\Ebay\Developer\ClientRegistration\V1\Configuration;
use TNT\Ebay\Developer\ClientRegistration\V1\HeaderSelector;
use TNT\Ebay\Developer\ClientRegistration\V1\ObjectSerializer;

/**
 * RegisterApi Class Doc Comment.
 *
 * @category Class
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 */
class RegisterApi
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
     * Operation registerClient.
     *
     * @param \TNT\Ebay\Developer\ClientRegistration\V1\Model\ClientSettings $client_settings This container stores information about the third party provider&#39;s financial application that is being registered. (required)
     *
     * @throws \TNT\Ebay\Developer\ClientRegistration\V1\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return \TNT\Ebay\Developer\ClientRegistration\V1\Model\ClientDetails
     */
    public function registerClient($client_settings)
    {
        [$response] = $this->registerClientWithHttpInfo($client_settings);

        return $response;
    }

    /**
     * Operation registerClientWithHttpInfo.
     *
     * @param \TNT\Ebay\Developer\ClientRegistration\V1\Model\ClientSettings $client_settings This container stores information about the third party provider&#39;s financial application that is being registered. (required)
     *
     * @throws \TNT\Ebay\Developer\ClientRegistration\V1\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return array of \TNT\Ebay\Developer\ClientRegistration\V1\Model\ClientDetails, HTTP status code, HTTP response headers (array of strings)
     */
    public function registerClientWithHttpInfo($client_settings)
    {
        $request = $this->registerClientRequest($client_settings);

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
                case 201:
                    if ('\TNT\Ebay\Developer\ClientRegistration\V1\Model\ClientDetails' === '\SplFileObject') {
                        $content = $response->getBody(); // Stream goes to serializer.
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\TNT\Ebay\Developer\ClientRegistration\V1\Model\ClientDetails', []),
                        $response->getStatusCode(),
                        $response->getHeaders(),
                    ];
            }

            $returnType = '\TNT\Ebay\Developer\ClientRegistration\V1\Model\ClientDetails';

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
                case 201:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\TNT\Ebay\Developer\ClientRegistration\V1\Model\ClientDetails',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation registerClientAsync.
     *
     * @param \TNT\Ebay\Developer\ClientRegistration\V1\Model\ClientSettings $client_settings This container stores information about the third party provider&#39;s financial application that is being registered. (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function registerClientAsync($client_settings)
    {
        return $this->registerClientAsyncWithHttpInfo($client_settings)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation registerClientAsyncWithHttpInfo.
     *
     * @param \TNT\Ebay\Developer\ClientRegistration\V1\Model\ClientSettings $client_settings This container stores information about the third party provider&#39;s financial application that is being registered. (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function registerClientAsyncWithHttpInfo($client_settings)
    {
        $returnType = '\TNT\Ebay\Developer\ClientRegistration\V1\Model\ClientDetails';
        $request = $this->registerClientRequest($client_settings);

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
     * Create request for operation 'registerClient'.
     *
     * @param \TNT\Ebay\Developer\ClientRegistration\V1\Model\ClientSettings $client_settings This container stores information about the third party provider&#39;s financial application that is being registered. (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Psr7\Request
     */
    public function registerClientRequest($client_settings)
    {
        // Verify the required parameter 'client_settings' is set.
        if ($client_settings === null || (\is_array($client_settings) && count($client_settings) === 0)) {
            throw new \InvalidArgumentException('Missing the required parameter $client_settings when calling registerClient');
        }

        $resourcePath = '/client/register';
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
                ['application/json']
            );
        }

        // For model (json/xml)
        if (isset($client_settings)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($client_settings));
            } else {
                $httpBody = $client_settings;
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
