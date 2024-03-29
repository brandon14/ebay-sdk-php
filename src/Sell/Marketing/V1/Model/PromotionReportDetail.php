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
 * PromotionReportDetail.
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
 * PromotionReportDetail Class Doc Comment.
 *
 * @category Class
 *
 * @description This type defines the fields in a promotion-level report.
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
class PromotionReportDetail implements ModelInterface, \ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'PromotionReportDetail';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'average_item_discount' => '\TNT\Ebay\Sell\Marketing\V1\Model\Amount',
        'average_item_revenue' => '\TNT\Ebay\Sell\Marketing\V1\Model\Amount',
        'average_order_discount' => '\TNT\Ebay\Sell\Marketing\V1\Model\Amount',
        'average_order_revenue' => '\TNT\Ebay\Sell\Marketing\V1\Model\Amount',
        'average_order_size' => 'string',
        'base_sale' => '\TNT\Ebay\Sell\Marketing\V1\Model\Amount',
        'items_sold_quantity' => 'int',
        'number_of_orders_sold' => 'int',
        'percentage_sales_lift' => 'string',
        'promotion_href' => 'string',
        'promotion_id' => 'string',
        'promotion_report_id' => 'string',
        'promotion_sale' => '\TNT\Ebay\Sell\Marketing\V1\Model\Amount',
        'promotion_type' => 'string',
        'total_discount' => '\TNT\Ebay\Sell\Marketing\V1\Model\Amount',
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
        'average_item_discount' => null,
        'average_item_revenue' => null,
        'average_order_discount' => null,
        'average_order_revenue' => null,
        'average_order_size' => null,
        'base_sale' => null,
        'items_sold_quantity' => 'int32',
        'number_of_orders_sold' => 'int32',
        'percentage_sales_lift' => null,
        'promotion_href' => null,
        'promotion_id' => null,
        'promotion_report_id' => null,
        'promotion_sale' => null,
        'promotion_type' => null,
        'total_discount' => null,
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
        'average_item_discount' => 'averageItemDiscount',
        'average_item_revenue' => 'averageItemRevenue',
        'average_order_discount' => 'averageOrderDiscount',
        'average_order_revenue' => 'averageOrderRevenue',
        'average_order_size' => 'averageOrderSize',
        'base_sale' => 'baseSale',
        'items_sold_quantity' => 'itemsSoldQuantity',
        'number_of_orders_sold' => 'numberOfOrdersSold',
        'percentage_sales_lift' => 'percentageSalesLift',
        'promotion_href' => 'promotionHref',
        'promotion_id' => 'promotionId',
        'promotion_report_id' => 'promotionReportId',
        'promotion_sale' => 'promotionSale',
        'promotion_type' => 'promotionType',
        'total_discount' => 'totalDiscount',
        'total_sale' => 'totalSale',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'average_item_discount' => 'setAverageItemDiscount',
        'average_item_revenue' => 'setAverageItemRevenue',
        'average_order_discount' => 'setAverageOrderDiscount',
        'average_order_revenue' => 'setAverageOrderRevenue',
        'average_order_size' => 'setAverageOrderSize',
        'base_sale' => 'setBaseSale',
        'items_sold_quantity' => 'setItemsSoldQuantity',
        'number_of_orders_sold' => 'setNumberOfOrdersSold',
        'percentage_sales_lift' => 'setPercentageSalesLift',
        'promotion_href' => 'setPromotionHref',
        'promotion_id' => 'setPromotionId',
        'promotion_report_id' => 'setPromotionReportId',
        'promotion_sale' => 'setPromotionSale',
        'promotion_type' => 'setPromotionType',
        'total_discount' => 'setTotalDiscount',
        'total_sale' => 'setTotalSale',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'average_item_discount' => 'getAverageItemDiscount',
        'average_item_revenue' => 'getAverageItemRevenue',
        'average_order_discount' => 'getAverageOrderDiscount',
        'average_order_revenue' => 'getAverageOrderRevenue',
        'average_order_size' => 'getAverageOrderSize',
        'base_sale' => 'getBaseSale',
        'items_sold_quantity' => 'getItemsSoldQuantity',
        'number_of_orders_sold' => 'getNumberOfOrdersSold',
        'percentage_sales_lift' => 'getPercentageSalesLift',
        'promotion_href' => 'getPromotionHref',
        'promotion_id' => 'getPromotionId',
        'promotion_report_id' => 'getPromotionReportId',
        'promotion_sale' => 'getPromotionSale',
        'promotion_type' => 'getPromotionType',
        'total_discount' => 'getTotalDiscount',
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
        $this->container['average_item_discount'] = $data['average_item_discount'] ?? null;
        $this->container['average_item_revenue'] = $data['average_item_revenue'] ?? null;
        $this->container['average_order_discount'] = $data['average_order_discount'] ?? null;
        $this->container['average_order_revenue'] = $data['average_order_revenue'] ?? null;
        $this->container['average_order_size'] = $data['average_order_size'] ?? null;
        $this->container['base_sale'] = $data['base_sale'] ?? null;
        $this->container['items_sold_quantity'] = $data['items_sold_quantity'] ?? null;
        $this->container['number_of_orders_sold'] = $data['number_of_orders_sold'] ?? null;
        $this->container['percentage_sales_lift'] = $data['percentage_sales_lift'] ?? null;
        $this->container['promotion_href'] = $data['promotion_href'] ?? null;
        $this->container['promotion_id'] = $data['promotion_id'] ?? null;
        $this->container['promotion_report_id'] = $data['promotion_report_id'] ?? null;
        $this->container['promotion_sale'] = $data['promotion_sale'] ?? null;
        $this->container['promotion_type'] = $data['promotion_type'] ?? null;
        $this->container['total_discount'] = $data['total_discount'] ?? null;
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
     * Gets average_item_discount.
     *
     * @return \TNT\Ebay\Sell\Marketing\V1\Model\Amount|null
     */
    public function getAverageItemDiscount()
    {
        return $this->container['average_item_discount'];
    }

    /**
     * Sets average_item_discount.
     *
     * @param \TNT\Ebay\Sell\Marketing\V1\Model\Amount|null $average_item_discount average_item_discount
     *
     * @return self
     */
    public function setAverageItemDiscount($average_item_discount)
    {
        $this->container['average_item_discount'] = $average_item_discount;

        return $this;
    }

    /**
     * Gets average_item_revenue.
     *
     * @return \TNT\Ebay\Sell\Marketing\V1\Model\Amount|null
     */
    public function getAverageItemRevenue()
    {
        return $this->container['average_item_revenue'];
    }

    /**
     * Sets average_item_revenue.
     *
     * @param \TNT\Ebay\Sell\Marketing\V1\Model\Amount|null $average_item_revenue average_item_revenue
     *
     * @return self
     */
    public function setAverageItemRevenue($average_item_revenue)
    {
        $this->container['average_item_revenue'] = $average_item_revenue;

        return $this;
    }

    /**
     * Gets average_order_discount.
     *
     * @return \TNT\Ebay\Sell\Marketing\V1\Model\Amount|null
     */
    public function getAverageOrderDiscount()
    {
        return $this->container['average_order_discount'];
    }

    /**
     * Sets average_order_discount.
     *
     * @param \TNT\Ebay\Sell\Marketing\V1\Model\Amount|null $average_order_discount average_order_discount
     *
     * @return self
     */
    public function setAverageOrderDiscount($average_order_discount)
    {
        $this->container['average_order_discount'] = $average_order_discount;

        return $this;
    }

    /**
     * Gets average_order_revenue.
     *
     * @return \TNT\Ebay\Sell\Marketing\V1\Model\Amount|null
     */
    public function getAverageOrderRevenue()
    {
        return $this->container['average_order_revenue'];
    }

    /**
     * Sets average_order_revenue.
     *
     * @param \TNT\Ebay\Sell\Marketing\V1\Model\Amount|null $average_order_revenue average_order_revenue
     *
     * @return self
     */
    public function setAverageOrderRevenue($average_order_revenue)
    {
        $this->container['average_order_revenue'] = $average_order_revenue;

        return $this;
    }

    /**
     * Gets average_order_size.
     *
     * @return string|null
     */
    public function getAverageOrderSize()
    {
        return $this->container['average_order_size'];
    }

    /**
     * Sets average_order_size.
     *
     * @param string|null $average_order_size The <i>average order size</i> is the average number of items that each order contained in a promotion. This value is calculated as follows:  <br><br><b>itemsSoldQuantity</b> / <b>numberOfOrdersSold</b> = <b>averageOrderSize</b>
     *
     * @return self
     */
    public function setAverageOrderSize($average_order_size)
    {
        $this->container['average_order_size'] = $average_order_size;

        return $this;
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
     * Gets items_sold_quantity.
     *
     * @return int|null
     */
    public function getItemsSoldQuantity()
    {
        return $this->container['items_sold_quantity'];
    }

    /**
     * Sets items_sold_quantity.
     *
     * @param int|null $items_sold_quantity This is the quantity of items purchased in a threshold promotion where the threshold <i>has been met</i> and the discount was applied. <br><br>For example, suppose you're running a \"Buy 1, get 1 at 50%\" promotion on $5 socks. One buyer purchases two pairs of socks, so they pay $7.50 for both pairs (rather than the full price of $10). Your number of items sold (<b>itemsSoldQuantity</b>) would be 2 and you number of orders sold (<b>numberOfOrdersSold</b>) would be 1.
     *
     * @return self
     */
    public function setItemsSoldQuantity($items_sold_quantity)
    {
        $this->container['items_sold_quantity'] = $items_sold_quantity;

        return $this;
    }

    /**
     * Gets number_of_orders_sold.
     *
     * @return int|null
     */
    public function getNumberOfOrdersSold()
    {
        return $this->container['number_of_orders_sold'];
    }

    /**
     * Sets number_of_orders_sold.
     *
     * @param int|null $number_of_orders_sold This is the number of orders sold in a threshold promotion where the threshold <i>has been met</i> and the discount was applied. <br><br>For example, suppose you're running a \"Buy 1, get 1 at 50%\" promotion on $5 socks. One buyer purchases two pairs of socks, so they pay $7.50 for both pairs (rather than the full price of $10). Your <b>numberOfOrdersSold</b> would be 1 and your <b>itemsSoldQuantity</b> would be 2.
     *
     * @return self
     */
    public function setNumberOfOrdersSold($number_of_orders_sold)
    {
        $this->container['number_of_orders_sold'] = $number_of_orders_sold;

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
     * @param string|null $percentage_sales_lift The <i>percentage sales lift</i> is the total dollar amount gained due to promotions. This value is calculated as follows:  <br><br> <b>promotionSale</b> / <b>totalSale</b> =  <b>percentageSalesLift</b>
     *
     * @return self
     */
    public function setPercentageSalesLift($percentage_sales_lift)
    {
        $this->container['percentage_sales_lift'] = $percentage_sales_lift;

        return $this;
    }

    /**
     * Gets promotion_href.
     *
     * @return string|null
     */
    public function getPromotionHref()
    {
        return $this->container['promotion_href'];
    }

    /**
     * Sets promotion_href.
     *
     * @param string|null $promotion_href the URI of the promotion report
     *
     * @return self
     */
    public function setPromotionHref($promotion_href)
    {
        $this->container['promotion_href'] = $promotion_href;

        return $this;
    }

    /**
     * Gets promotion_id.
     *
     * @return string|null
     */
    public function getPromotionId()
    {
        return $this->container['promotion_id'];
    }

    /**
     * Sets promotion_id.
     *
     * @param string|null $promotion_id a unique eBay-assigned ID for the promotion that's generated when the promotion is created
     *
     * @return self
     */
    public function setPromotionId($promotion_id)
    {
        $this->container['promotion_id'] = $promotion_id;

        return $this;
    }

    /**
     * Gets promotion_report_id.
     *
     * @return string|null
     */
    public function getPromotionReportId()
    {
        return $this->container['promotion_report_id'];
    }

    /**
     * Sets promotion_report_id.
     *
     * @param string|null $promotion_report_id the unique eBay-assigned ID of the promotion report that is generated when the report is created
     *
     * @return self
     */
    public function setPromotionReportId($promotion_report_id)
    {
        $this->container['promotion_report_id'] = $promotion_report_id;

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
     * Gets promotion_type.
     *
     * @return string|null
     */
    public function getPromotionType()
    {
        return $this->container['promotion_type'];
    }

    /**
     * Sets promotion_type.
     *
     * @param string|null $promotion_type Indicates the type of the promotion, either <code>CODED_COUPON</code>, <code>MARKDOWN_SALE</code>, <code>ORDER_DISCOUNT</code>, or <code>VOLUME_DISCOUNT</code>. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/sme:PromotionTypeEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setPromotionType($promotion_type)
    {
        $this->container['promotion_type'] = $promotion_type;

        return $this;
    }

    /**
     * Gets total_discount.
     *
     * @return \TNT\Ebay\Sell\Marketing\V1\Model\Amount|null
     */
    public function getTotalDiscount()
    {
        return $this->container['total_discount'];
    }

    /**
     * Sets total_discount.
     *
     * @param \TNT\Ebay\Sell\Marketing\V1\Model\Amount|null $total_discount total_discount
     *
     * @return self
     */
    public function setTotalDiscount($total_discount)
    {
        $this->container['total_discount'] = $total_discount;

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
