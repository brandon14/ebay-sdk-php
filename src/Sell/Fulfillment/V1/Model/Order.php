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
 * Order.
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
 * Fulfillment API.
 *
 * Use the Fulfillment API to complete the process of packaging, addressing, handling, and shipping each order on behalf of the seller, in accordance with the payment method and timing specified at checkout.
 *
 * The version of the OpenAPI document: v1.19.17
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace TNT\Ebay\Sell\Fulfillment\V1\Model;

use ArrayAccess;
use TNT\Ebay\Sell\Fulfillment\V1\ObjectSerializer;

/**
 * Order Class Doc Comment.
 *
 * @category Class
 * @description This type contains the details of an order, including information about the buyer, order history, shipping fulfillments, line items, costs, payments, and order fulfillment status.
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Order implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'Order';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'buyer' => '\TNT\Ebay\Sell\Fulfillment\V1\Model\Buyer',
        'buyer_checkout_notes' => 'string',
        'cancel_status' => '\TNT\Ebay\Sell\Fulfillment\V1\Model\CancelStatus',
        'creation_date' => 'string',
        'ebay_collect_and_remit_tax' => 'bool',
        'fulfillment_hrefs' => 'string[]',
        'fulfillment_start_instructions' => '\TNT\Ebay\Sell\Fulfillment\V1\Model\FulfillmentStartInstruction[]',
        'last_modified_date' => 'string',
        'legacy_order_id' => 'string',
        'line_items' => '\TNT\Ebay\Sell\Fulfillment\V1\Model\LineItem[]',
        'order_fulfillment_status' => 'string',
        'order_id' => 'string',
        'order_payment_status' => 'string',
        'payment_summary' => '\TNT\Ebay\Sell\Fulfillment\V1\Model\PaymentSummary',
        'pricing_summary' => '\TNT\Ebay\Sell\Fulfillment\V1\Model\PricingSummary',
        'program' => '\TNT\Ebay\Sell\Fulfillment\V1\Model\Program',
        'sales_record_reference' => 'string',
        'seller_id' => 'string',
        'total_fee_basis_amount' => '\TNT\Ebay\Sell\Fulfillment\V1\Model\Amount',
        'total_marketplace_fee' => '\TNT\Ebay\Sell\Fulfillment\V1\Model\Amount',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'buyer' => null,
        'buyer_checkout_notes' => null,
        'cancel_status' => null,
        'creation_date' => null,
        'ebay_collect_and_remit_tax' => null,
        'fulfillment_hrefs' => null,
        'fulfillment_start_instructions' => null,
        'last_modified_date' => null,
        'legacy_order_id' => null,
        'line_items' => null,
        'order_fulfillment_status' => null,
        'order_id' => null,
        'order_payment_status' => null,
        'payment_summary' => null,
        'pricing_summary' => null,
        'program' => null,
        'sales_record_reference' => null,
        'seller_id' => null,
        'total_fee_basis_amount' => null,
        'total_marketplace_fee' => null,
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
        'buyer' => 'buyer',
        'buyer_checkout_notes' => 'buyerCheckoutNotes',
        'cancel_status' => 'cancelStatus',
        'creation_date' => 'creationDate',
        'ebay_collect_and_remit_tax' => 'ebayCollectAndRemitTax',
        'fulfillment_hrefs' => 'fulfillmentHrefs',
        'fulfillment_start_instructions' => 'fulfillmentStartInstructions',
        'last_modified_date' => 'lastModifiedDate',
        'legacy_order_id' => 'legacyOrderId',
        'line_items' => 'lineItems',
        'order_fulfillment_status' => 'orderFulfillmentStatus',
        'order_id' => 'orderId',
        'order_payment_status' => 'orderPaymentStatus',
        'payment_summary' => 'paymentSummary',
        'pricing_summary' => 'pricingSummary',
        'program' => 'program',
        'sales_record_reference' => 'salesRecordReference',
        'seller_id' => 'sellerId',
        'total_fee_basis_amount' => 'totalFeeBasisAmount',
        'total_marketplace_fee' => 'totalMarketplaceFee',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'buyer' => 'setBuyer',
        'buyer_checkout_notes' => 'setBuyerCheckoutNotes',
        'cancel_status' => 'setCancelStatus',
        'creation_date' => 'setCreationDate',
        'ebay_collect_and_remit_tax' => 'setEbayCollectAndRemitTax',
        'fulfillment_hrefs' => 'setFulfillmentHrefs',
        'fulfillment_start_instructions' => 'setFulfillmentStartInstructions',
        'last_modified_date' => 'setLastModifiedDate',
        'legacy_order_id' => 'setLegacyOrderId',
        'line_items' => 'setLineItems',
        'order_fulfillment_status' => 'setOrderFulfillmentStatus',
        'order_id' => 'setOrderId',
        'order_payment_status' => 'setOrderPaymentStatus',
        'payment_summary' => 'setPaymentSummary',
        'pricing_summary' => 'setPricingSummary',
        'program' => 'setProgram',
        'sales_record_reference' => 'setSalesRecordReference',
        'seller_id' => 'setSellerId',
        'total_fee_basis_amount' => 'setTotalFeeBasisAmount',
        'total_marketplace_fee' => 'setTotalMarketplaceFee',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'buyer' => 'getBuyer',
        'buyer_checkout_notes' => 'getBuyerCheckoutNotes',
        'cancel_status' => 'getCancelStatus',
        'creation_date' => 'getCreationDate',
        'ebay_collect_and_remit_tax' => 'getEbayCollectAndRemitTax',
        'fulfillment_hrefs' => 'getFulfillmentHrefs',
        'fulfillment_start_instructions' => 'getFulfillmentStartInstructions',
        'last_modified_date' => 'getLastModifiedDate',
        'legacy_order_id' => 'getLegacyOrderId',
        'line_items' => 'getLineItems',
        'order_fulfillment_status' => 'getOrderFulfillmentStatus',
        'order_id' => 'getOrderId',
        'order_payment_status' => 'getOrderPaymentStatus',
        'payment_summary' => 'getPaymentSummary',
        'pricing_summary' => 'getPricingSummary',
        'program' => 'getProgram',
        'sales_record_reference' => 'getSalesRecordReference',
        'seller_id' => 'getSellerId',
        'total_fee_basis_amount' => 'getTotalFeeBasisAmount',
        'total_marketplace_fee' => 'getTotalMarketplaceFee',
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
        $this->container['buyer'] = $data['buyer'] ?? null;
        $this->container['buyer_checkout_notes'] = $data['buyer_checkout_notes'] ?? null;
        $this->container['cancel_status'] = $data['cancel_status'] ?? null;
        $this->container['creation_date'] = $data['creation_date'] ?? null;
        $this->container['ebay_collect_and_remit_tax'] = $data['ebay_collect_and_remit_tax'] ?? null;
        $this->container['fulfillment_hrefs'] = $data['fulfillment_hrefs'] ?? null;
        $this->container['fulfillment_start_instructions'] = $data['fulfillment_start_instructions'] ?? null;
        $this->container['last_modified_date'] = $data['last_modified_date'] ?? null;
        $this->container['legacy_order_id'] = $data['legacy_order_id'] ?? null;
        $this->container['line_items'] = $data['line_items'] ?? null;
        $this->container['order_fulfillment_status'] = $data['order_fulfillment_status'] ?? null;
        $this->container['order_id'] = $data['order_id'] ?? null;
        $this->container['order_payment_status'] = $data['order_payment_status'] ?? null;
        $this->container['payment_summary'] = $data['payment_summary'] ?? null;
        $this->container['pricing_summary'] = $data['pricing_summary'] ?? null;
        $this->container['program'] = $data['program'] ?? null;
        $this->container['sales_record_reference'] = $data['sales_record_reference'] ?? null;
        $this->container['seller_id'] = $data['seller_id'] ?? null;
        $this->container['total_fee_basis_amount'] = $data['total_fee_basis_amount'] ?? null;
        $this->container['total_marketplace_fee'] = $data['total_marketplace_fee'] ?? null;
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
     * Gets buyer.
     *
     * @return \TNT\Ebay\Sell\Fulfillment\V1\Model\Buyer|null
     */
    public function getBuyer()
    {
        return $this->container['buyer'];
    }

    /**
     * Sets buyer.
     *
     * @param \TNT\Ebay\Sell\Fulfillment\V1\Model\Buyer|null $buyer buyer
     *
     * @return self
     */
    public function setBuyer($buyer)
    {
        $this->container['buyer'] = $buyer;

        return $this;
    }

    /**
     * Gets buyer_checkout_notes.
     *
     * @return string|null
     */
    public function getBuyerCheckoutNotes()
    {
        return $this->container['buyer_checkout_notes'];
    }

    /**
     * Sets buyer_checkout_notes.
     *
     * @param string|null $buyer_checkout_notes This field contains any comments that the buyer left for the seller about the order during checkout process. This field is only returned if a buyer left comments at checkout time.
     *
     * @return self
     */
    public function setBuyerCheckoutNotes($buyer_checkout_notes)
    {
        $this->container['buyer_checkout_notes'] = $buyer_checkout_notes;

        return $this;
    }

    /**
     * Gets cancel_status.
     *
     * @return \TNT\Ebay\Sell\Fulfillment\V1\Model\CancelStatus|null
     */
    public function getCancelStatus()
    {
        return $this->container['cancel_status'];
    }

    /**
     * Sets cancel_status.
     *
     * @param \TNT\Ebay\Sell\Fulfillment\V1\Model\CancelStatus|null $cancel_status cancel_status
     *
     * @return self
     */
    public function setCancelStatus($cancel_status)
    {
        $this->container['cancel_status'] = $cancel_status;

        return $this;
    }

    /**
     * Gets creation_date.
     *
     * @return string|null
     */
    public function getCreationDate()
    {
        return $this->container['creation_date'];
    }

    /**
     * Sets creation_date.
     *
     * @param string|null $creation_date The date and time that the order was created. This timestamp is in ISO 8601 format, which uses the 24-hour Universal Coordinated Time (UTC) clock. <br /><br /><b>Format:</b> <code>[YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z</code> <br /><b>Example:</b> <code>2015-08-04T19:09:02.768Z</code>
     *
     * @return self
     */
    public function setCreationDate($creation_date)
    {
        $this->container['creation_date'] = $creation_date;

        return $this;
    }

    /**
     * Gets ebay_collect_and_remit_tax.
     *
     * @return bool|null
     */
    public function getEbayCollectAndRemitTax()
    {
        return $this->container['ebay_collect_and_remit_tax'];
    }

    /**
     * Sets ebay_collect_and_remit_tax.
     *
     * @param bool|null $ebay_collect_and_remit_tax This field is only returned if <code>true</code>, and indicates that eBay will collect tax (US state-mandated sales tax, Federal and Provincial Sales Tax in Canada, 'Goods and Services' tax in Canada, Australia, and New Zealand, and VAT collected for UK and EU countries,) for at least one line item in the order, and remit the tax to the taxing authority of the buyer's residence. If this field is returned, the seller should search for one or more <strong>ebayCollectAndRemitTaxes</strong> containers at the line item level to get more information about the type of tax and the amount.
     *
     * @return self
     */
    public function setEbayCollectAndRemitTax($ebay_collect_and_remit_tax)
    {
        $this->container['ebay_collect_and_remit_tax'] = $ebay_collect_and_remit_tax;

        return $this;
    }

    /**
     * Gets fulfillment_hrefs.
     *
     * @return string[]|null
     */
    public function getFulfillmentHrefs()
    {
        return $this->container['fulfillment_hrefs'];
    }

    /**
     * Sets fulfillment_hrefs.
     *
     * @param string[]|null $fulfillment_hrefs this array contains a list of one or more <strong>getShippingFulfillment</strong> call URIs that can be used to retrieve shipping fulfillments that have been set up for the order
     *
     * @return self
     */
    public function setFulfillmentHrefs($fulfillment_hrefs)
    {
        $this->container['fulfillment_hrefs'] = $fulfillment_hrefs;

        return $this;
    }

    /**
     * Gets fulfillment_start_instructions.
     *
     * @return \TNT\Ebay\Sell\Fulfillment\V1\Model\FulfillmentStartInstruction[]|null
     */
    public function getFulfillmentStartInstructions()
    {
        return $this->container['fulfillment_start_instructions'];
    }

    /**
     * Sets fulfillment_start_instructions.
     *
     * @param \TNT\Ebay\Sell\Fulfillment\V1\Model\FulfillmentStartInstruction[]|null $fulfillment_start_instructions This container consists of a set of specifications for fulfilling the order, including the type of fulfillment, shipping carrier and service, shipping address, and estimated delivery window. These instructions are derived from the buyer's and seller's eBay account preferences, the listing parameters, and the buyer's checkout selections. The seller can use them as a starting point for packaging, addressing, and shipping the order.<br /><br /><span class=\"tablenote\"><strong>Note:</strong> Although this container is presented as an array, it currently returns only one set of fulfillment specifications. Additional array members will be supported in future functionality.</span>
     *
     * @return self
     */
    public function setFulfillmentStartInstructions($fulfillment_start_instructions)
    {
        $this->container['fulfillment_start_instructions'] = $fulfillment_start_instructions;

        return $this;
    }

    /**
     * Gets last_modified_date.
     *
     * @return string|null
     */
    public function getLastModifiedDate()
    {
        return $this->container['last_modified_date'];
    }

    /**
     * Sets last_modified_date.
     *
     * @param string|null $last_modified_date The date and time that the order was last modified. This timestamp is in ISO 8601 format, which uses the 24-hour Universal Coordinated Time (UTC) clock. <br /><br /><b>Format:</b> <code>[YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z</code> <br /><b>Example:</b> <code>2015-08-04T19:09:02.768Z</code>
     *
     * @return self
     */
    public function setLastModifiedDate($last_modified_date)
    {
        $this->container['last_modified_date'] = $last_modified_date;

        return $this;
    }

    /**
     * Gets legacy_order_id.
     *
     * @return string|null
     */
    public function getLegacyOrderId()
    {
        return $this->container['legacy_order_id'];
    }

    /**
     * Sets legacy_order_id.
     *
     * @param string|null $legacy_order_id The unique identifier of the order in legacy format, as traditionally used by the Trading API (and other legacy APIs). Both the <b>orderId</b> field and this field are always returned.
     *
     * @return self
     */
    public function setLegacyOrderId($legacy_order_id)
    {
        $this->container['legacy_order_id'] = $legacy_order_id;

        return $this;
    }

    /**
     * Gets line_items.
     *
     * @return \TNT\Ebay\Sell\Fulfillment\V1\Model\LineItem[]|null
     */
    public function getLineItems()
    {
        return $this->container['line_items'];
    }

    /**
     * Sets line_items.
     *
     * @param \TNT\Ebay\Sell\Fulfillment\V1\Model\LineItem[]|null $line_items this array contains the details for all line items that comprise the order
     *
     * @return self
     */
    public function setLineItems($line_items)
    {
        $this->container['line_items'] = $line_items;

        return $this;
    }

    /**
     * Gets order_fulfillment_status.
     *
     * @return string|null
     */
    public function getOrderFulfillmentStatus()
    {
        return $this->container['order_fulfillment_status'];
    }

    /**
     * Sets order_fulfillment_status.
     *
     * @param string|null $order_fulfillment_status The degree to which fulfillment of the order is complete. See the <strong>OrderFulfillmentStatus</strong> type definition for more information about each possible fulfillment state. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/fulfillment/types/sel:OrderFulfillmentStatus'>eBay API documentation</a>
     *
     * @return self
     */
    public function setOrderFulfillmentStatus($order_fulfillment_status)
    {
        $this->container['order_fulfillment_status'] = $order_fulfillment_status;

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
     * @param string|null $order_id The unique identifier of the order. Both the <b>legacyOrderId</b> field (traditionally used by Trading and other legacy APIS) and this field are always returned.
     *
     * @return self
     */
    public function setOrderId($order_id)
    {
        $this->container['order_id'] = $order_id;

        return $this;
    }

    /**
     * Gets order_payment_status.
     *
     * @return string|null
     */
    public function getOrderPaymentStatus()
    {
        return $this->container['order_payment_status'];
    }

    /**
     * Sets order_payment_status.
     *
     * @param string|null $order_payment_status The enumeration value returned in this field indicates the current payment status of an order, or in case of a refund request, the current status of the refund. See the <strong>OrderPaymentStatusEnum</strong> type definition for more information about each possible payment/refund state. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/fulfillment/types/sel:OrderPaymentStatusEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setOrderPaymentStatus($order_payment_status)
    {
        $this->container['order_payment_status'] = $order_payment_status;

        return $this;
    }

    /**
     * Gets payment_summary.
     *
     * @return \TNT\Ebay\Sell\Fulfillment\V1\Model\PaymentSummary|null
     */
    public function getPaymentSummary()
    {
        return $this->container['payment_summary'];
    }

    /**
     * Sets payment_summary.
     *
     * @param \TNT\Ebay\Sell\Fulfillment\V1\Model\PaymentSummary|null $payment_summary payment_summary
     *
     * @return self
     */
    public function setPaymentSummary($payment_summary)
    {
        $this->container['payment_summary'] = $payment_summary;

        return $this;
    }

    /**
     * Gets pricing_summary.
     *
     * @return \TNT\Ebay\Sell\Fulfillment\V1\Model\PricingSummary|null
     */
    public function getPricingSummary()
    {
        return $this->container['pricing_summary'];
    }

    /**
     * Sets pricing_summary.
     *
     * @param \TNT\Ebay\Sell\Fulfillment\V1\Model\PricingSummary|null $pricing_summary pricing_summary
     *
     * @return self
     */
    public function setPricingSummary($pricing_summary)
    {
        $this->container['pricing_summary'] = $pricing_summary;

        return $this;
    }

    /**
     * Gets program.
     *
     * @return \TNT\Ebay\Sell\Fulfillment\V1\Model\Program|null
     */
    public function getProgram()
    {
        return $this->container['program'];
    }

    /**
     * Sets program.
     *
     * @param \TNT\Ebay\Sell\Fulfillment\V1\Model\Program|null $program program
     *
     * @return self
     */
    public function setProgram($program)
    {
        $this->container['program'] = $program;

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
     * @param string|null $sales_record_reference An eBay-generated identifier that is used to identify and manage orders through the Selling Manager and Selling Manager Pro tools. This order identifier can also be found on the Orders grid page and in the Sales Record pages in Seller Hub. A <strong>salesRecordReference</strong> number is only generated and returned at the order level, and not at the order line item level.<br><br> In cases where the seller does not have a Selling Manager or Selling Manager Pro subscription nor access to Seller Hub, this field may not be returned.
     *
     * @return self
     */
    public function setSalesRecordReference($sales_record_reference)
    {
        $this->container['sales_record_reference'] = $sales_record_reference;

        return $this;
    }

    /**
     * Gets seller_id.
     *
     * @return string|null
     */
    public function getSellerId()
    {
        return $this->container['seller_id'];
    }

    /**
     * Sets seller_id.
     *
     * @param string|null $seller_id the unique eBay user ID of the seller who sold the order
     *
     * @return self
     */
    public function setSellerId($seller_id)
    {
        $this->container['seller_id'] = $seller_id;

        return $this;
    }

    /**
     * Gets total_fee_basis_amount.
     *
     * @return \TNT\Ebay\Sell\Fulfillment\V1\Model\Amount|null
     */
    public function getTotalFeeBasisAmount()
    {
        return $this->container['total_fee_basis_amount'];
    }

    /**
     * Sets total_fee_basis_amount.
     *
     * @param \TNT\Ebay\Sell\Fulfillment\V1\Model\Amount|null $total_fee_basis_amount total_fee_basis_amount
     *
     * @return self
     */
    public function setTotalFeeBasisAmount($total_fee_basis_amount)
    {
        $this->container['total_fee_basis_amount'] = $total_fee_basis_amount;

        return $this;
    }

    /**
     * Gets total_marketplace_fee.
     *
     * @return \TNT\Ebay\Sell\Fulfillment\V1\Model\Amount|null
     */
    public function getTotalMarketplaceFee()
    {
        return $this->container['total_marketplace_fee'];
    }

    /**
     * Sets total_marketplace_fee.
     *
     * @param \TNT\Ebay\Sell\Fulfillment\V1\Model\Amount|null $total_marketplace_fee total_marketplace_fee
     *
     * @return self
     */
    public function setTotalMarketplaceFee($total_marketplace_fee)
    {
        $this->container['total_marketplace_fee'] = $total_marketplace_fee;

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
