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
 * ItemGroupSummary.
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
 * <p>The Browse API has the following resources:</p>   <ul> <li><b> item_summary: </b> Lets shoppers search for specific items by keyword, GTIN, category, charity, product, or item aspects and refine the results by using filters, such as aspects, compatibility, and fields values.</li>  <li><b> search_by_image: </b><a href=\"https://developer.ebay.com/api-docs/static/versioning.html#experimental \" target=\"_blank\"><img src=\"/cms/img/docs/experimental-icon.svg\" class=\"legend-icon experimental-icon\" alt=\"Experimental Release\" title=\"Experimental Release\" />&nbsp;(Experimental)</a> Lets shoppers search for specific items by image. You can refine the results by using URI parameters and filters.</li>   <li><b> item: </b> <ul><li>Lets you retrieve the details of a specific item or all the items in an item group, which is an item with variations such as color and size and check if a product is compatible with the specified item, such as if a specific car is compatible with a specific part.</li> <li>Provides a bridge between the eBay legacy APIs, such as <b> Finding</b>, and the RESTful APIs, which use different formats for the item IDs.</li>  </ul> </li>  <li> <b> shopping_cart: </b> <a href=\"https://developer.ebay.com/api-docs/static/versioning.html#experimental \" target=\"_blank\"><img src=\"/cms/img/docs/experimental-icon.svg\" class=\"legend-icon experimental-icon\" alt=\"Experimental Release\" title=\"Experimental Release\" />&nbsp;(Experimental)</a> <a href=\"https://developer.ebay.com/api-docs/static/versioning.html#limited \" target=\"_blank\"> <img src=\"/cms/img/docs/partners-api.svg\" class=\"legend-icon partners-icon\" title=\"Limited Release\"  alt=\"Limited Release\" />(Limited Release)</a> Provides the ability for eBay members to see the contents of their eBay cart, and add, remove, and change the quantity of items in their eBay cart.&nbsp;&nbsp;<b> Note: </b> This resource is not available in the eBay API Explorer.</li></ul>       <p>The <b> item_summary</b>, <b> search_by_image</b>, and <b> item</b> resource calls require an <a href=\"/api-docs/static/oauth-client-credentials-grant.html\">Application access token</a>. The <b> shopping_cart</b> resource calls require a <a href=\"/api-docs/static/oauth-authorization-code-grant.html\">User access token</a>.</p>
 *
 * The version of the OpenAPI document: v1.18.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace TNT\Ebay\Buy\Browse\V1\Model;

use TNT\Ebay\Buy\Browse\V1\ObjectSerializer;

