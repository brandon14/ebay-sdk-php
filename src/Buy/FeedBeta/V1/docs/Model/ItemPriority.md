# # ItemPriority

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**item_id** | **string** | The unique identifier of an item in eBay RESTful format. An example would be &lt;code&gt;v1|1********2|4********2&lt;/code&gt;. | [optional]
**priority_listing_payload** | **string** | EPN (eBay Partner Network) publishers append this value to their affiliate tracking URL when using an EPN tracking link to track changes that occur to Priority Listing items. &lt;br /&gt;&lt;br /&gt;&lt;b&gt;Example:&lt;/b&gt;&lt;code&gt;_trkparms&#x3D;ispr%3D1&amp;amdata&#x3D;enc%3AAQAFAAAAkB1DmsmXf%2BqZ%2BCEMGdebW6oR75GCMdBmc4MCQ%2FCEPqgKHbT0jdWhPwfY5LdUs6HTaP0eBlwKE7Smy2eDslewF7l3xjwWxjqwzNAnsYgxn2PiGkTKbiQSQytFUiymdtANpk1qOnBOoMGMK%2BWsji7jYlvySSs9o9s24TxD6RqWZpNrltzOU7mfnv3H40SZ3YESzg%3D%3D&lt;/code&gt;&lt;br/&gt;&lt;br /&gt;See &lt;a  href&#x3D;\&quot;https://developer.ebay.com/api-docs/buy/static/ref-epn-link.html\&quot;&gt;Creating an EPN Tracking Link&lt;/a&gt; for information on EPN tracking links. | [optional]
**change_metadata** | **string** | Status change indicator of the listing.&lt;br /&gt;&lt;br /&gt;&lt;b&gt;Values:&lt;/b&gt; &lt;ul&gt;&lt;li&gt;&lt;code&gt;ADDED_TO_CAMPAIGN&lt;/code&gt;&lt;/li&gt;&lt;li&gt;&lt;code&gt;REMOVED_FROM_CAMPAIGN&lt;/code&gt;&lt;/li&gt;&lt;li&gt;&lt;code&gt;TRACKING_PAYLOAD_REFRESHED&lt;/code&gt;&lt;/li&gt;&lt;/ul&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; When a listing is removed from the campaign, &lt;b&gt;PriorityListingPayload&lt;/b&gt; will be empty.&lt;/span&gt;&lt;br /&gt;&lt;br /&gt;When multiple status changes are returned for a listing, the &lt;b&gt;changeMetadata&lt;/b&gt; value will be a pipe-separated string (e.g., &lt;code&gt;ADDED_TO_CAMPAIGN|TRACKING_PAYLOAD_REFRESHED&lt;/code&gt;).&lt;br &gt;&lt;br &gt;To use the returned value, you will need to separate the string by pipe (|). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
