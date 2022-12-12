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
 * ShippingQuote.
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
 * ShippingQuote Class Doc Comment.
 *
 * @category Class
 *
 * @description This complex type describes a \&quot;shipping quote,\&quot; which contains the parameters for a package shipment. The shipping quote contains a list of \&quot;live quotes\&quot; or &lt;i&gt;rates&lt;/i&gt; for the shipment. Rates are offerd by a carrier for a particular service, of set of services, for shipping the package. Included in the shipping quote are the package specifications, the shipment&#39;s origin and destination addresses, and the shipping parameters specified by the seller.  &lt;br&gt;&lt;br&gt;Use the &lt;b&gt;rateId&lt;/b&gt; value to select the specific service you want when you create a shipment by calling &lt;b&gt;createFromShippingQuote&lt;/b&gt;.
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
class ShippingQuote implements ModelInterface, \ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'ShippingQuote';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'creation_date' => 'string',
        'expiration_date' => 'string',
        'orders' => '\TNT\Ebay\Sell\Logistics\V1\Model\Order[]',
        'package_specification' => '\TNT\Ebay\Sell\Logistics\V1\Model\PackageSpecification',
        'rates' => '\TNT\Ebay\Sell\Logistics\V1\Model\Rate[]',
        'ship_from' => '\TNT\Ebay\Sell\Logistics\V1\Model\Contact',
        'shipping_quote_id' => 'string',
        'ship_to' => '\TNT\Ebay\Sell\Logistics\V1\Model\Contact',
        'warnings' => '\TNT\Ebay\Sell\Logistics\V1\Model\Error[]',
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
        'creation_date' => null,
        'expiration_date' => null,
        'orders' => null,
        'package_specification' => null,
        'rates' => null,
        'ship_from' => null,
        'shipping_quote_id' => null,
        'ship_to' => null,
        'warnings' => null,
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
        'creation_date' => 'creationDate',
        'expiration_date' => 'expirationDate',
        'orders' => 'orders',
        'package_specification' => 'packageSpecification',
        'rates' => 'rates',
        'ship_from' => 'shipFrom',
        'shipping_quote_id' => 'shippingQuoteId',
        'ship_to' => 'shipTo',
        'warnings' => 'warnings',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'creation_date' => 'setCreationDate',
        'expiration_date' => 'setExpirationDate',
        'orders' => 'setOrders',
        'package_specification' => 'setPackageSpecification',
        'rates' => 'setRates',
        'ship_from' => 'setShipFrom',
        'shipping_quote_id' => 'setShippingQuoteId',
        'ship_to' => 'setShipTo',
        'warnings' => 'setWarnings',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'creation_date' => 'getCreationDate',
        'expiration_date' => 'getExpirationDate',
        'orders' => 'getOrders',
        'package_specification' => 'getPackageSpecification',
        'rates' => 'getRates',
        'ship_from' => 'getShipFrom',
        'shipping_quote_id' => 'getShippingQuoteId',
        'ship_to' => 'getShipTo',
        'warnings' => 'getWarnings',
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
        $this->container['creation_date'] = $data['creation_date'] ?? null;
        $this->container['expiration_date'] = $data['expiration_date'] ?? null;
        $this->container['orders'] = $data['orders'] ?? null;
        $this->container['package_specification'] = $data['package_specification'] ?? null;
        $this->container['rates'] = $data['rates'] ?? null;
        $this->container['ship_from'] = $data['ship_from'] ?? null;
        $this->container['shipping_quote_id'] = $data['shipping_quote_id'] ?? null;
        $this->container['ship_to'] = $data['ship_to'] ?? null;
        $this->container['warnings'] = $data['warnings'] ?? null;
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
     * @param string|null $creation_date the date and time this quote was created, expressed as an ISO 8601 UTC string
     *
     * @return self
     */
    public function setCreationDate($creation_date)
    {
        $this->container['creation_date'] = $creation_date;

        return $this;
    }

    /**
     * Gets expiration_date.
     *
     * @return string|null
     */
    public function getExpirationDate()
    {
        return $this->container['expiration_date'];
    }

    /**
     * Sets expiration_date.
     *
     * @param string|null $expiration_date The last date and time that this quote will be honored, expressed as an ISO 8601 UTC string. After this time the quote expires and the expressed rates can no longer be purchased.
     *
     * @return self
     */
    public function setExpirationDate($expiration_date)
    {
        $this->container['expiration_date'] = $expiration_date;

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
     * Gets rates.
     *
     * @return \TNT\Ebay\Sell\Logistics\V1\Model\Rate[]|null
     */
    public function getRates()
    {
        return $this->container['rates'];
    }

    /**
     * Sets rates.
     *
     * @param \TNT\Ebay\Sell\Logistics\V1\Model\Rate[]|null $rates A list of <i>rates</i> where each rate, as identified by a <b>rateId</b>, contains information about a specific shipping service offered by a carrier.  Rates include shipping carrier and service, the to and from locations, the pickup and delivery windows, the seller's shipping parameters, the service constraints, and the cost for the base service and a list of additional shipping options.  <br><br>Each rate offered is supported by a label service where you can purchase the rate, and associated shipping label, via a call to <b>createFromShippingQuote</b>.
     *
     * @return self
     */
    public function setRates($rates)
    {
        $this->container['rates'] = $rates;

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
     * Gets shipping_quote_id.
     *
     * @return string|null
     */
    public function getShippingQuoteId()
    {
        return $this->container['shipping_quote_id'];
    }

    /**
     * Sets shipping_quote_id.
     *
     * @param string|null $shipping_quote_id The unique eBay-assigned ID for this shipping quote. The value of this field is associated with a specific package, based on its origin, destination, and size.
     *
     * @return self
     */
    public function setShippingQuoteId($shipping_quote_id)
    {
        $this->container['shipping_quote_id'] = $shipping_quote_id;

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
     * Gets warnings.
     *
     * @return \TNT\Ebay\Sell\Logistics\V1\Model\Error[]|null
     */
    public function getWarnings()
    {
        return $this->container['warnings'];
    }

    /**
     * Sets warnings.
     *
     * @param \TNT\Ebay\Sell\Logistics\V1\Model\Error[]|null $warnings a list of any warnings triggered by the request
     *
     * @return self
     */
    public function setWarnings($warnings)
    {
        $this->container['warnings'] = $warnings;

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
