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
 * ClientSettings.
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
 * Developer Registration API.
 *
 * <span class=\"tablenote\"><b>Note:</b> The Client Registration API is not intended for use by developers who have previously registered for a Developer Account on the eBay platform.</span><br/>The Client Registration API provides Dynamic Client Registration for regulated Third Party Providers (TPPs) who are, or will be, engaged in financial transactions on behalf of individuals domiciled in the EU/UK. This is required by the EU's Second Payment Services Directive (PSD2) which requires all regulated Account Servicing Payment Service Providers (ASPSPs) to provide secure APIs to access account and payment services on behalf of account holders.<br/><br/>A successful registration response returns a <b>HTTP 201 Created</b> status code with a JSON payload [RFC7519] that includes registration information.
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

namespace TNT\Ebay\Developer\ClientRegistration\V1\Model;

use TNT\Ebay\Developer\ClientRegistration\V1\ObjectSerializer;

/**
 * ClientSettings Class Doc Comment.
 *
 * @category Class
 *
 * @description This container stores application-specific information that is provided at the time of registration.
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
class ClientSettings implements ModelInterface, \ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'ClientSettings';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'client_name' => 'string',
        'contacts' => 'string[]',
        'policy_uri' => 'string',
        'redirect_uris' => 'string[]',
        'software_id' => 'string',
        'software_statement' => 'string',
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
        'client_name' => null,
        'contacts' => null,
        'policy_uri' => null,
        'redirect_uris' => null,
        'software_id' => null,
        'software_statement' => null,
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
        'client_name' => 'client_name',
        'contacts' => 'contacts',
        'policy_uri' => 'policy_uri',
        'redirect_uris' => 'redirect_uris',
        'software_id' => 'software_id',
        'software_statement' => 'software_statement',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'client_name' => 'setClientName',
        'contacts' => 'setContacts',
        'policy_uri' => 'setPolicyUri',
        'redirect_uris' => 'setRedirectUris',
        'software_id' => 'setSoftwareId',
        'software_statement' => 'setSoftwareStatement',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'client_name' => 'getClientName',
        'contacts' => 'getContacts',
        'policy_uri' => 'getPolicyUri',
        'redirect_uris' => 'getRedirectUris',
        'software_id' => 'getSoftwareId',
        'software_statement' => 'getSoftwareStatement',
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
        $this->container['client_name'] = $data['client_name'] ?? null;
        $this->container['contacts'] = $data['contacts'] ?? null;
        $this->container['policy_uri'] = $data['policy_uri'] ?? null;
        $this->container['redirect_uris'] = $data['redirect_uris'] ?? null;
        $this->container['software_id'] = $data['software_id'] ?? null;
        $this->container['software_statement'] = $data['software_statement'] ?? null;
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
     * Gets client_name.
     *
     * @return string|null
     */
    public function getClientName()
    {
        return $this->container['client_name'];
    }

    /**
     * Sets client_name.
     *
     * @param string|null $client_name User-friendly name for the third party financial application.<br/><br/><span class=\"tablenote\"><b>Note:</b> Language tags are not supported. Therefore, <code>client_name</code> must be specified in English.</span>
     *
     * @return self
     */
    public function setClientName($client_name)
    {
        $this->container['client_name'] = $client_name;

        return $this;
    }

    /**
     * Gets contacts.
     *
     * @return string[]|null
     */
    public function getContacts()
    {
        return $this->container['contacts'];
    }

    /**
     * Sets contacts.
     *
     * @param string[]|null $contacts This container stores an array of email addresses that can be used to contact the registrant.<br/><br/><span class=\"tablenote\"><b>Note:</b> When more than one email address is provided, the first email in the array will be used as the developer account's email address. All other email addresses will be used as general contact information.</span>
     *
     * @return self
     */
    public function setContacts($contacts)
    {
        $this->container['contacts'] = $contacts;

        return $this;
    }

    /**
     * Gets policy_uri.
     *
     * @return string|null
     */
    public function getPolicyUri()
    {
        return $this->container['policy_uri'];
    }

    /**
     * Sets policy_uri.
     *
     * @param string|null $policy_uri The URL string pointing to a human-readable privacy policy document that describes how the third party provider collects, uses, retains, and discloses personal data.<br/><br/><span class=\"tablenote\"><b>Note:</b> Only HTTPS URLs are supported for <code>policy_uri</code> strings.</span><br/><span class=\"tablenote\"><b>Note:</b> This URL <b>must not</b> point to the eBay Privacy Policy.</span><br/>The value of this field <b>must</b> point to a valid and secure web page.<br/><br/><span class=\"tablenote\"><b>Note:</b> Language tags are not supported. Therefore, <code>policy_uri</code> will be displayed in English.</span>
     *
     * @return self
     */
    public function setPolicyUri($policy_uri)
    {
        $this->container['policy_uri'] = $policy_uri;

        return $this;
    }

    /**
     * Gets redirect_uris.
     *
     * @return string[]|null
     */
    public function getRedirectUris()
    {
        return $this->container['redirect_uris'];
    }

    /**
     * Sets redirect_uris.
     *
     * @param string[]|null $redirect_uris An array of redirection URI strings for use in redirect-based flows such as the authorization code and implicit flows.<br/><br/><span class=\"tablenote\"><b>Note:</b> Only the first URI string from the list will be used.</span><span class=\"tablenote\"><b>Note:</b> Each redirection URI <b>must</b> be an absolute URI as defined by [RFC3986] Section 4.3.</span>
     *
     * @return self
     */
    public function setRedirectUris($redirect_uris)
    {
        $this->container['redirect_uris'] = $redirect_uris;

        return $this;
    }

    /**
     * Gets software_id.
     *
     * @return string|null
     */
    public function getSoftwareId()
    {
        return $this->container['software_id'];
    }

    /**
     * Sets software_id.
     *
     * @param string|null $software_id A unique identifier string assigned by the client developer or software publisher to identify the client software being registered.<br/><br/>Unlike <code>client_id</code> which should change between instances, the <CODE>software_id</code> should be the same value for all instances of the client software. That is, the <code>software_id</code> should remain unchanged across multiple updates or versions of the same piece of software. The value of this field is not intended to be human readable and is usually opaque to the client and authorization server.
     *
     * @return self
     */
    public function setSoftwareId($software_id)
    {
        $this->container['software_id'] = $software_id;

        return $this;
    }

    /**
     * Gets software_statement.
     *
     * @return string|null
     */
    public function getSoftwareStatement()
    {
        return $this->container['software_statement'];
    }

    /**
     * Sets software_statement.
     *
     * @param string|null $software_statement The Software Statement Assertion (SSA) that has been issued by the OpenBanking identifier.<br/><br/><span class=\"tablenote\"><b>Note:</b> This value <i>must be</i> <b>Base64</b> encoded and not plain JSON.</span>Refer to <a href=\"https://datatracker.ietf.org/doc/html/rfc7591#section-2.3 \" target= \"_blank \">RFC 7591 - OAuth 2.0 Dynamic Client Registration Protocol</a> for complete information.
     *
     * @return self
     */
    public function setSoftwareStatement($software_statement)
    {
        $this->container['software_statement'] = $software_statement;

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
