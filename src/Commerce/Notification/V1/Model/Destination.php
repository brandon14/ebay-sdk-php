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
 * Destination.
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
 * Notification API.
 *
 * The eBay Notification API enables management of the entire end-to-end eBay notification experience by allowing users to:<ul><li>Browse for supported notification topics and retrieve topic details</li><li>Create, configure, and manage notification destination endpionts</li><li>Configure, manage, and test notification subscriptions</li><li>Process eBay notifications and verify the integrity of the message payload</li></ul>
 *
 * The version of the OpenAPI document: v1.2.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace TNT\Ebay\Commerce\Notification\V1\Model;

use TNT\Ebay\Commerce\Notification\V1\ObjectSerializer;

/**
 * Destination Class Doc Comment.
 *
 * @category Class
 *
 * @description A type that contains information about the destination.
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
class Destination implements ModelInterface, \ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'Destination';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'destination_id' => 'string',
        'name' => 'string',
        'status' => 'string',
        'delivery_config' => 'string',
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
        'destination_id' => null,
        'name' => null,
        'status' => null,
        'delivery_config' => null,
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
        'destination_id' => 'destinationId',
        'name' => 'name',
        'status' => 'status',
        'delivery_config' => 'deliveryConfig',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'destination_id' => 'setDestinationId',
        'name' => 'setName',
        'status' => 'setStatus',
        'delivery_config' => 'setDeliveryConfig',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'destination_id' => 'getDestinationId',
        'name' => 'getName',
        'status' => 'getStatus',
        'delivery_config' => 'getDeliveryConfig',
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
        $this->container['destination_id'] = $data['destination_id'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['delivery_config'] = $data['delivery_config'] ?? null;
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
     * Gets destination_id.
     *
     * @return string|null
     */
    public function getDestinationId()
    {
        return $this->container['destination_id'];
    }

    /**
     * Sets destination_id.
     *
     * @param string|null $destination_id the unique identifier for the destination
     *
     * @return self
     */
    public function setDestinationId($destination_id)
    {
        $this->container['destination_id'] = $destination_id;

        return $this;
    }

    /**
     * Gets name.
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name.
     *
     * @param string|null $name the name associated with this destination
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets status.
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status.
     *
     * @param string|null $status The status for this destination.<br /><br /><span class=\"tablenote\"><b>Note:</b> The <b>MARKED_DOWN</b> value is set by eBay systems and cannot be used in a create or update call by applications.</span><br /><br /><b>Valid values:</b><ul><li><code>ENABLED</code></li><li><code>DISABLED</code></li><li><code>MARKED_DOWN</code></li></ul> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/commerce/notification/types/api:DestinationStatusEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets delivery_config.
     *
     * @return string|null
     */
    public function getDeliveryConfig()
    {
        return $this->container['delivery_config'];
    }

    /**
     * Sets delivery_config.
     *
     * @param string|null $delivery_config The configuration associated with this destination. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/commerce/notification/types/desination'>eBay API documentation</a>
     *
     * @return self
     */
    public function setDeliveryConfig($delivery_config)
    {
        $this->container['delivery_config'] = $delivery_config;

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
