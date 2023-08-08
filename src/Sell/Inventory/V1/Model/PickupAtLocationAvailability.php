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
 * PickupAtLocationAvailability.
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
 * Inventory API.
 *
 * The Inventory API is used to create and manage inventory, and then to publish and manage this inventory on an eBay marketplace. There are also methods in this API that will convert eligible, active eBay listings into the Inventory API model.
 *
 * The version of the OpenAPI document: 1.16.1
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace TNT\Ebay\Sell\Inventory\V1\Model;

use TNT\Ebay\Sell\Inventory\V1\ObjectSerializer;

/**
 * PickupAtLocationAvailability Class Doc Comment.
 *
 * @category Class
 *
 * @description This type is used to specify/indicate the quantity of the inventory item that is available for an In-Store Pickup order at the merchant&#39;s physical store (specified by the &lt;strong&gt;merchantLocationKey&lt;/strong&gt; field).
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
class PickupAtLocationAvailability implements ModelInterface, \ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'PickupAtLocationAvailability';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'availability_type' => 'string',
        'fulfillment_time' => '\TNT\Ebay\Sell\Inventory\V1\Model\TimeDuration',
        'merchant_location_key' => 'string',
        'quantity' => 'int',
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
        'availability_type' => null,
        'fulfillment_time' => null,
        'merchant_location_key' => null,
        'quantity' => 'int32',
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
        'availability_type' => 'availabilityType',
        'fulfillment_time' => 'fulfillmentTime',
        'merchant_location_key' => 'merchantLocationKey',
        'quantity' => 'quantity',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'availability_type' => 'setAvailabilityType',
        'fulfillment_time' => 'setFulfillmentTime',
        'merchant_location_key' => 'setMerchantLocationKey',
        'quantity' => 'setQuantity',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'availability_type' => 'getAvailabilityType',
        'fulfillment_time' => 'getFulfillmentTime',
        'merchant_location_key' => 'getMerchantLocationKey',
        'quantity' => 'getQuantity',
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
        $this->container['availability_type'] = $data['availability_type'] ?? null;
        $this->container['fulfillment_time'] = $data['fulfillment_time'] ?? null;
        $this->container['merchant_location_key'] = $data['merchant_location_key'] ?? null;
        $this->container['quantity'] = $data['quantity'] ?? null;
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
     * Gets availability_type.
     *
     * @return string|null
     */
    public function getAvailabilityType()
    {
        return $this->container['availability_type'];
    }

    /**
     * Sets availability_type.
     *
     * @param string|null $availability_type The enumeration value in this field indicates the availability status of the inventory item at the merchant's physical store specified by the <strong>pickupAtLocationAvailability.merchantLocationKey</strong> field. This field is required if the <strong>pickupAtLocationAvailability</strong> container is used, and is always returned with the <strong>pickupAtLocationAvailability</strong> container.  <br/><br/> See <a href=\"/api-docs/sell/inventory/types/slr:AvailabilityTypeEnum\">AvailabilityTypeEnum</a> for more information about how/when you use each enumeration value. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/inventory/types/slr:AvailabilityTypeEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setAvailabilityType($availability_type)
    {
        $this->container['availability_type'] = $availability_type;

        return $this;
    }

    /**
     * Gets fulfillment_time.
     *
     * @return \TNT\Ebay\Sell\Inventory\V1\Model\TimeDuration|null
     */
    public function getFulfillmentTime()
    {
        return $this->container['fulfillment_time'];
    }

    /**
     * Sets fulfillment_time.
     *
     * @param \TNT\Ebay\Sell\Inventory\V1\Model\TimeDuration|null $fulfillment_time fulfillment_time
     *
     * @return self
     */
    public function setFulfillmentTime($fulfillment_time)
    {
        $this->container['fulfillment_time'] = $fulfillment_time;

        return $this;
    }

    /**
     * Gets merchant_location_key.
     *
     * @return string|null
     */
    public function getMerchantLocationKey()
    {
        return $this->container['merchant_location_key'];
    }

    /**
     * Sets merchant_location_key.
     *
     * @param string|null $merchant_location_key The unique identifier of a merchant's store where the In-Store Pickup inventory item is currently located, or where inventory will be sent to. If the merchant's store is currently awaiting for inventory, the <strong>availabilityType</strong> value should be <code>SHIP_TO_STORE</code>. This field is required if the <strong>pickupAtLocationAvailability</strong> container is used, and is always returned with the <strong>pickupAtLocationAvailability</strong> container.<br/> <br/><b>Max length</b>: 36
     *
     * @return self
     */
    public function setMerchantLocationKey($merchant_location_key)
    {
        $this->container['merchant_location_key'] = $merchant_location_key;

        return $this;
    }

    /**
     * Gets quantity.
     *
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity.
     *
     * @param int|null $quantity This integer value indicates the quantity of the inventory item that is available for In-Store Pickup at the store identified by the  <strong>merchantLocationKey</strong> value.  The value of <strong>quantity</strong> should be an integer value greater than <code>0</code>, unless the inventory item is out of stock. This field is required if the <strong>pickupAtLocationAvailability</strong> container is used, and is always returned with the <strong>pickupAtLocationAvailability</strong> container.
     *
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

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
