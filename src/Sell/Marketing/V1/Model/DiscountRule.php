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
 * DiscountRule.
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
 * Marketing API.
 *
 * <p>The <i>Marketing API </i> offers two platforms that sellers can use to promote and advertise their products:</p> <ul><li><b>Promoted Listings</b> is an eBay ad service that lets sellers set up <i>ad campaigns </i> for the products they want to promote. eBay displays the ads in search results and in other marketing modules as <b>SPONSORED</b> listings. If an item in a Promoted Listings campaign sells, the seller is assessed a Promoted Listings fee, which is a seller-specified percentage applied to the sales price. For complete details, refer to the <a href=\"/api-docs/sell/static/marketing/pl-landing.html\">Promoted Listings playbook</a>.</li><li><b>Promotions Manager</b> gives sellers a way to offer discounts on specific items as a way to attract buyers to their inventory. Sellers can set up discounts (such as \"20% off\" and other types of offers) on specific items or on an entire customer order. To further attract buyers, eBay prominently displays promotion <i>teasers</i> throughout buyer flows. For complete details, see <a href=\"/api-docs/sell/static/marketing/promotions-manager.html\">Promotions Manager</a>.</li></ul>  <p><b>Marketing reports</b>, on both the Promoted Listings and Promotions Manager platforms, give sellers information that shows the effectiveness of their marketing strategies. The data gives sellers the ability to review and fine tune their marketing efforts.</p> <p class=\"tablenote\"><b>Important!</b> Sellers must have an active eBay Store subscription, and they must accept the <b>Terms and Conditions</b> before they can make requests to these APIs in the Production environment. There are also site-specific listings requirements and restrictions associated with these marketing tools, as listed in the \"requirements and restrictions\" sections for <a href=\"/api-docs/sell/marketing/static/overview.html#PL-requirements\">Promoted Listings</a> and <a href=\"/api-docs/sell/marketing/static/overview.html#PM-requirements\">Promotions Manager</a>.</p> <p>The table below lists all the Marketing API calls grouped by resource.</p>
 *
 * The version of the OpenAPI document: v1.14.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace TNT\Ebay\Sell\Marketing\V1\Model;

use ArrayAccess;
use TNT\Ebay\Sell\Marketing\V1\ObjectSerializer;

/**
 * DiscountRule Class Doc Comment.
 *
 * @category Class
 * @description This complex type defines a promotion as being either a monetary amount or a percentage of a sales price that&#39;s subtracted from the price of an item or order. &lt;p&gt;Set the amount of the discount and the rules that govern when the discount triggers using the &lt;b&gt;discountBenefit&lt;/b&gt; and &lt;b&gt;discountSpecification&lt;/b&gt; fields.&lt;/p&gt;  &lt;p class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; In &lt;b&gt;volume pricing promotions&lt;/b&gt;, you must configure at least two &lt;b&gt;discountRule&lt;/b&gt; containers and at most four.&lt;/p&gt;
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class DiscountRule implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'DiscountRule';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'discount_benefit' => '\TNT\Ebay\Sell\Marketing\V1\Model\DiscountBenefit',
        'discount_specification' => '\TNT\Ebay\Sell\Marketing\V1\Model\DiscountSpecification',
        'max_discount_amount' => '\TNT\Ebay\Sell\Marketing\V1\Model\Amount',
        'rule_order' => 'int',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'discount_benefit' => null,
        'discount_specification' => null,
        'max_discount_amount' => null,
        'rule_order' => 'int32',
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
        'discount_benefit' => 'discountBenefit',
        'discount_specification' => 'discountSpecification',
        'max_discount_amount' => 'maxDiscountAmount',
        'rule_order' => 'ruleOrder',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'discount_benefit' => 'setDiscountBenefit',
        'discount_specification' => 'setDiscountSpecification',
        'max_discount_amount' => 'setMaxDiscountAmount',
        'rule_order' => 'setRuleOrder',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'discount_benefit' => 'getDiscountBenefit',
        'discount_specification' => 'getDiscountSpecification',
        'max_discount_amount' => 'getMaxDiscountAmount',
        'rule_order' => 'getRuleOrder',
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
        $this->container['discount_benefit'] = $data['discount_benefit'] ?? null;
        $this->container['discount_specification'] = $data['discount_specification'] ?? null;
        $this->container['max_discount_amount'] = $data['max_discount_amount'] ?? null;
        $this->container['rule_order'] = $data['rule_order'] ?? null;
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
     * Gets discount_benefit.
     *
     * @return \TNT\Ebay\Sell\Marketing\V1\Model\DiscountBenefit|null
     */
    public function getDiscountBenefit()
    {
        return $this->container['discount_benefit'];
    }

    /**
     * Sets discount_benefit.
     *
     * @param \TNT\Ebay\Sell\Marketing\V1\Model\DiscountBenefit|null $discount_benefit discount_benefit
     *
     * @return self
     */
    public function setDiscountBenefit($discount_benefit)
    {
        $this->container['discount_benefit'] = $discount_benefit;

        return $this;
    }

    /**
     * Gets discount_specification.
     *
     * @return \TNT\Ebay\Sell\Marketing\V1\Model\DiscountSpecification|null
     */
    public function getDiscountSpecification()
    {
        return $this->container['discount_specification'];
    }

    /**
     * Sets discount_specification.
     *
     * @param \TNT\Ebay\Sell\Marketing\V1\Model\DiscountSpecification|null $discount_specification discount_specification
     *
     * @return self
     */
    public function setDiscountSpecification($discount_specification)
    {
        $this->container['discount_specification'] = $discount_specification;

        return $this;
    }

    /**
     * Gets max_discount_amount.
     *
     * @return \TNT\Ebay\Sell\Marketing\V1\Model\Amount|null
     */
    public function getMaxDiscountAmount()
    {
        return $this->container['max_discount_amount'];
    }

    /**
     * Sets max_discount_amount.
     *
     * @param \TNT\Ebay\Sell\Marketing\V1\Model\Amount|null $max_discount_amount max_discount_amount
     *
     * @return self
     */
    public function setMaxDiscountAmount($max_discount_amount)
    {
        $this->container['max_discount_amount'] = $max_discount_amount;

        return $this;
    }

    /**
     * Gets rule_order.
     *
     * @return int|null
     */
    public function getRuleOrder()
    {
        return $this->container['rule_order'];
    }

    /**
     * Sets rule_order.
     *
     * @param int|null $rule_order This field indicates the order in which the <b>discountRules</b> are presented. The value specified for this field must equal the associated <b>minQuantity</b> value. <br><br><i>Required if </i> you are creating a volume pricing promotion.
     *
     * @return self
     */
    public function setRuleOrder($rule_order)
    {
        $this->container['rule_order'] = $rule_order;

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
