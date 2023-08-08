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
 * IssueRefundRequest.
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
 * Fulfillment API.
 *
 * Use the Fulfillment API to complete the process of packaging, addressing, handling, and shipping each order on behalf of the seller, in accordance with the payment method and timing specified at checkout.
 *
 * The version of the OpenAPI document: v1.19.17
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace TNT\Ebay\Sell\Fulfillment\V1\Model;

use TNT\Ebay\Sell\Fulfillment\V1\ObjectSerializer;

/**
 * IssueRefundRequest Class Doc Comment.
 *
 * @category Class
 *
 * @description The base type used by the request payload of the &lt;b&gt;issueRefund&lt;/b&gt; method.
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
class IssueRefundRequest implements ModelInterface, \ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'IssueRefundRequest';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'reason_for_refund' => 'string',
        'comment' => 'string',
        'refund_items' => '\TNT\Ebay\Sell\Fulfillment\V1\Model\RefundItem[]',
        'order_level_refund_amount' => '\TNT\Ebay\Sell\Fulfillment\V1\Model\SimpleAmount',
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
        'reason_for_refund' => null,
        'comment' => null,
        'refund_items' => null,
        'order_level_refund_amount' => null,
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
        'reason_for_refund' => 'reasonForRefund',
        'comment' => 'comment',
        'refund_items' => 'refundItems',
        'order_level_refund_amount' => 'orderLevelRefundAmount',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'reason_for_refund' => 'setReasonForRefund',
        'comment' => 'setComment',
        'refund_items' => 'setRefundItems',
        'order_level_refund_amount' => 'setOrderLevelRefundAmount',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'reason_for_refund' => 'getReasonForRefund',
        'comment' => 'getComment',
        'refund_items' => 'getRefundItems',
        'order_level_refund_amount' => 'getOrderLevelRefundAmount',
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
        $this->container['reason_for_refund'] = $data['reason_for_refund'] ?? null;
        $this->container['comment'] = $data['comment'] ?? null;
        $this->container['refund_items'] = $data['refund_items'] ?? null;
        $this->container['order_level_refund_amount'] = $data['order_level_refund_amount'] ?? null;
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
     * Gets reason_for_refund.
     *
     * @return string|null
     */
    public function getReasonForRefund()
    {
        return $this->container['reason_for_refund'];
    }

    /**
     * Sets reason_for_refund.
     *
     * @param string|null $reason_for_refund The enumeration value passed into this field indicates the reason for the refund. One of the defined enumeration values in the <b>ReasonForRefundEnum</b> type must be used.<br/><br/>This field is required, and it is highly recommended that sellers use the correct refund reason, especially in the case of a buyer-requested cancellation or 'buyer remorse' return to indicate that there was nothing wrong with the item(s) or with the shipment of the order.<br/><br/><span class=\"tablenote\"><strong>Note:</strong> If issuing refunds for more than one order line item, keep in mind that the refund reason must be the same for each of the order line items. If the refund reason is different for one or more order line items in an order, the seller would need to make separate <b>issueRefund</b> calls, one for each refund reason. </span> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/fulfillment/types/api:ReasonForRefundEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setReasonForRefund($reason_for_refund)
    {
        $this->container['reason_for_refund'] = $reason_for_refund;

        return $this;
    }

    /**
     * Gets comment.
     *
     * @return string|null
     */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
     * Sets comment.
     *
     * @param string|null $comment This free-text field allows the seller to clarify why the refund is being issued to the buyer.<br/><br/><b>Max Length</b>: 100
     *
     * @return self
     */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;

        return $this;
    }

    /**
     * Gets refund_items.
     *
     * @return \TNT\Ebay\Sell\Fulfillment\V1\Model\RefundItem[]|null
     */
    public function getRefundItems()
    {
        return $this->container['refund_items'];
    }

    /**
     * Sets refund_items.
     *
     * @param \TNT\Ebay\Sell\Fulfillment\V1\Model\RefundItem[]|null $refund_items The <b>refundItems</b> array is only required if the seller is issuing a refund for one or more individual order line items in a multiple line item order. Otherwise, the seller just uses the <b>orderLevelRefundAmount</b> container to specify the amount of the refund for the entire order.
     *
     * @return self
     */
    public function setRefundItems($refund_items)
    {
        $this->container['refund_items'] = $refund_items;

        return $this;
    }

    /**
     * Gets order_level_refund_amount.
     *
     * @return \TNT\Ebay\Sell\Fulfillment\V1\Model\SimpleAmount|null
     */
    public function getOrderLevelRefundAmount()
    {
        return $this->container['order_level_refund_amount'];
    }

    /**
     * Sets order_level_refund_amount.
     *
     * @param \TNT\Ebay\Sell\Fulfillment\V1\Model\SimpleAmount|null $order_level_refund_amount order_level_refund_amount
     *
     * @return self
     */
    public function setOrderLevelRefundAmount($order_level_refund_amount)
    {
        $this->container['order_level_refund_amount'] = $order_level_refund_amount;

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
