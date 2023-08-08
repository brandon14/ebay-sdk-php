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
 * EbayOfferDetailsWithAll.
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

use TNT\Ebay\Sell\Inventory\V1\ObjectSerializer;

/**
 * EbayOfferDetailsWithAll Class Doc Comment.
 *
 * @category Class
 *
 * @description This type provides details of an offer, and is used by the response payloads of the &lt;strong&gt;getOffer&lt;/strong&gt; and the &lt;strong&gt;getOffers&lt;/strong&gt; calls.
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
class EbayOfferDetailsWithAll implements ModelInterface, \ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'EbayOfferDetailsWithAll';

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
        'listing' => '\TNT\Ebay\Sell\Inventory\V1\Model\ListingDetails',
        'listing_description' => 'string',
        'listing_duration' => 'string',
        'listing_policies' => '\TNT\Ebay\Sell\Inventory\V1\Model\ListingPolicies',
        'listing_start_date' => 'string',
        'lot_size' => 'int',
        'marketplace_id' => 'string',
        'merchant_location_key' => 'string',
        'offer_id' => 'string',
        'pricing_summary' => '\TNT\Ebay\Sell\Inventory\V1\Model\PricingSummary',
        'quantity_limit_per_buyer' => 'int',
        'secondary_category_id' => 'string',
        'sku' => 'string',
        'status' => 'string',
        'store_category_names' => 'string[]',
        'tax' => '\TNT\Ebay\Sell\Inventory\V1\Model\Tax',
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
        'available_quantity' => 'int32',
        'category_id' => null,
        'charity' => null,
        'extended_producer_responsibility' => null,
        'format' => null,
        'hide_buyer_details' => null,
        'include_catalog_product_details' => null,
        'listing' => null,
        'listing_description' => null,
        'listing_duration' => null,
        'listing_policies' => null,
        'listing_start_date' => null,
        'lot_size' => 'int32',
        'marketplace_id' => null,
        'merchant_location_key' => null,
        'offer_id' => null,
        'pricing_summary' => null,
        'quantity_limit_per_buyer' => 'int32',
        'secondary_category_id' => null,
        'sku' => null,
        'status' => null,
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
        'listing' => 'listing',
        'listing_description' => 'listingDescription',
        'listing_duration' => 'listingDuration',
        'listing_policies' => 'listingPolicies',
        'listing_start_date' => 'listingStartDate',
        'lot_size' => 'lotSize',
        'marketplace_id' => 'marketplaceId',
        'merchant_location_key' => 'merchantLocationKey',
        'offer_id' => 'offerId',
        'pricing_summary' => 'pricingSummary',
        'quantity_limit_per_buyer' => 'quantityLimitPerBuyer',
        'secondary_category_id' => 'secondaryCategoryId',
        'sku' => 'sku',
        'status' => 'status',
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
        'listing' => 'setListing',
        'listing_description' => 'setListingDescription',
        'listing_duration' => 'setListingDuration',
        'listing_policies' => 'setListingPolicies',
        'listing_start_date' => 'setListingStartDate',
        'lot_size' => 'setLotSize',
        'marketplace_id' => 'setMarketplaceId',
        'merchant_location_key' => 'setMerchantLocationKey',
        'offer_id' => 'setOfferId',
        'pricing_summary' => 'setPricingSummary',
        'quantity_limit_per_buyer' => 'setQuantityLimitPerBuyer',
        'secondary_category_id' => 'setSecondaryCategoryId',
        'sku' => 'setSku',
        'status' => 'setStatus',
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
        'listing' => 'getListing',
        'listing_description' => 'getListingDescription',
        'listing_duration' => 'getListingDuration',
        'listing_policies' => 'getListingPolicies',
        'listing_start_date' => 'getListingStartDate',
        'lot_size' => 'getLotSize',
        'marketplace_id' => 'getMarketplaceId',
        'merchant_location_key' => 'getMerchantLocationKey',
        'offer_id' => 'getOfferId',
        'pricing_summary' => 'getPricingSummary',
        'quantity_limit_per_buyer' => 'getQuantityLimitPerBuyer',
        'secondary_category_id' => 'getSecondaryCategoryId',
        'sku' => 'getSku',
        'status' => 'getStatus',
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
        $this->container['listing'] = $data['listing'] ?? null;
        $this->container['listing_description'] = $data['listing_description'] ?? null;
        $this->container['listing_duration'] = $data['listing_duration'] ?? null;
        $this->container['listing_policies'] = $data['listing_policies'] ?? null;
        $this->container['listing_start_date'] = $data['listing_start_date'] ?? null;
        $this->container['lot_size'] = $data['lot_size'] ?? null;
        $this->container['marketplace_id'] = $data['marketplace_id'] ?? null;
        $this->container['merchant_location_key'] = $data['merchant_location_key'] ?? null;
        $this->container['offer_id'] = $data['offer_id'] ?? null;
        $this->container['pricing_summary'] = $data['pricing_summary'] ?? null;
        $this->container['quantity_limit_per_buyer'] = $data['quantity_limit_per_buyer'] ?? null;
        $this->container['secondary_category_id'] = $data['secondary_category_id'] ?? null;
        $this->container['sku'] = $data['sku'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
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
     * @param int|null $available_quantity This integer value indicates the quantity of the inventory item (specified by the <strong>sku</strong> value) that will be available for purchase by buyers shopping on the eBay site specified in the <strong>marketplaceId</strong> field. For unpublished offers where the available quantity has yet to be set, the <strong>availableQuantity</strong> value is set to <code>0</code>.
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
     * @param string|null $category_id The unique identifier of the primary eBay category that the inventory item is listed under. This field is always returned for published offers, but is only returned if set for unpublished offers.
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
     * @param string|null $format This enumerated value indicates the listing format of the offer. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/inventory/types/slr:FormatTypeEnum'>eBay API documentation</a>
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
     * @param bool|null $hide_buyer_details This field is returned as <code>true</code> if the private listing feature has been enabled for the offer. Sellers may want to use this feature when they believe that a listing's potential bidders/buyers would not want their obfuscated user IDs (and feedback scores) exposed to other users. <br><br> This field is always returned even if not explicitly set in the offer. It defaults to <code>false</code>, so will get returned as <code>false</code> if seller does not set this feature with a 'Create' or 'Update' offer method.
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
     * @param bool|null $include_catalog_product_details This field indicates whether or not eBay product catalog details are applied to a listing. A value of <code>true</code> indicates the listing corresponds to the eBay product associated with the provided product identifier. The product identifier is provided in <strong>createOrReplaceInventoryItem</strong>.<p><span class=\"tablenote\"><strong>Note:</strong> Though the <strong>includeCatalogProductDetails</strong> parameter is not required to be submitted in the request, the parameter defaults to 'true' if omitted.</span></p>
     *
     * @return self
     */
    public function setIncludeCatalogProductDetails($include_catalog_product_details)
    {
        $this->container['include_catalog_product_details'] = $include_catalog_product_details;

        return $this;
    }

    /**
     * Gets listing.
     *
     * @return \TNT\Ebay\Sell\Inventory\V1\Model\ListingDetails|null
     */
    public function getListing()
    {
        return $this->container['listing'];
    }

    /**
     * Sets listing.
     *
     * @param \TNT\Ebay\Sell\Inventory\V1\Model\ListingDetails|null $listing listing
     *
     * @return self
     */
    public function setListing($listing)
    {
        $this->container['listing'] = $listing;

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
     * @param string|null $listing_description The description of the eBay listing that is part of the unpublished or published offer. This field is always returned for published offers, but is only returned if set for unpublished offers.<br/><br/><strong>Max Length</strong>: 500000 (which includes HTML markup/tags)
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
     * @param string|null $listing_duration This field indicates the number of days that the listing will be active.<br /><br />This field is returned for both auction and fixed-price listings; however, the value returned for fixed-price listings will always be <code>GTC</code>. The GTC (Good 'Til Cancelled) listings are automatically renewed each calendar month until the seller decides to end the listing.<br /><br /><span class=\"tablenote\"> <strong>Note:</strong> If the listing duration expires for an auction offer, the listing then becomes available as a fixed-price offer and will be GTC.</span> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/inventory/types/slr:ListingDurationEnum'>eBay API documentation</a>
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
     * @param string|null $listing_start_date This timestamp is the date/time that the seller set for the scheduled listing. With the scheduled listing feature, the seller can set a time in the future that the listing will become active, instead of the listing becoming active immediately after a <strong>publishOffer</strong> call. <br><br> Scheduled listings do not always start at the exact date/time specified by the seller, but the date/time of the timestamp returned in <strong>getOffer</strong>/<strong>getOffers</strong> will be the same as the timestamp passed into a 'Create' or 'Update' offer call. <br><br> This field is returned if set for an offer.
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
     * @param int|null $lot_size This field is only applicable and returned if the listing is a lot listing. A lot listing is a listing that has multiple quantity of the same product. An example would be a set of four identical car tires. The integer value in this field is the number of identical items being sold through the lot listing.
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
     * @param string|null $marketplace_id This enumeration value is the unique identifier of the eBay site on which the offer is available, or will be made available. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/inventory/types/slr:MarketplaceEnum'>eBay API documentation</a>
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
     * @param string|null $merchant_location_key The unique identifier of the inventory location. This identifier is set up by the merchant when the inventory location is first created with the <strong>createInventoryLocation</strong> call. Once this value is set for an inventory location, it can not be modified. To get more information about this inventory location, the <strong>getInventoryLocation</strong> call can be used, passing in this value at the end of the call URI.<br/><br/>This field is always returned for published offers, but is only returned if set for unpublished offers.<br/><br/><b>Max length</b>: 36
     *
     * @return self
     */
    public function setMerchantLocationKey($merchant_location_key)
    {
        $this->container['merchant_location_key'] = $merchant_location_key;

        return $this;
    }

    /**
     * Gets offer_id.
     *
     * @return string|null
     */
    public function getOfferId()
    {
        return $this->container['offer_id'];
    }

    /**
     * Sets offer_id.
     *
     * @param string|null $offer_id The unique identifier of the offer. This identifier is used in many offer-related calls, and it is also used in the <strong>bulkUpdatePriceQuantity</strong> call.
     *
     * @return self
     */
    public function setOfferId($offer_id)
    {
        $this->container['offer_id'] = $offer_id;

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
     * @param int|null $quantity_limit_per_buyer This field is only applicable and set if the seller wishes to set a restriction on the purchase quantity of an inventory item per seller. If this field is set by the seller for the offer, then each distinct buyer may purchase up to, but not exceed the quantity in this field. So, if this field's value is <code>5</code>, each buyer may purchase a quantity of the inventory item between one and five, and the purchases can occur in one multiple-quantity purchase, or over multiple transactions. If a buyer attempts to purchase one or more of these products, and the cumulative quantity will take the buyer beyond the quantity limit, that buyer will be blocked from that purchase.<br/>
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
     * @param string|null $sku This is the seller-defined SKU value of the product in the offer.<br/><br/><strong>Max Length</strong>: 50 <br/>
     *
     * @return self
     */
    public function setSku($sku)
    {
        $this->container['sku'] = $sku;

        return $this;
    }

    /**
     * Gets status.
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status.
     *
     * @param string|null $status The enumeration value in this field specifies the status of the offer - either <code>PUBLISHED</code> or <code>UNPUBLISHED</code>. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/inventory/types/slr:OfferStatusEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

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
     * @param string[]|null $store_category_names This container is returned if the seller chose to place the inventory item into one or two eBay store categories that the seller has set up for their eBay store. The string value(s) in this container will be the full path(s) to the eBay store categories, as shown below:<br> <pre><code>\"storeCategoryNames\": [<br/> \"/Fashion/Men/Shirts\", <br/> \"/Fashion/Men/Accessories\" ], </pre></code>
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
