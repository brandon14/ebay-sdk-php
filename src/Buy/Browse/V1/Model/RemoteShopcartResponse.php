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
 * RemoteShopcartResponse.
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
 * Browse API.
 *
 * <p>The Browse API has the following resources:</p>   <ul> <li><b> item_summary: </b> Lets shoppers search for specific items by keyword, GTIN, category, charity, product, or item aspects and refine the results by using filters, such as aspects, compatibility, and fields values.</li>  <li><b> search_by_image: </b><a href=\"https://developer.ebay.com/api-docs/static/versioning.html#experimental\" target=\"_blank\"><img src=\"/cms/img/docs/experimental-icon.svg\" class=\"legend-icon experimental-icon\" alt=\"Experimental Release\" title=\"Experimental Release\" />&nbsp;(Experimental)</a> Lets shoppers search for specific items by image. You can refine the results by using URI parameters and filters.</li>   <li><b> item: </b> <ul><li>Lets you retrieve the details of a specific item or all the items in an item group, which is an item with variations such as color and size and check if a product is compatible with the specified item, such as if a specific car is compatible with a specific part.</li> <li>Provides a bridge between the eBay legacy APIs, such as <b> Finding</b>, and the RESTful APIs, which use different formats for the item IDs.</li>  </ul> </li>  <li> <b> shopping_cart: </b> <a href=\"https://developer.ebay.com/api-docs/static/versioning.html#experimental\" target=\"_blank\"><img src=\"/cms/img/docs/experimental-icon.svg\" class=\"legend-icon experimental-icon\" alt=\"Experimental Release\" title=\"Experimental Release\" />&nbsp;(Experimental)</a> <a href=\"https://developer.ebay.com/api-docs/static/versioning.html#limited\" target=\"_blank\"> <img src=\"/cms/img/docs/partners-api.svg\" class=\"legend-icon partners-icon\" title=\"Limited Release\"  alt=\"Limited Release\" />(Limited Release)</a> Provides the ability for eBay members to see the contents of their eBay cart, and add, remove, and change the quantity of items in their eBay cart.&nbsp;&nbsp;<b> Note: </b> This resource is not available in the eBay API Explorer.</li></ul>       <p>The <b> item_summary</b>, <b> search_by_image</b>, and <b> item</b> resource calls require an <a href=\"/api-docs/static/oauth-client-credentials-grant.html\">Application access token</a>. The <b> shopping_cart</b> resource calls require a <a href=\"/api-docs/static/oauth-authorization-code-grant.html\">User access token</a>.</p>
 *
 * The version of the OpenAPI document: v1.13.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace TNT\Ebay\Buy\Browse\V1\Model;

use ArrayAccess;
use TNT\Ebay\Buy\Browse\V1\ObjectSerializer;

