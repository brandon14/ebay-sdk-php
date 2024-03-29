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
 * LegacyReference.
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
 * Order API.
 *
 * <span class=\"tablenote\"><b>Note:</b> The Order API (v2) currently only supports the guest payment/checkout flow. If you need to support member payment/checkout flow, use the <a href=\"/api-docs/buy/order_v1/resources/methods\">v1_beta version</a> of the Order API.</span><br /><br /><span class=\"tablenote\"><b>Note:</b> This is a <a href=\"https://developer.ebay.com/api-docs/static/versioning.html#limited\" target=\"_blank\"><img src=\"/cms/img/docs/partners-api.svg\" class=\"legend-icon partners-icon\"  alt=\"Limited Release\" title=\"Limited Release\" />(Limited Release)</a> API available only to select developers approved by business units.</span><br /><br />The Order API provides interfaces that let shoppers pay for items. It also returns payment and shipping status of the order.
 *
 * The version of the OpenAPI document: v2.1.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace TNT\Ebay\Buy\Order\V2\Model;

use TNT\Ebay\Buy\Order\V2\ObjectSerializer;

/**
 * LegacyReference Class Doc Comment.
 *
 * @category Class
 *
 * @description A type that defines the fields to support using the &lt;a href&#x3D;\&quot;https://developer.ebay.com/devzone/post-order/index.html#callindex\&quot;&gt;Post Order API&lt;/a&gt; for returns and cancellations.&lt;br /&gt;&lt;br /&gt;&lt;b&gt; Restriction:&lt;/b&gt; The Post Order API can be used only with eBay member checkouts.
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
class LegacyReference implements ModelInterface, \ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'LegacyReference';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'legacy_item_id' => 'string',
        'legacy_order_id' => 'string',
        'legacy_transaction_id' => 'string',
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
        'legacy_item_id' => null,
        'legacy_order_id' => null,
        'legacy_transaction_id' => null,
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
        'legacy_item_id' => 'legacyItemId',
        'legacy_order_id' => 'legacyOrderId',
        'legacy_transaction_id' => 'legacyTransactionId',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'legacy_item_id' => 'setLegacyItemId',
        'legacy_order_id' => 'setLegacyOrderId',
        'legacy_transaction_id' => 'setLegacyTransactionId',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'legacy_item_id' => 'getLegacyItemId',
        'legacy_order_id' => 'getLegacyOrderId',
        'legacy_transaction_id' => 'getLegacyTransactionId',
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
        $this->container['legacy_item_id'] = $data['legacy_item_id'] ?? null;
        $this->container['legacy_order_id'] = $data['legacy_order_id'] ?? null;
        $this->container['legacy_transaction_id'] = $data['legacy_transaction_id'] ?? null;
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
     * Gets legacy_item_id.
     *
     * @return string|null
     */
    public function getLegacyItemId()
    {
        return $this->container['legacy_item_id'];
    }

    /**
     * Sets legacy_item_id.
     *
     * @param string|null $legacy_item_id The legacy ID used to identify an item.<br /><br />This is used by the Post Order API <a href=\"https://developer.ebay.com/Devzone/post-order/post-order_v2_return__post.html\" target=\"_blank\">Create Return Request</a> method. This call initiates the item return process. For more information on how to use this field in the Post Order API, see <a href=\"/api-docs/buy/static/api-order.html#return-request\">Create a return request</a> in the Buy Integration Guide.<br /><br /><b> Restriction:</b> The Post Order API can be used only with eBay member checkouts.
     *
     * @return self
     */
    public function setLegacyItemId($legacy_item_id)
    {
        $this->container['legacy_item_id'] = $legacy_item_id;

        return $this;
    }

    /**
     * Gets legacy_order_id.
     *
     * @return string|null
     */
    public function getLegacyOrderId()
    {
        return $this->container['legacy_order_id'];
    }

    /**
     * Sets legacy_order_id.
     *
     * @param string|null $legacy_order_id The legacy ID of the order.<br /><br />This is used by the Post Order API <a href=\"https://developer.ebay.com/Devzone/post-order/post-order_v2_cancellation__post.html\" target=\"_blank\">Submit Cancellation Request</a> method. This method initiates the item cancellation process. For more information on how to use this field in the Post Order API, see <a href=\"/api-docs/buy/static/api-order.html#using\">Using the Post Order API</a>.<br /><br /><b>Restriction:</b> The Post Order API can be used only with eBay member checkouts.
     *
     * @return self
     */
    public function setLegacyOrderId($legacy_order_id)
    {
        $this->container['legacy_order_id'] = $legacy_order_id;

        return $this;
    }

    /**
     * Gets legacy_transaction_id.
     *
     * @return string|null
     */
    public function getLegacyTransactionId()
    {
        return $this->container['legacy_transaction_id'];
    }

    /**
     * Sets legacy_transaction_id.
     *
     * @param string|null $legacy_transaction_id The legacy ID of the transaction.<br /><br />This is used by the Post Order API <a href=\"https://developer.ebay.com/devzone/post-order/post-order_v2_return__post.html\" target=\"_blank\">Create Return Request</a> call. This call initiates the item return process. For more information on how to use this field in the Post Order API, see <a href=\"/api-docs/buy/static/api-order.html#using\">Using the Post Order API</a> in the Buy Integration Guide.<br /><br /><b>Restriction:</b> The Post Order API can be used only with eBay member checkouts.
     *
     * @return self
     */
    public function setLegacyTransactionId($legacy_transaction_id)
    {
        $this->container['legacy_transaction_id'] = $legacy_transaction_id;

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
