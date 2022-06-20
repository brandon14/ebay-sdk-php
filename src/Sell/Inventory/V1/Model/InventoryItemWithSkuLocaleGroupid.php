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
 * InventoryItemWithSkuLocaleGroupid.
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
 * Inventory API.
 *
 * The Inventory API is used to create and manage inventory, and then to publish and manage this inventory on an eBay marketplace. There are also methods in this API that will convert eligible, active eBay listings into the Inventory API model.
 *
 * The version of the OpenAPI document: 1.16.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace TNT\Ebay\Sell\Inventory\V1\Model;

use ArrayAccess;
use TNT\Ebay\Sell\Inventory\V1\ObjectSerializer;

/**
 * InventoryItemWithSkuLocaleGroupid Class Doc Comment.
 *
 * @category Class
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class InventoryItemWithSkuLocaleGroupid implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'InventoryItemWithSkuLocaleGroupid';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'availability' => '\TNT\Ebay\Sell\Inventory\V1\Model\AvailabilityWithAll',
        'condition' => 'string',
        'condition_description' => 'string',
        'group_ids' => 'string[]',
        'inventory_item_group_keys' => 'string[]',
        'locale' => 'string',
        'package_weight_and_size' => '\TNT\Ebay\Sell\Inventory\V1\Model\PackageWeightAndSize',
        'product' => '\TNT\Ebay\Sell\Inventory\V1\Model\Product',
        'sku' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'availability' => null,
        'condition' => null,
        'condition_description' => null,
        'group_ids' => null,
        'inventory_item_group_keys' => null,
        'locale' => null,
        'package_weight_and_size' => null,
        'product' => null,
        'sku' => null,
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
        'availability' => 'availability',
        'condition' => 'condition',
        'condition_description' => 'conditionDescription',
        'group_ids' => 'groupIds',
        'inventory_item_group_keys' => 'inventoryItemGroupKeys',
        'locale' => 'locale',
        'package_weight_and_size' => 'packageWeightAndSize',
        'product' => 'product',
        'sku' => 'sku',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'availability' => 'setAvailability',
        'condition' => 'setCondition',
        'condition_description' => 'setConditionDescription',
        'group_ids' => 'setGroupIds',
        'inventory_item_group_keys' => 'setInventoryItemGroupKeys',
        'locale' => 'setLocale',
        'package_weight_and_size' => 'setPackageWeightAndSize',
        'product' => 'setProduct',
        'sku' => 'setSku',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'availability' => 'getAvailability',
        'condition' => 'getCondition',
        'condition_description' => 'getConditionDescription',
        'group_ids' => 'getGroupIds',
        'inventory_item_group_keys' => 'getInventoryItemGroupKeys',
        'locale' => 'getLocale',
        'package_weight_and_size' => 'getPackageWeightAndSize',
        'product' => 'getProduct',
        'sku' => 'getSku',
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
        $this->container['availability'] = $data['availability'] ?? null;
        $this->container['condition'] = $data['condition'] ?? null;
        $this->container['condition_description'] = $data['condition_description'] ?? null;
        $this->container['group_ids'] = $data['group_ids'] ?? null;
        $this->container['inventory_item_group_keys'] = $data['inventory_item_group_keys'] ?? null;
        $this->container['locale'] = $data['locale'] ?? null;
        $this->container['package_weight_and_size'] = $data['package_weight_and_size'] ?? null;
        $this->container['product'] = $data['product'] ?? null;
        $this->container['sku'] = $data['sku'] ?? null;
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
     * Gets availability.
     *
     * @return \TNT\Ebay\Sell\Inventory\V1\Model\AvailabilityWithAll|null
     */
    public function getAvailability()
    {
        return $this->container['availability'];
    }

    /**
     * Sets availability.
     *
     * @param \TNT\Ebay\Sell\Inventory\V1\Model\AvailabilityWithAll|null $availability availability
     *
     * @return self
     */
    public function setAvailability($availability)
    {
        $this->container['availability'] = $availability;

        return $this;
    }

    /**
     * Gets condition.
     *
     * @return string|null
     */
    public function getCondition()
    {
        return $this->container['condition'];
    }

    /**
     * Sets condition.
     *
     * @param string|null $condition This enumeration value indicates the condition of the item. Supported item condition values will vary by eBay site and category. <br /><br /> Since the condition of an inventory item must be specified before being published in an offer, this field is always returned in the 'Get' calls for SKUs that are part of a published offer. If a SKU is not part of a published offer, this field will only be returned if set for the inventory item. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/inventory/types/slr:ConditionEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setCondition($condition)
    {
        $this->container['condition'] = $condition;

        return $this;
    }

    /**
     * Gets condition_description.
     *
     * @return string|null
     */
    public function getConditionDescription()
    {
        return $this->container['condition_description'];
    }

    /**
     * Sets condition_description.
     *
     * @param string|null $condition_description This string field is used by the seller to more clearly describe the condition of used items, or items that are not 'Brand New', 'New with tags', or 'New in box'. The ConditionDescription field is available for all categories. If the ConditionDescription field is used with an item in a new condition (Condition IDs 1000-1499), eBay will simply ignore this field if included, and eBay will return a warning message to the user. This field should only be used to further clarify the condition of the used item. It should not be used for branding, promotions, shipping, returns, payment or other information unrelated to the condition of the item. Make sure that the condition value, condition description, listing description, and the item's pictures do not contradict one another.<br /><br /><strong>Max length</strong>/: 1000.
     *
     * @return self
     */
    public function setConditionDescription($condition_description)
    {
        $this->container['condition_description'] = $condition_description;

        return $this;
    }

    /**
     * Gets group_ids.
     *
     * @return string[]|null
     */
    public function getGroupIds()
    {
        return $this->container['group_ids'];
    }

    /**
     * Sets group_ids.
     *
     * @param string[]|null $group_ids This array is returned if the inventory item is associated with any inventory item group(s). The value(s) returned in this array are the unique identifier(s) of the inventory item group(s). This array is not returned if the inventory item is not associated with any inventory item groups.
     *
     * @return self
     */
    public function setGroupIds($group_ids)
    {
        $this->container['group_ids'] = $group_ids;

        return $this;
    }

    /**
     * Gets inventory_item_group_keys.
     *
     * @return string[]|null
     */
    public function getInventoryItemGroupKeys()
    {
        return $this->container['inventory_item_group_keys'];
    }

    /**
     * Sets inventory_item_group_keys.
     *
     * @param string[]|null $inventory_item_group_keys This array is returned if the inventory item is associated with any inventory item group(s). The value(s) returned in this array are the unique identifier(s) of the inventory item's variation in a multiple-variation listing. This array is not returned if the inventory item is not associated with any inventory item groups.
     *
     * @return self
     */
    public function setInventoryItemGroupKeys($inventory_item_group_keys)
    {
        $this->container['inventory_item_group_keys'] = $inventory_item_group_keys;

        return $this;
    }

    /**
     * Gets locale.
     *
     * @return string|null
     */
    public function getLocale()
    {
        return $this->container['locale'];
    }

    /**
     * Sets locale.
     *
     * @param string|null $locale This field is for future use only. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/inventory/types/slr:LocaleEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setLocale($locale)
    {
        $this->container['locale'] = $locale;

        return $this;
    }

    /**
     * Gets package_weight_and_size.
     *
     * @return \TNT\Ebay\Sell\Inventory\V1\Model\PackageWeightAndSize|null
     */
    public function getPackageWeightAndSize()
    {
        return $this->container['package_weight_and_size'];
    }

    /**
     * Sets package_weight_and_size.
     *
     * @param \TNT\Ebay\Sell\Inventory\V1\Model\PackageWeightAndSize|null $package_weight_and_size package_weight_and_size
     *
     * @return self
     */
    public function setPackageWeightAndSize($package_weight_and_size)
    {
        $this->container['package_weight_and_size'] = $package_weight_and_size;

        return $this;
    }

    /**
     * Gets product.
     *
     * @return \TNT\Ebay\Sell\Inventory\V1\Model\Product|null
     */
    public function getProduct()
    {
        return $this->container['product'];
    }

    /**
     * Sets product.
     *
     * @param \TNT\Ebay\Sell\Inventory\V1\Model\Product|null $product product
     *
     * @return self
     */
    public function setProduct($product)
    {
        $this->container['product'] = $product;

        return $this;
    }

    /**
     * Gets sku.
     *
     * @return string|null
     */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku.
     *
     * @param string|null $sku The seller-defined Stock-Keeping Unit (SKU) of the inventory item. The seller should have a unique SKU value for every product that they sell.
     *
     * @return self
     */
    public function setSku($sku)
    {
        $this->container['sku'] = $sku;

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