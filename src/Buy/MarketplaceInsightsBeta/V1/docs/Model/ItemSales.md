# # ItemSales

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**additional_images** | [**\TNT\Ebay\Buy\MarketplaceInsightsBeta\V1\Model\Image[]**](Image.md) | An array of containers with the URLs for the images that are in addition to the primary image.  The primary image is returned in the &lt;b&gt; image.imageUrl&lt;/b&gt; field. | [optional]
**adult_only** | **bool** | This indicates if the item is for  adults only. For more information about adult-only items on eBay, see &lt;a href&#x3D;\&quot;https://pages.ebay.com/help/policies/adult-only.html\&quot; target&#x3D;\&quot;_blank\&quot;&gt;Adult items policy&lt;/a&gt; for sellers and &lt;a href&#x3D;\&quot;https://www.ebay.com/help/terms-conditions/default/searching-adult-items?id&#x3D;4661\&quot; target&#x3D;\&quot;_blank\&quot;&gt;Adult-Only items on eBay&lt;/a&gt; for buyers. | [optional]
**bid_count** | **int** | This integer value indicates the total number of bids that have been placed for an auction item. This field is only returned for auction items. | [optional]
**buying_options** | **string[]** | A comma separated list of the purchase options available for the item, such as FIXED_PRICE, AUCTION.  &lt;ul&gt; &lt;li&gt;&lt;code&gt;FIXED_PRICE&lt;/code&gt; - Returned for fixed-price items (non-auction)&lt;/li&gt;  &lt;li&gt;&lt;code&gt;AUCTION&lt;/code&gt; - Returned for auction items without Buy It Now feature&lt;/li&gt;  &lt;li&gt;&lt;code&gt;FIXED_PRICE&lt;/code&gt; and &lt;code&gt;AUCTION&lt;/code&gt; - Returned for auction items enabled with the Buy It Now feature&lt;/li&gt; &lt;/ul&gt; Code so that your app gracefully handles any future changes to this list. | [optional]
**categories** | [**\TNT\Ebay\Buy\MarketplaceInsightsBeta\V1\Model\Category[]**](Category.md) | This container returns the primary category ID of the item, as well as the secondary category if the item was listed in two categories. | [optional]
**condition** | **string** | The text describing the condition of the item, such as New or Used. For a list of condition names, see &lt;a href&#x3D;\&quot;https://developer.ebay.com/devzone/finding/callref/enums/conditionIdList.html\&quot; target&#x3D;\&quot;_blank\&quot;&gt;Item Condition IDs and Names&lt;/a&gt;.  &lt;br /&gt;&lt;br /&gt;Code so that your app gracefully handles any future changes to this list. | [optional]
**condition_id** | **string** | The identifier of the condition of the item. For example, 1000 is the identifier for NEW. For a list of condition names and IDs, see &lt;a href&#x3D;\&quot;https://developer.ebay.com/devzone/finding/callref/enums/conditionIdList.html\&quot; target&#x3D;\&quot;_blank\&quot;&gt;Item Condition IDs and Names&lt;/a&gt;. &lt;br /&gt;&lt;br /&gt;Code so that your app gracefully handles any future changes to this list. | [optional]
**epid** | **string** | An ePID is the eBay product identifier of a product from the eBay product catalog.  This indicates the product in which the item belongs. | [optional]
**image** | [**\TNT\Ebay\Buy\MarketplaceInsightsBeta\V1\Model\Image**](Image.md) |  | [optional]
**item_affiliate_web_url** | **string** | The URL to the View Item page of the item, which includes the affiliate tracking ID. This field is only returned if the eBay partner  enables affiliate tracking for the item by including the &lt;code&gt;&lt;a href&#x3D;\&quot;/api-docs/buy/static/api-browse.html#Headers\&quot;&gt;X-EBAY-C-ENDUSERCTX&lt;/a&gt;&lt;/code&gt; request header in the method. | [optional]
**item_group_href** | **string** | The HATEOAS reference of the parent page of the item group. An item group is an item that has various aspect differences, such as color, size, storage capacity, etc. &lt;br /&gt; &lt;br /&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt; &lt;b&gt;  Note: &lt;/b&gt;This field is returned only for item groups.&lt;/span&gt; | [optional]
**item_group_type** | **string** | Indicates the item group type. An item group is an item that has various aspect differences, such as color, size, storage capacity, etc. &lt;br /&gt;&lt;br /&gt;Currently, only the &lt;code&gt;SELLER_DEFINED_VARIATIONS&lt;/code&gt; group type is supported and indicates that this is an item group created by the seller.&lt;br /&gt; &lt;br /&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt; &lt;b&gt; Note: &lt;/b&gt;This field is returned only for item groups.&lt;/span&gt;&lt;br /&gt;&lt;br /&gt;Code so that your app gracefully handles any future changes to this list. | [optional]
**item_href** | **string** | The URI of the item. | [optional]
**item_id** | **string** | The unique RESTful identifier of the item. | [optional]
**item_location** | [**\TNT\Ebay\Buy\MarketplaceInsightsBeta\V1\Model\ItemLocation**](ItemLocation.md) |  | [optional]
**item_web_url** | **string** | The URL to the View Item page of the item. | [optional]
**last_sold_date** | **string** | The date the last item was purchased within the last 90 days. The &lt;b&gt;totalSoldQuantity&lt;/b&gt; returns the total number of items that were sold. This field returns the date the last item in that group was sold. | [optional]
**last_sold_price** | [**\TNT\Ebay\Buy\MarketplaceInsightsBeta\V1\Model\ConvertedAmount**](ConvertedAmount.md) |  | [optional]
**seller** | [**\TNT\Ebay\Buy\MarketplaceInsightsBeta\V1\Model\Seller**](Seller.md) |  | [optional]
**thumbnail_images** | [**\TNT\Ebay\Buy\MarketplaceInsightsBeta\V1\Model\Image[]**](Image.md) | An array of thumbnail images for the item. | [optional]
**title** | **string** | The seller-created title of the item.  &lt;br&gt;&lt;br&gt;&lt;b&gt;Maximum Length: &lt;/b&gt; 80 characters | [optional]
**total_sold_quantity** | **int** | The total number of this item that have been sold. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
