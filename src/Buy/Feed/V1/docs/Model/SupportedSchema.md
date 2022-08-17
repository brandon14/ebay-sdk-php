# # SupportedSchema

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**definition** | **string** | A list of the fields that will be returned in the feed file.&lt;br /&gt;&lt;br /&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;span style&#x3D;\&quot;color:#004680\&quot;&gt;&lt;strong&gt;Note:&lt;/strong&gt;&lt;/span&gt; Refer to &lt;a href&#x3D;\&quot;/api-docs/buy/feed/v1/static/overview.html#feed-types\&quot; target&#x3D;\&quot;_blank\&quot;&gt;Supported feed types&lt;/a&gt; to learn about the feed fields that are included in each supported feed type.&lt;/span&gt; | [optional]
**deprecated** | **bool** | Indicates whether the schema is still functional or deprecated. One of either &lt;code&gt;true&lt;/code&gt; or &lt;code&gt;false&lt;/code&gt;. | [optional]
**formats** | **string[]** | An list of the available formats in which the schema can be downloaded. Currently only TSV (Tab Separated Values) is supported. | [optional]
**schema_version** | **string** | The version of the &lt;b&gt;Feed&lt;/b&gt; API schema under which the feed type was created.&lt;br /&gt;&lt;br /&gt;&lt;b&gt;Example:&lt;/b&gt; 1.0. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
