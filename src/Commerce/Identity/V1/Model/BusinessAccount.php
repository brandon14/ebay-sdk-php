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
 * BusinessAccount.
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
 * Identity API.
 *
 * <span class=\"tablenote\"><b>Note:</b> This is a <a href=\"https://developer.ebay.com/api-docs/static/versioning.html#limited\" target=\"_blank\"> <img src=\"/cms/img/docs/partners-api.svg\" class=\"legend-icon partners-icon\" title=\"Limited Release\"  alt=\"Limited Release\" />(Limited Release)</a> API available only to select developers approved by business units.</span><br /><br />Retrieves the authenticated user's account profile information. It can be used to let users log into your app or site using eBay, which frees you from needing to store and protect user's PII (Personal Identifiable Information) data.
 *
 * The version of the OpenAPI document: v1.1.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace TNT\Ebay\Commerce\Identity\V1\Model;

use ArrayAccess;
use TNT\Ebay\Commerce\Identity\V1\ObjectSerializer;

/**
 * BusinessAccount Class Doc Comment.
 *
 * @category Class
 * @description The type that defines the fields for the business account information.
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class BusinessAccount implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'BusinessAccount';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'address' => '\TNT\Ebay\Commerce\Identity\V1\Model\Address',
        'doing_business_as' => 'string',
        'email' => 'string',
        'name' => 'string',
        'primary_contact' => '\TNT\Ebay\Commerce\Identity\V1\Model\Contact',
        'primary_phone' => '\TNT\Ebay\Commerce\Identity\V1\Model\Phone',
        'secondary_phone' => '\TNT\Ebay\Commerce\Identity\V1\Model\Phone',
        'website' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'address' => null,
        'doing_business_as' => null,
        'email' => null,
        'name' => null,
        'primary_contact' => null,
        'primary_phone' => null,
        'secondary_phone' => null,
        'website' => null,
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
        'address' => 'address',
        'doing_business_as' => 'doingBusinessAs',
        'email' => 'email',
        'name' => 'name',
        'primary_contact' => 'primaryContact',
        'primary_phone' => 'primaryPhone',
        'secondary_phone' => 'secondaryPhone',
        'website' => 'website',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'address' => 'setAddress',
        'doing_business_as' => 'setDoingBusinessAs',
        'email' => 'setEmail',
        'name' => 'setName',
        'primary_contact' => 'setPrimaryContact',
        'primary_phone' => 'setPrimaryPhone',
        'secondary_phone' => 'setSecondaryPhone',
        'website' => 'setWebsite',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'address' => 'getAddress',
        'doing_business_as' => 'getDoingBusinessAs',
        'email' => 'getEmail',
        'name' => 'getName',
        'primary_contact' => 'getPrimaryContact',
        'primary_phone' => 'getPrimaryPhone',
        'secondary_phone' => 'getSecondaryPhone',
        'website' => 'getWebsite',
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
        $this->container['address'] = $data['address'] ?? null;
        $this->container['doing_business_as'] = $data['doing_business_as'] ?? null;
        $this->container['email'] = $data['email'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['primary_contact'] = $data['primary_contact'] ?? null;
        $this->container['primary_phone'] = $data['primary_phone'] ?? null;
        $this->container['secondary_phone'] = $data['secondary_phone'] ?? null;
        $this->container['website'] = $data['website'] ?? null;
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
     * Gets address.
     *
     * @return \TNT\Ebay\Commerce\Identity\V1\Model\Address|null
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address.
     *
     * @param \TNT\Ebay\Commerce\Identity\V1\Model\Address|null $address address
     *
     * @return self
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets doing_business_as.
     *
     * @return string|null
     */
    public function getDoingBusinessAs()
    {
        return $this->container['doing_business_as'];
    }

    /**
     * Sets doing_business_as.
     *
     * @param string|null $doing_business_as An additional name that is used for their business on eBay. The business name is returned in the name field.
     *
     * @return self
     */
    public function setDoingBusinessAs($doing_business_as)
    {
        $this->container['doing_business_as'] = $doing_business_as;

        return $this;
    }

    /**
     * Gets email.
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email.
     *
     * @param string|null $email the email address of the business account
     *
     * @return self
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets name.
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name.
     *
     * @param string|null $name the business name associated with the user's eBay account
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets primary_contact.
     *
     * @return \TNT\Ebay\Commerce\Identity\V1\Model\Contact|null
     */
    public function getPrimaryContact()
    {
        return $this->container['primary_contact'];
    }

    /**
     * Sets primary_contact.
     *
     * @param \TNT\Ebay\Commerce\Identity\V1\Model\Contact|null $primary_contact primary_contact
     *
     * @return self
     */
    public function setPrimaryContact($primary_contact)
    {
        $this->container['primary_contact'] = $primary_contact;

        return $this;
    }

    /**
     * Gets primary_phone.
     *
     * @return \TNT\Ebay\Commerce\Identity\V1\Model\Phone|null
     */
    public function getPrimaryPhone()
    {
        return $this->container['primary_phone'];
    }

    /**
     * Sets primary_phone.
     *
     * @param \TNT\Ebay\Commerce\Identity\V1\Model\Phone|null $primary_phone primary_phone
     *
     * @return self
     */
    public function setPrimaryPhone($primary_phone)
    {
        $this->container['primary_phone'] = $primary_phone;

        return $this;
    }

    /**
     * Gets secondary_phone.
     *
     * @return \TNT\Ebay\Commerce\Identity\V1\Model\Phone|null
     */
    public function getSecondaryPhone()
    {
        return $this->container['secondary_phone'];
    }

    /**
     * Sets secondary_phone.
     *
     * @param \TNT\Ebay\Commerce\Identity\V1\Model\Phone|null $secondary_phone secondary_phone
     *
     * @return self
     */
    public function setSecondaryPhone($secondary_phone)
    {
        $this->container['secondary_phone'] = $secondary_phone;

        return $this;
    }

    /**
     * Gets website.
     *
     * @return string|null
     */
    public function getWebsite()
    {
        return $this->container['website'];
    }

    /**
     * Sets website.
     *
     * @param string|null $website the business website address associated with the eBay account
     *
     * @return self
     */
    public function setWebsite($website)
    {
        $this->container['website'] = $website;

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
