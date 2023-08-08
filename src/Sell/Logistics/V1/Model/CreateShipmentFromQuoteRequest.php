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
 * CreateShipmentFromQuoteRequest.
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
 * CreateShipmentFromQuoteRequest Class Doc Comment.
 *
 * @category Class
 *
 * @description This complex type contains the request payload for the &lt;b&gt;createFromShippingQuote&lt;/b&gt; method.
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
class CreateShipmentFromQuoteRequest implements ModelInterface, \ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'CreateShipmentFromQuoteRequest';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'additional_options' => '\TNT\Ebay\Sell\Logistics\V1\Model\AdditionalOption[]',
        'label_custom_message' => 'string',
        'label_size' => 'string',
        'rate_id' => 'string',
        'return_to' => '\TNT\Ebay\Sell\Logistics\V1\Model\Contact',
        'shipping_quote_id' => 'string',
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
        'additional_options' => null,
        'label_custom_message' => null,
        'label_size' => null,
        'rate_id' => null,
        'return_to' => null,
        'shipping_quote_id' => null,
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
        'additional_options' => 'additionalOptions',
        'label_custom_message' => 'labelCustomMessage',
        'label_size' => 'labelSize',
        'rate_id' => 'rateId',
        'return_to' => 'returnTo',
        'shipping_quote_id' => 'shippingQuoteId',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'additional_options' => 'setAdditionalOptions',
        'label_custom_message' => 'setLabelCustomMessage',
        'label_size' => 'setLabelSize',
        'rate_id' => 'setRateId',
        'return_to' => 'setReturnTo',
        'shipping_quote_id' => 'setShippingQuoteId',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'additional_options' => 'getAdditionalOptions',
        'label_custom_message' => 'getLabelCustomMessage',
        'label_size' => 'getLabelSize',
        'rate_id' => 'getRateId',
        'return_to' => 'getReturnTo',
        'shipping_quote_id' => 'getShippingQuoteId',
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
        $this->container['additional_options'] = $data['additional_options'] ?? null;
        $this->container['label_custom_message'] = $data['label_custom_message'] ?? null;
        $this->container['label_size'] = $data['label_size'] ?? null;
        $this->container['rate_id'] = $data['rate_id'] ?? null;
        $this->container['return_to'] = $data['return_to'] ?? null;
        $this->container['shipping_quote_id'] = $data['shipping_quote_id'] ?? null;
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
     * Gets additional_options.
     *
     * @return \TNT\Ebay\Sell\Logistics\V1\Model\AdditionalOption[]|null
     */
    public function getAdditionalOptions()
    {
        return $this->container['additional_options'];
    }

    /**
     * Sets additional_options.
     *
     * @param \TNT\Ebay\Sell\Logistics\V1\Model\AdditionalOption[]|null $additional_options Supply a list of one or more shipping options that the seller wants to purchase for this shipment.  <br><br>The <b>baseShippingCost</b> field that's associated with the selected shipping rate is the cost of the base service offered in the rate. In addition to the base service, sellers can add additional shipping services to the base service. Shipping options include things such as shipping insurance or a recipient's signature upon delivery. The cost of any added services is summed with the base shipping cost to determine the final cost for the shipment. All options added to the shipment must be chosen from the set of shipping options offered with the selected rate.
     *
     * @return self
     */
    public function setAdditionalOptions($additional_options)
    {
        $this->container['additional_options'] = $additional_options;

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
     * @param string|null $label_custom_message optional text to be printed on the shipping label if the selected shipping carrier supports custom messages on their labels
     *
     * @return self
     */
    public function setLabelCustomMessage($label_custom_message)
    {
        $this->container['label_custom_message'] = $label_custom_message;

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
     * @param string|null $label_size The seller's desired label size. Any supplied value is applied only if the shipping carrier supports multiple label sizes, otherwise the carrier's default label size is used.  <br><brCurrently, the only valid value is: <code>4\"x6\"</code>
     *
     * @return self
     */
    public function setLabelSize($label_size)
    {
        $this->container['label_size'] = $label_size;

        return $this;
    }

    /**
     * Gets rate_id.
     *
     * @return string|null
     */
    public function getRateId()
    {
        return $this->container['rate_id'];
    }

    /**
     * Sets rate_id.
     *
     * @param string|null $rate_id The eBay-assigned ID of the shipping rate that the seller selected for the shipment. This value is generated by a call to <b>createShippingQuote</b> and is returned in the <b>rates.rateId</b> field.
     *
     * @return self
     */
    public function setRateId($rate_id)
    {
        $this->container['rate_id'] = $rate_id;

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
     * @param string|null $shipping_quote_id the unique eBay-assigned ID of the shipping quote that was generated by a call to <b>createShippingQuote</b>
     *
     * @return self
     */
    public function setShippingQuoteId($shipping_quote_id)
    {
        $this->container['shipping_quote_id'] = $shipping_quote_id;

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
