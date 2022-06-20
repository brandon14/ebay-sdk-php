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
 * OfferSkuResponse.
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
 * Inventory API.
 *
 * The Inventory API is used to create and manage inventory, and then to publish and manage this inventory on an eBay marketplace. There are also methods in this API that will convert eligible, active eBay listings into the Inventory API model.
 *
 * The version of the OpenAPI document: 1.16.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace TNT\Ebay\Sell\Inventory\V1\Model;

use ArrayAccess;
use TNT\Ebay\Sell\Inventory\V1\ObjectSerializer;

/**
 * OfferSkuResponse Class Doc Comment.
 *
 * @category Class
 * @description This type is used by the &lt;strong&gt;bulkCreateOffer&lt;/strong&gt; response to show the status of each offer that the seller attempted to create with the &lt;strong&gt;bulkCreateOffer&lt;/strong&gt; method. For each offer that is created successfully, the returned &lt;strong&gt;statusCode&lt;/strong&gt; value should be &lt;code&gt;200&lt;/code&gt;, and a unique &lt;strong&gt;offerId&lt;/strong&gt; should be created for each offer. If any issues occur with the creation of any offers, &lt;strong&gt;errors&lt;/strong&gt; and/or &lt;strong&gt;warnings&lt;/strong&gt; containers will be returned.
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class OfferSkuResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'OfferSkuResponse';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'errors' => '\TNT\Ebay\Sell\Inventory\V1\Model\Error[]',
        'format' => 'string',
        'marketplace_id' => 'string',
        'offer_id' => 'string',
        'sku' => 'string',
        'status_code' => 'int',
        'warnings' => '\TNT\Ebay\Sell\Inventory\V1\Model\Error[]',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'errors' => null,
        'format' => null,
        'marketplace_id' => null,
        'offer_id' => null,
        'sku' => null,
        'status_code' => 'int32',
        'warnings' => null,
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
        'errors' => 'errors',
        'format' => 'format',
        'marketplace_id' => 'marketplaceId',
        'offer_id' => 'offerId',
        'sku' => 'sku',
        'status_code' => 'statusCode',
        'warnings' => 'warnings',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'errors' => 'setErrors',
        'format' => 'setFormat',
        'marketplace_id' => 'setMarketplaceId',
        'offer_id' => 'setOfferId',
        'sku' => 'setSku',
        'status_code' => 'setStatusCode',
        'warnings' => 'setWarnings',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'errors' => 'getErrors',
        'format' => 'getFormat',
        'marketplace_id' => 'getMarketplaceId',
        'offer_id' => 'getOfferId',
        'sku' => 'getSku',
        'status_code' => 'getStatusCode',
        'warnings' => 'getWarnings',
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
        $this->container['errors'] = $data['errors'] ?? null;
        $this->container['format'] = $data['format'] ?? null;
        $this->container['marketplace_id'] = $data['marketplace_id'] ?? null;
        $this->container['offer_id'] = $data['offer_id'] ?? null;
        $this->container['sku'] = $data['sku'] ?? null;
        $this->container['status_code'] = $data['status_code'] ?? null;
        $this->container['warnings'] = $data['warnings'] ?? null;
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
     * Gets errors.
     *
     * @return \TNT\Ebay\Sell\Inventory\V1\Model\Error[]|null
     */
    public function getErrors()
    {
        return $this->container['errors'];
    }

    /**
     * Sets errors.
     *
     * @param \TNT\Ebay\Sell\Inventory\V1\Model\Error[]|null $errors this container will be returned at the offer level, and will contain one or more errors if any occurred with the attempted creation of the corresponding offer
     *
     * @return self
     */
    public function setErrors($errors)
    {
        $this->container['errors'] = $errors;

        return $this;
    }

    /**
     * Gets format.
     *
     * @return string|null
     */
    public function getFormat()
    {
        return $this->container['format'];
    }

    /**
     * Sets format.
     *
     * @param string|null $format This enumeration value indicates the listing format of the offer. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/inventory/types/slr:FormatTypeEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setFormat($format)
    {
        $this->container['format'] = $format;

        return $this;
    }

    /**
     * Gets marketplace_id.
     *
     * @return string|null
     */
    public function getMarketplaceId()
    {
        return $this->container['marketplace_id'];
    }

    /**
     * Sets marketplace_id.
     *
     * @param string|null $marketplace_id This enumeration value is the unique identifier of the eBay marketplace for which the offer will be made available. This enumeration value should be the same for all offers since the <strong>bulkCreateOffer</strong> method can only be used to create offers for one eBay marketplace at a time. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/inventory/types/slr:MarketplaceEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setMarketplaceId($marketplace_id)
    {
        $this->container['marketplace_id'] = $marketplace_id;

        return $this;
    }

    /**
     * Gets offer_id.
     *
     * @return string|null
     */
    public function getOfferId()
    {
        return $this->container['offer_id'];
    }

    /**
     * Sets offer_id.
     *
     * @param string|null $offer_id The unique identifier of the newly-created offer. This identifier should be automatically created by eBay if the creation of the offer was successful. It is not returned if the creation of the offer was not successful. In which case, the user may want to scan the corresponding <strong>errors</strong> and/or <strong>warnings</strong> container to see what the issue may be.
     *
     * @return self
     */
    public function setOfferId($offer_id)
    {
        $this->container['offer_id'] = $offer_id;

        return $this;
    }

    /**
     * Gets sku.
     *
     * @return string|null
     */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku.
     *
     * @param string|null $sku The seller-defined Stock-Keeping Unit (SKU) of the inventory item. The <strong>sku</strong> value is required for each product offer that the seller is trying to create, and it is always returned to identified the product that is associated with the offer.
     *
     * @return self
     */
    public function setSku($sku)
    {
        $this->container['sku'] = $sku;

        return $this;
    }

    /**
     * Gets status_code.
     *
     * @return int|null
     */
    public function getStatusCode()
    {
        return $this->container['status_code'];
    }

    /**
     * Sets status_code.
     *
     * @param int|null $status_code The integer value returned in this field is the http status code. If an offer is created successfully, the value returned in this field should be <code>200</code>. A user can view the <strong>HTTP status codes</strong> section for information on other status codes that may be returned with the <strong>bulkCreateOffer</strong> method.
     *
     * @return self
     */
    public function setStatusCode($status_code)
    {
        $this->container['status_code'] = $status_code;

        return $this;
    }

    /**
     * Gets warnings.
     *
     * @return \TNT\Ebay\Sell\Inventory\V1\Model\Error[]|null
     */
    public function getWarnings()
    {
        return $this->container['warnings'];
    }

    /**
     * Sets warnings.
     *
     * @param \TNT\Ebay\Sell\Inventory\V1\Model\Error[]|null $warnings This container will be returned at the offer level, and will contain one or more warnings if any occurred with the attempted creation of the corresponding offer. Note that it is possible that an offer can be created successfully even if one or more warnings are triggered.
     *
     * @return self
     */
    public function setWarnings($warnings)
    {
        $this->container['warnings'] = $warnings;

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
