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
 * Offer.
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
 * Negotiation API.
 *
 * The <b>Negotiations API</b> gives sellers the ability to proactively send discount offers to buyers who have shown an \"interest\" in their listings.  <br><br>By sending buyers discount offers on listings where they have shown an interest, sellers can increase the velocity of their sales.  <br><br>There are various ways for a buyer to show <i>interest </i> in a listing. For example, if a buyer adds the listing to their <b>Watch</b> list, or if they add the listing to their shopping cart and later abandon the cart, they are deemed to have shown an interest in the listing.  <br><br>In the offers that sellers send, they can discount their listings by either a percentage off the listing price, or they can set a new discounted price that is lower than the original listing price.  <br><br>For details about how seller offers work, see <a href=\"/api-docs/sell/static/marketing/offers-to-buyers.html\" title=\"Selling Integration Guide\">Sending offers to buyers</a>.
 *
 * The version of the OpenAPI document: v1.1.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace TNT\Ebay\Sell\Negotiation\V1\Model;

use TNT\Ebay\Sell\Negotiation\V1\ObjectSerializer;

/**
 * Offer Class Doc Comment.
 *
 * @category Class
 *
 * @description A complex type that defines an offer that a seller makes to eligible buyers.
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
class Offer implements ModelInterface, \ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'Offer';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'allow_counter_offer' => 'bool',
        'buyer' => '\TNT\Ebay\Sell\Negotiation\V1\Model\User',
        'creation_date' => 'string',
        'initiated_by' => 'string',
        'last_modified_date' => 'string',
        'message' => 'string',
        'offer_duration' => '\TNT\Ebay\Sell\Negotiation\V1\Model\TimeDuration',
        'offered_items' => '\TNT\Ebay\Sell\Negotiation\V1\Model\OfferedItem[]',
        'offer_id' => 'string',
        'offer_status' => 'string',
        'offer_type' => 'string',
        'revision' => 'string',
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
        'allow_counter_offer' => null,
        'buyer' => null,
        'creation_date' => null,
        'initiated_by' => null,
        'last_modified_date' => null,
        'message' => null,
        'offer_duration' => null,
        'offered_items' => null,
        'offer_id' => null,
        'offer_status' => null,
        'offer_type' => null,
        'revision' => null,
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
        'allow_counter_offer' => 'allowCounterOffer',
        'buyer' => 'buyer',
        'creation_date' => 'creationDate',
        'initiated_by' => 'initiatedBy',
        'last_modified_date' => 'lastModifiedDate',
        'message' => 'message',
        'offer_duration' => 'offerDuration',
        'offered_items' => 'offeredItems',
        'offer_id' => 'offerId',
        'offer_status' => 'offerStatus',
        'offer_type' => 'offerType',
        'revision' => 'revision',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'allow_counter_offer' => 'setAllowCounterOffer',
        'buyer' => 'setBuyer',
        'creation_date' => 'setCreationDate',
        'initiated_by' => 'setInitiatedBy',
        'last_modified_date' => 'setLastModifiedDate',
        'message' => 'setMessage',
        'offer_duration' => 'setOfferDuration',
        'offered_items' => 'setOfferedItems',
        'offer_id' => 'setOfferId',
        'offer_status' => 'setOfferStatus',
        'offer_type' => 'setOfferType',
        'revision' => 'setRevision',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'allow_counter_offer' => 'getAllowCounterOffer',
        'buyer' => 'getBuyer',
        'creation_date' => 'getCreationDate',
        'initiated_by' => 'getInitiatedBy',
        'last_modified_date' => 'getLastModifiedDate',
        'message' => 'getMessage',
        'offer_duration' => 'getOfferDuration',
        'offered_items' => 'getOfferedItems',
        'offer_id' => 'getOfferId',
        'offer_status' => 'getOfferStatus',
        'offer_type' => 'getOfferType',
        'revision' => 'getRevision',
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
        $this->container['allow_counter_offer'] = $data['allow_counter_offer'] ?? null;
        $this->container['buyer'] = $data['buyer'] ?? null;
        $this->container['creation_date'] = $data['creation_date'] ?? null;
        $this->container['initiated_by'] = $data['initiated_by'] ?? null;
        $this->container['last_modified_date'] = $data['last_modified_date'] ?? null;
        $this->container['message'] = $data['message'] ?? null;
        $this->container['offer_duration'] = $data['offer_duration'] ?? null;
        $this->container['offered_items'] = $data['offered_items'] ?? null;
        $this->container['offer_id'] = $data['offer_id'] ?? null;
        $this->container['offer_status'] = $data['offer_status'] ?? null;
        $this->container['offer_type'] = $data['offer_type'] ?? null;
        $this->container['revision'] = $data['revision'] ?? null;
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
     * Gets allow_counter_offer.
     *
     * @return bool|null
     */
    public function getAllowCounterOffer()
    {
        return $this->container['allow_counter_offer'];
    }

    /**
     * Sets allow_counter_offer.
     *
     * @param bool|null $allow_counter_offer if set to true, the buyer is allowed to make a counter-offer to the seller's offer
     *
     * @return self
     */
    public function setAllowCounterOffer($allow_counter_offer)
    {
        $this->container['allow_counter_offer'] = $allow_counter_offer;

        return $this;
    }

    /**
     * Gets buyer.
     *
     * @return \TNT\Ebay\Sell\Negotiation\V1\Model\User|null
     */
    public function getBuyer()
    {
        return $this->container['buyer'];
    }

    /**
     * Sets buyer.
     *
     * @param \TNT\Ebay\Sell\Negotiation\V1\Model\User|null $buyer buyer
     *
     * @return self
     */
    public function setBuyer($buyer)
    {
        $this->container['buyer'] = $buyer;

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
     * @param string|null $creation_date The date and time when the seller's offer was created. The returned timestamp is formatted as an ISO 8601 string, which is based on the 24-hour Coordinated Universal Time (UTC) clock. Format: [YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z Example: 2018-08-20T07:09:00.000Z
     *
     * @return self
     */
    public function setCreationDate($creation_date)
    {
        $this->container['creation_date'] = $creation_date;

        return $this;
    }

    /**
     * Gets initiated_by.
     *
     * @return string|null
     */
    public function getInitiatedBy()
    {
        return $this->container['initiated_by'];
    }

    /**
     * Sets initiated_by.
     *
     * @param string|null $initiated_by the eBay UserName of the user (seller) who initiated the offer
     *
     * @return self
     */
    public function setInitiatedBy($initiated_by)
    {
        $this->container['initiated_by'] = $initiated_by;

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
     * @param string|null $last_modified_date The date and time when the offer was last modified. The returned timestamp is formatted as an ISO 8601 string.
     *
     * @return self
     */
    public function setLastModifiedDate($last_modified_date)
    {
        $this->container['last_modified_date'] = $last_modified_date;

        return $this;
    }

    /**
     * Gets message.
     *
     * @return string|null
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message.
     *
     * @param string|null $message A seller-defined message related to the offer being made. This message is sent to the list of &quot;interested&quot; buyers along with the offer message from eBay.
     *
     * @return self
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets offer_duration.
     *
     * @return \TNT\Ebay\Sell\Negotiation\V1\Model\TimeDuration|null
     */
    public function getOfferDuration()
    {
        return $this->container['offer_duration'];
    }

    /**
     * Sets offer_duration.
     *
     * @param \TNT\Ebay\Sell\Negotiation\V1\Model\TimeDuration|null $offer_duration offer_duration
     *
     * @return self
     */
    public function setOfferDuration($offer_duration)
    {
        $this->container['offer_duration'] = $offer_duration;

        return $this;
    }

    /**
     * Gets offered_items.
     *
     * @return \TNT\Ebay\Sell\Negotiation\V1\Model\OfferedItem[]|null
     */
    public function getOfferedItems()
    {
        return $this->container['offered_items'];
    }

    /**
     * Sets offered_items.
     *
     * @param \TNT\Ebay\Sell\Negotiation\V1\Model\OfferedItem[]|null $offered_items The list of items associated with the offer. Currently, the offer list is restricted to a single offer.
     *
     * @return self
     */
    public function setOfferedItems($offered_items)
    {
        $this->container['offered_items'] = $offered_items;

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
     * @param string|null $offer_id a unique eBay-assigned identifier for the offer
     *
     * @return self
     */
    public function setOfferId($offer_id)
    {
        $this->container['offer_id'] = $offer_id;

        return $this;
    }

    /**
     * Gets offer_status.
     *
     * @return string|null
     */
    public function getOfferStatus()
    {
        return $this->container['offer_status'];
    }

    /**
     * Sets offer_status.
     *
     * @param string|null $offer_status The current state, or status, of an offer. Status states include PENDING, COUNTERED, ACCEPTED, and DECLINED. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/negotiation/types/api:OfferStatusEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setOfferStatus($offer_status)
    {
        $this->container['offer_status'] = $offer_status;

        return $this;
    }

    /**
     * Gets offer_type.
     *
     * @return string|null
     */
    public function getOfferType()
    {
        return $this->container['offer_type'];
    }

    /**
     * Sets offer_type.
     *
     * @param string|null $offer_type The type of offer being made. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/negotiation/types/api:OfferTypeEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setOfferType($offer_type)
    {
        $this->container['offer_type'] = $offer_type;

        return $this;
    }

    /**
     * Gets revision.
     *
     * @return string|null
     */
    public function getRevision()
    {
        return $this->container['revision'];
    }

    /**
     * Sets revision.
     *
     * @param string|null $revision a unique, eBay-assigned ID for the revision of the offer
     *
     * @return self
     */
    public function setRevision($revision)
    {
        $this->container['revision'] = $revision;

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
