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
 * SupportedFeed.
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

use ArrayAccess;
use TNT\Ebay\Buy\Feed\V1\ObjectSerializer;

/**
 * SupportedFeed Class Doc Comment.
 *
 * @category Class
 * @description The object that is returned by a successful &lt;b&gt;getFeedType&lt;/b&gt; or &lt;b&gt;getFeedTypes&lt;/b&gt; search describing the characteristics of a feed type.
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class SupportedFeed implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'SupportedFeed';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'authorization_scopes' => 'string[]',
        'constraint' => '\TNT\Ebay\Buy\Feed\V1\Model\Constraint',
        'feed_scope' => 'string',
        'look_back' => '\TNT\Ebay\Buy\Feed\V1\Model\TimeDuration',
        'status' => 'string',
        'supported_schemas' => '\TNT\Ebay\Buy\Feed\V1\Model\SupportedSchema[]',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'authorization_scopes' => null,
        'constraint' => null,
        'feed_scope' => null,
        'look_back' => null,
        'status' => null,
        'supported_schemas' => null,
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
        'authorization_scopes' => 'authorizationScopes',
        'constraint' => 'constraint',
        'feed_scope' => 'feedScope',
        'look_back' => 'lookBack',
        'status' => 'status',
        'supported_schemas' => 'supportedSchemas',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'authorization_scopes' => 'setAuthorizationScopes',
        'constraint' => 'setConstraint',
        'feed_scope' => 'setFeedScope',
        'look_back' => 'setLookBack',
        'status' => 'setStatus',
        'supported_schemas' => 'setSupportedSchemas',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'authorization_scopes' => 'getAuthorizationScopes',
        'constraint' => 'getConstraint',
        'feed_scope' => 'getFeedScope',
        'look_back' => 'getLookBack',
        'status' => 'getStatus',
        'supported_schemas' => 'getSupportedSchemas',
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
        $this->container['authorization_scopes'] = $data['authorization_scopes'] ?? null;
        $this->container['constraint'] = $data['constraint'] ?? null;
        $this->container['feed_scope'] = $data['feed_scope'] ?? null;
        $this->container['look_back'] = $data['look_back'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['supported_schemas'] = $data['supported_schemas'] ?? null;
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
     * Gets authorization_scopes.
     *
     * @return string[]|null
     */
    public function getAuthorizationScopes()
    {
        return $this->container['authorization_scopes'];
    }

    /**
     * Sets authorization_scopes.
     *
     * @param string[]|null $authorization_scopes The oauth authorization scopes which grant access to the feed files.<br /><br />Currently the only applicable authorization scope is <code>https://api.ebay.com/oauth/api_scope/buy.item.feed</code>.<br /><br /><span class=\"tablenote\"><span style=\"color:#004680\"><strong>Note:</strong></span> You can view your application's oauth scopes on the <a href='developer.ebay.com/my/keys'>Application Keys</a> page.</span>
     *
     * @return self
     */
    public function setAuthorizationScopes($authorization_scopes)
    {
        $this->container['authorization_scopes'] = $authorization_scopes;

        return $this;
    }

    /**
     * Gets constraint.
     *
     * @return \TNT\Ebay\Buy\Feed\V1\Model\Constraint|null
     */
    public function getConstraint()
    {
        return $this->container['constraint'];
    }

    /**
     * Sets constraint.
     *
     * @param \TNT\Ebay\Buy\Feed\V1\Model\Constraint|null $constraint constraint
     *
     * @return self
     */
    public function setConstraint($constraint)
    {
        $this->container['constraint'] = $constraint;

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
     * Gets look_back.
     *
     * @return \TNT\Ebay\Buy\Feed\V1\Model\TimeDuration|null
     */
    public function getLookBack()
    {
        return $this->container['look_back'];
    }

    /**
     * Sets look_back.
     *
     * @param \TNT\Ebay\Buy\Feed\V1\Model\TimeDuration|null $look_back look_back
     *
     * @return self
     */
    public function setLookBack($look_back)
    {
        $this->container['look_back'] = $look_back;

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
     * @param string|null $status The status for this feed. One of <code>ACTIVE</code>, <code>PAUSED</code>, or <code>DEPRECATED</code>. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/buy/feed/types/api:FeedStatusEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets supported_schemas.
     *
     * @return \TNT\Ebay\Buy\Feed\V1\Model\SupportedSchema[]|null
     */
    public function getSupportedSchemas()
    {
        return $this->container['supported_schemas'];
    }

    /**
     * Sets supported_schemas.
     *
     * @param \TNT\Ebay\Buy\Feed\V1\Model\SupportedSchema[]|null $supported_schemas an array of the supported <b>Feed</b> API schemas for this feed type
     *
     * @return self
     */
    public function setSupportedSchemas($supported_schemas)
    {
        $this->container['supported_schemas'] = $supported_schemas;

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
