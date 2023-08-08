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
 * Transaction.
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
 * Transaction Class Doc Comment.
 *
 * @category Class
 *
 * @description This type is used to express the details of one of the following monetary transactions: a buyer&#39;s payment for an order, a refund to the buyer for a returned item or cancelled order, or a credit issued by eBay to the seller&#39;s account.
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
class Transaction implements ModelInterface, \ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'Transaction';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'amount' => '\TNT\Ebay\Sell\Finances\V1\Model\Amount',
        'booking_entry' => 'string',
        'buyer' => '\TNT\Ebay\Sell\Finances\V1\Model\Buyer',
        'e_bay_collected_tax_amount' => '\TNT\Ebay\Sell\Finances\V1\Model\Amount',
        'fee_jurisdiction' => '\TNT\Ebay\Sell\Finances\V1\Model\FeeJurisdiction',
        'fee_type' => 'string',
        'order_id' => 'string',
        'order_line_items' => '\TNT\Ebay\Sell\Finances\V1\Model\OrderLineItem[]',
        'payments_entity' => 'string',
        'payout_id' => 'string',
        'references' => '\TNT\Ebay\Sell\Finances\V1\Model\Reference[]',
        'sales_record_reference' => 'string',
        'total_fee_amount' => '\TNT\Ebay\Sell\Finances\V1\Model\Amount',
        'total_fee_basis_amount' => '\TNT\Ebay\Sell\Finances\V1\Model\Amount',
        'transaction_date' => 'string',
        'transaction_id' => 'string',
        'transaction_memo' => 'string',
        'transaction_status' => 'string',
        'transaction_type' => 'string',
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
        'amount' => null,
        'booking_entry' => null,
        'buyer' => null,
        'e_bay_collected_tax_amount' => null,
        'fee_jurisdiction' => null,
        'fee_type' => null,
        'order_id' => null,
        'order_line_items' => null,
        'payments_entity' => null,
        'payout_id' => null,
        'references' => null,
        'sales_record_reference' => null,
        'total_fee_amount' => null,
        'total_fee_basis_amount' => null,
        'transaction_date' => null,
        'transaction_id' => null,
        'transaction_memo' => null,
        'transaction_status' => null,
        'transaction_type' => null,
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
        'booking_entry' => 'bookingEntry',
        'buyer' => 'buyer',
        'e_bay_collected_tax_amount' => 'eBayCollectedTaxAmount',
        'fee_jurisdiction' => 'feeJurisdiction',
        'fee_type' => 'feeType',
        'order_id' => 'orderId',
        'order_line_items' => 'orderLineItems',
        'payments_entity' => 'paymentsEntity',
        'payout_id' => 'payoutId',
        'references' => 'references',
        'sales_record_reference' => 'salesRecordReference',
        'total_fee_amount' => 'totalFeeAmount',
        'total_fee_basis_amount' => 'totalFeeBasisAmount',
        'transaction_date' => 'transactionDate',
        'transaction_id' => 'transactionId',
        'transaction_memo' => 'transactionMemo',
        'transaction_status' => 'transactionStatus',
        'transaction_type' => 'transactionType',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'amount' => 'setAmount',
        'booking_entry' => 'setBookingEntry',
        'buyer' => 'setBuyer',
        'e_bay_collected_tax_amount' => 'setEBayCollectedTaxAmount',
        'fee_jurisdiction' => 'setFeeJurisdiction',
        'fee_type' => 'setFeeType',
        'order_id' => 'setOrderId',
        'order_line_items' => 'setOrderLineItems',
        'payments_entity' => 'setPaymentsEntity',
        'payout_id' => 'setPayoutId',
        'references' => 'setReferences',
        'sales_record_reference' => 'setSalesRecordReference',
        'total_fee_amount' => 'setTotalFeeAmount',
        'total_fee_basis_amount' => 'setTotalFeeBasisAmount',
        'transaction_date' => 'setTransactionDate',
        'transaction_id' => 'setTransactionId',
        'transaction_memo' => 'setTransactionMemo',
        'transaction_status' => 'setTransactionStatus',
        'transaction_type' => 'setTransactionType',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'amount' => 'getAmount',
        'booking_entry' => 'getBookingEntry',
        'buyer' => 'getBuyer',
        'e_bay_collected_tax_amount' => 'getEBayCollectedTaxAmount',
        'fee_jurisdiction' => 'getFeeJurisdiction',
        'fee_type' => 'getFeeType',
        'order_id' => 'getOrderId',
        'order_line_items' => 'getOrderLineItems',
        'payments_entity' => 'getPaymentsEntity',
        'payout_id' => 'getPayoutId',
        'references' => 'getReferences',
        'sales_record_reference' => 'getSalesRecordReference',
        'total_fee_amount' => 'getTotalFeeAmount',
        'total_fee_basis_amount' => 'getTotalFeeBasisAmount',
        'transaction_date' => 'getTransactionDate',
        'transaction_id' => 'getTransactionId',
        'transaction_memo' => 'getTransactionMemo',
        'transaction_status' => 'getTransactionStatus',
        'transaction_type' => 'getTransactionType',
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
        $this->container['booking_entry'] = $data['booking_entry'] ?? null;
        $this->container['buyer'] = $data['buyer'] ?? null;
        $this->container['e_bay_collected_tax_amount'] = $data['e_bay_collected_tax_amount'] ?? null;
        $this->container['fee_jurisdiction'] = $data['fee_jurisdiction'] ?? null;
        $this->container['fee_type'] = $data['fee_type'] ?? null;
        $this->container['order_id'] = $data['order_id'] ?? null;
        $this->container['order_line_items'] = $data['order_line_items'] ?? null;
        $this->container['payments_entity'] = $data['payments_entity'] ?? null;
        $this->container['payout_id'] = $data['payout_id'] ?? null;
        $this->container['references'] = $data['references'] ?? null;
        $this->container['sales_record_reference'] = $data['sales_record_reference'] ?? null;
        $this->container['total_fee_amount'] = $data['total_fee_amount'] ?? null;
        $this->container['total_fee_basis_amount'] = $data['total_fee_basis_amount'] ?? null;
        $this->container['transaction_date'] = $data['transaction_date'] ?? null;
        $this->container['transaction_id'] = $data['transaction_id'] ?? null;
        $this->container['transaction_memo'] = $data['transaction_memo'] ?? null;
        $this->container['transaction_status'] = $data['transaction_status'] ?? null;
        $this->container['transaction_type'] = $data['transaction_type'] ?? null;
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
     * Gets booking_entry.
     *
     * @return string|null
     */
    public function getBookingEntry()
    {
        return $this->container['booking_entry'];
    }

    /**
     * Sets booking_entry.
     *
     * @param string|null $booking_entry The enumeration value returned in this field indicates if the monetary transaction amount is a (<code>CREDIT</code>) or a (<code>DEBIT</code>) to the seller's account. Typically, the <code>SALE</code> and <code>CREDIT</code> transaction types are credits to the seller's account, and the <code>REFUND</code>, <code>DISPUTE</code>, <code>SHIPPING_LABEL</code>, and <code>TRANSFER</code> transaction types are debits to the seller's account. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/finances/types/pay:BookingEntryEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setBookingEntry($booking_entry)
    {
        $this->container['booking_entry'] = $booking_entry;

        return $this;
    }

    /**
     * Gets buyer.
     *
     * @return \TNT\Ebay\Sell\Finances\V1\Model\Buyer|null
     */
    public function getBuyer()
    {
        return $this->container['buyer'];
    }

    /**
     * Sets buyer.
     *
     * @param \TNT\Ebay\Sell\Finances\V1\Model\Buyer|null $buyer buyer
     *
     * @return self
     */
    public function setBuyer($buyer)
    {
        $this->container['buyer'] = $buyer;

        return $this;
    }

    /**
     * Gets e_bay_collected_tax_amount.
     *
     * @return \TNT\Ebay\Sell\Finances\V1\Model\Amount|null
     */
    public function getEBayCollectedTaxAmount()
    {
        return $this->container['e_bay_collected_tax_amount'];
    }

    /**
     * Sets e_bay_collected_tax_amount.
     *
     * @param \TNT\Ebay\Sell\Finances\V1\Model\Amount|null $e_bay_collected_tax_amount e_bay_collected_tax_amount
     *
     * @return self
     */
    public function setEBayCollectedTaxAmount($e_bay_collected_tax_amount)
    {
        $this->container['e_bay_collected_tax_amount'] = $e_bay_collected_tax_amount;

        return $this;
    }

    /**
     * Gets fee_jurisdiction.
     *
     * @return \TNT\Ebay\Sell\Finances\V1\Model\FeeJurisdiction|null
     */
    public function getFeeJurisdiction()
    {
        return $this->container['fee_jurisdiction'];
    }

    /**
     * Sets fee_jurisdiction.
     *
     * @param \TNT\Ebay\Sell\Finances\V1\Model\FeeJurisdiction|null $fee_jurisdiction fee_jurisdiction
     *
     * @return self
     */
    public function setFeeJurisdiction($fee_jurisdiction)
    {
        $this->container['fee_jurisdiction'] = $fee_jurisdiction;

        return $this;
    }

    /**
     * Gets fee_type.
     *
     * @return string|null
     */
    public function getFeeType()
    {
        return $this->container['fee_type'];
    }

    /**
     * Sets fee_type.
     *
     * @param string|null $fee_type The type of fee. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/finances/types/api:FeeTypeEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setFeeType($fee_type)
    {
        $this->container['fee_type'] = $fee_type;

        return $this;
    }

    /**
     * Gets order_id.
     *
     * @return string|null
     */
    public function getOrderId()
    {
        return $this->container['order_id'];
    }

    /**
     * Sets order_id.
     *
     * @param string|null $order_id the unique identifier of the eBay order associated with the monetary transaction
     *
     * @return self
     */
    public function setOrderId($order_id)
    {
        $this->container['order_id'] = $order_id;

        return $this;
    }

    /**
     * Gets order_line_items.
     *
     * @return \TNT\Ebay\Sell\Finances\V1\Model\OrderLineItem[]|null
     */
    public function getOrderLineItems()
    {
        return $this->container['order_line_items'];
    }

    /**
     * Sets order_line_items.
     *
     * @param \TNT\Ebay\Sell\Finances\V1\Model\OrderLineItem[]|null $order_line_items This array shows the fees that are deducted from a seller payout for each line item in an order.<br /><br /><span class=\"tablenote\"><strong>Note:</strong> In some cases, a transaction fee might be returned asynchronously from the associated order. In such cases, you can determine the order to which the fee applies by examining the referenceID value of the fee, which should match the ID of the order.
     *
     * @return self
     */
    public function setOrderLineItems($order_line_items)
    {
        $this->container['order_line_items'] = $order_line_items;

        return $this;
    }

    /**
     * Gets payments_entity.
     *
     * @return string|null
     */
    public function getPaymentsEntity()
    {
        return $this->container['payments_entity'];
    }

    /**
     * Sets payments_entity.
     *
     * @param string|null $payments_entity this string value indicates the entity that is processing  the payment
     *
     * @return self
     */
    public function setPaymentsEntity($payments_entity)
    {
        $this->container['payments_entity'] = $payments_entity;

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
     * @param string|null $payout_id The unique identifier of the seller payout associated with the monetary transaction. This identifier is generated once eBay begins processing the payout for the corresponding order. This field will not be returned if eBay has not yet begun processing the payout for an order.
     *
     * @return self
     */
    public function setPayoutId($payout_id)
    {
        $this->container['payout_id'] = $payout_id;

        return $this;
    }

    /**
     * Gets references.
     *
     * @return \TNT\Ebay\Sell\Finances\V1\Model\Reference[]|null
     */
    public function getReferences()
    {
        return $this->container['references'];
    }

    /**
     * Sets references.
     *
     * @param \TNT\Ebay\Sell\Finances\V1\Model\Reference[]|null $references This field contains reference information for the transaction fee. This includes an ID and the type of ID provided (such as item ID).
     *
     * @return self
     */
    public function setReferences($references)
    {
        $this->container['references'] = $references;

        return $this;
    }

    /**
     * Gets sales_record_reference.
     *
     * @return string|null
     */
    public function getSalesRecordReference()
    {
        return $this->container['sales_record_reference'];
    }

    /**
     * Sets sales_record_reference.
     *
     * @param string|null $sales_record_reference The Sales Record Number associated with a sales order. Sales Record Numbers are Selling Manager/Selling Manager Pro identifiers that are created at order checkout.<br/><br/><span class=\"tablenote\"><strong>Note:</strong> For all orders originating after February 1, 2020, a value of <code>0</code> will be returned in this field. The Sales Record Number field has also been removed from Seller Hub. Instead of <strong>salesRecordReference</strong>, depend on <strong>orderId</strong> instead as the identifier of the order. The <strong>salesRecordReference</strong> field has been scheduled for deprecation, and a date for when this field will no longer be returned at all will be announced soon.</span>
     *
     * @return self
     */
    public function setSalesRecordReference($sales_record_reference)
    {
        $this->container['sales_record_reference'] = $sales_record_reference;

        return $this;
    }

    /**
     * Gets total_fee_amount.
     *
     * @return \TNT\Ebay\Sell\Finances\V1\Model\Amount|null
     */
    public function getTotalFeeAmount()
    {
        return $this->container['total_fee_amount'];
    }

    /**
     * Sets total_fee_amount.
     *
     * @param \TNT\Ebay\Sell\Finances\V1\Model\Amount|null $total_fee_amount total_fee_amount
     *
     * @return self
     */
    public function setTotalFeeAmount($total_fee_amount)
    {
        $this->container['total_fee_amount'] = $total_fee_amount;

        return $this;
    }

    /**
     * Gets total_fee_basis_amount.
     *
     * @return \TNT\Ebay\Sell\Finances\V1\Model\Amount|null
     */
    public function getTotalFeeBasisAmount()
    {
        return $this->container['total_fee_basis_amount'];
    }

    /**
     * Sets total_fee_basis_amount.
     *
     * @param \TNT\Ebay\Sell\Finances\V1\Model\Amount|null $total_fee_basis_amount total_fee_basis_amount
     *
     * @return self
     */
    public function setTotalFeeBasisAmount($total_fee_basis_amount)
    {
        $this->container['total_fee_basis_amount'] = $total_fee_basis_amount;

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
     * @param string|null $transaction_date This timestamp indicates when the monetary transaction (order purchase, buyer refund, seller credit) occurred. The following (UTC) format is used: <code>YYYY-MM-DDTHH:MM:SS.SSSZ</code>. For example, <code>2015-08-04T19:09:02.768Z</code>.
     *
     * @return self
     */
    public function setTransactionDate($transaction_date)
    {
        $this->container['transaction_date'] = $transaction_date;

        return $this;
    }

    /**
     * Gets transaction_id.
     *
     * @return string|null
     */
    public function getTransactionId()
    {
        return $this->container['transaction_id'];
    }

    /**
     * Sets transaction_id.
     *
     * @param string|null $transaction_id The unique identifier of the monetary transaction. A monetary transaction can be a sales order, an order refund to the buyer, a credit to the seller's account, a debit to the seller for the purchase of a shipping label, or a transaction where eBay recouped money from the seller if the seller lost a buyer-initiated payment dispute.
     *
     * @return self
     */
    public function setTransactionId($transaction_id)
    {
        $this->container['transaction_id'] = $transaction_id;

        return $this;
    }

    /**
     * Gets transaction_memo.
     *
     * @return string|null
     */
    public function getTransactionMemo()
    {
        return $this->container['transaction_memo'];
    }

    /**
     * Sets transaction_memo.
     *
     * @param string|null $transaction_memo This field provides more details on shipping label transactions and transactions where the funds are being held by eBay. For shipping label transactions, the <b>transactionMemo</b> gives details about a purchase, a refund, or a price adjustment to the cost of the shipping label. For on-hold transactions, the <b>transactionMemo</b> provides information on the reason for the hold or when the hold will be released (e.g., \"Funds on hold. Estimated release on Jun 1\").<br/><br/>This field is only returned if applicable/available.
     *
     * @return self
     */
    public function setTransactionMemo($transaction_memo)
    {
        $this->container['transaction_memo'] = $transaction_memo;

        return $this;
    }

    /**
     * Gets transaction_status.
     *
     * @return string|null
     */
    public function getTransactionStatus()
    {
        return $this->container['transaction_status'];
    }

    /**
     * Sets transaction_status.
     *
     * @param string|null $transaction_status This enumeration value indicates the current status of the seller payout associated with the monetary transaction. See the <code>TransactionStatusEnum</code> type for more information on the different states. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/finances/types/pay:TransactionStatusEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setTransactionStatus($transaction_status)
    {
        $this->container['transaction_status'] = $transaction_status;

        return $this;
    }

    /**
     * Gets transaction_type.
     *
     * @return string|null
     */
    public function getTransactionType()
    {
        return $this->container['transaction_type'];
    }

    /**
     * Sets transaction_type.
     *
     * @param string|null $transaction_type This enumeration value indicates the type of monetary transaction. Examples of monetary transactions include a buyer's payment for an order, a refund to the buyer for a returned item or cancelled order, or a credit issued by eBay to the seller's account. For a complete list of monetary transaction types within the <strong>Finances API</strong>, see the <a href=\"/api-docs/sell/finances/types/pay:TransactionTypeEnum\">TransactionTypeEnum</a> type. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/finances/types/pay:TransactionTypeEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setTransactionType($transaction_type)
    {
        $this->container['transaction_type'] = $transaction_type;

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
