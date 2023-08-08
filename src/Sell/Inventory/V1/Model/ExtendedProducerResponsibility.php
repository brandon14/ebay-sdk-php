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
 * ExtendedProducerResponsibility.
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
 * ExtendedProducerResponsibility Class Doc Comment.
 *
 * @category Class
 *
 * @description This type provides IDs for the producer or importer related to the new item, packaging, added documentation, or an eco-participation fee. In some markets, such as in France, this may be the importer of the item.
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
class ExtendedProducerResponsibility implements ModelInterface, \ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'ExtendedProducerResponsibility';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'producer_product_id' => 'string',
        'product_package_id' => 'string',
        'shipment_package_id' => 'string',
        'product_documentation_id' => 'string',
        'eco_participation_fee' => '\TNT\Ebay\Sell\Inventory\V1\Model\Amount',
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
        'producer_product_id' => null,
        'product_package_id' => null,
        'shipment_package_id' => null,
        'product_documentation_id' => null,
        'eco_participation_fee' => null,
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
        'producer_product_id' => 'producerProductId',
        'product_package_id' => 'productPackageId',
        'shipment_package_id' => 'shipmentPackageId',
        'product_documentation_id' => 'productDocumentationId',
        'eco_participation_fee' => 'ecoParticipationFee',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'producer_product_id' => 'setProducerProductId',
        'product_package_id' => 'setProductPackageId',
        'shipment_package_id' => 'setShipmentPackageId',
        'product_documentation_id' => 'setProductDocumentationId',
        'eco_participation_fee' => 'setEcoParticipationFee',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'producer_product_id' => 'getProducerProductId',
        'product_package_id' => 'getProductPackageId',
        'shipment_package_id' => 'getShipmentPackageId',
        'product_documentation_id' => 'getProductDocumentationId',
        'eco_participation_fee' => 'getEcoParticipationFee',
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
        $this->container['producer_product_id'] = $data['producer_product_id'] ?? null;
        $this->container['product_package_id'] = $data['product_package_id'] ?? null;
        $this->container['shipment_package_id'] = $data['shipment_package_id'] ?? null;
        $this->container['product_documentation_id'] = $data['product_documentation_id'] ?? null;
        $this->container['eco_participation_fee'] = $data['eco_participation_fee'] ?? null;
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
     * Gets producer_product_id.
     *
     * @return string|null
     */
    public function getProducerProductId()
    {
        return $this->container['producer_product_id'];
    }

    /**
     * Sets producer_product_id.
     *
     * @param string|null $producer_product_id This ID is the Unique Identifier of the producer related to the item. For instance, if the seller is selling a cell phone, it is the ID related to the cell phone.
     *
     * @return self
     */
    public function setProducerProductId($producer_product_id)
    {
        $this->container['producer_product_id'] = $producer_product_id;

        return $this;
    }

    /**
     * Gets product_package_id.
     *
     * @return string|null
     */
    public function getProductPackageId()
    {
        return $this->container['product_package_id'];
    }

    /**
     * Sets product_package_id.
     *
     * @param string|null $product_package_id The Unique ID of the producer of any packaging related to the product added by the seller. This does not include package in which the product is shipped (see <strong>ShipmentPackageID</strong>). For instance, if the seller adds bubble wrap, it is the ID related to the bubble wrap.
     *
     * @return self
     */
    public function setProductPackageId($product_package_id)
    {
        $this->container['product_package_id'] = $product_package_id;

        return $this;
    }

    /**
     * Gets shipment_package_id.
     *
     * @return string|null
     */
    public function getShipmentPackageId()
    {
        return $this->container['shipment_package_id'];
    }

    /**
     * Sets shipment_package_id.
     *
     * @param string|null $shipment_package_id This ID is the Unique Identifier of the producer of any packaging used by the seller to ship the item. This does not include non-shipping packaging added to the product (see <strong>ProductPackageID</strong>). This ID is required when the seller uses packaging to ship the item. For instance, if the seller uses a different box to ship the item, it is the ID related to the box.
     *
     * @return self
     */
    public function setShipmentPackageId($shipment_package_id)
    {
        $this->container['shipment_package_id'] = $shipment_package_id;

        return $this;
    }

    /**
     * Gets product_documentation_id.
     *
     * @return string|null
     */
    public function getProductDocumentationId()
    {
        return $this->container['product_documentation_id'];
    }

    /**
     * Sets product_documentation_id.
     *
     * @param string|null $product_documentation_id This ID is the Unique Identifier of the producer of any paper added to the parcel of the item by the seller. For example, this ID concerns any notice, leaflet, or paper that the seller adds to a cell phone parcel.
     *
     * @return self
     */
    public function setProductDocumentationId($product_documentation_id)
    {
        $this->container['product_documentation_id'] = $product_documentation_id;

        return $this;
    }

    /**
     * Gets eco_participation_fee.
     *
     * @return \TNT\Ebay\Sell\Inventory\V1\Model\Amount|null
     */
    public function getEcoParticipationFee()
    {
        return $this->container['eco_participation_fee'];
    }

    /**
     * Sets eco_participation_fee.
     *
     * @param \TNT\Ebay\Sell\Inventory\V1\Model\Amount|null $eco_participation_fee eco_participation_fee
     *
     * @return self
     */
    public function setEcoParticipationFee($eco_participation_fee)
    {
        $this->container['eco_participation_fee'] = $eco_participation_fee;

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
