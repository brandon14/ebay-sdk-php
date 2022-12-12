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
 * LineItem.
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
 * Fulfillment API.
 *
 * Use the Fulfillment API to complete the process of packaging, addressing, handling, and shipping each order on behalf of the seller, in accordance with the payment method and timing specified at checkout.
 *
 * The version of the OpenAPI document: v1.19.17
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace TNT\Ebay\Sell\Fulfillment\V1\Model;

use ArrayAccess;
use TNT\Ebay\Sell\Fulfillment\V1\ObjectSerializer;

/**
 * LineItem Class Doc Comment.
 *
 * @category Class
 * @description This type contains the details of each line item in an order.
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class LineItem implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'LineItem';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'applied_promotions' => '\TNT\Ebay\Sell\Fulfillment\V1\Model\AppliedPromotion[]',
        'delivery_cost' => '\TNT\Ebay\Sell\Fulfillment\V1\Model\DeliveryCost',
        'discounted_line_item_cost' => '\TNT\Ebay\Sell\Fulfillment\V1\Model\Amount',
        'ebay_collect_and_remit_taxes' => '\TNT\Ebay\Sell\Fulfillment\V1\Model\EbayCollectAndRemitTax[]',
        'ebay_collected_charges' => '\TNT\Ebay\Sell\Fulfillment\V1\Model\EbayCollectedCharges',
        'gift_details' => '\TNT\Ebay\Sell\Fulfillment\V1\Model\GiftDetails',
        'item_location' => '\TNT\Ebay\Sell\Fulfillment\V1\Model\ItemLocation',
        'legacy_item_id' => 'string',
        'legacy_variation_id' => 'string',
        'line_item_cost' => '\TNT\Ebay\Sell\Fulfillment\V1\Model\Amount',
        'line_item_fulfillment_instructions' => '\TNT\Ebay\Sell\Fulfillment\V1\Model\LineItemFulfillmentInstructions',
        'line_item_fulfillment_status' => 'string',
        'line_item_id' => 'string',
        'listing_marketplace_id' => 'string',
        'properties' => '\TNT\Ebay\Sell\Fulfillment\V1\Model\LineItemProperties',
        'purchase_marketplace_id' => 'string',
        'quantity' => 'int',
        'refunds' => '\TNT\Ebay\Sell\Fulfillment\V1\Model\LineItemRefund[]',
        'sku' => 'string',
        'sold_format' => 'string',
        'taxes' => '\TNT\Ebay\Sell\Fulfillment\V1\Model\Tax[]',
        'title' => 'string',
        'total' => '\TNT\Ebay\Sell\Fulfillment\V1\Model\Amount',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'applied_promotions' => null,
        'delivery_cost' => null,
        'discounted_line_item_cost' => null,
        'ebay_collect_and_remit_taxes' => null,
        'ebay_collected_charges' => null,
        'gift_details' => null,
        'item_location' => null,
        'legacy_item_id' => null,
        'legacy_variation_id' => null,
        'line_item_cost' => null,
        'line_item_fulfillment_instructions' => null,
        'line_item_fulfillment_status' => null,
        'line_item_id' => null,
        'listing_marketplace_id' => null,
        'properties' => null,
        'purchase_marketplace_id' => null,
        'quantity' => 'int32',
        'refunds' => null,
        'sku' => null,
        'sold_format' => null,
        'taxes' => null,
        'title' => null,
        'total' => null,
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
        'applied_promotions' => 'appliedPromotions',
        'delivery_cost' => 'deliveryCost',
        'discounted_line_item_cost' => 'discountedLineItemCost',
        'ebay_collect_and_remit_taxes' => 'ebayCollectAndRemitTaxes',
        'ebay_collected_charges' => 'ebayCollectedCharges',
        'gift_details' => 'giftDetails',
        'item_location' => 'itemLocation',
        'legacy_item_id' => 'legacyItemId',
        'legacy_variation_id' => 'legacyVariationId',
        'line_item_cost' => 'lineItemCost',
        'line_item_fulfillment_instructions' => 'lineItemFulfillmentInstructions',
        'line_item_fulfillment_status' => 'lineItemFulfillmentStatus',
        'line_item_id' => 'lineItemId',
        'listing_marketplace_id' => 'listingMarketplaceId',
        'properties' => 'properties',
        'purchase_marketplace_id' => 'purchaseMarketplaceId',
        'quantity' => 'quantity',
        'refunds' => 'refunds',
        'sku' => 'sku',
        'sold_format' => 'soldFormat',
        'taxes' => 'taxes',
        'title' => 'title',
        'total' => 'total',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'applied_promotions' => 'setAppliedPromotions',
        'delivery_cost' => 'setDeliveryCost',
        'discounted_line_item_cost' => 'setDiscountedLineItemCost',
        'ebay_collect_and_remit_taxes' => 'setEbayCollectAndRemitTaxes',
        'ebay_collected_charges' => 'setEbayCollectedCharges',
        'gift_details' => 'setGiftDetails',
        'item_location' => 'setItemLocation',
        'legacy_item_id' => 'setLegacyItemId',
        'legacy_variation_id' => 'setLegacyVariationId',
        'line_item_cost' => 'setLineItemCost',
        'line_item_fulfillment_instructions' => 'setLineItemFulfillmentInstructions',
        'line_item_fulfillment_status' => 'setLineItemFulfillmentStatus',
        'line_item_id' => 'setLineItemId',
        'listing_marketplace_id' => 'setListingMarketplaceId',
        'properties' => 'setProperties',
        'purchase_marketplace_id' => 'setPurchaseMarketplaceId',
        'quantity' => 'setQuantity',
        'refunds' => 'setRefunds',
        'sku' => 'setSku',
        'sold_format' => 'setSoldFormat',
        'taxes' => 'setTaxes',
        'title' => 'setTitle',
        'total' => 'setTotal',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'applied_promotions' => 'getAppliedPromotions',
        'delivery_cost' => 'getDeliveryCost',
        'discounted_line_item_cost' => 'getDiscountedLineItemCost',
        'ebay_collect_and_remit_taxes' => 'getEbayCollectAndRemitTaxes',
        'ebay_collected_charges' => 'getEbayCollectedCharges',
        'gift_details' => 'getGiftDetails',
        'item_location' => 'getItemLocation',
        'legacy_item_id' => 'getLegacyItemId',
        'legacy_variation_id' => 'getLegacyVariationId',
        'line_item_cost' => 'getLineItemCost',
        'line_item_fulfillment_instructions' => 'getLineItemFulfillmentInstructions',
        'line_item_fulfillment_status' => 'getLineItemFulfillmentStatus',
        'line_item_id' => 'getLineItemId',
        'listing_marketplace_id' => 'getListingMarketplaceId',
        'properties' => 'getProperties',
        'purchase_marketplace_id' => 'getPurchaseMarketplaceId',
        'quantity' => 'getQuantity',
        'refunds' => 'getRefunds',
        'sku' => 'getSku',
        'sold_format' => 'getSoldFormat',
        'taxes' => 'getTaxes',
        'title' => 'getTitle',
        'total' => 'getTotal',
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
        $this->container['applied_promotions'] = $data['applied_promotions'] ?? null;
        $this->container['delivery_cost'] = $data['delivery_cost'] ?? null;
        $this->container['discounted_line_item_cost'] = $data['discounted_line_item_cost'] ?? null;
        $this->container['ebay_collect_and_remit_taxes'] = $data['ebay_collect_and_remit_taxes'] ?? null;
        $this->container['ebay_collected_charges'] = $data['ebay_collected_charges'] ?? null;
        $this->container['gift_details'] = $data['gift_details'] ?? null;
        $this->container['item_location'] = $data['item_location'] ?? null;
        $this->container['legacy_item_id'] = $data['legacy_item_id'] ?? null;
        $this->container['legacy_variation_id'] = $data['legacy_variation_id'] ?? null;
        $this->container['line_item_cost'] = $data['line_item_cost'] ?? null;
        $this->container['line_item_fulfillment_instructions'] = $data['line_item_fulfillment_instructions'] ?? null;
        $this->container['line_item_fulfillment_status'] = $data['line_item_fulfillment_status'] ?? null;
        $this->container['line_item_id'] = $data['line_item_id'] ?? null;
        $this->container['listing_marketplace_id'] = $data['listing_marketplace_id'] ?? null;
        $this->container['properties'] = $data['properties'] ?? null;
        $this->container['purchase_marketplace_id'] = $data['purchase_marketplace_id'] ?? null;
        $this->container['quantity'] = $data['quantity'] ?? null;
        $this->container['refunds'] = $data['refunds'] ?? null;
        $this->container['sku'] = $data['sku'] ?? null;
        $this->container['sold_format'] = $data['sold_format'] ?? null;
        $this->container['taxes'] = $data['taxes'] ?? null;
        $this->container['title'] = $data['title'] ?? null;
        $this->container['total'] = $data['total'] ?? null;
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
     * Gets applied_promotions.
     *
     * @return \TNT\Ebay\Sell\Fulfillment\V1\Model\AppliedPromotion[]|null
     */
    public function getAppliedPromotions()
    {
        return $this->container['applied_promotions'];
    }

    /**
     * Sets applied_promotions.
     *
     * @param \TNT\Ebay\Sell\Fulfillment\V1\Model\AppliedPromotion[]|null $applied_promotions This array contains information about one or more sales promotions or discounts applied to the line item. It is always returned, but will be returned as an empty array if no special sales promotions or discounts apply to the order line item.
     *
     * @return self
     */
    public function setAppliedPromotions($applied_promotions)
    {
        $this->container['applied_promotions'] = $applied_promotions;

        return $this;
    }

    /**
     * Gets delivery_cost.
     *
     * @return \TNT\Ebay\Sell\Fulfillment\V1\Model\DeliveryCost|null
     */
    public function getDeliveryCost()
    {
        return $this->container['delivery_cost'];
    }

    /**
     * Sets delivery_cost.
     *
     * @param \TNT\Ebay\Sell\Fulfillment\V1\Model\DeliveryCost|null $delivery_cost delivery_cost
     *
     * @return self
     */
    public function setDeliveryCost($delivery_cost)
    {
        $this->container['delivery_cost'] = $delivery_cost;

        return $this;
    }

    /**
     * Gets discounted_line_item_cost.
     *
     * @return \TNT\Ebay\Sell\Fulfillment\V1\Model\Amount|null
     */
    public function getDiscountedLineItemCost()
    {
        return $this->container['discounted_line_item_cost'];
    }

    /**
     * Sets discounted_line_item_cost.
     *
     * @param \TNT\Ebay\Sell\Fulfillment\V1\Model\Amount|null $discounted_line_item_cost discounted_line_item_cost
     *
     * @return self
     */
    public function setDiscountedLineItemCost($discounted_line_item_cost)
    {
        $this->container['discounted_line_item_cost'] = $discounted_line_item_cost;

        return $this;
    }

    /**
     * Gets ebay_collect_and_remit_taxes.
     *
     * @return \TNT\Ebay\Sell\Fulfillment\V1\Model\EbayCollectAndRemitTax[]|null
     */
    public function getEbayCollectAndRemitTaxes()
    {
        return $this->container['ebay_collect_and_remit_taxes'];
    }

    /**
     * Sets ebay_collect_and_remit_taxes.
     *
     * @param \TNT\Ebay\Sell\Fulfillment\V1\Model\EbayCollectAndRemitTax[]|null $ebay_collect_and_remit_taxes This container will be returned if the order line item is subject to a 'Collect and Remit' tax that eBay will collect and remit to the proper taxing authority on the buyer's behalf.<br/><br/>'Collect and Remit' tax includes:<ul><li>US state-mandated sales tax</li><li>Federal and Provincial Sales Tax in Canada</li><li>'Goods and Services' tax in Canada, Australia, and New Zealand</li><li>VAT collected for the UK and EU countries</li></ul>The amount of this tax is shown in the <strong>amount</strong> field, and the type of tax is shown in the <strong>taxType</strong> field.<br/><br/>eBay will display the tax type and amount during checkout in accordance with the buyer's address, and handle collection and remittance of the tax without requiring the seller to take any action.
     *
     * @return self
     */
    public function setEbayCollectAndRemitTaxes($ebay_collect_and_remit_taxes)
    {
        $this->container['ebay_collect_and_remit_taxes'] = $ebay_collect_and_remit_taxes;

        return $this;
    }

    /**
     * Gets ebay_collected_charges.
     *
     * @return \TNT\Ebay\Sell\Fulfillment\V1\Model\EbayCollectedCharges|null
     */
    public function getEbayCollectedCharges()
    {
        return $this->container['ebay_collected_charges'];
    }

    /**
     * Sets ebay_collected_charges.
     *
     * @param \TNT\Ebay\Sell\Fulfillment\V1\Model\EbayCollectedCharges|null $ebay_collected_charges ebay_collected_charges
     *
     * @return self
     */
    public function setEbayCollectedCharges($ebay_collected_charges)
    {
        $this->container['ebay_collected_charges'] = $ebay_collected_charges;

        return $this;
    }

    /**
     * Gets gift_details.
     *
     * @return \TNT\Ebay\Sell\Fulfillment\V1\Model\GiftDetails|null
     */
    public function getGiftDetails()
    {
        return $this->container['gift_details'];
    }

    /**
     * Sets gift_details.
     *
     * @param \TNT\Ebay\Sell\Fulfillment\V1\Model\GiftDetails|null $gift_details gift_details
     *
     * @return self
     */
    public function setGiftDetails($gift_details)
    {
        $this->container['gift_details'] = $gift_details;

        return $this;
    }

    /**
     * Gets item_location.
     *
     * @return \TNT\Ebay\Sell\Fulfillment\V1\Model\ItemLocation|null
     */
    public function getItemLocation()
    {
        return $this->container['item_location'];
    }

    /**
     * Sets item_location.
     *
     * @param \TNT\Ebay\Sell\Fulfillment\V1\Model\ItemLocation|null $item_location item_location
     *
     * @return self
     */
    public function setItemLocation($item_location)
    {
        $this->container['item_location'] = $item_location;

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
     * @param string|null $legacy_item_id The eBay-generated legacy listing item ID of the listing. Note that the unique identifier of a listing in REST-based APIs is called the <strong>listingId</strong> instead.
     *
     * @return self
     */
    public function setLegacyItemId($legacy_item_id)
    {
        $this->container['legacy_item_id'] = $legacy_item_id;

        return $this;
    }

    /**
     * Gets legacy_variation_id.
     *
     * @return string|null
     */
    public function getLegacyVariationId()
    {
        return $this->container['legacy_variation_id'];
    }

    /**
     * Sets legacy_variation_id.
     *
     * @param string|null $legacy_variation_id The unique identifier of a single variation within a multiple-variation listing. This field is only returned if the line item purchased was from a multiple-variation listing.
     *
     * @return self
     */
    public function setLegacyVariationId($legacy_variation_id)
    {
        $this->container['legacy_variation_id'] = $legacy_variation_id;

        return $this;
    }

    /**
     * Gets line_item_cost.
     *
     * @return \TNT\Ebay\Sell\Fulfillment\V1\Model\Amount|null
     */
    public function getLineItemCost()
    {
        return $this->container['line_item_cost'];
    }

    /**
     * Sets line_item_cost.
     *
     * @param \TNT\Ebay\Sell\Fulfillment\V1\Model\Amount|null $line_item_cost line_item_cost
     *
     * @return self
     */
    public function setLineItemCost($line_item_cost)
    {
        $this->container['line_item_cost'] = $line_item_cost;

        return $this;
    }

    /**
     * Gets line_item_fulfillment_instructions.
     *
     * @return \TNT\Ebay\Sell\Fulfillment\V1\Model\LineItemFulfillmentInstructions|null
     */
    public function getLineItemFulfillmentInstructions()
    {
        return $this->container['line_item_fulfillment_instructions'];
    }

    /**
     * Sets line_item_fulfillment_instructions.
     *
     * @param \TNT\Ebay\Sell\Fulfillment\V1\Model\LineItemFulfillmentInstructions|null $line_item_fulfillment_instructions line_item_fulfillment_instructions
     *
     * @return self
     */
    public function setLineItemFulfillmentInstructions($line_item_fulfillment_instructions)
    {
        $this->container['line_item_fulfillment_instructions'] = $line_item_fulfillment_instructions;

        return $this;
    }

    /**
     * Gets line_item_fulfillment_status.
     *
     * @return string|null
     */
    public function getLineItemFulfillmentStatus()
    {
        return $this->container['line_item_fulfillment_status'];
    }

    /**
     * Sets line_item_fulfillment_status.
     *
     * @param string|null $line_item_fulfillment_status This enumeration value indicates the current fulfillment status of the line item. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/fulfillment/types/sel:LineItemFulfillmentStatusEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setLineItemFulfillmentStatus($line_item_fulfillment_status)
    {
        $this->container['line_item_fulfillment_status'] = $line_item_fulfillment_status;

        return $this;
    }

    /**
     * Gets line_item_id.
     *
     * @return string|null
     */
    public function getLineItemId()
    {
        return $this->container['line_item_id'];
    }

    /**
     * Sets line_item_id.
     *
     * @param string|null $line_item_id This is the unique identifier of an eBay order line item. This field is created as soon as there is a commitment to buy from the seller.
     *
     * @return self
     */
    public function setLineItemId($line_item_id)
    {
        $this->container['line_item_id'] = $line_item_id;

        return $this;
    }

    /**
     * Gets listing_marketplace_id.
     *
     * @return string|null
     */
    public function getListingMarketplaceId()
    {
        return $this->container['listing_marketplace_id'];
    }

    /**
     * Sets listing_marketplace_id.
     *
     * @param string|null $listing_marketplace_id The unique identifier of the eBay marketplace where the line item was listed. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/fulfillment/types/ba:MarketplaceIdEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setListingMarketplaceId($listing_marketplace_id)
    {
        $this->container['listing_marketplace_id'] = $listing_marketplace_id;

        return $this;
    }

    /**
     * Gets properties.
     *
     * @return \TNT\Ebay\Sell\Fulfillment\V1\Model\LineItemProperties|null
     */
    public function getProperties()
    {
        return $this->container['properties'];
    }

    /**
     * Sets properties.
     *
     * @param \TNT\Ebay\Sell\Fulfillment\V1\Model\LineItemProperties|null $properties properties
     *
     * @return self
     */
    public function setProperties($properties)
    {
        $this->container['properties'] = $properties;

        return $this;
    }

    /**
     * Gets purchase_marketplace_id.
     *
     * @return string|null
     */
    public function getPurchaseMarketplaceId()
    {
        return $this->container['purchase_marketplace_id'];
    }

    /**
     * Sets purchase_marketplace_id.
     *
     * @param string|null $purchase_marketplace_id The unique identifier of the eBay marketplace where the line item was listed. Often, the <strong>listingMarketplaceId</strong> and the <strong>purchaseMarketplaceId</strong> identifier are the same, but there are occasions when an item will surface on multiple eBay marketplaces. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/fulfillment/types/ba:MarketplaceIdEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setPurchaseMarketplaceId($purchase_marketplace_id)
    {
        $this->container['purchase_marketplace_id'] = $purchase_marketplace_id;

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
     * @param int|null $quantity The number of units of the line item in the order. These are represented as a group by a single <b>lineItemId</b>.
     *
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets refunds.
     *
     * @return \TNT\Ebay\Sell\Fulfillment\V1\Model\LineItemRefund[]|null
     */
    public function getRefunds()
    {
        return $this->container['refunds'];
    }

    /**
     * Sets refunds.
     *
     * @param \TNT\Ebay\Sell\Fulfillment\V1\Model\LineItemRefund[]|null $refunds This array is always returned, but is returned as an empty array unless the seller has submitted a partial or full refund to the buyer for the order. If a refund has occurred, the refund amount and refund date will be shown for each refund.
     *
     * @return self
     */
    public function setRefunds($refunds)
    {
        $this->container['refunds'] = $refunds;

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
     * @param string|null $sku Seller-defined Stock-Keeping Unit (SKU). This inventory identifier must be unique within the seller's eBay inventory. SKUs are optional when listing in the legacy/Trading API system, but SKUs are required when listing items through the Inventory API model.
     *
     * @return self
     */
    public function setSku($sku)
    {
        $this->container['sku'] = $sku;

        return $this;
    }

    /**
     * Gets sold_format.
     *
     * @return string|null
     */
    public function getSoldFormat()
    {
        return $this->container['sold_format'];
    }

    /**
     * Sets sold_format.
     *
     * @param string|null $sold_format The eBay listing type of the line item. The most common listing types are <code>AUCTION</code> and <code>FIXED_PRICE</code>. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/fulfillment/types/sel:SoldFormatEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setSoldFormat($sold_format)
    {
        $this->container['sold_format'] = $sold_format;

        return $this;
    }

    /**
     * Gets taxes.
     *
     * @return \TNT\Ebay\Sell\Fulfillment\V1\Model\Tax[]|null
     */
    public function getTaxes()
    {
        return $this->container['taxes'];
    }

    /**
     * Sets taxes.
     *
     * @param \TNT\Ebay\Sell\Fulfillment\V1\Model\Tax[]|null $taxes Contains a list of taxes applied to the line item, if any. This array is always returned, but will be returned as empty if no taxes are applicable to the line item.
     *
     * @return self
     */
    public function setTaxes($taxes)
    {
        $this->container['taxes'] = $taxes;

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
     * @param string|null $title the title of the listing
     *
     * @return self
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets total.
     *
     * @return \TNT\Ebay\Sell\Fulfillment\V1\Model\Amount|null
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total.
     *
     * @param \TNT\Ebay\Sell\Fulfillment\V1\Model\Amount|null $total total
     *
     * @return self
     */
    public function setTotal($total)
    {
        $this->container['total'] = $total;

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
