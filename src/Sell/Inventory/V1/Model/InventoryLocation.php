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
 * InventoryLocation.
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
 * InventoryLocation Class Doc Comment.
 *
 * @category Class
 *
 * @description This type is used by the &lt;strong&gt;updateInventoryLocation&lt;/strong&gt; call to update operating hours, special hours, phone number, and other minor details of an inventory location.
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
class InventoryLocation implements ModelInterface, \ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'InventoryLocation';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'location_additional_information' => 'string',
        'location_instructions' => 'string',
        'location_web_url' => 'string',
        'name' => 'string',
        'operating_hours' => '\TNT\Ebay\Sell\Inventory\V1\Model\OperatingHours[]',
        'phone' => 'string',
        'special_hours' => '\TNT\Ebay\Sell\Inventory\V1\Model\SpecialHours[]',
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
        'location_additional_information' => null,
        'location_instructions' => null,
        'location_web_url' => null,
        'name' => null,
        'operating_hours' => null,
        'phone' => null,
        'special_hours' => null,
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
        'location_additional_information' => 'locationAdditionalInformation',
        'location_instructions' => 'locationInstructions',
        'location_web_url' => 'locationWebUrl',
        'name' => 'name',
        'operating_hours' => 'operatingHours',
        'phone' => 'phone',
        'special_hours' => 'specialHours',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'location_additional_information' => 'setLocationAdditionalInformation',
        'location_instructions' => 'setLocationInstructions',
        'location_web_url' => 'setLocationWebUrl',
        'name' => 'setName',
        'operating_hours' => 'setOperatingHours',
        'phone' => 'setPhone',
        'special_hours' => 'setSpecialHours',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'location_additional_information' => 'getLocationAdditionalInformation',
        'location_instructions' => 'getLocationInstructions',
        'location_web_url' => 'getLocationWebUrl',
        'name' => 'getName',
        'operating_hours' => 'getOperatingHours',
        'phone' => 'getPhone',
        'special_hours' => 'getSpecialHours',
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
        $this->container['location_additional_information'] = $data['location_additional_information'] ?? null;
        $this->container['location_instructions'] = $data['location_instructions'] ?? null;
        $this->container['location_web_url'] = $data['location_web_url'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['operating_hours'] = $data['operating_hours'] ?? null;
        $this->container['phone'] = $data['phone'] ?? null;
        $this->container['special_hours'] = $data['special_hours'] ?? null;
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
     * Gets location_additional_information.
     *
     * @return string|null
     */
    public function getLocationAdditionalInformation()
    {
        return $this->container['location_additional_information'];
    }

    /**
     * Sets location_additional_information.
     *
     * @param string|null $location_additional_information This text field is used by the merchant to provide/update additional information about an inventory location. Whatever text is passed in this field will replace the current text string defined for this field. If the text will not change, the same text should be passed in once again. <br/><br/><b>Max length</b>: 256
     *
     * @return self
     */
    public function setLocationAdditionalInformation($location_additional_information)
    {
        $this->container['location_additional_information'] = $location_additional_information;

        return $this;
    }

    /**
     * Gets location_instructions.
     *
     * @return string|null
     */
    public function getLocationInstructions()
    {
        return $this->container['location_instructions'];
    }

    /**
     * Sets location_instructions.
     *
     * @param string|null $location_instructions This text field is generally used by the merchant to provide/update special pickup instructions for a store inventory location. Although this field is optional, it is recommended that merchants provide this field to create a pleasant and easy pickup experience for In-Store Pickup and Click and Collect orders. If this field is not included in the call request payload, eBay will use the default pickup instructions contained in the merchant's profile (if available). Whatever text is passed in this field will replace the current text string defined for this field. If the text will not change, the same text should be passed in once again. <br/><br/><b>Max length</b>: 1000
     *
     * @return self
     */
    public function setLocationInstructions($location_instructions)
    {
        $this->container['location_instructions'] = $location_instructions;

        return $this;
    }

    /**
     * Gets location_web_url.
     *
     * @return string|null
     */
    public function getLocationWebUrl()
    {
        return $this->container['location_web_url'];
    }

    /**
     * Sets location_web_url.
     *
     * @param string|null $location_web_url This text field is used by the merchant to provide/update the Website address (URL) associated with the inventory location. The URL that is passed in this field will replace any other URL that may be defined for this field. <br/><br/><b>Max length</b>: 512
     *
     * @return self
     */
    public function setLocationWebUrl($location_web_url)
    {
        $this->container['location_web_url'] = $location_web_url;

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
     * @param string|null $name This text field is used by the merchant to update the name of the inventory location. This name should be a human-friendly name as it will be in In-Store Pickup and Click and Collect listings. A name is not required for warehouse inventory locations. For store inventory locations, this field is not immediately required, but will be required before an offer enabled with the In-Store Pickup or Click and Collect capability can be published. So, if the seller omitted this field in the <strong>createInventoryLocation</strong> call, it is required for an <strong>updateInventoryLocation</strong> call. The name that is passed in this field will replace any other name that may be defined for this field.
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets operating_hours.
     *
     * @return \TNT\Ebay\Sell\Inventory\V1\Model\OperatingHours[]|null
     */
    public function getOperatingHours()
    {
        return $this->container['operating_hours'];
    }

    /**
     * Sets operating_hours.
     *
     * @param \TNT\Ebay\Sell\Inventory\V1\Model\OperatingHours[]|null $operating_hours This container is used to provide/update the regular operating hours for a store location during the days of the week. A <strong>dayOfWeekEnum</strong> field and an <strong>intervals</strong> container will be needed for each day of the week that the store location is open. Note that if operating hours are already set for an inventory location for a specific day of the week, whatever is set through an <strong>updateInventoryLocation</strong> call will override those existing hours.
     *
     * @return self
     */
    public function setOperatingHours($operating_hours)
    {
        $this->container['operating_hours'] = $operating_hours;

        return $this;
    }

    /**
     * Gets phone.
     *
     * @return string|null
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone.
     *
     * @param string|null $phone This text field is used by the merchant to provide/update the phone number for the inventory location. The phone number that is passed in this field will replace any other phone number that may be defined for this field. <br/><br/><b>Max length</b>: 36
     *
     * @return self
     */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets special_hours.
     *
     * @return \TNT\Ebay\Sell\Inventory\V1\Model\SpecialHours[]|null
     */
    public function getSpecialHours()
    {
        return $this->container['special_hours'];
    }

    /**
     * Sets special_hours.
     *
     * @param \TNT\Ebay\Sell\Inventory\V1\Model\SpecialHours[]|null $special_hours This container is used to provide/update the special operating hours for a store location on a specific date, such as a holiday. The special hours specified for the specific date will override the normal operating hours for that particular day of the week. If special hours have already been set up for an inventory location, specifying special hours through an <strong>updateInventoryLocation</strong> call will only add to the list, unless the date(s) used are the same special date(s) already set up, in which case, the special hours set up through the <strong>updateInventoryLocation</strong> call will override the existing special hours.
     *
     * @return self
     */
    public function setSpecialHours($special_hours)
    {
        $this->container['special_hours'] = $special_hours;

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
