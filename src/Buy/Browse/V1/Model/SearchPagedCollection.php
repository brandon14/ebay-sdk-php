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
 * SearchPagedCollection.
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
 * <p>The Browse API has the following resources:</p>   <ul> <li><b> item_summary: </b> Lets shoppers search for specific items by keyword, GTIN, category, charity, product, or item aspects and refine the results by using filters, such as aspects, compatibility, and fields values.</li>  <li><b> search_by_image: </b><a href=\"https://developer.ebay.com/api-docs/static/versioning.html#experimental\" target=\"_blank\"><img src=\"/cms/img/docs/experimental-icon.svg\" class=\"legend-icon experimental-icon\" alt=\"Experimental Release\" title=\"Experimental Release\" />&nbsp;(Experimental)</a> Lets shoppers search for specific items by image. You can refine the results by using URI parameters and filters.</li>   <li><b> item: </b> <ul><li>Lets you retrieve the details of a specific item or all the items in an item group, which is an item with variations such as color and size and check if a product is compatible with the specified item, such as if a specific car is compatible with a specific part.</li> <li>Provides a bridge between the eBay legacy APIs, such as <b> Finding</b>, and the RESTful APIs, which use different formats for the item IDs.</li>  </ul> </li>  <li> <b> shopping_cart: </b> <a href=\"https://developer.ebay.com/api-docs/static/versioning.html#experimental\" target=\"_blank\"><img src=\"/cms/img/docs/experimental-icon.svg\" class=\"legend-icon experimental-icon\" alt=\"Experimental Release\" title=\"Experimental Release\" />&nbsp;(Experimental)</a> <a href=\"https://developer.ebay.com/api-docs/static/versioning.html#limited\" target=\"_blank\"> <img src=\"/cms/img/docs/partners-api.svg\" class=\"legend-icon partners-icon\" title=\"Limited Release\"  alt=\"Limited Release\" />(Limited Release)</a> Provides the ability for eBay members to see the contents of their eBay cart, and add, remove, and change the quantity of items in their eBay cart.&nbsp;&nbsp;<b> Note: </b> This resource is not available in the eBay API Explorer.</li></ul>       <p>The <b> item_summary</b>, <b> search_by_image</b>, and <b> item</b> resource calls require an <a href=\"/api-docs/static/oauth-client-credentials-grant.html\">Application access token</a>. The <b> shopping_cart</b> resource calls require a <a href=\"/api-docs/static/oauth-authorization-code-grant.html\">User access token</a>.</p>
 *
 * The version of the OpenAPI document: v1.13.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace TNT\Ebay\Buy\Browse\V1\Model;

use ArrayAccess;
use TNT\Ebay\Buy\Browse\V1\ObjectSerializer;

