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
 * ShippingOption.
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
 * Account API.
 *
 * The <b>Account API</b> gives sellers the ability to configure their eBay seller accounts, including the seller's policies (eBay business policies and seller-defined custom policies), opt in and out of eBay seller programs, configure sales tax tables, and get account information.  <br/><br/>For details on the availability of the methods in this API, see <a href=\"/api-docs/sell/account/overview.html#requirements\">Account API requirements and restrictions</a>.
 *
 * The version of the OpenAPI document: v1.9.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace TNT\Ebay\Sell\Account\V1\Model;

use TNT\Ebay\Sell\Account\V1\ObjectSerializer;

/**
 * ShippingOption Class Doc Comment.
 *
 * @category Class
 *
 * @description This type is used by the &lt;b&gt;shippingOptions&lt;/b&gt; array, which is used to provide detailed information on the domestic and international shipping options available for the policy. A separate &lt;b&gt;ShippingOption&lt;/b&gt; object covers domestic shipping service options and international shipping service options (if the seller ships to international locations).
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
class ShippingOption implements ModelInterface, \ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'ShippingOption';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'cost_type' => 'string',
        'insurance_fee' => '\TNT\Ebay\Sell\Account\V1\Model\Amount',
        'insurance_offered' => 'bool',
        'option_type' => 'string',
        'package_handling_cost' => '\TNT\Ebay\Sell\Account\V1\Model\Amount',
        'rate_table_id' => 'string',
        'shipping_services' => '\TNT\Ebay\Sell\Account\V1\Model\ShippingService[]',
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
        'cost_type' => null,
        'insurance_fee' => null,
        'insurance_offered' => null,
        'option_type' => null,
        'package_handling_cost' => null,
        'rate_table_id' => null,
        'shipping_services' => null,
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
        'cost_type' => 'costType',
        'insurance_fee' => 'insuranceFee',
        'insurance_offered' => 'insuranceOffered',
        'option_type' => 'optionType',
        'package_handling_cost' => 'packageHandlingCost',
        'rate_table_id' => 'rateTableId',
        'shipping_services' => 'shippingServices',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'cost_type' => 'setCostType',
        'insurance_fee' => 'setInsuranceFee',
        'insurance_offered' => 'setInsuranceOffered',
        'option_type' => 'setOptionType',
        'package_handling_cost' => 'setPackageHandlingCost',
        'rate_table_id' => 'setRateTableId',
        'shipping_services' => 'setShippingServices',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'cost_type' => 'getCostType',
        'insurance_fee' => 'getInsuranceFee',
        'insurance_offered' => 'getInsuranceOffered',
        'option_type' => 'getOptionType',
        'package_handling_cost' => 'getPackageHandlingCost',
        'rate_table_id' => 'getRateTableId',
        'shipping_services' => 'getShippingServices',
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
        $this->container['cost_type'] = $data['cost_type'] ?? null;
        $this->container['insurance_fee'] = $data['insurance_fee'] ?? null;
        $this->container['insurance_offered'] = $data['insurance_offered'] ?? null;
        $this->container['option_type'] = $data['option_type'] ?? null;
        $this->container['package_handling_cost'] = $data['package_handling_cost'] ?? null;
        $this->container['rate_table_id'] = $data['rate_table_id'] ?? null;
        $this->container['shipping_services'] = $data['shipping_services'] ?? null;
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
     * Gets cost_type.
     *
     * @return string|null
     */
    public function getCostType()
    {
        return $this->container['cost_type'];
    }

    /**
     * Sets cost_type.
     *
     * @param string|null $cost_type This field defines whether the shipping cost model is <code>FLAT_RATE</code> (the same rate for all buyers, or buyers within a region if shipping rate tables are used) or <code>CALCULATED</code> (the shipping rate varies by the ship-to location and size and weight of the package). <br/><br/>This field is conditionally required if any shipping service options are specified (domestic and/or international). For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/account/types/api:ShippingCostTypeEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setCostType($cost_type)
    {
        $this->container['cost_type'] = $cost_type;

        return $this;
    }

    /**
     * Gets insurance_fee.
     *
     * @return \TNT\Ebay\Sell\Account\V1\Model\Amount|null
     */
    public function getInsuranceFee()
    {
        return $this->container['insurance_fee'];
    }

    /**
     * Sets insurance_fee.
     *
     * @param \TNT\Ebay\Sell\Account\V1\Model\Amount|null $insurance_fee insurance_fee
     *
     * @return self
     */
    public function setInsuranceFee($insurance_fee)
    {
        $this->container['insurance_fee'] = $insurance_fee;

        return $this;
    }

    /**
     * Gets insurance_offered.
     *
     * @return bool|null
     */
    public function getInsuranceOffered()
    {
        return $this->container['insurance_offered'];
    }

    /**
     * Sets insurance_offered.
     *
     * @param bool|null $insurance_offered This field has been deprecated. <br/><br/>Shipping insurance is offered only via a shipping carrier's shipping services and is no longer available via eBay shipping policies.
     *
     * @return self
     */
    public function setInsuranceOffered($insurance_offered)
    {
        $this->container['insurance_offered'] = $insurance_offered;

        return $this;
    }

    /**
     * Gets option_type.
     *
     * @return string|null
     */
    public function getOptionType()
    {
        return $this->container['option_type'];
    }

    /**
     * Sets option_type.
     *
     * @param string|null $option_type This field is used to indicate if the corresponding shipping service options (under <b>shippingServices</b> array) are domestic or international shipping service options. This field is conditionally required if any shipping service options are specified (domestic and/or international). For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/account/types/api:ShippingOptionTypeEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setOptionType($option_type)
    {
        $this->container['option_type'] = $option_type;

        return $this;
    }

    /**
     * Gets package_handling_cost.
     *
     * @return \TNT\Ebay\Sell\Account\V1\Model\Amount|null
     */
    public function getPackageHandlingCost()
    {
        return $this->container['package_handling_cost'];
    }

    /**
     * Sets package_handling_cost.
     *
     * @param \TNT\Ebay\Sell\Account\V1\Model\Amount|null $package_handling_cost package_handling_cost
     *
     * @return self
     */
    public function setPackageHandlingCost($package_handling_cost)
    {
        $this->container['package_handling_cost'] = $package_handling_cost;

        return $this;
    }

    /**
     * Gets rate_table_id.
     *
     * @return string|null
     */
    public function getRateTableId()
    {
        return $this->container['rate_table_id'];
    }

    /**
     * Sets rate_table_id.
     *
     * @param string|null $rate_table_id This field is used if the seller wants to associate a domestic or international shipping rate table to the fulfillment business policy. The <a href=\"/api-docs/sell/account/resources/rate_table/methods/getRateTables\">getRateTables</a> method can be used to retrieve shipping rate table IDs.<br/><br/>With domestic and international shipping rate tables, the seller can set different shipping costs based on shipping regions and shipping speed/level of service (one-day, expedited, standard, economy). There are also options to additional per-weight and handling charges.<br/><br/>Sellers need to be careful that shipping rate tables match the corresponding shipping service options. In other words, a domestic shipping rate table must not be specified in the same container where international shipping service options are being specified, and vice versa, and the shipping speed/level of service of the provided shipping service options should match the shipping speed/level of service options that are defined in the shipping rate tables. <br /><br />For example, if the corresponding shipping rate table defines costs for one-day shipping services, there should be at least one one-day shipping service option specified under the <b>shippingServices</b> array.<br/><br/>This field is returned if set.
     *
     * @return self
     */
    public function setRateTableId($rate_table_id)
    {
        $this->container['rate_table_id'] = $rate_table_id;

        return $this;
    }

    /**
     * Gets shipping_services.
     *
     * @return \TNT\Ebay\Sell\Account\V1\Model\ShippingService[]|null
     */
    public function getShippingServices()
    {
        return $this->container['shipping_services'];
    }

    /**
     * Sets shipping_services.
     *
     * @param \TNT\Ebay\Sell\Account\V1\Model\ShippingService[]|null $shipping_services This array consists of the domestic or international shipping services options that are defined for the policy. The shipping service options defined under this array should match what is set in the corresponding <b>shippingOptions.optionType</b> field (which controls whether domestic or international shipping service options are being defined). If a shipping rate table is being used, the specified shipping service options should also match the shipping rate table settings (domestic or international, shipping speed/level of service, etc.) <br/><br/>Sellers can specify up to four domestic shipping services and up to five international shipping service options by using separate <b>shippingService</b> containers for each. If the seller is using the Global Shipping Program as an international option, only a total of four international shipping service options (including GSP) can be offered. <br/><br/> See <a href=\"/api-docs/sell/static/seller-accounts/ht_shipping-setting-shipping-carrier-and-service-values.html\" target=\"_blank\">How to set up shipping carrier and shipping service values</a>. <br /><br />To use the eBay standard envelope service (eSE), see <a href=\"/api-docs/sell/static/seller-accounts/using-the-ebay-standard-envelope-service.html\" target=\"_blank\">Using eBay standard envelope (eSE) service</a>.<br /><br />This array is conditionally required if the seller is offering one or more domestic and/or international shipping service options.
     *
     * @return self
     */
    public function setShippingServices($shipping_services)
    {
        $this->container['shipping_services'] = $shipping_services;

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
