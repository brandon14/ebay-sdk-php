# # DiscountSpecification

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**for_each_amount** | [**\TNT\Ebay\Sell\Marketing\V1\Model\Amount**](Amount.md) |  | [optional]
**for_each_quantity** | **int** | The number of items that must be purchased in order to qualify for the discount.  &lt;br&gt;&lt;br&gt;&lt;b&gt;Valid values:&lt;/b&gt; &lt;br&gt;&lt;code&gt; &amp;nbsp; 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, &lt;br&gt; &amp;nbsp; 12, 13, 14, 15, 16, 17, 18, 19 &lt;br&gt; &amp;nbsp; 20, 25, 50, 75, 100&lt;/code&gt; | [optional]
**min_amount** | [**\TNT\Ebay\Sell\Marketing\V1\Model\Amount**](Amount.md) |  | [optional]
**min_quantity** | **int** | The minimum quantity of promoted items that needs to be bought in order to qualify for the promotion&#39;s discount.  &lt;br&gt;&lt;br&gt;&lt;b&gt;Valid values:&lt;/b&gt; &lt;br&gt;&lt;code&gt; &amp;nbsp; 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, &lt;br&gt; &amp;nbsp; 12, 13, 14, 15, 16, 17, 18, 19 &lt;br&gt; &amp;nbsp; 20, 25, 50, 75, 100&lt;/code&gt; | [optional]
**number_of_discounted_items** | **int** | Use this field to configure \&quot;Buy One Get One\&quot; (or &lt;b&gt;BOGO&lt;/b&gt;) promotions.  &lt;br&gt;&lt;br&gt;You must couple this field with &lt;b&gt;forEachQuantity&lt;/b&gt; and an &lt;b&gt;amountOffItem&lt;/b&gt; or &lt;b&gt;percentOffItem&lt;/b&gt; field to configure your BOGO promotion. This field is not valid with order-based promotions. &lt;br&gt;&lt;br&gt;The value of this field represents the number of items to be discounted when other promotion criteria is met. For example, when the buyer adds the number of items identified by the &lt;b&gt;forEachQuantity&lt;/b&gt; value to their cart, they are then eligible to receive the stated discount from an additional number of like items (the number of which is identified by this field) when they add those items to their cart. To receive the discount, the buyer must purchase the number of items indicated by  &lt;b&gt;forEachQuantity&lt;/b&gt; &lt;i&gt;plus&lt;/i&gt; the number indicated by this field.  &lt;br&gt;&lt;br&gt;&lt;b&gt;Valid values:&lt;/b&gt; &lt;br&gt;&lt;code&gt; &amp;nbsp; 1, 2, 3, 4, 5, 6, 7, 8, 9, 10&lt;/code&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
