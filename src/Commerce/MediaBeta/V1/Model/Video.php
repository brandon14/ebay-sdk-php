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
 * Video.
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
 * Media API.
 *
 * The Media API allows sellers to create, upload, and fetch videos.
 *
 * The version of the OpenAPI document: v1_beta.1.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace TNT\Ebay\Commerce\MediaBeta\V1\Model;

use TNT\Ebay\Commerce\MediaBeta\V1\ObjectSerializer;

/**
 * Video Class Doc Comment.
 *
 * @category Class
 *
 * @description A response field that retrieves all the metadata for the video, including its &lt;b&gt;title&lt;/b&gt;, &lt;b&gt;classification&lt;/b&gt;, &lt;b&gt;size&lt;/b&gt;, &lt;b&gt;description&lt;/b&gt;, &lt;b&gt;status&lt;/b&gt;, &lt;b&gt;status message&lt;/b&gt; (if any), and &lt;b&gt;expiration date&lt;/b&gt;.
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
class Video implements ModelInterface, \ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'Video';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'classification' => 'string[]',
        'description' => 'string',
        'expiration_date' => 'string',
        'moderation' => '\TNT\Ebay\Commerce\MediaBeta\V1\Model\Moderation',
        'play_lists' => '\TNT\Ebay\Commerce\MediaBeta\V1\Model\Play[]',
        'size' => 'int',
        'status' => 'string',
        'status_message' => 'string',
        'thumbnail' => '\TNT\Ebay\Commerce\MediaBeta\V1\Model\Image',
        'title' => 'string',
        'video_id' => 'string',
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
        'classification' => null,
        'description' => null,
        'expiration_date' => null,
        'moderation' => null,
        'play_lists' => null,
        'size' => null,
        'status' => null,
        'status_message' => null,
        'thumbnail' => null,
        'title' => null,
        'video_id' => null,
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
        'classification' => 'classification',
        'description' => 'description',
        'expiration_date' => 'expirationDate',
        'moderation' => 'moderation',
        'play_lists' => 'playLists',
        'size' => 'size',
        'status' => 'status',
        'status_message' => 'statusMessage',
        'thumbnail' => 'thumbnail',
        'title' => 'title',
        'video_id' => 'videoId',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'classification' => 'setClassification',
        'description' => 'setDescription',
        'expiration_date' => 'setExpirationDate',
        'moderation' => 'setModeration',
        'play_lists' => 'setPlayLists',
        'size' => 'setSize',
        'status' => 'setStatus',
        'status_message' => 'setStatusMessage',
        'thumbnail' => 'setThumbnail',
        'title' => 'setTitle',
        'video_id' => 'setVideoId',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'classification' => 'getClassification',
        'description' => 'getDescription',
        'expiration_date' => 'getExpirationDate',
        'moderation' => 'getModeration',
        'play_lists' => 'getPlayLists',
        'size' => 'getSize',
        'status' => 'getStatus',
        'status_message' => 'getStatusMessage',
        'thumbnail' => 'getThumbnail',
        'title' => 'getTitle',
        'video_id' => 'getVideoId',
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
        $this->container['classification'] = $data['classification'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['expiration_date'] = $data['expiration_date'] ?? null;
        $this->container['moderation'] = $data['moderation'] ?? null;
        $this->container['play_lists'] = $data['play_lists'] ?? null;
        $this->container['size'] = $data['size'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['status_message'] = $data['status_message'] ?? null;
        $this->container['thumbnail'] = $data['thumbnail'] ?? null;
        $this->container['title'] = $data['title'] ?? null;
        $this->container['video_id'] = $data['video_id'] ?? null;
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
     * Gets classification.
     *
     * @return string[]|null
     */
    public function getClassification()
    {
        return $this->container['classification'];
    }

    /**
     * Sets classification.
     *
     * @param string[]|null $classification The intended use for this video content. The video’s classification is used to associate the video with a user or seller. Currently, the classification of all videos should be set to <code>ITEM</code>.
     *
     * @return self
     */
    public function setClassification($classification)
    {
        $this->container['classification'] = $classification;

        return $this;
    }

    /**
     * Gets description.
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description.
     *
     * @param string|null $description The description of the video. The video description is an optional field that can be set using the <a href=\" /api-docs/commerce/media/resources/video/methods/createVideo\" target=\"_blank\">createVideo</a> method.
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets expiration_date.
     *
     * @return string|null
     */
    public function getExpirationDate()
    {
        return $this->container['expiration_date'];
    }

    /**
     * Sets expiration_date.
     *
     * @param string|null $expiration_date The expiration date of the video in Coordinated Universal Time (UTC). The video’s expiration date is automatically set to 365 days (one year) after the video’s initial upload.
     *
     * @return self
     */
    public function setExpirationDate($expiration_date)
    {
        $this->container['expiration_date'] = $expiration_date;

        return $this;
    }

    /**
     * Gets moderation.
     *
     * @return \TNT\Ebay\Commerce\MediaBeta\V1\Model\Moderation|null
     */
    public function getModeration()
    {
        return $this->container['moderation'];
    }

    /**
     * Sets moderation.
     *
     * @param \TNT\Ebay\Commerce\MediaBeta\V1\Model\Moderation|null $moderation moderation
     *
     * @return self
     */
    public function setModeration($moderation)
    {
        $this->container['moderation'] = $moderation;

        return $this;
    }

    /**
     * Gets play_lists.
     *
     * @return \TNT\Ebay\Commerce\MediaBeta\V1\Model\Play[]|null
     */
    public function getPlayLists()
    {
        return $this->container['play_lists'];
    }

    /**
     * Sets play_lists.
     *
     * @param \TNT\Ebay\Commerce\MediaBeta\V1\Model\Play[]|null $play_lists The playlist created for the uploaded video, which provides the streaming video URLs to play the video. The supported streaming video protocols are DASH (Dynamic Adaptive Streaming over HTTP) and HLS (HTTP Live Streaming). The playlist will only be generated if a video is successfully uploaded with a status of <code>LIVE</code>.
     *
     * @return self
     */
    public function setPlayLists($play_lists)
    {
        $this->container['play_lists'] = $play_lists;

        return $this;
    }

    /**
     * Gets size.
     *
     * @return int|null
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size.
     *
     * @param int|null $size the size, in bytes, of the video content
     *
     * @return self
     */
    public function setSize($size)
    {
        $this->container['size'] = $size;

        return $this;
    }

    /**
     * Gets status.
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status.
     *
     * @param string|null $status The status of the current video resource. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/commerce/media/types/api:VideoStatusEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets status_message.
     *
     * @return string|null
     */
    public function getStatusMessage()
    {
        return $this->container['status_message'];
    }

    /**
     * Sets status_message.
     *
     * @param string|null $status_message The <b>statusMessage</b> field contains additional information on the status. For example, information on why processing might have failed or if the video was blocked.
     *
     * @return self
     */
    public function setStatusMessage($status_message)
    {
        $this->container['status_message'] = $status_message;

        return $this;
    }

    /**
     * Gets thumbnail.
     *
     * @return \TNT\Ebay\Commerce\MediaBeta\V1\Model\Image|null
     */
    public function getThumbnail()
    {
        return $this->container['thumbnail'];
    }

    /**
     * Sets thumbnail.
     *
     * @param \TNT\Ebay\Commerce\MediaBeta\V1\Model\Image|null $thumbnail thumbnail
     *
     * @return self
     */
    public function setThumbnail($thumbnail)
    {
        $this->container['thumbnail'] = $thumbnail;

        return $this;
    }

    /**
     * Gets title.
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title.
     *
     * @param string|null $title the title of the video
     *
     * @return self
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets video_id.
     *
     * @return string|null
     */
    public function getVideoId()
    {
        return $this->container['video_id'];
    }

    /**
     * Sets video_id.
     *
     * @param string|null $video_id the unique ID of the video
     *
     * @return self
     */
    public function setVideoId($video_id)
    {
        $this->container['video_id'] = $video_id;

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
