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
 * ReturnPolicyRequest.
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
 * The version of the OpenAPI document: v1.7.0
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
 * ReturnPolicyRequest Class Doc Comment.
 *
 * @category Class
 * @description This root container defines a seller&#39;s return business policy for a specific marketplace and category group. This type is used when creating or updating a return business policy.
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ReturnPolicyRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'ReturnPolicyRequest';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'category_types' => '\TNT\Ebay\Sell\Account\V1\Model\CategoryType[]',
        'description' => 'string',
        'extended_holiday_returns_offered' => 'bool',
        'international_override' => '\TNT\Ebay\Sell\Account\V1\Model\InternationalReturnOverrideType',
        'marketplace_id' => 'string',
        'name' => 'string',
        'refund_method' => 'string',
        'restocking_fee_percentage' => 'string',
        'return_instructions' => 'string',
        'return_method' => 'string',
        'return_period' => '\TNT\Ebay\Sell\Account\V1\Model\TimeDuration',
        'returns_accepted' => 'bool',
        'return_shipping_cost_payer' => 'string',
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
        'extended_holiday_returns_offered' => null,
        'international_override' => null,
        'marketplace_id' => null,
        'name' => null,
        'refund_method' => null,
        'restocking_fee_percentage' => null,
        'return_instructions' => null,
        'return_method' => null,
        'return_period' => null,
        'returns_accepted' => null,
        'return_shipping_cost_payer' => null,
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
        'extended_holiday_returns_offered' => 'extendedHolidayReturnsOffered',
        'international_override' => 'internationalOverride',
        'marketplace_id' => 'marketplaceId',
        'name' => 'name',
        'refund_method' => 'refundMethod',
        'restocking_fee_percentage' => 'restockingFeePercentage',
        'return_instructions' => 'returnInstructions',
        'return_method' => 'returnMethod',
        'return_period' => 'returnPeriod',
        'returns_accepted' => 'returnsAccepted',
        'return_shipping_cost_payer' => 'returnShippingCostPayer',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'category_types' => 'setCategoryTypes',
        'description' => 'setDescription',
        'extended_holiday_returns_offered' => 'setExtendedHolidayReturnsOffered',
        'international_override' => 'setInternationalOverride',
        'marketplace_id' => 'setMarketplaceId',
        'name' => 'setName',
        'refund_method' => 'setRefundMethod',
        'restocking_fee_percentage' => 'setRestockingFeePercentage',
        'return_instructions' => 'setReturnInstructions',
        'return_method' => 'setReturnMethod',
        'return_period' => 'setReturnPeriod',
        'returns_accepted' => 'setReturnsAccepted',
        'return_shipping_cost_payer' => 'setReturnShippingCostPayer',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'category_types' => 'getCategoryTypes',
        'description' => 'getDescription',
        'extended_holiday_returns_offered' => 'getExtendedHolidayReturnsOffered',
        'international_override' => 'getInternationalOverride',
        'marketplace_id' => 'getMarketplaceId',
        'name' => 'getName',
        'refund_method' => 'getRefundMethod',
        'restocking_fee_percentage' => 'getRestockingFeePercentage',
        'return_instructions' => 'getReturnInstructions',
        'return_method' => 'getReturnMethod',
        'return_period' => 'getReturnPeriod',
        'returns_accepted' => 'getReturnsAccepted',
        'return_shipping_cost_payer' => 'getReturnShippingCostPayer',
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
        $this->container['extended_holiday_returns_offered'] = $data['extended_holiday_returns_offered'] ?? null;
        $this->container['international_override'] = $data['international_override'] ?? null;
        $this->container['marketplace_id'] = $data['marketplace_id'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['refund_method'] = $data['refund_method'] ?? null;
        $this->container['restocking_fee_percentage'] = $data['restocking_fee_percentage'] ?? null;
        $this->container['return_instructions'] = $data['return_instructions'] ?? null;
        $this->container['return_method'] = $data['return_method'] ?? null;
        $this->container['return_period'] = $data['return_period'] ?? null;
        $this->container['returns_accepted'] = $data['returns_accepted'] ?? null;
        $this->container['return_shipping_cost_payer'] = $data['return_shipping_cost_payer'] ?? null;
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
     * @param \TNT\Ebay\Sell\Account\V1\Model\CategoryType[]|null $category_types This container indicates which category group that the return policy applies to.<br/><br/><span class=\"tablenote\"><b>Note</b>: Return business policies are not applicable to motor vehicle listings, so the <b>categoryTypes.name</b> value must be set to <code>ALL_EXCLUDING_MOTORS_VEHICLES</code> for return business policies.</span>
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
     * @param string|null $description A seller-defined description of the return business policy. This description is only for the seller's use, and is not exposed on any eBay pages.  <br/><br/><b>Max length</b>: 250
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets extended_holiday_returns_offered.
     *
     * @return bool|null
     */
    public function getExtendedHolidayReturnsOffered()
    {
        return $this->container['extended_holiday_returns_offered'];
    }

    /**
     * Sets extended_holiday_returns_offered.
     *
     * @param bool|null $extended_holiday_returns_offered <p class=\"tablenote\"><span  style=\"color: #dd1e31;\"><b>Important!</b></span> This field is deprecated, since eBay no longer supports extended holiday returns. Any value supplied in this field is neither read nor returned.</p>
     *
     * @return self
     */
    public function setExtendedHolidayReturnsOffered($extended_holiday_returns_offered)
    {
        $this->container['extended_holiday_returns_offered'] = $extended_holiday_returns_offered;

        return $this;
    }

    /**
     * Gets international_override.
     *
     * @return \TNT\Ebay\Sell\Account\V1\Model\InternationalReturnOverrideType|null
     */
    public function getInternationalOverride()
    {
        return $this->container['international_override'];
    }

    /**
     * Sets international_override.
     *
     * @param \TNT\Ebay\Sell\Account\V1\Model\InternationalReturnOverrideType|null $international_override international_override
     *
     * @return self
     */
    public function setInternationalOverride($international_override)
    {
        $this->container['international_override'] = $international_override;

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
     * @param string|null $marketplace_id The ID of the eBay marketplace to which this return business policy applies.  For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/account/types/ba:MarketplaceIdEnum'>eBay API documentation</a>
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
     * @param string|null $name A seller-defined name for this return business policy. Names must be unique for policies assigned to the same marketplace. <br/><br/><b>Max length</b>: 64
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets refund_method.
     *
     * @return string|null
     */
    public function getRefundMethod()
    {
        return $this->container['refund_method'];
    }

    /**
     * Sets refund_method.
     *
     * @param string|null $refund_method This value indicates the refund method that will be used by the seller for buyer returns. In most cases, buyers will get their money back for returns, but for sellers who offer the 'Click and Collect' and 'Buy Online, Pick up in Store' option, the seller is able to offer a store/merchandise credit in addition to the 'money back' option. The buyer recieving money back for a return is always an option available to the buyer, even if this field is set to <code>MERCHANDISE_CREDIT</code>.<p class=\"tablenote\"><span  style=\"color: #dd1e31;\"><b>Important!</b></span> If this field is not included in a return business policy, the seller will still have the money back option in the case of a return.</p> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/account/types/api:RefundMethodEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setRefundMethod($refund_method)
    {
        $this->container['refund_method'] = $refund_method;

        return $this;
    }

    /**
     * Gets restocking_fee_percentage.
     *
     * @return string|null
     */
    public function getRestockingFeePercentage()
    {
        return $this->container['restocking_fee_percentage'];
    }

    /**
     * Sets restocking_fee_percentage.
     *
     * @param string|null $restocking_fee_percentage <p class=\"tablenote\"><span  style=\"color: #dd1e31;\"><b>Important!</b></span> This field is deprecated, since eBay no longer allows sellers to charge a restocking fee for buyer remorse returns. If this field is included, it is ignored.</p>
     *
     * @return self
     */
    public function setRestockingFeePercentage($restocking_fee_percentage)
    {
        $this->container['restocking_fee_percentage'] = $restocking_fee_percentage;

        return $this;
    }

    /**
     * Gets return_instructions.
     *
     * @return string|null
     */
    public function getReturnInstructions()
    {
        return $this->container['return_instructions'];
    }

    /**
     * Sets return_instructions.
     *
     * @param string|null $return_instructions This text-based field provides more details on seller-specified return instructions. <p class=\"tablenote\"><span  style=\"color: #dd1e31;\"><b>Important!</b></span> This field is no longer supported on many eBay marketplaces. To see if a marketplace and eBay category does support this field, call <a href=\"/api-docs/sell/metadata/resources/marketplace/methods/getReturnPolicies\">getReturnPolicies</a> method of the <b>Metadata API</b>. Then you will look for the <b>policyDescriptionEnabled</b> field with a value of <code>true</code> for the eBay category.</span></p><br/><b>Max length</b>: 5000 (8000 for DE)
     *
     * @return self
     */
    public function setReturnInstructions($return_instructions)
    {
        $this->container['return_instructions'] = $return_instructions;

        return $this;
    }

    /**
     * Gets return_method.
     *
     * @return string|null
     */
    public function getReturnMethod()
    {
        return $this->container['return_method'];
    }

    /**
     * Sets return_method.
     *
     * @param string|null $return_method This field can be used if the seller is willing and able to offer an alternative return method other than 'money back', such as an exchange or replacement item. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/account/types/api:ReturnMethodEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setReturnMethod($return_method)
    {
        $this->container['return_method'] = $return_method;

        return $this;
    }

    /**
     * Gets return_period.
     *
     * @return \TNT\Ebay\Sell\Account\V1\Model\TimeDuration|null
     */
    public function getReturnPeriod()
    {
        return $this->container['return_period'];
    }

    /**
     * Sets return_period.
     *
     * @param \TNT\Ebay\Sell\Account\V1\Model\TimeDuration|null $return_period return_period
     *
     * @return self
     */
    public function setReturnPeriod($return_period)
    {
        $this->container['return_period'] = $return_period;

        return $this;
    }

    /**
     * Gets returns_accepted.
     *
     * @return bool|null
     */
    public function getReturnsAccepted()
    {
        return $this->container['returns_accepted'];
    }

    /**
     * Sets returns_accepted.
     *
     * @param bool|null $returns_accepted If set to <code>true</code>, the seller accepts returns. <p><span class=\"tablenote\"><strong>Note:</strong>Top-Rated sellers must accept item returns and the <b>handlingTime</b> should be set to zero days or one day for a listing to receive a Top-Rated Plus badge on the View Item or search result pages. For more information on eBay's Top-Rated seller program, see <a href=\"http://pages.ebay.com/help/sell/top-rated.html\">Becoming a Top Rated Seller and qualifying for Top Rated Plus benefits</a>.</span></p>
     *
     * @return self
     */
    public function setReturnsAccepted($returns_accepted)
    {
        $this->container['returns_accepted'] = $returns_accepted;

        return $this;
    }

    /**
     * Gets return_shipping_cost_payer.
     *
     * @return string|null
     */
    public function getReturnShippingCostPayer()
    {
        return $this->container['return_shipping_cost_payer'];
    }

    /**
     * Sets return_shipping_cost_payer.
     *
     * @param string|null $return_shipping_cost_payer This field indicates who is responsible for paying for the shipping charges for returned items. The field can be set to either <code>BUYER</code> or <code>SELLER</code>.  <br/><br/>Depending on the return policy and specifics of the return, either the buyer or the seller can be responsible for the return shipping costs. Note that the seller is always responsible for return shipping costs for SNAD-related issues.  <br/><br/>This field is conditionally required if <b>returnsAccepted</b> is set to <code>true</code>. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/account/types/api:ReturnShippingCostPayerEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setReturnShippingCostPayer($return_shipping_cost_payer)
    {
        $this->container['return_shipping_cost_payer'] = $return_shipping_cost_payer;

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
