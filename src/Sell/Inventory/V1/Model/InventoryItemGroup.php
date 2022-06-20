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
 * InventoryItemGroup.
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
 * InventoryItemGroup Class Doc Comment.
 *
 * @category Class
 * @description This type is used by the base request payload of the &lt;strong&gt;createOrReplaceInventoryItemGroup&lt;/strong&gt; call and the base response payload of the &lt;strong&gt;getInventoryItemGroup&lt;/strong&gt; call.
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class InventoryItemGroup implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'InventoryItemGroup';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'aspects' => 'string',
        'description' => 'string',
        'image_urls' => 'string[]',
        'inventory_item_group_key' => 'string',
        'subtitle' => 'string',
        'title' => 'string',
        'variant_skus' => 'string[]',
        'varies_by' => '\TNT\Ebay\Sell\Inventory\V1\Model\VariesBy',
        'video_ids' => 'string[]',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'aspects' => null,
        'description' => null,
        'image_urls' => null,
        'inventory_item_group_key' => null,
        'subtitle' => null,
        'title' => null,
        'variant_skus' => null,
        'varies_by' => null,
        'video_ids' => null,
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
        'aspects' => 'aspects',
        'description' => 'description',
        'image_urls' => 'imageUrls',
        'inventory_item_group_key' => 'inventoryItemGroupKey',
        'subtitle' => 'subtitle',
        'title' => 'title',
        'variant_skus' => 'variantSKUs',
        'varies_by' => 'variesBy',
        'video_ids' => 'videoIds',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'aspects' => 'setAspects',
        'description' => 'setDescription',
        'image_urls' => 'setImageUrls',
        'inventory_item_group_key' => 'setInventoryItemGroupKey',
        'subtitle' => 'setSubtitle',
        'title' => 'setTitle',
        'variant_skus' => 'setVariantSkus',
        'varies_by' => 'setVariesBy',
        'video_ids' => 'setVideoIds',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'aspects' => 'getAspects',
        'description' => 'getDescription',
        'image_urls' => 'getImageUrls',
        'inventory_item_group_key' => 'getInventoryItemGroupKey',
        'subtitle' => 'getSubtitle',
        'title' => 'getTitle',
        'variant_skus' => 'getVariantSkus',
        'varies_by' => 'getVariesBy',
        'video_ids' => 'getVideoIds',
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
        $this->container['aspects'] = $data['aspects'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['image_urls'] = $data['image_urls'] ?? null;
        $this->container['inventory_item_group_key'] = $data['inventory_item_group_key'] ?? null;
        $this->container['subtitle'] = $data['subtitle'] ?? null;
        $this->container['title'] = $data['title'] ?? null;
        $this->container['variant_skus'] = $data['variant_skus'] ?? null;
        $this->container['varies_by'] = $data['varies_by'] ?? null;
        $this->container['video_ids'] = $data['video_ids'] ?? null;
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
     * Gets aspects.
     *
     * @return string|null
     */
    public function getAspects()
    {
        return $this->container['aspects'];
    }

    /**
     * Sets aspects.
     *
     * @param string|null $aspects This is a collection of item specifics (aka product aspects) name-value pairs that are shared by all product variations within the inventory item group. Common aspects for the inventory item group are not immediately required upon creating an inventory item group, but these aspects will be required before the first offer of the group is published. Common aspects for a men's t-shirt might be pattern and sleeve length. Below is an example of the proper JSON syntax to use when manually inputting item specifics. Note that one item specific name, such as 'Features', can have more than one value. If an item specific name has more than one value, each value is delimited with a comma.<br/> <pre><code>\"aspects\": {<br/> \"pattern\": [\"solid\"],<br/> \"sleeves\": [\"short\"]<br/> }</code></pre>This container is always returned if one or more offers associated with the inventory item group have been published, and is only returned if set for an inventory item group if that group has yet to have any offers published.<br/>
     *
     * @return self
     */
    public function setAspects($aspects)
    {
        $this->container['aspects'] = $aspects;

        return $this;
    }

    /**
     * Gets description.
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description.
     *
     * @param string|null $description The description of the inventory item group. This description should fully describe the product and the variations of the product that are available in the inventory item group, since this description will ultimately become the listing description once the first offer of the group is published. This field is not initially required when first creating an inventory item group, but will be required before the first offer of the group is published. <br><br><span class=\"tablenote\"> <strong>Note:</strong> Since this description will ultimately  become the listing description in a multiple-variation listing, the seller should omit the <strong>listingDescription</strong> field when creating the offers for each variation. If they include the <strong>listingDescription</strong> field for the individual offer(s) in an item group, the text in that field for a published offer will overwrite the text provided in this <strong>description</strong> field for the inventory item group.</span><br/><br/>HTML tags and markup can be used in this field, but each character counts toward the max length limit.<br/><br/><span class=\"tablenote\"> <strong>Note:</strong> To ensure that their short listing description is optimized when viewed on mobile devices, sellers should strongly consider using eBay's <a href=\"https://pages.ebay.com/sell/itemdescription/customizeyoursummary.html\" target=\"_blank\">View Item description summary feature</a> when listing their items. Keep in mind that the 'short' listing description is what prospective buyers first see when they view the listing on a mobile device. The 'full' listing description is also available to mobile users when they click on the short listing description, but the full description is not automatically optimized for viewing in mobile devices, and many users won't even drill down to the full description.<br><br> Using HTML div and span tag attributes, this feature allows sellers to customize and fully control the short listing description that is displayed to prospective buyers when viewing the listing on a mobile device. The short listing description on mobile devices is limited to 800 characters, and whenever the full listing description (provided in this field, in UI, or seller tool) exceeds this limit, eBay uses a special algorithm to derive the best possible short listing description within the 800-character limit. However, due to some short listing description content being removed, it is definitely not ideal for the seller, and could lead to a bad buyer experience and possibly to a Significantly not as described (SNAD) case, since the buyer may not get complete details on the item when viewing the short listing description. See the eBay help page for more details on using the HTML div and span tags.</span><br/><br/>This field is always returned if one or more offers associated with the inventory item group have been published, and is only returned if set for an inventory item group if that group has yet to have any offers published.<br/><br/><strong>Max Length</strong>: 500000 (which includes HTML markup/tags)<br>
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets image_urls.
     *
     * @return string[]|null
     */
    public function getImageUrls()
    {
        return $this->container['image_urls'];
    }

    /**
     * Sets image_urls.
     *
     * @param string[]|null $image_urls An array of one or more links to images for the inventory item group. URLs must use the \"HTTPS\" protocol. Images can be self-hosted by the seller, or sellers can use the <a href=\"https://developer.ebay.com/Devzone/XML/docs/Reference/eBay/UploadSiteHostedPictures.html\" target=\"_blank\">UploadSiteHostedPictures</a> call of the Trading API to upload images to an eBay Picture Server. If successful, the response of the <a href=\"https://developer.ebay.com/Devzone/XML/docs/Reference/eBay/UploadSiteHostedPictures.html\" target=\"_blank\">UploadSiteHostedPictures</a> call will contain a full URL to the image on an eBay Picture Server. This is the URL that will be passed in through the <strong>imageUrls</strong> array. <br/><br/> Before any offer can be published, at least one image must exist for the offer. Links to images can either be passed in through this <strong>imageUrls</strong> container, or they can be passed in through the <strong>product.imageUrls</strong> container when creating each inventory item in the group. If the <strong>variesBy.aspectsImageVariesBy</strong> field is used to specify the main product aspect where the variations vary, the links to the images must be passed in through this <strong>imageUrls</strong> container, and there should be a picture for each variation. So, if the <strong>variesBy.aspectsImageVariesBy</strong> field is set to <code>Color</code>, a link should be included to an image demonstrating each available color in the group.<br><br> Most eBay sites support up to 12 pictures free of charge, and eBay Motors listings can have up to 24 pictures.<br/><br/> This container will always be returned for an inventory item group that has at least one published offer since a published offer will always have at least one picture, but this container will only be returned if defined for inventory item groups that have yet to have any published offers.
     *
     * @return self
     */
    public function setImageUrls($image_urls)
    {
        $this->container['image_urls'] = $image_urls;

        return $this;
    }

    /**
     * Gets inventory_item_group_key.
     *
     * @return string|null
     */
    public function getInventoryItemGroupKey()
    {
        return $this->container['inventory_item_group_key'];
    }

    /**
     * Sets inventory_item_group_key.
     *
     * @param string|null $inventory_item_group_key This is the unique identifier of the inventory item group. This identifier is created by the seller when an inventory item group is created. This field is only applicable to the <strong>getInventoryItemGroup</strong> call and not to the <strong>createOrReplaceInventoryItemGroup</strong> call. In the <strong>createOrReplaceInventoryItemGroup</strong> call, the <strong>inventoryItemGroupKey</strong> value is passed into the end of the call URI instead.
     *
     * @return self
     */
    public function setInventoryItemGroupKey($inventory_item_group_key)
    {
        $this->container['inventory_item_group_key'] = $inventory_item_group_key;

        return $this;
    }

    /**
     * Gets subtitle.
     *
     * @return string|null
     */
    public function getSubtitle()
    {
        return $this->container['subtitle'];
    }

    /**
     * Sets subtitle.
     *
     * @param string|null $subtitle A subtitle is an optional listing feature that allows the seller to provide more information about the product, possibly including keywords that may assist with search results. An additional listing fee will be charged to the seller if a subtitle is used. For more information on using listing subtitles on the US site, see the <a href=\"https://pages.ebay.com/help/sell/itemsubtitle.html\" target=\"_blank\">Adding a subtitle to your listings</a> help page. <br><br><span class=\"tablenote\"> <strong>Note:</strong> Since this subtitle will ultimately  become the subtitle in a multiple-variation listing, the seller should not include the <strong>subtitle</strong> field when creating the inventory items that are members of the group. If they do include the <strong>subtitle</strong> field in an inventory item record, the text in that field will overwrite the text provided in this <strong>subtitle</strong> field for each inventory item in the group that is published.</span><br/><br/>This field will only be returned if set for an inventory item.<br/><br/><strong>Max Length</strong>: 55<br/>
     *
     * @return self
     */
    public function setSubtitle($subtitle)
    {
        $this->container['subtitle'] = $subtitle;

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
     * @param string|null $title The title of the inventory item group. This title will ultimately become the listing title once the first offer of the group is published. This field is not initially required when first creating an inventory item group, but will be required before the first offer of the group is published.<br><br><span class=\"tablenote\"> <strong>Note:</strong> Since this title will ultimately  become the listing title in a multiple-variation listing, the seller should omit the <strong>title</strong> field when creating the inventory items that are members of the group. If they do include the <strong>title</strong> field in an inventory item record, the text in that field will overwrite the text provided in this <strong>title</strong> field for each inventory item in the group that is published.</span><br/><br/> This field is always returned if one or more offers associated with the inventory item group have been published, and is only returned if set for an inventory item group if that group has yet to have any offers published.<br/><br/><strong>Max Length</strong>: 80 <br/>
     *
     * @return self
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets variant_skus.
     *
     * @return string[]|null
     */
    public function getVariantSkus()
    {
        return $this->container['variant_skus'];
    }

    /**
     * Sets variant_skus.
     *
     * @param string[]|null $variant_skus This required container is used to assign individual inventory items to the inventory item group. Multiple SKU values are passed in to this container. If updating an existing inventory item group, the seller should make sure that all member SKU values are passed in, as long as the seller wants that SKU to remain in the group.<br><br> It is also possible to add or remove SKUs with a <strong>createOrReplaceInventoryItemGroup</strong> call. If the seller wants to remove a SKU from the group, that seller will just omit that SKU value from this container to remove that inventory item/SKU from the inventory item group and any published, multiple-variation listing. However, a variation cannot be removed from the group if that variation has one or more sales for that listing. A workaround for this is to set that variation's quantity to <code>0</code> and it will be 'grayed out' in the View Item page.<br><br>This container is always returned.
     *
     * @return self
     */
    public function setVariantSkus($variant_skus)
    {
        $this->container['variant_skus'] = $variant_skus;

        return $this;
    }

    /**
     * Gets varies_by.
     *
     * @return \TNT\Ebay\Sell\Inventory\V1\Model\VariesBy|null
     */
    public function getVariesBy()
    {
        return $this->container['varies_by'];
    }

    /**
     * Sets varies_by.
     *
     * @param \TNT\Ebay\Sell\Inventory\V1\Model\VariesBy|null $varies_by varies_by
     *
     * @return self
     */
    public function setVariesBy($varies_by)
    {
        $this->container['varies_by'] = $varies_by;

        return $this;
    }

    /**
     * Gets video_ids.
     *
     * @return string[]|null
     */
    public function getVideoIds()
    {
        return $this->container['video_ids'];
    }

    /**
     * Sets video_ids.
     *
     * @param string[]|null $video_ids An array of one or more VideoId values for the inventory item group. A VideoId is a unique identifier that is automatically created by eBay when a seller successfully uploads a video to eBay using the  <a href=\"https://developer.ebay.com/api-docs/commerce/media/resources/video/methods/uploadVideo\" target=\"_blank\">uploadVideo</a> method of the <a href=\"https://developer.ebay.com/api-docs/commerce/media/overview.html\" target=\"_blank\">Media API</a>.<br /><br />For information on supported marketplaces and platforms, as well as other requirements and limitations of video support, please refer to <a href=\"https://developer.ebay.com/api-docs/sell/static/inventory/managing-video-media.html\" target=\"_blank\">Managing videos</a>.
     *
     * @return self
     */
    public function setVideoIds($video_ids)
    {
        $this->container['video_ids'] = $video_ids;

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