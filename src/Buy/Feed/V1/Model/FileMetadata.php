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
 * FileMetadata.
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
 * Buy Feed API.
 *
 * The Feed API provides the ability to download TSV_GZIP feed files containing eBay items and an hourly snapshot file for a specific category, date, and marketplace.<br /><br />In addition to the API, there is an open-source Feed SDK written in Java that downloads, combines files into a single file when needed, and unzips the entire feed file. It also lets you specify field filters to curate the items in the file.
 *
 * The version of the OpenAPI document: v1.0.2
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace TNT\Ebay\Buy\Feed\V1\Model;

use TNT\Ebay\Buy\Feed\V1\ObjectSerializer;

/**
 * FileMetadata Class Doc Comment.
 *
 * @category Class
 *
 * @description This type is used to provide metadata about each feed file in a &lt;b&gt;getFile&lt;/b&gt; or &lt;b&gt;getFiles&lt;/b&gt; response.
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
class FileMetadata implements ModelInterface, \ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'FileMetadata';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'access' => 'string',
        'dimensions' => '\TNT\Ebay\Buy\Feed\V1\Model\Dimension[]',
        'feed_date' => 'string',
        'feed_scope' => 'string',
        'feed_type_id' => 'string',
        'file_id' => 'string',
        'format' => 'string',
        'marketplace_id' => 'string',
        'schema_version' => 'string',
        'size' => 'int',
        'span' => '\TNT\Ebay\Buy\Feed\V1\Model\TimeDuration',
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
        'access' => null,
        'dimensions' => null,
        'feed_date' => null,
        'feed_scope' => null,
        'feed_type_id' => null,
        'file_id' => null,
        'format' => null,
        'marketplace_id' => null,
        'schema_version' => null,
        'size' => 'int32',
        'span' => null,
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
        'access' => 'access',
        'dimensions' => 'dimensions',
        'feed_date' => 'feedDate',
        'feed_scope' => 'feedScope',
        'feed_type_id' => 'feedTypeId',
        'file_id' => 'fileId',
        'format' => 'format',
        'marketplace_id' => 'marketplaceId',
        'schema_version' => 'schemaVersion',
        'size' => 'size',
        'span' => 'span',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'access' => 'setAccess',
        'dimensions' => 'setDimensions',
        'feed_date' => 'setFeedDate',
        'feed_scope' => 'setFeedScope',
        'feed_type_id' => 'setFeedTypeId',
        'file_id' => 'setFileId',
        'format' => 'setFormat',
        'marketplace_id' => 'setMarketplaceId',
        'schema_version' => 'setSchemaVersion',
        'size' => 'setSize',
        'span' => 'setSpan',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'access' => 'getAccess',
        'dimensions' => 'getDimensions',
        'feed_date' => 'getFeedDate',
        'feed_scope' => 'getFeedScope',
        'feed_type_id' => 'getFeedTypeId',
        'file_id' => 'getFileId',
        'format' => 'getFormat',
        'marketplace_id' => 'getMarketplaceId',
        'schema_version' => 'getSchemaVersion',
        'size' => 'getSize',
        'span' => 'getSpan',
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
        $this->container['access'] = $data['access'] ?? null;
        $this->container['dimensions'] = $data['dimensions'] ?? null;
        $this->container['feed_date'] = $data['feed_date'] ?? null;
        $this->container['feed_scope'] = $data['feed_scope'] ?? null;
        $this->container['feed_type_id'] = $data['feed_type_id'] ?? null;
        $this->container['file_id'] = $data['file_id'] ?? null;
        $this->container['format'] = $data['format'] ?? null;
        $this->container['marketplace_id'] = $data['marketplace_id'] ?? null;
        $this->container['schema_version'] = $data['schema_version'] ?? null;
        $this->container['size'] = $data['size'] ?? null;
        $this->container['span'] = $data['span'] ?? null;
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
     * Gets access.
     *
     * @return string|null
     */
    public function getAccess()
    {
        return $this->container['access'];
    }

    /**
     * Sets access.
     *
     * @param string|null $access Indicates whether the application is permitted to access the feed file. One of <code>ALLOWED</code> or <code>RESTRICTED</code>. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/buy/feed/types/api:AccessEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setAccess($access)
    {
        $this->container['access'] = $access;

        return $this;
    }

    /**
     * Gets dimensions.
     *
     * @return \TNT\Ebay\Buy\Feed\V1\Model\Dimension[]|null
     */
    public function getDimensions()
    {
        return $this->container['dimensions'];
    }

    /**
     * Sets dimensions.
     *
     * @param \TNT\Ebay\Buy\Feed\V1\Model\Dimension[]|null $dimensions An array of dimensions supported by the corresponding feed file. <br /><br />Currently the only dimension available is <b>CATEGORY</b>.<br /><br /><b>Example:</b><BR /><code>&quot;dimensionKey&quot;: &quot;CATEGORY&quot;,<br />&quotvalues&quot;: &lsqb;&quot;15032&quot;&rsqb;
     *
     * @return self
     */
    public function setDimensions($dimensions)
    {
        $this->container['dimensions'] = $dimensions;

        return $this;
    }

    /**
     * Gets feed_date.
     *
     * @return string|null
     */
    public function getFeedDate()
    {
        return $this->container['feed_date'];
    }

    /**
     * Sets feed_date.
     *
     * @param string|null $feed_date The date on which the feed was created. <br /><br /><b>Format:</b> UTC format <code>(yyyy-MM-ddThh:00:00.000Z)</code>.
     *
     * @return self
     */
    public function setFeedDate($feed_date)
    {
        $this->container['feed_date'] = $feed_date;

        return $this;
    }

    /**
     * Gets feed_scope.
     *
     * @return string|null
     */
    public function getFeedScope()
    {
        return $this->container['feed_scope'];
    }

    /**
     * Sets feed_scope.
     *
     * @param string|null $feed_scope Specifies the frequency with which the feed file is made available (<code>HOURLY</code>, <code>DAILY</code>, <code>WEEKLY</code>).<br /><br />Currently only <code>DAILY</code> is supported. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/buy/feed/types/api:FeedScopeEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setFeedScope($feed_scope)
    {
        $this->container['feed_scope'] = $feed_scope;

        return $this;
    }

    /**
     * Gets feed_type_id.
     *
     * @return string|null
     */
    public function getFeedTypeId()
    {
        return $this->container['feed_type_id'];
    }

    /**
     * Sets feed_type_id.
     *
     * @param string|null $feed_type_id The unique identifier of the feed type.<br /><br /><span class=\"tablenote\"><span style=\"color:#004680\"><strong>Note:</strong></span> Refer to <a href=\"/api-docs/buy/feed/v1/static/overview.html#feed-types\" target=\"_blank\">Supported feed types</a> for additional details.</span>
     *
     * @return self
     */
    public function setFeedTypeId($feed_type_id)
    {
        $this->container['feed_type_id'] = $feed_type_id;

        return $this;
    }

    /**
     * Gets file_id.
     *
     * @return string|null
     */
    public function getFileId()
    {
        return $this->container['file_id'];
    }

    /**
     * Sets file_id.
     *
     * @param string|null $file_id The file's unique identifier. This <b>fileid</b> is used to select the feed file when using the <b>downloadFile</b> method.
     *
     * @return self
     */
    public function setFileId($file_id)
    {
        $this->container['file_id'] = $file_id;

        return $this;
    }

    /**
     * Gets format.
     *
     * @return string|null
     */
    public function getFormat()
    {
        return $this->container['format'];
    }

    /**
     * Sets format.
     *
     * @param string|null $format Format of the returned feed file. Currently only TSV is supported. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/buy/feed/types/api:FormatEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setFormat($format)
    {
        $this->container['format'] = $format;

        return $this;
    }

    /**
     * Gets marketplace_id.
     *
     * @return string|null
     */
    public function getMarketplaceId()
    {
        return $this->container['marketplace_id'];
    }

    /**
     * Sets marketplace_id.
     *
     * @param string|null $marketplace_id The eBay marketplace identifier for the marketplace(s) to which the feed applies.<br /><br /><b>Example:</b> <code>EBAY_UK</code>. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/buy/feed/types/bas:MarketplaceIdEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setMarketplaceId($marketplace_id)
    {
        $this->container['marketplace_id'] = $marketplace_id;

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
     * @param string|null $schema_version version of the API schema under which the feed was created
     *
     * @return self
     */
    public function setSchemaVersion($schema_version)
    {
        $this->container['schema_version'] = $schema_version;

        return $this;
    }

    /**
     * Gets size.
     *
     * @return int|null
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size.
     *
     * @param int|null $size size of the feed file in bytes
     *
     * @return self
     */
    public function setSize($size)
    {
        $this->container['size'] = $size;

        return $this;
    }

    /**
     * Gets span.
     *
     * @return \TNT\Ebay\Buy\Feed\V1\Model\TimeDuration|null
     */
    public function getSpan()
    {
        return $this->container['span'];
    }

    /**
     * Sets span.
     *
     * @param \TNT\Ebay\Buy\Feed\V1\Model\TimeDuration|null $span span
     *
     * @return self
     */
    public function setSpan($span)
    {
        $this->container['span'] = $span;

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
