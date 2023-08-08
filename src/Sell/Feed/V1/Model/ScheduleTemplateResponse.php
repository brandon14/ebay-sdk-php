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
 * ScheduleTemplateResponse.
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
 * Feed API.
 *
 * <p>The <strong>Feed API</strong> lets sellers upload input files, download reports and files including their status, filter reports using URI parameters, and retrieve customer service metrics task details.</p>
 *
 * The version of the OpenAPI document: v1.3.1
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace TNT\Ebay\Sell\Feed\V1\Model;

use TNT\Ebay\Sell\Feed\V1\ObjectSerializer;

/**
 * ScheduleTemplateResponse Class Doc Comment.
 *
 * @category Class
 *
 * @description The type that defines the fields for a paginated result set of available schedule templates. The response consists of 0 or more sequenced &lt;em&gt; pages&lt;/em&gt; where each page has 0 or more items.
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
class ScheduleTemplateResponse implements ModelInterface, \ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'ScheduleTemplateResponse';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'feed_type' => 'string',
        'frequency' => 'string',
        'name' => 'string',
        'schedule_template_id' => 'string',
        'status' => 'string',
        'supported_configurations' => '\TNT\Ebay\Sell\Feed\V1\Model\SupportedConfiguration[]',
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
        'feed_type' => null,
        'frequency' => null,
        'name' => null,
        'schedule_template_id' => null,
        'status' => null,
        'supported_configurations' => null,
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
        'feed_type' => 'feedType',
        'frequency' => 'frequency',
        'name' => 'name',
        'schedule_template_id' => 'scheduleTemplateId',
        'status' => 'status',
        'supported_configurations' => 'supportedConfigurations',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'feed_type' => 'setFeedType',
        'frequency' => 'setFrequency',
        'name' => 'setName',
        'schedule_template_id' => 'setScheduleTemplateId',
        'status' => 'setStatus',
        'supported_configurations' => 'setSupportedConfigurations',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'feed_type' => 'getFeedType',
        'frequency' => 'getFrequency',
        'name' => 'getName',
        'schedule_template_id' => 'getScheduleTemplateId',
        'status' => 'getStatus',
        'supported_configurations' => 'getSupportedConfigurations',
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
        $this->container['feed_type'] = $data['feed_type'] ?? null;
        $this->container['frequency'] = $data['frequency'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['schedule_template_id'] = $data['schedule_template_id'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['supported_configurations'] = $data['supported_configurations'] ?? null;
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
     * Gets feed_type.
     *
     * @return string|null
     */
    public function getFeedType()
    {
        return $this->container['feed_type'];
    }

    /**
     * Sets feed_type.
     *
     * @param string|null $feed_type The feed type of the schedule template. <p> <span class=\"tablenote\"><strong>Note:</strong> When calling <strong>createSchedule</strong> and <strong>updateSchedule</strong> methods you must match the feed type specified by the schedule template (this feedType).</span></p>
     *
     * @return self
     */
    public function setFeedType($feed_type)
    {
        $this->container['feed_type'] = $feed_type;

        return $this;
    }

    /**
     * Gets frequency.
     *
     * @return string|null
     */
    public function getFrequency()
    {
        return $this->container['frequency'];
    }

    /**
     * Sets frequency.
     *
     * @param string|null $frequency This field specifies how often the schedule is generated. If set to <code>HALF_HOUR</code> or <code>ONE_HOUR</code>, you cannot set a <strong>preferredTriggerHour</strong> using <strong>createSchedule</strong> or <strong>updateSchedule</strong>. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/feed/types/api:FrequencyEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setFrequency($frequency)
    {
        $this->container['frequency'] = $frequency;

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
     * @param string|null $name the template name provided by the template
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets schedule_template_id.
     *
     * @return string|null
     */
    public function getScheduleTemplateId()
    {
        return $this->container['schedule_template_id'];
    }

    /**
     * Sets schedule_template_id.
     *
     * @param string|null $schedule_template_id The ID of the template. Use this ID to create a schedule based on the properties of this schedule template.
     *
     * @return self
     */
    public function setScheduleTemplateId($schedule_template_id)
    {
        $this->container['schedule_template_id'] = $schedule_template_id;

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
     * @param string|null $status The present status of the template. You cannot create or modify a schedule using a template with an <code>INACTIVE</code> status.  For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/feed/types/api:StatusEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets supported_configurations.
     *
     * @return \TNT\Ebay\Sell\Feed\V1\Model\SupportedConfiguration[]|null
     */
    public function getSupportedConfigurations()
    {
        return $this->container['supported_configurations'];
    }

    /**
     * Sets supported_configurations.
     *
     * @param \TNT\Ebay\Sell\Feed\V1\Model\SupportedConfiguration[]|null $supported_configurations an array of the configuration supported by this template
     *
     * @return self
     */
    public function setSupportedConfigurations($supported_configurations)
    {
        $this->container['supported_configurations'] = $supported_configurations;

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
