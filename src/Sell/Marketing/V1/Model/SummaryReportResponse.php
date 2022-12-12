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
 * SummaryReportResponse.
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
 * SummaryReportResponse Class Doc Comment.
 *
 * @category Class
 *
 * @description This type defines the fields in an Promotions Manager Summary report. Reports are formatted in JSON. For more details, see &lt;a href&#x3D;\&quot;/api-docs/sell/static/marketing/pm-summary-reports.html\&quot;&gt;Reading item promotion Summary reports&lt;/a&gt;.
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
class SummaryReportResponse implements ModelInterface, \ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'SummaryReportResponse';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'base_sale' => '\TNT\Ebay\Sell\Marketing\V1\Model\Amount',
        'last_updated' => 'string',
        'percentage_sales_lift' => 'string',
        'promotion_sale' => '\TNT\Ebay\Sell\Marketing\V1\Model\Amount',
        'total_sale' => '\TNT\Ebay\Sell\Marketing\V1\Model\Amount',
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
        'base_sale' => null,
        'last_updated' => null,
        'percentage_sales_lift' => null,
        'promotion_sale' => null,
        'total_sale' => null,
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
        'base_sale' => 'baseSale',
        'last_updated' => 'lastUpdated',
        'percentage_sales_lift' => 'percentageSalesLift',
        'promotion_sale' => 'promotionSale',
        'total_sale' => 'totalSale',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'base_sale' => 'setBaseSale',
        'last_updated' => 'setLastUpdated',
        'percentage_sales_lift' => 'setPercentageSalesLift',
        'promotion_sale' => 'setPromotionSale',
        'total_sale' => 'setTotalSale',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'base_sale' => 'getBaseSale',
        'last_updated' => 'getLastUpdated',
        'percentage_sales_lift' => 'getPercentageSalesLift',
        'promotion_sale' => 'getPromotionSale',
        'total_sale' => 'getTotalSale',
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
        $this->container['base_sale'] = $data['base_sale'] ?? null;
        $this->container['last_updated'] = $data['last_updated'] ?? null;
        $this->container['percentage_sales_lift'] = $data['percentage_sales_lift'] ?? null;
        $this->container['promotion_sale'] = $data['promotion_sale'] ?? null;
        $this->container['total_sale'] = $data['total_sale'] ?? null;
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
     * Gets base_sale.
     *
     * @return \TNT\Ebay\Sell\Marketing\V1\Model\Amount|null
     */
    public function getBaseSale()
    {
        return $this->container['base_sale'];
    }

    /**
     * Sets base_sale.
     *
     * @param \TNT\Ebay\Sell\Marketing\V1\Model\Amount|null $base_sale base_sale
     *
     * @return self
     */
    public function setBaseSale($base_sale)
    {
        $this->container['base_sale'] = $base_sale;

        return $this;
    }

    /**
     * Gets last_updated.
     *
     * @return string|null
     */
    public function getLastUpdated()
    {
        return $this->container['last_updated'];
    }

    /**
     * Sets last_updated.
     *
     * @param string|null $last_updated the date the report was generated
     *
     * @return self
     */
    public function setLastUpdated($last_updated)
    {
        $this->container['last_updated'] = $last_updated;

        return $this;
    }

    /**
     * Gets percentage_sales_lift.
     *
     * @return string|null
     */
    public function getPercentageSalesLift()
    {
        return $this->container['percentage_sales_lift'];
    }

    /**
     * Sets percentage_sales_lift.
     *
     * @param string|null $percentage_sales_lift The percentage of the total dollar amount gained due to promotions. This value is calculated as follows:  <br><br><b>precentageSalesLift</b> = <b>promotionSale</b> / (<b>baseSale</b> + <b>promotionSale</b>)
     *
     * @return self
     */
    public function setPercentageSalesLift($percentage_sales_lift)
    {
        $this->container['percentage_sales_lift'] = $percentage_sales_lift;

        return $this;
    }

    /**
     * Gets promotion_sale.
     *
     * @return \TNT\Ebay\Sell\Marketing\V1\Model\Amount|null
     */
    public function getPromotionSale()
    {
        return $this->container['promotion_sale'];
    }

    /**
     * Sets promotion_sale.
     *
     * @param \TNT\Ebay\Sell\Marketing\V1\Model\Amount|null $promotion_sale promotion_sale
     *
     * @return self
     */
    public function setPromotionSale($promotion_sale)
    {
        $this->container['promotion_sale'] = $promotion_sale;

        return $this;
    }

    /**
     * Gets total_sale.
     *
     * @return \TNT\Ebay\Sell\Marketing\V1\Model\Amount|null
     */
    public function getTotalSale()
    {
        return $this->container['total_sale'];
    }

    /**
     * Sets total_sale.
     *
     * @param \TNT\Ebay\Sell\Marketing\V1\Model\Amount|null $total_sale total_sale
     *
     * @return self
     */
    public function setTotalSale($total_sale)
    {
        $this->container['total_sale'] = $total_sale;

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
