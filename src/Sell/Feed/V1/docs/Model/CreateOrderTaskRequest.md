# # CreateOrderTaskRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**feed_type** | **string** | The feed type associated with the task. The only presently supported value is &lt;code&gt;LMS_ORDER_REPORT&lt;/code&gt;. See &lt;a href&#x3D;\&quot;/api-docs/sell/static/feed/lms-feeds-quick-reference.html#merchant-data-reports-download-feed-types\&quot; target&#x3D;\&quot;_blank\&quot;&gt;Report download feed types&lt;/a&gt; for more information. | [optional]
**filter_criteria** | [**\TNT\Ebay\Sell\Feed\V1\Model\OrderFilterCriteria**](OrderFilterCriteria.md) |  | [optional]
**schema_version** | **string** | The schema version of the LMS OrderReport. For the &lt;code&gt;LMS_ORDER_REPORT&lt;/code&gt; feed type, see the &lt;a href&#x3D;\&quot;/devzone/merchant-data/CallRef/OrderReport.html#OrderReport\&quot;&gt;OrderReport&lt;/a&gt; reference page to see the present schema version. The &lt;b&gt; schemaVersion&lt;/b&gt; value is the version number shown at the top of the &lt;b&gt; OrderReport&lt;/b&gt; page. &lt;br /&gt;&lt;br /&gt;&lt;b&gt;Restriction: &lt;/b&gt; This value must be 1113 or higher. The OrderReport schema version is updated about every two weeks. All version numbers are odd numbers (even numbers are skipped). For example, the next release version after &#39;1113&#39; is &#39;1115&#39;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
