# TNT\Ebay\Buy\Browse\V1\SearchByImageApi

All URIs are relative to https://api.ebay.com/buy/browse/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**searchByImage()**](SearchByImageApi.md#searchByImage) | **POST** /item_summary/search_by_image | 


## `searchByImage()`

```php
searchByImage($aspect_filter, $category_ids, $charity_ids, $fieldgroups, $filter, $limit, $offset, $sort, $search_by_image_request): \TNT\Ebay\Buy\Browse\V1\Model\SearchPagedCollection
```



<img src=\"/cms/img/docs/experimental-icon.svg\" class=\"legend-icon experimental-icon\" alt=\"Experimental Release\" title=\"Experimental Release\">  This is an <a href=\"https://developer.ebay.com/api-docs/static/versioning.html#experimental \">Experimental</a> method. <p>This method searches for eBay items based on a image and retrieves summaries of the items. You pass in a Base64 image in the request payload and can refine the search by category, or eBay product ID (ePID), or a combination of these using URI parameters.  <br /><br />To get the Base64 image string, you can use sites such as <a href=\"https://codebeautify.org/image-to-base64-converter \" target=\"_blank\">https://codebeautify.org/image-to-base64-converter</a>. </p><p>This method also supports the following:  <ul> <li>Filtering by the value of one or multiple fields, such as listing format, item condition, price range, location, and more.  For the fields supported by this method, see the <a href=\"#uri.filter\">filter</a> parameter.</li><li>Filtering by item aspects using the <a href=\"#uri.aspect_filter\">aspect_filter</a> parameter. </li>  </ul></p>  <p>For details and examples of these capabilities, see <a href=\"/api-docs/buy/static/api-browse.html\">Browse API</a> in the Buying Integration Guide.</p><h3><b>Pagination and sort controls</b></h3>  <p>There are pagination controls (<b>limit</b> and <b>offset</b> fields) and <b> sort</b> query parameters that control/sort the data that is returned. By default, the results are sorted by &quot;Best Match&quot;. For more information about  Best Match, see the eBay help page <a href=\"https://pages.ebay.com/help/sell/searchstanding.html \" target=\"_blank\">Best Match</a>.  </p>    <h3><b> URLs for this method</b></h3><p><ul><li><b>Production URL:</b> <code>https://api.ebay.com/buy/browse/v1/item_summary/search_by_image?</code></li><li><b> Sandbox URL:  </b>Due to the data available, this method is not supported in the eBay Sandbox. To test your integration, use the Production URL.</li></ul></p><h3><b> Request headers</b></h3> This method uses the  <b>X-EBAY-C-ENDUSERCTX</b> request header to support revenue sharing for eBay Partner Networks and to improve the accuracy of shipping and delivery time estimations. For details see, <a href=\"/api-docs/buy/static/api-browse.html#Headers\">Request headers</a> in the Buying Integration Guide.   <h3><b>URL Encoding for Parameters</b></h3> <p>Query parameter values need to be URL encoded. For details, see <a href=\"/api-docs/static/rest-request-components.html#parameters\">URL encoding query parameter values</a>.  For readability, code examples in this document have not been URL encoded.</p>  <h3><b>Restrictions </b></h3> <p>This method can return a maximum of 10,000 items. For a list of supported sites and other restrictions, see <a href=\"/api-docs/buy/browse/overview.html#API\">API Restrictions</a>.</p> <span class=\"tablenote\"><b>eBay Partner Network: </b> In order to receive a commission for your sales, you must use the URL returned in the <code>itemAffiliateWebUrl</code> field to forward your buyer to the ebay.com site. </span>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Buy\Browse\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Buy\Browse\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Buy\Browse\V1\Api\SearchByImageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$aspect_filter = 'aspect_filter_example'; // string | This field lets you filter by item aspects. The aspect name/value pairs and category, which is required, is used to limit the results to specific aspects of the item. For example, in a clothing category one aspect pair would be Color/Red. <br /><br />For example, the method below uses the category ID for Women's Clothing. This will return only items for a woman's red shirt.<br /><br /><code>category_ids=15724&aspect_filter=categoryId:15724,Color:{Red}</code>  <br /><br /><b>Required: </b> The category ID is required <i>twice</i>; once as a URI parameter and as part of the <b> aspect_filter</b>. For implementation help, refer to eBay API documentation at https://developer.ebay.com/api-docs/buy/browse/types/gct:AspectFilter
$category_ids = 'category_ids_example'; // string | The category ID is used to limit the results. This field can have one category ID or a comma separated list of IDs.    <br /><br /><span class=\"tablenote\"><b> Note: </b>Currently, you can pass in only one category ID per request.</span> <br /> <br />You can also use any combination of the <b> category_Ids</b> and <b> epid</b> fields. This gives you additional control over the result set.<br /> <br />The list of eBay category IDs is not published and category IDs are not the same across all the eBay marketplaces. You can use the following techniques to find a category by site: <ul> <li>Use the <a href=\"https://pages.ebay.com/sellerinformation/news/categorychanges.html \" target=\"_blank\">Category Changes page</a>.</li> <li>Use the Taxonomy API. For details see <a href=\"/api-docs/buy/buy-categories.html\">Get Categories for Buy APIs</a>. </li>  <li>Submit the following method to get the <b> dominantCategoryId</b> for an item. <br /><code>/buy/browse/v1/item_summary/search?q=<em > keyword</em>&fieldgroups=ASPECT_REFINEMENTS  </code></li></ul>   <b> Required: </b> The method must have <b> category_ids</b> or <b> epid</b> (or any combination of these)
$charity_ids = 'charity_ids_example'; // string | The charity ID is used to limit the results to only items associated with the specified charity. This field can have one charity ID or a comma separated list of IDs. The method will return all the items associated with the specified charities.<br /><br /> <b>For example:</b><br /><code>/buy/browse/v1/item_summary/search?charity_ids=13-1788491,300108469</code><br /><br />The charity ID is the charity's registration ID, also known as the Employer Identification Number (EIN). In GB, it is the Charity Registration Number (CRN), commonly called \"Charity Number\".   <ul><li>To find the charities eBay supports, you can search for a charity at <a href=\"https://charity.ebay.com/search \" target=\"_blank\">Charity Search </a> or go to <a href=\"https://www.ebay.com/b/Charity/bn_7114598164 \" target=\"_blank\">Charity Shop</a>.</li>   <li>To find the charity ID of a specific charity, click on a charity and use the EIN number. For example, the charity ID for  <a href=\"https://charity.ebay.com/charity/American-Red-Cross/3843 \" target=\"_blank\">American Red Cross</a>, is <code>530196605</code>.</li></ul> You  can also use any combination of the <code>category_Ids</code> and <code>q</code> fields with a <code>charity_Ids</code> to filter the result set. This gives you additional control over the result set. <br /><br /><b>Restriction: </b> This is supported only on the US and GB marketplaces.<br /><br /><b>Maximum: </b> 20 IDs <br /><br /><b>Required:</b> One ID
$fieldgroups = 'fieldgroups_example'; // string | This field is a comma separated list of values that lets you control what is returned in the response. The default is <b>MATCHING_ITEMS</b>, which returns the items that match the keyword or category specified. The other values return data that can be used to create histograms or provide additional information.<br /><br /><b>Valid Values:</b><ul><li><b>ASPECT_REFINEMENTS</b> - This returns the <a href=\"#response.refinement.aspectDistributions\">aspectDistributions</a> container, which has the <b>dominantCategoryId</b>, <b>matchCount</b>, and <b>refinementHref</b> for the various aspects of the items found. For example, if you searched for 'Mustang', some of the aspect would be <b>Model Year</b>,  <b>Exterior Color</b>, <b>Vehicle Mileage</b>, etc.<br /><br /><span class=\"tablenote\"><b>Note:</b> ASPECT_REFINEMENTS are category specific.</span></li><li><b>BUYING_OPTION_REFINEMENTS</b> - This returns the <a href=\"#response.refinement.buyingOptionDistributions\">buyingOptionDistributions</a>  container, which has the <b>matchCount</b> and <b>refinementHref</b> for <b>AUCTION</b>, <b>FIXED_PRICE</b> (Buy It Now), and <b>CLASSIFIED_AD</b> items.</li><li><b>CATEGORY_REFINEMENTS</b> - This returns the <a href=\"#response.refinement.categoryDistributions\">categoryDistributions</a> container, which has the categories that the item is in.</li><li><b>CONDITION_REFINEMENTS</b> - This returns the <a href=\"#response.refinement.conditionDistributions\">conditionDistributions</a> container, such as <b> NEW</b>, <b> USED</b>, etc. Within these groups are multiple states of the condition. For example, <b>New</b> can be New without tag, New in box, New without box, etc.</li><li><b>EXTENDED</b> - This returns the <a href=\"/api-docs/buy/browse/resources/item_summary/methods/search#response.itemSummaries.shortDescription\">shortDescription</a> field, which provides condition and item aspect information and the <a href=\"/api-docs/buy/browse/resources/item_summary/methods/search#response.itemSummaries.itemLocation.city\">itemLocation.city</a> field.</li><li><b>MATCHING_ITEMS</b> - This is meant to be used with one or more of the refinement values above. You use this to return the specified refinements and all the matching items.</li><li><b>FULL</b> - This returns all the refinement containers and all the matching items.</li></ul>Code so that your app gracefully handles any future changes to this list.<br /><br /><b>Default:</b> MATCHING_ITEMS
$filter = 'filter_example'; // string | An array of field filters that can be used to limit/customize the result set. <br /><br /><b> For example: </b><br /><code>/buy/browse/v1/item_summary/search?q=shirt&filter=price:[10..50]</code><br /><br />You can also combine filters. <br /><code>/buy/browse/v1/item_summary/search?q=shirt&filter=price:[10..50],sellers:{rpseller|bigSal}</code><br /><br /><span class=\"tablenote\"><span style=\"color:#004680\"><strong>Note:</strong></span> Refer to <a href=\"/api-docs/buy/static/ref-buy-browse-filters.html\">Buy API Field Filters</a> for details and examples of all supported filters.</span> For implementation help, refer to eBay API documentation at https://developer.ebay.com/api-docs/buy/browse/types/cos:FilterField
$limit = 'limit_example'; // string | The number of items, from the result set, returned in a single page.  <br /><br /><b> Default:</b> 50   <br /> <br /><b> Maximum number of items per page (limit): </b>200  <br /> <br /> <b> Maximum number of items in a result set: </b> 10,000
$offset = 'offset_example'; // string | The number of items to skip in the result set. This is used with the <b> limit</b> field to control the pagination of the output.  <br /><br />If <b> offset</b> is 0 and <b> limit</b> is 10, the method will retrieve items 1-10 from the list of items returned, if <b> offset</b> is 10 and <b> limit</b> is 10, the method will retrieve items 11 thru 20 from the list of items returned.  <br /><br /><b> Valid Values</b>: 0-10,000 (inclusive)   <br /> <br /> <b> Default:</b> 0    <br /> <br /> <b> Maximum number of items returned: </b> 10,000
$sort = 'sort_example'; // string | The order and field name that is used to sort the items. <br /><br />You can sort items by price, distance, or listing date. To sort in descending order, insert a hyphen (<code>-</code>) before the name of the sorting option. If no <b>sort</b> parameter is submitted, the result set is sorted by &quot;<a href=\"https://pages.ebay.com/help/sell/searchstanding.html \" target=\"_blank\">Best Match</a>&quot;.<br /><br />Here are some examples showing how to use the <b>sort</b> query parameter:<br /><ul><li><b><code>sort=distance</code></b> - This sorts by <i>distance</i> in ascending order (shortest distance first). This sorting option is only applicable if the <a href=\"/api-docs/buy/static/ref-buy-browse-filters.html#pickupCountry\">pickup</a> filters are used, and only ascending order is supported.</li><li><b><code>sort=-price</code></b> - This sorts by <i>price + shipping cost</i> in descending order (highest price first). This sorting option (by <i>price</i>) is only guaranteed to work correctly if the <b>X-EBAY-C-ENDUSERCTX</b> request header is used, with the <b>contextualLocation</b> parameter being used to set the delivery country and postal code. Here is an example of how this header would be used to do this (note the URL encoding):<br /><br /><code>X-EBAY-C-ENDUSERCTX: contextualLocation=country%3DUS%2Czip%3D19406</code><br /></li><li><b><code>sort=newlyListed</code></b> - This sorts by <i>listing date</i> (most recently listed/newest items first).</li><li><b><code>sort=endingSoonest</code></b> - This sorts by <i>date/time</i> the listing ends (listings nearest to end date/time first).</li></ul><b>Default:</b> Ascending For implementation help, refer to eBay API documentation at https://developer.ebay.com/api-docs/buy/browse/types/cos:SortField
$search_by_image_request = new \TNT\Ebay\Buy\Browse\V1\Model\SearchByImageRequest(); // \TNT\Ebay\Buy\Browse\V1\Model\SearchByImageRequest | The container for the image information fields.