/**
 * RemoteShopcartResponse Class Doc Comment.
 *
 * @category Class
 * @description The type that defines the fields and containers for the member&#39;s eBay cart information.
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class RemoteShopcartResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'RemoteShopcartResponse';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'cart_items' => '\TNT\Ebay\Buy\Browse\V1\Model\CartItem[]',
        'cart_subtotal' => '\TNT\Ebay\Buy\Browse\V1\Model\Amount',
        'cart_web_url' => 'string',
        'unavailable_cart_items' => '\TNT\Ebay\Buy\Browse\V1\Model\CartItem[]',
        'warnings' => '\TNT\Ebay\Buy\Browse\V1\Model\Error[]',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'cart_items' => null,
        'cart_subtotal' => null,
        'cart_web_url' => null,
        'unavailable_cart_items' => null,
        'warnings' => null,
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
        'cart_items' => 'cartItems',
        'cart_subtotal' => 'cartSubtotal',
        'cart_web_url' => 'cartWebUrl',
        'unavailable_cart_items' => 'unavailableCartItems',
        'warnings' => 'warnings',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'cart_items' => 'setCartItems',
        'cart_subtotal' => 'setCartSubtotal',
        'cart_web_url' => 'setCartWebUrl',
        'unavailable_cart_items' => 'setUnavailableCartItems',
        'warnings' => 'setWarnings',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'cart_items' => 'getCartItems',
        'cart_subtotal' => 'getCartSubtotal',
        'cart_web_url' => 'getCartWebUrl',
        'unavailable_cart_items' => 'getUnavailableCartItems',
        'warnings' => 'getWarnings',
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
        $this->container['cart_items'] = $data['cart_items'] ?? null;
        $this->container['cart_subtotal'] = $data['cart_subtotal'] ?? null;
        $this->container['cart_web_url'] = $data['cart_web_url'] ?? null;
        $this->container['unavailable_cart_items'] = $data['unavailable_cart_items'] ?? null;
        $this->container['warnings'] = $data['warnings'] ?? null;
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
     * Gets cart_items.
     *
     * @return \TNT\Ebay\Buy\Browse\V1\Model\CartItem[]|null
     */
    public function getCartItems()
    {
        return $this->container['cart_items'];
    }

    /**
     * Sets cart_items.
     *
     * @param \TNT\Ebay\Buy\Browse\V1\Model\CartItem[]|null $cart_items an array of the items in the member's eBay cart
     *
     * @return self
     */
    public function setCartItems($cart_items)
    {
        $this->container['cart_items'] = $cart_items;

        return $this;
    }

    /**
     * Gets cart_subtotal.
     *
     * @return \TNT\Ebay\Buy\Browse\V1\Model\Amount|null
     */
    public function getCartSubtotal()
    {
        return $this->container['cart_subtotal'];
    }

    /**
     * Sets cart_subtotal.
     *
     * @param \TNT\Ebay\Buy\Browse\V1\Model\Amount|null $cart_subtotal cart_subtotal
     *
     * @return self
     */
    public function setCartSubtotal($cart_subtotal)
    {
        $this->container['cart_subtotal'] = $cart_subtotal;

        return $this;
    }

    /**
     * Gets cart_web_url.
     *
     * @return string|null
     */
    public function getCartWebUrl()
    {
        return $this->container['cart_web_url'];
    }

    /**
     * Sets cart_web_url.
     *
     * @param string|null $cart_web_url the URL of the member's eBay cart
     *
     * @return self
     */
    public function setCartWebUrl($cart_web_url)
    {
        $this->container['cart_web_url'] = $cart_web_url;

        return $this;
    }

    /**
     * Gets unavailable_cart_items.
     *
     * @return \TNT\Ebay\Buy\Browse\V1\Model\CartItem[]|null
     */
    public function getUnavailableCartItems()
    {
        return $this->container['unavailable_cart_items'];
    }

    /**
     * Sets unavailable_cart_items.
     *
     * @param \TNT\Ebay\Buy\Browse\V1\Model\CartItem[]|null $unavailable_cart_items An array of items in the cart that are unavailable. This can be for a variety of reasons such as, when the listing has ended or the item is out of stock. Because a cart never expires, these items will remain in the cart until they are removed.
     *
     * @return self
     */
    public function setUnavailableCartItems($unavailable_cart_items)
    {
        $this->container['unavailable_cart_items'] = $unavailable_cart_items;

        return $this;
    }

    /**
     * Gets warnings.
     *
     * @return \TNT\Ebay\Buy\Browse\V1\Model\Error[]|null
     */
    public function getWarnings()
    {
        return $this->container['warnings'];
    }

    /**
     * Sets warnings.
     *
     * @param \TNT\Ebay\Buy\Browse\V1\Model\Error[]|null $warnings An array of warning messages. These type of errors do not prevent the call from executing but should be checked.
     *
     * @return self
     */
    public function setWarnings($warnings)
    {
        $this->container['warnings'] = $warnings;

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
