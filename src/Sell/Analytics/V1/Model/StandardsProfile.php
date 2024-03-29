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
 * StandardsProfile.
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
 * The <i>Analytics API</i> provides data and information about a seller and their eBay business.  <br><br>The resources and methods in this API let sellers review information on their listing performance, metrics on their customer service performance, and details on their eBay seller performance rating.  <br><br>The three resources in the Analytics API provide the following data and information: <ul><li><b>Customer Service Metric</b> &ndash; Returns data on a seller's customer service performance as compared to other seller's in the same peer group.</li> <li><b>Traffic Report</b> &ndash; Returns data that shows how buyers are engaging with a seller's listings.</li> <li><b>Seller Standards Profile</b> &ndash; Returns data pertaining to a seller's performance rating.</li></ul> Sellers can use the data and information returned by the various Analytics API methods to determine where they can make improvements to increase sales and how they might improve their seller status as viewed by eBay buyers.  <br><br>For details on using this API, see <a href=\"/api-docs/sell/static/performance/analyzing-performance.html\" title=\"Selling Integration Guide\">Analyzing seller performance</a>.
 *
 * The version of the OpenAPI document: 1.2.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace TNT\Ebay\Sell\Analytics\V1\Model;

use TNT\Ebay\Sell\Analytics\V1\ObjectSerializer;

/**
 * StandardsProfile Class Doc Comment.
 *
 * @category Class
 *
 * @description A complex type that defines a seller profile.
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
class StandardsProfile implements ModelInterface, \ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'StandardsProfile';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'cycle' => '\TNT\Ebay\Sell\Analytics\V1\Model\Cycle',
        'default_program' => 'bool',
        'evaluation_reason' => 'string',
        'metrics' => '\TNT\Ebay\Sell\Analytics\V1\Model\Metric[]',
        'program' => 'string',
        'standards_level' => 'string',
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
        'cycle' => null,
        'default_program' => null,
        'evaluation_reason' => null,
        'metrics' => null,
        'program' => null,
        'standards_level' => null,
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
        'cycle' => 'cycle',
        'default_program' => 'defaultProgram',
        'evaluation_reason' => 'evaluationReason',
        'metrics' => 'metrics',
        'program' => 'program',
        'standards_level' => 'standardsLevel',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'cycle' => 'setCycle',
        'default_program' => 'setDefaultProgram',
        'evaluation_reason' => 'setEvaluationReason',
        'metrics' => 'setMetrics',
        'program' => 'setProgram',
        'standards_level' => 'setStandardsLevel',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'cycle' => 'getCycle',
        'default_program' => 'getDefaultProgram',
        'evaluation_reason' => 'getEvaluationReason',
        'metrics' => 'getMetrics',
        'program' => 'getProgram',
        'standards_level' => 'getStandardsLevel',
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
        $this->container['cycle'] = $data['cycle'] ?? null;
        $this->container['default_program'] = $data['default_program'] ?? null;
        $this->container['evaluation_reason'] = $data['evaluation_reason'] ?? null;
        $this->container['metrics'] = $data['metrics'] ?? null;
        $this->container['program'] = $data['program'] ?? null;
        $this->container['standards_level'] = $data['standards_level'] ?? null;
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
     * Gets cycle.
     *
     * @return \TNT\Ebay\Sell\Analytics\V1\Model\Cycle|null
     */
    public function getCycle()
    {
        return $this->container['cycle'];
    }

    /**
     * Sets cycle.
     *
     * @param \TNT\Ebay\Sell\Analytics\V1\Model\Cycle|null $cycle cycle
     *
     * @return self
     */
    public function setCycle($cycle)
    {
        $this->container['cycle'] = $cycle;

        return $this;
    }

    /**
     * Gets default_program.
     *
     * @return bool|null
     */
    public function getDefaultProgram()
    {
        return $this->container['default_program'];
    }

    /**
     * Sets default_program.
     *
     * @param bool|null $default_program If set to true, this flag indicates this is the default program for the seller. Except for sellers in China, a seller's default program is the marketplace where they registered with eBay. Seller's in China select their default program when they register.
     *
     * @return self
     */
    public function setDefaultProgram($default_program)
    {
        $this->container['default_program'] = $default_program;

        return $this;
    }

    /**
     * Gets evaluation_reason.
     *
     * @return string|null
     */
    public function getEvaluationReason()
    {
        return $this->container['evaluation_reason'];
    }

    /**
     * Sets evaluation_reason.
     *
     * @param string|null $evaluation_reason Specifies how the overall seller level was calculated. In the event of special circumstances (as determined by eBay), eBay may override the calculated seller level. In general, such overrides protect a seller's level. The usual value for both cycle types is &quot;Seller level generated by standards monthly evaluation cycle.&quot;
     *
     * @return self
     */
    public function setEvaluationReason($evaluation_reason)
    {
        $this->container['evaluation_reason'] = $evaluation_reason;

        return $this;
    }

    /**
     * Gets metrics.
     *
     * @return \TNT\Ebay\Sell\Analytics\V1\Model\Metric[]|null
     */
    public function getMetrics()
    {
        return $this->container['metrics'];
    }

    /**
     * Sets metrics.
     *
     * @param \TNT\Ebay\Sell\Analytics\V1\Model\Metric[]|null $metrics A list of the metrics upon which a seller's profile is evaluated. Each program's applicable metrics and requirements are listed at eBay Top Rated seller program standards.
     *
     * @return self
     */
    public function setMetrics($metrics)
    {
        $this->container['metrics'] = $metrics;

        return $this;
    }

    /**
     * Gets program.
     *
     * @return string|null
     */
    public function getProgram()
    {
        return $this->container['program'];
    }

    /**
     * Sets program.
     *
     * @param string|null $program Indicates the program used to generate the profile data. Values can be PROGRAM_DE, PROGRAM_UK, PROGRAM_US, or PROGRAM_GLOBAL. For implementation help, refer to <a href='https://developer.ebay.com/devzone/rest/api-ref/analytics/types/ProgramEnum.html'>eBay API documentation</a>
     *
     * @return self
     */
    public function setProgram($program)
    {
        $this->container['program'] = $program;

        return $this;
    }

    /**
     * Gets standards_level.
     *
     * @return string|null
     */
    public function getStandardsLevel()
    {
        return $this->container['standards_level'];
    }

    /**
     * Sets standards_level.
     *
     * @param string|null $standards_level The overall standards level of the seller, one of TOP_RATED, ABOVE_STANDARD, or BELOW_STANDARD. For implementation help, refer to <a href='https://developer.ebay.com/devzone/rest/api-ref/analytics/types/StandardsLevelEnum.html'>eBay API documentation</a>
     *
     * @return self
     */
    public function setStandardsLevel($standards_level)
    {
        $this->container['standards_level'] = $standards_level;

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