try {
    $result = $apiInstance->searchByImage($aspect_filter, $category_ids, $charity_ids, $fieldgroups, $filter, $limit, $offset, $sort, $search_by_image_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchByImageApi->searchByImage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aspect_filter** | **string**| This field lets you filter by item aspects. The aspect name/value pairs and category, which is required, is used to limit the results to specific aspects of the item. For example, in a clothing category one aspect pair would be Color/Red. &lt;br /&gt;&lt;br /&gt;For example, the method below uses the category ID for Women&#39;s Clothing. This will return only items for a woman&#39;s red shirt.&lt;br /&gt;&lt;br /&gt;&lt;code&gt;category_ids&#x3D;15724&amp;aspect_filter&#x3D;categoryId:15724,Color:{Red}&lt;/code&gt;  &lt;br /&gt;&lt;br /&gt;&lt;b&gt;Required: &lt;/b&gt; The category ID is required &lt;i&gt;twice&lt;/i&gt;; once as a URI parameter and as part of the &lt;b&gt; aspect_filter&lt;/b&gt;. For implementation help, refer to eBay API documentation at https://developer.ebay.com/api-docs/buy/browse/types/gct:AspectFilter | [optional]
 **category_ids** | **string**| The category ID is used to limit the results. This field can have one category ID or a comma separated list of IDs.    &lt;br /&gt;&lt;br /&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt; Note: &lt;/b&gt;Currently, you can pass in only one category ID per request.&lt;/span&gt; &lt;br /&gt; &lt;br /&gt;You can also use any combination of the &lt;b&gt; category_Ids&lt;/b&gt; and &lt;b&gt; epid&lt;/b&gt; fields. This gives you additional control over the result set.&lt;br /&gt; &lt;br /&gt;The list of eBay category IDs is not published and category IDs are not the same across all the eBay marketplaces. You can use the following techniques to find a category by site: &lt;ul&gt; &lt;li&gt;Use the &lt;a href&#x3D;\&quot;https://pages.ebay.com/sellerinformation/news/categorychanges.html \&quot; target&#x3D;\&quot;_blank\&quot;&gt;Category Changes page&lt;/a&gt;.&lt;/li&gt; &lt;li&gt;Use the Taxonomy API. For details see &lt;a href&#x3D;\&quot;/api-docs/buy/buy-categories.html\&quot;&gt;Get Categories for Buy APIs&lt;/a&gt;. &lt;/li&gt;  &lt;li&gt;Submit the following method to get the &lt;b&gt; dominantCategoryId&lt;/b&gt; for an item. &lt;br /&gt;&lt;code&gt;/buy/browse/v1/item_summary/search?q&#x3D;&lt;em &gt; keyword&lt;/em&gt;&amp;fieldgroups&#x3D;ASPECT_REFINEMENTS  &lt;/code&gt;&lt;/li&gt;&lt;/ul&gt;   &lt;b&gt; Required: &lt;/b&gt; The method must have &lt;b&gt; category_ids&lt;/b&gt; or &lt;b&gt; epid&lt;/b&gt; (or any combination of these) | [optional]
 **charity_ids** | **string**| The charity ID is used to limit the results to only items associated with the specified charity. This field can have one charity ID or a comma separated list of IDs. The method will return all the items associated with the specified charities.&lt;br /&gt;&lt;br /&gt; &lt;b&gt;For example:&lt;/b&gt;&lt;br /&gt;&lt;code&gt;/buy/browse/v1/item_summary/search?charity_ids&#x3D;13-1788491,300108469&lt;/code&gt;&lt;br /&gt;&lt;br /&gt;The charity ID is the charity&#39;s registration ID, also known as the Employer Identification Number (EIN). In GB, it is the Charity Registration Number (CRN), commonly called \&quot;Charity Number\&quot;.   &lt;ul&gt;&lt;li&gt;To find the charities eBay supports, you can search for a charity at &lt;a href&#x3D;\&quot;https://charity.ebay.com/search \&quot; target&#x3D;\&quot;_blank\&quot;&gt;Charity Search &lt;/a&gt; or go to &lt;a href&#x3D;\&quot;https://www.ebay.com/b/Charity/bn_7114598164 \&quot; target&#x3D;\&quot;_blank\&quot;&gt;Charity Shop&lt;/a&gt;.&lt;/li&gt;   &lt;li&gt;To find the charity ID of a specific charity, click on a charity and use the EIN number. For example, the charity ID for  &lt;a href&#x3D;\&quot;https://charity.ebay.com/charity/American-Red-Cross/3843 \&quot; target&#x3D;\&quot;_blank\&quot;&gt;American Red Cross&lt;/a&gt;, is &lt;code&gt;530196605&lt;/code&gt;.&lt;/li&gt;&lt;/ul&gt; You  can also use any combination of the &lt;code&gt;category_Ids&lt;/code&gt; and &lt;code&gt;q&lt;/code&gt; fields with a &lt;code&gt;charity_Ids&lt;/code&gt; to filter the result set. This gives you additional control over the result set. &lt;br /&gt;&lt;br /&gt;&lt;b&gt;Restriction: &lt;/b&gt; This is supported only on the US and GB marketplaces.&lt;br /&gt;&lt;br /&gt;&lt;b&gt;Maximum: &lt;/b&gt; 20 IDs &lt;br /&gt;&lt;br /&gt;&lt;b&gt;Required:&lt;/b&gt; One ID | [optional]
 **fieldgroups** | **string**| This field is a comma separated list of values that lets you control what is returned in the response. The default is &lt;b&gt;MATCHING_ITEMS&lt;/b&gt;, which returns the items that match the keyword or category specified. The other values return data that can be used to create histograms or provide additional information.&lt;br /&gt;&lt;br /&gt;&lt;b&gt;Valid Values:&lt;/b&gt;&lt;ul&gt;&lt;li&gt;&lt;b&gt;ASPECT_REFINEMENTS&lt;/b&gt; - This returns the &lt;a href&#x3D;\&quot;#response.refinement.aspectDistributions\&quot;&gt;aspectDistributions&lt;/a&gt; container, which has the &lt;b&gt;dominantCategoryId&lt;/b&gt;, &lt;b&gt;matchCount&lt;/b&gt;, and &lt;b&gt;refinementHref&lt;/b&gt; for the various aspects of the items found. For example, if you searched for &#39;Mustang&#39;, some of the aspect would be &lt;b&gt;Model Year&lt;/b&gt;,  &lt;b&gt;Exterior Color&lt;/b&gt;, &lt;b&gt;Vehicle Mileage&lt;/b&gt;, etc.&lt;br /&gt;&lt;br /&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; ASPECT_REFINEMENTS are category specific.&lt;/span&gt;&lt;/li&gt;&lt;li&gt;&lt;b&gt;BUYING_OPTION_REFINEMENTS&lt;/b&gt; - This returns the &lt;a href&#x3D;\&quot;#response.refinement.buyingOptionDistributions\&quot;&gt;buyingOptionDistributions&lt;/a&gt;  container, which has the &lt;b&gt;matchCount&lt;/b&gt; and &lt;b&gt;refinementHref&lt;/b&gt; for &lt;b&gt;AUCTION&lt;/b&gt;, &lt;b&gt;FIXED_PRICE&lt;/b&gt; (Buy It Now), and &lt;b&gt;CLASSIFIED_AD&lt;/b&gt; items.&lt;/li&gt;&lt;li&gt;&lt;b&gt;CATEGORY_REFINEMENTS&lt;/b&gt; - This returns the &lt;a href&#x3D;\&quot;#response.refinement.categoryDistributions\&quot;&gt;categoryDistributions&lt;/a&gt; container, which has the categories that the item is in.&lt;/li&gt;&lt;li&gt;&lt;b&gt;CONDITION_REFINEMENTS&lt;/b&gt; - This returns the &lt;a href&#x3D;\&quot;#response.refinement.conditionDistributions\&quot;&gt;conditionDistributions&lt;/a&gt; container, such as &lt;b&gt; NEW&lt;/b&gt;, &lt;b&gt; USED&lt;/b&gt;, etc. Within these groups are multiple states of the condition. For example, &lt;b&gt;New&lt;/b&gt; can be New without tag, New in box, New without box, etc.&lt;/li&gt;&lt;li&gt;&lt;b&gt;EXTENDED&lt;/b&gt; - This returns the &lt;a href&#x3D;\&quot;/api-docs/buy/browse/resources/item_summary/methods/search#response.itemSummaries.shortDescription\&quot;&gt;shortDescription&lt;/a&gt; field, which provides condition and item aspect information and the &lt;a href&#x3D;\&quot;/api-docs/buy/browse/resources/item_summary/methods/search#response.itemSummaries.itemLocation.city\&quot;&gt;itemLocation.city&lt;/a&gt; field.&lt;/li&gt;&lt;li&gt;&lt;b&gt;MATCHING_ITEMS&lt;/b&gt; - This is meant to be used with one or more of the refinement values above. You use this to return the specified refinements and all the matching items.&lt;/li&gt;&lt;li&gt;&lt;b&gt;FULL&lt;/b&gt; - This returns all the refinement containers and all the matching items.&lt;/li&gt;&lt;/ul&gt;Code so that your app gracefully handles any future changes to this list.&lt;br /&gt;&lt;br /&gt;&lt;b&gt;Default:&lt;/b&gt; MATCHING_ITEMS | [optional]
 **filter** | **string**| An array of field filters that can be used to limit/customize the result set. &lt;br /&gt;&lt;br /&gt;&lt;b&gt; For example: &lt;/b&gt;&lt;br /&gt;&lt;code&gt;/buy/browse/v1/item_summary/search?q&#x3D;shirt&amp;filter&#x3D;price:[10..50]&lt;/code&gt;&lt;br /&gt;&lt;br /&gt;You can also combine filters. &lt;br /&gt;&lt;code&gt;/buy/browse/v1/item_summary/search?q&#x3D;shirt&amp;filter&#x3D;price:[10..50],sellers:{rpseller|bigSal}&lt;/code&gt;&lt;br /&gt;&lt;br /&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;span style&#x3D;\&quot;color:#004680\&quot;&gt;&lt;strong&gt;Note:&lt;/strong&gt;&lt;/span&gt; Refer to &lt;a href&#x3D;\&quot;/api-docs/buy/static/ref-buy-browse-filters.html\&quot;&gt;Buy API Field Filters&lt;/a&gt; for details and examples of all supported filters.&lt;/span&gt; For implementation help, refer to eBay API documentation at https://developer.ebay.com/api-docs/buy/browse/types/cos:FilterField | [optional]
 **limit** | **string**| The number of items, from the result set, returned in a single page.  &lt;br /&gt;&lt;br /&gt;&lt;b&gt; Default:&lt;/b&gt; 50   &lt;br /&gt; &lt;br /&gt;&lt;b&gt; Maximum number of items per page (limit): &lt;/b&gt;200  &lt;br /&gt; &lt;br /&gt; &lt;b&gt; Maximum number of items in a result set: &lt;/b&gt; 10,000 | [optional]
 **offset** | **string**| The number of items to skip in the result set. This is used with the &lt;b&gt; limit&lt;/b&gt; field to control the pagination of the output.  &lt;br /&gt;&lt;br /&gt;If &lt;b&gt; offset&lt;/b&gt; is 0 and &lt;b&gt; limit&lt;/b&gt; is 10, the method will retrieve items 1-10 from the list of items returned, if &lt;b&gt; offset&lt;/b&gt; is 10 and &lt;b&gt; limit&lt;/b&gt; is 10, the method will retrieve items 11 thru 20 from the list of items returned.  &lt;br /&gt;&lt;br /&gt;&lt;b&gt; Valid Values&lt;/b&gt;: 0-10,000 (inclusive)   &lt;br /&gt; &lt;br /&gt; &lt;b&gt; Default:&lt;/b&gt; 0    &lt;br /&gt; &lt;br /&gt; &lt;b&gt; Maximum number of items returned: &lt;/b&gt; 10,000 | [optional]
 **sort** | **string**| The order and field name that is used to sort the items. &lt;br /&gt;&lt;br /&gt;You can sort items by price, distance, or listing date. To sort in descending order, insert a hyphen (&lt;code&gt;-&lt;/code&gt;) before the name of the sorting option. If no &lt;b&gt;sort&lt;/b&gt; parameter is submitted, the result set is sorted by &amp;quot;&lt;a href&#x3D;\&quot;https://pages.ebay.com/help/sell/searchstanding.html \&quot; target&#x3D;\&quot;_blank\&quot;&gt;Best Match&lt;/a&gt;&amp;quot;.&lt;br /&gt;&lt;br /&gt;Here are some examples showing how to use the &lt;b&gt;sort&lt;/b&gt; query parameter:&lt;br /&gt;&lt;ul&gt;&lt;li&gt;&lt;b&gt;&lt;code&gt;sort&#x3D;distance&lt;/code&gt;&lt;/b&gt; - This sorts by &lt;i&gt;distance&lt;/i&gt; in ascending order (shortest distance first). This sorting option is only applicable if the &lt;a href&#x3D;\&quot;/api-docs/buy/static/ref-buy-browse-filters.html#pickupCountry\&quot;&gt;pickup&lt;/a&gt; filters are used, and only ascending order is supported.&lt;/li&gt;&lt;li&gt;&lt;b&gt;&lt;code&gt;sort&#x3D;-price&lt;/code&gt;&lt;/b&gt; - This sorts by &lt;i&gt;price + shipping cost&lt;/i&gt; in descending order (highest price first). This sorting option (by &lt;i&gt;price&lt;/i&gt;) is only guaranteed to work correctly if the &lt;b&gt;X-EBAY-C-ENDUSERCTX&lt;/b&gt; request header is used, with the &lt;b&gt;contextualLocation&lt;/b&gt; parameter being used to set the delivery country and postal code. Here is an example of how this header would be used to do this (note the URL encoding):&lt;br /&gt;&lt;br /&gt;&lt;code&gt;X-EBAY-C-ENDUSERCTX: contextualLocation&#x3D;country%3DUS%2Czip%3D19406&lt;/code&gt;&lt;br /&gt;&lt;/li&gt;&lt;li&gt;&lt;b&gt;&lt;code&gt;sort&#x3D;newlyListed&lt;/code&gt;&lt;/b&gt; - This sorts by &lt;i&gt;listing date&lt;/i&gt; (most recently listed/newest items first).&lt;/li&gt;&lt;li&gt;&lt;b&gt;&lt;code&gt;sort&#x3D;endingSoonest&lt;/code&gt;&lt;/b&gt; - This sorts by &lt;i&gt;date/time&lt;/i&gt; the listing ends (listings nearest to end date/time first).&lt;/li&gt;&lt;/ul&gt;&lt;b&gt;Default:&lt;/b&gt; Ascending For implementation help, refer to eBay API documentation at https://developer.ebay.com/api-docs/buy/browse/types/cos:SortField | [optional]
 **search_by_image_request** | [**\TNT\Ebay\Buy\Browse\V1\Model\SearchByImageRequest**](../Model/SearchByImageRequest.md)| The container for the image information fields. | [optional]

### Return type

[**\TNT\Ebay\Buy\Browse\V1\Model\SearchPagedCollection**](../Model/SearchPagedCollection.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)