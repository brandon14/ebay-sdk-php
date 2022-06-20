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
 * Metric.
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
 * Seller Service Metrics API.
 *
 * The <i>Analytics API</i> provides data and information about a seller and their eBay business.  <br><br>The resources and methods in this API let sellers review information on their listing performance, metrics on their customer service performance, and details on their eBay seller performance rating.  <br><br>The three resources in the Analytics API provide the following data and information: <ul><li><b>Customer Service Metric</b> &ndash; Returns benchmark data and a metric rating pertaining to a seller's customer service performance as compared to other seller's in the same peer group.</li> <li><b>Traffic Report</b> &ndash; Returns data and information that shows how buyers are engaging with a seller's listings.</li> <li><b>Seller Standards Profile</b> &ndash; Returns information pertaining to a seller's profile rating.</li></ul> Sellers can use the data and information returned by the various Analytics API methods to determine where they can make improvements to increase sales and how they might improve their seller status as viewed by eBay buyers.  <br><br>For details on using this API, see <a href=\"/api-docs/sell/static/performance/analyzing-performance.html\" title=\"Selling Integration Guide\">Analyzing seller performance</a>.
 *
 * The version of the OpenAPI document: 1.3.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace TNT\Ebay\Sell\Analytics\V1\Model;

use ArrayAccess;
use TNT\Ebay\Sell\Analytics\V1\ObjectSerializer;

/**
 * Metric Class Doc Comment.
 *
 * @category Class
 * @description This complex data type defines the details of the customer service metric and benchmark data related to the associated &lt;b&gt;dimension&lt;/b&gt;.
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Metric implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'Metric';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'benchmark' => '\TNT\Ebay\Sell\Analytics\V1\Model\MetricBenchmark',
        'distributions' => '\TNT\Ebay\Sell\Analytics\V1\Model\MetricDistribution[]',
        'metric_key' => 'string',
        'value' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'benchmark' => null,
        'distributions' => null,
        'metric_key' => null,
        'value' => null,
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
        'benchmark' => 'benchmark',
        'distributions' => 'distributions',
        'metric_key' => 'metricKey',
        'value' => 'value',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'benchmark' => 'setBenchmark',
        'distributions' => 'setDistributions',
        'metric_key' => 'setMetricKey',
        'value' => 'setValue',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'benchmark' => 'getBenchmark',
        'distributions' => 'getDistributions',
        'metric_key' => 'getMetricKey',
        'value' => 'getValue',
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
        $this->container['benchmark'] = $data['benchmark'] ?? null;
        $this->container['distributions'] = $data['distributions'] ?? null;
        $this->container['metric_key'] = $data['metric_key'] ?? null;
        $this->container['value'] = $data['value'] ?? null;
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
     * Gets benchmark.
     *
     * @return \TNT\Ebay\Sell\Analytics\V1\Model\MetricBenchmark|null
     */
    public function getBenchmark()
    {
        return $this->container['benchmark'];
    }

    /**
     * Sets benchmark.
     *
     * @param \TNT\Ebay\Sell\Analytics\V1\Model\MetricBenchmark|null $benchmark benchmark
     *
     * @return self
     */
    public function setBenchmark($benchmark)
    {
        $this->container['benchmark'] = $benchmark;

        return $this;
    }

    /**
     * Gets distributions.
     *
     * @return \TNT\Ebay\Sell\Analytics\V1\Model\MetricDistribution[]|null
     */
    public function getDistributions()
    {
        return $this->container['distributions'];
    }

    /**
     * Sets distributions.
     *
     * @param \TNT\Ebay\Sell\Analytics\V1\Model\MetricDistribution[]|null $distributions Returned when <b>metricKey</b> equals <code>COUNT</code>, this field returns an array of  seller data where each set of data is grouped according by an overarching <b>basis</b>.  <br><br>When the seller distribution is returned, the numeric value of the associated <b>value</b> container equals the sum of the transactions where the seller meets the criteria of the customer service metric type for the given <b>dimension</b> during the <b>evaluationCycle</b>.
     *
     * @return self
     */
    public function setDistributions($distributions)
    {
        $this->container['distributions'] = $distributions;

        return $this;
    }

    /**
     * Gets metric_key.
     *
     * @return string|null
     */
    public function getMetricKey()
    {
        return $this->container['metric_key'];
    }

    /**
     * Sets metric_key.
     *
     * @param string|null $metric_key This field indicates the customer service metric being returned in the associated <b>metrics</b> container. The field is set as follows: <ul><li><code>TRANSACTION_COUNT</code> &ndash; When set to this value, the associated <b>value</b> field returns the number of transactions completed in the peer group for the metric being evaluated in the associated <b>dimension</b> and <b>evaluationCycle</b>.</li> <li><code>COUNT</code> &ndash; When set to this value, the associated <b>value</b> field is set to the number of transactions completed by the seller for the metric being evaluated in the associated <b>dimension</b> and <b>evaluationCycle</b>.</li> <li><code>RATE</code> &ndash; When set to this value, the fields in the associated container return the seller's calculated <b>value</b> for the associated customer service metric along with the benchmark data against which the seller is evaluated.  <br><br>Specifically, when <b>metricKey</b> is set to <code>RATE</code>, the associated <b>value</b> field is set to the value of <b>metricKey</b> <code>TRANSACTION_COUNT</code> divided by the value of <b>metricKey</b> <code>COUNT</code>.  <br><br>The <b>benchmark.rating</b> value is the seller's rating for the metric in the associated <b>dimension</b> and <b>evaluationCycle</b>.</li></ul>
     *
     * @return self
     */
    public function setMetricKey($metric_key)
    {
        $this->container['metric_key'] = $metric_key;

        return $this;
    }

    /**
     * Gets value.
     *
     * @return string|null
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value.
     *
     * @param string|null $value This field is set to the seller's numeric rating for the associated <b>metricKey</b> for the given <b>dimension</b> during the <b>evaluationCycle</b>.  <br><br>To determine the seller's rating for this metric, the value of this field is compared to the average metric value of the group.
     *
     * @return self
     */
    public function setValue($value)
    {
        $this->container['value'] = $value;

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
