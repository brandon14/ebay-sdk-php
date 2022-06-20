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
 * FulfillmentStartInstruction.
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
 * The version of the OpenAPI document: v1.19.10
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace TNT\Ebay\Sell\Fulfillment\V1\Model;

use ArrayAccess;
use TNT\Ebay\Sell\Fulfillment\V1\ObjectSerializer;

/**
 * FulfillmentStartInstruction Class Doc Comment.
 *
 * @category Class
 * @description This type contains a set of specifications for processing a fulfillment of an order, including the type of fulfillment, shipping carrier and service, addressing details, and estimated delivery window. These instructions are derived from the buyer&#39;s and seller&#39;s eBay account preferences, the listing parameters, and the buyer&#39;s checkout selections. The seller can use them as a starting point for packaging, addressing, and shipping the order.
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class FulfillmentStartInstruction implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'FulfillmentStartInstruction';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'ebay_supported_fulfillment' => 'bool',
        'final_destination_address' => '\TNT\Ebay\Sell\Fulfillment\V1\Model\Address',
        'fulfillment_instructions_type' => 'string',
        'max_estimated_delivery_date' => 'string',
        'min_estimated_delivery_date' => 'string',
        'pickup_step' => '\TNT\Ebay\Sell\Fulfillment\V1\Model\PickupStep',
        'shipping_step' => '\TNT\Ebay\Sell\Fulfillment\V1\Model\ShippingStep',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'ebay_supported_fulfillment' => null,
        'final_destination_address' => null,
        'fulfillment_instructions_type' => null,
        'max_estimated_delivery_date' => null,
        'min_estimated_delivery_date' => null,
        'pickup_step' => null,
        'shipping_step' => null,
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
        'ebay_supported_fulfillment' => 'ebaySupportedFulfillment',
        'final_destination_address' => 'finalDestinationAddress',
        'fulfillment_instructions_type' => 'fulfillmentInstructionsType',
        'max_estimated_delivery_date' => 'maxEstimatedDeliveryDate',
        'min_estimated_delivery_date' => 'minEstimatedDeliveryDate',
        'pickup_step' => 'pickupStep',
        'shipping_step' => 'shippingStep',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'ebay_supported_fulfillment' => 'setEbaySupportedFulfillment',
        'final_destination_address' => 'setFinalDestinationAddress',
        'fulfillment_instructions_type' => 'setFulfillmentInstructionsType',
        'max_estimated_delivery_date' => 'setMaxEstimatedDeliveryDate',
        'min_estimated_delivery_date' => 'setMinEstimatedDeliveryDate',
        'pickup_step' => 'setPickupStep',
        'shipping_step' => 'setShippingStep',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'ebay_supported_fulfillment' => 'getEbaySupportedFulfillment',
        'final_destination_address' => 'getFinalDestinationAddress',
        'fulfillment_instructions_type' => 'getFulfillmentInstructionsType',
        'max_estimated_delivery_date' => 'getMaxEstimatedDeliveryDate',
        'min_estimated_delivery_date' => 'getMinEstimatedDeliveryDate',
        'pickup_step' => 'getPickupStep',
        'shipping_step' => 'getShippingStep',
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
        $this->container['ebay_supported_fulfillment'] = $data['ebay_supported_fulfillment'] ?? null;
        $this->container['final_destination_address'] = $data['final_destination_address'] ?? null;
        $this->container['fulfillment_instructions_type'] = $data['fulfillment_instructions_type'] ?? null;
        $this->container['max_estimated_delivery_date'] = $data['max_estimated_delivery_date'] ?? null;
        $this->container['min_estimated_delivery_date'] = $data['min_estimated_delivery_date'] ?? null;
        $this->container['pickup_step'] = $data['pickup_step'] ?? null;
        $this->container['shipping_step'] = $data['shipping_step'] ?? null;
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
     * Gets ebay_supported_fulfillment.
     *
     * @return bool|null
     */
    public function getEbaySupportedFulfillment()
    {
        return $this->container['ebay_supported_fulfillment'];
    }

    /**
     * Sets ebay_supported_fulfillment.
     *
     * @param bool|null $ebay_supported_fulfillment This field is only returned if its value is <code>true</code> and indicates that the fulfillment will be shipped via eBay's Global Shipping Program. <br /><br />For more information, see the <a href=\"https://www.ebay.com/help/selling/shipping-items/setting-shipping-options/global-shipping-program?id=4646\" target=\"_blank\">Global Shipping Program</a> help topic.
     *
     * @return self
     */
    public function setEbaySupportedFulfillment($ebay_supported_fulfillment)
    {
        $this->container['ebay_supported_fulfillment'] = $ebay_supported_fulfillment;

        return $this;
    }

    /**
     * Gets final_destination_address.
     *
     * @return \TNT\Ebay\Sell\Fulfillment\V1\Model\Address|null
     */
    public function getFinalDestinationAddress()
    {
        return $this->container['final_destination_address'];
    }

    /**
     * Sets final_destination_address.
     *
     * @param \TNT\Ebay\Sell\Fulfillment\V1\Model\Address|null $final_destination_address final_destination_address
     *
     * @return self
     */
    public function setFinalDestinationAddress($final_destination_address)
    {
        $this->container['final_destination_address'] = $final_destination_address;

        return $this;
    }

    /**
     * Gets fulfillment_instructions_type.
     *
     * @return string|null
     */
    public function getFulfillmentInstructionsType()
    {
        return $this->container['fulfillment_instructions_type'];
    }

    /**
     * Sets fulfillment_instructions_type.
     *
     * @param string|null $fulfillment_instructions_type The enumeration value returned in this field indicates the method of fulfillment that will be used to deliver this set of line items (this package) to the buyer. This field will have a value of <code>SHIP_TO</code> if the <b>ebaySupportedFulfillment</b> field is returned with a value of <code>true</code>. See the <strong>FulfillmentInstructionsType</strong> definition for more information about different fulfillment types. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/fulfillment/types/sel:FulfillmentInstructionsType'>eBay API documentation</a>
     *
     * @return self
     */
    public function setFulfillmentInstructionsType($fulfillment_instructions_type)
    {
        $this->container['fulfillment_instructions_type'] = $fulfillment_instructions_type;

        return $this;
    }

    /**
     * Gets max_estimated_delivery_date.
     *
     * @return string|null
     */
    public function getMaxEstimatedDeliveryDate()
    {
        return $this->container['max_estimated_delivery_date'];
    }

    /**
     * Sets max_estimated_delivery_date.
     *
     * @param string|null $max_estimated_delivery_date This is the estimated latest date that the fulfillment will be completed. This timestamp is in ISO 8601 format, which uses the 24-hour Universal Coordinated Time (UTC) clock. This field is not returned ifthe value of the <b>fulfillmentInstructionsType</b> field is <code>DIGITAL</code> or <code>PREPARE_FOR_PICKUP</code>.  <br /><br /><b>Format:</b> <code>[YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z</code> <br /><b>Example:</b> <code>2015-08-04T19:09:02.768Z</code>
     *
     * @return self
     */
    public function setMaxEstimatedDeliveryDate($max_estimated_delivery_date)
    {
        $this->container['max_estimated_delivery_date'] = $max_estimated_delivery_date;

        return $this;
    }

    /**
     * Gets min_estimated_delivery_date.
     *
     * @return string|null
     */
    public function getMinEstimatedDeliveryDate()
    {
        return $this->container['min_estimated_delivery_date'];
    }

    /**
     * Sets min_estimated_delivery_date.
     *
     * @param string|null $min_estimated_delivery_date This is the estimated earliest date that the fulfillment will be completed. This timestamp is in ISO 8601 format, which uses the 24-hour Universal Coordinated Time (UTC) clock. This field is not returned if  the value of the <b>fulfillmentInstructionsType</b> field is <code>DIGITAL</code> or <code>PREPARE_FOR_PICKUP</code>.  <br /><br /><b>Format:</b> <code>[YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z</code> <br /><b>Example:</b> <code>2015-08-04T19:09:02.768Z</code>
     *
     * @return self
     */
    public function setMinEstimatedDeliveryDate($min_estimated_delivery_date)
    {
        $this->container['min_estimated_delivery_date'] = $min_estimated_delivery_date;

        return $this;
    }

    /**
     * Gets pickup_step.
     *
     * @return \TNT\Ebay\Sell\Fulfillment\V1\Model\PickupStep|null
     */
    public function getPickupStep()
    {
        return $this->container['pickup_step'];
    }

    /**
     * Sets pickup_step.
     *
     * @param \TNT\Ebay\Sell\Fulfillment\V1\Model\PickupStep|null $pickup_step pickup_step
     *
     * @return self
     */
    public function setPickupStep($pickup_step)
    {
        $this->container['pickup_step'] = $pickup_step;

        return $this;
    }

    /**
     * Gets shipping_step.
     *
     * @return \TNT\Ebay\Sell\Fulfillment\V1\Model\ShippingStep|null
     */
    public function getShippingStep()
    {
        return $this->container['shipping_step'];
    }

    /**
     * Sets shipping_step.
     *
     * @param \TNT\Ebay\Sell\Fulfillment\V1\Model\ShippingStep|null $shipping_step shipping_step
     *
     * @return self
     */
    public function setShippingStep($shipping_step)
    {
        $this->container['shipping_step'] = $shipping_step;

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
