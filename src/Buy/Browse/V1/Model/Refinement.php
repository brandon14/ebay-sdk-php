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
 * Refinement.
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
 * Refinement Class Doc Comment.
 *
 * @category Class
 *
 * @description This type defines the fields for the various refinements of an item. You can use the information in this container to create histograms, which help shoppers choose exactly what they want.
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
class Refinement implements ModelInterface, \ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'Refinement';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'aspect_distributions' => '\TNT\Ebay\Buy\Browse\V1\Model\AspectDistribution[]',
        'buying_option_distributions' => '\TNT\Ebay\Buy\Browse\V1\Model\BuyingOptionDistribution[]',
        'category_distributions' => '\TNT\Ebay\Buy\Browse\V1\Model\CategoryDistribution[]',
        'condition_distributions' => '\TNT\Ebay\Buy\Browse\V1\Model\ConditionDistribution[]',
        'dominant_category_id' => 'string',
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
        'aspect_distributions' => null,
        'buying_option_distributions' => null,
        'category_distributions' => null,
        'condition_distributions' => null,
        'dominant_category_id' => null,
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
        'aspect_distributions' => 'aspectDistributions',
        'buying_option_distributions' => 'buyingOptionDistributions',
        'category_distributions' => 'categoryDistributions',
        'condition_distributions' => 'conditionDistributions',
        'dominant_category_id' => 'dominantCategoryId',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'aspect_distributions' => 'setAspectDistributions',
        'buying_option_distributions' => 'setBuyingOptionDistributions',
        'category_distributions' => 'setCategoryDistributions',
        'condition_distributions' => 'setConditionDistributions',
        'dominant_category_id' => 'setDominantCategoryId',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'aspect_distributions' => 'getAspectDistributions',
        'buying_option_distributions' => 'getBuyingOptionDistributions',
        'category_distributions' => 'getCategoryDistributions',
        'condition_distributions' => 'getConditionDistributions',
        'dominant_category_id' => 'getDominantCategoryId',
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
        $this->container['aspect_distributions'] = $data['aspect_distributions'] ?? null;
        $this->container['buying_option_distributions'] = $data['buying_option_distributions'] ?? null;
        $this->container['category_distributions'] = $data['category_distributions'] ?? null;
        $this->container['condition_distributions'] = $data['condition_distributions'] ?? null;
        $this->container['dominant_category_id'] = $data['dominant_category_id'] ?? null;
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
     * Gets aspect_distributions.
     *
     * @return \TNT\Ebay\Buy\Browse\V1\Model\AspectDistribution[]|null
     */
    public function getAspectDistributions()
    {
        return $this->container['aspect_distributions'];
    }

    /**
     * Sets aspect_distributions.
     *
     * @param \TNT\Ebay\Buy\Browse\V1\Model\AspectDistribution[]|null $aspect_distributions an array of containers for the all the aspect refinements
     *
     * @return self
     */
    public function setAspectDistributions($aspect_distributions)
    {
        $this->container['aspect_distributions'] = $aspect_distributions;

        return $this;
    }

    /**
     * Gets buying_option_distributions.
     *
     * @return \TNT\Ebay\Buy\Browse\V1\Model\BuyingOptionDistribution[]|null
     */
    public function getBuyingOptionDistributions()
    {
        return $this->container['buying_option_distributions'];
    }

    /**
     * Sets buying_option_distributions.
     *
     * @param \TNT\Ebay\Buy\Browse\V1\Model\BuyingOptionDistribution[]|null $buying_option_distributions an array of containers for the all the buying option refinements
     *
     * @return self
     */
    public function setBuyingOptionDistributions($buying_option_distributions)
    {
        $this->container['buying_option_distributions'] = $buying_option_distributions;

        return $this;
    }

    /**
     * Gets category_distributions.
     *
     * @return \TNT\Ebay\Buy\Browse\V1\Model\CategoryDistribution[]|null
     */
    public function getCategoryDistributions()
    {
        return $this->container['category_distributions'];
    }

    /**
     * Sets category_distributions.
     *
     * @param \TNT\Ebay\Buy\Browse\V1\Model\CategoryDistribution[]|null $category_distributions an array of containers for the all the category refinements
     *
     * @return self
     */
    public function setCategoryDistributions($category_distributions)
    {
        $this->container['category_distributions'] = $category_distributions;

        return $this;
    }

    /**
     * Gets condition_distributions.
     *
     * @return \TNT\Ebay\Buy\Browse\V1\Model\ConditionDistribution[]|null
     */
    public function getConditionDistributions()
    {
        return $this->container['condition_distributions'];
    }

    /**
     * Sets condition_distributions.
     *
     * @param \TNT\Ebay\Buy\Browse\V1\Model\ConditionDistribution[]|null $condition_distributions an array of containers for the all the condition refinements
     *
     * @return self
     */
    public function setConditionDistributions($condition_distributions)
    {
        $this->container['condition_distributions'] = $condition_distributions;

        return $this;
    }

    /**
     * Gets dominant_category_id.
     *
     * @return string|null
     */
    public function getDominantCategoryId()
    {
        return $this->container['dominant_category_id'];
    }

    /**
     * Sets dominant_category_id.
     *
     * @param string|null $dominant_category_id the identifier of the category that most of the items are part of
     *
     * @return self
     */
    public function setDominantCategoryId($dominant_category_id)
    {
        $this->container['dominant_category_id'] = $dominant_category_id;

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