/**
 * ItemGroupSummary Class Doc Comment.
 *
 * @category Class
 *
 * @description The type that defines the fields for the details of each item in an item group. An item group is  an item that has various aspect differences, such as color, size, storage capacity, etc. When an item group is created, one of the item variations, such as the red shirt size L, is chosen as the \&quot;parent\&quot;. All the other items in the group are the children, such as the blue shirt size L, red shirt size M, etc. &lt;br /&gt;&lt;br /&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt; Note: &lt;/b&gt; This container is returned only if the &lt;b&gt; item_id&lt;/b&gt; in the request is an item group (parent ID of an item with variations).&lt;/span&gt;
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
class ItemGroupSummary implements ModelInterface, \ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'ItemGroupSummary';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'item_group_additional_images' => '\TNT\Ebay\Buy\Browse\V1\Model\Image[]',
        'item_group_href' => 'string',
        'item_group_id' => 'string',
        'item_group_image' => '\TNT\Ebay\Buy\Browse\V1\Model\Image',
        'item_group_title' => 'string',
        'item_group_type' => 'string',
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
        'item_group_additional_images' => null,
        'item_group_href' => null,
        'item_group_id' => null,
        'item_group_image' => null,
        'item_group_title' => null,
        'item_group_type' => null,
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
        'item_group_additional_images' => 'itemGroupAdditionalImages',
        'item_group_href' => 'itemGroupHref',
        'item_group_id' => 'itemGroupId',
        'item_group_image' => 'itemGroupImage',
        'item_group_title' => 'itemGroupTitle',
        'item_group_type' => 'itemGroupType',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'item_group_additional_images' => 'setItemGroupAdditionalImages',
        'item_group_href' => 'setItemGroupHref',
        'item_group_id' => 'setItemGroupId',
        'item_group_image' => 'setItemGroupImage',
        'item_group_title' => 'setItemGroupTitle',
        'item_group_type' => 'setItemGroupType',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'item_group_additional_images' => 'getItemGroupAdditionalImages',
        'item_group_href' => 'getItemGroupHref',
        'item_group_id' => 'getItemGroupId',
        'item_group_image' => 'getItemGroupImage',
        'item_group_title' => 'getItemGroupTitle',
        'item_group_type' => 'getItemGroupType',
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
        $this->container['item_group_additional_images'] = $data['item_group_additional_images'] ?? null;
        $this->container['item_group_href'] = $data['item_group_href'] ?? null;
        $this->container['item_group_id'] = $data['item_group_id'] ?? null;
        $this->container['item_group_image'] = $data['item_group_image'] ?? null;
        $this->container['item_group_title'] = $data['item_group_title'] ?? null;
        $this->container['item_group_type'] = $data['item_group_type'] ?? null;
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
     * Gets item_group_additional_images.
     *
     * @return \TNT\Ebay\Buy\Browse\V1\Model\Image[]|null
     */
    public function getItemGroupAdditionalImages()
    {
        return $this->container['item_group_additional_images'];
    }

    /**
     * Sets item_group_additional_images.
     *
     * @param \TNT\Ebay\Buy\Browse\V1\Model\Image[]|null $item_group_additional_images An array of containers with the URLs for images that are in addition to the primary image of the item group.  The primary image is returned in the <b> itemGroupImage</b> field.
     *
     * @return self
     */
    public function setItemGroupAdditionalImages($item_group_additional_images)
    {
        $this->container['item_group_additional_images'] = $item_group_additional_images;

        return $this;
    }

    /**
     * Gets item_group_href.
     *
     * @return string|null
     */
    public function getItemGroupHref()
    {
        return $this->container['item_group_href'];
    }

    /**
     * Sets item_group_href.
     *
     * @param string|null $item_group_href The HATEOAS reference of the parent page of the item group. An item group is an item that has various aspect differences, such as color, size, storage capacity, etc.
     *
     * @return self
     */
    public function setItemGroupHref($item_group_href)
    {
        $this->container['item_group_href'] = $item_group_href;

        return $this;
    }

    /**
     * Gets item_group_id.
     *
     * @return string|null
     */
    public function getItemGroupId()
    {
        return $this->container['item_group_id'];
    }

    /**
     * Sets item_group_id.
     *
     * @param string|null $item_group_id The unique identifier for the item group. An item group is an item that has various aspect differences, such as color, size, storage capacity, etc.
     *
     * @return self
     */
    public function setItemGroupId($item_group_id)
    {
        $this->container['item_group_id'] = $item_group_id;

        return $this;
    }

    /**
     * Gets item_group_image.
     *
     * @return \TNT\Ebay\Buy\Browse\V1\Model\Image|null
     */
    public function getItemGroupImage()
    {
        return $this->container['item_group_image'];
    }

    /**
     * Sets item_group_image.
     *
     * @param \TNT\Ebay\Buy\Browse\V1\Model\Image|null $item_group_image item_group_image
     *
     * @return self
     */
    public function setItemGroupImage($item_group_image)
    {
        $this->container['item_group_image'] = $item_group_image;

        return $this;
    }

    /**
     * Gets item_group_title.
     *
     * @return string|null
     */
    public function getItemGroupTitle()
    {
        return $this->container['item_group_title'];
    }

    /**
     * Sets item_group_title.
     *
     * @param string|null $item_group_title The title of the item that appears on the item group page. An item group is an item that has various aspect differences, such as color, size, storage capacity, etc.
     *
     * @return self
     */
    public function setItemGroupTitle($item_group_title)
    {
        $this->container['item_group_title'] = $item_group_title;

        return $this;
    }

    /**
     * Gets item_group_type.
     *
     * @return string|null
     */
    public function getItemGroupType()
    {
        return $this->container['item_group_type'];
    }

    /**
     * Sets item_group_type.
     *
     * @param string|null $item_group_type An enumeration value that indicates the type of the item group. An item group is an item that has various aspect differences, such as color, size, storage capacity, etc. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/buy/browse/types/gct:ItemGroupTypeEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setItemGroupType($item_group_type)
    {
        $this->container['item_group_type'] = $item_group_type;

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
