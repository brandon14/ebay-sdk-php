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
 * Task.
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

use ArrayAccess;
use TNT\Ebay\Sell\Feed\V1\ObjectSerializer;

/**
 * Task Class Doc Comment.
 *
 * @category Class
 * @description The type that defines the fields for the task details.
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Task implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'Task';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'completion_date' => 'string',
        'creation_date' => 'string',
        'detail_href' => 'string',
        'feed_type' => 'string',
        'schema_version' => 'string',
        'status' => 'string',
        'task_id' => 'string',
        'upload_summary' => '\TNT\Ebay\Sell\Feed\V1\Model\UploadSummary',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'completion_date' => null,
        'creation_date' => null,
        'detail_href' => null,
        'feed_type' => null,
        'schema_version' => null,
        'status' => null,
        'task_id' => null,
        'upload_summary' => null,
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
        'completion_date' => 'completionDate',
        'creation_date' => 'creationDate',
        'detail_href' => 'detailHref',
        'feed_type' => 'feedType',
        'schema_version' => 'schemaVersion',
        'status' => 'status',
        'task_id' => 'taskId',
        'upload_summary' => 'uploadSummary',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'completion_date' => 'setCompletionDate',
        'creation_date' => 'setCreationDate',
        'detail_href' => 'setDetailHref',
        'feed_type' => 'setFeedType',
        'schema_version' => 'setSchemaVersion',
        'status' => 'setStatus',
        'task_id' => 'setTaskId',
        'upload_summary' => 'setUploadSummary',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'completion_date' => 'getCompletionDate',
        'creation_date' => 'getCreationDate',
        'detail_href' => 'getDetailHref',
        'feed_type' => 'getFeedType',
        'schema_version' => 'getSchemaVersion',
        'status' => 'getStatus',
        'task_id' => 'getTaskId',
        'upload_summary' => 'getUploadSummary',
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
        $this->container['completion_date'] = $data['completion_date'] ?? null;
        $this->container['creation_date'] = $data['creation_date'] ?? null;
        $this->container['detail_href'] = $data['detail_href'] ?? null;
        $this->container['feed_type'] = $data['feed_type'] ?? null;
        $this->container['schema_version'] = $data['schema_version'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['task_id'] = $data['task_id'] ?? null;
        $this->container['upload_summary'] = $data['upload_summary'] ?? null;
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
     * Gets completion_date.
     *
     * @return string|null
     */
    public function getCompletionDate()
    {
        return $this->container['completion_date'];
    }

    /**
     * Sets completion_date.
     *
     * @param string|null $completion_date The timestamp when the task went into the COMPLETED or COMPLETED_WITH_ERROR state. This state means that eBay has compiled the report for the seller based on the seller&rsquo;s filter criteria, and the seller can run a getResultFile call to download the report.
     *
     * @return self
     */
    public function setCompletionDate($completion_date)
    {
        $this->container['completion_date'] = $completion_date;

        return $this;
    }

    /**
     * Gets creation_date.
     *
     * @return string|null
     */
    public function getCreationDate()
    {
        return $this->container['creation_date'];
    }

    /**
     * Sets creation_date.
     *
     * @param string|null $creation_date the date the task was created
     *
     * @return self
     */
    public function setCreationDate($creation_date)
    {
        $this->container['creation_date'] = $creation_date;

        return $this;
    }

    /**
     * Gets detail_href.
     *
     * @return string|null
     */
    public function getDetailHref()
    {
        return $this->container['detail_href'];
    }

    /**
     * Sets detail_href.
     *
     * @param string|null $detail_href The path to the call URI used to retrieve the task. This field points to the GetOrderTask URI if the task is for LMS_ORDER_REPORT or will be null if this task is for LMS_ORDER_ACK.
     *
     * @return self
     */
    public function setDetailHref($detail_href)
    {
        $this->container['detail_href'] = $detail_href;

        return $this;
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
     * @param string|null $feed_type the feed type associated with the task
     *
     * @return self
     */
    public function setFeedType($feed_type)
    {
        $this->container['feed_type'] = $feed_type;

        return $this;
    }

    /**
     * Gets schema_version.
     *
     * @return string|null
     */
    public function getSchemaVersion()
    {
        return $this->container['schema_version'];
    }

    /**
     * Sets schema_version.
     *
     * @param string|null $schema_version the schema version number associated with the task
     *
     * @return self
     */
    public function setSchemaVersion($schema_version)
    {
        $this->container['schema_version'] = $schema_version;

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
     * @param string|null $status The enumeration value that indicates the state of the task that was submitted in the request. See FeedStatusEnum for information. The values COMPLETED and COMPLETED_WITH_ERROR indicate the Order Report file is ready to download. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/feed/types/api:FeedStatusEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets task_id.
     *
     * @return string|null
     */
    public function getTaskId()
    {
        return $this->container['task_id'];
    }

    /**
     * Sets task_id.
     *
     * @param string|null $task_id the ID of the task that was submitted in the request
     *
     * @return self
     */
    public function setTaskId($task_id)
    {
        $this->container['task_id'] = $task_id;

        return $this;
    }

    /**
     * Gets upload_summary.
     *
     * @return \TNT\Ebay\Sell\Feed\V1\Model\UploadSummary|null
     */
    public function getUploadSummary()
    {
        return $this->container['upload_summary'];
    }

    /**
     * Sets upload_summary.
     *
     * @param \TNT\Ebay\Sell\Feed\V1\Model\UploadSummary|null $upload_summary upload_summary
     *
     * @return self
     */
    public function setUploadSummary($upload_summary)
    {
        $this->container['upload_summary'] = $upload_summary;

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
