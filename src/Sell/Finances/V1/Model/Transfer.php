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
 * Transfer.
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
 * eBay Finances API.
 *
 * This API is used to retrieve seller payouts and monetary transaction details related to those payouts.
 *
 * The version of the OpenAPI document: v1.15.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace TNT\Ebay\Sell\Finances\V1\Model;

use TNT\Ebay\Sell\Finances\V1\ObjectSerializer;

/**
 * Transfer Class Doc Comment.
 *
 * @category Class
 *
 * @description This type is the base response type used by &lt;code&gt;TRANSFER&lt;/code&gt; transaction type that is returned in the response.
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
class Transfer implements ModelInterface, \ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'Transfer';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'funding_source' => '\TNT\Ebay\Sell\Finances\V1\Model\FundingSource',
        'transaction_date' => 'string',
        'transfer_amount' => '\TNT\Ebay\Sell\Finances\V1\Model\Amount',
        'transfer_detail' => '\TNT\Ebay\Sell\Finances\V1\Model\TransferDetail',
        'transfer_id' => 'string',
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
        'funding_source' => null,
        'transaction_date' => null,
        'transfer_amount' => null,
        'transfer_detail' => null,
        'transfer_id' => null,
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
        'funding_source' => 'fundingSource',
        'transaction_date' => 'transactionDate',
        'transfer_amount' => 'transferAmount',
        'transfer_detail' => 'transferDetail',
        'transfer_id' => 'transferId',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'funding_source' => 'setFundingSource',
        'transaction_date' => 'setTransactionDate',
        'transfer_amount' => 'setTransferAmount',
        'transfer_detail' => 'setTransferDetail',
        'transfer_id' => 'setTransferId',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'funding_source' => 'getFundingSource',
        'transaction_date' => 'getTransactionDate',
        'transfer_amount' => 'getTransferAmount',
        'transfer_detail' => 'getTransferDetail',
        'transfer_id' => 'getTransferId',
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
        $this->container['funding_source'] = $data['funding_source'] ?? null;
        $this->container['transaction_date'] = $data['transaction_date'] ?? null;
        $this->container['transfer_amount'] = $data['transfer_amount'] ?? null;
        $this->container['transfer_detail'] = $data['transfer_detail'] ?? null;
        $this->container['transfer_id'] = $data['transfer_id'] ?? null;
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
     * Gets funding_source.
     *
     * @return \TNT\Ebay\Sell\Finances\V1\Model\FundingSource|null
     */
    public function getFundingSource()
    {
        return $this->container['funding_source'];
    }

    /**
     * Sets funding_source.
     *
     * @param \TNT\Ebay\Sell\Finances\V1\Model\FundingSource|null $funding_source funding_source
     *
     * @return self
     */
    public function setFundingSource($funding_source)
    {
        $this->container['funding_source'] = $funding_source;

        return $this;
    }

    /**
     * Gets transaction_date.
     *
     * @return string|null
     */
    public function getTransactionDate()
    {
        return $this->container['transaction_date'];
    }

    /**
     * Sets transaction_date.
     *
     * @param string|null $transaction_date This timestamp indicates the date/time of the transfer. The following (UTC) format is used: <code>YYYY-MM-DDTHH:MM:SS.SSSZ</code>. For example, <code>2020-08-04T19:09:02.768Z</code>
     *
     * @return self
     */
    public function setTransactionDate($transaction_date)
    {
        $this->container['transaction_date'] = $transaction_date;

        return $this;
    }

    /**
     * Gets transfer_amount.
     *
     * @return \TNT\Ebay\Sell\Finances\V1\Model\Amount|null
     */
    public function getTransferAmount()
    {
        return $this->container['transfer_amount'];
    }

    /**
     * Sets transfer_amount.
     *
     * @param \TNT\Ebay\Sell\Finances\V1\Model\Amount|null $transfer_amount transfer_amount
     *
     * @return self
     */
    public function setTransferAmount($transfer_amount)
    {
        $this->container['transfer_amount'] = $transfer_amount;

        return $this;
    }

    /**
     * Gets transfer_detail.
     *
     * @return \TNT\Ebay\Sell\Finances\V1\Model\TransferDetail|null
     */
    public function getTransferDetail()
    {
        return $this->container['transfer_detail'];
    }

    /**
     * Sets transfer_detail.
     *
     * @param \TNT\Ebay\Sell\Finances\V1\Model\TransferDetail|null $transfer_detail transfer_detail
     *
     * @return self
     */
    public function setTransferDetail($transfer_detail)
    {
        $this->container['transfer_detail'] = $transfer_detail;

        return $this;
    }

    /**
     * Gets transfer_id.
     *
     * @return string|null
     */
    public function getTransferId()
    {
        return $this->container['transfer_id'];
    }

    /**
     * Sets transfer_id.
     *
     * @param string|null $transfer_id The unique identifier of the <code>TRANSFER</code> transaction type. This is the same value that was passed into the end of the call URI.
     *
     * @return self
     */
    public function setTransferId($transfer_id)
    {
        $this->container['transfer_id'] = $transfer_id;

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
