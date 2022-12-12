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
 * ListingPolicies.
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
 * ListingPolicies Class Doc Comment.
 *
 * @category Class
 *
 * @description This type is used to identify business policies including payment, return, and fulfillment policies, and also to identify custom policies. These policies are, or will be, associated with the listing. Every published offer must have a payment, return, and fulfillment business policy associated with it. This type is also used to override the shipping costs of one or more shipping service options that are associated with the fulfillment policy, to enable eBay Plus eligibility for a listing, or to enable the Best Offer feature on the listing.
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
class ListingPolicies implements ModelInterface, \ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'ListingPolicies';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'best_offer_terms' => '\TNT\Ebay\Sell\Inventory\V1\Model\BestOffer',
        'e_bay_plus_if_eligible' => 'bool',
        'fulfillment_policy_id' => 'string',
        'payment_policy_id' => 'string',
        'product_compliance_policy_ids' => 'string[]',
        'return_policy_id' => 'string',
        'shipping_cost_overrides' => '\TNT\Ebay\Sell\Inventory\V1\Model\ShippingCostOverride[]',
        'take_back_policy_id' => 'string',
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
        'best_offer_terms' => null,
        'e_bay_plus_if_eligible' => null,
        'fulfillment_policy_id' => null,
        'payment_policy_id' => null,
        'product_compliance_policy_ids' => null,
        'return_policy_id' => null,
        'shipping_cost_overrides' => null,
        'take_back_policy_id' => null,
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
        'best_offer_terms' => 'bestOfferTerms',
        'e_bay_plus_if_eligible' => 'eBayPlusIfEligible',
        'fulfillment_policy_id' => 'fulfillmentPolicyId',
        'payment_policy_id' => 'paymentPolicyId',
        'product_compliance_policy_ids' => 'productCompliancePolicyIds',
        'return_policy_id' => 'returnPolicyId',
        'shipping_cost_overrides' => 'shippingCostOverrides',
        'take_back_policy_id' => 'takeBackPolicyId',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'best_offer_terms' => 'setBestOfferTerms',
        'e_bay_plus_if_eligible' => 'setEBayPlusIfEligible',
        'fulfillment_policy_id' => 'setFulfillmentPolicyId',
        'payment_policy_id' => 'setPaymentPolicyId',
        'product_compliance_policy_ids' => 'setProductCompliancePolicyIds',
        'return_policy_id' => 'setReturnPolicyId',
        'shipping_cost_overrides' => 'setShippingCostOverrides',
        'take_back_policy_id' => 'setTakeBackPolicyId',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'best_offer_terms' => 'getBestOfferTerms',
        'e_bay_plus_if_eligible' => 'getEBayPlusIfEligible',
        'fulfillment_policy_id' => 'getFulfillmentPolicyId',
        'payment_policy_id' => 'getPaymentPolicyId',
        'product_compliance_policy_ids' => 'getProductCompliancePolicyIds',
        'return_policy_id' => 'getReturnPolicyId',
        'shipping_cost_overrides' => 'getShippingCostOverrides',
        'take_back_policy_id' => 'getTakeBackPolicyId',
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
        $this->container['best_offer_terms'] = $data['best_offer_terms'] ?? null;
        $this->container['e_bay_plus_if_eligible'] = $data['e_bay_plus_if_eligible'] ?? null;
        $this->container['fulfillment_policy_id'] = $data['fulfillment_policy_id'] ?? null;
        $this->container['payment_policy_id'] = $data['payment_policy_id'] ?? null;
        $this->container['product_compliance_policy_ids'] = $data['product_compliance_policy_ids'] ?? null;
        $this->container['return_policy_id'] = $data['return_policy_id'] ?? null;
        $this->container['shipping_cost_overrides'] = $data['shipping_cost_overrides'] ?? null;
        $this->container['take_back_policy_id'] = $data['take_back_policy_id'] ?? null;
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
     * Gets best_offer_terms.
     *
     * @return \TNT\Ebay\Sell\Inventory\V1\Model\BestOffer|null
     */
    public function getBestOfferTerms()
    {
        return $this->container['best_offer_terms'];
    }

    /**
     * Sets best_offer_terms.
     *
     * @param \TNT\Ebay\Sell\Inventory\V1\Model\BestOffer|null $best_offer_terms best_offer_terms
     *
     * @return self
     */
    public function setBestOfferTerms($best_offer_terms)
    {
        $this->container['best_offer_terms'] = $best_offer_terms;

        return $this;
    }

    /**
     * Gets e_bay_plus_if_eligible.
     *
     * @return bool|null
     */
    public function getEBayPlusIfEligible()
    {
        return $this->container['e_bay_plus_if_eligible'];
    }

    /**
     * Sets e_bay_plus_if_eligible.
     *
     * @param bool|null $e_bay_plus_if_eligible This field is included in an offer and set to <code>true</code> if a Top-Rated seller is opted in to the eBay Plus program. With the eBay Plus program, qualified sellers must commit to next-day delivery of the item, and the buyers must have an eBay Plus subscription to be eligible to receive the benefits of this program, which are free, next-day delivery, as well as free returns.<br><br>Currently, this program is only available on the Germany and Australian sites.<br/><br/>This field will be returned in the <strong>getOffer</strong> and <strong>getOffers</strong> calls if set for the offer.
     *
     * @return self
     */
    public function setEBayPlusIfEligible($e_bay_plus_if_eligible)
    {
        $this->container['e_bay_plus_if_eligible'] = $e_bay_plus_if_eligible;

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
     * @param string|null $fulfillment_policy_id This unique identifier indicates the fulfillment business policy that will be used once an offer is published and converted to an eBay listing. This fulfillment business policy will set all fulfillment-related settings for the eBay listing.<br/><br/>Business policies are not immediately required for offers, but are required before an offer can be published. The seller should review the fulfillment business policy before assigning it to the offer to make sure it is compatible with the inventory item and the offer settings. The seller may also want to review the shipping service costs in the fulfillment policy, and that seller might decide to override the shipping costs for one or more shipping service options by using the <strong>shippingCostOverrides</strong> container.<br/><br/>Business policies can be created and managed in My eBay or with the <strong>Account API</strong>. To get a list of all return policies associated with a seller's account on a specific eBay Marketplace, use the Account API's <strong>getFulfillmentPolicies</strong> call. There are also calls in the <strong>Account API</strong> to retrieve a fulfillment policy by policy ID or policy name.<br/><br/>This field will be returned in the <strong>getOffer</strong> and <strong>getOffers</strong> calls if set for the offer.
     *
     * @return self
     */
    public function setFulfillmentPolicyId($fulfillment_policy_id)
    {
        $this->container['fulfillment_policy_id'] = $fulfillment_policy_id;

        return $this;
    }

    /**
     * Gets payment_policy_id.
     *
     * @return string|null
     */
    public function getPaymentPolicyId()
    {
        return $this->container['payment_policy_id'];
    }

    /**
     * Sets payment_policy_id.
     *
     * @param string|null $payment_policy_id This unique identifier indicates the payment business policy that will be used once an offer is published and converted to an eBay listing. This payment business policy will set all payment-related settings for the eBay listing.<br/><br/>Business policies are not immediately required for offers, but are required before an offer can be published. The seller should review the payment business policy to make sure that it is compatible with the marketplace and listing category before assigning it to the offer.<br /><br />Business policies can be created and managed in My eBay or with the <strong>Account API</strong>. To get a list of all payment policies associated with a seller's account on a specific eBay Marketplace, use the Account API's <strong>getPaymentPolicies</strong> call. There are also calls in the <strong>Account API</strong> to retrieve a payment policy by policy ID or policy name.<br/><br/>This field will be returned in the <strong>getOffer</strong> and <strong>getOffers</strong> calls if set for the offer.
     *
     * @return self
     */
    public function setPaymentPolicyId($payment_policy_id)
    {
        $this->container['payment_policy_id'] = $payment_policy_id;

        return $this;
    }

    /**
     * Gets product_compliance_policy_ids.
     *
     * @return string[]|null
     */
    public function getProductCompliancePolicyIds()
    {
        return $this->container['product_compliance_policy_ids'];
    }

    /**
     * Sets product_compliance_policy_ids.
     *
     * @param string[]|null $product_compliance_policy_ids This field contains an array of up to five IDs specifying the seller created compliance policies for the listing. Custom policies provide buyers with important information and disclosures about products. For example, if you sell batteries and specific disclosures are required, your compliance policy could contain the required disclosures. See <a href=\"https://www.ebay.com/help/selling/custom-policies/custom-policies?id=5311\" target=\"_blank\">Custom Policies</a> for more information. Up to five different compliance policies can be applied to each listing. Refer to the <a href=\"/api-docs/sell/account/resources/methods#h2-custom_policy \">custom_policy</a> resource (in the <strong>Sell Account API</strong>) to create and manage custom policies.
     *
     * @return self
     */
    public function setProductCompliancePolicyIds($product_compliance_policy_ids)
    {
        $this->container['product_compliance_policy_ids'] = $product_compliance_policy_ids;

        return $this;
    }

    /**
     * Gets return_policy_id.
     *
     * @return string|null
     */
    public function getReturnPolicyId()
    {
        return $this->container['return_policy_id'];
    }

    /**
     * Sets return_policy_id.
     *
     * @param string|null $return_policy_id This unique identifier indicates the return business policy that will be used once an offer is published and converted to an eBay listing. This return business policy will set all return policy settings for the eBay listing.<br/><br/>Business policies are not immediately required for offers, but are required before an offer can be published. The seller should review the return business policy before assigning it to the offer to make sure it is compatible with the inventory item and the offer settings.<br/><br/>Business policies can be created and managed in My eBay or with the <strong>Account API</strong>. To get a list of all return policies associated with a seller's account on a specific eBay Marketplace, use the Account API's <strong>getReturnPolicies</strong> call. There are also calls in the <strong>Account API</strong> to retrieve a return policy by policy ID or policy name.<br/><br/>This field will be returned in the <strong>getOffer</strong> and <strong>getOffers</strong> calls if set for the offer.
     *
     * @return self
     */
    public function setReturnPolicyId($return_policy_id)
    {
        $this->container['return_policy_id'] = $return_policy_id;

        return $this;
    }

    /**
     * Gets shipping_cost_overrides.
     *
     * @return \TNT\Ebay\Sell\Inventory\V1\Model\ShippingCostOverride[]|null
     */
    public function getShippingCostOverrides()
    {
        return $this->container['shipping_cost_overrides'];
    }

    /**
     * Sets shipping_cost_overrides.
     *
     * @param \TNT\Ebay\Sell\Inventory\V1\Model\ShippingCostOverride[]|null $shipping_cost_overrides This container is used if the seller wishes to override the shipping costs or surcharge for one or more domestic or international shipping service options defined in the fulfillment listing policy. To override the costs of a specific domestic or international shipping service option, the seller must know the priority/order of that shipping service in the fulfillment listing policy. The name of a shipping service option can be found in the <strong>shippingOptions.shippingServices.shippingServiceCode</strong> field of the fulfillment policy, and the priority/order of that shipping service option is found in the <strong>shippingOptions.shippingServices.sortOrderId</strong> field. Both of these values can be retrieved by searching for that fulfillment policy with the <strong>getFulfillmentPolicies</strong> or <strong>getFulfillmentPolicyByName</strong> calls of the <strong>Account API</strong>. The <strong>shippingCostOverrides.priority</strong> value should match the <strong>shippingOptions.shippingServices.sortOrderId</strong> in order to override the shipping costs for that shipping service option. The seller must also ensure that the <strong>shippingServiceType</strong> value is set to <code>DOMESTIC</code> to override a domestic shipping service option, or to <code>INTERNATIONAL</code> to override an international shipping service option.<br/><br/>A separate <strong>ShippingCostOverrides</strong> node is needed for each shipping service option whose costs are being overridden. All defined fields of the <strong>shippingCostOverrides</strong> container should be included, even if the shipping costs and surcharge values are not changing.<br/><br/>The <strong>shippingCostOverrides</strong> container is returned in the <strong>getOffer</strong> and <strong>getOffers</strong> calls if one or more shipping cost overrides are being applied to the fulfillment policy.
     *
     * @return self
     */
    public function setShippingCostOverrides($shipping_cost_overrides)
    {
        $this->container['shipping_cost_overrides'] = $shipping_cost_overrides;

        return $this;
    }

    /**
     * Gets take_back_policy_id.
     *
     * @return string|null
     */
    public function getTakeBackPolicyId()
    {
        return $this->container['take_back_policy_id'];
    }

    /**
     * Sets take_back_policy_id.
     *
     * @param string|null $take_back_policy_id This field specifies the ID of the seller created take-back policy. The law in some countries may require sellers to take back a used product when the buyer buys a new product. See <a href=\"https://www.ebay.com/help/selling/custom-policies/custom-policies?id=5311\" target=\"_blank\">Custom Policies</a> for more information. One take-back policy ID can be specified for each listing. Refer to the <a href=\"/api-docs/sell/account/resources/methods#h2-custom_policy \">custom_policy</a> resource (in the <strong>Sell Account API</strong>) to create and manage takeback policies.
     *
     * @return self
     */
    public function setTakeBackPolicyId($take_back_policy_id)
    {
        $this->container['take_back_policy_id'] = $take_back_policy_id;

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
