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
 * ModelInterface.
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
 * Key Management API.
 *
 * Due to regulatory requirements applicable to our EU/UK sellers, for certain APIs, developers need to add digital signatures to the respective HTTP call. The Key Management API creates keypairs that are required when creating digital signatures for the following APIs:<ul><li>All methods in the <a href=\"/api-docs/sell/finances/resources/methods \" target=\"_blank \">Finances API</a></li><li><a href=\"/api-docs/sell/fulfillment/resources/order/methods/issueRefund \" target=\"_blank \">issueRefund</a> in the Fulfillment API</li><li><a href=\"/Devzone/XML/docs/Reference/eBay/GetAccount.html \" target=\"_blank \">GetAccount</a> in the Trading API</li><li>The following methods in the Post-Order API:<ul><li><a href=\"/Devzone/post-order/post-order_v2_inquiry-inquiryid_issue_refund__post.html \" target=\"_blank \">Issue Inquiry Refund</a></li><li><a href=\"/Devzone/post-order/post-order_v2_casemanagement-caseid_issue_refund__post.html \" target=\"_blank \">Issue case refund</a></li><li><a href=\"/Devzone/post-order/post-order_v2_return-returnid_issue_refund__post.html \" target=\"_blank \">Issue return refund</a></li><li><a href=\"/Devzone/post-order/post-order_v2_return-returnid_decide__post.html \" target=\"_blank \">Process Return Request</a></li><li><a href=\"/devzone/post-order/post-order_v2_cancellation-cancelid_approve__post.html \" target=\"_blank \">Approve Cancellation Request</a></li><li><a href=\"/devzone/post-order/post-order_v2_cancellation__post.html \" target=\"_blank \">Create Cancellation Request</a></li></ul></li></ul><span class=\"tablenote\"><b>Note:</b> For additional information about keypairs and creating Message Signatures, refer to <a href= \"/develop/guides/digital-signatures-for-apis \" target= \"_blank \">Digital Signatures for APIs</a>.</span>
 *
 * The version of the OpenAPI document: v1.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace TNT\Ebay\Developer\KeyManagement\V1\Model;

/**
 * Interface abstracting model access.
 *
 * @author  OpenAPI Generator team
 */
interface ModelInterface
{
    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName();

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @return array
     */
    public static function openAPITypes();

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @return array
     */
    public static function openAPIFormats();

    /**
     * Array of attributes where the key is the local name, and the value is the original name.
     *
     * @return array
     */
    public static function attributeMap();

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @return array
     */
    public static function setters();

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @return array
     */
    public static function getters();

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array
     */
    public function listInvalidProperties();

    /**
     * Validate all the properties in the model
     * return true if all passed.
     *
     * @return bool
     */
    public function valid();
}
