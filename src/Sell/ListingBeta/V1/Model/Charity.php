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
 * Charity.
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
 * Listing API.
 *
 * <span class=\"tablenote\"><b>Note:</b> This is a <a href=\"https://developer.ebay.com/api-docs/static/versioning.html#limited\" target=\"_blank\"> <img src=\"/cms/img/docs/partners-api.svg\" class=\"legend-icon partners-icon\" title=\"Limited Release\"  alt=\"Limited Release\" />(Limited Release)</a> API available only to select developers approved by business units.</span><br /><br />Enables a seller adding an ad or item on a Partner's site to automatically create an eBay listing draft using the item details from the Partner's site.
 *
 * The version of the OpenAPI document: v1_beta.3.1
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace TNT\Ebay\Sell\ListingBeta\V1\Model;

use ArrayAccess;
use TNT\Ebay\Sell\ListingBeta\V1\ObjectSerializer;

/**
 * Charity Class Doc Comment.
 *
 * @category Class
 * @description This type is used to identify the charitable organization that will receive a percentage of sale proceeds for each sale generated by the listing. This container also includes the donation percentage, which is the percentage of the sale proceeds that the charitable organization will get.&lt;br/&gt;&lt;br/&gt;In order to receive a percentage of the sales proceeds, the non-profit organization must be registered with the PayPal Giving Fund, which is a partner of eBay for Charity.
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Charity implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'Charity';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'donation_percentage' => 'string',
        'charity_id' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'donation_percentage' => null,
        'charity_id' => null,
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
        'donation_percentage' => 'donationPercentage',
        'charity_id' => 'charityId',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'donation_percentage' => 'setDonationPercentage',
        'charity_id' => 'setCharityId',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'donation_percentage' => 'getDonationPercentage',
        'charity_id' => 'getCharityId',
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
        $this->container['donation_percentage'] = $data['donation_percentage'] ?? null;
        $this->container['charity_id'] = $data['charity_id'] ?? null;
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
     * Gets donation_percentage.
     *
     * @return string|null
     */
    public function getDonationPercentage()
    {
        return $this->container['donation_percentage'];
    }

    /**
     * Sets donation_percentage.
     *
     * @param string|null $donation_percentage This field sets the percentage of the purchase price that the charitable organization (identified in the <strong>charityId</strong> field) will receive for each sale that the listing generates. This field is conditionally required if a seller is planning on donating a percentage of the sale proceeds to a charitable organization. This numeric value can range from 10 to 100, and in any 5 (percent) increments in between this range (e.g. <code>10</code>, <code>15</code>, <code>20</code>...<code>95</code>,... <code>100</code>). The seller would pass in <code>10</code> for 10 percent, <code>15</code> for 15 percent, <code>20</code> for 20 percent, and so on, all the way to <code>100</code> for 100 percent.<br /><br /><span class=\"tablenote\"><b>Note: </b> For this field, <strong>createItemDraft</strong> will only validate that a positive integer value is supplied, so the listing draft will still be successfully created (with no error or warning message) if a non-supported value is specified. However, if the seller attempted to publish this listing draft with an unsupported value, the charity information would just be dropped from the listing. </span>
     *
     * @return self
     */
    public function setDonationPercentage($donation_percentage)
    {
        $this->container['donation_percentage'] = $donation_percentage;

        return $this;
    }

    /**
     * Gets charity_id.
     *
     * @return string|null
     */
    public function getCharityId()
    {
        return $this->container['charity_id'];
    }

    /**
     * Sets charity_id.
     *
     * @param string|null $charity_id The eBay-assigned unique identifier of the charitable organization that will receive a percentage of the sales proceeds. The charitable organization must be reqistered with the PayPal Giving Fund in order to receive sales proceeds through eBay listings.<br/><br/> This field is conditionally required if a seller is planning on donating a percentage of the sale proceeds to a charitable organization. <br/><br/>The eBay-assigned unique identifier of a charitable organization can be found using the <strong>GetCharities</strong> call of the Trading API. In the <strong>GetCharities</strong> call response, this unique identifier is shown in the <strong>id</strong> attribute of the <strong>Charity</strong> container.
     *
     * @return self
     */
    public function setCharityId($charity_id)
    {
        $this->container['charity_id'] = $charity_id;

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
