# brandon14/ebay-buy-marketplace-insights-beta-v1

<a href=\"https://developer.ebay.com/api-docs/static/versioning.html#limited\" target=\"_blank\"> <img src=\"/cms/img/docs/partners-api.svg\" class=\"legend-icon partners-icon\" title=\"Limited Release\"  alt=\"Limited Release\" />(Limited Release)</a> The Marketplace Insights API provides the ability to search for sold items on eBay by keyword, GTIN, category, and product and returns the of sales history of those items.


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
      "url": "https://github.com/brandon14/ebay-buy-marketplace-insights-beta-v1.git"
    }
  ],
  "require": {
    "brandon14/ebay-buy-marketplace-insights-beta-v1": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/brandon14/ebay-buy-marketplace-insights-beta-v1/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Buy\MarketplaceInsightsBeta\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Buy\MarketplaceInsightsBeta\V1\Api\ItemSalesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$aspect_filter = 'aspect_filter_example'; // string | This field lets you filter by item aspects. The aspect name/value pairs and category, which is required, is used to limit the results to specific aspects of the item. For example, in a clothing category one aspect pair would be Color/Red. The results are returned in the <b>refinement</b> container.   <br /><br />For example, the method below uses the category ID for Women's Clothing. This will return only sold items for a woman's red or blue shirt.   <br /><br /><code>/buy/marketplace_insights/v1_beta/item_sales/search?q=shirt&category_ids=15724&aspect_filter=categoryId:15724,Color:{Red|Blue}</code> <br /><br />To get a list of the aspects pairs and the category, which is returned in the <b> dominantCategoryId</b> field, set <b> fieldgroups</b> to <code>ASPECT_REFINEMENTS</code>.   <br /><br /> <code>/buy/marketplace_insights/v1_beta/item_sales/search?q=shirt&category_ids=15724&fieldgroups=ASPECT_REFINEMENTS</code>  <br /><br /><b>Format: </b> <code><i>aspectName</i>:{<i>value1</i>|<i>value2</i>}</code>    <br /><br /><b>Required: </b> The category ID is required <i>twice</i>; once as a URI parameter and as part of the <b> aspect_filter</b> parameter. For implementation help, refer to eBay API documentation at https://developer.ebay.com/api-docs/buy/marketplace_insights/types/gct:AspectFilter
$category_ids = 'category_ids_example'; // string | The category ID is required and is used to limit the results. For example, if you search for 'shirt' the result set will be very large. But if you also include the category ID <code>137084</code>, the results will be limited to 'Men's Athletic Apparel'. For example: <br /><br /><code>/buy/marketplace-insights/v1_beta/item_sales/search?q=shirt&category_ids=137084</code>                <p>The list of eBay category IDs is not published and category IDs are not the same across all the eBay marketplaces. You can use the following techniques to find a category by site: </p>     <ul> <li>For the US marketplace, use the <a href=\"https://pages.ebay.com/sellerinformation/news/categorychanges.html\" target=\"_blank\">Category Changes page</a>.</li> <li>Use the Taxonomy API. For details see <a href=\"/api-docs/buy/buy-categories.html\">Get Categories for Buy APIs</a>. </li>  </ul>  <b> Usage:</b>  <ul><li>This field can have one category ID or a comma separated list of IDs.</li>    <li>You can use <b>category_ids</b> by itself or use it with any combination of the <b> gtin</b>, <b> epid</b>, and <b> q</b> fields, which gives you additional control over the result set.</li> </ul> <b>Restrictions: </b> <ul>  <li>Partners will be given a list of categories they can use.  </li>  <li>To use a top-level (L1) category, you <b> must</b> also include the <b> q</b>, or <b> gtin</b>, or <b> epid</b>  query parameter.  </li>  </ul> <b>Maximum number of categories:</b> 4
$epid = 'epid_example'; // string | The ePID is the eBay product identifier of a product from the eBay product catalog. This field limits the results to only items in the specified ePID. <br /><br /><code>/buy/marketplace-insights/v1_beta/item_sales/search?epid=241986085&category_ids=168058</code>  <br /><br />You can use the <a href=\"/api-docs/commerce/catalog/resources/product_summary/methods/search\">product_summary/search</a> method in the <b>Catalog</b> API to search for the ePID of the product.   <br /><br /><b> Required: </b> At least 1 <b> category_ids</b>  <br /><b> Maximum: </b> 1 <b>epid</b>    <br /><b>Optional: </b>Any combination of <b> epid</b>,  <b> gtin</b>,  or <b> q</b>
$fieldgroups = 'fieldgroups_example'; // string | This field lets you control what is to be returned in the response and accepts a comma separated list of values. <br /><br />The default is <b> MATCHING_ITEMS</b>, which returns the items that match the keyword or category specified. The other values return data that can be used to create histograms. For code examples see, <a href=\"#request.aspect_filter\">aspect_filter</a>. <br /><br /><b> Valid Values: </b> <ul>    <li><b> ASPECT_REFINEMENTS</b> - This returns the <a href=\"#response.refinement.aspectDistributions\">aspectDistributions</a> container, which has the <b> dominantCategoryId</b>, <b> matchCount</b>, and <b> refinementHref</b> for the various aspects of the items found. For example, if you searched for 'Mustang', some of the aspect would be <b> Model Year</b>,  <b> Exterior Color</b>, <b> Vehicle Mileage</b>, etc. <br /> <br /><span class=\"tablenote\"> <b>Note: </b> ASPECT_REFINEMENTS are category specific.</span> <br /><br /></li>   <li><b> BUYING_OPTION_REFINEMENTS</b> - This returns the <a href=\"#response.refinement.buyingOptionDistributions\">buyingOptionDistributions</a>  container, which has the <b> matchCount</b> and <b> refinementHref</b> for <b> AUCTION</b> and <b> FIXED_PRICE</b> (Buy It Now) items. <br /><br /><span class=\"tablenote\"> <b>Note: </b>Classified items are not supported. </span> <br /><br /> </li>   <li><b> CATEGORY_REFINEMENTS</b> - This returns the <a href=\"#response.refinement.categoryDistributions\">categoryDistributions</a> container, which has the categories that the item is in.   </li>   <li><b> CONDITION_REFINEMENTS</b> - This returns the <a href=\"#response.refinement.conditionDistributions\">conditionDistributions</a>  container, such as <b> NEW</b>, <b> USED</b>, etc. Within these groups are multiple states of the condition. For example, <b> New </b> can be New without tag, New in box, New without box, etc. </li>   <li><b> MATCHING_ITEMS</b> - This is meant to be used with one or more of the refinement values above. You use this to return the specified refinements and all the matching items. </li> <li><b> FULL </b> - This returns all the refinement containers and all the matching items.</li>   </ul> Code so that your app gracefully handles any future changes to this list.  <br /><br /><b>Default: </b> MATCHING_ITEMS
$filter = 'filter_example'; // string | This field supports multiple field filters that can be used to limit/customize the result set. <br /><br />The following lists the supported filters. For details and examples for all the filters, see <a href=\"/api-docs/buy/static/ref-buy-browse-filters.html\">Buy API Field Filters</a>.  <table> <tr> <td><ul>     <li><a href=\"/api-docs/buy/static/ref-buy-browse-filters.html#buyingOptions\">buyingOptions</a> </li>    <li><a href=\"/api-docs/buy/static/ref-buy-browse-filters.html#conditionIds\">conditionIds</a> </li>    <li><a href=\"/api-docs/buy/static/ref-buy-browse-filters.html#conditions\">conditions</a> </li>    <li><a href=\"/api-docs/buy/static/ref-buy-browse-filters.html#itemLocationCountry\">itemLocationCountry</a> </li> </ul> </td>      <td> <ul><li><a href=\"/api-docs/buy/static/ref-buy-browse-filters.html#lastSoldDate\">lastSoldDate</a> </li>    <li><a href=\"/api-docs/buy/static/ref-buy-browse-filters.html#price\">price</a> </li>    <li><a href=\"/api-docs/buy/static/ref-buy-browse-filters.html#priceCurrency\">priceCurrency</a> </li>  </ul></td>  </tr> </table> <br />The following example filters the result set by price. <b>Note: </b>To filter by price, <b>price</b> and <b>priceCurrency</b> must always be used together.   <br /><br /><code>/buy/marketplace-insights/v1_beta/item_sales/search?q=iphone&category_ids=15724&filter=price:[50..500],priceCurrency:USD</code> For implementation help, refer to eBay API documentation at https://developer.ebay.com/api-docs/buy/marketplace_insights/types/cos:FilterField
$gtin = 'gtin_example'; // string | This field lets you search by the Global Trade Item Number of the item as defined by <a href=\"https://www.gtin.info\" target=\"_blank\">https://www.gtin.info</a>. This can be a UPC (Universal Product Code), EAN (European Article Number), or an ISBN (International Standard Book Number) value.        <br /><br /><code>/buy/marketplace-insights/v1_beta/item_sales/search?gtin=241986085&category_ids=9355</code> <br /><br /><b> Required: </b> At least 1 <b> category_ids</b>  <br /><b> Maximum: </b> 1 <b>gtin</b>    <br /><b>Optional: </b>Any combination of <b> epid</b>,  <b> gtin</b>,  or <b> q</b>
$limit = 'limit_example'; // string | The number of items, from the result set, returned in a single page.  <br /><br /><b> Default:</b> 50<br /><b> Maximum number of items per page (limit): </b>200  <br /> <b> Maximum number of items in a result set: </b> 10,000
$offset = 'offset_example'; // string | Specifies the number of items to skip in the result set. This is used with the <b> limit</b> field to control the pagination of the output.  <br /><br />If <b> offset</b> is 0 and <b> limit</b> is 10, the method will retrieve items 1-10 from the list of items returned, if <b> offset</b> is 10 and <b> limit</b> is 10, the method will retrieve items 11 thru 20 from the list of items returned.  <br /><br /><b> Valid Values</b>: 0-10,000 (inclusive) <br /> <b> Default:</b> 0 <br /> <b> Maximum number of items returned: </b> 10,000
$q = 'q_example'; // string | A string consisting of one or more keywords that are used to search for items on eBay. The keywords are handled as follows: <ul><li>If the keywords are separated by a comma, it is treated as an AND. In the following example, the query returns items that have iphone <b> AND</b> ipad.<br /><br /><code>/buy/marketplace-insights/v1_beta/item_sales/search?q=iphone,ipad&category_ids=15724</code>  <br/> </li>  <li> If the keywords are separated by a space, it is treated as an OR.  In the following examples, the query returns items that have iphone <b> OR</b> ipad.   <br /><br /><code>/buy/marketplace-insights/v1_beta/item_sales/search?q=iphone&category_ids=15724&nbsp;ipad</code> <br /><code>/buy/marketplace-insights/v1_beta/item_sales/search?q=iphone,&nbsp;ipad&category_ids=15724</code> <br />   </li></ul> <b> Restriction: </b>The <code>*</code> wildcard character is <b> not</b> allowed in this field. <br /><br /><b> Required: </b> At least 1 <b> category_ids</b>  <br /><b>Optional: </b>Any combination of <b> epid</b>,  <b> gtin</b>,  or <b> q</b>
$sort = 'sort_example'; // string | This field specifies the order and the field name to use to sort the items. To sort in descending order use <code>-</code> before the field name.  Currently, you can only sort by price (in ascending or descending order).     <br /><br />If no sort parameter is submitted, the result set is sorted by  &quot;<a href=\"https://pages.ebay.com/help/sell/searchstanding.html\" target=\"_blank\">Best Match</a>&quot;.     <br /><br />The following are examples of using the <b> sort</b> query parameter.    <br /><br /><table><tr><th>Sort</th><th>Result</th></tr><tr><td><code>&sort=price</code></td><td> Sorts by <b> price</b> in ascending order (lowest price first)</td></tr><tr><td><code>&sort=-price</code></td><td> Sorts by <b> price</b> in descending order (highest price first)</td></tr></table><br /><b> Default: </b> ascending For implementation help, refer to eBay API documentation at https://developer.ebay.com/api-docs/buy/marketplace_insights/types/cos:SortField

try {
    $result = $apiInstance->search($aspect_filter, $category_ids, $epid, $fieldgroups, $filter, $gtin, $limit, $offset, $q, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemSalesApi->search: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.ebay.com/buy/marketplace_insights/v1_beta*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ItemSalesApi* | [**search**](docs/Api/ItemSalesApi.md#search) | **GET** /item_sales/search | 

## Models

- [AspectDistribution](docs/Model/AspectDistribution.md)
- [AspectValueDistribution](docs/Model/AspectValueDistribution.md)
- [BuyingOptionDistribution](docs/Model/BuyingOptionDistribution.md)
- [Category](docs/Model/Category.md)
- [CategoryDistribution](docs/Model/CategoryDistribution.md)
- [ConditionDistribution](docs/Model/ConditionDistribution.md)
- [ConvertedAmount](docs/Model/ConvertedAmount.md)
- [Error](docs/Model/Error.md)
- [ErrorParameter](docs/Model/ErrorParameter.md)
- [Image](docs/Model/Image.md)
- [ItemLocation](docs/Model/ItemLocation.md)
- [ItemSales](docs/Model/ItemSales.md)
- [Refinement](docs/Model/Refinement.md)
- [SalesHistoryPagedCollection](docs/Model/SalesHistoryPagedCollection.md)
- [Seller](docs/Model/Seller.md)

## Authorization

### api_auth

- **Type**: `OAuth`
- **Flow**: `application`
- **Authorization URL**: ``
- **Scopes**: 
    - **https://api.ebay.com/oauth/api_scope/buy.marketplace.insights**: View historical sales data to help buyers make informed purchasing decisions

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `v1_beta.2.2`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
