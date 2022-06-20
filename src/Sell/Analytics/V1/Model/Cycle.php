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
 * Cycle.
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
 * Cycle Class Doc Comment.
 *
 * @category Class
 * @description A complex type that describes a program cycle.
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Cycle implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'Cycle';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'cycle_type' => 'string',
        'evaluation_date' => 'string',
        'evaluation_month' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'cycle_type' => null,
        'evaluation_date' => null,
        'evaluation_month' => null,
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
        'cycle_type' => 'cycleType',
        'evaluation_date' => 'evaluationDate',
        'evaluation_month' => 'evaluationMonth',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'cycle_type' => 'setCycleType',
        'evaluation_date' => 'setEvaluationDate',
        'evaluation_month' => 'setEvaluationMonth',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'cycle_type' => 'getCycleType',
        'evaluation_date' => 'getEvaluationDate',
        'evaluation_month' => 'getEvaluationMonth',
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
        $this->container['cycle_type'] = $data['cycle_type'] ?? null;
        $this->container['evaluation_date'] = $data['evaluation_date'] ?? null;
        $this->container['evaluation_month'] = $data['evaluation_month'] ?? null;
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
     * Gets cycle_type.
     *
     * @return string|null
     */
    public function getCycleType()
    {
        return $this->container['cycle_type'];
    }

    /**
     * Sets cycle_type.
     *
     * @param string|null $cycle_type The cycle type, either <code>CURRENT</code> or <code>PROJECTED</code>. <br><br><code>CURRENT</code> means the profile's metrics values are from the most recent official eBay  monthly standards evaluation. <code>PROJECTED</code> means the profile values were determined when the profile was requested. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/analytics/types/ssp:CycleTypeEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setCycleType($cycle_type)
    {
        $this->container['cycle_type'] = $cycle_type;

        return $this;
    }

    /**
     * Gets evaluation_date.
     *
     * @return string|null
     */
    public function getEvaluationDate()
    {
        return $this->container['evaluation_date'];
    }

    /**
     * Sets evaluation_date.
     *
     * @param string|null $evaluation_date The date and time at which the standard compliance values were determined for the profile.  <br><br>The time stamp is formatted as an <a href=\"https://www.iso.org/iso-8601-date-and-time-format.html\" target=\"_blank\">ISO 8601</a> string, which is based on the 24-hour Universal Coordinated Time (UTC) clock. <br><br><b>Format:</b> <code>[YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z</code> <br><b>Example:</b> <code>2018-08-04T07:09:00.000Z</code>
     *
     * @return self
     */
    public function setEvaluationDate($evaluation_date)
    {
        $this->container['evaluation_date'] = $evaluation_date;

        return $this;
    }

    /**
     * Gets evaluation_month.
     *
     * @return string|null
     */
    public function getEvaluationMonth()
    {
        return $this->container['evaluation_month'];
    }

    /**
     * Sets evaluation_month.
     *
     * @param string|null $evaluation_month The month in which the currently effective seller level was computed.  <br><br>The value is always formatted as <code>YYYY-MM</code>. If the cycle is <code>CURRENT</code>, this value is the month and year the of the last eBay compliance evaluation. If this is for a <code>PROJECTED</code> cycle, the value is the month and year of the next scheduled evaluation. Because eBay does official evaluations around the 20th of each month, a <code>PROJECTED</code> value may indicate either the current or the next month.
     *
     * @return self
     */
    public function setEvaluationMonth($evaluation_month)
    {
        $this->container['evaluation_month'] = $evaluation_month;

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
