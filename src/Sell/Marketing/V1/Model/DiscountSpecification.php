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
 * DiscountSpecification.
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
 * DiscountSpecification Class Doc Comment.
 *
 * @category Class
 * @description This container defines the criteria for when the discounts of a promotion trigger, such as the minimum quantity the buyer must purchase before the promotion kicks in. The promotional discount is applied each time the criteria defined by this container is met.  &lt;p&gt;&lt;b&gt;Note:&lt;/b&gt; When configuring the rules that govern when the discounts are applied, populate just one of the following fields in the &lt;b&gt;discountSpecification&lt;/b&gt; container:&lt;/p&gt;  &lt;ul&gt;&lt;li&gt;&lt;b&gt;minAmount&lt;/b&gt;&lt;/li&gt; &lt;li&gt;&lt;b&gt;minQuantity&lt;/b&gt;&lt;/li&gt; &lt;li&gt;&lt;b&gt;forEachQuantity&lt;/b&gt;&lt;/li&gt; &lt;li&gt;&lt;b&gt;forEachAmount&lt;/b&gt;&lt;/li&gt;&lt;/ul&gt; &lt;p class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Tip:&lt;/b&gt; Refer to &lt;a href&#x3D;\&quot;/api-docs/sell/static/marketing/pm-specifying-discounts.html\&quot;&gt;Configuring discounts for threshold promotions&lt;/a&gt; for information and examples on how to combine &lt;b&gt;discountBenefit&lt;/b&gt; and &lt;b&gt;discountSpecification&lt;/b&gt; to create different types of promotions.&lt;/p&gt;
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class DiscountSpecification implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'DiscountSpecification';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'for_each_amount' => '\TNT\Ebay\Sell\Marketing\V1\Model\Amount',
        'for_each_quantity' => 'int',
        'min_amount' => '\TNT\Ebay\Sell\Marketing\V1\Model\Amount',
        'min_quantity' => 'int',
        'number_of_discounted_items' => 'int',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'for_each_amount' => null,
        'for_each_quantity' => 'int32',
        'min_amount' => null,
        'min_quantity' => 'int32',
        'number_of_discounted_items' => 'int32',
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
        'for_each_amount' => 'forEachAmount',
        'for_each_quantity' => 'forEachQuantity',
        'min_amount' => 'minAmount',
        'min_quantity' => 'minQuantity',
        'number_of_discounted_items' => 'numberOfDiscountedItems',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'for_each_amount' => 'setForEachAmount',
        'for_each_quantity' => 'setForEachQuantity',
        'min_amount' => 'setMinAmount',
        'min_quantity' => 'setMinQuantity',
        'number_of_discounted_items' => 'setNumberOfDiscountedItems',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'for_each_amount' => 'getForEachAmount',
        'for_each_quantity' => 'getForEachQuantity',
        'min_amount' => 'getMinAmount',
        'min_quantity' => 'getMinQuantity',
        'number_of_discounted_items' => 'getNumberOfDiscountedItems',
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
        $this->container['for_each_amount'] = $data['for_each_amount'] ?? null;
        $this->container['for_each_quantity'] = $data['for_each_quantity'] ?? null;
        $this->container['min_amount'] = $data['min_amount'] ?? null;
        $this->container['min_quantity'] = $data['min_quantity'] ?? null;
        $this->container['number_of_discounted_items'] = $data['number_of_discounted_items'] ?? null;
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
     * Gets for_each_amount.
     *
     * @return \TNT\Ebay\Sell\Marketing\V1\Model\Amount|null
     */
    public function getForEachAmount()
    {
        return $this->container['for_each_amount'];
    }

    /**
     * Sets for_each_amount.
     *
     * @param \TNT\Ebay\Sell\Marketing\V1\Model\Amount|null $for_each_amount for_each_amount
     *
     * @return self
     */
    public function setForEachAmount($for_each_amount)
    {
        $this->container['for_each_amount'] = $for_each_amount;

        return $this;
    }

    /**
     * Gets for_each_quantity.
     *
     * @return int|null
     */
    public function getForEachQuantity()
    {
        return $this->container['for_each_quantity'];
    }

    /**
     * Sets for_each_quantity.
     *
     * @param int|null $for_each_quantity The number of items that must be purchased in order to qualify for the discount.  <br><br><b>Valid values:</b> <br><code> &nbsp; 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, <br> &nbsp; 12, 13, 14, 15, 16, 17, 18, 19 <br> &nbsp; 20, 25, 50, 75, 100</code>
     *
     * @return self
     */
    public function setForEachQuantity($for_each_quantity)
    {
        $this->container['for_each_quantity'] = $for_each_quantity;

        return $this;
    }

    /**
     * Gets min_amount.
     *
     * @return \TNT\Ebay\Sell\Marketing\V1\Model\Amount|null
     */
    public function getMinAmount()
    {
        return $this->container['min_amount'];
    }

    /**
     * Sets min_amount.
     *
     * @param \TNT\Ebay\Sell\Marketing\V1\Model\Amount|null $min_amount min_amount
     *
     * @return self
     */
    public function setMinAmount($min_amount)
    {
        $this->container['min_amount'] = $min_amount;

        return $this;
    }

    /**
     * Gets min_quantity.
     *
     * @return int|null
     */
    public function getMinQuantity()
    {
        return $this->container['min_quantity'];
    }

    /**
     * Sets min_quantity.
     *
     * @param int|null $min_quantity The minimum quantity of promoted items that needs to be bought in order to qualify for the promotion's discount.  <br><br><b>Valid values:</b> <br><code> &nbsp; 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, <br> &nbsp; 12, 13, 14, 15, 16, 17, 18, 19 <br> &nbsp; 20, 25, 50, 75, 100</code>
     *
     * @return self
     */
    public function setMinQuantity($min_quantity)
    {
        $this->container['min_quantity'] = $min_quantity;

        return $this;
    }

    /**
     * Gets number_of_discounted_items.
     *
     * @return int|null
     */
    public function getNumberOfDiscountedItems()
    {
        return $this->container['number_of_discounted_items'];
    }

    /**
     * Sets number_of_discounted_items.
     *
     * @param int|null $number_of_discounted_items Use this field to configure \"Buy One Get One\" (or <b>BOGO</b>) promotions.  <br><br>You must couple this field with <b>forEachQuantity</b> and an <b>amountOffItem</b> or <b>percentOffItem</b> field to configure your BOGO promotion. This field is not valid with order-based promotions. <br><br>The value of this field represents the number of items to be discounted when other promotion criteria is met. For example, when the buyer adds the number of items identified by the <b>forEachQuantity</b> value to their cart, they are then eligible to receive the stated discount from an additional number of like items (the number of which is identified by this field) when they add those items to their cart. To receive the discount, the buyer must purchase the number of items indicated by  <b>forEachQuantity</b> <i>plus</i> the number indicated by this field.  <br><br><b>Valid values:</b> <br><code> &nbsp; 1, 2, 3, 4, 5, 6, 7, 8, 9, 10</code>
     *
     * @return self
     */
    public function setNumberOfDiscountedItems($number_of_discounted_items)
    {
        $this->container['number_of_discounted_items'] = $number_of_discounted_items;

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
