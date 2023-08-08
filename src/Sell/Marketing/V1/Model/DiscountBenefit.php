<?php

/**
 * This file is part of the trollandtoad/ebay-sdk-php package.
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
 * DiscountBenefit.
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

use TNT\Ebay\Sell\Marketing\V1\ObjectSerializer;

/**
 * DiscountBenefit Class Doc Comment.
 *
 * @category Class
 *
 * @description This container defines the promotional discount as either a monetary amount or a percentage of the sales price.  &lt;p class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Important!:&lt;/b&gt; You must populate one and only one of the fields in this container: &lt;ul&gt;&lt;li&gt;&lt;b&gt;amountOffItem&lt;/b&gt;&lt;/li&gt; &lt;li&gt;&lt;b&gt;amountOffOrder&lt;/b&gt;&lt;/li&gt; &lt;li&gt;&lt;b&gt;percentageOffItem&lt;/b&gt;&lt;/li&gt; &lt;li&gt;&lt;b&gt;percentageOffOrder&lt;/b&gt;&lt;/li&gt;&lt;/ul&gt;&lt;/p&gt;  &lt;p class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Tip:&lt;/b&gt; Refer to &lt;a href&#x3D;\&quot;/api-docs/sell/static/marketing/pm-specifying-discounts.html\&quot;&gt;Configuring discounts for threshold promotions&lt;/a&gt; for information and examples on how to combine &lt;b&gt;discountBenefit&lt;/b&gt; and &lt;b&gt;discountSpecification&lt;/b&gt; values to create different types of promotions.&lt;/p&gt;
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
class DiscountBenefit implements ModelInterface, \ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'DiscountBenefit';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'amount_off_item' => '\TNT\Ebay\Sell\Marketing\V1\Model\Amount',
        'amount_off_order' => '\TNT\Ebay\Sell\Marketing\V1\Model\Amount',
        'percentage_off_item' => 'string',
        'percentage_off_order' => 'string',
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
        'amount_off_item' => null,
        'amount_off_order' => null,
        'percentage_off_item' => null,
        'percentage_off_order' => null,
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
        'amount_off_item' => 'amountOffItem',
        'amount_off_order' => 'amountOffOrder',
        'percentage_off_item' => 'percentageOffItem',
        'percentage_off_order' => 'percentageOffOrder',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'amount_off_item' => 'setAmountOffItem',
        'amount_off_order' => 'setAmountOffOrder',
        'percentage_off_item' => 'setPercentageOffItem',
        'percentage_off_order' => 'setPercentageOffOrder',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'amount_off_item' => 'getAmountOffItem',
        'amount_off_order' => 'getAmountOffOrder',
        'percentage_off_item' => 'getPercentageOffItem',
        'percentage_off_order' => 'getPercentageOffOrder',
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
        $this->container['amount_off_item'] = $data['amount_off_item'] ?? null;
        $this->container['amount_off_order'] = $data['amount_off_order'] ?? null;
        $this->container['percentage_off_item'] = $data['percentage_off_item'] ?? null;
        $this->container['percentage_off_order'] = $data['percentage_off_order'] ?? null;
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
     * Gets amount_off_item.
     *
     * @return \TNT\Ebay\Sell\Marketing\V1\Model\Amount|null
     */
    public function getAmountOffItem()
    {
        return $this->container['amount_off_item'];
    }

    /**
     * Sets amount_off_item.
     *
     * @param \TNT\Ebay\Sell\Marketing\V1\Model\Amount|null $amount_off_item amount_off_item
     *
     * @return self
     */
    public function setAmountOffItem($amount_off_item)
    {
        $this->container['amount_off_item'] = $amount_off_item;

        return $this;
    }

    /**
     * Gets amount_off_order.
     *
     * @return \TNT\Ebay\Sell\Marketing\V1\Model\Amount|null
     */
    public function getAmountOffOrder()
    {
        return $this->container['amount_off_order'];
    }

    /**
     * Sets amount_off_order.
     *
     * @param \TNT\Ebay\Sell\Marketing\V1\Model\Amount|null $amount_off_order amount_off_order
     *
     * @return self
     */
    public function setAmountOffOrder($amount_off_order)
    {
        $this->container['amount_off_order'] = $amount_off_order;

        return $this;
    }

    /**
     * Gets percentage_off_item.
     *
     * @return string|null
     */
    public function getPercentageOffItem()
    {
        return $this->container['percentage_off_item'];
    }

    /**
     * Sets percentage_off_item.
     *
     * @param string|null $percentage_off_item The percentage applied to the sales price that is discounted off the promoted item (or items) when the promotion criteria is met.  <br><br>Valid integer values for percentage off: &nbsp;&nbsp;<b>Min:</b> <code>5</code> &nbsp;&nbsp;<b>Max:</b> <code>80</code>
     *
     * @return self
     */
    public function setPercentageOffItem($percentage_off_item)
    {
        $this->container['percentage_off_item'] = $percentage_off_item;

        return $this;
    }

    /**
     * Gets percentage_off_order.
     *
     * @return string|null
     */
    public function getPercentageOffOrder()
    {
        return $this->container['percentage_off_order'];
    }

    /**
     * Sets percentage_off_order.
     *
     * @param string|null $percentage_off_order Used for threshold promotions, this is the percentage of the order price that is discounted off the order when the promotion criteria is met. This field is not value for markdown promotions.  <br><br>Valid integer values for ORDER_DISCOUNT promotions: &nbsp;&nbsp;<b>Min:</b> <code>5</code> &nbsp;&nbsp;<b>Max:</b> <code>80</code>  <br><br>For VOLUME_DISCOUNT promotions: Must be set to <code>0</code> for the first discount rule.
     *
     * @return self
     */
    public function setPercentageOffOrder($percentage_off_order)
    {
        $this->container['percentage_off_order'] = $percentage_off_order;

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
