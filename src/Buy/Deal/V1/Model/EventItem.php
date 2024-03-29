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
 * EventItem.
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
 * Deal API.
 *
 * <span class=\"tablenote\"><b>Note:</b> This is a <a href=\"https://developer.ebay.com/api-docs/static/versioning.html#limited\" target=\"_blank\"> <img src=\"/cms/img/docs/partners-api.svg\" class=\"legend-icon partners-icon\" title=\"Limited Release\"  alt=\"Limited Release\" />(Limited Release)</a> API available only to select developers approved by business units.</span><br /><br />This API allows third-party developers to search for and retrieve details about eBay deals and events, as well as the items associated with those deals and events.
 *
 * The version of the OpenAPI document: v1.3.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace TNT\Ebay\Buy\Deal\V1\Model;

use TNT\Ebay\Buy\Deal\V1\ObjectSerializer;

/**
 * EventItem Class Doc Comment.
 *
 * @category Class
 *
 * @description The detailed data returned for the event item.
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
class EventItem implements ModelInterface, \ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'EventItem';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'additional_images' => '\TNT\Ebay\Buy\Deal\V1\Model\Image[]',
        'category_ancestor_ids' => 'string[]',
        'category_id' => 'string',
        'energy_efficiency_class' => 'string',
        'event_id' => 'string',
        'image' => '\TNT\Ebay\Buy\Deal\V1\Model\Image',
        'item_affiliate_web_url' => 'string',
        'item_group_id' => 'string',
        'item_group_type' => 'string',
        'item_id' => 'string',
        'item_web_url' => 'string',
        'legacy_item_id' => 'string',
        'marketing_price' => '\TNT\Ebay\Buy\Deal\V1\Model\MarketingPrice',
        'price' => '\TNT\Ebay\Buy\Deal\V1\Model\Amount',
        'qualified_programs' => 'string[]',
        'shipping_options' => '\TNT\Ebay\Buy\Deal\V1\Model\ShippingOption[]',
        'title' => 'string',
        'unit_price' => '\TNT\Ebay\Buy\Deal\V1\Model\Amount',
        'unit_pricing_measure' => 'string',
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
        'additional_images' => null,
        'category_ancestor_ids' => null,
        'category_id' => null,
        'energy_efficiency_class' => null,
        'event_id' => null,
        'image' => null,
        'item_affiliate_web_url' => null,
        'item_group_id' => null,
        'item_group_type' => null,
        'item_id' => null,
        'item_web_url' => null,
        'legacy_item_id' => null,
        'marketing_price' => null,
        'price' => null,
        'qualified_programs' => null,
        'shipping_options' => null,
        'title' => null,
        'unit_price' => null,
        'unit_pricing_measure' => null,
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
        'additional_images' => 'additionalImages',
        'category_ancestor_ids' => 'categoryAncestorIds',
        'category_id' => 'categoryId',
        'energy_efficiency_class' => 'energyEfficiencyClass',
        'event_id' => 'eventId',
        'image' => 'image',
        'item_affiliate_web_url' => 'itemAffiliateWebUrl',
        'item_group_id' => 'itemGroupId',
        'item_group_type' => 'itemGroupType',
        'item_id' => 'itemId',
        'item_web_url' => 'itemWebUrl',
        'legacy_item_id' => 'legacyItemId',
        'marketing_price' => 'marketingPrice',
        'price' => 'price',
        'qualified_programs' => 'qualifiedPrograms',
        'shipping_options' => 'shippingOptions',
        'title' => 'title',
        'unit_price' => 'unitPrice',
        'unit_pricing_measure' => 'unitPricingMeasure',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'additional_images' => 'setAdditionalImages',
        'category_ancestor_ids' => 'setCategoryAncestorIds',
        'category_id' => 'setCategoryId',
        'energy_efficiency_class' => 'setEnergyEfficiencyClass',
        'event_id' => 'setEventId',
        'image' => 'setImage',
        'item_affiliate_web_url' => 'setItemAffiliateWebUrl',
        'item_group_id' => 'setItemGroupId',
        'item_group_type' => 'setItemGroupType',
        'item_id' => 'setItemId',
        'item_web_url' => 'setItemWebUrl',
        'legacy_item_id' => 'setLegacyItemId',
        'marketing_price' => 'setMarketingPrice',
        'price' => 'setPrice',
        'qualified_programs' => 'setQualifiedPrograms',
        'shipping_options' => 'setShippingOptions',
        'title' => 'setTitle',
        'unit_price' => 'setUnitPrice',
        'unit_pricing_measure' => 'setUnitPricingMeasure',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'additional_images' => 'getAdditionalImages',
        'category_ancestor_ids' => 'getCategoryAncestorIds',
        'category_id' => 'getCategoryId',
        'energy_efficiency_class' => 'getEnergyEfficiencyClass',
        'event_id' => 'getEventId',
        'image' => 'getImage',
        'item_affiliate_web_url' => 'getItemAffiliateWebUrl',
        'item_group_id' => 'getItemGroupId',
        'item_group_type' => 'getItemGroupType',
        'item_id' => 'getItemId',
        'item_web_url' => 'getItemWebUrl',
        'legacy_item_id' => 'getLegacyItemId',
        'marketing_price' => 'getMarketingPrice',
        'price' => 'getPrice',
        'qualified_programs' => 'getQualifiedPrograms',
        'shipping_options' => 'getShippingOptions',
        'title' => 'getTitle',
        'unit_price' => 'getUnitPrice',
        'unit_pricing_measure' => 'getUnitPricingMeasure',
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
        $this->container['additional_images'] = $data['additional_images'] ?? null;
        $this->container['category_ancestor_ids'] = $data['category_ancestor_ids'] ?? null;
        $this->container['category_id'] = $data['category_id'] ?? null;
        $this->container['energy_efficiency_class'] = $data['energy_efficiency_class'] ?? null;
        $this->container['event_id'] = $data['event_id'] ?? null;
        $this->container['image'] = $data['image'] ?? null;
        $this->container['item_affiliate_web_url'] = $data['item_affiliate_web_url'] ?? null;
        $this->container['item_group_id'] = $data['item_group_id'] ?? null;
        $this->container['item_group_type'] = $data['item_group_type'] ?? null;
        $this->container['item_id'] = $data['item_id'] ?? null;
        $this->container['item_web_url'] = $data['item_web_url'] ?? null;
        $this->container['legacy_item_id'] = $data['legacy_item_id'] ?? null;
        $this->container['marketing_price'] = $data['marketing_price'] ?? null;
        $this->container['price'] = $data['price'] ?? null;
        $this->container['qualified_programs'] = $data['qualified_programs'] ?? null;
        $this->container['shipping_options'] = $data['shipping_options'] ?? null;
        $this->container['title'] = $data['title'] ?? null;
        $this->container['unit_price'] = $data['unit_price'] ?? null;
        $this->container['unit_pricing_measure'] = $data['unit_pricing_measure'] ?? null;
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
     * Gets additional_images.
     *
     * @return \TNT\Ebay\Buy\Deal\V1\Model\Image[]|null
     */
    public function getAdditionalImages()
    {
        return $this->container['additional_images'];
    }

    /**
     * Sets additional_images.
     *
     * @param \TNT\Ebay\Buy\Deal\V1\Model\Image[]|null $additional_images the additional images for the event item
     *
     * @return self
     */
    public function setAdditionalImages($additional_images)
    {
        $this->container['additional_images'] = $additional_images;

        return $this;
    }

    /**
     * Gets category_ancestor_ids.
     *
     * @return string[]|null
     */
    public function getCategoryAncestorIds()
    {
        return $this->container['category_ancestor_ids'];
    }

    /**
     * Sets category_ancestor_ids.
     *
     * @param string[]|null $category_ancestor_ids the IDs of the ancestors for the primary category
     *
     * @return self
     */
    public function setCategoryAncestorIds($category_ancestor_ids)
    {
        $this->container['category_ancestor_ids'] = $category_ancestor_ids;

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
     * @param string|null $category_id The ID of the leaf category for the event item. A leaf category is the lowest level in a category and has no children.
     *
     * @return self
     */
    public function setCategoryId($category_id)
    {
        $this->container['category_id'] = $category_id;

        return $this;
    }

    /**
     * Gets energy_efficiency_class.
     *
     * @return string|null
     */
    public function getEnergyEfficiencyClass()
    {
        return $this->container['energy_efficiency_class'];
    }

    /**
     * Sets energy_efficiency_class.
     *
     * @param string|null $energy_efficiency_class a string value specifying the Energy Efficiency class
     *
     * @return self
     */
    public function setEnergyEfficiencyClass($energy_efficiency_class)
    {
        $this->container['energy_efficiency_class'] = $energy_efficiency_class;

        return $this;
    }

    /**
     * Gets event_id.
     *
     * @return string|null
     */
    public function getEventId()
    {
        return $this->container['event_id'];
    }

    /**
     * Sets event_id.
     *
     * @param string|null $event_id the unique event identifier associated with the item
     *
     * @return self
     */
    public function setEventId($event_id)
    {
        $this->container['event_id'] = $event_id;

        return $this;
    }

    /**
     * Gets image.
     *
     * @return \TNT\Ebay\Buy\Deal\V1\Model\Image|null
     */
    public function getImage()
    {
        return $this->container['image'];
    }

    /**
     * Sets image.
     *
     * @param \TNT\Ebay\Buy\Deal\V1\Model\Image|null $image image
     *
     * @return self
     */
    public function setImage($image)
    {
        $this->container['image'] = $image;

        return $this;
    }

    /**
     * Gets item_affiliate_web_url.
     *
     * @return string|null
     */
    public function getItemAffiliateWebUrl()
    {
        return $this->container['item_affiliate_web_url'];
    }

    /**
     * Sets item_affiliate_web_url.
     *
     * @param string|null $item_affiliate_web_url the item web URL with affiliate attribution
     *
     * @return self
     */
    public function setItemAffiliateWebUrl($item_affiliate_web_url)
    {
        $this->container['item_affiliate_web_url'] = $item_affiliate_web_url;

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
     * @param string|null $item_group_id The unique identifier for the event item group. This is the parent item ID for the seller-defined variations. Note: This field is returned for multiple-SKU items.
     *
     * @return self
     */
    public function setItemGroupId($item_group_id)
    {
        $this->container['item_group_id'] = $item_group_id;

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
     * @param string|null $item_group_type An enumeration value that indicates the type of item group. An item group contains items that have various aspect differences, such as color, size, or storage capacity. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/buy/deal/types/api:ItemGroupTypeEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setItemGroupType($item_group_type)
    {
        $this->container['item_group_type'] = $item_group_type;

        return $this;
    }

    /**
     * Gets item_id.
     *
     * @return string|null
     */
    public function getItemId()
    {
        return $this->container['item_id'];
    }

    /**
     * Sets item_id.
     *
     * @param string|null $item_id The unique identifier for the event item. Note: This field is only returned for single-SKU items.
     *
     * @return self
     */
    public function setItemId($item_id)
    {
        $this->container['item_id'] = $item_id;

        return $this;
    }

    /**
     * Gets item_web_url.
     *
     * @return string|null
     */
    public function getItemWebUrl()
    {
        return $this->container['item_web_url'];
    }

    /**
     * Sets item_web_url.
     *
     * @param string|null $item_web_url the web URL for the event item
     *
     * @return self
     */
    public function setItemWebUrl($item_web_url)
    {
        $this->container['item_web_url'] = $item_web_url;

        return $this;
    }

    /**
     * Gets legacy_item_id.
     *
     * @return string|null
     */
    public function getLegacyItemId()
    {
        return $this->container['legacy_item_id'];
    }

    /**
     * Sets legacy_item_id.
     *
     * @param string|null $legacy_item_id the legacy item ID associated with the event item
     *
     * @return self
     */
    public function setLegacyItemId($legacy_item_id)
    {
        $this->container['legacy_item_id'] = $legacy_item_id;

        return $this;
    }

    /**
     * Gets marketing_price.
     *
     * @return \TNT\Ebay\Buy\Deal\V1\Model\MarketingPrice|null
     */
    public function getMarketingPrice()
    {
        return $this->container['marketing_price'];
    }

    /**
     * Sets marketing_price.
     *
     * @param \TNT\Ebay\Buy\Deal\V1\Model\MarketingPrice|null $marketing_price marketing_price
     *
     * @return self
     */
    public function setMarketingPrice($marketing_price)
    {
        $this->container['marketing_price'] = $marketing_price;

        return $this;
    }

    /**
     * Gets price.
     *
     * @return \TNT\Ebay\Buy\Deal\V1\Model\Amount|null
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price.
     *
     * @param \TNT\Ebay\Buy\Deal\V1\Model\Amount|null $price price
     *
     * @return self
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets qualified_programs.
     *
     * @return string[]|null
     */
    public function getQualifiedPrograms()
    {
        return $this->container['qualified_programs'];
    }

    /**
     * Sets qualified_programs.
     *
     * @param string[]|null $qualified_programs a list of programs applicable to the event item
     *
     * @return self
     */
    public function setQualifiedPrograms($qualified_programs)
    {
        $this->container['qualified_programs'] = $qualified_programs;

        return $this;
    }

    /**
     * Gets shipping_options.
     *
     * @return \TNT\Ebay\Buy\Deal\V1\Model\ShippingOption[]|null
     */
    public function getShippingOptions()
    {
        return $this->container['shipping_options'];
    }

    /**
     * Sets shipping_options.
     *
     * @param \TNT\Ebay\Buy\Deal\V1\Model\ShippingOption[]|null $shipping_options the cost required to ship the event item
     *
     * @return self
     */
    public function setShippingOptions($shipping_options)
    {
        $this->container['shipping_options'] = $shipping_options;

        return $this;
    }

    /**
     * Gets title.
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title.
     *
     * @param string|null $title the title of the event item
     *
     * @return self
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets unit_price.
     *
     * @return \TNT\Ebay\Buy\Deal\V1\Model\Amount|null
     */
    public function getUnitPrice()
    {
        return $this->container['unit_price'];
    }

    /**
     * Sets unit_price.
     *
     * @param \TNT\Ebay\Buy\Deal\V1\Model\Amount|null $unit_price unit_price
     *
     * @return self
     */
    public function setUnitPrice($unit_price)
    {
        $this->container['unit_price'] = $unit_price;

        return $this;
    }

    /**
     * Gets unit_pricing_measure.
     *
     * @return string|null
     */
    public function getUnitPricingMeasure()
    {
        return $this->container['unit_pricing_measure'];
    }

    /**
     * Sets unit_pricing_measure.
     *
     * @param string|null $unit_pricing_measure The designation used to specify the quantity of the event item, such as size, weight, volume, and count. This helps buyers compare prices. For example, the following tells the buyer that the item is 7.99 per 100 grams. &quot;unitPricingMeasure&quot;: &quot;100g&quot;, &quot;unitPrice&quot;: { &nbsp;&nbsp;&quot;value&quot;: &quot;7.99&quot;, &nbsp;&nbsp;&quot;currency&quot;: &quot;GBP&quot;
     *
     * @return self
     */
    public function setUnitPricingMeasure($unit_pricing_measure)
    {
        $this->container['unit_pricing_measure'] = $unit_pricing_measure;

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