/**
 * SearchPagedCollection Class Doc Comment.
 *
 * @category Class
 * @description The type that defines the fields for a paginated result set. The response consists of 0 or more sequenced &lt;em&gt; pages&lt;/em&gt; where each page has 0 or more items.
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class SearchPagedCollection implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'SearchPagedCollection';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'auto_corrections' => '\TNT\Ebay\Buy\Browse\V1\Model\AutoCorrections',
        'href' => 'string',
        'item_summaries' => '\TNT\Ebay\Buy\Browse\V1\Model\ItemSummary[]',
        'limit' => 'int',
        'next' => 'string',
        'offset' => 'int',
        'prev' => 'string',
        'refinement' => '\TNT\Ebay\Buy\Browse\V1\Model\Refinement',
        'total' => 'int',
        'warnings' => '\TNT\Ebay\Buy\Browse\V1\Model\Error[]',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'auto_corrections' => null,
        'href' => null,
        'item_summaries' => null,
        'limit' => 'int32',
        'next' => null,
        'offset' => 'int32',
        'prev' => null,
        'refinement' => null,
        'total' => 'int32',
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
        'auto_corrections' => 'autoCorrections',
        'href' => 'href',
        'item_summaries' => 'itemSummaries',
        'limit' => 'limit',
        'next' => 'next',
        'offset' => 'offset',
        'prev' => 'prev',
        'refinement' => 'refinement',
        'total' => 'total',
        'warnings' => 'warnings',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'auto_corrections' => 'setAutoCorrections',
        'href' => 'setHref',
        'item_summaries' => 'setItemSummaries',
        'limit' => 'setLimit',
        'next' => 'setNext',
        'offset' => 'setOffset',
        'prev' => 'setPrev',
        'refinement' => 'setRefinement',
        'total' => 'setTotal',
        'warnings' => 'setWarnings',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'auto_corrections' => 'getAutoCorrections',
        'href' => 'getHref',
        'item_summaries' => 'getItemSummaries',
        'limit' => 'getLimit',
        'next' => 'getNext',
        'offset' => 'getOffset',
        'prev' => 'getPrev',
        'refinement' => 'getRefinement',
        'total' => 'getTotal',
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
        $this->container['auto_corrections'] = $data['auto_corrections'] ?? null;
        $this->container['href'] = $data['href'] ?? null;
        $this->container['item_summaries'] = $data['item_summaries'] ?? null;
        $this->container['limit'] = $data['limit'] ?? null;
        $this->container['next'] = $data['next'] ?? null;
        $this->container['offset'] = $data['offset'] ?? null;
        $this->container['prev'] = $data['prev'] ?? null;
        $this->container['refinement'] = $data['refinement'] ?? null;
        $this->container['total'] = $data['total'] ?? null;
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
     * Gets auto_corrections.
     *
     * @return \TNT\Ebay\Buy\Browse\V1\Model\AutoCorrections|null
     */
    public function getAutoCorrections()
    {
        return $this->container['auto_corrections'];
    }

    /**
     * Sets auto_corrections.
     *
     * @param \TNT\Ebay\Buy\Browse\V1\Model\AutoCorrections|null $auto_corrections auto_corrections
     *
     * @return self
     */
    public function setAutoCorrections($auto_corrections)
    {
        $this->container['auto_corrections'] = $auto_corrections;

        return $this;
    }

    /**
     * Gets href.
     *
     * @return string|null
     */
    public function getHref()
    {
        return $this->container['href'];
    }

    /**
     * Sets href.
     *
     * @param string|null $href The URI of the current page of results. <br /><br />The following example of the <b> search</b> method returns items 1 thru 5 from the list of items found. <br /><br /><code>https://api.ebay.com/buy/v1/item_summary/search?q=shirt&limit=5&offset=0</code>.
     *
     * @return self
     */
    public function setHref($href)
    {
        $this->container['href'] = $href;

        return $this;
    }

    /**
     * Gets item_summaries.
     *
     * @return \TNT\Ebay\Buy\Browse\V1\Model\ItemSummary[]|null
     */
    public function getItemSummaries()
    {
        return $this->container['item_summaries'];
    }

    /**
     * Sets item_summaries.
     *
     * @param \TNT\Ebay\Buy\Browse\V1\Model\ItemSummary[]|null $item_summaries An array of the items on this page. The items are sorted according to the sorting method specified in the request.
     *
     * @return self
     */
    public function setItemSummaries($item_summaries)
    {
        $this->container['item_summaries'] = $item_summaries;

        return $this;
    }

    /**
     * Gets limit.
     *
     * @return int|null
     */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
     * Sets limit.
     *
     * @param int|null $limit The value of the <b>limit</b> parameter submitted in the request, which is the maximum number of items to return on a page, from the result set. A result set is the complete set of items returned by the method.
     *
     * @return self
     */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;

        return $this;
    }

    /**
     * Gets next.
     *
     * @return string|null
     */
    public function getNext()
    {
        return $this->container['next'];
    }

    /**
     * Sets next.
     *
     * @param string|null $next The URI for the next page of results. This value is returned if there is an additional page of results to return from the result set. <br /><br />The following example of the <b> search</b> method returns items 5 thru 10 from the list of items found.<br /> <br /><code>https://api.ebay.com/buy/v1/item_summary/search?query=t-shirts&limit=5&offset=10 </code>
     *
     * @return self
     */
    public function setNext($next)
    {
        $this->container['next'] = $next;

        return $this;
    }

    /**
     * Gets offset.
     *
     * @return int|null
     */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
     * Sets offset.
     *
     * @param int|null $offset This value indicates the <b>offset</b> used for current page of items being returned. Assume the initial request used an <b>offset</b> of <code>0</code> and a <b>limit</b> of <code>3</code>. Then in the first page of results, this value would be <code>0</code>, and items 1-3 are returned. For the second page, this value is <code>3</code> and so on.
     *
     * @return self
     */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;

        return $this;
    }

    /**
     * Gets prev.
     *
     * @return string|null
     */
    public function getPrev()
    {
        return $this->container['prev'];
    }

    /**
     * Sets prev.
     *
     * @param string|null $prev The URI for the previous page of results. This is returned if there is a previous page of results from the result set. <br /><br />The following example of the <b> search</b> method returns items 1 thru 5 from the list of items found, which would be the first set of items returned.<br /> <br /><code>https://api.ebay.com/buy/v1/item_summary/search?query=t-shirts&limit=5&offset=0</code>
     *
     * @return self
     */
    public function setPrev($prev)
    {
        $this->container['prev'] = $prev;

        return $this;
    }

    /**
     * Gets refinement.
     *
     * @return \TNT\Ebay\Buy\Browse\V1\Model\Refinement|null
     */
    public function getRefinement()
    {
        return $this->container['refinement'];
    }

    /**
     * Sets refinement.
     *
     * @param \TNT\Ebay\Buy\Browse\V1\Model\Refinement|null $refinement refinement
     *
     * @return self
     */
    public function setRefinement($refinement)
    {
        $this->container['refinement'] = $refinement;

        return $this;
    }

    /**
     * Gets total.
     *
     * @return int|null
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total.
     *
     * @param int|null $total the total number of items that match the input criteria
     *
     * @return self
     */
    public function setTotal($total)
    {
        $this->container['total'] = $total;

        return $this;
    }

    /**
     * Gets warnings.
     *
     * @return \TNT\Ebay\Buy\Browse\V1\Model\Error[]|null
     */
    public function getWarnings()
    {
        return $this->container['warnings'];
    }

    /**
     * Sets warnings.
     *
     * @param \TNT\Ebay\Buy\Browse\V1\Model\Error[]|null $warnings the container with all the warnings for the request
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