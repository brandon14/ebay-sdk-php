# brandon14/ebay-buy-feed-beta-v1

<span class=\"tablenote\"><b>Note:</b> This is a <a href=\"https://developer.ebay.com/api-docs/static/versioning.html#limited \" target=\"_blank\"> <img src=\"/cms/img/docs/partners-api.svg\" class=\"legend-icon partners-icon\" title=\"Limited Release\"  alt=\"Limited Release\" />(Limited Release)</a> API available only to select developers approved by business units.</span><br /><br />The Feed API provides the ability to download TSV_GZIP feed files containing eBay items and an hourly snapshot file of the items that have changed within an hour for a specific category, date and marketplace. <p>In addition to the API, there is an open source <a href=\"https://github.com/eBay/FeedSDK \" target=\"_blank\">Feed SDK</a> written in Java that downloads, combines files into a single file when needed, and unzips the entire feed file. It also lets you specify field filters to curate the items in the file.</p>


## Installation & Usage

### Requirements

PHP 7.3 and later.
Should also work with PHP 8.0 but has not been tested.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/brandon14/ebay-buy-feed-beta-v1.git"
    }
  ],
  "require": {
    "brandon14/ebay-buy-feed-beta-v1": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/brandon14/ebay-buy-feed-beta-v1/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Buy\FeedBeta\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Buy\FeedBeta\V1\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = 'accept_example'; // string | The formats that the client accepts for the response.<br /><br />A successful call will always return a TSV.GZIP file; however, unsuccessful calls generate errors that are returned in JSON format.<br /><br /><b>Default:</b> <code>application/json,text/tab-separated-values</code>
$x_ebay_c_marketplace_id = 'x_ebay_c_marketplace_id_example'; // string | The ID of the eBay marketplace where the item is hosted. <b>Note: </b> This value is case sensitive.<br /><br />For example: <br />&nbsp;&nbsp;<code>X-EBAY-C-MARKETPLACE-ID = EBAY_US</code>  <br /><br /> For a list of supported sites see, <a href=\"/api-docs/buy/feed/overview.html#API\">API Restrictions</a>.
$range = 'range_example'; // string | <a name=\"range-header\"></a>This header specifies the range in bytes of the chunks of the gzip file being returned. <br /><br /><b> Format:</b> <code >bytes=<em>startpos</em>-<em>endpos</em></code><br /><br />  For example, the following retrieves the first 10 MBs of the feed file. <br /><br />&nbsp;&nbsp;<code>Range bytes=0-10485760</code> <br /><br />For more information about using this header, see <a href=\"/api-docs/buy/static/api-feed.html#retrv-gzip\">Retrieving a gzip feed file</a>. <br /><br /><b>Maximum:</b> 100 MB (10MB in the Sandbox)
$feed_scope = 'feed_scope_example'; // string | Specifies the type of feed file to return. <br /><br /><b>Valid Values: </b>   <ul> <li><b> NEWLY_LISTED</b> - Returns the daily <b>Item</b> feed file containing all Good 'Til Cancelled items that were listed on the day specified by the <b> date</b> parameter in the category specified by the <b> category_id</b> parameter.<br /><br /><code>/item?feed_scope=NEWLY_LISTED&category_id=15032&date=20170925</code></li><li><b>ALL_ACTIVE</b> - Returns the weekly <b>Item Bootstrap</b> feed file containing all the Good 'Til Cancelled items in the category specified by the <b>category_id</b> parameter.<br /><br /><span class=\"tablenote\"><b>Note:</b> Bootstrap files are generated every Tuesday and the file is available on Wednesday. However, the exact time the file is available can vary so we recommend you download the Bootstrap file on Thursday. The items in the file are the items that were in the specified category on Sunday.</span> <br /><br /><code>/item?feed_scope=ALL_ACTIVE&category_id=15032</code>  </ul>
$category_id = 'category_id_example'; // string | An eBay top-level category ID of the items to be returned in the feed file. <br /> <br />The list of eBay category IDs changes over time and category IDs are not the same across all the eBay marketplaces. To get a list of the top-level categories for a marketplace, you can use the Taxonomy API <a href=\"/api-docs/commerce/taxonomy/resources/category_tree/methods/getCategoryTree\">getCategoryTree</a> method. This method retrieves the complete category tree for the marketplace. The top-level categories are identified by the <b>categoryTreeNodeLevel</b> field. <br /><br /><b>For example:</b><br />&nbsp;&nbsp;<code>\"categoryTreeNodeLevel\": 1</code> <br /><br />For details see <a href=\"/api-docs/buy/buy-categories.html\">Get Categories for Buy APIs</a>. </li>  </ul> <br /><br />   <b>Restriction:</b> Must be a top-level (L1) category other than Real Estate. Items listed under Real Estate L1 categories are excluded from all feeds in all marketplaces.
$date = 'date_example'; // string | The date of the daily <b>Item</b> feed file (<b>feed_scope</b>=<code>NEWLY_LISTED</code>) you want. <p>The <b> date</b> is required only for the daily <b>Item</b> feed file. If you specify a date for the <b>Item Bootstrap</b> file (<b>feed_scope</b>=<code>ALL_ACTIVE</code>), the date is ignored and the latest file is returned. The date the <b>Item Bootstrap</b> feed file was generated is returned in the <b>Last-Modified</b> response header.</code></p>    <p>The <b> Item</b> feed files are generated every day and there are 14 daily files available.</p>  <span class=\"tablenote\"> <b>Note: </b><ul>  <li>The daily <b>Item</b> feed files are available each day after 9AM MST (US Mountain Standard Time), which is -7 hours UTC time.</li>    <li>There is a 48 hour latency when generating the <b> Item</b> feed files. This means you can download the file for July 10th on July 12 after 9AM MST. <br /><br /><b>Note: </b> For categories with a large number of items, the latency can be up to 72 hours.</li> </ul></span> <p><b> Format: </b><code>yyyyMMdd</code><br /><br /><b> Requirements: </b> <ul>  <li>Required when <b>feed_scope</b>=<code>NEWLY_LISTED</code> </li>  <li>Must be within 3-14 days in the past</li></ul>

try {
    $result = $apiInstance->getItemFeed($accept, $x_ebay_c_marketplace_id, $range, $feed_scope, $category_id, $date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->getItemFeed: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.ebay.com/buy/feed/v1_beta*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ItemApi* | [**getItemFeed**](docs/Api/ItemApi.md#getitemfeed) | **GET** /item | 
*ItemGroupApi* | [**getItemGroupFeed**](docs/Api/ItemGroupApi.md#getitemgroupfeed) | **GET** /item_group | 
*ItemPriorityApi* | [**getItemPriorityFeed**](docs/Api/ItemPriorityApi.md#getitempriorityfeed) | **GET** /item_priority | 
*ItemSnapshotApi* | [**getItemSnapshotFeed**](docs/Api/ItemSnapshotApi.md#getitemsnapshotfeed) | **GET** /item_snapshot | 

## Models

- [Error](docs/Model/Error.md)
- [ErrorParameter](docs/Model/ErrorParameter.md)
- [Item](docs/Model/Item.md)
- [ItemGroup](docs/Model/ItemGroup.md)
- [ItemGroupResponse](docs/Model/ItemGroupResponse.md)
- [ItemPriority](docs/Model/ItemPriority.md)
- [ItemPriorityResponse](docs/Model/ItemPriorityResponse.md)
- [ItemResponse](docs/Model/ItemResponse.md)
- [ItemSnapshot](docs/Model/ItemSnapshot.md)
- [ItemSnapshotResponse](docs/Model/ItemSnapshotResponse.md)

## Authorization

### api_auth

- **Type**: `OAuth`
- **Flow**: `application`
- **Authorization URL**: ``
- **Scopes**: 
    - **https://api.ebay.com/oauth/api_scope/buy.item.feed**: View curated feeds of eBay items

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `v1_beta.33.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
