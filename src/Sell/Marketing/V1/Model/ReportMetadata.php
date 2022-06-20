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
 * ReportMetadata.
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
 * <p>The <i>Marketing API </i> offers two platforms that sellers can use to promote and advertise their products:</p> <ul><li><b>Promoted Listings</b> is an eBay ad service that lets sellers set up <i>ad campaigns </i> for the products they want to promote. eBay displays the ads in search results and in other marketing modules as <b>SPONSORED</b> listings. If an item in a Promoted Listings campaign sells, the seller is assessed a Promoted Listings fee, which is a seller-specified percentage applied to the sales price. For complete details, see <a href=\"/api-docs/sell/static/marketing/promoted-listings.html\">Promoted Listings</a>.</li>  <li><b>Promotions Manager</b> gives sellers a way to offer discounts on specific items as a way to attract buyers to their inventory. Sellers can set up discounts (such as \"20% off\" and other types of offers) on specific items or on an entire customer order. To further attract buyers, eBay prominently displays promotion <i>teasers</i> throughout buyer flows. For complete details, see <a href=\"/api-docs/sell/static/marketing/promotions-manager.html\">Promotions Manager</a>.</li></ul>  <p><b>Marketing reports</b>, on both the Promoted Listings and Promotions Manager platforms, give sellers information that shows the effectiveness of their marketing strategies. The data gives sellers the ability to review and fine tune their marketing efforts.</p> <p class=\"tablenote\"><b>Important!</b> Sellers must have an active eBay Store subscription, and they must accept the <b>Terms and Conditions</b> before they can make requests to these APIs in the Production environment. There are also site-specific listings requirements and restrictions associated with these marketing tools, as listed in the \"requirements and restrictions\" sections for <a href=\"/api-docs/sell/marketing/static/overview.html#PL-requirements\">Promoted Listings</a> and <a href=\"/api-docs/sell/marketing/static/overview.html#PM-requirements\">Promotions Manager</a>.</p> <p>The table below lists all the Marketing API calls grouped by resource.</p>
 *
 * The version of the OpenAPI document: v1.10.1
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
 * ReportMetadata Class Doc Comment.
 *
 * @category Class
 * @description This type defines the fields included in the report.
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ReportMetadata implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'ReportMetadata';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'dimension_metadata' => '\TNT\Ebay\Sell\Marketing\V1\Model\DimensionMetadata[]',
        'max_number_of_dimensions_to_request' => 'int',
        'max_number_of_metrics_to_request' => 'int',
        'metric_metadata' => '\TNT\Ebay\Sell\Marketing\V1\Model\MetricMetadata[]',
        'report_type' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'dimension_metadata' => null,
        'max_number_of_dimensions_to_request' => 'int32',
        'max_number_of_metrics_to_request' => 'int32',
        'metric_metadata' => null,
        'report_type' => null,
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
        'dimension_metadata' => 'dimensionMetadata',
        'max_number_of_dimensions_to_request' => 'maxNumberOfDimensionsToRequest',
        'max_number_of_metrics_to_request' => 'maxNumberOfMetricsToRequest',
        'metric_metadata' => 'metricMetadata',
        'report_type' => 'reportType',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'dimension_metadata' => 'setDimensionMetadata',
        'max_number_of_dimensions_to_request' => 'setMaxNumberOfDimensionsToRequest',
        'max_number_of_metrics_to_request' => 'setMaxNumberOfMetricsToRequest',
        'metric_metadata' => 'setMetricMetadata',
        'report_type' => 'setReportType',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'dimension_metadata' => 'getDimensionMetadata',
        'max_number_of_dimensions_to_request' => 'getMaxNumberOfDimensionsToRequest',
        'max_number_of_metrics_to_request' => 'getMaxNumberOfMetricsToRequest',
        'metric_metadata' => 'getMetricMetadata',
        'report_type' => 'getReportType',
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
        $this->container['dimension_metadata'] = $data['dimension_metadata'] ?? null;
        $this->container['max_number_of_dimensions_to_request'] = $data['max_number_of_dimensions_to_request'] ?? null;
        $this->container['max_number_of_metrics_to_request'] = $data['max_number_of_metrics_to_request'] ?? null;
        $this->container['metric_metadata'] = $data['metric_metadata'] ?? null;
        $this->container['report_type'] = $data['report_type'] ?? null;
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
     * Gets dimension_metadata.
     *
     * @return \TNT\Ebay\Sell\Marketing\V1\Model\DimensionMetadata[]|null
     */
    public function getDimensionMetadata()
    {
        return $this->container['dimension_metadata'];
    }

    /**
     * Sets dimension_metadata.
     *
     * @param \TNT\Ebay\Sell\Marketing\V1\Model\DimensionMetadata[]|null $dimension_metadata a list containing the metadata for the dimension used in the report
     *
     * @return self
     */
    public function setDimensionMetadata($dimension_metadata)
    {
        $this->container['dimension_metadata'] = $dimension_metadata;

        return $this;
    }

    /**
     * Gets max_number_of_dimensions_to_request.
     *
     * @return int|null
     */
    public function getMaxNumberOfDimensionsToRequest()
    {
        return $this->container['max_number_of_dimensions_to_request'];
    }

    /**
     * Sets max_number_of_dimensions_to_request.
     *
     * @param int|null $max_number_of_dimensions_to_request the maximum number of dimensions that can be requested for the specified report type
     *
     * @return self
     */
    public function setMaxNumberOfDimensionsToRequest($max_number_of_dimensions_to_request)
    {
        $this->container['max_number_of_dimensions_to_request'] = $max_number_of_dimensions_to_request;

        return $this;
    }

    /**
     * Gets max_number_of_metrics_to_request.
     *
     * @return int|null
     */
    public function getMaxNumberOfMetricsToRequest()
    {
        return $this->container['max_number_of_metrics_to_request'];
    }

    /**
     * Sets max_number_of_metrics_to_request.
     *
     * @param int|null $max_number_of_metrics_to_request the maximum number of metrics that can be requested for the specified report type
     *
     * @return self
     */
    public function setMaxNumberOfMetricsToRequest($max_number_of_metrics_to_request)
    {
        $this->container['max_number_of_metrics_to_request'] = $max_number_of_metrics_to_request;

        return $this;
    }

    /**
     * Gets metric_metadata.
     *
     * @return \TNT\Ebay\Sell\Marketing\V1\Model\MetricMetadata[]|null
     */
    public function getMetricMetadata()
    {
        return $this->container['metric_metadata'];
    }

    /**
     * Sets metric_metadata.
     *
     * @param \TNT\Ebay\Sell\Marketing\V1\Model\MetricMetadata[]|null $metric_metadata a list containing the metadata for the metrics in the report
     *
     * @return self
     */
    public function setMetricMetadata($metric_metadata)
    {
        $this->container['metric_metadata'] = $metric_metadata;

        return $this;
    }

    /**
     * Gets report_type.
     *
     * @return string|null
     */
    public function getReportType()
    {
        return $this->container['report_type'];
    }

    /**
     * Sets report_type.
     *
     * @param string|null $report_type The <b>report_type</b>, as specified in the request to create the report task. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/plr:ReportTypeEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setReportType($report_type)
    {
        $this->container['report_type'] = $report_type;

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