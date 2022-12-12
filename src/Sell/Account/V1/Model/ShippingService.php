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
 * ShippingService.
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
 * ShippingService Class Doc Comment.
 *
 * @category Class
 *
 * @description This type is used by the &lt;b&gt;shippingServices&lt;/b&gt; array, an array that provides details about every domestic and international shipping service option that is defined for the policy.
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
class ShippingService implements ModelInterface, \ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'ShippingService';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'additional_shipping_cost' => '\TNT\Ebay\Sell\Account\V1\Model\Amount',
        'buyer_responsible_for_pickup' => 'bool',
        'buyer_responsible_for_shipping' => 'bool',
        'cash_on_delivery_fee' => '\TNT\Ebay\Sell\Account\V1\Model\Amount',
        'free_shipping' => 'bool',
        'shipping_carrier_code' => 'string',
        'shipping_cost' => '\TNT\Ebay\Sell\Account\V1\Model\Amount',
        'shipping_service_code' => 'string',
        'ship_to_locations' => '\TNT\Ebay\Sell\Account\V1\Model\RegionSet',
        'sort_order' => 'int',
        'surcharge' => '\TNT\Ebay\Sell\Account\V1\Model\Amount',
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
        'additional_shipping_cost' => null,
        'buyer_responsible_for_pickup' => null,
        'buyer_responsible_for_shipping' => null,
        'cash_on_delivery_fee' => null,
        'free_shipping' => null,
        'shipping_carrier_code' => null,
        'shipping_cost' => null,
        'shipping_service_code' => null,
        'ship_to_locations' => null,
        'sort_order' => 'int32',
        'surcharge' => null,
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
        'additional_shipping_cost' => 'additionalShippingCost',
        'buyer_responsible_for_pickup' => 'buyerResponsibleForPickup',
        'buyer_responsible_for_shipping' => 'buyerResponsibleForShipping',
        'cash_on_delivery_fee' => 'cashOnDeliveryFee',
        'free_shipping' => 'freeShipping',
        'shipping_carrier_code' => 'shippingCarrierCode',
        'shipping_cost' => 'shippingCost',
        'shipping_service_code' => 'shippingServiceCode',
        'ship_to_locations' => 'shipToLocations',
        'sort_order' => 'sortOrder',
        'surcharge' => 'surcharge',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'additional_shipping_cost' => 'setAdditionalShippingCost',
        'buyer_responsible_for_pickup' => 'setBuyerResponsibleForPickup',
        'buyer_responsible_for_shipping' => 'setBuyerResponsibleForShipping',
        'cash_on_delivery_fee' => 'setCashOnDeliveryFee',
        'free_shipping' => 'setFreeShipping',
        'shipping_carrier_code' => 'setShippingCarrierCode',
        'shipping_cost' => 'setShippingCost',
        'shipping_service_code' => 'setShippingServiceCode',
        'ship_to_locations' => 'setShipToLocations',
        'sort_order' => 'setSortOrder',
        'surcharge' => 'setSurcharge',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'additional_shipping_cost' => 'getAdditionalShippingCost',
        'buyer_responsible_for_pickup' => 'getBuyerResponsibleForPickup',
        'buyer_responsible_for_shipping' => 'getBuyerResponsibleForShipping',
        'cash_on_delivery_fee' => 'getCashOnDeliveryFee',
        'free_shipping' => 'getFreeShipping',
        'shipping_carrier_code' => 'getShippingCarrierCode',
        'shipping_cost' => 'getShippingCost',
        'shipping_service_code' => 'getShippingServiceCode',
        'ship_to_locations' => 'getShipToLocations',
        'sort_order' => 'getSortOrder',
        'surcharge' => 'getSurcharge',
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
        $this->container['additional_shipping_cost'] = $data['additional_shipping_cost'] ?? null;
        $this->container['buyer_responsible_for_pickup'] = $data['buyer_responsible_for_pickup'] ?? null;
        $this->container['buyer_responsible_for_shipping'] = $data['buyer_responsible_for_shipping'] ?? null;
        $this->container['cash_on_delivery_fee'] = $data['cash_on_delivery_fee'] ?? null;
        $this->container['free_shipping'] = $data['free_shipping'] ?? null;
        $this->container['shipping_carrier_code'] = $data['shipping_carrier_code'] ?? null;
        $this->container['shipping_cost'] = $data['shipping_cost'] ?? null;
        $this->container['shipping_service_code'] = $data['shipping_service_code'] ?? null;
        $this->container['ship_to_locations'] = $data['ship_to_locations'] ?? null;
        $this->container['sort_order'] = $data['sort_order'] ?? null;
        $this->container['surcharge'] = $data['surcharge'] ?? null;
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
     * Gets additional_shipping_cost.
     *
     * @return \TNT\Ebay\Sell\Account\V1\Model\Amount|null
     */
    public function getAdditionalShippingCost()
    {
        return $this->container['additional_shipping_cost'];
    }

    /**
     * Sets additional_shipping_cost.
     *
     * @param \TNT\Ebay\Sell\Account\V1\Model\Amount|null $additional_shipping_cost additional_shipping_cost
     *
     * @return self
     */
    public function setAdditionalShippingCost($additional_shipping_cost)
    {
        $this->container['additional_shipping_cost'] = $additional_shipping_cost;

        return $this;
    }

    /**
     * Gets buyer_responsible_for_pickup.
     *
     * @return bool|null
     */
    public function getBuyerResponsibleForPickup()
    {
        return $this->container['buyer_responsible_for_pickup'];
    }

    /**
     * Sets buyer_responsible_for_pickup.
     *
     * @param bool|null $buyer_responsible_for_pickup This field should be included and set to <code>true</code> for a motor vehicle listing if it will be the buyer's responsibility to pick up the purchased motor vehicle after full payment is made. <br /><br />This field is only applicable to motor vehicle listings. In the majority of motor vehicle listings, the seller does make the buyer responsible for pickup or shipment of the vehicle. <br/><br/>This field is returned if set.<br/><br/><b>Default</b>: false
     *
     * @return self
     */
    public function setBuyerResponsibleForPickup($buyer_responsible_for_pickup)
    {
        $this->container['buyer_responsible_for_pickup'] = $buyer_responsible_for_pickup;

        return $this;
    }

    /**
     * Gets buyer_responsible_for_shipping.
     *
     * @return bool|null
     */
    public function getBuyerResponsibleForShipping()
    {
        return $this->container['buyer_responsible_for_shipping'];
    }

    /**
     * Sets buyer_responsible_for_shipping.
     *
     * @param bool|null $buyer_responsible_for_shipping This field should be included and set to <code>true</code> for a motor vehicle listing if it will be the buyer's responsibility to arrange for shipment of a purchased motor vehicle after full payment is made. <br /><br />This field is only applicable to motor vehicle listings. In the majority of motor vehicle listings, the seller does make the buyer responsible for pickup or shipment of the vehicle. <br/><br/>This field is returned if set.<br/><br/><b>Default</b>: false
     *
     * @return self
     */
    public function setBuyerResponsibleForShipping($buyer_responsible_for_shipping)
    {
        $this->container['buyer_responsible_for_shipping'] = $buyer_responsible_for_shipping;

        return $this;
    }

    /**
     * Gets cash_on_delivery_fee.
     *
     * @return \TNT\Ebay\Sell\Account\V1\Model\Amount|null
     */
    public function getCashOnDeliveryFee()
    {
        return $this->container['cash_on_delivery_fee'];
    }

    /**
     * Sets cash_on_delivery_fee.
     *
     * @param \TNT\Ebay\Sell\Account\V1\Model\Amount|null $cash_on_delivery_fee cash_on_delivery_fee
     *
     * @return self
     */
    public function setCashOnDeliveryFee($cash_on_delivery_fee)
    {
        $this->container['cash_on_delivery_fee'] = $cash_on_delivery_fee;

        return $this;
    }

    /**
     * Gets free_shipping.
     *
     * @return bool|null
     */
    public function getFreeShipping()
    {
        return $this->container['free_shipping'];
    }

    /**
     * Sets free_shipping.
     *
     * @param bool|null $free_shipping This field is included and set to <code>true</code> if the seller offers a free shipping option to the buyer. <br /><br />This field can only be included and set to <code>true</code> for the first domestic shipping service option specified in the <b>shippingServices</b> container (it is ignored if set for subsequent shipping services or for any international shipping service option). <br /><br />The first specified shipping service option has a <b>sortOrder</b> value of <code>1</code> or if the <b>sortOrderId</b> field is not used, it is the shipping service option that's specified first in the <b>shippingServices</b> container.<br/><br/>This container is returned if set.
     *
     * @return self
     */
    public function setFreeShipping($free_shipping)
    {
        $this->container['free_shipping'] = $free_shipping;

        return $this;
    }

    /**
     * Gets shipping_carrier_code.
     *
     * @return string|null
     */
    public function getShippingCarrierCode()
    {
        return $this->container['shipping_carrier_code'];
    }

    /**
     * Sets shipping_carrier_code.
     *
     * @param string|null $shipping_carrier_code This field sets/indicates the shipping carrier, such as <code>USPS</code>, <code>FedEx</code>, or <code>UPS</code>. Although this field uses the <b>string</b> type, the seller must pass in a pre-defined enumeration value here. <br /><br />For a full list of shipping carrier enum values for a specified eBay marketplace, the <b>GeteBayDetails</b> call of the <b>Trading API</b> can be used, and the <b>DetailName</b> field's value should be set to <code>ShippingCarrierDetails</code>. The enum values for each shipping carriers can be found in each <b>ShippingCarrierDetails.ShippingCarrier</b> field in the response payload.<br/><br/> This field is actually optional, as the shipping carrier is also tied into the <b>shippingServiceCode</b> enum value, and that field is required for every specified shipping service option.<br/><br/>This field is returned if set.
     *
     * @return self
     */
    public function setShippingCarrierCode($shipping_carrier_code)
    {
        $this->container['shipping_carrier_code'] = $shipping_carrier_code;

        return $this;
    }

    /**
     * Gets shipping_cost.
     *
     * @return \TNT\Ebay\Sell\Account\V1\Model\Amount|null
     */
    public function getShippingCost()
    {
        return $this->container['shipping_cost'];
    }

    /**
     * Sets shipping_cost.
     *
     * @param \TNT\Ebay\Sell\Account\V1\Model\Amount|null $shipping_cost shipping_cost
     *
     * @return self
     */
    public function setShippingCost($shipping_cost)
    {
        $this->container['shipping_cost'] = $shipping_cost;

        return $this;
    }

    /**
     * Gets shipping_service_code.
     *
     * @return string|null
     */
    public function getShippingServiceCode()
    {
        return $this->container['shipping_service_code'];
    }

    /**
     * Sets shipping_service_code.
     *
     * @param string|null $shipping_service_code This field sets/indicates the domestic or international shipping service option, such as <code>USPSPriority</code>, <code>FedEx2Day</code>, or <code>UPS3rdDay</code>. Although this field uses the <b>string</b> type, the seller must pass in a pre-defined enumeration value here. <br /><br />For a full list of shipping service option enum values for a specified eBay marketplace, the <b>GeteBayDetails</b> call of the <b>Trading API</b> can be used, and the <b>DetailName</b> field's value should be set to <code>ShippingServiceDetails</code>. <br /><br />The enum values for each shipping service option can be found in each <b>ShippingServiceDetails.ShippingService</b> field in the response payload. The seller must make sure that the shipping service option is still valid, which is indicated by a <code>true</code> value in the corresponding <b>ValidForSellingFlow</b> boolean field. International shipping service options are typically returned at the top of the response payload, and are indicated by an <b>InternationalService</b> boolean field that reads <code>true</code>. <br /><br />The <b>InternationalService</b> boolean field is not returned at all for domestic shipping service options. <br/><br/> This field is required for every specified shipping service option.<br/><br/>This field is returned if set.
     *
     * @return self
     */
    public function setShippingServiceCode($shipping_service_code)
    {
        $this->container['shipping_service_code'] = $shipping_service_code;

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
     * Gets sort_order.
     *
     * @return int|null
     */
    public function getSortOrder()
    {
        return $this->container['sort_order'];
    }

    /**
     * Sets sort_order.
     *
     * @param int|null $sort_order The integer value set in this field controls the order of the corresponding domestic or international shipping service option in the View Item and Checkout pages. <br/><br/>Sellers can specify up to four domestic shipping services (in four separate <b>shippingService</b> containers), so valid values are 1, 2, 3, and 4. A shipping service option with a <b>sortOrder</b> value of <code>1</code> appears at the top of View Item and Checkout pages. Conversely, a shipping service option with a <b>sortOrder</b> value of <code>1</code> appears at the bottom of the list. <br/><br/>Sellers can specify up to five international shipping services (in five separate <b>shippingService</b> containers), so valid values for international shipping services are 1, 2, 3, 4, and 5. Similarly to domestic shipping service options, the <b>sortOrder</b> value of a international shipping service option controls the placement of that shipping service option in the View Item and Checkout pages. <br/><br/>If the <b>sortOrder</b> field is not supplied, the order of domestic and international shipping service options is determined by the order in which they are listed in the API call. <br/><br/><b>Min</b>: 1. <b>Max</b>: 4 (for domestic shipping service) or 5 (for international shipping service).
     *
     * @return self
     */
    public function setSortOrder($sort_order)
    {
        $this->container['sort_order'] = $sort_order;

        return $this;
    }

    /**
     * Gets surcharge.
     *
     * @return \TNT\Ebay\Sell\Account\V1\Model\Amount|null
     */
    public function getSurcharge()
    {
        return $this->container['surcharge'];
    }

    /**
     * Sets surcharge.
     *
     * @param \TNT\Ebay\Sell\Account\V1\Model\Amount|null $surcharge surcharge
     *
     * @return self
     */
    public function setSurcharge($surcharge)
    {
        $this->container['surcharge'] = $surcharge;

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
