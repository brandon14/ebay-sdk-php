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
 * HeaderSelector.
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
 * Catalog API.
 *
 * The Catalog API allows users to search for and locate an eBay catalog product that is a direct match for the product that they wish to sell. Listing against an eBay catalog product helps insure that all listings (based off of that catalog product) have complete and accurate information. In addition to helping to create high-quality listings, another benefit to the seller of using catalog information to create listings is that much of the details of the listing will be prefilled, including the listing title, the listing description, the item specifics, and a stock image for the product (if available). Sellers will not have to enter item specifics themselves, and the overall listing process is a lot faster and easier.
 *
 * The version of the OpenAPI document: v1_beta.5.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace TNT\Ebay\Commerce\CatalogBeta\V1;

/**
 * HeaderSelector Class Doc Comment.
 *
 * @category Class
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 */
class HeaderSelector
{
    /**
     * @param string[] $accept
     * @param string[] $contentTypes
     *
     * @return array
     */
    public function selectHeaders($accept, $contentTypes)
    {
        $headers = [];
        $accept = $this->selectAcceptHeader($accept);

        if ($accept !== null) {
            $headers['Accept'] = $accept;
        }

        $headers['Content-Type'] = $this->selectContentTypeHeader($contentTypes);

        return $headers;
    }

    /**
     * @param string[] $accept
     *
     * @return array
     */
    public function selectHeadersForMultipart($accept)
    {
        $headers = $this->selectHeaders($accept, []);

        unset($headers['Content-Type']);

        return $headers;
    }

    /**
     * Return the header 'Accept' based on an array of Accept provided.
     *
     * @param string[] $accept Array of header
     *
     * @return string|null Accept (e.g. application/json)
     */
    private function selectAcceptHeader($accept)
    {
        if (count($accept) === 0 || (count($accept) === 1 && $accept[0] === '')) {
            return null;
        }

        if ($jsonAccept = preg_grep('~(?i)^(application/json|[^;/ \t]+/[^;/ \t]+[+]json)[ \t]*(;.*)?$~', $accept)) {
            return implode(',', $jsonAccept);
        }

        return implode(',', $accept);
    }

    /**
     * Return the content type based on an array of content-type provided.
     *
     * @param string[] $contentType Array fo content-type
     *
     * @return string Content-Type (e.g. application/json)
     */
    private function selectContentTypeHeader($contentType)
    {
        if (count($contentType) === 0 || (count($contentType) === 1 && $contentType[0] === '')) {
            return 'application/json';
        }

        if (preg_grep("/application\/json/i", $contentType)) {
            return 'application/json';
        }

        return implode(',', $contentType);
    }
}
