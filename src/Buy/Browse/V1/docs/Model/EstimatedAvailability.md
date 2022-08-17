# # EstimatedAvailability

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**availability_threshold** | **int** | This field is return only when the seller sets their &#39;&lt;a href&#x3D;\&quot;#display-item-quantity\&quot;&gt;display item quantity&lt;/a&gt;&#39; preference to &lt;b&gt; Display \&quot;More than 10 available\&quot; in your listing (if applicable)&lt;/b&gt;. The value of this field will be \&quot;10\&quot;, which is the threshold value. &lt;br /&gt;&lt;br /&gt;Code so that your app gracefully handles any future changes to this value. | [optional]
**availability_threshold_type** | **string** | &lt;a name&#x3D;\&quot;display-item-quantity\&quot;&gt;&lt;/a&gt; This field is return only when the seller sets their &lt;b&gt; Display Item Quantity&lt;/b&gt; preference to &lt;b&gt; Display \&quot;More than 10 available\&quot; in your listing (if applicable)&lt;/b&gt;. The value of this field will be &lt;code&gt; MORE_THAN&lt;/code&gt;. This indicates that the seller has more than the &#39;quantity display preference&#39;, which is 10, in stock for this item.    &lt;br /&gt;&lt;br /&gt; The following are the display item quantity preferences the seller can set. &lt;br /&gt;&lt;ul&gt;&lt;li&gt; &lt;b&gt; Display \&quot;More than 10 available\&quot; in your listing (if applicable) &lt;/b&gt;&lt;ul&gt; &lt;li&gt;If the seller enables this preference, this field is returned as long as there are more than 10 of this item in inventory.&lt;/li&gt;  &lt;li&gt; If the quantity is equal to 10 or drops below 10, this field is not returned and the estimated quantity of the item is returned in the &lt;b&gt; estimatedAvailableQuantity&lt;/b&gt; field.&lt;/li&gt;&lt;/ul&gt; &lt;/li&gt; &lt;li&gt; &lt;b&gt; Display the exact quantity in your items&lt;/b&gt; &lt;br /&gt;If the seller enables this preference, the &lt;b&gt; availabilityThresholdType&lt;/b&gt; and &lt;b&gt; availabilityThreshold&lt;/b&gt; fields are not returned and the estimated quantity of the item is returned in the &lt;b&gt; estimatedAvailableQuantity&lt;/b&gt; field.&lt;br /&gt;&lt;br /&gt;&lt;b&gt; Note: &lt;/b&gt; Because the quantity of an item can change several times within a second, it is impossible to return the exact quantity. &lt;/li&gt;&lt;/ul&gt;   &lt;br /&gt;Code so that your app gracefully handles any future changes to these preferences. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/buy/browse/types/gct:AvailabilityThresholdEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**delivery_options** | **string[]** | An array of available delivery options. &lt;br&gt;&lt;br&gt;&lt;b&gt; Valid Values: &lt;/b&gt; SHIP_TO_HOME, SELLER_ARRANGED_LOCAL_PICKUP, IN_STORE_PICKUP, PICKUP_DROP_OFF, or DIGITAL_DELIVERY &lt;br /&gt;&lt;br /&gt;Code so that your app gracefully handles any future changes to this list. | [optional]
**estimated_availability_status** | **string** | An enumeration value representing the inventory status of this item.&lt;br /&gt;&lt;br /&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt; Note: &lt;/b&gt;Be sure to review the &lt;b&gt;itemEndDate&lt;/b&gt; field to determine whether the item is available for purchase.&lt;/span&gt;&lt;br&gt;&lt;br&gt;&lt;b&gt; Valid Values: &lt;/b&gt; IN_STOCK, LIMITED_STOCK, or OUT_OF_STOCK &lt;br /&gt;&lt;br /&gt;Code so that your app gracefully handles any future changes to this list. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/buy/browse/types/gct:AvailabilityStatusEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**estimated_available_quantity** | **int** | The estimated number of this item that are available for purchase. Because the quantity of an item can change several times within a second, it is impossible to return the exact quantity. So instead of returning quantity, the estimated availability of the item is returned. | [optional]
**estimated_sold_quantity** | **int** | The estimated number of this item that have been sold. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)