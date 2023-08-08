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
 * Product.
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
 * Catalog API.
 *
 * The Catalog API allows users to search for and locate an eBay catalog product that is a direct match for the product that they wish to sell. Listing against an eBay catalog product helps insure that all listings (based off of that catalog product) have complete and accurate information. In addition to helping to create high-quality listings, another benefit to the seller of using catalog information to create listings is that much of the details of the listing will be prefilled, including the listing title, the listing description, the item specifics, and a stock image for the product (if available). Sellers will not have to enter item specifics themselves, and the overall listing process is a lot faster and easier.
 *
 * The version of the OpenAPI document: v1_beta.5.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace TNT\Ebay\Commerce\CatalogBeta\V1\Model;

use TNT\Ebay\Commerce\CatalogBeta\V1\ObjectSerializer;

/**
 * Product Class Doc Comment.
 *
 * @category Class
 *
 * @description This type contains the full details of a specified product, including information about the product&#39;s identifiers, product images, aspects, and categories.
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
class Product implements ModelInterface, \ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'Product';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'additional_images' => '\TNT\Ebay\Commerce\CatalogBeta\V1\Model\Image[]',
        'aspects' => '\TNT\Ebay\Commerce\CatalogBeta\V1\Model\Aspect[]',
        'brand' => 'string',
        'description' => 'string',
        'ean' => 'string[]',
        'epid' => 'string',
        'gtin' => 'string[]',
        'image' => '\TNT\Ebay\Commerce\CatalogBeta\V1\Model\Image',
        'isbn' => 'string[]',
        'mpn' => 'string[]',
        'other_applicable_category_ids' => 'string[]',
        'primary_category_id' => 'string',
        'product_web_url' => 'string',
        'title' => 'string',
        'upc' => 'string[]',
        'version' => 'string',
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
        'aspects' => null,
        'brand' => null,
        'description' => null,
        'ean' => null,
        'epid' => null,
        'gtin' => null,
        'image' => null,
        'isbn' => null,
        'mpn' => null,
        'other_applicable_category_ids' => null,
        'primary_category_id' => null,
        'product_web_url' => null,
        'title' => null,
        'upc' => null,
        'version' => null,
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
        'aspects' => 'aspects',
        'brand' => 'brand',
        'description' => 'description',
        'ean' => 'ean',
        'epid' => 'epid',
        'gtin' => 'gtin',
        'image' => 'image',
        'isbn' => 'isbn',
        'mpn' => 'mpn',
        'other_applicable_category_ids' => 'otherApplicableCategoryIds',
        'primary_category_id' => 'primaryCategoryId',
        'product_web_url' => 'productWebUrl',
        'title' => 'title',
        'upc' => 'upc',
        'version' => 'version',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'additional_images' => 'setAdditionalImages',
        'aspects' => 'setAspects',
        'brand' => 'setBrand',
        'description' => 'setDescription',
        'ean' => 'setEan',
        'epid' => 'setEpid',
        'gtin' => 'setGtin',
        'image' => 'setImage',
        'isbn' => 'setIsbn',
        'mpn' => 'setMpn',
        'other_applicable_category_ids' => 'setOtherApplicableCategoryIds',
        'primary_category_id' => 'setPrimaryCategoryId',
        'product_web_url' => 'setProductWebUrl',
        'title' => 'setTitle',
        'upc' => 'setUpc',
        'version' => 'setVersion',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'additional_images' => 'getAdditionalImages',
        'aspects' => 'getAspects',
        'brand' => 'getBrand',
        'description' => 'getDescription',
        'ean' => 'getEan',
        'epid' => 'getEpid',
        'gtin' => 'getGtin',
        'image' => 'getImage',
        'isbn' => 'getIsbn',
        'mpn' => 'getMpn',
        'other_applicable_category_ids' => 'getOtherApplicableCategoryIds',
        'primary_category_id' => 'getPrimaryCategoryId',
        'product_web_url' => 'getProductWebUrl',
        'title' => 'getTitle',
        'upc' => 'getUpc',
        'version' => 'getVersion',
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
        $this->container['aspects'] = $data['aspects'] ?? null;
        $this->container['brand'] = $data['brand'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['ean'] = $data['ean'] ?? null;
        $this->container['epid'] = $data['epid'] ?? null;
        $this->container['gtin'] = $data['gtin'] ?? null;
        $this->container['image'] = $data['image'] ?? null;
        $this->container['isbn'] = $data['isbn'] ?? null;
        $this->container['mpn'] = $data['mpn'] ?? null;
        $this->container['other_applicable_category_ids'] = $data['other_applicable_category_ids'] ?? null;
        $this->container['primary_category_id'] = $data['primary_category_id'] ?? null;
        $this->container['product_web_url'] = $data['product_web_url'] ?? null;
        $this->container['title'] = $data['title'] ?? null;
        $this->container['upc'] = $data['upc'] ?? null;
        $this->container['version'] = $data['version'] ?? null;
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
     * @return \TNT\Ebay\Commerce\CatalogBeta\V1\Model\Image[]|null
     */
    public function getAdditionalImages()
    {
        return $this->container['additional_images'];
    }

    /**
     * Sets additional_images.
     *
     * @param \TNT\Ebay\Commerce\CatalogBeta\V1\Model\Image[]|null $additional_images Contains information about  additional images associated with this product. For the primary image, see the <b>image</b> container.
     *
     * @return self
     */
    public function setAdditionalImages($additional_images)
    {
        $this->container['additional_images'] = $additional_images;

        return $this;
    }

    /**
     * Gets aspects.
     *
     * @return \TNT\Ebay\Commerce\CatalogBeta\V1\Model\Aspect[]|null
     */
    public function getAspects()
    {
        return $this->container['aspects'];
    }

    /**
     * Sets aspects.
     *
     * @param \TNT\Ebay\Commerce\CatalogBeta\V1\Model\Aspect[]|null $aspects contains an array of the category aspects and their values that are associated with this product
     *
     * @return self
     */
    public function setAspects($aspects)
    {
        $this->container['aspects'] = $aspects;

        return $this;
    }

    /**
     * Gets brand.
     *
     * @return string|null
     */
    public function getBrand()
    {
        return $this->container['brand'];
    }

    /**
     * Sets brand.
     *
     * @param string|null $brand the manufacturer's brand name for this product
     *
     * @return self
     */
    public function setBrand($brand)
    {
        $this->container['brand'] = $brand;

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
     * @param string|null $description the rich description of this product, which might contain HTML
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets ean.
     *
     * @return string[]|null
     */
    public function getEan()
    {
        return $this->container['ean'];
    }

    /**
     * Sets ean.
     *
     * @param string[]|null $ean a list of all European Article Numbers (EANs) that identify this product
     *
     * @return self
     */
    public function setEan($ean)
    {
        $this->container['ean'] = $ean;

        return $this;
    }

    /**
     * Gets epid.
     *
     * @return string|null
     */
    public function getEpid()
    {
        return $this->container['epid'];
    }

    /**
     * Sets epid.
     *
     * @param string|null $epid the eBay product ID of this product
     *
     * @return self
     */
    public function setEpid($epid)
    {
        $this->container['epid'] = $epid;

        return $this;
    }

    /**
     * Gets gtin.
     *
     * @return string[]|null
     */
    public function getGtin()
    {
        return $this->container['gtin'];
    }

    /**
     * Sets gtin.
     *
     * @param string[]|null $gtin A list of all GTINs that identify this product. Currently this can include EAN, ISBN, and UPC identifier types.
     *
     * @return self
     */
    public function setGtin($gtin)
    {
        $this->container['gtin'] = $gtin;

        return $this;
    }

    /**
     * Gets image.
     *
     * @return \TNT\Ebay\Commerce\CatalogBeta\V1\Model\Image|null
     */
    public function getImage()
    {
        return $this->container['image'];
    }

    /**
     * Sets image.
     *
     * @param \TNT\Ebay\Commerce\CatalogBeta\V1\Model\Image|null $image image
     *
     * @return self
     */
    public function setImage($image)
    {
        $this->container['image'] = $image;

        return $this;
    }

    /**
     * Gets isbn.
     *
     * @return string[]|null
     */
    public function getIsbn()
    {
        return $this->container['isbn'];
    }

    /**
     * Sets isbn.
     *
     * @param string[]|null $isbn a list of all International Standard Book Numbers (ISBNs) that identify this product
     *
     * @return self
     */
    public function setIsbn($isbn)
    {
        $this->container['isbn'] = $isbn;

        return $this;
    }

    /**
     * Gets mpn.
     *
     * @return string[]|null
     */
    public function getMpn()
    {
        return $this->container['mpn'];
    }

    /**
     * Sets mpn.
     *
     * @param string[]|null $mpn a list of all MPN values that the manufacturer uses to identify this product
     *
     * @return self
     */
    public function setMpn($mpn)
    {
        $this->container['mpn'] = $mpn;

        return $this;
    }

    /**
     * Gets other_applicable_category_ids.
     *
     * @return string[]|null
     */
    public function getOtherApplicableCategoryIds()
    {
        return $this->container['other_applicable_category_ids'];
    }

    /**
     * Sets other_applicable_category_ids.
     *
     * @param string[]|null $other_applicable_category_ids a list of category IDs (other than the value of <b>primaryCategoryId</b>) for all the leaf categories to which this product might belong
     *
     * @return self
     */
    public function setOtherApplicableCategoryIds($other_applicable_category_ids)
    {
        $this->container['other_applicable_category_ids'] = $other_applicable_category_ids;

        return $this;
    }

    /**
     * Gets primary_category_id.
     *
     * @return string|null
     */
    public function getPrimaryCategoryId()
    {
        return $this->container['primary_category_id'];
    }

    /**
     * Sets primary_category_id.
     *
     * @param string|null $primary_category_id The identifier of the leaf category that eBay recommends using to list this product, based on previous listings of similar products. Products in the eBay catalog are not automatically associated with any particular category, but using an inappropriate category can make it difficult for prospective buyers to find the product. For other possible categories that might be used, see <b>otherApplicableCategoryIds</b>.
     *
     * @return self
     */
    public function setPrimaryCategoryId($primary_category_id)
    {
        $this->container['primary_category_id'] = $primary_category_id;

        return $this;
    }

    /**
     * Gets product_web_url.
     *
     * @return string|null
     */
    public function getProductWebUrl()
    {
        return $this->container['product_web_url'];
    }

    /**
     * Sets product_web_url.
     *
     * @param string|null $product_web_url the URL for this product's eBay product page
     *
     * @return self
     */
    public function setProductWebUrl($product_web_url)
    {
        $this->container['product_web_url'] = $product_web_url;

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
     * @param string|null $title the title of this product on eBay
     *
     * @return self
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets upc.
     *
     * @return string[]|null
     */
    public function getUpc()
    {
        return $this->container['upc'];
    }

    /**
     * Sets upc.
     *
     * @param string[]|null $upc a list of Universal Product Codes (UPCs) that identify this product
     *
     * @return self
     */
    public function setUpc($upc)
    {
        $this->container['upc'] = $upc;

        return $this;
    }

    /**
     * Gets version.
     *
     * @return string|null
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version.
     *
     * @param string|null $version the current version number of this product record in the catalog
     *
     * @return self
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

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
