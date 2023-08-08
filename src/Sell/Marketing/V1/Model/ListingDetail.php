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
 * ListingDetail.
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
 * ListingDetail Class Doc Comment.
 *
 * @category Class
 *
 * @description This type defines the fields that describe a listing that is in a promotion.
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
class ListingDetail implements ModelInterface, \ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'ListingDetail';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'current_price' => '\TNT\Ebay\Sell\Marketing\V1\Model\Amount',
        'free_shipping' => 'bool',
        'inventory_reference_id' => 'string',
        'inventory_reference_type' => 'string',
        'listing_category_id' => 'string',
        'listing_condition' => 'string',
        'listing_condition_id' => 'string',
        'listing_id' => 'string',
        'listing_promotion_statuses' => '\TNT\Ebay\Sell\Marketing\V1\Model\ItemMarkdownStatus[]',
        'quantity' => 'int',
        'store_category_id' => 'string',
        'title' => 'string',
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
        'current_price' => null,
        'free_shipping' => null,
        'inventory_reference_id' => null,
        'inventory_reference_type' => null,
        'listing_category_id' => null,
        'listing_condition' => null,
        'listing_condition_id' => null,
        'listing_id' => null,
        'listing_promotion_statuses' => null,
        'quantity' => 'int32',
        'store_category_id' => null,
        'title' => null,
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
        'current_price' => 'currentPrice',
        'free_shipping' => 'freeShipping',
        'inventory_reference_id' => 'inventoryReferenceId',
        'inventory_reference_type' => 'inventoryReferenceType',
        'listing_category_id' => 'listingCategoryId',
        'listing_condition' => 'listingCondition',
        'listing_condition_id' => 'listingConditionId',
        'listing_id' => 'listingId',
        'listing_promotion_statuses' => 'listingPromotionStatuses',
        'quantity' => 'quantity',
        'store_category_id' => 'storeCategoryId',
        'title' => 'title',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'current_price' => 'setCurrentPrice',
        'free_shipping' => 'setFreeShipping',
        'inventory_reference_id' => 'setInventoryReferenceId',
        'inventory_reference_type' => 'setInventoryReferenceType',
        'listing_category_id' => 'setListingCategoryId',
        'listing_condition' => 'setListingCondition',
        'listing_condition_id' => 'setListingConditionId',
        'listing_id' => 'setListingId',
        'listing_promotion_statuses' => 'setListingPromotionStatuses',
        'quantity' => 'setQuantity',
        'store_category_id' => 'setStoreCategoryId',
        'title' => 'setTitle',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'current_price' => 'getCurrentPrice',
        'free_shipping' => 'getFreeShipping',
        'inventory_reference_id' => 'getInventoryReferenceId',
        'inventory_reference_type' => 'getInventoryReferenceType',
        'listing_category_id' => 'getListingCategoryId',
        'listing_condition' => 'getListingCondition',
        'listing_condition_id' => 'getListingConditionId',
        'listing_id' => 'getListingId',
        'listing_promotion_statuses' => 'getListingPromotionStatuses',
        'quantity' => 'getQuantity',
        'store_category_id' => 'getStoreCategoryId',
        'title' => 'getTitle',
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
        $this->container['current_price'] = $data['current_price'] ?? null;
        $this->container['free_shipping'] = $data['free_shipping'] ?? null;
        $this->container['inventory_reference_id'] = $data['inventory_reference_id'] ?? null;
        $this->container['inventory_reference_type'] = $data['inventory_reference_type'] ?? null;
        $this->container['listing_category_id'] = $data['listing_category_id'] ?? null;
        $this->container['listing_condition'] = $data['listing_condition'] ?? null;
        $this->container['listing_condition_id'] = $data['listing_condition_id'] ?? null;
        $this->container['listing_id'] = $data['listing_id'] ?? null;
        $this->container['listing_promotion_statuses'] = $data['listing_promotion_statuses'] ?? null;
        $this->container['quantity'] = $data['quantity'] ?? null;
        $this->container['store_category_id'] = $data['store_category_id'] ?? null;
        $this->container['title'] = $data['title'] ?? null;
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
     * Gets current_price.
     *
     * @return \TNT\Ebay\Sell\Marketing\V1\Model\Amount|null
     */
    public function getCurrentPrice()
    {
        return $this->container['current_price'];
    }

    /**
     * Sets current_price.
     *
     * @param \TNT\Ebay\Sell\Marketing\V1\Model\Amount|null $current_price current_price
     *
     * @return self
     */
    public function setCurrentPrice($current_price)
    {
        $this->container['current_price'] = $current_price;

        return $this;
    }

    /**
     * Gets free_shipping.
     *
     * @return bool|null
     */
    public function getFreeShipping()
    {
        return $this->container['free_shipping'];
    }

    /**
     * Sets free_shipping.
     *
     * @param bool|null $free_shipping If set to <code>true</code>, the seller pays for the shipping (or that the item is marked for local pickup only) In this case, the listing does not have an associated shipping cost for the first listed domestic-shipping option (even if the first domestic-shipping option specifies a flat-rate or calculated shipping option). If <code>false</code>, the buyer is required to pay for a flat-rate or calculated cost shipping service.
     *
     * @return self
     */
    public function setFreeShipping($free_shipping)
    {
        $this->container['free_shipping'] = $free_shipping;

        return $this;
    }

    /**
     * Gets inventory_reference_id.
     *
     * @return string|null
     */
    public function getInventoryReferenceId()
    {
        return $this->container['inventory_reference_id'];
    }

    /**
     * Sets inventory_reference_id.
     *
     * @param string|null $inventory_reference_id The seller's inventory reference ID for a listing. Also known as the \"SKU\" or \"custom label,\" an inventory reference ID is either the ID of the listing or, if the listing has variations (such as a shirt that's available in multiple sizes and colors), the ID of the parent listing.
     *
     * @return self
     */
    public function setInventoryReferenceId($inventory_reference_id)
    {
        $this->container['inventory_reference_id'] = $inventory_reference_id;

        return $this;
    }

    /**
     * Gets inventory_reference_type.
     *
     * @return string|null
     */
    public function getInventoryReferenceType()
    {
        return $this->container['inventory_reference_type'];
    }

    /**
     * Sets inventory_reference_type.
     *
     * @param string|null $inventory_reference_type Indicates the type of the <b>inventoryReferenceId</b>, which can be either a single-SKU or a multi-SKU listing (<code>INVENTORY_ITEM</code> and <code>INVENTORY_ITEM_GROUP</code>, respectively).  <br><br><b>Note:</b> This value is not currently returned in the response.
     *
     * @return self
     */
    public function setInventoryReferenceType($inventory_reference_type)
    {
        $this->container['inventory_reference_type'] = $inventory_reference_type;

        return $this;
    }

    /**
     * Gets listing_category_id.
     *
     * @return string|null
     */
    public function getListingCategoryId()
    {
        return $this->container['listing_category_id'];
    }

    /**
     * Sets listing_category_id.
     *
     * @param string|null $listing_category_id The ID of the category that listing belongs to. The ID is a numeric and unique identifier for the category that is assigned by eBay.
     *
     * @return self
     */
    public function setListingCategoryId($listing_category_id)
    {
        $this->container['listing_category_id'] = $listing_category_id;

        return $this;
    }

    /**
     * Gets listing_condition.
     *
     * @return string|null
     */
    public function getListingCondition()
    {
        return $this->container['listing_condition'];
    }

    /**
     * Sets listing_condition.
     *
     * @param string|null $listing_condition An eBay-assigned value that indicates condition of the associated item. For more information, see <a href=\"/api-docs/sell/static/metadata/condition-id-values.html\">Item condition ID and name values</a>.
     *
     * @return self
     */
    public function setListingCondition($listing_condition)
    {
        $this->container['listing_condition'] = $listing_condition;

        return $this;
    }

    /**
     * Gets listing_condition_id.
     *
     * @return string|null
     */
    public function getListingConditionId()
    {
        return $this->container['listing_condition_id'];
    }

    /**
     * Sets listing_condition_id.
     *
     * @param string|null $listing_condition_id The ID of the condition associated with the item. For more information, see <a href=\"/api-docs/sell/static/metadata/condition-id-values.html\">Item condition ID and name values</a>.<br /><br /><span class=\"tablenote\"><b>Note: </b> This value is not currently returned in the response.</span>
     *
     * @return self
     */
    public function setListingConditionId($listing_condition_id)
    {
        $this->container['listing_condition_id'] = $listing_condition_id;

        return $this;
    }

    /**
     * Gets listing_id.
     *
     * @return string|null
     */
    public function getListingId()
    {
        return $this->container['listing_id'];
    }

    /**
     * Sets listing_id.
     *
     * @param string|null $listing_id a unique eBay-assigned ID that is generated when the item is listed
     *
     * @return self
     */
    public function setListingId($listing_id)
    {
        $this->container['listing_id'] = $listing_id;

        return $this;
    }

    /**
     * Gets listing_promotion_statuses.
     *
     * @return \TNT\Ebay\Sell\Marketing\V1\Model\ItemMarkdownStatus[]|null
     */
    public function getListingPromotionStatuses()
    {
        return $this->container['listing_promotion_statuses'];
    }

    /**
     * Sets listing_promotion_statuses.
     *
     * @param \TNT\Ebay\Sell\Marketing\V1\Model\ItemMarkdownStatus[]|null $listing_promotion_statuses a list of the status values assigned to the item and the date that each new status was assigned
     *
     * @return self
     */
    public function setListingPromotionStatuses($listing_promotion_statuses)
    {
        $this->container['listing_promotion_statuses'] = $listing_promotion_statuses;

        return $this;
    }

    /**
     * Gets quantity.
     *
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity.
     *
     * @param int|null $quantity the number of items being sold in the listing
     *
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets store_category_id.
     *
     * @return string|null
     */
    public function getStoreCategoryId()
    {
        return $this->container['store_category_id'];
    }

    /**
     * Sets store_category_id.
     *
     * @param string|null $store_category_id Store CategoryId (if any) that to which the listing belongs. This field is blank if there is no seller Store category ID.
     *
     * @return self
     */
    public function setStoreCategoryId($store_category_id)
    {
        $this->container['store_category_id'] = $store_category_id;

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
     * @param string|null $title The seller-defined title of the listing that a seller can use to identify the item.  This label is not displayed in end-user flows.
     *
     * @return self
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

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
