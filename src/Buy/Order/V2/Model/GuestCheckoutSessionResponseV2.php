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
 * GuestCheckoutSessionResponseV2.
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
 * <span class=\"tablenote\"><b>Note:</b> This version of the Order API (v2) currently only supports the guest payment flow for eBay managed payments. To view the v1_beta version of the Order API, which includes both member and guest checkout payment flows, refer to the <a href=\"/api-docs/buy/order_v1/resources/methods\">Order_v1 API</a> documentation.</span><br /><br /><span class=\"tablenote\"><b>Note:</b> This is a <a href=\"https://developer.ebay.com/api-docs/static/versioning.html#limited\" target=\"_blank\"><img src=\"/cms/img/docs/partners-api.svg\" class=\"legend-icon partners-icon\"  alt=\"Limited Release\" title=\"Limited Release\" />(Limited Release)</a> API available only to select developers approved by business units.</span><br /><br />The Order API provides interfaces that let shoppers pay for items. It also returns payment and shipping status of the order.
 *
 * The version of the OpenAPI document: v2.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace TNT\Ebay\Buy\Order\V2\Model;

use ArrayAccess;
use TNT\Ebay\Buy\Order\V2\ObjectSerializer;

/**
 * GuestCheckoutSessionResponseV2 Class Doc Comment.
 *
 * @category Class
 * @description Guest session response v2
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class GuestCheckoutSessionResponseV2 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'GuestCheckoutSessionResponseV2';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'applied_coupons' => '\TNT\Ebay\Buy\Order\V2\Model\Coupon[]',
        'checkout_session_id' => 'string',
        'line_items' => '\TNT\Ebay\Buy\Order\V2\Model\LineItem[]',
        'pricing_summary' => '\TNT\Ebay\Buy\Order\V2\Model\PricingSummaryV2',
        'shipping_address' => '\TNT\Ebay\Buy\Order\V2\Model\ShippingAddress',
        'warnings' => '\TNT\Ebay\Buy\Order\V2\Model\Error[]',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'applied_coupons' => null,
        'checkout_session_id' => null,
        'line_items' => null,
        'pricing_summary' => null,
        'shipping_address' => null,
        'warnings' => null,
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
        'applied_coupons' => 'appliedCoupons',
        'checkout_session_id' => 'checkoutSessionId',
        'line_items' => 'lineItems',
        'pricing_summary' => 'pricingSummary',
        'shipping_address' => 'shippingAddress',
        'warnings' => 'warnings',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'applied_coupons' => 'setAppliedCoupons',
        'checkout_session_id' => 'setCheckoutSessionId',
        'line_items' => 'setLineItems',
        'pricing_summary' => 'setPricingSummary',
        'shipping_address' => 'setShippingAddress',
        'warnings' => 'setWarnings',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'applied_coupons' => 'getAppliedCoupons',
        'checkout_session_id' => 'getCheckoutSessionId',
        'line_items' => 'getLineItems',
        'pricing_summary' => 'getPricingSummary',
        'shipping_address' => 'getShippingAddress',
        'warnings' => 'getWarnings',
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
        $this->container['applied_coupons'] = $data['applied_coupons'] ?? null;
        $this->container['checkout_session_id'] = $data['checkout_session_id'] ?? null;
        $this->container['line_items'] = $data['line_items'] ?? null;
        $this->container['pricing_summary'] = $data['pricing_summary'] ?? null;
        $this->container['shipping_address'] = $data['shipping_address'] ?? null;
        $this->container['warnings'] = $data['warnings'] ?? null;
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
     * Gets applied_coupons.
     *
     * @return \TNT\Ebay\Buy\Order\V2\Model\Coupon[]|null
     */
    public function getAppliedCoupons()
    {
        return $this->container['applied_coupons'];
    }

    /**
     * Sets applied_coupons.
     *
     * @param \TNT\Ebay\Buy\Order\V2\Model\Coupon[]|null $applied_coupons a container that returns the information for the coupons that were applied in the guest checkout session
     *
     * @return self
     */
    public function setAppliedCoupons($applied_coupons)
    {
        $this->container['applied_coupons'] = $applied_coupons;

        return $this;
    }

    /**
     * Gets checkout_session_id.
     *
     * @return string|null
     */
    public function getCheckoutSessionId()
    {
        return $this->container['checkout_session_id'];
    }

    /**
     * Sets checkout_session_id.
     *
     * @param string|null $checkout_session_id The eBay-assigned guest checkout session ID. This ID is created after a successful <b>initiateGuestCheckoutSession</b> call.
     *
     * @return self
     */
    public function setCheckoutSessionId($checkout_session_id)
    {
        $this->container['checkout_session_id'] = $checkout_session_id;

        return $this;
    }

    /**
     * Gets line_items.
     *
     * @return \TNT\Ebay\Buy\Order\V2\Model\LineItem[]|null
     */
    public function getLineItems()
    {
        return $this->container['line_items'];
    }

    /**
     * Sets line_items.
     *
     * @param \TNT\Ebay\Buy\Order\V2\Model\LineItem[]|null $line_items an array of line items associated with the guest checkout session
     *
     * @return self
     */
    public function setLineItems($line_items)
    {
        $this->container['line_items'] = $line_items;

        return $this;
    }

    /**
     * Gets pricing_summary.
     *
     * @return \TNT\Ebay\Buy\Order\V2\Model\PricingSummaryV2|null
     */
    public function getPricingSummary()
    {
        return $this->container['pricing_summary'];
    }

    /**
     * Sets pricing_summary.
     *
     * @param \TNT\Ebay\Buy\Order\V2\Model\PricingSummaryV2|null $pricing_summary pricing_summary
     *
     * @return self
     */
    public function setPricingSummary($pricing_summary)
    {
        $this->container['pricing_summary'] = $pricing_summary;

        return $this;
    }

    /**
     * Gets shipping_address.
     *
     * @return \TNT\Ebay\Buy\Order\V2\Model\ShippingAddress|null
     */
    public function getShippingAddress()
    {
        return $this->container['shipping_address'];
    }

    /**
     * Sets shipping_address.
     *
     * @param \TNT\Ebay\Buy\Order\V2\Model\ShippingAddress|null $shipping_address shipping_address
     *
     * @return self
     */
    public function setShippingAddress($shipping_address)
    {
        $this->container['shipping_address'] = $shipping_address;

        return $this;
    }

    /**
     * Gets warnings.
     *
     * @return \TNT\Ebay\Buy\Order\V2\Model\Error[]|null
     */
    public function getWarnings()
    {
        return $this->container['warnings'];
    }

    /**
     * Sets warnings.
     *
     * @param \TNT\Ebay\Buy\Order\V2\Model\Error[]|null $warnings an array of errors or warnings that were generated during the method processing
     *
     * @return self
     */
    public function setWarnings($warnings)
    {
        $this->container['warnings'] = $warnings;

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