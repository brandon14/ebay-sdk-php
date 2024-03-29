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
 * NegotiatedPricePolicy.
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
 * Metadata API.
 *
 * The Metadata API has operations that retrieve configuration details pertaining to the different eBay marketplaces. In addition to marketplace information, the API also has operations that get information that helps sellers list items on eBay.
 *
 * The version of the OpenAPI document: v1.5.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace TNT\Ebay\Sell\Metadata\V1\Model;

use TNT\Ebay\Sell\Metadata\V1\ObjectSerializer;

/**
 * NegotiatedPricePolicy Class Doc Comment.
 *
 * @category Class
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
class NegotiatedPricePolicy implements ModelInterface, \ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'NegotiatedPricePolicy';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'best_offer_auto_accept_enabled' => 'bool',
        'best_offer_auto_decline_enabled' => 'bool',
        'best_offer_counter_enabled' => 'bool',
        'category_id' => 'string',
        'category_tree_id' => 'string',
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
        'best_offer_auto_accept_enabled' => null,
        'best_offer_auto_decline_enabled' => null,
        'best_offer_counter_enabled' => null,
        'category_id' => null,
        'category_tree_id' => null,
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
        'best_offer_auto_accept_enabled' => 'bestOfferAutoAcceptEnabled',
        'best_offer_auto_decline_enabled' => 'bestOfferAutoDeclineEnabled',
        'best_offer_counter_enabled' => 'bestOfferCounterEnabled',
        'category_id' => 'categoryId',
        'category_tree_id' => 'categoryTreeId',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'best_offer_auto_accept_enabled' => 'setBestOfferAutoAcceptEnabled',
        'best_offer_auto_decline_enabled' => 'setBestOfferAutoDeclineEnabled',
        'best_offer_counter_enabled' => 'setBestOfferCounterEnabled',
        'category_id' => 'setCategoryId',
        'category_tree_id' => 'setCategoryTreeId',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'best_offer_auto_accept_enabled' => 'getBestOfferAutoAcceptEnabled',
        'best_offer_auto_decline_enabled' => 'getBestOfferAutoDeclineEnabled',
        'best_offer_counter_enabled' => 'getBestOfferCounterEnabled',
        'category_id' => 'getCategoryId',
        'category_tree_id' => 'getCategoryTreeId',
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
        $this->container['best_offer_auto_accept_enabled'] = $data['best_offer_auto_accept_enabled'] ?? null;
        $this->container['best_offer_auto_decline_enabled'] = $data['best_offer_auto_decline_enabled'] ?? null;
        $this->container['best_offer_counter_enabled'] = $data['best_offer_counter_enabled'] ?? null;
        $this->container['category_id'] = $data['category_id'] ?? null;
        $this->container['category_tree_id'] = $data['category_tree_id'] ?? null;
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
     * Gets best_offer_auto_accept_enabled.
     *
     * @return bool|null
     */
    public function getBestOfferAutoAcceptEnabled()
    {
        return $this->container['best_offer_auto_accept_enabled'];
    }

    /**
     * Sets best_offer_auto_accept_enabled.
     *
     * @param bool|null $best_offer_auto_accept_enabled This flag denotes whether or not the category supports the setting of a price at which best offers are automatically accepted. If set to <code>true</code>, the category does support the setting of an automatic price for best-offers.
     *
     * @return self
     */
    public function setBestOfferAutoAcceptEnabled($best_offer_auto_accept_enabled)
    {
        $this->container['best_offer_auto_accept_enabled'] = $best_offer_auto_accept_enabled;

        return $this;
    }

    /**
     * Gets best_offer_auto_decline_enabled.
     *
     * @return bool|null
     */
    public function getBestOfferAutoDeclineEnabled()
    {
        return $this->container['best_offer_auto_decline_enabled'];
    }

    /**
     * Sets best_offer_auto_decline_enabled.
     *
     * @param bool|null $best_offer_auto_decline_enabled This flag denotes whether or not the category supports the setting of an auto-decline price for best offers. If set to <code>true</code>, the category does support the setting of an automatic-decline price for best-offers.
     *
     * @return self
     */
    public function setBestOfferAutoDeclineEnabled($best_offer_auto_decline_enabled)
    {
        $this->container['best_offer_auto_decline_enabled'] = $best_offer_auto_decline_enabled;

        return $this;
    }

    /**
     * Gets best_offer_counter_enabled.
     *
     * @return bool|null
     */
    public function getBestOfferCounterEnabled()
    {
        return $this->container['best_offer_counter_enabled'];
    }

    /**
     * Sets best_offer_counter_enabled.
     *
     * @param bool|null $best_offer_counter_enabled This flag denotes whether or not the category supports the setting for an automatic counter-offer on best offers. If set to <code>true</code>, the category does support the setting of an automatic counter-offer price for best-offers.
     *
     * @return self
     */
    public function setBestOfferCounterEnabled($best_offer_counter_enabled)
    {
        $this->container['best_offer_counter_enabled'] = $best_offer_counter_enabled;

        return $this;
    }

    /**
     * Gets category_id.
     *
     * @return string|null
     */
    public function getCategoryId()
    {
        return $this->container['category_id'];
    }

    /**
     * Sets category_id.
     *
     * @param string|null $category_id the category ID to which the negotiated-price policies apply
     *
     * @return self
     */
    public function setCategoryId($category_id)
    {
        $this->container['category_id'] = $category_id;

        return $this;
    }

    /**
     * Gets category_tree_id.
     *
     * @return string|null
     */
    public function getCategoryTreeId()
    {
        return $this->container['category_tree_id'];
    }

    /**
     * Sets category_tree_id.
     *
     * @param string|null $category_tree_id A value that indicates the root node of the category tree used for the response set. Each marketplace is based on a category tree whose root node is indicated by this unique category ID value. All category policy information returned by this call pertains to the categories included below this root node of the tree.    <br><br>A <i>category tree</i> is a hierarchical framework of eBay categories that begins at the root node of the tree and extends to include all the child nodes in the tree. Each child node in the tree is an eBay category that is represented by a unique <b>categoryId</b> value. Within a category tree, the root node has no parent node and <i>leaf nodes</i> are nodes that have no child nodes.
     *
     * @return self
     */
    public function setCategoryTreeId($category_tree_id)
    {
        $this->container['category_tree_id'] = $category_tree_id;

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
