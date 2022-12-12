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
 * SellerLegalInfo.
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
 * Browse API.
 *
 * <p>The Browse API has the following resources:</p>   <ul> <li><b> item_summary: </b> Lets shoppers search for specific items by keyword, GTIN, category, charity, product, or item aspects and refine the results by using filters, such as aspects, compatibility, and fields values.</li>  <li><b> search_by_image: </b><a href=\"https://developer.ebay.com/api-docs/static/versioning.html#experimental \" target=\"_blank\"><img src=\"/cms/img/docs/experimental-icon.svg\" class=\"legend-icon experimental-icon\" alt=\"Experimental Release\" title=\"Experimental Release\" />&nbsp;(Experimental)</a> Lets shoppers search for specific items by image. You can refine the results by using URI parameters and filters.</li>   <li><b> item: </b> <ul><li>Lets you retrieve the details of a specific item or all the items in an item group, which is an item with variations such as color and size and check if a product is compatible with the specified item, such as if a specific car is compatible with a specific part.</li> <li>Provides a bridge between the eBay legacy APIs, such as <b> Finding</b>, and the RESTful APIs, which use different formats for the item IDs.</li>  </ul> </li>  <li> <b> shopping_cart: </b> <a href=\"https://developer.ebay.com/api-docs/static/versioning.html#experimental \" target=\"_blank\"><img src=\"/cms/img/docs/experimental-icon.svg\" class=\"legend-icon experimental-icon\" alt=\"Experimental Release\" title=\"Experimental Release\" />&nbsp;(Experimental)</a> <a href=\"https://developer.ebay.com/api-docs/static/versioning.html#limited \" target=\"_blank\"> <img src=\"/cms/img/docs/partners-api.svg\" class=\"legend-icon partners-icon\" title=\"Limited Release\"  alt=\"Limited Release\" />(Limited Release)</a> Provides the ability for eBay members to see the contents of their eBay cart, and add, remove, and change the quantity of items in their eBay cart.&nbsp;&nbsp;<b> Note: </b> This resource is not available in the eBay API Explorer.</li></ul>       <p>The <b> item_summary</b>, <b> search_by_image</b>, and <b> item</b> resource calls require an <a href=\"/api-docs/static/oauth-client-credentials-grant.html\">Application access token</a>. The <b> shopping_cart</b> resource calls require a <a href=\"/api-docs/static/oauth-authorization-code-grant.html\">User access token</a>.</p>
 *
 * The version of the OpenAPI document: v1.18.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace TNT\Ebay\Buy\Browse\V1\Model;

use TNT\Ebay\Buy\Browse\V1\ObjectSerializer;

