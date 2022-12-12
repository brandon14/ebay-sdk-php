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
 * EbayOfferDetailsWithKeys.
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
 * The version of the OpenAPI document: 1.16.1
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
 * EbayOfferDetailsWithKeys Class Doc Comment.
 *
 * @category Class
 * @description This type provides details of an offer, and is used by the base request payload of the &lt;strong&gt;createOffer&lt;/strong&gt; and &lt;strong&gt;bulkCreateOffer&lt;/strong&gt; methods.
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class EbayOfferDetailsWithKeys implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'EbayOfferDetailsWithKeys';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'available_quantity' => 'int',
        'category_id' => 'string',
        'charity' => '\TNT\Ebay\Sell\Inventory\V1\Model\Charity',
        'extended_producer_responsibility' => '\TNT\Ebay\Sell\Inventory\V1\Model\ExtendedProducerResponsibility',
        'format' => 'string',
        'hide_buyer_details' => 'bool',
        'include_catalog_product_details' => 'bool',
        'listing_description' => 'string',
        'listing_duration' => 'string',
        'listing_policies' => '\TNT\Ebay\Sell\Inventory\V1\Model\ListingPolicies',
        'listing_start_date' => 'string',
        'lot_size' => 'int',
        'marketplace_id' => 'string',
        'merchant_location_key' => 'string',
        'pricing_summary' => '\TNT\Ebay\Sell\Inventory\V1\Model\PricingSummary',
        'quantity_limit_per_buyer' => 'int',
        'secondary_category_id' => 'string',
        'sku' => 'string',
        'store_category_names' => 'string[]',
        'tax' => '\TNT\Ebay\Sell\Inventory\V1\Model\Tax',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'available_quantity' => 'int32',
        'category_id' => null,
        'charity' => null,
        'extended_producer_responsibility' => null,
        'format' => null,
        'hide_buyer_details' => null,
        'include_catalog_product_details' => null,
        'listing_description' => null,
        'listing_duration' => null,
        'listing_policies' => null,
        'listing_start_date' => null,
        'lot_size' => 'int32',
        'marketplace_id' => null,
        'merchant_location_key' => null,
        'pricing_summary' => null,
        'quantity_limit_per_buyer' => 'int32',
        'secondary_category_id' => null,
        'sku' => null,
        'store_category_names' => null,
        'tax' => null,
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
        'available_quantity' => 'availableQuantity',
        'category_id' => 'categoryId',
        'charity' => 'charity',
        'extended_producer_responsibility' => 'extendedProducerResponsibility',
        'format' => 'format',
        'hide_buyer_details' => 'hideBuyerDetails',
        'include_catalog_product_details' => 'includeCatalogProductDetails',
        'listing_description' => 'listingDescription',
        'listing_duration' => 'listingDuration',
        'listing_policies' => 'listingPolicies',
        'listing_start_date' => 'listingStartDate',
        'lot_size' => 'lotSize',
        'marketplace_id' => 'marketplaceId',
        'merchant_location_key' => 'merchantLocationKey',
        'pricing_summary' => 'pricingSummary',
        'quantity_limit_per_buyer' => 'quantityLimitPerBuyer',
        'secondary_category_id' => 'secondaryCategoryId',
        'sku' => 'sku',
        'store_category_names' => 'storeCategoryNames',
        'tax' => 'tax',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'available_quantity' => 'setAvailableQuantity',
        'category_id' => 'setCategoryId',
        'charity' => 'setCharity',
        'extended_producer_responsibility' => 'setExtendedProducerResponsibility',
        'format' => 'setFormat',
        'hide_buyer_details' => 'setHideBuyerDetails',
        'include_catalog_product_details' => 'setIncludeCatalogProductDetails',
        'listing_description' => 'setListingDescription',
        'listing_duration' => 'setListingDuration',
        'listing_policies' => 'setListingPolicies',
        'listing_start_date' => 'setListingStartDate',
        'lot_size' => 'setLotSize',
        'marketplace_id' => 'setMarketplaceId',
        'merchant_location_key' => 'setMerchantLocationKey',
        'pricing_summary' => 'setPricingSummary',
        'quantity_limit_per_buyer' => 'setQuantityLimitPerBuyer',
        'secondary_category_id' => 'setSecondaryCategoryId',
        'sku' => 'setSku',
        'store_category_names' => 'setStoreCategoryNames',
        'tax' => 'setTax',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'available_quantity' => 'getAvailableQuantity',
        'category_id' => 'getCategoryId',
        'charity' => 'getCharity',
        'extended_producer_responsibility' => 'getExtendedProducerResponsibility',
        'format' => 'getFormat',
        'hide_buyer_details' => 'getHideBuyerDetails',
        'include_catalog_product_details' => 'getIncludeCatalogProductDetails',
        'listing_description' => 'getListingDescription',
        'listing_duration' => 'getListingDuration',
        'listing_policies' => 'getListingPolicies',
        'listing_start_date' => 'getListingStartDate',
        'lot_size' => 'getLotSize',
        'marketplace_id' => 'getMarketplaceId',
        'merchant_location_key' => 'getMerchantLocationKey',
        'pricing_summary' => 'getPricingSummary',
        'quantity_limit_per_buyer' => 'getQuantityLimitPerBuyer',
        'secondary_category_id' => 'getSecondaryCategoryId',
        'sku' => 'getSku',
        'store_category_names' => 'getStoreCategoryNames',
        'tax' => 'getTax',
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
        $this->container['available_quantity'] = $data['available_quantity'] ?? null;
        $this->container['category_id'] = $data['category_id'] ?? null;
        $this->container['charity'] = $data['charity'] ?? null;
        $this->container['extended_producer_responsibility'] = $data['extended_producer_responsibility'] ?? null;
        $this->container['format'] = $data['format'] ?? null;
        $this->container['hide_buyer_details'] = $data['hide_buyer_details'] ?? null;
        $this->container['include_catalog_product_details'] = $data['include_catalog_product_details'] ?? null;
        $this->container['listing_description'] = $data['listing_description'] ?? null;
        $this->container['listing_duration'] = $data['listing_duration'] ?? null;
        $this->container['listing_policies'] = $data['listing_policies'] ?? null;
        $this->container['listing_start_date'] = $data['listing_start_date'] ?? null;
        $this->container['lot_size'] = $data['lot_size'] ?? null;
        $this->container['marketplace_id'] = $data['marketplace_id'] ?? null;
        $this->container['merchant_location_key'] = $data['merchant_location_key'] ?? null;
        $this->container['pricing_summary'] = $data['pricing_summary'] ?? null;
        $this->container['quantity_limit_per_buyer'] = $data['quantity_limit_per_buyer'] ?? null;
        $this->container['secondary_category_id'] = $data['secondary_category_id'] ?? null;
        $this->container['sku'] = $data['sku'] ?? null;
        $this->container['store_category_names'] = $data['store_category_names'] ?? null;
        $this->container['tax'] = $data['tax'] ?? null;
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
     * Gets available_quantity.
     *
     * @return int|null
     */
    public function getAvailableQuantity()
    {
        return $this->container['available_quantity'];
    }

    /**
     * Sets available_quantity.
     *
     * @param int|null $available_quantity This integer value sets the quantity of the inventory item (specified by the <strong>sku</strong> value) that will be available for purchase by buyers shopping on the eBay site specified in the <strong>marketplaceId</strong> field. Quantity must be set to <code>1</code> or more in order for the inventory item to be purchasable, but this field is not necessarily required, even for published offers, if the general quantity of the inventory item has already been set in the inventory item record.<br/><br/> For auction listings, this value must be <code>1</code>.
     *
     * @return self
     */
    public function setAvailableQuantity($available_quantity)
    {
        $this->container['available_quantity'] = $available_quantity;

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
     * @param string|null $category_id The unique identifier of the eBay category that the product will be listed under. This field is not immediately required upon creating an offer, but will be required before publishing the offer. Sellers can use the <a href=\"https://developer.ebay.com/api-docs/commerce/taxonomy/resources/category_tree/methods/getCategorySuggestions\" target=\"_blank\">getCategorySuggestions</a> method of the Taxonomy API to retrieve suggested category ID values. The seller passes in a query string like \"<em>iPhone 6</em>\", and category ID values for suggested categories are returned in the response.
     *
     * @return self
     */
    public function setCategoryId($category_id)
    {
        $this->container['category_id'] = $category_id;

        return $this;
    }

    /**
     * Gets charity.
     *
     * @return \TNT\Ebay\Sell\Inventory\V1\Model\Charity|null
     */
    public function getCharity()
    {
        return $this->container['charity'];
    }

    /**
     * Sets charity.
     *
     * @param \TNT\Ebay\Sell\Inventory\V1\Model\Charity|null $charity charity
     *
     * @return self
     */
    public function setCharity($charity)
    {
        $this->container['charity'] = $charity;

        return $this;
    }

    /**
     * Gets extended_producer_responsibility.
     *
     * @return \TNT\Ebay\Sell\Inventory\V1\Model\ExtendedProducerResponsibility|null
     */
    public function getExtendedProducerResponsibility()
    {
        return $this->container['extended_producer_responsibility'];
    }

    /**
     * Sets extended_producer_responsibility.
     *
     * @param \TNT\Ebay\Sell\Inventory\V1\Model\ExtendedProducerResponsibility|null $extended_producer_responsibility extended_producer_responsibility
     *
     * @return self
     */
    public function setExtendedProducerResponsibility($extended_producer_responsibility)
    {
        $this->container['extended_producer_responsibility'] = $extended_producer_responsibility;

        return $this;
    }

    /**
     * Gets format.
     *
     * @return string|null
     */
    public function getFormat()
    {
        return $this->container['format'];
    }

    /**
     * Sets format.
     *
     * @param string|null $format This enumerated value indicates the listing format of the offer. <br/><br/>Supported values are <code>FIXED_PRICE</code> and <code>AUCTION</code>. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/inventory/types/slr:FormatTypeEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setFormat($format)
    {
        $this->container['format'] = $format;

        return $this;
    }

    /**
     * Gets hide_buyer_details.
     *
     * @return bool|null
     */
    public function getHideBuyerDetails()
    {
        return $this->container['hide_buyer_details'];
    }

    /**
     * Sets hide_buyer_details.
     *
     * @param bool|null $hide_buyer_details This field is included and set to <code>true</code> if the seller wishes to create a private listing. <br><br> Sellers may want to use this option when they believe that a listing's potential bidders/buyers would not want their obfuscated user IDs (and feedback scores) exposed to other users.
     *
     * @return self
     */
    public function setHideBuyerDetails($hide_buyer_details)
    {
        $this->container['hide_buyer_details'] = $hide_buyer_details;

        return $this;
    }

    /**
     * Gets include_catalog_product_details.
     *
     * @return bool|null
     */
    public function getIncludeCatalogProductDetails()
    {
        return $this->container['include_catalog_product_details'];
    }

    /**
     * Sets include_catalog_product_details.
     *
     * @param bool|null $include_catalog_product_details This field indicates whether or not eBay product catalog details are applied to a listing. A value of <code>true</code> indicates the listing corresponds to the eBay product associated with the provided product identifier. The product identifier is provided in <strong>createOrReplaceInventoryItem</strong>.<br/><br/> <strong>Default:</strong> true<p><span class=\"tablenote\"><strong>Note:</strong> Though the <strong>includeCatalogProductDetails</strong> parameter is not required to be submitted in the request, the parameter defaults to <code>true</code> if omitted.</span></p>
     *
     * @return self
     */
    public function setIncludeCatalogProductDetails($include_catalog_product_details)
    {
        $this->container['include_catalog_product_details'] = $include_catalog_product_details;

        return $this;
    }

    /**
     * Gets listing_description.
     *
     * @return string|null
     */
    public function getListingDescription()
    {
        return $this->container['listing_description'];
    }

    /**
     * Sets listing_description.
     *
     * @param string|null $listing_description The text in this field is (published offers), or will become (unpublished offers) the description of the eBay listing. This field is not immediately required for an unpublished offer, but will be required before publishing the offer. Note that if the <strong>listingDescription</strong> field was omitted in the <strong>createOffer</strong> call for the offer, the offer entity should have picked up the text provided in the <strong>product.description</strong> field of the inventory item record, or if the inventory item is part of a group, the offer entity should have picked up the text provided in the <strong>description</strong> field of the inventory item group record.<br/><br/>HTML tags and markup can be used in listing descriptions, but each character counts toward the max length limit.<br/><br/><span class=\"tablenote\"> <strong>Note:</strong> To ensure that their short listing description is optimized when viewed on mobile devices, sellers should strongly consider using eBay's <a href=\"https://pages.ebay.com/sell/itemdescription/customizeyoursummary.html\" target=\"_blank\">View Item description summary feature</a> when listing their items. Keep in mind that the 'short' listing description is what prospective buyers first see when they view the listing on a mobile device. The 'full' listing description is also available to mobile users when they click on the short listing description, but the full description is not automatically optimized for viewing in mobile devices, and many users won't even drill down to the full description.<br><br> Using HTML div and span tag attributes, this feature allows sellers to customize and fully control the short listing description that is displayed to prospective buyers when viewing the listing on a mobile device. The short listing description on mobile devices is limited to 800 characters, and whenever the full listing description (provided in this field, in UI, or seller tool) exceeds this limit, eBay uses a special algorithm to derive the best possible short listing description within the 800-character limit. However, due to some short listing description content being removed, it is definitely not ideal for the seller, and could lead to a bad buyer experience and possibly to a Significantly not as described (SNAD) case, since the buyer may not get complete details on the item when viewing the short listing description. See the eBay help page for more details on using the HTML div and span tags.</span><br><br><strong>Max length</strong>: 500000 (which includes HTML markup/tags)
     *
     * @return self
     */
    public function setListingDescription($listing_description)
    {
        $this->container['listing_description'] = $listing_description;

        return $this;
    }

    /**
     * Gets listing_duration.
     *
     * @return string|null
     */
    public function getListingDuration()
    {
        return $this->container['listing_duration'];
    }

    /**
     * Sets listing_duration.
     *
     * @param string|null $listing_duration This field indicates the number of days that the listing will be active. For fixed-price listings, this value must be set to <code>GTC</code>, but auction listings support different listing durations.<br /><br /> The GTC (Good 'Til Cancelled) listings are automatically renewed each calendar month until the seller decides to end the listing.<br /><br /><span class=\"tablenote\"> <strong>Note:</strong> If the listing duration expires for an auction offer without a winning bidder, the listing then becomes available as a fixed-price offer and listing duration will be <code>GTC</code>.</span> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/inventory/types/slr:ListingDurationEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setListingDuration($listing_duration)
    {
        $this->container['listing_duration'] = $listing_duration;

        return $this;
    }

    /**
     * Gets listing_policies.
     *
     * @return \TNT\Ebay\Sell\Inventory\V1\Model\ListingPolicies|null
     */
    public function getListingPolicies()
    {
        return $this->container['listing_policies'];
    }

    /**
     * Sets listing_policies.
     *
     * @param \TNT\Ebay\Sell\Inventory\V1\Model\ListingPolicies|null $listing_policies listing_policies
     *
     * @return self
     */
    public function setListingPolicies($listing_policies)
    {
        $this->container['listing_policies'] = $listing_policies;

        return $this;
    }

    /**
     * Gets listing_start_date.
     *
     * @return string|null
     */
    public function getListingStartDate()
    {
        return $this->container['listing_start_date'];
    }

    /**
     * Sets listing_start_date.
     *
     * @param string|null $listing_start_date This field can be used if the seller wants to specify a time in the future that the listing will become active on eBay. The timestamp supplied in this field should be in UTC format, and it should be far enough in the future so that the seller will have enought time to publish the listing with the <strong>publishOffer</strong> method.<br><br> This field is optional. If this field is not provided, the listing starts immediately after a successful <strong>publishOffer</strong> method.
     *
     * @return self
     */
    public function setListingStartDate($listing_start_date)
    {
        $this->container['listing_start_date'] = $listing_start_date;

        return $this;
    }

    /**
     * Gets lot_size.
     *
     * @return int|null
     */
    public function getLotSize()
    {
        return $this->container['lot_size'];
    }

    /**
     * Sets lot_size.
     *
     * @param int|null $lot_size This field is only applicable if the listing is a lot listing. A lot listing is a listing that has multiple quantity of the same item, such as four identical tires being sold as a single offer, or it can be a mixed lot of similar items, such as used clothing items or an assortment of baseball cards. Whether the lot listing involved identical items or a mixed lot, the integer value passed into this field is the total number of items in the lot. Lots can be used for auction and fixed-price listings.
     *
     * @return self
     */
    public function setLotSize($lot_size)
    {
        $this->container['lot_size'] = $lot_size;

        return $this;
    }

    /**
     * Gets marketplace_id.
     *
     * @return string|null
     */
    public function getMarketplaceId()
    {
        return $this->container['marketplace_id'];
    }

    /**
     * Sets marketplace_id.
     *
     * @param string|null $marketplace_id This enumeration value is the unique identifier of the eBay site for which the offer will be made available. See <strong>MarketplaceEnum</strong> for the list of supported enumeration values. This field is required. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/inventory/types/slr:MarketplaceEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setMarketplaceId($marketplace_id)
    {
        $this->container['marketplace_id'] = $marketplace_id;

        return $this;
    }

    /**
     * Gets merchant_location_key.
     *
     * @return string|null
     */
    public function getMerchantLocationKey()
    {
        return $this->container['merchant_location_key'];
    }

    /**
     * Sets merchant_location_key.
     *
     * @param string|null $merchant_location_key The unique identifier of a merchant's inventory location (where the inventory item in the offer is located). A <strong>merchantLocationKey</strong> value is established when the merchant creates an inventory location using the <strong>createInventoryLocation</strong> call. To get more information about inventory locations, the <strong>getInventoryLocation</strong> call can be used.<br/><br/>This field is not initially required upon first creating an offer, but will become required before an offer can be published.<br/><br/><b>Max length</b>: 36
     *
     * @return self
     */
    public function setMerchantLocationKey($merchant_location_key)
    {
        $this->container['merchant_location_key'] = $merchant_location_key;

        return $this;
    }

    /**
     * Gets pricing_summary.
     *
     * @return \TNT\Ebay\Sell\Inventory\V1\Model\PricingSummary|null
     */
    public function getPricingSummary()
    {
        return $this->container['pricing_summary'];
    }

    /**
     * Sets pricing_summary.
     *
     * @param \TNT\Ebay\Sell\Inventory\V1\Model\PricingSummary|null $pricing_summary pricing_summary
     *
     * @return self
     */
    public function setPricingSummary($pricing_summary)
    {
        $this->container['pricing_summary'] = $pricing_summary;

        return $this;
    }

    /**
     * Gets quantity_limit_per_buyer.
     *
     * @return int|null
     */
    public function getQuantityLimitPerBuyer()
    {
        return $this->container['quantity_limit_per_buyer'];
    }

    /**
     * Sets quantity_limit_per_buyer.
     *
     * @param int|null $quantity_limit_per_buyer This field is only applicable and set if the seller wishes to set a restriction on the purchase quantity per seller. If this field is set by the seller for the offer, then each distinct buyer may purchase up to, but not exceed the quantity specified for this field. So, if this field's value is <code>5</code>, each buyer may purchase between one to five of these products, and the purchases can occur in one multiple-quantity purchase, or over multiple transactions. If a buyer attempts to purchase one or more of these products, and the cumulative quantity will take the buyer beyond the quantity limit, that buyer will be blocked from that purchase. <br/>
     *
     * @return self
     */
    public function setQuantityLimitPerBuyer($quantity_limit_per_buyer)
    {
        $this->container['quantity_limit_per_buyer'] = $quantity_limit_per_buyer;

        return $this;
    }

    /**
     * Gets secondary_category_id.
     *
     * @return string|null
     */
    public function getSecondaryCategoryId()
    {
        return $this->container['secondary_category_id'];
    }

    /**
     * Sets secondary_category_id.
     *
     * @param string|null $secondary_category_id The unique identifier for a secondary category. This field is applicable if the seller decides to list the item under two categories. Sellers can use the <a href=\"/api-docs/commerce/taxonomy/resources/category_tree/methods/getCategorySuggestions\" target=\"_blank\">getCategorySuggestions</a> method of the Taxonomy API to retrieve suggested category ID values. A fee may be charged when adding a secondary category to a listing. <br/><br/><span class=\"tablenote\"><strong>Note:</strong> You cannot list <strong>US eBay Motors</strong> vehicles in two categories. However, you can list <strong>Parts & Accessories</strong> in two categories.</span>
     *
     * @return self
     */
    public function setSecondaryCategoryId($secondary_category_id)
    {
        $this->container['secondary_category_id'] = $secondary_category_id;

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
     * @param string|null $sku This is the seller-defined SKU value of the product that will be listed on the eBay site (specified in the <strong>marketplaceId</strong> field). Only one offer (in unpublished or published state) may exist for each <strong>sku</strong>/<strong>marketplaceId</strong>/<strong>format</strong> combination. This field is required.<br/><br/><strong>Max Length</strong>: 50<br/>
     *
     * @return self
     */
    public function setSku($sku)
    {
        $this->container['sku'] = $sku;

        return $this;
    }

    /**
     * Gets store_category_names.
     *
     * @return string[]|null
     */
    public function getStoreCategoryNames()
    {
        return $this->container['store_category_names'];
    }

    /**
     * Sets store_category_names.
     *
     * @param string[]|null $store_category_names This container is used if the seller would like to place the inventory item into one or two eBay store categories that the seller has set up for their eBay store. The string value(s) passed in to this container will be the full path(s) to the eBay store categories, as shown below:<br> <pre><code>\"storeCategoryNames\": [<br/> \"/Fashion/Men/Shirts\", <br/> \"/Fashion/Men/Accessories\" ], </pre></code>
     *
     * @return self
     */
    public function setStoreCategoryNames($store_category_names)
    {
        $this->container['store_category_names'] = $store_category_names;

        return $this;
    }

    /**
     * Gets tax.
     *
     * @return \TNT\Ebay\Sell\Inventory\V1\Model\Tax|null
     */
    public function getTax()
    {
        return $this->container['tax'];
    }

    /**
     * Sets tax.
     *
     * @param \TNT\Ebay\Sell\Inventory\V1\Model\Tax|null $tax tax
     *
     * @return self
     */
    public function setTax($tax)
    {
        $this->container['tax'] = $tax;

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
