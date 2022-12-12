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
 * InventoryCriterion.
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
 * Marketing API.
 *
 * <p>The <i>Marketing API </i> offers two platforms that sellers can use to promote and advertise their products:</p> <ul><li><b>Promoted Listings</b> is an eBay ad service that lets sellers set up <i>ad campaigns </i> for the products they want to promote. eBay displays the ads in search results and in other marketing modules as <b>SPONSORED</b> listings. If an item in a Promoted Listings campaign sells, the seller is assessed a Promoted Listings fee, which is a seller-specified percentage applied to the sales price. For complete details, refer to the <a href=\"/api-docs/sell/static/marketing/pl-landing.html\">Promoted Listings playbook</a>.</li><li><b>Promotions Manager</b> gives sellers a way to offer discounts on specific items as a way to attract buyers to their inventory. Sellers can set up discounts (such as \"20% off\" and other types of offers) on specific items or on an entire customer order. To further attract buyers, eBay prominently displays promotion <i>teasers</i> throughout buyer flows. For complete details, see <a href=\"/api-docs/sell/static/marketing/promotions-manager.html\">Promotions Manager</a>.</li></ul>  <p><b>Marketing reports</b>, on both the Promoted Listings and Promotions Manager platforms, give sellers information that shows the effectiveness of their marketing strategies. The data gives sellers the ability to review and fine tune their marketing efforts.</p> <p class=\"tablenote\"><b>Important!</b> Sellers must have an active eBay Store subscription, and they must accept the <b>Terms and Conditions</b> before they can make requests to these APIs in the Production environment. There are also site-specific listings requirements and restrictions associated with these marketing tools, as listed in the \"requirements and restrictions\" sections for <a href=\"/api-docs/sell/marketing/static/overview.html#PL-requirements\">Promoted Listings</a> and <a href=\"/api-docs/sell/marketing/static/overview.html#PM-requirements\">Promotions Manager</a>.</p> <p>The table below lists all the Marketing API calls grouped by resource.</p>
 *
 * The version of the OpenAPI document: v1.14.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace TNT\Ebay\Sell\Marketing\V1\Model;

use ArrayAccess;
use TNT\Ebay\Sell\Marketing\V1\ObjectSerializer;

/**
 * InventoryCriterion Class Doc Comment.
 *
 * @category Class
 * @description This type defines either the selections rules or the list of listing IDs for the promotion. The \&quot;listing IDs\&quot; are are either the seller&#39;s item IDs or the eBay listing IDs.
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class InventoryCriterion implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'InventoryCriterion';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'inventory_criterion_type' => 'string',
        'inventory_items' => '\TNT\Ebay\Sell\Marketing\V1\Model\InventoryItem[]',
        'listing_ids' => 'string[]',
        'rule_criteria' => '\TNT\Ebay\Sell\Marketing\V1\Model\RuleCriteria',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'inventory_criterion_type' => null,
        'inventory_items' => null,
        'listing_ids' => null,
        'rule_criteria' => null,
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
        'inventory_criterion_type' => 'inventoryCriterionType',
        'inventory_items' => 'inventoryItems',
        'listing_ids' => 'listingIds',
        'rule_criteria' => 'ruleCriteria',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'inventory_criterion_type' => 'setInventoryCriterionType',
        'inventory_items' => 'setInventoryItems',
        'listing_ids' => 'setListingIds',
        'rule_criteria' => 'setRuleCriteria',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'inventory_criterion_type' => 'getInventoryCriterionType',
        'inventory_items' => 'getInventoryItems',
        'listing_ids' => 'getListingIds',
        'rule_criteria' => 'getRuleCriteria',
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
        $this->container['inventory_criterion_type'] = $data['inventory_criterion_type'] ?? null;
        $this->container['inventory_items'] = $data['inventory_items'] ?? null;
        $this->container['listing_ids'] = $data['listing_ids'] ?? null;
        $this->container['rule_criteria'] = $data['rule_criteria'] ?? null;
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
     * Gets inventory_criterion_type.
     *
     * @return string|null
     */
    public function getInventoryCriterionType()
    {
        return $this->container['inventory_criterion_type'];
    }

    /**
     * Sets inventory_criterion_type.
     *
     * @param string|null $inventory_criterion_type Indicates how the items to include in the promotion are selected. You can include inventory by ID, using rules, or globally include all your inventory.  For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/sme:InventoryCriterionEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setInventoryCriterionType($inventory_criterion_type)
    {
        $this->container['inventory_criterion_type'] = $inventory_criterion_type;

        return $this;
    }

    /**
     * Gets inventory_items.
     *
     * @return \TNT\Ebay\Sell\Marketing\V1\Model\InventoryItem[]|null
     */
    public function getInventoryItems()
    {
        return $this->container['inventory_items'];
    }

    /**
     * Sets inventory_items.
     *
     * @param \TNT\Ebay\Sell\Marketing\V1\Model\InventoryItem[]|null $inventory_items An array of containers for the seller's inventory reference IDs (also known as an \"SKU\" or \"custom label\") to be added to the promotion.  <p class=\"tablenote\"><b>Note:</b> The request can have either <b>inventoryItems</b> or <b>listingIds</b>, but not both.</p>  <br><br><b>Required:</b> All listings in a promotion must offer an electronic payment method.  <br><b>Maximum:</b> 500 parent items  <br><b>Maximum SKU or custom label length:</b> 50 characters <br><br><i>Required if </i> <b>InventoryCriterionType</b> is set to <code>INVENTORY_BY_VALUE</code>, you must specify either <b>inventoryItems</b> or <b>listingIds</b>.
     *
     * @return self
     */
    public function setInventoryItems($inventory_items)
    {
        $this->container['inventory_items'] = $inventory_items;

        return $this;
    }

    /**
     * Gets listing_ids.
     *
     * @return string[]|null
     */
    public function getListingIds()
    {
        return $this->container['listing_ids'];
    }

    /**
     * Sets listing_ids.
     *
     * @param string[]|null $listing_ids An array of eBay listing IDs to be added to the promotion.  <p class=\"tablenote\"><b>Note:</b> The request can have either <b>inventoryItems</b> or <b>listingIds</b>, but not both.</p>  <br><br><b>Required:</b> All listings in a promotion must offer an electronic payment method.  <br><b>Maximum:</b> 500 parent items  <br><b>Maximum SKU or custom label length:</b> 50 characters <br><br><i>Required if </i> <b>InventoryCriterionType</b> is set to <code>INVENTORY_BY_VALUE</code>, you must specify either <b>inventoryItems</b> or <b>listingIds</b>.
     *
     * @return self
     */
    public function setListingIds($listing_ids)
    {
        $this->container['listing_ids'] = $listing_ids;

        return $this;
    }

    /**
     * Gets rule_criteria.
     *
     * @return \TNT\Ebay\Sell\Marketing\V1\Model\RuleCriteria|null
     */
    public function getRuleCriteria()
    {
        return $this->container['rule_criteria'];
    }

    /**
     * Sets rule_criteria.
     *
     * @param \TNT\Ebay\Sell\Marketing\V1\Model\RuleCriteria|null $rule_criteria rule_criteria
     *
     * @return self
     */
    public function setRuleCriteria($rule_criteria)
    {
        $this->container['rule_criteria'] = $rule_criteria;

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