/**
 * SellerLegalInfo Class Doc Comment.
 *
 * @category Class
 *
 * @description The type that defines the fields for the contact information for a seller.
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
class SellerLegalInfo implements ModelInterface, \ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'SellerLegalInfo';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'email' => 'string',
        'fax' => 'string',
        'imprint' => 'string',
        'legal_contact_first_name' => 'string',
        'legal_contact_last_name' => 'string',
        'name' => 'string',
        'phone' => 'string',
        'registration_number' => 'string',
        'seller_provided_legal_address' => '\TNT\Ebay\Buy\Browse\V1\Model\LegalAddress',
        'terms_of_service' => 'string',
        'vat_details' => '\TNT\Ebay\Buy\Browse\V1\Model\VatDetail[]',
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
        'email' => null,
        'fax' => null,
        'imprint' => null,
        'legal_contact_first_name' => null,
        'legal_contact_last_name' => null,
        'name' => null,
        'phone' => null,
        'registration_number' => null,
        'seller_provided_legal_address' => null,
        'terms_of_service' => null,
        'vat_details' => null,
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
        'email' => 'email',
        'fax' => 'fax',
        'imprint' => 'imprint',
        'legal_contact_first_name' => 'legalContactFirstName',
        'legal_contact_last_name' => 'legalContactLastName',
        'name' => 'name',
        'phone' => 'phone',
        'registration_number' => 'registrationNumber',
        'seller_provided_legal_address' => 'sellerProvidedLegalAddress',
        'terms_of_service' => 'termsOfService',
        'vat_details' => 'vatDetails',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'email' => 'setEmail',
        'fax' => 'setFax',
        'imprint' => 'setImprint',
        'legal_contact_first_name' => 'setLegalContactFirstName',
        'legal_contact_last_name' => 'setLegalContactLastName',
        'name' => 'setName',
        'phone' => 'setPhone',
        'registration_number' => 'setRegistrationNumber',
        'seller_provided_legal_address' => 'setSellerProvidedLegalAddress',
        'terms_of_service' => 'setTermsOfService',
        'vat_details' => 'setVatDetails',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'email' => 'getEmail',
        'fax' => 'getFax',
        'imprint' => 'getImprint',
        'legal_contact_first_name' => 'getLegalContactFirstName',
        'legal_contact_last_name' => 'getLegalContactLastName',
        'name' => 'getName',
        'phone' => 'getPhone',
        'registration_number' => 'getRegistrationNumber',
        'seller_provided_legal_address' => 'getSellerProvidedLegalAddress',
        'terms_of_service' => 'getTermsOfService',
        'vat_details' => 'getVatDetails',
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
        $this->container['email'] = $data['email'] ?? null;
        $this->container['fax'] = $data['fax'] ?? null;
        $this->container['imprint'] = $data['imprint'] ?? null;
        $this->container['legal_contact_first_name'] = $data['legal_contact_first_name'] ?? null;
        $this->container['legal_contact_last_name'] = $data['legal_contact_last_name'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['phone'] = $data['phone'] ?? null;
        $this->container['registration_number'] = $data['registration_number'] ?? null;
        $this->container['seller_provided_legal_address'] = $data['seller_provided_legal_address'] ?? null;
        $this->container['terms_of_service'] = $data['terms_of_service'] ?? null;
        $this->container['vat_details'] = $data['vat_details'] ?? null;
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
     * Gets email.
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email.
     *
     * @param string|null $email the seller's business email address
     *
     * @return self
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets fax.
     *
     * @return string|null
     */
    public function getFax()
    {
        return $this->container['fax'];
    }

    /**
     * Sets fax.
     *
     * @param string|null $fax the seller' business fax number
     *
     * @return self
     */
    public function setFax($fax)
    {
        $this->container['fax'] = $fax;

        return $this;
    }

    /**
     * Gets imprint.
     *
     * @return string|null
     */
    public function getImprint()
    {
        return $this->container['imprint'];
    }

    /**
     * Sets imprint.
     *
     * @param string|null $imprint This is a free-form string created by the seller. This is information often found on business cards, such as address. This is information used by some countries.
     *
     * @return self
     */
    public function setImprint($imprint)
    {
        $this->container['imprint'] = $imprint;

        return $this;
    }

    /**
     * Gets legal_contact_first_name.
     *
     * @return string|null
     */
    public function getLegalContactFirstName()
    {
        return $this->container['legal_contact_first_name'];
    }

    /**
     * Sets legal_contact_first_name.
     *
     * @param string|null $legal_contact_first_name the seller's first name
     *
     * @return self
     */
    public function setLegalContactFirstName($legal_contact_first_name)
    {
        $this->container['legal_contact_first_name'] = $legal_contact_first_name;

        return $this;
    }

    /**
     * Gets legal_contact_last_name.
     *
     * @return string|null
     */
    public function getLegalContactLastName()
    {
        return $this->container['legal_contact_last_name'];
    }

    /**
     * Sets legal_contact_last_name.
     *
     * @param string|null $legal_contact_last_name the seller's last name
     *
     * @return self
     */
    public function setLegalContactLastName($legal_contact_last_name)
    {
        $this->container['legal_contact_last_name'] = $legal_contact_last_name;

        return $this;
    }

    /**
     * Gets name.
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name.
     *
     * @param string|null $name the name of the seller's business
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets phone.
     *
     * @return string|null
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone.
     *
     * @param string|null $phone the seller's business phone number
     *
     * @return self
     */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets registration_number.
     *
     * @return string|null
     */
    public function getRegistrationNumber()
    {
        return $this->container['registration_number'];
    }

    /**
     * Sets registration_number.
     *
     * @param string|null $registration_number The seller's registration number. This is information used by some countries.
     *
     * @return self
     */
    public function setRegistrationNumber($registration_number)
    {
        $this->container['registration_number'] = $registration_number;

        return $this;
    }

    /**
     * Gets seller_provided_legal_address.
     *
     * @return \TNT\Ebay\Buy\Browse\V1\Model\LegalAddress|null
     */
    public function getSellerProvidedLegalAddress()
    {
        return $this->container['seller_provided_legal_address'];
    }

    /**
     * Sets seller_provided_legal_address.
     *
     * @param \TNT\Ebay\Buy\Browse\V1\Model\LegalAddress|null $seller_provided_legal_address seller_provided_legal_address
     *
     * @return self
     */
    public function setSellerProvidedLegalAddress($seller_provided_legal_address)
    {
        $this->container['seller_provided_legal_address'] = $seller_provided_legal_address;

        return $this;
    }

    /**
     * Gets terms_of_service.
     *
     * @return string|null
     */
    public function getTermsOfService()
    {
        return $this->container['terms_of_service'];
    }

    /**
     * Sets terms_of_service.
     *
     * @param string|null $terms_of_service This is a free-form string created by the seller. This is the seller's terms or condition, which is in addition to the seller's return policies.
     *
     * @return self
     */
    public function setTermsOfService($terms_of_service)
    {
        $this->container['terms_of_service'] = $terms_of_service;

        return $this;
    }

    /**
     * Gets vat_details.
     *
     * @return \TNT\Ebay\Buy\Browse\V1\Model\VatDetail[]|null
     */
    public function getVatDetails()
    {
        return $this->container['vat_details'];
    }

    /**
     * Sets vat_details.
     *
     * @param \TNT\Ebay\Buy\Browse\V1\Model\VatDetail[]|null $vat_details An array of the seller's VAT (value added tax) IDs and the issuing country. VAT is a tax added by some European countries.
     *
     * @return self
     */
    public function setVatDetails($vat_details)
    {
        $this->container['vat_details'] = $vat_details;

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
