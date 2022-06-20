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
 * PaymentPolicyRequest.
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
 * PaymentPolicyRequest Class Doc Comment.
 *
 * @category Class
 * @description This root container defines a seller&#39;s payment business policy for a specific marketplace and category group. This type is used when creating or updating a payment business policy.
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PaymentPolicyRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'PaymentPolicyRequest';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'category_types' => '\TNT\Ebay\Sell\Account\V1\Model\CategoryType[]',
        'deposit' => '\TNT\Ebay\Sell\Account\V1\Model\Deposit',
        'description' => 'string',
        'full_payment_due_in' => '\TNT\Ebay\Sell\Account\V1\Model\TimeDuration',
        'immediate_pay' => 'bool',
        'marketplace_id' => 'string',
        'name' => 'string',
        'payment_instructions' => 'string',
        'payment_methods' => '\TNT\Ebay\Sell\Account\V1\Model\PaymentMethod[]',
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
        'deposit' => null,
        'description' => null,
        'full_payment_due_in' => null,
        'immediate_pay' => null,
        'marketplace_id' => null,
        'name' => null,
        'payment_instructions' => null,
        'payment_methods' => null,
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
        'deposit' => 'deposit',
        'description' => 'description',
        'full_payment_due_in' => 'fullPaymentDueIn',
        'immediate_pay' => 'immediatePay',
        'marketplace_id' => 'marketplaceId',
        'name' => 'name',
        'payment_instructions' => 'paymentInstructions',
        'payment_methods' => 'paymentMethods',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'category_types' => 'setCategoryTypes',
        'deposit' => 'setDeposit',
        'description' => 'setDescription',
        'full_payment_due_in' => 'setFullPaymentDueIn',
        'immediate_pay' => 'setImmediatePay',
        'marketplace_id' => 'setMarketplaceId',
        'name' => 'setName',
        'payment_instructions' => 'setPaymentInstructions',
        'payment_methods' => 'setPaymentMethods',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'category_types' => 'getCategoryTypes',
        'deposit' => 'getDeposit',
        'description' => 'getDescription',
        'full_payment_due_in' => 'getFullPaymentDueIn',
        'immediate_pay' => 'getImmediatePay',
        'marketplace_id' => 'getMarketplaceId',
        'name' => 'getName',
        'payment_instructions' => 'getPaymentInstructions',
        'payment_methods' => 'getPaymentMethods',
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
        $this->container['deposit'] = $data['deposit'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['full_payment_due_in'] = $data['full_payment_due_in'] ?? null;
        $this->container['immediate_pay'] = $data['immediate_pay'] ?? null;
        $this->container['marketplace_id'] = $data['marketplace_id'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['payment_instructions'] = $data['payment_instructions'] ?? null;
        $this->container['payment_methods'] = $data['payment_methods'] ?? null;
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
     * @param \TNT\Ebay\Sell\Account\V1\Model\CategoryType[]|null $category_types this container is used to specify whether the payment business policy applies to motor vehicle listings, or if it applies to non-motor vehicle listings
     *
     * @return self
     */
    public function setCategoryTypes($category_types)
    {
        $this->container['category_types'] = $category_types;

        return $this;
    }

    /**
     * Gets deposit.
     *
     * @return \TNT\Ebay\Sell\Account\V1\Model\Deposit|null
     */
    public function getDeposit()
    {
        return $this->container['deposit'];
    }

    /**
     * Sets deposit.
     *
     * @param \TNT\Ebay\Sell\Account\V1\Model\Deposit|null $deposit deposit
     *
     * @return self
     */
    public function setDeposit($deposit)
    {
        $this->container['deposit'] = $deposit;

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
     * @param string|null $description A seller-defined description of the payment business policy. This description is only for the seller's use, and is not exposed on any eBay pages.  <br/><br/><b>Max length</b>: 250
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets full_payment_due_in.
     *
     * @return \TNT\Ebay\Sell\Account\V1\Model\TimeDuration|null
     */
    public function getFullPaymentDueIn()
    {
        return $this->container['full_payment_due_in'];
    }

    /**
     * Sets full_payment_due_in.
     *
     * @param \TNT\Ebay\Sell\Account\V1\Model\TimeDuration|null $full_payment_due_in full_payment_due_in
     *
     * @return self
     */
    public function setFullPaymentDueIn($full_payment_due_in)
    {
        $this->container['full_payment_due_in'] = $full_payment_due_in;

        return $this;
    }

    /**
     * Gets immediate_pay.
     *
     * @return bool|null
     */
    public function getImmediatePay()
    {
        return $this->container['immediate_pay'];
    }

    /**
     * Sets immediate_pay.
     *
     * @param bool|null $immediate_pay This field should be included and set to <code>true</code> if the seller wants to require immediate payment from the buyer for: <ul><li>A fixed-price item</li><li>An auction item where the buyer is using the 'Buy it Now' option</li><li>A deposit for a motor vehicle listing</li></ul><br /><b>Default:</b> False
     *
     * @return self
     */
    public function setImmediatePay($immediate_pay)
    {
        $this->container['immediate_pay'] = $immediate_pay;

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
     * @param string|null $marketplace_id The ID of the eBay marketplace to which this payment business policy applies. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/account/types/ba:MarketplaceIdEnum'>eBay API documentation</a>
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
     * @param string|null $name A seller-defined name for this payment business policy. Names must be unique for policies assigned to the same marketplace.<br /><br /><b>Max length:</b> 64
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets payment_instructions.
     *
     * @return string|null
     */
    public function getPaymentInstructions()
    {
        return $this->container['payment_instructions'];
    }

    /**
     * Sets payment_instructions.
     *
     * @param string|null $payment_instructions <p class=\"tablenote\"><b>Note:</b> DO NOT USE THIS FIELD. Payment instructions are no longer supported by payment business policies.</p>A free-form string field that allows sellers to add detailed payment instructions to their listings.
     *
     * @return self
     */
    public function setPaymentInstructions($payment_instructions)
    {
        $this->container['payment_instructions'] = $payment_instructions;

        return $this;
    }

    /**
     * Gets payment_methods.
     *
     * @return \TNT\Ebay\Sell\Account\V1\Model\PaymentMethod[]|null
     */
    public function getPaymentMethods()
    {
        return $this->container['payment_methods'];
    }

    /**
     * Sets payment_methods.
     *
     * @param \TNT\Ebay\Sell\Account\V1\Model\PaymentMethod[]|null $payment_methods <p class=\"tablenote\"><b>Note:</b> This field applies only when the seller needs to specify one or more offline payment methods. eBay now manages the electronic payment options available to buyers to pay for the item.</p>This array is used to specify one or more offline payment methods that will be accepted for payment that occurs off of eBay's platform.
     *
     * @return self
     */
    public function setPaymentMethods($payment_methods)
    {
        $this->container['payment_methods'] = $payment_methods;

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