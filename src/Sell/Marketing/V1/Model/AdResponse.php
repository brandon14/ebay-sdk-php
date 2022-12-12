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
 * AdResponse.
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
 * The version of the OpenAPI document: v1.14.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace TNT\Ebay\Sell\Marketing\V1\Model;

use TNT\Ebay\Sell\Marketing\V1\ObjectSerializer;

/**
 * AdResponse Class Doc Comment.
 *
 * @category Class
 *
 * @description This type defines the fields returned in an ad response.
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 *
 * @implements \ArrayAccess<TKey, TValue>
 *
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AdResponse implements ModelInterface, \ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'AdResponse';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'ad_group_id' => 'string',
        'ad_id' => 'string',
        'errors' => '\TNT\Ebay\Sell\Marketing\V1\Model\Error[]',
        'href' => 'string',
        'listing_id' => 'string',
        'status_code' => 'int',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     *
     * @phpstan-var array<string, string|null>
     *
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'ad_group_id' => null,
        'ad_id' => null,
        'errors' => null,
        'href' => null,
        'listing_id' => null,
        'status_code' => 'int32',
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'ad_group_id' => 'adGroupId',
        'ad_id' => 'adId',
        'errors' => 'errors',
        'href' => 'href',
        'listing_id' => 'listingId',
        'status_code' => 'statusCode',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'ad_group_id' => 'setAdGroupId',
        'ad_id' => 'setAdId',
        'errors' => 'setErrors',
        'href' => 'setHref',
        'listing_id' => 'setListingId',
        'status_code' => 'setStatusCode',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'ad_group_id' => 'getAdGroupId',
        'ad_id' => 'getAdId',
        'errors' => 'getErrors',
        'href' => 'getHref',
        'listing_id' => 'getListingId',
        'status_code' => 'getStatusCode',
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    /**
     * Associative array for storing property values.
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor.
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['ad_group_id'] = $data['ad_group_id'] ?? null;
        $this->container['ad_id'] = $data['ad_id'] ?? null;
        $this->container['errors'] = $data['errors'] ?? null;
        $this->container['href'] = $data['href'] ?? null;
        $this->container['listing_id'] = $data['listing_id'] ?? null;
        $this->container['status_code'] = $data['status_code'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed.
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }

    /**
     * Gets ad_group_id.
     *
     * @return string|null
     */
    public function getAdGroupId()
    {
        return $this->container['ad_group_id'];
    }

    /**
     * Sets ad_group_id.
     *
     * @param string|null $ad_group_id A unique eBay-assigned ID for an ad group in a Promoted Listings Advanced (PLA) campaign that uses the Cost Per Click (CPC) funding model.<span class=\"tablenote\"><b>Note:</b> This field will always be returned for  campaigns that use the CPC funding model. It will not be returned for campaigns that use the Cost Per Sale (CPS) funding model.</span>
     *
     * @return self
     */
    public function setAdGroupId($ad_group_id)
    {
        $this->container['ad_group_id'] = $ad_group_id;

        return $this;
    }

    /**
     * Gets ad_id.
     *
     * @return string|null
     */
    public function getAdId()
    {
        return $this->container['ad_id'];
    }

    /**
     * Sets ad_id.
     *
     * @param string|null $ad_id A unique eBay-assigned ID for an ad. This ID is generated when an ad is created.<span class=\"tablenote\"><b>Note:</b>This field is only returned when an ad is successfully created for the corresponding listing.</span>
     *
     * @return self
     */
    public function setAdId($ad_id)
    {
        $this->container['ad_id'] = $ad_id;

        return $this;
    }

    /**
     * Gets errors.
     *
     * @return \TNT\Ebay\Sell\Marketing\V1\Model\Error[]|null
     */
    public function getErrors()
    {
        return $this->container['errors'];
    }

    /**
     * Sets errors.
     *
     * @param \TNT\Ebay\Sell\Marketing\V1\Model\Error[]|null $errors an array of errors associated with the request
     *
     * @return self
     */
    public function setErrors($errors)
    {
        $this->container['errors'] = $errors;

        return $this;
    }

    /**
     * Gets href.
     *
     * @return string|null
     */
    public function getHref()
    {
        return $this->container['href'];
    }

    /**
     * Sets href.
     *
     * @param string|null $href The getAd URI that points to the ad.<span class=\"tablenote\"><b>Note:</b>This field is only returned when an ad is successfully created for the corresponding listing.</span>
     *
     * @return self
     */
    public function setHref($href)
    {
        $this->container['href'] = $href;

        return $this;
    }

    /**
     * Gets listing_id.
     *
     * @return string|null
     */
    public function getListingId()
    {
        return $this->container['listing_id'];
    }

    /**
     * Sets listing_id.
     *
     * @param string|null $listing_id a unique eBay-assigned ID for a listing that is generated when the listing is created
     *
     * @return self
     */
    public function setListingId($listing_id)
    {
        $this->container['listing_id'] = $listing_id;

        return $this;
    }

    /**
     * Gets status_code.
     *
     * @return int|null
     */
    public function getStatusCode()
    {
        return $this->container['status_code'];
    }

    /**
     * Sets status_code.
     *
     * @param int|null $status_code An HTTP status code indicating if the corresponding ad was successfully created or not. <code>200 Successful</code> should be returned for successfully created ads.<span class=\"tablenote\"><b>Note:</b>A status code is returned for each ad that the seller creates, or attempts to create.</span>
     *
     * @return self
     */
    public function setStatusCode($status_code)
    {
        $this->container['status_code'] = $status_code;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param int $offset Offset
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param int $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     */
    public function offsetSet($offset, $value): void
    {
        if (null === $offset) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param int $offset Offset
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     *
     * @see https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed returns data which can be serialized by json_encode(), which is a value
     *               of any type other than a resource
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object.
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object.
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
