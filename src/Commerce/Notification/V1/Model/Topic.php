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
 * Topic.
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
 * Topic Class Doc Comment.
 *
 * @category Class
 *
 * @description A type that describes the details of the topic.
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
class Topic implements ModelInterface, \ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'Topic';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'topic_id' => 'string',
        'description' => 'string',
        'authorization_scopes' => 'string[]',
        'status' => 'string',
        'context' => 'string',
        'scope' => 'string',
        'supported_payloads' => '\TNT\Ebay\Commerce\Notification\V1\Model\PayloadDetail[]',
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
        'topic_id' => null,
        'description' => null,
        'authorization_scopes' => null,
        'status' => null,
        'context' => null,
        'scope' => null,
        'supported_payloads' => null,
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
        'topic_id' => 'topicId',
        'description' => 'description',
        'authorization_scopes' => 'authorizationScopes',
        'status' => 'status',
        'context' => 'context',
        'scope' => 'scope',
        'supported_payloads' => 'supportedPayloads',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'topic_id' => 'setTopicId',
        'description' => 'setDescription',
        'authorization_scopes' => 'setAuthorizationScopes',
        'status' => 'setStatus',
        'context' => 'setContext',
        'scope' => 'setScope',
        'supported_payloads' => 'setSupportedPayloads',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'topic_id' => 'getTopicId',
        'description' => 'getDescription',
        'authorization_scopes' => 'getAuthorizationScopes',
        'status' => 'getStatus',
        'context' => 'getContext',
        'scope' => 'getScope',
        'supported_payloads' => 'getSupportedPayloads',
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
        $this->container['topic_id'] = $data['topic_id'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['authorization_scopes'] = $data['authorization_scopes'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['context'] = $data['context'] ?? null;
        $this->container['scope'] = $data['scope'] ?? null;
        $this->container['supported_payloads'] = $data['supported_payloads'] ?? null;
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
     * Gets topic_id.
     *
     * @return string|null
     */
    public function getTopicId()
    {
        return $this->container['topic_id'];
    }

    /**
     * Sets topic_id.
     *
     * @param string|null $topic_id the unique identifier for the topic
     *
     * @return self
     */
    public function setTopicId($topic_id)
    {
        $this->container['topic_id'] = $topic_id;

        return $this;
    }

    /**
     * Gets description.
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description.
     *
     * @param string|null $description the description of the topic
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
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
     * @param string[]|null $authorization_scopes the authorization scopes required to subscribe to this topic
     *
     * @return self
     */
    public function setAuthorizationScopes($authorization_scopes)
    {
        $this->container['authorization_scopes'] = $authorization_scopes;

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
     * @param string|null $status The status of this topic. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/commerce/notification/types/api:StatusEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets context.
     *
     * @return string|null
     */
    public function getContext()
    {
        return $this->container['context'];
    }

    /**
     * Sets context.
     *
     * @param string|null $context The business context associated with this topic. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/commerce/notification/types/api:ContextEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setContext($context)
    {
        $this->container['context'] = $context;

        return $this;
    }

    /**
     * Gets scope.
     *
     * @return string|null
     */
    public function getScope()
    {
        return $this->container['scope'];
    }

    /**
     * Sets scope.
     *
     * @param string|null $scope The scope of this topic. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/commerce/notification/types/api:ScopeEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setScope($scope)
    {
        $this->container['scope'] = $scope;

        return $this;
    }

    /**
     * Gets supported_payloads.
     *
     * @return \TNT\Ebay\Commerce\Notification\V1\Model\PayloadDetail[]|null
     */
    public function getSupportedPayloads()
    {
        return $this->container['supported_payloads'];
    }

    /**
     * Sets supported_payloads.
     *
     * @param \TNT\Ebay\Commerce\Notification\V1\Model\PayloadDetail[]|null $supported_payloads the supported payloads for this topic
     *
     * @return self
     */
    public function setSupportedPayloads($supported_payloads)
    {
        $this->container['supported_payloads'] = $supported_payloads;

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
