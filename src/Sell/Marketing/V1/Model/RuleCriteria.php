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
 * RuleCriteria.
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

use TNT\Ebay\Sell\Marketing\V1\ObjectSerializer;

/**
 * RuleCriteria Class Doc Comment.
 *
 * @category Class
 *
 * @description This type defines the fields for a set of inventory selection rules.  &lt;br&gt;&lt;br&gt;&lt;b&gt;Required:&lt;/b&gt; When &lt;b&gt;inventoryCriterionType&lt;/b&gt; is set to &lt;code&gt;INVENTORY_BY_RULE&lt;/code&gt; or &lt;code&gt;INVENTORY_ANY&lt;/code&gt;.
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
class RuleCriteria implements ModelInterface, \ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'RuleCriteria';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'exclude_inventory_items' => '\TNT\Ebay\Sell\Marketing\V1\Model\InventoryItem[]',
        'exclude_listing_ids' => 'string[]',
        'markup_inventory_items' => '\TNT\Ebay\Sell\Marketing\V1\Model\InventoryItem[]',
        'markup_listing_ids' => 'string[]',
        'selection_rules' => '\TNT\Ebay\Sell\Marketing\V1\Model\SelectionRule[]',
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
        'exclude_inventory_items' => null,
        'exclude_listing_ids' => null,
        'markup_inventory_items' => null,
        'markup_listing_ids' => null,
        'selection_rules' => null,
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
        'exclude_inventory_items' => 'excludeInventoryItems',
        'exclude_listing_ids' => 'excludeListingIds',
        'markup_inventory_items' => 'markupInventoryItems',
        'markup_listing_ids' => 'markupListingIds',
        'selection_rules' => 'selectionRules',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'exclude_inventory_items' => 'setExcludeInventoryItems',
        'exclude_listing_ids' => 'setExcludeListingIds',
        'markup_inventory_items' => 'setMarkupInventoryItems',
        'markup_listing_ids' => 'setMarkupListingIds',
        'selection_rules' => 'setSelectionRules',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'exclude_inventory_items' => 'getExcludeInventoryItems',
        'exclude_listing_ids' => 'getExcludeListingIds',
        'markup_inventory_items' => 'getMarkupInventoryItems',
        'markup_listing_ids' => 'getMarkupListingIds',
        'selection_rules' => 'getSelectionRules',
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
        $this->container['exclude_inventory_items'] = $data['exclude_inventory_items'] ?? null;
        $this->container['exclude_listing_ids'] = $data['exclude_listing_ids'] ?? null;
        $this->container['markup_inventory_items'] = $data['markup_inventory_items'] ?? null;
        $this->container['markup_listing_ids'] = $data['markup_listing_ids'] ?? null;
        $this->container['selection_rules'] = $data['selection_rules'] ?? null;
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
     * Gets exclude_inventory_items.
     *
     * @return \TNT\Ebay\Sell\Marketing\V1\Model\InventoryItem[]|null
     */
    public function getExcludeInventoryItems()
    {
        return $this->container['exclude_inventory_items'];
    }

    /**
     * Sets exclude_inventory_items.
     *
     * @param \TNT\Ebay\Sell\Marketing\V1\Model\InventoryItem[]|null $exclude_inventory_items A list of seller inventory reference IDs to exclude from the promotion.  <br><br><p class=\"tablenote\"><b>Note:</b> The request can have either <b>excludeInventoryItems</b> or <b>excludeListingIds</b> but not both.</p> <b>Maximum:</b> 100 parent items <br><b>Maximum SKU or custom label length:</b> 50 characters
     *
     * @return self
     */
    public function setExcludeInventoryItems($exclude_inventory_items)
    {
        $this->container['exclude_inventory_items'] = $exclude_inventory_items;

        return $this;
    }

    /**
     * Gets exclude_listing_ids.
     *
     * @return string[]|null
     */
    public function getExcludeListingIds()
    {
        return $this->container['exclude_listing_ids'];
    }

    /**
     * Sets exclude_listing_ids.
     *
     * @param string[]|null $exclude_listing_ids A list of eBay listing IDs to exclude from the promotion.  <br><br><p class=\"tablenote\"><b>Note:</b> The request can have either <b>excludeInventoryItems</b> or <b>excludeListingIds</b> but not both.</p> <b>Maximum:</b> 100 parent items <br><b>Maximum SKU or custom label length:</b> 50 characters
     *
     * @return self
     */
    public function setExcludeListingIds($exclude_listing_ids)
    {
        $this->container['exclude_listing_ids'] = $exclude_listing_ids;

        return $this;
    }

    /**
     * Gets markup_inventory_items.
     *
     * @return \TNT\Ebay\Sell\Marketing\V1\Model\InventoryItem[]|null
     */
    public function getMarkupInventoryItems()
    {
        return $this->container['markup_inventory_items'];
    }

    /**
     * Sets markup_inventory_items.
     *
     * @param \TNT\Ebay\Sell\Marketing\V1\Model\InventoryItem[]|null $markup_inventory_items A list of SKUs to remove from a markdown promotion. The listed SKUs are 'marked up' to their standard price after being part of the markdown promotion.
     *
     * @return self
     */
    public function setMarkupInventoryItems($markup_inventory_items)
    {
        $this->container['markup_inventory_items'] = $markup_inventory_items;

        return $this;
    }

    /**
     * Gets markup_listing_ids.
     *
     * @return string[]|null
     */
    public function getMarkupListingIds()
    {
        return $this->container['markup_listing_ids'];
    }

    /**
     * Sets markup_listing_ids.
     *
     * @param string[]|null $markup_listing_ids A list of listing IDs to remove from a markdown promotion. The listed items are 'marked up' to their standard price after being part of the markdown promotion.
     *
     * @return self
     */
    public function setMarkupListingIds($markup_listing_ids)
    {
        $this->container['markup_listing_ids'] = $markup_listing_ids;

        return $this;
    }

    /**
     * Gets selection_rules.
     *
     * @return \TNT\Ebay\Sell\Marketing\V1\Model\SelectionRule[]|null
     */
    public function getSelectionRules()
    {
        return $this->container['selection_rules'];
    }

    /**
     * Sets selection_rules.
     *
     * @param \TNT\Ebay\Sell\Marketing\V1\Model\SelectionRule[]|null $selection_rules The container for the rules that select the items to include in a promotion.  <br><br><i>Required if </i> <b>inventoryCriterionType</b> is set to <code>INVENTORY_BY_RULE</code>.
     *
     * @return self
     */
    public function setSelectionRules($selection_rules)
    {
        $this->container['selection_rules'] = $selection_rules;

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
