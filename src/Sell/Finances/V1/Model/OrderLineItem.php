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
 * OrderLineItem.
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
 * eBay Finances API.
 *
 * This API is used to retrieve seller payouts and monetary transaction details related to those payouts.
 *
 * The version of the OpenAPI document: v1.15.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace TNT\Ebay\Sell\Finances\V1\Model;

use ArrayAccess;
use TNT\Ebay\Sell\Finances\V1\ObjectSerializer;

/**
 * OrderLineItem Class Doc Comment.
 *
 * @category Class
 * @description This type is used to show the fees that are deducted from a seller payout for each line item in an order.
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class OrderLineItem implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'OrderLineItem';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'fee_basis_amount' => '\TNT\Ebay\Sell\Finances\V1\Model\Amount',
        'line_item_id' => 'string',
        'marketplace_fees' => '\TNT\Ebay\Sell\Finances\V1\Model\Fee[]',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'fee_basis_amount' => null,
        'line_item_id' => null,
        'marketplace_fees' => null,
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
        'fee_basis_amount' => 'feeBasisAmount',
        'line_item_id' => 'lineItemId',
        'marketplace_fees' => 'marketplaceFees',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'fee_basis_amount' => 'setFeeBasisAmount',
        'line_item_id' => 'setLineItemId',
        'marketplace_fees' => 'setMarketplaceFees',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'fee_basis_amount' => 'getFeeBasisAmount',
        'line_item_id' => 'getLineItemId',
        'marketplace_fees' => 'getMarketplaceFees',
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
        $this->container['fee_basis_amount'] = $data['fee_basis_amount'] ?? null;
        $this->container['line_item_id'] = $data['line_item_id'] ?? null;
        $this->container['marketplace_fees'] = $data['marketplace_fees'] ?? null;
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
     * Gets fee_basis_amount.
     *
     * @return \TNT\Ebay\Sell\Finances\V1\Model\Amount|null
     */
    public function getFeeBasisAmount()
    {
        return $this->container['fee_basis_amount'];
    }

    /**
     * Sets fee_basis_amount.
     *
     * @param \TNT\Ebay\Sell\Finances\V1\Model\Amount|null $fee_basis_amount fee_basis_amount
     *
     * @return self
     */
    public function setFeeBasisAmount($fee_basis_amount)
    {
        $this->container['fee_basis_amount'] = $fee_basis_amount;

        return $this;
    }

    /**
     * Gets line_item_id.
     *
     * @return string|null
     */
    public function getLineItemId()
    {
        return $this->container['line_item_id'];
    }

    /**
     * Sets line_item_id.
     *
     * @param string|null $line_item_id the unique identifier of an order line item
     *
     * @return self
     */
    public function setLineItemId($line_item_id)
    {
        $this->container['line_item_id'] = $line_item_id;

        return $this;
    }

    /**
     * Gets marketplace_fees.
     *
     * @return \TNT\Ebay\Sell\Finances\V1\Model\Fee[]|null
     */
    public function getMarketplaceFees()
    {
        return $this->container['marketplace_fees'];
    }

    /**
     * Sets marketplace_fees.
     *
     * @param \TNT\Ebay\Sell\Finances\V1\Model\Fee[]|null $marketplace_fees an array of all fees accrued for the order line item and deducted from a seller payout
     *
     * @return self
     */
    public function setMarketplaceFees($marketplace_fees)
    {
        $this->container['marketplace_fees'] = $marketplace_fees;

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
