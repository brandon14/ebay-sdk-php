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
 * Shipment.
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
 * Logistics API.
 *
 * <span class=\"tablenote\"><b>Note:</b> This is a <a href=\"https://developer.ebay.com/api-docs/static/versioning.html#limited\" target=\"_blank\"> <img src=\"/cms/img/docs/partners-api.svg\" class=\"legend-icon partners-icon\" title=\"Limited Release\"  alt=\"Limited Release\" />(Limited Release)</a> API available only to select developers approved by business units.</span><br /><br />The <b>Logistics API</b> resources offer the following capabilities: <ul><li><b>shipping_quote</b> &ndash; Consolidates into a list a set of live shipping rates, or quotes, from which you can select a rate to ship a package.</li> <li><b>shipment</b> &ndash; Creates a \"shipment\" for the selected shipping rate.</li></ul> Call <b>createShippingQuote</b> to get a list of live shipping rates. The rates returned are all valid for a specific time window and all quoted prices are at eBay-negotiated rates. <br><br>Select one of the live rates and using its associated <b>rateId</b>, create a \"shipment\" for the package by calling <b>createFromShippingQuote</b>. Creating a shipment completes an agreement, and the cost of the base service and any added shipping options are summed into the returned <b>totalShippingCost</b> value. This action also generates a shipping label that you can use to ship the package.  The total cost of the shipment is incurred when the package is shipped using the supplied shipping label.  <p class=\"tablenote\"><b>Important!</b> Sellers must set up a payment method via their eBay account before they can use the methods in this API to create a shipment and the associated shipping label.</p>
 *
 * The version of the OpenAPI document: v1_beta.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace TNT\Ebay\Sell\Logistics\V1\Model;

use TNT\Ebay\Sell\Logistics\V1\ObjectSerializer;

