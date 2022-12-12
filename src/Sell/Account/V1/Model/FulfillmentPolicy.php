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
 * FulfillmentPolicy.
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

use ArrayAccess;
use TNT\Ebay\Sell\Account\V1\ObjectSerializer;

/**
 * FulfillmentPolicy Class Doc Comment.
 *
 * @category Class
 * @description This type is used by the &lt;b&gt;fulfillmentPolicy&lt;/b&gt; response container, a container which defines a seller&#39;s fulfillment policy for a specific marketplace.
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class FulfillmentPolicy implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'FulfillmentPolicy';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'category_types' => '\TNT\Ebay\Sell\Account\V1\Model\CategoryType[]',
        'description' => 'string',
        'freight_shipping' => 'bool',
        'fulfillment_policy_id' => 'string',
        'global_shipping' => 'bool',
        'handling_time' => '\TNT\Ebay\Sell\Account\V1\Model\TimeDuration',
        'local_pickup' => 'bool',
        'marketplace_id' => 'string',
        'name' => 'string',
        'pickup_drop_off' => 'bool',
        'shipping_options' => '\TNT\Ebay\Sell\Account\V1\Model\ShippingOption[]',
        'ship_to_locations' => '\TNT\Ebay\Sell\Account\V1\Model\RegionSet',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'category_types' => null,
        'description' => null,
        'freight_shipping' => null,
        'fulfillment_policy_id' => null,
        'global_shipping' => null,
        'handling_time' => null,
        'local_pickup' => null,
        'marketplace_id' => null,
        'name' => null,
        'pickup_drop_off' => null,
        'shipping_options' => null,
        'ship_to_locations' => null,
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
        'category_types' => 'categoryTypes',
        'description' => 'description',
        'freight_shipping' => 'freightShipping',
        'fulfillment_policy_id' => 'fulfillmentPolicyId',
        'global_shipping' => 'globalShipping',
        'handling_time' => 'handlingTime',
        'local_pickup' => 'localPickup',
        'marketplace_id' => 'marketplaceId',
        'name' => 'name',
        'pickup_drop_off' => 'pickupDropOff',
        'shipping_options' => 'shippingOptions',
        'ship_to_locations' => 'shipToLocations',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'category_types' => 'setCategoryTypes',
        'description' => 'setDescription',
        'freight_shipping' => 'setFreightShipping',
        'fulfillment_policy_id' => 'setFulfillmentPolicyId',
        'global_shipping' => 'setGlobalShipping',
        'handling_time' => 'setHandlingTime',
        'local_pickup' => 'setLocalPickup',
        'marketplace_id' => 'setMarketplaceId',
        'name' => 'setName',
        'pickup_drop_off' => 'setPickupDropOff',
        'shipping_options' => 'setShippingOptions',
        'ship_to_locations' => 'setShipToLocations',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'category_types' => 'getCategoryTypes',
        'description' => 'getDescription',
        'freight_shipping' => 'getFreightShipping',
        'fulfillment_policy_id' => 'getFulfillmentPolicyId',
        'global_shipping' => 'getGlobalShipping',
        'handling_time' => 'getHandlingTime',
        'local_pickup' => 'getLocalPickup',
        'marketplace_id' => 'getMarketplaceId',
        'name' => 'getName',
        'pickup_drop_off' => 'getPickupDropOff',
        'shipping_options' => 'getShippingOptions',
        'ship_to_locations' => 'getShipToLocations',
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
        $this->container['category_types'] = $data['category_types'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['freight_shipping'] = $data['freight_shipping'] ?? null;
        $this->container['fulfillment_policy_id'] = $data['fulfillment_policy_id'] ?? null;
        $this->container['global_shipping'] = $data['global_shipping'] ?? null;
        $this->container['handling_time'] = $data['handling_time'] ?? null;
        $this->container['local_pickup'] = $data['local_pickup'] ?? null;
        $this->container['marketplace_id'] = $data['marketplace_id'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['pickup_drop_off'] = $data['pickup_drop_off'] ?? null;
        $this->container['shipping_options'] = $data['shipping_options'] ?? null;
        $this->container['ship_to_locations'] = $data['ship_to_locations'] ?? null;
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
     * Gets category_types.
     *
     * @return \TNT\Ebay\Sell\Account\V1\Model\CategoryType[]|null
     */
    public function getCategoryTypes()
    {
        return $this->container['category_types'];
    }

    /**
     * Sets category_types.
     *
     * @param \TNT\Ebay\Sell\Account\V1\Model\CategoryType[]|null $category_types this container indicates whether the fulfillment policy applies to motor vehicle listings, or if it applies to non-motor vehicle listings
     *
     * @return self
     */
    public function setCategoryTypes($category_types)
    {
        $this->container['category_types'] = $category_types;

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
     * @param string|null $description A seller-defined description of the fulfillment policy. This description is only for the seller's use, and is not exposed on any eBay pages. This field is returned if set for the policy. <br/><br/><b>Max length</b>: 250
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets freight_shipping.
     *
     * @return bool|null
     */
    public function getFreightShipping()
    {
        return $this->container['freight_shipping'];
    }

    /**
     * Sets freight_shipping.
     *
     * @param bool|null $freight_shipping If returned as <code>true</code>, the seller offers freight shipping. Freight shipping can be used for large items over 150 lbs.
     *
     * @return self
     */
    public function setFreightShipping($freight_shipping)
    {
        $this->container['freight_shipping'] = $freight_shipping;

        return $this;
    }

    /**
     * Gets fulfillment_policy_id.
     *
     * @return string|null
     */
    public function getFulfillmentPolicyId()
    {
        return $this->container['fulfillment_policy_id'];
    }

    /**
     * Sets fulfillment_policy_id.
     *
     * @param string|null $fulfillment_policy_id A unique eBay-assigned ID for the fulfillment policy. This ID is generated when the policy is created.
     *
     * @return self
     */
    public function setFulfillmentPolicyId($fulfillment_policy_id)
    {
        $this->container['fulfillment_policy_id'] = $fulfillment_policy_id;

        return $this;
    }

    /**
     * Gets global_shipping.
     *
     * @return bool|null
     */
    public function getGlobalShipping()
    {
        return $this->container['global_shipping'];
    }

    /**
     * Sets global_shipping.
     *
     * @param bool|null $global_shipping If returned as <code>true</code>, eBay's Global Shipping Program will be used by the seller to ship items to international locations.<br /><br /><span class=\"tablenote\"><b>Note</b>: On the US marketplace, the <em><b>Global Shipping Program</b></em> is scheduled to be replaced by a new intermediated international shipping program called <em><b>eBay International Shipping</b></em>. US sellers who are opted in to the Global Shipping Program will be automatically opted in to eBay International Shipping when it becomes available to them. All US sellers will be migrated by March 31, 2023. <br /><br />eBay International Shipping is an account level setting, and no field needs to be set in a Fulfillment business policy to enable it. As long as the US seller's account is opted in to eBay International Shipping, this shipping option will be enabled automatically for all listings where international shipping is available. <br /><br />A US seller who is opted in to eBay International Shipping can also specify individual international shipping service options for a Fulfillment business policy.</span>
     *
     * @return self
     */
    public function setGlobalShipping($global_shipping)
    {
        $this->container['global_shipping'] = $global_shipping;

        return $this;
    }

    /**
     * Gets handling_time.
     *
     * @return \TNT\Ebay\Sell\Account\V1\Model\TimeDuration|null
     */
    public function getHandlingTime()
    {
        return $this->container['handling_time'];
    }

    /**
     * Sets handling_time.
     *
     * @param \TNT\Ebay\Sell\Account\V1\Model\TimeDuration|null $handling_time handling_time
     *
     * @return self
     */
    public function setHandlingTime($handling_time)
    {
        $this->container['handling_time'] = $handling_time;

        return $this;
    }

    /**
     * Gets local_pickup.
     *
     * @return bool|null
     */
    public function getLocalPickup()
    {
        return $this->container['local_pickup'];
    }

    /**
     * Sets local_pickup.
     *
     * @param bool|null $local_pickup if returned as <code>true</code>, local pickup is available for this policy
     *
     * @return self
     */
    public function setLocalPickup($local_pickup)
    {
        $this->container['local_pickup'] = $local_pickup;

        return $this;
    }

    /**
     * Gets marketplace_id.
     *
     * @return string|null
     */
    public function getMarketplaceId()
    {
        return $this->container['marketplace_id'];
    }

    /**
     * Sets marketplace_id.
     *
     * @param string|null $marketplace_id The ID of the eBay marketplace to which this fulfillment policy applies. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/account/types/ba:MarketplaceIdEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setMarketplaceId($marketplace_id)
    {
        $this->container['marketplace_id'] = $marketplace_id;

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
     * @param string|null $name A seller-defined name for this fulfillment policy. Names must be unique for policies assigned to the same marketplace. <br/><br/><b>Max length</b>: 64
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets pickup_drop_off.
     *
     * @return bool|null
     */
    public function getPickupDropOff()
    {
        return $this->container['pickup_drop_off'];
    }

    /**
     * Sets pickup_drop_off.
     *
     * @param bool|null $pickup_drop_off If returned as <code>true</code>, the seller offers the \"Click and Collect\" option. <br/><br/>Currently, \"Click and Collect\" is available only to large retail merchants the eBay AU and UK marketplaces.
     *
     * @return self
     */
    public function setPickupDropOff($pickup_drop_off)
    {
        $this->container['pickup_drop_off'] = $pickup_drop_off;

        return $this;
    }

    /**
     * Gets shipping_options.
     *
     * @return \TNT\Ebay\Sell\Account\V1\Model\ShippingOption[]|null
     */
    public function getShippingOptions()
    {
        return $this->container['shipping_options'];
    }

    /**
     * Sets shipping_options.
     *
     * @param \TNT\Ebay\Sell\Account\V1\Model\ShippingOption[]|null $shipping_options This array is used to provide detailed information on the domestic and international shipping options available for the policy. A separate <b>ShippingOption</b> object covers domestic shipping service options and international shipping service options (if the seller ships to international locations). <br /><br />The <b>optionType</b> field indicates whether the <b>ShippingOption</b> object applies to domestic or international shipping, and the <b>costType</b> field indicates whether flat-rate shipping or calculated shipping will be used. <p>A separate <b>ShippingServices</b> object is used to specify cost and other details for every available domestic and international shipping service option. </p>
     *
     * @return self
     */
    public function setShippingOptions($shipping_options)
    {
        $this->container['shipping_options'] = $shipping_options;

        return $this;
    }

    /**
     * Gets ship_to_locations.
     *
     * @return \TNT\Ebay\Sell\Account\V1\Model\RegionSet|null
     */
    public function getShipToLocations()
    {
        return $this->container['ship_to_locations'];
    }

    /**
     * Sets ship_to_locations.
     *
     * @param \TNT\Ebay\Sell\Account\V1\Model\RegionSet|null $ship_to_locations ship_to_locations
     *
     * @return self
     */
    public function setShipToLocations($ship_to_locations)
    {
        $this->container['ship_to_locations'] = $ship_to_locations;

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
