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
 * Payout.
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

use ArrayAccess;
use TNT\Ebay\Sell\Finances\V1\ObjectSerializer;

/**
 * Payout Class Doc Comment.
 *
 * @category Class
 * @description This type is used to express the details of one seller payout that is returned with the &lt;strong&gt;getPayout&lt;/strong&gt; or &lt;strong&gt;getPayouts&lt;/strong&gt; methods.
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Payout implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'Payout';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'amount' => '\TNT\Ebay\Sell\Finances\V1\Model\Amount',
        'bank_reference' => 'string',
        'last_attempted_payout_date' => 'string',
        'payout_date' => 'string',
        'payout_id' => 'string',
        'payout_instrument' => '\TNT\Ebay\Sell\Finances\V1\Model\PayoutInstrument',
        'payout_memo' => 'string',
        'payout_status' => 'string',
        'payout_status_description' => 'string',
        'total_amount' => '\TNT\Ebay\Sell\Finances\V1\Model\Amount',
        'total_fee' => '\TNT\Ebay\Sell\Finances\V1\Model\Amount',
        'transaction_count' => 'int',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'amount' => null,
        'bank_reference' => null,
        'last_attempted_payout_date' => null,
        'payout_date' => null,
        'payout_id' => null,
        'payout_instrument' => null,
        'payout_memo' => null,
        'payout_status' => null,
        'payout_status_description' => null,
        'total_amount' => null,
        'total_fee' => null,
        'transaction_count' => 'int32',
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
        'amount' => 'amount',
        'bank_reference' => 'bankReference',
        'last_attempted_payout_date' => 'lastAttemptedPayoutDate',
        'payout_date' => 'payoutDate',
        'payout_id' => 'payoutId',
        'payout_instrument' => 'payoutInstrument',
        'payout_memo' => 'payoutMemo',
        'payout_status' => 'payoutStatus',
        'payout_status_description' => 'payoutStatusDescription',
        'total_amount' => 'totalAmount',
        'total_fee' => 'totalFee',
        'transaction_count' => 'transactionCount',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'amount' => 'setAmount',
        'bank_reference' => 'setBankReference',
        'last_attempted_payout_date' => 'setLastAttemptedPayoutDate',
        'payout_date' => 'setPayoutDate',
        'payout_id' => 'setPayoutId',
        'payout_instrument' => 'setPayoutInstrument',
        'payout_memo' => 'setPayoutMemo',
        'payout_status' => 'setPayoutStatus',
        'payout_status_description' => 'setPayoutStatusDescription',
        'total_amount' => 'setTotalAmount',
        'total_fee' => 'setTotalFee',
        'transaction_count' => 'setTransactionCount',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'amount' => 'getAmount',
        'bank_reference' => 'getBankReference',
        'last_attempted_payout_date' => 'getLastAttemptedPayoutDate',
        'payout_date' => 'getPayoutDate',
        'payout_id' => 'getPayoutId',
        'payout_instrument' => 'getPayoutInstrument',
        'payout_memo' => 'getPayoutMemo',
        'payout_status' => 'getPayoutStatus',
        'payout_status_description' => 'getPayoutStatusDescription',
        'total_amount' => 'getTotalAmount',
        'total_fee' => 'getTotalFee',
        'transaction_count' => 'getTransactionCount',
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
        $this->container['amount'] = $data['amount'] ?? null;
        $this->container['bank_reference'] = $data['bank_reference'] ?? null;
        $this->container['last_attempted_payout_date'] = $data['last_attempted_payout_date'] ?? null;
        $this->container['payout_date'] = $data['payout_date'] ?? null;
        $this->container['payout_id'] = $data['payout_id'] ?? null;
        $this->container['payout_instrument'] = $data['payout_instrument'] ?? null;
        $this->container['payout_memo'] = $data['payout_memo'] ?? null;
        $this->container['payout_status'] = $data['payout_status'] ?? null;
        $this->container['payout_status_description'] = $data['payout_status_description'] ?? null;
        $this->container['total_amount'] = $data['total_amount'] ?? null;
        $this->container['total_fee'] = $data['total_fee'] ?? null;
        $this->container['transaction_count'] = $data['transaction_count'] ?? null;
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
     * Gets amount.
     *
     * @return \TNT\Ebay\Sell\Finances\V1\Model\Amount|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount.
     *
     * @param \TNT\Ebay\Sell\Finances\V1\Model\Amount|null $amount amount
     *
     * @return self
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets bank_reference.
     *
     * @return string|null
     */
    public function getBankReference()
    {
        return $this->container['bank_reference'];
    }

    /**
     * Sets bank_reference.
     *
     * @param string|null $bank_reference This field contains additional information provided by the bank and passed on by the payment processor; e.g., the manner in which the transaction will appear on the seller's bank statement. The field is returned only when provided by the bank and processor.
     *
     * @return self
     */
    public function setBankReference($bank_reference)
    {
        $this->container['bank_reference'] = $bank_reference;

        return $this;
    }

    /**
     * Gets last_attempted_payout_date.
     *
     * @return string|null
     */
    public function getLastAttemptedPayoutDate()
    {
        return $this->container['last_attempted_payout_date'];
    }

    /**
     * Sets last_attempted_payout_date.
     *
     * @param string|null $last_attempted_payout_date This timestamp indicates the date/time when eBay last attempted to process a seller payout but it failed. This field is only returned if a seller payout fails, and the <strong>payoutStatus</strong> value shows <code>RETRYABLE_FAILED</code> or <code>TERMINAL_FAILED</code>. A seller can filter on the <b>lastAttemptedPayoutDate</b> in a <b>getPayouts</b> request.
     *
     * @return self
     */
    public function setLastAttemptedPayoutDate($last_attempted_payout_date)
    {
        $this->container['last_attempted_payout_date'] = $last_attempted_payout_date;

        return $this;
    }

    /**
     * Gets payout_date.
     *
     * @return string|null
     */
    public function getPayoutDate()
    {
        return $this->container['payout_date'];
    }

    /**
     * Sets payout_date.
     *
     * @param string|null $payout_date This timestamp indicates when the seller payout began processing. The following format is used: <code>YYYY-MM-DDTHH:MM:SS.SSSZ</code>. For example, <code>2015-08-04T19:09:02.768Z</code>. This field is still returned even if the payout was pending but failed (<strong>payoutStatus</strong> value shows <code>RETRYABLE_FAILED</code> or <code>TERMINAL_FAILED</code>).
     *
     * @return self
     */
    public function setPayoutDate($payout_date)
    {
        $this->container['payout_date'] = $payout_date;

        return $this;
    }

    /**
     * Gets payout_id.
     *
     * @return string|null
     */
    public function getPayoutId()
    {
        return $this->container['payout_id'];
    }

    /**
     * Sets payout_id.
     *
     * @param string|null $payout_id The unique identifier of the seller payout. This identifier is generated once eBay begins processing the payout to the seller's bank account.
     *
     * @return self
     */
    public function setPayoutId($payout_id)
    {
        $this->container['payout_id'] = $payout_id;

        return $this;
    }

    /**
     * Gets payout_instrument.
     *
     * @return \TNT\Ebay\Sell\Finances\V1\Model\PayoutInstrument|null
     */
    public function getPayoutInstrument()
    {
        return $this->container['payout_instrument'];
    }

    /**
     * Sets payout_instrument.
     *
     * @param \TNT\Ebay\Sell\Finances\V1\Model\PayoutInstrument|null $payout_instrument payout_instrument
     *
     * @return self
     */
    public function setPayoutInstrument($payout_instrument)
    {
        $this->container['payout_instrument'] = $payout_instrument;

        return $this;
    }

    /**
     * Gets payout_memo.
     *
     * @return string|null
     */
    public function getPayoutMemo()
    {
        return $this->container['payout_memo'];
    }

    /**
     * Sets payout_memo.
     *
     * @param string|null $payout_memo This field contains information provided by upstream components, based on internal and external commitments. A typical message would contain the expected arrival time of the payout.
     *
     * @return self
     */
    public function setPayoutMemo($payout_memo)
    {
        $this->container['payout_memo'] = $payout_memo;

        return $this;
    }

    /**
     * Gets payout_status.
     *
     * @return string|null
     */
    public function getPayoutStatus()
    {
        return $this->container['payout_status'];
    }

    /**
     * Sets payout_status.
     *
     * @param string|null $payout_status This enumeration value indicates the current status of the seller payout. For a successful payout, the value returned will be <code>SUCCEEDED</code>. See the <strong>PayoutStatusEnum</strong> type for more details on each payout status value. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/finances/types/pay:PayoutStatusEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setPayoutStatus($payout_status)
    {
        $this->container['payout_status'] = $payout_status;

        return $this;
    }

    /**
     * Gets payout_status_description.
     *
     * @return string|null
     */
    public function getPayoutStatusDescription()
    {
        return $this->container['payout_status_description'];
    }

    /**
     * Sets payout_status_description.
     *
     * @param string|null $payout_status_description This field provides more details about the current status of payout. The description returned here will correspond with enumeration value returned in the <strong>payoutStatus</strong> field. The following shows what description text might appear based on the different <strong>payoutStatus</strong> values:<ul><li><code>INITIATED</code>: <em>Preparing to send</em></li><li><code>SUCCEEDED</code>: <em>Funds sent</em></li><li><code>REVERSED</code>: <em>Waiting to retry : Money rejected by seller's bank</em></li><li><code>RETRYABLE_FAILED</code>: <em>Waiting to retry</em></li><li><code>TERMINAL_FAILED</code>: <em>Payout failed</em></li></ul>
     *
     * @return self
     */
    public function setPayoutStatusDescription($payout_status_description)
    {
        $this->container['payout_status_description'] = $payout_status_description;

        return $this;
    }

    /**
     * Gets total_amount.
     *
     * @return \TNT\Ebay\Sell\Finances\V1\Model\Amount|null
     */
    public function getTotalAmount()
    {
        return $this->container['total_amount'];
    }

    /**
     * Sets total_amount.
     *
     * @param \TNT\Ebay\Sell\Finances\V1\Model\Amount|null $total_amount total_amount
     *
     * @return self
     */
    public function setTotalAmount($total_amount)
    {
        $this->container['total_amount'] = $total_amount;

        return $this;
    }

    /**
     * Gets total_fee.
     *
     * @return \TNT\Ebay\Sell\Finances\V1\Model\Amount|null
     */
    public function getTotalFee()
    {
        return $this->container['total_fee'];
    }

    /**
     * Sets total_fee.
     *
     * @param \TNT\Ebay\Sell\Finances\V1\Model\Amount|null $total_fee total_fee
     *
     * @return self
     */
    public function setTotalFee($total_fee)
    {
        $this->container['total_fee'] = $total_fee;

        return $this;
    }

    /**
     * Gets transaction_count.
     *
     * @return int|null
     */
    public function getTransactionCount()
    {
        return $this->container['transaction_count'];
    }

    /**
     * Sets transaction_count.
     *
     * @param int|null $transaction_count This integer value indicates the number of monetary transactions (all orders, refunds, and credits, etc.) that have occurred with the corresponding payout. Its value should always be at least <code>1</code>, since there is at least one order per seller payout.
     *
     * @return self
     */
    public function setTransactionCount($transaction_count)
    {
        $this->container['transaction_count'] = $transaction_count;

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
