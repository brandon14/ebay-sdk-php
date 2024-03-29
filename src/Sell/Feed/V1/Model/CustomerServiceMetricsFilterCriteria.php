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
 * CustomerServiceMetricsFilterCriteria.
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
 * Feed API.
 *
 * <p>The <strong>Feed API</strong> lets sellers upload input files, download reports and files including their status, filter reports using URI parameters, and retrieve customer service metrics task details.</p>
 *
 * The version of the OpenAPI document: v1.3.1
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace TNT\Ebay\Sell\Feed\V1\Model;

use TNT\Ebay\Sell\Feed\V1\ObjectSerializer;

/**
 * CustomerServiceMetricsFilterCriteria Class Doc Comment.
 *
 * @category Class
 *
 * @description A complex data type that filters data for report creation. See &lt;strong&gt;CustomerServiceMetricsFilterCriteria&lt;/strong&gt; for fields and descriptions.
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
class CustomerServiceMetricsFilterCriteria implements ModelInterface, \ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'CustomerServiceMetricsFilterCriteria';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'customer_service_metric_type' => 'string',
        'evaluation_marketplace_id' => 'string',
        'listing_categories' => 'string[]',
        'shipping_regions' => 'string[]',
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
        'customer_service_metric_type' => null,
        'evaluation_marketplace_id' => null,
        'listing_categories' => null,
        'shipping_regions' => null,
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
        'customer_service_metric_type' => 'customerServiceMetricType',
        'evaluation_marketplace_id' => 'evaluationMarketplaceId',
        'listing_categories' => 'listingCategories',
        'shipping_regions' => 'shippingRegions',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'customer_service_metric_type' => 'setCustomerServiceMetricType',
        'evaluation_marketplace_id' => 'setEvaluationMarketplaceId',
        'listing_categories' => 'setListingCategories',
        'shipping_regions' => 'setShippingRegions',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'customer_service_metric_type' => 'getCustomerServiceMetricType',
        'evaluation_marketplace_id' => 'getEvaluationMarketplaceId',
        'listing_categories' => 'getListingCategories',
        'shipping_regions' => 'getShippingRegions',
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
        $this->container['customer_service_metric_type'] = $data['customer_service_metric_type'] ?? null;
        $this->container['evaluation_marketplace_id'] = $data['evaluation_marketplace_id'] ?? null;
        $this->container['listing_categories'] = $data['listing_categories'] ?? null;
        $this->container['shipping_regions'] = $data['shipping_regions'] ?? null;
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
     * Gets customer_service_metric_type.
     *
     * @return string|null
     */
    public function getCustomerServiceMetricType()
    {
        return $this->container['customer_service_metric_type'];
    }

    /**
     * Sets customer_service_metric_type.
     *
     * @param string|null $customer_service_metric_type An enumeration value that specifies the customer service metric that eBay tracks to measure seller performance. See <strong>CustomerServiceMetricTypeEnum</strong> for values. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/feed/types/api:CustomerServiceMetricTypeEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setCustomerServiceMetricType($customer_service_metric_type)
    {
        $this->container['customer_service_metric_type'] = $customer_service_metric_type;

        return $this;
    }

    /**
     * Gets evaluation_marketplace_id.
     *
     * @return string|null
     */
    public function getEvaluationMarketplaceId()
    {
        return $this->container['evaluation_marketplace_id'];
    }

    /**
     * Sets evaluation_marketplace_id.
     *
     * @param string|null $evaluation_marketplace_id An enumeration value that specifies the eBay marketplace where the evaluation occurs. See <strong>MarketplaceIdEnum</strong> for values. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/feed/types/bas:MarketplaceIdEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setEvaluationMarketplaceId($evaluation_marketplace_id)
    {
        $this->container['evaluation_marketplace_id'] = $evaluation_marketplace_id;

        return $this;
    }

    /**
     * Gets listing_categories.
     *
     * @return string[]|null
     */
    public function getListingCategories()
    {
        return $this->container['listing_categories'];
    }

    /**
     * Sets listing_categories.
     *
     * @param string[]|null $listing_categories A list of listing category IDs on which the service metric is measured. A seller can use one or more L1 (top-level) eBay categories to get metrics specific to those L1 categories. The Category IDs for each L1 category are required. Category ID values for L1 categories can be retrieved using the Taxonomy API.<p> <span class=\"tablenote\"><strong>Note: </strong>Pass this attribute to narrow down your filter results for the <code>ITEM_NOT_AS_DESCRIBED</code> customerServiceMetricType.</span></p> <p>Supported categories include:</p><p><code>primary(L1) category Id</code></p>
     *
     * @return self
     */
    public function setListingCategories($listing_categories)
    {
        $this->container['listing_categories'] = $listing_categories;

        return $this;
    }

    /**
     * Gets shipping_regions.
     *
     * @return string[]|null
     */
    public function getShippingRegions()
    {
        return $this->container['shipping_regions'];
    }

    /**
     * Sets shipping_regions.
     *
     * @param string[]|null $shipping_regions A list of shipping region enumeration values on which the service metric is measured. This comma delimited array allows the seller to customize the report to focus on domestic or international shipping. <p> <span class=\"tablenote\"><strong>Note: </strong>Pass this attribute to narrow down your filter results for the <code>ITEM_NOT_RECEIVED</code> customerServiceMetricType.</span></p> <p>Supported categories include:</p><p><code>primary(L1) category Id</code></p>See <strong>ShippingRegionTypeEnum</strong> for values
     *
     * @return self
     */
    public function setShippingRegions($shipping_regions)
    {
        $this->container['shipping_regions'] = $shipping_regions;

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