/**
 * Shipment Class Doc Comment.
 *
 * @category Class
 *
 * @description This complex type defines a shipment for a specific package (for example, a box or letter). Shipments are always linked to a purchased shipping label.
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
class Shipment implements ModelInterface, \ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'Shipment';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'cancellation' => '\TNT\Ebay\Sell\Logistics\V1\Model\ShipmentCancellation',
        'creation_date' => 'string',
        'label_custom_message' => 'string',
        'label_download_url' => 'string',
        'label_size' => 'string',
        'orders' => '\TNT\Ebay\Sell\Logistics\V1\Model\Order[]',
        'package_specification' => '\TNT\Ebay\Sell\Logistics\V1\Model\PackageSpecification',
        'rate' => '\TNT\Ebay\Sell\Logistics\V1\Model\PurchasedRate',
        'return_to' => '\TNT\Ebay\Sell\Logistics\V1\Model\Contact',
        'ship_from' => '\TNT\Ebay\Sell\Logistics\V1\Model\Contact',
        'shipment_id' => 'string',
        'shipment_tracking_number' => 'string',
        'ship_to' => '\TNT\Ebay\Sell\Logistics\V1\Model\Contact',
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
        'cancellation' => null,
        'creation_date' => null,
        'label_custom_message' => null,
        'label_download_url' => null,
        'label_size' => null,
        'orders' => null,
        'package_specification' => null,
        'rate' => null,
        'return_to' => null,
        'ship_from' => null,
        'shipment_id' => null,
        'shipment_tracking_number' => null,
        'ship_to' => null,
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
        'cancellation' => 'cancellation',
        'creation_date' => 'creationDate',
        'label_custom_message' => 'labelCustomMessage',
        'label_download_url' => 'labelDownloadUrl',
        'label_size' => 'labelSize',
        'orders' => 'orders',
        'package_specification' => 'packageSpecification',
        'rate' => 'rate',
        'return_to' => 'returnTo',
        'ship_from' => 'shipFrom',
        'shipment_id' => 'shipmentId',
        'shipment_tracking_number' => 'shipmentTrackingNumber',
        'ship_to' => 'shipTo',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'cancellation' => 'setCancellation',
        'creation_date' => 'setCreationDate',
        'label_custom_message' => 'setLabelCustomMessage',
        'label_download_url' => 'setLabelDownloadUrl',
        'label_size' => 'setLabelSize',
        'orders' => 'setOrders',
        'package_specification' => 'setPackageSpecification',
        'rate' => 'setRate',
        'return_to' => 'setReturnTo',
        'ship_from' => 'setShipFrom',
        'shipment_id' => 'setShipmentId',
        'shipment_tracking_number' => 'setShipmentTrackingNumber',
        'ship_to' => 'setShipTo',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'cancellation' => 'getCancellation',
        'creation_date' => 'getCreationDate',
        'label_custom_message' => 'getLabelCustomMessage',
        'label_download_url' => 'getLabelDownloadUrl',
        'label_size' => 'getLabelSize',
        'orders' => 'getOrders',
        'package_specification' => 'getPackageSpecification',
        'rate' => 'getRate',
        'return_to' => 'getReturnTo',
        'ship_from' => 'getShipFrom',
        'shipment_id' => 'getShipmentId',
        'shipment_tracking_number' => 'getShipmentTrackingNumber',
        'ship_to' => 'getShipTo',
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
        $this->container['cancellation'] = $data['cancellation'] ?? null;
        $this->container['creation_date'] = $data['creation_date'] ?? null;
        $this->container['label_custom_message'] = $data['label_custom_message'] ?? null;
        $this->container['label_download_url'] = $data['label_download_url'] ?? null;
        $this->container['label_size'] = $data['label_size'] ?? null;
        $this->container['orders'] = $data['orders'] ?? null;
        $this->container['package_specification'] = $data['package_specification'] ?? null;
        $this->container['rate'] = $data['rate'] ?? null;
        $this->container['return_to'] = $data['return_to'] ?? null;
        $this->container['ship_from'] = $data['ship_from'] ?? null;
        $this->container['shipment_id'] = $data['shipment_id'] ?? null;
        $this->container['shipment_tracking_number'] = $data['shipment_tracking_number'] ?? null;
        $this->container['ship_to'] = $data['ship_to'] ?? null;
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
     * Gets cancellation.
     *
     * @return \TNT\Ebay\Sell\Logistics\V1\Model\ShipmentCancellation|null
     */
    public function getCancellation()
    {
        return $this->container['cancellation'];
    }

    /**
     * Sets cancellation.
     *
     * @param \TNT\Ebay\Sell\Logistics\V1\Model\ShipmentCancellation|null $cancellation cancellation
     *
     * @return self
     */
    public function setCancellation($cancellation)
    {
        $this->container['cancellation'] = $cancellation;

        return $this;
    }

    /**
     * Gets creation_date.
     *
     * @return string|null
     */
    public function getCreationDate()
    {
        return $this->container['creation_date'];
    }

    /**
     * Sets creation_date.
     *
     * @param string|null $creation_date The date and time the shipment was created, formatted as an <a href=\"https://www.iso.org/iso-8601-date-and-time-format.html\" title=\"https://www.iso.org\" target=\"_blank\">ISO 8601</a> string, which is based on the 24-hour Coordinated Universal Time (UTC) clock.  <br><br><b>Format:</b> <code>[YYYY]-[MM]-[DD]T[HH]:[MM]:[SS].[SSS]Z</code> <br><b>Example:</b> <code>2018-08-20T07:09:00.000Z</code>
     *
     * @return self
     */
    public function setCreationDate($creation_date)
    {
        $this->container['creation_date'] = $creation_date;

        return $this;
    }

    /**
     * Gets label_custom_message.
     *
     * @return string|null
     */
    public function getLabelCustomMessage()
    {
        return $this->container['label_custom_message'];
    }

    /**
     * Sets label_custom_message.
     *
     * @param string|null $label_custom_message if supported by the selected shipping carrier, this field can contain optional seller text to be printed on the shipping label
     *
     * @return self
     */
    public function setLabelCustomMessage($label_custom_message)
    {
        $this->container['label_custom_message'] = $label_custom_message;

        return $this;
    }

    /**
     * Gets label_download_url.
     *
     * @return string|null
     */
    public function getLabelDownloadUrl()
    {
        return $this->container['label_download_url'];
    }

    /**
     * Sets label_download_url.
     *
     * @param string|null $label_download_url The direct URL the seller can use to download an image of the shipping label. By default, the file format is PDF. See <a href=\"/api-docs/sell/logistics/resources/shipment/methods/downloadLabelFile\">downloadLabelFile</a> for requesting different response file formats.
     *
     * @return self
     */
    public function setLabelDownloadUrl($label_download_url)
    {
        $this->container['label_download_url'] = $label_download_url;

        return $this;
    }

    /**
     * Gets label_size.
     *
     * @return string|null
     */
    public function getLabelSize()
    {
        return $this->container['label_size'];
    }

    /**
     * Sets label_size.
     *
     * @param string|null $label_size The seller's desired label size. The support for multi-sized labels is shipping-carrier specific and if the size requested in the <b>creaateFromShippingQuote</b> call matches a size the carrier supports, the value will be represented here in the shipment. <br><br>Currently, the only valid value is: <code>4\"x6\"</code>
     *
     * @return self
     */
    public function setLabelSize($label_size)
    {
        $this->container['label_size'] = $label_size;

        return $this;
    }

    /**
     * Gets orders.
     *
     * @return \TNT\Ebay\Sell\Logistics\V1\Model\Order[]|null
     */
    public function getOrders()
    {
        return $this->container['orders'];
    }

    /**
     * Sets orders.
     *
     * @param \TNT\Ebay\Sell\Logistics\V1\Model\Order[]|null $orders This list value is optionally assigned by the seller. When present, each element in the returned list contains seller-assigned information about an order (such as an order number). Because a package can contain all or part of one or more orders, this field provides a way for sellers to identify the packages that contain specific orders.
     *
     * @return self
     */
    public function setOrders($orders)
    {
        $this->container['orders'] = $orders;

        return $this;
    }

    /**
     * Gets package_specification.
     *
     * @return \TNT\Ebay\Sell\Logistics\V1\Model\PackageSpecification|null
     */
    public function getPackageSpecification()
    {
        return $this->container['package_specification'];
    }

    /**
     * Sets package_specification.
     *
     * @param \TNT\Ebay\Sell\Logistics\V1\Model\PackageSpecification|null $package_specification package_specification
     *
     * @return self
     */
    public function setPackageSpecification($package_specification)
    {
        $this->container['package_specification'] = $package_specification;

        return $this;
    }

    /**
     * Gets rate.
     *
     * @return \TNT\Ebay\Sell\Logistics\V1\Model\PurchasedRate|null
     */
    public function getRate()
    {
        return $this->container['rate'];
    }

    /**
     * Sets rate.
     *
     * @param \TNT\Ebay\Sell\Logistics\V1\Model\PurchasedRate|null $rate rate
     *
     * @return self
     */
    public function setRate($rate)
    {
        $this->container['rate'] = $rate;

        return $this;
    }

    /**
     * Gets return_to.
     *
     * @return \TNT\Ebay\Sell\Logistics\V1\Model\Contact|null
     */
    public function getReturnTo()
    {
        return $this->container['return_to'];
    }

    /**
     * Sets return_to.
     *
     * @param \TNT\Ebay\Sell\Logistics\V1\Model\Contact|null $return_to return_to
     *
     * @return self
     */
    public function setReturnTo($return_to)
    {
        $this->container['return_to'] = $return_to;

        return $this;
    }

    /**
     * Gets ship_from.
     *
     * @return \TNT\Ebay\Sell\Logistics\V1\Model\Contact|null
     */
    public function getShipFrom()
    {
        return $this->container['ship_from'];
    }

    /**
     * Sets ship_from.
     *
     * @param \TNT\Ebay\Sell\Logistics\V1\Model\Contact|null $ship_from ship_from
     *
     * @return self
     */
    public function setShipFrom($ship_from)
    {
        $this->container['ship_from'] = $ship_from;

        return $this;
    }

    /**
     * Gets shipment_id.
     *
     * @return string|null
     */
    public function getShipmentId()
    {
        return $this->container['shipment_id'];
    }

    /**
     * Sets shipment_id.
     *
     * @param string|null $shipment_id The unique eBay-assigned ID for the shipment. The ID is generated when the shipment is created by a call to <b>createFromShippingQuote</b>.
     *
     * @return self
     */
    public function setShipmentId($shipment_id)
    {
        $this->container['shipment_id'] = $shipment_id;

        return $this;
    }

    /**
     * Gets shipment_tracking_number.
     *
     * @return string|null
     */
    public function getShipmentTrackingNumber()
    {
        return $this->container['shipment_tracking_number'];
    }

    /**
     * Sets shipment_tracking_number.
     *
     * @param string|null $shipment_tracking_number a unique carrier-assigned ID string that can be used to track the shipment
     *
     * @return self
     */
    public function setShipmentTrackingNumber($shipment_tracking_number)
    {
        $this->container['shipment_tracking_number'] = $shipment_tracking_number;

        return $this;
    }

    /**
     * Gets ship_to.
     *
     * @return \TNT\Ebay\Sell\Logistics\V1\Model\Contact|null
     */
    public function getShipTo()
    {
        return $this->container['ship_to'];
    }

    /**
     * Sets ship_to.
     *
     * @param \TNT\Ebay\Sell\Logistics\V1\Model\Contact|null $ship_to ship_to
     *
     * @return self
     */
    public function setShipTo($ship_to)
    {
        $this->container['ship_to'] = $ship_to;

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
