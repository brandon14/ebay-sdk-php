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
 * ShippingAddressImpl.
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
 * Order API.
 *
 * <span class=\"tablenote\"><b>Note:</b> This version of the Order API (v2) currently only supports the guest payment flow for eBay managed payments. To view the v1_beta version of the Order API, which includes both member and guest checkout payment flows, refer to the <a href=\"/api-docs/buy/order_v1/resources/methods\">Order_v1 API</a> documentation.</span><br /><br /><span class=\"tablenote\"><b>Note:</b> This is a <a href=\"https://developer.ebay.com/api-docs/static/versioning.html#limited\" target=\"_blank\"><img src=\"/cms/img/docs/partners-api.svg\" class=\"legend-icon partners-icon\"  alt=\"Limited Release\" title=\"Limited Release\" />(Limited Release)</a> API available only to select developers approved by business units.</span><br /><br />The Order API provides interfaces that let shoppers pay for items. It also returns payment and shipping status of the order.
 *
 * The version of the OpenAPI document: v2.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace TNT\Ebay\Buy\Order\V2\Model;

use ArrayAccess;
use TNT\Ebay\Buy\Order\V2\ObjectSerializer;

/**
 * ShippingAddressImpl Class Doc Comment.
 *
 * @category Class
 * @description A type that defines the shipping address fields.&lt;br /&gt;&lt;br /&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; If the address cannot be validated, a warning message is returned along with the response.&lt;/span&gt;
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ShippingAddressImpl implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'ShippingAddressImpl';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'address_line1' => 'string',
        'address_line2' => 'string',
        'city' => 'string',
        'country' => 'string',
        'county' => 'string',
        'phone_number' => 'string',
        'postal_code' => 'string',
        'recipient' => '\TNT\Ebay\Buy\Order\V2\Model\Recipient',
        'state_or_province' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'address_line1' => null,
        'address_line2' => null,
        'city' => null,
        'country' => null,
        'county' => null,
        'phone_number' => null,
        'postal_code' => null,
        'recipient' => null,
        'state_or_province' => null,
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
        'address_line1' => 'addressLine1',
        'address_line2' => 'addressLine2',
        'city' => 'city',
        'country' => 'country',
        'county' => 'county',
        'phone_number' => 'phoneNumber',
        'postal_code' => 'postalCode',
        'recipient' => 'recipient',
        'state_or_province' => 'stateOrProvince',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'address_line1' => 'setAddressLine1',
        'address_line2' => 'setAddressLine2',
        'city' => 'setCity',
        'country' => 'setCountry',
        'county' => 'setCounty',
        'phone_number' => 'setPhoneNumber',
        'postal_code' => 'setPostalCode',
        'recipient' => 'setRecipient',
        'state_or_province' => 'setStateOrProvince',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'address_line1' => 'getAddressLine1',
        'address_line2' => 'getAddressLine2',
        'city' => 'getCity',
        'country' => 'getCountry',
        'county' => 'getCounty',
        'phone_number' => 'getPhoneNumber',
        'postal_code' => 'getPostalCode',
        'recipient' => 'getRecipient',
        'state_or_province' => 'getStateOrProvince',
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
        $this->container['address_line1'] = $data['address_line1'] ?? null;
        $this->container['address_line2'] = $data['address_line2'] ?? null;
        $this->container['city'] = $data['city'] ?? null;
        $this->container['country'] = $data['country'] ?? null;
        $this->container['county'] = $data['county'] ?? null;
        $this->container['phone_number'] = $data['phone_number'] ?? null;
        $this->container['postal_code'] = $data['postal_code'] ?? null;
        $this->container['recipient'] = $data['recipient'] ?? null;
        $this->container['state_or_province'] = $data['state_or_province'] ?? null;
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
     * Gets address_line1.
     *
     * @return string|null
     */
    public function getAddressLine1()
    {
        return $this->container['address_line1'];
    }

    /**
     * Sets address_line1.
     *
     * @param string|null $address_line1 The first line of the street address where the item is being shipped.<br /><br /><b>Maximum:</b><ul><li>40 characters for AU, CA, and US marketplaces</li><li>35 characters for DE and GB marketplaces</li><li>50 characters for all other marketplaces</li></ul>
     *
     * @return self
     */
    public function setAddressLine1($address_line1)
    {
        $this->container['address_line1'] = $address_line1;

        return $this;
    }

    /**
     * Gets address_line2.
     *
     * @return string|null
     */
    public function getAddressLine2()
    {
        return $this->container['address_line2'];
    }

    /**
     * Sets address_line2.
     *
     * @param string|null $address_line2 The second line of the street address where the item is being shipped. This optional field can be used for information such as 'Suite Number' or 'Apt Number'.<br /><br /><b>Maximum:</b><ul><li>40 characters for AU, CA, and US marketplaces</li><li>35 characters for DE and GB marketplaces</li><li>50 characters for all other marketplaces</li></ul>
     *
     * @return self
     */
    public function setAddressLine2($address_line2)
    {
        $this->container['address_line2'] = $address_line2;

        return $this;
    }

    /**
     * Gets city.
     *
     * @return string|null
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city.
     *
     * @param string|null $city the city of the address where the item is being shipped
     *
     * @return self
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets country.
     *
     * @return string|null
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country.
     *
     * @param string|null $country The two letter code representing the country of the address. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/buy/order/types/bas:CountryCodeEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets county.
     *
     * @return string|null
     */
    public function getCounty()
    {
        return $this->container['county'];
    }

    /**
     * Sets county.
     *
     * @param string|null $county the county of the address where the item is being shipped
     *
     * @return self
     */
    public function setCounty($county)
    {
        $this->container['county'] = $county;

        return $this;
    }

    /**
     * Gets phone_number.
     *
     * @return string|null
     */
    public function getPhoneNumber()
    {
        return $this->container['phone_number'];
    }

    /**
     * Sets phone_number.
     *
     * @param string|null $phone_number The phone number of the person receiving the package.<br /><br /><span class=\"tablenote\"><b>Note:</b> It is highly recommended that when entering the phone number you include the country code.<br /><br />For example, if a US phone number is <code>4********4</code>, you would enter <code>+14********4</code>. If you do not include this code, the service will use the country specified in the <b>country</b> field.<br /><br />You can find the country code at <a href=\"https://countrycode.org/\">https://countrycode.org</a>.</span>
     *
     * @return self
     */
    public function setPhoneNumber($phone_number)
    {
        $this->container['phone_number'] = $phone_number;

        return $this;
    }

    /**
     * Gets postal_code.
     *
     * @return string|null
     */
    public function getPostalCode()
    {
        return $this->container['postal_code'];
    }

    /**
     * Sets postal_code.
     *
     * @param string|null $postal_code The postal code of the address where the item is being shipped.<br /><br /><span class=\"tablenote\"><b>Note:</b> This is optional when shipping to EBAY_HK (Hong Kong).</span>
     *
     * @return self
     */
    public function setPostalCode($postal_code)
    {
        $this->container['postal_code'] = $postal_code;

        return $this;
    }

    /**
     * Gets recipient.
     *
     * @return \TNT\Ebay\Buy\Order\V2\Model\Recipient|null
     */
    public function getRecipient()
    {
        return $this->container['recipient'];
    }

    /**
     * Sets recipient.
     *
     * @param \TNT\Ebay\Buy\Order\V2\Model\Recipient|null $recipient recipient
     *
     * @return self
     */
    public function setRecipient($recipient)
    {
        $this->container['recipient'] = $recipient;

        return $this;
    }

    /**
     * Gets state_or_province.
     *
     * @return string|null
     */
    public function getStateOrProvince()
    {
        return $this->container['state_or_province'];
    }

    /**
     * Sets state_or_province.
     *
     * @param string|null $state_or_province The state or province of the address.<br /><br /><span class=\"tablenote\"><b>Note:</b> For the US marketplace, this is a two-character value. For a list of valid values, see <a href=\"https://www.ups.com/worldshiphelp/WS15/ENU/AppHelp/Codes/State_Province_Codes.htm\">US State and Canada Province Codes</a>. </span>
     *
     * @return self
     */
    public function setStateOrProvince($state_or_province)
    {
        $this->container['state_or_province'] = $state_or_province;

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