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
 * OnboardingApi.
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
 * Account API.
 *
 * The <b>Account API</b> gives sellers the ability to configure their eBay seller accounts, including the seller's policies (eBay business policies and seller-defined custom policies), opt in and out of eBay seller programs, configure sales tax tables, and get account information.  <br/><br/>For details on the availability of the methods in this API, see <a href=\"/api-docs/sell/account/overview.html#requirements\">Account API requirements and restrictions</a>.
 *
 * The version of the OpenAPI document: v1.8.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace TNT\Ebay\Sell\Account\V1\Api;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use TNT\Ebay\Sell\Account\V1\ApiException;
use TNT\Ebay\Sell\Account\V1\Configuration;
use TNT\Ebay\Sell\Account\V1\HeaderSelector;
use TNT\Ebay\Sell\Account\V1\ObjectSerializer;

/**
 * OnboardingApi Class Doc Comment.
 *
 * @category Class
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 */
class OnboardingApi
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
     * Operation getPaymentsProgramOnboarding.
     *
     * @param string $marketplace_id        The eBay marketplace ID associated with the onboarding status to retrieve. (required)
     * @param string $payments_program_type The type of payments program whose status is returned by the method. (required)
     *
     * @throws \TNT\Ebay\Sell\Account\V1\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return \TNT\Ebay\Sell\Account\V1\Model\PaymentsProgramOnboardingResponse
     */
    public function getPaymentsProgramOnboarding($marketplace_id, $payments_program_type)
    {
        [$response] = $this->getPaymentsProgramOnboardingWithHttpInfo($marketplace_id, $payments_program_type);

        return $response;
    }

    /**
     * Operation getPaymentsProgramOnboardingWithHttpInfo.
     *
     * @param string $marketplace_id        The eBay marketplace ID associated with the onboarding status to retrieve. (required)
     * @param string $payments_program_type The type of payments program whose status is returned by the method. (required)
     *
     * @throws \TNT\Ebay\Sell\Account\V1\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return array of \TNT\Ebay\Sell\Account\V1\Model\PaymentsProgramOnboardingResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getPaymentsProgramOnboardingWithHttpInfo($marketplace_id, $payments_program_type)
    {
        $request = $this->getPaymentsProgramOnboardingRequest($marketplace_id, $payments_program_type);

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
                    if ('\TNT\Ebay\Sell\Account\V1\Model\PaymentsProgramOnboardingResponse' === '\SplFileObject') {
                        $content = $response->getBody(); // Stream goes to serializer.
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\TNT\Ebay\Sell\Account\V1\Model\PaymentsProgramOnboardingResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders(),
                    ];
            }

            $returnType = '\TNT\Ebay\Sell\Account\V1\Model\PaymentsProgramOnboardingResponse';

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
                        '\TNT\Ebay\Sell\Account\V1\Model\PaymentsProgramOnboardingResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getPaymentsProgramOnboardingAsync.
     *
     * @param string $marketplace_id        The eBay marketplace ID associated with the onboarding status to retrieve. (required)
     * @param string $payments_program_type The type of payments program whose status is returned by the method. (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getPaymentsProgramOnboardingAsync($marketplace_id, $payments_program_type)
    {
        return $this->getPaymentsProgramOnboardingAsyncWithHttpInfo($marketplace_id, $payments_program_type)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getPaymentsProgramOnboardingAsyncWithHttpInfo.
     *
     * @param string $marketplace_id        The eBay marketplace ID associated with the onboarding status to retrieve. (required)
     * @param string $payments_program_type The type of payments program whose status is returned by the method. (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getPaymentsProgramOnboardingAsyncWithHttpInfo($marketplace_id, $payments_program_type)
    {
        $returnType = '\TNT\Ebay\Sell\Account\V1\Model\PaymentsProgramOnboardingResponse';
        $request = $this->getPaymentsProgramOnboardingRequest($marketplace_id, $payments_program_type);

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
     * Create request for operation 'getPaymentsProgramOnboarding'.
     *
     * @param string $marketplace_id        The eBay marketplace ID associated with the onboarding status to retrieve. (required)
     * @param string $payments_program_type The type of payments program whose status is returned by the method. (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getPaymentsProgramOnboardingRequest($marketplace_id, $payments_program_type)
    {
        // Verify the required parameter 'marketplace_id' is set.
        if ($marketplace_id === null || (\is_array($marketplace_id) && count($marketplace_id) === 0)) {
            throw new \InvalidArgumentException('Missing the required parameter $marketplace_id when calling getPaymentsProgramOnboarding');
        }
        // Verify the required parameter 'payments_program_type' is set.
        if ($payments_program_type === null || (\is_array($payments_program_type) && count($payments_program_type) === 0)) {
            throw new \InvalidArgumentException('Missing the required parameter $payments_program_type when calling getPaymentsProgramOnboarding');
        }

        $resourcePath = '/payments_program/{marketplace_id}/{payments_program_type}/onboarding';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // path params
        if ($marketplace_id !== null) {
            $resourcePath = str_replace(
                '{'.'marketplace_id'.'}',
                ObjectSerializer::toPathValue($marketplace_id),
                $resourcePath
            );
        }
        // path params
        if ($payments_program_type !== null) {
            $resourcePath = str_replace(
                '{'.'payments_program_type'.'}',
                ObjectSerializer::toPathValue($payments_program_type),
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
