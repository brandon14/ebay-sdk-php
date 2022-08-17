# TNT\Ebay\Buy\Browse\V1\ItemApi

All URIs are relative to https://api.ebay.com/buy/browse/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**checkCompatibility()**](ItemApi.md#checkCompatibility) | **POST** /item/{item_id}/check_compatibility | 
[**getItem()**](ItemApi.md#getItem) | **GET** /item/{item_id} | 
[**getItemByLegacyId()**](ItemApi.md#getItemByLegacyId) | **GET** /item/get_item_by_legacy_id | 
[**getItems()**](ItemApi.md#getItems) | **GET** /item/ | 
[**getItemsByItemGroup()**](ItemApi.md#getItemsByItemGroup) | **GET** /item/get_items_by_item_group | 


## `checkCompatibility()`

```php
checkCompatibility($item_id, $x_ebay_c_marketplace_id, $compatibility_payload): \TNT\Ebay\Buy\Browse\V1\Model\CompatibilityResponse
```



This method checks if a product is compatible with the specified item. You can use this method to check the compatibility of cars, trucks, and motorcycles with a specific part listed on eBay. <br /><br />For example, to check the compatibility of a part, you pass in the item ID of the part as a URI parameter and specify all the attributes used to define a specific car in the <b> compatibilityProperties</b> container. If the call is successful, the response will be <b> COMPATIBLE</b>, <b> NOT_COMPATIBLE</b>, or <b> UNDETERMINED</b>. See <a href=\"/api-docs/buy/browse/resources/item/methods/checkCompatibility#response.compatibilityStatus\">compatibilityStatus</a> for details.   <br /><br /> <span class=\"tablenote\"><b> Note: </b> The only products supported are cars, trucks, and motorcycles. </span><p>  To find the attributes and values for a specific marketplace, you can use the compatibility methods in the <a href=\"/api-docs/commerce/taxonomy/resources/methods\">Taxonomy API</a>. You can use this data to create menus to help buyers specify the product, such as their car.</p> <p> For more details and a list of the required attributes for the US marketplace that describe motor vehicles, see <a href=\"/api-docs/buy/static/api-browse.html#Check\">Check compatibility</a> in the Buy Integration Guide</a>.</p>   <p>For an example, see the <a href=\"/api-docs/buy/browse/resources/item/methods/checkCompatibility#h2-samples\">Samples</a> section. </p>    <h3>URLs for this method</h3>  <p><b> Production URL: </b> <code>https://api.ebay.com/buy/browse/v1/item/{item_id}/check_compatibility</code> </p>         <p><span class=\"tablenote\"><b> Note: </b> This method is supported only on Production. </span></p>         <h3><b> Restrictions </b></h3> <p>For a list of supported sites and other restrictions, see <a href=\"/api-docs/buy/browse/overview.html#API\">API Restrictions</a>.</p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Buy\Browse\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Buy\Browse\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Buy\Browse\V1\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_id = 'item_id_example'; // string | The eBay RESTful identifier of an item (such as a part you want to check). This ID is returned by the <b> Browse</b> and <b> Feed</b> API methods.  <br /><br /> <b> RESTful Item ID Format: </b><code>v1</code>|<code><i>#</i></code>|<code><i>#</i></code> <br />For example: <code>v1|2**********2|0</code> or <code>v1|1**********2|4**********2</code> <br /><br />For more information about item ID for RESTful APIs, see the <a href=\"/api-docs/buy/static/api-browse.html#Legacy\">Legacy API compatibility</a> section of the <i>Buy APIs Overview</i>.
$x_ebay_c_marketplace_id = 'x_ebay_c_marketplace_id_example'; // string | The ID of the eBay marketplace you want to use. <b> Note: </b> This value is case sensitive.<br /><br />For example: <br />&nbsp;&nbsp;<code>X-EBAY-C-MARKETPLACE-ID = EBAY_US</code>  <br /><br /> For a list of supported sites see, <a href=\"/api-docs/buy/browse/overview.html#API\">API Restrictions</a>.
$compatibility_payload = new \TNT\Ebay\Buy\Browse\V1\Model\CompatibilityPayload(); // \TNT\Ebay\Buy\Browse\V1\Model\CompatibilityPayload

try {
    $result = $apiInstance->checkCompatibility($item_id, $x_ebay_c_marketplace_id, $compatibility_payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->checkCompatibility: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_id** | **string**| The eBay RESTful identifier of an item (such as a part you want to check). This ID is returned by the &lt;b&gt; Browse&lt;/b&gt; and &lt;b&gt; Feed&lt;/b&gt; API methods.  &lt;br /&gt;&lt;br /&gt; &lt;b&gt; RESTful Item ID Format: &lt;/b&gt;&lt;code&gt;v1&lt;/code&gt;|&lt;code&gt;&lt;i&gt;#&lt;/i&gt;&lt;/code&gt;|&lt;code&gt;&lt;i&gt;#&lt;/i&gt;&lt;/code&gt; &lt;br /&gt;For example: &lt;code&gt;v1|2**********2|0&lt;/code&gt; or &lt;code&gt;v1|1**********2|4**********2&lt;/code&gt; &lt;br /&gt;&lt;br /&gt;For more information about item ID for RESTful APIs, see the &lt;a href&#x3D;\&quot;/api-docs/buy/static/api-browse.html#Legacy\&quot;&gt;Legacy API compatibility&lt;/a&gt; section of the &lt;i&gt;Buy APIs Overview&lt;/i&gt;. |
 **x_ebay_c_marketplace_id** | **string**| The ID of the eBay marketplace you want to use. &lt;b&gt; Note: &lt;/b&gt; This value is case sensitive.&lt;br /&gt;&lt;br /&gt;For example: &lt;br /&gt;&amp;nbsp;&amp;nbsp;&lt;code&gt;X-EBAY-C-MARKETPLACE-ID &#x3D; EBAY_US&lt;/code&gt;  &lt;br /&gt;&lt;br /&gt; For a list of supported sites see, &lt;a href&#x3D;\&quot;/api-docs/buy/browse/overview.html#API\&quot;&gt;API Restrictions&lt;/a&gt;. |
 **compatibility_payload** | [**\TNT\Ebay\Buy\Browse\V1\Model\CompatibilityPayload**](../Model/CompatibilityPayload.md)|  | [optional]

### Return type

[**\TNT\Ebay\Buy\Browse\V1\Model\CompatibilityResponse**](../Model/CompatibilityResponse.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getItem()`

```php
getItem($item_id, $fieldgroups): \TNT\Ebay\Buy\Browse\V1\Model\Item
```



<p>This method retrieves the details of a specific item, such as description, price, category, all item aspects, condition, return policies, seller feedback and score, shipping options, shipping costs, estimated delivery, and other information the buyer needs to make a purchasing decision.</p><p>The Buy APIs are designed to let you create an eBay shopping experience in your app or website. This means you will need to know when something, such as the availability, quantity, etc., has changed in any eBay item you are offering. You can do this easily by setting the <b> fieldgroups</b> URI parameter. This parameter lets you control what is returned in the response.</p>        <p>Setting <b> fieldgroups</b> to <code>COMPACT</code> reduces the response to only those fields that you need in order to check if any item detail has changed.  Setting <b> fieldgroups</b> to <code>PRODUCT</code>, adds additional fields to the default response that return information about the product of the item. You can use either <code>COMPACT</code> or <code>PRODUCT</code> but not both. For more information, see <a href=\"/api-docs/buy/browse/resources/item/methods/getItem#uri.fieldgroups\">fieldgroups</a>.</p>      <h3>URLs for this method</h3>           <p><ul>            <li><b> Production URL: </b> <code>https://api.ebay.com/buy/browse/v1/item/{item_id}</code></li>            <li><b> Sandbox URL:  </b><code>https://api.sandbox.ebay.com/buy/browse/v1/item/{item_id}</code></li>           </ul>    </p>                   <h3><b> Request headers</b></h3> This method uses the  <b>X-EBAY-C-ENDUSERCTX</b> request header to support revenue sharing for eBay Partner Networks and to improve the accuracy of shipping and delivery time estimations.  For details see, <a href=\"/api-docs/buy/static/api-browse.html#Headers\">Request headers</a> in the Buying Integration Guide.     <h3><b> Restrictions </b></h3> <p>For a list of supported sites and other restrictions, see <a href=\"/api-docs/buy/browse/overview.html#API\">API Restrictions</a>.</p> <span class=\"tablenote\"><b>eBay Partner Network: </b> In order to be commissioned for your sales, you must use the URL returned in the <code>itemAffiliateWebUrl</code> field to forward your buyer to the ebay.com site. </span>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Buy\Browse\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Buy\Browse\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Buy\Browse\V1\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_id = 'item_id_example'; // string | The eBay RESTful identifier of an item. This ID is returned by the <b> Browse</b> and <b> Feed</b> API methods.  <br /><br /> <b> RESTful Item ID Format: </b><code>v1</code>|<code><i>#</i></code>|<code><i>#</i></code> <br />For example: <code>v1|2**********2|0</code> or <code>v1|1**********2|4**********2</code> <br /><br />For more information about item ID for RESTful APIs, see the <a href=\"/api-docs/buy/static/api-browse.html#Legacy\">Legacy API compatibility</a> section of the <i>Buy APIs Overview</i>.
$fieldgroups = 'fieldgroups_example'; // string | This parameter lets you control what is returned in the response. If you do not set this field, the method returns all the details of the item.   <br /> <br /> <b> Valid Values: </b> <ul>  <li> <b> PRODUCT</b> - This adds the <code>additionalImages</code>, <code>additionalProductIdentities</code>, <code>aspectGroups</code>, <code>description</code>, <code>gtins</code>, <code>image</code>, and <code>title</code> product fields to the response, which describe the product associated with the item. See <a href=\"/api-docs/buy/browse/resources/item/methods/getItem#response.product\">Product</a> for more information about these fields.</li>          <li><b> COMPACT</b> -  This returns only the following fields, which let you quickly check if the availability or price of the item has changed, if the item has been revised by the seller, or if an item's top-rated plus status has changed for items you have stored.  <ul> <li> <b> itemId</b> - The identifier of the item.</li> <li><b>bidCount</b> - This integer value indicates the total number of bids that have been placed against an auction item.</li> <li><b>currentBidPrice</b> - This container shows the current highest bid for an auction item. This container will only be returned for auction items.</li>  <li><b>eligibleForInlineCheckout</b> - This parameter returns items based on whether or not the items can be purchased using the Buy <a href=\"/api-docs/buy/order/resources/methods\">Order API</a>. <ul> <li>If the value of this field is <code>true</code>, this indicates that the item can be purchased using the <b> Order API</b>. </li>  <li>If the value of this field is <code>false</code>, this indicates that the item cannot be purchased using the <b> Order API</b> and must be purchased on the eBay site.</li> </ul> <li><b> estimatedAvailabilities</b> -  Returns the item availability information, which is based on the item's quantity. <b> Note:</b> Changes in quantity are not tracked by <b>sellerItemRevision</b>.</li> <li><b>itemAffiliateWebURL</b> - The URL of the View Item page of the item, which includes the affiliate tracking ID. This field is only returned if the eBay partner enables affiliate tracking for the item by including the <code>X-EBAY-C-ENDUSERCTX</code> request header in the method.</li><li><b>itemCreationDate</b> - This is a timestamp that indicates the date and time an item listing was created.</li> <li><b>itemEndDate</b> - This is the scheduled end time of the listing.</li> <li><b>ItemWebURL</b> - The URL of the View Item page of the item. This enables you to include a \"Report Item on eBay\" link that takes the buyer to the View Item page on eBay. From there they can report any issues regarding this item to eBay.</li> <li><b>legacyItemId</b> - The unique identifier of the eBay listing that contains the item. This is the traditional/legacy ID that is often seen in the URL of the listing View Item page.</li> <li><b>minimumPriceToBid</b> - This container shows the minimum bid amount that would be accepted as a qualifying bid in an auction listing. This container will only be returned for auction items.</li> <li><b>price</b> - This is tracked by the revision ID but is returned here to enable you to quickly verify the price of the item.</li> <li><b>priorityListing</b> - This field is returned as <code>true</code> if the listing is part of a Promoted Listing campaign. Promoted Listings are available to Above Standard and Top Rated sellers with recent sales activity.</li> <li><b>reservePriceMet</b> - This field indicates whether or not an auction's reserve price (if set by the seller) has been met yet. This field will only be returned for auction items.</li> <li><b> sellerItemRevision</b> - An identifier generated/incremented when a seller revises the item. The following are the two types of item revisions:   <ul>  <li><b> Seller changes</b>, such as changing the title</li>  <li>  <b> eBay system changes</b>, such as changing the quantity when an item is purchased.</li>  </ul> This ID is changed <em>only</em> when the seller makes a change to the item. This means you cannot use this value to determine if the quantity has changed. To check if the quantity has changed, use <b> estimatedAvailabilities.</b></li> <li><b>shippingOptions</b> - A container for the cost, carrier, and other details of shipping options.</li> <li><b>taxes</b> - A container for the tax information for the item, such as the tax jurisdiction, the tax percentage, and the tax type.</li> <li><b> topRatedBuyingExperience</b> - A boolean value indicating if this item is a top-rated plus item. A change in the item's top rated plus standing is not tracked by the revision ID. See <a href=\"/api-docs/buy/browse/resources/item/methods/getItem#response.topRatedBuyingExperience\">topRatedBuyingExperience</a> for more information.</li> <li><b>uniqueBidderCount</b> - This integer value indicates the number of different eBay users who have placed one or more bids on an auction item. This field is only applicable to auction items.</li></ul>    <b> For Example</b> <br /> <br />To check if a stored item's information is current, do following.  <ol>    <li>Pass in the item ID and set <b> fieldgroups</b> to COMPACT. <br /> <br /><code>item/v1|4**********8|0?fieldgroups=COMPACT</code> </li>     <li>Do one of the following:    <ul>     <li>If the <b> sellerItemRevision</b> field is returned and you <em>haven't</em> stored a revision number for this item, record the number and pass in the item ID in the <b> getItem</b> method to get the latest information.</li>   <li>If the revision number is different from the value you have stored, update the value and pass in the item ID in the <b> getItem</b> method to get the latest information.</li>     <li>If the <b> sellerItemRevision</b> field is <em>not</em> returned or has not changed, where needed, update the item information with the information returned in the response.</li>  </ul>  </li> </ol></li> </ul>  </ul>    <p><b> Maximum value: </b> 1 <br />If more than one values is specified, the first value will be used.

try {
    $result = $apiInstance->getItem($item_id, $fieldgroups);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->getItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_id** | **string**| The eBay RESTful identifier of an item. This ID is returned by the &lt;b&gt; Browse&lt;/b&gt; and &lt;b&gt; Feed&lt;/b&gt; API methods.  &lt;br /&gt;&lt;br /&gt; &lt;b&gt; RESTful Item ID Format: &lt;/b&gt;&lt;code&gt;v1&lt;/code&gt;|&lt;code&gt;&lt;i&gt;#&lt;/i&gt;&lt;/code&gt;|&lt;code&gt;&lt;i&gt;#&lt;/i&gt;&lt;/code&gt; &lt;br /&gt;For example: &lt;code&gt;v1|2**********2|0&lt;/code&gt; or &lt;code&gt;v1|1**********2|4**********2&lt;/code&gt; &lt;br /&gt;&lt;br /&gt;For more information about item ID for RESTful APIs, see the &lt;a href&#x3D;\&quot;/api-docs/buy/static/api-browse.html#Legacy\&quot;&gt;Legacy API compatibility&lt;/a&gt; section of the &lt;i&gt;Buy APIs Overview&lt;/i&gt;. |
 **fieldgroups** | **string**| This parameter lets you control what is returned in the response. If you do not set this field, the method returns all the details of the item.   &lt;br /&gt; &lt;br /&gt; &lt;b&gt; Valid Values: &lt;/b&gt; &lt;ul&gt;  &lt;li&gt; &lt;b&gt; PRODUCT&lt;/b&gt; - This adds the &lt;code&gt;additionalImages&lt;/code&gt;, &lt;code&gt;additionalProductIdentities&lt;/code&gt;, &lt;code&gt;aspectGroups&lt;/code&gt;, &lt;code&gt;description&lt;/code&gt;, &lt;code&gt;gtins&lt;/code&gt;, &lt;code&gt;image&lt;/code&gt;, and &lt;code&gt;title&lt;/code&gt; product fields to the response, which describe the product associated with the item. See &lt;a href&#x3D;\&quot;/api-docs/buy/browse/resources/item/methods/getItem#response.product\&quot;&gt;Product&lt;/a&gt; for more information about these fields.&lt;/li&gt;          &lt;li&gt;&lt;b&gt; COMPACT&lt;/b&gt; -  This returns only the following fields, which let you quickly check if the availability or price of the item has changed, if the item has been revised by the seller, or if an item&#39;s top-rated plus status has changed for items you have stored.  &lt;ul&gt; &lt;li&gt; &lt;b&gt; itemId&lt;/b&gt; - The identifier of the item.&lt;/li&gt; &lt;li&gt;&lt;b&gt;bidCount&lt;/b&gt; - This integer value indicates the total number of bids that have been placed against an auction item.&lt;/li&gt; &lt;li&gt;&lt;b&gt;currentBidPrice&lt;/b&gt; - This container shows the current highest bid for an auction item. This container will only be returned for auction items.&lt;/li&gt;  &lt;li&gt;&lt;b&gt;eligibleForInlineCheckout&lt;/b&gt; - This parameter returns items based on whether or not the items can be purchased using the Buy &lt;a href&#x3D;\&quot;/api-docs/buy/order/resources/methods\&quot;&gt;Order API&lt;/a&gt;. &lt;ul&gt; &lt;li&gt;If the value of this field is &lt;code&gt;true&lt;/code&gt;, this indicates that the item can be purchased using the &lt;b&gt; Order API&lt;/b&gt;. &lt;/li&gt;  &lt;li&gt;If the value of this field is &lt;code&gt;false&lt;/code&gt;, this indicates that the item cannot be purchased using the &lt;b&gt; Order API&lt;/b&gt; and must be purchased on the eBay site.&lt;/li&gt; &lt;/ul&gt; &lt;li&gt;&lt;b&gt; estimatedAvailabilities&lt;/b&gt; -  Returns the item availability information, which is based on the item&#39;s quantity. &lt;b&gt; Note:&lt;/b&gt; Changes in quantity are not tracked by &lt;b&gt;sellerItemRevision&lt;/b&gt;.&lt;/li&gt; &lt;li&gt;&lt;b&gt;itemAffiliateWebURL&lt;/b&gt; - The URL of the View Item page of the item, which includes the affiliate tracking ID. This field is only returned if the eBay partner enables affiliate tracking for the item by including the &lt;code&gt;X-EBAY-C-ENDUSERCTX&lt;/code&gt; request header in the method.&lt;/li&gt;&lt;li&gt;&lt;b&gt;itemCreationDate&lt;/b&gt; - This is a timestamp that indicates the date and time an item listing was created.&lt;/li&gt; &lt;li&gt;&lt;b&gt;itemEndDate&lt;/b&gt; - This is the scheduled end time of the listing.&lt;/li&gt; &lt;li&gt;&lt;b&gt;ItemWebURL&lt;/b&gt; - The URL of the View Item page of the item. This enables you to include a \&quot;Report Item on eBay\&quot; link that takes the buyer to the View Item page on eBay. From there they can report any issues regarding this item to eBay.&lt;/li&gt; &lt;li&gt;&lt;b&gt;legacyItemId&lt;/b&gt; - The unique identifier of the eBay listing that contains the item. This is the traditional/legacy ID that is often seen in the URL of the listing View Item page.&lt;/li&gt; &lt;li&gt;&lt;b&gt;minimumPriceToBid&lt;/b&gt; - This container shows the minimum bid amount that would be accepted as a qualifying bid in an auction listing. This container will only be returned for auction items.&lt;/li&gt; &lt;li&gt;&lt;b&gt;price&lt;/b&gt; - This is tracked by the revision ID but is returned here to enable you to quickly verify the price of the item.&lt;/li&gt; &lt;li&gt;&lt;b&gt;priorityListing&lt;/b&gt; - This field is returned as &lt;code&gt;true&lt;/code&gt; if the listing is part of a Promoted Listing campaign. Promoted Listings are available to Above Standard and Top Rated sellers with recent sales activity.&lt;/li&gt; &lt;li&gt;&lt;b&gt;reservePriceMet&lt;/b&gt; - This field indicates whether or not an auction&#39;s reserve price (if set by the seller) has been met yet. This field will only be returned for auction items.&lt;/li&gt; &lt;li&gt;&lt;b&gt; sellerItemRevision&lt;/b&gt; - An identifier generated/incremented when a seller revises the item. The following are the two types of item revisions:   &lt;ul&gt;  &lt;li&gt;&lt;b&gt; Seller changes&lt;/b&gt;, such as changing the title&lt;/li&gt;  &lt;li&gt;  &lt;b&gt; eBay system changes&lt;/b&gt;, such as changing the quantity when an item is purchased.&lt;/li&gt;  &lt;/ul&gt; This ID is changed &lt;em&gt;only&lt;/em&gt; when the seller makes a change to the item. This means you cannot use this value to determine if the quantity has changed. To check if the quantity has changed, use &lt;b&gt; estimatedAvailabilities.&lt;/b&gt;&lt;/li&gt; &lt;li&gt;&lt;b&gt;shippingOptions&lt;/b&gt; - A container for the cost, carrier, and other details of shipping options.&lt;/li&gt; &lt;li&gt;&lt;b&gt;taxes&lt;/b&gt; - A container for the tax information for the item, such as the tax jurisdiction, the tax percentage, and the tax type.&lt;/li&gt; &lt;li&gt;&lt;b&gt; topRatedBuyingExperience&lt;/b&gt; - A boolean value indicating if this item is a top-rated plus item. A change in the item&#39;s top rated plus standing is not tracked by the revision ID. See &lt;a href&#x3D;\&quot;/api-docs/buy/browse/resources/item/methods/getItem#response.topRatedBuyingExperience\&quot;&gt;topRatedBuyingExperience&lt;/a&gt; for more information.&lt;/li&gt; &lt;li&gt;&lt;b&gt;uniqueBidderCount&lt;/b&gt; - This integer value indicates the number of different eBay users who have placed one or more bids on an auction item. This field is only applicable to auction items.&lt;/li&gt;&lt;/ul&gt;    &lt;b&gt; For Example&lt;/b&gt; &lt;br /&gt; &lt;br /&gt;To check if a stored item&#39;s information is current, do following.  &lt;ol&gt;    &lt;li&gt;Pass in the item ID and set &lt;b&gt; fieldgroups&lt;/b&gt; to COMPACT. &lt;br /&gt; &lt;br /&gt;&lt;code&gt;item/v1|4**********8|0?fieldgroups&#x3D;COMPACT&lt;/code&gt; &lt;/li&gt;     &lt;li&gt;Do one of the following:    &lt;ul&gt;     &lt;li&gt;If the &lt;b&gt; sellerItemRevision&lt;/b&gt; field is returned and you &lt;em&gt;haven&#39;t&lt;/em&gt; stored a revision number for this item, record the number and pass in the item ID in the &lt;b&gt; getItem&lt;/b&gt; method to get the latest information.&lt;/li&gt;   &lt;li&gt;If the revision number is different from the value you have stored, update the value and pass in the item ID in the &lt;b&gt; getItem&lt;/b&gt; method to get the latest information.&lt;/li&gt;     &lt;li&gt;If the &lt;b&gt; sellerItemRevision&lt;/b&gt; field is &lt;em&gt;not&lt;/em&gt; returned or has not changed, where needed, update the item information with the information returned in the response.&lt;/li&gt;  &lt;/ul&gt;  &lt;/li&gt; &lt;/ol&gt;&lt;/li&gt; &lt;/ul&gt;  &lt;/ul&gt;    &lt;p&gt;&lt;b&gt; Maximum value: &lt;/b&gt; 1 &lt;br /&gt;If more than one values is specified, the first value will be used. | [optional]

### Return type

[**\TNT\Ebay\Buy\Browse\V1\Model\Item**](../Model/Item.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getItemByLegacyId()`

```php
getItemByLegacyId($legacy_item_id, $fieldgroups, $legacy_variation_id, $legacy_variation_sku): \TNT\Ebay\Buy\Browse\V1\Model\Item
```



<p>This method is a bridge between the eBay legacy APIs, such as  <b> Shopping</b>, and <b> Finding</b> and the eBay Buy APIs. There are differences between how legacy APIs and RESTful APIs return the identifier of an \"item\" and what the item ID represents. This method lets you use the legacy item ids retrieve the details of a specific item, such as description, price, and other information the buyer needs to make a purchasing decision. It also returns the RESTful item ID, which you can use with all the Buy API  methods.</p>  <p>For more information about how to use legacy ids with the Buy APIs, see <a href=\"/api-docs/buy/static/api-browse.html#Legacy\">Legacy API compatibility</a> in the Buying Integration guide.</p>  <p>This method returns the item details and requires you to pass in either the item ID of a non-variation item or the item ids of both the parent and child of an item group. An item group is an item that has various aspect differences, such as color, size, storage capacity, etc.</p> <p>When an item group is created, one of the item variations, such as the red shirt size L, is chosen as the \"parent\". All the other items in the group are the children, such as the blue shirt size L, red shirt size M, etc.</p>    <p>The <b> fieldgroups</b> URI parameter lets you control what is returned in the response. Setting <b> fieldgroups</b> to <code>PRODUCT</code>, adds additional fields to the default response that return information about the product of the item. For more information, see <a href=\"/api-docs/buy/browse/resources/item/methods/getItemByLegacyItem#uri.fieldgroups\">fieldgroups</a>.</p>       <h3>URLs for this method</h3>           <p><ul>            <li><b> Production URL: </b> <code>https://api.ebay.com/buy/browse/v1/item/get_item_by_legacy_id?</code></li>            <li><b> Sandbox URL:  </b><code>https://api.sandbox.ebay.com/buy/browse/v1/item/get_item_by_legacy_id?</code></li>           </ul>    </p>              <h3><b> Request headers</b></h3> This method uses the  <b>X-EBAY-C-ENDUSERCTX</b> request header to support revenue sharing for eBay Partner Networks and to improve the accuracy of shipping and delivery time estimations.   For details see, <a href=\"/api-docs/buy/static/api-browse.html#Headers\">Request headers</a> in the Buying Integration Guide.    <h3><b> Restrictions </b></h3> <p>For a list of supported sites and other restrictions, see <a href=\"/api-docs/buy/browse/overview.html#API\">API Restrictions</a>.</p> <span class=\"tablenote\"><b>eBay Partner Network: </b> In order to be commissioned for your sales, you must use the URL returned in the <code>itemAffiliateWebUrl</code> field to forward your buyer to the ebay.com site. </span>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Buy\Browse\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Buy\Browse\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Buy\Browse\V1\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$legacy_item_id = 'legacy_item_id_example'; // string | Specifies either: <ul> <li>The legacy item ID of an item that is <em>not</em> part of a group. </li> <li>The legacy item ID of a group, which is the ID of the \"parent\" of the group of items. <br /> <br /><span class=\"tablenote\"> <b> Note: </b> If you pass in a group ID, you must also use the <b> legacy_variation_id</b> field and pass in the legacy ID of the specific item variation (child ID).</span></li></ul>  Legacy ids are returned by APIs, such as the <a href=\"https://developer.ebay.com/devzone/finding/callref/index.html \" target=\"_blank\">Finding API</a>.  <br /><br />The following is an example of using the value of the <b> ItemID</b> field for a specific item from Finding to get the RESTful <b> itemId</b> value. <br /> <br />&nbsp;&nbsp;&nbsp;<code> browse/v1/item/get_item_by_legacy_id?legacy_item_id=1**********9  </code><br /><br /><b> Maximum: </b> 1
$fieldgroups = 'fieldgroups_example'; // string | This field lets you control what is returned in the response. If you do not set this field, the method returns all the details of the item. <b> Note</b>: In this method, the only value supported is <code>PRODUCT</code>. <p><b> Valid Values: </b><br /><br /> <b> PRODUCT</b> - This adds the <code>additionalImages</code>, <code>additionalProductIdentities</code>, <code>aspectGroups</code>, <code>description</code>, <code>gtins</code>, <code>image</code>, and <code>title</code> fields to the response, which describe the item's product.  See <a href=\"/api-docs/buy/browse/resources/item/methods/getItemByLegacyItem#response.product\">Product</a> for more information about these fields. <br /><br />Code so that your app gracefully handles any future changes to this list.
$legacy_variation_id = 'legacy_variation_id_example'; // string | Specifies the legacy item ID of a specific item in an item group, such as the red shirt size L. <br /><br />Legacy ids are returned by APIs, such as the <a href=\"https://developer.ebay.com/devzone/finding/callref/index.html \" target=\"_blank\">Finding API</a>.     <br /><br /><b> Maximum: </b> 1 <br /><b> Requirement: </b> You must <b> always</b> pass in the <b> legacy_item_id </b> with the <b> legacy_variation_id</b>
$legacy_variation_sku = 'legacy_variation_sku_example'; // string | Specifics the legacy SKU of the item. SKU are item ids created by the seller. <br /><br />Legacy SKUs are returned by eBay the  <a href=\"https://developer.ebay.com/Devzone/shopping/docs/CallRef/index.html \" target=\"_blank\">Shopping API</a>. <br /><br />The following is an example of using the value of the <b> ItemID</b> and <b> SKU</b> fields to get the RESTful <b> itemId</b> value. <br /> <br />&nbsp;&nbsp;&nbsp;<code> browse/v1/item/get_item_by_legacy_id?legacy_item_id=1**********9&amp;legacy_variation_sku=V**********M</code><br /><br /><b> Maximum: </b> 1 <br /><b> Requirement: </b> You must <b> always</b> pass in the <b> legacy_item_id </b> with the <b> legacy_variation_sku</b>

try {
    $result = $apiInstance->getItemByLegacyId($legacy_item_id, $fieldgroups, $legacy_variation_id, $legacy_variation_sku);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->getItemByLegacyId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **legacy_item_id** | **string**| Specifies either: &lt;ul&gt; &lt;li&gt;The legacy item ID of an item that is &lt;em&gt;not&lt;/em&gt; part of a group. &lt;/li&gt; &lt;li&gt;The legacy item ID of a group, which is the ID of the \&quot;parent\&quot; of the group of items. &lt;br /&gt; &lt;br /&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt; &lt;b&gt; Note: &lt;/b&gt; If you pass in a group ID, you must also use the &lt;b&gt; legacy_variation_id&lt;/b&gt; field and pass in the legacy ID of the specific item variation (child ID).&lt;/span&gt;&lt;/li&gt;&lt;/ul&gt;  Legacy ids are returned by APIs, such as the &lt;a href&#x3D;\&quot;https://developer.ebay.com/devzone/finding/callref/index.html \&quot; target&#x3D;\&quot;_blank\&quot;&gt;Finding API&lt;/a&gt;.  &lt;br /&gt;&lt;br /&gt;The following is an example of using the value of the &lt;b&gt; ItemID&lt;/b&gt; field for a specific item from Finding to get the RESTful &lt;b&gt; itemId&lt;/b&gt; value. &lt;br /&gt; &lt;br /&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&lt;code&gt; browse/v1/item/get_item_by_legacy_id?legacy_item_id&#x3D;1**********9  &lt;/code&gt;&lt;br /&gt;&lt;br /&gt;&lt;b&gt; Maximum: &lt;/b&gt; 1 |
 **fieldgroups** | **string**| This field lets you control what is returned in the response. If you do not set this field, the method returns all the details of the item. &lt;b&gt; Note&lt;/b&gt;: In this method, the only value supported is &lt;code&gt;PRODUCT&lt;/code&gt;. &lt;p&gt;&lt;b&gt; Valid Values: &lt;/b&gt;&lt;br /&gt;&lt;br /&gt; &lt;b&gt; PRODUCT&lt;/b&gt; - This adds the &lt;code&gt;additionalImages&lt;/code&gt;, &lt;code&gt;additionalProductIdentities&lt;/code&gt;, &lt;code&gt;aspectGroups&lt;/code&gt;, &lt;code&gt;description&lt;/code&gt;, &lt;code&gt;gtins&lt;/code&gt;, &lt;code&gt;image&lt;/code&gt;, and &lt;code&gt;title&lt;/code&gt; fields to the response, which describe the item&#39;s product.  See &lt;a href&#x3D;\&quot;/api-docs/buy/browse/resources/item/methods/getItemByLegacyItem#response.product\&quot;&gt;Product&lt;/a&gt; for more information about these fields. &lt;br /&gt;&lt;br /&gt;Code so that your app gracefully handles any future changes to this list. | [optional]
 **legacy_variation_id** | **string**| Specifies the legacy item ID of a specific item in an item group, such as the red shirt size L. &lt;br /&gt;&lt;br /&gt;Legacy ids are returned by APIs, such as the &lt;a href&#x3D;\&quot;https://developer.ebay.com/devzone/finding/callref/index.html \&quot; target&#x3D;\&quot;_blank\&quot;&gt;Finding API&lt;/a&gt;.     &lt;br /&gt;&lt;br /&gt;&lt;b&gt; Maximum: &lt;/b&gt; 1 &lt;br /&gt;&lt;b&gt; Requirement: &lt;/b&gt; You must &lt;b&gt; always&lt;/b&gt; pass in the &lt;b&gt; legacy_item_id &lt;/b&gt; with the &lt;b&gt; legacy_variation_id&lt;/b&gt; | [optional]
 **legacy_variation_sku** | **string**| Specifics the legacy SKU of the item. SKU are item ids created by the seller. &lt;br /&gt;&lt;br /&gt;Legacy SKUs are returned by eBay the  &lt;a href&#x3D;\&quot;https://developer.ebay.com/Devzone/shopping/docs/CallRef/index.html \&quot; target&#x3D;\&quot;_blank\&quot;&gt;Shopping API&lt;/a&gt;. &lt;br /&gt;&lt;br /&gt;The following is an example of using the value of the &lt;b&gt; ItemID&lt;/b&gt; and &lt;b&gt; SKU&lt;/b&gt; fields to get the RESTful &lt;b&gt; itemId&lt;/b&gt; value. &lt;br /&gt; &lt;br /&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&lt;code&gt; browse/v1/item/get_item_by_legacy_id?legacy_item_id&#x3D;1**********9&amp;amp;legacy_variation_sku&#x3D;V**********M&lt;/code&gt;&lt;br /&gt;&lt;br /&gt;&lt;b&gt; Maximum: &lt;/b&gt; 1 &lt;br /&gt;&lt;b&gt; Requirement: &lt;/b&gt; You must &lt;b&gt; always&lt;/b&gt; pass in the &lt;b&gt; legacy_item_id &lt;/b&gt; with the &lt;b&gt; legacy_variation_sku&lt;/b&gt; | [optional]

### Return type

[**\TNT\Ebay\Buy\Browse\V1\Model\Item**](../Model/Item.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getItems()`

```php
getItems($item_ids, $item_group_ids): \TNT\Ebay\Buy\Browse\V1\Model\Items
```



This method retrieves the details of specific items that the buyer needs to make a purchasing decision.  <br><br><span class=\"tablenote\"> <b>Note:</b> This is a <a href=\"https://developer.ebay.com/api-docs/static/versioning.html#limited \" target=\"_blank\"> <img src=\"/cms/img/docs/partners-api.svg\" class=\"legend-icon partners-icon\" title=\"Limited Release\"  alt=\"Limited Release\" />(Limited Release)</a> available only to select Partners. <br><br>For this method, only the following fields are returned: <code>bidCount</code>, <code>currentBidPrice</code>, <code>eligibleForInlineCheckout</code>, <code>enabledForGuestCheckout</code>, <code>estimatedAvailabilities</code>, <code>itemAffiliateWebUrl</code>, <code>itemCreationDate</code>, <code>itemId</code>, <code>itemWebUrl</code>, <code>legacyItemId</code>, <code>minimumPriceToBid</code>, <code>price</code>, <code>priorityListing</code>, <code>reservePriceMet</code>, <code>sellerItemRevision</code>, <code>taxes</code>, <code>topRatedBuyingExperience</code>, and <code>uniqueBidderCount</code>.<br /><br />The array <code>shippingOptions</code>, which comprises multiple fields, is also returned.</span> <h3>URLs for this method</h3>           <p><ul>            <li><b> Production URL: </b> <code>https://api.ebay.com/buy/browse/v1/item?</code></li>            <li><b> Sandbox URL:  </b><code>https://api.sandbox.ebay.com/buy/browse/v1/item?</code></li>           </ul>    </p>            <h3><b> Request headers</b></h3> This method uses the  <b>X-EBAY-C-ENDUSERCTX</b> request header to support revenue sharing for eBay Partner Networks and to improve the accuracy of shipping and delivery time estimations.   For details see, <a href=\"/api-docs/buy/static/api-browse.html#Headers\">Request headers</a> in the Buying Integration Guide.   <h3><b> Restrictions </b></h3> <p>For a list of supported sites and other restrictions, see <a href=\"/api-docs/buy/browse/overview.html#API\">API Restrictions</a>.</p> <span class=\"tablenote\"><b>eBay Partner Network:</b> In order to be commissioned for your sales, you must use the URL returned in the itemAffiliateWebUrl field to forward your buyer to the ebay.com site.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Buy\Browse\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Buy\Browse\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Buy\Browse\V1\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_ids = 'item_ids_example'; // string | A list of item IDs. Item IDs are the eBay RESTful identifier of items. <br><br><b> RESTful Item ID Format: </b><code>v1</code>|<code><i>#</i></code>|<code><i>#</i></code><br>For example: <code>v1|2**********2|0</code> or <code>v1|1**********2|4**********2</code> <br><br>In any given request, either item_ids or item_group_ids can be retrieved. Attempting to retrieve both will result in an error. <br><br> In a request, multiple item_ids can be passed as comma separated values.<br><br><b> Maximum allowed itemIDs: </b> 20 <br><br>For more information about item IDs for RESTful APIs, see the <a href=\"/api-docs/buy/static/api-browse.html#Legacy\">Legacy API compatibility</a> section of the <i>Buy APIs Overview</i>.
$item_group_ids = 'item_group_ids_example'; // string | A list of item group IDs. Item group IDs are the eBay RESTful identifier of item groups. <br><br><b> RESTful Group Item ID Format: </b><code>############</code><br>For example: <code>3**********9</code><br><br>In any given request, either item_ids or item_group_ids can be retrieved. Attempting to retrieve both will result in an error.<br><br>In a request, multiple item_group_ids can be passed as comma separated values.<br><br><b> Maximum allowed itemGroupIDs: </b> 10 <br><br>

try {
    $result = $apiInstance->getItems($item_ids, $item_group_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->getItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_ids** | **string**| A list of item IDs. Item IDs are the eBay RESTful identifier of items. &lt;br&gt;&lt;br&gt;&lt;b&gt; RESTful Item ID Format: &lt;/b&gt;&lt;code&gt;v1&lt;/code&gt;|&lt;code&gt;&lt;i&gt;#&lt;/i&gt;&lt;/code&gt;|&lt;code&gt;&lt;i&gt;#&lt;/i&gt;&lt;/code&gt;&lt;br&gt;For example: &lt;code&gt;v1|2**********2|0&lt;/code&gt; or &lt;code&gt;v1|1**********2|4**********2&lt;/code&gt; &lt;br&gt;&lt;br&gt;In any given request, either item_ids or item_group_ids can be retrieved. Attempting to retrieve both will result in an error. &lt;br&gt;&lt;br&gt; In a request, multiple item_ids can be passed as comma separated values.&lt;br&gt;&lt;br&gt;&lt;b&gt; Maximum allowed itemIDs: &lt;/b&gt; 20 &lt;br&gt;&lt;br&gt;For more information about item IDs for RESTful APIs, see the &lt;a href&#x3D;\&quot;/api-docs/buy/static/api-browse.html#Legacy\&quot;&gt;Legacy API compatibility&lt;/a&gt; section of the &lt;i&gt;Buy APIs Overview&lt;/i&gt;. | [optional]
 **item_group_ids** | **string**| A list of item group IDs. Item group IDs are the eBay RESTful identifier of item groups. &lt;br&gt;&lt;br&gt;&lt;b&gt; RESTful Group Item ID Format: &lt;/b&gt;&lt;code&gt;############&lt;/code&gt;&lt;br&gt;For example: &lt;code&gt;3**********9&lt;/code&gt;&lt;br&gt;&lt;br&gt;In any given request, either item_ids or item_group_ids can be retrieved. Attempting to retrieve both will result in an error.&lt;br&gt;&lt;br&gt;In a request, multiple item_group_ids can be passed as comma separated values.&lt;br&gt;&lt;br&gt;&lt;b&gt; Maximum allowed itemGroupIDs: &lt;/b&gt; 10 &lt;br&gt;&lt;br&gt; | [optional]

### Return type

[**\TNT\Ebay\Buy\Browse\V1\Model\Items**](../Model/Items.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getItemsByItemGroup()`

```php
getItemsByItemGroup($item_group_id): \TNT\Ebay\Buy\Browse\V1\Model\ItemGroup
```



<p>This method retrieves the details of the individual items in an item group. An item group is an item that has various aspect differences, such as color, size, storage capacity, etc. </p>  <p>You pass in the item group ID as a URI parameter. You use this method to show the item details of items with multiple aspects, such as color, size, storage capacity, etc.  </p>  <p>This method returns two main containers;  <b> items</b> and <b> commonDescriptions</b>. The <b> items</b> container has an array of  containers with the details of each item in the group. The <b> commonDescriptions</b> container has an array of containers for a description and the item ids of all the items that have this exact description. Because items within an item group often have the same description, this decreases the size of the response. </p>         <h3>URLs for this method</h3>           <p><ul>            <li><b> Production URL: </b> <code>https://api.ebay.com/buy/browse/v1/item/get_items_by_item_group?</code></li>            <li><b> Sandbox URL:  </b><code>https://api.sandbox.ebay.com/buy/browse/v1/item/get_items_by_item_group?</code></li>           </ul>    </p>            <h3><b> Request headers</b></h3> This method uses the  <b>X-EBAY-C-ENDUSERCTX</b> request header to support revenue sharing for eBay Partner Networks and to improve the accuracy of shipping and delivery time estimations.   For details see, <a href=\"/api-docs/buy/static/api-browse.html#Headers\">Request headers</a> in the Buying Integration Guide.   <h3><b> Restrictions </b></h3> <p>For a list of supported sites and other restrictions, see <a href=\"/api-docs/buy/browse/overview.html#API\">API Restrictions</a>.</p> <span class=\"tablenote\"><b>eBay Partner Network: </b> In order to be commissioned for your sales, you must use the URL returned in the <code>itemAffiliateWebUrl</code> field to forward your buyer to the ebay.com site. </span>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Buy\Browse\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Buy\Browse\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Buy\Browse\V1\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_group_id = 'item_group_id_example'; // string | Identifier of the item group to return.  An item group is an item that has various aspect differences, such as color, size, storage capacity, etc. </p> <p>This ID is returned in the <b> itemGroupHref</b> field of the <a href=\"/api-docs/buy/browse/resources/item_summary/methods/search\">search</a> and <a href=\"/api-docs/buy/browse/resources/item/methods/getItem\">getItem</a> methods. <br /><br /><b> For Example: </b><code> https://api.ebay.com/buy/browse/v1/item/get_items_by_item_group?item_group_id=3**********6</code>

try {
    $result = $apiInstance->getItemsByItemGroup($item_group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->getItemsByItemGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_group_id** | **string**| Identifier of the item group to return.  An item group is an item that has various aspect differences, such as color, size, storage capacity, etc. &lt;/p&gt; &lt;p&gt;This ID is returned in the &lt;b&gt; itemGroupHref&lt;/b&gt; field of the &lt;a href&#x3D;\&quot;/api-docs/buy/browse/resources/item_summary/methods/search\&quot;&gt;search&lt;/a&gt; and &lt;a href&#x3D;\&quot;/api-docs/buy/browse/resources/item/methods/getItem\&quot;&gt;getItem&lt;/a&gt; methods. &lt;br /&gt;&lt;br /&gt;&lt;b&gt; For Example: &lt;/b&gt;&lt;code&gt; https://api.ebay.com/buy/browse/v1/item/get_items_by_item_group?item_group_id&#x3D;3**********6&lt;/code&gt; |

### Return type

[**\TNT\Ebay\Buy\Browse\V1\Model\ItemGroup**](../Model/ItemGroup.md)

### Authorization

[api_auth](../../README.md#api_auth), [api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
