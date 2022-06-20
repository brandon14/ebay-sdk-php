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
 * CharityOrg.
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
 * Charity API.
 *
 * The Charity API allows third-party developers to search for and access details on supported charitable organizations.
 *
 * The version of the OpenAPI document: v1.2.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace TNT\Ebay\Commerce\Charity\V1\Model;

use ArrayAccess;
use TNT\Ebay\Commerce\Charity\V1\ObjectSerializer;

/**
 * CharityOrg Class Doc Comment.
 *
 * @category Class
 * @description The full location, ID, logo and other details of the charity organization.
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CharityOrg implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'CharityOrg';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'charity_org_id' => 'string',
        'description' => 'string',
        'location' => '\TNT\Ebay\Commerce\Charity\V1\Model\Location',
        'logo_image' => '\TNT\Ebay\Commerce\Charity\V1\Model\Image',
        'mission_statement' => 'string',
        'name' => 'string',
        'registration_id' => 'string',
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
        'charity_org_id' => null,
        'description' => null,
        'location' => null,
        'logo_image' => null,
        'mission_statement' => null,
        'name' => null,
        'registration_id' => null,
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
        'charity_org_id' => 'charityOrgId',
        'description' => 'description',
        'location' => 'location',
        'logo_image' => 'logoImage',
        'mission_statement' => 'missionStatement',
        'name' => 'name',
        'registration_id' => 'registrationId',
        'website' => 'website',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'charity_org_id' => 'setCharityOrgId',
        'description' => 'setDescription',
        'location' => 'setLocation',
        'logo_image' => 'setLogoImage',
        'mission_statement' => 'setMissionStatement',
        'name' => 'setName',
        'registration_id' => 'setRegistrationId',
        'website' => 'setWebsite',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'charity_org_id' => 'getCharityOrgId',
        'description' => 'getDescription',
        'location' => 'getLocation',
        'logo_image' => 'getLogoImage',
        'mission_statement' => 'getMissionStatement',
        'name' => 'getName',
        'registration_id' => 'getRegistrationId',
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
        $this->container['charity_org_id'] = $data['charity_org_id'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['location'] = $data['location'] ?? null;
        $this->container['logo_image'] = $data['logo_image'] ?? null;
        $this->container['mission_statement'] = $data['mission_statement'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['registration_id'] = $data['registration_id'] ?? null;
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
     * Gets charity_org_id.
     *
     * @return string|null
     */
    public function getCharityOrgId()
    {
        return $this->container['charity_org_id'];
    }

    /**
     * Sets charity_org_id.
     *
     * @param string|null $charity_org_id the ID of the charitable organization
     *
     * @return self
     */
    public function setCharityOrgId($charity_org_id)
    {
        $this->container['charity_org_id'] = $charity_org_id;

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
     * @param string|null $description the description of the charitable organization
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets location.
     *
     * @return \TNT\Ebay\Commerce\Charity\V1\Model\Location|null
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location.
     *
     * @param \TNT\Ebay\Commerce\Charity\V1\Model\Location|null $location location
     *
     * @return self
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets logo_image.
     *
     * @return \TNT\Ebay\Commerce\Charity\V1\Model\Image|null
     */
    public function getLogoImage()
    {
        return $this->container['logo_image'];
    }

    /**
     * Sets logo_image.
     *
     * @param \TNT\Ebay\Commerce\Charity\V1\Model\Image|null $logo_image logo_image
     *
     * @return self
     */
    public function setLogoImage($logo_image)
    {
        $this->container['logo_image'] = $logo_image;

        return $this;
    }

    /**
     * Gets mission_statement.
     *
     * @return string|null
     */
    public function getMissionStatement()
    {
        return $this->container['mission_statement'];
    }

    /**
     * Sets mission_statement.
     *
     * @param string|null $mission_statement the mission statement of the charitable organization
     *
     * @return self
     */
    public function setMissionStatement($mission_statement)
    {
        $this->container['mission_statement'] = $mission_statement;

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
     * @param string|null $name the name of the charitable organization
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets registration_id.
     *
     * @return string|null
     */
    public function getRegistrationId()
    {
        return $this->container['registration_id'];
    }

    /**
     * Sets registration_id.
     *
     * @param string|null $registration_id The registration ID for the charitable organization.<br /><br /><span class=\"tablenote\"><span style=\"color:#004680\"><strong>Note:</strong></span> For the US marketplace, this is the EIN.</span>
     *
     * @return self
     */
    public function setRegistrationId($registration_id)
    {
        $this->container['registration_id'] = $registration_id;

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
     * @param string|null $website the link to the website for the charitable organization
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
